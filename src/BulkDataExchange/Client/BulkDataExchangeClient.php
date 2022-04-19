<?php

namespace Nogrod\eBaySDK\BulkDataExchange\Client;

use Http\Client\HttpClient;
use Http\Message\MessageFactory;
use JMS\Serializer\Serializer;
use Nogrod\eBaySDK\Constants\Version;

class BulkDataExchangeClient extends BulkDataExchangeBaseClient
{
    public const X_EBAY_SOA_SERVICE_VERSION = 'X-EBAY-SOA-SERVICE-VERSION';

    public const X_EBAY_SOA_SECURITY_TOKEN = 'X-EBAY-SOA-SECURITY-TOKEN';

    public const X_EBAY_SOA_OPERATION_NAME = 'X-EBAY-SOA-OPERATION-NAME';

    public const PRODUCTION_URL = 'https://webservices.ebay.com/BulkDataExchangeService';

    public const SANDBOX_URL = 'https://webservices.sandbox.ebay.com/BulkDataExchangeService';

    public function __construct(array $config = [], Serializer $serializer = null, MessageFactory $messageFactory = null, HttpClient $client = null)
    {
        $config = array_merge([
            'sandbox' => false,
            'version' => Version::BULKDATAEXCHANGE,
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
        $headers[self::X_EBAY_SOA_SECURITY_TOKEN] = $this->getConfig('auth');
        $headers[self::X_EBAY_SOA_OPERATION_NAME] = $operation;
        $headers[self::X_EBAY_SOA_SERVICE_VERSION] = $this->getConfig('version');

        return $headers;
    }
}
