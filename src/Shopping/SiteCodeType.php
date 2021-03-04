<?php

namespace Nogrod\eBaySDK\Shopping;

/**
 * Class representing SiteCodeType
 *
 * The enumerated type consists of all eBay marketplaces on which a user is registered and on which items can be listed. Generally, each enumeration value is simply the name of the couuntry (of the eBay marketplace), but there are some variations. Note that there are some countries where eBay listings are available, but that country does not have an official eBay marketplace, but only a 'Global Buying Hub'. A 'Global Buying Hub' basically just allows buyers in countries that don't have an official eBay marketplace to view inventory from other eBay marketplaces around the world.
 * XSD Type: SiteCodeType
 */
class SiteCodeType
{
    /**
     * Constant for 'US' value.
     *
     * This enumeration indicates that the site is the eBay US marketplace.
     */
    public const VAL_US = 'US';

    /**
     * Constant for 'Canada' value.
     *
     * This enumeration indicates that the site is the eBay Canada marketplace.
     */
    public const VAL_CANADA = 'Canada';

    /**
     * Constant for 'UK' value.
     *
     * This enumeration indicates that the site is the eBay UK marketplace.
     */
    public const VAL_UK = 'UK';

    /**
     * Constant for 'Australia' value.
     *
     * This enumeration indicates that the site is the eBay Australia marketplace.
     */
    public const VAL_AUSTRALIA = 'Australia';

    /**
     * Constant for 'Austria' value.
     *
     * This enumeration indicates that the site is the eBay Austria marketplace.
     */
    public const VAL_AUSTRIA = 'Austria';

    /**
     * Constant for 'Belgium_French' value.
     *
     * This enumeration indicates that the site is the eBay Belgium marketplace,
     * translated into the French language.
     */
    public const VAL_BELGIUM__FRENCH = 'Belgium_French';

    /**
     * Constant for 'France' value.
     *
     * This enumeration indicates that the site is the eBay France marketplace.
     */
    public const VAL_FRANCE = 'France';

    /**
     * Constant for 'Germany' value.
     *
     * This enumeration indicates that the site is the eBay Germany marketplace.
     */
    public const VAL_GERMANY = 'Germany';

    /**
     * Constant for 'Italy' value.
     *
     * This enumeration indicates that the site is the eBay Italy marketplace.
     */
    public const VAL_ITALY = 'Italy';

    /**
     * Constant for 'Belgium_Dutch' value.
     *
     * This enumeration indicates that the site is the eBay Belgium marketplace,
     * translated into the Dutch language.
     */
    public const VAL_BELGIUM__DUTCH = 'Belgium_Dutch';

    /**
     * Constant for 'Netherlands' value.
     *
     * This enumeration indicates that the site is the eBay Netherlands marketplace.
     */
    public const VAL_NETHERLANDS = 'Netherlands';

    /**
     * Constant for 'Spain' value.
     *
     * This enumeration indicates that the site is the eBay Spain marketplace.
     */
    public const VAL_SPAIN = 'Spain';

    /**
     * Constant for 'Switzerland' value.
     *
     * This enumeration indicates that the site is the eBay Switzerland marketplace.
     */
    public const VAL_SWITZERLAND = 'Switzerland';

    /**
     * Constant for 'Taiwan' value.
     *
     * This enumeration indicates that the site is the eBay Taiwan marketplace.
     */
    public const VAL_TAIWAN = 'Taiwan';

    /**
     * Constant for 'eBayMotors' value.
     *
     * This enumeration indicates that the site is the eBay Motors. eBay Motors is
     * technically a subdomain of eBay.com, but this value is still returned if the
     * listing is in an eBay Motors category.
     */
    public const VAL_E_BAY_MOTORS = 'eBayMotors';

    /**
     * Constant for 'HongKong' value.
     *
     * This value is not applicable, as Hong Kong does not have an official eBay
     * marketplace, but only a 'Global Buying Hub'. A 'Global Buying Hub' basically
     * just allows buyers in countries that don't have an official eBay marketplace to
     * view inventory from other eBay marketplaces around the world.
     */
    public const VAL_HONG_KONG = 'HongKong';

    /**
     * Constant for 'Singapore' value.
     *
     * This value is not applicable, as Singapore does not have an official eBay
     * marketplace, but only a 'Global Buying Hub'. A 'Global Buying Hub' basically
     * just allows buyers in countries that don't have an official eBay marketplace to
     * view inventory from other eBay marketplaces around the world.
     */
    public const VAL_SINGAPORE = 'Singapore';

    /**
     * Constant for 'India' value.
     *
     * This value is not applicable, as India no longer has an official eBay
     * marketplace, but only a 'Global Buying Hub'. A 'Global Buying Hub' basically
     * just allows buyers in countries that don't have an official eBay marketplace to
     * view inventory from other eBay marketplaces around the world.
     */
    public const VAL_INDIA = 'India';

    /**
     * Constant for 'China' value.
     *
     * This value is not applicable, as China does not have an official eBay
     * marketplace, but only a 'Global Buying Hub'. A 'Global Buying Hub' basically
     * just allows buyers in countries that don't have an official eBay marketplace to
     * view inventory from other eBay marketplaces around the world.
     */
    public const VAL_CHINA = 'China';

    /**
     * Constant for 'Ireland' value.
     *
     * This enumeration indicates that the site is the eBay Ireland marketplace.
     */
    public const VAL_IRELAND = 'Ireland';

    /**
     * Constant for 'Malaysia' value.
     *
     * This value is not applicable, as Malaysia does not have an official eBay
     * marketplace, but only a 'Global Buying Hub'. A 'Global Buying Hub' basically
     * just allows buyers in countries that don't have an official eBay marketplace to
     * view inventory from other eBay marketplaces around the world.
     */
    public const VAL_MALAYSIA = 'Malaysia';

    /**
     * Constant for 'Philippines' value.
     *
     * This enumeration indicates that the site is the eBay Philippines marketplace.
     */
    public const VAL_PHILIPPINES = 'Philippines';

    /**
     * Constant for 'Poland' value.
     *
     * This enumeration indicates that the site is the eBay Poland marketplace.
     */
    public const VAL_POLAND = 'Poland';

    /**
     * Constant for 'Sweden' value.
     *
     * This value is not applicable, as there is no longer an eBay Sweden marketplace
     * or a 'Global Buying Hub' available in Sweden.
     */
    public const VAL_SWEDEN = 'Sweden';

    /**
     * Constant for 'CustomCode' value.
     *
     * Placeholder value. See
     *  <a
     * href="http://developer.ebay.com/DevZone/shopping/docs/CallRef/types/simpleTypes.html#token">token</a>.
     */
    public const VAL_CUSTOM_CODE = 'CustomCode';

    /**
     * Constant for 'CanadaFrench' value.
     *
     * This enumeration indicates that the site is the eBay Canada French marketplace.
     * The eBay Canada French marketplace is actually its own eBay marketplace, and not
     * just the eBay Canada marketplace translated into the French language.
     */
    public const VAL_CANADA_FRENCH = 'CanadaFrench';

    /**
     * Constant for 'Russia' value.
     *
     * This value is not applicable, as Russia does not have an official eBay
     * marketplace, but only a 'Global Buying Hub'. A 'Global Buying Hub' basically
     * just allows buyers in countries that don't have an official eBay marketplace to
     * view inventory from other eBay marketplaces around the world.
     */
    public const VAL_RUSSIA = 'Russia';

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
