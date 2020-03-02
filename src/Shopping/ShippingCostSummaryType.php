<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ShippingCostSummaryType
 *
 * Complex type used by the <b>ShippingCostSummary</b> container, that is used to express a few details of the lowest-priced shipping service option that is available to the eBay user making the call. For Calculated shipping, the item's location and the destination location are considered when calculating the shipping cost.
 * XSD Type: ShippingCostSummaryType
 */
class ShippingCostSummaryType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This field shows the name of the lowest-priced shipping service option that is available to the eBay user making the call. An example of a shipping service option is <b>USPS First Class Package</b>.
     *  <br/><br/>
     *  This field is only returned by the <b>GetShippingCosts</b> call (and not <b>GetSingleItem</b> or <b>GetMultipleItems</b> calls).
     *
     * @var string $shippingServiceName
     */
    private $shippingServiceName = null;

    /**
     * This field shows the base shipping cost using the lowest-priced shipping service option that is available to the eBay user making the call.
     *  <br/><br/>
     *  For <b>GetShippingCosts</b> call, this is base shipping cost to ship the item using the shipping service option in the <b>ShippingServiceName</b> field. The quantity specified in the <b>QuantitySold</b> field in the call request is taken into account when calculating the cost.
     *  <br/><br/>
     *  For <b>GetSingleItem</b> and <b>GetMultipleItems</b> calls, this is base shipping cost of the cheapest available domestic shipping service option. The name of the shipping service option is not returned for these calls.
     *
     * @var \Nogrod\eBaySDK\Shopping\AmountType $shippingServiceCost
     */
    private $shippingServiceCost = null;

    /**
     * If this field is returned at all, its value is always '0.0' as it is no longer possible for a seller to offer a buyer shipping insurance.
     *
     * @var \Nogrod\eBaySDK\Shopping\AmountType $insuranceCost
     */
    private $insuranceCost = null;

    /**
     * This enumeration value indicates the shipping cost model associated with the lowest-priced shipping service option that is available to the eBay user making the call. Examples of shipping cost models include flat-rate and
     *  calculated shipping.
     *  <br/><br/>
     *  For <b>GetShippingCosts</b> call, this is the shipping cost model associated with the shipping service option in the <b>ShippingServiceName</b> field. The name of the shipping service option is not returned for the <b>GetSingleItem</b> and <b>GetMultipleItems</b> calls calls.
     *
     * @var string $shippingType
     */
    private $shippingType = null;

    /**
     * This field is only returned (as <code>true</code>) if 'Local Pickup' is the only available logistic option (no shipping options). With 'Local Pickup', the seller and buyer arrange the pickup location and time (off of the eBay platform).
     *
     * @var bool $localPickup
     */
    private $localPickup = null;

    /**
     * If this field is returned at all, its value should be <code>NotOfferedOnSite</code>, as it is no longer possible for a seller to offer a buyer shipping insurance.
     *
     * @var string $insuranceOption
     */
    private $insuranceOption = null;

    /**
     * This is the localized cost to ship the item using the cheapest available domestic or international shipping service option. If the item is located in Germany, but the shipping destination is the US, this field will show the cost in Euros (EUR) and the <b>ShippingServiceCost</b> will show the cost in US dollars (USD).
     *  <br/><br/>
     *  For <b>GetShippingCosts</b> call, this is the localized base shipping cost to ship the item using the shipping service option in the <b>ShippingServiceName</b> field. The quantity specified in the <b>QuantitySold</b> field in the call request is taken into account when calculating the cost.
     *  <br/><br/>
     *  For <b>GetSingleItem</b> and <b>GetMultipleItems</b> calls, this is the localized base shipping cost of the cheapest available shipping service option to the country specified in the Site-ID header. The name of the shipping service option is not returned for these calls.
     *
     * @var \Nogrod\eBaySDK\Shopping\AmountType $listedShippingServiceCost
     */
    private $listedShippingServiceCost = null;

    /**
     * The total cost of customs and taxes for the international leg of an order shipped using the Global Shipping Program. This amount is calculated and supplied for each item by the international shipping provider when a buyer views the item properties.
     *
     * @var \Nogrod\eBaySDK\Shopping\AmountType $importCharge
     */
    private $importCharge = null;

    /**
     * This field is for future use.
     *
     * @var string $logisticPlanType
     */
    private $logisticPlanType = null;

    /**
     * Gets as shippingServiceName
     *
     * This field shows the name of the lowest-priced shipping service option that is available to the eBay user making the call. An example of a shipping service option is <b>USPS First Class Package</b>.
     *  <br/><br/>
     *  This field is only returned by the <b>GetShippingCosts</b> call (and not <b>GetSingleItem</b> or <b>GetMultipleItems</b> calls).
     *
     * @return string
     */
    public function getShippingServiceName()
    {
        return $this->shippingServiceName;
    }

    /**
     * Sets a new shippingServiceName
     *
     * This field shows the name of the lowest-priced shipping service option that is available to the eBay user making the call. An example of a shipping service option is <b>USPS First Class Package</b>.
     *  <br/><br/>
     *  This field is only returned by the <b>GetShippingCosts</b> call (and not <b>GetSingleItem</b> or <b>GetMultipleItems</b> calls).
     *
     * @param string $shippingServiceName
     * @return self
     */
    public function setShippingServiceName($shippingServiceName)
    {
        $this->shippingServiceName = $shippingServiceName;
        return $this;
    }

    /**
     * Gets as shippingServiceCost
     *
     * This field shows the base shipping cost using the lowest-priced shipping service option that is available to the eBay user making the call.
     *  <br/><br/>
     *  For <b>GetShippingCosts</b> call, this is base shipping cost to ship the item using the shipping service option in the <b>ShippingServiceName</b> field. The quantity specified in the <b>QuantitySold</b> field in the call request is taken into account when calculating the cost.
     *  <br/><br/>
     *  For <b>GetSingleItem</b> and <b>GetMultipleItems</b> calls, this is base shipping cost of the cheapest available domestic shipping service option. The name of the shipping service option is not returned for these calls.
     *
     * @return \Nogrod\eBaySDK\Shopping\AmountType
     */
    public function getShippingServiceCost()
    {
        return $this->shippingServiceCost;
    }

    /**
     * Sets a new shippingServiceCost
     *
     * This field shows the base shipping cost using the lowest-priced shipping service option that is available to the eBay user making the call.
     *  <br/><br/>
     *  For <b>GetShippingCosts</b> call, this is base shipping cost to ship the item using the shipping service option in the <b>ShippingServiceName</b> field. The quantity specified in the <b>QuantitySold</b> field in the call request is taken into account when calculating the cost.
     *  <br/><br/>
     *  For <b>GetSingleItem</b> and <b>GetMultipleItems</b> calls, this is base shipping cost of the cheapest available domestic shipping service option. The name of the shipping service option is not returned for these calls.
     *
     * @param \Nogrod\eBaySDK\Shopping\AmountType $shippingServiceCost
     * @return self
     */
    public function setShippingServiceCost(\Nogrod\eBaySDK\Shopping\AmountType $shippingServiceCost)
    {
        $this->shippingServiceCost = $shippingServiceCost;
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
     * Gets as shippingType
     *
     * This enumeration value indicates the shipping cost model associated with the lowest-priced shipping service option that is available to the eBay user making the call. Examples of shipping cost models include flat-rate and
     *  calculated shipping.
     *  <br/><br/>
     *  For <b>GetShippingCosts</b> call, this is the shipping cost model associated with the shipping service option in the <b>ShippingServiceName</b> field. The name of the shipping service option is not returned for the <b>GetSingleItem</b> and <b>GetMultipleItems</b> calls calls.
     *
     * @return string
     */
    public function getShippingType()
    {
        return $this->shippingType;
    }

    /**
     * Sets a new shippingType
     *
     * This enumeration value indicates the shipping cost model associated with the lowest-priced shipping service option that is available to the eBay user making the call. Examples of shipping cost models include flat-rate and
     *  calculated shipping.
     *  <br/><br/>
     *  For <b>GetShippingCosts</b> call, this is the shipping cost model associated with the shipping service option in the <b>ShippingServiceName</b> field. The name of the shipping service option is not returned for the <b>GetSingleItem</b> and <b>GetMultipleItems</b> calls calls.
     *
     * @param string $shippingType
     * @return self
     */
    public function setShippingType($shippingType)
    {
        $this->shippingType = $shippingType;
        return $this;
    }

    /**
     * Gets as localPickup
     *
     * This field is only returned (as <code>true</code>) if 'Local Pickup' is the only available logistic option (no shipping options). With 'Local Pickup', the seller and buyer arrange the pickup location and time (off of the eBay platform).
     *
     * @return bool
     */
    public function getLocalPickup()
    {
        return $this->localPickup;
    }

    /**
     * Sets a new localPickup
     *
     * This field is only returned (as <code>true</code>) if 'Local Pickup' is the only available logistic option (no shipping options). With 'Local Pickup', the seller and buyer arrange the pickup location and time (off of the eBay platform).
     *
     * @param bool $localPickup
     * @return self
     */
    public function setLocalPickup($localPickup)
    {
        $this->localPickup = $localPickup;
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
     * Gets as listedShippingServiceCost
     *
     * This is the localized cost to ship the item using the cheapest available domestic or international shipping service option. If the item is located in Germany, but the shipping destination is the US, this field will show the cost in Euros (EUR) and the <b>ShippingServiceCost</b> will show the cost in US dollars (USD).
     *  <br/><br/>
     *  For <b>GetShippingCosts</b> call, this is the localized base shipping cost to ship the item using the shipping service option in the <b>ShippingServiceName</b> field. The quantity specified in the <b>QuantitySold</b> field in the call request is taken into account when calculating the cost.
     *  <br/><br/>
     *  For <b>GetSingleItem</b> and <b>GetMultipleItems</b> calls, this is the localized base shipping cost of the cheapest available shipping service option to the country specified in the Site-ID header. The name of the shipping service option is not returned for these calls.
     *
     * @return \Nogrod\eBaySDK\Shopping\AmountType
     */
    public function getListedShippingServiceCost()
    {
        return $this->listedShippingServiceCost;
    }

    /**
     * Sets a new listedShippingServiceCost
     *
     * This is the localized cost to ship the item using the cheapest available domestic or international shipping service option. If the item is located in Germany, but the shipping destination is the US, this field will show the cost in Euros (EUR) and the <b>ShippingServiceCost</b> will show the cost in US dollars (USD).
     *  <br/><br/>
     *  For <b>GetShippingCosts</b> call, this is the localized base shipping cost to ship the item using the shipping service option in the <b>ShippingServiceName</b> field. The quantity specified in the <b>QuantitySold</b> field in the call request is taken into account when calculating the cost.
     *  <br/><br/>
     *  For <b>GetSingleItem</b> and <b>GetMultipleItems</b> calls, this is the localized base shipping cost of the cheapest available shipping service option to the country specified in the Site-ID header. The name of the shipping service option is not returned for these calls.
     *
     * @param \Nogrod\eBaySDK\Shopping\AmountType $listedShippingServiceCost
     * @return self
     */
    public function setListedShippingServiceCost(\Nogrod\eBaySDK\Shopping\AmountType $listedShippingServiceCost)
    {
        $this->listedShippingServiceCost = $listedShippingServiceCost;
        return $this;
    }

    /**
     * Gets as importCharge
     *
     * The total cost of customs and taxes for the international leg of an order shipped using the Global Shipping Program. This amount is calculated and supplied for each item by the international shipping provider when a buyer views the item properties.
     *
     * @return \Nogrod\eBaySDK\Shopping\AmountType
     */
    public function getImportCharge()
    {
        return $this->importCharge;
    }

    /**
     * Sets a new importCharge
     *
     * The total cost of customs and taxes for the international leg of an order shipped using the Global Shipping Program. This amount is calculated and supplied for each item by the international shipping provider when a buyer views the item properties.
     *
     * @param \Nogrod\eBaySDK\Shopping\AmountType $importCharge
     * @return self
     */
    public function setImportCharge(\Nogrod\eBaySDK\Shopping\AmountType $importCharge)
    {
        $this->importCharge = $importCharge;
        return $this;
    }

    /**
     * Gets as logisticPlanType
     *
     * This field is for future use.
     *
     * @return string
     */
    public function getLogisticPlanType()
    {
        return $this->logisticPlanType;
    }

    /**
     * Sets a new logisticPlanType
     *
     * This field is for future use.
     *
     * @param string $logisticPlanType
     * @return self
     */
    public function setLogisticPlanType($logisticPlanType)
    {
        $this->logisticPlanType = $logisticPlanType;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getShippingServiceName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingServiceName", $value);
        }
        $value = $this->getShippingServiceCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingServiceCost", $value);
        }
        $value = $this->getInsuranceCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InsuranceCost", $value);
        }
        $value = $this->getShippingType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingType", $value);
        }
        $value = $this->getLocalPickup();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalPickup", $value);
        }
        $value = $this->getInsuranceOption();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InsuranceOption", $value);
        }
        $value = $this->getListedShippingServiceCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ListedShippingServiceCost", $value);
        }
        $value = $this->getImportCharge();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ImportCharge", $value);
        }
        $value = $this->getLogisticPlanType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LogisticPlanType", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingServiceName');
        if (null !== $value) {
            $this->setShippingServiceName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingServiceCost');
        if (null !== $value) {
            $this->setShippingServiceCost(\Nogrod\eBaySDK\Shopping\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InsuranceCost');
        if (null !== $value) {
            $this->setInsuranceCost(\Nogrod\eBaySDK\Shopping\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingType');
        if (null !== $value) {
            $this->setShippingType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalPickup');
        if (null !== $value) {
            $this->setLocalPickup($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InsuranceOption');
        if (null !== $value) {
            $this->setInsuranceOption($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListedShippingServiceCost');
        if (null !== $value) {
            $this->setListedShippingServiceCost(\Nogrod\eBaySDK\Shopping\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ImportCharge');
        if (null !== $value) {
            $this->setImportCharge(\Nogrod\eBaySDK\Shopping\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LogisticPlanType');
        if (null !== $value) {
            $this->setLogisticPlanType($value);
        }
    }
}
