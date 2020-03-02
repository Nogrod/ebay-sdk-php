<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ShippingPolicyServiceType
 *
 * ShippingPolicyService:
 * XSD Type: ShippingPolicyService
 */
class ShippingPolicyServiceType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * An international location or region to where the item seller will ship the item. These values are string equivalents of values found in ShippingRegionCodeType and CountryCodeType.
     *  See ShipToLocation.
     *
     *
     *  Applicable values: See CountryCodeType , ShippingRegionCodeType
     *
     * @var string[] $shipToLocation
     */
    private $shipToLocation = [
        
    ];

    /**
     * An international shipping service being offered by the seller to ship an item to a buyer. Valid values are?????
     *
     *  For flat and calculated shipping.
     *
     * @var string $shippingService
     */
    private $shippingService = null;

    /**
     * Defines the types of shipping.
     *
     *
     *  The shipping cost model offered by the seller. This is not returned for various calls since shipping type can be deduced: if a CalculatedShippingRate structure is returned by the call, the shipping type is Calculated. Otherwise, it is one of the other non-Calculated shipping types.
     *
     *  GetItemShipping and GetItemTransactions: If the type was a mix of flat and calculated services, this is set simply to Flat or Calculated because it is the buyer's selection that results in one of these.
     *
     *
     *  Applicable values:
     *   Calculated
     *
     *  (in/out) Calculated shipping model: the cost of shipping is determined in large part by the seller-offered and buyer-selected shipping service. The seller might assess an additional fee via PackagingHandlingCosts.
     *
     *   CalculatedDomesticFlatInternational
     *
     *  (in/out) The seller specified one or more calculated domestic shipping services and one or more flat international shipping services.
     *
     *   CustomCode
     *
     *  (in/out) Reserved for future use.
     *
     *   Flat
     *
     *  (in/out) Flat shipping model: the seller establishes the cost of shipping and cost of shipping insurance, regardless of what any buyer-selected shipping service might charge the seller.
     *
     *   FlatDomesticCalculatedInternational
     *
     *  (in/out) The seller specified one or more flat domestic shipping services and one or more calculated international shipping services.
     *
     *   FreightFlat
     *
     *  (in/out) Freight shipping model: freight shipping may be used when flat or calculated shipping cannot be used due to the greater weight of the item. See "Specifying Freight Shipping" in the Shipping chapter for details on freight shipping.
     *
     *   NotSpecified
     *
     *  (in/out) The seller did not specify the shipping type.
     *
     *
     *  (Not all values in ShippingTypeCodeType apply to this field.)
     *
     * @var string $shippingType
     */
    private $shippingType = null;

    /**
     * The order of the shipping service in a given set of shipping
     *  services.
     *
     *
     *  This integer value controls the order (relative to other shipping services) in which the corresponding ShippingService will appear in the View Item and Checkout page. The number of shipping services you can specify depends on whether they are domestic or international.
     *
     *  For domestic, sellers can specify up to four domestic shipping services (with four ShippingServiceOptions containers), so valid values are 1, 2, 3, and 4. A shipping service with a ShippingServicePriority value of 1 appears at the top. Conversely, a shipping service with a ShippingServicePriority value of 4 appears at the bottom of a list of four shipping service options.
     *
     *  For international, sellers can specify up to five international shipping services (with five InternationalShippingServiceOption containers), so valid values are 1, 2, 3, 4, and 5. A shipping service with a ShippingServicePriority value of 1 appears at the top. Conversely, a shipping service with a ShippingServicePriority value of 5 appears at the bottom of a list of five shipping service options.
     *
     *  This field is applicable to Flat and Calculated shipping.
     *
     * @var int $sortOrderId
     */
    private $sortOrderId = null;

    /**
     * If set to true, this means the seller offers free shipping.
     *
     *  This free shipping applies only to the first specified domestic shipping service. (It is ignored if set for any other shipping service.) If the seller has required shipping insurance as part of shipping (the seller set InsuranceOption to Required) and then the seller specified FreeShipping, eBay sets the insurance cost to 0.00. However, if the seller made shipping insurance optional, eBay preserves the cost of shipping insurance; it is up to the buyer whether to buy shipping insurance, regardless of whether the seller specified FreeShipping.
     *  See Specifying Free Shipping.
     *
     * @var bool $freeShipping
     */
    private $freeShipping = null;

    /**
     * Valid only for the Italy site (site ID 101). Contains the cash-on-delivery (COD) fee for COD shipping.
     *
     *  See Specifying the Cash on Delivery Option in Shipping Details.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $codFee
     */
    private $codFee = null;

    /**
     * If true, it indicates that the seller has committed to the GetItFast shipping rules for this listing. Therefore, the seller commits to delivering the item to the buyer-selected shipping service within one day. If false, the shipper does not offer fast shipping.
     *
     *  Not supported for UK Store Inventory format items.
     *
     *  See:
     *  Enabling Multi-jurisdiction Sales Tax
     *  Miscellaneous Item Field Differences
     *
     * @var bool $fastShipping
     */
    private $fastShipping = null;

    /**
     * The cost of shipping each additional item beyond the first item. For input, this is required if the listing is for multiple items. For single-item listings, it should be zero (or is defaulted to zero if not provided). For flat shipping only.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $shippingServiceAdditionalCost
     */
    private $shippingServiceAdditionalCost = null;

    /**
     * The meaning of this field depends on the call and on whether flat or calculated under ShippingPolicyService.shippingType has been selected. (For example, it could be the cost to ship a single item, the cost to ship all items, or the cost to ship just the first of many items, with ShippingServiceAdditionalCost accounting for the rest.) The shippingServiceCost includes the packaging and handling cost. For flat and calculated shipping.
     *
     *  See Shipping.
     *
     *
     *  See Determining Shipping Costs for a Listing.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $shippingServiceCost
     */
    private $shippingServiceCost = null;

    /**
     * An additional fee to charge US buyers who have the item shipped via UPS or FedEx to Alaska, Hawaii or Puerto Rico. For example, some services like UPS Ground, allows seller to provide a surcharge fee in a few selected regions.
     *
     *  Can only be assigned a value for the eBay US site and for items in the Parts and Accessories category of the eBay Motors site. Only returned if set. If some line items in an order have a surcharge, surcharge is added only for those line items. Flat rate shipping only.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $shippingSurcharge
     */
    private $shippingSurcharge = null;

    /**
     * If this is set we reset shipping fee of this
     *  service to zero.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $shippingOverrideFee
     */
    private $shippingOverrideFee = null;

    /**
     * If true, buyer is responsible for contacting and setting up their local shipping service to transport the item. If false, buyer is not responsible for setting up the shipment of the item.
     *
     *  Applicable for listings in vehicle categories on the US eBay Motors site and eBay Canada site. (No business effect if specified for other categories or sites, as the Web site will not display the information to buyers.) If true, the buyer is responsible for vehicle pickup or shipping. If false, specify vehicle shipping arrangements in the item description. Default is true. (The description can also include vehicle shipping arrangements when this value is true.) If the item has bids or ends within 12 hours, you cannot modify this flag. Do not specify ShippingDetails.ShippingServiceOptions for vehicle listings.
     *
     *  If true and the listing is on the US eBay Motors site, and you want the listing to be visible on the eBay Canada site, set Item.ShipToLocations to CA. If true and the listing is on the eBay Canada site , and you want your listing to be visible on the US eBay Motors site, set Item.ShipToLocations to US.
     *
     * @var bool $buyerResponsibleForShipping
     */
    private $buyerResponsibleForShipping = null;

    /**
     * Adds as shipToLocation
     *
     * An international location or region to where the item seller will ship the item. These values are string equivalents of values found in ShippingRegionCodeType and CountryCodeType.
     *  See ShipToLocation.
     *
     *
     *  Applicable values: See CountryCodeType , ShippingRegionCodeType
     *
     * @return self
     * @param string $shipToLocation
     */
    public function addToShipToLocation($shipToLocation)
    {
        $this->shipToLocation[] = $shipToLocation;
        return $this;
    }

    /**
     * isset shipToLocation
     *
     * An international location or region to where the item seller will ship the item. These values are string equivalents of values found in ShippingRegionCodeType and CountryCodeType.
     *  See ShipToLocation.
     *
     *
     *  Applicable values: See CountryCodeType , ShippingRegionCodeType
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShipToLocation($index)
    {
        return isset($this->shipToLocation[$index]);
    }

    /**
     * unset shipToLocation
     *
     * An international location or region to where the item seller will ship the item. These values are string equivalents of values found in ShippingRegionCodeType and CountryCodeType.
     *  See ShipToLocation.
     *
     *
     *  Applicable values: See CountryCodeType , ShippingRegionCodeType
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShipToLocation($index)
    {
        unset($this->shipToLocation[$index]);
    }

    /**
     * Gets as shipToLocation
     *
     * An international location or region to where the item seller will ship the item. These values are string equivalents of values found in ShippingRegionCodeType and CountryCodeType.
     *  See ShipToLocation.
     *
     *
     *  Applicable values: See CountryCodeType , ShippingRegionCodeType
     *
     * @return string[]
     */
    public function getShipToLocation()
    {
        return $this->shipToLocation;
    }

    /**
     * Sets a new shipToLocation
     *
     * An international location or region to where the item seller will ship the item. These values are string equivalents of values found in ShippingRegionCodeType and CountryCodeType.
     *  See ShipToLocation.
     *
     *
     *  Applicable values: See CountryCodeType , ShippingRegionCodeType
     *
     * @param string[] $shipToLocation
     * @return self
     */
    public function setShipToLocation(array $shipToLocation)
    {
        $this->shipToLocation = $shipToLocation;
        return $this;
    }

    /**
     * Gets as shippingService
     *
     * An international shipping service being offered by the seller to ship an item to a buyer. Valid values are?????
     *
     *  For flat and calculated shipping.
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
     * An international shipping service being offered by the seller to ship an item to a buyer. Valid values are?????
     *
     *  For flat and calculated shipping.
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
     * Gets as shippingType
     *
     * Defines the types of shipping.
     *
     *
     *  The shipping cost model offered by the seller. This is not returned for various calls since shipping type can be deduced: if a CalculatedShippingRate structure is returned by the call, the shipping type is Calculated. Otherwise, it is one of the other non-Calculated shipping types.
     *
     *  GetItemShipping and GetItemTransactions: If the type was a mix of flat and calculated services, this is set simply to Flat or Calculated because it is the buyer's selection that results in one of these.
     *
     *
     *  Applicable values:
     *   Calculated
     *
     *  (in/out) Calculated shipping model: the cost of shipping is determined in large part by the seller-offered and buyer-selected shipping service. The seller might assess an additional fee via PackagingHandlingCosts.
     *
     *   CalculatedDomesticFlatInternational
     *
     *  (in/out) The seller specified one or more calculated domestic shipping services and one or more flat international shipping services.
     *
     *   CustomCode
     *
     *  (in/out) Reserved for future use.
     *
     *   Flat
     *
     *  (in/out) Flat shipping model: the seller establishes the cost of shipping and cost of shipping insurance, regardless of what any buyer-selected shipping service might charge the seller.
     *
     *   FlatDomesticCalculatedInternational
     *
     *  (in/out) The seller specified one or more flat domestic shipping services and one or more calculated international shipping services.
     *
     *   FreightFlat
     *
     *  (in/out) Freight shipping model: freight shipping may be used when flat or calculated shipping cannot be used due to the greater weight of the item. See "Specifying Freight Shipping" in the Shipping chapter for details on freight shipping.
     *
     *   NotSpecified
     *
     *  (in/out) The seller did not specify the shipping type.
     *
     *
     *  (Not all values in ShippingTypeCodeType apply to this field.)
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
     * Defines the types of shipping.
     *
     *
     *  The shipping cost model offered by the seller. This is not returned for various calls since shipping type can be deduced: if a CalculatedShippingRate structure is returned by the call, the shipping type is Calculated. Otherwise, it is one of the other non-Calculated shipping types.
     *
     *  GetItemShipping and GetItemTransactions: If the type was a mix of flat and calculated services, this is set simply to Flat or Calculated because it is the buyer's selection that results in one of these.
     *
     *
     *  Applicable values:
     *   Calculated
     *
     *  (in/out) Calculated shipping model: the cost of shipping is determined in large part by the seller-offered and buyer-selected shipping service. The seller might assess an additional fee via PackagingHandlingCosts.
     *
     *   CalculatedDomesticFlatInternational
     *
     *  (in/out) The seller specified one or more calculated domestic shipping services and one or more flat international shipping services.
     *
     *   CustomCode
     *
     *  (in/out) Reserved for future use.
     *
     *   Flat
     *
     *  (in/out) Flat shipping model: the seller establishes the cost of shipping and cost of shipping insurance, regardless of what any buyer-selected shipping service might charge the seller.
     *
     *   FlatDomesticCalculatedInternational
     *
     *  (in/out) The seller specified one or more flat domestic shipping services and one or more calculated international shipping services.
     *
     *   FreightFlat
     *
     *  (in/out) Freight shipping model: freight shipping may be used when flat or calculated shipping cannot be used due to the greater weight of the item. See "Specifying Freight Shipping" in the Shipping chapter for details on freight shipping.
     *
     *   NotSpecified
     *
     *  (in/out) The seller did not specify the shipping type.
     *
     *
     *  (Not all values in ShippingTypeCodeType apply to this field.)
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
     * Gets as sortOrderId
     *
     * The order of the shipping service in a given set of shipping
     *  services.
     *
     *
     *  This integer value controls the order (relative to other shipping services) in which the corresponding ShippingService will appear in the View Item and Checkout page. The number of shipping services you can specify depends on whether they are domestic or international.
     *
     *  For domestic, sellers can specify up to four domestic shipping services (with four ShippingServiceOptions containers), so valid values are 1, 2, 3, and 4. A shipping service with a ShippingServicePriority value of 1 appears at the top. Conversely, a shipping service with a ShippingServicePriority value of 4 appears at the bottom of a list of four shipping service options.
     *
     *  For international, sellers can specify up to five international shipping services (with five InternationalShippingServiceOption containers), so valid values are 1, 2, 3, 4, and 5. A shipping service with a ShippingServicePriority value of 1 appears at the top. Conversely, a shipping service with a ShippingServicePriority value of 5 appears at the bottom of a list of five shipping service options.
     *
     *  This field is applicable to Flat and Calculated shipping.
     *
     * @return int
     */
    public function getSortOrderId()
    {
        return $this->sortOrderId;
    }

    /**
     * Sets a new sortOrderId
     *
     * The order of the shipping service in a given set of shipping
     *  services.
     *
     *
     *  This integer value controls the order (relative to other shipping services) in which the corresponding ShippingService will appear in the View Item and Checkout page. The number of shipping services you can specify depends on whether they are domestic or international.
     *
     *  For domestic, sellers can specify up to four domestic shipping services (with four ShippingServiceOptions containers), so valid values are 1, 2, 3, and 4. A shipping service with a ShippingServicePriority value of 1 appears at the top. Conversely, a shipping service with a ShippingServicePriority value of 4 appears at the bottom of a list of four shipping service options.
     *
     *  For international, sellers can specify up to five international shipping services (with five InternationalShippingServiceOption containers), so valid values are 1, 2, 3, 4, and 5. A shipping service with a ShippingServicePriority value of 1 appears at the top. Conversely, a shipping service with a ShippingServicePriority value of 5 appears at the bottom of a list of five shipping service options.
     *
     *  This field is applicable to Flat and Calculated shipping.
     *
     * @param int $sortOrderId
     * @return self
     */
    public function setSortOrderId($sortOrderId)
    {
        $this->sortOrderId = $sortOrderId;
        return $this;
    }

    /**
     * Gets as freeShipping
     *
     * If set to true, this means the seller offers free shipping.
     *
     *  This free shipping applies only to the first specified domestic shipping service. (It is ignored if set for any other shipping service.) If the seller has required shipping insurance as part of shipping (the seller set InsuranceOption to Required) and then the seller specified FreeShipping, eBay sets the insurance cost to 0.00. However, if the seller made shipping insurance optional, eBay preserves the cost of shipping insurance; it is up to the buyer whether to buy shipping insurance, regardless of whether the seller specified FreeShipping.
     *  See Specifying Free Shipping.
     *
     * @return bool
     */
    public function getFreeShipping()
    {
        return $this->freeShipping;
    }

    /**
     * Sets a new freeShipping
     *
     * If set to true, this means the seller offers free shipping.
     *
     *  This free shipping applies only to the first specified domestic shipping service. (It is ignored if set for any other shipping service.) If the seller has required shipping insurance as part of shipping (the seller set InsuranceOption to Required) and then the seller specified FreeShipping, eBay sets the insurance cost to 0.00. However, if the seller made shipping insurance optional, eBay preserves the cost of shipping insurance; it is up to the buyer whether to buy shipping insurance, regardless of whether the seller specified FreeShipping.
     *  See Specifying Free Shipping.
     *
     * @param bool $freeShipping
     * @return self
     */
    public function setFreeShipping($freeShipping)
    {
        $this->freeShipping = $freeShipping;
        return $this;
    }

    /**
     * Gets as codFee
     *
     * Valid only for the Italy site (site ID 101). Contains the cash-on-delivery (COD) fee for COD shipping.
     *
     *  See Specifying the Cash on Delivery Option in Shipping Details.
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType
     */
    public function getCodFee()
    {
        return $this->codFee;
    }

    /**
     * Sets a new codFee
     *
     * Valid only for the Italy site (site ID 101). Contains the cash-on-delivery (COD) fee for COD shipping.
     *
     *  See Specifying the Cash on Delivery Option in Shipping Details.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $codFee
     * @return self
     */
    public function setCodFee(\Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $codFee)
    {
        $this->codFee = $codFee;
        return $this;
    }

    /**
     * Gets as fastShipping
     *
     * If true, it indicates that the seller has committed to the GetItFast shipping rules for this listing. Therefore, the seller commits to delivering the item to the buyer-selected shipping service within one day. If false, the shipper does not offer fast shipping.
     *
     *  Not supported for UK Store Inventory format items.
     *
     *  See:
     *  Enabling Multi-jurisdiction Sales Tax
     *  Miscellaneous Item Field Differences
     *
     * @return bool
     */
    public function getFastShipping()
    {
        return $this->fastShipping;
    }

    /**
     * Sets a new fastShipping
     *
     * If true, it indicates that the seller has committed to the GetItFast shipping rules for this listing. Therefore, the seller commits to delivering the item to the buyer-selected shipping service within one day. If false, the shipper does not offer fast shipping.
     *
     *  Not supported for UK Store Inventory format items.
     *
     *  See:
     *  Enabling Multi-jurisdiction Sales Tax
     *  Miscellaneous Item Field Differences
     *
     * @param bool $fastShipping
     * @return self
     */
    public function setFastShipping($fastShipping)
    {
        $this->fastShipping = $fastShipping;
        return $this;
    }

    /**
     * Gets as shippingServiceAdditionalCost
     *
     * The cost of shipping each additional item beyond the first item. For input, this is required if the listing is for multiple items. For single-item listings, it should be zero (or is defaulted to zero if not provided). For flat shipping only.
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType
     */
    public function getShippingServiceAdditionalCost()
    {
        return $this->shippingServiceAdditionalCost;
    }

    /**
     * Sets a new shippingServiceAdditionalCost
     *
     * The cost of shipping each additional item beyond the first item. For input, this is required if the listing is for multiple items. For single-item listings, it should be zero (or is defaulted to zero if not provided). For flat shipping only.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $shippingServiceAdditionalCost
     * @return self
     */
    public function setShippingServiceAdditionalCost(\Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $shippingServiceAdditionalCost)
    {
        $this->shippingServiceAdditionalCost = $shippingServiceAdditionalCost;
        return $this;
    }

    /**
     * Gets as shippingServiceCost
     *
     * The meaning of this field depends on the call and on whether flat or calculated under ShippingPolicyService.shippingType has been selected. (For example, it could be the cost to ship a single item, the cost to ship all items, or the cost to ship just the first of many items, with ShippingServiceAdditionalCost accounting for the rest.) The shippingServiceCost includes the packaging and handling cost. For flat and calculated shipping.
     *
     *  See Shipping.
     *
     *
     *  See Determining Shipping Costs for a Listing.
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType
     */
    public function getShippingServiceCost()
    {
        return $this->shippingServiceCost;
    }

    /**
     * Sets a new shippingServiceCost
     *
     * The meaning of this field depends on the call and on whether flat or calculated under ShippingPolicyService.shippingType has been selected. (For example, it could be the cost to ship a single item, the cost to ship all items, or the cost to ship just the first of many items, with ShippingServiceAdditionalCost accounting for the rest.) The shippingServiceCost includes the packaging and handling cost. For flat and calculated shipping.
     *
     *  See Shipping.
     *
     *
     *  See Determining Shipping Costs for a Listing.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $shippingServiceCost
     * @return self
     */
    public function setShippingServiceCost(\Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $shippingServiceCost)
    {
        $this->shippingServiceCost = $shippingServiceCost;
        return $this;
    }

    /**
     * Gets as shippingSurcharge
     *
     * An additional fee to charge US buyers who have the item shipped via UPS or FedEx to Alaska, Hawaii or Puerto Rico. For example, some services like UPS Ground, allows seller to provide a surcharge fee in a few selected regions.
     *
     *  Can only be assigned a value for the eBay US site and for items in the Parts and Accessories category of the eBay Motors site. Only returned if set. If some line items in an order have a surcharge, surcharge is added only for those line items. Flat rate shipping only.
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType
     */
    public function getShippingSurcharge()
    {
        return $this->shippingSurcharge;
    }

    /**
     * Sets a new shippingSurcharge
     *
     * An additional fee to charge US buyers who have the item shipped via UPS or FedEx to Alaska, Hawaii or Puerto Rico. For example, some services like UPS Ground, allows seller to provide a surcharge fee in a few selected regions.
     *
     *  Can only be assigned a value for the eBay US site and for items in the Parts and Accessories category of the eBay Motors site. Only returned if set. If some line items in an order have a surcharge, surcharge is added only for those line items. Flat rate shipping only.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $shippingSurcharge
     * @return self
     */
    public function setShippingSurcharge(\Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $shippingSurcharge)
    {
        $this->shippingSurcharge = $shippingSurcharge;
        return $this;
    }

    /**
     * Gets as shippingOverrideFee
     *
     * If this is set we reset shipping fee of this
     *  service to zero.
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType
     */
    public function getShippingOverrideFee()
    {
        return $this->shippingOverrideFee;
    }

    /**
     * Sets a new shippingOverrideFee
     *
     * If this is set we reset shipping fee of this
     *  service to zero.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $shippingOverrideFee
     * @return self
     */
    public function setShippingOverrideFee(\Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $shippingOverrideFee)
    {
        $this->shippingOverrideFee = $shippingOverrideFee;
        return $this;
    }

    /**
     * Gets as buyerResponsibleForShipping
     *
     * If true, buyer is responsible for contacting and setting up their local shipping service to transport the item. If false, buyer is not responsible for setting up the shipment of the item.
     *
     *  Applicable for listings in vehicle categories on the US eBay Motors site and eBay Canada site. (No business effect if specified for other categories or sites, as the Web site will not display the information to buyers.) If true, the buyer is responsible for vehicle pickup or shipping. If false, specify vehicle shipping arrangements in the item description. Default is true. (The description can also include vehicle shipping arrangements when this value is true.) If the item has bids or ends within 12 hours, you cannot modify this flag. Do not specify ShippingDetails.ShippingServiceOptions for vehicle listings.
     *
     *  If true and the listing is on the US eBay Motors site, and you want the listing to be visible on the eBay Canada site, set Item.ShipToLocations to CA. If true and the listing is on the eBay Canada site , and you want your listing to be visible on the US eBay Motors site, set Item.ShipToLocations to US.
     *
     * @return bool
     */
    public function getBuyerResponsibleForShipping()
    {
        return $this->buyerResponsibleForShipping;
    }

    /**
     * Sets a new buyerResponsibleForShipping
     *
     * If true, buyer is responsible for contacting and setting up their local shipping service to transport the item. If false, buyer is not responsible for setting up the shipment of the item.
     *
     *  Applicable for listings in vehicle categories on the US eBay Motors site and eBay Canada site. (No business effect if specified for other categories or sites, as the Web site will not display the information to buyers.) If true, the buyer is responsible for vehicle pickup or shipping. If false, specify vehicle shipping arrangements in the item description. Default is true. (The description can also include vehicle shipping arrangements when this value is true.) If the item has bids or ends within 12 hours, you cannot modify this flag. Do not specify ShippingDetails.ShippingServiceOptions for vehicle listings.
     *
     *  If true and the listing is on the US eBay Motors site, and you want the listing to be visible on the eBay Canada site, set Item.ShipToLocations to CA. If true and the listing is on the eBay Canada site , and you want your listing to be visible on the US eBay Motors site, set Item.ShipToLocations to US.
     *
     * @param bool $buyerResponsibleForShipping
     * @return self
     */
    public function setBuyerResponsibleForShipping($buyerResponsibleForShipping)
    {
        $this->buyerResponsibleForShipping = $buyerResponsibleForShipping;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/selling/v1/services");
        $value = $this->getShipToLocation();
        if (null !== $value && !empty($this->getShipToLocation())) {
            $writer->write(array_map(function ($v) {
                return ["shipToLocation" => $v];
            }, $value));
        }
        $value = $this->getShippingService();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}shippingService", $value);
        }
        $value = $this->getShippingType();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}shippingType", $value);
        }
        $value = $this->getSortOrderId();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}sortOrderId", $value);
        }
        $value = $this->getFreeShipping();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}freeShipping", $value);
        }
        $value = $this->getCodFee();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}codFee", $value);
        }
        $value = $this->getFastShipping();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}fastShipping", $value);
        }
        $value = $this->getShippingServiceAdditionalCost();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}shippingServiceAdditionalCost", $value);
        }
        $value = $this->getShippingServiceCost();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}shippingServiceCost", $value);
        }
        $value = $this->getShippingSurcharge();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}shippingSurcharge", $value);
        }
        $value = $this->getShippingOverrideFee();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}shippingOverrideFee", $value);
        }
        $value = $this->getBuyerResponsibleForShipping();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}buyerResponsibleForShipping", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}shipToLocation', true);
        if (null !== $value && !empty($value)) {
            $this->setShipToLocation($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}shippingService');
        if (null !== $value) {
            $this->setShippingService($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}shippingType');
        if (null !== $value) {
            $this->setShippingType($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}sortOrderId');
        if (null !== $value) {
            $this->setSortOrderId($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}freeShipping');
        if (null !== $value) {
            $this->setFreeShipping($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}codFee');
        if (null !== $value) {
            $this->setCodFee(\Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}fastShipping');
        if (null !== $value) {
            $this->setFastShipping($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}shippingServiceAdditionalCost');
        if (null !== $value) {
            $this->setShippingServiceAdditionalCost(\Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}shippingServiceCost');
        if (null !== $value) {
            $this->setShippingServiceCost(\Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}shippingSurcharge');
        if (null !== $value) {
            $this->setShippingSurcharge(\Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}shippingOverrideFee');
        if (null !== $value) {
            $this->setShippingOverrideFee(\Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}buyerResponsibleForShipping');
        if (null !== $value) {
            $this->setBuyerResponsibleForShipping($value);
        }
    }
}
