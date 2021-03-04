<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing DisputeStateCodeType
 *
 * Enumerated type that defines the possible states of an order dispute between buyer and seller.
 *  <br/><br/>
 *  <span class="tablenote"><strong>Note:</strong>
 *  'Item Not Received' or 'Significantly Not As Described' cases, initiated by buyers through the eBay Money Back Guarantee program, are not returned with <b>GetDispute</b> or <b>GetUserDisputes</b>. The <a href="https://developer.ebay.com/Devzone/post-order/post-order_v2_casemanagement-caseId__get.html#overview">getCase</a> method of the <a href="https://developer.ebay.com/Devzone/post-order/concepts/UsageGuide.html">Post-Order API</a> is used to retrieve Money Back Guarantee cases programmatically.
 *  </span>
 * XSD Type: DisputeStateCodeType
 */
class DisputeStateCodeType
{
    /**
     * Constant for 'Locked' value.
     *
     * This enumeration value indicates that the dispute is currently in a locked
     * state, and cannot be updated by any user.
     */
    public const VAL_LOCKED = 'Locked';

    /**
     * Constant for 'Closed' value.
     *
     * This enumeration value indicates that the dispute is closed. In some cases, a
     * closed case can be reversed with the <b>SellerReverseDispute</b> call.
     */
    public const VAL_CLOSED = 'Closed';

    /**
     * Constant for 'BuyerFirstResponsePayOption' value.
     *
     * This enumeration value indicates that eBay sent the buyer an Unpaid Item
     * Reminder with a Pay Now option, and is waiting for the buyer's first response.
     */
    public const VAL_BUYER_FIRST_RESPONSE_PAY_OPTION = 'BuyerFirstResponsePayOption';

    /**
     * Constant for 'BuyerFirstResponseNoPayOption' value.
     *
     * This enumeration value indicates that eBay sent the buyer an Unpaid Item
     * Reminder, but without a Pay Now option, and is waiting for the buyer's first
     * response.
     */
    public const VAL_BUYER_FIRST_RESPONSE_NO_PAY_OPTION = 'BuyerFirstResponseNoPayOption';

    /**
     * Constant for 'BuyerFirstResponsePayOptionLateResponse' value.
     *
     * This enumeration value indicates that eBay sent the buyer an Unpaid Item
     * Reminder with a Pay Now option, was waiting for the buyer's first response, but
     * the buyer has failed to respond to this reminder within the 7-day grace period.
     */
    public const VAL_BUYER_FIRST_RESPONSE_PAY_OPTION_LATE_RESPONSE = 'BuyerFirstResponsePayOptionLateResponse';

    /**
     * Constant for 'BuyerFirstResponseNoPayOptionLateResponse' value.
     *
     * This enumeration value indicates that eBay sent the buyer an Unpaid Item
     * Reminder without a Pay Now option, was waiting for the buyer's first response,
     * but the buyer has failed to respond to this reminder within the 7-day grace
     * period.
     */
    public const VAL_BUYER_FIRST_RESPONSE_NO_PAY_OPTION_LATE_RESPONSE = 'BuyerFirstResponseNoPayOptionLateResponse';

    /**
     * Constant for 'MutualCommunicationPayOption' value.
     *
     * This enumeration value indicates that the buyer and seller have communicated,
     * and eBay offered the buyer a Pay Now option.
     */
    public const VAL_MUTUAL_COMMUNICATION_PAY_OPTION = 'MutualCommunicationPayOption';

    /**
     * Constant for 'MutualCommunicationNoPayOption' value.
     *
     * This enumeration value indicates that the buyer and seller have communicated,
     * but eBay has not offered the buyer a Pay Now option.
     */
    public const VAL_MUTUAL_COMMUNICATION_NO_PAY_OPTION = 'MutualCommunicationNoPayOption';

    /**
     * Constant for 'PendingResolve' value.
     *
     * This enumeration value indicates that the dispute is pending resolution. A
     * dispute cannot be closed by the buyer or seller when it is in this state.
     */
    public const VAL_PENDING_RESOLVE = 'PendingResolve';

    /**
     * Constant for 'MutualWithdrawalAgreement' value.
     *
     * This enumeration value indicates that the buyer and seller have mutually agreed
     * to cancel the transaction within the grace period.
     */
    public const VAL_MUTUAL_WITHDRAWAL_AGREEMENT = 'MutualWithdrawalAgreement';

    /**
     * Constant for 'MutualWithdrawalAgreementLate' value.
     *
     * This enumeration value indicates that the buyer and seller have mutually agreed
     * to cancel the transaction, but the grace period has expired.
     */
    public const VAL_MUTUAL_WITHDRAWAL_AGREEMENT_LATE = 'MutualWithdrawalAgreementLate';

    /**
     * Constant for 'NotReceivedNoSellerResponse' value.
     *
     * This enumeration value indicates that the buyer filed an Item Not Received
     * dispute through PayPal account, and the seller has not yet responded. A seller
     * may respond to a case in this state by using the <b>AddDisputeResponse</b> call
     * and setting the <b>DisputeActivity</b> value to <code>SellerOffersRefund</code>,
     * <code>SellerShippedItem</code>, or <code>SellerComment</code>.
     */
    public const VAL_NOT_RECEIVED_NO_SELLER_RESPONSE = 'NotReceivedNoSellerResponse';

