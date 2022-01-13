<?php

namespace Nogrod\eBaySDK\MerchantData\Client;

use \Sabre\Xml\Writer;

class MerchantDataClassMap
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
            $writer->write($elem->format(\DateTime::W3C));
        },
        'Date' => function (Writer $writer, $elem) {
            $writer->write($elem->format('Y-m-d'));
        },];
    }

    public static function GetElements()
    {
        return ['{urn:ebay:apis:eBLBaseComponents}NotificationMessage' => 'Nogrod\eBaySDK\MerchantData\NotificationMessage',
        '{urn:ebay:apis:eBLBaseComponents}EndFixedPriceItemRequest' => 'Nogrod\eBaySDK\MerchantData\EndFixedPriceItemRequest',
        '{urn:ebay:apis:eBLBaseComponents}OrderAckResponse' => 'Nogrod\eBaySDK\MerchantData\OrderAckResponse',
        '{urn:ebay:apis:eBLBaseComponents}OrderAckRequest' => 'Nogrod\eBaySDK\MerchantData\OrderAckRequest',
        '{urn:ebay:apis:eBLBaseComponents}FeeSettlementReport' => 'Nogrod\eBaySDK\MerchantData\FeeSettlementReport',
        '{urn:ebay:apis:eBLBaseComponents}FeeSettlementReportRequest' => 'Nogrod\eBaySDK\MerchantData\FeeSettlementReportRequest',
        '{urn:ebay:apis:eBLBaseComponents}EndItemResponse' => 'Nogrod\eBaySDK\MerchantData\EndItemResponse',
        '{urn:ebay:apis:eBLBaseComponents}EndItemRequest' => 'Nogrod\eBaySDK\MerchantData\EndItemRequest',
        '{urn:ebay:apis:eBLBaseComponents}EndFixedPriceItemResponse' => 'Nogrod\eBaySDK\MerchantData\EndFixedPriceItemResponse',
        '{urn:ebay:apis:eBLBaseComponents}AddItemResponse' => 'Nogrod\eBaySDK\MerchantData\AddItemResponse',
        '{urn:ebay:apis:eBLBaseComponents}OrderReport' => 'Nogrod\eBaySDK\MerchantData\OrderReport',
        '{urn:ebay:apis:eBLBaseComponents}AddItemRequest' => 'Nogrod\eBaySDK\MerchantData\AddItemRequest',
        '{urn:ebay:apis:eBLBaseComponents}AddFixedPriceItemResponse' => 'Nogrod\eBaySDK\MerchantData\AddFixedPriceItemResponse',
        '{urn:ebay:apis:eBLBaseComponents}ActiveInventoryReport' => 'Nogrod\eBaySDK\MerchantData\ActiveInventoryReport',
        '{urn:ebay:apis:eBLBaseComponents}ActiveInventoryReportRequest' => 'Nogrod\eBaySDK\MerchantData\ActiveInventoryReportRequest',
        '{urn:ebay:apis:eBLBaseComponents}RequesterCredentials' => 'Nogrod\eBaySDK\MerchantData\RequesterCredentials',
        '{urn:ebay:apis:eBLBaseComponents}BulkDataExchangeResponses' => 'Nogrod\eBaySDK\MerchantData\BulkDataExchangeResponses',
        '{urn:ebay:apis:eBLBaseComponents}BulkDataExchangeRequests' => 'Nogrod\eBaySDK\MerchantData\BulkDataExchangeRequests',
        '{urn:ebay:apis:eBLBaseComponents}OrderReportRequest' => 'Nogrod\eBaySDK\MerchantData\OrderReportRequest',
        '{urn:ebay:apis:eBLBaseComponents}AddFixedPriceItemRequest' => 'Nogrod\eBaySDK\MerchantData\AddFixedPriceItemRequest',
        '{urn:ebay:apis:eBLBaseComponents}RelistFixedPriceItemRequest' => 'Nogrod\eBaySDK\MerchantData\RelistFixedPriceItemRequest',
        '{urn:ebay:apis:eBLBaseComponents}SetShipmentTrackingInfoRequest' => 'Nogrod\eBaySDK\MerchantData\SetShipmentTrackingInfoRequest',
        '{urn:ebay:apis:eBLBaseComponents}RelistFixedPriceItemResponse' => 'Nogrod\eBaySDK\MerchantData\RelistFixedPriceItemResponse',
        '{urn:ebay:apis:eBLBaseComponents}VerifyAddItemResponse' => 'Nogrod\eBaySDK\MerchantData\VerifyAddItemResponse',
        '{urn:ebay:apis:eBLBaseComponents}VerifyAddItemRequest' => 'Nogrod\eBaySDK\MerchantData\VerifyAddItemRequest',
        '{urn:ebay:apis:eBLBaseComponents}VerifyAddFixedPriceItemResponse' => 'Nogrod\eBaySDK\MerchantData\VerifyAddFixedPriceItemResponse',
        '{urn:ebay:apis:eBLBaseComponents}UploadSiteHostedPicturesResponse' => 'Nogrod\eBaySDK\MerchantData\UploadSiteHostedPicturesResponse',
        '{urn:ebay:apis:eBLBaseComponents}UploadSiteHostedPicturesRequest' => 'Nogrod\eBaySDK\MerchantData\UploadSiteHostedPicturesRequest',
        '{urn:ebay:apis:eBLBaseComponents}SetShipmentTrackingInfoResponse' => 'Nogrod\eBaySDK\MerchantData\SetShipmentTrackingInfoResponse',
        '{urn:ebay:apis:eBLBaseComponents}VerifyAddFixedPriceItemRequest' => 'Nogrod\eBaySDK\MerchantData\VerifyAddFixedPriceItemRequest',
        '{urn:ebay:apis:eBLBaseComponents}ReviseItemResponse' => 'Nogrod\eBaySDK\MerchantData\ReviseItemResponse',
        '{urn:ebay:apis:eBLBaseComponents}RelistItemRequest' => 'Nogrod\eBaySDK\MerchantData\RelistItemRequest',
        '{urn:ebay:apis:eBLBaseComponents}ReviseInventoryStatusResponse' => 'Nogrod\eBaySDK\MerchantData\ReviseInventoryStatusResponse',
        '{urn:ebay:apis:eBLBaseComponents}ReviseInventoryStatusRequest' => 'Nogrod\eBaySDK\MerchantData\ReviseInventoryStatusRequest',
        '{urn:ebay:apis:eBLBaseComponents}ReviseFixedPriceItemResponse' => 'Nogrod\eBaySDK\MerchantData\ReviseFixedPriceItemResponse',
        '{urn:ebay:apis:eBLBaseComponents}ReviseFixedPriceItemRequest' => 'Nogrod\eBaySDK\MerchantData\ReviseFixedPriceItemRequest',
        '{urn:ebay:apis:eBLBaseComponents}RelistItemResponse' => 'Nogrod\eBaySDK\MerchantData\RelistItemResponse',
        '{urn:ebay:apis:eBLBaseComponents}ReviseItemRequest' => 'Nogrod\eBaySDK\MerchantData\ReviseItemRequest',];
    }

    public static function GetNamespaces()
    {
        return ['urn:ebay:apis:eBLBaseComponents' => '',];
    }
}
