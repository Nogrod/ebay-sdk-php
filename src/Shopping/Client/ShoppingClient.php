<?php

namespace Nogrod\eBaySDK\Shopping\Client;

use Http\Discovery\Psr17Factory;
use JMS\Serializer\Serializer;
use Nogrod\eBaySDK\Constants\Version;
use Psr\Http\Client\ClientInterface;

class ShoppingClient extends ShoppingBaseClient
{
    public const X_EBAY_API_APP_ID = 'X-EBAY-API-APP-ID';

    public const X_EBAY_API_VERSION = 'X-EBAY-API-VERSION';

    public const X_EBAY_API_SITE_ID = 'X-EBAY-API-SITE-ID';

    public const X_EBAY_API_CALL_NAME = 'X-EBAY-API-CALL-NAME';

    public const X_EBAY_API_REQUEST_ENCODING = 'X-EBAY-API-REQUEST-ENCODING';

    public const PRODUCTION_URL = 'http://open.api.ebay.com/shopping';

    public const SANDBOX_URL = 'http://open.api.sandbox.ebay.com/shopping';

    public function __construct(array $config = [], Serializer $serializer = null, Psr17Factory $messageFactory = null, ClientInterface $client = null)
    {
        $config = array_merge([
            'sandbox' => false,
            'version' => Version::SHOPPING,
            'siteId' => null,
            'appId' => null,
        ], $config);
        parent::__construct($config, $serializer, $messageFactory, $client);
    }

    protected function getUrl()
    {
        return $this->getConfig('sandbox') ? self::SANDBOX_URL : self::PRODUCTION_URL;
    }

    protected function buildHeaders(string $operation)
    {
        $headers = [];
        $headers[self::X_EBAY_API_APP_ID] = $this->getConfig('appId');
        $headers[self::X_EBAY_API_SITE_ID] = $this->getConfig('siteId');
        $headers[self::X_EBAY_API_CALL_NAME] = $operation;
        $headers[self::X_EBAY_API_VERSION] = $this->getConfig('version');
        $headers[self::X_EBAY_API_REQUEST_ENCODING] = 'XML';

        return $headers;
    }
}
