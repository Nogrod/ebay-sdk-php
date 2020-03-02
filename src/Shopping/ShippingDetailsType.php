<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ShippingDetailsType
 *
 * Type used to express the shipping-related details for an order line item.
 * XSD Type: ShippingDetailsType
 */
class ShippingDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This field is deprecated.
     *
     * @var bool $getItFast
     */
    private $getItFast = null;

    /**
     * If this field is returned at all, its value is always '0.0' as it is no longer possible for a seller to offer a buyer shipping insurance.
     *
     * @var \Nogrod\eBaySDK\Shopping\AmountType $insuranceCost
     */
    private $insuranceCost = null;

    /**
     * If this field is returned at all, its value should be <code>NotOfferedOnSite</code>, as it is no longer possible for a seller to offer a buyer shipping insurance.
     *
     * @var string $insuranceOption
     */
    private $insuranceOption = null;

    /**
     * This container consists of detailed information for an international shipping service option that is available to an international buyer located at the shipping destination specified in the call request. A <b>InternationalShippingServiceOption</b> container is returned for each available international shipping service option. A seller can specify up to five international shipping service options (including the Global Shipping Program) in an eBay listing.
     *  <br/><br/>
     *  No <b>InternationalShippingServiceOption</b> containers are returned if the shipping destination specified in the call request is a domestic destination. If the shipping destination is a domestic location, see the <b>ShippingServiceOption</b> container instead.
     *
     * @var \Nogrod\eBaySDK\Shopping\InternationalShippingServiceOptionType[] $internationalShippingServiceOption
     */
    private $internationalShippingServiceOption = [
        
    ];

    /**
     * This container is only returned if sales tax is applicable to the specified shipping destination.
     *
     * @var \Nogrod\eBaySDK\Shopping\SalesTaxType $salesTax
     */
    private $salesTax = null;

    /**
     * This field is only returned if an unexpected error occurs during the attempted calculation of shipping costs.
     *
     * @var string $shippingRateErrorMessage
     */
    private $shippingRateErrorMessage = null;

    /**
     * This container consists of detailed information for a domestic shipping service option that is available to a buyer located at the shipping destination specified in the call request. A <b>ShippingServiceOption</b> container is returned for each available domestic shipping service option. A seller can specify up to four domestic shipping service options in an eBay listing.
     *  <br/><br/>
     *  No <b>ShippingServiceOption</b> containers are returned if the shipping destination specified in the call request is an international destination. If the shipping destination is an international location, see the <b>InternationalShippingServiceOption</b> container instead.
     *
     * @var \Nogrod\eBaySDK\Shopping\ShippingServiceOptionType[] $shippingServiceOption
     */
    private $shippingServiceOption = [
        
    ];

    /**
     * This container includes sales tax percentage rates for one or more jurisdictions where the seller has configured and applied account-level sales tax settings for the listing. Changes to sales tax settings can be made in Sales Tax Table in My eBay, or through the <b>SetTaxTable</b> call of the Trading API. This container is returned as an empty element if no sales tax rates have been set up for any jurisdictions.
     *
     * @var \Nogrod\eBaySDK\Shopping\TaxJurisdictionType[] $taxTable
     */
    private $taxTable = null;

    /**
     * If this field is returned at all, its value is always '0.0' as it is no longer possible for a seller to offer a buyer shipping insurance.
     *
     * @var \Nogrod\eBaySDK\Shopping\AmountType $internationalInsuranceCost
     */
    private $internationalInsuranceCost = null;

    /**
     * If this field is returned at all, its value should be <code>NotOfferedOnSite</code>, as it is no longer possible for a seller to offer a buyer shipping insurance.
     *
     * @var string $internationalInsuranceOption
     */
    private $internationalInsuranceOption = null;

    /**
     * This field returns the cost of cash-on-delivery for the listing. This field is only applicable to the Italy site (site ID 101), and is only returned if cash-on-delivery is the only available logistics type for the listing.
     *
     * @var \Nogrod\eBaySDK\Shopping\AmountType $cODCost
     */
    private $cODCost = null;

    /**
     * One or more <b>ExcludeShipToLocation</b> fields are returned at the shipping service option level if the seller has excluded one or more geographical regions (such as 'Middle East' or 'Southeast Asia'), individual countries, individual states/provinces, or special domestic regions (such as Alaska/Hawaii or PO Boxes for the US). If a seller decides to exclude Hawaii and Alaska, an <b>ExcludeShipToLocation</b> field would be returned with a value of <code>Alaska/Hawaii</code> for each domestic shipping service option. For international shipping, if a seller ships globally but decides to exclude the 'Middle East', an <b>ExcludeShipToLocation</b> field would be returned with a value of <code>Middle East</code> for each international shipping service option.
     *  <br/><br/>
     *  'Ship-to' locations and excluded shipping locations are set by the seller through Shipping Rate Tables in My eBay, through a Shipping/Fulfillment Business Policy associated with a listing, or through the <strong>ShipToLocation</strong> and <strong>ExcludeShipToLocation</strong> fields in an Add/Revise/Relist call in the Trading API.
     *
     * @var string[] $excludeShipToLocation
     */
    private $excludeShipToLocation = [
        
    ];

    /**
     * Gets as getItFast
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getGetItFast()
    {
        return $this->getItFast;
    }

    /**
     * Sets a new getItFast
     *
     * This field is deprecated.
     *
     * @param bool $getItFast
     * @return self
     */
    public function setGetItFast($getItFast)
    {
        $this->getItFast = $getItFast;
        return $this;
    }

    /**
     * Gets as insuranceCost
     *
     * If this field is returned at all, its value is always '0.0' as it is no longer possible for a seller to offer a buyer shipping insurance.
     *
     * @return \Nogrod\eBaySDK\Shopping\AmountType
     */
    public function getInsuranceCost()
    {
        return $this->insuranceCost;
    }

    /**
     * Sets a new insuranceCost
     *
     * If this field is returned at all, its value is always '0.0' as it is no longer possible for a seller to offer a buyer shipping insurance.
     *
     * @param \Nogrod\eBaySDK\Shopping\AmountType $insuranceCost
     * @return self
     */
    public function setInsuranceCost(\Nogrod\eBaySDK\Shopping\AmountType $insuranceCost)
    {
        $this->insuranceCost = $insuranceCost;
        return $this;
    }

    /**
     * Gets as insuranceOption
     *
     * If this field is returned at all, its value should be <code>NotOfferedOnSite</code>, as it is no longer possible for a seller to offer a buyer shipping insurance.
     *
     * @return string
     */
    public function getInsuranceOption()
    {
        return $this->insuranceOption;
    }

    /**
     * Sets a new insuranceOption
     *
     * If this field is returned at all, its value should be <code>NotOfferedOnSite</code>, as it is no longer possible for a seller to offer a buyer shipping insurance.
     *
     * @param string $insuranceOption
     * @return self
     */
    public function setInsuranceOption($insuranceOption)
    {
        $this->insuranceOption = $insuranceOption;
        return $this;
    }

    /**
     * Adds as internationalShippingServiceOption
     *
     * This container consists of detailed information for an international shipping service option that is available to an international buyer located at the shipping destination specified in the call request. A <b>InternationalShippingServiceOption</b> container is returned for each available international shipping service option. A seller can specify up to five international shipping service options (including the Global Shipping Program) in an eBay listing.
     *  <br/><br/>
     *  No <b>InternationalShippingServiceOption</b> containers are returned if the shipping destination specified in the call request is a domestic destination. If the shipping destination is a domestic location, see the <b>ShippingServiceOption</b> container instead.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\InternationalShippingServiceOptionType $internationalShippingServiceOption
     */
    public function addToInternationalShippingServiceOption(\Nogrod\eBaySDK\Shopping\InternationalShippingServiceOptionType $internationalShippingServiceOption)
    {
        $this->internationalShippingServiceOption[] = $internationalShippingServiceOption;
        return $this;
    }

    /**
     * isset internationalShippingServiceOption
     *
     * This container consists of detailed information for an international shipping service option that is available to an international buyer located at the shipping destination specified in the call request. A <b>InternationalShippingServiceOption</b> container is returned for each available international shipping service option. A seller can specify up to five international shipping service options (including the Global Shipping Program) in an eBay listing.
     *  <br/><br/>
     *  No <b>InternationalShippingServiceOption</b> containers are returned if the shipping destination specified in the call request is a domestic destination. If the shipping destination is a domestic location, see the <b>ShippingServiceOption</b> container instead.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInternationalShippingServiceOption($index)
    {
        return isset($this->internationalShippingServiceOption[$index]);
    }

    /**
     * unset internationalShippingServiceOption
     *
     * This container consists of detailed information for an international shipping service option that is available to an international buyer located at the shipping destination specified in the call request. A <b>InternationalShippingServiceOption</b> container is returned for each available international shipping service option. A seller can specify up to five international shipping service options (including the Global Shipping Program) in an eBay listing.
     *  <br/><br/>
     *  No <b>InternationalShippingServiceOption</b> containers are returned if the shipping destination specified in the call request is a domestic destination. If the shipping destination is a domestic location, see the <b>ShippingServiceOption</b> container instead.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInternationalShippingServiceOption($index)
    {
        unset($this->internationalShippingServiceOption[$index]);
    }

    /**
     * Gets as internationalShippingServiceOption
     *
     * This container consists of detailed information for an international shipping service option that is available to an international buyer located at the shipping destination specified in the call request. A <b>InternationalShippingServiceOption</b> container is returned for each available international shipping service option. A seller can specify up to five international shipping service options (including the Global Shipping Program) in an eBay listing.
     *  <br/><br/>
     *  No <b>InternationalShippingServiceOption</b> containers are returned if the shipping destination specified in the call request is a domestic destination. If the shipping destination is a domestic location, see the <b>ShippingServiceOption</b> container instead.
     *
     * @return \Nogrod\eBaySDK\Shopping\InternationalShippingServiceOptionType[]
     */
    public function getInternationalShippingServiceOption()
    {
        return $this->internationalShippingServiceOption;
    }

    /**
     * Sets a new internationalShippingServiceOption
     *
     * This container consists of detailed information for an international shipping service option that is available to an international buyer located at the shipping destination specified in the call request. A <b>InternationalShippingServiceOption</b> container is returned for each available international shipping service option. A seller can specify up to five international shipping service options (including the Global Shipping Program) in an eBay listing.
     *  <br/><br/>
     *  No <b>InternationalShippingServiceOption</b> containers are returned if the shipping destination specified in the call request is a domestic destination. If the shipping destination is a domestic location, see the <b>ShippingServiceOption</b> container instead.
     *
     * @param \Nogrod\eBaySDK\Shopping\InternationalShippingServiceOptionType[] $internationalShippingServiceOption
     * @return self
     */
    public function setInternationalShippingServiceOption(array $internationalShippingServiceOption)
    {
        $this->internationalShippingServiceOption = $internationalShippingServiceOption;
        return $this;
    }

    /**
     * Gets as salesTax
     *
     * This container is only returned if sales tax is applicable to the specified shipping destination.
     *
     * @return \Nogrod\eBaySDK\Shopping\SalesTaxType
     */
    public function getSalesTax()
    {
        return $this->salesTax;
    }

    /**
     * Sets a new salesTax
     *
     * This container is only returned if sales tax is applicable to the specified shipping destination.
     *
     * @param \Nogrod\eBaySDK\Shopping\SalesTaxType $salesTax
     * @return self
     */
    public function setSalesTax(\Nogrod\eBaySDK\Shopping\SalesTaxType $salesTax)
    {
        $this->salesTax = $salesTax;
        return $this;
    }

    /**
     * Gets as shippingRateErrorMessage
     *
     * This field is only returned if an unexpected error occurs during the attempted calculation of shipping costs.
     *
     * @return string
     */
    public function getShippingRateErrorMessage()
    {
        return $this->shippingRateErrorMessage;
    }

    /**
     * Sets a new shippingRateErrorMessage
     *
     * This field is only returned if an unexpected error occurs during the attempted calculation of shipping costs.
     *
     * @param string $shippingRateErrorMessage
     * @return self
     */
    public function setShippingRateErrorMessage($shippingRateErrorMessage)
    {
        $this->shippingRateErrorMessage = $shippingRateErrorMessage;
        return $this;
    }

    /**
     * Adds as shippingServiceOption
     *
     * This container consists of detailed information for a domestic shipping service option that is available to a buyer located at the shipping destination specified in the call request. A <b>ShippingServiceOption</b> container is returned for each available domestic shipping service option. A seller can specify up to four domestic shipping service options in an eBay listing.
     *  <br/><br/>
     *  No <b>ShippingServiceOption</b> containers are returned if the shipping destination specified in the call request is an international destination. If the shipping destination is an international location, see the <b>InternationalShippingServiceOption</b> container instead.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\ShippingServiceOptionType $shippingServiceOption
     */
    public function addToShippingServiceOption(\Nogrod\eBaySDK\Shopping\ShippingServiceOptionType $shippingServiceOption)
    {
        $this->shippingServiceOption[] = $shippingServiceOption;
        return $this;
    }

    /**
     * isset shippingServiceOption
     *
     * This container consists of detailed information for a domestic shipping service option that is available to a buyer located at the shipping destination specified in the call request. A <b>ShippingServiceOption</b> container is returned for each available domestic shipping service option. A seller can specify up to four domestic shipping service options in an eBay listing.
     *  <br/><br/>
     *  No <b>ShippingServiceOption</b> containers are returned if the shipping destination specified in the call request is an international destination. If the shipping destination is an international location, see the <b>InternationalShippingServiceOption</b> container instead.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShippingServiceOption($index)
    {
        return isset($this->shippingServiceOption[$index]);
    }

    /**
     * unset shippingServiceOption
     *
     * This container consists of detailed information for a domestic shipping service option that is available to a buyer located at the shipping destination specified in the call request. A <b>ShippingServiceOption</b> container is returned for each available domestic shipping service option. A seller can specify up to four domestic shipping service options in an eBay listing.
     *  <br/><br/>
     *  No <b>ShippingServiceOption</b> containers are returned if the shipping destination specified in the call request is an international destination. If the shipping destination is an international location, see the <b>InternationalShippingServiceOption</b> container instead.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShippingServiceOption($index)
    {
        unset($this->shippingServiceOption[$index]);
    }

    /**
     * Gets as shippingServiceOption
     *
     * This container consists of detailed information for a domestic shipping service option that is available to a buyer located at the shipping destination specified in the call request. A <b>ShippingServiceOption</b> container is returned for each available domestic shipping service option. A seller can specify up to four domestic shipping service options in an eBay listing.
     *  <br/><br/>
     *  No <b>ShippingServiceOption</b> containers are returned if the shipping destination specified in the call request is an international destination. If the shipping destination is an international location, see the <b>InternationalShippingServiceOption</b> container instead.
     *
     * @return \Nogrod\eBaySDK\Shopping\ShippingServiceOptionType[]
     */
    public function getShippingServiceOption()
    {
        return $this->shippingServiceOption;
    }

    /**
     * Sets a new shippingServiceOption
     *
     * This container consists of detailed information for a domestic shipping service option that is available to a buyer located at the shipping destination specified in the call request. A <b>ShippingServiceOption</b> container is returned for each available domestic shipping service option. A seller can specify up to four domestic shipping service options in an eBay listing.
     *  <br/><br/>
     *  No <b>ShippingServiceOption</b> containers are returned if the shipping destination specified in the call request is an international destination. If the shipping destination is an international location, see the <b>InternationalShippingServiceOption</b> container instead.
     *
     * @param \Nogrod\eBaySDK\Shopping\ShippingServiceOptionType[] $shippingServiceOption
     * @return self
     */
    public function setShippingServiceOption(array $shippingServiceOption)
    {
        $this->shippingServiceOption = $shippingServiceOption;
        return $this;
    }

    /**
     * Adds as taxJurisdiction
     *
     * This container includes sales tax percentage rates for one or more jurisdictions where the seller has configured and applied account-level sales tax settings for the listing. Changes to sales tax settings can be made in Sales Tax Table in My eBay, or through the <b>SetTaxTable</b> call of the Trading API. This container is returned as an empty element if no sales tax rates have been set up for any jurisdictions.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\TaxJurisdictionType $taxJurisdiction
     */
    public function addToTaxTable(\Nogrod\eBaySDK\Shopping\TaxJurisdictionType $taxJurisdiction)
    {
        $this->taxTable[] = $taxJurisdiction;
        return $this;
    }

    /**
     * isset taxTable
     *
     * This container includes sales tax percentage rates for one or more jurisdictions where the seller has configured and applied account-level sales tax settings for the listing. Changes to sales tax settings can be made in Sales Tax Table in My eBay, or through the <b>SetTaxTable</b> call of the Trading API. This container is returned as an empty element if no sales tax rates have been set up for any jurisdictions.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxTable($index)
    {
        return isset($this->taxTable[$index]);
    }

    /**
     * unset taxTable
     *
     * This container includes sales tax percentage rates for one or more jurisdictions where the seller has configured and applied account-level sales tax settings for the listing. Changes to sales tax settings can be made in Sales Tax Table in My eBay, or through the <b>SetTaxTable</b> call of the Trading API. This container is returned as an empty element if no sales tax rates have been set up for any jurisdictions.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxTable($index)
    {
        unset($this->taxTable[$index]);
    }

    /**
     * Gets as taxTable
     *
     * This container includes sales tax percentage rates for one or more jurisdictions where the seller has configured and applied account-level sales tax settings for the listing. Changes to sales tax settings can be made in Sales Tax Table in My eBay, or through the <b>SetTaxTable</b> call of the Trading API. This container is returned as an empty element if no sales tax rates have been set up for any jurisdictions.
     *
     * @return \Nogrod\eBaySDK\Shopping\TaxJurisdictionType[]
     */
    public function getTaxTable()
    {
        return $this->taxTable;
    }

    /**
     * Sets a new taxTable
     *
     * This container includes sales tax percentage rates for one or more jurisdictions where the seller has configured and applied account-level sales tax settings for the listing. Changes to sales tax settings can be made in Sales Tax Table in My eBay, or through the <b>SetTaxTable</b> call of the Trading API. This container is returned as an empty element if no sales tax rates have been set up for any jurisdictions.
     *
     * @param \Nogrod\eBaySDK\Shopping\TaxJurisdictionType[] $taxTable
     * @return self
     */
    public function setTaxTable(array $taxTable)
    {
        $this->taxTable = $taxTable;
        return $this;
    }

    /**
     * Gets as internationalInsuranceCost
     *
     * If this field is returned at all, its value is always '0.0' as it is no longer possible for a seller to offer a buyer shipping insurance.
     *
     * @return \Nogrod\eBaySDK\Shopping\AmountType
     */
    public function getInternationalInsuranceCost()
    {
        return $this->internationalInsuranceCost;
    }

    /**
     * Sets a new internationalInsuranceCost
     *
     * If this field is returned at all, its value is always '0.0' as it is no longer possible for a seller to offer a buyer shipping insurance.
     *
     * @param \Nogrod\eBaySDK\Shopping\AmountType $internationalInsuranceCost
     * @return self
     */
    public function setInternationalInsuranceCost(\Nogrod\eBaySDK\Shopping\AmountType $internationalInsuranceCost)
    {
        $this->internationalInsuranceCost = $internationalInsuranceCost;
        return $this;
    }

    /**
     * Gets as internationalInsuranceOption
     *
     * If this field is returned at all, its value should be <code>NotOfferedOnSite</code>, as it is no longer possible for a seller to offer a buyer shipping insurance.
     *
     * @return string
     */
    public function getInternationalInsuranceOption()
    {
        return $this->internationalInsuranceOption;
    }

    /**
     * Sets a new internationalInsuranceOption
     *
     * If this field is returned at all, its value should be <code>NotOfferedOnSite</code>, as it is no longer possible for a seller to offer a buyer shipping insurance.
     *
     * @param string $internationalInsuranceOption
     * @return self
     */
    public function setInternationalInsuranceOption($internationalInsuranceOption)
    {
        $this->internationalInsuranceOption = $internationalInsuranceOption;
        return $this;
    }

    /**
     * Gets as cODCost
     *
     * This field returns the cost of cash-on-delivery for the listing. This field is only applicable to the Italy site (site ID 101), and is only returned if cash-on-delivery is the only available logistics type for the listing.
     *
     * @return \Nogrod\eBaySDK\Shopping\AmountType
     */
    public function getCODCost()
    {
        return $this->cODCost;
    }

    /**
     * Sets a new cODCost
     *
     * This field returns the cost of cash-on-delivery for the listing. This field is only applicable to the Italy site (site ID 101), and is only returned if cash-on-delivery is the only available logistics type for the listing.
     *
     * @param \Nogrod\eBaySDK\Shopping\AmountType $cODCost
     * @return self
     */
    public function setCODCost(\Nogrod\eBaySDK\Shopping\AmountType $cODCost)
    {
        $this->cODCost = $cODCost;
        return $this;
    }

    /**
     * Adds as excludeShipToLocation
     *
     * One or more <b>ExcludeShipToLocation</b> fields are returned at the shipping service option level if the seller has excluded one or more geographical regions (such as 'Middle East' or 'Southeast Asia'), individual countries, individual states/provinces, or special domestic regions (such as Alaska/Hawaii or PO Boxes for the US). If a seller decides to exclude Hawaii and Alaska, an <b>ExcludeShipToLocation</b> field would be returned with a value of <code>Alaska/Hawaii</code> for each domestic shipping service option. For international shipping, if a seller ships globally but decides to exclude the 'Middle East', an <b>ExcludeShipToLocation</b> field would be returned with a value of <code>Middle East</code> for each international shipping service option.
     *  <br/><br/>
     *  'Ship-to' locations and excluded shipping locations are set by the seller through Shipping Rate Tables in My eBay, through a Shipping/Fulfillment Business Policy associated with a listing, or through the <strong>ShipToLocation</strong> and <strong>ExcludeShipToLocation</strong> fields in an Add/Revise/Relist call in the Trading API.
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
     * One or more <b>ExcludeShipToLocation</b> fields are returned at the shipping service option level if the seller has excluded one or more geographical regions (such as 'Middle East' or 'Southeast Asia'), individual countries, individual states/provinces, or special domestic regions (such as Alaska/Hawaii or PO Boxes for the US). If a seller decides to exclude Hawaii and Alaska, an <b>ExcludeShipToLocation</b> field would be returned with a value of <code>Alaska/Hawaii</code> for each domestic shipping service option. For international shipping, if a seller ships globally but decides to exclude the 'Middle East', an <b>ExcludeShipToLocation</b> field would be returned with a value of <code>Middle East</code> for each international shipping service option.
     *  <br/><br/>
     *  'Ship-to' locations and excluded shipping locations are set by the seller through Shipping Rate Tables in My eBay, through a Shipping/Fulfillment Business Policy associated with a listing, or through the <strong>ShipToLocation</strong> and <strong>ExcludeShipToLocation</strong> fields in an Add/Revise/Relist call in the Trading API.
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
     * One or more <b>ExcludeShipToLocation</b> fields are returned at the shipping service option level if the seller has excluded one or more geographical regions (such as 'Middle East' or 'Southeast Asia'), individual countries, individual states/provinces, or special domestic regions (such as Alaska/Hawaii or PO Boxes for the US). If a seller decides to exclude Hawaii and Alaska, an <b>ExcludeShipToLocation</b> field would be returned with a value of <code>Alaska/Hawaii</code> for each domestic shipping service option. For international shipping, if a seller ships globally but decides to exclude the 'Middle East', an <b>ExcludeShipToLocation</b> field would be returned with a value of <code>Middle East</code> for each international shipping service option.
     *  <br/><br/>
     *  'Ship-to' locations and excluded shipping locations are set by the seller through Shipping Rate Tables in My eBay, through a Shipping/Fulfillment Business Policy associated with a listing, or through the <strong>ShipToLocation</strong> and <strong>ExcludeShipToLocation</strong> fields in an Add/Revise/Relist call in the Trading API.
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
     * One or more <b>ExcludeShipToLocation</b> fields are returned at the shipping service option level if the seller has excluded one or more geographical regions (such as 'Middle East' or 'Southeast Asia'), individual countries, individual states/provinces, or special domestic regions (such as Alaska/Hawaii or PO Boxes for the US). If a seller decides to exclude Hawaii and Alaska, an <b>ExcludeShipToLocation</b> field would be returned with a value of <code>Alaska/Hawaii</code> for each domestic shipping service option. For international shipping, if a seller ships globally but decides to exclude the 'Middle East', an <b>ExcludeShipToLocation</b> field would be returned with a value of <code>Middle East</code> for each international shipping service option.
     *  <br/><br/>
     *  'Ship-to' locations and excluded shipping locations are set by the seller through Shipping Rate Tables in My eBay, through a Shipping/Fulfillment Business Policy associated with a listing, or through the <strong>ShipToLocation</strong> and <strong>ExcludeShipToLocation</strong> fields in an Add/Revise/Relist call in the Trading API.
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
     * One or more <b>ExcludeShipToLocation</b> fields are returned at the shipping service option level if the seller has excluded one or more geographical regions (such as 'Middle East' or 'Southeast Asia'), individual countries, individual states/provinces, or special domestic regions (such as Alaska/Hawaii or PO Boxes for the US). If a seller decides to exclude Hawaii and Alaska, an <b>ExcludeShipToLocation</b> field would be returned with a value of <code>Alaska/Hawaii</code> for each domestic shipping service option. For international shipping, if a seller ships globally but decides to exclude the 'Middle East', an <b>ExcludeShipToLocation</b> field would be returned with a value of <code>Middle East</code> for each international shipping service option.
     *  <br/><br/>
     *  'Ship-to' locations and excluded shipping locations are set by the seller through Shipping Rate Tables in My eBay, through a Shipping/Fulfillment Business Policy associated with a listing, or through the <strong>ShipToLocation</strong> and <strong>ExcludeShipToLocation</strong> fields in an Add/Revise/Relist call in the Trading API.
     *
     * @param string[] $excludeShipToLocation
     * @return self
     */
    public function setExcludeShipToLocation(array $excludeShipToLocation)
    {
        $this->excludeShipToLocation = $excludeShipToLocation;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getGetItFast();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}GetItFast", $value);
        }
        $value = $this->getInsuranceCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InsuranceCost", $value);
        }
        $value = $this->getInsuranceOption();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InsuranceOption", $value);
        }
        $value = $this->getInternationalShippingServiceOption();
        if (null !== $value && !empty($this->getInternationalShippingServiceOption())) {
            $writer->write(array_map(function ($v) {
                return ["InternationalShippingServiceOption" => $v];
            }, $value));
        }
        $value = $this->getSalesTax();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SalesTax", $value);
        }
        $value = $this->getShippingRateErrorMessage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingRateErrorMessage", $value);
        }
        $value = $this->getShippingServiceOption();
        if (null !== $value && !empty($this->getShippingServiceOption())) {
            $writer->write(array_map(function ($v) {
                return ["ShippingServiceOption" => $v];
            }, $value));
        }
        $value = $this->getTaxTable();
        if (null !== $value && !empty($this->getTaxTable())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TaxTable", array_map(function ($v) {
                return ["TaxJurisdiction" => $v];
            }, $value));
        }
        $value = $this->getInternationalInsuranceCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InternationalInsuranceCost", $value);
        }
        $value = $this->getInternationalInsuranceOption();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InternationalInsuranceOption", $value);
        }
        $value = $this->getCODCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CODCost", $value);
        }
        $value = $this->getExcludeShipToLocation();
        if (null !== $value && !empty($this->getExcludeShipToLocation())) {
            $writer->write(array_map(function ($v) {
                return ["ExcludeShipToLocation" => $v];
            }, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}GetItFast');
        if (null !== $value) {
            $this->setGetItFast($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InsuranceCost');
        if (null !== $value) {
            $this->setInsuranceCost(\Nogrod\eBaySDK\Shopping\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InsuranceOption');
        if (null !== $value) {
            $this->setInsuranceOption($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalShippingServiceOption', true);
        if (null !== $value && !empty($value)) {
            $this->setInternationalShippingServiceOption(array_map(function ($v) {
                return \Nogrod\eBaySDK\Shopping\InternationalShippingServiceOptionType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SalesTax');
        if (null !== $value) {
            $this->setSalesTax(\Nogrod\eBaySDK\Shopping\SalesTaxType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingRateErrorMessage');
        if (null !== $value) {
            $this->setShippingRateErrorMessage($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingServiceOption', true);
        if (null !== $value && !empty($value)) {
            $this->setShippingServiceOption(array_map(function ($v) {
                return \Nogrod\eBaySDK\Shopping\ShippingServiceOptionType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TaxTable', true);
        if (null !== $value && !empty($value)) {
            $this->setTaxTable(array_map(function ($v) {
                return \Nogrod\eBaySDK\Shopping\TaxJurisdictionType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalInsuranceCost');
        if (null !== $value) {
            $this->setInternationalInsuranceCost(\Nogrod\eBaySDK\Shopping\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalInsuranceOption');
        if (null !== $value) {
            $this->setInternationalInsuranceOption($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CODCost');
        if (null !== $value) {
            $this->setCODCost(\Nogrod\eBaySDK\Shopping\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExcludeShipToLocation', true);
        if (null !== $value && !empty($value)) {
            $this->setExcludeShipToLocation($value);
        }
    }
}
