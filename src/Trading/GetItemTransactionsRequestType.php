<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetItemTransactionsRequestType
 *
 * This call retrieves details on one or more order line items for a specified eBay listing. Auctions and single-quantity, fixed-price listings can only have one order line item, but a multiple-quantity and/or multiple-variation, fixed-priced listing can have numerous order line items.
 *  <br><br>
 *  To find one or more order line items for an eBay listing, an <b>ItemID</b> value can be passed in. If a user wanted to retrieve a specific order line item, an <b>ItemID</b> value and a an <b>TransactionID</b> value can be passed in, or an <b>OrderLineItemID</b> value can be passed in instead of an <b>ItemID</b>/<b>TransactionID</b> pair.
 *  <br><br>
 *  The <b>NumberOfDays</b> or the <b>ModTimeFrom</b> and <b>ModTimeTo</b> date range filters can be used to retrieve order line items generated (or last modified) within a specific range of time. The maximum date range that can be set is 30 days, and the <b>ModTimeFrom</b> date value cannot be set any further back than 90 days in the past. If no date range filters are used, all order line items (associated with the specified listing) generated (or last modified) in the last 30 days are retrieved. Date ranges are generally only used for multiple-quantity or multiple-variation, fixed-price listings that can have multiple order line items.
 *  <br><br>
 *  There are also pagination filters available that allow the user to control how many and which order line items are returned on each page of a results set.
 * XSD Type: GetItemTransactionsRequestType
 */
class GetItemTransactionsRequestType extends AbstractRequestType
{
    /**
     * Unique identifier for an eBay listing. A listing can have multiple order line items, but only one <b>ItemID</b>. When you use <b>ItemID</b> alone, eBay returns all order line items that are associated with the <b>ItemID</b>. If you pair <b>ItemID</b> with a specific <b>TransactionID</b>, data on a specific order line item is returned. An <b>OrderLineItemID</b> value can be used instead of an <b>ItemID</b>/<b>TransactionID</b> pair to identify an order line item, and if an <b>OrderLineItemID</b> is specified in the request, any <b>ItemID</b>/<b>TransactionID</b> pair specified in the same request is ignored.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  <b>GetItemTransactions</b> doesn't support SKU as an input because this
     *  call requires an identifier that is unique across your active
     *  and ended listings. Even when <b>InventoryTrackingMethod</b> is set to
     *  <b>SKU</b> in a listing, the SKU is only unique across your active
     *  listings (not your ended listings). To retrieve order line items
     *  by SKU, use <b>GetSellerTransactions</b> or <b>GetOrderTransactions</b> instead.
     *  </span>
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * The <b>ModTimeFrom</b> and <b>ModTimeTo</b> fields specify a date range for retrieving order line items associated with the specified <b>ItemID</b> value. The <b>ModTimeFrom</b> field is the starting date range. All of the listing's order line items that were generated (or last modified)within this date range are returned in the output. The maximum date range that may be specified is 30 days. This value cannot be set back more than 90 days in the past, as this call cannot retrieve sales older than 90 days old. The maximum date range that may be specified is 30 days. This field is not applicable (and is ignored) if the user is looking for a specific order line item by either using an <b>ItemID</b>/<b>TransactionID</b> pair, or an <b>OrderLineItemID</b> value.
     *
     * @var \DateTime $modTimeFrom
     */
    private $modTimeFrom = null;

    /**
     * The <b>ModTimeFrom</b> and <b>ModTimeTo</b> fields specify a date range for retrieving order line items associated with the specified <b>ItemID</b> value. The <b>ModTimeTo</b> field is the ending date range. All eBay order line items that were generated (or last modified) within this date range are returned in the output. The maximum date range that may be specified is 30 days. If the <b>ModTimeFrom</b> field is used and the <b>ModTimeTo</b> field is omitted, the <b>ModTimeTo</b> value defaults to the present time or to 30 days after the date specified with the <b>ModTimeFrom</b> value (if <b>ModTimeFrom</b> value is more than 30 days in the past). This field is not applicable (and is ignored) if the user is looking for a specific order line item by either using an <b>ItemID</b>/<b>TransactionID</b> pair, or an <b>OrderLineItemID</b> value.
     *
     * @var \DateTime $modTimeTo
     */
    private $modTimeTo = null;

