<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GeteBayDetailsResponseType
 *
 * Details about a specified site in response to <b>GeteBayDetailsRequest</b>. If no <b>DetailName</b> field is identified in the request, all elements of <b>GeteBayDetailsResponse</b> are returned. Otherwise, eBay returns only the elements corresponding to the specified <b>DetailName</b> fields. <b>UpdateTime</b> gives the time of modification of the most recently modified <b>DetailName</b>.
 * XSD Type: GeteBayDetailsResponseType
 */
class GeteBayDetailsResponseType extends AbstractResponseType
{
    /**
     * Lists the country code and associated name of the countries supported by
     *  the eBay system, regardless of the site specified in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>CountryDetails</b> is included as a <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are used in the request.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\CountryDetailsType[] $countryDetails
     */
    private $countryDetails = [

    ];

    /**
     * Lists the currencies supported by the eBay system, regardless of the site
     *  specified in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>CurrencyDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are
     *  used in the request.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\CurrencyDetailsType[] $currencyDetails
     */
    private $currencyDetails = [

    ];

    /**
     * A dispatch time specifies the maximum number of business days a seller commits to for shipping an item to domestic buyers after receiving a cleared payment. Returns all dispatch times in the system, regardless of the site specified in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>DispatchTimeMaxDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\DispatchTimeMaxDetailsType[] $dispatchTimeMaxDetails
     */
    private $dispatchTimeMaxDetails = [

    ];

    /**
     * Although the supported payment methods for the specified eBay site are returned, it is recommended that the seller use <b>GetCategoryFeatures</b> instead, and pass in <b>PaymentMethods</b> as a <b>FeatureID</b> value in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> This container is only returned if <b>PaymentOptionDetails</b> is included as a <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are used in the request.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\PaymentOptionDetailsType[] $paymentOptionDetails
     */
    private $paymentOptionDetails = [

    ];

    /**
     * Lists the cities and other domestic regions for the specified site's country.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>RegionDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are
     *  used in the request.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\RegionDetailsType[] $regionDetails
     */
    private $regionDetails = [

    ];

    /**
     * Lists the worldwide regions that can be set as shipping locations from the specified eBay site.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ShippingLocationDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\ShippingLocationDetailsType[] $shippingLocationDetails
     */
    private $shippingLocationDetails = [

    ];

    /**
     * Lists the shipping services supported by the specified eBay site. Returns only the shipping services that are applicable to the site specified in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ShippingServiceDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\ShippingServiceDetailsType[] $shippingServiceDetails
     */
    private $shippingServiceDetails = [

    ];

    /**
     * Lists all available eBay sites and their associated <b>SiteID</b> numbers.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>SiteDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\SiteDetailsType[] $siteDetails
     */
    private $siteDetails = [

    ];

    /**
     * Details the different tax jurisdictions or tax regions applicable to the
     *  site specified in the request. Note that tax jurisdictions are only applicable to the following eBay sites: eBay US (Site ID 0), eBay Canada (Site ID 2), eBay Canada (French) (Site ID 210), and eBay India (Site ID 203). An empty response will be returned for any other Site ID that is passed in the HTTP header.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>TaxJurisdiction</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\TaxJurisdictionType[] $taxJurisdiction
     */
    private $taxJurisdiction = [

    ];

    /**
     * Lists eBay URLs that are applicable to the site specified in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>URLDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\URLDetailsType[] $uRLDetails
     */
    private $uRLDetails = [

    ];

    /**
     * Lists the details of the time zones supported by the eBay system.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>TimeZoneDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\TimeZoneDetailsType[] $timeZoneDetails
     */
    private $timeZoneDetails = [

    ];

    /**
     * Lists the site's maximum thresholds for specifying Item Specifics.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ItemSpecificDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\ItemSpecificDetailsType[] $itemSpecificDetails
     */
    private $itemSpecificDetails = [

    ];

    /**
     * Units of measurement are no longer returned in GeteBayDetails, so this container is no longer applicable.
     *
     * @var \Nogrod\eBaySDK\Trading\UnitOfMeasurementDetailsType[] $unitOfMeasurementDetails
     */
    private $unitOfMeasurementDetails = [

    ];

    /**
     * Lists the worldwide regions and individual countries that can be set as shipping locations from the specified eBay site.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>RegionOfOriginDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\RegionOfOriginDetailsType[] $regionOfOriginDetails
     */
    private $regionOfOriginDetails = [

    ];

    /**
     * Lists the various shipping packages supported by the specified site.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ShippingPackageDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\ShippingPackageDetailsType[] $shippingPackageDetails
     */
    private $shippingPackageDetails = [

    ];

    /**
     * Lists the shipping carriers supported by the specified site.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ShippingCarrierDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\ShippingCarrierDetailsType[] $shippingCarrierDetails
     */
    private $shippingCarrierDetails = [

    ];

    /**
     * Lists the supported values that may be used for return policies on the specified eBay site, such as the return period, supported restocking fees, and refund options.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ReturnPolicyDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *  <span class="tablenote"><b>Note: </b>
     *  This container has been staged for deprecation. Although domestic return policy metadata is still getting returned at the moment, it is recommended that users start making plans to use the <b>GetCategoryFeatures</b> call instead to retrieve category-level, domestic return policy metadata.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\ReturnPolicyDetailsType $returnPolicyDetails
     */
    private $returnPolicyDetails = null;

    /**
     * <span class="tablenote"><b>Note: </b>
     *  This container has been deprecated. The <b>GetCategoryFeatures</b> call must be used instead to retrieve category-level, international return policy metadata.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\ReturnPolicyDetailsType $internationalReturnPolicyDetails
     */
    private $internationalReturnPolicyDetails = null;

    /**
     * Lists the minimum starting prices for the supported types of eBay listings.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ListingStartPriceDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\ListingStartPriceDetailsType[] $listingStartPriceDetails
     */
    private $listingStartPriceDetails = [

    ];

    /**
     * Lists the threshold values that can be passed in through the <b>BuyerRequirementDetails</b> container in the Add/Revise/Relist API calls. Buyer Requirements allow the seller to block buyers who have unpaid item defects, policy violations, low Feedback scores, and/or other undesirable qualities/statistics. Buyer Requirements are set at the seller's account level, but by using a <b>BuyerRequirementDetails</b> container in an Add/Revise/Relist API call, the values in that container will override values set at the account level.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>BuyerRequirementDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\SiteBuyerRequirementDetailsType[] $buyerRequirementDetails
     */
    private $buyerRequirementDetails = [

    ];

    /**
     * Details the listing features available for the eBay site specified in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ListingFeatureDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\ListingFeatureDetailsType[] $listingFeatureDetails
     */
    private $listingFeatureDetails = [

    ];

    /**
     * Site-level validation rules for multiple-variation listings (for example, the maximum number of variations per listing). Use <b>GetCategoryFeatures</b> to determine which categories on a site support variations.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>VariationDetails</b> is included as a <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are used in the request.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\VariationDetailsType $variationDetails
     */
    private $variationDetails = null;

    /**
     * Lists the locations supported by the <b>ExcludeShipToLocation</b> feature. These are
     *  locations that a seller can list as areas where they will not ship an item.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ExcludeShippingLocationDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\ExcludeShippingLocationDetailsType[] $excludeShippingLocationDetails
     */
    private $excludeShippingLocationDetails = [

    ];

    /**
     * The time of the most recent modification to any feature detail. If specific
     *  feature details are passed in the request, gives the most recent modification time
     *  of those feature details.
     *
     * @var \DateTime $updateTime
     */
    private $updateTime = null;

    /**
     * Details the recoupment policies for the site specified in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>RecoupmentPolicyDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\RecoupmentPolicyDetailsType[] $recoupmentPolicyDetails
     */
    private $recoupmentPolicyDetails = [

    ];

    /**
     * A shipping service category supported for the site.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ShippingCategoryDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *  Each shipping service supported for a site is automatically categorized by eBay into one of the
     *  shipping categories available for that site depending on how the shipping service shipping time
     *  aligns with the shipping times specified by eBay for each category.
     *  <br><br>
     *  Notice that you cannot specify a <b>ShippingCategory</b>
     *  as an input to any API call - eBay does this categorizing automatically. <b>ShippingCategory</b> is read-only data
     *  that is returned in the <b>ShippingServiceDetails</b> container. One possible use of this data is to segregate shipping
     *  services by <b>ShippingCategory</b> in a pick list. (For an example of this, see the Services pulldown menu in the
     *  Give buyers shipping details form in the eBay Sell Your Item flow.)
     *  <br><br>
     *  One way to populate the picklist would be to call <b>GeteBayDetails</b>
     *  with <b>DetailName</b> set to <b>ShippingServiceDetails</b>.
     *  Then sort these results by <b>ShippingCategory</b> and populate the picklist.
     *
     * @var \Nogrod\eBaySDK\Trading\ShippingCategoryDetailsType[] $shippingCategoryDetails
     */
    private $shippingCategoryDetails = [

    ];

