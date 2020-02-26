<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing OrderReportRequestType
 *
 * <b>OrderReport</b> shows detailed information on all unacknowledged orders, and all unacknowledged line items in each order from the past 30 days. The unique identifier of each order is shown in the <b>Order.OrderID</b> response field, and unique identifier of each order line item is shown in a separate <b>Transaction.OrderLineItemID</b> response field. Only unfulfilled orders will appear in the response, and orders that have already shipped will not. Sellers use the information in <b>OrderReport</b> to make inventory updates and start order fulfillment.
 *  <br/><br/>
 *  <span class="tablenote"><b>Note: </b> Once orders and order line items have been acknowledged with the <b>OrderAck</b> call, those orders and order line items will no longer appear in the <b>OrderReport</b> response. See
 *  <a href="http://developer.ebay.com/DevZone/large-merchant-services/Concepts/LMS_APIGuide.html#soldrpt"
 *  target="_blank">Acknowledging Sales</a> for more information.
 *  </span>
 * XSD Type: OrderReportRequestType
 */
class OrderReportRequestType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
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
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
