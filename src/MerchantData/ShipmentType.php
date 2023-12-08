<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ShipmentType
 *
 * Type defining the <b>Shipment</b> container, which is used by
 *  the seller in <b>CompleteSale</b> to provide shipping information.
 * XSD Type: ShipmentType
 */
class ShipmentType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * @var \DateTime $estimatedDeliveryDate
     */
    private $estimatedDeliveryDate = null;

    /**
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $insuredValue
     */
    private $insuredValue = null;

    /**
     * @var \Nogrod\eBaySDK\MerchantData\MeasureType $packageDepth
     */
    private $packageDepth = null;

    /**
     * @var \Nogrod\eBaySDK\MerchantData\MeasureType $packageLength
     */
    private $packageLength = null;

    /**
     * @var \Nogrod\eBaySDK\MerchantData\MeasureType $packageWidth
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
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $postageTotal
     */
    private $postageTotal = null;

    /**
     * @var \DateTime $printedTime
     */
    private $printedTime = null;

    /**
     * @var \Nogrod\eBaySDK\MerchantData\AddressType $shipFromAddress
     */
    private $shipFromAddress = null;

    /**
     * @var \Nogrod\eBaySDK\MerchantData\AddressType $shippingAddress
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
     * @var string $shippingPackage
     */
    private $shippingPackage = null;

    /**
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
     * @var \Nogrod\eBaySDK\MerchantData\MeasureType $weightMajor
     */
    private $weightMajor = null;

    /**
     * @var \Nogrod\eBaySDK\MerchantData\MeasureType $weightMinor
     */
    private $weightMinor = null;

    /**
     * @var \Nogrod\eBaySDK\MerchantData\ItemTransactionIDType[] $itemTransactionID
     */
    private $itemTransactionID = [

    ];

    /**
     * @var \DateTime $deliveryDate
     */
    private $deliveryDate = null;

    /**
     * @var string $deliveryStatus
     */
    private $deliveryStatus = null;

    /**
     * @var \DateTime $refundGrantedTime
     */
    private $refundGrantedTime = null;

    /**
     * @var \DateTime $refundRequestedTime
     */
    private $refundRequestedTime = null;

    /**
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
     * This field is deprecated.
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
     * @var \Nogrod\eBaySDK\MerchantData\ShipmentTrackingDetailsType[] $shipmentTrackingDetails
     */
    private $shipmentTrackingDetails = [

    ];

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
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getInsuredValue()
    {
        return $this->insuredValue;
    }

    /**
     * Sets a new insuredValue
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $insuredValue
     * @return self
     */
    public function setInsuredValue(\Nogrod\eBaySDK\MerchantData\AmountType $insuredValue)
    {
        $this->insuredValue = $insuredValue;
        return $this;
    }

    /**
     * Gets as packageDepth
     *
     * @return \Nogrod\eBaySDK\MerchantData\MeasureType
     */
    public function getPackageDepth()
    {
        return $this->packageDepth;
    }

    /**
     * Sets a new packageDepth
     *
     * @param \Nogrod\eBaySDK\MerchantData\MeasureType $packageDepth
     * @return self
     */
    public function setPackageDepth(\Nogrod\eBaySDK\MerchantData\MeasureType $packageDepth)
    {
        $this->packageDepth = $packageDepth;
        return $this;
    }

    /**
     * Gets as packageLength
     *
     * @return \Nogrod\eBaySDK\MerchantData\MeasureType
     */
    public function getPackageLength()
    {
        return $this->packageLength;
    }

    /**
     * Sets a new packageLength
     *
     * @param \Nogrod\eBaySDK\MerchantData\MeasureType $packageLength
     * @return self
     */
    public function setPackageLength(\Nogrod\eBaySDK\MerchantData\MeasureType $packageLength)
    {
        $this->packageLength = $packageLength;
        return $this;
    }

    /**
     * Gets as packageWidth
     *
     * @return \Nogrod\eBaySDK\MerchantData\MeasureType
     */
    public function getPackageWidth()
    {
        return $this->packageWidth;
    }

    /**
     * Sets a new packageWidth
     *
     * @param \Nogrod\eBaySDK\MerchantData\MeasureType $packageWidth
     * @return self
     */
    public function setPackageWidth(\Nogrod\eBaySDK\MerchantData\MeasureType $packageWidth)
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
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getPostageTotal()
    {
        return $this->postageTotal;
    }

    /**
     * Sets a new postageTotal
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $postageTotal
     * @return self
     */
    public function setPostageTotal(\Nogrod\eBaySDK\MerchantData\AmountType $postageTotal)
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
     * @return \Nogrod\eBaySDK\MerchantData\AddressType
     */
    public function getShipFromAddress()
    {
        return $this->shipFromAddress;
    }

    /**
     * Sets a new shipFromAddress
     *
     * @param \Nogrod\eBaySDK\MerchantData\AddressType $shipFromAddress
     * @return self
     */
    public function setShipFromAddress(\Nogrod\eBaySDK\MerchantData\AddressType $shipFromAddress)
    {
        $this->shipFromAddress = $shipFromAddress;
        return $this;
    }

    /**
     * Gets as shippingAddress
     *
     * @return \Nogrod\eBaySDK\MerchantData\AddressType
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * Sets a new shippingAddress
     *
     * @param \Nogrod\eBaySDK\MerchantData\AddressType $shippingAddress
     * @return self
     */
    public function setShippingAddress(\Nogrod\eBaySDK\MerchantData\AddressType $shippingAddress)
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
     * @return string
     */
    public function getShippingPackage()
    {
        return $this->shippingPackage;
    }

    /**
     * Sets a new shippingPackage
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
     * @return string
     */
    public function getShippingServiceUsed()
    {
        return $this->shippingServiceUsed;
    }

    /**
     * Sets a new shippingServiceUsed
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
     * @return \Nogrod\eBaySDK\MerchantData\MeasureType
     */
    public function getWeightMajor()
    {
        return $this->weightMajor;
    }

    /**
     * Sets a new weightMajor
     *
     * @param \Nogrod\eBaySDK\MerchantData\MeasureType $weightMajor
     * @return self
     */
    public function setWeightMajor(\Nogrod\eBaySDK\MerchantData\MeasureType $weightMajor)
    {
        $this->weightMajor = $weightMajor;
        return $this;
    }

    /**
     * Gets as weightMinor
     *
     * @return \Nogrod\eBaySDK\MerchantData\MeasureType
     */
    public function getWeightMinor()
    {
        return $this->weightMinor;
    }

    /**
     * Sets a new weightMinor
     *
     * @param \Nogrod\eBaySDK\MerchantData\MeasureType $weightMinor
     * @return self
     */
    public function setWeightMinor(\Nogrod\eBaySDK\MerchantData\MeasureType $weightMinor)
    {
        $this->weightMinor = $weightMinor;
        return $this;
    }

    /**
     * Adds as itemTransactionID
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\ItemTransactionIDType $itemTransactionID
     */
    public function addToItemTransactionID(\Nogrod\eBaySDK\MerchantData\ItemTransactionIDType $itemTransactionID)
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
     * @return \Nogrod\eBaySDK\MerchantData\ItemTransactionIDType[]
     */
    public function getItemTransactionID()
    {
        return $this->itemTransactionID;
    }

    /**
     * Sets a new itemTransactionID
     *
     * @param \Nogrod\eBaySDK\MerchantData\ItemTransactionIDType[] $itemTransactionID
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
     * @return \DateTime
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    /**
     * Sets a new deliveryDate
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
     * @return string
     */
    public function getDeliveryStatus()
    {
        return $this->deliveryStatus;
    }

    /**
     * Sets a new deliveryStatus
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
     * @return \DateTime
     */
    public function getRefundGrantedTime()
    {
        return $this->refundGrantedTime;
    }

    /**
     * Sets a new refundGrantedTime
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
     * @return \DateTime
     */
    public function getRefundRequestedTime()
    {
        return $this->refundRequestedTime;
    }

    /**
     * Sets a new refundRequestedTime
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
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
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
     * This field is deprecated.
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
     * This field is deprecated.
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
     * @param \Nogrod\eBaySDK\MerchantData\ShipmentTrackingDetailsType $shipmentTrackingDetails
     */
    public function addToShipmentTrackingDetails(\Nogrod\eBaySDK\MerchantData\ShipmentTrackingDetailsType $shipmentTrackingDetails)
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
     * @return \Nogrod\eBaySDK\MerchantData\ShipmentTrackingDetailsType[]
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
     * @param \Nogrod\eBaySDK\MerchantData\ShipmentTrackingDetailsType[] $shipmentTrackingDetails
     * @return self
     */
    public function setShipmentTrackingDetails(array $shipmentTrackingDetails)
    {
        $this->shipmentTrackingDetails = $shipmentTrackingDetails;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
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
            $writer->write(array_map(function ($v) {return ["ShippingFeature" => $v];}, $value));
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
            $writer->write(array_map(function ($v) {return ["ItemTransactionID" => $v];}, $value));
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
            $writer->write(array_map(function ($v) {return ["ShipmentTrackingDetails" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EstimatedDeliveryDate');
        if (null !== $value) {
            $this->setEstimatedDeliveryDate(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InsuredValue');
        if (null !== $value) {
            $this->setInsuredValue(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PackageDepth');
        if (null !== $value) {
            $this->setPackageDepth(\Nogrod\eBaySDK\MerchantData\MeasureType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PackageLength');
        if (null !== $value) {
            $this->setPackageLength(\Nogrod\eBaySDK\MerchantData\MeasureType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PackageWidth');
        if (null !== $value) {
            $this->setPackageWidth(\Nogrod\eBaySDK\MerchantData\MeasureType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PayPalShipmentID');
        if (null !== $value) {
            $this->setPayPalShipmentID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShipmentID');
        if (null !== $value) {
            $this->setShipmentID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PostageTotal');
        if (null !== $value) {
            $this->setPostageTotal(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PrintedTime');
        if (null !== $value) {
            $this->setPrintedTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShipFromAddress');
        if (null !== $value) {
            $this->setShipFromAddress(\Nogrod\eBaySDK\MerchantData\AddressType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingAddress');
        if (null !== $value) {
            $this->setShippingAddress(\Nogrod\eBaySDK\MerchantData\AddressType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingCarrierUsed');
        if (null !== $value) {
            $this->setShippingCarrierUsed($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingFeature', true);
        if (null !== $value && !empty($value)) {
            $this->setShippingFeature($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingPackage');
        if (null !== $value) {
            $this->setShippingPackage($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingServiceUsed');
        if (null !== $value) {
            $this->setShippingServiceUsed($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShipmentTrackingNumber');
        if (null !== $value) {
            $this->setShipmentTrackingNumber($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}WeightMajor');
        if (null !== $value) {
            $this->setWeightMajor(\Nogrod\eBaySDK\MerchantData\MeasureType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}WeightMinor');
        if (null !== $value) {
            $this->setWeightMinor(\Nogrod\eBaySDK\MerchantData\MeasureType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemTransactionID', true);
        if (null !== $value && !empty($value)) {
            $this->setItemTransactionID(array_map(function ($v) {return \Nogrod\eBaySDK\MerchantData\ItemTransactionIDType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DeliveryDate');
        if (null !== $value) {
            $this->setDeliveryDate(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DeliveryStatus');
        if (null !== $value) {
            $this->setDeliveryStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RefundGrantedTime');
        if (null !== $value) {
            $this->setRefundGrantedTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RefundRequestedTime');
        if (null !== $value) {
            $this->setRefundRequestedTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Status');
        if (null !== $value) {
            $this->setStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippedTime');
        if (null !== $value) {
            $this->setShippedTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Notes');
        if (null !== $value) {
            $this->setNotes($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShipmentTrackingDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setShipmentTrackingDetails(array_map(function ($v) {return \Nogrod\eBaySDK\MerchantData\ShipmentTrackingDetailsType::fromKeyValue($v);}, $value));
        }
    }
}
