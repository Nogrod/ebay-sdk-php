<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing PaidStatusCodeType
 *
 * Enumerated type that lists the possible states of buyer payment for an order.
 * XSD Type: PaidStatusCodeType
 */
class PaidStatusCodeType
{
    /**
     * Constant for 'NotPaid' value.
     *
     * This enumeration value is returned if the buyer has completed checkout, but eBay
     * cannot confirm whether or not the buyer has paid for the order. It is possible
     * that the buyer has paid with an 'offline' payment method, but the order has not
     * been marked as paid.
     */
    public const VAL_NOT_PAID = 'NotPaid';

    /**
     * Constant for 'BuyerHasNotCompletedCheckout' value.
     *
     * This enumeration value is returned if the buyer has not completed the checkout
     * process and so has not made payment.
     */
    public const VAL_BUYER_HAS_NOT_COMPLETED_CHECKOUT = 'BuyerHasNotCompletedCheckout';

    /**
     * Constant for 'PaymentPendingWithPayPal' value.
     *
     * This value is deprecated and should no longer be returned.
     */
    public const VAL_PAYMENT_PENDING_WITH_PAY_PAL = 'PaymentPendingWithPayPal';

    /**
     * Constant for 'PaidWithPayPal' value.
     *
     * This value is deprecated and should no longer be returned.
     */
    public const VAL_PAID_WITH_PAY_PAL = 'PaidWithPayPal';

    /**
     * Constant for 'MarkedAsPaid' value.
     *
     * This enumeration value is returned if the order was marked as paid by eBay or
     * the seller.
     */
    public const VAL_MARKED_AS_PAID = 'MarkedAsPaid';

    /**
     * Constant for 'PaymentPendingWithEscrow' value.
     *
     * No longer an applicable value.
     */
    public const VAL_PAYMENT_PENDING_WITH_ESCROW = 'PaymentPendingWithEscrow';

    /**
     * Constant for 'PaidWithEscrow' value.
     *
     * No longer an applicable value.
     */
    public const VAL_PAID_WITH_ESCROW = 'PaidWithEscrow';

    /**
     * Constant for 'EscrowPaymentCancelled' value.
     *
     * No longer an applicable value.
     */
    public const VAL_ESCROW_PAYMENT_CANCELLED = 'EscrowPaymentCancelled';

    /**
     * Constant for 'PaymentPendingWithPaisaPay' value.
     *
     * PaisaPay is a deprecated payment method, so this value is no longer applicable.
     */
    public const VAL_PAYMENT_PENDING_WITH_PAISA_PAY = 'PaymentPendingWithPaisaPay';

    /**
     * Constant for 'PaidWithPaisaPay' value.
     *
     * PaisaPay is a deprecated payment method, so this value is no longer applicable.
     */
    public const VAL_PAID_WITH_PAISA_PAY = 'PaidWithPaisaPay';

    /**
     * Constant for 'PaymentPending' value.
     *
     * This enumeration value is returned if the buyer's payment is in process, but not
     * yet complete.
     */
    public const VAL_PAYMENT_PENDING = 'PaymentPending';

    /**
     * Constant for 'PaymentPendingWithPaisaPayEscrow' value.
     *
     * PaisaPay is a deprecated payment method, so this value is no longer applicable.
     */
    public const VAL_PAYMENT_PENDING_WITH_PAISA_PAY_ESCROW = 'PaymentPendingWithPaisaPayEscrow';

    /**
     * Constant for 'PaidWithPaisaPayEscrow' value.
     *
     * PaisaPay is a deprecated payment method, so this value is no longer applicable.
     */
    public const VAL_PAID_WITH_PAISA_PAY_ESCROW = 'PaidWithPaisaPayEscrow';

    /**
     * Constant for 'PaisaPayNotPaid' value.
     *
     * PaisaPay is a deprecated payment method, so this value is no longer applicable.
     */
    public const VAL_PAISA_PAY_NOT_PAID = 'PaisaPayNotPaid';

    /**
     * Constant for 'Refunded' value.
     *
     * This enumeration value is returned if the buyer's payment was refunded.
     */
    public const VAL_REFUNDED = 'Refunded';

    /**
     * Constant for 'WaitingForCODPayment' value.
     *
     * The selected payment method is COD and the buyer will make the payment upon
     * delivery.
     */
    public const VAL_WAITING_FOR_CODPAYMENT = 'WaitingForCODPayment';

    /**
     * Constant for 'PaidCOD' value.
     *
     * The buyer has paid for the order with the COD payment method.
     */
    public const VAL_PAID_COD = 'PaidCOD';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for future use.
     */
    public const VAL_CUSTOM_CODE = 'CustomCode';

    /**
     * Constant for 'Paid' value.
     *
     * This enumeration value is returned if the buyer has paid for the order.
     */
    public const VAL_PAID = 'Paid';

    /**
     * Constant for 'PayUponInvoice' value.
     *
     * This enumeration value is returned if the buyer was offered the 'Pay Upon
     * Invoice' option. The 'Pay Upon Invoice' option is only available to eligible
     * German buyers as part of Progressive Checkout on the German site. If a German
     * buyer is offered the 'Pay Upon Invoice' option, that buyer is not required to
     * pay for the order until after receiving an order invoice from the seller.
     */
    public const VAL_PAY_UPON_INVOICE = 'PayUponInvoice';

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
