<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetOrdersRequestType
 *
 * Retrieves the orders for which the authenticated user is a participant, either as the buyer or the seller. The call returns all the orders that meet the request criteria. Orders older than 90 days old will not be returned.
 * XSD Type: GetOrdersRequestType
 */
class GetOrdersRequestType extends AbstractRequestType
{
    /**
     * This container is used if the user wants to retrieve one or more specific orders in which they are involved as either the seller or buyer. If one or more order IDs are specified in this container, any order role, order status, or date range filters are ignored if specified in the request.
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
     * The <b>CreateTimeFrom</b> and <b>CreateTimeTo</b> fields specify a date range for retrieving orders that were created during this time period. The <b>CreateTimeFrom</b> field is the starting date range. All eBay orders that were created within this date range are returned in the output. The maximum date range that may be specified with the <b>CreateTimeFrom</b> and <b>CreateTimeTo</b> fields is 90 days. <b>CreateTimeFrom</b>/<b>CreateTimeTo</b> date filters are ignored if the <b>NumberOfDays</b> date filter is used in the request, or if one or more order IDs are passed in the request. This value cannot be set back more than 90 days in the past, as this call cannot retrieve sales older than 90 days old.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Unless one or more <b>OrderID</b> values are used, one of the three available date range filters must be used.
     *  </span>
     *
     * @var \DateTime $createTimeFrom
     */
    private $createTimeFrom = null;

    /**
     * The <b>CreateTimeFrom</b> and <b>CreateTimeTo</b> fields specify a date range for retrieving orders that were created during this time period. The <b>CreateTimeTo</b> field is the ending date range. All eBay orders that were created within this date range are returned in the output. The maximum date range that may be specified with the <b>CreateTimeFrom</b> and <b>CreateTimeTo</b> fields is 90 days. If the <b>CreateTimeFrom</b> field is used and the <b>CreateTimeTo</b> field is omitted, the "TimeTo" value defaults to the present time or to 90 days past the <b>CreateTimeFrom</b> value (if <b>CreateTimeFrom</b> value is more than 90 days in the past). <b>CreateTimeFrom</b>/<b>CreateTimeTo</b> date filters are ignored if the <b>NumberOfDays</b> date filter is used in the request, or if one or more order IDs are passed in the request.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong> If a <b>GetOrders</b> call is made within a few seconds after the creation of a multiple line item order, the caller runs the risk of retrieving orders that are in an inconsistent state, since the order consolidation involved in a multiple line item order may not have been completed. For this reason, it is recommended that sellers include the <b>CreateTimeTo</b> field in the call, and set its value to: <i>Current Time</i> - 2 minutes.
     *  </span>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Unless one or more <b>OrderID</b> values are used, one of the three available date range filters must be used.
     *  </span>
     *
     * @var \DateTime $createTimeTo
     */
    private $createTimeTo = null;

    /**
     * This filter is used to toggle between retrieving orders based on the role of the user (seller or buyer). The order role defaults to <code>Seller</code> if this field is not used. If this field is used with a date filter, returned orders must satisfy both the date range and the <b>OrderRole</b> value.
     *  <br>
     *
     * @var string $orderRole
     */
    private $orderRole = null;

    /**
     * The field is used to retrieve eBay orders that are in a specific state. If this field is used with a date filter, only orders that satisfy both the date range and the <b>OrderStatus</b> value are retrieved. <br><br> If one or more <b>OrderID</b> values are specified through the <b>OrderIDArray</b> container, the <b>OrderStatus</b> field should not be used, and it is ignored if it is used. If an <b>OrderStatus</b> value is not used and no <b>OrderID</b> values are specified, orders in all states are returned.
     *  <br>
     *
     * @var string $orderStatus
     */
    private $orderStatus = null;

    /**
     * <span class="tablenote"><b>Note: </b> This field's purpose was to allow the seller to retrieve only Half.com listings. Since the Half.com site has been shut down, this field is no longer applicable.
     *  </span>
     *
     * @var string $listingType
     */
    private $listingType = null;

    /**
     * If many orders are available to retrieve, you may need to call <b>GetOrders</b> multiple times to retrieve all the data. Each result set is returned as a page of orders. Use the <b>Pagination</b> filters to control the maximum number of orders to retrieve per page (i.e., per call), and the page number to retrieve.
     *
     * @var \Nogrod\eBaySDK\Trading\PaginationType $pagination
     */
    private $pagination = null;

