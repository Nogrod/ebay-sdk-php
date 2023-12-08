<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ShippingPolicyInfoType
 *
 * Type defining the <b>shippingPolicyInfo</b> container, which consists of detailed information for a seller's shipping policy.
 * XSD Type: ShippingPolicyInfo
 */
class ShippingPolicyInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This string value indicates the name of the shipping policy. This business policy name must be unique among all of seller's shipping policies. A <b>shippingPolicyName</b> value is required when using the <b>addSellerProfile</b> and <b>setSellerProfile</b> calls to create or update a shipping policy.
     *  <br><br>
     *  This field is always returned with all shipping policies returned in the
     *  <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or
     *  <b>setSellerProfile</b> calls.
     *
     * @var string $shippingPolicyName
     */
    private $shippingPolicyName = null;

    /**
     * The domestic shipping cost model used by the seller. The only three valid values are 'Calculated', 'Flat', or 'FreightFlat'. If this field is not included and specified in an <b>addSellerProfile</b> or <b>setSellerProfile</b> call, it defaults to 'Flat' shipping.
     *  <br><br>
     *  If 'FreightFlat' is specified as the domestic shipping type, the <b>freightShipping</b> container and its values must be set in the shipping policy. If 'Calculated' is used as the shipping type, the <b>CalculatedShippingRate</b> container must be used when listing, revising, or relisting an item through the Trading API.
     *  <br><br>
     *  This field is always returned with all shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @var string $domesticShippingType
     */
    private $domesticShippingType = null;

    /**
     * The international shipping cost model used by the seller. Valid values are 'Calculated', 'Flat', or 'FreightFlat'. If this field is not included and specified in an <b>addSellerProfile</b> or <b>setSellerProfile</b> call, it defaults to 'Flat' shipping.
     *  <br><br>
     *  If 'FreightFlat' is specified as the international shipping type, the <b>freightShipping</b> container and its values must be set in the shipping policy. If 'Calculated' is used as the shipping type, the <b>CalculatedShippingRate</b> container must be used when listing, revising, or relisting an item through the Trading API.
     *  <br><br>
     *  This field is always returned with all shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @var string $intlShippingType
     */
    private $intlShippingType = null;

    /**
     * Specifies the maximum number of business days the seller commits to for preparing an item to be shipped after receiving a cleared payment for an order. This time does not include the shipping time (the carrier's transit time). Valid values can vary by site and by category. To obtain supported values for a site, call <b>GeteBayDetails</b>, using <b>DispatchTimeMaxDetails</b> as a <b>DetailName</b> value in the request, and then look at the <b>DispatchTimeMaxDetails</b> container in the response for supported values for the site.
     *  <br><br>
     *  Note that Top-Rated sellers must offer same-day or one-day handling for a listing in order for that listing to receive a Top Rated Plus seal on the View Item or Search Results. To offer zero-day or one-day handling, the seller should include the <b>dispatchTimeMax</b> field in the shipping business policy and set the value of this field to '0' or '1', respectively.
     *  <br><br>
     *  The <b>dispatchTimeMax</b> field must be included in the shipping policy and set to '0' or '1' if the <b>fastShipping</b> flag is included and set to 'true' in the shipping policy.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> Traditionally in the Trading API, sellers using an Add/Revise/Relist API call were allowed to pass in a <b>DispatchTimeMax</b> value of '0' to indicate that no handling time is specified for the listing. However, with the onboarding of same-day shipping, a <b>DispatchTimeMax</b> value of '0' will indicate that the seller is offering same-day shipping. Now, sellers that do not want to specify a handling time for their shipping policy, should omit the < b>dispatchTimeMax</b> field, or they can include it but set it to null.
     *  </span>
     *  <br>
     *  This field is always returned with all shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *  <br>
     *
     * @var int $dispatchTimeMax
     */
    private $dispatchTimeMax = null;

    /**
     * This free-form string field is used by the seller to provide more details to the buyer about handling time.
     *  <br><br>
     *  If set for the shipping policy, this field is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @var string $dispatchTimeReason
     */
    private $dispatchTimeReason = null;

    /**
     * This optional field helps summarize the locations/regions that the seller will ship an item to. The integer value that is used in this field for an <b>addSellerProfile</b> or <b>setSellerProfile</b> call should be in synch with the values that are specified in the <b>shipToLocation</b> and <b>excludeShipToLocation</b> fields used in the same call.
     *  <br><br>
     *  The possible values are listed below:
     *  <ul>
     *  <li>0 ('SiteOnly'): this value indicates that the seller only ships to domestic locations (relative to the listing site). </li>
     *  <li>1 ('SitePlusRegions'): this value indicates that the seller ships to domestic locations plus any international regions or countries specified as ship-to locations through the <b>shipToLocation</b> field. </li>
     *  <li>2 ('WorldWide'): this value indicates that the seller will ship to anywhere in the world except for any international regions or countries excluded with an <b>excludeShipToLocation</b> field.</li>
     *  <li>3 ('WillNotShip'): this value indicates that the seller does not offer shipping. This value is only applicable if 'Local Pickup' is being used, which might be the case if the item is a motor vehicle.</li>
     *  <li>4 ('TermsAndConditionsOnly'): this value is for future use.</li>
     *
     *  </ul>
     *  If set for the shipping policy, this field is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @var string $shippingOption
     */
    private $shippingOption = null;

    /**
     * Sellers can use this field to exclude one or more international regions, countries, or special domestic locations (such as 'PO Box' in US or 'Packstation' in Germany) as possible shipping locations. To obtain valid 'exclude Ship-To locations', the seller must call <b>GeteBayDetails</b>, using <b>ExcludeShipppingLocationDetails</b> as a <b>DetailName</b> value in the request, and then scan the <b>ExcludeShippingLocationDetails.Location</b> values that are returned in the response. The seller may include as many valid <b>excludeShipToLocation</b> values as necessary based on where they are not willing to ship an item.
     *  <br><br>
     *  If a buyer's primary ship-to location is a location that the seller has listed as an excluded ship-to location, that buyer will receive an error message if they attempt to buy or place a bid on your item.
     *  <br><br>
     *  This field works in conjunction with the <b>shipToLocation</b> values to create a set of international regions, countries, and domestic locations to where the seller will (and will not) ship. You can list a region in the <b>shipToLocation</b> field, then exclude specific countries within that region with this field. For example, you can specify 'Africa' as a <b>shipToLocation</b> value, yet exclude Egypt by including an <b>excludeShipToLocation</b> field with its value set to 'EG', which is Egypt's two-digit country code. In addition, if a seller used only one <b>shipToLocation</b> value and set it to 'Worldwide', that seller can use one or more <b>excludeShipToLocation</b> fields to exclude one or more international regions, countries, or special domestic locations as possible shipping destinations.
     *  <br><br>
     *  Each excluded ship-to location is returned with shipping policies returned in the
     *  <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or
     *  <b>setSellerProfile</b> calls.
     *
     * @var string[] $excludeShipToLocation
     */
    private $excludeShipToLocation = [

    ];

    /**
     * Container consisting of flat-rate or calculated shipping discount profile IDs (that identify the shipping discount rules to apply when domestic and/or international buyers purchase multiple items), as well as flags indicating if promotional shipping discounts are offered to domestic and/or international buyers.
     *  <br><br>
     *  Shipping discounts can be created by the seller through My eBay, or by using the <b>SetShippingDiscountProfiles</b> call of the Trading API.
     *  <br><br>
     *  If shipping discounts are used for a shipping policy, this container is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingProfileDiscountInfoType $shippingProfileDiscountInfo
     */
    private $shippingProfileDiscountInfo = null;

    /**
     * This container consists of details related to freight shipping. This container and its values are required to be set in a shipping policy if the seller offers freight shipping (<b>domesticShippingType</b> and/or <b>intlShippingType</b> is set to 'FreightFlat').
     *  <br><br>
     *  If freight shipping is specified for a shipping policy, this container is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\FreightShippingType $freightShipping
     */
    private $freightShipping = null;

    /**
     * An international region (such as Asia, Europe, or Latin America) or country (represented by two-letter country code) to where the seller will ship an item. <br><br>
     *  It is not necessary to include the <b>shipToLocation</b> field in the <b>domesticShippingPolicyInfoService</b> container when using the <b>addSellerProfile</b> and <b>setSellerProfile</b> calls. However, eBay automatically adds the seller's listing county as a 'Ship-To Location', and the <b>shipToLocation</b> field is always returned for each shipping policy in the <b>addSellerProfile</b>, <b>setSellerProfile</b>, and <b>getSellerProfiles</b> calls. <br><br>
     *  If the seller does want to offer international shipping as part of the shipping policy, at least one <b>shipToLocation</b> field in the <b>internationalShippingPolicyInfoService</b> container is required when using the <b>addSellerProfile</b> and <b>setSellerProfile</b> calls. To offer shipping to every region and country (supported by eBay shipping services), the seller can pass in 'Worldwide' as a <b>shipToLocation</b> value. If the seller wants to offer shipping to one or more specific shipping regions, the seller must include that shipping region in a <b>shipToLocation</b> field. If the seller wants to ship to a specific region, but would like to exclude one or more countries in that region, the seller should use one or more instances of the <b>shippingPolicyInfo.excludeShipToLocation</b> field.
     *  <br><br>
     *  Applicable shipping region values are defined in <b>ShippingRegionCodeType</b> and applicable country codes are defined in <b>CountryCodeType</b>. However, it is best practice for sellers to call <b>GeteBayDetails</b>, using <b>ShipppingLocationDetails</b> as a <b>DetailName</b> value in the request, and then scanning the <b>ShippingLocationDetails.ShippingLocation</b> values that are returned in the response.
     *  <br><br>
     *  Each specified ship-to location is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @var string[] $shipToLocations
     */
    private $shipToLocations = [

    ];

    /**
     * Container that consists of detailed information for a domestic shipping service, including shipping costs, ship-to locations, and flags to indicate Fast and/or Free shipping. Up to four domestic shipping service options can be specified in one shipping business policy.
     *  <br><br>
     *  Each specified domestic shipping service is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyInfoServiceType[] $domesticShippingPolicyInfoService
     */
    private $domesticShippingPolicyInfoService = [

    ];

    /**
     * Container that consists of detailed information for an international shipping service, including shipping costs and ship-to locations. Up to five international shipping service options can be specified in one shipping policy.
     *  <br><br>
     *  Each specified international shipping service is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyInfoServiceType[] $intlShippingPolicyInfoService
     */
    private $intlShippingPolicyInfoService = [

    ];

    /**
     * This container consists of the type and cost of domestic and international shipping insurance. The <b>insurance</b> container is required in the shipping policy if the seller offers shipping insurance to domestic and/or international buyers. Only sellers listing on the AU, FR, and IT sites can offer shipping insurance directly to the buyer.
     *  <br><br>
     *  If shipping insurance options are specified for a shipping policy, this container is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\InsuranceType $insurance
     */
    private $insurance = null;

    /**
     * <span class="tablenote"><b>Note:</b>
     *  International shipping rate tables are only available to sellers listing on the Germany and UK eBay sites.
     *  </span>
     *  <br>
     *  This value indicates that the seller's international shipping rate table should be referenced to determine flat-rate shipping costs based on shipping service level and delivery location. Currently, the only valid value for <b>intlRateTable</b> is 'Default', which means that the default international shipping rate table set up by the seller in My eBay is referenced.
     *  <br><br>
     *  Including this field in an <b>addSellerProfile</b> or <b>setSellerProfile</b> call will only have an effect on flat shipping rates if an international shipping rate table is set up for the seller's account in My eBay, and it will only affect those international regions and countries for which flat shipping rates are defined.
     *  <br><br>
     *  If set for the shipping policy (Germany and UK only), this field is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @var string $intlRateTable
     */
    private $intlRateTable = null;

    /**
     * This value indicates that the seller's domestic shipping rate table should be referenced to determine flat-rate shipping costs based on shipping service level and delivery location. Currently, the only valid value for <b>domesticRateTable</b> is 'Default', which means that the default domestic shipping rate table set up by the seller in My eBay is referenced.
     *  <br><br>
     *  Including this field in an <b>addSellerProfile</b> or <b>setSellerProfile</b> call will only have an effect on flat shipping rates if a domestic shipping rate table is set up for the seller's account in My eBay, and it will only affect those domestic regions for which flat shipping rates are defined.
     *  <br><br>
     *  If set for the shipping policy, this field is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @var string $domesticRateTable
     */
    private $domesticRateTable = null;

    /**
     * This field allows the seller to add package handling costs for shipping an item to a domestic location.
     *  <br><br>
     *  If set for the shipping policy, this field is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $packagingHandlingCosts
     */
    private $packagingHandlingCosts = null;

    /**
     * This field allows the seller to add package handling costs for shipping an item to an international location.
     *  <br><br>
     *  If set for the shipping policy, this field is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $internationalPackagingHandlingCosts
     */
    private $internationalPackagingHandlingCosts = null;

    /**
     * Three-digit code that indicates the currency used by the listing site. To obtain valid currency codes, the seller can call <b>GeteBayDetails</b>, using <b>CurrencyDetails</b> as a <b>DetailName</b> value in the request, and then scanning the <b>CurrencyDetails.Currency</b> values that are returned in the response.
     *  <br><br>
     *  If this field is not included in an <b>addSellerProfile</b> or <b>setSellerProfile</b> call, the currency code will default to the standard currency used by the listing site.
     *  <br><br>
     *  This field is always returned with all shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @var string $shippingPolicyCurrency
     */
    private $shippingPolicyCurrency = null;

    /**
     * This container is for future use.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyIdentityType $shippingPolicyIdentity
     */
    private $shippingPolicyIdentity = null;

    /**
     * This flag should be included and set to 'true' if the seller wants to enable the Global Shipping Program feature in the shipping policy. If the value of <b>globalShipping</b> is 'true', the Global Shipping Program is the default international shipping option for the listing, and eBay sets the international shipping service to International Priority Shipping. If the value of <b>GlobalShipping</b> is 'false', the seller is responsible for specifying one or more international shipping services for the listing (if the seller wishes to ship internationally).
     *  <br><br>
     *  To make use of this field and the Global Shipping Program, the seller and the item being listed must be eligible for the Global Shipping Program.
     *
     * @var bool $globalShipping
     */
    private $globalShipping = null;

    /**
     * This field is used in Add/Revise/Relist calls to enable the listing for the "Click and Collect" feature. To enable the listing for the "Click and Collect" feature, the seller includes this boolean field and sets its value to 'true'. A seller must be eligible for the "Click and Collect" feature to list an item that is eligible for "Click and Collect". At this time, the "Click and Collect" feature is only available to large retail merchants on the eBay UK site (site ID 3).
     *  <br><br>
     *  In addition to setting the <b>EligibleForPickupDropOff</b> boolean field to 'true', the merchant must also perform the following actions in an Add/Revise/Relist call to enable the "Click and Collect" option on a listing:
     *  <ul>
     *  <li>Have inventory for the product at one or more physical stores tied to the merchant's account</li>
     *  <li>Set an immediate payment requirement on the item. The immediate payment feature requires the seller to include the <b>paymentInfo.immediatePay</b> flag in the payment business policy and set its value to 'true'</li>
     *  </ul>
     *  </li>
     *  </ul>
     *  When a UK merchant is successful at listing an item with the "Click and Collect" feature enabled, prospective buyers within a reasonable distance from one of the merchant's stores (that has stock available) will see the "Available for Click and Collect" option on the listing, along with information on the closest store that has the item.
     *
     * @var bool $eligibleForPickupDropOff
     */
    private $eligibleForPickupDropOff = null;

    /**
     * Gets as shippingPolicyName
     *
     * This string value indicates the name of the shipping policy. This business policy name must be unique among all of seller's shipping policies. A <b>shippingPolicyName</b> value is required when using the <b>addSellerProfile</b> and <b>setSellerProfile</b> calls to create or update a shipping policy.
     *  <br><br>
     *  This field is always returned with all shipping policies returned in the
     *  <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or
     *  <b>setSellerProfile</b> calls.
     *
     * @return string
     */
    public function getShippingPolicyName()
    {
        return $this->shippingPolicyName;
    }

    /**
     * Sets a new shippingPolicyName
     *
     * This string value indicates the name of the shipping policy. This business policy name must be unique among all of seller's shipping policies. A <b>shippingPolicyName</b> value is required when using the <b>addSellerProfile</b> and <b>setSellerProfile</b> calls to create or update a shipping policy.
     *  <br><br>
     *  This field is always returned with all shipping policies returned in the
     *  <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or
     *  <b>setSellerProfile</b> calls.
     *
     * @param string $shippingPolicyName
     * @return self
     */
    public function setShippingPolicyName($shippingPolicyName)
    {
        $this->shippingPolicyName = $shippingPolicyName;
        return $this;
    }

    /**
     * Gets as domesticShippingType
     *
     * The domestic shipping cost model used by the seller. The only three valid values are 'Calculated', 'Flat', or 'FreightFlat'. If this field is not included and specified in an <b>addSellerProfile</b> or <b>setSellerProfile</b> call, it defaults to 'Flat' shipping.
     *  <br><br>
     *  If 'FreightFlat' is specified as the domestic shipping type, the <b>freightShipping</b> container and its values must be set in the shipping policy. If 'Calculated' is used as the shipping type, the <b>CalculatedShippingRate</b> container must be used when listing, revising, or relisting an item through the Trading API.
     *  <br><br>
     *  This field is always returned with all shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @return string
     */
    public function getDomesticShippingType()
    {
        return $this->domesticShippingType;
    }

    /**
     * Sets a new domesticShippingType
     *
     * The domestic shipping cost model used by the seller. The only three valid values are 'Calculated', 'Flat', or 'FreightFlat'. If this field is not included and specified in an <b>addSellerProfile</b> or <b>setSellerProfile</b> call, it defaults to 'Flat' shipping.
     *  <br><br>
     *  If 'FreightFlat' is specified as the domestic shipping type, the <b>freightShipping</b> container and its values must be set in the shipping policy. If 'Calculated' is used as the shipping type, the <b>CalculatedShippingRate</b> container must be used when listing, revising, or relisting an item through the Trading API.
     *  <br><br>
     *  This field is always returned with all shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @param string $domesticShippingType
     * @return self
     */
    public function setDomesticShippingType($domesticShippingType)
    {
        $this->domesticShippingType = $domesticShippingType;
        return $this;
    }

    /**
     * Gets as intlShippingType
     *
     * The international shipping cost model used by the seller. Valid values are 'Calculated', 'Flat', or 'FreightFlat'. If this field is not included and specified in an <b>addSellerProfile</b> or <b>setSellerProfile</b> call, it defaults to 'Flat' shipping.
     *  <br><br>
     *  If 'FreightFlat' is specified as the international shipping type, the <b>freightShipping</b> container and its values must be set in the shipping policy. If 'Calculated' is used as the shipping type, the <b>CalculatedShippingRate</b> container must be used when listing, revising, or relisting an item through the Trading API.
     *  <br><br>
     *  This field is always returned with all shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @return string
     */
    public function getIntlShippingType()
    {
        return $this->intlShippingType;
    }

    /**
     * Sets a new intlShippingType
     *
     * The international shipping cost model used by the seller. Valid values are 'Calculated', 'Flat', or 'FreightFlat'. If this field is not included and specified in an <b>addSellerProfile</b> or <b>setSellerProfile</b> call, it defaults to 'Flat' shipping.
     *  <br><br>
     *  If 'FreightFlat' is specified as the international shipping type, the <b>freightShipping</b> container and its values must be set in the shipping policy. If 'Calculated' is used as the shipping type, the <b>CalculatedShippingRate</b> container must be used when listing, revising, or relisting an item through the Trading API.
     *  <br><br>
     *  This field is always returned with all shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @param string $intlShippingType
     * @return self
     */
    public function setIntlShippingType($intlShippingType)
    {
        $this->intlShippingType = $intlShippingType;
        return $this;
    }

    /**
     * Gets as dispatchTimeMax
     *
     * Specifies the maximum number of business days the seller commits to for preparing an item to be shipped after receiving a cleared payment for an order. This time does not include the shipping time (the carrier's transit time). Valid values can vary by site and by category. To obtain supported values for a site, call <b>GeteBayDetails</b>, using <b>DispatchTimeMaxDetails</b> as a <b>DetailName</b> value in the request, and then look at the <b>DispatchTimeMaxDetails</b> container in the response for supported values for the site.
     *  <br><br>
     *  Note that Top-Rated sellers must offer same-day or one-day handling for a listing in order for that listing to receive a Top Rated Plus seal on the View Item or Search Results. To offer zero-day or one-day handling, the seller should include the <b>dispatchTimeMax</b> field in the shipping business policy and set the value of this field to '0' or '1', respectively.
     *  <br><br>
     *  The <b>dispatchTimeMax</b> field must be included in the shipping policy and set to '0' or '1' if the <b>fastShipping</b> flag is included and set to 'true' in the shipping policy.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> Traditionally in the Trading API, sellers using an Add/Revise/Relist API call were allowed to pass in a <b>DispatchTimeMax</b> value of '0' to indicate that no handling time is specified for the listing. However, with the onboarding of same-day shipping, a <b>DispatchTimeMax</b> value of '0' will indicate that the seller is offering same-day shipping. Now, sellers that do not want to specify a handling time for their shipping policy, should omit the < b>dispatchTimeMax</b> field, or they can include it but set it to null.
     *  </span>
     *  <br>
     *  This field is always returned with all shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *  <br>
     *
     * @return int
     */
    public function getDispatchTimeMax()
    {
        return $this->dispatchTimeMax;
    }

    /**
     * Sets a new dispatchTimeMax
     *
     * Specifies the maximum number of business days the seller commits to for preparing an item to be shipped after receiving a cleared payment for an order. This time does not include the shipping time (the carrier's transit time). Valid values can vary by site and by category. To obtain supported values for a site, call <b>GeteBayDetails</b>, using <b>DispatchTimeMaxDetails</b> as a <b>DetailName</b> value in the request, and then look at the <b>DispatchTimeMaxDetails</b> container in the response for supported values for the site.
     *  <br><br>
     *  Note that Top-Rated sellers must offer same-day or one-day handling for a listing in order for that listing to receive a Top Rated Plus seal on the View Item or Search Results. To offer zero-day or one-day handling, the seller should include the <b>dispatchTimeMax</b> field in the shipping business policy and set the value of this field to '0' or '1', respectively.
     *  <br><br>
     *  The <b>dispatchTimeMax</b> field must be included in the shipping policy and set to '0' or '1' if the <b>fastShipping</b> flag is included and set to 'true' in the shipping policy.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> Traditionally in the Trading API, sellers using an Add/Revise/Relist API call were allowed to pass in a <b>DispatchTimeMax</b> value of '0' to indicate that no handling time is specified for the listing. However, with the onboarding of same-day shipping, a <b>DispatchTimeMax</b> value of '0' will indicate that the seller is offering same-day shipping. Now, sellers that do not want to specify a handling time for their shipping policy, should omit the < b>dispatchTimeMax</b> field, or they can include it but set it to null.
     *  </span>
     *  <br>
     *  This field is always returned with all shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *  <br>
     *
     * @param int $dispatchTimeMax
     * @return self
     */
    public function setDispatchTimeMax($dispatchTimeMax)
    {
        $this->dispatchTimeMax = $dispatchTimeMax;
        return $this;
    }

    /**
     * Gets as dispatchTimeReason
     *
     * This free-form string field is used by the seller to provide more details to the buyer about handling time.
     *  <br><br>
     *  If set for the shipping policy, this field is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @return string
     */
    public function getDispatchTimeReason()
    {
        return $this->dispatchTimeReason;
    }

    /**
     * Sets a new dispatchTimeReason
     *
     * This free-form string field is used by the seller to provide more details to the buyer about handling time.
     *  <br><br>
     *  If set for the shipping policy, this field is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @param string $dispatchTimeReason
     * @return self
     */
    public function setDispatchTimeReason($dispatchTimeReason)
    {
        $this->dispatchTimeReason = $dispatchTimeReason;
        return $this;
    }

    /**
     * Gets as shippingOption
     *
     * This optional field helps summarize the locations/regions that the seller will ship an item to. The integer value that is used in this field for an <b>addSellerProfile</b> or <b>setSellerProfile</b> call should be in synch with the values that are specified in the <b>shipToLocation</b> and <b>excludeShipToLocation</b> fields used in the same call.
     *  <br><br>
     *  The possible values are listed below:
     *  <ul>
     *  <li>0 ('SiteOnly'): this value indicates that the seller only ships to domestic locations (relative to the listing site). </li>
     *  <li>1 ('SitePlusRegions'): this value indicates that the seller ships to domestic locations plus any international regions or countries specified as ship-to locations through the <b>shipToLocation</b> field. </li>
     *  <li>2 ('WorldWide'): this value indicates that the seller will ship to anywhere in the world except for any international regions or countries excluded with an <b>excludeShipToLocation</b> field.</li>
     *  <li>3 ('WillNotShip'): this value indicates that the seller does not offer shipping. This value is only applicable if 'Local Pickup' is being used, which might be the case if the item is a motor vehicle.</li>
     *  <li>4 ('TermsAndConditionsOnly'): this value is for future use.</li>
     *
     *  </ul>
     *  If set for the shipping policy, this field is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @return string
     */
    public function getShippingOption()
    {
        return $this->shippingOption;
    }

    /**
     * Sets a new shippingOption
     *
     * This optional field helps summarize the locations/regions that the seller will ship an item to. The integer value that is used in this field for an <b>addSellerProfile</b> or <b>setSellerProfile</b> call should be in synch with the values that are specified in the <b>shipToLocation</b> and <b>excludeShipToLocation</b> fields used in the same call.
     *  <br><br>
     *  The possible values are listed below:
     *  <ul>
     *  <li>0 ('SiteOnly'): this value indicates that the seller only ships to domestic locations (relative to the listing site). </li>
     *  <li>1 ('SitePlusRegions'): this value indicates that the seller ships to domestic locations plus any international regions or countries specified as ship-to locations through the <b>shipToLocation</b> field. </li>
     *  <li>2 ('WorldWide'): this value indicates that the seller will ship to anywhere in the world except for any international regions or countries excluded with an <b>excludeShipToLocation</b> field.</li>
     *  <li>3 ('WillNotShip'): this value indicates that the seller does not offer shipping. This value is only applicable if 'Local Pickup' is being used, which might be the case if the item is a motor vehicle.</li>
     *  <li>4 ('TermsAndConditionsOnly'): this value is for future use.</li>
     *
     *  </ul>
     *  If set for the shipping policy, this field is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @param string $shippingOption
     * @return self
     */
    public function setShippingOption($shippingOption)
    {
        $this->shippingOption = $shippingOption;
        return $this;
    }

    /**
     * Adds as excludeShipToLocation
     *
     * Sellers can use this field to exclude one or more international regions, countries, or special domestic locations (such as 'PO Box' in US or 'Packstation' in Germany) as possible shipping locations. To obtain valid 'exclude Ship-To locations', the seller must call <b>GeteBayDetails</b>, using <b>ExcludeShipppingLocationDetails</b> as a <b>DetailName</b> value in the request, and then scan the <b>ExcludeShippingLocationDetails.Location</b> values that are returned in the response. The seller may include as many valid <b>excludeShipToLocation</b> values as necessary based on where they are not willing to ship an item.
     *  <br><br>
     *  If a buyer's primary ship-to location is a location that the seller has listed as an excluded ship-to location, that buyer will receive an error message if they attempt to buy or place a bid on your item.
     *  <br><br>
     *  This field works in conjunction with the <b>shipToLocation</b> values to create a set of international regions, countries, and domestic locations to where the seller will (and will not) ship. You can list a region in the <b>shipToLocation</b> field, then exclude specific countries within that region with this field. For example, you can specify 'Africa' as a <b>shipToLocation</b> value, yet exclude Egypt by including an <b>excludeShipToLocation</b> field with its value set to 'EG', which is Egypt's two-digit country code. In addition, if a seller used only one <b>shipToLocation</b> value and set it to 'Worldwide', that seller can use one or more <b>excludeShipToLocation</b> fields to exclude one or more international regions, countries, or special domestic locations as possible shipping destinations.
     *  <br><br>
     *  Each excluded ship-to location is returned with shipping policies returned in the
     *  <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or
     *  <b>setSellerProfile</b> calls.
     *
     * @return self
     * @param string $excludeShipToLocation
     */
    public function addToExcludeShipToLocation($excludeShipToLocation)
    {
        $this->excludeShipToLocation[] = $excludeShipToLocation;
        return $this;
    }

    /**
     * isset excludeShipToLocation
     *
     * Sellers can use this field to exclude one or more international regions, countries, or special domestic locations (such as 'PO Box' in US or 'Packstation' in Germany) as possible shipping locations. To obtain valid 'exclude Ship-To locations', the seller must call <b>GeteBayDetails</b>, using <b>ExcludeShipppingLocationDetails</b> as a <b>DetailName</b> value in the request, and then scan the <b>ExcludeShippingLocationDetails.Location</b> values that are returned in the response. The seller may include as many valid <b>excludeShipToLocation</b> values as necessary based on where they are not willing to ship an item.
     *  <br><br>
     *  If a buyer's primary ship-to location is a location that the seller has listed as an excluded ship-to location, that buyer will receive an error message if they attempt to buy or place a bid on your item.
     *  <br><br>
     *  This field works in conjunction with the <b>shipToLocation</b> values to create a set of international regions, countries, and domestic locations to where the seller will (and will not) ship. You can list a region in the <b>shipToLocation</b> field, then exclude specific countries within that region with this field. For example, you can specify 'Africa' as a <b>shipToLocation</b> value, yet exclude Egypt by including an <b>excludeShipToLocation</b> field with its value set to 'EG', which is Egypt's two-digit country code. In addition, if a seller used only one <b>shipToLocation</b> value and set it to 'Worldwide', that seller can use one or more <b>excludeShipToLocation</b> fields to exclude one or more international regions, countries, or special domestic locations as possible shipping destinations.
     *  <br><br>
     *  Each excluded ship-to location is returned with shipping policies returned in the
     *  <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or
     *  <b>setSellerProfile</b> calls.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExcludeShipToLocation($index)
    {
        return isset($this->excludeShipToLocation[$index]);
    }

    /**
     * unset excludeShipToLocation
     *
     * Sellers can use this field to exclude one or more international regions, countries, or special domestic locations (such as 'PO Box' in US or 'Packstation' in Germany) as possible shipping locations. To obtain valid 'exclude Ship-To locations', the seller must call <b>GeteBayDetails</b>, using <b>ExcludeShipppingLocationDetails</b> as a <b>DetailName</b> value in the request, and then scan the <b>ExcludeShippingLocationDetails.Location</b> values that are returned in the response. The seller may include as many valid <b>excludeShipToLocation</b> values as necessary based on where they are not willing to ship an item.
     *  <br><br>
     *  If a buyer's primary ship-to location is a location that the seller has listed as an excluded ship-to location, that buyer will receive an error message if they attempt to buy or place a bid on your item.
     *  <br><br>
     *  This field works in conjunction with the <b>shipToLocation</b> values to create a set of international regions, countries, and domestic locations to where the seller will (and will not) ship. You can list a region in the <b>shipToLocation</b> field, then exclude specific countries within that region with this field. For example, you can specify 'Africa' as a <b>shipToLocation</b> value, yet exclude Egypt by including an <b>excludeShipToLocation</b> field with its value set to 'EG', which is Egypt's two-digit country code. In addition, if a seller used only one <b>shipToLocation</b> value and set it to 'Worldwide', that seller can use one or more <b>excludeShipToLocation</b> fields to exclude one or more international regions, countries, or special domestic locations as possible shipping destinations.
     *  <br><br>
     *  Each excluded ship-to location is returned with shipping policies returned in the
     *  <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or
     *  <b>setSellerProfile</b> calls.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExcludeShipToLocation($index)
    {
        unset($this->excludeShipToLocation[$index]);
    }

    /**
     * Gets as excludeShipToLocation
     *
     * Sellers can use this field to exclude one or more international regions, countries, or special domestic locations (such as 'PO Box' in US or 'Packstation' in Germany) as possible shipping locations. To obtain valid 'exclude Ship-To locations', the seller must call <b>GeteBayDetails</b>, using <b>ExcludeShipppingLocationDetails</b> as a <b>DetailName</b> value in the request, and then scan the <b>ExcludeShippingLocationDetails.Location</b> values that are returned in the response. The seller may include as many valid <b>excludeShipToLocation</b> values as necessary based on where they are not willing to ship an item.
     *  <br><br>
     *  If a buyer's primary ship-to location is a location that the seller has listed as an excluded ship-to location, that buyer will receive an error message if they attempt to buy or place a bid on your item.
     *  <br><br>
     *  This field works in conjunction with the <b>shipToLocation</b> values to create a set of international regions, countries, and domestic locations to where the seller will (and will not) ship. You can list a region in the <b>shipToLocation</b> field, then exclude specific countries within that region with this field. For example, you can specify 'Africa' as a <b>shipToLocation</b> value, yet exclude Egypt by including an <b>excludeShipToLocation</b> field with its value set to 'EG', which is Egypt's two-digit country code. In addition, if a seller used only one <b>shipToLocation</b> value and set it to 'Worldwide', that seller can use one or more <b>excludeShipToLocation</b> fields to exclude one or more international regions, countries, or special domestic locations as possible shipping destinations.
     *  <br><br>
     *  Each excluded ship-to location is returned with shipping policies returned in the
     *  <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or
     *  <b>setSellerProfile</b> calls.
     *
     * @return string[]
     */
    public function getExcludeShipToLocation()
    {
        return $this->excludeShipToLocation;
    }

    /**
     * Sets a new excludeShipToLocation
     *
     * Sellers can use this field to exclude one or more international regions, countries, or special domestic locations (such as 'PO Box' in US or 'Packstation' in Germany) as possible shipping locations. To obtain valid 'exclude Ship-To locations', the seller must call <b>GeteBayDetails</b>, using <b>ExcludeShipppingLocationDetails</b> as a <b>DetailName</b> value in the request, and then scan the <b>ExcludeShippingLocationDetails.Location</b> values that are returned in the response. The seller may include as many valid <b>excludeShipToLocation</b> values as necessary based on where they are not willing to ship an item.
     *  <br><br>
     *  If a buyer's primary ship-to location is a location that the seller has listed as an excluded ship-to location, that buyer will receive an error message if they attempt to buy or place a bid on your item.
     *  <br><br>
     *  This field works in conjunction with the <b>shipToLocation</b> values to create a set of international regions, countries, and domestic locations to where the seller will (and will not) ship. You can list a region in the <b>shipToLocation</b> field, then exclude specific countries within that region with this field. For example, you can specify 'Africa' as a <b>shipToLocation</b> value, yet exclude Egypt by including an <b>excludeShipToLocation</b> field with its value set to 'EG', which is Egypt's two-digit country code. In addition, if a seller used only one <b>shipToLocation</b> value and set it to 'Worldwide', that seller can use one or more <b>excludeShipToLocation</b> fields to exclude one or more international regions, countries, or special domestic locations as possible shipping destinations.
     *  <br><br>
     *  Each excluded ship-to location is returned with shipping policies returned in the
     *  <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or
     *  <b>setSellerProfile</b> calls.
     *
     * @param string[] $excludeShipToLocation
     * @return self
     */
    public function setExcludeShipToLocation(array $excludeShipToLocation)
    {
        $this->excludeShipToLocation = $excludeShipToLocation;
        return $this;
    }

    /**
     * Gets as shippingProfileDiscountInfo
     *
     * Container consisting of flat-rate or calculated shipping discount profile IDs (that identify the shipping discount rules to apply when domestic and/or international buyers purchase multiple items), as well as flags indicating if promotional shipping discounts are offered to domestic and/or international buyers.
     *  <br><br>
     *  Shipping discounts can be created by the seller through My eBay, or by using the <b>SetShippingDiscountProfiles</b> call of the Trading API.
     *  <br><br>
     *  If shipping discounts are used for a shipping policy, this container is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingProfileDiscountInfoType
     */
    public function getShippingProfileDiscountInfo()
    {
        return $this->shippingProfileDiscountInfo;
    }

    /**
     * Sets a new shippingProfileDiscountInfo
     *
     * Container consisting of flat-rate or calculated shipping discount profile IDs (that identify the shipping discount rules to apply when domestic and/or international buyers purchase multiple items), as well as flags indicating if promotional shipping discounts are offered to domestic and/or international buyers.
     *  <br><br>
     *  Shipping discounts can be created by the seller through My eBay, or by using the <b>SetShippingDiscountProfiles</b> call of the Trading API.
     *  <br><br>
     *  If shipping discounts are used for a shipping policy, this container is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingProfileDiscountInfoType $shippingProfileDiscountInfo
     * @return self
     */
    public function setShippingProfileDiscountInfo(\Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingProfileDiscountInfoType $shippingProfileDiscountInfo)
    {
        $this->shippingProfileDiscountInfo = $shippingProfileDiscountInfo;
        return $this;
    }

    /**
     * Gets as freightShipping
     *
     * This container consists of details related to freight shipping. This container and its values are required to be set in a shipping policy if the seller offers freight shipping (<b>domesticShippingType</b> and/or <b>intlShippingType</b> is set to 'FreightFlat').
     *  <br><br>
     *  If freight shipping is specified for a shipping policy, this container is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\FreightShippingType
     */
    public function getFreightShipping()
    {
        return $this->freightShipping;
    }

    /**
     * Sets a new freightShipping
     *
     * This container consists of details related to freight shipping. This container and its values are required to be set in a shipping policy if the seller offers freight shipping (<b>domesticShippingType</b> and/or <b>intlShippingType</b> is set to 'FreightFlat').
     *  <br><br>
     *  If freight shipping is specified for a shipping policy, this container is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\FreightShippingType $freightShipping
     * @return self
     */
    public function setFreightShipping(\Nogrod\eBaySDK\BusinessPoliciesManagement\FreightShippingType $freightShipping)
    {
        $this->freightShipping = $freightShipping;
        return $this;
    }

    /**
     * Adds as shipToLocations
     *
     * An international region (such as Asia, Europe, or Latin America) or country (represented by two-letter country code) to where the seller will ship an item. <br><br>
     *  It is not necessary to include the <b>shipToLocation</b> field in the <b>domesticShippingPolicyInfoService</b> container when using the <b>addSellerProfile</b> and <b>setSellerProfile</b> calls. However, eBay automatically adds the seller's listing county as a 'Ship-To Location', and the <b>shipToLocation</b> field is always returned for each shipping policy in the <b>addSellerProfile</b>, <b>setSellerProfile</b>, and <b>getSellerProfiles</b> calls. <br><br>
     *  If the seller does want to offer international shipping as part of the shipping policy, at least one <b>shipToLocation</b> field in the <b>internationalShippingPolicyInfoService</b> container is required when using the <b>addSellerProfile</b> and <b>setSellerProfile</b> calls. To offer shipping to every region and country (supported by eBay shipping services), the seller can pass in 'Worldwide' as a <b>shipToLocation</b> value. If the seller wants to offer shipping to one or more specific shipping regions, the seller must include that shipping region in a <b>shipToLocation</b> field. If the seller wants to ship to a specific region, but would like to exclude one or more countries in that region, the seller should use one or more instances of the <b>shippingPolicyInfo.excludeShipToLocation</b> field.
     *  <br><br>
     *  Applicable shipping region values are defined in <b>ShippingRegionCodeType</b> and applicable country codes are defined in <b>CountryCodeType</b>. However, it is best practice for sellers to call <b>GeteBayDetails</b>, using <b>ShipppingLocationDetails</b> as a <b>DetailName</b> value in the request, and then scanning the <b>ShippingLocationDetails.ShippingLocation</b> values that are returned in the response.
     *  <br><br>
     *  Each specified ship-to location is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @return self
     * @param string $shipToLocations
     */
    public function addToShipToLocations($shipToLocations)
    {
        $this->shipToLocations[] = $shipToLocations;
        return $this;
    }

    /**
     * isset shipToLocations
     *
     * An international region (such as Asia, Europe, or Latin America) or country (represented by two-letter country code) to where the seller will ship an item. <br><br>
     *  It is not necessary to include the <b>shipToLocation</b> field in the <b>domesticShippingPolicyInfoService</b> container when using the <b>addSellerProfile</b> and <b>setSellerProfile</b> calls. However, eBay automatically adds the seller's listing county as a 'Ship-To Location', and the <b>shipToLocation</b> field is always returned for each shipping policy in the <b>addSellerProfile</b>, <b>setSellerProfile</b>, and <b>getSellerProfiles</b> calls. <br><br>
     *  If the seller does want to offer international shipping as part of the shipping policy, at least one <b>shipToLocation</b> field in the <b>internationalShippingPolicyInfoService</b> container is required when using the <b>addSellerProfile</b> and <b>setSellerProfile</b> calls. To offer shipping to every region and country (supported by eBay shipping services), the seller can pass in 'Worldwide' as a <b>shipToLocation</b> value. If the seller wants to offer shipping to one or more specific shipping regions, the seller must include that shipping region in a <b>shipToLocation</b> field. If the seller wants to ship to a specific region, but would like to exclude one or more countries in that region, the seller should use one or more instances of the <b>shippingPolicyInfo.excludeShipToLocation</b> field.
     *  <br><br>
     *  Applicable shipping region values are defined in <b>ShippingRegionCodeType</b> and applicable country codes are defined in <b>CountryCodeType</b>. However, it is best practice for sellers to call <b>GeteBayDetails</b>, using <b>ShipppingLocationDetails</b> as a <b>DetailName</b> value in the request, and then scanning the <b>ShippingLocationDetails.ShippingLocation</b> values that are returned in the response.
     *  <br><br>
     *  Each specified ship-to location is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShipToLocations($index)
    {
        return isset($this->shipToLocations[$index]);
    }

    /**
     * unset shipToLocations
     *
     * An international region (such as Asia, Europe, or Latin America) or country (represented by two-letter country code) to where the seller will ship an item. <br><br>
     *  It is not necessary to include the <b>shipToLocation</b> field in the <b>domesticShippingPolicyInfoService</b> container when using the <b>addSellerProfile</b> and <b>setSellerProfile</b> calls. However, eBay automatically adds the seller's listing county as a 'Ship-To Location', and the <b>shipToLocation</b> field is always returned for each shipping policy in the <b>addSellerProfile</b>, <b>setSellerProfile</b>, and <b>getSellerProfiles</b> calls. <br><br>
     *  If the seller does want to offer international shipping as part of the shipping policy, at least one <b>shipToLocation</b> field in the <b>internationalShippingPolicyInfoService</b> container is required when using the <b>addSellerProfile</b> and <b>setSellerProfile</b> calls. To offer shipping to every region and country (supported by eBay shipping services), the seller can pass in 'Worldwide' as a <b>shipToLocation</b> value. If the seller wants to offer shipping to one or more specific shipping regions, the seller must include that shipping region in a <b>shipToLocation</b> field. If the seller wants to ship to a specific region, but would like to exclude one or more countries in that region, the seller should use one or more instances of the <b>shippingPolicyInfo.excludeShipToLocation</b> field.
     *  <br><br>
     *  Applicable shipping region values are defined in <b>ShippingRegionCodeType</b> and applicable country codes are defined in <b>CountryCodeType</b>. However, it is best practice for sellers to call <b>GeteBayDetails</b>, using <b>ShipppingLocationDetails</b> as a <b>DetailName</b> value in the request, and then scanning the <b>ShippingLocationDetails.ShippingLocation</b> values that are returned in the response.
     *  <br><br>
     *  Each specified ship-to location is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShipToLocations($index)
    {
        unset($this->shipToLocations[$index]);
    }

    /**
     * Gets as shipToLocations
     *
     * An international region (such as Asia, Europe, or Latin America) or country (represented by two-letter country code) to where the seller will ship an item. <br><br>
     *  It is not necessary to include the <b>shipToLocation</b> field in the <b>domesticShippingPolicyInfoService</b> container when using the <b>addSellerProfile</b> and <b>setSellerProfile</b> calls. However, eBay automatically adds the seller's listing county as a 'Ship-To Location', and the <b>shipToLocation</b> field is always returned for each shipping policy in the <b>addSellerProfile</b>, <b>setSellerProfile</b>, and <b>getSellerProfiles</b> calls. <br><br>
     *  If the seller does want to offer international shipping as part of the shipping policy, at least one <b>shipToLocation</b> field in the <b>internationalShippingPolicyInfoService</b> container is required when using the <b>addSellerProfile</b> and <b>setSellerProfile</b> calls. To offer shipping to every region and country (supported by eBay shipping services), the seller can pass in 'Worldwide' as a <b>shipToLocation</b> value. If the seller wants to offer shipping to one or more specific shipping regions, the seller must include that shipping region in a <b>shipToLocation</b> field. If the seller wants to ship to a specific region, but would like to exclude one or more countries in that region, the seller should use one or more instances of the <b>shippingPolicyInfo.excludeShipToLocation</b> field.
     *  <br><br>
     *  Applicable shipping region values are defined in <b>ShippingRegionCodeType</b> and applicable country codes are defined in <b>CountryCodeType</b>. However, it is best practice for sellers to call <b>GeteBayDetails</b>, using <b>ShipppingLocationDetails</b> as a <b>DetailName</b> value in the request, and then scanning the <b>ShippingLocationDetails.ShippingLocation</b> values that are returned in the response.
     *  <br><br>
     *  Each specified ship-to location is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @return string[]
     */
    public function getShipToLocations()
    {
        return $this->shipToLocations;
    }

    /**
     * Sets a new shipToLocations
     *
     * An international region (such as Asia, Europe, or Latin America) or country (represented by two-letter country code) to where the seller will ship an item. <br><br>
     *  It is not necessary to include the <b>shipToLocation</b> field in the <b>domesticShippingPolicyInfoService</b> container when using the <b>addSellerProfile</b> and <b>setSellerProfile</b> calls. However, eBay automatically adds the seller's listing county as a 'Ship-To Location', and the <b>shipToLocation</b> field is always returned for each shipping policy in the <b>addSellerProfile</b>, <b>setSellerProfile</b>, and <b>getSellerProfiles</b> calls. <br><br>
     *  If the seller does want to offer international shipping as part of the shipping policy, at least one <b>shipToLocation</b> field in the <b>internationalShippingPolicyInfoService</b> container is required when using the <b>addSellerProfile</b> and <b>setSellerProfile</b> calls. To offer shipping to every region and country (supported by eBay shipping services), the seller can pass in 'Worldwide' as a <b>shipToLocation</b> value. If the seller wants to offer shipping to one or more specific shipping regions, the seller must include that shipping region in a <b>shipToLocation</b> field. If the seller wants to ship to a specific region, but would like to exclude one or more countries in that region, the seller should use one or more instances of the <b>shippingPolicyInfo.excludeShipToLocation</b> field.
     *  <br><br>
     *  Applicable shipping region values are defined in <b>ShippingRegionCodeType</b> and applicable country codes are defined in <b>CountryCodeType</b>. However, it is best practice for sellers to call <b>GeteBayDetails</b>, using <b>ShipppingLocationDetails</b> as a <b>DetailName</b> value in the request, and then scanning the <b>ShippingLocationDetails.ShippingLocation</b> values that are returned in the response.
     *  <br><br>
     *  Each specified ship-to location is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @param string[] $shipToLocations
     * @return self
     */
    public function setShipToLocations(array $shipToLocations)
    {
        $this->shipToLocations = $shipToLocations;
        return $this;
    }

    /**
     * Adds as domesticShippingPolicyInfoService
     *
     * Container that consists of detailed information for a domestic shipping service, including shipping costs, ship-to locations, and flags to indicate Fast and/or Free shipping. Up to four domestic shipping service options can be specified in one shipping business policy.
     *  <br><br>
     *  Each specified domestic shipping service is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @return self
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyInfoServiceType $domesticShippingPolicyInfoService
     */
    public function addToDomesticShippingPolicyInfoService(\Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyInfoServiceType $domesticShippingPolicyInfoService)
    {
        $this->domesticShippingPolicyInfoService[] = $domesticShippingPolicyInfoService;
        return $this;
    }

    /**
     * isset domesticShippingPolicyInfoService
     *
     * Container that consists of detailed information for a domestic shipping service, including shipping costs, ship-to locations, and flags to indicate Fast and/or Free shipping. Up to four domestic shipping service options can be specified in one shipping business policy.
     *  <br><br>
     *  Each specified domestic shipping service is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDomesticShippingPolicyInfoService($index)
    {
        return isset($this->domesticShippingPolicyInfoService[$index]);
    }

    /**
     * unset domesticShippingPolicyInfoService
     *
     * Container that consists of detailed information for a domestic shipping service, including shipping costs, ship-to locations, and flags to indicate Fast and/or Free shipping. Up to four domestic shipping service options can be specified in one shipping business policy.
     *  <br><br>
     *  Each specified domestic shipping service is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDomesticShippingPolicyInfoService($index)
    {
        unset($this->domesticShippingPolicyInfoService[$index]);
    }

    /**
     * Gets as domesticShippingPolicyInfoService
     *
     * Container that consists of detailed information for a domestic shipping service, including shipping costs, ship-to locations, and flags to indicate Fast and/or Free shipping. Up to four domestic shipping service options can be specified in one shipping business policy.
     *  <br><br>
     *  Each specified domestic shipping service is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyInfoServiceType[]
     */
    public function getDomesticShippingPolicyInfoService()
    {
        return $this->domesticShippingPolicyInfoService;
    }

    /**
     * Sets a new domesticShippingPolicyInfoService
     *
     * Container that consists of detailed information for a domestic shipping service, including shipping costs, ship-to locations, and flags to indicate Fast and/or Free shipping. Up to four domestic shipping service options can be specified in one shipping business policy.
     *  <br><br>
     *  Each specified domestic shipping service is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyInfoServiceType[] $domesticShippingPolicyInfoService
     * @return self
     */
    public function setDomesticShippingPolicyInfoService(array $domesticShippingPolicyInfoService)
    {
        $this->domesticShippingPolicyInfoService = $domesticShippingPolicyInfoService;
        return $this;
    }

    /**
     * Adds as intlShippingPolicyInfoService
     *
     * Container that consists of detailed information for an international shipping service, including shipping costs and ship-to locations. Up to five international shipping service options can be specified in one shipping policy.
     *  <br><br>
     *  Each specified international shipping service is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @return self
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyInfoServiceType $intlShippingPolicyInfoService
     */
    public function addToIntlShippingPolicyInfoService(\Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyInfoServiceType $intlShippingPolicyInfoService)
    {
        $this->intlShippingPolicyInfoService[] = $intlShippingPolicyInfoService;
        return $this;
    }

    /**
     * isset intlShippingPolicyInfoService
     *
     * Container that consists of detailed information for an international shipping service, including shipping costs and ship-to locations. Up to five international shipping service options can be specified in one shipping policy.
     *  <br><br>
     *  Each specified international shipping service is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIntlShippingPolicyInfoService($index)
    {
        return isset($this->intlShippingPolicyInfoService[$index]);
    }

    /**
     * unset intlShippingPolicyInfoService
     *
     * Container that consists of detailed information for an international shipping service, including shipping costs and ship-to locations. Up to five international shipping service options can be specified in one shipping policy.
     *  <br><br>
     *  Each specified international shipping service is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIntlShippingPolicyInfoService($index)
    {
        unset($this->intlShippingPolicyInfoService[$index]);
    }

    /**
     * Gets as intlShippingPolicyInfoService
     *
     * Container that consists of detailed information for an international shipping service, including shipping costs and ship-to locations. Up to five international shipping service options can be specified in one shipping policy.
     *  <br><br>
     *  Each specified international shipping service is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyInfoServiceType[]
     */
    public function getIntlShippingPolicyInfoService()
    {
        return $this->intlShippingPolicyInfoService;
    }

    /**
     * Sets a new intlShippingPolicyInfoService
     *
     * Container that consists of detailed information for an international shipping service, including shipping costs and ship-to locations. Up to five international shipping service options can be specified in one shipping policy.
     *  <br><br>
     *  Each specified international shipping service is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyInfoServiceType[] $intlShippingPolicyInfoService
     * @return self
     */
    public function setIntlShippingPolicyInfoService(array $intlShippingPolicyInfoService)
    {
        $this->intlShippingPolicyInfoService = $intlShippingPolicyInfoService;
        return $this;
    }

    /**
     * Gets as insurance
     *
     * This container consists of the type and cost of domestic and international shipping insurance. The <b>insurance</b> container is required in the shipping policy if the seller offers shipping insurance to domestic and/or international buyers. Only sellers listing on the AU, FR, and IT sites can offer shipping insurance directly to the buyer.
     *  <br><br>
     *  If shipping insurance options are specified for a shipping policy, this container is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\InsuranceType
     */
    public function getInsurance()
    {
        return $this->insurance;
    }

    /**
     * Sets a new insurance
     *
     * This container consists of the type and cost of domestic and international shipping insurance. The <b>insurance</b> container is required in the shipping policy if the seller offers shipping insurance to domestic and/or international buyers. Only sellers listing on the AU, FR, and IT sites can offer shipping insurance directly to the buyer.
     *  <br><br>
     *  If shipping insurance options are specified for a shipping policy, this container is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\InsuranceType $insurance
     * @return self
     */
    public function setInsurance(\Nogrod\eBaySDK\BusinessPoliciesManagement\InsuranceType $insurance)
    {
        $this->insurance = $insurance;
        return $this;
    }

    /**
     * Gets as intlRateTable
     *
     * <span class="tablenote"><b>Note:</b>
     *  International shipping rate tables are only available to sellers listing on the Germany and UK eBay sites.
     *  </span>
     *  <br>
     *  This value indicates that the seller's international shipping rate table should be referenced to determine flat-rate shipping costs based on shipping service level and delivery location. Currently, the only valid value for <b>intlRateTable</b> is 'Default', which means that the default international shipping rate table set up by the seller in My eBay is referenced.
     *  <br><br>
     *  Including this field in an <b>addSellerProfile</b> or <b>setSellerProfile</b> call will only have an effect on flat shipping rates if an international shipping rate table is set up for the seller's account in My eBay, and it will only affect those international regions and countries for which flat shipping rates are defined.
     *  <br><br>
     *  If set for the shipping policy (Germany and UK only), this field is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @return string
     */
    public function getIntlRateTable()
    {
        return $this->intlRateTable;
    }

    /**
     * Sets a new intlRateTable
     *
     * <span class="tablenote"><b>Note:</b>
     *  International shipping rate tables are only available to sellers listing on the Germany and UK eBay sites.
     *  </span>
     *  <br>
     *  This value indicates that the seller's international shipping rate table should be referenced to determine flat-rate shipping costs based on shipping service level and delivery location. Currently, the only valid value for <b>intlRateTable</b> is 'Default', which means that the default international shipping rate table set up by the seller in My eBay is referenced.
     *  <br><br>
     *  Including this field in an <b>addSellerProfile</b> or <b>setSellerProfile</b> call will only have an effect on flat shipping rates if an international shipping rate table is set up for the seller's account in My eBay, and it will only affect those international regions and countries for which flat shipping rates are defined.
     *  <br><br>
     *  If set for the shipping policy (Germany and UK only), this field is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @param string $intlRateTable
     * @return self
     */
    public function setIntlRateTable($intlRateTable)
    {
        $this->intlRateTable = $intlRateTable;
        return $this;
    }

    /**
     * Gets as domesticRateTable
     *
     * This value indicates that the seller's domestic shipping rate table should be referenced to determine flat-rate shipping costs based on shipping service level and delivery location. Currently, the only valid value for <b>domesticRateTable</b> is 'Default', which means that the default domestic shipping rate table set up by the seller in My eBay is referenced.
     *  <br><br>
     *  Including this field in an <b>addSellerProfile</b> or <b>setSellerProfile</b> call will only have an effect on flat shipping rates if a domestic shipping rate table is set up for the seller's account in My eBay, and it will only affect those domestic regions for which flat shipping rates are defined.
     *  <br><br>
     *  If set for the shipping policy, this field is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @return string
     */
    public function getDomesticRateTable()
    {
        return $this->domesticRateTable;
    }

    /**
     * Sets a new domesticRateTable
     *
     * This value indicates that the seller's domestic shipping rate table should be referenced to determine flat-rate shipping costs based on shipping service level and delivery location. Currently, the only valid value for <b>domesticRateTable</b> is 'Default', which means that the default domestic shipping rate table set up by the seller in My eBay is referenced.
     *  <br><br>
     *  Including this field in an <b>addSellerProfile</b> or <b>setSellerProfile</b> call will only have an effect on flat shipping rates if a domestic shipping rate table is set up for the seller's account in My eBay, and it will only affect those domestic regions for which flat shipping rates are defined.
     *  <br><br>
     *  If set for the shipping policy, this field is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @param string $domesticRateTable
     * @return self
     */
    public function setDomesticRateTable($domesticRateTable)
    {
        $this->domesticRateTable = $domesticRateTable;
        return $this;
    }

    /**
     * Gets as packagingHandlingCosts
     *
     * This field allows the seller to add package handling costs for shipping an item to a domestic location.
     *  <br><br>
     *  If set for the shipping policy, this field is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType
     */
    public function getPackagingHandlingCosts()
    {
        return $this->packagingHandlingCosts;
    }

    /**
     * Sets a new packagingHandlingCosts
     *
     * This field allows the seller to add package handling costs for shipping an item to a domestic location.
     *  <br><br>
     *  If set for the shipping policy, this field is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $packagingHandlingCosts
     * @return self
     */
    public function setPackagingHandlingCosts(\Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $packagingHandlingCosts)
    {
        $this->packagingHandlingCosts = $packagingHandlingCosts;
        return $this;
    }

    /**
     * Gets as internationalPackagingHandlingCosts
     *
     * This field allows the seller to add package handling costs for shipping an item to an international location.
     *  <br><br>
     *  If set for the shipping policy, this field is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType
     */
    public function getInternationalPackagingHandlingCosts()
    {
        return $this->internationalPackagingHandlingCosts;
    }

    /**
     * Sets a new internationalPackagingHandlingCosts
     *
     * This field allows the seller to add package handling costs for shipping an item to an international location.
     *  <br><br>
     *  If set for the shipping policy, this field is returned with shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $internationalPackagingHandlingCosts
     * @return self
     */
    public function setInternationalPackagingHandlingCosts(\Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $internationalPackagingHandlingCosts)
    {
        $this->internationalPackagingHandlingCosts = $internationalPackagingHandlingCosts;
        return $this;
    }

    /**
     * Gets as shippingPolicyCurrency
     *
     * Three-digit code that indicates the currency used by the listing site. To obtain valid currency codes, the seller can call <b>GeteBayDetails</b>, using <b>CurrencyDetails</b> as a <b>DetailName</b> value in the request, and then scanning the <b>CurrencyDetails.Currency</b> values that are returned in the response.
     *  <br><br>
     *  If this field is not included in an <b>addSellerProfile</b> or <b>setSellerProfile</b> call, the currency code will default to the standard currency used by the listing site.
     *  <br><br>
     *  This field is always returned with all shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @return string
     */
    public function getShippingPolicyCurrency()
    {
        return $this->shippingPolicyCurrency;
    }

    /**
     * Sets a new shippingPolicyCurrency
     *
     * Three-digit code that indicates the currency used by the listing site. To obtain valid currency codes, the seller can call <b>GeteBayDetails</b>, using <b>CurrencyDetails</b> as a <b>DetailName</b> value in the request, and then scanning the <b>CurrencyDetails.Currency</b> values that are returned in the response.
     *  <br><br>
     *  If this field is not included in an <b>addSellerProfile</b> or <b>setSellerProfile</b> call, the currency code will default to the standard currency used by the listing site.
     *  <br><br>
     *  This field is always returned with all shipping policies returned in the <b>getSellerProfiles</b>, <b>addSellerProfile</b>, or <b>setSellerProfile</b> calls.
     *
     * @param string $shippingPolicyCurrency
     * @return self
     */
    public function setShippingPolicyCurrency($shippingPolicyCurrency)
    {
        $this->shippingPolicyCurrency = $shippingPolicyCurrency;
        return $this;
    }

    /**
     * Gets as shippingPolicyIdentity
     *
     * This container is for future use.
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyIdentityType
     */
    public function getShippingPolicyIdentity()
    {
        return $this->shippingPolicyIdentity;
    }

    /**
     * Sets a new shippingPolicyIdentity
     *
     * This container is for future use.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyIdentityType $shippingPolicyIdentity
     * @return self
     */
    public function setShippingPolicyIdentity(\Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyIdentityType $shippingPolicyIdentity)
    {
        $this->shippingPolicyIdentity = $shippingPolicyIdentity;
        return $this;
    }

    /**
     * Gets as globalShipping
     *
     * This flag should be included and set to 'true' if the seller wants to enable the Global Shipping Program feature in the shipping policy. If the value of <b>globalShipping</b> is 'true', the Global Shipping Program is the default international shipping option for the listing, and eBay sets the international shipping service to International Priority Shipping. If the value of <b>GlobalShipping</b> is 'false', the seller is responsible for specifying one or more international shipping services for the listing (if the seller wishes to ship internationally).
     *  <br><br>
     *  To make use of this field and the Global Shipping Program, the seller and the item being listed must be eligible for the Global Shipping Program.
     *
     * @return bool
     */
    public function getGlobalShipping()
    {
        return $this->globalShipping;
    }

    /**
     * Sets a new globalShipping
     *
     * This flag should be included and set to 'true' if the seller wants to enable the Global Shipping Program feature in the shipping policy. If the value of <b>globalShipping</b> is 'true', the Global Shipping Program is the default international shipping option for the listing, and eBay sets the international shipping service to International Priority Shipping. If the value of <b>GlobalShipping</b> is 'false', the seller is responsible for specifying one or more international shipping services for the listing (if the seller wishes to ship internationally).
     *  <br><br>
     *  To make use of this field and the Global Shipping Program, the seller and the item being listed must be eligible for the Global Shipping Program.
     *
     * @param bool $globalShipping
     * @return self
     */
    public function setGlobalShipping($globalShipping)
    {
        $this->globalShipping = $globalShipping;
        return $this;
    }

    /**
     * Gets as eligibleForPickupDropOff
     *
     * This field is used in Add/Revise/Relist calls to enable the listing for the "Click and Collect" feature. To enable the listing for the "Click and Collect" feature, the seller includes this boolean field and sets its value to 'true'. A seller must be eligible for the "Click and Collect" feature to list an item that is eligible for "Click and Collect". At this time, the "Click and Collect" feature is only available to large retail merchants on the eBay UK site (site ID 3).
     *  <br><br>
     *  In addition to setting the <b>EligibleForPickupDropOff</b> boolean field to 'true', the merchant must also perform the following actions in an Add/Revise/Relist call to enable the "Click and Collect" option on a listing:
     *  <ul>
     *  <li>Have inventory for the product at one or more physical stores tied to the merchant's account</li>
     *  <li>Set an immediate payment requirement on the item. The immediate payment feature requires the seller to include the <b>paymentInfo.immediatePay</b> flag in the payment business policy and set its value to 'true'</li>
     *  </ul>
     *  </li>
     *  </ul>
     *  When a UK merchant is successful at listing an item with the "Click and Collect" feature enabled, prospective buyers within a reasonable distance from one of the merchant's stores (that has stock available) will see the "Available for Click and Collect" option on the listing, along with information on the closest store that has the item.
     *
     * @return bool
     */
    public function getEligibleForPickupDropOff()
    {
        return $this->eligibleForPickupDropOff;
    }

    /**
     * Sets a new eligibleForPickupDropOff
     *
     * This field is used in Add/Revise/Relist calls to enable the listing for the "Click and Collect" feature. To enable the listing for the "Click and Collect" feature, the seller includes this boolean field and sets its value to 'true'. A seller must be eligible for the "Click and Collect" feature to list an item that is eligible for "Click and Collect". At this time, the "Click and Collect" feature is only available to large retail merchants on the eBay UK site (site ID 3).
     *  <br><br>
     *  In addition to setting the <b>EligibleForPickupDropOff</b> boolean field to 'true', the merchant must also perform the following actions in an Add/Revise/Relist call to enable the "Click and Collect" option on a listing:
     *  <ul>
     *  <li>Have inventory for the product at one or more physical stores tied to the merchant's account</li>
     *  <li>Set an immediate payment requirement on the item. The immediate payment feature requires the seller to include the <b>paymentInfo.immediatePay</b> flag in the payment business policy and set its value to 'true'</li>
     *  </ul>
     *  </li>
     *  </ul>
     *  When a UK merchant is successful at listing an item with the "Click and Collect" feature enabled, prospective buyers within a reasonable distance from one of the merchant's stores (that has stock available) will see the "Available for Click and Collect" option on the listing, along with information on the closest store that has the item.
     *
     * @param bool $eligibleForPickupDropOff
     * @return self
     */
    public function setEligibleForPickupDropOff($eligibleForPickupDropOff)
    {
        $this->eligibleForPickupDropOff = $eligibleForPickupDropOff;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/selling/v1/services");
        $value = $this->getShippingPolicyName();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}shippingPolicyName", $value);
        }
        $value = $this->getDomesticShippingType();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}domesticShippingType", $value);
        }
        $value = $this->getIntlShippingType();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}intlShippingType", $value);
        }
        $value = $this->getDispatchTimeMax();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}dispatchTimeMax", $value);
        }
        $value = $this->getDispatchTimeReason();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}dispatchTimeReason", $value);
        }
        $value = $this->getShippingOption();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}shippingOption", $value);
        }
        $value = $this->getExcludeShipToLocation();
        if (null !== $value && !empty($this->getExcludeShipToLocation())) {
            $writer->write(array_map(function ($v) {return ["excludeShipToLocation" => $v];}, $value));
        }
        $value = $this->getShippingProfileDiscountInfo();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}shippingProfileDiscountInfo", $value);
        }
        $value = $this->getFreightShipping();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}freightShipping", $value);
        }
        $value = $this->getShipToLocations();
        if (null !== $value && !empty($this->getShipToLocations())) {
            $writer->write(array_map(function ($v) {return ["shipToLocations" => $v];}, $value));
        }
        $value = $this->getDomesticShippingPolicyInfoService();
        if (null !== $value && !empty($this->getDomesticShippingPolicyInfoService())) {
            $writer->write(array_map(function ($v) {return ["domesticShippingPolicyInfoService" => $v];}, $value));
        }
        $value = $this->getIntlShippingPolicyInfoService();
        if (null !== $value && !empty($this->getIntlShippingPolicyInfoService())) {
            $writer->write(array_map(function ($v) {return ["intlShippingPolicyInfoService" => $v];}, $value));
        }
        $value = $this->getInsurance();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}insurance", $value);
        }
        $value = $this->getIntlRateTable();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}intlRateTable", $value);
        }
        $value = $this->getDomesticRateTable();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}domesticRateTable", $value);
        }
        $value = $this->getPackagingHandlingCosts();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}packagingHandlingCosts", $value);
        }
        $value = $this->getInternationalPackagingHandlingCosts();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}internationalPackagingHandlingCosts", $value);
        }
        $value = $this->getShippingPolicyCurrency();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}shippingPolicyCurrency", $value);
        }
        $value = $this->getShippingPolicyIdentity();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}shippingPolicyIdentity", $value);
        }
        $value = $this->getGlobalShipping();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}GlobalShipping", $value);
        }
        $value = $this->getEligibleForPickupDropOff();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}EligibleForPickupDropOff", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader)
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue)
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue)
    {
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}shippingPolicyName');
        if (null !== $value) {
            $this->setShippingPolicyName($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}domesticShippingType');
        if (null !== $value) {
            $this->setDomesticShippingType($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}intlShippingType');
        if (null !== $value) {
            $this->setIntlShippingType($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}dispatchTimeMax');
        if (null !== $value) {
            $this->setDispatchTimeMax($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}dispatchTimeReason');
        if (null !== $value) {
            $this->setDispatchTimeReason($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}shippingOption');
        if (null !== $value) {
            $this->setShippingOption($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}excludeShipToLocation', true);
        if (null !== $value && !empty($value)) {
            $this->setExcludeShipToLocation($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}shippingProfileDiscountInfo');
        if (null !== $value) {
            $this->setShippingProfileDiscountInfo(\Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingProfileDiscountInfoType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}freightShipping');
        if (null !== $value) {
            $this->setFreightShipping(\Nogrod\eBaySDK\BusinessPoliciesManagement\FreightShippingType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}shipToLocations', true);
        if (null !== $value && !empty($value)) {
            $this->setShipToLocations($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}domesticShippingPolicyInfoService', true);
        if (null !== $value && !empty($value)) {
            $this->setDomesticShippingPolicyInfoService(array_map(function ($v) {return \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyInfoServiceType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}intlShippingPolicyInfoService', true);
        if (null !== $value && !empty($value)) {
            $this->setIntlShippingPolicyInfoService(array_map(function ($v) {return \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyInfoServiceType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}insurance');
        if (null !== $value) {
            $this->setInsurance(\Nogrod\eBaySDK\BusinessPoliciesManagement\InsuranceType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}intlRateTable');
        if (null !== $value) {
            $this->setIntlRateTable($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}domesticRateTable');
        if (null !== $value) {
            $this->setDomesticRateTable($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}packagingHandlingCosts');
        if (null !== $value) {
            $this->setPackagingHandlingCosts(\Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}internationalPackagingHandlingCosts');
        if (null !== $value) {
            $this->setInternationalPackagingHandlingCosts(\Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}shippingPolicyCurrency');
        if (null !== $value) {
            $this->setShippingPolicyCurrency($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}shippingPolicyIdentity');
        if (null !== $value) {
            $this->setShippingPolicyIdentity(\Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyIdentityType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}GlobalShipping');
        if (null !== $value) {
            $this->setGlobalShipping($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}EligibleForPickupDropOff');
        if (null !== $value) {
            $this->setEligibleForPickupDropOff($value);
        }
    }
}
