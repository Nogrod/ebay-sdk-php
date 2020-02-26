<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing ItemSortFilterCodeType
 *
 * This enumerated type is deprecated.
 * XSD Type: ItemSortFilterCodeType
 */
class ItemSortFilterCodeType
{

    /**
     * Constant for 'EndingLast' value.
     *
     * This value is not used.
     */
    public const VAL_ENDING_LAST = 'EndingLast';

    /**
     * Constant for 'EndingSoonest' value.
     *
     * This value is not used.
     */
    public const VAL_ENDING_SOONEST = 'EndingSoonest';

    /**
     * Constant for 'HighestPrice' value.
     *
     * Sort items by price, with the highest price first.
     */
    public const VAL_HIGHEST_PRICE = 'HighestPrice';

    /**
     * Constant for 'LowestPrice' value.
     *
     * This value is not used.
     */
    public const VAL_LOWEST_PRICE = 'LowestPrice';

    /**
     * Constant for 'NewlyListed' value.
     *
     * This value is not used.
     */
    public const VAL_NEWLY_LISTED = 'NewlyListed';

    /**
     * Constant for 'RandomlySelected' value.
     *
     * This value is not used.
     */
    public const VAL_RANDOMLY_SELECTED = 'RandomlySelected';

    /**
     * Constant for 'CustomCode' value.
     *
     * This value is not used.
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
