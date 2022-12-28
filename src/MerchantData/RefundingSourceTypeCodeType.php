<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing RefundingSourceTypeCodeType
 *
 * This enumerated type is deprecated.
 * XSD Type: RefundingSourceTypeCodeType
 */
class RefundingSourceTypeCodeType
{
    /**
     * Constant for 'ScheduledPayout' value.
     *
     * This value is not used.
     */
    public const VAL_SCHEDULED_PAYOUT = 'ScheduledPayout';

    /**
     * Constant for 'Paypal' value.
     *
     * This value is not used.
     */
    public const VAL_PAYPAL = 'Paypal';

    /**
     * Constant for 'BankAccount' value.
     *
     * This value is not used.
     */
    public const VAL_BANK_ACCOUNT = 'BankAccount';

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