    /**
     * The <b>ModTimeFrom</b> and <b>ModTimeTo</b> fields specify a date range for retrieving existing orders that have been modified within this time period (for example, <code>Incomplete</code> status to <code>Pending</code> status or <code>Pending</code> status to <code>Complete</code> status). The <b>ModTimeFrom</b> field is the starting date range. All eBay orders that were last modified within this date range are returned in the output. Unlike the <b>CreateTimeFrom</b>/<b>CreateTimeTo</b> filters, which may cover a maximum period of 90 days, the maximum date range that may be specified with the <b>ModTimeFrom</b> and <b>ModTimeTo</b> fields is only 30 days. This value cannot be set back more than 90 days in the past, as this call cannot retrieve sales older than 90 days old. <b>ModTimeFrom</b>/<b>ModTimeTo</b> date filters are ignored if the <b>CreateTimeFrom</b>/<b>CreateTimeTo</b> or <b>NumberOfDays</b> date filters are used in the request, or if one or more order IDs are passed in the request.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Unless one or more <b>OrderID</b> values are used, one of the three available date range filters must be used.
     *  </span>
     *
     * @var \DateTime $modTimeFrom
     */
    private $modTimeFrom = null;

    /**
     * The <b>ModTimeFrom</b> and <b>ModTimeTo</b> fields specify a date range for retrieving existing orders that have been modified within this time window (for example, <code>Incomplete</code> status to <code>Pending</code> status or <code>Pending</code> status to <code>Complete</code> status). The <b>ModTimeTo</b> field is the ending date range. All eBay orders that were last modified within this date range are returned in the output. Unlike the <b>CreateTimeFrom</b>/<b>CreateTimeTo</b> filters, which may cover a maximum period of 90 days, the maximum date range that may be specified with the <b>ModTimeFrom</b> and <b>ModTimeTo</b> fields is 30 days. If the <b>ModTimeFrom</b> field is used and the <b>ModTimeTo</b> field is omitted, the 'TimeTo' value defaults to the present time (if <b>ModTimeFrom</b> value is less than 30 days in the past) or to 30 days past the <b>ModTimeFrom</b> value. <b>ModTimeFrom</b>/<b>ModTimeTo</b> date filters are ignored if the <b>CreateTimeFrom</b>/<b>CreateTimeTo</b> or <b>NumberOfDays</b> date filters are used in the request, or if one or more order IDs are passed in the request.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Unless one or more <b>OrderID</b> values are used, one of the three available date range filters must be used.
     *  </span>
     *
     * @var \DateTime $modTimeTo
     */
    private $modTimeTo = null;

    /**
     * This filter specifies the number of days (24-hour periods) in the past to search for orders. All eBay orders that were either created or modified within this period are returned in the output. This field cannot be used in conjunction with the <b>CreateTimeFrom</b>/<b>CreateTimeTo</b> or <b>ModTimeFrom</b>/<b>ModTimeTo</b> date filters.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  This date filter only allows you to retrieve orders created/modified within the last 30 days. So, if you wish to retrieve orders created and/or modified more than 30 days in the past, the <b>CreateTimeFrom</b>/<b>CreateTimeTo</b> or <b>ModTimeFrom</b>/<b>ModTimeTo</b> date filters should be used instead.
     *  </span>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Unless one or more <b>OrderID</b> values are used, one of the three available date range filters must be used.
     *  </span>
     *
     * @var int $numberOfDays
     */
    private $numberOfDays = null;

    /**
     * This field is included and set to <code>true</code> if the user wants to view the Final Value Fee (FVF) for all order line items in the response. The Final Value Fee is returned in the <b>Transaction.FinalValueFee</b> field. The Final Value Fee is assessed right after the creation of an order line item.
     *  <br>
     *  <br>
     *  See the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/selling-fees?id=4822" target="_blank">Selling fees</a> help page for more information about how Final Value Fees are calculated.
     *
     * @var bool $includeFinalValueFee
     */
    private $includeFinalValueFee = null;

    /**
     * This filter controls whether orders are retrieved in ascending order (oldest to newest according to modification date) or descending order (newest to oldest according to modification date). The default is <code>Ascending</code>, so the user will need to include this field and set it to <code>Descending</code> if the user wishes to view the most recent orders first in the retrieved output.
     *  <br>
     *
     * @var string $sortingOrder
     */
    private $sortingOrder = null;

