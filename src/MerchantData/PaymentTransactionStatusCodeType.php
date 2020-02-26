<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing PaymentTransactionStatusCodeType
 *
 * Type defining the possible states of a payment transaction. This type is used by several containers in order management-related calls.
 * XSD Type: PaymentTransactionStatusCodeType
 */
class PaymentTransactionStatusCodeType
{

    /**
     * Constant for 'Failed' value.
     *
     * This value indicates that the payment transaction failed.
     */
    public const VAL_FAILED = 'Failed';

    /**
     * Constant for 'Succeeded' value.
     *
     * This value indicates that the payment transaction succeeded. If the payment
     * transaction is a buyer's payment for an order, once this <code>Succeeded</code>
     * value is returned in an order management call, it is safe for the seller to ship
     * the order to the buyer.
     */
    public const VAL_SUCCEEDED = 'Succeeded';

    /**
     * Constant for 'Pending' value.
     *
     * This value indicates that the payment transaction is pending.
     */
    public const VAL_PENDING = 'Pending';

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
