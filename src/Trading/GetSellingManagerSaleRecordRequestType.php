<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing GetSellingManagerSaleRecordRequestType
 *
 * Retrieves the data for one or more Selling Manager sale records.
 *  <br><br>
 *  The standard Trading API deprecation process is not applicable to this call. The user must have a Selling Manager Pro subscription to use this call.
 * XSD Type: GetSellingManagerSaleRecordRequestType
 */
class GetSellingManagerSaleRecordRequestType extends AbstractRequestType
{

    /**
     * Unique identifier for the eBay listing associated with the Selling
     *  Manager sale record. Unless the <b>OrderID</b> or <b>OrderLineItemID</b> value is
     *  specified in the request, the <b>ItemID</b> and <b>TransactionID</b> fields must be
     *  used to identify the Selling Manager sale record to retrieve. You can
     *  use <b>GetSellingManagerSoldListings</b> to retrieve the <b>ItemID</b>, <b>TransactionID</b>
     *  or <b>OrderLineItemID</b> values that correspond to the Selling Manager sale
     *  record (<b>SaleRecordID</b>). All four of these fields are returned under the
     *  <b>SellingManagerSoldTransaction</b> container of the
     *  <b>GetSellingManagerSoldListings</b> request.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * Unique identifier for the sales transaction associated with the Selling
     *  Manager sale record. Unless the <b>OrderID</b> or
     *  <b>OrderLineItemID</b> value is specified in the request, the
     *  <b>ItemID</b> and <b>TransactionID</b> fields must
     *  be used to identify the Selling Manager sale record to retrieve. You can
     *  use <b>GetSellingManagerSoldListings</b> to retrieve the
     *  <b>ItemID</b>, <b>TransactionID</b> or
     *  <b>OrderLineItemID</b> values that correspond to the Selling
     *  Manager sale record (<b>SaleRecordID</b>). All four of these
     *  fields are returned under the
     *  <b>SellingManagerSoldTransaction</b> container of the
     *  <b>GetSellingManagerSoldListings</b> request.
     *
     * @var string $transactionID
     */
    private $transactionID = null;

    /**
     * A unique identifier that identifies a single line item or multiple line item order associated with the Selling Manager sale record(s).
     *  <br><br>
     *  If an <b>OrderID</b> is used in the request, the <b>OrderLineItemID</b> and
     *  <b>ItemID</b>/<b>TransactionID</b> pair are not required.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of June 2019, eBay has changed the format of order identifier values. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  For developers and sellers who are already integrated with the Trading API's order management calls, this change shouldn't impact your integration unless you parse the existing order identifiers (e.g., <b>OrderID</b> or <b>OrderLineItemID</b>), or otherwise infer meaning from the format (e.g., differentiating between a single line item order versus a multiple line item order). Because we realize that some integrations may have logic that is dependent upon the old identifier format, eBay is rolling out this Trading API change with version control to support a transition period of approximately 9 months before applications must switch to the new format completely.
     *  <br><br>
     *  During the transition period, for developers/sellers using a Trading WSDL older than Version 1113, they can use the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header in API calls to control whether the new or old <b>OrderID</b> format is returned in call response payloads. To get the new <b>OrderID</b> format, the value of the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header must be set to <code>1113</code>. During the transition period and even after, the new and old <b>OrderID</b> formats will still be supported/accepted in all Trading API call request payloads. After the transition period (which will be announced), only the new <b>OrderID</b> format will be returned in all Trading API call response payloads, regardless of the Trading WSDL version used or specified compatibility level.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> For sellers integrated with the new order ID format, please note that the identifier for an order will change as it goes from unpaid to paid status. Sellers can check to see if an order has been paid by looking for a value of 'CheckoutComplete' in the <b>OrderStatus.CheckoutStatus</b> field in the response of <b>GetSellingManagerSaleRecord</b> or call. Sellers should not fulfill orders until buyer has made payment. When using a <b>GetSellingManagerSaleRecord</b> call to retrieve a sale record associated with a specific order, either of these order IDs (paid or unpaid status) can be used to identify the order.
     *  </span>
     *
     * @var string $orderID
     */
    private $orderID = null;

    /**
     * A unique identifier for an eBay order line item that is associated with
     *  the Selling Manager sale record. This field is created as soon as there
     *  is a commitment to buy (bidder wins the auction, buyer clicks buy button, or buyer purchases item through <b>PlaceOffer</b> call).
     *  <br><br>
     *  You can use <b>GetSellingManagerSoldListings</b> to retrieve the <b>ItemID</b>, <b>TransactionID</b> or <b>OrderLineItemID</b> values that correspond to the Selling Manager sale record (<b>SaleRecordID</b>). All four of these fields are returned under the <b>SellingManagerSoldTransaction</b> container of the <b>GetSellingManagerSoldListings</b> request. Unless an <b>OrderID</b> or an <b>ItemID</b>/<b>TransactionID</b> pair is specified in the <b>GetSellingManagerSaleRecord</b> request, the <b>OrderLineItemID</b> field is required.
     *  <br>
     *
     * @var string $orderLineItemID
     */
    private $orderLineItemID = null;

