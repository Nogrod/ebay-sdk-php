<?php

namespace Nogrod\eBaySDK\Trading;

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
     * The date and time that the seller handed off the package(s) to the shipping
     *  carrier. If this field is not included in the request, the timestamp of the call
     *  execution is used as the shipped time. Note that sellers have the ability to set
     *  this value up to 3 calendar days in the future.
     *
     * @var \DateTime $shippedTime
     */
    private $shippedTime = null;

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

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getShippedTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippedTime", $value);
        }
        $value = $this->getShipmentTrackingDetails();
        if (null !== $value && [] !== $this->getShipmentTrackingDetails()) {
            $writer->write(array_map(function ($v) {return ["ShipmentTrackingDetails" => $v];}, $value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\ShipmentType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippedTime');
        if (null !== $value) {
            $this->setShippedTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShipmentTrackingDetails');
        if (null !== $value) {
            $this->setShipmentTrackingDetails(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\ShipmentTrackingDetailsType::fromKeyValue($v);}, $value));
        }
    }
}
