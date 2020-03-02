<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing InternationalShippingServiceOptionsType
 *
 * Container consisting of shipping costs and other details related to an international
 *  shipping service. If one or more international shipping services are provided, the
 *  seller must specify at least one domestic shipping service as well.
 * XSD Type: InternationalShippingServiceOptionsType
 */
class InternationalShippingServiceOptionsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * An international shipping service being offered by the seller to ship an item to
     *  a buyer. For a list of valid values, call <b>GeteBayDetails</b>
     *  with <b>DetailName</b> set to <b>ShippingServiceDetails</b>.
     *  <br/><br/>
     *  To view the full list of International shipping service options in the response,
     *  look for the <b>ShippingService</b> fields in the <b>ShippingServiceDetails</b> containers that
     *  contain a <b>InternationalService</b> = <code>true</code> field, as this indicates that the <b>ShippingService</b>
     *  value is an International shipping service option.
     *  <br/><br/>
     *  The <b>ShippingServiceDetails.ValidForSellingFlow</b> flag must
     *  also be present. Otherwise, that particular shipping service option is no longer
     *  valid and cannot be offered to buyers through a listing.
     *  <br><br>
     *  For flat and calculated shipping.
     *
     * @var string $shippingService
     */
    private $shippingService = null;

    /**
     * The base cost of shipping the item using the shipping service specified in the <b>ShippingService</b> field.
     *  In the case of a multiple-quantity, fixed-price listing, the <b>ShippingServiceAdditionalCost</b> field shows the cost to ship each additional item if the buyer purchases multiple quantity of the same line item.
     *  <br>
     *  <br>
     *  When returned by <b>GetItemShipping</b>, it includes the packaging and
     *  handling cost. For flat and calculated shipping.
     *  <br>
     *  <br>
     *  If a shipping service has been specified (even LocalPickup), <b>GetItem</b> returns
     *  the shipping service cost, even if the cost is zero. Otherwise, cost is not
     *  returned.
     *  <br>
     *  <br>
     *  If this is for calculated shipping for a listing that has not
     *  yet ended, note that the cost cannot be determined until the listing
     *  has ended and the buyer has specified a postal code.
     *  <br>
     *  <br>
     *  For <b>GetItemShipping</b>, promotional shipping savings is reflected in the cost, if
     *  applicable. If the promotional shipping option is lower than other shipping
     *  services being offered, the savings is reflected in the returned shipping
     *  cost.
     *  The shipping service named Promotional Shipping Service (or whatever is
     *  the localized name for it) is included among the shipping services.
     *  If the promotional shipping cost is lower than the cost of other shipping
     *  services being offered, it is presented first in the list. (The LOWEST shipping
     *  service cost is always presented first, regardless of whether there is
     *  promotional shipping.)
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $shippingServiceCost
     */
    private $shippingServiceCost = null;

    /**
     * The cost of shipping each additional item if the same buyer purchases multiple quantity of the same line item. This field is required when creating a multiple-quantity, fixed-price listing. Generally, the seller will give the buyer a shipping discount if that buyer purchases multiple quantity of the item, so this value should usually be less than the value set for <b>ShippingServiceCost</b>.
     *  <br/><br/>
     *  The value of this field can even be set to <code>0</code> if the seller wants to encourage buyers to buy multiple quantity of the item, or it could be that the seller can fit multiple quantities of the line item in a single shipping package, so the seller is just passing this shipping savings onto the buyer. This field is not applicable for single-quantity listings.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $shippingServiceAdditionalCost
     */
    private $shippingServiceAdditionalCost = null;

    /**
     * This integer value controls the order (relative to other shipping services) in
     *  which the corresponding <b>ShippingService</b> will appear in the View Item and
     *  Checkout page. Sellers can specify up to five international shipping services
     *  (with five <b>InternationalShippingServiceOption</b> containers), so valid values are
     *  1, 2, 3, 4, and 5. A shipping service with a <b>ShippingServicePriority</b> value of <code>1</code>
     *  appears at the top. Conversely, a shipping service with a
     *  <b>ShippingServicePriority</b> value of 5 appears at the bottom of a list of five
     *  shipping service options. If the Global Shipping Program is enabled on the listing for international shipping, only four additional shipping services may be specified.
     *  <br><br>
     *  This field is applicable to Flat and Calculated shipping.
     *
     * @var int $shippingServicePriority
     */
    private $shippingServicePriority = null;

    /**
     * An international location or region to where the item seller will ship the item.
     *  <br/><br/>
     *  Use <b>GeteBayDetails</b> with <b>DetailName</b> set to
     *  <b>ShippingLocationDetails</b> to determine which locations are valid per site.
     *  In the <b>GeteBayDetails</b> response, look for the ShippingLoca<b>tionDetails.ShippingLocation</b> fields.
     *  <br/><br/>
     *  For the <b>AddItem</b> family of calls, this field is required if any international shipping service is specified.
     *  <br><br>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, <b>ShipToLocation</b> fields will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, <b>ShipToLocation</b> fields are only returned to the buyer or seller, and a string value of <code>Unavailable</code> will be returned to all third parties.
     *
     * @var string[] $shipToLocation
     */
    private $shipToLocation = [
        
    ];

    /**
     * This field is no longer applicable as it is not longer possible for a seller to offer a buyer shipping insurance.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $shippingInsuranceCost
     */
    private $shippingInsuranceCost = null;

    /**
     * The total cost of customs and taxes for the international leg of an order shipped using the Global Shipping Program. This amount is calculated and supplied for each item by the international shipping provider when a buyer views the item properties.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $importCharge
     */
    private $importCharge = null;

    /**
     * The last time of day that an order using the specified shipping service will be accepted by the seller. The cut off time applies and is returned only when the <strong>ShippingService</strong> field contains the name of a qualifying time-sensitive shipping service, such as <code>eBayNowImmediateDelivery</code>.
     *  <br><br>
     *  The cut off time is set by eBay and determined in part by the policies and locations of the seller and the shipping carrier.
     *
     * @var \DateTime $shippingServiceCutOffTime
     */
    private $shippingServiceCutOffTime = null;

    /**
     * Gets as shippingService
     *
     * An international shipping service being offered by the seller to ship an item to
     *  a buyer. For a list of valid values, call <b>GeteBayDetails</b>
     *  with <b>DetailName</b> set to <b>ShippingServiceDetails</b>.
     *  <br/><br/>
     *  To view the full list of International shipping service options in the response,
     *  look for the <b>ShippingService</b> fields in the <b>ShippingServiceDetails</b> containers that
     *  contain a <b>InternationalService</b> = <code>true</code> field, as this indicates that the <b>ShippingService</b>
     *  value is an International shipping service option.
     *  <br/><br/>
     *  The <b>ShippingServiceDetails.ValidForSellingFlow</b> flag must
     *  also be present. Otherwise, that particular shipping service option is no longer
     *  valid and cannot be offered to buyers through a listing.
     *  <br><br>
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
     * An international shipping service being offered by the seller to ship an item to
     *  a buyer. For a list of valid values, call <b>GeteBayDetails</b>
     *  with <b>DetailName</b> set to <b>ShippingServiceDetails</b>.
     *  <br/><br/>
     *  To view the full list of International shipping service options in the response,
     *  look for the <b>ShippingService</b> fields in the <b>ShippingServiceDetails</b> containers that
     *  contain a <b>InternationalService</b> = <code>true</code> field, as this indicates that the <b>ShippingService</b>
     *  value is an International shipping service option.
     *  <br/><br/>
     *  The <b>ShippingServiceDetails.ValidForSellingFlow</b> flag must
     *  also be present. Otherwise, that particular shipping service option is no longer
     *  valid and cannot be offered to buyers through a listing.
     *  <br><br>
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
     * Gets as shippingServiceCost
     *
     * The base cost of shipping the item using the shipping service specified in the <b>ShippingService</b> field.
     *  In the case of a multiple-quantity, fixed-price listing, the <b>ShippingServiceAdditionalCost</b> field shows the cost to ship each additional item if the buyer purchases multiple quantity of the same line item.
     *  <br>
     *  <br>
     *  When returned by <b>GetItemShipping</b>, it includes the packaging and
     *  handling cost. For flat and calculated shipping.
     *  <br>
     *  <br>
     *  If a shipping service has been specified (even LocalPickup), <b>GetItem</b> returns
     *  the shipping service cost, even if the cost is zero. Otherwise, cost is not
     *  returned.
     *  <br>
     *  <br>
     *  If this is for calculated shipping for a listing that has not
     *  yet ended, note that the cost cannot be determined until the listing
     *  has ended and the buyer has specified a postal code.
     *  <br>
     *  <br>
     *  For <b>GetItemShipping</b>, promotional shipping savings is reflected in the cost, if
     *  applicable. If the promotional shipping option is lower than other shipping
     *  services being offered, the savings is reflected in the returned shipping
     *  cost.
     *  The shipping service named Promotional Shipping Service (or whatever is
     *  the localized name for it) is included among the shipping services.
     *  If the promotional shipping cost is lower than the cost of other shipping
     *  services being offered, it is presented first in the list. (The LOWEST shipping
     *  service cost is always presented first, regardless of whether there is
     *  promotional shipping.)
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getShippingServiceCost()
    {
        return $this->shippingServiceCost;
    }

    /**
     * Sets a new shippingServiceCost
     *
     * The base cost of shipping the item using the shipping service specified in the <b>ShippingService</b> field.
     *  In the case of a multiple-quantity, fixed-price listing, the <b>ShippingServiceAdditionalCost</b> field shows the cost to ship each additional item if the buyer purchases multiple quantity of the same line item.
     *  <br>
     *  <br>
     *  When returned by <b>GetItemShipping</b>, it includes the packaging and
     *  handling cost. For flat and calculated shipping.
     *  <br>
     *  <br>
     *  If a shipping service has been specified (even LocalPickup), <b>GetItem</b> returns
     *  the shipping service cost, even if the cost is zero. Otherwise, cost is not
     *  returned.
     *  <br>
     *  <br>
     *  If this is for calculated shipping for a listing that has not
     *  yet ended, note that the cost cannot be determined until the listing
     *  has ended and the buyer has specified a postal code.
     *  <br>
     *  <br>
     *  For <b>GetItemShipping</b>, promotional shipping savings is reflected in the cost, if
     *  applicable. If the promotional shipping option is lower than other shipping
     *  services being offered, the savings is reflected in the returned shipping
     *  cost.
     *  The shipping service named Promotional Shipping Service (or whatever is
     *  the localized name for it) is included among the shipping services.
     *  If the promotional shipping cost is lower than the cost of other shipping
     *  services being offered, it is presented first in the list. (The LOWEST shipping
     *  service cost is always presented first, regardless of whether there is
     *  promotional shipping.)
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $shippingServiceCost
     * @return self
     */
    public function setShippingServiceCost(\Nogrod\eBaySDK\MerchantData\AmountType $shippingServiceCost)
    {
        $this->shippingServiceCost = $shippingServiceCost;
        return $this;
    }

    /**
     * Gets as shippingServiceAdditionalCost
     *
     * The cost of shipping each additional item if the same buyer purchases multiple quantity of the same line item. This field is required when creating a multiple-quantity, fixed-price listing. Generally, the seller will give the buyer a shipping discount if that buyer purchases multiple quantity of the item, so this value should usually be less than the value set for <b>ShippingServiceCost</b>.
     *  <br/><br/>
     *  The value of this field can even be set to <code>0</code> if the seller wants to encourage buyers to buy multiple quantity of the item, or it could be that the seller can fit multiple quantities of the line item in a single shipping package, so the seller is just passing this shipping savings onto the buyer. This field is not applicable for single-quantity listings.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getShippingServiceAdditionalCost()
    {
        return $this->shippingServiceAdditionalCost;
    }

    /**
     * Sets a new shippingServiceAdditionalCost
     *
     * The cost of shipping each additional item if the same buyer purchases multiple quantity of the same line item. This field is required when creating a multiple-quantity, fixed-price listing. Generally, the seller will give the buyer a shipping discount if that buyer purchases multiple quantity of the item, so this value should usually be less than the value set for <b>ShippingServiceCost</b>.
     *  <br/><br/>
     *  The value of this field can even be set to <code>0</code> if the seller wants to encourage buyers to buy multiple quantity of the item, or it could be that the seller can fit multiple quantities of the line item in a single shipping package, so the seller is just passing this shipping savings onto the buyer. This field is not applicable for single-quantity listings.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $shippingServiceAdditionalCost
     * @return self
     */
    public function setShippingServiceAdditionalCost(\Nogrod\eBaySDK\MerchantData\AmountType $shippingServiceAdditionalCost)
    {
        $this->shippingServiceAdditionalCost = $shippingServiceAdditionalCost;
        return $this;
    }

    /**
     * Gets as shippingServicePriority
     *
     * This integer value controls the order (relative to other shipping services) in
     *  which the corresponding <b>ShippingService</b> will appear in the View Item and
     *  Checkout page. Sellers can specify up to five international shipping services
     *  (with five <b>InternationalShippingServiceOption</b> containers), so valid values are
     *  1, 2, 3, 4, and 5. A shipping service with a <b>ShippingServicePriority</b> value of <code>1</code>
     *  appears at the top. Conversely, a shipping service with a
     *  <b>ShippingServicePriority</b> value of 5 appears at the bottom of a list of five
     *  shipping service options. If the Global Shipping Program is enabled on the listing for international shipping, only four additional shipping services may be specified.
     *  <br><br>
     *  This field is applicable to Flat and Calculated shipping.
     *
     * @return int
     */
    public function getShippingServicePriority()
    {
        return $this->shippingServicePriority;
    }

    /**
     * Sets a new shippingServicePriority
     *
     * This integer value controls the order (relative to other shipping services) in
     *  which the corresponding <b>ShippingService</b> will appear in the View Item and
     *  Checkout page. Sellers can specify up to five international shipping services
     *  (with five <b>InternationalShippingServiceOption</b> containers), so valid values are
     *  1, 2, 3, 4, and 5. A shipping service with a <b>ShippingServicePriority</b> value of <code>1</code>
     *  appears at the top. Conversely, a shipping service with a
     *  <b>ShippingServicePriority</b> value of 5 appears at the bottom of a list of five
     *  shipping service options. If the Global Shipping Program is enabled on the listing for international shipping, only four additional shipping services may be specified.
     *  <br><br>
     *  This field is applicable to Flat and Calculated shipping.
     *
     * @param int $shippingServicePriority
     * @return self
     */
    public function setShippingServicePriority($shippingServicePriority)
    {
        $this->shippingServicePriority = $shippingServicePriority;
        return $this;
    }

    /**
     * Adds as shipToLocation
     *
     * An international location or region to where the item seller will ship the item.
     *  <br/><br/>
     *  Use <b>GeteBayDetails</b> with <b>DetailName</b> set to
     *  <b>ShippingLocationDetails</b> to determine which locations are valid per site.
     *  In the <b>GeteBayDetails</b> response, look for the ShippingLoca<b>tionDetails.ShippingLocation</b> fields.
     *  <br/><br/>
     *  For the <b>AddItem</b> family of calls, this field is required if any international shipping service is specified.
     *  <br><br>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, <b>ShipToLocation</b> fields will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, <b>ShipToLocation</b> fields are only returned to the buyer or seller, and a string value of <code>Unavailable</code> will be returned to all third parties.
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
     * An international location or region to where the item seller will ship the item.
     *  <br/><br/>
     *  Use <b>GeteBayDetails</b> with <b>DetailName</b> set to
     *  <b>ShippingLocationDetails</b> to determine which locations are valid per site.
     *  In the <b>GeteBayDetails</b> response, look for the ShippingLoca<b>tionDetails.ShippingLocation</b> fields.
     *  <br/><br/>
     *  For the <b>AddItem</b> family of calls, this field is required if any international shipping service is specified.
     *  <br><br>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, <b>ShipToLocation</b> fields will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, <b>ShipToLocation</b> fields are only returned to the buyer or seller, and a string value of <code>Unavailable</code> will be returned to all third parties.
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
     * An international location or region to where the item seller will ship the item.
     *  <br/><br/>
     *  Use <b>GeteBayDetails</b> with <b>DetailName</b> set to
     *  <b>ShippingLocationDetails</b> to determine which locations are valid per site.
     *  In the <b>GeteBayDetails</b> response, look for the ShippingLoca<b>tionDetails.ShippingLocation</b> fields.
     *  <br/><br/>
     *  For the <b>AddItem</b> family of calls, this field is required if any international shipping service is specified.
     *  <br><br>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, <b>ShipToLocation</b> fields will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, <b>ShipToLocation</b> fields are only returned to the buyer or seller, and a string value of <code>Unavailable</code> will be returned to all third parties.
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
     * An international location or region to where the item seller will ship the item.
     *  <br/><br/>
     *  Use <b>GeteBayDetails</b> with <b>DetailName</b> set to
     *  <b>ShippingLocationDetails</b> to determine which locations are valid per site.
     *  In the <b>GeteBayDetails</b> response, look for the ShippingLoca<b>tionDetails.ShippingLocation</b> fields.
     *  <br/><br/>
     *  For the <b>AddItem</b> family of calls, this field is required if any international shipping service is specified.
     *  <br><br>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, <b>ShipToLocation</b> fields will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, <b>ShipToLocation</b> fields are only returned to the buyer or seller, and a string value of <code>Unavailable</code> will be returned to all third parties.
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
     * An international location or region to where the item seller will ship the item.
     *  <br/><br/>
     *  Use <b>GeteBayDetails</b> with <b>DetailName</b> set to
     *  <b>ShippingLocationDetails</b> to determine which locations are valid per site.
     *  In the <b>GeteBayDetails</b> response, look for the ShippingLoca<b>tionDetails.ShippingLocation</b> fields.
     *  <br/><br/>
     *  For the <b>AddItem</b> family of calls, this field is required if any international shipping service is specified.
     *  <br><br>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, <b>ShipToLocation</b> fields will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, <b>ShipToLocation</b> fields are only returned to the buyer or seller, and a string value of <code>Unavailable</code> will be returned to all third parties.
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
     * Gets as shippingInsuranceCost
     *
     * This field is no longer applicable as it is not longer possible for a seller to offer a buyer shipping insurance.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getShippingInsuranceCost()
    {
        return $this->shippingInsuranceCost;
    }

    /**
     * Sets a new shippingInsuranceCost
     *
     * This field is no longer applicable as it is not longer possible for a seller to offer a buyer shipping insurance.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $shippingInsuranceCost
     * @return self
     */
    public function setShippingInsuranceCost(\Nogrod\eBaySDK\MerchantData\AmountType $shippingInsuranceCost)
    {
        $this->shippingInsuranceCost = $shippingInsuranceCost;
        return $this;
    }

    /**
     * Gets as importCharge
     *
     * The total cost of customs and taxes for the international leg of an order shipped using the Global Shipping Program. This amount is calculated and supplied for each item by the international shipping provider when a buyer views the item properties.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
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
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $importCharge
     * @return self
     */
    public function setImportCharge(\Nogrod\eBaySDK\MerchantData\AmountType $importCharge)
    {
        $this->importCharge = $importCharge;
        return $this;
    }

    /**
     * Gets as shippingServiceCutOffTime
     *
     * The last time of day that an order using the specified shipping service will be accepted by the seller. The cut off time applies and is returned only when the <strong>ShippingService</strong> field contains the name of a qualifying time-sensitive shipping service, such as <code>eBayNowImmediateDelivery</code>.
     *  <br><br>
     *  The cut off time is set by eBay and determined in part by the policies and locations of the seller and the shipping carrier.
     *
     * @return \DateTime
     */
    public function getShippingServiceCutOffTime()
    {
        return $this->shippingServiceCutOffTime;
    }

    /**
     * Sets a new shippingServiceCutOffTime
     *
     * The last time of day that an order using the specified shipping service will be accepted by the seller. The cut off time applies and is returned only when the <strong>ShippingService</strong> field contains the name of a qualifying time-sensitive shipping service, such as <code>eBayNowImmediateDelivery</code>.
     *  <br><br>
     *  The cut off time is set by eBay and determined in part by the policies and locations of the seller and the shipping carrier.
     *
     * @param \DateTime $shippingServiceCutOffTime
     * @return self
     */
    public function setShippingServiceCutOffTime(\DateTime $shippingServiceCutOffTime)
    {
        $this->shippingServiceCutOffTime = $shippingServiceCutOffTime;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getShippingService();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingService", $value);
        }
        $value = $this->getShippingServiceCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingServiceCost", $value);
        }
        $value = $this->getShippingServiceAdditionalCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingServiceAdditionalCost", $value);
        }
        $value = $this->getShippingServicePriority();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingServicePriority", $value);
        }
        $value = $this->getShipToLocation();
        if (null !== $value && !empty($this->getShipToLocation())) {
            $writer->write(array_map(function ($v) {
                return ["ShipToLocation" => $v];
            }, $value));
        }
        $value = $this->getShippingInsuranceCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingInsuranceCost", $value);
        }
        $value = $this->getImportCharge();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ImportCharge", $value);
        }
        $value = $this->getShippingServiceCutOffTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingServiceCutOffTime", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingService');
        if (null !== $value) {
            $this->setShippingService($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingServiceCost');
        if (null !== $value) {
            $this->setShippingServiceCost(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingServiceAdditionalCost');
        if (null !== $value) {
            $this->setShippingServiceAdditionalCost(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingServicePriority');
        if (null !== $value) {
            $this->setShippingServicePriority($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShipToLocation', true);
        if (null !== $value && !empty($value)) {
            $this->setShipToLocation($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingInsuranceCost');
        if (null !== $value) {
            $this->setShippingInsuranceCost(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ImportCharge');
        if (null !== $value) {
            $this->setImportCharge(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingServiceCutOffTime');
        if (null !== $value) {
            $this->setShippingServiceCutOffTime(new \DateTime($value));
        }
    }
}
