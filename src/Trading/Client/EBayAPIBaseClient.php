<?php

namespace Nogrod\eBaySDK\Trading\Client;

/**
 * Class representing eBayAPIInterface
 */
class EBayAPIBaseClient extends \Nogrod\XMLClientRuntime\Client
{
    /**
     * Call AddFixedPriceItem
     *
     * @param \Nogrod\eBaySDK\Trading\AddFixedPriceItemRequest $addFixedPriceItemRequest
     * @return \Nogrod\eBaySDK\Trading\AddFixedPriceItemResponse
     */
    public function addFixedPriceItem(\Nogrod\eBaySDK\Trading\AddFixedPriceItemRequest $addFixedPriceItemRequest): \Nogrod\eBaySDK\Trading\AddFixedPriceItemResponse
    {
        return $this->call('AddFixedPriceItem', 'Nogrod\eBaySDK\Trading\AddFixedPriceItemResponse', $addFixedPriceItemRequest);
    }

    /**
     * Call AddItem
     *
     * @param \Nogrod\eBaySDK\Trading\AddItemRequest $addItemRequest
     * @return \Nogrod\eBaySDK\Trading\AddItemResponse
     */
    public function addItem(\Nogrod\eBaySDK\Trading\AddItemRequest $addItemRequest): \Nogrod\eBaySDK\Trading\AddItemResponse
    {
        return $this->call('AddItem', 'Nogrod\eBaySDK\Trading\AddItemResponse', $addItemRequest);
    }

    /**
     * Call AddItems
     *
     * @param \Nogrod\eBaySDK\Trading\AddItemsRequest $addItemsRequest
     * @return \Nogrod\eBaySDK\Trading\AddItemsResponse
     */
    public function addItems(\Nogrod\eBaySDK\Trading\AddItemsRequest $addItemsRequest): \Nogrod\eBaySDK\Trading\AddItemsResponse
    {
        return $this->call('AddItems', 'Nogrod\eBaySDK\Trading\AddItemsResponse', $addItemsRequest);
    }

    /**
     * Call AddMemberMessageAAQToPartner
     *
     * @param \Nogrod\eBaySDK\Trading\AddMemberMessageAAQToPartnerRequest $addMemberMessageAAQToPartnerRequest
     * @return \Nogrod\eBaySDK\Trading\AddMemberMessageAAQToPartnerResponse
     */
    public function addMemberMessageAAQToPartner(\Nogrod\eBaySDK\Trading\AddMemberMessageAAQToPartnerRequest $addMemberMessageAAQToPartnerRequest): \Nogrod\eBaySDK\Trading\AddMemberMessageAAQToPartnerResponse
    {
        return $this->call('AddMemberMessageAAQToPartner', 'Nogrod\eBaySDK\Trading\AddMemberMessageAAQToPartnerResponse', $addMemberMessageAAQToPartnerRequest);
    }

    /**
     * Call AddMemberMessageRTQ
     *
     * @param \Nogrod\eBaySDK\Trading\AddMemberMessageRTQRequest $addMemberMessageRTQRequest
     * @return \Nogrod\eBaySDK\Trading\AddMemberMessageRTQResponse
     */
    public function addMemberMessageRTQ(\Nogrod\eBaySDK\Trading\AddMemberMessageRTQRequest $addMemberMessageRTQRequest): \Nogrod\eBaySDK\Trading\AddMemberMessageRTQResponse
    {
        return $this->call('AddMemberMessageRTQ', 'Nogrod\eBaySDK\Trading\AddMemberMessageRTQResponse', $addMemberMessageRTQRequest);
    }

    /**
     * Call AddMemberMessagesAAQToBidder
     *
     * @param \Nogrod\eBaySDK\Trading\AddMemberMessagesAAQToBidderRequest $addMemberMessagesAAQToBidderRequest
     * @return \Nogrod\eBaySDK\Trading\AddMemberMessagesAAQToBidderResponse
     */
    public function addMemberMessagesAAQToBidder(\Nogrod\eBaySDK\Trading\AddMemberMessagesAAQToBidderRequest $addMemberMessagesAAQToBidderRequest): \Nogrod\eBaySDK\Trading\AddMemberMessagesAAQToBidderResponse
    {
        return $this->call('AddMemberMessagesAAQToBidder', 'Nogrod\eBaySDK\Trading\AddMemberMessagesAAQToBidderResponse', $addMemberMessagesAAQToBidderRequest);
    }

    /**
     * Call AddOrder
     *
     * @param \Nogrod\eBaySDK\Trading\AddOrderRequest $addOrderRequest
     * @return \Nogrod\eBaySDK\Trading\AddOrderResponse
     */
    public function addOrder(\Nogrod\eBaySDK\Trading\AddOrderRequest $addOrderRequest): \Nogrod\eBaySDK\Trading\AddOrderResponse
    {
        return $this->call('AddOrder', 'Nogrod\eBaySDK\Trading\AddOrderResponse', $addOrderRequest);
    }

    /**
     * Call AddSecondChanceItem
     *
     * @param \Nogrod\eBaySDK\Trading\AddSecondChanceItemRequest $addSecondChanceItemRequest
     * @return \Nogrod\eBaySDK\Trading\AddSecondChanceItemResponse
     */
    public function addSecondChanceItem(\Nogrod\eBaySDK\Trading\AddSecondChanceItemRequest $addSecondChanceItemRequest): \Nogrod\eBaySDK\Trading\AddSecondChanceItemResponse
    {
        return $this->call('AddSecondChanceItem', 'Nogrod\eBaySDK\Trading\AddSecondChanceItemResponse', $addSecondChanceItemRequest);
    }

    /**
     * Call AddToItemDescription
     *
     * @param \Nogrod\eBaySDK\Trading\AddToItemDescriptionRequest $addToItemDescriptionRequest
     * @return \Nogrod\eBaySDK\Trading\AddToItemDescriptionResponse
     */
    public function addToItemDescription(\Nogrod\eBaySDK\Trading\AddToItemDescriptionRequest $addToItemDescriptionRequest): \Nogrod\eBaySDK\Trading\AddToItemDescriptionResponse
    {
        return $this->call('AddToItemDescription', 'Nogrod\eBaySDK\Trading\AddToItemDescriptionResponse', $addToItemDescriptionRequest);
    }

    /**
     * Call AddToWatchList
     *
     * @param \Nogrod\eBaySDK\Trading\AddToWatchListRequest $addToWatchListRequest
     * @return \Nogrod\eBaySDK\Trading\AddToWatchListResponse
     */
    public function addToWatchList(\Nogrod\eBaySDK\Trading\AddToWatchListRequest $addToWatchListRequest): \Nogrod\eBaySDK\Trading\AddToWatchListResponse
    {
        return $this->call('AddToWatchList', 'Nogrod\eBaySDK\Trading\AddToWatchListResponse', $addToWatchListRequest);
    }

    /**
     * Call CompleteSale
     *
     * @param \Nogrod\eBaySDK\Trading\CompleteSaleRequest $completeSaleRequest
     * @return \Nogrod\eBaySDK\Trading\CompleteSaleResponse
     */
    public function completeSale(\Nogrod\eBaySDK\Trading\CompleteSaleRequest $completeSaleRequest): \Nogrod\eBaySDK\Trading\CompleteSaleResponse
    {
        return $this->call('CompleteSale', 'Nogrod\eBaySDK\Trading\CompleteSaleResponse', $completeSaleRequest);
    }