    /**
     * Gets as itemID
     *
     * Unique identifier for the eBay listing associated with the Selling
     *  Manager sale record. Unless the <b>OrderID</b> or <b>OrderLineItemID</b> value is
     *  specified in the request, the <b>ItemID</b> and <b>TransactionID</b> fields must be
     *  used to identify the Selling Manager sale record to retrieve. You can
     *  use <b>GetSellingManagerSoldListings</b> to retrieve the <b>ItemID</b>, <b>TransactionID</b>
     *  or <b>OrderLineItemID</b> values that correspond to the Selling Manager sale
     *  record (<b>SaleRecordID</b>). All four of these fields are returned under the
     *  <b>SellingManagerSoldTransaction</b> container of the
     *  <b>GetSellingManagerSoldListings</b> request.
     *
     * @return string
     */
    public function getItemID()
    {
        return $this->itemID;
    }

    /**
     * Sets a new itemID
     *
     * Unique identifier for the eBay listing associated with the Selling
     *  Manager sale record. Unless the <b>OrderID</b> or <b>OrderLineItemID</b> value is
     *  specified in the request, the <b>ItemID</b> and <b>TransactionID</b> fields must be
     *  used to identify the Selling Manager sale record to retrieve. You can
     *  use <b>GetSellingManagerSoldListings</b> to retrieve the <b>ItemID</b>, <b>TransactionID</b>
     *  or <b>OrderLineItemID</b> values that correspond to the Selling Manager sale
     *  record (<b>SaleRecordID</b>). All four of these fields are returned under the
     *  <b>SellingManagerSoldTransaction</b> container of the
     *  <b>GetSellingManagerSoldListings</b> request.
     *
     * @param string $itemID
     * @return self
     */
    public function setItemID($itemID)
    {
        $this->itemID = $itemID;
        return $this;
    }

    /**
     * Gets as transactionID
     *
     * Unique identifier for the sales transaction associated with the Selling
     *  Manager sale record. Unless the <b>OrderID</b> or
     *  <b>OrderLineItemID</b> value is specified in the request, the
     *  <b>ItemID</b> and <b>TransactionID</b> fields must
     *  be used to identify the Selling Manager sale record to retrieve. You can
     *  use <b>GetSellingManagerSoldListings</b> to retrieve the
     *  <b>ItemID</b>, <b>TransactionID</b> or
     *  <b>OrderLineItemID</b> values that correspond to the Selling
     *  Manager sale record (<b>SaleRecordID</b>). All four of these
     *  fields are returned under the
     *  <b>SellingManagerSoldTransaction</b> container of the
     *  <b>GetSellingManagerSoldListings</b> request.
     *
     * @return string
     */
    public function getTransactionID()
    {
        return $this->transactionID;
    }

    /**
     * Sets a new transactionID
     *
     * Unique identifier for the sales transaction associated with the Selling
     *  Manager sale record. Unless the <b>OrderID</b> or
     *  <b>OrderLineItemID</b> value is specified in the request, the
     *  <b>ItemID</b> and <b>TransactionID</b> fields must
     *  be used to identify the Selling Manager sale record to retrieve. You can
     *  use <b>GetSellingManagerSoldListings</b> to retrieve the
     *  <b>ItemID</b>, <b>TransactionID</b> or
     *  <b>OrderLineItemID</b> values that correspond to the Selling
     *  Manager sale record (<b>SaleRecordID</b>). All four of these
     *  fields are returned under the
     *  <b>SellingManagerSoldTransaction</b> container of the
     *  <b>GetSellingManagerSoldListings</b> request.
     *
     * @param string $transactionID
     * @return self
     */
    public function setTransactionID($transactionID)
    {
        $this->transactionID = $transactionID;
        return $this;
    }

