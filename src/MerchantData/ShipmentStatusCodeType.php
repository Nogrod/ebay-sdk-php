<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing ShipmentStatusCodeType
 *
 *
 * XSD Type: ShipmentStatusCodeType
 */
class ShipmentStatusCodeType
{
    /**
     * Constant for 'Active' value.
     */
    public const VAL_ACTIVE = 'Active';

    /**
     * Constant for 'Canceled' value.
     */
    public const VAL_CANCELED = 'Canceled';

    /**
     * Constant for 'CustomCode' value.
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
