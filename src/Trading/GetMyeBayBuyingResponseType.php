<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetMyeBayBuyingResponseType
 *
 * Returns information regarding a user's buying activity, such as items they are watching, bidding on, have won, did not win, and have made Best Offers on.
 * XSD Type: GetMyeBayBuyingResponseType
 */
class GetMyeBayBuyingResponseType extends AbstractResponseType
{
    /**
     * This container consists of buying/bidding activity counts and values. For this container to be returned, the user must include the <b>BuyingSummary.Include</b> field in the request and set its value to <code>true</code>.
     *
     * @var \Nogrod\eBaySDK\Trading\BuyingSummaryType $buyingSummary
     */
    private $buyingSummary = null;

    /**
     * This container consists of the items on the eBay user's Watch List. This container will be returned if the eBay user has one or more items on their Watch List.
     *  <br><br>
     *  This container will not be returned in the response (even if there are items on the Watch List) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>WatchList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @var \Nogrod\eBaySDK\Trading\PaginatedItemArrayType $watchList
     */
    private $watchList = null;

    /**
     * This container consists of the auction items on which the eBay user has bid. This container will be returned if the eBay user has bid on one or more auction items.
     *  <br><br>
     *  This container will not be returned in the response (even if there are items on the Bid List) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>BidList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @var \Nogrod\eBaySDK\Trading\PaginatedItemArrayType $bidList
     */
    private $bidList = null;

    /**
     * This container consists of the items on which the eBay user has made Best Offers. This container will be returned if the eBay user has made one or more Best Offers.
     *  <br><br>
     *  This container will not be returned in the response (even if user has made Best Offers) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>BestOfferList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @var \Nogrod\eBaySDK\Trading\PaginatedItemArrayType $bestOfferList
     */
    private $bestOfferList = null;

    /**
     * This container consists of the auction items on which the eBay user has won. This container will be returned if the eBay user has won one or more auction items.
     *  <br><br>
     *  This container will not be returned in the response (even if there are items on the Won List) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>WonList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @var \Nogrod\eBaySDK\Trading\PaginatedOrderTransactionArrayType $wonList
     */
    private $wonList = null;

    /**
     * This container consists of the auction items on which the eBay user has bid on but lost. This container will be returned if the eBay user has lost one or more auction items.
     *  <br><br>
     *  This container will not be returned in the response (even if the buyer has lost one or more auction items) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>LostList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @var \Nogrod\eBaySDK\Trading\PaginatedItemArrayType $lostList
     */
    private $lostList = null;

    /**
     * This container consists of the eBay user's saved searches. This container will be returned if the eBay user has one or more saved searches.
     *  <br><br>
     *  This container will not be returned in the response (even if the user has saved searches) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>FavoriteSearches.Include</b> field is omitted or set to <code>false</code>.
     *  <br><br>
     *  This container consists of the search name, search query, and other search
     *  elements. The user can copy and paste the URL in the <b>SearchQuery</b> field into a browser to view the search results again.
     *
     * @var \Nogrod\eBaySDK\Trading\MyeBayFavoriteSearchListType $favoriteSearches
     */
    private $favoriteSearches = null;

    /**
     * This container consists of the eBay user's saved sellers. This container will be returned if the eBay user has one or more saved sellers.
     *  <br><br>
     *  This container will not be returned in the response (even if the user has saved sellers) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>FavoriteSellers.Include</b> field is omitted or set to <code>false</code>.
     *  <br><br>
     *  This container consists of the saved sellers' user IDs and eBay Store names (if applicable).
     *
     * @var \Nogrod\eBaySDK\Trading\MyeBayFavoriteSellerListType $favoriteSellers
     */
    private $favoriteSellers = null;

    /**
     * This container consists of the items on which the eBay user has received a Second Chance Offer. This container will be returned if the eBay user has made one or more Second Chance Offers.
     *  <br><br>
     *  This container will not be returned in the response (even if user has received Second Chance Offers) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>SecondChanceOffer.Include</b> field is omitted or set to <code>false</code>.
     *
     * @var \Nogrod\eBaySDK\Trading\ItemType[] $secondChanceOffer
     */
    private $secondChanceOffer = [
        
    ];

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\BidGroupType[] $bidAssistantList
     */
    private $bidAssistantList = null;

