<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MultiLegShippingDetailsType
 *
 * This type provides information about the domestic leg of a Global Shipping Program shipment.
 *  <br/><br/>
 *  <span class="tablenote">
 *  <strong>Note:</strong> The <strong>LogisticsProviderShipmentToBuyer</strong> field is reserved for the exclusive use of the international shipping provider.
 *  </span>
 * XSD Type: MultiLegShippingDetailsType
 */
class MultiLegShippingDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Contains information about the domestic leg of a Global Shipping Programn shipment, including the seller-selected shipping service, the domestic shipping cost, the domestic address of the international shipping provider, and the estimated shipping time range.
     *
     * @var \Nogrod\eBaySDK\Trading\MultiLegShipmentType $sellerShipmentToLogisticsProvider
     */
    private $sellerShipmentToLogisticsProvider = null;

    /**
     * Reserved for use by the international shipping provider.
     *
     * @var \Nogrod\eBaySDK\Trading\MultiLegShipmentType $logisticsProviderShipmentToBuyer
     */
    private $logisticsProviderShipmentToBuyer = null;

    /**
     * Gets as sellerShipmentToLogisticsProvider
     *
     * Contains information about the domestic leg of a Global Shipping Programn shipment, including the seller-selected shipping service, the domestic shipping cost, the domestic address of the international shipping provider, and the estimated shipping time range.
     *
     * @return \Nogrod\eBaySDK\Trading\MultiLegShipmentType
     */
    public function getSellerShipmentToLogisticsProvider()
    {
        return $this->sellerShipmentToLogisticsProvider;
    }

    /**
     * Sets a new sellerShipmentToLogisticsProvider
     *
     * Contains information about the domestic leg of a Global Shipping Programn shipment, including the seller-selected shipping service, the domestic shipping cost, the domestic address of the international shipping provider, and the estimated shipping time range.
     *
     * @param \Nogrod\eBaySDK\Trading\MultiLegShipmentType $sellerShipmentToLogisticsProvider
     * @return self
     */
    public function setSellerShipmentToLogisticsProvider(\Nogrod\eBaySDK\Trading\MultiLegShipmentType $sellerShipmentToLogisticsProvider)
    {
        $this->sellerShipmentToLogisticsProvider = $sellerShipmentToLogisticsProvider;
        return $this;
    }

    /**
     * Gets as logisticsProviderShipmentToBuyer
     *
     * Reserved for use by the international shipping provider.
     *
     * @return \Nogrod\eBaySDK\Trading\MultiLegShipmentType
     */
    public function getLogisticsProviderShipmentToBuyer()
    {
        return $this->logisticsProviderShipmentToBuyer;
    }

    /**
     * Sets a new logisticsProviderShipmentToBuyer
     *
     * Reserved for use by the international shipping provider.
     *
     * @param \Nogrod\eBaySDK\Trading\MultiLegShipmentType $logisticsProviderShipmentToBuyer
     * @return self
     */
    public function setLogisticsProviderShipmentToBuyer(\Nogrod\eBaySDK\Trading\MultiLegShipmentType $logisticsProviderShipmentToBuyer)
    {
        $this->logisticsProviderShipmentToBuyer = $logisticsProviderShipmentToBuyer;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getSellerShipmentToLogisticsProvider();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerShipmentToLogisticsProvider", $value);
        }
        $value = $this->getLogisticsProviderShipmentToBuyer();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LogisticsProviderShipmentToBuyer", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerShipmentToLogisticsProvider');
        if (null !== $value) {
            $this->setSellerShipmentToLogisticsProvider(\Nogrod\eBaySDK\Trading\MultiLegShipmentType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LogisticsProviderShipmentToBuyer');
        if (null !== $value) {
            $this->setLogisticsProviderShipmentToBuyer(\Nogrod\eBaySDK\Trading\MultiLegShipmentType::fromKeyValue($value));
        }
    }
}
