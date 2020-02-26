<?php

namespace Nogrod\eBaySDK\Shopping\Client;

/**
 * Class representing ShoppingInterface
 */
class ShoppingBaseClient extends \Nogrod\XMLClientRuntime\Client
{

    /**
     * Call FindProducts
     *
     * @param \Nogrod\eBaySDK\Shopping\FindProductsRequest $findProductsRequest
     * @return \Nogrod\eBaySDK\Shopping\FindProductsResponse
     */
    public function findProducts(\Nogrod\eBaySDK\Shopping\FindProductsRequest $findProductsRequest) : \Nogrod\eBaySDK\Shopping\FindProductsResponse
    {
        return $this->call('FindProducts', 'Nogrod\eBaySDK\Shopping\FindProductsResponse', $findProductsRequest);
    }

    /**
     * Call GetCategoryInfo
     *
     * @param \Nogrod\eBaySDK\Shopping\GetCategoryInfoRequest $getCategoryInfoRequest
     * @return \Nogrod\eBaySDK\Shopping\GetCategoryInfoResponse
     */
    public function getCategoryInfo(\Nogrod\eBaySDK\Shopping\GetCategoryInfoRequest $getCategoryInfoRequest) : \Nogrod\eBaySDK\Shopping\GetCategoryInfoResponse
    {
        return $this->call('GetCategoryInfo', 'Nogrod\eBaySDK\Shopping\GetCategoryInfoResponse', $getCategoryInfoRequest);
    }

    /**
     * Call GetItemStatus
     *
     * @param \Nogrod\eBaySDK\Shopping\GetItemStatusRequest $getItemStatusRequest
     * @return \Nogrod\eBaySDK\Shopping\GetItemStatusResponse
     */
    public function getItemStatus(\Nogrod\eBaySDK\Shopping\GetItemStatusRequest $getItemStatusRequest) : \Nogrod\eBaySDK\Shopping\GetItemStatusResponse
    {
        return $this->call('GetItemStatus', 'Nogrod\eBaySDK\Shopping\GetItemStatusResponse', $getItemStatusRequest);
    }

    /**
     * Call GetMultipleItems
     *
     * @param \Nogrod\eBaySDK\Shopping\GetMultipleItemsRequest $getMultipleItemsRequest
     * @return \Nogrod\eBaySDK\Shopping\GetMultipleItemsResponse
     */
    public function getMultipleItems(\Nogrod\eBaySDK\Shopping\GetMultipleItemsRequest $getMultipleItemsRequest) : \Nogrod\eBaySDK\Shopping\GetMultipleItemsResponse
    {
        return $this->call('GetMultipleItems', 'Nogrod\eBaySDK\Shopping\GetMultipleItemsResponse', $getMultipleItemsRequest);
    }

    /**
     * Call GetShippingCosts
     *
     * @param \Nogrod\eBaySDK\Shopping\GetShippingCostsRequest $getShippingCostsRequest
     * @return \Nogrod\eBaySDK\Shopping\GetShippingCostsResponse
     */
    public function getShippingCosts(\Nogrod\eBaySDK\Shopping\GetShippingCostsRequest $getShippingCostsRequest) : \Nogrod\eBaySDK\Shopping\GetShippingCostsResponse
    {
        return $this->call('GetShippingCosts', 'Nogrod\eBaySDK\Shopping\GetShippingCostsResponse', $getShippingCostsRequest);
    }

    /**
     * Call GetSingleItem
     *
     * @param \Nogrod\eBaySDK\Shopping\GetSingleItemRequest $getSingleItemRequest
     * @return \Nogrod\eBaySDK\Shopping\GetSingleItemResponse
     */
    public function getSingleItem(\Nogrod\eBaySDK\Shopping\GetSingleItemRequest $getSingleItemRequest) : \Nogrod\eBaySDK\Shopping\GetSingleItemResponse
    {
        return $this->call('GetSingleItem', 'Nogrod\eBaySDK\Shopping\GetSingleItemResponse', $getSingleItemRequest);
    }

    /**
     * Call GetUserProfile
     *
     * @param \Nogrod\eBaySDK\Shopping\GetUserProfileRequest $getUserProfileRequest
     * @return \Nogrod\eBaySDK\Shopping\GetUserProfileResponse
     */
    public function getUserProfile(\Nogrod\eBaySDK\Shopping\GetUserProfileRequest $getUserProfileRequest) : \Nogrod\eBaySDK\Shopping\GetUserProfileResponse
    {
        return $this->call('GetUserProfile', 'Nogrod\eBaySDK\Shopping\GetUserProfileResponse', $getUserProfileRequest);
    }

    /**
     * Call GeteBayTime
     *
     * @param \Nogrod\eBaySDK\Shopping\GeteBayTimeRequest $geteBayTimeRequest
     * @return \Nogrod\eBaySDK\Shopping\GeteBayTimeResponse
     */
    public function geteBayTime(\Nogrod\eBaySDK\Shopping\GeteBayTimeRequest $geteBayTimeRequest) : \Nogrod\eBaySDK\Shopping\GeteBayTimeResponse
    {
        return $this->call('GeteBayTime', 'Nogrod\eBaySDK\Shopping\GeteBayTimeResponse', $geteBayTimeRequest);
    }

    protected function getJmsMetaPath()
    {
        return [
            'Nogrod\eBaySDK\Shopping' => __DIR__.'/../../../metadata/Shopping',
        ];
    }

    protected function getSabre()
    {
        $service = new \Sabre\Xml\Service();
        $service->classMap = ShoppingClassMap::Get();
        $service->elementMap = ShoppingClassMap::GetElements();
        $service->namespaceMap = ShoppingClassMap::GetNamespaces();
        return $service;
    }
}
