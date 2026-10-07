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
class MultiLegShippingDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
        $value = $this->sellerShipmentToLogisticsProvider;
        if (null !== $value) {
            $writer->startElementNs(null, 'SellerShipmentToLogisticsProvider', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->logisticsProviderShipmentToBuyer;
        if (null !== $value) {
            $writer->startElementNs(null, 'LogisticsProviderShipmentToBuyer', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->finalDestinationAddress;
        if (null !== $value) {
            $writer->startElementNs(null, 'FinalDestinationAddress', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\MultiLegShippingDetailsType
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
                case 'SellerShipmentToLogisticsProvider':
                    $this->sellerShipmentToLogisticsProvider = \Nogrod\eBaySDK\Trading\MultiLegShipmentType::xmlRead($reader);
                    return true;
                case 'LogisticsProviderShipmentToBuyer':
                    $this->logisticsProviderShipmentToBuyer = \Nogrod\eBaySDK\Trading\MultiLegShipmentType::xmlRead($reader);
                    return true;
                case 'FinalDestinationAddress':
                    $this->finalDestinationAddress = \Nogrod\eBaySDK\Trading\AddressType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['SellerShipmentToLogisticsProvider'] = $this->sellerShipmentToLogisticsProvider;
        $data['LogisticsProviderShipmentToBuyer'] = $this->logisticsProviderShipmentToBuyer;
        $data['FinalDestinationAddress'] = $this->finalDestinationAddress;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