    /**
     * The <b>ProductDetails.ProductIdentifierUnavailableText</b>
     *  field contains the actual text that should be passed into the relevant
     *  product identification fields (EAN, ISBN, UPC, MPN/Brand) if eBay is
     *  prompting/expecting one of these fields in the call request, but the identifiers do not exist/apply for the product. The text will vary based on the listing site. This text should only be used if no product ID exists for the product. If a product identifier value does actually exist for a product, but the seller passes in 'Does not apply' text, that listing may get penalized in search.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ProductDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\ProductDetailsType $productDetails
     */
    private $productDetails = null;

    /**
     * Adds as countryDetails
     *
     * Lists the country code and associated name of the countries supported by
     *  the eBay system, regardless of the site specified in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>CountryDetails</b> is included as a <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are used in the request.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\CountryDetailsType $countryDetails
     */
    public function addToCountryDetails(\Nogrod\eBaySDK\Trading\CountryDetailsType $countryDetails)
    {
        $this->countryDetails[] = $countryDetails;
        return $this;
    }

    /**
     * isset countryDetails
     *
     * Lists the country code and associated name of the countries supported by
     *  the eBay system, regardless of the site specified in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>CountryDetails</b> is included as a <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are used in the request.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCountryDetails($index)
    {
        return isset($this->countryDetails[$index]);
    }

    /**
     * unset countryDetails
     *
     * Lists the country code and associated name of the countries supported by
     *  the eBay system, regardless of the site specified in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>CountryDetails</b> is included as a <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are used in the request.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCountryDetails($index)
    {
        unset($this->countryDetails[$index]);
    }

    /**
     * Gets as countryDetails
     *
     * Lists the country code and associated name of the countries supported by
     *  the eBay system, regardless of the site specified in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>CountryDetails</b> is included as a <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are used in the request.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\CountryDetailsType[]
     */
    public function getCountryDetails()
    {
        return $this->countryDetails;
    }

    /**
     * Sets a new countryDetails
     *
     * Lists the country code and associated name of the countries supported by
     *  the eBay system, regardless of the site specified in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>CountryDetails</b> is included as a <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are used in the request.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\CountryDetailsType[] $countryDetails
     * @return self
     */
    public function setCountryDetails(array $countryDetails)
    {
        $this->countryDetails = $countryDetails;
        return $this;
    }

    /**
     * Adds as currencyDetails
     *
     * Lists the currencies supported by the eBay system, regardless of the site
     *  specified in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>CurrencyDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are
     *  used in the request.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\CurrencyDetailsType $currencyDetails
     */
    public function addToCurrencyDetails(\Nogrod\eBaySDK\Trading\CurrencyDetailsType $currencyDetails)
    {
        $this->currencyDetails[] = $currencyDetails;
        return $this;
    }

    /**
     * isset currencyDetails
     *
     * Lists the currencies supported by the eBay system, regardless of the site
     *  specified in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>CurrencyDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are
     *  used in the request.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCurrencyDetails($index)
    {
        return isset($this->currencyDetails[$index]);
    }

    /**
     * unset currencyDetails
     *
     * Lists the currencies supported by the eBay system, regardless of the site
     *  specified in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>CurrencyDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are
     *  used in the request.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCurrencyDetails($index)
    {
        unset($this->currencyDetails[$index]);
    }

    /**
     * Gets as currencyDetails
     *
     * Lists the currencies supported by the eBay system, regardless of the site
     *  specified in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>CurrencyDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are
     *  used in the request.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\CurrencyDetailsType[]
     */
    public function getCurrencyDetails()
    {
        return $this->currencyDetails;
    }

    /**
     * Sets a new currencyDetails
     *
     * Lists the currencies supported by the eBay system, regardless of the site
     *  specified in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>CurrencyDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are
     *  used in the request.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\CurrencyDetailsType[] $currencyDetails
     * @return self
     */
    public function setCurrencyDetails(array $currencyDetails)
    {
        $this->currencyDetails = $currencyDetails;
        return $this;
    }

    /**
     * Adds as dispatchTimeMaxDetails
     *
     * A dispatch time specifies the maximum number of business days a seller commits to for shipping an item to domestic buyers after receiving a cleared payment. Returns all dispatch times in the system, regardless of the site specified in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>DispatchTimeMaxDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\DispatchTimeMaxDetailsType $dispatchTimeMaxDetails
     */
    public function addToDispatchTimeMaxDetails(\Nogrod\eBaySDK\Trading\DispatchTimeMaxDetailsType $dispatchTimeMaxDetails)
    {
        $this->dispatchTimeMaxDetails[] = $dispatchTimeMaxDetails;
        return $this;
    }

    /**
     * isset dispatchTimeMaxDetails
     *
     * A dispatch time specifies the maximum number of business days a seller commits to for shipping an item to domestic buyers after receiving a cleared payment. Returns all dispatch times in the system, regardless of the site specified in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>DispatchTimeMaxDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDispatchTimeMaxDetails($index)
    {
        return isset($this->dispatchTimeMaxDetails[$index]);
    }

    /**
     * unset dispatchTimeMaxDetails
     *
     * A dispatch time specifies the maximum number of business days a seller commits to for shipping an item to domestic buyers after receiving a cleared payment. Returns all dispatch times in the system, regardless of the site specified in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>DispatchTimeMaxDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDispatchTimeMaxDetails($index)
    {
        unset($this->dispatchTimeMaxDetails[$index]);
    }

    /**
     * Gets as dispatchTimeMaxDetails
     *
     * A dispatch time specifies the maximum number of business days a seller commits to for shipping an item to domestic buyers after receiving a cleared payment. Returns all dispatch times in the system, regardless of the site specified in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>DispatchTimeMaxDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\DispatchTimeMaxDetailsType[]
     */
    public function getDispatchTimeMaxDetails()
    {
        return $this->dispatchTimeMaxDetails;
    }

    /**
     * Sets a new dispatchTimeMaxDetails
     *
     * A dispatch time specifies the maximum number of business days a seller commits to for shipping an item to domestic buyers after receiving a cleared payment. Returns all dispatch times in the system, regardless of the site specified in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>DispatchTimeMaxDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\DispatchTimeMaxDetailsType[] $dispatchTimeMaxDetails
     * @return self
     */
    public function setDispatchTimeMaxDetails(array $dispatchTimeMaxDetails)
    {
        $this->dispatchTimeMaxDetails = $dispatchTimeMaxDetails;
        return $this;
    }

    /**
     * Adds as paymentOptionDetails
     *
     * Although the supported payment methods for the specified eBay site are returned, it is recommended that the seller use <b>GetCategoryFeatures</b> instead, and pass in <b>PaymentMethods</b> as a <b>FeatureID</b> value in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> This container is only returned if <b>PaymentOptionDetails</b> is included as a <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are used in the request.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\PaymentOptionDetailsType $paymentOptionDetails
     */
    public function addToPaymentOptionDetails(\Nogrod\eBaySDK\Trading\PaymentOptionDetailsType $paymentOptionDetails)
    {
        $this->paymentOptionDetails[] = $paymentOptionDetails;
        return $this;
    }

    /**
     * isset paymentOptionDetails
     *
     * Although the supported payment methods for the specified eBay site are returned, it is recommended that the seller use <b>GetCategoryFeatures</b> instead, and pass in <b>PaymentMethods</b> as a <b>FeatureID</b> value in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> This container is only returned if <b>PaymentOptionDetails</b> is included as a <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are used in the request.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentOptionDetails($index)
    {
        return isset($this->paymentOptionDetails[$index]);
    }

    /**
     * unset paymentOptionDetails
     *
     * Although the supported payment methods for the specified eBay site are returned, it is recommended that the seller use <b>GetCategoryFeatures</b> instead, and pass in <b>PaymentMethods</b> as a <b>FeatureID</b> value in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> This container is only returned if <b>PaymentOptionDetails</b> is included as a <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are used in the request.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentOptionDetails($index)
    {
        unset($this->paymentOptionDetails[$index]);
    }

    /**
     * Gets as paymentOptionDetails
     *
     * Although the supported payment methods for the specified eBay site are returned, it is recommended that the seller use <b>GetCategoryFeatures</b> instead, and pass in <b>PaymentMethods</b> as a <b>FeatureID</b> value in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> This container is only returned if <b>PaymentOptionDetails</b> is included as a <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are used in the request.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\PaymentOptionDetailsType[]
     */
    public function getPaymentOptionDetails()
    {
        return $this->paymentOptionDetails;
    }

