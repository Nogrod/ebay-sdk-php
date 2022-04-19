<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement\Client;

use Sabre\Xml\Writer;

class BusinessPoliciesManagementClassMap
{
    public static function Get()
    {
        return ['Time' => function (Writer $writer, $elem) {
            $value = $elem->format('H:i:s');
            if ($elem->getTimezone()->getOffset($elem) !== (new \DateTimeZone('UTC'))->getOffset($elem)) {
                $value .= $date->format('P');
            }
            $writer->write($value);
        },
        'DateTime' => function (Writer $writer, $elem) {
            $writer->write($elem->format('Y-m-d\TH:i:s.v\Z'));
        },
        'Date' => function (Writer $writer, $elem) {
            $writer->write($elem->format('Y-m-d'));
        },];
    }

    public static function GetElements()
    {
        return ['{http://www.ebay.com/marketplace/selling/v1/services}removeOverridesRequest' => 'Nogrod\eBaySDK\BusinessPoliciesManagement\RemoveOverridesRequest',
        '{http://www.ebay.com/marketplace/selling/v1/services}setSellerProfileRequest' => 'Nogrod\eBaySDK\BusinessPoliciesManagement\SetSellerProfileRequest',
        '{http://www.ebay.com/marketplace/selling/v1/services}getVersionRequest' => 'Nogrod\eBaySDK\BusinessPoliciesManagement\GetVersionRequest',
        '{http://www.ebay.com/marketplace/selling/v1/services}getVersionResponse' => 'Nogrod\eBaySDK\BusinessPoliciesManagement\GetVersionResponse',
        '{http://www.ebay.com/marketplace/selling/v1/services}removeProfileRequest' => 'Nogrod\eBaySDK\BusinessPoliciesManagement\RemoveProfileRequest',
        '{http://www.ebay.com/marketplace/selling/v1/services}removeProfileResponse' => 'Nogrod\eBaySDK\BusinessPoliciesManagement\RemoveProfileResponse',
        '{http://www.ebay.com/marketplace/selling/v1/services}addSellerProfileRequest' => 'Nogrod\eBaySDK\BusinessPoliciesManagement\AddSellerProfileRequest',
        '{http://www.ebay.com/marketplace/selling/v1/services}getSellerProfilesRequest' => 'Nogrod\eBaySDK\BusinessPoliciesManagement\GetSellerProfilesRequest',
        '{http://www.ebay.com/marketplace/selling/v1/services}getSellerProfilesResponse' => 'Nogrod\eBaySDK\BusinessPoliciesManagement\GetSellerProfilesResponse',
        '{http://www.ebay.com/marketplace/selling/v1/services}addSellerProfileResponse' => 'Nogrod\eBaySDK\BusinessPoliciesManagement\AddSellerProfileResponse',
        '{http://www.ebay.com/marketplace/selling/v1/services}setSellerProfileResponse' => 'Nogrod\eBaySDK\BusinessPoliciesManagement\SetSellerProfileResponse',
        '{http://www.ebay.com/marketplace/selling/v1/services}getConsolidationJobStatusRequest' => 'Nogrod\eBaySDK\BusinessPoliciesManagement\GetConsolidationJobStatusRequest',
        '{http://www.ebay.com/marketplace/selling/v1/services}removeSellerProfilesResponse' => 'Nogrod\eBaySDK\BusinessPoliciesManagement\RemoveSellerProfilesResponse',
        '{http://www.ebay.com/marketplace/selling/v1/services}getConsolidationJobStatusResponse' => 'Nogrod\eBaySDK\BusinessPoliciesManagement\GetConsolidationJobStatusResponse',
        '{http://www.ebay.com/marketplace/selling/v1/services}removeOverridesResponse' => 'Nogrod\eBaySDK\BusinessPoliciesManagement\RemoveOverridesResponse',
        '{http://www.ebay.com/marketplace/selling/v1/services}consolidateShippingProfilesResponse' => 'Nogrod\eBaySDK\BusinessPoliciesManagement\ConsolidateShippingProfilesResponse',
        '{http://www.ebay.com/marketplace/selling/v1/services}consolidateShippingProfilesRequest' => 'Nogrod\eBaySDK\BusinessPoliciesManagement\ConsolidateShippingProfilesRequest',
        '{http://www.ebay.com/marketplace/selling/v1/services}removeSellerProfilesRequest' => 'Nogrod\eBaySDK\BusinessPoliciesManagement\RemoveSellerProfilesRequest',];
    }

    public static function GetNamespaces()
    {
        return ['http://www.ebay.com/marketplace/selling/v1/services' => '',];
    }
}
