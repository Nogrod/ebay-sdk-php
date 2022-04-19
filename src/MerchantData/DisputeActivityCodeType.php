<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing DisputeActivityCodeType
 *
 * Enumerated type that lists the different dispute activity enum value that can be used when the seller is creating an Unpaid Item case using the <b>AddDisputeResponse</b> call. The value
 *  you can use at a given time depends on the current value of <b>DisputeState</b>.
 *  <br/><br/>
 *  <span class="tablenote"><strong>Note:</strong>
 *  The <b>AddDisputeResponse</b> call now only supports the seller updating or responding to an Unpaid Item case. This call is no longer used to respond to an Item not Received (INR) or Significantly not as Described (SNAD) dispute created through PayPal, since this is no longer an option for eBay buyers. eBay buyers must create an INR or SNAD case through eBay's Resolution Center, and Trading API dispute calls do not support eBay Money Back Guarantee cases.
 *  <br><br>
 *  To respond to an eBay Money Back Guarantee case, the seller should use the <a href="https://developer.ebay.com/Devzone/post-order/index.html" target="_blank">Case Management calls</a> of the <b>Post-Order API</b> or manage/respond to cases manually through the eBay Resolution Center.
 *  </span>
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
     * This value is no longer applicable and should not be used, as it only pertains
     * to <i>Item Not Received</i> and <i>Significantly Not As Described</i>
     *  disputes initiated through PayPal, and those disputes are no longer supported
     * by the <b>AddDisputeResponse</b>.
     */
    public const VAL_SELLER_OFFERS_REFUND = 'SellerOffersRefund';

    /**
     * Constant for 'SellerShippedItem' value.
     *
     * This value is no longer applicable and should not be used, as it only pertains
     * to <i>Item Not Received</i> and <i>Significantly Not As Described</i>
     *  disputes initiated through PayPal, and those disputes are no longer supported
     * by the <b>AddDisputeResponse</b>.
     */
    public const VAL_SELLER_SHIPPED_ITEM = 'SellerShippedItem';

    /**
     * Constant for 'SellerComment' value.
     *
     * This value is no longer applicable and should not be used, as it only pertains
     * to <i>Item Not Received</i> and <i>Significantly Not As Described</i>
     *  disputes initiated through PayPal, and those disputes are no longer supported
     * by the <b>AddDisputeResponse</b>.
     */
    public const VAL_SELLER_COMMENT = 'SellerComment';

    /**
     * Constant for 'SellerPaymentNotReceived' value.
     *
     * This value is no longer applicable and should not be used, as it only pertains
     * to <i>Item Not Received</i> and <i>Significantly Not As Described</i>
     *  disputes initiated through PayPal, and those disputes are no longer supported
     * by the <b>AddDisputeResponse</b>.
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