    /**
     * Call ConfirmIdentity
     *
     * @param \Nogrod\eBaySDK\Trading\ConfirmIdentityRequest $confirmIdentityRequest
     * @return \Nogrod\eBaySDK\Trading\ConfirmIdentityResponse
     */
    public function confirmIdentity(\Nogrod\eBaySDK\Trading\ConfirmIdentityRequest $confirmIdentityRequest): \Nogrod\eBaySDK\Trading\ConfirmIdentityResponse
    {
        return $this->call('ConfirmIdentity', 'Nogrod\eBaySDK\Trading\ConfirmIdentityResponse', $confirmIdentityRequest);
    }

    /**
     * Call DeleteMyMessages
     *
     * @param \Nogrod\eBaySDK\Trading\DeleteMyMessagesRequest $deleteMyMessagesRequest
     * @return \Nogrod\eBaySDK\Trading\DeleteMyMessagesResponse
     */
    public function deleteMyMessages(\Nogrod\eBaySDK\Trading\DeleteMyMessagesRequest $deleteMyMessagesRequest): \Nogrod\eBaySDK\Trading\DeleteMyMessagesResponse
    {
        return $this->call('DeleteMyMessages', 'Nogrod\eBaySDK\Trading\DeleteMyMessagesResponse', $deleteMyMessagesRequest);
    }

    /**
     * Call EndFixedPriceItem
     *
     * @param \Nogrod\eBaySDK\Trading\EndFixedPriceItemRequest $endFixedPriceItemRequest
     * @return \Nogrod\eBaySDK\Trading\EndFixedPriceItemResponse
     */
    public function endFixedPriceItem(\Nogrod\eBaySDK\Trading\EndFixedPriceItemRequest $endFixedPriceItemRequest): \Nogrod\eBaySDK\Trading\EndFixedPriceItemResponse
    {
        return $this->call('EndFixedPriceItem', 'Nogrod\eBaySDK\Trading\EndFixedPriceItemResponse', $endFixedPriceItemRequest);
    }

    /**
     * Call EndItem
     *
     * @param \Nogrod\eBaySDK\Trading\EndItemRequest $endItemRequest
     * @return \Nogrod\eBaySDK\Trading\EndItemResponse
     */
    public function endItem(\Nogrod\eBaySDK\Trading\EndItemRequest $endItemRequest): \Nogrod\eBaySDK\Trading\EndItemResponse
    {
        return $this->call('EndItem', 'Nogrod\eBaySDK\Trading\EndItemResponse', $endItemRequest);
    }

    /**
     * Call EndItems
     *
     * @param \Nogrod\eBaySDK\Trading\EndItemsRequest $endItemsRequest
     * @return \Nogrod\eBaySDK\Trading\EndItemsResponse
     */
    public function endItems(\Nogrod\eBaySDK\Trading\EndItemsRequest $endItemsRequest): \Nogrod\eBaySDK\Trading\EndItemsResponse
    {
        return $this->call('EndItems', 'Nogrod\eBaySDK\Trading\EndItemsResponse', $endItemsRequest);
    }

    /**
     * Call ExtendSiteHostedPictures
     *
     * @param \Nogrod\eBaySDK\Trading\ExtendSiteHostedPicturesRequest $extendSiteHostedPicturesRequest
     * @return \Nogrod\eBaySDK\Trading\ExtendSiteHostedPicturesResponse
     */
    public function extendSiteHostedPictures(\Nogrod\eBaySDK\Trading\ExtendSiteHostedPicturesRequest $extendSiteHostedPicturesRequest): \Nogrod\eBaySDK\Trading\ExtendSiteHostedPicturesResponse
    {
        return $this->call('ExtendSiteHostedPictures', 'Nogrod\eBaySDK\Trading\ExtendSiteHostedPicturesResponse', $extendSiteHostedPicturesRequest);
    }

    /**
     * Call FetchToken
     *
     * @param \Nogrod\eBaySDK\Trading\FetchTokenRequest $fetchTokenRequest
     * @return \Nogrod\eBaySDK\Trading\FetchTokenResponse
     */
    public function fetchToken(\Nogrod\eBaySDK\Trading\FetchTokenRequest $fetchTokenRequest): \Nogrod\eBaySDK\Trading\FetchTokenResponse
    {
        return $this->call('FetchToken', 'Nogrod\eBaySDK\Trading\FetchTokenResponse', $fetchTokenRequest);
    }

    /**
     * Call GetAccount
     *
     * @param \Nogrod\eBaySDK\Trading\GetAccountRequest $getAccountRequest
     * @return \Nogrod\eBaySDK\Trading\GetAccountResponse
     */
    public function getAccount(\Nogrod\eBaySDK\Trading\GetAccountRequest $getAccountRequest): \Nogrod\eBaySDK\Trading\GetAccountResponse
    {
        return $this->call('GetAccount', 'Nogrod\eBaySDK\Trading\GetAccountResponse', $getAccountRequest);
    }

    /**
     * Call GetAdFormatLeads
     *
     * @param \Nogrod\eBaySDK\Trading\GetAdFormatLeadsRequest $getAdFormatLeadsRequest
     * @return \Nogrod\eBaySDK\Trading\GetAdFormatLeadsResponse
     */
    public function getAdFormatLeads(\Nogrod\eBaySDK\Trading\GetAdFormatLeadsRequest $getAdFormatLeadsRequest): \Nogrod\eBaySDK\Trading\GetAdFormatLeadsResponse
    {
        return $this->call('GetAdFormatLeads', 'Nogrod\eBaySDK\Trading\GetAdFormatLeadsResponse', $getAdFormatLeadsRequest);
    }

    /**
     * Call GetAllBidders
     *
     * @param \Nogrod\eBaySDK\Trading\GetAllBiddersRequest $getAllBiddersRequest
     * @return \Nogrod\eBaySDK\Trading\GetAllBiddersResponse
     */
    public function getAllBidders(\Nogrod\eBaySDK\Trading\GetAllBiddersRequest $getAllBiddersRequest): \Nogrod\eBaySDK\Trading\GetAllBiddersResponse
    {
        return $this->call('GetAllBidders', 'Nogrod\eBaySDK\Trading\GetAllBiddersResponse', $getAllBiddersRequest);
    }

    /**
     * Call GetBestOffers
     *
     * @param \Nogrod\eBaySDK\Trading\GetBestOffersRequest $getBestOffersRequest
     * @return \Nogrod\eBaySDK\Trading\GetBestOffersResponse
     */
    public function getBestOffers(\Nogrod\eBaySDK\Trading\GetBestOffersRequest $getBestOffersRequest): \Nogrod\eBaySDK\Trading\GetBestOffersResponse
    {
        return $this->call('GetBestOffers', 'Nogrod\eBaySDK\Trading\GetBestOffersResponse', $getBestOffersRequest);
    }

