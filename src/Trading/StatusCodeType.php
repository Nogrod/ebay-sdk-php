<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing StatusCodeType
 *
 * This type is no longer used and was replaced by <b>ShippingLocationDetails</b>.
 * XSD Type: StatusCodeType
 */
class StatusCodeType
{

    /**
     * Constant for 'Active' value.
     *
     * This field is deprecated.
     */
    public const VAL_ACTIVE = 'Active';

    /**
     * Constant for 'Inactive' value.
     *
     * This field is deprecated.
     */
    public const VAL_INACTIVE = 'Inactive';

    /**
     * Constant for 'CustomCode' value.
     *
     * This field is deprecated.
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
