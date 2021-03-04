<?php

namespace Nogrod\eBaySDK\Finding;

/**
 * Class representing MapExposureEnumType
 *
 *
 * XSD Type: MapExposureEnum
 */
class MapExposureEnumType
{
    /**
     * Constant for 'PreCheckout' value.
     *
     * Description
     */
    public const VAL_PRE_CHECKOUT = 'PreCheckout';

    /**
     * Constant for 'DuringCheckout' value.
     *
     * Description
     */
    public const VAL_DURING_CHECKOUT = 'DuringCheckout';

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
