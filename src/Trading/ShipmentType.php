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
        if (!is_array($this->shipmentTrackingDetails)) {
            throw new \LogicException('shipmentTrackingDetails is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\ShipmentTrackingDetailsType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\ShipmentTrackingDetailsType> $shipmentTrackingDetails
     * @return self
     */
    public function setShipmentTrackingDetails(iterable $shipmentTrackingDetails)
    {
        $this->shipmentTrackingDetails = $shipmentTrackingDetails;
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
        $value = $this->shippedTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ShippedTime', null, Func::formatDateTime($value));
        }
        $value = $this->shipmentTrackingDetails;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'ShipmentTrackingDetails', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\ShipmentType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->shipmentTrackingDetails = [];
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
                case 'ShippedTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->shippedTime = new \DateTime($value);
                    }
                    return true;
                case 'ShipmentTrackingDetails':
                    $this->shipmentTrackingDetails[] = \Nogrod\eBaySDK\Trading\ShipmentTrackingDetailsType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
