<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing DetailNameCodeType
 *
 * This enumerated type contains all data filters that can be used to control which metadata is returned in the response of a <b>GeteBayDetails</b> call. The user can use as little or as many values as desired. If none of these data filters are used, all applicable metadata will be returned.
 * XSD Type: DetailNameCodeType
 */
class DetailNameCodeType
{
    /**
     * Constant for 'CountryDetails' value.
     *
     * This enumeration value can be included in a <b>DetailName</b> field if the user
     * wishes to retrieve the two-digit country codes for all countries of the world.
     * Among other things, the two-digit country codes can be used when a seller is
     * creating a 'ship-to' and/or an 'exclude ship-to' location list.
     *  <br/><br/>
     *  The same <b>CountryDetails</b> metadata will be returned regardless of the
     * value that is passed into the <b>X-EBAY-API-SITEID</b> request header.
     */
    public const VAL_COUNTRY_DETAILS = 'CountryDetails';

    /**
     * Constant for 'CurrencyDetails' value.
     *
     * This enumeration value can be included in a <b>DetailName</b> field if the user
     * wishes to retrieve the three-digit currency codes for each country where the
     * Trading API is supported. These three-digit currency codes are used when a
     * seller is expressing a dollar value in Trading API calls. For example, the
     * <b>currencyID</b> attribute value in the <b>StartPrice</b> field of an
     * <b>AddItem</b> call.
     *  <br/><br/>
     *  The same <b>CurrencyDetails</b> metadata will be returned regardless of the
     * value that is passed into the <b>X-EBAY-API-SITEID</b> request header.
     */
    public const VAL_CURRENCY_DETAILS = 'CurrencyDetails';

    /**
     * Constant for 'PaymentOptionDetails' value.
     *
     * This enumeration value can be included in a <b>DetailName</b> field if the user
     * wishes to retrieve all payment methods that are accepted on the specified eBay
     * site. Note that the accepted payment methods within an eBay site can vary by
     * category and/or by listing format, so a user may also want to make a
     * <b>GetCategoryFeatures</b> call to retrieve category-level payment method
     * metadata. To retrieve the accepted payment methods for a specific category on a
     * specific site with <b>GetCategoryFeatures</b>, the user specifies the listing
     * category ID through the <b>CategoryID</b>, and sets the <b>FeatureID</b> value
     * to <code>PaymentMethods</code>.
     */
    public const VAL_PAYMENT_OPTION_DETAILS = 'PaymentOptionDetails';

    /**
     * Constant for 'RegionDetails' value.
     *
     * This enumeration value can be included in a <b>DetailName</b> field if the user
     * wishes to retrieve the local regions within the specified country.
     */
    public const VAL_REGION_DETAILS = 'RegionDetails';

    /**
     * Constant for 'ShippingLocationDetails' value.
     *
     * This enumeration value can be included in a <b>DetailName</b> field if the user
     * wishes to retrieve the geographical regions and country codes that can be used
     * when creating a 'ship-to' location list.
     */
    public const VAL_SHIPPING_LOCATION_DETAILS = 'ShippingLocationDetails';

    /**
     * Constant for 'ShippingServiceDetails' value.
     *
     * This enumeration value can be included in a <b>DetailName</b> field if the user
     * wishes to retrieve the domestic and international shipping service options
     * available on the specified eBay site. The returned metadata on each available
     * shipping service will include the full name of the shipping service option
     * (including carrier name), the actual shipping service enumeration value that
     * will be used in an <b>AddItem</b> call, the expected shipping time range, the
     * package types that can be used for that shipping service, and whether the
     * shipping service is for domestic or international shipping. In addition to this
     * information, the seller will have to look for a value of <code>true</code> in
     * the <b>ValidForSellingFlow</b> field. If the value in this field is
     * <code>false</code>, it indicates that the shipping service is no longer
     * available for shipping.
     */
    public const VAL_SHIPPING_SERVICE_DETAILS = 'ShippingServiceDetails';

    /**
     * Constant for 'SiteDetails' value.
     *
     * This enumeration value can be included in a <b>DetailName</b> field if the user
     * wishes to retrieve the eBay sites that are supported in Trading API calls. The
     * <b>SiteID</b> values that are returned for each country are specified as an HTTP
     * header if the seller wants to see site metadata returned for that particular
     * site.
     *  <br/><br/>
     *  The same <b>SiteDetails</b> metadata will be returned regardless of the value
     * that is passed into the <b>X-EBAY-API-SITEID</b> request header.
     */
    public const VAL_SITE_DETAILS = 'SiteDetails';

