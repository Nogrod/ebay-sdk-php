<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing OrderReportRequestType
 *
 * <span class="tablenote">
 *  <strong>Note:</strong> Large Merchant Services (LMS) functionality as a SOAP service has been decommissioned. It is fully migrated into the REST-based <a href="https://developer.ebay.com/api-docs/sell/feed/resources/methods" target=\"_blank\" >Sell Feed API</a> The <strong>Sell Feed API</strong> supports the same XML data files that LMS supported but through REST methods. For more information, see the <a href="https://developer.ebay.com/api-docs/sell/static/lms-migration-landing.html" target="_blank" >LMS Migration Guide</a>.
 *  </span>
 *  <b>OrderReport</b> shows detailed information on all unacknowledged orders, and all unacknowledged line items in each order from the past 30 days. The unique identifier of each order is shown in the <b>Order.OrderID</b> response field, and unique identifier of each order line item is shown in a separate <b>Transaction.OrderLineItemID</b> response field. Only unfulfilled orders will appear in the response, and orders that have already shipped will not. Sellers use the information in <b>OrderReport</b> to make inventory updates and start order fulfillment.
 *  <br/><br/>
 *  <span class="tablenote"><b>Note: </b> Once orders and order line items have been acknowledged with the <b>OrderAck</b> call, those orders and order line items will no longer appear in the <b>OrderReport</b> response. See
 *  <a href="https://developer.ebay.com/DevZone/large-merchant-services/Concepts/LMS_APIGuide.html#soldrpt"
 *  target="_blank">Acknowledging Sales</a> for more information.
 *  </span>
 * XSD Type: OrderReportRequestType
 */
class OrderReportRequestType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\OrderReportRequestType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
    }
}
