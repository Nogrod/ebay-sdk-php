<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing GetOrderTransactionsRequestType
 *
 * The base request type for the <b>GetOrderTransactions</b> call. This call retrieves detailed information about one or more orders or order line items created (or modified) in the last 90 days.
 *  <br><br>
 *  Unlike <b>GetOrders</b>, which can be used to retrieve specific orders, or orders created (or modified) within a specific time period, the <b>GetOrderTransactions</b> call only supports the retrieval of specific orders and/or order line items.
 * XSD Type: GetOrderTransactionsRequestType
 */
class GetOrderTransactionsRequestType extends AbstractRequestType
{

    /**
     * This container is used if the seller wants to retrieve for one or more order line items. An <b>ItemTransactionID</b> container is required for each order line item that is to be retrieved. An order line item can be identified with an <b>ItemID</b>/<b>TransactionID</b> pair, with an <b>OrderLineItemID</b> value, or with a <b>SKU</b> value (if a SKU is defined for the order line item).
     *
     * @var \Nogrod\eBaySDK\Trading\ItemTransactionIDType[] $itemTransactionIDArray
     */
    private $itemTransactionIDArray = null;

    /**
     * This container is used if the seller wants to search for one or more orders. An <b>OrderID</b> field is required for each order that is to be retrieved. Up to 20 <b>OrderID</b> fields can be used.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of June 2019, eBay has changed the format of order identifier values. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  For developers and sellers who are already integrated with the Trading API's order management calls, this change shouldn't impact your integration unless you parse the existing order identifiers (e.g., <b>OrderID</b> or <b>OrderLineItemID</b>), or otherwise infer meaning from the format (e.g., differentiating between a single line item order versus a multiple line item order). Because we realize that some integrations may have logic that is dependent upon the old identifier format, eBay is rolling out this Trading API change with version control to support a transition period of approximately 9 months before applications must switch to the new format completely.
     *  <br><br>
     *  During the transition period, for developers/sellers using a Trading WSDL older than Version 1113, they can use the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header in API calls to control whether the new or old <b>OrderID</b> format is returned in call response payloads. To get the new <b>OrderID</b> format, the value of the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header must be set to <code>1113</code>. During the transition period and even after, the new and old <b>OrderID</b> formats will still be supported/accepted in all Trading API call request payloads. After the transition period (which will be announced), only the new <b>OrderID</b> format will be returned in all Trading API call response payloads, regardless of the Trading WSDL version used or specified compatibility level.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> For sellers integrated with the new order ID format, please note that the identifier for an order will change as it goes from unpaid to paid status. Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment. When using a <b>GetOrders</b> or <b>GetOrderTransactions</b> call to retrieve specific order(s), either of these order IDs (paid or unpaid status) can be used to retrieve an order.
     *  </span>
     *
     * @var string[] $orderIDArray
     */
    private $orderIDArray = null;

    /**
     * <span class="tablenote"><b>Note: </b> This field should no longer be used since its sole purpose was to allow the seller to filter between eBay orders and Half.com orders, and the Half.com site no longer exists.
     *  </span>
     *
     * @var string $platform
     */
    private $platform = null;

    /**
     * This field is included and set to <code>true</code> if the user wants to view the Final Value Fee (FVF) for all order line items in the response. The Final Value Fee is returned in the <b>Transaction.FinalValueFee</b> field. The Final Value Fee is assessed right after the creation of an order line item.
     *  <br/>
     *
     * @var bool $includeFinalValueFees
     */
    private $includeFinalValueFees = null;

    /**
     * Adds as itemTransactionID
     *
     * This container is used if the seller wants to retrieve for one or more order line items. An <b>ItemTransactionID</b> container is required for each order line item that is to be retrieved. An order line item can be identified with an <b>ItemID</b>/<b>TransactionID</b> pair, with an <b>OrderLineItemID</b> value, or with a <b>SKU</b> value (if a SKU is defined for the order line item).
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ItemTransactionIDType $itemTransactionID
     */
    public function addToItemTransactionIDArray(\Nogrod\eBaySDK\Trading\ItemTransactionIDType $itemTransactionID)
    {
        $this->itemTransactionIDArray[] = $itemTransactionID;
        return $this;
    }