    /**
     * Sets a new paymentOptionDetails
     *
     * Although the supported payment methods for the specified eBay site are returned, it is recommended that the seller use <b>GetCategoryFeatures</b> instead, and pass in <b>PaymentMethods</b> as a <b>FeatureID</b> value in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> This container is only returned if <b>PaymentOptionDetails</b> is included as a <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are used in the request.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\PaymentOptionDetailsType[] $paymentOptionDetails
     * @return self
     */
    public function setPaymentOptionDetails(array $paymentOptionDetails)
    {
        $this->paymentOptionDetails = $paymentOptionDetails;
        return $this;
    }

    /**
     * Adds as regionDetails
     *
     * Lists the cities and other domestic regions for the specified site's country.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>RegionDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are
     *  used in the request.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\RegionDetailsType $regionDetails
     */
    public function addToRegionDetails(\Nogrod\eBaySDK\Trading\RegionDetailsType $regionDetails)
    {
        $this->regionDetails[] = $regionDetails;
        return $this;
    }

    /**
     * isset regionDetails
     *
     * Lists the cities and other domestic regions for the specified site's country.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>RegionDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are
     *  used in the request.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRegionDetails($index)
    {
        return isset($this->regionDetails[$index]);
    }

    /**
     * unset regionDetails
     *
     * Lists the cities and other domestic regions for the specified site's country.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>RegionDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are
     *  used in the request.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRegionDetails($index)
    {
        unset($this->regionDetails[$index]);
    }

    /**
     * Gets as regionDetails
     *
     * Lists the cities and other domestic regions for the specified site's country.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>RegionDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are
     *  used in the request.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\RegionDetailsType[]
     */
    public function getRegionDetails()
    {
        return $this->regionDetails;
    }

    /**
     * Sets a new regionDetails
     *
     * Lists the cities and other domestic regions for the specified site's country.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>RegionDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are
     *  used in the request.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\RegionDetailsType[] $regionDetails
     * @return self
     */
    public function setRegionDetails(array $regionDetails)
    {
        $this->regionDetails = $regionDetails;
        return $this;
    }

    /**
     * Adds as shippingLocationDetails
     *
     * Lists the worldwide regions that can be set as shipping locations from the specified eBay site.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ShippingLocationDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ShippingLocationDetailsType $shippingLocationDetails
     */
    public function addToShippingLocationDetails(\Nogrod\eBaySDK\Trading\ShippingLocationDetailsType $shippingLocationDetails)
    {
        $this->shippingLocationDetails[] = $shippingLocationDetails;
        return $this;
    }

    /**
     * isset shippingLocationDetails
     *
     * Lists the worldwide regions that can be set as shipping locations from the specified eBay site.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ShippingLocationDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShippingLocationDetails($index)
    {
        return isset($this->shippingLocationDetails[$index]);
    }

    /**
     * unset shippingLocationDetails
     *
     * Lists the worldwide regions that can be set as shipping locations from the specified eBay site.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ShippingLocationDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShippingLocationDetails($index)
    {
        unset($this->shippingLocationDetails[$index]);
    }

    /**
     * Gets as shippingLocationDetails
     *
     * Lists the worldwide regions that can be set as shipping locations from the specified eBay site.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ShippingLocationDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\ShippingLocationDetailsType[]
     */
    public function getShippingLocationDetails()
    {
        return $this->shippingLocationDetails;
    }

    /**
     * Sets a new shippingLocationDetails
     *
     * Lists the worldwide regions that can be set as shipping locations from the specified eBay site.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ShippingLocationDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\ShippingLocationDetailsType[] $shippingLocationDetails
     * @return self
     */
    public function setShippingLocationDetails(array $shippingLocationDetails)
    {
        $this->shippingLocationDetails = $shippingLocationDetails;
        return $this;
    }

    /**
     * Adds as shippingServiceDetails
     *
     * Lists the shipping services supported by the specified eBay site. Returns only the shipping services that are applicable to the site specified in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ShippingServiceDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ShippingServiceDetailsType $shippingServiceDetails
     */
    public function addToShippingServiceDetails(\Nogrod\eBaySDK\Trading\ShippingServiceDetailsType $shippingServiceDetails)
    {
        $this->shippingServiceDetails[] = $shippingServiceDetails;
        return $this;
    }

    /**
     * isset shippingServiceDetails
     *
     * Lists the shipping services supported by the specified eBay site. Returns only the shipping services that are applicable to the site specified in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ShippingServiceDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShippingServiceDetails($index)
    {
        return isset($this->shippingServiceDetails[$index]);
    }

    /**
     * unset shippingServiceDetails
     *
     * Lists the shipping services supported by the specified eBay site. Returns only the shipping services that are applicable to the site specified in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ShippingServiceDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShippingServiceDetails($index)
    {
        unset($this->shippingServiceDetails[$index]);
    }

    /**
     * Gets as shippingServiceDetails
     *
     * Lists the shipping services supported by the specified eBay site. Returns only the shipping services that are applicable to the site specified in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ShippingServiceDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\ShippingServiceDetailsType[]
     */
    public function getShippingServiceDetails()
    {
        return $this->shippingServiceDetails;
    }

    /**
     * Sets a new shippingServiceDetails
     *
     * Lists the shipping services supported by the specified eBay site. Returns only the shipping services that are applicable to the site specified in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ShippingServiceDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\ShippingServiceDetailsType[] $shippingServiceDetails
     * @return self
     */
    public function setShippingServiceDetails(array $shippingServiceDetails)
    {
        $this->shippingServiceDetails = $shippingServiceDetails;
        return $this;
    }

    /**
     * Adds as siteDetails
     *
     * Lists all available eBay sites and their associated <b>SiteID</b> numbers.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>SiteDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\SiteDetailsType $siteDetails
     */
    public function addToSiteDetails(\Nogrod\eBaySDK\Trading\SiteDetailsType $siteDetails)
    {
        $this->siteDetails[] = $siteDetails;
        return $this;
    }

    /**
     * isset siteDetails
     *
     * Lists all available eBay sites and their associated <b>SiteID</b> numbers.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>SiteDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSiteDetails($index)
    {
        return isset($this->siteDetails[$index]);
    }

    /**
     * unset siteDetails
     *
     * Lists all available eBay sites and their associated <b>SiteID</b> numbers.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>SiteDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSiteDetails($index)
    {
        unset($this->siteDetails[$index]);
    }

    /**
     * Gets as siteDetails
     *
     * Lists all available eBay sites and their associated <b>SiteID</b> numbers.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>SiteDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\SiteDetailsType[]
     */
    public function getSiteDetails()
    {
        return $this->siteDetails;
    }

    /**
     * Sets a new siteDetails
     *
     * Lists all available eBay sites and their associated <b>SiteID</b> numbers.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>SiteDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\SiteDetailsType[] $siteDetails
     * @return self
     */
    public function setSiteDetails(array $siteDetails)
    {
        $this->siteDetails = $siteDetails;
        return $this;
    }

    /**
     * Adds as taxJurisdiction
     *
     * Details the different tax jurisdictions or tax regions applicable to the
     *  site specified in the request. Note that tax jurisdictions are only applicable to the following eBay sites: eBay US (Site ID 0), eBay Canada (Site ID 2), eBay Canada (French) (Site ID 210), and eBay India (Site ID 203). An empty response will be returned for any other Site ID that is passed in the HTTP header.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>TaxJurisdiction</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\TaxJurisdictionType $taxJurisdiction
     */
    public function addToTaxJurisdiction(\Nogrod\eBaySDK\Trading\TaxJurisdictionType $taxJurisdiction)
    {
        $this->taxJurisdiction[] = $taxJurisdiction;
        return $this;
    }

    /**
     * isset taxJurisdiction
     *
     * Details the different tax jurisdictions or tax regions applicable to the
     *  site specified in the request. Note that tax jurisdictions are only applicable to the following eBay sites: eBay US (Site ID 0), eBay Canada (Site ID 2), eBay Canada (French) (Site ID 210), and eBay India (Site ID 203). An empty response will be returned for any other Site ID that is passed in the HTTP header.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>TaxJurisdiction</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxJurisdiction($index)
    {
        return isset($this->taxJurisdiction[$index]);
    }

    /**
     * unset taxJurisdiction
     *
     * Details the different tax jurisdictions or tax regions applicable to the
     *  site specified in the request. Note that tax jurisdictions are only applicable to the following eBay sites: eBay US (Site ID 0), eBay Canada (Site ID 2), eBay Canada (French) (Site ID 210), and eBay India (Site ID 203). An empty response will be returned for any other Site ID that is passed in the HTTP header.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>TaxJurisdiction</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxJurisdiction($index)
    {
        unset($this->taxJurisdiction[$index]);
    }

    /**
     * Gets as taxJurisdiction
     *
     * Details the different tax jurisdictions or tax regions applicable to the
     *  site specified in the request. Note that tax jurisdictions are only applicable to the following eBay sites: eBay US (Site ID 0), eBay Canada (Site ID 2), eBay Canada (French) (Site ID 210), and eBay India (Site ID 203). An empty response will be returned for any other Site ID that is passed in the HTTP header.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>TaxJurisdiction</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\TaxJurisdictionType[]
     */
    public function getTaxJurisdiction()
    {
        return $this->taxJurisdiction;
    }

