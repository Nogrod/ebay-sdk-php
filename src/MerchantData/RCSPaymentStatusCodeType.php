<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing RCSPaymentStatusCodeType
 *
 * The status of a payment.
 * XSD Type: RCSPaymentStatusCodeType
 */
class RCSPaymentStatusCodeType
{

    /**
     * Constant for 'Canceled' value.
     *
     * Order line item payment has been canceled.
     *  (Reserved for future use.)
     */
    public const VAL_CANCELED = 'Canceled';

    /**
     * Constant for 'Paid' value.
     *
     * Order line item payment is completed.
     */
    public const VAL_PAID = 'Paid';

    /**
     * Constant for 'Pending' value.
     *
     * Order line item is awaiting payment.
     */
    public const VAL_PENDING = 'Pending';

    /**
     * Constant for 'CustomCode' value.
     *
     * (out) Reserved for internal or future use.
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
