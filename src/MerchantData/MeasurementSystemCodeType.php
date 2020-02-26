<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing MeasurementSystemCodeType
 *
 * This enumerated type defines the two measurement systems that are used globally.
 * XSD Type: MeasurementSystemCodeType
 */
class MeasurementSystemCodeType
{

    /**
     * Constant for 'English' value.
     *
     * This enumeration value indicates that the English system of measurement is being
     * used. Also known as the Imperial System of Measurement. Weights in this system
     * are expressed as pounds and ounces, and package dimensions are expressed as feet
     * or inches.
     */
    public const VAL_ENGLISH = 'English';

    /**
     * Constant for 'Metric' value.
     *
     * This enumeration value indicates that the English system of measurement is being
     * used. Weights in this system are expressed as kilograms and grams, and package
     * dimensions are expressed as meters or centimeters.
     */
    public const VAL_METRIC = 'Metric';

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