    /**
     * Sets a new taxJurisdiction
     *
     * Details the different tax jurisdictions or tax regions applicable to the
     *  site specified in the request. Note that tax jurisdictions are only applicable to the following eBay sites: eBay US (Site ID 0), eBay Canada (Site ID 2), eBay Canada (French) (Site ID 210), and eBay India (Site ID 203). An empty response will be returned for any other Site ID that is passed in the HTTP header.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>TaxJurisdiction</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\TaxJurisdictionType[] $taxJurisdiction
     * @return self
     */
    public function setTaxJurisdiction(array $taxJurisdiction)
    {
        $this->taxJurisdiction = $taxJurisdiction;
        return $this;
    }

    /**
     * Adds as uRLDetails
     *
     * Lists eBay URLs that are applicable to the site specified in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>URLDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\URLDetailsType $uRLDetails
     */
    public function addToURLDetails(\Nogrod\eBaySDK\Trading\URLDetailsType $uRLDetails)
    {
        $this->uRLDetails[] = $uRLDetails;
        return $this;
    }

    /**
     * isset uRLDetails
     *
     * Lists eBay URLs that are applicable to the site specified in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>URLDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetURLDetails($index)
    {
        return isset($this->uRLDetails[$index]);
    }

    /**
     * unset uRLDetails
     *
     * Lists eBay URLs that are applicable to the site specified in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>URLDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetURLDetails($index)
    {
        unset($this->uRLDetails[$index]);
    }

    /**
     * Gets as uRLDetails
     *
     * Lists eBay URLs that are applicable to the site specified in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>URLDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\URLDetailsType[]
     */
    public function getURLDetails()
    {
        return $this->uRLDetails;
    }

    /**
     * Sets a new uRLDetails
     *
     * Lists eBay URLs that are applicable to the site specified in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>URLDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\URLDetailsType[] $uRLDetails
     * @return self
     */
    public function setURLDetails(array $uRLDetails)
    {
        $this->uRLDetails = $uRLDetails;
        return $this;
    }

    /**
     * Adds as timeZoneDetails
     *
     * Lists the details of the time zones supported by the eBay system.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>TimeZoneDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\TimeZoneDetailsType $timeZoneDetails
     */
    public function addToTimeZoneDetails(\Nogrod\eBaySDK\Trading\TimeZoneDetailsType $timeZoneDetails)
    {
        $this->timeZoneDetails[] = $timeZoneDetails;
        return $this;
    }

    /**
     * isset timeZoneDetails
     *
     * Lists the details of the time zones supported by the eBay system.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>TimeZoneDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTimeZoneDetails($index)
    {
        return isset($this->timeZoneDetails[$index]);
    }

    /**
     * unset timeZoneDetails
     *
     * Lists the details of the time zones supported by the eBay system.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>TimeZoneDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTimeZoneDetails($index)
    {
        unset($this->timeZoneDetails[$index]);
    }

    /**
     * Gets as timeZoneDetails
     *
     * Lists the details of the time zones supported by the eBay system.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>TimeZoneDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\TimeZoneDetailsType[]
     */
    public function getTimeZoneDetails()
    {
        return $this->timeZoneDetails;
    }

    /**
     * Sets a new timeZoneDetails
     *
     * Lists the details of the time zones supported by the eBay system.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>TimeZoneDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\TimeZoneDetailsType[] $timeZoneDetails
     * @return self
     */
    public function setTimeZoneDetails(array $timeZoneDetails)
    {
        $this->timeZoneDetails = $timeZoneDetails;
        return $this;
    }

    /**
     * Adds as itemSpecificDetails
     *
     * Lists the site's maximum thresholds for specifying Item Specifics.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ItemSpecificDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ItemSpecificDetailsType $itemSpecificDetails
     */
    public function addToItemSpecificDetails(\Nogrod\eBaySDK\Trading\ItemSpecificDetailsType $itemSpecificDetails)
    {
        $this->itemSpecificDetails[] = $itemSpecificDetails;
        return $this;
    }

    /**
     * isset itemSpecificDetails
     *
     * Lists the site's maximum thresholds for specifying Item Specifics.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ItemSpecificDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemSpecificDetails($index)
    {
        return isset($this->itemSpecificDetails[$index]);
    }

    /**
     * unset itemSpecificDetails
     *
     * Lists the site's maximum thresholds for specifying Item Specifics.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ItemSpecificDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemSpecificDetails($index)
    {
        unset($this->itemSpecificDetails[$index]);
    }

    /**
     * Gets as itemSpecificDetails
     *
     * Lists the site's maximum thresholds for specifying Item Specifics.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ItemSpecificDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\ItemSpecificDetailsType[]
     */
    public function getItemSpecificDetails()
    {
        return $this->itemSpecificDetails;
    }

    /**
     * Sets a new itemSpecificDetails
     *
     * Lists the site's maximum thresholds for specifying Item Specifics.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ItemSpecificDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\ItemSpecificDetailsType[] $itemSpecificDetails
     * @return self
     */
    public function setItemSpecificDetails(array $itemSpecificDetails)
    {
        $this->itemSpecificDetails = $itemSpecificDetails;
        return $this;
    }

    /**
     * Adds as unitOfMeasurementDetails
     *
     * Units of measurement are no longer returned in GeteBayDetails, so this container is no longer applicable.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\UnitOfMeasurementDetailsType $unitOfMeasurementDetails
     */
    public function addToUnitOfMeasurementDetails(\Nogrod\eBaySDK\Trading\UnitOfMeasurementDetailsType $unitOfMeasurementDetails)
    {
        $this->unitOfMeasurementDetails[] = $unitOfMeasurementDetails;
        return $this;
    }

    /**
     * isset unitOfMeasurementDetails
     *
     * Units of measurement are no longer returned in GeteBayDetails, so this container is no longer applicable.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUnitOfMeasurementDetails($index)
    {
        return isset($this->unitOfMeasurementDetails[$index]);
    }

    /**
     * unset unitOfMeasurementDetails
     *
     * Units of measurement are no longer returned in GeteBayDetails, so this container is no longer applicable.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUnitOfMeasurementDetails($index)
    {
        unset($this->unitOfMeasurementDetails[$index]);
    }

    /**
     * Gets as unitOfMeasurementDetails
     *
     * Units of measurement are no longer returned in GeteBayDetails, so this container is no longer applicable.
     *
     * @return \Nogrod\eBaySDK\Trading\UnitOfMeasurementDetailsType[]
     */
    public function getUnitOfMeasurementDetails()
    {
        return $this->unitOfMeasurementDetails;
    }

    /**
     * Sets a new unitOfMeasurementDetails
     *
     * Units of measurement are no longer returned in GeteBayDetails, so this container is no longer applicable.
     *
     * @param \Nogrod\eBaySDK\Trading\UnitOfMeasurementDetailsType[] $unitOfMeasurementDetails
     * @return self
     */
    public function setUnitOfMeasurementDetails(array $unitOfMeasurementDetails)
    {
        $this->unitOfMeasurementDetails = $unitOfMeasurementDetails;
        return $this;
    }

    /**
     * Adds as regionOfOriginDetails
     *
     * Lists the worldwide regions and individual countries that can be set as shipping locations from the specified eBay site.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>RegionOfOriginDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\RegionOfOriginDetailsType $regionOfOriginDetails
     */
    public function addToRegionOfOriginDetails(\Nogrod\eBaySDK\Trading\RegionOfOriginDetailsType $regionOfOriginDetails)
    {
        $this->regionOfOriginDetails[] = $regionOfOriginDetails;
        return $this;
    }

    /**
     * isset regionOfOriginDetails
     *
     * Lists the worldwide regions and individual countries that can be set as shipping locations from the specified eBay site.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>RegionOfOriginDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRegionOfOriginDetails($index)
    {
        return isset($this->regionOfOriginDetails[$index]);
    }

    /**
     * unset regionOfOriginDetails
     *
     * Lists the worldwide regions and individual countries that can be set as shipping locations from the specified eBay site.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>RegionOfOriginDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRegionOfOriginDetails($index)
    {
        unset($this->regionOfOriginDetails[$index]);
    }

    /**
     * Gets as regionOfOriginDetails
     *
     * Lists the worldwide regions and individual countries that can be set as shipping locations from the specified eBay site.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>RegionOfOriginDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\RegionOfOriginDetailsType[]
     */
    public function getRegionOfOriginDetails()
    {
        return $this->regionOfOriginDetails;
    }