    /**
     * This container consists of the auction items on which the eBay user has won but deleted from their My eBay page. This container will be returned if the eBay user has won one or more auction items but have deleted these items from My eBay.
     *  <br><br>
     *  This container will not be returned in the response (even if they have won and then deleted one or more items) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>DeletedFromWonList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @var \Nogrod\eBaySDK\Trading\PaginatedOrderTransactionArrayType $deletedFromWonList
     */
    private $deletedFromWonList = null;

    /**
     * This container consists of the auction items on which the eBay user has lost and then deleted from their My eBay page. This container will be returned if the eBay user has lost one or more auction items and then deleted those items from My eBay.
     *  <br><br>
     *  This container will not be returned in the response (even if they have lost and then deleted one or more items) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>DeletedFromLostList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @var \Nogrod\eBaySDK\Trading\PaginatedItemArrayType $deletedFromLostList
     */
    private $deletedFromLostList = null;

    /**
     * This container consists of data for a user-defined list that was created by the user in My eBay. User-defined lists consists of a combination of items, saved sellers, and/or saved searches.
     *  <br><br>
     *  This container will not be returned in the response (even if one or more user-defined lists exist) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>UserDefinedList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @var \Nogrod\eBaySDK\Trading\UserDefinedListType[] $userDefinedList
     */
    private $userDefinedList = [
        
    ];

    /**
     * Gets as buyingSummary
     *
     * This container consists of buying/bidding activity counts and values. For this container to be returned, the user must include the <b>BuyingSummary.Include</b> field in the request and set its value to <code>true</code>.
     *
     * @return \Nogrod\eBaySDK\Trading\BuyingSummaryType
     */
    public function getBuyingSummary()
    {
        return $this->buyingSummary;
    }

    /**
     * Sets a new buyingSummary
     *
     * This container consists of buying/bidding activity counts and values. For this container to be returned, the user must include the <b>BuyingSummary.Include</b> field in the request and set its value to <code>true</code>.
     *
     * @param \Nogrod\eBaySDK\Trading\BuyingSummaryType $buyingSummary
     * @return self
     */
    public function setBuyingSummary(\Nogrod\eBaySDK\Trading\BuyingSummaryType $buyingSummary)
    {
        $this->buyingSummary = $buyingSummary;
        return $this;
    }

    /**
     * Gets as watchList
     *
     * This container consists of the items on the eBay user's Watch List. This container will be returned if the eBay user has one or more items on their Watch List.
     *  <br><br>
     *  This container will not be returned in the response (even if there are items on the Watch List) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>WatchList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @return \Nogrod\eBaySDK\Trading\PaginatedItemArrayType
     */
    public function getWatchList()
    {
        return $this->watchList;
    }

    /**
     * Sets a new watchList
     *
     * This container consists of the items on the eBay user's Watch List. This container will be returned if the eBay user has one or more items on their Watch List.
     *  <br><br>
     *  This container will not be returned in the response (even if there are items on the Watch List) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>WatchList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @param \Nogrod\eBaySDK\Trading\PaginatedItemArrayType $watchList
     * @return self
     */
    public function setWatchList(\Nogrod\eBaySDK\Trading\PaginatedItemArrayType $watchList)
    {
        $this->watchList = $watchList;
        return $this;
    }

    /**
     * Gets as bidList
     *
     * This container consists of the auction items on which the eBay user has bid. This container will be returned if the eBay user has bid on one or more auction items.
     *  <br><br>
     *  This container will not be returned in the response (even if there are items on the Bid List) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>BidList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @return \Nogrod\eBaySDK\Trading\PaginatedItemArrayType
     */
    public function getBidList()
    {
        return $this->bidList;
    }

    /**
     * Sets a new bidList
     *
     * This container consists of the auction items on which the eBay user has bid. This container will be returned if the eBay user has bid on one or more auction items.
     *  <br><br>
     *  This container will not be returned in the response (even if there are items on the Bid List) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>BidList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @param \Nogrod\eBaySDK\Trading\PaginatedItemArrayType $bidList
     * @return self
     */
    public function setBidList(\Nogrod\eBaySDK\Trading\PaginatedItemArrayType $bidList)
    {
        $this->bidList = $bidList;
        return $this;
    }

    /**
     * Gets as bestOfferList
     *
     * This container consists of the items on which the eBay user has made Best Offers. This container will be returned if the eBay user has made one or more Best Offers.
     *  <br><br>
     *  This container will not be returned in the response (even if user has made Best Offers) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>BestOfferList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @return \Nogrod\eBaySDK\Trading\PaginatedItemArrayType
     */
    public function getBestOfferList()
    {
        return $this->bestOfferList;
    }

