<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing DisputeExplanationCodeType
 *
 * Enumerated type that contains the explanations that a seller can give for opening up an Unpaid Item case
 *  against a buyer. These values are specified in the <b>DisputeExplanation</b>
 *  field of <b>AddDispute</b> call, and are returned in the
 *  <b>GetUserDisputes</b> and <b>GetDispute</b> calls. The
 *  <b>DisputeReason</b> value will dictate what
 *  <b>DisputeExplanation</b> values that can be used/returned.
 *  <br/><br/>
 *  <span class="tablenote"><strong>Note:</strong>
 *  Only Unpaid Item cases are now supported by the Dispute calls of the Trading API. These calls no longer support Item not Received (INR) or Significantly not as Described (SNAD) disputes created through PayPal, since this is no longer an option for eBay buyers. eBay buyers must create an INR case through eBay's Resolution Center, and these calls also do not support eBay Money Back Guarantee cases.
 *  <br><br>
 *  To respond to an eBay Money Back Guarantee case, the seller should use the <a href="https://developer.ebay.com/Devzone/post-order/index.html" target="_blank">Case Management calls</a> of the <b>Post-Order API</b> or manage/respond to cases manually through the eBay Resolution Center.
 *  </span>
 * XSD Type: DisputeExplanationCodeType
 */
class DisputeExplanationCodeType
{
    /**
     * Constant for 'BuyerHasNotResponded' value.
     *
     * This value indicates that the buyer has not paid for the order line item, and
     * has
     *  not responded to the seller regarding payment. This value is allowed when the
     *  <b>DisputeReason</b> value is <b>BuyerHasNotPaid</b>.
     */
    public const VAL_BUYER_HAS_NOT_RESPONDED = 'BuyerHasNotResponded';

    /**
     * Constant for 'BuyerRefusedToPay' value.
     *
     * This value indicates that the buyer has not paid for the order line item, and
     *  according to the seller, has refused to pay for the order line item. This value
     * is
     *  allowed when the <b>DisputeReason</b> value is
     *  <b>BuyerHasNotPaid</b>.
     */
    public const VAL_BUYER_REFUSED_TO_PAY = 'BuyerRefusedToPay';

    /**
     * Constant for 'BuyerNotClearedToPay' value.
     *
     * This value indicates that the buyer has not paid for the order line item, and
     *  is not cleared by eBay to pay. This value is allowed when the
     *  <b>DisputeReason</b> value is
     *  <b>BuyerHasNotPaid</b>.
     */
    public const VAL_BUYER_NOT_CLEARED_TO_PAY = 'BuyerNotClearedToPay';

    /**
     * Constant for 'BuyerReturnedItemForRefund' value.
     *
     * This value is no longer applicable and should not be used in an
     * <b>AddDispute</b> call, as it only pertains to <i>Significantly Not As
     * Described</i> disputes initiated through PayPal, and those disputes are no
     * longer supported by the <b>AddDispute</b>.
     */
    public const VAL_BUYER_RETURNED_ITEM_FOR_REFUND = 'BuyerReturnedItemForRefund';

    /**
     * Constant for 'UnableToResolveTerms' value.
     *
     * This value indicates that the buyer and seller were unable to resolve a
     * disagreement
     *  over terms, and the seller is willing to cancel the order line item. This value
     * is allowed when the
     *  <b>DisputeReason</b> value is <b>TransactionMutuallyCanceled</b>.
     */
    public const VAL_UNABLE_TO_RESOLVE_TERMS = 'UnableToResolveTerms';

    /**
     * Constant for 'BuyerNoLongerWantsItem' value.
     *
     * This value indicates that the buyer no longer wants the item (buyer remorse),
     * and the seller is willing to cancel the order line item. This value is allowed
     * when the <b>DisputeReason</b> value is <b>TransactionMutuallyCanceled</b>.
     */
    public const VAL_BUYER_NO_LONGER_WANTS_ITEM = 'BuyerNoLongerWantsItem';

    /**
     * Constant for 'BuyerPurchasingMistake' value.
     *
     * This value indicates that the buyer made a mistake by purchasing the item, and
     * the seller is willing to cancel the order line item. This value is allowed when
     * the <b>DisputeReason</b> value is <b>TransactionMutuallyCanceled</b>.
     */
    public const VAL_BUYER_PURCHASING_MISTAKE = 'BuyerPurchasingMistake';

