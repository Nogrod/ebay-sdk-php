<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SetShipmentTrackingInfoRequestType
 *
 * <span class="tablenote">
 *  <strong>Note:</strong> Large Merchant Services (LMS) functionality as a SOAP service has been decommissioned. It is fully migrated into the REST-based <a href="https://developer.ebay.com/api-docs/sell/feed/resources/methods" target=\"_blank\" >Sell Feed API</a> The <strong>Sell Feed API</strong> supports the same XML data files that LMS supported but through REST methods. For more information, see the <a href="https://developer.ebay.com/api-docs/sell/static/lms-migration-landing.html" target="_blank" >LMS Migration Guide</a>.
 *  </span>
 *  Specifies the shipment tracking information associated with one package of an
 *  order. If multiple packages are required for the order, this call must be made
 *  separately for each package.
 * XSD Type: SetShipmentTrackingInfoRequestType
 */
class SetShipmentTrackingInfoRequestType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * A unique identifier that identifies a single line item or multiple line item
     *  order. Either the <b>OrderID</b> or <b>OrderLineItemID</b> value must be
     *  passed in the request.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> In June 2019, eBay introduced a new order ID format, but allowed developers/sellers to decide whether to immediately adopt the new format, or to continue working with the old format. Users who wanted to adopt the new format, could either use a Trading WSDL Version 1113 (or newer), or they could even use an older Trading WSDL but set the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header value to <code>1113</code> in API calls. <b>Beginning in June 2020, only the new order ID format will be returned in response payloads for paid orders, regardless of the WSDL version number or compatibility level.</b>
     *  <br><br>
     *  Note that the unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all calls that accept Order ID values as filters in the request payload, including the <b>SetShipmentTrackingInfo</b> call, will support the identifiers for both unpaid and paid orders. However, the <b>SetShipmentTrackingInfo</b> call is typically only used to provide shipment tracking information for orders/line items that have already been paid for, so the new order ID format will be used for this call in most cases. The new order ID format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment.
     *  </span>
     *
     * @var string $orderID
     */
    private $orderID = null;

    /**
     * A unique identifier for an eBay order line item. This identifier is created as soon as there is a commitment to buy from the seller. Either the <b>OrderLineItemID</b> or the <b>OrderID</b> value must be passed in the request.
     *
     * @var string $orderLineItemID
     */
    private $orderLineItemID = null;

    /**
     * This container is used to provide the name of the shipping carrier, the package tracking number, and optionally, the timestamp of the shipment.
     *
     * @var \Nogrod\eBaySDK\Trading\ShipmentType $shipment
     */
    private $shipment = null;

    /**
     * This field is included and set to <code>true</code> to indicate that an order or order line item was shipped. If this element is missing, eBay assumes that the order or order line item was shipped.
     *
     * @var bool $isShipped
     */
    private $isShipped = null;

    /**
     * This field is included and set to <code>true</code> to indicate that the buyer has paid for the order.
     *
     * @var bool $isPaid
     */
    private $isPaid = null;

    /**
     * Gets as orderID
     *
     * A unique identifier that identifies a single line item or multiple line item
     *  order. Either the <b>OrderID</b> or <b>OrderLineItemID</b> value must be
     *  passed in the request.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> In June 2019, eBay introduced a new order ID format, but allowed developers/sellers to decide whether to immediately adopt the new format, or to continue working with the old format. Users who wanted to adopt the new format, could either use a Trading WSDL Version 1113 (or newer), or they could even use an older Trading WSDL but set the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header value to <code>1113</code> in API calls. <b>Beginning in June 2020, only the new order ID format will be returned in response payloads for paid orders, regardless of the WSDL version number or compatibility level.</b>
     *  <br><br>
     *  Note that the unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all calls that accept Order ID values as filters in the request payload, including the <b>SetShipmentTrackingInfo</b> call, will support the identifiers for both unpaid and paid orders. However, the <b>SetShipmentTrackingInfo</b> call is typically only used to provide shipment tracking information for orders/line items that have already been paid for, so the new order ID format will be used for this call in most cases. The new order ID format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment.
     *  </span>
     *
     * @return string
     */
    public function getOrderID()
    {
        return $this->orderID;
    }

    /**
     * Sets a new orderID
     *
     * A unique identifier that identifies a single line item or multiple line item
     *  order. Either the <b>OrderID</b> or <b>OrderLineItemID</b> value must be
     *  passed in the request.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> In June 2019, eBay introduced a new order ID format, but allowed developers/sellers to decide whether to immediately adopt the new format, or to continue working with the old format. Users who wanted to adopt the new format, could either use a Trading WSDL Version 1113 (or newer), or they could even use an older Trading WSDL but set the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header value to <code>1113</code> in API calls. <b>Beginning in June 2020, only the new order ID format will be returned in response payloads for paid orders, regardless of the WSDL version number or compatibility level.</b>
     *  <br><br>
     *  Note that the unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all calls that accept Order ID values as filters in the request payload, including the <b>SetShipmentTrackingInfo</b> call, will support the identifiers for both unpaid and paid orders. However, the <b>SetShipmentTrackingInfo</b> call is typically only used to provide shipment tracking information for orders/line items that have already been paid for, so the new order ID format will be used for this call in most cases. The new order ID format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment.
     *  </span>
     *
     * @param string $orderID
     * @return self
     */
    public function setOrderID($orderID)
    {
        $this->orderID = $orderID;
        return $this;
    }

    /**
     * Gets as orderLineItemID
     *
     * A unique identifier for an eBay order line item. This identifier is created as soon as there is a commitment to buy from the seller. Either the <b>OrderLineItemID</b> or the <b>OrderID</b> value must be passed in the request.
     *
     * @return string
     */
    public function getOrderLineItemID()
    {
        return $this->orderLineItemID;
    }

    /**
     * Sets a new orderLineItemID
     *
     * A unique identifier for an eBay order line item. This identifier is created as soon as there is a commitment to buy from the seller. Either the <b>OrderLineItemID</b> or the <b>OrderID</b> value must be passed in the request.
     *
     * @param string $orderLineItemID
     * @return self
     */
    public function setOrderLineItemID($orderLineItemID)
    {
        $this->orderLineItemID = $orderLineItemID;
        return $this;
    }

    /**
     * Gets as shipment
     *
     * This container is used to provide the name of the shipping carrier, the package tracking number, and optionally, the timestamp of the shipment.
     *
     * @return \Nogrod\eBaySDK\Trading\ShipmentType
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * Sets a new shipment
     *
     * This container is used to provide the name of the shipping carrier, the package tracking number, and optionally, the timestamp of the shipment.
     *
     * @param \Nogrod\eBaySDK\Trading\ShipmentType $shipment
     * @return self
     */
    public function setShipment(\Nogrod\eBaySDK\Trading\ShipmentType $shipment)
    {
        $this->shipment = $shipment;
        return $this;
    }

    /**
     * Gets as isShipped
     *
     * This field is included and set to <code>true</code> to indicate that an order or order line item was shipped. If this element is missing, eBay assumes that the order or order line item was shipped.
     *
     * @return bool
     */
    public function getIsShipped()
    {
        return $this->isShipped;
    }

    /**
     * Sets a new isShipped
     *
     * This field is included and set to <code>true</code> to indicate that an order or order line item was shipped. If this element is missing, eBay assumes that the order or order line item was shipped.
     *
     * @param bool $isShipped
     * @return self
     */
    public function setIsShipped($isShipped)
    {
        $this->isShipped = $isShipped;
        return $this;
    }

    /**
     * Gets as isPaid
     *
     * This field is included and set to <code>true</code> to indicate that the buyer has paid for the order.
     *
     * @return bool
     */
    public function getIsPaid()
    {
        return $this->isPaid;
    }

    /**
     * Sets a new isPaid
     *
     * This field is included and set to <code>true</code> to indicate that the buyer has paid for the order.
     *
     * @param bool $isPaid
     * @return self
     */
    public function setIsPaid($isPaid)
    {
        $this->isPaid = $isPaid;
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
        $value = $this->orderID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'OrderID', null, (string) $value);
        }
        $value = $this->orderLineItemID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'OrderLineItemID', null, (string) $value);
        }
        $value = $this->shipment;
        if (null !== $value) {
            $writer->startElementNs(null, 'Shipment', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->isShipped;
        if (null !== $value) {
            $writer->writeElementNs(null, 'IsShipped', null, ($value ? 'true' : 'false'));
        }
        $value = $this->isPaid;
        if (null !== $value) {
            $writer->writeElementNs(null, 'IsPaid', null, ($value ? 'true' : 'false'));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\SetShipmentTrackingInfoRequestType
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
                case 'OrderID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->orderID = $value;
                    }
                    return true;
                case 'OrderLineItemID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->orderLineItemID = $value;
                    }
                    return true;
                case 'Shipment':
                    $this->shipment = \Nogrod\eBaySDK\Trading\ShipmentType::xmlRead($reader);
                    return true;
                case 'IsShipped':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->isShipped = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'IsPaid':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->isPaid = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['OrderID'] = $this->orderID;
        $data['OrderLineItemID'] = $this->orderLineItemID;
        $data['Shipment'] = $this->shipment;
        $data['IsShipped'] = $this->isShipped;
        $data['IsPaid'] = $this->isPaid;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