    /**
     * isset itemTransactionIDArray
     *
     * This container is used if the seller wants to retrieve for one or more order line items. An <b>ItemTransactionID</b> container is required for each order line item that is to be retrieved. An order line item can be identified with an <b>ItemID</b>/<b>TransactionID</b> pair, with an <b>OrderLineItemID</b> value, or with a <b>SKU</b> value (if a SKU is defined for the order line item).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemTransactionIDArray($index)
    {
        return isset($this->itemTransactionIDArray[$index]);
    }

    /**
     * unset itemTransactionIDArray
     *
     * This container is used if the seller wants to retrieve for one or more order line items. An <b>ItemTransactionID</b> container is required for each order line item that is to be retrieved. An order line item can be identified with an <b>ItemID</b>/<b>TransactionID</b> pair, with an <b>OrderLineItemID</b> value, or with a <b>SKU</b> value (if a SKU is defined for the order line item).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemTransactionIDArray($index)
    {
        unset($this->itemTransactionIDArray[$index]);
    }

    /**
     * Gets as itemTransactionIDArray
     *
     * This container is used if the seller wants to retrieve for one or more order line items. An <b>ItemTransactionID</b> container is required for each order line item that is to be retrieved. An order line item can be identified with an <b>ItemID</b>/<b>TransactionID</b> pair, with an <b>OrderLineItemID</b> value, or with a <b>SKU</b> value (if a SKU is defined for the order line item).
     *
     * @return \Nogrod\eBaySDK\Trading\ItemTransactionIDType[]
     */
    public function getItemTransactionIDArray()
    {
        return $this->itemTransactionIDArray;
    }

    /**
     * Sets a new itemTransactionIDArray
     *
     * This container is used if the seller wants to retrieve for one or more order line items. An <b>ItemTransactionID</b> container is required for each order line item that is to be retrieved. An order line item can be identified with an <b>ItemID</b>/<b>TransactionID</b> pair, with an <b>OrderLineItemID</b> value, or with a <b>SKU</b> value (if a SKU is defined for the order line item).
     *
     * @param \Nogrod\eBaySDK\Trading\ItemTransactionIDType[] $itemTransactionIDArray
     * @return self
     */
    public function setItemTransactionIDArray(array $itemTransactionIDArray)
    {
        $this->itemTransactionIDArray = $itemTransactionIDArray;
        return $this;
    }

    /**
     * Adds as orderID
     *
     * This container is used if the seller wants to search for one or more orders. An <b>OrderID</b> field is required for each order that is to be retrieved. Up to 20 <b>OrderID</b> fields can be used.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of June 2019, eBay has changed the format of order identifier values. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  For developers and sellers who are already integrated with the Trading API's order management calls, this change shouldn't impact your integration unless you parse the existing order identifiers (e.g., <b>OrderID</b> or <b>OrderLineItemID</b>), or otherwise infer meaning from the format (e.g., differentiating between a single line item order versus a multiple line item order). Because we realize that some integrations may have logic that is dependent upon the old identifier format, eBay is rolling out this Trading API change with version control to support a transition period of approximately 9 months before applications must switch to the new format completely.
     *  <br><br>
     *  During the transition period, for developers/sellers using a Trading WSDL older than Version 1113, they can use the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header in API calls to control whether the new or old <b>OrderID</b> format is returned in call response payloads. To get the new <b>OrderID</b> format, the value of the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header must be set to <code>1113</code>. During the transition period and even after, the new and old <b>OrderID</b> formats will still be supported/accepted in all Trading API call request payloads. After the transition period (which will be announced), only the new <b>OrderID</b> format will be returned in all Trading API call response payloads, regardless of the Trading WSDL version used or specified compatibility level.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> For sellers integrated with the new order ID format, please note that the identifier for an order will change as it goes from unpaid to paid status. Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment. When using a <b>GetOrders</b> or <b>GetOrderTransactions</b> call to retrieve specific order(s), either of these order IDs (paid or unpaid status) can be used to retrieve an order.
     *  </span>
     *
     * @return self
     * @param string $orderID
     */
    public function addToOrderIDArray($orderID)
    {
        $this->orderIDArray[] = $orderID;
        return $this;
    }

