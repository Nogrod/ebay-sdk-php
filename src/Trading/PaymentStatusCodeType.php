<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing PaymentStatusCodeType
 *
 * Type defining the values that can be returned in the <b>eBayPaymentStatus</b>
 *  field of order management calls. These values indicate the current status of the buyer's
 *  payment for an order.
 * XSD Type: PaymentStatusCodeType
 */
class PaymentStatusCodeType
{
    /**
     * Constant for 'NoPaymentFailure' value.
     *
     * This value indicates that the buyer's payment for the order has cleared. A
     *  <b>CheckoutStatus.eBayPaymentStatus</b> value of 'NoPaymentFailure'
     *  and a <b>CheckoutStatus.Status</b> value of 'Complete' indicates that
     *  checkout is complete.
     */
    public const VAL_NO_PAYMENT_FAILURE = 'NoPaymentFailure';

    /**
     * Constant for 'BuyerECheckBounced' value.
     *
     * This value indicates that the buyer's eCheck bounced. This value is only
     * applicable
     *  if the seller accepts eChecks as a form of payment.
     */
    public const VAL_BUYER_ECHECK_BOUNCED = 'BuyerECheckBounced';

    /**
     * Constant for 'BuyerCreditCardFailed' value.
     *
     * This value indicates that the buyer's payment via a credit card failed. This
     * value
     *  is only applicable if the seller accepts credit cards as a form of payment.
     */
    public const VAL_BUYER_CREDIT_CARD_FAILED = 'BuyerCreditCardFailed';

    /**
     * Constant for 'BuyerFailedPaymentReportedBySeller' value.
     *
     * This value indicates that the seller reported the buyer's payment as failed.
     */
    public const VAL_BUYER_FAILED_PAYMENT_REPORTED_BY_SELLER = 'BuyerFailedPaymentReportedBySeller';

    /**
     * Constant for 'PayPalPaymentInProcess' value.
     *
     * This value indicates that the buyer's PayPal payment is in process. This value
     *  is only applicable if the buyer has selected PayPal as the payment method.
     */
    public const VAL_PAY_PAL_PAYMENT_IN_PROCESS = 'PayPalPaymentInProcess';

    /**
     * Constant for 'PaymentInProcess' value.
     *
     * This value indicates that the buyer's non-PayPal payment is in process. This
     * value
     *  is only applicable if the buyer has selected a payment method other than
     * PayPal.
     */
    public const VAL_PAYMENT_IN_PROCESS = 'PaymentInProcess';

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
