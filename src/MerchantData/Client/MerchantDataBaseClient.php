<?php

namespace Nogrod\eBaySDK\MerchantData\Client;

class MerchantDataBaseClient extends \Nogrod\XMLClientRuntime\Client
{
    protected function getJmsMetaPath()
    {
        return [
            'Nogrod\eBaySDK\MerchantData' => __DIR__.'/../../../metadata/MerchantData',
        ];
    }

    protected function getSabre()
    {
        $service = new \Sabre\Xml\Service();
        $service->classMap = MerchantDataClassMap::Get();
        $service->elementMap = MerchantDataClassMap::GetElements();
        $service->namespaceMap = MerchantDataClassMap::GetNamespaces();
        return $service;
    }
}
