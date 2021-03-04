<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing DisputeActivityCodeType
 *
 * Defines the action taken on a dispute with <b>AddDisputeResponse</b>. The value
 *  you can use at a given time depends on the current value of <b>DisputeState</b>
 *  (see the <a href="http://developer.ebay.com/DevZone/guides/features-guide/default.html#Development/UPI-Assistant.html">Unpaid Item Assistant</a> for more information). Some values are for
 *  <i>Unpaid Item</i> disputes and some are for <i>Item Not Received</i> disputes.
 *  <br/><br/>
 *  <span class="tablenote"><strong>Note:</strong>
 *  The <b>AddDisputeResponse</b> call cannot be used to communicate about an 'Item Not Received' or 'Significantly Not As Described' case initiated by a buyer through the eBay Money Back Guarantee program. The <a href="https://developer.ebay.com/Devzone/post-order/concepts/UsageGuide.html">Post-Order API</a> is used to respond to eBay Money Back Guarantee cases programmatically.
 *  </span>
 * XSD Type: DisputeActivityCodeType
 */
class DisputeActivityCodeType
{
    /**
     * Constant for 'SellerAddInformation' value.
     *
     * The seller wants to add a response to the dispute. For <i>Unpaid Item</i>
     * disputes. The seller is limited to 25 responses.
     */
    public const VAL_SELLER_ADD_INFORMATION = 'SellerAddInformation';

    /**
     * Constant for 'SellerCompletedTransaction' value.
     *
     * The buyer has paid or the seller otherwise does not need to
     *  pursue the dispute any longer. For <i>Unpaid Item</i> disputes.
     */
    public const VAL_SELLER_COMPLETED_TRANSACTION = 'SellerCompletedTransaction';

    /**
     * Constant for 'CameToAgreementNeedFVFCredit' value.
     *
     * The seller has made an agreement with the buyer and requires a
     *  credit for a Final Value Fee already paid. For <i>Unpaid Item</i> disputes.
     */
    public const VAL_CAME_TO_AGREEMENT_NEED_FVFCREDIT = 'CameToAgreementNeedFVFCredit';

    /**
     * Constant for 'SellerEndCommunication' value.
     *
     * The seller wants to end communication or stop waiting for the
     *  buyer. For <i>Unpaid Item</i> disputes.
     */
    public const VAL_SELLER_END_COMMUNICATION = 'SellerEndCommunication';

    /**
     * Constant for 'MutualAgreementOrNoBuyerResponse' value.
     *
     * The seller wants to end communication or stop waiting for the
     *  buyer. Mutual agreement has been reached or the buyer has not
     *  responded within four days. For <i>Unpaid Item</i> disputes.
     */
    public const VAL_MUTUAL_AGREEMENT_OR_NO_BUYER_RESPONSE = 'MutualAgreementOrNoBuyerResponse';

    /**
     * Constant for 'SellerOffersRefund' value.
     *
     * The seller offers a full refund if the buyer did not receive
     *  the item or a partial refund if the item is significantly not as
     *  described. For <i>Item Not Received</i> and <i>Significantly Not As
     * Described</i>
     *  disputes.
     *  <br/><br/>
     *  This can be used when <b>DisputeState</b> is:
     *  <br>
     *  <code>NotReceivedNoSellerResponse</code><br>
     *  <code>NotAsDescribedNoSellerResponse</code><br>
     *  <code>NotReceivedMutualCommunication</code><br>
     *  <code>NotAsDescribedMutualCommunication</code>
     */
    public const VAL_SELLER_OFFERS_REFUND = 'SellerOffersRefund';

    /**
     * Constant for 'SellerShippedItem' value.
     *
     * The seller has shipped the item or a replacement and provides
     *  shipping information. For <i>Item Not Received</i> and <i>Significantly Not As
     * Described</i> disputes.
     *  <br/><br/>
     *  This can be used when <b>DisputeState</b> is:
     *  <br>
     *  <code>NotReceivedNoSellerResponse</code><br>
     *  <code>NotReceivedMutualCommunication</code>
     */
    public const VAL_SELLER_SHIPPED_ITEM = 'SellerShippedItem';

    /**
     * Constant for 'SellerComment' value.
     *
     * The seller communicates with the buyer, offering a response or
     *  comment. The seller is limited to 25 responses.
     *  For <i>Item Not Received</i> and <i>Significantly Not As Described</i>
     *  disputes.
     *  <br/><br/>
     *  This can be used when DisputeState is:<br>
     *  <code>NotReceivedNoSellerResponse</code><br>
     *  <code>NotAsDescribedNoSellerResponse</code><br>
     *  <code>NotReceivedMutualCommunication</code><br>
     *  <code>NotAsDescribedMutualCommunication</code>
     */
    public const VAL_SELLER_COMMENT = 'SellerComment';

    /**
     * Constant for 'SellerPaymentNotReceived' value.
     *
     * The buyer has not received an expected full or partial refund from the
     *  seller in an <i>Item Not Received</i> and <i>Significantly Not As Described</i>
     * buyer
     *  dispute.
     *  <br/><br/>
     *  This can be used when <b>DisputeState</b> is:<br>
     *  <code>NotReceivedNoSellerResponse</code> <br>
     *  <code>NotReceivedMutualCommunication</code> <br>
     */
    public const VAL_SELLER_PAYMENT_NOT_RECEIVED = 'SellerPaymentNotReceived';

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