    /**
     * Include a <b>TransactionID</b> field in the request if you want to retrieve the data for a specific order line item for the listing specified in the <b>ItemID</b> field. This field is really only applicable for a multiple-quantity or multiple-variation, fixed-price listing that may have multiple sales. An auction listing or a single-quantity, fixed-price listing will only result in one order line item, so this field is not needed in these two cases. If an <b>OrderLineItemID</b> value is used instead to identify an order line item, this field is ignored.
     *  <br><br>
     *  If this field is used, any specified date filter is ignored.
     *  <br>
     *  <br>
     *  The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
     *
     * @var string $transactionID
     */
    private $transactionID = null;

    /**
     * This container controls how many order line items should be returned per page of data, as well as which page of data to return (if there are multiple pages of order line items). Use the <b>EntriesPerPage</b> property to control the number of order line items to return per call and the <b>PageNumber</b> property to specify the specific page of data to return. If multiple pages of order line items are returned based on input criteria and <b>Pagination</b> properties, <b>GetItemTransactions</b> will need to be called multiple times (with the <b>PageNumber</b> value being increased by 1 each time) to scroll through all results.
     *
     * @var \Nogrod\eBaySDK\Trading\PaginationType $pagination
     */
    private $pagination = null;

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
     * This field is included and set to <code>true</code> if the user wants to view order-level details, including the unique identifier of the order and the status of the order. The order-level details will be shown in the <b>ContainingOrder</b> container in the response.
     *  <br/>
     *
     * @var bool $includeContainingOrder
     */
    private $includeContainingOrder = null;

    /**
     * <span class="tablenote"><b>Note: </b> This field is should no longer be used, as its purpose in the past was to give the user the ability to retrieve only eBay marketplace order line items or only Half.com listings, and since the Half.com site no longer exists, this field is no longer relevant.
     *  </span>
     *
     * @var string $platform
     */
    private $platform = null;

    /**
     * This date range filter specifies the number of days (24-hour periods) in the past to search for order line items. All eBay order line items that were either created or modified within this period are returned in the response. If specified, <b>NumberOfDays</b> will override any date range specified with the <b>ModTimeFrom</b>/<b>ModTimeTo</b> date range filters. This field is not applicable if a specific order line item is specified either through an <b>ItemID</b><b>TransactionID</b> pair or an <b>OrderLineItemID</b> value.
     *
     * @var int $numberOfDays
     */
    private $numberOfDays = null;

    /**
     * If this field is included in the request and set to <code>true</code>, details on all variations defined in the specified multiple-variation listing are returned, including variations that have no sales. If this field is not included in the request or set to <code>false</code>, the variations with sales are still returned in separate <b>Transaction</b> nodes. This information is intended to help sellers to reconcile their local inventory with eBay's records, while processing order line items (without requiring a separate call to <b>GetItem</b>).
     *
     * @var bool $includeVariations
     */
    private $includeVariations = null;

    /**
     * A unique identifier for an eBay order line item. This identifier is created once there is a commitment to buy (bidder wins the auction, buyer clicks buy button, or buyer purchases item through <b>PlaceOffer</b> call). If you want to retrieve data on a
     *  specific order line item, you can use an <b>OrderLineItemID</b> value in the
     *  request instead of an <b>ItemID</b>/<b>TransactionID</b> pair. If an <b>OrderLineItemID</b> is
     *  provided, any specified date range filter is ignored.
     *
     * @var string $orderLineItemID
     */
    private $orderLineItemID = null;

