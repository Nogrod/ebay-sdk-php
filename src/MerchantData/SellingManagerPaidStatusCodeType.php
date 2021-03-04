<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing SellingManagerPaidStatusCodeType
 *
 * Mark paid status type.
 * XSD Type: SellingManagerPaidStatusCodeType
 */
class SellingManagerPaidStatusCodeType
{
    /**
     * Constant for 'Paid' value.
     *
     * The status of the order is "paid."
     */
    public const VAL_PAID = 'Paid';

    /**
     * Constant for 'PartiallyPaid' value.
     *
     * The status of the order is "partially paid."
     */
    public const VAL_PARTIALLY_PAID = 'PartiallyPaid';

    /**
     * Constant for 'Unpaid' value.
     *
     * The status of the order is "unpaid."
     */
    public const VAL_UNPAID = 'Unpaid';

    /**
     * Constant for 'Pending' value.
     *
     * The status of the order is "pending."
     */
    public const VAL_PENDING = 'Pending';

    /**
     * Constant for 'Refunded' value.
     *
     * The status of the order is "refunded."
     */
    public const VAL_REFUNDED = 'Refunded';

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
