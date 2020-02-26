<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing PaymentOptionsGroupEnabledCodeType
 *
 * This enumerated type is deprecated.
 * XSD Type: PaymentOptionsGroupEnabledCodeType
 */
class PaymentOptionsGroupEnabledCodeType
{

    /**
     * Constant for 'eBayPaymentProcessEnabled' value.
     *
     * This value is not used.
     */
    public const VAL_E_BAY_PAYMENT_PROCESS_ENABLED = 'eBayPaymentProcessEnabled';

    /**
     * Constant for 'NonStandardPaymentsEnabled' value.
     *
     * This value is not used.
     */
    public const VAL_NON_STANDARD_PAYMENTS_ENABLED = 'NonStandardPaymentsEnabled';

    /**
     * Constant for 'eBayPaymentProcessExcluded' value.
     *
     * This value is not used.
     */
    public const VAL_E_BAY_PAYMENT_PROCESS_EXCLUDED = 'eBayPaymentProcessExcluded';

    /**
     * Constant for 'CustomCode' value.
     *
     * This value is not used.
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
