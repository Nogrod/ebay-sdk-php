<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ShippingPolicyInfoType
 *
 * ShippingPolicyInfo:
 * XSD Type: ShippingPolicyInfo
 */
class ShippingPolicyInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * shipping policy name specified by seller.
     *
     * @var string $shippingPolicyName
     */
    private $shippingPolicyName = null;

    /**
     * The type of shipping service opted by seller, during listing for domestic locations.
     *
     * @var string $domesticShippingType
     */
    private $domesticShippingType = null;

    /**
     * The type of shipping service opted by seller, during listing for international locations.
     *
     * @var string $intlShippingType
     */
    private $intlShippingType = null;

    /**
     * Specifies the maximum number of business days the seller commits to for preparing an
     *  item to be shipped after receiving a cleared payment. This time does not include the
     *  shipping time (the carrier's transit time).
     *
     * @var int $dispatchTimeMax
     */
    private $dispatchTimeMax = null;

    /**
     * Describe reason for dispatch time.
     *
     * @var string $dispatchTimeReason
     */
    private $dispatchTimeReason = null;

    /**
     * This holds the value of shipping option.
     *  Have to pass numerics in request.
     *  SITE_ONLY --> 0
     *  SITE_PLUS_REGIONS --> 1
     *  WORLD_WIDE --> 2
     *  WILL_NOT_SHIP --> 3
     *  TERMS_AND_CONDITIONS_ONLY --> 4
     *  INVALID --> -99999999
     *
     * @var string $shippingOption
     */
    private $shippingOption = null;

    /**
     * List of regions to which seller is not intended to ship the item.
     *
     * @var string[] $excludeShipToLocation
     */
    private $excludeShipToLocation = [

    ];

    /**
     * Shipping Discount information setup by the seller for particular item.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingProfileDiscountInfoType $shippingProfileDiscountInfo
     */
    private $shippingProfileDiscountInfo = null;

    /**
     * Place holder for Freight shipping.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\FreightShippingType $freightShipping
     */
    private $freightShipping = null;

    /**
     * List of locations to which seller intended to ship the current item.
     *
     * @var string[] $shipToLocations
     */
    private $shipToLocations = [

    ];

    /**
     * Place holder for all domestic shipping services.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyInfoServiceType[] $domesticShippingPolicyInfoService
     */
    private $domesticShippingPolicyInfoService = [

    ];

    /**
     * Place holder for all international shipping services.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyInfoServiceType[] $intlShippingPolicyInfoService
     */
    private $intlShippingPolicyInfoService = [

    ];

    /**
     * Insurance option opted by the seller.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\InsuranceType $insurance
     */
    private $insurance = null;

    /**
     * @var string $intlRateTable
     */
    private $intlRateTable = null;

    /**
     * @var string $domesticRateTable
     */
    private $domesticRateTable = null;

    /**
     * HandlingFee for the item.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $packagingHandlingCosts
     */
    private $packagingHandlingCosts = null;

    /**
     * NA. Currently not in use.[by
     *  CoreShippingService.]
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $internationalPackagingHandlingCosts
     */
    private $internationalPackagingHandlingCosts = null;

    /**
     * @var string $shippingPolicyCurrency
     */
    private $shippingPolicyCurrency = null;

    /**
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyIdentityType $shippingPolicyIdentity
     */
    private $shippingPolicyIdentity = null;

    /**
     * If GSP service checkbox is checked in the UI, this tag will hold the value 'True'
     *  else tag will hold the value 'False'
     *
     * @var bool $globalShipping
     */
    private $globalShipping = null;

    /**
     * If EligibleForPickupDropOff option checkbox is checked in the UI, this tag will hold the value 'True'
     *  else tag will hold the value 'False'
     *
     * @var bool $eligibleForPickupDropOff
     */
    private $eligibleForPickupDropOff = null;

    /**
     * Gets as shippingPolicyName
     *
     * shipping policy name specified by seller.
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
     * shipping policy name specified by seller.
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
     * The type of shipping service opted by seller, during listing for domestic locations.
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
     * The type of shipping service opted by seller, during listing for domestic locations.
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
     * The type of shipping service opted by seller, during listing for international locations.
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
     * The type of shipping service opted by seller, during listing for international locations.
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
     * Specifies the maximum number of business days the seller commits to for preparing an
     *  item to be shipped after receiving a cleared payment. This time does not include the
     *  shipping time (the carrier's transit time).
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
     * Specifies the maximum number of business days the seller commits to for preparing an
     *  item to be shipped after receiving a cleared payment. This time does not include the
     *  shipping time (the carrier's transit time).
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
     * Describe reason for dispatch time.
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
     * Describe reason for dispatch time.
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
     * This holds the value of shipping option.
     *  Have to pass numerics in request.
     *  SITE_ONLY --> 0
     *  SITE_PLUS_REGIONS --> 1
     *  WORLD_WIDE --> 2
     *  WILL_NOT_SHIP --> 3
     *  TERMS_AND_CONDITIONS_ONLY --> 4
     *  INVALID --> -99999999
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
     * This holds the value of shipping option.
     *  Have to pass numerics in request.
     *  SITE_ONLY --> 0
     *  SITE_PLUS_REGIONS --> 1
     *  WORLD_WIDE --> 2
     *  WILL_NOT_SHIP --> 3
     *  TERMS_AND_CONDITIONS_ONLY --> 4
     *  INVALID --> -99999999
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
     * List of regions to which seller is not intended to ship the item.
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
     * List of regions to which seller is not intended to ship the item.
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
     * List of regions to which seller is not intended to ship the item.
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
     * List of regions to which seller is not intended to ship the item.
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
     * List of regions to which seller is not intended to ship the item.
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
     * Shipping Discount information setup by the seller for particular item.
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
     * Shipping Discount information setup by the seller for particular item.
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
     * Place holder for Freight shipping.
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
     * Place holder for Freight shipping.
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
     * List of locations to which seller intended to ship the current item.
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
     * List of locations to which seller intended to ship the current item.
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
     * List of locations to which seller intended to ship the current item.
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
     * List of locations to which seller intended to ship the current item.
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
     * List of locations to which seller intended to ship the current item.
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
     * Place holder for all domestic shipping services.
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
     * Place holder for all domestic shipping services.
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
     * Place holder for all domestic shipping services.
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
     * Place holder for all domestic shipping services.
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
     * Place holder for all domestic shipping services.
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
     * Place holder for all international shipping services.
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
     * Place holder for all international shipping services.
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
     * Place holder for all international shipping services.
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
     * Place holder for all international shipping services.
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
     * Place holder for all international shipping services.
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
     * Insurance option opted by the seller.
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
     * Insurance option opted by the seller.
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
     * @return string
     */
    public function getIntlRateTable()
    {
        return $this->intlRateTable;
    }

    /**
     * Sets a new intlRateTable
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
     * @return string
     */
    public function getDomesticRateTable()
    {
        return $this->domesticRateTable;
    }

    /**
     * Sets a new domesticRateTable
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
     * HandlingFee for the item.
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
     * HandlingFee for the item.
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
     * NA. Currently not in use.[by
     *  CoreShippingService.]
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
     * NA. Currently not in use.[by
     *  CoreShippingService.]
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
     * @return string
     */
    public function getShippingPolicyCurrency()
    {
        return $this->shippingPolicyCurrency;
    }

    /**
     * Sets a new shippingPolicyCurrency
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
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyIdentityType
     */
    public function getShippingPolicyIdentity()
    {
        return $this->shippingPolicyIdentity;
    }

    /**
     * Sets a new shippingPolicyIdentity
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
     * If GSP service checkbox is checked in the UI, this tag will hold the value 'True'
     *  else tag will hold the value 'False'
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
     * If GSP service checkbox is checked in the UI, this tag will hold the value 'True'
     *  else tag will hold the value 'False'
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
     * If EligibleForPickupDropOff option checkbox is checked in the UI, this tag will hold the value 'True'
     *  else tag will hold the value 'False'
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
     * If EligibleForPickupDropOff option checkbox is checked in the UI, this tag will hold the value 'True'
     *  else tag will hold the value 'False'
     *
     * @param bool $eligibleForPickupDropOff
     * @return self
     */
    public function setEligibleForPickupDropOff($eligibleForPickupDropOff)
    {
        $this->eligibleForPickupDropOff = $eligibleForPickupDropOff;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
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
            $writer->write(array_map(function ($v) {
                return ["excludeShipToLocation" => $v];
            }, $value));
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
            $writer->write(array_map(function ($v) {
                return ["shipToLocations" => $v];
            }, $value));
        }
        $value = $this->getDomesticShippingPolicyInfoService();
        if (null !== $value && !empty($this->getDomesticShippingPolicyInfoService())) {
            $writer->write(array_map(function ($v) {
                return ["domesticShippingPolicyInfoService" => $v];
            }, $value));
        }
        $value = $this->getIntlShippingPolicyInfoService();
        if (null !== $value && !empty($this->getIntlShippingPolicyInfoService())) {
            $writer->write(array_map(function ($v) {
                return ["intlShippingPolicyInfoService" => $v];
            }, $value));
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
            $this->setDomesticShippingPolicyInfoService(array_map(function ($v) {
                return \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyInfoServiceType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}intlShippingPolicyInfoService', true);
        if (null !== $value && !empty($value)) {
            $this->setIntlShippingPolicyInfoService(array_map(function ($v) {
                return \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyInfoServiceType::fromKeyValue($v);
            }, $value));
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