    /**
     * Gets as itemID
     *
     * Unique identifier for an eBay listing. A listing can have multiple order line items, but only one <b>ItemID</b>. When you use <b>ItemID</b> alone, eBay returns all order line items that are associated with the <b>ItemID</b>. If you pair <b>ItemID</b> with a specific <b>TransactionID</b>, data on a specific order line item is returned. An <b>OrderLineItemID</b> value can be used instead of an <b>ItemID</b>/<b>TransactionID</b> pair to identify an order line item, and if an <b>OrderLineItemID</b> is specified in the request, any <b>ItemID</b>/<b>TransactionID</b> pair specified in the same request is ignored.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  <b>GetItemTransactions</b> doesn't support SKU as an input because this
     *  call requires an identifier that is unique across your active
     *  and ended listings. Even when <b>InventoryTrackingMethod</b> is set to
     *  <b>SKU</b> in a listing, the SKU is only unique across your active
     *  listings (not your ended listings). To retrieve order line items
     *  by SKU, use <b>GetSellerTransactions</b> or <b>GetOrderTransactions</b> instead.
     *  </span>
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
     * Unique identifier for an eBay listing. A listing can have multiple order line items, but only one <b>ItemID</b>. When you use <b>ItemID</b> alone, eBay returns all order line items that are associated with the <b>ItemID</b>. If you pair <b>ItemID</b> with a specific <b>TransactionID</b>, data on a specific order line item is returned. An <b>OrderLineItemID</b> value can be used instead of an <b>ItemID</b>/<b>TransactionID</b> pair to identify an order line item, and if an <b>OrderLineItemID</b> is specified in the request, any <b>ItemID</b>/<b>TransactionID</b> pair specified in the same request is ignored.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  <b>GetItemTransactions</b> doesn't support SKU as an input because this
     *  call requires an identifier that is unique across your active
     *  and ended listings. Even when <b>InventoryTrackingMethod</b> is set to
     *  <b>SKU</b> in a listing, the SKU is only unique across your active
     *  listings (not your ended listings). To retrieve order line items
     *  by SKU, use <b>GetSellerTransactions</b> or <b>GetOrderTransactions</b> instead.
     *  </span>
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
     * Gets as modTimeFrom
     *
     * The <b>ModTimeFrom</b> and <b>ModTimeTo</b> fields specify a date range for retrieving order line items associated with the specified <b>ItemID</b> value. The <b>ModTimeFrom</b> field is the starting date range. All of the listing's order line items that were generated (or last modified)within this date range are returned in the output. The maximum date range that may be specified is 30 days. This value cannot be set back more than 90 days in the past, as this call cannot retrieve sales older than 90 days old. The maximum date range that may be specified is 30 days. This field is not applicable (and is ignored) if the user is looking for a specific order line item by either using an <b>ItemID</b>/<b>TransactionID</b> pair, or an <b>OrderLineItemID</b> value.
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
     * The <b>ModTimeFrom</b> and <b>ModTimeTo</b> fields specify a date range for retrieving order line items associated with the specified <b>ItemID</b> value. The <b>ModTimeFrom</b> field is the starting date range. All of the listing's order line items that were generated (or last modified)within this date range are returned in the output. The maximum date range that may be specified is 30 days. This value cannot be set back more than 90 days in the past, as this call cannot retrieve sales older than 90 days old. The maximum date range that may be specified is 30 days. This field is not applicable (and is ignored) if the user is looking for a specific order line item by either using an <b>ItemID</b>/<b>TransactionID</b> pair, or an <b>OrderLineItemID</b> value.
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
     * The <b>ModTimeFrom</b> and <b>ModTimeTo</b> fields specify a date range for retrieving order line items associated with the specified <b>ItemID</b> value. The <b>ModTimeTo</b> field is the ending date range. All eBay order line items that were generated (or last modified) within this date range are returned in the output. The maximum date range that may be specified is 30 days. If the <b>ModTimeFrom</b> field is used and the <b>ModTimeTo</b> field is omitted, the <b>ModTimeTo</b> value defaults to the present time or to 30 days after the date specified with the <b>ModTimeFrom</b> value (if <b>ModTimeFrom</b> value is more than 30 days in the past). This field is not applicable (and is ignored) if the user is looking for a specific order line item by either using an <b>ItemID</b>/<b>TransactionID</b> pair, or an <b>OrderLineItemID</b> value.
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
     * The <b>ModTimeFrom</b> and <b>ModTimeTo</b> fields specify a date range for retrieving order line items associated with the specified <b>ItemID</b> value. The <b>ModTimeTo</b> field is the ending date range. All eBay order line items that were generated (or last modified) within this date range are returned in the output. The maximum date range that may be specified is 30 days. If the <b>ModTimeFrom</b> field is used and the <b>ModTimeTo</b> field is omitted, the <b>ModTimeTo</b> value defaults to the present time or to 30 days after the date specified with the <b>ModTimeFrom</b> value (if <b>ModTimeFrom</b> value is more than 30 days in the past). This field is not applicable (and is ignored) if the user is looking for a specific order line item by either using an <b>ItemID</b>/<b>TransactionID</b> pair, or an <b>OrderLineItemID</b> value.
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
     * Gets as transactionID
     *
     * Include a <b>TransactionID</b> field in the request if you want to retrieve the data for a specific order line item for the listing specified in the <b>ItemID</b> field. This field is really only applicable for a multiple-quantity or multiple-variation, fixed-price listing that may have multiple sales. An auction listing or a single-quantity, fixed-price listing will only result in one order line item, so this field is not needed in these two cases. If an <b>OrderLineItemID</b> value is used instead to identify an order line item, this field is ignored.
     *  <br><br>
     *  If this field is used, any specified date filter is ignored.
     *  <br>
     *  <br>
     *  The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
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
     * Include a <b>TransactionID</b> field in the request if you want to retrieve the data for a specific order line item for the listing specified in the <b>ItemID</b> field. This field is really only applicable for a multiple-quantity or multiple-variation, fixed-price listing that may have multiple sales. An auction listing or a single-quantity, fixed-price listing will only result in one order line item, so this field is not needed in these two cases. If an <b>OrderLineItemID</b> value is used instead to identify an order line item, this field is ignored.
     *  <br><br>
     *  If this field is used, any specified date filter is ignored.
     *  <br>
     *  <br>
     *  The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
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
     * Gets as pagination
     *
     * This container controls how many order line items should be returned per page of data, as well as which page of data to return (if there are multiple pages of order line items). Use the <b>EntriesPerPage</b> property to control the number of order line items to return per call and the <b>PageNumber</b> property to specify the specific page of data to return. If multiple pages of order line items are returned based on input criteria and <b>Pagination</b> properties, <b>GetItemTransactions</b> will need to be called multiple times (with the <b>PageNumber</b> value being increased by 1 each time) to scroll through all results.
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
     * This container controls how many order line items should be returned per page of data, as well as which page of data to return (if there are multiple pages of order line items). Use the <b>EntriesPerPage</b> property to control the number of order line items to return per call and the <b>PageNumber</b> property to specify the specific page of data to return. If multiple pages of order line items are returned based on input criteria and <b>Pagination</b> properties, <b>GetItemTransactions</b> will need to be called multiple times (with the <b>PageNumber</b> value being increased by 1 each time) to scroll through all results.
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
     * Gets as includeContainingOrder
     *
     * This field is included and set to <code>true</code> if the user wants to view order-level details, including the unique identifier of the order and the status of the order. The order-level details will be shown in the <b>ContainingOrder</b> container in the response.
     *  <br/>
     *
     * @return bool
     */
    public function getIncludeContainingOrder()
    {
        return $this->includeContainingOrder;
    }

