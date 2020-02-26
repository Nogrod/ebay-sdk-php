<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing OrderIDArrayType
 *
 * Type defining the <b>OrderIDArray</b> container, which consists of an array of order IDs. The <b>OrderIDArray</b> container is used to specify one or more orders to retrieve in a <b>GetOrders</b> or <b>GetOrderTransactions</b> call.
 * XSD Type: OrderIDArrayType
 */
class OrderIDArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * A unique identifier for an eBay order. If one or more <b>OrderID</b> values are used in a <b>GetOrders</b> or <b>GetOrderTransactions</b> call, any order status or date range filters are ignored.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of June 2019, eBay has changed the format of order identifier values. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  For developers and sellers who are already integrated with the Trading API's order management calls, this change shouldn't impact your integration unless you parse the existing order identifiers (e.g., <b>OrderID</b> or <b>OrderLineItemID</b>), or otherwise infer meaning from the format (e.g., differentiating between a single line item order versus a multiple line item order). Because we realize that some integrations may have logic that is dependent upon the old identifier format, eBay is rolling out this Trading API change with version control to support a transition period of approximately 9 months before applications must switch to the new format completely.
     *  <br><br>
     *  During the transition period, for developers/sellers using a Trading WSDL older than Version 1113, they can use the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header in API calls to control whether the new or old <b>OrderID</b> format is returned in call response payloads. To get the new <b>OrderID</b> format, the value of the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header must be set to <code>1113</code>. During the transition period and even after, the new and old <b>OrderID</b> formats will still be supported/accepted in all Trading API call request payloads. After the transition period (which will be announced), only the new <b>OrderID</b> format will be returned in all Trading API call response payloads, regardless of the Trading WSDL version used or specified compatibility level.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> For sellers integrated with the new order ID format, please note that the identifier for an order will change as it goes from unpaid to paid status. Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. When using a <b>GetOrders</b> or <b>GetOrderTransactions</b> call to retrieve specific order(s), either of these order IDs (paid or unpaid status) can be used to retrieve an order.
     *  </span>
     *
     * @var string[] $orderID
     */
    private $orderID = [
        
    ];

    /**
     * Adds as orderID
     *
     * A unique identifier for an eBay order. If one or more <b>OrderID</b> values are used in a <b>GetOrders</b> or <b>GetOrderTransactions</b> call, any order status or date range filters are ignored.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of June 2019, eBay has changed the format of order identifier values. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  For developers and sellers who are already integrated with the Trading API's order management calls, this change shouldn't impact your integration unless you parse the existing order identifiers (e.g., <b>OrderID</b> or <b>OrderLineItemID</b>), or otherwise infer meaning from the format (e.g., differentiating between a single line item order versus a multiple line item order). Because we realize that some integrations may have logic that is dependent upon the old identifier format, eBay is rolling out this Trading API change with version control to support a transition period of approximately 9 months before applications must switch to the new format completely.
     *  <br><br>
     *  During the transition period, for developers/sellers using a Trading WSDL older than Version 1113, they can use the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header in API calls to control whether the new or old <b>OrderID</b> format is returned in call response payloads. To get the new <b>OrderID</b> format, the value of the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header must be set to <code>1113</code>. During the transition period and even after, the new and old <b>OrderID</b> formats will still be supported/accepted in all Trading API call request payloads. After the transition period (which will be announced), only the new <b>OrderID</b> format will be returned in all Trading API call response payloads, regardless of the Trading WSDL version used or specified compatibility level.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> For sellers integrated with the new order ID format, please note that the identifier for an order will change as it goes from unpaid to paid status. Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. When using a <b>GetOrders</b> or <b>GetOrderTransactions</b> call to retrieve specific order(s), either of these order IDs (paid or unpaid status) can be used to retrieve an order.
     *  </span>
     *
     * @return self
     * @param string $orderID
     */
    public function addToOrderID($orderID)
    {
        $this->orderID[] = $orderID;
        return $this;
    }

    /**
     * isset orderID
     *
     * A unique identifier for an eBay order. If one or more <b>OrderID</b> values are used in a <b>GetOrders</b> or <b>GetOrderTransactions</b> call, any order status or date range filters are ignored.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of June 2019, eBay has changed the format of order identifier values. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  For developers and sellers who are already integrated with the Trading API's order management calls, this change shouldn't impact your integration unless you parse the existing order identifiers (e.g., <b>OrderID</b> or <b>OrderLineItemID</b>), or otherwise infer meaning from the format (e.g., differentiating between a single line item order versus a multiple line item order). Because we realize that some integrations may have logic that is dependent upon the old identifier format, eBay is rolling out this Trading API change with version control to support a transition period of approximately 9 months before applications must switch to the new format completely.
     *  <br><br>
     *  During the transition period, for developers/sellers using a Trading WSDL older than Version 1113, they can use the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header in API calls to control whether the new or old <b>OrderID</b> format is returned in call response payloads. To get the new <b>OrderID</b> format, the value of the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header must be set to <code>1113</code>. During the transition period and even after, the new and old <b>OrderID</b> formats will still be supported/accepted in all Trading API call request payloads. After the transition period (which will be announced), only the new <b>OrderID</b> format will be returned in all Trading API call response payloads, regardless of the Trading WSDL version used or specified compatibility level.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> For sellers integrated with the new order ID format, please note that the identifier for an order will change as it goes from unpaid to paid status. Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. When using a <b>GetOrders</b> or <b>GetOrderTransactions</b> call to retrieve specific order(s), either of these order IDs (paid or unpaid status) can be used to retrieve an order.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderID($index)
    {
        return isset($this->orderID[$index]);
    }

    /**
     * unset orderID
     *
     * A unique identifier for an eBay order. If one or more <b>OrderID</b> values are used in a <b>GetOrders</b> or <b>GetOrderTransactions</b> call, any order status or date range filters are ignored.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of June 2019, eBay has changed the format of order identifier values. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  For developers and sellers who are already integrated with the Trading API's order management calls, this change shouldn't impact your integration unless you parse the existing order identifiers (e.g., <b>OrderID</b> or <b>OrderLineItemID</b>), or otherwise infer meaning from the format (e.g., differentiating between a single line item order versus a multiple line item order). Because we realize that some integrations may have logic that is dependent upon the old identifier format, eBay is rolling out this Trading API change with version control to support a transition period of approximately 9 months before applications must switch to the new format completely.
     *  <br><br>
     *  During the transition period, for developers/sellers using a Trading WSDL older than Version 1113, they can use the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header in API calls to control whether the new or old <b>OrderID</b> format is returned in call response payloads. To get the new <b>OrderID</b> format, the value of the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header must be set to <code>1113</code>. During the transition period and even after, the new and old <b>OrderID</b> formats will still be supported/accepted in all Trading API call request payloads. After the transition period (which will be announced), only the new <b>OrderID</b> format will be returned in all Trading API call response payloads, regardless of the Trading WSDL version used or specified compatibility level.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> For sellers integrated with the new order ID format, please note that the identifier for an order will change as it goes from unpaid to paid status. Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. When using a <b>GetOrders</b> or <b>GetOrderTransactions</b> call to retrieve specific order(s), either of these order IDs (paid or unpaid status) can be used to retrieve an order.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderID($index)
    {
        unset($this->orderID[$index]);
    }

    /**
     * Gets as orderID
     *
     * A unique identifier for an eBay order. If one or more <b>OrderID</b> values are used in a <b>GetOrders</b> or <b>GetOrderTransactions</b> call, any order status or date range filters are ignored.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of June 2019, eBay has changed the format of order identifier values. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  For developers and sellers who are already integrated with the Trading API's order management calls, this change shouldn't impact your integration unless you parse the existing order identifiers (e.g., <b>OrderID</b> or <b>OrderLineItemID</b>), or otherwise infer meaning from the format (e.g., differentiating between a single line item order versus a multiple line item order). Because we realize that some integrations may have logic that is dependent upon the old identifier format, eBay is rolling out this Trading API change with version control to support a transition period of approximately 9 months before applications must switch to the new format completely.
     *  <br><br>
     *  During the transition period, for developers/sellers using a Trading WSDL older than Version 1113, they can use the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header in API calls to control whether the new or old <b>OrderID</b> format is returned in call response payloads. To get the new <b>OrderID</b> format, the value of the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header must be set to <code>1113</code>. During the transition period and even after, the new and old <b>OrderID</b> formats will still be supported/accepted in all Trading API call request payloads. After the transition period (which will be announced), only the new <b>OrderID</b> format will be returned in all Trading API call response payloads, regardless of the Trading WSDL version used or specified compatibility level.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> For sellers integrated with the new order ID format, please note that the identifier for an order will change as it goes from unpaid to paid status. Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. When using a <b>GetOrders</b> or <b>GetOrderTransactions</b> call to retrieve specific order(s), either of these order IDs (paid or unpaid status) can be used to retrieve an order.
     *  </span>
     *
     * @return string[]
     */
    public function getOrderID()
    {
        return $this->orderID;
    }

    /**
     * Sets a new orderID
     *
     * A unique identifier for an eBay order. If one or more <b>OrderID</b> values are used in a <b>GetOrders</b> or <b>GetOrderTransactions</b> call, any order status or date range filters are ignored.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of June 2019, eBay has changed the format of order identifier values. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  For developers and sellers who are already integrated with the Trading API's order management calls, this change shouldn't impact your integration unless you parse the existing order identifiers (e.g., <b>OrderID</b> or <b>OrderLineItemID</b>), or otherwise infer meaning from the format (e.g., differentiating between a single line item order versus a multiple line item order). Because we realize that some integrations may have logic that is dependent upon the old identifier format, eBay is rolling out this Trading API change with version control to support a transition period of approximately 9 months before applications must switch to the new format completely.
     *  <br><br>
     *  During the transition period, for developers/sellers using a Trading WSDL older than Version 1113, they can use the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header in API calls to control whether the new or old <b>OrderID</b> format is returned in call response payloads. To get the new <b>OrderID</b> format, the value of the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header must be set to <code>1113</code>. During the transition period and even after, the new and old <b>OrderID</b> formats will still be supported/accepted in all Trading API call request payloads. After the transition period (which will be announced), only the new <b>OrderID</b> format will be returned in all Trading API call response payloads, regardless of the Trading WSDL version used or specified compatibility level.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> For sellers integrated with the new order ID format, please note that the identifier for an order will change as it goes from unpaid to paid status. Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. When using a <b>GetOrders</b> or <b>GetOrderTransactions</b> call to retrieve specific order(s), either of these order IDs (paid or unpaid status) can be used to retrieve an order.
     *  </span>
     *
     * @param string $orderID
     * @return self
     */
    public function setOrderID(array $orderID)
    {
        $this->orderID = $orderID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getOrderID();
        if (null !== $value && !empty($this->getOrderID())) {
            $writer->write(array_map(function ($v) {
                return ["OrderID" => $v];
            }, $value));
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderID', true);
        if (null !== $value && !empty($value)) {
            $this->setOrderID($value);
        }
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
