<?php

namespace Nogrod\eBaySDK\Finding\Client;

use Sabre\Xml\Writer;

class FindingClassMap
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
        return ['{http://www.ebay.com/marketplace/search/v1/services}getHistogramsResponse' => 'Nogrod\eBaySDK\Finding\GetHistogramsResponse',
        '{http://www.ebay.com/marketplace/search/v1/services}findItemsByCategoryRequest' => 'Nogrod\eBaySDK\Finding\FindItemsByCategoryRequest',
        '{http://www.ebay.com/marketplace/search/v1/services}getVersionResponse' => 'Nogrod\eBaySDK\Finding\GetVersionResponse',
        '{http://www.ebay.com/marketplace/search/v1/services}findItemsForFavoriteSearchRequest' => 'Nogrod\eBaySDK\Finding\FindItemsForFavoriteSearchRequest',
        '{http://www.ebay.com/marketplace/search/v1/services}findItemsForFavoriteSearchResponse' => 'Nogrod\eBaySDK\Finding\FindItemsForFavoriteSearchResponse',
        '{http://www.ebay.com/marketplace/search/v1/services}findCompletedItemsRequest' => 'Nogrod\eBaySDK\Finding\FindCompletedItemsRequest',
        '{http://www.ebay.com/marketplace/search/v1/services}findCompletedItemsResponse' => 'Nogrod\eBaySDK\Finding\FindCompletedItemsResponse',
        '{http://www.ebay.com/marketplace/search/v1/services}getSearchKeywordsRecommendationRequest' => 'Nogrod\eBaySDK\Finding\GetSearchKeywordsRecommendationRequest',
        '{http://www.ebay.com/marketplace/search/v1/services}getSearchKeywordsRecommendationResponse' => 'Nogrod\eBaySDK\Finding\GetSearchKeywordsRecommendationResponse',
        '{http://www.ebay.com/marketplace/search/v1/services}findItemsByKeywordsRequest' => 'Nogrod\eBaySDK\Finding\FindItemsByKeywordsRequest',
        '{http://www.ebay.com/marketplace/search/v1/services}findItemsByKeywordsResponse' => 'Nogrod\eBaySDK\Finding\FindItemsByKeywordsResponse',
        '{http://www.ebay.com/marketplace/search/v1/services}getVersionRequest' => 'Nogrod\eBaySDK\Finding\GetVersionRequest',
        '{http://www.ebay.com/marketplace/search/v1/services}findItemsByCategoryResponse' => 'Nogrod\eBaySDK\Finding\FindItemsByCategoryResponse',
        '{http://www.ebay.com/marketplace/search/v1/services}findItemsAdvancedResponse' => 'Nogrod\eBaySDK\Finding\FindItemsAdvancedResponse',
        '{http://www.ebay.com/marketplace/search/v1/services}findItemsByProductRequest' => 'Nogrod\eBaySDK\Finding\FindItemsByProductRequest',
        '{http://www.ebay.com/marketplace/search/v1/services}findItemsByProductResponse' => 'Nogrod\eBaySDK\Finding\FindItemsByProductResponse',
        '{http://www.ebay.com/marketplace/search/v1/services}findItemsIneBayStoresRequest' => 'Nogrod\eBaySDK\Finding\FindItemsIneBayStoresRequest',
        '{http://www.ebay.com/marketplace/search/v1/services}findItemsIneBayStoresResponse' => 'Nogrod\eBaySDK\Finding\FindItemsIneBayStoresResponse',
        '{http://www.ebay.com/marketplace/search/v1/services}findItemsByImageRequest' => 'Nogrod\eBaySDK\Finding\FindItemsByImageRequest',
        '{http://www.ebay.com/marketplace/search/v1/services}findItemsByImageResponse' => 'Nogrod\eBaySDK\Finding\FindItemsByImageResponse',
        '{http://www.ebay.com/marketplace/search/v1/services}getHistogramsRequest' => 'Nogrod\eBaySDK\Finding\GetHistogramsRequest',
        '{http://www.ebay.com/marketplace/search/v1/services}findItemsAdvancedRequest' => 'Nogrod\eBaySDK\Finding\FindItemsAdvancedRequest',];
    }

    public static function GetNamespaces()
    {
        return ['http://www.ebay.com/marketplace/search/v1/services' => '',];
    }
}