    /**
     * Call GetBidderList
     *
     * @param \Nogrod\eBaySDK\Trading\GetBidderListRequest $getBidderListRequest
     * @return \Nogrod\eBaySDK\Trading\GetBidderListResponse
     */
    public function getBidderList(\Nogrod\eBaySDK\Trading\GetBidderListRequest $getBidderListRequest): \Nogrod\eBaySDK\Trading\GetBidderListResponse
    {
        return $this->call('GetBidderList', 'Nogrod\eBaySDK\Trading\GetBidderListResponse', $getBidderListRequest);
    }

    /**
     * Call GetCategories
     *
     * @param \Nogrod\eBaySDK\Trading\GetCategoriesRequest $getCategoriesRequest
     * @return \Nogrod\eBaySDK\Trading\GetCategoriesResponse
     */
    public function getCategories(\Nogrod\eBaySDK\Trading\GetCategoriesRequest $getCategoriesRequest): \Nogrod\eBaySDK\Trading\GetCategoriesResponse
    {
        return $this->call('GetCategories', 'Nogrod\eBaySDK\Trading\GetCategoriesResponse', $getCategoriesRequest);
    }

    /**
     * Call GetCategoryFeatures
     *
     * @param \Nogrod\eBaySDK\Trading\GetCategoryFeaturesRequest $getCategoryFeaturesRequest
     * @return \Nogrod\eBaySDK\Trading\GetCategoryFeaturesResponse
     */
    public function getCategoryFeatures(\Nogrod\eBaySDK\Trading\GetCategoryFeaturesRequest $getCategoryFeaturesRequest): \Nogrod\eBaySDK\Trading\GetCategoryFeaturesResponse
    {
        return $this->call('GetCategoryFeatures', 'Nogrod\eBaySDK\Trading\GetCategoryFeaturesResponse', $getCategoryFeaturesRequest);
    }

    /**
     * Call GetCategoryMappings
     *
     * @param \Nogrod\eBaySDK\Trading\GetCategoryMappingsRequest $getCategoryMappingsRequest
     * @return \Nogrod\eBaySDK\Trading\GetCategoryMappingsResponse
     */
    public function getCategoryMappings(\Nogrod\eBaySDK\Trading\GetCategoryMappingsRequest $getCategoryMappingsRequest): \Nogrod\eBaySDK\Trading\GetCategoryMappingsResponse
    {
        return $this->call('GetCategoryMappings', 'Nogrod\eBaySDK\Trading\GetCategoryMappingsResponse', $getCategoryMappingsRequest);
    }

    /**
     * Call GetChallengeToken
     *
     * @param \Nogrod\eBaySDK\Trading\GetChallengeTokenRequest $getChallengeTokenRequest
     * @return \Nogrod\eBaySDK\Trading\GetChallengeTokenResponse
     */
    public function getChallengeToken(\Nogrod\eBaySDK\Trading\GetChallengeTokenRequest $getChallengeTokenRequest): \Nogrod\eBaySDK\Trading\GetChallengeTokenResponse
    {
        return $this->call('GetChallengeToken', 'Nogrod\eBaySDK\Trading\GetChallengeTokenResponse', $getChallengeTokenRequest);
    }

    /**
     * Call GetClientAlertsAuthToken
     *
     * @param \Nogrod\eBaySDK\Trading\GetClientAlertsAuthTokenRequest $getClientAlertsAuthTokenRequest
     * @return \Nogrod\eBaySDK\Trading\GetClientAlertsAuthTokenResponse
     */
    public function getClientAlertsAuthToken(\Nogrod\eBaySDK\Trading\GetClientAlertsAuthTokenRequest $getClientAlertsAuthTokenRequest): \Nogrod\eBaySDK\Trading\GetClientAlertsAuthTokenResponse
    {
        return $this->call('GetClientAlertsAuthToken', 'Nogrod\eBaySDK\Trading\GetClientAlertsAuthTokenResponse', $getClientAlertsAuthTokenRequest);
    }

    /**
     * Call GetDescriptionTemplates
     *
     * @param \Nogrod\eBaySDK\Trading\GetDescriptionTemplatesRequest $getDescriptionTemplatesRequest
     * @return \Nogrod\eBaySDK\Trading\GetDescriptionTemplatesResponse
     */
    public function getDescriptionTemplates(\Nogrod\eBaySDK\Trading\GetDescriptionTemplatesRequest $getDescriptionTemplatesRequest): \Nogrod\eBaySDK\Trading\GetDescriptionTemplatesResponse
    {
        return $this->call('GetDescriptionTemplates', 'Nogrod\eBaySDK\Trading\GetDescriptionTemplatesResponse', $getDescriptionTemplatesRequest);
    }

    /**
     * Call GetFeedback
     *
     * @param \Nogrod\eBaySDK\Trading\GetFeedbackRequest $getFeedbackRequest
     * @return \Nogrod\eBaySDK\Trading\GetFeedbackResponse
     */
    public function getFeedback(\Nogrod\eBaySDK\Trading\GetFeedbackRequest $getFeedbackRequest): \Nogrod\eBaySDK\Trading\GetFeedbackResponse
    {
        return $this->call('GetFeedback', 'Nogrod\eBaySDK\Trading\GetFeedbackResponse', $getFeedbackRequest);
    }

    /**
     * Call GetItem
     *
     * @param \Nogrod\eBaySDK\Trading\GetItemRequest $getItemRequest
     * @return \Nogrod\eBaySDK\Trading\GetItemResponse
     */
    public function getItem(\Nogrod\eBaySDK\Trading\GetItemRequest $getItemRequest): \Nogrod\eBaySDK\Trading\GetItemResponse
    {
        return $this->call('GetItem', 'Nogrod\eBaySDK\Trading\GetItemResponse', $getItemRequest);
    }

    /**
     * Call GetItemShipping
     *
     * @param \Nogrod\eBaySDK\Trading\GetItemShippingRequest $getItemShippingRequest
     * @return \Nogrod\eBaySDK\Trading\GetItemShippingResponse
     */
    public function getItemShipping(\Nogrod\eBaySDK\Trading\GetItemShippingRequest $getItemShippingRequest): \Nogrod\eBaySDK\Trading\GetItemShippingResponse
    {
        return $this->call('GetItemShipping', 'Nogrod\eBaySDK\Trading\GetItemShippingResponse', $getItemShippingRequest);
    }

    /**
     * Call GetItemTransactions
     *
     * @param \Nogrod\eBaySDK\Trading\GetItemTransactionsRequest $getItemTransactionsRequest
     * @return \Nogrod\eBaySDK\Trading\GetItemTransactionsResponse
     */
    public function getItemTransactions(\Nogrod\eBaySDK\Trading\GetItemTransactionsRequest $getItemTransactionsRequest): \Nogrod\eBaySDK\Trading\GetItemTransactionsResponse
    {
        return $this->call('GetItemTransactions', 'Nogrod\eBaySDK\Trading\GetItemTransactionsResponse', $getItemTransactionsRequest);
    }

