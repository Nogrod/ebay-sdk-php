<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing RefundTypeCodeType
 *
 * <span class="tablenote"><b>Note: </b> This type is only used for Half.com order refunds, and since the Half.com site has been shut down, this type will also be deprecated.
 *  </span>
 *  Explanation of the reason that the refund is being issued. Applicable to Half.com
 *  refunds only.
 * XSD Type: RefundTypeCodeType
 */
class RefundTypeCodeType
{

    /**
     * Constant for 'Full' value.
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundTypeCodeType</b> and all of its
     * values are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *  The seller has issued a refund for the transaction price that
     *  was originally paid to the seller.
     *  (The seller's shipping reimbursement is not included
     *  if Half.com calculates the refund amount).
     */
    public const VAL_FULL = 'Full';

    /**
     * Constant for 'FullPlusShipping' value.
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundTypeCodeType</b> and all of its
     * values are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *  The seller has issued a refund for the transaction price and
     *  shipping reimbursement that was originally paid to the seller.
     *  (The buyer's return shipping costs
     *  might not be included if Half.com calculates the refund amount.)
     */
    public const VAL_FULL_PLUS_SHIPPING = 'FullPlusShipping';

    /**
     * Constant for 'CustomOrPartial' value.
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundTypeCodeType</b> and all of its
     * values are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *  The seller has issued a refund amount that is different from
     *  the full refund (with or without shipping). If specified,
     *  it may be helpful to explain the amount in your note to the buyer.
     */
    public const VAL_CUSTOM_OR_PARTIAL = 'CustomOrPartial';

    /**
     * Constant for 'CustomCode' value.
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundTypeCodeType</b> and all of its
     * values are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *  (out) Reserved for internal or future use.
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
