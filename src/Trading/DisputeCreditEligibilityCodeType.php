<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing DisputeCreditEligibilityCodeType
 *
 * Indicates whether the seller is eligible for a Final Value Fee credit if the
 *  dispute is resolved by the buyer and seller, or if eBay customer support makes a
 *  decision on the dispute in the seller's favor. Note that even if the item is
 *  eligible for a Final Value Fee credit, the credit is not guaranteed in any way.
 *  <br/><br/>
 *  <span class="tablenote"><strong>Note:</strong>
 *  'Item Not Received' or 'Significantly Not As Described' cases, initiated by buyers through the eBay Money Back Guarantee program, are not returned with <b>GetDispute</b> or <b>GetUserDisputes</b>. The <a href="https://developer.ebay.com/Devzone/post-order/post-order_v2_casemanagement-caseId__get.html#overview">getCase</a> method of the <a href="https://developer.ebay.com/Devzone/post-order/concepts/UsageGuide.html">Post-Order API</a> is used to retrieve Money Back Guarantee cases programmatically.
 *  </span>
 * XSD Type: DisputeCreditEligibilityCodeType
 */
class DisputeCreditEligibilityCodeType
{
    /**
     * Constant for 'InEligible' value.
     *
     * The seller is not currently eligible for a Final Value Fee credit.
     */
    public const VAL_IN_ELIGIBLE = 'InEligible';

    /**
     * Constant for 'Eligible' value.
     *
     * The seller is eligible for a Final Value Fee credit.
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