    /**
     * Call GetItemsAwaitingFeedback
     *
     * @param \Nogrod\eBaySDK\Trading\GetItemsAwaitingFeedbackRequest $getItemsAwaitingFeedbackRequest
     * @return \Nogrod\eBaySDK\Trading\GetItemsAwaitingFeedbackResponse
     */
    public function getItemsAwaitingFeedback(\Nogrod\eBaySDK\Trading\GetItemsAwaitingFeedbackRequest $getItemsAwaitingFeedbackRequest): \Nogrod\eBaySDK\Trading\GetItemsAwaitingFeedbackResponse
    {
        return $this->call('GetItemsAwaitingFeedback', 'Nogrod\eBaySDK\Trading\GetItemsAwaitingFeedbackResponse', $getItemsAwaitingFeedbackRequest);
    }

    /**
     * Call GetMemberMessages
     *
     * @param \Nogrod\eBaySDK\Trading\GetMemberMessagesRequest $getMemberMessagesRequest
     * @return \Nogrod\eBaySDK\Trading\GetMemberMessagesResponse
     */
    public function getMemberMessages(\Nogrod\eBaySDK\Trading\GetMemberMessagesRequest $getMemberMessagesRequest): \Nogrod\eBaySDK\Trading\GetMemberMessagesResponse
    {
        return $this->call('GetMemberMessages', 'Nogrod\eBaySDK\Trading\GetMemberMessagesResponse', $getMemberMessagesRequest);
    }

    /**
     * Call GetMessagePreferences
     *
     * @param \Nogrod\eBaySDK\Trading\GetMessagePreferencesRequest $getMessagePreferencesRequest
     * @return \Nogrod\eBaySDK\Trading\GetMessagePreferencesResponse
     */
    public function getMessagePreferences(\Nogrod\eBaySDK\Trading\GetMessagePreferencesRequest $getMessagePreferencesRequest): \Nogrod\eBaySDK\Trading\GetMessagePreferencesResponse
    {
        return $this->call('GetMessagePreferences', 'Nogrod\eBaySDK\Trading\GetMessagePreferencesResponse', $getMessagePreferencesRequest);
    }

    /**
     * Call GetMyMessages
     *
     * @param \Nogrod\eBaySDK\Trading\GetMyMessagesRequest $getMyMessagesRequest
     * @return \Nogrod\eBaySDK\Trading\GetMyMessagesResponse
     */
    public function getMyMessages(\Nogrod\eBaySDK\Trading\GetMyMessagesRequest $getMyMessagesRequest): \Nogrod\eBaySDK\Trading\GetMyMessagesResponse
    {
        return $this->call('GetMyMessages', 'Nogrod\eBaySDK\Trading\GetMyMessagesResponse', $getMyMessagesRequest);
    }

    /**
     * Call GetMyeBayBuying
     *
     * @param \Nogrod\eBaySDK\Trading\GetMyeBayBuyingRequest $getMyeBayBuyingRequest
     * @return \Nogrod\eBaySDK\Trading\GetMyeBayBuyingResponse
     */
    public function getMyeBayBuying(\Nogrod\eBaySDK\Trading\GetMyeBayBuyingRequest $getMyeBayBuyingRequest): \Nogrod\eBaySDK\Trading\GetMyeBayBuyingResponse
    {
        return $this->call('GetMyeBayBuying', 'Nogrod\eBaySDK\Trading\GetMyeBayBuyingResponse', $getMyeBayBuyingRequest);
    }

    /**
     * Call GetMyeBaySelling
     *
     * @param \Nogrod\eBaySDK\Trading\GetMyeBaySellingRequest $getMyeBaySellingRequest
     * @return \Nogrod\eBaySDK\Trading\GetMyeBaySellingResponse
     */
    public function getMyeBaySelling(\Nogrod\eBaySDK\Trading\GetMyeBaySellingRequest $getMyeBaySellingRequest): \Nogrod\eBaySDK\Trading\GetMyeBaySellingResponse
    {
        return $this->call('GetMyeBaySelling', 'Nogrod\eBaySDK\Trading\GetMyeBaySellingResponse', $getMyeBaySellingRequest);
    }

    /**
     * Call GetNotificationPreferences
     *
     * @param \Nogrod\eBaySDK\Trading\GetNotificationPreferencesRequest $getNotificationPreferencesRequest
     * @return \Nogrod\eBaySDK\Trading\GetNotificationPreferencesResponse
     */
    public function getNotificationPreferences(\Nogrod\eBaySDK\Trading\GetNotificationPreferencesRequest $getNotificationPreferencesRequest): \Nogrod\eBaySDK\Trading\GetNotificationPreferencesResponse
    {
        return $this->call('GetNotificationPreferences', 'Nogrod\eBaySDK\Trading\GetNotificationPreferencesResponse', $getNotificationPreferencesRequest);
    }

    /**
     * Call GetNotificationsUsage
     *
     * @param \Nogrod\eBaySDK\Trading\GetNotificationsUsageRequest $getNotificationsUsageRequest
     * @return \Nogrod\eBaySDK\Trading\GetNotificationsUsageResponse
     */
    public function getNotificationsUsage(\Nogrod\eBaySDK\Trading\GetNotificationsUsageRequest $getNotificationsUsageRequest): \Nogrod\eBaySDK\Trading\GetNotificationsUsageResponse
    {
        return $this->call('GetNotificationsUsage', 'Nogrod\eBaySDK\Trading\GetNotificationsUsageResponse', $getNotificationsUsageRequest);
    }

    /**
     * Call GetOrders
     *
     * @param \Nogrod\eBaySDK\Trading\GetOrdersRequest $getOrdersRequest
     * @return \Nogrod\eBaySDK\Trading\GetOrdersResponse
     */
    public function getOrders(\Nogrod\eBaySDK\Trading\GetOrdersRequest $getOrdersRequest): \Nogrod\eBaySDK\Trading\GetOrdersResponse
    {
        return $this->call('GetOrders', 'Nogrod\eBaySDK\Trading\GetOrdersResponse', $getOrdersRequest);
    }

    /**
     * Call GetSellerEvents
     *
     * @param \Nogrod\eBaySDK\Trading\GetSellerEventsRequest $getSellerEventsRequest
     * @return \Nogrod\eBaySDK\Trading\GetSellerEventsResponse
     */
    public function getSellerEvents(\Nogrod\eBaySDK\Trading\GetSellerEventsRequest $getSellerEventsRequest): \Nogrod\eBaySDK\Trading\GetSellerEventsResponse
    {
        return $this->call('GetSellerEvents', 'Nogrod\eBaySDK\Trading\GetSellerEventsResponse', $getSellerEventsRequest);
    }

    /**
     * Call GetSellerList
     *
     * @param \Nogrod\eBaySDK\Trading\GetSellerListRequest $getSellerListRequest
     * @return \Nogrod\eBaySDK\Trading\GetSellerListResponse
     */
    public function getSellerList(\Nogrod\eBaySDK\Trading\GetSellerListRequest $getSellerListRequest): \Nogrod\eBaySDK\Trading\GetSellerListResponse
    {
        return $this->call('GetSellerList', 'Nogrod\eBaySDK\Trading\GetSellerListResponse', $getSellerListRequest);
    }