    /**
     * Sets a new includeContainingOrder
     *
     * This field is included and set to <code>true</code> if the user wants to view order-level details, including the unique identifier of the order and the status of the order. The order-level details will be shown in the <b>ContainingOrder</b> container in the response.
     *  <br/>
     *
     * @param bool $includeContainingOrder
     * @return self
     */
    public function setIncludeContainingOrder($includeContainingOrder)
    {
        $this->includeContainingOrder = $includeContainingOrder;
        return $this;
    }

    /**
     * Gets as platform
     *
     * <span class="tablenote"><b>Note: </b> This field is should no longer be used, as its purpose in the past was to give the user the ability to retrieve only eBay marketplace order line items or only Half.com listings, and since the Half.com site no longer exists, this field is no longer relevant.
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
     * <span class="tablenote"><b>Note: </b> This field is should no longer be used, as its purpose in the past was to give the user the ability to retrieve only eBay marketplace order line items or only Half.com listings, and since the Half.com site no longer exists, this field is no longer relevant.
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
     * Gets as numberOfDays
     *
     * This date range filter specifies the number of days (24-hour periods) in the past to search for order line items. All eBay order line items that were either created or modified within this period are returned in the response. If specified, <b>NumberOfDays</b> will override any date range specified with the <b>ModTimeFrom</b>/<b>ModTimeTo</b> date range filters. This field is not applicable if a specific order line item is specified either through an <b>ItemID</b><b>TransactionID</b> pair or an <b>OrderLineItemID</b> value.
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
     * This date range filter specifies the number of days (24-hour periods) in the past to search for order line items. All eBay order line items that were either created or modified within this period are returned in the response. If specified, <b>NumberOfDays</b> will override any date range specified with the <b>ModTimeFrom</b>/<b>ModTimeTo</b> date range filters. This field is not applicable if a specific order line item is specified either through an <b>ItemID</b><b>TransactionID</b> pair or an <b>OrderLineItemID</b> value.
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
     * Gets as includeVariations
     *
     * If this field is included in the request and set to <code>true</code>, details on all variations defined in the specified multiple-variation listing are returned, including variations that have no sales. If this field is not included in the request or set to <code>false</code>, the variations with sales are still returned in separate <b>Transaction</b> nodes. This information is intended to help sellers to reconcile their local inventory with eBay's records, while processing order line items (without requiring a separate call to <b>GetItem</b>).
     *
     * @return bool
     */
    public function getIncludeVariations()
    {
        return $this->includeVariations;
    }

