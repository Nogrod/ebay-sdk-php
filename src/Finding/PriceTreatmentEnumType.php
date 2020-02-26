<?php

namespace Nogrod\eBaySDK\Finding;

/**
 * Class representing PriceTreatmentEnumType
 *
 *
 * XSD Type: PriceTreatmentEnum
 */
class PriceTreatmentEnumType
{

    /**
     * Constant for 'STP' value.
     *
     * Strike through price
     */
    public const VAL_STP = 'STP';

    /**
     * Constant for 'MAP' value.
     *
     * Miminum Advertised Price
     */
    public const VAL_MAP = 'MAP';

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