    /**
     * Call GetSellerTransactions
     *
     * @param \Nogrod\eBaySDK\Trading\GetSellerTransactionsRequest $getSellerTransactionsRequest
     * @return \Nogrod\eBaySDK\Trading\GetSellerTransactionsResponse
     */
    public function getSellerTransactions(\Nogrod\eBaySDK\Trading\GetSellerTransactionsRequest $getSellerTransactionsRequest): \Nogrod\eBaySDK\Trading\GetSellerTransactionsResponse
    {
        return $this->call('GetSellerTransactions', 'Nogrod\eBaySDK\Trading\GetSellerTransactionsResponse', $getSellerTransactionsRequest);
    }

    /**
     * Call GetSessionID
     *
     * @param \Nogrod\eBaySDK\Trading\GetSessionIDRequest $getSessionIDRequest
     * @return \Nogrod\eBaySDK\Trading\GetSessionIDResponse
     */
    public function getSessionID(\Nogrod\eBaySDK\Trading\GetSessionIDRequest $getSessionIDRequest): \Nogrod\eBaySDK\Trading\GetSessionIDResponse
    {
        return $this->call('GetSessionID', 'Nogrod\eBaySDK\Trading\GetSessionIDResponse', $getSessionIDRequest);
    }

    /**
     * Call GetShippingDiscountProfiles
     *
     * @param \Nogrod\eBaySDK\Trading\GetShippingDiscountProfilesRequest $getShippingDiscountProfilesRequest
     * @return \Nogrod\eBaySDK\Trading\GetShippingDiscountProfilesResponse
     */
    public function getShippingDiscountProfiles(\Nogrod\eBaySDK\Trading\GetShippingDiscountProfilesRequest $getShippingDiscountProfilesRequest): \Nogrod\eBaySDK\Trading\GetShippingDiscountProfilesResponse
    {
        return $this->call('GetShippingDiscountProfiles', 'Nogrod\eBaySDK\Trading\GetShippingDiscountProfilesResponse', $getShippingDiscountProfilesRequest);
    }

    /**
     * Call GetStore
     *
     * @param \Nogrod\eBaySDK\Trading\GetStoreRequest $getStoreRequest
     * @return \Nogrod\eBaySDK\Trading\GetStoreResponse
     */
    public function getStore(\Nogrod\eBaySDK\Trading\GetStoreRequest $getStoreRequest): \Nogrod\eBaySDK\Trading\GetStoreResponse
    {
        return $this->call('GetStore', 'Nogrod\eBaySDK\Trading\GetStoreResponse', $getStoreRequest);
    }

    /**
     * Call GetStoreCategoryUpdateStatus
     *
     * @param \Nogrod\eBaySDK\Trading\GetStoreCategoryUpdateStatusRequest $getStoreCategoryUpdateStatusRequest
     * @return \Nogrod\eBaySDK\Trading\GetStoreCategoryUpdateStatusResponse
     */
    public function getStoreCategoryUpdateStatus(\Nogrod\eBaySDK\Trading\GetStoreCategoryUpdateStatusRequest $getStoreCategoryUpdateStatusRequest): \Nogrod\eBaySDK\Trading\GetStoreCategoryUpdateStatusResponse
    {
        return $this->call('GetStoreCategoryUpdateStatus', 'Nogrod\eBaySDK\Trading\GetStoreCategoryUpdateStatusResponse', $getStoreCategoryUpdateStatusRequest);
    }

    /**
     * Call GetTaxTable
     *
     * @param \Nogrod\eBaySDK\Trading\GetTaxTableRequest $getTaxTableRequest
     * @return \Nogrod\eBaySDK\Trading\GetTaxTableResponse
     */
    public function getTaxTable(\Nogrod\eBaySDK\Trading\GetTaxTableRequest $getTaxTableRequest): \Nogrod\eBaySDK\Trading\GetTaxTableResponse
    {
        return $this->call('GetTaxTable', 'Nogrod\eBaySDK\Trading\GetTaxTableResponse', $getTaxTableRequest);
    }

    /**
     * Call GetTokenStatus
     *
     * @param \Nogrod\eBaySDK\Trading\GetTokenStatusRequest $getTokenStatusRequest
     * @return \Nogrod\eBaySDK\Trading\GetTokenStatusResponse
     */
    public function getTokenStatus(\Nogrod\eBaySDK\Trading\GetTokenStatusRequest $getTokenStatusRequest): \Nogrod\eBaySDK\Trading\GetTokenStatusResponse
    {
        return $this->call('GetTokenStatus', 'Nogrod\eBaySDK\Trading\GetTokenStatusResponse', $getTokenStatusRequest);
    }

    /**
     * Call GetUser
     *
     * @param \Nogrod\eBaySDK\Trading\GetUserRequest $getUserRequest
     * @return \Nogrod\eBaySDK\Trading\GetUserResponse
     */
    public function getUser(\Nogrod\eBaySDK\Trading\GetUserRequest $getUserRequest): \Nogrod\eBaySDK\Trading\GetUserResponse
    {
        return $this->call('GetUser', 'Nogrod\eBaySDK\Trading\GetUserResponse', $getUserRequest);
    }

    /**
     * Call GetUserContactDetails
     *
     * @param \Nogrod\eBaySDK\Trading\GetUserContactDetailsRequest $getUserContactDetailsRequest
     * @return \Nogrod\eBaySDK\Trading\GetUserContactDetailsResponse
     */
    public function getUserContactDetails(\Nogrod\eBaySDK\Trading\GetUserContactDetailsRequest $getUserContactDetailsRequest): \Nogrod\eBaySDK\Trading\GetUserContactDetailsResponse
    {
        return $this->call('GetUserContactDetails', 'Nogrod\eBaySDK\Trading\GetUserContactDetailsResponse', $getUserContactDetailsRequest);
    }

    /**
     * Call GetUserPreferences
     *
     * @param \Nogrod\eBaySDK\Trading\GetUserPreferencesRequest $getUserPreferencesRequest
     * @return \Nogrod\eBaySDK\Trading\GetUserPreferencesResponse
     */
    public function getUserPreferences(\Nogrod\eBaySDK\Trading\GetUserPreferencesRequest $getUserPreferencesRequest): \Nogrod\eBaySDK\Trading\GetUserPreferencesResponse
    {
        return $this->call('GetUserPreferences', 'Nogrod\eBaySDK\Trading\GetUserPreferencesResponse', $getUserPreferencesRequest);
    }

    /**
     * Call GetVeROReasonCodeDetails
     *
     * @param \Nogrod\eBaySDK\Trading\GetVeROReasonCodeDetailsRequest $getVeROReasonCodeDetailsRequest
     * @return \Nogrod\eBaySDK\Trading\GetVeROReasonCodeDetailsResponse
     */
    public function getVeROReasonCodeDetails(\Nogrod\eBaySDK\Trading\GetVeROReasonCodeDetailsRequest $getVeROReasonCodeDetailsRequest): \Nogrod\eBaySDK\Trading\GetVeROReasonCodeDetailsResponse
    {
        return $this->call('GetVeROReasonCodeDetails', 'Nogrod\eBaySDK\Trading\GetVeROReasonCodeDetailsResponse', $getVeROReasonCodeDetailsRequest);
    }

