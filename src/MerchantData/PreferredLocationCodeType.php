<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing PreferredLocationCodeType
 *
 * Specifies the criteria for filtering search results by site, where site is determined by the site ID in the request.
 * XSD Type: PreferredLocationCodeType
 */
class PreferredLocationCodeType
{

    /**
     * Constant for 'ListedInCurrencyImplied' value.
     *
     * (in) Items listed in the currency implied by the site specified in the
     *  request.
     */
    public const VAL_LISTED_IN_CURRENCY_IMPLIED = 'ListedInCurrencyImplied';

    /**
     * Constant for 'LocatedInCountryImplied' value.
     *
     * (in) Items located in the country implied by the site specified in the
     *  request.
     */
    public const VAL_LOCATED_IN_COUNTRY_IMPLIED = 'LocatedInCountryImplied';

    /**
     * Constant for 'AvailableInCountryImplied' value.
     *
     * (in) Items available to the country implied by the site specified in the
     *  request. For the US site, this implies listings from ALL English-language
     *  countries that are available to the US.
     */
    public const VAL_AVAILABLE_IN_COUNTRY_IMPLIED = 'AvailableInCountryImplied';

    /**
     * Constant for 'SiteImplied' value.
     *
     * (in) Items listed on the site specified in the request, regardless of listing
     *  currency.
     */
    public const VAL_SITE_IMPLIED = 'SiteImplied';

    /**
     * Constant for 'BelgiumListing' value.
     *
     * (in) Items located in Belgium or listed on one of the two Belgian sites.
     */
    public const VAL_BELGIUM_LISTING = 'BelgiumListing';

    /**
     * Constant for 'CustomCode' value.
     *
     * (out) Reserved for internal or future use.
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
