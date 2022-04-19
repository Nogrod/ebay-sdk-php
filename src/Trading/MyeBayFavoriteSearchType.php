<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MyeBayFavoriteSearchType
 *
 * Type defining the <b>FavoriteSearch</b> container returned in
 *  <b>GetMyeBayBuying</b>. The <b>FavoriteSearch</b> container
 *  consists of options and filtering used in a buyer's Saved Search on My eBay, and is
 *  only returned in <b>GetMyeBayBuying</b> if the <b>FavoriteSearches</b>
 *  container is included the request, and if there is at least one Saved Search for
 *  the buyer.
 * XSD Type: MyeBayFavoriteSearchType
 */
class MyeBayFavoriteSearchType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The name of the buyer's Saved Search on My eBay. The name defaults to the user's
     *  original search string, or the user has the option of modifying the name of the
     *  Saved Search.
     *
     * @var string $searchName
     */
    private $searchName = null;

    /**
     * This is the URL of the buyer's Saved Search on My eBay.
     *
     * @var string $searchQuery
     */
    private $searchQuery = null;

    /**
     * This string is the original search string of the buyer's Saved Search on My eBay.
     *  This is the string that the user input into the search field.
     *
     * @var string $queryKeywords
     */
    private $queryKeywords = null;

    /**
     * This is the unique identifier (Category ID) of the category in which the user was
     *  searching for the item for the Saved Search. Specifying a category in a query
     *  restricts the search to a specific category. If the Saved Search is not restricted
     *  to a specific category, the <b>CategoryID</b> field will not appear
     *  in the request.
     *
     * @var string $categoryID
     */
    private $categoryID = null;

    /**
     * This enumeration value indicates the "Sort by" value that the user specified in the
     *  Saved Search. Some of the ways buyers can sort items include by Best Match
     *  (generally, the default), item price, item price + shipping, listing end time, and
     *  item distance (relative to the buyer's shipping address). Available sort values
     *  may vary for each search, but below is the complete set of values that may be
     *  returned in this field.
     *
     * @var string $itemSort
     */
    private $itemSort = null;

    /**
     * The <b>SortOrder</b> value works in conjunction with the
     *  <b>ItemSort</b> value, and indicates whether Saved Search results are returned
     *  in ascending (low to high values) or descending (high to low values) order.
     *
     * @var string $sortOrder
     */
    private $sortOrder = null;

    /**
     * The <b>EndTimeFrom</b> and <b>EndTimeFrom</b> values indicates that
     *  a date range has been specified in the Saved Search. Only listings ending during
     *  the date range defined with the <b>EndTimeFrom</b> and
     *  <b>EndTimeFrom</b> values are retrieved in the search results.
     *  <br/><br/>
     *  The <b>EndTimeFrom</b> value indicates the beginning of the date range.
     *
     * @var \DateTime $endTimeFrom
     */
    private $endTimeFrom = null;

    /**
     * The appearance of <b>EndTimeFrom</b> and <b>EndTimeFrom</b>
     *  values in the response indicates that a date range has been specified in the Saved
     *  Search. Only listings ending during the date range defined with the
     *  <b>EndTimeFrom</b> and <b>EndTimeFrom</b> values are
     *  retrieved in the search results.
     *  <br/><br/>
     *  The <b>EndTimeTo</b> value indicates the ending of the date range.
     *
     * @var \DateTime $endTimeTo
     */
    private $endTimeTo = null;

    /**
     * The appearance of a <b>MaxDistance</b> value in the response indicates
     *  that a proximity (Items near me) filter has been specified in the Saved Search.
     *  <br/><br/>
     *  The <b>MaxDistance</b> value is the maximum distance (in miles) away
     *  from the buyer's postal code (specified or default) that an item may be
     *  located (based on the <b>PostalCode</b> value returned in the
     *  <b>FavoriteSearch</b> container). In a Saved Search, a buyer can
     *  supply a postal code or can base that postal code on a major city. If neither one
     *  of these methods for selecting a postal code is used, the postal code defaults to
     *  the buyer's primary shipping address. Only items located within the
     *  <b>MaxDistance</b> value are returned in the search results.
     *
     * @var int $maxDistance
     */
    private $maxDistance = null;

    /**
     * The <b>PostalCode</b> value is either the postal code for the buyer's
     *  primary shipping address, or it is the postal code specified through the proximity
     *  (Items near me) filter of a Saved Search. In a Saved Search, a buyer can supply a
     *  postal code or can base that postal code on a major city.
     *
     * @var string $postalCode
     */
    private $postalCode = null;

    /**
     * Enumerated value that provides more information on the type of listing type
     *  filtering the buyer used when setting up a Saved Search in My eBay.
     *
     * @var string $itemType
     */
    private $itemType = null;

    /**
     * The appearance of a <b>PriceMax</b> value indicates that a maximum price
     *  filter has been specified in the Saved Search. Only listings with an item price at
     *  or below the <b>PriceMax</b> value are retrieved in the search results.
     *  <br/><br/>
     *  <b>PriceMax</b> can be used in conjunction with
     *  <b>PriceMin</b> in a Saved Search to specify a price range. Only
     *  listings with item prices within this price range are retrieved in the search
     *  results.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $priceMax
     */
    private $priceMax = null;

    /**
     * The appearance of a <b>PriceMin</b> value indicates that a minimum price
     *  filter has been specified in the Saved Search. Only listings with an item price at
     *  or above the <b>PriceMin</b> value are retrieved in the search results.
     *  <br/><br/>
     *  <b>PriceMin</b> can be used in conjunction with
     *  <b>PriceMax</b> in a Saved Search to specify a price range. Only
     *  listings with item prices within this price range are retrieved in the search
     *  results.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $priceMin
     */
    private $priceMin = null;

    /**
     * The appearance of a <b>Currency</b> value indicates that a currency
     *  filter has been specified in the Saved Search. Only listings with the specified
     *  <b>Currency</b> value are retrieved in the search results.
     *
     * @var string $currency
     */
    private $currency = null;

    /**
     * The BidCountMax value in a My eBay Favorite Search. The BidCountMax limits the search
     *  results to items with a maximum number of bids.
     *
     * @var int $bidCountMax
     */
    private $bidCountMax = null;

    /**
     * The BidCountMin value in a My eBay Favorite Search. The BidCountMin limits the
     *  results of a search to items with a maximum number of bids.
     *
     * @var int $bidCountMin
     */
    private $bidCountMin = null;

    /**
     * The SearchFlag value in a My eBay Favorite Search. The SearchFlag allows you to
     *  specify whether you want to include charity listings, free-shipping listings, and
     *  listings with other features in your search.
     *
     * @var string[] $searchFlag
     */
    private $searchFlag = [

    ];

    /**
     * This field is no longer applicable, as filtering by a payment method in an advanced item search is no longer supported/applicable.
     *
     * @var string $paymentMethod
     */
    private $paymentMethod = null;

    /**
     * The PreferredLocation value of a My eBay Favorite Search. The PreferredLocation
     *  specifies the criteria for filtering search results by site, where site is determined
     *  by the site ID in the request.
     *
     * @var string $preferredLocation
     */
    private $preferredLocation = null;

    /**
     * The SellerID value in a My eBay Favorite Search. The SellerID is the eBay ID of a
     *  specific seller.
     *
     * @var string[] $sellerID
     */
    private $sellerID = [

    ];

    /**
     * The SellerIDExclude value in a My eBay Favorite Search. The SellerIDExclude limits
     *  the search results to exclude items sold by a specific seller or by specific sellers.
     *
     * @var string[] $sellerIDExclude
     */
    private $sellerIDExclude = [

    ];

    /**
     * The ItemsAvailableTo value in a My eBay Favorite Search. ItemsAvailableTo limits the
     *  result set to just those items available to the specified country.
     *
     * @var string $itemsAvailableTo
     */
    private $itemsAvailableTo = null;

    /**
     * The ItemsLocatedIn value in a My eBay Favorite Search. ItemsLocatedIn limits the
     *  result set to just those items located in the specified country.
     *
     * @var string $itemsLocatedIn
     */
    private $itemsLocatedIn = null;

    /**
     * The SellerBusinessType value in a My eBay Favorite Search. The SellerBusinessType
     *  limits the search results to those of a particular seller business type such as
     *  commercial or private. SellerBusinessType is only available for sites that have
     *  business seller features enabled.
     *
     * @var string $sellerBusinessType
     */
    private $sellerBusinessType = null;

    /**
     * The Condition value in a My eBay Favorite Search. Condition limits the results to new
     *  or used items, plus items that have no condition specified.
     *
     * @var string $condition
     */
    private $condition = null;

    /**
     * The Quantity value in a My eBay Favorite Search. The Quantity limits the search
     *  results to listings that offer a certain number of items matching the query. The
     *  Quantity field is used with QuantityOperator to specify that you are seeking listings
     *  with quantities greater than, equal to, or less than the value you specify in
     *  Quantity.
     *
     * @var int $quantity
     */
    private $quantity = null;

    /**
     * The Quantity Operator value in a My eBay Favorite Search. The Quantity Operator
     *  limits the results to listings with quantities greater than, equal to, or less than
     *  the value you specify in Quantity.
     *
     * @var string $quantityOperator
     */
    private $quantityOperator = null;

    /**
     * Gets as searchName
     *
     * The name of the buyer's Saved Search on My eBay. The name defaults to the user's
     *  original search string, or the user has the option of modifying the name of the
     *  Saved Search.
     *
     * @return string
     */
    public function getSearchName()
    {
        return $this->searchName;
    }

    /**
     * Sets a new searchName
     *
     * The name of the buyer's Saved Search on My eBay. The name defaults to the user's
     *  original search string, or the user has the option of modifying the name of the
     *  Saved Search.
     *
     * @param string $searchName
     * @return self
     */
    public function setSearchName($searchName)
    {
        $this->searchName = $searchName;
        return $this;
    }

    /**
     * Gets as searchQuery
     *
     * This is the URL of the buyer's Saved Search on My eBay.
     *
     * @return string
     */
    public function getSearchQuery()
    {
        return $this->searchQuery;
    }

    /**
     * Sets a new searchQuery
     *
     * This is the URL of the buyer's Saved Search on My eBay.
     *
     * @param string $searchQuery
     * @return self
     */
    public function setSearchQuery($searchQuery)
    {
        $this->searchQuery = $searchQuery;
        return $this;
    }

    /**
     * Gets as queryKeywords
     *
     * This string is the original search string of the buyer's Saved Search on My eBay.
     *  This is the string that the user input into the search field.
     *
     * @return string
     */
    public function getQueryKeywords()
    {
        return $this->queryKeywords;
    }

    /**
     * Sets a new queryKeywords
     *
     * This string is the original search string of the buyer's Saved Search on My eBay.
     *  This is the string that the user input into the search field.
     *
     * @param string $queryKeywords
     * @return self
     */
    public function setQueryKeywords($queryKeywords)
    {
        $this->queryKeywords = $queryKeywords;
        return $this;
    }

    /**
     * Gets as categoryID
     *
     * This is the unique identifier (Category ID) of the category in which the user was
     *  searching for the item for the Saved Search. Specifying a category in a query
     *  restricts the search to a specific category. If the Saved Search is not restricted
     *  to a specific category, the <b>CategoryID</b> field will not appear
     *  in the request.
     *
     * @return string
     */
    public function getCategoryID()
    {
        return $this->categoryID;
    }

    /**
     * Sets a new categoryID
     *
     * This is the unique identifier (Category ID) of the category in which the user was
     *  searching for the item for the Saved Search. Specifying a category in a query
     *  restricts the search to a specific category. If the Saved Search is not restricted
     *  to a specific category, the <b>CategoryID</b> field will not appear
     *  in the request.
     *
     * @param string $categoryID
     * @return self
     */
    public function setCategoryID($categoryID)
    {
        $this->categoryID = $categoryID;
        return $this;
    }

    /**
     * Gets as itemSort
     *
     * This enumeration value indicates the "Sort by" value that the user specified in the
     *  Saved Search. Some of the ways buyers can sort items include by Best Match
     *  (generally, the default), item price, item price + shipping, listing end time, and
     *  item distance (relative to the buyer's shipping address). Available sort values
     *  may vary for each search, but below is the complete set of values that may be
     *  returned in this field.
     *
     * @return string
     */
    public function getItemSort()
    {
        return $this->itemSort;
    }

    /**
     * Sets a new itemSort
     *
     * This enumeration value indicates the "Sort by" value that the user specified in the
     *  Saved Search. Some of the ways buyers can sort items include by Best Match
     *  (generally, the default), item price, item price + shipping, listing end time, and
     *  item distance (relative to the buyer's shipping address). Available sort values
     *  may vary for each search, but below is the complete set of values that may be
     *  returned in this field.
     *
     * @param string $itemSort
     * @return self
     */
    public function setItemSort($itemSort)
    {
        $this->itemSort = $itemSort;
        return $this;
    }

    /**
     * Gets as sortOrder
     *
     * The <b>SortOrder</b> value works in conjunction with the
     *  <b>ItemSort</b> value, and indicates whether Saved Search results are returned
     *  in ascending (low to high values) or descending (high to low values) order.
     *
     * @return string
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * Sets a new sortOrder
     *
     * The <b>SortOrder</b> value works in conjunction with the
     *  <b>ItemSort</b> value, and indicates whether Saved Search results are returned
     *  in ascending (low to high values) or descending (high to low values) order.
     *
     * @param string $sortOrder
     * @return self
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;
        return $this;
    }

    /**
     * Gets as endTimeFrom
     *
     * The <b>EndTimeFrom</b> and <b>EndTimeFrom</b> values indicates that
     *  a date range has been specified in the Saved Search. Only listings ending during
     *  the date range defined with the <b>EndTimeFrom</b> and
     *  <b>EndTimeFrom</b> values are retrieved in the search results.
     *  <br/><br/>
     *  The <b>EndTimeFrom</b> value indicates the beginning of the date range.
     *
     * @return \DateTime
     */
    public function getEndTimeFrom()
    {
        return $this->endTimeFrom;
    }

    /**
     * Sets a new endTimeFrom
     *
     * The <b>EndTimeFrom</b> and <b>EndTimeFrom</b> values indicates that
     *  a date range has been specified in the Saved Search. Only listings ending during
     *  the date range defined with the <b>EndTimeFrom</b> and
     *  <b>EndTimeFrom</b> values are retrieved in the search results.
     *  <br/><br/>
     *  The <b>EndTimeFrom</b> value indicates the beginning of the date range.
     *
     * @param \DateTime $endTimeFrom
     * @return self
     */
    public function setEndTimeFrom(\DateTime $endTimeFrom)
    {
        $this->endTimeFrom = $endTimeFrom;
        return $this;
    }

    /**
     * Gets as endTimeTo
     *
     * The appearance of <b>EndTimeFrom</b> and <b>EndTimeFrom</b>
     *  values in the response indicates that a date range has been specified in the Saved
     *  Search. Only listings ending during the date range defined with the
     *  <b>EndTimeFrom</b> and <b>EndTimeFrom</b> values are
     *  retrieved in the search results.
     *  <br/><br/>
     *  The <b>EndTimeTo</b> value indicates the ending of the date range.
     *
     * @return \DateTime
     */
    public function getEndTimeTo()
    {
        return $this->endTimeTo;
    }

    /**
     * Sets a new endTimeTo
     *
     * The appearance of <b>EndTimeFrom</b> and <b>EndTimeFrom</b>
     *  values in the response indicates that a date range has been specified in the Saved
     *  Search. Only listings ending during the date range defined with the
     *  <b>EndTimeFrom</b> and <b>EndTimeFrom</b> values are
     *  retrieved in the search results.
     *  <br/><br/>
     *  The <b>EndTimeTo</b> value indicates the ending of the date range.
     *
     * @param \DateTime $endTimeTo
     * @return self
     */
    public function setEndTimeTo(\DateTime $endTimeTo)
    {
        $this->endTimeTo = $endTimeTo;
        return $this;
    }

    /**
     * Gets as maxDistance
     *
     * The appearance of a <b>MaxDistance</b> value in the response indicates
     *  that a proximity (Items near me) filter has been specified in the Saved Search.
     *  <br/><br/>
     *  The <b>MaxDistance</b> value is the maximum distance (in miles) away
     *  from the buyer's postal code (specified or default) that an item may be
     *  located (based on the <b>PostalCode</b> value returned in the
     *  <b>FavoriteSearch</b> container). In a Saved Search, a buyer can
     *  supply a postal code or can base that postal code on a major city. If neither one
     *  of these methods for selecting a postal code is used, the postal code defaults to
     *  the buyer's primary shipping address. Only items located within the
     *  <b>MaxDistance</b> value are returned in the search results.
     *
     * @return int
     */
    public function getMaxDistance()
    {
        return $this->maxDistance;
    }

    /**
     * Sets a new maxDistance
     *
     * The appearance of a <b>MaxDistance</b> value in the response indicates
     *  that a proximity (Items near me) filter has been specified in the Saved Search.
     *  <br/><br/>
     *  The <b>MaxDistance</b> value is the maximum distance (in miles) away
     *  from the buyer's postal code (specified or default) that an item may be
     *  located (based on the <b>PostalCode</b> value returned in the
     *  <b>FavoriteSearch</b> container). In a Saved Search, a buyer can
     *  supply a postal code or can base that postal code on a major city. If neither one
     *  of these methods for selecting a postal code is used, the postal code defaults to
     *  the buyer's primary shipping address. Only items located within the
     *  <b>MaxDistance</b> value are returned in the search results.
     *
     * @param int $maxDistance
     * @return self
     */
    public function setMaxDistance($maxDistance)
    {
        $this->maxDistance = $maxDistance;
        return $this;
    }

    /**
     * Gets as postalCode
     *
     * The <b>PostalCode</b> value is either the postal code for the buyer's
     *  primary shipping address, or it is the postal code specified through the proximity
     *  (Items near me) filter of a Saved Search. In a Saved Search, a buyer can supply a
     *  postal code or can base that postal code on a major city.
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Sets a new postalCode
     *
     * The <b>PostalCode</b> value is either the postal code for the buyer's
     *  primary shipping address, or it is the postal code specified through the proximity
     *  (Items near me) filter of a Saved Search. In a Saved Search, a buyer can supply a
     *  postal code or can base that postal code on a major city.
     *
     * @param string $postalCode
     * @return self
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * Gets as itemType
     *
     * Enumerated value that provides more information on the type of listing type
     *  filtering the buyer used when setting up a Saved Search in My eBay.
     *
     * @return string
     */
    public function getItemType()
    {
        return $this->itemType;
    }

    /**
     * Sets a new itemType
     *
     * Enumerated value that provides more information on the type of listing type
     *  filtering the buyer used when setting up a Saved Search in My eBay.
     *
     * @param string $itemType
     * @return self
     */
    public function setItemType($itemType)
    {
        $this->itemType = $itemType;
        return $this;
    }

    /**
     * Gets as priceMax
     *
     * The appearance of a <b>PriceMax</b> value indicates that a maximum price
     *  filter has been specified in the Saved Search. Only listings with an item price at
     *  or below the <b>PriceMax</b> value are retrieved in the search results.
     *  <br/><br/>
     *  <b>PriceMax</b> can be used in conjunction with
     *  <b>PriceMin</b> in a Saved Search to specify a price range. Only
     *  listings with item prices within this price range are retrieved in the search
     *  results.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getPriceMax()
    {
        return $this->priceMax;
    }

    /**
     * Sets a new priceMax
     *
     * The appearance of a <b>PriceMax</b> value indicates that a maximum price
     *  filter has been specified in the Saved Search. Only listings with an item price at
     *  or below the <b>PriceMax</b> value are retrieved in the search results.
     *  <br/><br/>
     *  <b>PriceMax</b> can be used in conjunction with
     *  <b>PriceMin</b> in a Saved Search to specify a price range. Only
     *  listings with item prices within this price range are retrieved in the search
     *  results.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $priceMax
     * @return self
     */
    public function setPriceMax(\Nogrod\eBaySDK\Trading\AmountType $priceMax)
    {
        $this->priceMax = $priceMax;
        return $this;
    }

    /**
     * Gets as priceMin
     *
     * The appearance of a <b>PriceMin</b> value indicates that a minimum price
     *  filter has been specified in the Saved Search. Only listings with an item price at
     *  or above the <b>PriceMin</b> value are retrieved in the search results.
     *  <br/><br/>
     *  <b>PriceMin</b> can be used in conjunction with
     *  <b>PriceMax</b> in a Saved Search to specify a price range. Only
     *  listings with item prices within this price range are retrieved in the search
     *  results.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getPriceMin()
    {
        return $this->priceMin;
    }

    /**
     * Sets a new priceMin
     *
     * The appearance of a <b>PriceMin</b> value indicates that a minimum price
     *  filter has been specified in the Saved Search. Only listings with an item price at
     *  or above the <b>PriceMin</b> value are retrieved in the search results.
     *  <br/><br/>
     *  <b>PriceMin</b> can be used in conjunction with
     *  <b>PriceMax</b> in a Saved Search to specify a price range. Only
     *  listings with item prices within this price range are retrieved in the search
     *  results.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $priceMin
     * @return self
     */
    public function setPriceMin(\Nogrod\eBaySDK\Trading\AmountType $priceMin)
    {
        $this->priceMin = $priceMin;
        return $this;
    }

    /**
     * Gets as currency
     *
     * The appearance of a <b>Currency</b> value indicates that a currency
     *  filter has been specified in the Saved Search. Only listings with the specified
     *  <b>Currency</b> value are retrieved in the search results.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets a new currency
     *
     * The appearance of a <b>Currency</b> value indicates that a currency
     *  filter has been specified in the Saved Search. Only listings with the specified
     *  <b>Currency</b> value are retrieved in the search results.
     *
     * @param string $currency
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Gets as bidCountMax
     *
     * The BidCountMax value in a My eBay Favorite Search. The BidCountMax limits the search
     *  results to items with a maximum number of bids.
     *
     * @return int
     */
    public function getBidCountMax()
    {
        return $this->bidCountMax;
    }

    /**
     * Sets a new bidCountMax
     *
     * The BidCountMax value in a My eBay Favorite Search. The BidCountMax limits the search
     *  results to items with a maximum number of bids.
     *
     * @param int $bidCountMax
     * @return self
     */
    public function setBidCountMax($bidCountMax)
    {
        $this->bidCountMax = $bidCountMax;
        return $this;
    }

    /**
     * Gets as bidCountMin
     *
     * The BidCountMin value in a My eBay Favorite Search. The BidCountMin limits the
     *  results of a search to items with a maximum number of bids.
     *
     * @return int
     */
    public function getBidCountMin()
    {
        return $this->bidCountMin;
    }

    /**
     * Sets a new bidCountMin
     *
     * The BidCountMin value in a My eBay Favorite Search. The BidCountMin limits the
     *  results of a search to items with a maximum number of bids.
     *
     * @param int $bidCountMin
     * @return self
     */
    public function setBidCountMin($bidCountMin)
    {
        $this->bidCountMin = $bidCountMin;
        return $this;
    }

    /**
     * Adds as searchFlag
     *
     * The SearchFlag value in a My eBay Favorite Search. The SearchFlag allows you to
     *  specify whether you want to include charity listings, free-shipping listings, and
     *  listings with other features in your search.
     *
     * @return self
     * @param string $searchFlag
     */
    public function addToSearchFlag($searchFlag)
    {
        $this->searchFlag[] = $searchFlag;
        return $this;
    }

    /**
     * isset searchFlag
     *
     * The SearchFlag value in a My eBay Favorite Search. The SearchFlag allows you to
     *  specify whether you want to include charity listings, free-shipping listings, and
     *  listings with other features in your search.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSearchFlag($index)
    {
        return isset($this->searchFlag[$index]);
    }

    /**
     * unset searchFlag
     *
     * The SearchFlag value in a My eBay Favorite Search. The SearchFlag allows you to
     *  specify whether you want to include charity listings, free-shipping listings, and
     *  listings with other features in your search.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSearchFlag($index)
    {
        unset($this->searchFlag[$index]);
    }

    /**
     * Gets as searchFlag
     *
     * The SearchFlag value in a My eBay Favorite Search. The SearchFlag allows you to
     *  specify whether you want to include charity listings, free-shipping listings, and
     *  listings with other features in your search.
     *
     * @return string[]
     */
    public function getSearchFlag()
    {
        return $this->searchFlag;
    }

    /**
     * Sets a new searchFlag
     *
     * The SearchFlag value in a My eBay Favorite Search. The SearchFlag allows you to
     *  specify whether you want to include charity listings, free-shipping listings, and
     *  listings with other features in your search.
     *
     * @param string $searchFlag
     * @return self
     */
    public function setSearchFlag(array $searchFlag)
    {
        $this->searchFlag = $searchFlag;
        return $this;
    }

    /**
     * Gets as paymentMethod
     *
     * This field is no longer applicable, as filtering by a payment method in an advanced item search is no longer supported/applicable.
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * Sets a new paymentMethod
     *
     * This field is no longer applicable, as filtering by a payment method in an advanced item search is no longer supported/applicable.
     *
     * @param string $paymentMethod
     * @return self
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }

    /**
     * Gets as preferredLocation
     *
     * The PreferredLocation value of a My eBay Favorite Search. The PreferredLocation
     *  specifies the criteria for filtering search results by site, where site is determined
     *  by the site ID in the request.
     *
     * @return string
     */
    public function getPreferredLocation()
    {
        return $this->preferredLocation;
    }

    /**
     * Sets a new preferredLocation
     *
     * The PreferredLocation value of a My eBay Favorite Search. The PreferredLocation
     *  specifies the criteria for filtering search results by site, where site is determined
     *  by the site ID in the request.
     *
     * @param string $preferredLocation
     * @return self
     */
    public function setPreferredLocation($preferredLocation)
    {
        $this->preferredLocation = $preferredLocation;
        return $this;
    }

    /**
     * Adds as sellerID
     *
     * The SellerID value in a My eBay Favorite Search. The SellerID is the eBay ID of a
     *  specific seller.
     *
     * @return self
     * @param string $sellerID
     */
    public function addToSellerID($sellerID)
    {
        $this->sellerID[] = $sellerID;
        return $this;
    }

    /**
     * isset sellerID
     *
     * The SellerID value in a My eBay Favorite Search. The SellerID is the eBay ID of a
     *  specific seller.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSellerID($index)
    {
        return isset($this->sellerID[$index]);
    }

    /**
     * unset sellerID
     *
     * The SellerID value in a My eBay Favorite Search. The SellerID is the eBay ID of a
     *  specific seller.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSellerID($index)
    {
        unset($this->sellerID[$index]);
    }

    /**
     * Gets as sellerID
     *
     * The SellerID value in a My eBay Favorite Search. The SellerID is the eBay ID of a
     *  specific seller.
     *
     * @return string[]
     */
    public function getSellerID()
    {
        return $this->sellerID;
    }

    /**
     * Sets a new sellerID
     *
     * The SellerID value in a My eBay Favorite Search. The SellerID is the eBay ID of a
     *  specific seller.
     *
     * @param string[] $sellerID
     * @return self
     */
    public function setSellerID(array $sellerID)
    {
        $this->sellerID = $sellerID;
        return $this;
    }

    /**
     * Adds as sellerIDExclude
     *
     * The SellerIDExclude value in a My eBay Favorite Search. The SellerIDExclude limits
     *  the search results to exclude items sold by a specific seller or by specific sellers.
     *
     * @return self
     * @param string $sellerIDExclude
     */
    public function addToSellerIDExclude($sellerIDExclude)
    {
        $this->sellerIDExclude[] = $sellerIDExclude;
        return $this;
    }

    /**
     * isset sellerIDExclude
     *
     * The SellerIDExclude value in a My eBay Favorite Search. The SellerIDExclude limits
     *  the search results to exclude items sold by a specific seller or by specific sellers.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSellerIDExclude($index)
    {
        return isset($this->sellerIDExclude[$index]);
    }

    /**
     * unset sellerIDExclude
     *
     * The SellerIDExclude value in a My eBay Favorite Search. The SellerIDExclude limits
     *  the search results to exclude items sold by a specific seller or by specific sellers.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSellerIDExclude($index)
    {
        unset($this->sellerIDExclude[$index]);
    }

    /**
     * Gets as sellerIDExclude
     *
     * The SellerIDExclude value in a My eBay Favorite Search. The SellerIDExclude limits
     *  the search results to exclude items sold by a specific seller or by specific sellers.
     *
     * @return string[]
     */
    public function getSellerIDExclude()
    {
        return $this->sellerIDExclude;
    }

    /**
     * Sets a new sellerIDExclude
     *
     * The SellerIDExclude value in a My eBay Favorite Search. The SellerIDExclude limits
     *  the search results to exclude items sold by a specific seller or by specific sellers.
     *
     * @param string[] $sellerIDExclude
     * @return self
     */
    public function setSellerIDExclude(array $sellerIDExclude)
    {
        $this->sellerIDExclude = $sellerIDExclude;
        return $this;
    }

    /**
     * Gets as itemsAvailableTo
     *
     * The ItemsAvailableTo value in a My eBay Favorite Search. ItemsAvailableTo limits the
     *  result set to just those items available to the specified country.
     *
     * @return string
     */
    public function getItemsAvailableTo()
    {
        return $this->itemsAvailableTo;
    }

    /**
     * Sets a new itemsAvailableTo
     *
     * The ItemsAvailableTo value in a My eBay Favorite Search. ItemsAvailableTo limits the
     *  result set to just those items available to the specified country.
     *
     * @param string $itemsAvailableTo
     * @return self
     */
    public function setItemsAvailableTo($itemsAvailableTo)
    {
        $this->itemsAvailableTo = $itemsAvailableTo;
        return $this;
    }

    /**
     * Gets as itemsLocatedIn
     *
     * The ItemsLocatedIn value in a My eBay Favorite Search. ItemsLocatedIn limits the
     *  result set to just those items located in the specified country.
     *
     * @return string
     */
    public function getItemsLocatedIn()
    {
        return $this->itemsLocatedIn;
    }

    /**
     * Sets a new itemsLocatedIn
     *
     * The ItemsLocatedIn value in a My eBay Favorite Search. ItemsLocatedIn limits the
     *  result set to just those items located in the specified country.
     *
     * @param string $itemsLocatedIn
     * @return self
     */
    public function setItemsLocatedIn($itemsLocatedIn)
    {
        $this->itemsLocatedIn = $itemsLocatedIn;
        return $this;
    }

    /**
     * Gets as sellerBusinessType
     *
     * The SellerBusinessType value in a My eBay Favorite Search. The SellerBusinessType
     *  limits the search results to those of a particular seller business type such as
     *  commercial or private. SellerBusinessType is only available for sites that have
     *  business seller features enabled.
     *
     * @return string
     */
    public function getSellerBusinessType()
    {
        return $this->sellerBusinessType;
    }

    /**
     * Sets a new sellerBusinessType
     *
     * The SellerBusinessType value in a My eBay Favorite Search. The SellerBusinessType
     *  limits the search results to those of a particular seller business type such as
     *  commercial or private. SellerBusinessType is only available for sites that have
     *  business seller features enabled.
     *
     * @param string $sellerBusinessType
     * @return self
     */
    public function setSellerBusinessType($sellerBusinessType)
    {
        $this->sellerBusinessType = $sellerBusinessType;
        return $this;
    }

    /**
     * Gets as condition
     *
     * The Condition value in a My eBay Favorite Search. Condition limits the results to new
     *  or used items, plus items that have no condition specified.
     *
     * @return string
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * The Condition value in a My eBay Favorite Search. Condition limits the results to new
     *  or used items, plus items that have no condition specified.
     *
     * @param string $condition
     * @return self
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * The Quantity value in a My eBay Favorite Search. The Quantity limits the search
     *  results to listings that offer a certain number of items matching the query. The
     *  Quantity field is used with QuantityOperator to specify that you are seeking listings
     *  with quantities greater than, equal to, or less than the value you specify in
     *  Quantity.
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * The Quantity value in a My eBay Favorite Search. The Quantity limits the search
     *  results to listings that offer a certain number of items matching the query. The
     *  Quantity field is used with QuantityOperator to specify that you are seeking listings
     *  with quantities greater than, equal to, or less than the value you specify in
     *  Quantity.
     *
     * @param int $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as quantityOperator
     *
     * The Quantity Operator value in a My eBay Favorite Search. The Quantity Operator
     *  limits the results to listings with quantities greater than, equal to, or less than
     *  the value you specify in Quantity.
     *
     * @return string
     */
    public function getQuantityOperator()
    {
        return $this->quantityOperator;
    }

    /**
     * Sets a new quantityOperator
     *
     * The Quantity Operator value in a My eBay Favorite Search. The Quantity Operator
     *  limits the results to listings with quantities greater than, equal to, or less than
     *  the value you specify in Quantity.
     *
     * @param string $quantityOperator
     * @return self
     */
    public function setQuantityOperator($quantityOperator)
    {
        $this->quantityOperator = $quantityOperator;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getSearchName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SearchName", $value);
        }
        $value = $this->getSearchQuery();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SearchQuery", $value);
        }
        $value = $this->getQueryKeywords();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QueryKeywords", $value);
        }
        $value = $this->getCategoryID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryID", $value);
        }
        $value = $this->getItemSort();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemSort", $value);
        }
        $value = $this->getSortOrder();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SortOrder", $value);
        }
        $value = $this->getEndTimeFrom();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EndTimeFrom", $value);
        }
        $value = $this->getEndTimeTo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EndTimeTo", $value);
        }
        $value = $this->getMaxDistance();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxDistance", $value);
        }
        $value = $this->getPostalCode();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PostalCode", $value);
        }
        $value = $this->getItemType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemType", $value);
        }
        $value = $this->getPriceMax();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PriceMax", $value);
        }
        $value = $this->getPriceMin();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PriceMin", $value);
        }
        $value = $this->getCurrency();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Currency", $value);
        }
        $value = $this->getBidCountMax();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BidCountMax", $value);
        }
        $value = $this->getBidCountMin();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BidCountMin", $value);
        }
        $value = $this->getSearchFlag();
        if (null !== $value && !empty($this->getSearchFlag())) {
            $writer->write(array_map(function ($v) {
                return ["SearchFlag" => $v];
            }, $value));
        }
        $value = $this->getPaymentMethod();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaymentMethod", $value);
        }
        $value = $this->getPreferredLocation();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PreferredLocation", $value);
        }
        $value = $this->getSellerID();
        if (null !== $value && !empty($this->getSellerID())) {
            $writer->write(array_map(function ($v) {
                return ["SellerID" => $v];
            }, $value));
        }
        $value = $this->getSellerIDExclude();
        if (null !== $value && !empty($this->getSellerIDExclude())) {
            $writer->write(array_map(function ($v) {
                return ["SellerIDExclude" => $v];
            }, $value));
        }
        $value = $this->getItemsAvailableTo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemsAvailableTo", $value);
        }
        $value = $this->getItemsLocatedIn();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemsLocatedIn", $value);
        }
        $value = $this->getSellerBusinessType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerBusinessType", $value);
        }
        $value = $this->getCondition();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Condition", $value);
        }
        $value = $this->getQuantity();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Quantity", $value);
        }
        $value = $this->getQuantityOperator();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QuantityOperator", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SearchName');
        if (null !== $value) {
            $this->setSearchName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SearchQuery');
        if (null !== $value) {
            $this->setSearchQuery($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QueryKeywords');
        if (null !== $value) {
            $this->setQueryKeywords($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryID');
        if (null !== $value) {
            $this->setCategoryID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemSort');
        if (null !== $value) {
            $this->setItemSort($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SortOrder');
        if (null !== $value) {
            $this->setSortOrder($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EndTimeFrom');
        if (null !== $value) {
            $this->setEndTimeFrom(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EndTimeTo');
        if (null !== $value) {
            $this->setEndTimeTo(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxDistance');
        if (null !== $value) {
            $this->setMaxDistance($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PostalCode');
        if (null !== $value) {
            $this->setPostalCode($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemType');
        if (null !== $value) {
            $this->setItemType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PriceMax');
        if (null !== $value) {
            $this->setPriceMax(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PriceMin');
        if (null !== $value) {
            $this->setPriceMin(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Currency');
        if (null !== $value) {
            $this->setCurrency($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BidCountMax');
        if (null !== $value) {
            $this->setBidCountMax($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BidCountMin');
        if (null !== $value) {
            $this->setBidCountMin($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SearchFlag', true);
        if (null !== $value && !empty($value)) {
            $this->setSearchFlag($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentMethod');
        if (null !== $value) {
            $this->setPaymentMethod($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PreferredLocation');
        if (null !== $value) {
            $this->setPreferredLocation($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerID', true);
        if (null !== $value && !empty($value)) {
            $this->setSellerID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerIDExclude', true);
        if (null !== $value && !empty($value)) {
            $this->setSellerIDExclude($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemsAvailableTo');
        if (null !== $value) {
            $this->setItemsAvailableTo($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemsLocatedIn');
        if (null !== $value) {
            $this->setItemsLocatedIn($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerBusinessType');
        if (null !== $value) {
            $this->setSellerBusinessType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Condition');
        if (null !== $value) {
            $this->setCondition($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Quantity');
        if (null !== $value) {
            $this->setQuantity($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QuantityOperator');
        if (null !== $value) {
            $this->setQuantityOperator($value);
        }
    }
}