    /**
     * Call GetVeROReportStatus
     *
     * @param \Nogrod\eBaySDK\Trading\GetVeROReportStatusRequest $getVeROReportStatusRequest
     * @return \Nogrod\eBaySDK\Trading\GetVeROReportStatusResponse
     */
    public function getVeROReportStatus(\Nogrod\eBaySDK\Trading\GetVeROReportStatusRequest $getVeROReportStatusRequest): \Nogrod\eBaySDK\Trading\GetVeROReportStatusResponse
    {
        return $this->call('GetVeROReportStatus', 'Nogrod\eBaySDK\Trading\GetVeROReportStatusResponse', $getVeROReportStatusRequest);
    }

    /**
     * Call GeteBayDetails
     *
     * @param \Nogrod\eBaySDK\Trading\GeteBayDetailsRequest $geteBayDetailsRequest
     * @return \Nogrod\eBaySDK\Trading\GeteBayDetailsResponse
     */
    public function geteBayDetails(\Nogrod\eBaySDK\Trading\GeteBayDetailsRequest $geteBayDetailsRequest): \Nogrod\eBaySDK\Trading\GeteBayDetailsResponse
    {
        return $this->call('GeteBayDetails', 'Nogrod\eBaySDK\Trading\GeteBayDetailsResponse', $geteBayDetailsRequest);
    }

    /**
     * Call GeteBayOfficialTime
     *
     * @param \Nogrod\eBaySDK\Trading\GeteBayOfficialTimeRequest $geteBayOfficialTimeRequest
     * @return \Nogrod\eBaySDK\Trading\GeteBayOfficialTimeResponse
     */
    public function geteBayOfficialTime(\Nogrod\eBaySDK\Trading\GeteBayOfficialTimeRequest $geteBayOfficialTimeRequest): \Nogrod\eBaySDK\Trading\GeteBayOfficialTimeResponse
    {
        return $this->call('GeteBayOfficialTime', 'Nogrod\eBaySDK\Trading\GeteBayOfficialTimeResponse', $geteBayOfficialTimeRequest);
    }

    /**
     * Call LeaveFeedback
     *
     * @param \Nogrod\eBaySDK\Trading\LeaveFeedbackRequest $leaveFeedbackRequest
     * @return \Nogrod\eBaySDK\Trading\LeaveFeedbackResponse
     */
    public function leaveFeedback(\Nogrod\eBaySDK\Trading\LeaveFeedbackRequest $leaveFeedbackRequest): \Nogrod\eBaySDK\Trading\LeaveFeedbackResponse
    {
        return $this->call('LeaveFeedback', 'Nogrod\eBaySDK\Trading\LeaveFeedbackResponse', $leaveFeedbackRequest);
    }

    /**
     * Call PlaceOffer
     *
     * @param \Nogrod\eBaySDK\Trading\PlaceOfferRequest $placeOfferRequest
     * @return \Nogrod\eBaySDK\Trading\PlaceOfferResponse
     */
    public function placeOffer(\Nogrod\eBaySDK\Trading\PlaceOfferRequest $placeOfferRequest): \Nogrod\eBaySDK\Trading\PlaceOfferResponse
    {
        return $this->call('PlaceOffer', 'Nogrod\eBaySDK\Trading\PlaceOfferResponse', $placeOfferRequest);
    }

    /**
     * Call RelistFixedPriceItem
     *
     * @param \Nogrod\eBaySDK\Trading\RelistFixedPriceItemRequest $relistFixedPriceItemRequest
     * @return \Nogrod\eBaySDK\Trading\RelistFixedPriceItemResponse
     */
    public function relistFixedPriceItem(\Nogrod\eBaySDK\Trading\RelistFixedPriceItemRequest $relistFixedPriceItemRequest): \Nogrod\eBaySDK\Trading\RelistFixedPriceItemResponse
    {
        return $this->call('RelistFixedPriceItem', 'Nogrod\eBaySDK\Trading\RelistFixedPriceItemResponse', $relistFixedPriceItemRequest);
    }

    /**
     * Call RelistItem
     *
     * @param \Nogrod\eBaySDK\Trading\RelistItemRequest $relistItemRequest
     * @return \Nogrod\eBaySDK\Trading\RelistItemResponse
     */
    public function relistItem(\Nogrod\eBaySDK\Trading\RelistItemRequest $relistItemRequest): \Nogrod\eBaySDK\Trading\RelistItemResponse
    {
        return $this->call('RelistItem', 'Nogrod\eBaySDK\Trading\RelistItemResponse', $relistItemRequest);
    }

    /**
     * Call RemoveFromWatchList
     *
     * @param \Nogrod\eBaySDK\Trading\RemoveFromWatchListRequest $removeFromWatchListRequest
     * @return \Nogrod\eBaySDK\Trading\RemoveFromWatchListResponse
     */
    public function removeFromWatchList(\Nogrod\eBaySDK\Trading\RemoveFromWatchListRequest $removeFromWatchListRequest): \Nogrod\eBaySDK\Trading\RemoveFromWatchListResponse
    {
        return $this->call('RemoveFromWatchList', 'Nogrod\eBaySDK\Trading\RemoveFromWatchListResponse', $removeFromWatchListRequest);
    }

    /**
     * Call RespondToBestOffer
     *
     * @param \Nogrod\eBaySDK\Trading\RespondToBestOfferRequest $respondToBestOfferRequest
     * @return \Nogrod\eBaySDK\Trading\RespondToBestOfferResponse
     */
    public function respondToBestOffer(\Nogrod\eBaySDK\Trading\RespondToBestOfferRequest $respondToBestOfferRequest): \Nogrod\eBaySDK\Trading\RespondToBestOfferResponse
    {
        return $this->call('RespondToBestOffer', 'Nogrod\eBaySDK\Trading\RespondToBestOfferResponse', $respondToBestOfferRequest);
    }

    /**
     * Call RespondToFeedback
     *
     * @param \Nogrod\eBaySDK\Trading\RespondToFeedbackRequest $respondToFeedbackRequest
     * @return \Nogrod\eBaySDK\Trading\RespondToFeedbackResponse
     */
    public function respondToFeedback(\Nogrod\eBaySDK\Trading\RespondToFeedbackRequest $respondToFeedbackRequest): \Nogrod\eBaySDK\Trading\RespondToFeedbackResponse
    {
        return $this->call('RespondToFeedback', 'Nogrod\eBaySDK\Trading\RespondToFeedbackResponse', $respondToFeedbackRequest);
    }

    /**
     * Call ReviseFixedPriceItem
     *
     * @param \Nogrod\eBaySDK\Trading\ReviseFixedPriceItemRequest $reviseFixedPriceItemRequest
     * @return \Nogrod\eBaySDK\Trading\ReviseFixedPriceItemResponse
     */
    public function reviseFixedPriceItem(\Nogrod\eBaySDK\Trading\ReviseFixedPriceItemRequest $reviseFixedPriceItemRequest): \Nogrod\eBaySDK\Trading\ReviseFixedPriceItemResponse
    {
        return $this->call('ReviseFixedPriceItem', 'Nogrod\eBaySDK\Trading\ReviseFixedPriceItemResponse', $reviseFixedPriceItemRequest);
    }