    /**
     * Constant for 'TaxJurisdiction' value.
     *
     * This enumeration value can be included in a <b>DetailName</b> field if the user
     * wishes to retrieve the different tax jurisdictions (such as states or provinces)
     * within the specified eBay site. The two-digit <b>JurisdictionID</b> codes that
     * are returned are used when a seller is setting/configuring sales tax rates in a
     * Sales Tax Table, or when creating a listing. For example, the
     * <b>SalesTax.SalesTaxState</b> field of an <b>AddItem</b> call.
     *  <br/><br/>
     *  Sales tax jurisdictions are only applicable to the US and Canada, so the
     * <b>TaxJurisdiction</b> metadata will only be returned for these sites:
     *  <ul>
     *  <li><b>eBay US<b>: <b>SiteID</b> <code>0</code></li>
     *  <li><b>eBay Motors (US)<b>: <b>SiteID</b> <code>100</code></li>
     *  <li><b>eBay Canada (English language)<b>: <b>SiteID</b> <code>2</code></li>
     *  <li><b>eBay Canada (French language)<b>: <b>SiteID</b> <code>210</code></li>
     *  </ul>
     */
    public const VAL_TAX_JURISDICTION = 'TaxJurisdiction';

    /**
     * Constant for 'URLDetails' value.
     *
     * This enumeration value can be included in a <b>DetailName</b> field if the user
     * wishes to retrieve the different eBay URLs associated with the specified eBay
     * site.
     */
    public const VAL_URLDETAILS = 'URLDetails';

    /**
     * Constant for 'TimeZoneDetails' value.
     *
     * This enumeration value can be included in a <b>DetailName</b> field if the user
     * wishes to retrieve the names of the different global time zones. The returned
     * information includes the number of hours that each time zone is either ahead or
     * behind UTC time, and it also indicates if the time zone participates in
     * 'Daylight Savings'.
     *  <br/><br/>
     *  The same <b>TimeZoneDetails</b> metadata will be returned regardless of the
     * value that is passed into the <b>X-EBAY-API-SITEID</b> request header, although
     * the metadata text will be localized for that site's language.
     */
    public const VAL_TIME_ZONE_DETAILS = 'TimeZoneDetails';

    /**
     * Constant for 'RegionOfOriginDetails' value.
     *
     * This enumeration value can be included in a <b>DetailName</b> field if the user
     * wishes to retrieve the international regions and individual countries.
     *  <br/><br/>
     *  The same <b>RegionOfOriginDetails</b> metadata will be returned regardless of
     * the value that is passed into the <b>X-EBAY-API-SITEID</b> request header.
     */
    public const VAL_REGION_OF_ORIGIN_DETAILS = 'RegionOfOriginDetails';

    /**
     * Constant for 'DispatchTimeMaxDetails' value.
     *
     * This enumeration value can be included in a <b>DetailName</b> field if the user
     * wishes to retrieve the handling time values (in number of business days) that
     * the seller can set on a listing. The seller must ship an order line item within
     * this time or risk getting a seller defect. For the US, the supported handling
     * times are 0-3 days. Some listing categories support 'extended handling' time,
     * and if this is the case, the handling times will be longer, and the
     * <b>ExtendedHandling</b> field will be returned as <code>true</code>.
     */
    public const VAL_DISPATCH_TIME_MAX_DETAILS = 'DispatchTimeMaxDetails';

    /**
     * Constant for 'ItemSpecificDetails' value.
     *
     * This enumeration value can be included in a <b>DetailName</b> field if the user
     * wishes to retrieve the maximum thresholds for Item Specifics in listings. These
     * thresholds include the maximum number of item specifics that can be used for an
     * item (or item variation), as well as the maximum number of characters that can
     * be used for Item Specific names and values.
     */
    public const VAL_ITEM_SPECIFIC_DETAILS = 'ItemSpecificDetails';

    /**
     * Constant for 'UnitOfMeasurementDetails' value.
     *
     * This enumeration value is no longer applicable, and should not be used.
     */
    public const VAL_UNIT_OF_MEASUREMENT_DETAILS = 'UnitOfMeasurementDetails';

    /**
     * Constant for 'ShippingPackageDetails' value.
     *
     * This enumeration value can be included in a <b>DetailName</b> field if the user
     * wishes to retrieve the shipping package types that are supported by the
     * specified eBay site. A seller can also just use the
     * <b>ShippingServiceDetails</b> filter, and the supported shipping package types
     * for each shipping service option will be returned.
     */
    public const VAL_SHIPPING_PACKAGE_DETAILS = 'ShippingPackageDetails';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for future use.
     */
    public const VAL_CUSTOM_CODE = 'CustomCode';

