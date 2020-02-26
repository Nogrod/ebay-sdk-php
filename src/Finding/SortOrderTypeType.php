<?php

namespace Nogrod\eBaySDK\Finding;

/**
 * Class representing SortOrderTypeType
 *
 * Values that can be used to sort search results.
 * XSD Type: SortOrderType
 */
class SortOrderTypeType
{

    /**
     * Constant for 'BestMatch' value.
     *
     * Sorts items by Best Match, which is based on community buying activity
     *  and other relevance-based factors.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  eBay site search results sorted by Best Match may not match the API
     *  search results sorted by Best Match. The site Best Match algorithm takes
     *  into account additional factors, such as user information, not available
     *  to the API.
     *  </span>
     */
    public const VAL_BEST_MATCH = 'BestMatch';

    /**
     * Constant for 'CurrentPriceHighest' value.
     *
     * Sorts items by their current price, with the highest price first.
     */
    public const VAL_CURRENT_PRICE_HIGHEST = 'CurrentPriceHighest';

    /**
     * Constant for 'DistanceNearest' value.
     *
     * Sorts items by distance from the buyer in ascending order. The request
     *  must also include a <strong>buyerPostalCode</strong>.
     */
    public const VAL_DISTANCE_NEAREST = 'DistanceNearest';

    /**
     * Constant for 'EndTimeSoonest' value.
     *
     * Sorts items by end time, with items ending soonest listed first.
     */
    public const VAL_END_TIME_SOONEST = 'EndTimeSoonest';

    /**
     * Constant for 'PricePlusShippingLowest' value.
     *
     * Sorts items by the combined cost of the item price plus the shipping
     *  cost, with the lowest combined price items listed first. Items are
     *  returned in the following groupings: lowest total-cost items (for items
     *  where shipping was properly specified) appear first, followed by freight-
     *  shipping items, and then items for which no shipping was specified. Each
     *  group is sorted by price.
     */
    public const VAL_PRICE_PLUS_SHIPPING_LOWEST = 'PricePlusShippingLowest';

    /**
     * Constant for 'PricePlusShippingHighest' value.
     *
     * Sorts items by the combined cost of the item price plus the shipping
     *  cost, with highest combined price items listed first. Items are returned
     *  in the following groupings: highest total-cost items (for items where
     *  shipping was properly specified) appear first, followed by freight-
     *  shipping items, and then items for which no shipping was specified. Each
     *  group is sorted by price.
     */
    public const VAL_PRICE_PLUS_SHIPPING_HIGHEST = 'PricePlusShippingHighest';

    /**
     * Constant for 'StartTimeNewest' value.
     *
     * Sorts items by the start time, the most recently listed (newest) items
     *  appear first.
     */
    public const VAL_START_TIME_NEWEST = 'StartTimeNewest';

    /**
     * Constant for 'BidCountMost' value.
     *
     * Sorts items by the number of bids they have received, with items that
     *  have received the most bids first.
     *  <br><br>
     *  Sorting by bid count is supported on the eBay US (global ID EBAY-US),
     *  eBay Germany (global ID EBAY-DE), and eBay Australia (global ID EBAY-AU)
     *  sites only. To sort by bid count, you must specify a listing type filter
     *  to limit results to auction listings only (e.g., <code>&
     *  itemFilter.name=ListingType&itemFilter.value=Auction</code>).
     */
    public const VAL_BID_COUNT_MOST = 'BidCountMost';

    /**
     * Constant for 'BidCountFewest' value.
     *
     * Sorts items by the number of bids they have received, with items that
     *  have received the fewest bids first.
     *  <br><br>
     *  Sorting by bid count is supported on the eBay US (global ID EBAY-US),
     *  eBay Germany (global ID EBAY-DE), and eBay Australia (global ID EBAY-AU)
     *  sites only. To sort by bid count, you must specify a listing type filter
     *  to limit results to auction listings only (e.g., <code>&
     *  itemFilter.name=ListingType&itemFilter.value=Auction</code>).
     */
    public const VAL_BID_COUNT_FEWEST = 'BidCountFewest';

    /**
     * Constant for 'CountryAscending' value.
     *
     * Sorts items available on the the given site (as specified by <a
     *  href="https://developer.ebay.com/devzone/finding/concepts/makingacall.html#standardurlparameters"
     *  >global ID in the HTTP header or URL parameter</a>) by the
     *  country in which they are located. For CountryAscending, items located in
     *  the country most closely associated with the site appear first, followed
     *  by items in related countries, and then items from other countries.
     *  <br><br>
     *  For example, when searching the Ireland site, items located in Ireland
     *  (IE) will be returned first, followed by items located in related
     *  countries like the United Kingdom (GB), the United States (US), Hong Kong
     *  (HK), and Singapore (SG) next. Remaining items are sorted in alphabetical
     *  order by English country name (regardless of the language for the site),
     *  with some exceptions (e.g., United States sorts first, APO/FPO sorts
     *  near the end).
     *  <br><br>
     *  CountryAscending applies to the following sites only: Austria (EBAY-AT),
     *  Belgium-French (EBAY-FRBE), Belgium-Netherlands (EBAY-NLBE), Germany
     *  (EBAY-DE), Ireland (EBAY-IE), Netherlands (EBAY-NL), Poland (EBAY-PL),
     *  Spain (EBAY-ES), and Switzerland (EBAY-CH).
     */
    public const VAL_COUNTRY_ASCENDING = 'CountryAscending';

    /**
     * Constant for 'CountryDescending' value.
     *
     * Sorts items available on the the given site (as specified by global ID in
     *  the HTTP header or URL parameter) by the country in which they are
     *  located. For CountryDescending, items are sorted in reverse order of
     *  CountryAscending. That is, items in countries not specifically related to
     *  the site appear first, sorted in descending alphabetical order by English
     *  country name. For example, when searching the Ireland site, items located
     *  in countries like Yugoslavia or Uganda are returned first. Items located
     *  in Ireland (IE) will be returned last.
     *  <br><br>
     *  CountryDescending applies to the following sites only: Austria (EBAY-AT),
     *  Belgium-French (EBAY-FRBE), Belgium-Netherlands (EBAY-NLBE), Germany
     *  (EBAY-DE), Ireland (EBAY-IE), Netherlands (EBAY-NL), Poland (EBAY-PL),
     *  Spain (EBAY-ES), and Switzerland (EBAY-CH).
     */
    public const VAL_COUNTRY_DESCENDING = 'CountryDescending';

    /**
     * Constant for 'WatchCountDecreaseSort' value.
     *
     * Sorts items by watch count in decreasing order for the given site.
     *  The items with highest watch count appear earlier in results than those
     *  with lower watch count.
     */
    public const VAL_WATCH_COUNT_DECREASE_SORT = 'WatchCountDecreaseSort';

    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }
}