    /**
     * Adds as orderID
     *
     * This container is used if the user wants to retrieve one or more specific orders in which they are involved as either the seller or buyer. If one or more order IDs are specified in this container, any order role, order status, or date range filters are ignored if specified in the request.
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
     * This container is used if the user wants to retrieve one or more specific orders in which they are involved as either the seller or buyer. If one or more order IDs are specified in this container, any order role, order status, or date range filters are ignored if specified in the request.
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
     * This container is used if the user wants to retrieve one or more specific orders in which they are involved as either the seller or buyer. If one or more order IDs are specified in this container, any order role, order status, or date range filters are ignored if specified in the request.
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
     * This container is used if the user wants to retrieve one or more specific orders in which they are involved as either the seller or buyer. If one or more order IDs are specified in this container, any order role, order status, or date range filters are ignored if specified in the request.
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
     * This container is used if the user wants to retrieve one or more specific orders in which they are involved as either the seller or buyer. If one or more order IDs are specified in this container, any order role, order status, or date range filters are ignored if specified in the request.
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
     * Gets as createTimeFrom
     *
     * The <b>CreateTimeFrom</b> and <b>CreateTimeTo</b> fields specify a date range for retrieving orders that were created during this time period. The <b>CreateTimeFrom</b> field is the starting date range. All eBay orders that were created within this date range are returned in the output. The maximum date range that may be specified with the <b>CreateTimeFrom</b> and <b>CreateTimeTo</b> fields is 90 days. <b>CreateTimeFrom</b>/<b>CreateTimeTo</b> date filters are ignored if the <b>NumberOfDays</b> date filter is used in the request, or if one or more order IDs are passed in the request. This value cannot be set back more than 90 days in the past, as this call cannot retrieve sales older than 90 days old.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Unless one or more <b>OrderID</b> values are used, one of the three available date range filters must be used.
     *  </span>
     *
     * @return \DateTime
     */
    public function getCreateTimeFrom()
    {
        return $this->createTimeFrom;
    }

    /**
     * Sets a new createTimeFrom
     *
     * The <b>CreateTimeFrom</b> and <b>CreateTimeTo</b> fields specify a date range for retrieving orders that were created during this time period. The <b>CreateTimeFrom</b> field is the starting date range. All eBay orders that were created within this date range are returned in the output. The maximum date range that may be specified with the <b>CreateTimeFrom</b> and <b>CreateTimeTo</b> fields is 90 days. <b>CreateTimeFrom</b>/<b>CreateTimeTo</b> date filters are ignored if the <b>NumberOfDays</b> date filter is used in the request, or if one or more order IDs are passed in the request. This value cannot be set back more than 90 days in the past, as this call cannot retrieve sales older than 90 days old.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Unless one or more <b>OrderID</b> values are used, one of the three available date range filters must be used.
     *  </span>
     *
     * @param \DateTime $createTimeFrom
     * @return self
     */
    public function setCreateTimeFrom(\DateTime $createTimeFrom)
    {
        $this->createTimeFrom = $createTimeFrom;
        return $this;
    }

    /**
     * Gets as createTimeTo
     *
     * The <b>CreateTimeFrom</b> and <b>CreateTimeTo</b> fields specify a date range for retrieving orders that were created during this time period. The <b>CreateTimeTo</b> field is the ending date range. All eBay orders that were created within this date range are returned in the output. The maximum date range that may be specified with the <b>CreateTimeFrom</b> and <b>CreateTimeTo</b> fields is 90 days. If the <b>CreateTimeFrom</b> field is used and the <b>CreateTimeTo</b> field is omitted, the "TimeTo" value defaults to the present time or to 90 days past the <b>CreateTimeFrom</b> value (if <b>CreateTimeFrom</b> value is more than 90 days in the past). <b>CreateTimeFrom</b>/<b>CreateTimeTo</b> date filters are ignored if the <b>NumberOfDays</b> date filter is used in the request, or if one or more order IDs are passed in the request.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong> If a <b>GetOrders</b> call is made within a few seconds after the creation of a multiple line item order, the caller runs the risk of retrieving orders that are in an inconsistent state, since the order consolidation involved in a multiple line item order may not have been completed. For this reason, it is recommended that sellers include the <b>CreateTimeTo</b> field in the call, and set its value to: <i>Current Time</i> - 2 minutes.
     *  </span>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Unless one or more <b>OrderID</b> values are used, one of the three available date range filters must be used.
     *  </span>
     *
     * @return \DateTime
     */
    public function getCreateTimeTo()
    {
        return $this->createTimeTo;
    }