    /**
     * Constant for 'ShippingCarrierDetails' value.
     *
     * This enumeration value can be included in a <b>DetailName</b> field if the user
     * wishes to retrieve the shipping carriers supported by the specified eBay site
     * for domestic and international shipping.
     */
    public const VAL_SHIPPING_CARRIER_DETAILS = 'ShippingCarrierDetails';

    /**
     * Constant for 'ListingStartPriceDetails' value.
     *
     * This enumeration value can be included in a <b>DetailName</b> field if the user
     * wishes to retrieve the minimum starting prices for each applicable listing
     * format for the specified eBay site. The price input into the <b>StartPrice</b>
     * field of an <b>AddItem</b> call must be at or above this minimum threshold value
     * or the listing will be blocked.
     */
    public const VAL_LISTING_START_PRICE_DETAILS = 'ListingStartPriceDetails';

    /**
     * Constant for 'ReturnPolicyDetails' value.
     *
     * This enumeration value can be included in a <b>DetailName</b> field if the user
     * wishes to retrieve the return policy values that can be passed in through the
     * <b>ReturnPolicy</b> container of an Add/Revise/Relist API call (or in a Return
     * business policy). These values include the return period, the 'Money back'
     * options that the seller can make available to the buyers, and who pays for
     * return shipping (Buyer or Seller).
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> As of September 2018, the
     * <b>GetCategoryFeatures</b> call started returning category-level metadata for
     * both domestic and international return policies. Due to this update, developers
     * may want to consider using that call for return policy metadata instead, as the
     * <b>GeteBayDetails</b> call only retrieves site-level metadata, and does not
     * distinguish between domestic and international metadata.</span>
     */
    public const VAL_RETURN_POLICY_DETAILS = 'ReturnPolicyDetails';

    /**
     * Constant for 'BuyerRequirementDetails' value.
     *
     * This enumeration value can be included in a <b>DetailName</b> field if the user
     * wishes to retrieve the Buyer Requirement values that can be passed in through
     * the <b>BuyerRequirementDetails</b> container of an Add/Revise/Relist API call.
     */
    public const VAL_BUYER_REQUIREMENT_DETAILS = 'BuyerRequirementDetails';

    /**
     * Constant for 'ListingFeatureDetails' value.
     *
     * This enumeration value can be included in a <b>DetailName</b> field if the user
     * wishes to retrieve the listing features/upgrades that are enabled or disabled
     * for the specified site.
     */
    public const VAL_LISTING_FEATURE_DETAILS = 'ListingFeatureDetails';

    /**
     * Constant for 'VariationDetails' value.
     *
     * This enumeration value can be included in a <b>DetailName</b> field if the user
     * wishes to retrieve the maximum thresholds when using multiple-variation
     * listings.
     */
    public const VAL_VARIATION_DETAILS = 'VariationDetails';

    /**
     * Constant for 'ExcludeShippingLocationDetails' value.
     *
     * This enumeration value can be included in a <b>DetailName</b> field if the user
     * wishes to retrieve the geographical regions and individual countries that can be
     * passed in to the <b>ShippingDetails.ExcludeShipToLocation</b> field in an
     * Add/Revise/Relist API call. Multiple
     * <b>ShippingDetails.ExcludeShipToLocation</b> can be used, and any region or
     * country value that is passed in to one of these fields will exclude that region
     * or country as a "ship-to" location.
     */
    public const VAL_EXCLUDE_SHIPPING_LOCATION_DETAILS = 'ExcludeShippingLocationDetails';

    /**
     * Constant for 'RecoupmentPolicyDetails' value.
     *
     * This enumeration value can be included in a <b>DetailName</b> field if the user
     * wishes to retrieve details on a site's recoupment policy.
     */
    public const VAL_RECOUPMENT_POLICY_DETAILS = 'RecoupmentPolicyDetails';

    /**
     * Constant for 'ShippingCategoryDetails' value.
     *
     * This enumeration value can be included in a <b>DetailName</b> field if the user
     * wishes to retrieve the shipping service categories (Standard, Expedited,
     * Economy, etc.) supported for the site.
     */
    public const VAL_SHIPPING_CATEGORY_DETAILS = 'ShippingCategoryDetails';

    /**
     * Constant for 'ProductDetails' value.
     *
     * This enumeration value can be included in a <b>DetailName</b> field if the user
     * wishes to retrieve the appropriate text to insert into a product identifier
     * field (EAN, ISBN, UPC, MPN/Brand) if eBay is prompting/expecting one of these
     * fields in the call request, but the identifiers do not exist/apply for the
     * product. The <b>ProductDetails.ProductIdentifierUnavailableText</b> field that
     * is returned in the response will contain the actual text that should be passed
     * into the relevant product identification fields when creating a listing.
     */
    public const VAL_PRODUCT_DETAILS = 'ProductDetails';

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
