<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing DateSpecifierCodeType
 *
 * This type is deprecated.
 * XSD Type: DateSpecifierCodeType
 */
class DateSpecifierCodeType
{

    /**
     * Constant for 'M' value.
     *
     * This field is deprecated.
     */
    public const VAL_M = 'M';

    /**
     * Constant for 'D' value.
     *
     * This field is deprecated.
     */
    public const VAL_D = 'D';

    /**
     * Constant for 'Y' value.
     *
     * This field is deprecated.
     */
    public const VAL_Y = 'Y';

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
