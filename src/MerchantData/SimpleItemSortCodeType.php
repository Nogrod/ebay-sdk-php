<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing SimpleItemSortCodeType
 *
 * This enumerated type defines the sort values that can be used in the
 *  <b>FavoriteSearch.ItemSort</b> filter in a <b>GetMyeBayBuying</b>
 *  request.
 * XSD Type: SimpleItemSortCodeType
 */
class SimpleItemSortCodeType
{

    /**
     * Constant for 'BestMatch' value.
     *
     * Sorts items by Best Match, and no sort order applies. If specified,
     *  then Best Match sort also applies to CategoryHistogram.
     */
    public const VAL_BEST_MATCH = 'BestMatch';

    /**
     * Constant for 'CustomCode' value.
     *
     * This value is reserved for future or internal use.
     */
    public const VAL_CUSTOM_CODE = 'CustomCode';

    /**
     * Constant for 'EndTime' value.
     *
     * Sorts by the end time of the listing, in ascending or descending order according
     * to the
     *  <b>SortOrder</b> value.
     */
    public const VAL_END_TIME = 'EndTime';

    /**
     * Constant for 'BidCount' value.
     *
     * Sorts by number of bids on the item, in ascending or descending order according
     * to the
     *  <b>SortOrder</b> value.
     */
    public const VAL_BID_COUNT = 'BidCount';

    /**
     * Constant for 'Country' value.
     *
     * Sorts by country; no sort order can be specified.
     */
    public const VAL_COUNTRY = 'Country';

    /**
     * Constant for 'CurrentBid' value.
     *
     * Sorts by current bid; descending order only.
     */
    public const VAL_CURRENT_BID = 'CurrentBid';

    /**
     * Constant for 'Distance' value.
     *
     * Sorts by distance; ascending order only.
     */
    public const VAL_DISTANCE = 'Distance';

    /**
     * Constant for 'StartDate' value.
     *
     * Sorts by the start time of the listing; recently-listed first.
     */
    public const VAL_START_DATE = 'StartDate';

    /**
     * Constant for 'BestMatchCategoryGroup' value.
     *
     * Sorts by BestMatchCategoryGroup, so results are grouped by Best Match within a
     * category.
     */
    public const VAL_BEST_MATCH_CATEGORY_GROUP = 'BestMatchCategoryGroup';

    /**
     * Constant for 'PricePlusShipping' value.
     *
     * Sorts by total cost, which is item cost plus shipping cost. If
     *  <b>SortOrder</b> is included and set to 'Ascending', items are sorted
     *  in the following order: Lowest total cost (for items where shipping was
     *  properly specified); then freight-shipping items (lowest to highest); and
     * finally,
     *  items for which shipping was not specified (lowest to highest).
     */
    public const VAL_PRICE_PLUS_SHIPPING = 'PricePlusShipping';

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
