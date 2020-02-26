<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing RentalPeriodCodeType
 *
 * [PD]This code identifies the allowed values for Rental Type Filter e.g., a Rental or a FixedPrice or All.
 * XSD Type: RentalPeriodCodeType
 */
class RentalPeriodCodeType
{

    /**
     * Constant for 'Days30' value.
     *
     * [PD]Denotes that the item was rented for 30 days
     */
    public const VAL_DAYS_30 = 'Days30';

    /**
     * Constant for 'Days45' value.
     *
     * [PD]Denotes that the item was rented for 45 days
     */
    public const VAL_DAYS_45 = 'Days45';

    /**
     * Constant for 'Days60' value.
     *
     * [PD]Denotes that the item was rented for 60 days
     */
    public const VAL_DAYS_60 = 'Days60';

    /**
     * Constant for 'Days90' value.
     *
     * [PD]Denotes that the item was rented for 90 days
     */
    public const VAL_DAYS_90 = 'Days90';

    /**
     * Constant for 'Days125' value.
     *
     * [PD]Denotes that the item was rented for 120 days
     */
    public const VAL_DAYS_125 = 'Days125';

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
