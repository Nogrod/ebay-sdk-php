<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing PayPalAccountTypeCodeType
 *
 * Enumerated type that defines PayPal account types.
 * XSD Type: PayPalAccountTypeCodeType
 */
class PayPalAccountTypeCodeType
{
    /**
     * Constant for 'Personal' value.
     *
     * This enumeration value indicates that the user's PayPal account is a Personal
     * account.
     */
    public const VAL_PERSONAL = 'Personal';

    /**
     * Constant for 'Premier' value.
     *
     * This enumeration value indicates that the user's PayPal account is a Premier
     * account.
     */
    public const VAL_PREMIER = 'Premier';

    /**
     * Constant for 'Business' value.
     *
     * This enumeration value indicates that the user's PayPal account is a Business
     * account.
     */
    public const VAL_BUSINESS = 'Business';

    /**
     * Constant for 'Unknown' value.
     *
     * This enumeration value indicates that the user's PayPal account type is unknown.
     */
    public const VAL_UNKNOWN = 'Unknown';

    /**
     * Constant for 'Invalid' value.
     *
     * This enumeration value indicates that the user's PayPal account is invalid.
     */
    public const VAL_INVALID = 'Invalid';

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
