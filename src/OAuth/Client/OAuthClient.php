<?php

namespace Nogrod\eBaySDK\OAuth\Client;

use Http\Discovery\Psr17Factory;
use Http\Discovery\Psr18ClientDiscovery;
use Http\Message\MessageFactory;
use Nogrod\eBaySDK\OAuth\BaseType;
use Nogrod\eBaySDK\OAuth\GetAppTokenRestRequest;
use Nogrod\eBaySDK\OAuth\GetAppTokenRestResponse;
use Nogrod\eBaySDK\OAuth\GetUserTokenRestRequest;
use Nogrod\eBaySDK\OAuth\GetUserTokenRestResponse;
use Nogrod\eBaySDK\OAuth\RefreshUserTokenRestRequest;
use Nogrod\eBaySDK\OAuth\RefreshUserTokenRestResponse;
use Psr\Http\Client\ClientInterface;

class OAuthClient
{
    public const VERSION = 'v1';

    public const PRODUCTION_URL = 'https://api.ebay.com/identity/v1/oauth2/token';

    public const SANDBOX_URL = 'https://api.sandbox.ebay.com/identity/v1/oauth2/token';

    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Psr17Factory
     */
    protected $messageFactory;

    private $config;

    /**
     * OAuthClient constructor.
     * @param array $config
     * @param Psr17Factory|null $messageFactory
     * @param ClientInterface|null $client
     */
    public function __construct(array $config = [], Psr17Factory $messageFactory = null, ClientInterface $client = null)
    {
        $config = array_merge([
            'sandbox' => false,
            'version' => self::VERSION,
            'appId' => null,
            'devId' => null,
            'certId' => null,
            'ruName' => null,
        ], $config);
        $this->config = $config;
        $this->client = $client ?: Psr18ClientDiscovery::find();
        $this->messageFactory = $messageFactory ?: new Psr17Factory();
    }

    /**
     * @param string $state
     * @param array $scope
     *
     * @return string
     */
    public function getRedirectUrlForUser(string $state, array $scope)
    {
        $url = $this->getConfig('sandbox')
            ? 'https://auth.sandbox.ebay.com/oauth2/authorize?'
            : 'https://auth.ebay.com/oauth2/authorize?';

        $urlParams = [
            'client_id'     => $this->getConfig('appId'),
            'redirect_uri'  => $this->getConfig('ruName'),
            'response_type' => 'code',
            'state'         => $state,
            'scope'         => implode(' ', $scope),
        ];

        return $url.http_build_query($urlParams, '', '&', PHP_QUERY_RFC3986);
    }

    public function getConfig($option = null)
    {
        return $option === null ? $this->config : (isset($this->config[$option]) ? $this->config[$option] : null);
    }

    public function setConfig(array $configuration)
    {
        $this->config = array_merge($this->config, $configuration);
    }

    /**
     * @param RefreshUserTokenRestRequest $request
     *
     * @return RefreshUserTokenRestResponse|null
     */
    public function refreshUserToken(RefreshUserTokenRestRequest $request)
    {
        if (!$request->getGrantType()) {
            $request->setGrantType('refresh_token');
        }

        return $this->call($request, RefreshUserTokenRestResponse::class);
    }

    /**
     * @param GetAppTokenRestRequest|null $request
     *
     * @return GetAppTokenRestResponse|null
     */
    public function getAppToken(GetAppTokenRestRequest $request = null)
    {
        if (!$request->getGrantType()) {
            $request->setGrantType('client_credentials');
        }
        if (!$request->getRedirectUri()) {
            $request->setRedirectUri($this->getConfig('ruName'));
        }
        if (!$request->getScope()) {
            $request->setScope('https://api.ebay.com/oauth/api_scope');
        }

        return $this->call($request, GetAppTokenRestResponse::class);
    }

    /**
     * @param GetUserTokenRestRequest $request
     *
     * @return GetUserTokenRestResponse|null
     */
    public function getUserToken(GetUserTokenRestRequest $request)
    {
        if (!$request->getGrantType()) {
            $request->setGrantType('authorization_code');
        }
        if (!$request->getRedirectUri()) {
            $request->setRedirectUri($this->getConfig('ruName'));
        }

        return $this->call($request, GetUserTokenRestResponse::class);
    }

    private function call(BaseType $request, string $responseClass)
    {
        $response = $this->client->sendRequest($this->buildRequest($request));
        $json = json_decode((string) $response->getBody(), true);
        $result = new $responseClass($response->getStatusCode());
        if (!is_array($json)) {
            return $result;
        }
        if ($result instanceof BaseType) {
            $result->fromArray($json);
        }

        return $result;
    }

    private function buildRequest(BaseType $request)
    {
        return $this->messageFactory->createRequest('POST', $this->getUrl(), $this->buildHeaders(), $this->buildBody($request->toArray()));
    }

    private function getUrl()
    {
        return $this->getConfig('sandbox') ? self::SANDBOX_URL : self::PRODUCTION_URL;
    }

    private function buildHeaders()
    {
        $appId = $this->getConfig('appId');
        $certId = $this->getConfig('certId');

        return [
            'Accept' => 'application/json',
            'Authorization' => 'Basic '.base64_encode($appId.':'.$certId),
            'Content-Type' => 'application/x-www-form-urlencoded',
        ];
    }

    private function buildBody(array $request)
    {
        $params = array_reduce(array_keys($request), function ($carry, $key) use ($request) {
            $value = $request[$key];
            $carry[$key] = is_array($value) ? implode(' ', $value) : $value;
            return $carry;
        }, []);

        return empty($request) ? '' : http_build_query($params, '', '&', PHP_QUERY_RFC3986);
    }
}