    /**
     * Sets a new bestOfferList
     *
     * This container consists of the items on which the eBay user has made Best Offers. This container will be returned if the eBay user has made one or more Best Offers.
     *  <br><br>
     *  This container will not be returned in the response (even if user has made Best Offers) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>BestOfferList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @param \Nogrod\eBaySDK\Trading\PaginatedItemArrayType $bestOfferList
     * @return self
     */
    public function setBestOfferList(\Nogrod\eBaySDK\Trading\PaginatedItemArrayType $bestOfferList)
    {
        $this->bestOfferList = $bestOfferList;
        return $this;
    }

    /**
     * Gets as wonList
     *
     * This container consists of the auction items on which the eBay user has won. This container will be returned if the eBay user has won one or more auction items.
     *  <br><br>
     *  This container will not be returned in the response (even if there are items on the Won List) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>WonList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @return \Nogrod\eBaySDK\Trading\PaginatedOrderTransactionArrayType
     */
    public function getWonList()
    {
        return $this->wonList;
    }

    /**
     * Sets a new wonList
     *
     * This container consists of the auction items on which the eBay user has won. This container will be returned if the eBay user has won one or more auction items.
     *  <br><br>
     *  This container will not be returned in the response (even if there are items on the Won List) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>WonList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @param \Nogrod\eBaySDK\Trading\PaginatedOrderTransactionArrayType $wonList
     * @return self
     */
    public function setWonList(\Nogrod\eBaySDK\Trading\PaginatedOrderTransactionArrayType $wonList)
    {
        $this->wonList = $wonList;
        return $this;
    }

    /**
     * Gets as lostList
     *
     * This container consists of the auction items on which the eBay user has bid on but lost. This container will be returned if the eBay user has lost one or more auction items.
     *  <br><br>
     *  This container will not be returned in the response (even if the buyer has lost one or more auction items) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>LostList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @return \Nogrod\eBaySDK\Trading\PaginatedItemArrayType
     */
    public function getLostList()
    {
        return $this->lostList;
    }

    /**
     * Sets a new lostList
     *
     * This container consists of the auction items on which the eBay user has bid on but lost. This container will be returned if the eBay user has lost one or more auction items.
     *  <br><br>
     *  This container will not be returned in the response (even if the buyer has lost one or more auction items) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>LostList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @param \Nogrod\eBaySDK\Trading\PaginatedItemArrayType $lostList
     * @return self
     */
    public function setLostList(\Nogrod\eBaySDK\Trading\PaginatedItemArrayType $lostList)
    {
        $this->lostList = $lostList;
        return $this;
    }

    /**
     * Gets as favoriteSearches
     *
     * This container consists of the eBay user's saved searches. This container will be returned if the eBay user has one or more saved searches.
     *  <br><br>
     *  This container will not be returned in the response (even if the user has saved searches) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>FavoriteSearches.Include</b> field is omitted or set to <code>false</code>.
     *  <br><br>
     *  This container consists of the search name, search query, and other search
     *  elements. The user can copy and paste the URL in the <b>SearchQuery</b> field into a browser to view the search results again.
     *
     * @return \Nogrod\eBaySDK\Trading\MyeBayFavoriteSearchListType
     */
    public function getFavoriteSearches()
    {
        return $this->favoriteSearches;
    }

    /**
     * Sets a new favoriteSearches
     *
     * This container consists of the eBay user's saved searches. This container will be returned if the eBay user has one or more saved searches.
     *  <br><br>
     *  This container will not be returned in the response (even if the user has saved searches) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>FavoriteSearches.Include</b> field is omitted or set to <code>false</code>.
     *  <br><br>
     *  This container consists of the search name, search query, and other search
     *  elements. The user can copy and paste the URL in the <b>SearchQuery</b> field into a browser to view the search results again.
     *
     * @param \Nogrod\eBaySDK\Trading\MyeBayFavoriteSearchListType $favoriteSearches
     * @return self
     */
    public function setFavoriteSearches(\Nogrod\eBaySDK\Trading\MyeBayFavoriteSearchListType $favoriteSearches)
    {
        $this->favoriteSearches = $favoriteSearches;
        return $this;
    }

