<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ShipmentTrackingDetailsType
 *
 * This type details the shipping carrier and shipment tracking number associated with a
 *  package shipment. It also contains information about the line items shipped through the Global Shipping program.
 * XSD Type: ShipmentTrackingDetailsType
 */
class ShipmentTrackingDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The name of the shipping carrier used to ship the item. This field and the <strong>ShipmentTrackingNumber</strong> field are mutually dependent. When you submit <strong>ShippingCarrierUsed</strong>, you must also supply a value for <strong>ShipmentTrackingNumber</strong>. When you submit <strong>ShipmentTrackingNumber</strong>, you must also supply a value for <strong>ShippingCarrierUsed</strong>.
     *  <br/><br/>
     *  When the site ID is Austria, Poland, or UK, <strong>ShippingCarrierUsed</strong> can be any value, because it is not checked by eBay. For all other sites, only the following characters are allowed: letters (<code>a-z</code>, <code>A-Z</code>), numbers (<code>0-9</code>), space, and dash (<code>-</code>). The site ID is specified in the <b>CompleteSale</b> request header.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> Commonly used shipping carriers can be found by calling <b>GeteBayDetails</b> with <b>DetailName</b> set to <code>ShippingCarrierDetails</code> and examining the returned <b>ShippingCarrierDetails.ShippingCarrier</b> field. <a href="https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/types/ShippingCarrierCodeType.html">ShippingCarrierCodeType</a> also has a list of valid shipping carriers, but eBay cannot guarantee that this enumerated type contains a full, updated list of shipping carriers.
     *  </span>
     *  <strong>For the CompleteSale call</strong>:
     *  <ul>
     *  <li>This field is not case sensitive in the <strong>CompleteSale</strong> request.</li>
     *  <li>When using UPS Mail Innovations, supply the value <code>UPS-MI</code>. Buyers will subsequently be sent to the UPS Mail Innovations website for tracking status. </li>
     *  <li>When using FedEx SmartPost, supply the value <code>FedEx</code>. Buyers will subsequently be sent to the FedEx web site for tracking status. </li>
     *  </ul>
     *  <strong>For the Get calls</strong>: When using the Global Shipping Program, this field returns a value of <code>PBI</code>.
     *
     * @var string $shippingCarrierUsed
     */
    private $shippingCarrierUsed = null;

    /**
     * The tracking number assigned by the shipping carrier to the item shipment. This field and the <b>ShippingCarrierUsed</b> field are mutually dependent. When you submit <strong>ShipmentTrackingNumber</strong>, you must also supply a value for <strong>ShippingCarrierUsed</strong>. When you submit <strong>ShippingCarrierUsed</strong>, you must also supply a value for <strong>ShipmentTrackingNumber</strong>.
     *  <br/><br/>
     *  The seller is responsible for the accuracy of the shipment tracking number, as eBay only verifies that the tracking number is consistent with the numbering scheme used by the specified shipping carrier, but cannot verify the accuracy of the tracking number.
     *  For order management calls,
     *  <br><br>
     *  <b>For GetOrders, GetSellerTransactions, and GetItemTransactions only:</b> This field is only returned if a valid tracking number is set. With the exception of the <b>GetSellerTransactions</b> (where it is only returned to the seller and not buyer), the tracking number will only be returned to the seller or buyer. If a user is using a Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, this field is returned to third parties, but the string value returned in the field will be <code>Unavailable</code>.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  The Trading API only supports alphanumeric characters for shipment tracking numbers, and any other characters are not supported, including spaces, hyphens, and all other special characters. Users should not enter spaces even if spaces are shown for the tracking number on the shipping label.
     *  </span>
     *
     * @var string $shipmentTrackingNumber
     */
    private $shipmentTrackingNumber = null;

    /**
     * Contains information about one or more order line items in a Global Shipping Program package. Required or returned if the value of <strong>ShippingCarrierUsed</strong> is <code>PBI</code>.
     *
     * @var \Nogrod\eBaySDK\Trading\LineItemType[] $shipmentLineItem
     */
    private $shipmentLineItem = null;

    /**
     * Gets as shippingCarrierUsed
     *
     * The name of the shipping carrier used to ship the item. This field and the <strong>ShipmentTrackingNumber</strong> field are mutually dependent. When you submit <strong>ShippingCarrierUsed</strong>, you must also supply a value for <strong>ShipmentTrackingNumber</strong>. When you submit <strong>ShipmentTrackingNumber</strong>, you must also supply a value for <strong>ShippingCarrierUsed</strong>.
     *  <br/><br/>
     *  When the site ID is Austria, Poland, or UK, <strong>ShippingCarrierUsed</strong> can be any value, because it is not checked by eBay. For all other sites, only the following characters are allowed: letters (<code>a-z</code>, <code>A-Z</code>), numbers (<code>0-9</code>), space, and dash (<code>-</code>). The site ID is specified in the <b>CompleteSale</b> request header.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> Commonly used shipping carriers can be found by calling <b>GeteBayDetails</b> with <b>DetailName</b> set to <code>ShippingCarrierDetails</code> and examining the returned <b>ShippingCarrierDetails.ShippingCarrier</b> field. <a href="https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/types/ShippingCarrierCodeType.html">ShippingCarrierCodeType</a> also has a list of valid shipping carriers, but eBay cannot guarantee that this enumerated type contains a full, updated list of shipping carriers.
     *  </span>
     *  <strong>For the CompleteSale call</strong>:
     *  <ul>
     *  <li>This field is not case sensitive in the <strong>CompleteSale</strong> request.</li>
     *  <li>When using UPS Mail Innovations, supply the value <code>UPS-MI</code>. Buyers will subsequently be sent to the UPS Mail Innovations website for tracking status. </li>
     *  <li>When using FedEx SmartPost, supply the value <code>FedEx</code>. Buyers will subsequently be sent to the FedEx web site for tracking status. </li>
     *  </ul>
     *  <strong>For the Get calls</strong>: When using the Global Shipping Program, this field returns a value of <code>PBI</code>.
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
     * The name of the shipping carrier used to ship the item. This field and the <strong>ShipmentTrackingNumber</strong> field are mutually dependent. When you submit <strong>ShippingCarrierUsed</strong>, you must also supply a value for <strong>ShipmentTrackingNumber</strong>. When you submit <strong>ShipmentTrackingNumber</strong>, you must also supply a value for <strong>ShippingCarrierUsed</strong>.
     *  <br/><br/>
     *  When the site ID is Austria, Poland, or UK, <strong>ShippingCarrierUsed</strong> can be any value, because it is not checked by eBay. For all other sites, only the following characters are allowed: letters (<code>a-z</code>, <code>A-Z</code>), numbers (<code>0-9</code>), space, and dash (<code>-</code>). The site ID is specified in the <b>CompleteSale</b> request header.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> Commonly used shipping carriers can be found by calling <b>GeteBayDetails</b> with <b>DetailName</b> set to <code>ShippingCarrierDetails</code> and examining the returned <b>ShippingCarrierDetails.ShippingCarrier</b> field. <a href="https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/types/ShippingCarrierCodeType.html">ShippingCarrierCodeType</a> also has a list of valid shipping carriers, but eBay cannot guarantee that this enumerated type contains a full, updated list of shipping carriers.
     *  </span>
     *  <strong>For the CompleteSale call</strong>:
     *  <ul>
     *  <li>This field is not case sensitive in the <strong>CompleteSale</strong> request.</li>
     *  <li>When using UPS Mail Innovations, supply the value <code>UPS-MI</code>. Buyers will subsequently be sent to the UPS Mail Innovations website for tracking status. </li>
     *  <li>When using FedEx SmartPost, supply the value <code>FedEx</code>. Buyers will subsequently be sent to the FedEx web site for tracking status. </li>
     *  </ul>
     *  <strong>For the Get calls</strong>: When using the Global Shipping Program, this field returns a value of <code>PBI</code>.
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
     * Gets as shipmentTrackingNumber
     *
     * The tracking number assigned by the shipping carrier to the item shipment. This field and the <b>ShippingCarrierUsed</b> field are mutually dependent. When you submit <strong>ShipmentTrackingNumber</strong>, you must also supply a value for <strong>ShippingCarrierUsed</strong>. When you submit <strong>ShippingCarrierUsed</strong>, you must also supply a value for <strong>ShipmentTrackingNumber</strong>.
     *  <br/><br/>
     *  The seller is responsible for the accuracy of the shipment tracking number, as eBay only verifies that the tracking number is consistent with the numbering scheme used by the specified shipping carrier, but cannot verify the accuracy of the tracking number.
     *  For order management calls,
     *  <br><br>
     *  <b>For GetOrders, GetSellerTransactions, and GetItemTransactions only:</b> This field is only returned if a valid tracking number is set. With the exception of the <b>GetSellerTransactions</b> (where it is only returned to the seller and not buyer), the tracking number will only be returned to the seller or buyer. If a user is using a Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, this field is returned to third parties, but the string value returned in the field will be <code>Unavailable</code>.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  The Trading API only supports alphanumeric characters for shipment tracking numbers, and any other characters are not supported, including spaces, hyphens, and all other special characters. Users should not enter spaces even if spaces are shown for the tracking number on the shipping label.
     *  </span>
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
     * The tracking number assigned by the shipping carrier to the item shipment. This field and the <b>ShippingCarrierUsed</b> field are mutually dependent. When you submit <strong>ShipmentTrackingNumber</strong>, you must also supply a value for <strong>ShippingCarrierUsed</strong>. When you submit <strong>ShippingCarrierUsed</strong>, you must also supply a value for <strong>ShipmentTrackingNumber</strong>.
     *  <br/><br/>
     *  The seller is responsible for the accuracy of the shipment tracking number, as eBay only verifies that the tracking number is consistent with the numbering scheme used by the specified shipping carrier, but cannot verify the accuracy of the tracking number.
     *  For order management calls,
     *  <br><br>
     *  <b>For GetOrders, GetSellerTransactions, and GetItemTransactions only:</b> This field is only returned if a valid tracking number is set. With the exception of the <b>GetSellerTransactions</b> (where it is only returned to the seller and not buyer), the tracking number will only be returned to the seller or buyer. If a user is using a Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, this field is returned to third parties, but the string value returned in the field will be <code>Unavailable</code>.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  The Trading API only supports alphanumeric characters for shipment tracking numbers, and any other characters are not supported, including spaces, hyphens, and all other special characters. Users should not enter spaces even if spaces are shown for the tracking number on the shipping label.
     *  </span>
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
     * Adds as lineItem
     *
     * Contains information about one or more order line items in a Global Shipping Program package. Required or returned if the value of <strong>ShippingCarrierUsed</strong> is <code>PBI</code>.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\LineItemType $lineItem
     */
    public function addToShipmentLineItem(\Nogrod\eBaySDK\Trading\LineItemType $lineItem)
    {
        if (!is_array($this->shipmentLineItem)) {
            throw new \LogicException('shipmentLineItem is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->shipmentLineItem[] = $lineItem;
        return $this;
    }

    /**
     * isset shipmentLineItem
     *
     * Contains information about one or more order line items in a Global Shipping Program package. Required or returned if the value of <strong>ShippingCarrierUsed</strong> is <code>PBI</code>.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShipmentLineItem($index)
    {
        return isset($this->shipmentLineItem[$index]);
    }

    /**
     * unset shipmentLineItem
     *
     * Contains information about one or more order line items in a Global Shipping Program package. Required or returned if the value of <strong>ShippingCarrierUsed</strong> is <code>PBI</code>.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShipmentLineItem($index)
    {
        unset($this->shipmentLineItem[$index]);
    }

    /**
     * Gets as shipmentLineItem
     *
     * Contains information about one or more order line items in a Global Shipping Program package. Required or returned if the value of <strong>ShippingCarrierUsed</strong> is <code>PBI</code>.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\LineItemType>
     */
    public function getShipmentLineItem()
    {
        return $this->shipmentLineItem;
    }

    /**
     * Sets a new shipmentLineItem
     *
     * Contains information about one or more order line items in a Global Shipping Program package. Required or returned if the value of <strong>ShippingCarrierUsed</strong> is <code>PBI</code>.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\LineItemType> $shipmentLineItem
     * @return self
     */
    public function setShipmentLineItem(iterable $shipmentLineItem)
    {
        $this->shipmentLineItem = $shipmentLineItem;
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
        $value = $this->shippingCarrierUsed;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ShippingCarrierUsed', null, (string) $value);
        }
        $value = $this->shipmentTrackingNumber;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ShipmentTrackingNumber', null, (string) $value);
        }
        $value = $this->shipmentLineItem;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'ShipmentLineItem', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'LineItem', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\ShipmentTrackingDetailsType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->shipmentLineItem = [];
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
                case 'ShippingCarrierUsed':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->shippingCarrierUsed = $value;
                    }
                    return true;
                case 'ShipmentTrackingNumber':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->shipmentTrackingNumber = $value;
                    }
                    return true;
                case 'ShipmentLineItem':
                    $this->shipmentLineItem = Func::readList($reader, 'LineItem', 'urn:ebay:apis:eBLBaseComponents', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\Trading\LineItemType::xmlRead($reader));
                    return true;
            }
        }
        return false;
    }
}
