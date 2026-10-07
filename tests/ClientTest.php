<?php

namespace Nogrod\eBaySDK\Tests;

use Nogrod\eBaySDK\Constants\Version;
use Nogrod\eBaySDK\OAuth\Client\OAuthClient;
use Nogrod\eBaySDK\OAuth\GetUserTokenRestRequest;
use Nogrod\eBaySDK\Trading as T;
use Nogrod\eBaySDK\Trading\Client\TradingClient;
use Nogrod\XMLClientRuntime\Exception\UnexpectedFormatException;
use PHPUnit\Framework\TestCase;

/**
 * API calls over a fake HTTP client.
 */
final class ClientTest extends TestCase
{
    private const RESPONSE = <<<'XML'
        <?xml version="1.0" encoding="UTF-8"?>
        <GetItemResponse xmlns="urn:ebay:apis:eBLBaseComponents">
          <Ack>Success</Ack>
          <Item><ItemID>110000000001</ItemID><SKU>SKU-1</SKU><Quantity>3</Quantity></Item>
        </GetItemResponse>
        XML;

    public function testTradingCallSendsHeadersAndBodyAndReadsTheResponse(): void
    {
        $http = new FakeHttpClient(self::RESPONSE);
        $client = new TradingClient(['siteId' => 77, 'oauth' => 'token'], null, $http);
        $request = new T\GetItemRequest();
        $request->setItemID('110000000001');

        $response = $client->getItem($request);

        $this->assertInstanceOf(T\GetItemResponse::class, $response);
        $this->assertSame('SKU-1', $response->getItem()->getSKU());
        $this->assertSame(3, $response->getItem()->getQuantity());

        $sent = $http->request;
        $this->assertSame(TradingClient::PRODUCTION_URL, (string) $sent->getUri());
        $this->assertSame('GetItem', $sent->getHeaderLine('X-EBAY-API-CALL-NAME'));
        $this->assertSame('77', $sent->getHeaderLine('X-EBAY-API-SITEID'));
        $this->assertSame((string) Version::TRADING, $sent->getHeaderLine('X-EBAY-API-COMPATIBILITY-LEVEL'));
        $this->assertSame('token', $sent->getHeaderLine('X-EBAY-API-IAF-TOKEN'));
        $body = (string) $sent->getBody();
        $this->assertStringContainsString('<GetItemRequest xmlns="urn:ebay:apis:eBLBaseComponents"><ItemID>110000000001</ItemID></GetItemRequest>', $body);
        $this->assertStringNotContainsString('RequesterCredentials', $body);
    }

    public function testTradingCallWithAuthNAuthTokenSendsRequesterCredentials(): void
    {
        $http = new FakeHttpClient(self::RESPONSE);
        $client = new TradingClient(['sandbox' => true, 'auth' => 'auth-token'], null, $http);

        $client->getItem(new T\GetItemRequest());

        $this->assertSame(TradingClient::SANDBOX_URL, (string) $http->request->getUri());
        $doc = new \DOMDocument();
        $doc->loadXML((string) $http->request->getBody());
        $xpath = new \DOMXPath($doc);
        $xpath->registerNamespace('e', 'urn:ebay:apis:eBLBaseComponents');
        $this->assertSame('auth-token', $xpath->evaluate('string(/e:GetItemRequest/e:RequesterCredentials/e:eBayAuthToken)'));
    }

    public function testTradingCallRejectsNonXmlResponses(): void
    {
        $client = new TradingClient([], null, new FakeHttpClient('<html>Wartung</html>', 'text/html'));

        $this->expectException(UnexpectedFormatException::class);
        $client->getItem(new T\GetItemRequest());
    }

    public function testOAuthAppTokenWithoutRequest(): void
    {
        $http = new FakeHttpClient('{"access_token":"AT","expires_in":7200,"token_type":"Application Access Token"}', 'application/json');
        $client = new OAuthClient(['appId' => 'app', 'certId' => 'cert', 'ruName' => 'ru'], null, $http);

        $response = $client->getAppToken();

        $this->assertSame('AT', $response->getAccessToken());
        $this->assertSame(7200, $response->getExpiresIn());
        $this->assertSame('grant_type=client_credentials&redirect_uri=ru&scope=https%3A%2F%2Fapi.ebay.com%2Foauth%2Fapi_scope', (string) $http->request->getBody());
        $this->assertSame('Basic '.base64_encode('app:cert'), $http->request->getHeaderLine('Authorization'));
    }

    public function testOAuthIgnoresUnknownResponseFields(): void
    {
        $http = new FakeHttpClient('{"access_token":"AT","refresh_token":"RT","refresh_token_expires_in":47304000,"field_added_later":true}', 'application/json');
        $client = new OAuthClient(['ruName' => 'ru'], null, $http);
        $request = new GetUserTokenRestRequest();
        $request->setCode('code');

        $response = $client->getUserToken($request);

        $this->assertSame('RT', $response->getRefreshToken());
        $this->assertSame(47304000, $response->getRefreshTokenExpiresIn());
        $this->assertSame('grant_type=authorization_code&redirect_uri=ru&code=code', (string) $http->request->getBody());
    }
}
