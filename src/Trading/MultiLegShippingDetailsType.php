<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MultiLegShippingDetailsType
 *
 * This type provides information about the domestic leg of a Global Shipping Program shipment or an eBay International Shipping shipment.
 *  <br/><br/>
 *  <span class="tablenote">
 *  <strong>Note:</strong> The <strong>LogisticsProviderShipmentToBuyer</strong> field is reserved for the exclusive use of the international shipping provider.
 *  </span>
 * XSD Type: MultiLegShippingDetailsType
 */
class MultiLegShippingDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Contains information about the domestic leg of a international order being shipped through the Global Shipping Program or eBay International Shipping, including the selected shipping service, the domestic shipping cost, the domestic address of the international shipping provider, and the estimated shipping time range.
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
     * The final destination address for multi-leg shipments. This field is only populated for multi-leg shipment use cases.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> The <b>street1</b> field name may not always be returned. Do not use this field to determine privacy or visibility behavior.
     *  </span>
     *  <br/><br/>
     *  <span class="tablenote">
     *  <b>Note</b>: If using Trading WSDL Version 1455 or above, the final destination address will be returned. If using a Trading WSDL older than Version 1455, the final destination address will not be returned. To incorporate the new logic while using a Trading WSDL that is older than 1455, developers can also use the X-EBAY-API-COMPATIBILITY-LEVEL header and set its value to 1455 or higher. WSDL versions earlier than 1307 may have limited support for this header-based compatibility behavior.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\AddressType $finalDestinationAddress
     */
    private $finalDestinationAddress = null;

    /**
     * Gets as sellerShipmentToLogisticsProvider
     *
     * Contains information about the domestic leg of a international order being shipped through the Global Shipping Program or eBay International Shipping, including the selected shipping service, the domestic shipping cost, the domestic address of the international shipping provider, and the estimated shipping time range.
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
     * Contains information about the domestic leg of a international order being shipped through the Global Shipping Program or eBay International Shipping, including the selected shipping service, the domestic shipping cost, the domestic address of the international shipping provider, and the estimated shipping time range.
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

    /**
     * Gets as finalDestinationAddress
     *
     * The final destination address for multi-leg shipments. This field is only populated for multi-leg shipment use cases.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> The <b>street1</b> field name may not always be returned. Do not use this field to determine privacy or visibility behavior.
     *  </span>
     *  <br/><br/>
     *  <span class="tablenote">
     *  <b>Note</b>: If using Trading WSDL Version 1455 or above, the final destination address will be returned. If using a Trading WSDL older than Version 1455, the final destination address will not be returned. To incorporate the new logic while using a Trading WSDL that is older than 1455, developers can also use the X-EBAY-API-COMPATIBILITY-LEVEL header and set its value to 1455 or higher. WSDL versions earlier than 1307 may have limited support for this header-based compatibility behavior.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\AddressType
     */
    public function getFinalDestinationAddress()
    {
        return $this->finalDestinationAddress;
    }

    /**
     * Sets a new finalDestinationAddress
     *
     * The final destination address for multi-leg shipments. This field is only populated for multi-leg shipment use cases.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> The <b>street1</b> field name may not always be returned. Do not use this field to determine privacy or visibility behavior.
     *  </span>
     *  <br/><br/>
     *  <span class="tablenote">
     *  <b>Note</b>: If using Trading WSDL Version 1455 or above, the final destination address will be returned. If using a Trading WSDL older than Version 1455, the final destination address will not be returned. To incorporate the new logic while using a Trading WSDL that is older than 1455, developers can also use the X-EBAY-API-COMPATIBILITY-LEVEL header and set its value to 1455 or higher. WSDL versions earlier than 1307 may have limited support for this header-based compatibility behavior.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\AddressType $finalDestinationAddress
     * @return self
     */
    public function setFinalDestinationAddress(\Nogrod\eBaySDK\Trading\AddressType $finalDestinationAddress)
    {
        $this->finalDestinationAddress = $finalDestinationAddress;
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
        $value = $this->getSellerShipmentToLogisticsProvider();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerShipmentToLogisticsProvider", $value);
        }
        $value = $this->getLogisticsProviderShipmentToBuyer();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LogisticsProviderShipmentToBuyer", $value);
        }
        $value = $this->getFinalDestinationAddress();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FinalDestinationAddress", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\MultiLegShippingDetailsType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerShipmentToLogisticsProvider');
        if (null !== $value) {
            $this->setSellerShipmentToLogisticsProvider(\Nogrod\eBaySDK\Trading\MultiLegShipmentType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}LogisticsProviderShipmentToBuyer');
        if (null !== $value) {
            $this->setLogisticsProviderShipmentToBuyer(\Nogrod\eBaySDK\Trading\MultiLegShipmentType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}FinalDestinationAddress');
        if (null !== $value) {
            $this->setFinalDestinationAddress(\Nogrod\eBaySDK\Trading\AddressType::fromKeyValue($value));
        }
    }
}
