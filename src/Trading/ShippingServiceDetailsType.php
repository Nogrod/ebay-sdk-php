<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ShippingServiceDetailsType
 *
 * Type used by the <b>ShippingServiceDetails</b> containers that are returned in the <b>GeteBayDetails</b> response. Each <b>ShippingServiceDetails</b> container consists of detailed information about each shipping service option available for the specified country. These details include the shipping service enumeration value to use when specifying shipping service options in an Add/Revise/Relist call, the shipping carrier, the shipping category (e.g. expedited, economy, etc.), the shipping packages that can be used, and the shipping delivery window.
 *  <br/><br/>
 *  <b>ShippingServiceDetails</b> containers are returned if a <b>DetailName</b> field is included in the call request and set to <code>ShippingServiceDetails</code>, or if no <b>DetailName</b> field is included in the call request.
 * XSD Type: ShippingServiceDetailsType
 */
class ShippingServiceDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
     * This field is deprecated, as there are longer any shipping services that support cash on delivery.
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
     * @var \Nogrod\eBaySDK\Trading\AnnouncementMessageType[] $deprecationDetails
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
     * @var \Nogrod\eBaySDK\Trading\ShippingServicePackageDetailsType[] $shippingServicePackageDetails
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
     * Adds as serviceType
     *
     * The shipping cost types that this shipping service option supports, such as flat-rate or calculated. A <strong>ServiceType</strong> field is returned for each shipping cost type supported by the shipping service option.
     *
     * @return self
     * @param string $serviceType
     */
    public function addToServiceType($serviceType)
    {
        if (!is_array($this->serviceType)) {
            throw new \LogicException('serviceType is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<string>
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
    public function setServiceType(iterable $serviceType)
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
        if (!is_array($this->shippingPackage)) {
            throw new \LogicException('shippingPackage is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<string>
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
    public function setShippingPackage(iterable $shippingPackage)
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
        if (!is_array($this->shippingCarrier)) {
            throw new \LogicException('shippingCarrier is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<string>
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
    public function setShippingCarrier(iterable $shippingCarrier)
    {
        $this->shippingCarrier = $shippingCarrier;
        return $this;
    }

    /**
     * Gets as cODService
     *
     * This field is deprecated, as there are longer any shipping services that support cash on delivery.
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
     * This field is deprecated, as there are longer any shipping services that support cash on delivery.
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
     * @param \Nogrod\eBaySDK\Trading\AnnouncementMessageType $deprecationDetails
     */
    public function addToDeprecationDetails(\Nogrod\eBaySDK\Trading\AnnouncementMessageType $deprecationDetails)
    {
        if (!is_array($this->deprecationDetails)) {
            throw new \LogicException('deprecationDetails is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\AnnouncementMessageType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\AnnouncementMessageType> $deprecationDetails
     * @return self
     */
    public function setDeprecationDetails(iterable $deprecationDetails)
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
     * @param \Nogrod\eBaySDK\Trading\ShippingServicePackageDetailsType $shippingServicePackageDetails
     */
    public function addToShippingServicePackageDetails(\Nogrod\eBaySDK\Trading\ShippingServicePackageDetailsType $shippingServicePackageDetails)
    {
        if (!is_array($this->shippingServicePackageDetails)) {
            throw new \LogicException('shippingServicePackageDetails is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\ShippingServicePackageDetailsType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\ShippingServicePackageDetailsType> $shippingServicePackageDetails
     * @return self
     */
    public function setShippingServicePackageDetails(iterable $shippingServicePackageDetails)
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->description;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Description', null, (string) $value);
        }
        $value = $this->expeditedService;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ExpeditedService', null, ($value ? 'true' : 'false'));
        }
        $value = $this->internationalService;
        if (null !== $value) {
            $writer->writeElementNs(null, 'InternationalService', null, ($value ? 'true' : 'false'));
        }
        $value = $this->shippingService;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ShippingService', null, (string) $value);
        }
        $value = $this->shippingServiceID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ShippingServiceID', null, (string) $value);
        }
        $value = $this->shippingTimeMax;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ShippingTimeMax', null, (string) $value);
        }
        $value = $this->shippingTimeMin;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ShippingTimeMin', null, (string) $value);
        }
        $value = $this->serviceType;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->writeElementNs(null, 'ServiceType', null, (string) $v);
            }
        }
        $value = $this->shippingPackage;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->writeElementNs(null, 'ShippingPackage', null, (string) $v);
            }
        }
        $value = $this->dimensionsRequired;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DimensionsRequired', null, ($value ? 'true' : 'false'));
        }
        $value = $this->validForSellingFlow;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ValidForSellingFlow', null, ($value ? 'true' : 'false'));
        }
        $value = $this->surchargeApplicable;
        if (null !== $value) {
            $writer->writeElementNs(null, 'SurchargeApplicable', null, ($value ? 'true' : 'false'));
        }
        $value = $this->shippingCarrier;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->writeElementNs(null, 'ShippingCarrier', null, (string) $v);
            }
        }
        $value = $this->cODService;
        if (null !== $value) {
            $writer->writeElementNs(null, 'CODService', null, ($value ? 'true' : 'false'));
        }
        $value = $this->deprecationDetails;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'DeprecationDetails', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
        $value = $this->mappedToShippingServiceID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'MappedToShippingServiceID', null, (string) $value);
        }
        $value = $this->costGroupFlat;
        if (null !== $value) {
            $writer->writeElementNs(null, 'CostGroupFlat', null, (string) $value);
        }
        $value = $this->shippingServicePackageDetails;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'ShippingServicePackageDetails', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
        $value = $this->weightRequired;
        if (null !== $value) {
            $writer->writeElementNs(null, 'WeightRequired', null, ($value ? 'true' : 'false'));
        }
        $value = $this->detailVersion;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DetailVersion', null, (string) $value);
        }
        $value = $this->updateTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'UpdateTime', null, Func::formatDateTime($value));
        }
        $value = $this->shippingCategory;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ShippingCategory', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\ShippingServiceDetailsType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->serviceType = [];
        $this->shippingPackage = [];
        $this->shippingCarrier = [];
        $this->deprecationDetails = [];
        $this->shippingServicePackageDetails = [];
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'Description':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->description = $value;
                    }
                    return true;
                case 'ExpeditedService':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->expeditedService = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'InternationalService':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->internationalService = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'ShippingService':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->shippingService = $value;
                    }
                    return true;
                case 'ShippingServiceID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->shippingServiceID = (int) $value;
                    }
                    return true;
                case 'ShippingTimeMax':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->shippingTimeMax = (int) $value;
                    }
                    return true;
                case 'ShippingTimeMin':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->shippingTimeMin = (int) $value;
                    }
                    return true;
                case 'ServiceType':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->serviceType[] = $value;
                    }
                    return true;
                case 'ShippingPackage':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->shippingPackage[] = $value;
                    }
                    return true;
                case 'DimensionsRequired':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->dimensionsRequired = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'ValidForSellingFlow':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->validForSellingFlow = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'SurchargeApplicable':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->surchargeApplicable = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'ShippingCarrier':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->shippingCarrier[] = $value;
                    }
                    return true;
                case 'CODService':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->cODService = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'DeprecationDetails':
                    $this->deprecationDetails[] = \Nogrod\eBaySDK\Trading\AnnouncementMessageType::xmlRead($reader);
                    return true;
                case 'MappedToShippingServiceID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->mappedToShippingServiceID = (int) $value;
                    }
                    return true;
                case 'CostGroupFlat':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->costGroupFlat = $value;
                    }
                    return true;
                case 'ShippingServicePackageDetails':
                    $this->shippingServicePackageDetails[] = \Nogrod\eBaySDK\Trading\ShippingServicePackageDetailsType::xmlRead($reader);
                    return true;
                case 'WeightRequired':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->weightRequired = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'DetailVersion':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->detailVersion = $value;
                    }
                    return true;
                case 'UpdateTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->updateTime = new \DateTime($value);
                    }
                    return true;
                case 'ShippingCategory':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->shippingCategory = $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['Description'] = $this->description;
        $data['ExpeditedService'] = $this->expeditedService;
        $data['InternationalService'] = $this->internationalService;
        $data['ShippingService'] = $this->shippingService;
        $data['ShippingServiceID'] = $this->shippingServiceID;
        $data['ShippingTimeMax'] = $this->shippingTimeMax;
        $data['ShippingTimeMin'] = $this->shippingTimeMin;
        $data['ServiceType'] = Func::jsonList($this->serviceType);
        $data['ShippingPackage'] = Func::jsonList($this->shippingPackage);
        $data['DimensionsRequired'] = $this->dimensionsRequired;
        $data['ValidForSellingFlow'] = $this->validForSellingFlow;
        $data['SurchargeApplicable'] = $this->surchargeApplicable;
        $data['ShippingCarrier'] = Func::jsonList($this->shippingCarrier);
        $data['CODService'] = $this->cODService;
        $data['DeprecationDetails'] = Func::jsonList($this->deprecationDetails);
        $data['MappedToShippingServiceID'] = $this->mappedToShippingServiceID;
        $data['CostGroupFlat'] = $this->costGroupFlat;
        $data['ShippingServicePackageDetails'] = Func::jsonList($this->shippingServicePackageDetails);
        $data['WeightRequired'] = $this->weightRequired;
        $data['DetailVersion'] = $this->detailVersion;
        $data['UpdateTime'] = Func::jsonDate($this->updateTime);
        $data['ShippingCategory'] = $this->shippingCategory;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
