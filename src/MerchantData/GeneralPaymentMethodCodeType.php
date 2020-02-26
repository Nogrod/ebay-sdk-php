<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing GeneralPaymentMethodCodeType
 *
 * This enumerated type is deprecated.
 * XSD Type: GeneralPaymentMethodCodeType
 */
class GeneralPaymentMethodCodeType
{

    /**
     * Constant for 'Other' value.
     *
     * This value is not used.
     */
    public const VAL_OTHER = 'Other';

    /**
     * Constant for 'Echeck' value.
     *
     * This value is not used.
     */
    public const VAL_ECHECK = 'Echeck';

    /**
     * Constant for 'ACH' value.
     *
     * This value is not used.
     */
    public const VAL_ACH = 'ACH';

    /**
     * Constant for 'Creditcard' value.
     *
     * This value is not used.
     */
    public const VAL_CREDITCARD = 'Creditcard';

    /**
     * Constant for 'PayPalBalance' value.
     *
     * This value is not used.
     */
    public const VAL_PAY_PAL_BALANCE = 'PayPalBalance';

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
