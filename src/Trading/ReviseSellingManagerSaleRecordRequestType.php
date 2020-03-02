<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ReviseSellingManagerSaleRecordRequestType
 *
 * Request type containing the input fields for the <b>ReviseSellingManagerSaleRecord</b>
 *  call. The standard Trading API deprecation process is not applicable to this
 *  call. The user must have a Selling Manager Pro subscription to use this call.
 * XSD Type: ReviseSellingManagerSaleRecordRequestType
 */
class ReviseSellingManagerSaleRecordRequestType extends AbstractRequestType
{

    /**
     * Unique identifier for an eBay listing. A listing can have multiple
     *  order line items, but only one <b>ItemID</b> value. An <b>ItemID</b> can be
     *  paired up with a corresponding <b>TransactionID</b> and used as an input filter
     *  for <b>ReviseSellingManagerSaleRecord</b>. The <b>ItemID</b>/<b>TransactionID</b> pair
     *  corresponds to a Selling Manager <b>SaleRecordID</b>, which can be retrieved
     *  with the <b>GetSellingManagerSaleRecord</b> call.
     *  <br><br>
     *  Unless an <b>OrderLineItemID</b> is used to identify an order line item,
     *  or the <b>OrderID</b> is used to identify an order, the <b>ItemID</b>/<b>TransactionID</b> pair must be
     *  specified. If <b>OrderID</b> or <b>OrderLineItemID</b> are specified, the
     *  <b>ItemID</b>/<b>TransactionID</b> pair is ignored if present in the same request.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * Unique identifier for an eBay sales transaction. This identifier is created once there is a commitment to buy (bidder wins the auction, buyer clicks buy button, or buyer purchases item through <b>PlaceOffer</b> call). Since an auction listing can only have one sales transaction during the duration of the listing, the <b>TransactionID</b> value for auction listings is always <code>0</code>.
     *  <br><br>
     *  The <b>ItemID</b>/<b>TransactionID</b> pair can be
     *  used to identify an order line item in a <b>ReviseSellingManagerSaleRecord</b> call. The
     *  <b>ItemID</b>/<b>TransactionID</b> pair corresponds to a Selling Manager <b>SaleRecordID</b>,
     *  which can be retrieved with the <b>GetSellingManagerSaleRecord</b> call.
     *  <br><br>
     *  Unless an <b>OrderLineItemID</b> is used to identify an order line item,
     *  or the <b>OrderID</b> is used to identify an order, the <b>ItemID</b>/<b>TransactionID</b> pair must be
     *  specified. If <b>OrderID</b> or <b>OrderLineItemID</b> are specified, the
     *  <b>ItemID</b>/<b>TransactionID</b> pair is ignored if present in the same request.
     *
     * @var string $transactionID
     */
    private $transactionID = null;

    /**
     * A unique identifier that identifies a single line item or multiple line item order associated with the Selling Manager sale record(s).
     *  <br><br>
     *  If an <b>OrderID</b> is used in the request, the <b>OrderLineItemID</b> and
     *  <b>ItemID</b>/<b>TransactionID</b> pair are ignored if they are specified in the same request.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of June 2019, eBay has changed the format of order identifier values. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  For developers and sellers who are already integrated with the Trading API's order management calls, this change shouldn't impact your integration unless you parse the existing order identifiers (e.g., <b>OrderID</b> or <b>OrderLineItemID</b>), or otherwise infer meaning from the format (e.g., differentiating between a single line item order versus a multiple line item order). Because we realize that some integrations may have logic that is dependent upon the old identifier format, eBay is rolling out this Trading API change with version control to support a transition period of approximately 9 months before applications must switch to the new format completely.
     *  <br><br>
     *  During the transition period, for developers/sellers using a Trading WSDL older than Version 1113, they can use the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header in API calls to control whether the new or old <b>OrderID</b> format is returned in call response payloads. To get the new <b>OrderID</b> format, the value of the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header must be set to <code>1113</code>. During the transition period and even after, the new and old <b>OrderID</b> formats will still be supported/accepted in all Trading API call request payloads. After the transition period (which will be announced), only the new <b>OrderID</b> format will be returned in all Trading API call response payloads, regardless of the Trading WSDL version used or specified compatibility level.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> For sellers integrated with the new order ID format, please note that the identifier for an order will change as it goes from unpaid to paid status. When using a <b>ReviseSellingManagerSaleRecord</b> call, either of these order IDs (paid or unpaid status) can be used to update a Sale Record.
     *  </span>
     *
     * @var string $orderID
     */
    private $orderID = null;

