<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MultiLegShippingServiceType
 *
 * This type specifies the shipping service and cost of the domestic leg of a Global Shipping Program shipment.
 * XSD Type: MultiLegShippingServiceType
 */
class MultiLegShippingServiceType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The shipping service specified for the domestic leg of a Global Shipping Program shipment. For the domestic leg, the value of this field can be any available shipping service that ships to the domestic address of the international shipping provider.
     *
     * @var string $shippingService
     */
    private $shippingService = null;

    /**
     * The total shipping cost of the domestic leg of a Global Shipping Program shipment.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $totalShippingCost
     */
    private $totalShippingCost = null;

    /**
     * Gets as shippingService
     *
     * The shipping service specified for the domestic leg of a Global Shipping Program shipment. For the domestic leg, the value of this field can be any available shipping service that ships to the domestic address of the international shipping provider.
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
     * The shipping service specified for the domestic leg of a Global Shipping Program shipment. For the domestic leg, the value of this field can be any available shipping service that ships to the domestic address of the international shipping provider.
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
     * The total shipping cost of the domestic leg of a Global Shipping Program shipment.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getTotalShippingCost()
    {
        return $this->totalShippingCost;
    }

    /**
     * Sets a new totalShippingCost
     *
     * The total shipping cost of the domestic leg of a Global Shipping Program shipment.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $totalShippingCost
     * @return self
     */
    public function setTotalShippingCost(\Nogrod\eBaySDK\MerchantData\AmountType $totalShippingCost)
    {
        $this->totalShippingCost = $totalShippingCost;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingService');
        if (null !== $value) {
            $this->setShippingService($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalShippingCost');
        if (null !== $value) {
            $this->setTotalShippingCost(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
    }
}