    /**
     * Sets a new regionOfOriginDetails
     *
     * Lists the worldwide regions and individual countries that can be set as shipping locations from the specified eBay site.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>RegionOfOriginDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\RegionOfOriginDetailsType[] $regionOfOriginDetails
     * @return self
     */
    public function setRegionOfOriginDetails(array $regionOfOriginDetails)
    {
        $this->regionOfOriginDetails = $regionOfOriginDetails;
        return $this;
    }

    /**
     * Adds as shippingPackageDetails
     *
     * Lists the various shipping packages supported by the specified site.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ShippingPackageDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ShippingPackageDetailsType $shippingPackageDetails
     */
    public function addToShippingPackageDetails(\Nogrod\eBaySDK\Trading\ShippingPackageDetailsType $shippingPackageDetails)
    {
        $this->shippingPackageDetails[] = $shippingPackageDetails;
        return $this;
    }

    /**
     * isset shippingPackageDetails
     *
     * Lists the various shipping packages supported by the specified site.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ShippingPackageDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShippingPackageDetails($index)
    {
        return isset($this->shippingPackageDetails[$index]);
    }

    /**
     * unset shippingPackageDetails
     *
     * Lists the various shipping packages supported by the specified site.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ShippingPackageDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShippingPackageDetails($index)
    {
        unset($this->shippingPackageDetails[$index]);
    }

    /**
     * Gets as shippingPackageDetails
     *
     * Lists the various shipping packages supported by the specified site.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ShippingPackageDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\ShippingPackageDetailsType[]
     */
    public function getShippingPackageDetails()
    {
        return $this->shippingPackageDetails;
    }

    /**
     * Sets a new shippingPackageDetails
     *
     * Lists the various shipping packages supported by the specified site.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ShippingPackageDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\ShippingPackageDetailsType[] $shippingPackageDetails
     * @return self
     */
    public function setShippingPackageDetails(array $shippingPackageDetails)
    {
        $this->shippingPackageDetails = $shippingPackageDetails;
        return $this;
    }

    /**
     * Adds as shippingCarrierDetails
     *
     * Lists the shipping carriers supported by the specified site.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ShippingCarrierDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ShippingCarrierDetailsType $shippingCarrierDetails
     */
    public function addToShippingCarrierDetails(\Nogrod\eBaySDK\Trading\ShippingCarrierDetailsType $shippingCarrierDetails)
    {
        $this->shippingCarrierDetails[] = $shippingCarrierDetails;
        return $this;
    }

    /**
     * isset shippingCarrierDetails
     *
     * Lists the shipping carriers supported by the specified site.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ShippingCarrierDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShippingCarrierDetails($index)
    {
        return isset($this->shippingCarrierDetails[$index]);
    }

    /**
     * unset shippingCarrierDetails
     *
     * Lists the shipping carriers supported by the specified site.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ShippingCarrierDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShippingCarrierDetails($index)
    {
        unset($this->shippingCarrierDetails[$index]);
    }

    /**
     * Gets as shippingCarrierDetails
     *
     * Lists the shipping carriers supported by the specified site.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ShippingCarrierDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\ShippingCarrierDetailsType[]
     */
    public function getShippingCarrierDetails()
    {
        return $this->shippingCarrierDetails;
    }

    /**
     * Sets a new shippingCarrierDetails
     *
     * Lists the shipping carriers supported by the specified site.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ShippingCarrierDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\ShippingCarrierDetailsType[] $shippingCarrierDetails
     * @return self
     */
    public function setShippingCarrierDetails(array $shippingCarrierDetails)
    {
        $this->shippingCarrierDetails = $shippingCarrierDetails;
        return $this;
    }

    /**
     * Gets as returnPolicyDetails
     *
     * Lists the supported values that may be used for return policies on the specified eBay site, such as the return period, supported restocking fees, and refund options.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ReturnPolicyDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *  <span class="tablenote"><b>Note: </b>
     *  This container has been staged for deprecation. Although domestic return policy metadata is still getting returned at the moment, it is recommended that users start making plans to use the <b>GetCategoryFeatures</b> call instead to retrieve category-level, domestic return policy metadata.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\ReturnPolicyDetailsType
     */
    public function getReturnPolicyDetails()
    {
        return $this->returnPolicyDetails;
    }

    /**
     * Sets a new returnPolicyDetails
     *
     * Lists the supported values that may be used for return policies on the specified eBay site, such as the return period, supported restocking fees, and refund options.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ReturnPolicyDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *  <span class="tablenote"><b>Note: </b>
     *  This container has been staged for deprecation. Although domestic return policy metadata is still getting returned at the moment, it is recommended that users start making plans to use the <b>GetCategoryFeatures</b> call instead to retrieve category-level, domestic return policy metadata.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\ReturnPolicyDetailsType $returnPolicyDetails
     * @return self
     */
    public function setReturnPolicyDetails(\Nogrod\eBaySDK\Trading\ReturnPolicyDetailsType $returnPolicyDetails)
    {
        $this->returnPolicyDetails = $returnPolicyDetails;
        return $this;
    }

    /**
     * Gets as internationalReturnPolicyDetails
     *
     * <span class="tablenote"><b>Note: </b>
     *  This container has been deprecated. The <b>GetCategoryFeatures</b> call must be used instead to retrieve category-level, international return policy metadata.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\ReturnPolicyDetailsType
     */
    public function getInternationalReturnPolicyDetails()
    {
        return $this->internationalReturnPolicyDetails;
    }

    /**
     * Sets a new internationalReturnPolicyDetails
     *
     * <span class="tablenote"><b>Note: </b>
     *  This container has been deprecated. The <b>GetCategoryFeatures</b> call must be used instead to retrieve category-level, international return policy metadata.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\ReturnPolicyDetailsType $internationalReturnPolicyDetails
     * @return self
     */
    public function setInternationalReturnPolicyDetails(\Nogrod\eBaySDK\Trading\ReturnPolicyDetailsType $internationalReturnPolicyDetails)
    {
        $this->internationalReturnPolicyDetails = $internationalReturnPolicyDetails;
        return $this;
    }

    /**
     * Adds as listingStartPriceDetails
     *
     * Lists the minimum starting prices for the supported types of eBay listings.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ListingStartPriceDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ListingStartPriceDetailsType $listingStartPriceDetails
     */
    public function addToListingStartPriceDetails(\Nogrod\eBaySDK\Trading\ListingStartPriceDetailsType $listingStartPriceDetails)
    {
        $this->listingStartPriceDetails[] = $listingStartPriceDetails;
        return $this;
    }

    /**
     * isset listingStartPriceDetails
     *
     * Lists the minimum starting prices for the supported types of eBay listings.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ListingStartPriceDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetListingStartPriceDetails($index)
    {
        return isset($this->listingStartPriceDetails[$index]);
    }

    /**
     * unset listingStartPriceDetails
     *
     * Lists the minimum starting prices for the supported types of eBay listings.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ListingStartPriceDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetListingStartPriceDetails($index)
    {
        unset($this->listingStartPriceDetails[$index]);
    }

    /**
     * Gets as listingStartPriceDetails
     *
     * Lists the minimum starting prices for the supported types of eBay listings.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ListingStartPriceDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\ListingStartPriceDetailsType[]
     */
    public function getListingStartPriceDetails()
    {
        return $this->listingStartPriceDetails;
    }

    /**
     * Sets a new listingStartPriceDetails
     *
     * Lists the minimum starting prices for the supported types of eBay listings.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ListingStartPriceDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\ListingStartPriceDetailsType[] $listingStartPriceDetails
     * @return self
     */
    public function setListingStartPriceDetails(array $listingStartPriceDetails)
    {
        $this->listingStartPriceDetails = $listingStartPriceDetails;
        return $this;
    }

    /**
     * Adds as buyerRequirementDetails
     *
     * Lists the threshold values that can be passed in through the <b>BuyerRequirementDetails</b> container in the Add/Revise/Relist API calls. Buyer Requirements allow the seller to block buyers who have unpaid item defects, policy violations, low Feedback scores, and/or other undesirable qualities/statistics. Buyer Requirements are set at the seller's account level, but by using a <b>BuyerRequirementDetails</b> container in an Add/Revise/Relist API call, the values in that container will override values set at the account level.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>BuyerRequirementDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\SiteBuyerRequirementDetailsType $buyerRequirementDetails
     */
    public function addToBuyerRequirementDetails(\Nogrod\eBaySDK\Trading\SiteBuyerRequirementDetailsType $buyerRequirementDetails)
    {
        $this->buyerRequirementDetails[] = $buyerRequirementDetails;
        return $this;
    }

