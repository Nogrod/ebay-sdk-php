<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement\Client;

use Http\Discovery\Psr17Factory;
use JMS\Serializer\Serializer;
use Nogrod\eBaySDK\Constants\Version;
use Psr\Http\Client\ClientInterface;

class BusinessPoliciesManagementClient extends SellerProfilesManagementBaseClient
{
    public const X_EBAY_SOA_SERVICE_VERSION = 'X-EBAY-SOA-SERVICE-VERSION';

    public const X_EBAY_SOA_SECURITY_TOKEN = 'X-EBAY-SOA-SECURITY-TOKEN';

    public const X_EBAY_SOA_SECURITY_IAFTOKEN = 'X-EBAY-SOA-SECURITY-IAFTOKEN';

    public const X_EBAY_SOA_OPERATION_NAME = 'X-EBAY-SOA-OPERATION-NAME';

    public const X_EBAY_SOA_GLOBAL_ID = 'X-EBAY-SOA-GLOBAL-ID';

    public const PRODUCTION_URL = 'https://svcs.ebay.com/services/selling/v1/SellerProfilesManagementService';

    public const SANDBOX_URL = 'https://svcs.sandbox.ebay.com/services/selling/v1/SellerProfilesManagementService';

    public function __construct(array $config = [], Serializer $serializer = null, Psr17Factory $messageFactory = null, ClientInterface $client = null)
    {
        $config = array_merge([
            'sandbox' => false,
            'version' => Version::BUSINESSPOLICIESMANAGEMENT,
            'globalId' => null,
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
        $headers[self::X_EBAY_SOA_SECURITY_IAFTOKEN] = $this->getConfig('oauth');
        $headers[self::X_EBAY_SOA_GLOBAL_ID] = $this->getConfig('globalId');
        $headers[self::X_EBAY_SOA_OPERATION_NAME] = $operation;
        $headers[self::X_EBAY_SOA_SERVICE_VERSION] = $this->getConfig('version');

        return $headers;
    }
}
