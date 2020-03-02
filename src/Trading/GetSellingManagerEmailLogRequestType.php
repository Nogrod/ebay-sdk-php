<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetSellingManagerEmailLogRequestType
 *
 * Retrieves a log of emails sent, or scheduled to be sent, to buyers.
 *  <br><br>
 *  The standard Trading API
 *  deprecation process is not applicable to this call.
 * XSD Type: GetSellingManagerEmailLogRequestType
 */
class GetSellingManagerEmailLogRequestType extends AbstractRequestType
{

    /**
     * Unique identifier for the eBay listing associated with the Selling
     *  Manager email log. Unless the <b>OrderID</b> or <b>OrderLineItemID</b> value is
     *  specified in the request, the <b>ItemID</b> and <b>TransactionID</b> fields must be
     *  used to identify the Selling Manager email log to retrieve. You can
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
     * Unique identifier for the sales transaction associated with
     *  the Selling Manager email log. Unless the <b>OrderID</b> or <b>OrderLineItemID</b>
     *  value is specified in the request, the <b>ItemID</b> and <b>TransactionID</b> fields
     *  must be used to identify the Selling Manager email log to retrieve.
     *  You can use <b>GetSellingManagerSoldListings</b> to retrieve the <b>ItemID</b>,
     *  <b>TransactionID</b> or <b>OrderLineItemID</b> values that correspond to the Selling
     *  Manager sale record (<b>SaleRecordID</b>). All four of these fields are
     *  returned under the <b>SellingManagerSoldTransaction</b> container of the
     *  <b>GetSellingManagerSoldListings</b> request.
     *
     * @var int $transactionID
     */
    private $transactionID = null;

    /**
     * A unique identifier that identifies a single line item or multiple line item order associated with the Selling Manager email log.
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
     *  <span class="tablenote"><b>Note: </b> For sellers integrated with the new order ID format, please note that the identifier for an order will change as it goes from unpaid to paid status. Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. When using a <b>GetSellingManagerEmailLog</b> call, either of these order IDs (paid or unpaid status) can be used to identify the order. Similarly, either of these order IDs (paid or unpaid status) can be used in <b>GetOrders</b> or <b>GetOrderTransactions</b> call to retrieve specific order(s).
     *  </span>
     *
     * @var string $orderID
     */
    private $orderID = null;

    /**
     * Specifies the earliest (oldest) and latest (most recent) dates to use in a
     *  date range filter based on email sent date. Each of the time ranges can be
     *  up to 90 days.
     *
     * @var \Nogrod\eBaySDK\Trading\TimeRangeType $emailDateRange
     */
    private $emailDateRange = null;

    /**
     * A unique identifier for an eBay order line item that is associated with
     *  the Selling Manager email log. This field is created as soon as there
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
     *  Manager email log. Unless the <b>OrderID</b> or <b>OrderLineItemID</b> value is
     *  specified in the request, the <b>ItemID</b> and <b>TransactionID</b> fields must be
     *  used to identify the Selling Manager email log to retrieve. You can
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
     *  Manager email log. Unless the <b>OrderID</b> or <b>OrderLineItemID</b> value is
     *  specified in the request, the <b>ItemID</b> and <b>TransactionID</b> fields must be
     *  used to identify the Selling Manager email log to retrieve. You can
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
     * Unique identifier for the sales transaction associated with
     *  the Selling Manager email log. Unless the <b>OrderID</b> or <b>OrderLineItemID</b>
     *  value is specified in the request, the <b>ItemID</b> and <b>TransactionID</b> fields
     *  must be used to identify the Selling Manager email log to retrieve.
     *  You can use <b>GetSellingManagerSoldListings</b> to retrieve the <b>ItemID</b>,
     *  <b>TransactionID</b> or <b>OrderLineItemID</b> values that correspond to the Selling
     *  Manager sale record (<b>SaleRecordID</b>). All four of these fields are
     *  returned under the <b>SellingManagerSoldTransaction</b> container of the
     *  <b>GetSellingManagerSoldListings</b> request.
     *
     * @return int
     */
    public function getTransactionID()
    {
        return $this->transactionID;
    }

    /**
     * Sets a new transactionID
     *
     * Unique identifier for the sales transaction associated with
     *  the Selling Manager email log. Unless the <b>OrderID</b> or <b>OrderLineItemID</b>
     *  value is specified in the request, the <b>ItemID</b> and <b>TransactionID</b> fields
     *  must be used to identify the Selling Manager email log to retrieve.
     *  You can use <b>GetSellingManagerSoldListings</b> to retrieve the <b>ItemID</b>,
     *  <b>TransactionID</b> or <b>OrderLineItemID</b> values that correspond to the Selling
     *  Manager sale record (<b>SaleRecordID</b>). All four of these fields are
     *  returned under the <b>SellingManagerSoldTransaction</b> container of the
     *  <b>GetSellingManagerSoldListings</b> request.
     *
     * @param int $transactionID
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
     * A unique identifier that identifies a single line item or multiple line item order associated with the Selling Manager email log.
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
     *  <span class="tablenote"><b>Note: </b> For sellers integrated with the new order ID format, please note that the identifier for an order will change as it goes from unpaid to paid status. Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. When using a <b>GetSellingManagerEmailLog</b> call, either of these order IDs (paid or unpaid status) can be used to identify the order. Similarly, either of these order IDs (paid or unpaid status) can be used in <b>GetOrders</b> or <b>GetOrderTransactions</b> call to retrieve specific order(s).
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
     * A unique identifier that identifies a single line item or multiple line item order associated with the Selling Manager email log.
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
     *  <span class="tablenote"><b>Note: </b> For sellers integrated with the new order ID format, please note that the identifier for an order will change as it goes from unpaid to paid status. Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. When using a <b>GetSellingManagerEmailLog</b> call, either of these order IDs (paid or unpaid status) can be used to identify the order. Similarly, either of these order IDs (paid or unpaid status) can be used in <b>GetOrders</b> or <b>GetOrderTransactions</b> call to retrieve specific order(s).
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
     * Gets as emailDateRange
     *
     * Specifies the earliest (oldest) and latest (most recent) dates to use in a
     *  date range filter based on email sent date. Each of the time ranges can be
     *  up to 90 days.
     *
     * @return \Nogrod\eBaySDK\Trading\TimeRangeType
     */
    public function getEmailDateRange()
    {
        return $this->emailDateRange;
    }

    /**
     * Sets a new emailDateRange
     *
     * Specifies the earliest (oldest) and latest (most recent) dates to use in a
     *  date range filter based on email sent date. Each of the time ranges can be
     *  up to 90 days.
     *
     * @param \Nogrod\eBaySDK\Trading\TimeRangeType $emailDateRange
     * @return self
     */
    public function setEmailDateRange(\Nogrod\eBaySDK\Trading\TimeRangeType $emailDateRange)
    {
        $this->emailDateRange = $emailDateRange;
        return $this;
    }

    /**
     * Gets as orderLineItemID
     *
     * A unique identifier for an eBay order line item that is associated with
     *  the Selling Manager email log. This field is created as soon as there
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
     *  the Selling Manager email log. This field is created as soon as there
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
        $value = $this->getEmailDateRange();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EmailDateRange", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EmailDateRange');
        if (null !== $value) {
            $this->setEmailDateRange(\Nogrod\eBaySDK\Trading\TimeRangeType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderLineItemID');
        if (null !== $value) {
            $this->setOrderLineItemID($value);
        }
    }
}