    /**
     * Gets as favoriteSellers
     *
     * This container consists of the eBay user's saved sellers. This container will be returned if the eBay user has one or more saved sellers.
     *  <br><br>
     *  This container will not be returned in the response (even if the user has saved sellers) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>FavoriteSellers.Include</b> field is omitted or set to <code>false</code>.
     *  <br><br>
     *  This container consists of the saved sellers' user IDs and eBay Store names (if applicable).
     *
     * @return \Nogrod\eBaySDK\Trading\MyeBayFavoriteSellerListType
     */
    public function getFavoriteSellers()
    {
        return $this->favoriteSellers;
    }

    /**
     * Sets a new favoriteSellers
     *
     * This container consists of the eBay user's saved sellers. This container will be returned if the eBay user has one or more saved sellers.
     *  <br><br>
     *  This container will not be returned in the response (even if the user has saved sellers) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>FavoriteSellers.Include</b> field is omitted or set to <code>false</code>.
     *  <br><br>
     *  This container consists of the saved sellers' user IDs and eBay Store names (if applicable).
     *
     * @param \Nogrod\eBaySDK\Trading\MyeBayFavoriteSellerListType $favoriteSellers
     * @return self
     */
    public function setFavoriteSellers(\Nogrod\eBaySDK\Trading\MyeBayFavoriteSellerListType $favoriteSellers)
    {
        $this->favoriteSellers = $favoriteSellers;
        return $this;
    }

    /**
     * Adds as secondChanceOffer
     *
     * This container consists of the items on which the eBay user has received a Second Chance Offer. This container will be returned if the eBay user has made one or more Second Chance Offers.
     *  <br><br>
     *  This container will not be returned in the response (even if user has received Second Chance Offers) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>SecondChanceOffer.Include</b> field is omitted or set to <code>false</code>.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ItemType $secondChanceOffer
     */
    public function addToSecondChanceOffer(\Nogrod\eBaySDK\Trading\ItemType $secondChanceOffer)
    {
        $this->secondChanceOffer[] = $secondChanceOffer;
        return $this;
    }

    /**
     * isset secondChanceOffer
     *
     * This container consists of the items on which the eBay user has received a Second Chance Offer. This container will be returned if the eBay user has made one or more Second Chance Offers.
     *  <br><br>
     *  This container will not be returned in the response (even if user has received Second Chance Offers) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>SecondChanceOffer.Include</b> field is omitted or set to <code>false</code>.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSecondChanceOffer($index)
    {
        return isset($this->secondChanceOffer[$index]);
    }

    /**
     * unset secondChanceOffer
     *
     * This container consists of the items on which the eBay user has received a Second Chance Offer. This container will be returned if the eBay user has made one or more Second Chance Offers.
     *  <br><br>
     *  This container will not be returned in the response (even if user has received Second Chance Offers) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>SecondChanceOffer.Include</b> field is omitted or set to <code>false</code>.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSecondChanceOffer($index)
    {
        unset($this->secondChanceOffer[$index]);
    }

    /**
     * Gets as secondChanceOffer
     *
     * This container consists of the items on which the eBay user has received a Second Chance Offer. This container will be returned if the eBay user has made one or more Second Chance Offers.
     *  <br><br>
     *  This container will not be returned in the response (even if user has received Second Chance Offers) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>SecondChanceOffer.Include</b> field is omitted or set to <code>false</code>.
     *
     * @return \Nogrod\eBaySDK\Trading\ItemType[]
     */
    public function getSecondChanceOffer()
    {
        return $this->secondChanceOffer;
    }

    /**
     * Sets a new secondChanceOffer
     *
     * This container consists of the items on which the eBay user has received a Second Chance Offer. This container will be returned if the eBay user has made one or more Second Chance Offers.
     *  <br><br>
     *  This container will not be returned in the response (even if user has received Second Chance Offers) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>SecondChanceOffer.Include</b> field is omitted or set to <code>false</code>.
     *
     * @param \Nogrod\eBaySDK\Trading\ItemType[] $secondChanceOffer
     * @return self
     */
    public function setSecondChanceOffer(array $secondChanceOffer)
    {
        $this->secondChanceOffer = $secondChanceOffer;
        return $this;
    }

    /**
     * Adds as bidGroup
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\BidGroupType $bidGroup
     */
    public function addToBidAssistantList(\Nogrod\eBaySDK\Trading\BidGroupType $bidGroup)
    {
        $this->bidAssistantList[] = $bidGroup;
        return $this;
    }

    /**
     * isset bidAssistantList
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBidAssistantList($index)
    {
        return isset($this->bidAssistantList[$index]);
    }

    /**
     * unset bidAssistantList
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBidAssistantList($index)
    {
        unset($this->bidAssistantList[$index]);
    }

    /**
     * Gets as bidAssistantList
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\BidGroupType[]
     */
    public function getBidAssistantList()
    {
        return $this->bidAssistantList;
    }

