<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ListingSubtypeCodeType
 *
 * This enumerated type defines the two subtypes that can be used if the main listing type (in <strong>ListingType</strong> field) is <code>LeadGeneration</code>. A <strong>ListingSubtype2</strong> value must be specified if the <strong>ListingType</strong> value is set to <code>LeadGeneration</code>.
 * XSD Type: ListingSubtypeCodeType
 */
class ListingSubtypeCodeType
{
    /**
     * Constant for 'ClassifiedAd' value.
     *
     * This value indicates that the lead generation listing is a classifed ad. Note
     * that only some eBay categories support classified ad listings. To determine
     * whether a specific leaf category on a specific eBay marketplace supports
     * Classified Ad listings, use the <b>Metadata API</b> <a
     * href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getClassifiedAdPolicies"
     * target="_blank">getClassifiedAdPolicies</a> method. Pass the target
     * marketplace_id and the leaf category ID in the filter query parameter, and then
     * inspect the <b>classifiedAdPolicies.adFormatEnabled</b> field for the returned
     * category.
     */
    public const VAL_CLASSIFIED_AD = 'ClassifiedAd';

    /**
     * Constant for 'LocalMarketBestOfferOnly' value.
     *
     * This value indicates that the lead generation listing is a US Motors Local
     * Market listing. Note that only some eBay Motors categories support Motors Local
     * Market listings. To determine whether a specific leaf category supports Motors
     * Local Market Classified Ad listings, use the <b>Metadata API</b> <a
     * href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getMotorsListingPolicies"
     * target="_blank">getMotorsListingPolicies</a> method. For eBay US Motors
     * categories, specify <b>marketplace_id</b> as <code>EBAY_MOTORS_US</code>, pass
     * the leaf category ID in the filter query parameter, and then inspect the
     * <b>motorsListingPolicies.localMarketAdFormatEnabled</b> field for the returned
     * category.
     */
    public const VAL_LOCAL_MARKET_BEST_OFFER_ONLY = 'LocalMarketBestOfferOnly';

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
