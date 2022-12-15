<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing DisputeActivityCodeType
 *
 * Enumerated type that lists the different dispute activity enum value that can be used when the seller is creating an Unpaid Item case using the <b>AddDisputeResponse</b> call. The value you can use at a given time depends on the current value of <b>DisputeState</b>.
 * XSD Type: DisputeActivityCodeType
 */
class DisputeActivityCodeType
{
    /**
     * Constant for 'SellerAddInformation' value.
     *
     * This value can be used if the seller wants to add information about the Unpaid
     * Item case. If this enum value is used, the information that the seller wants to
     * add to the case should be passed in as a text string into the corresponding
     * <strong>MessageText</strong> field.
     */
    public const VAL_SELLER_ADD_INFORMATION = 'SellerAddInformation';

    /**
     * Constant for 'SellerCompletedTransaction' value.
     *
     * This value can be used if the buyer has paid for the item or the seller
     * otherwise does not need to
     *  pursue the Unpaid Item case any longer.
     */
    public const VAL_SELLER_COMPLETED_TRANSACTION = 'SellerCompletedTransaction';

    /**
     * Constant for 'CameToAgreementNeedFVFCredit' value.
     *
     * This value can be used if the seller has made an agreement with the buyer, and
     * is requesting that eBay reimburse him/her for the variable portion of the Final
     * Value Fee charged for the order line item.
     */
    public const VAL_CAME_TO_AGREEMENT_NEED_FVFCREDIT = 'CameToAgreementNeedFVFCredit';

    /**
     * Constant for 'SellerEndCommunication' value.
     *
     * This value can be used if the seller wants to end communication or stop waiting
     * for the
     *  buyer to pay.
     */
    public const VAL_SELLER_END_COMMUNICATION = 'SellerEndCommunication';

    /**
     * Constant for 'MutualAgreementOrNoBuyerResponse' value.
     *
     * This value can be used if the seller and buyer have agree to mutually cancel the
     * order, or if the buyer has not responded to the Unpaid Item case after four
     * days.
     */
    public const VAL_MUTUAL_AGREEMENT_OR_NO_BUYER_RESPONSE = 'MutualAgreementOrNoBuyerResponse';

    /**
     * Constant for 'SellerOffersRefund' value.
     *
     * This value is no longer applicable and should not be used.
     */
    public const VAL_SELLER_OFFERS_REFUND = 'SellerOffersRefund';

    /**
     * Constant for 'SellerShippedItem' value.
     *
     * This value is no longer applicable and should not be used.
     */
    public const VAL_SELLER_SHIPPED_ITEM = 'SellerShippedItem';

    /**
     * Constant for 'SellerComment' value.
     *
     * This value is no longer applicable and should not be used.
     */
    public const VAL_SELLER_COMMENT = 'SellerComment';

    /**
     * Constant for 'SellerPaymentNotReceived' value.
     *
     * This value is no longer applicable and should not be used.
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
