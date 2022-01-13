<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing DisputeReasonCodeType
 *
 * Enumerated type that contains the top-level reasons for a seller to create a
 *  Unpaid Item case against a buyer. These values are specified in the
 *  <b>DisputeReason</b> field of <b>AddDispute</b>, and are returned
 *  in the <b>GetUserDisputes</b> and <b>GetDispute</b> calls.
 *  The <b>DisputeReason</b> value will dictate which
 *  <b>DisputeExplanation</b> values that can be used/returned.
 *  <br/><br/>
 *  <span class="tablenote"><strong>Note:</strong>
 *  The Dispute calls of the Trading API now only support Unpaid Item cases, and no longer support Item not Received (INR) or Significantly not as Described (SNAD) disputes created through PayPal, since this is no longer an option for eBay buyers. eBay buyers must create an INR case through eBay's Resolution Center, and these calls do not support eBay Money Back Guarantee cases.
 *  <br><br>
 *  To respond to an eBay Money Back Guarantee case, the seller should use the <a href="https://developer.ebay.com/Devzone/post-order/index.html" target="_blank">Case Management calls</a> of the <b>Post-Order API</b> or manage/respond to cases manually through the eBay Resolution Center.
 *  </span>
 * XSD Type: DisputeReasonCodeType
 */
class DisputeReasonCodeType
{
    /**
     * Constant for 'BuyerHasNotPaid' value.
     *
     * The seller has opened an Unpaid Item case against the buyer because the buyer
     * has not paid for
     *  the order line item. A seller can open an <i>Unpaid Item</i> case as early as
     * four days after
     *  the buyer commits to purchasing the item.
     */
    public const VAL_BUYER_HAS_NOT_PAID = 'BuyerHasNotPaid';

    /**
     * Constant for 'TransactionMutuallyCanceled' value.
     *
     * This value indicates that the seller cancelled an order after getting mutual
     * consent from the buyer. This may be due to the buyer requesting that it be
     * cancelled, or it could be that the seller ran out of stock on the item.
     */
    public const VAL_TRANSACTION_MUTUALLY_CANCELED = 'TransactionMutuallyCanceled';

    /**
     * Constant for 'ItemNotReceived' value.
     *
     * This enumeration value is no longer applicable since the Dispute calls in
     * Trading API no longer support INR disputes.
     */
    public const VAL_ITEM_NOT_RECEIVED = 'ItemNotReceived';

    /**
     * Constant for 'SignificantlyNotAsDescribed' value.
     *
     * This enumeration value is no longer applicable since the Dispute calls in
     * Trading API no longer support SNAD disputes.
     */
    public const VAL_SIGNIFICANTLY_NOT_AS_DESCRIBED = 'SignificantlyNotAsDescribed';

    /**
     * Constant for 'NoRefund' value.
     *
     * This enumeration value is no longer applicable since the Dispute calls in
     * Trading API only support Unpaid Item cases, and there will be no refund
     * involved.
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
