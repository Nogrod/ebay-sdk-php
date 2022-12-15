<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing DisputeStatusCodeType
 *
 * Enumerated type that defines the possible statuses of an order dispute between buyer and seller.
 * XSD Type: DisputeStatusCodeType
 */
class DisputeStatusCodeType
{
    /**
     * Constant for 'Closed' value.
     *
     * This enumeration value indicates that the Unpaid Item case is closed.
     */
    public const VAL_CLOSED = 'Closed';

    /**
     * Constant for 'WaitingForSellerResponse' value.
     *
     * This enumeration value indicates that the Unpaid Item case is waiting for the
     * seller's response.
     */
    public const VAL_WAITING_FOR_SELLER_RESPONSE = 'WaitingForSellerResponse';

    /**
     * Constant for 'WaitingForBuyerResponse' value.
     *
     * This enumeration value indicates that the Unpaid Item case is waiting for the
     * buyer's response.
     */
    public const VAL_WAITING_FOR_BUYER_RESPONSE = 'WaitingForBuyerResponse';

    /**
     * Constant for 'ClosedFVFCreditStrike' value.
     *
     * This enumeration value indicates that the Unpaid Item case is closed, the seller
     * received a Final Value Fee credit, and the buyer received a strike.
     */
    public const VAL_CLOSED_FVFCREDIT_STRIKE = 'ClosedFVFCreditStrike';

    /**
     * Constant for 'ClosedNoFVFCreditStrike' value.
     *
     * This enumeration value indicates that the Unpaid Item case is closed, the seller
     * did not receive a Final Value Fee credit, and the buyer received a strike.
     */
    public const VAL_CLOSED_NO_FVFCREDIT_STRIKE = 'ClosedNoFVFCreditStrike';

    /**
     * Constant for 'ClosedFVFCreditNoStrike' value.
     *
     * This enumeration value indicates that the Unpaid Item case is closed, the seller
     * received a Final Value Fee credit, and the buyer did not receive a strike.
     */
    public const VAL_CLOSED_FVFCREDIT_NO_STRIKE = 'ClosedFVFCreditNoStrike';

    /**
     * Constant for 'ClosedNoFVFCreditNoStrike' value.
     *
     * This enumeration value indicates that the Unpaid Item case is closed, the seller
     * did not receive a Final Value Fee credit, and the buyer did not receive a
     * strike.
     */
    public const VAL_CLOSED_NO_FVFCREDIT_NO_STRIKE = 'ClosedNoFVFCreditNoStrike';

    /**
     * Constant for 'StrikeAppealedAfterClosing' value.
     *
     * This enumeration value indicates that the Unpaid Item case was closed with a
     * buyer's strike, but the buyer has appealed that strike.
     */
    public const VAL_STRIKE_APPEALED_AFTER_CLOSING = 'StrikeAppealedAfterClosing';

    /**
     * Constant for 'FVFCreditReversedAfterClosing' value.
     *
     * This enumeration value indicates that the seller's Final Value Fee credit was
     * reversed after the Unpaid Item case was closed.
     */
    public const VAL_FVFCREDIT_REVERSED_AFTER_CLOSING = 'FVFCreditReversedAfterClosing';

    /**
     * Constant for 'StrikeAppealedAndFVFCreditReversed' value.
     *
     * This enumeration value indicates that the seller's Final Value Fee credit was
     * reversed and the buyer's strike was appealed after the Unpaid Item case was
     * closed.
     */
    public const VAL_STRIKE_APPEALED_AND_FVFCREDIT_REVERSED = 'StrikeAppealedAndFVFCreditReversed';

    /**
     * Constant for 'ClaimOpened' value.
     *
     * This enumeration value is no longer applicable since the <b>GetDispute</b> and
     * <b>GetUserDisputes</b> calls will not return any INR disputes.
     */
    public const VAL_CLAIM_OPENED = 'ClaimOpened';

    /**
     * Constant for 'NoDocumentation' value.
     *
     * This enumeration value is no longer applicable since the <b>GetDispute</b> and
     * <b>GetUserDisputes</b> calls will not return any INR disputes.
     */
    public const VAL_NO_DOCUMENTATION = 'NoDocumentation';

    /**
     * Constant for 'ClaimClosed' value.
     *
     * This enumeration value is no longer applicable since the <b>GetDispute</b> and
     * <b>GetUserDisputes</b> calls will not return any INR disputes.
     */
    public const VAL_CLAIM_CLOSED = 'ClaimClosed';

    /**
     * Constant for 'ClaimDenied' value.
     *
     * This enumeration value is no longer applicable since the <b>GetDispute</b> and
     * <b>GetUserDisputes</b> calls will not return any INR disputes.
     */
    public const VAL_CLAIM_DENIED = 'ClaimDenied';

    /**
     * Constant for 'ClaimInProcess' value.
     *
     * This enumeration value is no longer applicable since the <b>GetDispute</b> and
     * <b>GetUserDisputes</b> calls will not return any INR disputes.
     */
    public const VAL_CLAIM_IN_PROCESS = 'ClaimInProcess';

    /**
     * Constant for 'ClaimApproved' value.
     *
     * This enumeration value is no longer applicable since the <b>GetDispute</b> and
     * <b>GetUserDisputes</b> calls will not return any INR disputes.
     */
    public const VAL_CLAIM_APPROVED = 'ClaimApproved';

    /**
     * Constant for 'ClaimPaid' value.
     *
     * This enumeration value is no longer applicable since the <b>GetDispute</b> and
     * <b>GetUserDisputes</b> calls will not return any INR disputes.
     */
    public const VAL_CLAIM_PAID = 'ClaimPaid';

    /**
     * Constant for 'ClaimResolved' value.
     *
     * This enumeration value is no longer applicable since the <b>GetDispute</b> and
     * <b>GetUserDisputes</b> calls will not return any INR disputes.
     */
    public const VAL_CLAIM_RESOLVED = 'ClaimResolved';

    /**
     * Constant for 'ClaimSubmitted' value.
     *
     * This enumeration value indicates that the claim was submitted via Web.
     */
    public const VAL_CLAIM_SUBMITTED = 'ClaimSubmitted';

    /**
     * Constant for 'UnpaidItemOpened' value.
     *
     * This enumeration value indicates that an Unpaid Item case was opened by the
     * seller against the buyer.
     */
    public const VAL_UNPAID_ITEM_OPENED = 'UnpaidItemOpened';

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
