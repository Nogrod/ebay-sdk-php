<?php

namespace Nogrod\eBaySDK\Trading\Client;

use Http\Discovery\Psr17Factory;
use JMS\Serializer\Serializer;
use Nogrod\eBaySDK\Constants\Version;
use Nogrod\eBaySDK\Trading\AbstractRequestType;
use Nogrod\eBaySDK\Trading\XMLRequesterCredentialsType;
use Psr\Http\Client\ClientInterface;

class TradingClient extends EBayAPIBaseClient
{
    public const X_EBAY_API_IAF_TOKEN = 'X-EBAY-API-IAF-TOKEN';

    public const X_EBAY_API_COMPATIBILITY_LEVEL = 'X-EBAY-API-COMPATIBILITY-LEVEL';

    public const X_EBAY_API_DEV_NAME = 'X-EBAY-API-DEV-NAME';

    public const X_EBAY_API_APP_NAME = 'X-EBAY-API-APP-NAME';

    public const X_EBAY_API_CERT_NAME = 'X-EBAY-API-CERT-NAME';

    public const X_EBAY_API_CALL_NAME = 'X-EBAY-API-CALL-NAME';

    public const X_EBAY_API_SITEID = 'X-EBAY-API-SITEID';

    public const PRODUCTION_URL = 'https://api.ebay.com/ws/api.dll';

    public const SANDBOX_URL = 'https://api.sandbox.ebay.com/ws/api.dll';

    public function __construct(array $config = [], Serializer $serializer = null, Psr17Factory $messageFactory = null, ClientInterface $client = null)
    {
        $config = array_merge([
            'sandbox' => false,
            'version' => Version::TRADING,
            'siteId' => null,
            'appId' => null,
            'devId' => null,
            'certId' => null,
            'auth' => null,
            'oauth' => null,
        ], $config);
        parent::__construct($config, $serializer, $messageFactory, $client);
    }

    protected function getUrl(): ?string
    {
        return $this->getConfig('sandbox') ? self::SANDBOX_URL : self::PRODUCTION_URL;
    }

    protected function prepareMessage(string $operation, object $message): object
    {
        if ($message instanceof AbstractRequestType) {
            if ($this->getConfig('oauth') === null && $this->getConfig('auth') !== null) {
                switch ($operation) {
                    case 'FetchToken':
                    case 'RevokeToken':
                    case 'GetTokenStatus':
                    case 'GetSessionID':
                        break;
                    default:
                        $requesterCredentials = new XMLRequesterCredentialsType();
                        $requesterCredentials->setEBayAuthToken($this->getConfig('auth'));
                        $message->setRequesterCredentials($requesterCredentials);
                        break;
                }
            }
        }

        return parent::prepareMessage($operation, $message);
    }

    protected function buildHeaders(string $operation): array
    {
        $headers = [];
        $headers[self::X_EBAY_API_CALL_NAME] = $operation;
        $headers[self::X_EBAY_API_SITEID] = $this->getConfig('siteId');
        $headers[self::X_EBAY_API_COMPATIBILITY_LEVEL] = $this->getConfig('version');
        if ($this->getConfig('oauth') !== null) {
            $headers[self::X_EBAY_API_IAF_TOKEN] = $this->getConfig('oauth');
        }
        switch ($operation) {
            case 'FetchToken':
            case 'RevokeToken':
            case 'GetTokenStatus':
            case 'GetSessionID':
                $headers[self::X_EBAY_API_APP_NAME] = $this->getConfig('appId');
                $headers[self::X_EBAY_API_DEV_NAME] = $this->getConfig('devId');
                $headers[self::X_EBAY_API_CERT_NAME] = $this->getConfig('certId');
                break;
            default:
                break;
        }

        return $headers;
    }
}
