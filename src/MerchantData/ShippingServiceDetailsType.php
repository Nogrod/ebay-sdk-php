<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing ShippingServiceDetailsType
 *
 * Type used by the <b>ShippingServiceDetails</b> containers that are returned in the <b>GeteBayDetails</b> response. Each <b>ShippingServiceDetails</b> container consists of detailed information about each shipping service option available for the specified country. These details include the shipping service enumeration value to use when specifying shipping service options in an Add/Revise/Relist call, the shipping carrier, the shipping category (e.g. expedited, economy, etc.), the shipping packages that can be used, and the shipping delivery window.
 *  <br/><br/>
 *  <b>ShippingServiceDetails</b> containers are returned if a <b>DetailName</b> field is included in the call request and set to <code>ShippingServiceDetails</code>, or if no <b>DetailName</b> field is included in the call request.
 * XSD Type: ShippingServiceDetailsType
 */
class ShippingServiceDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Display string that applications can use to present a list of shipping service
     *  options in a more user-friendly format (such as in a drop-down list).
     *
     * @var string $description
     */
    private $description = null;

    /**
     * Indicates whether a domestic shipping service option is an expedited shipping service. This field is only returned under a <b>ShippingServiceDetails</b> if <code>true</code>. Expedited generally means that the shipment of the order can arrive at the buyer's location within one or two business days.
     *
     * @var bool $expeditedService
     */
    private $expeditedService = null;

    /**
     * Indicates whether the shipping service is an international shipping service.
     *  An international shipping service option is required if an item is being
     *  shipped from one country (origin) to another (destination).
     *
     * @var bool $internationalService
     */
    private $internationalService = null;

    /**
     * The name of shipping service option. The ShippingServiceDetails.<strong>ValidForSellingFlow</strong> flag must also be present and <code>true</code>. Otherwise, that particular shipping service option is no longer valid and cannot be offered to buyers through a listing.
     *  <br/><br/>
     *  This token value is the text that a seller will provide in the ShippingDetails.ShippingServiceOptions.<strong>ShippingService</strong> field when creating a listing.
     *
     * @var string $shippingService
     */
    private $shippingService = null;

    /**
     * Numeric identifier. A value greater than 50000 represents an
     *  international shipping service (confirmed by
     *  <strong>InternationalShippingService</strong> being true). Some applications use this ID
     *  to look up shipping services more efficiently.
     *
     * @var int $shippingServiceID
     */
    private $shippingServiceID = null;

    /**
     * The integer value returned here indicates the maximum number of business days that the shipping carrier (indicated in the corresponding <b>ShippingCarrier</b> field) will take to ship an item using the corresponding shipping service option (indicated in the <b>ShippingService</b> field).
     *  <br><br>
     *  This maximum shipping time does not include the seller's handling time, and the clock starts on the shipping time only after the seller has delivered the item to the shipping carrier for shipment to the buyer. 'Business days' can vary by shipping carrier and by country, but 'business days' are generally Monday through Friday, excluding holidays. This field is returned if defined for that particular shipping service option.
     *  <br><br>
     *  For sellers opted into and using eBay Guaranteed Delivery, they should be looking at this value, and this value plus their handling time stated in the listing cannot be greater than 4 business days in order for that listing to be eligible for eBay Guaranteed Delivery.
     *
     * @var int $shippingTimeMax
     */
    private $shippingTimeMax = null;

    /**
     * The integer value returned here indicates the minimum number of business days that the shipping carrier (indicated in the corresponding <b>ShippingCarrier</b> field) will take to ship an item using the corresponding shipping service option (indicated in the <b>ShippingService</b> field).
     *  <br><br>
     *  This minimum shipping time does not include the seller's handling time, and the clock starts on the shipping time only after the seller has delivered the item to the shipping carrier for shipment to the buyer. 'Business days' can vary by shipping carrier and by country, but 'business days' are generally Monday through Friday, excluding holidays. This field is returned if defined for that particular shipping service option.
     *
     * @var int $shippingTimeMin
     */
    private $shippingTimeMin = null;

    /**
     * For future use.
     *
     * @var string $shippingServiceCode
     */
    private $shippingServiceCode = null;

    /**
     * The shipping cost types that this shipping service option supports, such as flat-rate or calculated. A <strong>ServiceType</strong> field is returned for each shipping cost type supported by the shipping service option.
     *
     * @var string[] $serviceType
     */
    private $serviceType = [
        
    ];

    /**
     * The shipping packages that can be used for this shipping service option. A <strong>ShippingPackage</strong> field is returned for each shipping package supported by the shipping service option.
     *
     * @var string[] $shippingPackage
     */
    private $shippingPackage = [
        
    ];

    /**
     * This field is only returned if the shipping service option requires that package dimensions are provided by the seller. This field is only returned if 'true'.
     *
     * @var bool $dimensionsRequired
     */
    private $dimensionsRequired = null;

    /**
     * If this field is returned as 'true', the shipping service option can be used in a Add/Revise/Relist API call. If this field is returned as 'false', the shipping service option is not currently supported and cannot be used in a Add/Revise/Relist API call.
     *
     * @var bool $validForSellingFlow
     */
    private $validForSellingFlow = null;

    /**
     * This field is only returned if 'true', and indicates that a shipping surcharge is applicable for this shipping service option.
     *
     * @var bool $surchargeApplicable
     */
    private $surchargeApplicable = null;

    /**
     * The enumeration value for the shipping carrier associated with the shipping service option.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> Commonly used shipping carriers can also be found by calling <b>GeteBayDetails</b> with <b>DetailName</b> set to <code>ShippingCarrierDetails</code> and examining the returned <b>ShippingCarrierDetails.ShippingCarrier</b> field.
     *  </span>
     *
     * @var string[] $shippingCarrier
     */
    private $shippingCarrier = [
        
    ];

    /**
     * This field is only returned if'true', and indicates that the corresponding <b>ShippingServiceDetails.ShippingService</b> value is a COD (Cash-On-Delivery) service.
     *  <br/><br/>
     *  COD shipping services are not supported by all sites.
     *
     * @var bool $cODService
     */
    private $cODService = null;

    /**
     * A mechanism by which details about deprecation of a shipping service is
     *  announced. See also MappedToShippingServiceID.
     *  If this container is empty, it means that there is no mapping for this
     *  shipping service and that the shipping service will be dropped from the
     *  listing without an accompanying warning message from the eBay API.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AnnouncementMessageType[] $deprecationDetails
     */
    private $deprecationDetails = [
        
    ];

    /**
     * The ID of another shipping service that will be used when a
     *  shipping service is deprecated. See also DeprecationDetails.
     *
     * @var int $mappedToShippingServiceID
     */
    private $mappedToShippingServiceID = null;

    /**
     * If returned, this is the shipping service group to which the shipping service belongs. Valid values are found in CostGroupFlatCodeType.
     *
     * @var string $costGroupFlat
     */
    private $costGroupFlat = null;

    /**
     * Shipping Package level details for the enclosing shipping service, this
     *  complex type replaces the existing ShippingPackage type.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ShippingServicePackageDetailsType[] $shippingServicePackageDetails
     */
    private $shippingServicePackageDetails = [
        
    ];

    /**
     * If true, a seller who selects this package type for the listing and then offers this shipping service must specify WeightMajor and WeightMinor in the item definition. If not returned, WeightRequired is false.
     *
     * @var bool $weightRequired
     */
    private $weightRequired = null;

    /**
     * Returns the latest version number for this field. The version can be
     *  used to determine if and when to refresh cached client data.
     *
     * @var string $detailVersion
     */
    private $detailVersion = null;

    /**
     * Gives the time in GMT that the feature flags for the details were last
     *  updated. This timestamp can be used to determine if and when to refresh
     *  cached client data.
     *
     * @var \DateTime $updateTime
     */
    private $updateTime = null;

    /**
     * Indicates the shipping category. Shipping categories include the following: <code>ECONOMY</code>, <code>STANDARD</code>, <code>EXPEDITED</code>, <code>ONE_DAY</code>, <code>PICKUP</code>, <code>OTHER</code>, and <code>NONE</code>. International shipping services are generally grouped into the <code>NONE</code> category. For more information about these shipping categories, see the <a href="http://pages.ebay.com/sellerinformation/shipping/chooseservice.html">Shipping Basics</a> page on the eBay Shipping Center site.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> This field is returned only for those sites that support shipping categories: US (0), CA (2), CAFR (210), UK (3), AU (15), FR (71), DE (77), IT (101) and ES (186).
     *  </span>
     *
     * @var string $shippingCategory
     */
    private $shippingCategory = null;

    /**
     * Gets as description
     *
     * Display string that applications can use to present a list of shipping service
     *  options in a more user-friendly format (such as in a drop-down list).
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Display string that applications can use to present a list of shipping service
     *  options in a more user-friendly format (such as in a drop-down list).
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as expeditedService
     *
     * Indicates whether a domestic shipping service option is an expedited shipping service. This field is only returned under a <b>ShippingServiceDetails</b> if <code>true</code>. Expedited generally means that the shipment of the order can arrive at the buyer's location within one or two business days.
     *
     * @return bool
     */
    public function getExpeditedService()
    {
        return $this->expeditedService;
    }

    /**
     * Sets a new expeditedService
     *
     * Indicates whether a domestic shipping service option is an expedited shipping service. This field is only returned under a <b>ShippingServiceDetails</b> if <code>true</code>. Expedited generally means that the shipment of the order can arrive at the buyer's location within one or two business days.
     *
     * @param bool $expeditedService
     * @return self
     */
    public function setExpeditedService($expeditedService)
    {
        $this->expeditedService = $expeditedService;
        return $this;
    }

    /**
     * Gets as internationalService
     *
     * Indicates whether the shipping service is an international shipping service.
     *  An international shipping service option is required if an item is being
     *  shipped from one country (origin) to another (destination).
     *
     * @return bool
     */
    public function getInternationalService()
    {
        return $this->internationalService;
    }

    /**
     * Sets a new internationalService
     *
     * Indicates whether the shipping service is an international shipping service.
     *  An international shipping service option is required if an item is being
     *  shipped from one country (origin) to another (destination).
     *
     * @param bool $internationalService
     * @return self
     */
    public function setInternationalService($internationalService)
    {
        $this->internationalService = $internationalService;
        return $this;
    }

    /**
     * Gets as shippingService
     *
     * The name of shipping service option. The ShippingServiceDetails.<strong>ValidForSellingFlow</strong> flag must also be present and <code>true</code>. Otherwise, that particular shipping service option is no longer valid and cannot be offered to buyers through a listing.
     *  <br/><br/>
     *  This token value is the text that a seller will provide in the ShippingDetails.ShippingServiceOptions.<strong>ShippingService</strong> field when creating a listing.
     *
     * @return string
     */
    public function getShippingService()
    {
        return $this->shippingService;
    }

    /**
     * Sets a new shippingService
     *
     * The name of shipping service option. The ShippingServiceDetails.<strong>ValidForSellingFlow</strong> flag must also be present and <code>true</code>. Otherwise, that particular shipping service option is no longer valid and cannot be offered to buyers through a listing.
     *  <br/><br/>
     *  This token value is the text that a seller will provide in the ShippingDetails.ShippingServiceOptions.<strong>ShippingService</strong> field when creating a listing.
     *
     * @param string $shippingService
     * @return self
     */
    public function setShippingService($shippingService)
    {
        $this->shippingService = $shippingService;
        return $this;
    }

    /**
     * Gets as shippingServiceID
     *
     * Numeric identifier. A value greater than 50000 represents an
     *  international shipping service (confirmed by
     *  <strong>InternationalShippingService</strong> being true). Some applications use this ID
     *  to look up shipping services more efficiently.
     *
     * @return int
     */
    public function getShippingServiceID()
    {
        return $this->shippingServiceID;
    }

    /**
     * Sets a new shippingServiceID
     *
     * Numeric identifier. A value greater than 50000 represents an
     *  international shipping service (confirmed by
     *  <strong>InternationalShippingService</strong> being true). Some applications use this ID
     *  to look up shipping services more efficiently.
     *
     * @param int $shippingServiceID
     * @return self
     */
    public function setShippingServiceID($shippingServiceID)
    {
        $this->shippingServiceID = $shippingServiceID;
        return $this;
    }

    /**
     * Gets as shippingTimeMax
     *
     * The integer value returned here indicates the maximum number of business days that the shipping carrier (indicated in the corresponding <b>ShippingCarrier</b> field) will take to ship an item using the corresponding shipping service option (indicated in the <b>ShippingService</b> field).
     *  <br><br>
     *  This maximum shipping time does not include the seller's handling time, and the clock starts on the shipping time only after the seller has delivered the item to the shipping carrier for shipment to the buyer. 'Business days' can vary by shipping carrier and by country, but 'business days' are generally Monday through Friday, excluding holidays. This field is returned if defined for that particular shipping service option.
     *  <br><br>
     *  For sellers opted into and using eBay Guaranteed Delivery, they should be looking at this value, and this value plus their handling time stated in the listing cannot be greater than 4 business days in order for that listing to be eligible for eBay Guaranteed Delivery.
     *
     * @return int
     */
    public function getShippingTimeMax()
    {
        return $this->shippingTimeMax;
    }

    /**
     * Sets a new shippingTimeMax
     *
     * The integer value returned here indicates the maximum number of business days that the shipping carrier (indicated in the corresponding <b>ShippingCarrier</b> field) will take to ship an item using the corresponding shipping service option (indicated in the <b>ShippingService</b> field).
     *  <br><br>
     *  This maximum shipping time does not include the seller's handling time, and the clock starts on the shipping time only after the seller has delivered the item to the shipping carrier for shipment to the buyer. 'Business days' can vary by shipping carrier and by country, but 'business days' are generally Monday through Friday, excluding holidays. This field is returned if defined for that particular shipping service option.
     *  <br><br>
     *  For sellers opted into and using eBay Guaranteed Delivery, they should be looking at this value, and this value plus their handling time stated in the listing cannot be greater than 4 business days in order for that listing to be eligible for eBay Guaranteed Delivery.
     *
     * @param int $shippingTimeMax
     * @return self
     */
    public function setShippingTimeMax($shippingTimeMax)
    {
        $this->shippingTimeMax = $shippingTimeMax;
        return $this;
    }

    /**
     * Gets as shippingTimeMin
     *
     * The integer value returned here indicates the minimum number of business days that the shipping carrier (indicated in the corresponding <b>ShippingCarrier</b> field) will take to ship an item using the corresponding shipping service option (indicated in the <b>ShippingService</b> field).
     *  <br><br>
     *  This minimum shipping time does not include the seller's handling time, and the clock starts on the shipping time only after the seller has delivered the item to the shipping carrier for shipment to the buyer. 'Business days' can vary by shipping carrier and by country, but 'business days' are generally Monday through Friday, excluding holidays. This field is returned if defined for that particular shipping service option.
     *
     * @return int
     */
    public function getShippingTimeMin()
    {
        return $this->shippingTimeMin;
    }

    /**
     * Sets a new shippingTimeMin
     *
     * The integer value returned here indicates the minimum number of business days that the shipping carrier (indicated in the corresponding <b>ShippingCarrier</b> field) will take to ship an item using the corresponding shipping service option (indicated in the <b>ShippingService</b> field).
     *  <br><br>
     *  This minimum shipping time does not include the seller's handling time, and the clock starts on the shipping time only after the seller has delivered the item to the shipping carrier for shipment to the buyer. 'Business days' can vary by shipping carrier and by country, but 'business days' are generally Monday through Friday, excluding holidays. This field is returned if defined for that particular shipping service option.
     *
     * @param int $shippingTimeMin
     * @return self
     */
    public function setShippingTimeMin($shippingTimeMin)
    {
        $this->shippingTimeMin = $shippingTimeMin;
        return $this;
    }

    /**
     * Gets as shippingServiceCode
     *
     * For future use.
     *
     * @return string
     */
    public function getShippingServiceCode()
    {
        return $this->shippingServiceCode;
    }

    /**
     * Sets a new shippingServiceCode
     *
     * For future use.
     *
     * @param string $shippingServiceCode
     * @return self
     */
    public function setShippingServiceCode($shippingServiceCode)
    {
        $this->shippingServiceCode = $shippingServiceCode;
        return $this;
    }

    /**
     * Adds as serviceType
     *
     * The shipping cost types that this shipping service option supports, such as flat-rate or calculated. A <strong>ServiceType</strong> field is returned for each shipping cost type supported by the shipping service option.
     *
     * @return self
     * @param string $serviceType
     */
    public function addToServiceType($serviceType)
    {
        $this->serviceType[] = $serviceType;
        return $this;
    }

    /**
     * isset serviceType
     *
     * The shipping cost types that this shipping service option supports, such as flat-rate or calculated. A <strong>ServiceType</strong> field is returned for each shipping cost type supported by the shipping service option.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceType($index)
    {
        return isset($this->serviceType[$index]);
    }

    /**
     * unset serviceType
     *
     * The shipping cost types that this shipping service option supports, such as flat-rate or calculated. A <strong>ServiceType</strong> field is returned for each shipping cost type supported by the shipping service option.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceType($index)
    {
        unset($this->serviceType[$index]);
    }

    /**
     * Gets as serviceType
     *
     * The shipping cost types that this shipping service option supports, such as flat-rate or calculated. A <strong>ServiceType</strong> field is returned for each shipping cost type supported by the shipping service option.
     *
     * @return string[]
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * Sets a new serviceType
     *
     * The shipping cost types that this shipping service option supports, such as flat-rate or calculated. A <strong>ServiceType</strong> field is returned for each shipping cost type supported by the shipping service option.
     *
     * @param string $serviceType
     * @return self
     */
    public function setServiceType(array $serviceType)
    {
        $this->serviceType = $serviceType;
        return $this;
    }

    /**
     * Adds as shippingPackage
     *
     * The shipping packages that can be used for this shipping service option. A <strong>ShippingPackage</strong> field is returned for each shipping package supported by the shipping service option.
     *
     * @return self
     * @param string $shippingPackage
     */
    public function addToShippingPackage($shippingPackage)
    {
        $this->shippingPackage[] = $shippingPackage;
        return $this;
    }

    /**
     * isset shippingPackage
     *
     * The shipping packages that can be used for this shipping service option. A <strong>ShippingPackage</strong> field is returned for each shipping package supported by the shipping service option.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShippingPackage($index)
    {
        return isset($this->shippingPackage[$index]);
    }

    /**
     * unset shippingPackage
     *
     * The shipping packages that can be used for this shipping service option. A <strong>ShippingPackage</strong> field is returned for each shipping package supported by the shipping service option.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShippingPackage($index)
    {
        unset($this->shippingPackage[$index]);
    }

    /**
     * Gets as shippingPackage
     *
     * The shipping packages that can be used for this shipping service option. A <strong>ShippingPackage</strong> field is returned for each shipping package supported by the shipping service option.
     *
     * @return string[]
     */
    public function getShippingPackage()
    {
        return $this->shippingPackage;
    }

    /**
     * Sets a new shippingPackage
     *
     * The shipping packages that can be used for this shipping service option. A <strong>ShippingPackage</strong> field is returned for each shipping package supported by the shipping service option.
     *
     * @param string $shippingPackage
     * @return self
     */
    public function setShippingPackage(array $shippingPackage)
    {
        $this->shippingPackage = $shippingPackage;
        return $this;
    }

    /**
     * Gets as dimensionsRequired
     *
     * This field is only returned if the shipping service option requires that package dimensions are provided by the seller. This field is only returned if 'true'.
     *
     * @return bool
     */
    public function getDimensionsRequired()
    {
        return $this->dimensionsRequired;
    }

    /**
     * Sets a new dimensionsRequired
     *
     * This field is only returned if the shipping service option requires that package dimensions are provided by the seller. This field is only returned if 'true'.
     *
     * @param bool $dimensionsRequired
     * @return self
     */
    public function setDimensionsRequired($dimensionsRequired)
    {
        $this->dimensionsRequired = $dimensionsRequired;
        return $this;
    }

    /**
     * Gets as validForSellingFlow
     *
     * If this field is returned as 'true', the shipping service option can be used in a Add/Revise/Relist API call. If this field is returned as 'false', the shipping service option is not currently supported and cannot be used in a Add/Revise/Relist API call.
     *
     * @return bool
     */
    public function getValidForSellingFlow()
    {
        return $this->validForSellingFlow;
    }

    /**
     * Sets a new validForSellingFlow
     *
     * If this field is returned as 'true', the shipping service option can be used in a Add/Revise/Relist API call. If this field is returned as 'false', the shipping service option is not currently supported and cannot be used in a Add/Revise/Relist API call.
     *
     * @param bool $validForSellingFlow
     * @return self
     */
    public function setValidForSellingFlow($validForSellingFlow)
    {
        $this->validForSellingFlow = $validForSellingFlow;
        return $this;
    }

    /**
     * Gets as surchargeApplicable
     *
     * This field is only returned if 'true', and indicates that a shipping surcharge is applicable for this shipping service option.
     *
     * @return bool
     */
    public function getSurchargeApplicable()
    {
        return $this->surchargeApplicable;
    }

    /**
     * Sets a new surchargeApplicable
     *
     * This field is only returned if 'true', and indicates that a shipping surcharge is applicable for this shipping service option.
     *
     * @param bool $surchargeApplicable
     * @return self
     */
    public function setSurchargeApplicable($surchargeApplicable)
    {
        $this->surchargeApplicable = $surchargeApplicable;
        return $this;
    }

    /**
     * Adds as shippingCarrier
     *
     * The enumeration value for the shipping carrier associated with the shipping service option.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> Commonly used shipping carriers can also be found by calling <b>GeteBayDetails</b> with <b>DetailName</b> set to <code>ShippingCarrierDetails</code> and examining the returned <b>ShippingCarrierDetails.ShippingCarrier</b> field.
     *  </span>
     *
     * @return self
     * @param string $shippingCarrier
     */
    public function addToShippingCarrier($shippingCarrier)
    {
        $this->shippingCarrier[] = $shippingCarrier;
        return $this;
    }

    /**
     * isset shippingCarrier
     *
     * The enumeration value for the shipping carrier associated with the shipping service option.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> Commonly used shipping carriers can also be found by calling <b>GeteBayDetails</b> with <b>DetailName</b> set to <code>ShippingCarrierDetails</code> and examining the returned <b>ShippingCarrierDetails.ShippingCarrier</b> field.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShippingCarrier($index)
    {
        return isset($this->shippingCarrier[$index]);
    }

    /**
     * unset shippingCarrier
     *
     * The enumeration value for the shipping carrier associated with the shipping service option.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> Commonly used shipping carriers can also be found by calling <b>GeteBayDetails</b> with <b>DetailName</b> set to <code>ShippingCarrierDetails</code> and examining the returned <b>ShippingCarrierDetails.ShippingCarrier</b> field.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShippingCarrier($index)
    {
        unset($this->shippingCarrier[$index]);
    }

    /**
     * Gets as shippingCarrier
     *
     * The enumeration value for the shipping carrier associated with the shipping service option.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> Commonly used shipping carriers can also be found by calling <b>GeteBayDetails</b> with <b>DetailName</b> set to <code>ShippingCarrierDetails</code> and examining the returned <b>ShippingCarrierDetails.ShippingCarrier</b> field.
     *  </span>
     *
     * @return string[]
     */
    public function getShippingCarrier()
    {
        return $this->shippingCarrier;
    }

    /**
     * Sets a new shippingCarrier
     *
     * The enumeration value for the shipping carrier associated with the shipping service option.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> Commonly used shipping carriers can also be found by calling <b>GeteBayDetails</b> with <b>DetailName</b> set to <code>ShippingCarrierDetails</code> and examining the returned <b>ShippingCarrierDetails.ShippingCarrier</b> field.
     *  </span>
     *
     * @param string $shippingCarrier
     * @return self
     */
    public function setShippingCarrier(array $shippingCarrier)
    {
        $this->shippingCarrier = $shippingCarrier;
        return $this;
    }

    /**
     * Gets as cODService
     *
     * This field is only returned if'true', and indicates that the corresponding <b>ShippingServiceDetails.ShippingService</b> value is a COD (Cash-On-Delivery) service.
     *  <br/><br/>
     *  COD shipping services are not supported by all sites.
     *
     * @return bool
     */
    public function getCODService()
    {
        return $this->cODService;
    }

    /**
     * Sets a new cODService
     *
     * This field is only returned if'true', and indicates that the corresponding <b>ShippingServiceDetails.ShippingService</b> value is a COD (Cash-On-Delivery) service.
     *  <br/><br/>
     *  COD shipping services are not supported by all sites.
     *
     * @param bool $cODService
     * @return self
     */
    public function setCODService($cODService)
    {
        $this->cODService = $cODService;
        return $this;
    }

    /**
     * Adds as deprecationDetails
     *
     * A mechanism by which details about deprecation of a shipping service is
     *  announced. See also MappedToShippingServiceID.
     *  If this container is empty, it means that there is no mapping for this
     *  shipping service and that the shipping service will be dropped from the
     *  listing without an accompanying warning message from the eBay API.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\AnnouncementMessageType $deprecationDetails
     */
    public function addToDeprecationDetails(\Nogrod\eBaySDK\MerchantData\AnnouncementMessageType $deprecationDetails)
    {
        $this->deprecationDetails[] = $deprecationDetails;
        return $this;
    }

    /**
     * isset deprecationDetails
     *
     * A mechanism by which details about deprecation of a shipping service is
     *  announced. See also MappedToShippingServiceID.
     *  If this container is empty, it means that there is no mapping for this
     *  shipping service and that the shipping service will be dropped from the
     *  listing without an accompanying warning message from the eBay API.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeprecationDetails($index)
    {
        return isset($this->deprecationDetails[$index]);
    }

    /**
     * unset deprecationDetails
     *
     * A mechanism by which details about deprecation of a shipping service is
     *  announced. See also MappedToShippingServiceID.
     *  If this container is empty, it means that there is no mapping for this
     *  shipping service and that the shipping service will be dropped from the
     *  listing without an accompanying warning message from the eBay API.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeprecationDetails($index)
    {
        unset($this->deprecationDetails[$index]);
    }

    /**
     * Gets as deprecationDetails
     *
     * A mechanism by which details about deprecation of a shipping service is
     *  announced. See also MappedToShippingServiceID.
     *  If this container is empty, it means that there is no mapping for this
     *  shipping service and that the shipping service will be dropped from the
     *  listing without an accompanying warning message from the eBay API.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AnnouncementMessageType[]
     */
    public function getDeprecationDetails()
    {
        return $this->deprecationDetails;
    }

    /**
     * Sets a new deprecationDetails
     *
     * A mechanism by which details about deprecation of a shipping service is
     *  announced. See also MappedToShippingServiceID.
     *  If this container is empty, it means that there is no mapping for this
     *  shipping service and that the shipping service will be dropped from the
     *  listing without an accompanying warning message from the eBay API.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AnnouncementMessageType[] $deprecationDetails
     * @return self
     */
    public function setDeprecationDetails(array $deprecationDetails)
    {
        $this->deprecationDetails = $deprecationDetails;
        return $this;
    }

    /**
     * Gets as mappedToShippingServiceID
     *
     * The ID of another shipping service that will be used when a
     *  shipping service is deprecated. See also DeprecationDetails.
     *
     * @return int
     */
    public function getMappedToShippingServiceID()
    {
        return $this->mappedToShippingServiceID;
    }

    /**
     * Sets a new mappedToShippingServiceID
     *
     * The ID of another shipping service that will be used when a
     *  shipping service is deprecated. See also DeprecationDetails.
     *
     * @param int $mappedToShippingServiceID
     * @return self
     */
    public function setMappedToShippingServiceID($mappedToShippingServiceID)
    {
        $this->mappedToShippingServiceID = $mappedToShippingServiceID;
        return $this;
    }

    /**
     * Gets as costGroupFlat
     *
     * If returned, this is the shipping service group to which the shipping service belongs. Valid values are found in CostGroupFlatCodeType.
     *
     * @return string
     */
    public function getCostGroupFlat()
    {
        return $this->costGroupFlat;
    }

    /**
     * Sets a new costGroupFlat
     *
     * If returned, this is the shipping service group to which the shipping service belongs. Valid values are found in CostGroupFlatCodeType.
     *
     * @param string $costGroupFlat
     * @return self
     */
    public function setCostGroupFlat($costGroupFlat)
    {
        $this->costGroupFlat = $costGroupFlat;
        return $this;
    }

    /**
     * Adds as shippingServicePackageDetails
     *
     * Shipping Package level details for the enclosing shipping service, this
     *  complex type replaces the existing ShippingPackage type.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\ShippingServicePackageDetailsType $shippingServicePackageDetails
     */
    public function addToShippingServicePackageDetails(\Nogrod\eBaySDK\MerchantData\ShippingServicePackageDetailsType $shippingServicePackageDetails)
    {
        $this->shippingServicePackageDetails[] = $shippingServicePackageDetails;
        return $this;
    }

    /**
     * isset shippingServicePackageDetails
     *
     * Shipping Package level details for the enclosing shipping service, this
     *  complex type replaces the existing ShippingPackage type.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShippingServicePackageDetails($index)
    {
        return isset($this->shippingServicePackageDetails[$index]);
    }

    /**
     * unset shippingServicePackageDetails
     *
     * Shipping Package level details for the enclosing shipping service, this
     *  complex type replaces the existing ShippingPackage type.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShippingServicePackageDetails($index)
    {
        unset($this->shippingServicePackageDetails[$index]);
    }

    /**
     * Gets as shippingServicePackageDetails
     *
     * Shipping Package level details for the enclosing shipping service, this
     *  complex type replaces the existing ShippingPackage type.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ShippingServicePackageDetailsType[]
     */
    public function getShippingServicePackageDetails()
    {
        return $this->shippingServicePackageDetails;
    }

    /**
     * Sets a new shippingServicePackageDetails
     *
     * Shipping Package level details for the enclosing shipping service, this
     *  complex type replaces the existing ShippingPackage type.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ShippingServicePackageDetailsType[] $shippingServicePackageDetails
     * @return self
     */
    public function setShippingServicePackageDetails(array $shippingServicePackageDetails)
    {
        $this->shippingServicePackageDetails = $shippingServicePackageDetails;
        return $this;
    }

    /**
     * Gets as weightRequired
     *
     * If true, a seller who selects this package type for the listing and then offers this shipping service must specify WeightMajor and WeightMinor in the item definition. If not returned, WeightRequired is false.
     *
     * @return bool
     */
    public function getWeightRequired()
    {
        return $this->weightRequired;
    }

    /**
     * Sets a new weightRequired
     *
     * If true, a seller who selects this package type for the listing and then offers this shipping service must specify WeightMajor and WeightMinor in the item definition. If not returned, WeightRequired is false.
     *
     * @param bool $weightRequired
     * @return self
     */
    public function setWeightRequired($weightRequired)
    {
        $this->weightRequired = $weightRequired;
        return $this;
    }

    /**
     * Gets as detailVersion
     *
     * Returns the latest version number for this field. The version can be
     *  used to determine if and when to refresh cached client data.
     *
     * @return string
     */
    public function getDetailVersion()
    {
        return $this->detailVersion;
    }

    /**
     * Sets a new detailVersion
     *
     * Returns the latest version number for this field. The version can be
     *  used to determine if and when to refresh cached client data.
     *
     * @param string $detailVersion
     * @return self
     */
    public function setDetailVersion($detailVersion)
    {
        $this->detailVersion = $detailVersion;
        return $this;
    }

    /**
     * Gets as updateTime
     *
     * Gives the time in GMT that the feature flags for the details were last
     *  updated. This timestamp can be used to determine if and when to refresh
     *  cached client data.
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
     * Gives the time in GMT that the feature flags for the details were last
     *  updated. This timestamp can be used to determine if and when to refresh
     *  cached client data.
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
     * Gets as shippingCategory
     *
     * Indicates the shipping category. Shipping categories include the following: <code>ECONOMY</code>, <code>STANDARD</code>, <code>EXPEDITED</code>, <code>ONE_DAY</code>, <code>PICKUP</code>, <code>OTHER</code>, and <code>NONE</code>. International shipping services are generally grouped into the <code>NONE</code> category. For more information about these shipping categories, see the <a href="http://pages.ebay.com/sellerinformation/shipping/chooseservice.html">Shipping Basics</a> page on the eBay Shipping Center site.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> This field is returned only for those sites that support shipping categories: US (0), CA (2), CAFR (210), UK (3), AU (15), FR (71), DE (77), IT (101) and ES (186).
     *  </span>
     *
     * @return string
     */
    public function getShippingCategory()
    {
        return $this->shippingCategory;
    }

    /**
     * Sets a new shippingCategory
     *
     * Indicates the shipping category. Shipping categories include the following: <code>ECONOMY</code>, <code>STANDARD</code>, <code>EXPEDITED</code>, <code>ONE_DAY</code>, <code>PICKUP</code>, <code>OTHER</code>, and <code>NONE</code>. International shipping services are generally grouped into the <code>NONE</code> category. For more information about these shipping categories, see the <a href="http://pages.ebay.com/sellerinformation/shipping/chooseservice.html">Shipping Basics</a> page on the eBay Shipping Center site.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> This field is returned only for those sites that support shipping categories: US (0), CA (2), CAFR (210), UK (3), AU (15), FR (71), DE (77), IT (101) and ES (186).
     *  </span>
     *
     * @param string $shippingCategory
     * @return self
     */
    public function setShippingCategory($shippingCategory)
    {
        $this->shippingCategory = $shippingCategory;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getDescription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Description", $value);
        }
        $value = $this->getExpeditedService();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExpeditedService", $value);
        }
        $value = $this->getInternationalService();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InternationalService", $value);
        }
        $value = $this->getShippingService();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingService", $value);
        }
        $value = $this->getShippingServiceID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingServiceID", $value);
        }
        $value = $this->getShippingTimeMax();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingTimeMax", $value);
        }
        $value = $this->getShippingTimeMin();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingTimeMin", $value);
        }
        $value = $this->getShippingServiceCode();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingServiceCode", $value);
        }
        $value = $this->getServiceType();
        if (null !== $value && !empty($this->getServiceType())) {
            $writer->write(array_map(function ($v) {
                return ["ServiceType" => $v];
            }, $value));
        }
        $value = $this->getShippingPackage();
        if (null !== $value && !empty($this->getShippingPackage())) {
            $writer->write(array_map(function ($v) {
                return ["ShippingPackage" => $v];
            }, $value));
        }
        $value = $this->getDimensionsRequired();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DimensionsRequired", $value);
        }
        $value = $this->getValidForSellingFlow();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ValidForSellingFlow", $value);
        }
        $value = $this->getSurchargeApplicable();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SurchargeApplicable", $value);
        }
        $value = $this->getShippingCarrier();
        if (null !== $value && !empty($this->getShippingCarrier())) {
            $writer->write(array_map(function ($v) {
                return ["ShippingCarrier" => $v];
            }, $value));
        }
        $value = $this->getCODService();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CODService", $value);
        }
        $value = $this->getDeprecationDetails();
        if (null !== $value && !empty($this->getDeprecationDetails())) {
            $writer->write(array_map(function ($v) {
                return ["DeprecationDetails" => $v];
            }, $value));
        }
        $value = $this->getMappedToShippingServiceID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MappedToShippingServiceID", $value);
        }
        $value = $this->getCostGroupFlat();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CostGroupFlat", $value);
        }
        $value = $this->getShippingServicePackageDetails();
        if (null !== $value && !empty($this->getShippingServicePackageDetails())) {
            $writer->write(array_map(function ($v) {
                return ["ShippingServicePackageDetails" => $v];
            }, $value));
        }
        $value = $this->getWeightRequired();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}WeightRequired", $value);
        }
        $value = $this->getDetailVersion();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DetailVersion", $value);
        }
        $value = $this->getUpdateTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UpdateTime", $value);
        }
        $value = $this->getShippingCategory();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingCategory", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Description');
        if (null !== $value) {
            $this->setDescription($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExpeditedService');
        if (null !== $value) {
            $this->setExpeditedService($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalService');
        if (null !== $value) {
            $this->setInternationalService($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingService');
        if (null !== $value) {
            $this->setShippingService($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingServiceID');
        if (null !== $value) {
            $this->setShippingServiceID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingTimeMax');
        if (null !== $value) {
            $this->setShippingTimeMax($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingTimeMin');
        if (null !== $value) {
            $this->setShippingTimeMin($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingServiceCode');
        if (null !== $value) {
            $this->setShippingServiceCode($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ServiceType', true);
        if (null !== $value && !empty($value)) {
            $this->setServiceType($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingPackage', true);
        if (null !== $value && !empty($value)) {
            $this->setShippingPackage($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DimensionsRequired');
        if (null !== $value) {
            $this->setDimensionsRequired($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ValidForSellingFlow');
        if (null !== $value) {
            $this->setValidForSellingFlow($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SurchargeApplicable');
        if (null !== $value) {
            $this->setSurchargeApplicable($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingCarrier', true);
        if (null !== $value && !empty($value)) {
            $this->setShippingCarrier($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CODService');
        if (null !== $value) {
            $this->setCODService($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DeprecationDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setDeprecationDetails(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\AnnouncementMessageType::fromKeyValue($v);
            }, $value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MappedToShippingServiceID');
        if (null !== $value) {
            $this->setMappedToShippingServiceID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CostGroupFlat');
        if (null !== $value) {
            $this->setCostGroupFlat($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingServicePackageDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setShippingServicePackageDetails(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\ShippingServicePackageDetailsType::fromKeyValue($v);
            }, $value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}WeightRequired');
        if (null !== $value) {
            $this->setWeightRequired($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DetailVersion');
        if (null !== $value) {
            $this->setDetailVersion($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UpdateTime');
        if (null !== $value) {
            $this->setUpdateTime(new \DateTime($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingCategory');
        if (null !== $value) {
            $this->setShippingCategory($value);
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
