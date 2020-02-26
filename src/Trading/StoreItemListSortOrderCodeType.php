<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing StoreItemListSortOrderCodeType
 *
 * List of available options for how items are sorted in an eBay Store.
 * XSD Type: StoreItemListSortOrderCodeType
 */
class StoreItemListSortOrderCodeType
{

    /**
     * Constant for 'EndingFirst' value.
     *
     * Lists items with those ending soon listed first.
     */
    public const VAL_ENDING_FIRST = 'EndingFirst';

    /**
     * Constant for 'NewlyListed' value.
     *
     * Lists items with those newly listed appearing in the list first.
     */
    public const VAL_NEWLY_LISTED = 'NewlyListed';

    /**
     * Constant for 'LowestPriced' value.
     *
     * Lists items by price in ascending order. The item with the lowest
     *  starting price is listed first.
     */
    public const VAL_LOWEST_PRICED = 'LowestPriced';

    /**
     * Constant for 'HighestPriced' value.
     *
     * Lists items by price in descending order. The item with the highest
     *  starting price is listed first.
     */
    public const VAL_HIGHEST_PRICED = 'HighestPriced';

    /**
     * Constant for 'LowestPricedPlusShipping' value.
     *
     * Lists items by combined price and shipping cost in ascending order. The item
     *  with the lowest combined starting price plus shipping cost is listed first.
     */
    public const VAL_LOWEST_PRICED_PLUS_SHIPPING = 'LowestPricedPlusShipping';

    /**
     * Constant for 'HighestPricedPlusShipping' value.
     *
     * Reserved for future use.
     *  Lists items by combined price and shipping cost in descending order. The item
     *  with the highest combined starting price plus shipping cost is listed first.
     */
    public const VAL_HIGHEST_PRICED_PLUS_SHIPPING = 'HighestPricedPlusShipping';

    /**
     * Constant for 'CustomCode' value.
     *
     * (out) Reserved for internal or future use.
     */
    public const VAL_CUSTOM_CODE = 'CustomCode';

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
