<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing CompleteStatusCodeType
 *
 * Enumerated type that contains values which indicate whether an order or order line item is complete, incomplete, or pending.
 * XSD Type: CompleteStatusCodeType
 */
class CompleteStatusCodeType
{
    /**
     * Constant for 'Incomplete' value.
     *
     * This value indicates that the order or order line item is in the incomplete
     * state. Generally speaking, an order or order line item is considered incomplete
     * when payment from the buyer has yet to be initiated.
     */
    public const VAL_INCOMPLETE = 'Incomplete';

    /**
     * Constant for 'Complete' value.
     *
     * This value indicates that the order or order line item is complete. Generally
     * speaking, an order or order line item is complete when payment from the buyer
     * has been initiated and has been processed.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  If the <b>PaymentMethodUsed</b> is <code>CashOnPickup</code>,
     *  the <b>CheckoutStatus.Status</b> value in <b>GetOrders</b> will be
     *  <code>Complete</code> at checkout time, even though the seller may not have
     * been officially paid
     *  yet. The <b>CheckoutStatus.Status</b> value in <b>GetOrders</b> will
     *  remain as <code>Complete</code> even if the seller
     *  changes the checkout status to Pending. However, the <b>eBayPaymentStatus</b>
     *  value in <b>GetOrders</b> will change from <code>NoPaymentFailure</code> to
     *  <code>PaymentInProcess</code>.
     *  </span>
     */
    public const VAL_COMPLETE = 'Complete';

    /**
     * Constant for 'Pending' value.
     *
     * This value indicates that the order or order line item is in the pending state.
     * Generally speaking, an order is considered pending when payment
     *  from the buyer has been initiated but has yet to be fully processed.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  If the payment method is <code>CashOnPickup</code>, the
     *  <b>CheckoutStatus.Status</b> value in <b>GetOrders</b> will read
     * <code>Complete</code> at checkout time,
     *  even though the seller may not have been officially paid yet. The
     *  <b>CheckoutStatus.Status</b> value in <b>GetOrders</b> will remain as
     * <code>Complete</code> even if the
     *  seller changes the checkout status to Pending.
     *  However, the <b>eBayPaymentStatus</b> value in <b>GetOrders</b> will change
     * from
     *  <code>NoPaymentFailure</code> to <code>PaymentInProcess</code>.
     *  </span>
     */
    public const VAL_PENDING = 'Pending';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for internal or future use
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
