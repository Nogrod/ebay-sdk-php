<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing BuyerProtectionCodeType
 *
 * This enumeration type indicates the item's eligibility status for PayPal's buyer protection program or eBay's Money Back Guarantee program.
 * XSD Type: BuyerProtectionCodeType
 */
class BuyerProtectionCodeType
{

    /**
     * Constant for 'ItemIneligible' value.
     *
     * This value indicates that the item is ineligible for buyer protection. In many
     *  cases, the item is ineligible for buyer protection due to the listing category.
     */
    public const VAL_ITEM_INELIGIBLE = 'ItemIneligible';

    /**
     * Constant for 'ItemEligible' value.
     *
     * This value indicates that the item is eligible for buyer protection.
     */
    public const VAL_ITEM_ELIGIBLE = 'ItemEligible';

    /**
     * Constant for 'ItemMarkedIneligible' value.
     *
     * This value indicates that customer support has marked the item as
     *  ineligible per special criteria (e.g., seller's account closed).
     */
    public const VAL_ITEM_MARKED_INELIGIBLE = 'ItemMarkedIneligible';

    /**
     * Constant for 'ItemMarkedEligible' value.
     *
     * This value indicates that customer support has marked the item as
     *  eligible per special criteria.
     */
    public const VAL_ITEM_MARKED_ELIGIBLE = 'ItemMarkedEligible';

    /**
     * Constant for 'NoCoverage' value.
     *
     * This value indicates that the item is ineligible for coverage under any buyer
     *  protection program.
     */
    public const VAL_NO_COVERAGE = 'NoCoverage';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for internal or future use.
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
