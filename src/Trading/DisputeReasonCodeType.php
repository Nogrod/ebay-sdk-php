<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing DisputeReasonCodeType
 *
 * Enumerated type that contains the top-level reasons for a buyer or seller to create a
 *  case against one another. These values are specified in the
 *  <b>DisputeReason</b> field of <b>AddDispute</b>, and are returned
 *  in the <b>GetUserDisputes</b> and <b>GetDispute</b> calls.
 *  The <b>DisputeReason</b> value will dictate what
 *  <b>DisputeExplanation</b> values that can be used/returned.
 *  <br/><br/>
 *  <span class="tablenote"><strong>Note:</strong>
 *  The dispute calls in the Trading API are not compatible with 'Item Not Received' or 'Significantly Not As Described' cases initiated by buyers through the eBay Money Back Guarantee program. The <a href="https://developer.ebay.com/Devzone/post-order/concepts/UsageGuide.html">Post-Order API</a> is used to retrieve and/or respond to eBay Money Back Guarantee cases programmatically.
 *  </span>
 * XSD Type: DisputeReasonCodeType
 */
class DisputeReasonCodeType
{
    /**
     * Constant for 'BuyerHasNotPaid' value.
     *
     * The seller has opened a case against the buyer because the buyer has not paid
     * for
     *  the order line item. A seller can open an <i>Unpaid Item</i> case as early as
     * two days after
     *  the end of the auction listing. An exception to this rule occurs when the
     * seller
     *  allows combined payment orders. If the seller does allow the buyer to combine
     * orders
     *  and make one payment for those orders, the seller would not be able to open an
     * Unpaid
     *  Item case until after the time period to combine orders expires.
     *  <br>
     */
    public const VAL_BUYER_HAS_NOT_PAID = 'BuyerHasNotPaid';

    /**
     * Constant for 'TransactionMutuallyCanceled' value.
     *
     * This value indicates that the dispute involves an order that is being cancelled
     * by seller with mutual consent from the buyer.
     */
    public const VAL_TRANSACTION_MUTUALLY_CANCELED = 'TransactionMutuallyCanceled';

    /**
     * Constant for 'ItemNotReceived' value.
     *
     * The buyer has opened a case against the seller because the item has not been
     *  received by the buyer. A buyer can open an <i>Item Not Received</i> case after
     * the
     *  Estimated Delivery Date of the item has passed, or 7 days after payment if the
     *  Estimated Delivery Date wasn't given by the seller. This value cannot be used
     * in
     *  <b>AddDispute</b>.
     */
    public const VAL_ITEM_NOT_RECEIVED = 'ItemNotReceived';

    /**
     * Constant for 'SignificantlyNotAsDescribed' value.
     *
     * The buyer has opened a case against the seller because the item was received but
     *  does not match the item description in the listing. A buyer can open an <i>Item
     *  Significantly Not As Described</i> case immediately after receiving the item.
     * This value
     *  cannot be used in <b>AddDispute</b>.
     */
    public const VAL_SIGNIFICANTLY_NOT_AS_DESCRIBED = 'SignificantlyNotAsDescribed';

    /**
     * Constant for 'NoRefund' value.
     *
     * The item was returned but no refund was given. This value cannot be used in
     *  <b>AddDispute</b>.
     */
    public const VAL_NO_REFUND = 'NoRefund';

    /**
     * Constant for 'ReturnPolicyUnpaidItem' value.
     *
     * Item was returned and seller was not paid. This value cannot be used in
     *  <b>AddDispute</b>.
     */
    public const VAL_RETURN_POLICY_UNPAID_ITEM = 'ReturnPolicyUnpaidItem';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for future or internal use.
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
