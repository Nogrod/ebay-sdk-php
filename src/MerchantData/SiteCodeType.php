<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing SiteCodeType
 *
 * eBay sites (by the country in which each resides) on which a user is registered
 *  and on which items can be listed through the Trading API.
 * XSD Type: SiteCodeType
 */
class SiteCodeType
{
    /**
     * Constant for 'US' value.
     *
     * USA, site ID 0, abbreviation US, currency USD.
     *  <br/>(<a href="http://www.ebay.com" target="_blank">http://www.ebay.com</a>)
     */
    public const VAL_US = 'US';

    /**
     * Constant for 'Canada' value.
     *
     * Canada, site ID 2, abbreviation CA, currencies CAD and USD.
     *  <br/>(<a href="http://www.ebay.ca" target="_blank">http://www.ebay.ca</a>)
     */
    public const VAL_CANADA = 'Canada';

    /**
     * Constant for 'UK' value.
     *
     * United Kingdom, site ID 3, abbreviation UK, currency GBP.
     *  <br/>(<a href="http://www.ebay.co.uk"
     * target="_blank">http://www.ebay.co.uk</a>)
     */
    public const VAL_UK = 'UK';

    /**
     * Constant for 'Australia' value.
     *
     * Australia, site ID 15, abbreviation AU, currency AUD.
     *  <br/>(<a href="http://www.ebay.com.au"
     * target="_blank">http://www.ebay.com.au</a>)
     */
    public const VAL_AUSTRALIA = 'Australia';

    /**
     * Constant for 'Austria' value.
     *
     * Austria, site ID 16, abbreviation AT, currency EUR.
     *  <br/>(<a href="http://www.ebay.at" target="_blank">http://www.ebay.at</a>)
     */
    public const VAL_AUSTRIA = 'Austria';

    /**
     * Constant for 'Belgium_French' value.
     *
     * Belgium (French), site ID 23, abbreviation BEFR, currency EUR.
     *  <br/>(<a href="http://www.ebay.be" target="_blank">http://www.ebay.be</a>)
     */
    public const VAL_BELGIUM__FRENCH = 'Belgium_French';

    /**
     * Constant for 'France' value.
     *
     * France, site ID 71, abbreviation FR, currency EUR.
     *  <br/>(<a href="http://www.ebay.fr" target="_blank">http://www.ebay.fr</a>)
     */
    public const VAL_FRANCE = 'France';

    /**
     * Constant for 'Germany' value.
     *
     * Germany, site ID 77, abbreviation DE, currency EUR.
     *  <br/>(<a href="http://www.ebay.de" target="_blank">http://www.ebay.de</a>)
     */
    public const VAL_GERMANY = 'Germany';

    /**
     * Constant for 'Italy' value.
     *
     * Italy, site ID 101, abbreviation IT, currency EUR.
     *  <br/>(<a href="http://www.ebay.it" target="_blank">http://www.ebay.it</a>)
     */
    public const VAL_ITALY = 'Italy';

    /**
     * Constant for 'Belgium_Dutch' value.
     *
     * Belgium (Dutch), site ID 123, abbreviation BENL, currency EUR.
     *  <br/>(<a href="http://www.ebay.be" target="_blank">http://www.ebay.be</a>)
     */
    public const VAL_BELGIUM__DUTCH = 'Belgium_Dutch';

    /**
     * Constant for 'Netherlands' value.
     *
     * Netherlands, site ID 146, abbreviation NL, currency EUR.
     *  <br/>(<a href="http://www.ebay.nl" target="_blank">http://www.ebay.nl</a>)
     */
    public const VAL_NETHERLANDS = 'Netherlands';

    /**
     * Constant for 'Spain' value.
     *
     * Spain, site ID 186, abbreviation ES, currency EUR.
     *  <br/>(<a href="http://www.ebay.es" target="_blank">http://www.ebay.es</a>)
     */
    public const VAL_SPAIN = 'Spain';