    /**
     * Constant for 'NotAsDescribedNoSellerResponse' value.
     *
     * This enumeration value indicates that the buyer filed an Item Not As Described
     * dispute through PayPal account, and the seller has not yet responded. A seller
     * may respond to a case in this state by using the <b>AddDisputeResponse</b> call
     * and setting the <b>DisputeActivity</b> value to <code>SellerOffersRefund</code>
     * or <code>SellerComment</code>.
     */
    public const VAL_NOT_AS_DESCRIBED_NO_SELLER_RESPONSE = 'NotAsDescribedNoSellerResponse';

    /**
     * Constant for 'NotReceivedMutualCommunication' value.
     *
     * This enumeration value indicates that the buyer filed an Item Not Received
     * dispute through PayPal account, and the buyer and seller have communicated about
     * the issue. A seller may respond to a case in this state by using the
     * <b>AddDisputeResponse</b> call and setting the <b>DisputeActivity</b> value to
     * <code>SellerOffersRefund</code>, <code>SellerShippedItem</code>, or
     * <code>SellerComment</code>.
     */
    public const VAL_NOT_RECEIVED_MUTUAL_COMMUNICATION = 'NotReceivedMutualCommunication';

    /**
     * Constant for 'NotAsDescribedMutualCommunication' value.
     *
     * This enumeration value indicates that the buyer filed an Item Not As Described
     * dispute through PayPal account, and the buyer and seller have communicated about
     * the issue. A seller may respond to a case in this state by using the
     * <b>AddDisputeResponse</b> call and setting the <b>DisputeActivity</b> value to
     * <code>SellerOffersRefund</code>.
     */
    public const VAL_NOT_AS_DESCRIBED_MUTUAL_COMMUNICATION = 'NotAsDescribedMutualCommunication';

    /**
     * Constant for 'MutualAgreementOrBuyerReturningItem' value.
     *
     * This enumeration value indicates that the seller filed an Unpaid Item dispute,
     * and the seller says mutual agreement has been reached and is
     *  waiting for the buyer to confirm, or the buyer is returning the item
     *  to the seller.
     */
    public const VAL_MUTUAL_AGREEMENT_OR_BUYER_RETURNING_ITEM = 'MutualAgreementOrBuyerReturningItem';

    /**
     * Constant for 'ClaimOpened' value.
     *
     * This enumeration value indicates that the claim was assigned to an adjuster.
     */
    public const VAL_CLAIM_OPENED = 'ClaimOpened';

    /**
     * Constant for 'NoDocumentation' value.
     *
     * This enumeration value indicates that the buyer was contacted by eBay and asked
     * to submit paperwork to support the claim.
     */
    public const VAL_NO_DOCUMENTATION = 'NoDocumentation';

    /**
     * Constant for 'ClaimClosed' value.
     *
     * This enumeration value indicates that the claim was closed due to buyer not
     * responding to verification, or was missing paperwork.
     */
    public const VAL_CLAIM_CLOSED = 'ClaimClosed';

    /**
     * Constant for 'ClaimDenied' value.
     *
     * This enumeration value indicates that the buyer's claim was denied.
     */
    public const VAL_CLAIM_DENIED = 'ClaimDenied';

    /**
     * Constant for 'ClaimPending' value.
     *
     * This enumeration value indicates that paperwork was received from the buyer and
     * the claim is being investigated.
     */
    public const VAL_CLAIM_PENDING = 'ClaimPending';

    /**
     * Constant for 'ClaimPaymentPending' value.
     *
     * This enumeration value indicates that the buyer's claim was approved for
     * reimbursement and was sent to accounts payable for payment.
     */
    public const VAL_CLAIM_PAYMENT_PENDING = 'ClaimPaymentPending';

    /**
     * Constant for 'ClaimPaid' value.
     *
     * This enumeration value indicates that the buyer was reimbursed for the claim.
     */
    public const VAL_CLAIM_PAID = 'ClaimPaid';

    /**
     * Constant for 'ClaimResolved' value.
     *
     * This enumeration value indicates that the issue has been resolved due to the
     * seller sending the item or refunding the buyer.
     */
    public const VAL_CLAIM_RESOLVED = 'ClaimResolved';

    /**
     * Constant for 'ClaimSubmitted' value.
     *
     * This enumeration value indicates that the claim was submitted via Web.
     */
    public const VAL_CLAIM_SUBMITTED = 'ClaimSubmitted';

    /**
     * Constant for 'UnpaidItemOpen' value.
     *
     * This enumeration value indicates that the Unpaid Item dispute is open.
     */
    public const VAL_UNPAID_ITEM_OPEN = 'UnpaidItemOpen';

    /**
     * Constant for 'UPIAssistanceDisabledByeBay' value.
     *
     * This enumeration value indicates that the Unpaid Item dispute filed by the
     * Unpaid Item Assistance mechanism was disabled by eBay (for example, eBay
     * detected that payment was initiated and the seller needs to manually handle this
     * dispute).
     */
    public const VAL_UPIASSISTANCE_DISABLED_BYE_BAY = 'UPIAssistanceDisabledByeBay';

    /**
     * Constant for 'UPIAssistanceDisabledBySeller' value.
     *
     * This enumeration value indicates that the Unpaid Item dispute filed by the
     * Unpaid Item Assistance mechanism was disabled by the seller (e.g. the buyer and
     * seller have communicated about payment and the seller wishes to extend the time
     * for payment and not let the automatic process close the dispute automatically).
     */
    public const VAL_UPIASSISTANCE_DISABLED_BY_SELLER = 'UPIAssistanceDisabledBySeller';

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
