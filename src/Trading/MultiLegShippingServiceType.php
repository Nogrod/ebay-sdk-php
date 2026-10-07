<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MultiLegShippingServiceType
 *
 * This type specifies the shipping service and cost of the domestic leg of a Global Shipping Program shipment or an eBay International Shipping shipment.
 * XSD Type: MultiLegShippingServiceType
 */
class MultiLegShippingServiceType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The shipping service specified for the domestic leg of a Global Shipping Program shipment or an eBay International Shipping shipment. For the domestic leg, the value of this field can be any available shipping service that ships to the domestic address of the international shipping provider.
     *
     * @var string $shippingService
     */
    private $shippingService = null;

    /**
     * The total shipping cost of the domestic leg of a Global Shipping Program shipment or an eBay International Shipping shipment.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $totalShippingCost
     */
    private $totalShippingCost = null;

    /**
     * Gets as shippingService
     *
     * The shipping service specified for the domestic leg of a Global Shipping Program shipment or an eBay International Shipping shipment. For the domestic leg, the value of this field can be any available shipping service that ships to the domestic address of the international shipping provider.
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
     * The shipping service specified for the domestic leg of a Global Shipping Program shipment or an eBay International Shipping shipment. For the domestic leg, the value of this field can be any available shipping service that ships to the domestic address of the international shipping provider.
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
     * Gets as totalShippingCost
     *
     * The total shipping cost of the domestic leg of a Global Shipping Program shipment or an eBay International Shipping shipment.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getTotalShippingCost()
    {
        return $this->totalShippingCost;
    }

    /**
     * Sets a new totalShippingCost
     *
     * The total shipping cost of the domestic leg of a Global Shipping Program shipment or an eBay International Shipping shipment.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $totalShippingCost
     * @return self
     */
    public function setTotalShippingCost(\Nogrod\eBaySDK\Trading\AmountType $totalShippingCost)
    {
        $this->totalShippingCost = $totalShippingCost;
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
        $value = $this->shippingService;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ShippingService', null, (string) $value);
        }
        $value = $this->totalShippingCost;
        if (null !== $value) {
            $writer->startElementNs(null, 'TotalShippingCost', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\MultiLegShippingServiceType
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
                case 'ShippingService':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->shippingService = $value;
                    }
                    return true;
                case 'TotalShippingCost':
                    $this->totalShippingCost = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
