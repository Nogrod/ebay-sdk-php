<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ShipmentType
 *
 * Type defining the <b>Shipment</b> container, which is used by
 *  the seller in <b>CompleteSale</b> to provide shipping information. The
 *  <b>Shipment</b> container is also returned in the
 *  <b>GetSellingManagerSaleRecord</b> response.
 * XSD Type: ShipmentType
 */
class ShipmentType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * @var \DateTime $estimatedDeliveryDate
     */
    private $estimatedDeliveryDate = null;

    /**
     * @var \Nogrod\eBaySDK\Trading\AmountType $insuredValue
     */
    private $insuredValue = null;

    /**
     * Depth dimension of the package needed to ship the item after it is sold.
     *  <br>
     *  For calculated shipping only.
     *
     * @var \Nogrod\eBaySDK\Trading\MeasureType $packageDepth
     */
    private $packageDepth = null;

    /**
     * Length dimension of the package needed to ship the item after it is sold.
     *  <br>
     *  For calculated shipping only.
     *
     * @var \Nogrod\eBaySDK\Trading\MeasureType $packageLength
     */
    private $packageLength = null;

    /**
     * Width dimension of the package needed to ship the item after it is sold.
     *  <br>
     *  For calculated shipping only.
     *
     * @var \Nogrod\eBaySDK\Trading\MeasureType $packageWidth
     */
    private $packageWidth = null;

    /**
     * @var string $payPalShipmentID
     */
    private $payPalShipmentID = null;

    /**
     * @var int $shipmentID
     */
    private $shipmentID = null;

    /**
     * @var \Nogrod\eBaySDK\Trading\AmountType $postageTotal
     */
    private $postageTotal = null;

    /**
     * @var \DateTime $printedTime
     */
    private $printedTime = null;

    /**
     * The address from which the item is being shipped.
     *
     * @var \Nogrod\eBaySDK\Trading\AddressType $shipFromAddress
     */
    private $shipFromAddress = null;

    /**
     * The address to which the item is to be shipped.
     *
     * @var \Nogrod\eBaySDK\Trading\AddressType $shippingAddress
     */
    private $shippingAddress = null;

    /**
     * This field is deprecated.
     *
     * @var string $shippingCarrierUsed
     */
    private $shippingCarrierUsed = null;

    /**
     * @var string[] $shippingFeature
     */
    private $shippingFeature = [
        
    ];

    /**
     * The size of the package used to ship the item(s). See ShippingPackageCodeType
     *  for its possible values. Input.
     *
     * @var string $shippingPackage
     */
    private $shippingPackage = null;

    /**
     * The size of the package used to ship the item(s). See ShippingPackageCodeType
     *  for its possible values. Input.
     *
     * @var string $shippingServiceUsed
     */
    private $shippingServiceUsed = null;

    /**
     * This field is deprecated.
     *
     * @var string $shipmentTrackingNumber
     */
    private $shipmentTrackingNumber = null;

    /**
     * The 'unit' attribute can have a value of lbs.
     *
     * @var \Nogrod\eBaySDK\Trading\MeasureType $weightMajor
     */
    private $weightMajor = null;

    /**
     * The 'unit' attribute is optional and assumed to be the
     *  minor compared to the value of 'unit' in WeightMajor.
     *
     * @var \Nogrod\eBaySDK\Trading\MeasureType $weightMinor
     */
    private $weightMinor = null;

    /**
     * @var \Nogrod\eBaySDK\Trading\ItemTransactionIDType[] $itemTransactionID
     */
    private $itemTransactionID = [
        
    ];

    /**
     * Revise only
     *
     * @var \DateTime $deliveryDate
     */
    private $deliveryDate = null;

    /**
     * Revise only
     *
     * @var string $deliveryStatus
     */
    private $deliveryStatus = null;

    /**
     * Revise only
     *
     * @var \DateTime $refundGrantedTime
     */
    private $refundGrantedTime = null;

    /**
     * Revise only
     *
     * @var \DateTime $refundRequestedTime
     */
    private $refundRequestedTime = null;

    /**
     * Status, for revise only
     *
     * @var string $status
     */
    private $status = null;

    /**
     * The date and time that the seller handed off the package(s) to the shipping
     *  carrier. If this field is not included in the request, the timestamp of the call
     *  execution is used as the shipped time. Note that sellers have the ability to set
     *  this value up to 3 calendar days in the future.
     *
     * @var \DateTime $shippedTime
     */
    private $shippedTime = null;

    /**
     * <span class="tablenote"><b>Note: </b> This field is only applicable for Half.com listings, and since API support for Half.com listings is being deprecated, this field is no longer applicable.
     *  </span>
     *  This string field allows a seller to provide notes to the buyer regarding shipment of a Half.com item. Only alphanumeric characters can be used in this field. This is an optional field that is only applicable to Half.com items.
     *
     * @var string $notes
     */
    private $notes = null;

    /**
     * Container consisting of the tracking number and shipping carrier associated with
     *  the shipment of one item (package).
     *  <br><br>
     *  Because an order can have multiple line items and/or packages, there can be
     *  multiple <b>ShipmentTrackingDetails</b> containers under the
     *  <b>Shipment</b> container.
     *
     * @var \Nogrod\eBaySDK\Trading\ShipmentTrackingDetailsType[] $shipmentTrackingDetails
     */
    private $shipmentTrackingDetails = [
        
    ];

    /**
     * Contains information about one or more order line items in a Global Shipping Program package. Required or returned if the value of <strong>ShippingCarrierUsed</strong> is <code>PBI</code>.
     *
     * @var \Nogrod\eBaySDK\Trading\LineItemType[] $shipmentLineItem
     */
    private $shipmentLineItem = null;

    /**
     * Gets as estimatedDeliveryDate
     *
     * @return \DateTime
     */
    public function getEstimatedDeliveryDate()
    {
        return $this->estimatedDeliveryDate;
    }

    /**
     * Sets a new estimatedDeliveryDate
     *
     * @param \DateTime $estimatedDeliveryDate
     * @return self
     */
    public function setEstimatedDeliveryDate(\DateTime $estimatedDeliveryDate)
    {
        $this->estimatedDeliveryDate = $estimatedDeliveryDate;
        return $this;
    }

    /**
     * Gets as insuredValue
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getInsuredValue()
    {
        return $this->insuredValue;
    }

    /**
     * Sets a new insuredValue
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $insuredValue
     * @return self
     */
    public function setInsuredValue(\Nogrod\eBaySDK\Trading\AmountType $insuredValue)
    {
        $this->insuredValue = $insuredValue;
        return $this;
    }

    /**
     * Gets as packageDepth
     *
     * Depth dimension of the package needed to ship the item after it is sold.
     *  <br>
     *  For calculated shipping only.
     *
     * @return \Nogrod\eBaySDK\Trading\MeasureType
     */
    public function getPackageDepth()
    {
        return $this->packageDepth;
    }

    /**
     * Sets a new packageDepth
     *
     * Depth dimension of the package needed to ship the item after it is sold.
     *  <br>
     *  For calculated shipping only.
     *
     * @param \Nogrod\eBaySDK\Trading\MeasureType $packageDepth
     * @return self
     */
    public function setPackageDepth(\Nogrod\eBaySDK\Trading\MeasureType $packageDepth)
    {
        $this->packageDepth = $packageDepth;
        return $this;
    }

    /**
     * Gets as packageLength
     *
     * Length dimension of the package needed to ship the item after it is sold.
     *  <br>
     *  For calculated shipping only.
     *
     * @return \Nogrod\eBaySDK\Trading\MeasureType
     */
    public function getPackageLength()
    {
        return $this->packageLength;
    }

    /**
     * Sets a new packageLength
     *
     * Length dimension of the package needed to ship the item after it is sold.
     *  <br>
     *  For calculated shipping only.
     *
     * @param \Nogrod\eBaySDK\Trading\MeasureType $packageLength
     * @return self
     */
    public function setPackageLength(\Nogrod\eBaySDK\Trading\MeasureType $packageLength)
    {
        $this->packageLength = $packageLength;
        return $this;
    }

    /**
     * Gets as packageWidth
     *
     * Width dimension of the package needed to ship the item after it is sold.
     *  <br>
     *  For calculated shipping only.
     *
     * @return \Nogrod\eBaySDK\Trading\MeasureType
     */
    public function getPackageWidth()
    {
        return $this->packageWidth;
    }

    /**
     * Sets a new packageWidth
     *
     * Width dimension of the package needed to ship the item after it is sold.
     *  <br>
     *  For calculated shipping only.
     *
     * @param \Nogrod\eBaySDK\Trading\MeasureType $packageWidth
     * @return self
     */
    public function setPackageWidth(\Nogrod\eBaySDK\Trading\MeasureType $packageWidth)
    {
        $this->packageWidth = $packageWidth;
        return $this;
    }

    /**
     * Gets as payPalShipmentID
     *
     * @return string
     */
    public function getPayPalShipmentID()
    {
        return $this->payPalShipmentID;
    }

    /**
     * Sets a new payPalShipmentID
     *
     * @param string $payPalShipmentID
     * @return self
     */
    public function setPayPalShipmentID($payPalShipmentID)
    {
        $this->payPalShipmentID = $payPalShipmentID;
        return $this;
    }

    /**
     * Gets as shipmentID
     *
     * @return int
     */
    public function getShipmentID()
    {
        return $this->shipmentID;
    }

    /**
     * Sets a new shipmentID
     *
     * @param int $shipmentID
     * @return self
     */
    public function setShipmentID($shipmentID)
    {
        $this->shipmentID = $shipmentID;
        return $this;
    }

    /**
     * Gets as postageTotal
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getPostageTotal()
    {
        return $this->postageTotal;
    }

    /**
     * Sets a new postageTotal
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $postageTotal
     * @return self
     */
    public function setPostageTotal(\Nogrod\eBaySDK\Trading\AmountType $postageTotal)
    {
        $this->postageTotal = $postageTotal;
        return $this;
    }

    /**
     * Gets as printedTime
     *
     * @return \DateTime
     */
    public function getPrintedTime()
    {
        return $this->printedTime;
    }

    /**
     * Sets a new printedTime
     *
     * @param \DateTime $printedTime
     * @return self
     */
    public function setPrintedTime(\DateTime $printedTime)
    {
        $this->printedTime = $printedTime;
        return $this;
    }

    /**
     * Gets as shipFromAddress
     *
     * The address from which the item is being shipped.
     *
     * @return \Nogrod\eBaySDK\Trading\AddressType
     */
    public function getShipFromAddress()
    {
        return $this->shipFromAddress;
    }

    /**
     * Sets a new shipFromAddress
     *
     * The address from which the item is being shipped.
     *
     * @param \Nogrod\eBaySDK\Trading\AddressType $shipFromAddress
     * @return self
     */
    public function setShipFromAddress(\Nogrod\eBaySDK\Trading\AddressType $shipFromAddress)
    {
        $this->shipFromAddress = $shipFromAddress;
        return $this;
    }

    /**
     * Gets as shippingAddress
     *
     * The address to which the item is to be shipped.
     *
     * @return \Nogrod\eBaySDK\Trading\AddressType
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * Sets a new shippingAddress
     *
     * The address to which the item is to be shipped.
     *
     * @param \Nogrod\eBaySDK\Trading\AddressType $shippingAddress
     * @return self
     */
    public function setShippingAddress(\Nogrod\eBaySDK\Trading\AddressType $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;
        return $this;
    }

    /**
     * Gets as shippingCarrierUsed
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getShippingCarrierUsed()
    {
        return $this->shippingCarrierUsed;
    }

    /**
     * Sets a new shippingCarrierUsed
     *
     * This field is deprecated.
     *
     * @param string $shippingCarrierUsed
     * @return self
     */
    public function setShippingCarrierUsed($shippingCarrierUsed)
    {
        $this->shippingCarrierUsed = $shippingCarrierUsed;
        return $this;
    }

    /**
     * Adds as shippingFeature
     *
     * @return self
     * @param string $shippingFeature
     */
    public function addToShippingFeature($shippingFeature)
    {
        $this->shippingFeature[] = $shippingFeature;
        return $this;
    }

    /**
     * isset shippingFeature
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShippingFeature($index)
    {
        return isset($this->shippingFeature[$index]);
    }

    /**
     * unset shippingFeature
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShippingFeature($index)
    {
        unset($this->shippingFeature[$index]);
    }

    /**
     * Gets as shippingFeature
     *
     * @return string[]
     */
    public function getShippingFeature()
    {
        return $this->shippingFeature;
    }

    /**
     * Sets a new shippingFeature
     *
     * @param string $shippingFeature
     * @return self
     */
    public function setShippingFeature(array $shippingFeature)
    {
        $this->shippingFeature = $shippingFeature;
        return $this;
    }

    /**
     * Gets as shippingPackage
     *
     * The size of the package used to ship the item(s). See ShippingPackageCodeType
     *  for its possible values. Input.
     *
     * @return string
     */
    public function getShippingPackage()
    {
        return $this->shippingPackage;
    }

    /**
     * Sets a new shippingPackage
     *
     * The size of the package used to ship the item(s). See ShippingPackageCodeType
     *  for its possible values. Input.
     *
     * @param string $shippingPackage
     * @return self
     */
    public function setShippingPackage($shippingPackage)
    {
        $this->shippingPackage = $shippingPackage;
        return $this;
    }

    /**
     * Gets as shippingServiceUsed
     *
     * The size of the package used to ship the item(s). See ShippingPackageCodeType
     *  for its possible values. Input.
     *
     * @return string
     */
    public function getShippingServiceUsed()
    {
        return $this->shippingServiceUsed;
    }

    /**
     * Sets a new shippingServiceUsed
     *
     * The size of the package used to ship the item(s). See ShippingPackageCodeType
     *  for its possible values. Input.
     *
     * @param string $shippingServiceUsed
     * @return self
     */
    public function setShippingServiceUsed($shippingServiceUsed)
    {
        $this->shippingServiceUsed = $shippingServiceUsed;
        return $this;
    }

    /**
     * Gets as shipmentTrackingNumber
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getShipmentTrackingNumber()
    {
        return $this->shipmentTrackingNumber;
    }

    /**
     * Sets a new shipmentTrackingNumber
     *
     * This field is deprecated.
     *
     * @param string $shipmentTrackingNumber
     * @return self
     */
    public function setShipmentTrackingNumber($shipmentTrackingNumber)
    {
        $this->shipmentTrackingNumber = $shipmentTrackingNumber;
        return $this;
    }

    /**
     * Gets as weightMajor
     *
     * The 'unit' attribute can have a value of lbs.
     *
     * @return \Nogrod\eBaySDK\Trading\MeasureType
     */
    public function getWeightMajor()
    {
        return $this->weightMajor;
    }

    /**
     * Sets a new weightMajor
     *
     * The 'unit' attribute can have a value of lbs.
     *
     * @param \Nogrod\eBaySDK\Trading\MeasureType $weightMajor
     * @return self
     */
    public function setWeightMajor(\Nogrod\eBaySDK\Trading\MeasureType $weightMajor)
    {
        $this->weightMajor = $weightMajor;
        return $this;
    }

    /**
     * Gets as weightMinor
     *
     * The 'unit' attribute is optional and assumed to be the
     *  minor compared to the value of 'unit' in WeightMajor.
     *
     * @return \Nogrod\eBaySDK\Trading\MeasureType
     */
    public function getWeightMinor()
    {
        return $this->weightMinor;
    }

    /**
     * Sets a new weightMinor
     *
     * The 'unit' attribute is optional and assumed to be the
     *  minor compared to the value of 'unit' in WeightMajor.
     *
     * @param \Nogrod\eBaySDK\Trading\MeasureType $weightMinor
     * @return self
     */
    public function setWeightMinor(\Nogrod\eBaySDK\Trading\MeasureType $weightMinor)
    {
        $this->weightMinor = $weightMinor;
        return $this;
    }

    /**
     * Adds as itemTransactionID
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ItemTransactionIDType $itemTransactionID
     */
    public function addToItemTransactionID(\Nogrod\eBaySDK\Trading\ItemTransactionIDType $itemTransactionID)
    {
        $this->itemTransactionID[] = $itemTransactionID;
        return $this;
    }

    /**
     * isset itemTransactionID
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemTransactionID($index)
    {
        return isset($this->itemTransactionID[$index]);
    }

    /**
     * unset itemTransactionID
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemTransactionID($index)
    {
        unset($this->itemTransactionID[$index]);
    }

    /**
     * Gets as itemTransactionID
     *
     * @return \Nogrod\eBaySDK\Trading\ItemTransactionIDType[]
     */
    public function getItemTransactionID()
    {
        return $this->itemTransactionID;
    }

    /**
     * Sets a new itemTransactionID
     *
     * @param \Nogrod\eBaySDK\Trading\ItemTransactionIDType[] $itemTransactionID
     * @return self
     */
    public function setItemTransactionID(array $itemTransactionID)
    {
        $this->itemTransactionID = $itemTransactionID;
        return $this;
    }

    /**
     * Gets as deliveryDate
     *
     * Revise only
     *
     * @return \DateTime
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    /**
     * Sets a new deliveryDate
     *
     * Revise only
     *
     * @param \DateTime $deliveryDate
     * @return self
     */
    public function setDeliveryDate(\DateTime $deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;
        return $this;
    }

    /**
     * Gets as deliveryStatus
     *
     * Revise only
     *
     * @return string
     */
    public function getDeliveryStatus()
    {
        return $this->deliveryStatus;
    }

    /**
     * Sets a new deliveryStatus
     *
     * Revise only
     *
     * @param string $deliveryStatus
     * @return self
     */
    public function setDeliveryStatus($deliveryStatus)
    {
        $this->deliveryStatus = $deliveryStatus;
        return $this;
    }

    /**
     * Gets as refundGrantedTime
     *
     * Revise only
     *
     * @return \DateTime
     */
    public function getRefundGrantedTime()
    {
        return $this->refundGrantedTime;
    }

    /**
     * Sets a new refundGrantedTime
     *
     * Revise only
     *
     * @param \DateTime $refundGrantedTime
     * @return self
     */
    public function setRefundGrantedTime(\DateTime $refundGrantedTime)
    {
        $this->refundGrantedTime = $refundGrantedTime;
        return $this;
    }

    /**
     * Gets as refundRequestedTime
     *
     * Revise only
     *
     * @return \DateTime
     */
    public function getRefundRequestedTime()
    {
        return $this->refundRequestedTime;
    }

    /**
     * Sets a new refundRequestedTime
     *
     * Revise only
     *
     * @param \DateTime $refundRequestedTime
     * @return self
     */
    public function setRefundRequestedTime(\DateTime $refundRequestedTime)
    {
        $this->refundRequestedTime = $refundRequestedTime;
        return $this;
    }

    /**
     * Gets as status
     *
     * Status, for revise only
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Status, for revise only
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as shippedTime
     *
     * The date and time that the seller handed off the package(s) to the shipping
     *  carrier. If this field is not included in the request, the timestamp of the call
     *  execution is used as the shipped time. Note that sellers have the ability to set
     *  this value up to 3 calendar days in the future.
     *
     * @return \DateTime
     */
    public function getShippedTime()
    {
        return $this->shippedTime;
    }

    /**
     * Sets a new shippedTime
     *
     * The date and time that the seller handed off the package(s) to the shipping
     *  carrier. If this field is not included in the request, the timestamp of the call
     *  execution is used as the shipped time. Note that sellers have the ability to set
     *  this value up to 3 calendar days in the future.
     *
     * @param \DateTime $shippedTime
     * @return self
     */
    public function setShippedTime(\DateTime $shippedTime)
    {
        $this->shippedTime = $shippedTime;
        return $this;
    }

    /**
     * Gets as notes
     *
     * <span class="tablenote"><b>Note: </b> This field is only applicable for Half.com listings, and since API support for Half.com listings is being deprecated, this field is no longer applicable.
     *  </span>
     *  This string field allows a seller to provide notes to the buyer regarding shipment of a Half.com item. Only alphanumeric characters can be used in this field. This is an optional field that is only applicable to Half.com items.
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Sets a new notes
     *
     * <span class="tablenote"><b>Note: </b> This field is only applicable for Half.com listings, and since API support for Half.com listings is being deprecated, this field is no longer applicable.
     *  </span>
     *  This string field allows a seller to provide notes to the buyer regarding shipment of a Half.com item. Only alphanumeric characters can be used in this field. This is an optional field that is only applicable to Half.com items.
     *
     * @param string $notes
     * @return self
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
        return $this;
    }

    /**
     * Adds as shipmentTrackingDetails
     *
     * Container consisting of the tracking number and shipping carrier associated with
     *  the shipment of one item (package).
     *  <br><br>
     *  Because an order can have multiple line items and/or packages, there can be
     *  multiple <b>ShipmentTrackingDetails</b> containers under the
     *  <b>Shipment</b> container.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ShipmentTrackingDetailsType $shipmentTrackingDetails
     */
    public function addToShipmentTrackingDetails(\Nogrod\eBaySDK\Trading\ShipmentTrackingDetailsType $shipmentTrackingDetails)
    {
        $this->shipmentTrackingDetails[] = $shipmentTrackingDetails;
        return $this;
    }

    /**
     * isset shipmentTrackingDetails
     *
     * Container consisting of the tracking number and shipping carrier associated with
     *  the shipment of one item (package).
     *  <br><br>
     *  Because an order can have multiple line items and/or packages, there can be
     *  multiple <b>ShipmentTrackingDetails</b> containers under the
     *  <b>Shipment</b> container.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShipmentTrackingDetails($index)
    {
        return isset($this->shipmentTrackingDetails[$index]);
    }

    /**
     * unset shipmentTrackingDetails
     *
     * Container consisting of the tracking number and shipping carrier associated with
     *  the shipment of one item (package).
     *  <br><br>
     *  Because an order can have multiple line items and/or packages, there can be
     *  multiple <b>ShipmentTrackingDetails</b> containers under the
     *  <b>Shipment</b> container.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShipmentTrackingDetails($index)
    {
        unset($this->shipmentTrackingDetails[$index]);
    }

    /**
     * Gets as shipmentTrackingDetails
     *
     * Container consisting of the tracking number and shipping carrier associated with
     *  the shipment of one item (package).
     *  <br><br>
     *  Because an order can have multiple line items and/or packages, there can be
     *  multiple <b>ShipmentTrackingDetails</b> containers under the
     *  <b>Shipment</b> container.
     *
     * @return \Nogrod\eBaySDK\Trading\ShipmentTrackingDetailsType[]
     */
    public function getShipmentTrackingDetails()
    {
        return $this->shipmentTrackingDetails;
    }

    /**
     * Sets a new shipmentTrackingDetails
     *
     * Container consisting of the tracking number and shipping carrier associated with
     *  the shipment of one item (package).
     *  <br><br>
     *  Because an order can have multiple line items and/or packages, there can be
     *  multiple <b>ShipmentTrackingDetails</b> containers under the
     *  <b>Shipment</b> container.
     *
     * @param \Nogrod\eBaySDK\Trading\ShipmentTrackingDetailsType[] $shipmentTrackingDetails
     * @return self
     */
    public function setShipmentTrackingDetails(array $shipmentTrackingDetails)
    {
        $this->shipmentTrackingDetails = $shipmentTrackingDetails;
        return $this;
    }

    /**
     * Adds as lineItem
     *
     * Contains information about one or more order line items in a Global Shipping Program package. Required or returned if the value of <strong>ShippingCarrierUsed</strong> is <code>PBI</code>.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\LineItemType $lineItem
     */
    public function addToShipmentLineItem(\Nogrod\eBaySDK\Trading\LineItemType $lineItem)
    {
        $this->shipmentLineItem[] = $lineItem;
        return $this;
    }

    /**
     * isset shipmentLineItem
     *
     * Contains information about one or more order line items in a Global Shipping Program package. Required or returned if the value of <strong>ShippingCarrierUsed</strong> is <code>PBI</code>.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShipmentLineItem($index)
    {
        return isset($this->shipmentLineItem[$index]);
    }

    /**
     * unset shipmentLineItem
     *
     * Contains information about one or more order line items in a Global Shipping Program package. Required or returned if the value of <strong>ShippingCarrierUsed</strong> is <code>PBI</code>.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShipmentLineItem($index)
    {
        unset($this->shipmentLineItem[$index]);
    }

    /**
     * Gets as shipmentLineItem
     *
     * Contains information about one or more order line items in a Global Shipping Program package. Required or returned if the value of <strong>ShippingCarrierUsed</strong> is <code>PBI</code>.
     *
     * @return \Nogrod\eBaySDK\Trading\LineItemType[]
     */
    public function getShipmentLineItem()
    {
        return $this->shipmentLineItem;
    }

    /**
     * Sets a new shipmentLineItem
     *
     * Contains information about one or more order line items in a Global Shipping Program package. Required or returned if the value of <strong>ShippingCarrierUsed</strong> is <code>PBI</code>.
     *
     * @param \Nogrod\eBaySDK\Trading\LineItemType[] $shipmentLineItem
     * @return self
     */
    public function setShipmentLineItem(array $shipmentLineItem)
    {
        $this->shipmentLineItem = $shipmentLineItem;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getEstimatedDeliveryDate();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EstimatedDeliveryDate", $value);
        }
        $value = $this->getInsuredValue();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InsuredValue", $value);
        }
        $value = $this->getPackageDepth();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PackageDepth", $value);
        }
        $value = $this->getPackageLength();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PackageLength", $value);
        }
        $value = $this->getPackageWidth();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PackageWidth", $value);
        }
        $value = $this->getPayPalShipmentID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PayPalShipmentID", $value);
        }
        $value = $this->getShipmentID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShipmentID", $value);
        }
        $value = $this->getPostageTotal();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PostageTotal", $value);
        }
        $value = $this->getPrintedTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PrintedTime", $value);
        }
        $value = $this->getShipFromAddress();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShipFromAddress", $value);
        }
        $value = $this->getShippingAddress();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingAddress", $value);
        }
        $value = $this->getShippingCarrierUsed();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingCarrierUsed", $value);
        }
        $value = $this->getShippingFeature();
        if (null !== $value && !empty($this->getShippingFeature())) {
            $writer->write(array_map(function ($v) {
                return ["ShippingFeature" => $v];
            }, $value));
        }
        $value = $this->getShippingPackage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingPackage", $value);
        }
        $value = $this->getShippingServiceUsed();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingServiceUsed", $value);
        }
        $value = $this->getShipmentTrackingNumber();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShipmentTrackingNumber", $value);
        }
        $value = $this->getWeightMajor();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}WeightMajor", $value);
        }
        $value = $this->getWeightMinor();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}WeightMinor", $value);
        }
        $value = $this->getItemTransactionID();
        if (null !== $value && !empty($this->getItemTransactionID())) {
            $writer->write(array_map(function ($v) {
                return ["ItemTransactionID" => $v];
            }, $value));
        }
        $value = $this->getDeliveryDate();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DeliveryDate", $value);
        }
        $value = $this->getDeliveryStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DeliveryStatus", $value);
        }
        $value = $this->getRefundGrantedTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RefundGrantedTime", $value);
        }
        $value = $this->getRefundRequestedTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RefundRequestedTime", $value);
        }
        $value = $this->getStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Status", $value);
        }
        $value = $this->getShippedTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippedTime", $value);
        }
        $value = $this->getNotes();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Notes", $value);
        }
        $value = $this->getShipmentTrackingDetails();
        if (null !== $value && !empty($this->getShipmentTrackingDetails())) {
            $writer->write(array_map(function ($v) {
                return ["ShipmentTrackingDetails" => $v];
            }, $value));
        }
        $value = $this->getShipmentLineItem();
        if (null !== $value && !empty($this->getShipmentLineItem())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShipmentLineItem", array_map(function ($v) {
                return ["LineItem" => $v];
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EstimatedDeliveryDate');
        if (null !== $value) {
            $this->setEstimatedDeliveryDate(new \DateTime($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InsuredValue');
        if (null !== $value) {
            $this->setInsuredValue(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PackageDepth');
        if (null !== $value) {
            $this->setPackageDepth(\Nogrod\eBaySDK\Trading\MeasureType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PackageLength');
        if (null !== $value) {
            $this->setPackageLength(\Nogrod\eBaySDK\Trading\MeasureType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PackageWidth');
        if (null !== $value) {
            $this->setPackageWidth(\Nogrod\eBaySDK\Trading\MeasureType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PayPalShipmentID');
        if (null !== $value) {
            $this->setPayPalShipmentID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShipmentID');
        if (null !== $value) {
            $this->setShipmentID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PostageTotal');
        if (null !== $value) {
            $this->setPostageTotal(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PrintedTime');
        if (null !== $value) {
            $this->setPrintedTime(new \DateTime($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShipFromAddress');
        if (null !== $value) {
            $this->setShipFromAddress(\Nogrod\eBaySDK\Trading\AddressType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingAddress');
        if (null !== $value) {
            $this->setShippingAddress(\Nogrod\eBaySDK\Trading\AddressType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingCarrierUsed');
        if (null !== $value) {
            $this->setShippingCarrierUsed($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingFeature', true);
        if (null !== $value && !empty($value)) {
            $this->setShippingFeature($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingPackage');
        if (null !== $value) {
            $this->setShippingPackage($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingServiceUsed');
        if (null !== $value) {
            $this->setShippingServiceUsed($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShipmentTrackingNumber');
        if (null !== $value) {
            $this->setShipmentTrackingNumber($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}WeightMajor');
        if (null !== $value) {
            $this->setWeightMajor(\Nogrod\eBaySDK\Trading\MeasureType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}WeightMinor');
        if (null !== $value) {
            $this->setWeightMinor(\Nogrod\eBaySDK\Trading\MeasureType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemTransactionID', true);
        if (null !== $value && !empty($value)) {
            $this->setItemTransactionID(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ItemTransactionIDType::fromKeyValue($v);
            }, $value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DeliveryDate');
        if (null !== $value) {
            $this->setDeliveryDate(new \DateTime($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DeliveryStatus');
        if (null !== $value) {
            $this->setDeliveryStatus($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RefundGrantedTime');
        if (null !== $value) {
            $this->setRefundGrantedTime(new \DateTime($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RefundRequestedTime');
        if (null !== $value) {
            $this->setRefundRequestedTime(new \DateTime($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Status');
        if (null !== $value) {
            $this->setStatus($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippedTime');
        if (null !== $value) {
            $this->setShippedTime(new \DateTime($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Notes');
        if (null !== $value) {
            $this->setNotes($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShipmentTrackingDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setShipmentTrackingDetails(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ShipmentTrackingDetailsType::fromKeyValue($v);
            }, $value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShipmentLineItem', true);
        if (null !== $value && !empty($value)) {
            $this->setShipmentLineItem(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\LineItemType::fromKeyValue($v);
            }, $value));
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