    /**
     * Constant for 'Switzerland' value.
     *
     * Switzerland, site ID 193, abbreviation CH, currency CHF.
     *  <br/>(<a href="http://www.ebay.ch" target="_blank">http://www.ebay.ch</a>)
     */
    public const VAL_SWITZERLAND = 'Switzerland';

    /**
     * Constant for 'Taiwan' value.
     *
     * Taiwan, currency TWD. Note that the old eBay Taiwan site is no longer in
     * operation, and the new site does not use this API.
     */
    public const VAL_TAIWAN = 'Taiwan';

    /**
     * Constant for 'eBayMotors' value.
     *
     * Although Site ID 100 is still valid in APIs, eBay Motors US is no longer its own
     * site, but just a vertical within the eBay US site.
     */
    public const VAL_E_BAY_MOTORS = 'eBayMotors';

    /**
     * Constant for 'HongKong' value.
     *
     * Hong Kong, site ID 201, abbreviation HK, currency HKD.
     *  <br/>(<a href="http://www.ebay.com.hk"
     * target="_blank">http://www.ebay.com.hk</a>)
     */
    public const VAL_HONG_KONG = 'HongKong';

    /**
     * Constant for 'Singapore' value.
     *
     * Singapore, site ID 216, abbreviation SG, currency SGD.
     *  <br/>(<a href="http://www.ebay.com.sg"
     * target="_blank">http://www.ebay.com.sg</a>)
     */
    public const VAL_SINGAPORE = 'Singapore';

    /**
     * Constant for 'India' value.
     *
     * India, site ID 203, abbreviation IN, currency INR.
     *  <br/>(<a href="http://www.ebay.in" target="_blank">http://www.ebay.in</a>)
     */
    public const VAL_INDIA = 'India';

    /**
     * Constant for 'China' value.
     */
    public const VAL_CHINA = 'China';

    /**
     * Constant for 'Ireland' value.
     *
     * Ireland, site ID 205, abbreviation IE, currency EUR.
     *  <br/>(<a href="http://www.ebay.ie" target="_blank">http://www.ebay.ie</a>)
     */
    public const VAL_IRELAND = 'Ireland';

    /**
     * Constant for 'Malaysia' value.
     *
     * Malaysia, site ID 207, abbreviation MY, currency MYR.
     *  <br/>(<a href="http://www.ebay.com.my"
     * target="_blank">http://www.ebay.com.my</a>)
     */
    public const VAL_MALAYSIA = 'Malaysia';

    /**
     * Constant for 'Philippines' value.
     *
     * Philippines, site ID 211, abbreviation PH, currency PHP.
     *  <br/>(<a href="http://www.ebay.ph" target="_blank">http://www.ebay.ph</a>)
     */
    public const VAL_PHILIPPINES = 'Philippines';

    /**
     * Constant for 'Poland' value.
     *
     * Poland, site ID 212, abbreviation PL, currency PLN.
     *  <br/>(<a href="http://www.ebay.pl" target="_blank">http://www.ebay.pl</a>)
     */
    public const VAL_POLAND = 'Poland';

    /**
     * Constant for 'Sweden' value.
     */
    public const VAL_SWEDEN = 'Sweden';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for internal or future use.
     */
    public const VAL_CUSTOM_CODE = 'CustomCode';

    /**
     * Constant for 'CanadaFrench' value.
     *
     * Canada French, site ID 210, abbreviation CAFR, currencies CAD and USD.
     */
    public const VAL_CANADA_FRENCH = 'CanadaFrench';

    /**
     * Constant for 'Russia' value.
     *
     * Russia, site ID 215, abbreviation RU, currency RUB. Sellers must use Merchant
     * Integration Platform (MIP) to create and revise listings on the Russia site.
     * Russian listings cannot be created or revised through the Trading API's add and
     * revise calls, so 'Russia' would not be a valid value to pass in through
     * <b>Item.Site</b> field of an Add or Revise Trading API call.
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
