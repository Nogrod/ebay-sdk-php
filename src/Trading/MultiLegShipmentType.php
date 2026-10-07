<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MultiLegShipmentType
 *
 * This type provides information about the shipping service, cost, address, and delivery estimates for the domestic leg of international shipments. This type is only applicable for international shipments using either the Global Shipping Program or eBay International Shipping.
 * XSD Type: MultiLegShipmentType
 */
class MultiLegShipmentType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * Contains information about the shipping service and cost of the domestic leg of a Global Shipping Program shipment.
     *
     * @var \Nogrod\eBaySDK\Trading\MultiLegShippingServiceType $shippingServiceDetails
     */
    private $shippingServiceDetails = null;

    /**
     * Contains shipping address information for the domestic leg of a Global Shipping Program shipment or an eBay International Shipping shipment. For a Global Shipping Program shipment, this container includes the ReferenceID field, which can be printed on the package to give the international shipping provider a unique identifier for the order. For an eBay International Shipping shipment, the eBay Virtual Tracking Number is returned in the Street2 field.
     *
     * @var \Nogrod\eBaySDK\Trading\AddressType $shipToAddress
     */
    private $shipToAddress = null;

    /**
     * The integer value returned here indicates the minimum number of business days that the corresponding shipping service (indicated in <b>ShippingServiceDetails.ShippingService</b> field) will take to be delivered to eBay's domestic shipping partner.
     *  <br><br>
     *  This minimum shipping time does not include the seller's handling time, and the clock starts on the shipping time only after the seller has delivered the item to the shipping carrier for shipment to eBay's domestic shipping partner. 'Business days' can vary by shipping carrier and by country, but 'business days' are generally Monday through Friday, excluding holidays. This field is returned if defined for that particular shipping service option.
     *
     * @var int $shippingTimeMin
     */
    private $shippingTimeMin = null;

    /**
     * The integer value returned here indicates the maximum number of business days that the corresponding shipping service (indicated in <b>ShippingServiceDetails.ShippingService</b> field) will take to be delivered to eBay's domestic shipping partner.
     *  <br><br>
     *  This maximum shipping time does not include the seller's handling time, and the clock starts on the shipping time only after the seller has delivered the item to the shipping carrier for shipment to eBay's domestic shipping partner. 'Business days' can vary by shipping carrier and by country, but 'business days' are generally Monday through Friday, excluding holidays. This field is returned if defined for that particular shipping service option.
     *
     * @var int $shippingTimeMax
     */
    private $shippingTimeMax = null;

    /**
     * Gets as shippingServiceDetails
     *
     * Contains information about the shipping service and cost of the domestic leg of a Global Shipping Program shipment.
     *
     * @return \Nogrod\eBaySDK\Trading\MultiLegShippingServiceType
     */
    public function getShippingServiceDetails()
    {
        return $this->shippingServiceDetails;
    }

    /**
     * Sets a new shippingServiceDetails
     *
     * Contains information about the shipping service and cost of the domestic leg of a Global Shipping Program shipment.
     *
     * @param \Nogrod\eBaySDK\Trading\MultiLegShippingServiceType $shippingServiceDetails
     * @return self
     */
    public function setShippingServiceDetails(\Nogrod\eBaySDK\Trading\MultiLegShippingServiceType $shippingServiceDetails)
    {
        $this->shippingServiceDetails = $shippingServiceDetails;
        return $this;
    }

    /**
     * Gets as shipToAddress
     *
     * Contains shipping address information for the domestic leg of a Global Shipping Program shipment or an eBay International Shipping shipment. For a Global Shipping Program shipment, this container includes the ReferenceID field, which can be printed on the package to give the international shipping provider a unique identifier for the order. For an eBay International Shipping shipment, the eBay Virtual Tracking Number is returned in the Street2 field.
     *
     * @return \Nogrod\eBaySDK\Trading\AddressType
     */
    public function getShipToAddress()
    {
        return $this->shipToAddress;
    }

    /**
     * Sets a new shipToAddress
     *
     * Contains shipping address information for the domestic leg of a Global Shipping Program shipment or an eBay International Shipping shipment. For a Global Shipping Program shipment, this container includes the ReferenceID field, which can be printed on the package to give the international shipping provider a unique identifier for the order. For an eBay International Shipping shipment, the eBay Virtual Tracking Number is returned in the Street2 field.
     *
     * @param \Nogrod\eBaySDK\Trading\AddressType $shipToAddress
     * @return self
     */
    public function setShipToAddress(\Nogrod\eBaySDK\Trading\AddressType $shipToAddress)
    {
        $this->shipToAddress = $shipToAddress;
        return $this;
    }

    /**
     * Gets as shippingTimeMin
     *
     * The integer value returned here indicates the minimum number of business days that the corresponding shipping service (indicated in <b>ShippingServiceDetails.ShippingService</b> field) will take to be delivered to eBay's domestic shipping partner.
     *  <br><br>
     *  This minimum shipping time does not include the seller's handling time, and the clock starts on the shipping time only after the seller has delivered the item to the shipping carrier for shipment to eBay's domestic shipping partner. 'Business days' can vary by shipping carrier and by country, but 'business days' are generally Monday through Friday, excluding holidays. This field is returned if defined for that particular shipping service option.
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
     * The integer value returned here indicates the minimum number of business days that the corresponding shipping service (indicated in <b>ShippingServiceDetails.ShippingService</b> field) will take to be delivered to eBay's domestic shipping partner.
     *  <br><br>
     *  This minimum shipping time does not include the seller's handling time, and the clock starts on the shipping time only after the seller has delivered the item to the shipping carrier for shipment to eBay's domestic shipping partner. 'Business days' can vary by shipping carrier and by country, but 'business days' are generally Monday through Friday, excluding holidays. This field is returned if defined for that particular shipping service option.
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
     * Gets as shippingTimeMax
     *
     * The integer value returned here indicates the maximum number of business days that the corresponding shipping service (indicated in <b>ShippingServiceDetails.ShippingService</b> field) will take to be delivered to eBay's domestic shipping partner.
     *  <br><br>
     *  This maximum shipping time does not include the seller's handling time, and the clock starts on the shipping time only after the seller has delivered the item to the shipping carrier for shipment to eBay's domestic shipping partner. 'Business days' can vary by shipping carrier and by country, but 'business days' are generally Monday through Friday, excluding holidays. This field is returned if defined for that particular shipping service option.
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
     * The integer value returned here indicates the maximum number of business days that the corresponding shipping service (indicated in <b>ShippingServiceDetails.ShippingService</b> field) will take to be delivered to eBay's domestic shipping partner.
     *  <br><br>
     *  This maximum shipping time does not include the seller's handling time, and the clock starts on the shipping time only after the seller has delivered the item to the shipping carrier for shipment to eBay's domestic shipping partner. 'Business days' can vary by shipping carrier and by country, but 'business days' are generally Monday through Friday, excluding holidays. This field is returned if defined for that particular shipping service option.
     *
     * @param int $shippingTimeMax
     * @return self
     */
    public function setShippingTimeMax($shippingTimeMax)
    {
        $this->shippingTimeMax = $shippingTimeMax;
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
        $value = $this->shippingServiceDetails;
        if (null !== $value) {
            $writer->startElementNs(null, 'ShippingServiceDetails', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->shipToAddress;
        if (null !== $value) {
            $writer->startElementNs(null, 'ShipToAddress', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->shippingTimeMin;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ShippingTimeMin', null, (string) $value);
        }
        $value = $this->shippingTimeMax;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ShippingTimeMax', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\MultiLegShipmentType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
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
                case 'ShippingServiceDetails':
                    $this->shippingServiceDetails = \Nogrod\eBaySDK\Trading\MultiLegShippingServiceType::xmlRead($reader);
                    return true;
                case 'ShipToAddress':
                    $this->shipToAddress = \Nogrod\eBaySDK\Trading\AddressType::xmlRead($reader);
                    return true;
                case 'ShippingTimeMin':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->shippingTimeMin = (int) $value;
                    }
                    return true;
                case 'ShippingTimeMax':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->shippingTimeMax = (int) $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['ShippingServiceDetails'] = $this->shippingServiceDetails;
        $data['ShipToAddress'] = $this->shipToAddress;
        $data['ShippingTimeMin'] = $this->shippingTimeMin;
        $data['ShippingTimeMax'] = $this->shippingTimeMax;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