    /**
     * Constant for 'ShipCountryNotSupported' value.
     *
     * This value is deprecated, and should not be used.
     */
    public const VAL_SHIP_COUNTRY_NOT_SUPPORTED = 'ShipCountryNotSupported';

    /**
     * Constant for 'ShippingAddressNotConfirmed' value.
     *
     * This value indicates that the buyer is requesting shipment of the item to an
     *  unconfirmed (not on file with eBay) address. This value is allowed when the
     *  <b>DisputeReason</b> value is <b>BuyerHasNotPaid</b> or
     *  <b>TransactionMutuallyCanceled</b>.
     */
    public const VAL_SHIPPING_ADDRESS_NOT_CONFIRMED = 'ShippingAddressNotConfirmed';

    /**
     * Constant for 'PaymentMethodNotSupported' value.
     *
     * This value is deprecated, and should not be used.
     */
    public const VAL_PAYMENT_METHOD_NOT_SUPPORTED = 'PaymentMethodNotSupported';

    /**
     * Constant for 'BuyerNoLongerRegistered' value.
     *
     * This value is deprecated, and should not be used.
     */
    public const VAL_BUYER_NO_LONGER_REGISTERED = 'BuyerNoLongerRegistered';

    /**
     * Constant for 'OtherExplanation' value.
     *
     * This value can be used when no other explanation in <b>
     *  DisputeExplanationCodeType</b> is appropriate for the situation. This value is
     *  allowed when the <b>DisputeReason</b> value is
     *  <b>BuyerHasNotPaid</b>.
     */
    public const VAL_OTHER_EXPLANATION = 'OtherExplanation';

    /**
     * Constant for 'Unspecified' value.
     *
     * This value cannot be used in <b>AddDispute</b>, but it may be returned in the
     * <b>GetDispute</b> or <b>GetUserDisputes</b> calls if the dispute explanation is
     * unknown or was not specified.
     */
    public const VAL_UNSPECIFIED = 'Unspecified';

    /**
     * Constant for 'UPIAssistance' value.
     *
     * This value will be returned in <b>GetDispute</b> or <b>GetUserDisputes</b> calls
     * if the Unpaid Item case was opened by eBay through the Unpaid Item Assistance
     * mechanism. This value cannot be used in <b>AddDispute</b>.
     */
    public const VAL_UPIASSISTANCE = 'UPIAssistance';

    /**
     * Constant for 'BuyerPaymentNotReceivedOrCleared' value.
     *
     * This value indicates that the buyer has not paid the seller for the order line
     * item,
     *  or has paid the seller but the payment has not cleared. This value is allowed
     * when
     *  the <b>DisputeReason</b> value is <b>BuyerHasNotPaid</b>.
     */
    public const VAL_BUYER_PAYMENT_NOT_RECEIVED_OR_CLEARED = 'BuyerPaymentNotReceivedOrCleared';

    /**
     * Constant for 'SellerDoesntShipToCountry' value.
     *
     * This value indicates that the buyer is requesting shipment of the item to a
     * country
     *  that is on the seller's ship-to exclusion list. This value is allowed when the
     *  <b>DisputeReason</b> value is <b>BuyerHasNotPaid</b> or
     *  <b>TransactionMutuallyCanceled</b>.
     */
    public const VAL_SELLER_DOESNT_SHIP_TO_COUNTRY = 'SellerDoesntShipToCountry';

    /**
     * Constant for 'BuyerNotPaid' value.
     *
     * This value indicates that the buyer has not paid for the order line item. This
     * value
     *  is allowed when the <b>DisputeReason</b> value is
     *  <b>BuyerHasNotPaid</b>.
     */
    public const VAL_BUYER_NOT_PAID = 'BuyerNotPaid';

    /**
     * Constant for 'UPIAssistanceDisabled' value.
     *
     * This value indicates that the Unpaid Item case was opened by eBay through the
     * Unpaid
     *  Item Assistance mechanism, and then was subsequently converted to a manual
     * dispute,
     *  either by the seller or by eBay. This value cannot be used in
     *  <b>AddDispute</b>.
     */
    public const VAL_UPIASSISTANCE_DISABLED = 'UPIAssistanceDisabled';

    /**
     * Constant for 'SellerRanOutOfStock' value.
     *
     * This value indicates that the seller ran out of stock on the item, cannot
     * fulfill the order, and has to cancel the order line item. This value is allowed
     * when the <b>DisputeReason</b> value is <b>TransactionMutuallyCanceled</b>.
     */
    public const VAL_SELLER_RAN_OUT_OF_STOCK = 'SellerRanOutOfStock';

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
