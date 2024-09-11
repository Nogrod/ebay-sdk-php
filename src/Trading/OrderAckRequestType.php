<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing OrderAckRequestType
 *
 * <span class="tablenote">
 *  <strong>Note:</strong> Large Merchant Services (LMS) functionality as a SOAP service has been decommissioned. It is fully migrated into the REST-based <a href="https://developer.ebay.com/api-docs/sell/feed/resources/methods" target=\"_blank\" >Sell Feed API</a> The <strong>Sell Feed API</strong> supports the same XML data files that LMS supported but through REST methods. For more information, see the <a href="https://developer.ebay.com/api-docs/sell/static/lms-migration-landing.html" target="_blank" >LMS Migration Guide</a>.
 *  </span>
 *  This call is used to acknowledge that a single line item order, or an individual line item within a multiple line item order has been received. Once an order or order line item is successfully acknowledged with an <b>OrderAck</b> call, that order or order line item will not appear in the <b>OrderReport</b> response when you run either of those calls again.
 * XSD Type: OrderAckRequestType
 */
class OrderAckRequestType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * A unique identifier for an eBay order. An eBay order can contain one or more order line items. This field is used to acknowledge a single line item order. If the eBay order has multiple line items, an <b>OrderAck</b> call will be required to acknowledge each of those order line items, and the <b>OrderLineItemID</b> field must be used instead.
     *  <br><br>
     *  Typically, the <b>OrderAck</b> call will only be used on orders/line items that have already been paid for and shipped.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> In June 2019, eBay introduced a new order ID format, but allowed developers/sellers to decide whether to immediately adopt the new format, or to continue working with the old format. Users who wanted to adopt the new format, could either use a Trading WSDL Version 1113 (or newer), or they could even use an older Trading WSDL but set the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header value to <code>1113</code> in API calls. <b>Beginning in June 2020, only the new order ID format will be returned in response payloads for paid orders, regardless of the WSDL version number or compatibility level.</b>
     *  <br><br>
     *  Note that the unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all calls that accept Order ID values as filters in the request payload, including the <b>OrderAck</b> call, will support the identifiers for both unpaid and paid orders. However, the <b>OrderAck</b> call is typically only used to acknowledge orders/line items that have already been paid for, so the new order ID format will be used for this call in most cases. The new order ID format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment.
     *  </span>
     *
     * @var string $orderID
     */
    private $orderID = null;

    /**
     * A unique identifier for an order line item within an eBay order. An eBay order can contain one or more order line items. If you use this field, only the specified order line item will be acknowledged, and any additional order line items within the eBay order will remain unacknowledged.
     *  <br/><br/>
     *  If an order only has one order line item, either the <b>OrderID</b> or the <b>OrderLineItemID</b> field will acknowledge the entire order.
     *
     * @var string $orderLineItemID
     */
    private $orderLineItemID = null;

    /**
     * Gets as orderID
     *
     * A unique identifier for an eBay order. An eBay order can contain one or more order line items. This field is used to acknowledge a single line item order. If the eBay order has multiple line items, an <b>OrderAck</b> call will be required to acknowledge each of those order line items, and the <b>OrderLineItemID</b> field must be used instead.
     *  <br><br>
     *  Typically, the <b>OrderAck</b> call will only be used on orders/line items that have already been paid for and shipped.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> In June 2019, eBay introduced a new order ID format, but allowed developers/sellers to decide whether to immediately adopt the new format, or to continue working with the old format. Users who wanted to adopt the new format, could either use a Trading WSDL Version 1113 (or newer), or they could even use an older Trading WSDL but set the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header value to <code>1113</code> in API calls. <b>Beginning in June 2020, only the new order ID format will be returned in response payloads for paid orders, regardless of the WSDL version number or compatibility level.</b>
     *  <br><br>
     *  Note that the unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all calls that accept Order ID values as filters in the request payload, including the <b>OrderAck</b> call, will support the identifiers for both unpaid and paid orders. However, the <b>OrderAck</b> call is typically only used to acknowledge orders/line items that have already been paid for, so the new order ID format will be used for this call in most cases. The new order ID format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
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
     * A unique identifier for an eBay order. An eBay order can contain one or more order line items. This field is used to acknowledge a single line item order. If the eBay order has multiple line items, an <b>OrderAck</b> call will be required to acknowledge each of those order line items, and the <b>OrderLineItemID</b> field must be used instead.
     *  <br><br>
     *  Typically, the <b>OrderAck</b> call will only be used on orders/line items that have already been paid for and shipped.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> In June 2019, eBay introduced a new order ID format, but allowed developers/sellers to decide whether to immediately adopt the new format, or to continue working with the old format. Users who wanted to adopt the new format, could either use a Trading WSDL Version 1113 (or newer), or they could even use an older Trading WSDL but set the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header value to <code>1113</code> in API calls. <b>Beginning in June 2020, only the new order ID format will be returned in response payloads for paid orders, regardless of the WSDL version number or compatibility level.</b>
     *  <br><br>
     *  Note that the unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all calls that accept Order ID values as filters in the request payload, including the <b>OrderAck</b> call, will support the identifiers for both unpaid and paid orders. However, the <b>OrderAck</b> call is typically only used to acknowledge orders/line items that have already been paid for, so the new order ID format will be used for this call in most cases. The new order ID format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
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
     * A unique identifier for an order line item within an eBay order. An eBay order can contain one or more order line items. If you use this field, only the specified order line item will be acknowledged, and any additional order line items within the eBay order will remain unacknowledged.
     *  <br/><br/>
     *  If an order only has one order line item, either the <b>OrderID</b> or the <b>OrderLineItemID</b> field will acknowledge the entire order.
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
     * A unique identifier for an order line item within an eBay order. An eBay order can contain one or more order line items. If you use this field, only the specified order line item will be acknowledged, and any additional order line items within the eBay order will remain unacknowledged.
     *  <br/><br/>
     *  If an order only has one order line item, either the <b>OrderID</b> or the <b>OrderLineItemID</b> field will acknowledge the entire order.
     *
     * @param string $orderLineItemID
     * @return self
     */
    public function setOrderLineItemID($orderLineItemID)
    {
        $this->orderLineItemID = $orderLineItemID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getOrderID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderID", $value);
        }
        $value = $this->getOrderLineItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderLineItemID", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderID');
        if (null !== $value) {
            $this->setOrderID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderLineItemID');
        if (null !== $value) {
            $this->setOrderLineItemID($value);
        }
    }
}
