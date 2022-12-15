<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing PayPalAccountLevelCodeType
 *
 * This enumeration type is deprecated.
 * XSD Type: PayPalAccountLevelCodeType
 */
class PayPalAccountLevelCodeType
{
    /**
     * Constant for 'Unverified' value.
     *
     * This enumeration value is deprecated.
     */
    public const VAL_UNVERIFIED = 'Unverified';

    /**
     * Constant for 'InternationalUnverified' value.
     *
     * This enumeration value is deprecated.
     */
    public const VAL_INTERNATIONAL_UNVERIFIED = 'InternationalUnverified';

    /**
     * Constant for 'Verified' value.
     *
     * This enumeration value is deprecated.
     */
    public const VAL_VERIFIED = 'Verified';

    /**
     * Constant for 'InternationalVerified' value.
     *
     * This enumeration value is deprecated.
     */
    public const VAL_INTERNATIONAL_VERIFIED = 'InternationalVerified';

    /**
     * Constant for 'Trusted' value.
     *
     * This enumeration value is deprecated.
     */
    public const VAL_TRUSTED = 'Trusted';

    /**
     * Constant for 'Unknown' value.
     *
     * This enumeration value is deprecated.
     */
    public const VAL_UNKNOWN = 'Unknown';

    /**
     * Constant for 'Invalid' value.
     *
     * This enumeration value is deprecated.
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