    /**
     * Container consisting of order costs, shipping details, order status, and
     *  other information. The changes made under this container will update the
     *  order in Selling Manager.
     *
     * @var \Nogrod\eBaySDK\Trading\SellingManagerSoldOrderType $sellingManagerSoldOrder
     */
    private $sellingManagerSoldOrder = null;

    /**
     * A unique identifier for an eBay order line item. This identifier is created once there is a commitment to buy (bidder wins the auction, buyer clicks buy button, or buyer purchases item through <b>PlaceOffer</b> call).
     *  <br><br>
     *  Unless an <b>ItemID</b>/<b>TransactionID</b> pair is used to identify an order line item, or the <b>OrderID</b> is used to identify an order, the <b>OrderLineItemID</b> must be specified. For a multiple line item order, <b>OrderID</b> should be used. If <b>OrderLineItemID</b> is specified, the <b>ItemID</b>/<b>TransactionID</b> pair are ignored if present in the same request.
     *
     * @var string $orderLineItemID
     */
    private $orderLineItemID = null;

    /**
     * Gets as itemID
     *
     * Unique identifier for an eBay listing. A listing can have multiple
     *  order line items, but only one <b>ItemID</b> value. An <b>ItemID</b> can be
     *  paired up with a corresponding <b>TransactionID</b> and used as an input filter
     *  for <b>ReviseSellingManagerSaleRecord</b>. The <b>ItemID</b>/<b>TransactionID</b> pair
     *  corresponds to a Selling Manager <b>SaleRecordID</b>, which can be retrieved
     *  with the <b>GetSellingManagerSaleRecord</b> call.
     *  <br><br>
     *  Unless an <b>OrderLineItemID</b> is used to identify an order line item,
     *  or the <b>OrderID</b> is used to identify an order, the <b>ItemID</b>/<b>TransactionID</b> pair must be
     *  specified. If <b>OrderID</b> or <b>OrderLineItemID</b> are specified, the
     *  <b>ItemID</b>/<b>TransactionID</b> pair is ignored if present in the same request.
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
     * Unique identifier for an eBay listing. A listing can have multiple
     *  order line items, but only one <b>ItemID</b> value. An <b>ItemID</b> can be
     *  paired up with a corresponding <b>TransactionID</b> and used as an input filter
     *  for <b>ReviseSellingManagerSaleRecord</b>. The <b>ItemID</b>/<b>TransactionID</b> pair
     *  corresponds to a Selling Manager <b>SaleRecordID</b>, which can be retrieved
     *  with the <b>GetSellingManagerSaleRecord</b> call.
     *  <br><br>
     *  Unless an <b>OrderLineItemID</b> is used to identify an order line item,
     *  or the <b>OrderID</b> is used to identify an order, the <b>ItemID</b>/<b>TransactionID</b> pair must be
     *  specified. If <b>OrderID</b> or <b>OrderLineItemID</b> are specified, the
     *  <b>ItemID</b>/<b>TransactionID</b> pair is ignored if present in the same request.
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
     * Unique identifier for an eBay sales transaction. This identifier is created once there is a commitment to buy (bidder wins the auction, buyer clicks buy button, or buyer purchases item through <b>PlaceOffer</b> call). Since an auction listing can only have one sales transaction during the duration of the listing, the <b>TransactionID</b> value for auction listings is always <code>0</code>.
     *  <br><br>
     *  The <b>ItemID</b>/<b>TransactionID</b> pair can be
     *  used to identify an order line item in a <b>ReviseSellingManagerSaleRecord</b> call. The
     *  <b>ItemID</b>/<b>TransactionID</b> pair corresponds to a Selling Manager <b>SaleRecordID</b>,
     *  which can be retrieved with the <b>GetSellingManagerSaleRecord</b> call.
     *  <br><br>
     *  Unless an <b>OrderLineItemID</b> is used to identify an order line item,
     *  or the <b>OrderID</b> is used to identify an order, the <b>ItemID</b>/<b>TransactionID</b> pair must be
     *  specified. If <b>OrderID</b> or <b>OrderLineItemID</b> are specified, the
     *  <b>ItemID</b>/<b>TransactionID</b> pair is ignored if present in the same request.
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
     * Unique identifier for an eBay sales transaction. This identifier is created once there is a commitment to buy (bidder wins the auction, buyer clicks buy button, or buyer purchases item through <b>PlaceOffer</b> call). Since an auction listing can only have one sales transaction during the duration of the listing, the <b>TransactionID</b> value for auction listings is always <code>0</code>.
     *  <br><br>
     *  The <b>ItemID</b>/<b>TransactionID</b> pair can be
     *  used to identify an order line item in a <b>ReviseSellingManagerSaleRecord</b> call. The
     *  <b>ItemID</b>/<b>TransactionID</b> pair corresponds to a Selling Manager <b>SaleRecordID</b>,
     *  which can be retrieved with the <b>GetSellingManagerSaleRecord</b> call.
     *  <br><br>
     *  Unless an <b>OrderLineItemID</b> is used to identify an order line item,
     *  or the <b>OrderID</b> is used to identify an order, the <b>ItemID</b>/<b>TransactionID</b> pair must be
     *  specified. If <b>OrderID</b> or <b>OrderLineItemID</b> are specified, the
     *  <b>ItemID</b>/<b>TransactionID</b> pair is ignored if present in the same request.
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
     *  <b>ItemID</b>/<b>TransactionID</b> pair are ignored if they are specified in the same request.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of June 2019, eBay has changed the format of order identifier values. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  For developers and sellers who are already integrated with the Trading API's order management calls, this change shouldn't impact your integration unless you parse the existing order identifiers (e.g., <b>OrderID</b> or <b>OrderLineItemID</b>), or otherwise infer meaning from the format (e.g., differentiating between a single line item order versus a multiple line item order). Because we realize that some integrations may have logic that is dependent upon the old identifier format, eBay is rolling out this Trading API change with version control to support a transition period of approximately 9 months before applications must switch to the new format completely.
     *  <br><br>
     *  During the transition period, for developers/sellers using a Trading WSDL older than Version 1113, they can use the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header in API calls to control whether the new or old <b>OrderID</b> format is returned in call response payloads. To get the new <b>OrderID</b> format, the value of the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header must be set to <code>1113</code>. During the transition period and even after, the new and old <b>OrderID</b> formats will still be supported/accepted in all Trading API call request payloads. After the transition period (which will be announced), only the new <b>OrderID</b> format will be returned in all Trading API call response payloads, regardless of the Trading WSDL version used or specified compatibility level.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> For sellers integrated with the new order ID format, please note that the identifier for an order will change as it goes from unpaid to paid status. When using a <b>ReviseSellingManagerSaleRecord</b> call, either of these order IDs (paid or unpaid status) can be used to update a Sale Record.
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
     *  <b>ItemID</b>/<b>TransactionID</b> pair are ignored if they are specified in the same request.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of June 2019, eBay has changed the format of order identifier values. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  For developers and sellers who are already integrated with the Trading API's order management calls, this change shouldn't impact your integration unless you parse the existing order identifiers (e.g., <b>OrderID</b> or <b>OrderLineItemID</b>), or otherwise infer meaning from the format (e.g., differentiating between a single line item order versus a multiple line item order). Because we realize that some integrations may have logic that is dependent upon the old identifier format, eBay is rolling out this Trading API change with version control to support a transition period of approximately 9 months before applications must switch to the new format completely.
     *  <br><br>
     *  During the transition period, for developers/sellers using a Trading WSDL older than Version 1113, they can use the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header in API calls to control whether the new or old <b>OrderID</b> format is returned in call response payloads. To get the new <b>OrderID</b> format, the value of the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header must be set to <code>1113</code>. During the transition period and even after, the new and old <b>OrderID</b> formats will still be supported/accepted in all Trading API call request payloads. After the transition period (which will be announced), only the new <b>OrderID</b> format will be returned in all Trading API call response payloads, regardless of the Trading WSDL version used or specified compatibility level.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> For sellers integrated with the new order ID format, please note that the identifier for an order will change as it goes from unpaid to paid status. When using a <b>ReviseSellingManagerSaleRecord</b> call, either of these order IDs (paid or unpaid status) can be used to update a Sale Record.
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
     * Gets as sellingManagerSoldOrder
     *
     * Container consisting of order costs, shipping details, order status, and
     *  other information. The changes made under this container will update the
     *  order in Selling Manager.
     *
     * @return \Nogrod\eBaySDK\Trading\SellingManagerSoldOrderType
     */
    public function getSellingManagerSoldOrder()
    {
        return $this->sellingManagerSoldOrder;
    }

