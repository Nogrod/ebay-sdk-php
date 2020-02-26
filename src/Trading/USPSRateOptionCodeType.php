<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing USPSRateOptionCodeType
 *
 * This enumerated type defines the rate types that United States Postal Service (USPS) can offer to sellers for shipping.
 * XSD Type: USPSRateOptionCodeType
 */
class USPSRateOptionCodeType
{

    /**
     * Constant for 'USPSDiscounted' value.
     *
     * This enumeration value indicates that the seller is currently receiving the USPS
     * Discounted Rate for shipping items.
     */
    public const VAL_USPSDISCOUNTED = 'USPSDiscounted';

    /**
     * Constant for 'USPSRetail' value.
     *
     * This enumeration value indicates that the seller is currently receiving the USPS
     * Retail Rate for shipping items.
     */
    public const VAL_USPSRETAIL = 'USPSRetail';

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