    /**
     * isset buyerRequirementDetails
     *
     * Lists the threshold values that can be passed in through the <b>BuyerRequirementDetails</b> container in the Add/Revise/Relist API calls. Buyer Requirements allow the seller to block buyers who have unpaid item defects, policy violations, low Feedback scores, and/or other undesirable qualities/statistics. Buyer Requirements are set at the seller's account level, but by using a <b>BuyerRequirementDetails</b> container in an Add/Revise/Relist API call, the values in that container will override values set at the account level.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>BuyerRequirementDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBuyerRequirementDetails($index)
    {
        return isset($this->buyerRequirementDetails[$index]);
    }

    /**
     * unset buyerRequirementDetails
     *
     * Lists the threshold values that can be passed in through the <b>BuyerRequirementDetails</b> container in the Add/Revise/Relist API calls. Buyer Requirements allow the seller to block buyers who have unpaid item defects, policy violations, low Feedback scores, and/or other undesirable qualities/statistics. Buyer Requirements are set at the seller's account level, but by using a <b>BuyerRequirementDetails</b> container in an Add/Revise/Relist API call, the values in that container will override values set at the account level.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>BuyerRequirementDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBuyerRequirementDetails($index)
    {
        unset($this->buyerRequirementDetails[$index]);
    }

    /**
     * Gets as buyerRequirementDetails
     *
     * Lists the threshold values that can be passed in through the <b>BuyerRequirementDetails</b> container in the Add/Revise/Relist API calls. Buyer Requirements allow the seller to block buyers who have unpaid item defects, policy violations, low Feedback scores, and/or other undesirable qualities/statistics. Buyer Requirements are set at the seller's account level, but by using a <b>BuyerRequirementDetails</b> container in an Add/Revise/Relist API call, the values in that container will override values set at the account level.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>BuyerRequirementDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\SiteBuyerRequirementDetailsType[]
     */
    public function getBuyerRequirementDetails()
    {
        return $this->buyerRequirementDetails;
    }

    /**
     * Sets a new buyerRequirementDetails
     *
     * Lists the threshold values that can be passed in through the <b>BuyerRequirementDetails</b> container in the Add/Revise/Relist API calls. Buyer Requirements allow the seller to block buyers who have unpaid item defects, policy violations, low Feedback scores, and/or other undesirable qualities/statistics. Buyer Requirements are set at the seller's account level, but by using a <b>BuyerRequirementDetails</b> container in an Add/Revise/Relist API call, the values in that container will override values set at the account level.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>BuyerRequirementDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\SiteBuyerRequirementDetailsType[] $buyerRequirementDetails
     * @return self
     */
    public function setBuyerRequirementDetails(array $buyerRequirementDetails)
    {
        $this->buyerRequirementDetails = $buyerRequirementDetails;
        return $this;
    }

    /**
     * Adds as listingFeatureDetails
     *
     * Details the listing features available for the eBay site specified in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ListingFeatureDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ListingFeatureDetailsType $listingFeatureDetails
     */
    public function addToListingFeatureDetails(\Nogrod\eBaySDK\Trading\ListingFeatureDetailsType $listingFeatureDetails)
    {
        $this->listingFeatureDetails[] = $listingFeatureDetails;
        return $this;
    }

    /**
     * isset listingFeatureDetails
     *
     * Details the listing features available for the eBay site specified in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ListingFeatureDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetListingFeatureDetails($index)
    {
        return isset($this->listingFeatureDetails[$index]);
    }

    /**
     * unset listingFeatureDetails
     *
     * Details the listing features available for the eBay site specified in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ListingFeatureDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetListingFeatureDetails($index)
    {
        unset($this->listingFeatureDetails[$index]);
    }

    /**
     * Gets as listingFeatureDetails
     *
     * Details the listing features available for the eBay site specified in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ListingFeatureDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\ListingFeatureDetailsType[]
     */
    public function getListingFeatureDetails()
    {
        return $this->listingFeatureDetails;
    }

    /**
     * Sets a new listingFeatureDetails
     *
     * Details the listing features available for the eBay site specified in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ListingFeatureDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\ListingFeatureDetailsType[] $listingFeatureDetails
     * @return self
     */
    public function setListingFeatureDetails(array $listingFeatureDetails)
    {
        $this->listingFeatureDetails = $listingFeatureDetails;
        return $this;
    }

    /**
     * Gets as variationDetails
     *
     * Site-level validation rules for multiple-variation listings (for example, the maximum number of variations per listing). Use <b>GetCategoryFeatures</b> to determine which categories on a site support variations.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>VariationDetails</b> is included as a <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are used in the request.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\VariationDetailsType
     */
    public function getVariationDetails()
    {
        return $this->variationDetails;
    }

    /**
     * Sets a new variationDetails
     *
     * Site-level validation rules for multiple-variation listings (for example, the maximum number of variations per listing). Use <b>GetCategoryFeatures</b> to determine which categories on a site support variations.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>VariationDetails</b> is included as a <b>DetailName</b> filter in the request, or if no <b>DetailName</b> filters are used in the request.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\VariationDetailsType $variationDetails
     * @return self
     */
    public function setVariationDetails(\Nogrod\eBaySDK\Trading\VariationDetailsType $variationDetails)
    {
        $this->variationDetails = $variationDetails;
        return $this;
    }

    /**
     * Adds as excludeShippingLocationDetails
     *
     * Lists the locations supported by the <b>ExcludeShipToLocation</b> feature. These are
     *  locations that a seller can list as areas where they will not ship an item.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ExcludeShippingLocationDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ExcludeShippingLocationDetailsType $excludeShippingLocationDetails
     */
    public function addToExcludeShippingLocationDetails(\Nogrod\eBaySDK\Trading\ExcludeShippingLocationDetailsType $excludeShippingLocationDetails)
    {
        $this->excludeShippingLocationDetails[] = $excludeShippingLocationDetails;
        return $this;
    }

    /**
     * isset excludeShippingLocationDetails
     *
     * Lists the locations supported by the <b>ExcludeShipToLocation</b> feature. These are
     *  locations that a seller can list as areas where they will not ship an item.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ExcludeShippingLocationDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExcludeShippingLocationDetails($index)
    {
        return isset($this->excludeShippingLocationDetails[$index]);
    }

    /**
     * unset excludeShippingLocationDetails
     *
     * Lists the locations supported by the <b>ExcludeShipToLocation</b> feature. These are
     *  locations that a seller can list as areas where they will not ship an item.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ExcludeShippingLocationDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExcludeShippingLocationDetails($index)
    {
        unset($this->excludeShippingLocationDetails[$index]);
    }

    /**
     * Gets as excludeShippingLocationDetails
     *
     * Lists the locations supported by the <b>ExcludeShipToLocation</b> feature. These are
     *  locations that a seller can list as areas where they will not ship an item.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ExcludeShippingLocationDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\ExcludeShippingLocationDetailsType[]
     */
    public function getExcludeShippingLocationDetails()
    {
        return $this->excludeShippingLocationDetails;
    }

    /**
     * Sets a new excludeShippingLocationDetails
     *
     * Lists the locations supported by the <b>ExcludeShipToLocation</b> feature. These are
     *  locations that a seller can list as areas where they will not ship an item.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ExcludeShippingLocationDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\ExcludeShippingLocationDetailsType[] $excludeShippingLocationDetails
     * @return self
     */
    public function setExcludeShippingLocationDetails(array $excludeShippingLocationDetails)
    {
        $this->excludeShippingLocationDetails = $excludeShippingLocationDetails;
        return $this;
    }

    /**
     * Gets as updateTime
     *
     * The time of the most recent modification to any feature detail. If specific
     *  feature details are passed in the request, gives the most recent modification time
     *  of those feature details.
     *
     * @return \DateTime
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * Sets a new updateTime
     *
     * The time of the most recent modification to any feature detail. If specific
     *  feature details are passed in the request, gives the most recent modification time
     *  of those feature details.
     *
     * @param \DateTime $updateTime
     * @return self
     */
    public function setUpdateTime(\DateTime $updateTime)
    {
        $this->updateTime = $updateTime;
        return $this;
    }

    /**
     * Adds as recoupmentPolicyDetails
     *
     * Details the recoupment policies for the site specified in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>RecoupmentPolicyDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\RecoupmentPolicyDetailsType $recoupmentPolicyDetails
     */
    public function addToRecoupmentPolicyDetails(\Nogrod\eBaySDK\Trading\RecoupmentPolicyDetailsType $recoupmentPolicyDetails)
    {
        $this->recoupmentPolicyDetails[] = $recoupmentPolicyDetails;
        return $this;
    }

