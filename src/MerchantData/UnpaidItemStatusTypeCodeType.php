<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing UnpaidItemStatusTypeCodeType
 *
 * This enumerated type consists of each Unpaid Item case state.
 * XSD Type: UnpaidItemStatusTypeCodeType
 */
class UnpaidItemStatusTypeCodeType
{
    /**
     * Constant for 'FinalValueFeeDenied' value.
     *
     * This enumeration value indicates that the seller's request for a Final Value Fee
     * credit has been denied.
     */
    public const VAL_FINAL_VALUE_FEE_DENIED = 'FinalValueFeeDenied';

    /**
     * Constant for 'FinalValueFeeCredited' value.
     *
     * This enumeration value indicates that the Final Value Fee has been credited back
     * to the seller's account.
     */
    public const VAL_FINAL_VALUE_FEE_CREDITED = 'FinalValueFeeCredited';

    /**
     * Constant for 'FinalValueFeeEligible' value.
     *
     * This enumeration value indicates that the seller is eligible to received a Final
     * Value Fee credit back to the their account.
     */
    public const VAL_FINAL_VALUE_FEE_ELIGIBLE = 'FinalValueFeeEligible';

    /**
     * Constant for 'AwaitingSellerResponse' value.
     *
     * This enumeration value indicates that the Unpaid Item case is currently waiting
     * for a response from the seller.
     */
    public const VAL_AWAITING_SELLER_RESPONSE = 'AwaitingSellerResponse';

    /**
     * Constant for 'AwaitingBuyerResponse' value.
     *
     * This enumeration value indicates that the Unpaid Item case is currently waiting
     * for a response from the buyer.
     */
    public const VAL_AWAITING_BUYER_RESPONSE = 'AwaitingBuyerResponse';

    /**
     * Constant for 'UnpaidItemFiled' value.
     *
     * This enumeration value indicates that the Unpaid Item case has been opened by
     * the seller against the buyer.
     */
    public const VAL_UNPAID_ITEM_FILED = 'UnpaidItemFiled';

    /**
     * Constant for 'UnpaidItemEligible' value.
     *
     * This enumeration value indicates that the seller is eligible to create an Unpaid
     * Item case against the buyer.
     */
    public const VAL_UNPAID_ITEM_ELIGIBLE = 'UnpaidItemEligible';

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