    /**
     * Sets a new createTimeTo
     *
     * The <b>CreateTimeFrom</b> and <b>CreateTimeTo</b> fields specify a date range for retrieving orders that were created during this time period. The <b>CreateTimeTo</b> field is the ending date range. All eBay orders that were created within this date range are returned in the output. The maximum date range that may be specified with the <b>CreateTimeFrom</b> and <b>CreateTimeTo</b> fields is 90 days. If the <b>CreateTimeFrom</b> field is used and the <b>CreateTimeTo</b> field is omitted, the "TimeTo" value defaults to the present time or to 90 days past the <b>CreateTimeFrom</b> value (if <b>CreateTimeFrom</b> value is more than 90 days in the past). <b>CreateTimeFrom</b>/<b>CreateTimeTo</b> date filters are ignored if the <b>NumberOfDays</b> date filter is used in the request, or if one or more order IDs are passed in the request.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong> If a <b>GetOrders</b> call is made within a few seconds after the creation of a multiple line item order, the caller runs the risk of retrieving orders that are in an inconsistent state, since the order consolidation involved in a multiple line item order may not have been completed. For this reason, it is recommended that sellers include the <b>CreateTimeTo</b> field in the call, and set its value to: <i>Current Time</i> - 2 minutes.
     *  </span>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Unless one or more <b>OrderID</b> values are used, one of the three available date range filters must be used.
     *  </span>
     *
     * @param \DateTime $createTimeTo
     * @return self
     */
    public function setCreateTimeTo(\DateTime $createTimeTo)
    {
        $this->createTimeTo = $createTimeTo;
        return $this;
    }

    /**
     * Gets as orderRole
     *
     * This filter is used to toggle between retrieving orders based on the role of the user (seller or buyer). The order role defaults to <code>Seller</code> if this field is not used. If this field is used with a date filter, returned orders must satisfy both the date range and the <b>OrderRole</b> value.
     *  <br>
     *
     * @return string
     */
    public function getOrderRole()
    {
        return $this->orderRole;
    }

    /**
     * Sets a new orderRole
     *
     * This filter is used to toggle between retrieving orders based on the role of the user (seller or buyer). The order role defaults to <code>Seller</code> if this field is not used. If this field is used with a date filter, returned orders must satisfy both the date range and the <b>OrderRole</b> value.
     *  <br>
     *
     * @param string $orderRole
     * @return self
     */
    public function setOrderRole($orderRole)
    {
        $this->orderRole = $orderRole;
        return $this;
    }

