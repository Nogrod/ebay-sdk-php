<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ShippingRegionCodeType
 *
 * Regions to which the seller is willing to ship the item.
 *  These values are applicable to ShipToLocation.
 * XSD Type: ShippingRegionCodeType
 */
class ShippingRegionCodeType
{
    /**
     * Constant for 'Africa' value.
     *
     * Africa
     */
    public const VAL_AFRICA = 'Africa';

    /**
     * Constant for 'Asia' value.
     *
     * Asia
     */
    public const VAL_ASIA = 'Asia';

    /**
     * Constant for 'Caribbean' value.
     *
     * Caribbean
     */
    public const VAL_CARIBBEAN = 'Caribbean';

    /**
     * Constant for 'Europe' value.
     *
     * Europe
     */
    public const VAL_EUROPE = 'Europe';

    /**
     * Constant for 'LatinAmerica' value.
     *
     * Latin America
     */
    public const VAL_LATIN_AMERICA = 'LatinAmerica';

    /**
     * Constant for 'MiddleEast' value.
     *
     * Middle East
     */
    public const VAL_MIDDLE_EAST = 'MiddleEast';

    /**
     * Constant for 'NorthAmerica' value.
     *
     * North America
     */
    public const VAL_NORTH_AMERICA = 'NorthAmerica';

    /**
     * Constant for 'Oceania' value.
     *
     * Oceania (Pacific region other than Asia)
     */
    public const VAL_OCEANIA = 'Oceania';

    /**
     * Constant for 'SouthAmerica' value.
     *
     * South America
     */
    public const VAL_SOUTH_AMERICA = 'SouthAmerica';

    /**
     * Constant for 'EuropeanUnion' value.
     *
     * European Union
     */
    public const VAL_EUROPEAN_UNION = 'EuropeanUnion';

    /**
     * Constant for 'WillNotShip' value.
     *
     * Seller will not ship the item.
     */
    public const VAL_WILL_NOT_SHIP = 'WillNotShip';

    /**
     * Constant for 'Worldwide' value.
     *
     * Seller has specified Worldwide or eBay has
     *  determined that the specified regions add up to Worldwide.
     */
    public const VAL_WORLDWIDE = 'Worldwide';

    /**
     * Constant for 'Americas' value.
     *
     * Americas
     */
    public const VAL_AMERICAS = 'Americas';

    /**
     * Constant for 'None' value.
     */
    public const VAL_NONE = 'None';

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