    /**
     * Gets as orderID
     *
     * A unique identifier that identifies a single line item or multiple line item order associated with the Selling Manager sale record(s).
     *  <br><br>
     *  If an <b>OrderID</b> is used in the request, the <b>OrderLineItemID</b> and
     *  <b>ItemID</b>/<b>TransactionID</b> pair are not required.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of June 2019, eBay has changed the format of order identifier values. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  For developers and sellers who are already integrated with the Trading API's order management calls, this change shouldn't impact your integration unless you parse the existing order identifiers (e.g., <b>OrderID</b> or <b>OrderLineItemID</b>), or otherwise infer meaning from the format (e.g., differentiating between a single line item order versus a multiple line item order). Because we realize that some integrations may have logic that is dependent upon the old identifier format, eBay is rolling out this Trading API change with version control to support a transition period of approximately 9 months before applications must switch to the new format completely.
     *  <br><br>
     *  During the transition period, for developers/sellers using a Trading WSDL older than Version 1113, they can use the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header in API calls to control whether the new or old <b>OrderID</b> format is returned in call response payloads. To get the new <b>OrderID</b> format, the value of the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header must be set to <code>1113</code>. During the transition period and even after, the new and old <b>OrderID</b> formats will still be supported/accepted in all Trading API call request payloads. After the transition period (which will be announced), only the new <b>OrderID</b> format will be returned in all Trading API call response payloads, regardless of the Trading WSDL version used or specified compatibility level.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> For sellers integrated with the new order ID format, please note that the identifier for an order will change as it goes from unpaid to paid status. Sellers can check to see if an order has been paid by looking for a value of 'CheckoutComplete' in the <b>OrderStatus.CheckoutStatus</b> field in the response of <b>GetSellingManagerSaleRecord</b> or call. Sellers should not fulfill orders until buyer has made payment. When using a <b>GetSellingManagerSaleRecord</b> call to retrieve a sale record associated with a specific order, either of these order IDs (paid or unpaid status) can be used to identify the order.
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
     * A unique identifier that identifies a single line item or multiple line item order associated with the Selling Manager sale record(s).
     *  <br><br>
     *  If an <b>OrderID</b> is used in the request, the <b>OrderLineItemID</b> and
     *  <b>ItemID</b>/<b>TransactionID</b> pair are not required.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of June 2019, eBay has changed the format of order identifier values. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  For developers and sellers who are already integrated with the Trading API's order management calls, this change shouldn't impact your integration unless you parse the existing order identifiers (e.g., <b>OrderID</b> or <b>OrderLineItemID</b>), or otherwise infer meaning from the format (e.g., differentiating between a single line item order versus a multiple line item order). Because we realize that some integrations may have logic that is dependent upon the old identifier format, eBay is rolling out this Trading API change with version control to support a transition period of approximately 9 months before applications must switch to the new format completely.
     *  <br><br>
     *  During the transition period, for developers/sellers using a Trading WSDL older than Version 1113, they can use the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header in API calls to control whether the new or old <b>OrderID</b> format is returned in call response payloads. To get the new <b>OrderID</b> format, the value of the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header must be set to <code>1113</code>. During the transition period and even after, the new and old <b>OrderID</b> formats will still be supported/accepted in all Trading API call request payloads. After the transition period (which will be announced), only the new <b>OrderID</b> format will be returned in all Trading API call response payloads, regardless of the Trading WSDL version used or specified compatibility level.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> For sellers integrated with the new order ID format, please note that the identifier for an order will change as it goes from unpaid to paid status. Sellers can check to see if an order has been paid by looking for a value of 'CheckoutComplete' in the <b>OrderStatus.CheckoutStatus</b> field in the response of <b>GetSellingManagerSaleRecord</b> or call. Sellers should not fulfill orders until buyer has made payment. When using a <b>GetSellingManagerSaleRecord</b> call to retrieve a sale record associated with a specific order, either of these order IDs (paid or unpaid status) can be used to identify the order.
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
     * A unique identifier for an eBay order line item that is associated with
     *  the Selling Manager sale record. This field is created as soon as there
     *  is a commitment to buy (bidder wins the auction, buyer clicks buy button, or buyer purchases item through <b>PlaceOffer</b> call).
     *  <br><br>
     *  You can use <b>GetSellingManagerSoldListings</b> to retrieve the <b>ItemID</b>, <b>TransactionID</b> or <b>OrderLineItemID</b> values that correspond to the Selling Manager sale record (<b>SaleRecordID</b>). All four of these fields are returned under the <b>SellingManagerSoldTransaction</b> container of the <b>GetSellingManagerSoldListings</b> request. Unless an <b>OrderID</b> or an <b>ItemID</b>/<b>TransactionID</b> pair is specified in the <b>GetSellingManagerSaleRecord</b> request, the <b>OrderLineItemID</b> field is required.
     *  <br>
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
     * A unique identifier for an eBay order line item that is associated with
     *  the Selling Manager sale record. This field is created as soon as there
     *  is a commitment to buy (bidder wins the auction, buyer clicks buy button, or buyer purchases item through <b>PlaceOffer</b> call).
     *  <br><br>
     *  You can use <b>GetSellingManagerSoldListings</b> to retrieve the <b>ItemID</b>, <b>TransactionID</b> or <b>OrderLineItemID</b> values that correspond to the Selling Manager sale record (<b>SaleRecordID</b>). All four of these fields are returned under the <b>SellingManagerSoldTransaction</b> container of the <b>GetSellingManagerSoldListings</b> request. Unless an <b>OrderID</b> or an <b>ItemID</b>/<b>TransactionID</b> pair is specified in the <b>GetSellingManagerSaleRecord</b> request, the <b>OrderLineItemID</b> field is required.
     *  <br>
     *
     * @param string $orderLineItemID
     * @return self
     */
    public function setOrderLineItemID($orderLineItemID)
    {
        $this->orderLineItemID = $orderLineItemID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getTransactionID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TransactionID", $value);
        }
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
        parent::setKeyValue($keyValue);
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TransactionID');
        if (null !== $value) {
            $this->setTransactionID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderID');
        if (null !== $value) {
            $this->setOrderID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderLineItemID');
        if (null !== $value) {
            $this->setOrderLineItemID($value);
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