    /**
     * Sets a new includeVariations
     *
     * If this field is included in the request and set to <code>true</code>, details on all variations defined in the specified multiple-variation listing are returned, including variations that have no sales. If this field is not included in the request or set to <code>false</code>, the variations with sales are still returned in separate <b>Transaction</b> nodes. This information is intended to help sellers to reconcile their local inventory with eBay's records, while processing order line items (without requiring a separate call to <b>GetItem</b>).
     *
     * @param bool $includeVariations
     * @return self
     */
    public function setIncludeVariations($includeVariations)
    {
        $this->includeVariations = $includeVariations;
        return $this;
    }

    /**
     * Gets as orderLineItemID
     *
     * A unique identifier for an eBay order line item. This identifier is created once there is a commitment to buy (bidder wins the auction, buyer clicks buy button, or buyer purchases item through <b>PlaceOffer</b> call). If you want to retrieve data on a
     *  specific order line item, you can use an <b>OrderLineItemID</b> value in the
     *  request instead of an <b>ItemID</b>/<b>TransactionID</b> pair. If an <b>OrderLineItemID</b> is
     *  provided, any specified date range filter is ignored.
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
     * A unique identifier for an eBay order line item. This identifier is created once there is a commitment to buy (bidder wins the auction, buyer clicks buy button, or buyer purchases item through <b>PlaceOffer</b> call). If you want to retrieve data on a
     *  specific order line item, you can use an <b>OrderLineItemID</b> value in the
     *  request instead of an <b>ItemID</b>/<b>TransactionID</b> pair. If an <b>OrderLineItemID</b> is
     *  provided, any specified date range filter is ignored.
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
        $value = $this->getModTimeFrom();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ModTimeFrom", $value);
        }
        $value = $this->getModTimeTo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ModTimeTo", $value);
        }
        $value = $this->getTransactionID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TransactionID", $value);
        }
        $value = $this->getPagination();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Pagination", $value);
        }
        $value = $this->getIncludeFinalValueFee();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IncludeFinalValueFee", $value);
        }
        $value = $this->getIncludeContainingOrder();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IncludeContainingOrder", $value);
        }
        $value = $this->getPlatform();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Platform", $value);
        }
        $value = $this->getNumberOfDays();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NumberOfDays", $value);
        }
        $value = $this->getIncludeVariations();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IncludeVariations", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ModTimeFrom');
        if (null !== $value) {
            $this->setModTimeFrom(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ModTimeTo');
        if (null !== $value) {
            $this->setModTimeTo(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TransactionID');
        if (null !== $value) {
            $this->setTransactionID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Pagination');
        if (null !== $value) {
            $this->setPagination(\Nogrod\eBaySDK\Trading\PaginationType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IncludeFinalValueFee');
        if (null !== $value) {
            $this->setIncludeFinalValueFee($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IncludeContainingOrder');
        if (null !== $value) {
            $this->setIncludeContainingOrder($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Platform');
        if (null !== $value) {
            $this->setPlatform($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NumberOfDays');
        if (null !== $value) {
            $this->setNumberOfDays($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IncludeVariations');
        if (null !== $value) {
            $this->setIncludeVariations($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderLineItemID');
        if (null !== $value) {
            $this->setOrderLineItemID($value);
        }
    }
}
