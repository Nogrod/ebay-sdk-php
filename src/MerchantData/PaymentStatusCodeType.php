<?php

namespace Nogrod\eBaySDK\MerchantData;

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
     * This value should no longer be returned as electronic checks are no longer a
     * valid buyer payment method on any eBay marketplace.
     */
    public const VAL_BUYER_ECHECK_BOUNCED = 'BuyerECheckBounced';

    /**
     * Constant for 'BuyerCreditCardFailed' value.
     *
     * This value should no longer be returned as the buyer's form of electronic
     * payment is no longer exposed to the seller since eBay now receives payment from
     * the buyer.
     */
    public const VAL_BUYER_CREDIT_CARD_FAILED = 'BuyerCreditCardFailed';

    /**
     * Constant for 'BuyerFailedPaymentReportedBySeller' value.
     *
     * This value indicates that the seller reported the buyer's offline payment as
     * failed. This enumeration value would only be applicable for a sales transaction
     * that occurred off of eBay's platform.
     */
    public const VAL_BUYER_FAILED_PAYMENT_REPORTED_BY_SELLER = 'BuyerFailedPaymentReportedBySeller';

    /**
     * Constant for 'PayPalPaymentInProcess' value.
     *
     * This value should no longer be returned as the buyer's form of electronic
     * payment is no longer exposed to the seller since eBay now receives payment from
     * the buyer.
     */
    public const VAL_PAY_PAL_PAYMENT_IN_PROCESS = 'PayPalPaymentInProcess';

    /**
     * Constant for 'PaymentInProcess' value.
     *
     * This value indicates that the buyer's payment is in process, but has not yet
     * cleared.
     *  <br/>
     *  <br/>
     *  <span class="tablenote"><b>Note:</b>
     *  This value may also get returned for a sales transaction that occurred off of
     * eBay's platform, and the payment status may stay in this state unless the seller
     * marks the order as paid.</span>
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