    /**
     * Gets as orderStatus
     *
     * The field is used to retrieve eBay orders that are in a specific state. If this field is used with a date filter, only orders that satisfy both the date range and the <b>OrderStatus</b> value are retrieved. <br><br> If one or more <b>OrderID</b> values are specified through the <b>OrderIDArray</b> container, the <b>OrderStatus</b> field should not be used, and it is ignored if it is used. If an <b>OrderStatus</b> value is not used and no <b>OrderID</b> values are specified, orders in all states are returned.
     *  <br>
     *
     * @return string
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * Sets a new orderStatus
     *
     * The field is used to retrieve eBay orders that are in a specific state. If this field is used with a date filter, only orders that satisfy both the date range and the <b>OrderStatus</b> value are retrieved. <br><br> If one or more <b>OrderID</b> values are specified through the <b>OrderIDArray</b> container, the <b>OrderStatus</b> field should not be used, and it is ignored if it is used. If an <b>OrderStatus</b> value is not used and no <b>OrderID</b> values are specified, orders in all states are returned.
     *  <br>
     *
     * @param string $orderStatus
     * @return self
     */
    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus = $orderStatus;
        return $this;
    }

    /**
     * Gets as listingType
     *
     * <span class="tablenote"><b>Note: </b> This field's purpose was to allow the seller to retrieve only Half.com listings. Since the Half.com site has been shut down, this field is no longer applicable.
     *  </span>
     *
     * @return string
     */
    public function getListingType()
    {
        return $this->listingType;
    }

    /**
     * Sets a new listingType
     *
     * <span class="tablenote"><b>Note: </b> This field's purpose was to allow the seller to retrieve only Half.com listings. Since the Half.com site has been shut down, this field is no longer applicable.
     *  </span>
     *
     * @param string $listingType
     * @return self
     */
    public function setListingType($listingType)
    {
        $this->listingType = $listingType;
        return $this;
    }

    /**
     * Gets as pagination
     *
     * If many orders are available to retrieve, you may need to call <b>GetOrders</b> multiple times to retrieve all the data. Each result set is returned as a page of orders. Use the <b>Pagination</b> filters to control the maximum number of orders to retrieve per page (i.e., per call), and the page number to retrieve.
     *
     * @return \Nogrod\eBaySDK\Trading\PaginationType
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    /**
     * Sets a new pagination
     *
     * If many orders are available to retrieve, you may need to call <b>GetOrders</b> multiple times to retrieve all the data. Each result set is returned as a page of orders. Use the <b>Pagination</b> filters to control the maximum number of orders to retrieve per page (i.e., per call), and the page number to retrieve.
     *
     * @param \Nogrod\eBaySDK\Trading\PaginationType $pagination
     * @return self
     */
    public function setPagination(\Nogrod\eBaySDK\Trading\PaginationType $pagination)
    {
        $this->pagination = $pagination;
        return $this;
    }

    /**
     * Gets as modTimeFrom
     *
     * The <b>ModTimeFrom</b> and <b>ModTimeTo</b> fields specify a date range for retrieving existing orders that have been modified within this time period (for example, <code>Incomplete</code> status to <code>Pending</code> status or <code>Pending</code> status to <code>Complete</code> status). The <b>ModTimeFrom</b> field is the starting date range. All eBay orders that were last modified within this date range are returned in the output. Unlike the <b>CreateTimeFrom</b>/<b>CreateTimeTo</b> filters, which may cover a maximum period of 90 days, the maximum date range that may be specified with the <b>ModTimeFrom</b> and <b>ModTimeTo</b> fields is only 30 days. This value cannot be set back more than 90 days in the past, as this call cannot retrieve sales older than 90 days old. <b>ModTimeFrom</b>/<b>ModTimeTo</b> date filters are ignored if the <b>CreateTimeFrom</b>/<b>CreateTimeTo</b> or <b>NumberOfDays</b> date filters are used in the request, or if one or more order IDs are passed in the request.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Unless one or more <b>OrderID</b> values are used, one of the three available date range filters must be used.
     *  </span>
     *
     * @return \DateTime
     */
    public function getModTimeFrom()
    {
        return $this->modTimeFrom;
    }

    /**
     * Sets a new modTimeFrom
     *
     * The <b>ModTimeFrom</b> and <b>ModTimeTo</b> fields specify a date range for retrieving existing orders that have been modified within this time period (for example, <code>Incomplete</code> status to <code>Pending</code> status or <code>Pending</code> status to <code>Complete</code> status). The <b>ModTimeFrom</b> field is the starting date range. All eBay orders that were last modified within this date range are returned in the output. Unlike the <b>CreateTimeFrom</b>/<b>CreateTimeTo</b> filters, which may cover a maximum period of 90 days, the maximum date range that may be specified with the <b>ModTimeFrom</b> and <b>ModTimeTo</b> fields is only 30 days. This value cannot be set back more than 90 days in the past, as this call cannot retrieve sales older than 90 days old. <b>ModTimeFrom</b>/<b>ModTimeTo</b> date filters are ignored if the <b>CreateTimeFrom</b>/<b>CreateTimeTo</b> or <b>NumberOfDays</b> date filters are used in the request, or if one or more order IDs are passed in the request.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Unless one or more <b>OrderID</b> values are used, one of the three available date range filters must be used.
     *  </span>
     *
     * @param \DateTime $modTimeFrom
     * @return self
     */
    public function setModTimeFrom(\DateTime $modTimeFrom)
    {
        $this->modTimeFrom = $modTimeFrom;
        return $this;
    }

    /**
     * Gets as modTimeTo
     *
     * The <b>ModTimeFrom</b> and <b>ModTimeTo</b> fields specify a date range for retrieving existing orders that have been modified within this time window (for example, <code>Incomplete</code> status to <code>Pending</code> status or <code>Pending</code> status to <code>Complete</code> status). The <b>ModTimeTo</b> field is the ending date range. All eBay orders that were last modified within this date range are returned in the output. Unlike the <b>CreateTimeFrom</b>/<b>CreateTimeTo</b> filters, which may cover a maximum period of 90 days, the maximum date range that may be specified with the <b>ModTimeFrom</b> and <b>ModTimeTo</b> fields is 30 days. If the <b>ModTimeFrom</b> field is used and the <b>ModTimeTo</b> field is omitted, the 'TimeTo' value defaults to the present time (if <b>ModTimeFrom</b> value is less than 30 days in the past) or to 30 days past the <b>ModTimeFrom</b> value. <b>ModTimeFrom</b>/<b>ModTimeTo</b> date filters are ignored if the <b>CreateTimeFrom</b>/<b>CreateTimeTo</b> or <b>NumberOfDays</b> date filters are used in the request, or if one or more order IDs are passed in the request.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Unless one or more <b>OrderID</b> values are used, one of the three available date range filters must be used.
     *  </span>
     *
     * @return \DateTime
     */
    public function getModTimeTo()
    {
        return $this->modTimeTo;
    }

    /**
     * Sets a new modTimeTo
     *
     * The <b>ModTimeFrom</b> and <b>ModTimeTo</b> fields specify a date range for retrieving existing orders that have been modified within this time window (for example, <code>Incomplete</code> status to <code>Pending</code> status or <code>Pending</code> status to <code>Complete</code> status). The <b>ModTimeTo</b> field is the ending date range. All eBay orders that were last modified within this date range are returned in the output. Unlike the <b>CreateTimeFrom</b>/<b>CreateTimeTo</b> filters, which may cover a maximum period of 90 days, the maximum date range that may be specified with the <b>ModTimeFrom</b> and <b>ModTimeTo</b> fields is 30 days. If the <b>ModTimeFrom</b> field is used and the <b>ModTimeTo</b> field is omitted, the 'TimeTo' value defaults to the present time (if <b>ModTimeFrom</b> value is less than 30 days in the past) or to 30 days past the <b>ModTimeFrom</b> value. <b>ModTimeFrom</b>/<b>ModTimeTo</b> date filters are ignored if the <b>CreateTimeFrom</b>/<b>CreateTimeTo</b> or <b>NumberOfDays</b> date filters are used in the request, or if one or more order IDs are passed in the request.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Unless one or more <b>OrderID</b> values are used, one of the three available date range filters must be used.
     *  </span>
     *
     * @param \DateTime $modTimeTo
     * @return self
     */
    public function setModTimeTo(\DateTime $modTimeTo)
    {
        $this->modTimeTo = $modTimeTo;
        return $this;
    }

    /**
     * Gets as numberOfDays
     *
     * This filter specifies the number of days (24-hour periods) in the past to search for orders. All eBay orders that were either created or modified within this period are returned in the output. This field cannot be used in conjunction with the <b>CreateTimeFrom</b>/<b>CreateTimeTo</b> or <b>ModTimeFrom</b>/<b>ModTimeTo</b> date filters.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  This date filter only allows you to retrieve orders created/modified within the last 30 days. So, if you wish to retrieve orders created and/or modified more than 30 days in the past, the <b>CreateTimeFrom</b>/<b>CreateTimeTo</b> or <b>ModTimeFrom</b>/<b>ModTimeTo</b> date filters should be used instead.
     *  </span>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Unless one or more <b>OrderID</b> values are used, one of the three available date range filters must be used.
     *  </span>
     *
     * @return int
     */
    public function getNumberOfDays()
    {
        return $this->numberOfDays;
    }

    /**
     * Sets a new numberOfDays
     *
     * This filter specifies the number of days (24-hour periods) in the past to search for orders. All eBay orders that were either created or modified within this period are returned in the output. This field cannot be used in conjunction with the <b>CreateTimeFrom</b>/<b>CreateTimeTo</b> or <b>ModTimeFrom</b>/<b>ModTimeTo</b> date filters.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  This date filter only allows you to retrieve orders created/modified within the last 30 days. So, if you wish to retrieve orders created and/or modified more than 30 days in the past, the <b>CreateTimeFrom</b>/<b>CreateTimeTo</b> or <b>ModTimeFrom</b>/<b>ModTimeTo</b> date filters should be used instead.
     *  </span>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Unless one or more <b>OrderID</b> values are used, one of the three available date range filters must be used.
     *  </span>
     *
     * @param int $numberOfDays
     * @return self
     */
    public function setNumberOfDays($numberOfDays)
    {
        $this->numberOfDays = $numberOfDays;
        return $this;
    }

    /**
     * Gets as includeFinalValueFee
     *
     * This field is included and set to <code>true</code> if the user wants to view the Final Value Fee (FVF) for all order line items in the response. The Final Value Fee is returned in the <b>Transaction.FinalValueFee</b> field. The Final Value Fee is assessed right after the creation of an order line item.
     *  <br>
     *  <br>
     *  See the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/selling-fees?id=4822" target="_blank">Selling fees</a> help page for more information about how Final Value Fees are calculated.
     *
     * @return bool
     */
    public function getIncludeFinalValueFee()
    {
        return $this->includeFinalValueFee;
    }

    /**
     * Sets a new includeFinalValueFee
     *
     * This field is included and set to <code>true</code> if the user wants to view the Final Value Fee (FVF) for all order line items in the response. The Final Value Fee is returned in the <b>Transaction.FinalValueFee</b> field. The Final Value Fee is assessed right after the creation of an order line item.
     *  <br>
     *  <br>
     *  See the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/selling-fees?id=4822" target="_blank">Selling fees</a> help page for more information about how Final Value Fees are calculated.
     *
     * @param bool $includeFinalValueFee
     * @return self
     */
    public function setIncludeFinalValueFee($includeFinalValueFee)
    {
        $this->includeFinalValueFee = $includeFinalValueFee;
        return $this;
    }

    /**
     * Gets as sortingOrder
     *
     * This filter controls whether orders are retrieved in ascending order (oldest to newest according to modification date) or descending order (newest to oldest according to modification date). The default is <code>Ascending</code>, so the user will need to include this field and set it to <code>Descending</code> if the user wishes to view the most recent orders first in the retrieved output.
     *  <br>
     *
     * @return string
     */
    public function getSortingOrder()
    {
        return $this->sortingOrder;
    }

    /**
     * Sets a new sortingOrder
     *
     * This filter controls whether orders are retrieved in ascending order (oldest to newest according to modification date) or descending order (newest to oldest according to modification date). The default is <code>Ascending</code>, so the user will need to include this field and set it to <code>Descending</code> if the user wishes to view the most recent orders first in the retrieved output.
     *  <br>
     *
     * @param string $sortingOrder
     * @return self
     */
    public function setSortingOrder($sortingOrder)
    {
        $this->sortingOrder = $sortingOrder;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getOrderIDArray();
        if (null !== $value && !empty($this->getOrderIDArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderIDArray", array_map(function ($v) {
                return ["OrderID" => $v];
            }, $value));
        }
        $value = $this->getCreateTimeFrom();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CreateTimeFrom", $value);
        }
        $value = $this->getCreateTimeTo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CreateTimeTo", $value);
        }
        $value = $this->getOrderRole();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderRole", $value);
        }
        $value = $this->getOrderStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderStatus", $value);
        }
        $value = $this->getListingType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ListingType", $value);
        }
        $value = $this->getPagination();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Pagination", $value);
        }
        $value = $this->getModTimeFrom();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ModTimeFrom", $value);
        }
        $value = $this->getModTimeTo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ModTimeTo", $value);
        }
        $value = $this->getNumberOfDays();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NumberOfDays", $value);
        }
        $value = $this->getIncludeFinalValueFee();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IncludeFinalValueFee", $value);
        }
        $value = $this->getSortingOrder();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SortingOrder", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderIDArray', true);
        if (null !== $value && !empty($value)) {
            $this->setOrderIDArray($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CreateTimeFrom');
        if (null !== $value) {
            $this->setCreateTimeFrom(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CreateTimeTo');
        if (null !== $value) {
            $this->setCreateTimeTo(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderRole');
        if (null !== $value) {
            $this->setOrderRole($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderStatus');
        if (null !== $value) {
            $this->setOrderStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingType');
        if (null !== $value) {
            $this->setListingType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Pagination');
        if (null !== $value) {
            $this->setPagination(\Nogrod\eBaySDK\Trading\PaginationType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ModTimeFrom');
        if (null !== $value) {
            $this->setModTimeFrom(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ModTimeTo');
        if (null !== $value) {
            $this->setModTimeTo(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NumberOfDays');
        if (null !== $value) {
            $this->setNumberOfDays($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IncludeFinalValueFee');
        if (null !== $value) {
            $this->setIncludeFinalValueFee($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SortingOrder');
        if (null !== $value) {
            $this->setSortingOrder($value);
        }
    }
}
