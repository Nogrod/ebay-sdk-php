<?php

namespace Nogrod\eBaySDK\Finding\Client;

use Http\Client\HttpClient;
use Http\Message\MessageFactory;
use JMS\Serializer\Serializer;
use Nogrod\eBaySDK\Constants\Version;

class FindingClient extends FindingBaseClient
{
    const X_EBAY_SOA_SERVICE_VERSION = 'X-EBAY-SOA-SERVICE-VERSION';

    const X_EBAY_SOA_SECURITY_APPNAME = 'X-EBAY-SOA-SECURITY-APPNAME';

    const X_EBAY_SOA_GLOBAL_ID = 'X-EBAY-SOA-GLOBAL-ID';

    const X_EBAY_SOA_OPERATION_NAME = 'X-EBAY-SOA-OPERATION-NAME';

    const PRODUCTION_URL = 'https://svcs.ebay.com/services/search/FindingService/v1';

    const SANDBOX_URL = 'https://svcs.sandbox.ebay.com/services/search/FindingService/v1';

    public function __construct(array $config = [], Serializer $serializer = null, MessageFactory $messageFactory = null, HttpClient $client = null)
    {
        $config = array_merge([
            'sandbox' => false,
            'version' => Version::FINDING,
            'globalId' => null,
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
        $headers[self::X_EBAY_SOA_SECURITY_APPNAME] = $this->getConfig('appId');
        $headers[self::X_EBAY_SOA_GLOBAL_ID] = $this->getConfig('globalId');
        $headers[self::X_EBAY_SOA_OPERATION_NAME] = $operation;
        $headers[self::X_EBAY_SOA_SERVICE_VERSION] = $this->getConfig('version');

        return $headers;
    }
}
