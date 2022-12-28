<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing DisputeCreditEligibilityCodeType
 *
 * Enumerated type used to indicate whether or not the seller is eligible for a Final Value Fee credit if an Unpaid Item case is resolved between the buyer or seller, or if eBay customer support makes a decision on the case in the seller's favor. Note that even if the item is eligible for a Final Value Fee credit, the credit is not guaranteed in any way.
 * XSD Type: DisputeCreditEligibilityCodeType
 */
class DisputeCreditEligibilityCodeType
{
    /**
     * Constant for 'InEligible' value.
     *
     * This value indicates that the seller is not currently eligible for a Final Value
     * Fee credit towards the order line item under dispute.
     */
    public const VAL_IN_ELIGIBLE = 'InEligible';

    /**
     * Constant for 'Eligible' value.
     *
     * This value indicates that the seller is currently eligible for a Final Value Fee
     * credit towards the order line item under dispute.
     */
    public const VAL_ELIGIBLE = 'Eligible';

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
