<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing PayPalAccountStatusCodeType
 *
 * Enumerated type that defines PayPal account states.
 * XSD Type: PayPalAccountStatusCodeType
 */
class PayPalAccountStatusCodeType
{
    /**
     * Constant for 'Active' value.
     *
     * This enumeration value indicates that the user's PayPal account is active.
     */
    public const VAL_ACTIVE = 'Active';

    /**
     * Constant for 'Closed' value.
     *
     * This enumeration value indicates that the user's PayPal account is closed.
     */
    public const VAL_CLOSED = 'Closed';

    /**
     * Constant for 'HighRestricted' value.
     *
     * This enumeration value indicates that the user's PayPal account is in a highly
     * restricted state.
     */
    public const VAL_HIGH_RESTRICTED = 'HighRestricted';

    /**
     * Constant for 'LowRestricted' value.
     *
     * This enumeration value indicates that the user's PayPal account is in a low
     * restricted state.
     */
    public const VAL_LOW_RESTRICTED = 'LowRestricted';

    /**
     * Constant for 'Locked' value.
     *
     * This enumeration value indicates that the user's PayPal account is locked.
     */
    public const VAL_LOCKED = 'Locked';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for internal or future use
     */
    public const VAL_CUSTOM_CODE = 'CustomCode';

    /**
     * Constant for 'WireOff' value.
     *
     * This enumeration value indicates that the user's PayPal account is wired off.
     */
    public const VAL_WIRE_OFF = 'WireOff';

    /**
     * Constant for 'Unknown' value.
     *
     * This enumeration value indicates that the state of the user's PayPal account is
     * unknown.
     */
    public const VAL_UNKNOWN = 'Unknown';

    /**
     * Constant for 'Invalid' value.
     *
     * This enumeration value indicates that the user's PayPal account is invalid.
     */
    public const VAL_INVALID = 'Invalid';

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
