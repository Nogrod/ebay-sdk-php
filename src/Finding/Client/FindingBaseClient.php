<?php

namespace Nogrod\eBaySDK\Finding\Client;

/**
 * Class representing FindingServicePortType
 */
class FindingBaseClient extends \Nogrod\XMLClientRuntime\Client
{
    /**
     * Call getSearchKeywordsRecommendation
     *
     * @param \Nogrod\eBaySDK\Finding\GetSearchKeywordsRecommendationRequest $messageParameters
     * @return \Nogrod\eBaySDK\Finding\GetSearchKeywordsRecommendationResponse
     */
    public function getSearchKeywordsRecommendation(\Nogrod\eBaySDK\Finding\GetSearchKeywordsRecommendationRequest $messageParameters): \Nogrod\eBaySDK\Finding\GetSearchKeywordsRecommendationResponse
    {
        return $this->call('getSearchKeywordsRecommendation', 'Nogrod\eBaySDK\Finding\GetSearchKeywordsRecommendationResponse', $messageParameters);
    }

    /**
     * Call findItemsByKeywords
     *
     * @param \Nogrod\eBaySDK\Finding\FindItemsByKeywordsRequest $messageParameters
     * @return \Nogrod\eBaySDK\Finding\FindItemsByKeywordsResponse
     */
    public function findItemsByKeywords(\Nogrod\eBaySDK\Finding\FindItemsByKeywordsRequest $messageParameters): \Nogrod\eBaySDK\Finding\FindItemsByKeywordsResponse
    {
        return $this->call('findItemsByKeywords', 'Nogrod\eBaySDK\Finding\FindItemsByKeywordsResponse', $messageParameters);
    }

    /**
     * Call findItemsByCategory
     *
     * @param \Nogrod\eBaySDK\Finding\FindItemsByCategoryRequest $messageParameters
     * @return \Nogrod\eBaySDK\Finding\FindItemsByCategoryResponse
     */
    public function findItemsByCategory(\Nogrod\eBaySDK\Finding\FindItemsByCategoryRequest $messageParameters): \Nogrod\eBaySDK\Finding\FindItemsByCategoryResponse
    {
        return $this->call('findItemsByCategory', 'Nogrod\eBaySDK\Finding\FindItemsByCategoryResponse', $messageParameters);
    }

    /**
     * Call findItemsAdvanced
     *
     * @param \Nogrod\eBaySDK\Finding\FindItemsAdvancedRequest $messageParameters
     * @return \Nogrod\eBaySDK\Finding\FindItemsAdvancedResponse
     */
    public function findItemsAdvanced(\Nogrod\eBaySDK\Finding\FindItemsAdvancedRequest $messageParameters): \Nogrod\eBaySDK\Finding\FindItemsAdvancedResponse
    {
        return $this->call('findItemsAdvanced', 'Nogrod\eBaySDK\Finding\FindItemsAdvancedResponse', $messageParameters);
    }

    /**
     * Call findItemsByProduct
     *
     * @param \Nogrod\eBaySDK\Finding\FindItemsByProductRequest $messageParameters
     * @return \Nogrod\eBaySDK\Finding\FindItemsByProductResponse
     */
    public function findItemsByProduct(\Nogrod\eBaySDK\Finding\FindItemsByProductRequest $messageParameters): \Nogrod\eBaySDK\Finding\FindItemsByProductResponse
    {
        return $this->call('findItemsByProduct', 'Nogrod\eBaySDK\Finding\FindItemsByProductResponse', $messageParameters);
    }

    /**
     * Call findItemsIneBayStores
     *
     * @param \Nogrod\eBaySDK\Finding\FindItemsIneBayStoresRequest $messageParameters
     * @return \Nogrod\eBaySDK\Finding\FindItemsIneBayStoresResponse
     */
    public function findItemsIneBayStores(\Nogrod\eBaySDK\Finding\FindItemsIneBayStoresRequest $messageParameters): \Nogrod\eBaySDK\Finding\FindItemsIneBayStoresResponse
    {
        return $this->call('findItemsIneBayStores', 'Nogrod\eBaySDK\Finding\FindItemsIneBayStoresResponse', $messageParameters);
    }

    /**
     * Call findItemsByImage
     *
     * @param \Nogrod\eBaySDK\Finding\FindItemsByImageRequest $messageParameters
     * @return \Nogrod\eBaySDK\Finding\FindItemsByImageResponse
     */
    public function findItemsByImage(\Nogrod\eBaySDK\Finding\FindItemsByImageRequest $messageParameters): \Nogrod\eBaySDK\Finding\FindItemsByImageResponse
    {
        return $this->call('findItemsByImage', 'Nogrod\eBaySDK\Finding\FindItemsByImageResponse', $messageParameters);
    }

    /**
     * Call getHistograms
     *
     * @param \Nogrod\eBaySDK\Finding\GetHistogramsRequest $messageParameters
     * @return \Nogrod\eBaySDK\Finding\GetHistogramsResponse
     */
    public function getHistograms(\Nogrod\eBaySDK\Finding\GetHistogramsRequest $messageParameters): \Nogrod\eBaySDK\Finding\GetHistogramsResponse
    {
        return $this->call('getHistograms', 'Nogrod\eBaySDK\Finding\GetHistogramsResponse', $messageParameters);
    }

    /**
     * Call getVersion
     *
     * @param \Nogrod\eBaySDK\Finding\GetVersionRequest $messageParameters
     * @return \Nogrod\eBaySDK\Finding\GetVersionResponse
     */
    public function getVersion(\Nogrod\eBaySDK\Finding\GetVersionRequest $messageParameters): \Nogrod\eBaySDK\Finding\GetVersionResponse
    {
        return $this->call('getVersion', 'Nogrod\eBaySDK\Finding\GetVersionResponse', $messageParameters);
    }

    /**
     * Call findItemsForFavoriteSearch
     *
     * @param \Nogrod\eBaySDK\Finding\FindItemsForFavoriteSearchRequest $messageParameters
     * @return \Nogrod\eBaySDK\Finding\FindItemsForFavoriteSearchResponse
     */
    public function findItemsForFavoriteSearch(\Nogrod\eBaySDK\Finding\FindItemsForFavoriteSearchRequest $messageParameters): \Nogrod\eBaySDK\Finding\FindItemsForFavoriteSearchResponse
    {
        return $this->call('findItemsForFavoriteSearch', 'Nogrod\eBaySDK\Finding\FindItemsForFavoriteSearchResponse', $messageParameters);
    }

    /**
     * Call findCompletedItems
     *
     * @param \Nogrod\eBaySDK\Finding\FindCompletedItemsRequest $messageParameters
     * @return \Nogrod\eBaySDK\Finding\FindCompletedItemsResponse
     */
    public function findCompletedItems(\Nogrod\eBaySDK\Finding\FindCompletedItemsRequest $messageParameters): \Nogrod\eBaySDK\Finding\FindCompletedItemsResponse
    {
        return $this->call('findCompletedItems', 'Nogrod\eBaySDK\Finding\FindCompletedItemsResponse', $messageParameters);
    }

    protected function getJmsMetaPath()
    {
        return [
            'Nogrod\eBaySDK\Finding' => __DIR__.'/../../../metadata/Finding',
        ];
    }

    protected function getSabre()
    {
        $service = new \Sabre\Xml\Service();
        $service->classMap = FindingClassMap::Get();
        $service->elementMap = FindingClassMap::GetElements();
        $service->namespaceMap = FindingClassMap::GetNamespaces();
        return $service;
    }
}