    /**
     * isset recoupmentPolicyDetails
     *
     * Details the recoupment policies for the site specified in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>RecoupmentPolicyDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRecoupmentPolicyDetails($index)
    {
        return isset($this->recoupmentPolicyDetails[$index]);
    }

    /**
     * unset recoupmentPolicyDetails
     *
     * Details the recoupment policies for the site specified in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>RecoupmentPolicyDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRecoupmentPolicyDetails($index)
    {
        unset($this->recoupmentPolicyDetails[$index]);
    }

    /**
     * Gets as recoupmentPolicyDetails
     *
     * Details the recoupment policies for the site specified in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>RecoupmentPolicyDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\RecoupmentPolicyDetailsType[]
     */
    public function getRecoupmentPolicyDetails()
    {
        return $this->recoupmentPolicyDetails;
    }

    /**
     * Sets a new recoupmentPolicyDetails
     *
     * Details the recoupment policies for the site specified in the request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>RecoupmentPolicyDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\RecoupmentPolicyDetailsType[] $recoupmentPolicyDetails
     * @return self
     */
    public function setRecoupmentPolicyDetails(array $recoupmentPolicyDetails)
    {
        $this->recoupmentPolicyDetails = $recoupmentPolicyDetails;
        return $this;
    }

    /**
     * Adds as shippingCategoryDetails
     *
     * A shipping service category supported for the site.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ShippingCategoryDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *  Each shipping service supported for a site is automatically categorized by eBay into one of the
     *  shipping categories available for that site depending on how the shipping service shipping time
     *  aligns with the shipping times specified by eBay for each category.
     *  <br><br>
     *  Notice that you cannot specify a <b>ShippingCategory</b>
     *  as an input to any API call - eBay does this categorizing automatically. <b>ShippingCategory</b> is read-only data
     *  that is returned in the <b>ShippingServiceDetails</b> container. One possible use of this data is to segregate shipping
     *  services by <b>ShippingCategory</b> in a pick list. (For an example of this, see the Services pulldown menu in the
     *  Give buyers shipping details form in the eBay Sell Your Item flow.)
     *  <br><br>
     *  One way to populate the picklist would be to call <b>GeteBayDetails</b>
     *  with <b>DetailName</b> set to <b>ShippingServiceDetails</b>.
     *  Then sort these results by <b>ShippingCategory</b> and populate the picklist.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ShippingCategoryDetailsType $shippingCategoryDetails
     */
    public function addToShippingCategoryDetails(\Nogrod\eBaySDK\Trading\ShippingCategoryDetailsType $shippingCategoryDetails)
    {
        $this->shippingCategoryDetails[] = $shippingCategoryDetails;
        return $this;
    }

    /**
     * isset shippingCategoryDetails
     *
     * A shipping service category supported for the site.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ShippingCategoryDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *  Each shipping service supported for a site is automatically categorized by eBay into one of the
     *  shipping categories available for that site depending on how the shipping service shipping time
     *  aligns with the shipping times specified by eBay for each category.
     *  <br><br>
     *  Notice that you cannot specify a <b>ShippingCategory</b>
     *  as an input to any API call - eBay does this categorizing automatically. <b>ShippingCategory</b> is read-only data
     *  that is returned in the <b>ShippingServiceDetails</b> container. One possible use of this data is to segregate shipping
     *  services by <b>ShippingCategory</b> in a pick list. (For an example of this, see the Services pulldown menu in the
     *  Give buyers shipping details form in the eBay Sell Your Item flow.)
     *  <br><br>
     *  One way to populate the picklist would be to call <b>GeteBayDetails</b>
     *  with <b>DetailName</b> set to <b>ShippingServiceDetails</b>.
     *  Then sort these results by <b>ShippingCategory</b> and populate the picklist.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShippingCategoryDetails($index)
    {
        return isset($this->shippingCategoryDetails[$index]);
    }

    /**
     * unset shippingCategoryDetails
     *
     * A shipping service category supported for the site.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ShippingCategoryDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *  Each shipping service supported for a site is automatically categorized by eBay into one of the
     *  shipping categories available for that site depending on how the shipping service shipping time
     *  aligns with the shipping times specified by eBay for each category.
     *  <br><br>
     *  Notice that you cannot specify a <b>ShippingCategory</b>
     *  as an input to any API call - eBay does this categorizing automatically. <b>ShippingCategory</b> is read-only data
     *  that is returned in the <b>ShippingServiceDetails</b> container. One possible use of this data is to segregate shipping
     *  services by <b>ShippingCategory</b> in a pick list. (For an example of this, see the Services pulldown menu in the
     *  Give buyers shipping details form in the eBay Sell Your Item flow.)
     *  <br><br>
     *  One way to populate the picklist would be to call <b>GeteBayDetails</b>
     *  with <b>DetailName</b> set to <b>ShippingServiceDetails</b>.
     *  Then sort these results by <b>ShippingCategory</b> and populate the picklist.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShippingCategoryDetails($index)
    {
        unset($this->shippingCategoryDetails[$index]);
    }

    /**
     * Gets as shippingCategoryDetails
     *
     * A shipping service category supported for the site.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ShippingCategoryDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *  Each shipping service supported for a site is automatically categorized by eBay into one of the
     *  shipping categories available for that site depending on how the shipping service shipping time
     *  aligns with the shipping times specified by eBay for each category.
     *  <br><br>
     *  Notice that you cannot specify a <b>ShippingCategory</b>
     *  as an input to any API call - eBay does this categorizing automatically. <b>ShippingCategory</b> is read-only data
     *  that is returned in the <b>ShippingServiceDetails</b> container. One possible use of this data is to segregate shipping
     *  services by <b>ShippingCategory</b> in a pick list. (For an example of this, see the Services pulldown menu in the
     *  Give buyers shipping details form in the eBay Sell Your Item flow.)
     *  <br><br>
     *  One way to populate the picklist would be to call <b>GeteBayDetails</b>
     *  with <b>DetailName</b> set to <b>ShippingServiceDetails</b>.
     *  Then sort these results by <b>ShippingCategory</b> and populate the picklist.
     *
     * @return \Nogrod\eBaySDK\Trading\ShippingCategoryDetailsType[]
     */
    public function getShippingCategoryDetails()
    {
        return $this->shippingCategoryDetails;
    }

    /**
     * Sets a new shippingCategoryDetails
     *
     * A shipping service category supported for the site.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ShippingCategoryDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *  Each shipping service supported for a site is automatically categorized by eBay into one of the
     *  shipping categories available for that site depending on how the shipping service shipping time
     *  aligns with the shipping times specified by eBay for each category.
     *  <br><br>
     *  Notice that you cannot specify a <b>ShippingCategory</b>
     *  as an input to any API call - eBay does this categorizing automatically. <b>ShippingCategory</b> is read-only data
     *  that is returned in the <b>ShippingServiceDetails</b> container. One possible use of this data is to segregate shipping
     *  services by <b>ShippingCategory</b> in a pick list. (For an example of this, see the Services pulldown menu in the
     *  Give buyers shipping details form in the eBay Sell Your Item flow.)
     *  <br><br>
     *  One way to populate the picklist would be to call <b>GeteBayDetails</b>
     *  with <b>DetailName</b> set to <b>ShippingServiceDetails</b>.
     *  Then sort these results by <b>ShippingCategory</b> and populate the picklist.
     *
     * @param \Nogrod\eBaySDK\Trading\ShippingCategoryDetailsType[] $shippingCategoryDetails
     * @return self
     */
    public function setShippingCategoryDetails(array $shippingCategoryDetails)
    {
        $this->shippingCategoryDetails = $shippingCategoryDetails;
        return $this;
    }

    /**
     * Gets as productDetails
     *
     * The <b>ProductDetails.ProductIdentifierUnavailableText</b>
     *  field contains the actual text that should be passed into the relevant
     *  product identification fields (EAN, ISBN, UPC, MPN/Brand) if eBay is
     *  prompting/expecting one of these fields in the call request, but the identifiers do not exist/apply for the product. The text will vary based on the listing site. This text should only be used if no product ID exists for the product. If a product identifier value does actually exist for a product, but the seller passes in 'Does not apply' text, that listing may get penalized in search.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ProductDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\ProductDetailsType
     */
    public function getProductDetails()
    {
        return $this->productDetails;
    }

