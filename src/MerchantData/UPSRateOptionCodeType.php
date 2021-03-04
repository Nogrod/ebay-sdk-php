<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing UPSRateOptionCodeType
 *
 * This enumerated type defines the rate types that United Parcel Service (UPS) can offer to sellers for shipping.
 * XSD Type: UPSRateOptionCodeType
 */
class UPSRateOptionCodeType
{
    /**
     * Constant for 'UPSDailyRates' value.
     *
     * This enumeration value indicates that the seller is currently receiving the UPS
     * Daily Rate for shipping items.
     */
    public const VAL_UPSDAILY_RATES = 'UPSDailyRates';

    /**
     * Constant for 'UPSOnDemandRates' value.
     *
     * This enumeration value indicates that the seller is currently receiving the UPS
     * On-Demand Rate for shipping items.
     */
    public const VAL_UPSON_DEMAND_RATES = 'UPSOnDemandRates';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for internal or future use
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
