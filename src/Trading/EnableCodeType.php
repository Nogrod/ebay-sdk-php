<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing EnableCodeType
 *
 * This enumeration type is used to indicate whether an application/URL/device is enabled to receive notifications, or to indicate whether a specific notification event is enabled.
 * XSD Type: EnableCodeType
 */
class EnableCodeType
{

    /**
     * Constant for 'Enable' value.
     *
     * This enumeration value indicates that an application/URL/device is enabled to
     * receive notifications, or to indicate that a specific notification event is
     * enabled.
     */
    public const VAL_ENABLE = 'Enable';

    /**
     * Constant for 'Disable' value.
     *
     * This enumeration value indicates that an application/URL/device is disabled, or
     * being blocked from receiving notifications, or to indicate that a specific
     * notification event is disabled.
     */
    public const VAL_DISABLE = 'Disable';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for future use.
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