    /**
     * Sets a new productDetails
     *
     * The <b>ProductDetails.ProductIdentifierUnavailableText</b>
     *  field contains the actual text that should be passed into the relevant
     *  product identification fields (EAN, ISBN, UPC, MPN/Brand) if eBay is
     *  prompting/expecting one of these fields in the call request, but the identifiers do not exist/apply for the product. The text will vary based on the listing site. This text should only be used if no product ID exists for the product. If a product identifier value does actually exist for a product, but the seller passes in 'Does not apply' text, that listing may get penalized in search.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This container is only returned if <b>ProductDetails</b> is included as a
     *  <b>DetailName</b> filter in the request, or if no <b>DetailName</b>
     *  filters are used in the request.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\ProductDetailsType $productDetails
     * @return self
     */
    public function setProductDetails(\Nogrod\eBaySDK\Trading\ProductDetailsType $productDetails)
    {
        $this->productDetails = $productDetails;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getCountryDetails();
        if (null !== $value && !empty($this->getCountryDetails())) {
            $writer->write(array_map(function ($v) {
                return ["CountryDetails" => $v];
            }, $value));
        }
        $value = $this->getCurrencyDetails();
        if (null !== $value && !empty($this->getCurrencyDetails())) {
            $writer->write(array_map(function ($v) {
                return ["CurrencyDetails" => $v];
            }, $value));
        }
        $value = $this->getDispatchTimeMaxDetails();
        if (null !== $value && !empty($this->getDispatchTimeMaxDetails())) {
            $writer->write(array_map(function ($v) {
                return ["DispatchTimeMaxDetails" => $v];
            }, $value));
        }
        $value = $this->getPaymentOptionDetails();
        if (null !== $value && !empty($this->getPaymentOptionDetails())) {
            $writer->write(array_map(function ($v) {
                return ["PaymentOptionDetails" => $v];
            }, $value));
        }
        $value = $this->getRegionDetails();
        if (null !== $value && !empty($this->getRegionDetails())) {
            $writer->write(array_map(function ($v) {
                return ["RegionDetails" => $v];
            }, $value));
        }
        $value = $this->getShippingLocationDetails();
        if (null !== $value && !empty($this->getShippingLocationDetails())) {
            $writer->write(array_map(function ($v) {
                return ["ShippingLocationDetails" => $v];
            }, $value));
        }
        $value = $this->getShippingServiceDetails();
        if (null !== $value && !empty($this->getShippingServiceDetails())) {
            $writer->write(array_map(function ($v) {
                return ["ShippingServiceDetails" => $v];
            }, $value));
        }
        $value = $this->getSiteDetails();
        if (null !== $value && !empty($this->getSiteDetails())) {
            $writer->write(array_map(function ($v) {
                return ["SiteDetails" => $v];
            }, $value));
        }
        $value = $this->getTaxJurisdiction();
        if (null !== $value && !empty($this->getTaxJurisdiction())) {
            $writer->write(array_map(function ($v) {
                return ["TaxJurisdiction" => $v];
            }, $value));
        }
        $value = $this->getURLDetails();
        if (null !== $value && !empty($this->getURLDetails())) {
            $writer->write(array_map(function ($v) {
                return ["URLDetails" => $v];
            }, $value));
        }
        $value = $this->getTimeZoneDetails();
        if (null !== $value && !empty($this->getTimeZoneDetails())) {
            $writer->write(array_map(function ($v) {
                return ["TimeZoneDetails" => $v];
            }, $value));
        }
        $value = $this->getItemSpecificDetails();
        if (null !== $value && !empty($this->getItemSpecificDetails())) {
            $writer->write(array_map(function ($v) {
                return ["ItemSpecificDetails" => $v];
            }, $value));
        }
        $value = $this->getUnitOfMeasurementDetails();
        if (null !== $value && !empty($this->getUnitOfMeasurementDetails())) {
            $writer->write(array_map(function ($v) {
                return ["UnitOfMeasurementDetails" => $v];
            }, $value));
        }
        $value = $this->getRegionOfOriginDetails();
        if (null !== $value && !empty($this->getRegionOfOriginDetails())) {
            $writer->write(array_map(function ($v) {
                return ["RegionOfOriginDetails" => $v];
            }, $value));
        }
        $value = $this->getShippingPackageDetails();
        if (null !== $value && !empty($this->getShippingPackageDetails())) {
            $writer->write(array_map(function ($v) {
                return ["ShippingPackageDetails" => $v];
            }, $value));
        }
        $value = $this->getShippingCarrierDetails();
        if (null !== $value && !empty($this->getShippingCarrierDetails())) {
            $writer->write(array_map(function ($v) {
                return ["ShippingCarrierDetails" => $v];
            }, $value));
        }
        $value = $this->getReturnPolicyDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReturnPolicyDetails", $value);
        }
        $value = $this->getInternationalReturnPolicyDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InternationalReturnPolicyDetails", $value);
        }
        $value = $this->getListingStartPriceDetails();
        if (null !== $value && !empty($this->getListingStartPriceDetails())) {
            $writer->write(array_map(function ($v) {
                return ["ListingStartPriceDetails" => $v];
            }, $value));
        }
        $value = $this->getBuyerRequirementDetails();
        if (null !== $value && !empty($this->getBuyerRequirementDetails())) {
            $writer->write(array_map(function ($v) {
                return ["BuyerRequirementDetails" => $v];
            }, $value));
        }
        $value = $this->getListingFeatureDetails();
        if (null !== $value && !empty($this->getListingFeatureDetails())) {
            $writer->write(array_map(function ($v) {
                return ["ListingFeatureDetails" => $v];
            }, $value));
        }
        $value = $this->getVariationDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VariationDetails", $value);
        }
        $value = $this->getExcludeShippingLocationDetails();
        if (null !== $value && !empty($this->getExcludeShippingLocationDetails())) {
            $writer->write(array_map(function ($v) {
                return ["ExcludeShippingLocationDetails" => $v];
            }, $value));
        }
        $value = $this->getUpdateTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UpdateTime", $value);
        }
        $value = $this->getRecoupmentPolicyDetails();
        if (null !== $value && !empty($this->getRecoupmentPolicyDetails())) {
            $writer->write(array_map(function ($v) {
                return ["RecoupmentPolicyDetails" => $v];
            }, $value));
        }
        $value = $this->getShippingCategoryDetails();
        if (null !== $value && !empty($this->getShippingCategoryDetails())) {
            $writer->write(array_map(function ($v) {
                return ["ShippingCategoryDetails" => $v];
            }, $value));
        }
        $value = $this->getProductDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductDetails", $value);
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
        parent::setKeyValue($keyValue);
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CountryDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setCountryDetails(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\CountryDetailsType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CurrencyDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setCurrencyDetails(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\CurrencyDetailsType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DispatchTimeMaxDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setDispatchTimeMaxDetails(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\DispatchTimeMaxDetailsType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentOptionDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setPaymentOptionDetails(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\PaymentOptionDetailsType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RegionDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setRegionDetails(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\RegionDetailsType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingLocationDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setShippingLocationDetails(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ShippingLocationDetailsType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingServiceDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setShippingServiceDetails(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ShippingServiceDetailsType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SiteDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setSiteDetails(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\SiteDetailsType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TaxJurisdiction', true);
        if (null !== $value && !empty($value)) {
            $this->setTaxJurisdiction(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\TaxJurisdictionType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}URLDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setURLDetails(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\URLDetailsType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TimeZoneDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setTimeZoneDetails(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\TimeZoneDetailsType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemSpecificDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setItemSpecificDetails(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ItemSpecificDetailsType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UnitOfMeasurementDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setUnitOfMeasurementDetails(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\UnitOfMeasurementDetailsType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RegionOfOriginDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setRegionOfOriginDetails(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\RegionOfOriginDetailsType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingPackageDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setShippingPackageDetails(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ShippingPackageDetailsType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingCarrierDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setShippingCarrierDetails(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ShippingCarrierDetailsType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReturnPolicyDetails');
        if (null !== $value) {
            $this->setReturnPolicyDetails(\Nogrod\eBaySDK\Trading\ReturnPolicyDetailsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalReturnPolicyDetails');
        if (null !== $value) {
            $this->setInternationalReturnPolicyDetails(\Nogrod\eBaySDK\Trading\ReturnPolicyDetailsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingStartPriceDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setListingStartPriceDetails(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ListingStartPriceDetailsType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyerRequirementDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setBuyerRequirementDetails(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\SiteBuyerRequirementDetailsType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingFeatureDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setListingFeatureDetails(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ListingFeatureDetailsType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VariationDetails');
        if (null !== $value) {
            $this->setVariationDetails(\Nogrod\eBaySDK\Trading\VariationDetailsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExcludeShippingLocationDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setExcludeShippingLocationDetails(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ExcludeShippingLocationDetailsType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UpdateTime');
        if (null !== $value) {
            $this->setUpdateTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RecoupmentPolicyDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setRecoupmentPolicyDetails(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\RecoupmentPolicyDetailsType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingCategoryDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setShippingCategoryDetails(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ShippingCategoryDetailsType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductDetails');
        if (null !== $value) {
            $this->setProductDetails(\Nogrod\eBaySDK\Trading\ProductDetailsType::fromKeyValue($value));
        }
    }
}
