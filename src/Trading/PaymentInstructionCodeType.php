<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing PaymentInstructionCodeType
 *
 * This enumerated type indicates the type of payment instructions included in the shipping package.
 * XSD Type: PaymentInstructionCodeType
 */
class PaymentInstructionCodeType
{

    /**
     * Constant for 'PaymentInstruction' value.
     *
     * This enumeration value indicates that payment instructions were included in the
     * shipping package for the 'Pay Upon Invoice' order.
     */
    public const VAL_PAYMENT_INSTRUCTION = 'PaymentInstruction';

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