    /**
     * Call ReviseInventoryStatus
     *
     * @param \Nogrod\eBaySDK\Trading\ReviseInventoryStatusRequest $reviseInventoryStatusRequest
     * @return \Nogrod\eBaySDK\Trading\ReviseInventoryStatusResponse
     */
    public function reviseInventoryStatus(\Nogrod\eBaySDK\Trading\ReviseInventoryStatusRequest $reviseInventoryStatusRequest): \Nogrod\eBaySDK\Trading\ReviseInventoryStatusResponse
    {
        return $this->call('ReviseInventoryStatus', 'Nogrod\eBaySDK\Trading\ReviseInventoryStatusResponse', $reviseInventoryStatusRequest);
    }

    /**
     * Call ReviseItem
     *
     * @param \Nogrod\eBaySDK\Trading\ReviseItemRequest $reviseItemRequest
     * @return \Nogrod\eBaySDK\Trading\ReviseItemResponse
     */
    public function reviseItem(\Nogrod\eBaySDK\Trading\ReviseItemRequest $reviseItemRequest): \Nogrod\eBaySDK\Trading\ReviseItemResponse
    {
        return $this->call('ReviseItem', 'Nogrod\eBaySDK\Trading\ReviseItemResponse', $reviseItemRequest);
    }

    /**
     * Call ReviseMyMessages
     *
     * @param \Nogrod\eBaySDK\Trading\ReviseMyMessagesRequest $reviseMyMessagesRequest
     * @return \Nogrod\eBaySDK\Trading\ReviseMyMessagesResponse
     */
    public function reviseMyMessages(\Nogrod\eBaySDK\Trading\ReviseMyMessagesRequest $reviseMyMessagesRequest): \Nogrod\eBaySDK\Trading\ReviseMyMessagesResponse
    {
        return $this->call('ReviseMyMessages', 'Nogrod\eBaySDK\Trading\ReviseMyMessagesResponse', $reviseMyMessagesRequest);
    }

    /**
     * Call ReviseMyMessagesFolders
     *
     * @param \Nogrod\eBaySDK\Trading\ReviseMyMessagesFoldersRequest $reviseMyMessagesFoldersRequest
     * @return \Nogrod\eBaySDK\Trading\ReviseMyMessagesFoldersResponse
     */
    public function reviseMyMessagesFolders(\Nogrod\eBaySDK\Trading\ReviseMyMessagesFoldersRequest $reviseMyMessagesFoldersRequest): \Nogrod\eBaySDK\Trading\ReviseMyMessagesFoldersResponse
    {
        return $this->call('ReviseMyMessagesFolders', 'Nogrod\eBaySDK\Trading\ReviseMyMessagesFoldersResponse', $reviseMyMessagesFoldersRequest);
    }

    /**
     * Call RevokeToken
     *
     * @param \Nogrod\eBaySDK\Trading\RevokeTokenRequest $revokeTokenRequest
     * @return \Nogrod\eBaySDK\Trading\RevokeTokenResponse
     */
    public function revokeToken(\Nogrod\eBaySDK\Trading\RevokeTokenRequest $revokeTokenRequest): \Nogrod\eBaySDK\Trading\RevokeTokenResponse
    {
        return $this->call('RevokeToken', 'Nogrod\eBaySDK\Trading\RevokeTokenResponse', $revokeTokenRequest);
    }

    /**
     * Call SendInvoice
     *
     * @param \Nogrod\eBaySDK\Trading\SendInvoiceRequest $sendInvoiceRequest
     * @return \Nogrod\eBaySDK\Trading\SendInvoiceResponse
     */
    public function sendInvoice(\Nogrod\eBaySDK\Trading\SendInvoiceRequest $sendInvoiceRequest): \Nogrod\eBaySDK\Trading\SendInvoiceResponse
    {
        return $this->call('SendInvoice', 'Nogrod\eBaySDK\Trading\SendInvoiceResponse', $sendInvoiceRequest);
    }

    /**
     * Call SetMessagePreferences
     *
     * @param \Nogrod\eBaySDK\Trading\SetMessagePreferencesRequest $setMessagePreferencesRequest
     * @return \Nogrod\eBaySDK\Trading\SetMessagePreferencesResponse
     */
    public function setMessagePreferences(\Nogrod\eBaySDK\Trading\SetMessagePreferencesRequest $setMessagePreferencesRequest): \Nogrod\eBaySDK\Trading\SetMessagePreferencesResponse
    {
        return $this->call('SetMessagePreferences', 'Nogrod\eBaySDK\Trading\SetMessagePreferencesResponse', $setMessagePreferencesRequest);
    }

    /**
     * Call SetNotificationPreferences
     *
     * @param \Nogrod\eBaySDK\Trading\SetNotificationPreferencesRequest $setNotificationPreferencesRequest
     * @return \Nogrod\eBaySDK\Trading\SetNotificationPreferencesResponse
     */
    public function setNotificationPreferences(\Nogrod\eBaySDK\Trading\SetNotificationPreferencesRequest $setNotificationPreferencesRequest): \Nogrod\eBaySDK\Trading\SetNotificationPreferencesResponse
    {
        return $this->call('SetNotificationPreferences', 'Nogrod\eBaySDK\Trading\SetNotificationPreferencesResponse', $setNotificationPreferencesRequest);
    }

    /**
     * Call SetShippingDiscountProfiles
     *
     * @param \Nogrod\eBaySDK\Trading\SetShippingDiscountProfilesRequest $setShippingDiscountProfilesRequest
     * @return \Nogrod\eBaySDK\Trading\SetShippingDiscountProfilesResponse
     */
    public function setShippingDiscountProfiles(\Nogrod\eBaySDK\Trading\SetShippingDiscountProfilesRequest $setShippingDiscountProfilesRequest): \Nogrod\eBaySDK\Trading\SetShippingDiscountProfilesResponse
    {
        return $this->call('SetShippingDiscountProfiles', 'Nogrod\eBaySDK\Trading\SetShippingDiscountProfilesResponse', $setShippingDiscountProfilesRequest);
    }

    /**
     * Call SetStoreCategories
     *
     * @param \Nogrod\eBaySDK\Trading\SetStoreCategoriesRequest $setStoreCategoriesRequest
     * @return \Nogrod\eBaySDK\Trading\SetStoreCategoriesResponse
     */
    public function setStoreCategories(\Nogrod\eBaySDK\Trading\SetStoreCategoriesRequest $setStoreCategoriesRequest): \Nogrod\eBaySDK\Trading\SetStoreCategoriesResponse
    {
        return $this->call('SetStoreCategories', 'Nogrod\eBaySDK\Trading\SetStoreCategoriesResponse', $setStoreCategoriesRequest);
    }

    /**
     * Call SetTaxTable
     *
     * @param \Nogrod\eBaySDK\Trading\SetTaxTableRequest $setTaxTableRequest
     * @return \Nogrod\eBaySDK\Trading\SetTaxTableResponse
     */
    public function setTaxTable(\Nogrod\eBaySDK\Trading\SetTaxTableRequest $setTaxTableRequest): \Nogrod\eBaySDK\Trading\SetTaxTableResponse
    {
        return $this->call('SetTaxTable', 'Nogrod\eBaySDK\Trading\SetTaxTableResponse', $setTaxTableRequest);
    }