    /**
     * Sets a new bidAssistantList
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\BidGroupType[] $bidAssistantList
     * @return self
     */
    public function setBidAssistantList(array $bidAssistantList)
    {
        $this->bidAssistantList = $bidAssistantList;
        return $this;
    }

    /**
     * Gets as deletedFromWonList
     *
     * This container consists of the auction items on which the eBay user has won but deleted from their My eBay page. This container will be returned if the eBay user has won one or more auction items but have deleted these items from My eBay.
     *  <br><br>
     *  This container will not be returned in the response (even if they have won and then deleted one or more items) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>DeletedFromWonList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @return \Nogrod\eBaySDK\Trading\PaginatedOrderTransactionArrayType
     */
    public function getDeletedFromWonList()
    {
        return $this->deletedFromWonList;
    }

    /**
     * Sets a new deletedFromWonList
     *
     * This container consists of the auction items on which the eBay user has won but deleted from their My eBay page. This container will be returned if the eBay user has won one or more auction items but have deleted these items from My eBay.
     *  <br><br>
     *  This container will not be returned in the response (even if they have won and then deleted one or more items) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>DeletedFromWonList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @param \Nogrod\eBaySDK\Trading\PaginatedOrderTransactionArrayType $deletedFromWonList
     * @return self
     */
    public function setDeletedFromWonList(\Nogrod\eBaySDK\Trading\PaginatedOrderTransactionArrayType $deletedFromWonList)
    {
        $this->deletedFromWonList = $deletedFromWonList;
        return $this;
    }

    /**
     * Gets as deletedFromLostList
     *
     * This container consists of the auction items on which the eBay user has lost and then deleted from their My eBay page. This container will be returned if the eBay user has lost one or more auction items and then deleted those items from My eBay.
     *  <br><br>
     *  This container will not be returned in the response (even if they have lost and then deleted one or more items) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>DeletedFromLostList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @return \Nogrod\eBaySDK\Trading\PaginatedItemArrayType
     */
    public function getDeletedFromLostList()
    {
        return $this->deletedFromLostList;
    }

    /**
     * Sets a new deletedFromLostList
     *
     * This container consists of the auction items on which the eBay user has lost and then deleted from their My eBay page. This container will be returned if the eBay user has lost one or more auction items and then deleted those items from My eBay.
     *  <br><br>
     *  This container will not be returned in the response (even if they have lost and then deleted one or more items) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>DeletedFromLostList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @param \Nogrod\eBaySDK\Trading\PaginatedItemArrayType $deletedFromLostList
     * @return self
     */
    public function setDeletedFromLostList(\Nogrod\eBaySDK\Trading\PaginatedItemArrayType $deletedFromLostList)
    {
        $this->deletedFromLostList = $deletedFromLostList;
        return $this;
    }

    /**
     * Adds as userDefinedList
     *
     * This container consists of data for a user-defined list that was created by the user in My eBay. User-defined lists consists of a combination of items, saved sellers, and/or saved searches.
     *  <br><br>
     *  This container will not be returned in the response (even if one or more user-defined lists exist) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>UserDefinedList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\UserDefinedListType $userDefinedList
     */
    public function addToUserDefinedList(\Nogrod\eBaySDK\Trading\UserDefinedListType $userDefinedList)
    {
        $this->userDefinedList[] = $userDefinedList;
        return $this;
    }

    /**
     * isset userDefinedList
     *
     * This container consists of data for a user-defined list that was created by the user in My eBay. User-defined lists consists of a combination of items, saved sellers, and/or saved searches.
     *  <br><br>
     *  This container will not be returned in the response (even if one or more user-defined lists exist) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>UserDefinedList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUserDefinedList($index)
    {
        return isset($this->userDefinedList[$index]);
    }

    /**
     * unset userDefinedList
     *
     * This container consists of data for a user-defined list that was created by the user in My eBay. User-defined lists consists of a combination of items, saved sellers, and/or saved searches.
     *  <br><br>
     *  This container will not be returned in the response (even if one or more user-defined lists exist) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>UserDefinedList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUserDefinedList($index)
    {
        unset($this->userDefinedList[$index]);
    }

    /**
     * Gets as userDefinedList
     *
     * This container consists of data for a user-defined list that was created by the user in My eBay. User-defined lists consists of a combination of items, saved sellers, and/or saved searches.
     *  <br><br>
     *  This container will not be returned in the response (even if one or more user-defined lists exist) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>UserDefinedList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @return \Nogrod\eBaySDK\Trading\UserDefinedListType[]
     */
    public function getUserDefinedList()
    {
        return $this->userDefinedList;
    }