    /**
     * isset orderIDArray
     *
     * This container is used if the seller wants to search for one or more orders. An <b>OrderID</b> field is required for each order that is to be retrieved. Up to 20 <b>OrderID</b> fields can be used.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of June 2019, eBay has changed the format of order identifier values. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  For developers and sellers who are already integrated with the Trading API's order management calls, this change shouldn't impact your integration unless you parse the existing order identifiers (e.g., <b>OrderID</b> or <b>OrderLineItemID</b>), or otherwise infer meaning from the format (e.g., differentiating between a single line item order versus a multiple line item order). Because we realize that some integrations may have logic that is dependent upon the old identifier format, eBay is rolling out this Trading API change with version control to support a transition period of approximately 9 months before applications must switch to the new format completely.
     *  <br><br>
     *  During the transition period, for developers/sellers using a Trading WSDL older than Version 1113, they can use the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header in API calls to control whether the new or old <b>OrderID</b> format is returned in call response payloads. To get the new <b>OrderID</b> format, the value of the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header must be set to <code>1113</code>. During the transition period and even after, the new and old <b>OrderID</b> formats will still be supported/accepted in all Trading API call request payloads. After the transition period (which will be announced), only the new <b>OrderID</b> format will be returned in all Trading API call response payloads, regardless of the Trading WSDL version used or specified compatibility level.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> For sellers integrated with the new order ID format, please note that the identifier for an order will change as it goes from unpaid to paid status. Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment. When using a <b>GetOrders</b> or <b>GetOrderTransactions</b> call to retrieve specific order(s), either of these order IDs (paid or unpaid status) can be used to retrieve an order.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderIDArray($index)
    {
        return isset($this->orderIDArray[$index]);
    }

    /**
     * unset orderIDArray
     *
     * This container is used if the seller wants to search for one or more orders. An <b>OrderID</b> field is required for each order that is to be retrieved. Up to 20 <b>OrderID</b> fields can be used.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of June 2019, eBay has changed the format of order identifier values. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  For developers and sellers who are already integrated with the Trading API's order management calls, this change shouldn't impact your integration unless you parse the existing order identifiers (e.g., <b>OrderID</b> or <b>OrderLineItemID</b>), or otherwise infer meaning from the format (e.g., differentiating between a single line item order versus a multiple line item order). Because we realize that some integrations may have logic that is dependent upon the old identifier format, eBay is rolling out this Trading API change with version control to support a transition period of approximately 9 months before applications must switch to the new format completely.
     *  <br><br>
     *  During the transition period, for developers/sellers using a Trading WSDL older than Version 1113, they can use the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header in API calls to control whether the new or old <b>OrderID</b> format is returned in call response payloads. To get the new <b>OrderID</b> format, the value of the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header must be set to <code>1113</code>. During the transition period and even after, the new and old <b>OrderID</b> formats will still be supported/accepted in all Trading API call request payloads. After the transition period (which will be announced), only the new <b>OrderID</b> format will be returned in all Trading API call response payloads, regardless of the Trading WSDL version used or specified compatibility level.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> For sellers integrated with the new order ID format, please note that the identifier for an order will change as it goes from unpaid to paid status. Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment. When using a <b>GetOrders</b> or <b>GetOrderTransactions</b> call to retrieve specific order(s), either of these order IDs (paid or unpaid status) can be used to retrieve an order.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderIDArray($index)
    {
        unset($this->orderIDArray[$index]);
    }

    /**
     * Gets as orderIDArray
     *
     * This container is used if the seller wants to search for one or more orders. An <b>OrderID</b> field is required for each order that is to be retrieved. Up to 20 <b>OrderID</b> fields can be used.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of June 2019, eBay has changed the format of order identifier values. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  For developers and sellers who are already integrated with the Trading API's order management calls, this change shouldn't impact your integration unless you parse the existing order identifiers (e.g., <b>OrderID</b> or <b>OrderLineItemID</b>), or otherwise infer meaning from the format (e.g., differentiating between a single line item order versus a multiple line item order). Because we realize that some integrations may have logic that is dependent upon the old identifier format, eBay is rolling out this Trading API change with version control to support a transition period of approximately 9 months before applications must switch to the new format completely.
     *  <br><br>
     *  During the transition period, for developers/sellers using a Trading WSDL older than Version 1113, they can use the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header in API calls to control whether the new or old <b>OrderID</b> format is returned in call response payloads. To get the new <b>OrderID</b> format, the value of the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header must be set to <code>1113</code>. During the transition period and even after, the new and old <b>OrderID</b> formats will still be supported/accepted in all Trading API call request payloads. After the transition period (which will be announced), only the new <b>OrderID</b> format will be returned in all Trading API call response payloads, regardless of the Trading WSDL version used or specified compatibility level.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> For sellers integrated with the new order ID format, please note that the identifier for an order will change as it goes from unpaid to paid status. Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment. When using a <b>GetOrders</b> or <b>GetOrderTransactions</b> call to retrieve specific order(s), either of these order IDs (paid or unpaid status) can be used to retrieve an order.
     *  </span>
     *
     * @return string[]
     */
    public function getOrderIDArray()
    {
        return $this->orderIDArray;
    }

