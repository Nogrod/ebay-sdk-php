<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing SellingManagerAutoSecondChanceOfferTypeCodeType
 *
 * SellingManagerAutoSecondChanceOfferTypeCodeType - Specifies the type of Second Chance Offer automation rule that will be added to an item.
 * XSD Type: SellingManagerAutoSecondChanceOfferTypeCodeType
 */
class SellingManagerAutoSecondChanceOfferTypeCodeType
{

    /**
     * Constant for 'BidsGreaterThanAmount' value.
     *
     * Sends a Second Chance Offer to all bidders who bid more than a specific amount.
     */
    public const VAL_BIDS_GREATER_THAN_AMOUNT = 'BidsGreaterThanAmount';

    /**
     * Constant for 'BidsGreaterThanCostPlusAmount' value.
     *
     * Sends a Second Chance Offer to all bidders who bid more than the cost plus a
     * specific amount.
     */
    public const VAL_BIDS_GREATER_THAN_COST_PLUS_AMOUNT = 'BidsGreaterThanCostPlusAmount';

    /**
     * Constant for 'BidsGreaterThanCostPlusPercentage' value.
     *
     * Sends a Second Chance Offer to all bidders who bid more than the cost plus a
     * specific percentage.
     */
    public const VAL_BIDS_GREATER_THAN_COST_PLUS_PERCENTAGE = 'BidsGreaterThanCostPlusPercentage';

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