    /**
     * Sets a new sellingManagerSoldOrder
     *
     * Container consisting of order costs, shipping details, order status, and
     *  other information. The changes made under this container will update the
     *  order in Selling Manager.
     *
     * @param \Nogrod\eBaySDK\Trading\SellingManagerSoldOrderType $sellingManagerSoldOrder
     * @return self
     */
    public function setSellingManagerSoldOrder(\Nogrod\eBaySDK\Trading\SellingManagerSoldOrderType $sellingManagerSoldOrder)
    {
        $this->sellingManagerSoldOrder = $sellingManagerSoldOrder;
        return $this;
    }

    /**
     * Gets as orderLineItemID
     *
     * A unique identifier for an eBay order line item. This identifier is created once there is a commitment to buy (bidder wins the auction, buyer clicks buy button, or buyer purchases item through <b>PlaceOffer</b> call).
     *  <br><br>
     *  Unless an <b>ItemID</b>/<b>TransactionID</b> pair is used to identify an order line item, or the <b>OrderID</b> is used to identify an order, the <b>OrderLineItemID</b> must be specified. For a multiple line item order, <b>OrderID</b> should be used. If <b>OrderLineItemID</b> is specified, the <b>ItemID</b>/<b>TransactionID</b> pair are ignored if present in the same request.
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
     * A unique identifier for an eBay order line item. This identifier is created once there is a commitment to buy (bidder wins the auction, buyer clicks buy button, or buyer purchases item through <b>PlaceOffer</b> call).
     *  <br><br>
     *  Unless an <b>ItemID</b>/<b>TransactionID</b> pair is used to identify an order line item, or the <b>OrderID</b> is used to identify an order, the <b>OrderLineItemID</b> must be specified. For a multiple line item order, <b>OrderID</b> should be used. If <b>OrderLineItemID</b> is specified, the <b>ItemID</b>/<b>TransactionID</b> pair are ignored if present in the same request.
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
        $value = $this->getSellingManagerSoldOrder();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellingManagerSoldOrder", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TransactionID');
        if (null !== $value) {
            $this->setTransactionID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderID');
        if (null !== $value) {
            $this->setOrderID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellingManagerSoldOrder');
        if (null !== $value) {
            $this->setSellingManagerSoldOrder(\Nogrod\eBaySDK\Trading\SellingManagerSoldOrderType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderLineItemID');
        if (null !== $value) {
            $this->setOrderLineItemID($value);
        }
    }
}