    /**
     * Call SetUserNotes
     *
     * @param \Nogrod\eBaySDK\Trading\SetUserNotesRequest $setUserNotesRequest
     * @return \Nogrod\eBaySDK\Trading\SetUserNotesResponse
     */
    public function setUserNotes(\Nogrod\eBaySDK\Trading\SetUserNotesRequest $setUserNotesRequest): \Nogrod\eBaySDK\Trading\SetUserNotesResponse
    {
        return $this->call('SetUserNotes', 'Nogrod\eBaySDK\Trading\SetUserNotesResponse', $setUserNotesRequest);
    }

    /**
     * Call SetUserPreferences
     *
     * @param \Nogrod\eBaySDK\Trading\SetUserPreferencesRequest $setUserPreferencesRequest
     * @return \Nogrod\eBaySDK\Trading\SetUserPreferencesResponse
     */
    public function setUserPreferences(\Nogrod\eBaySDK\Trading\SetUserPreferencesRequest $setUserPreferencesRequest): \Nogrod\eBaySDK\Trading\SetUserPreferencesResponse
    {
        return $this->call('SetUserPreferences', 'Nogrod\eBaySDK\Trading\SetUserPreferencesResponse', $setUserPreferencesRequest);
    }

    /**
     * Call UploadSiteHostedPictures
     *
     * @param \Nogrod\eBaySDK\Trading\UploadSiteHostedPicturesRequest $uploadSiteHostedPicturesRequest
     * @return \Nogrod\eBaySDK\Trading\UploadSiteHostedPicturesResponse
     */
    public function uploadSiteHostedPictures(\Nogrod\eBaySDK\Trading\UploadSiteHostedPicturesRequest $uploadSiteHostedPicturesRequest): \Nogrod\eBaySDK\Trading\UploadSiteHostedPicturesResponse
    {
        return $this->call('UploadSiteHostedPictures', 'Nogrod\eBaySDK\Trading\UploadSiteHostedPicturesResponse', $uploadSiteHostedPicturesRequest);
    }

    /**
     * Call ValidateChallengeInput
     *
     * @param \Nogrod\eBaySDK\Trading\ValidateChallengeInputRequest $validateChallengeInputRequest
     * @return \Nogrod\eBaySDK\Trading\ValidateChallengeInputResponse
     */
    public function validateChallengeInput(\Nogrod\eBaySDK\Trading\ValidateChallengeInputRequest $validateChallengeInputRequest): \Nogrod\eBaySDK\Trading\ValidateChallengeInputResponse
    {
        return $this->call('ValidateChallengeInput', 'Nogrod\eBaySDK\Trading\ValidateChallengeInputResponse', $validateChallengeInputRequest);
    }

    /**
     * Call ValidateTestUserRegistration
     *
     * @param \Nogrod\eBaySDK\Trading\ValidateTestUserRegistrationRequest $validateTestUserRegistrationRequest
     * @return \Nogrod\eBaySDK\Trading\ValidateTestUserRegistrationResponse
     */
    public function validateTestUserRegistration(\Nogrod\eBaySDK\Trading\ValidateTestUserRegistrationRequest $validateTestUserRegistrationRequest): \Nogrod\eBaySDK\Trading\ValidateTestUserRegistrationResponse
    {
        return $this->call('ValidateTestUserRegistration', 'Nogrod\eBaySDK\Trading\ValidateTestUserRegistrationResponse', $validateTestUserRegistrationRequest);
    }

    /**
     * Call VeROReportItems
     *
     * @param \Nogrod\eBaySDK\Trading\VeROReportItemsRequest $veROReportItemsRequest
     * @return \Nogrod\eBaySDK\Trading\VeROReportItemsResponse
     */
    public function veROReportItems(\Nogrod\eBaySDK\Trading\VeROReportItemsRequest $veROReportItemsRequest): \Nogrod\eBaySDK\Trading\VeROReportItemsResponse
    {
        return $this->call('VeROReportItems', 'Nogrod\eBaySDK\Trading\VeROReportItemsResponse', $veROReportItemsRequest);
    }

    /**
     * Call VerifyAddFixedPriceItem
     *
     * @param \Nogrod\eBaySDK\Trading\VerifyAddFixedPriceItemRequest $verifyAddFixedPriceItemRequest
     * @return \Nogrod\eBaySDK\Trading\VerifyAddFixedPriceItemResponse
     */
    public function verifyAddFixedPriceItem(\Nogrod\eBaySDK\Trading\VerifyAddFixedPriceItemRequest $verifyAddFixedPriceItemRequest): \Nogrod\eBaySDK\Trading\VerifyAddFixedPriceItemResponse
    {
        return $this->call('VerifyAddFixedPriceItem', 'Nogrod\eBaySDK\Trading\VerifyAddFixedPriceItemResponse', $verifyAddFixedPriceItemRequest);
    }

    /**
     * Call VerifyAddItem
     *
     * @param \Nogrod\eBaySDK\Trading\VerifyAddItemRequest $verifyAddItemRequest
     * @return \Nogrod\eBaySDK\Trading\VerifyAddItemResponse
     */
    public function verifyAddItem(\Nogrod\eBaySDK\Trading\VerifyAddItemRequest $verifyAddItemRequest): \Nogrod\eBaySDK\Trading\VerifyAddItemResponse
    {
        return $this->call('VerifyAddItem', 'Nogrod\eBaySDK\Trading\VerifyAddItemResponse', $verifyAddItemRequest);
    }

    /**
     * Call VerifyAddSecondChanceItem
     *
     * @param \Nogrod\eBaySDK\Trading\VerifyAddSecondChanceItemRequest $verifyAddSecondChanceItemRequest
     * @return \Nogrod\eBaySDK\Trading\VerifyAddSecondChanceItemResponse
     */
    public function verifyAddSecondChanceItem(\Nogrod\eBaySDK\Trading\VerifyAddSecondChanceItemRequest $verifyAddSecondChanceItemRequest): \Nogrod\eBaySDK\Trading\VerifyAddSecondChanceItemResponse
    {
        return $this->call('VerifyAddSecondChanceItem', 'Nogrod\eBaySDK\Trading\VerifyAddSecondChanceItemResponse', $verifyAddSecondChanceItemRequest);
    }

    /**
     * Call VerifyRelistItem
     *
     * @param \Nogrod\eBaySDK\Trading\VerifyRelistItemRequest $verifyRelistItemRequest
     * @return \Nogrod\eBaySDK\Trading\VerifyRelistItemResponse
     */
    public function verifyRelistItem(\Nogrod\eBaySDK\Trading\VerifyRelistItemRequest $verifyRelistItemRequest): \Nogrod\eBaySDK\Trading\VerifyRelistItemResponse
    {
        return $this->call('VerifyRelistItem', 'Nogrod\eBaySDK\Trading\VerifyRelistItemResponse', $verifyRelistItemRequest);
    }

    protected function getJmsMetaPath()
    {
        return [
            'Nogrod\eBaySDK\Trading' => __DIR__.'/../../../metadata/Trading',
        ];
    }

    protected function getSabre()
    {
        $service = new \Sabre\Xml\Service();
        $service->classMap = TradingClassMap::Get();
        $service->elementMap = TradingClassMap::GetElements();
        $service->namespaceMap = TradingClassMap::GetNamespaces();
        return $service;
    }
}