    /**
     * Sets a new orderIDArray
     *
     * This container is used if the seller wants to search for one or more orders. An <b>OrderID</b> field is required for each order that is to be retrieved. Up to 20 <b>OrderID</b> fields can be used.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of June 2019, eBay has changed the format of order identifier values. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  For developers and sellers who are already integrated with the Trading API's order management calls, this change shouldn't impact your integration unless you parse the existing order identifiers (e.g., <b>OrderID</b> or <b>OrderLineItemID</b>), or otherwise infer meaning from the format (e.g., differentiating between a single line item order versus a multiple line item order). Because we realize that some integrations may have logic that is dependent upon the old identifier format, eBay is rolling out this Trading API change with version control to support a transition period of approximately 9 months before applications must switch to the new format completely.
     *  <br><br>
     *  During the transition period, for developers/sellers using a Trading WSDL older than Version 1113, they can use the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header in API calls to control whether the new or old <b>OrderID</b> format is returned in call response payloads. To get the new <b>OrderID</b> format, the value of the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header must be set to <code>1113</code>. During the transition period and even after, the new and old <b>OrderID</b> formats will still be supported/accepted in all Trading API call request payloads. After the transition period (which will be announced), only the new <b>OrderID</b> format will be returned in all Trading API call response payloads, regardless of the Trading WSDL version used or specified compatibility level.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> For sellers integrated with the new order ID format, please note that the identifier for an order will change as it goes from unpaid to paid status. Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment. When using a <b>GetOrders</b> or <b>GetOrderTransactions</b> call to retrieve specific order(s), either of these order IDs (paid or unpaid status) can be used to retrieve an order.
     *  </span>
     *
     * @param string $orderIDArray
     * @return self
     */
    public function setOrderIDArray(array $orderIDArray)
    {
        $this->orderIDArray = $orderIDArray;
        return $this;
    }

    /**
     * Gets as platform
     *
     * <span class="tablenote"><b>Note: </b> This field should no longer be used since its sole purpose was to allow the seller to filter between eBay orders and Half.com orders, and the Half.com site no longer exists.
     *  </span>
     *
     * @return string
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * Sets a new platform
     *
     * <span class="tablenote"><b>Note: </b> This field should no longer be used since its sole purpose was to allow the seller to filter between eBay orders and Half.com orders, and the Half.com site no longer exists.
     *  </span>
     *
     * @param string $platform
     * @return self
     */
    public function setPlatform($platform)
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * Gets as includeFinalValueFees
     *
     * This field is included and set to <code>true</code> if the user wants to view the Final Value Fee (FVF) for all order line items in the response. The Final Value Fee is returned in the <b>Transaction.FinalValueFee</b> field. The Final Value Fee is assessed right after the creation of an order line item.
     *  <br/>
     *
     * @return bool
     */
    public function getIncludeFinalValueFees()
    {
        return $this->includeFinalValueFees;
    }

    /**
     * Sets a new includeFinalValueFees
     *
     * This field is included and set to <code>true</code> if the user wants to view the Final Value Fee (FVF) for all order line items in the response. The Final Value Fee is returned in the <b>Transaction.FinalValueFee</b> field. The Final Value Fee is assessed right after the creation of an order line item.
     *  <br/>
     *
     * @param bool $includeFinalValueFees
     * @return self
     */
    public function setIncludeFinalValueFees($includeFinalValueFees)
    {
        $this->includeFinalValueFees = $includeFinalValueFees;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getItemTransactionIDArray();
        if (null !== $value && !empty($this->getItemTransactionIDArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemTransactionIDArray", array_map(function ($v) {
                return ["ItemTransactionID" => $v];
            }, $value));
        }
        $value = $this->getOrderIDArray();
        if (null !== $value && !empty($this->getOrderIDArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderIDArray", array_map(function ($v) {
                return ["OrderID" => $v];
            }, $value));
        }
        $value = $this->getPlatform();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Platform", $value);
        }
        $value = $this->getIncludeFinalValueFees();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IncludeFinalValueFees", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemTransactionIDArray', true);
        if (null !== $value && !empty($value)) {
            $this->setItemTransactionIDArray(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ItemTransactionIDType::fromKeyValue($v);
            }, $value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderIDArray', true);
        if (null !== $value && !empty($value)) {
            $this->setOrderIDArray($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Platform');
        if (null !== $value) {
            $this->setPlatform($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IncludeFinalValueFees');
        if (null !== $value) {
            $this->setIncludeFinalValueFees($value);
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
