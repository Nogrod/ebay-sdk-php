<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing UnitCodeType
 *
 * Units of measure that you can use to specify properties such as weight and size
 *  dimensions.
 * XSD Type: UnitCodeType
 */
class UnitCodeType
{
    /**
     * Constant for 'kg' value.
     *
     * Kilograms
     */
    public const VAL_KG = 'kg';

    /**
     * Constant for 'gm' value.
     *
     * Grams
     */
    public const VAL_GM = 'gm';

    /**
     * Constant for 'lbs' value.
     *
     * Pounds
     */
    public const VAL_LBS = 'lbs';

    /**
     * Constant for 'oz' value.
     *
     * Ounces
     */
    public const VAL_OZ = 'oz';

    /**
     * Constant for 'cm' value.
     *
     * Centimeters
     */
    public const VAL_CM = 'cm';

    /**
     * Constant for 'mm' value.
     *
     * Milimeters
     */
    public const VAL_MM = 'mm';

    /**
     * Constant for 'inches' value.
     *
     * Inches
     */
    public const VAL_INCHES = 'inches';

    /**
     * Constant for 'ft' value.
     *
     * Feet
     */
    public const VAL_FT = 'ft';

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