    /**
     * Sets a new userDefinedList
     *
     * This container consists of data for a user-defined list that was created by the user in My eBay. User-defined lists consists of a combination of items, saved sellers, and/or saved searches.
     *  <br><br>
     *  This container will not be returned in the response (even if one or more user-defined lists exist) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>UserDefinedList.Include</b> field is omitted or set to <code>false</code>.
     *
     * @param \Nogrod\eBaySDK\Trading\UserDefinedListType[] $userDefinedList
     * @return self
     */
    public function setUserDefinedList(array $userDefinedList)
    {
        $this->userDefinedList = $userDefinedList;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getBuyingSummary();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyingSummary", $value);
        }
        $value = $this->getWatchList();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}WatchList", $value);
        }
        $value = $this->getBidList();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BidList", $value);
        }
        $value = $this->getBestOfferList();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BestOfferList", $value);
        }
        $value = $this->getWonList();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}WonList", $value);
        }
        $value = $this->getLostList();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LostList", $value);
        }
        $value = $this->getFavoriteSearches();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FavoriteSearches", $value);
        }
        $value = $this->getFavoriteSellers();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FavoriteSellers", $value);
        }
        $value = $this->getSecondChanceOffer();
        if (null !== $value && !empty($this->getSecondChanceOffer())) {
            $writer->write(array_map(function ($v) {
                return ["SecondChanceOffer" => $v];
            }, $value));
        }
        $value = $this->getBidAssistantList();
        if (null !== $value && !empty($this->getBidAssistantList())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BidAssistantList", array_map(function ($v) {
                return ["BidGroup" => $v];
            }, $value));
        }
        $value = $this->getDeletedFromWonList();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DeletedFromWonList", $value);
        }
        $value = $this->getDeletedFromLostList();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DeletedFromLostList", $value);
        }
        $value = $this->getUserDefinedList();
        if (null !== $value && !empty($this->getUserDefinedList())) {
            $writer->write(array_map(function ($v) {
                return ["UserDefinedList" => $v];
            }, $value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader)
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue)
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue)
    {
        parent::setKeyValue($keyValue);
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyingSummary');
        if (null !== $value) {
            $this->setBuyingSummary(\Nogrod\eBaySDK\Trading\BuyingSummaryType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}WatchList');
        if (null !== $value) {
            $this->setWatchList(\Nogrod\eBaySDK\Trading\PaginatedItemArrayType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BidList');
        if (null !== $value) {
            $this->setBidList(\Nogrod\eBaySDK\Trading\PaginatedItemArrayType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BestOfferList');
        if (null !== $value) {
            $this->setBestOfferList(\Nogrod\eBaySDK\Trading\PaginatedItemArrayType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}WonList');
        if (null !== $value) {
            $this->setWonList(\Nogrod\eBaySDK\Trading\PaginatedOrderTransactionArrayType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LostList');
        if (null !== $value) {
            $this->setLostList(\Nogrod\eBaySDK\Trading\PaginatedItemArrayType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FavoriteSearches');
        if (null !== $value) {
            $this->setFavoriteSearches(\Nogrod\eBaySDK\Trading\MyeBayFavoriteSearchListType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FavoriteSellers');
        if (null !== $value) {
            $this->setFavoriteSellers(\Nogrod\eBaySDK\Trading\MyeBayFavoriteSellerListType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SecondChanceOffer', true);
        if (null !== $value && !empty($value)) {
            $this->setSecondChanceOffer(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ItemType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BidAssistantList', true);
        if (null !== $value && !empty($value)) {
            $this->setBidAssistantList(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\BidGroupType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DeletedFromWonList');
        if (null !== $value) {
            $this->setDeletedFromWonList(\Nogrod\eBaySDK\Trading\PaginatedOrderTransactionArrayType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DeletedFromLostList');
        if (null !== $value) {
            $this->setDeletedFromLostList(\Nogrod\eBaySDK\Trading\PaginatedItemArrayType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserDefinedList', true);
        if (null !== $value && !empty($value)) {
            $this->setUserDefinedList(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\UserDefinedListType::fromKeyValue($v);
            }, $value));
        }
    }
}
