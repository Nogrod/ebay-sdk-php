<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing RentalStatusCodeType
 *
 * [PD]This code identifies the allowed values for Rental Status e.g., OrderReceived
 * XSD Type: RentalStatusCodeType
 */
class RentalStatusCodeType
{
    /**
     * Constant for 'Extended' value.
     *
     * [PD]Rental Status: Extended
     */
    public const VAL_EXTENDED = 'Extended';

    /**
     * Constant for 'Buyout' value.
     *
     * [PD]Rental Status: Buyout
     */
    public const VAL_BUYOUT = 'Buyout';

    /**
     * Constant for 'Rented' value.
     *
     * [PD]Rental Status: Rented
     */
    public const VAL_RENTED = 'Rented';

    /**
     * Constant for 'Completed' value.
     *
     * [PD]Rental Status: Completed
     */
    public const VAL_COMPLETED = 'Completed';

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
