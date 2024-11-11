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
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getShippingService();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingService", $value);
        }
        $value = $this->getTotalShippingCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalShippingCost", $value);
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
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingService');
        if (null !== $value) {
            $this->setShippingService($value);
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalShippingCost');
        if (null !== $value) {
            $this->setTotalShippingCost(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
    }
}
