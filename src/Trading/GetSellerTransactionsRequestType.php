<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetSellerTransactionsRequestType
 *
 * Retrieves a seller's order line item information. To retrieve order line items for another seller, the <b>GetItemTransactions</b>) call should be used. This call cannot retrieve sales older than 90 days old.
 *  <br><br>
 *  If one or more <b>SKU</b> values or the date range filters (<b>ModTimeFrom</b>/<b>ModTimeTo</b> or <b>NumberOfDays</b>) are not used, the <b>GetItemTransactions</b>) call will retrieve order line items created (or modified) within the last 30 days.
 * XSD Type: GetSellerTransactionsRequestType
 */
class GetSellerTransactionsRequestType extends AbstractRequestType
{
    /**
     * The <b>ModTimeFrom</b> and <b>ModTimeTo</b> fields are used to retrieve order line items that were created or modified within a specified date range. The <b>ModTimeFrom</b> field is the starting date range. All of the seller's order line items that were created or modified within this date range are returned in the output. The maximum date range that may be specified is 30 days. This value cannot be set back more than 90 days in the past, as this call cannot retrieve sales older than 90 days. This field is not applicable if the <b>NumberOfDays</b> date filter is used.
     *  <br><br>
     *  If you don't specify a <b>ModTimeFrom</b>/<b>ModTimeTo</b> filter, the <b>NumberOfDays</b> time filter is used and it defaults to 30 (days).
     *  <br>
     *  <span class="tablenote"><b>Note: </b> Please note that for a multiple line item order, all line items of that order that meet the filter criteria may be returned in the responses, even the line item(s) that were not actually modified. In other words, if any part of the order was modified, all line items of that order may be returned.
     *  </span>
     *
     * @var \DateTime $modTimeFrom
     */
    private $modTimeFrom = null;

    /**
     * The <b>ModTimeFrom</b> and <b>ModTimeTo</b> fields are used to retrieve order line items that were created or modified within a specified date range. The <b>ModTimeTo</b> field is the ending date range. All of the seller's order line items that were created or modified within this date range are returned in the output. The maximum date range that may be specified is 30 days.
     *  <br/><br/>
     *  If the <b>ModTimeFrom</b> field is
     *  used and the <b>ModTimeTo</b> field is omitted, the <b>ModTimeTo</b> value defaults to
     *  the present time or to 30 days past the <b>ModTimeFrom</b> value (if
     *  <b>ModTimeFrom</b> value is more than 30 days in the past). This field is not
     *  applicable if the <b>NumberOfDays</b> date filter is used.
     *  <br><br>
     *  If you don't specify a <b>ModTimeFrom</b>/<b>ModTimeTo</b> filter, the <b>NumberOfDays</b> time filter is used and it defaults to 30 (days).
     *  <br>
     *  <span class="tablenote"><b>Note: </b> Please note that for a multiple line item order, all line items of that order that meet the filter criteria may be returned in the responses, even the line item(s) that were not actually modified. In other words, if any part of the order was modified, all line items of that order may be returned.
     *  </span>
     *
     * @var \DateTime $modTimeTo
     */
    private $modTimeTo = null;

    /**
     * If many order line items are available to retrieve, you may need to call <b>GetSellerTransactions</b> multiple times to retrieve all the data. Each result set is returned as a page of order line items. Use the <b>Pagination</b> filters to control the maximum number of order line items to retrieve per page (i.e., per call), and the page number to retrieve.
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
     * This container is used to search for order line items generated from one or more product SKU values. The response will only include order line items for the seller's product(s) that are represented by the specified SKU value(s).
     *  <br> <br>
     *  If a user wants to retrieve order line items based on SKUs, the
     *  <b>InventoryTrackingMethod</b> must be set to <code>SKU</code>. The <b>InventoryTrackingMethod</b> value can be set when the seller lists the item through an <b>AddFixedPriceItem</b> call, or it can be set by including the <b>InventoryTrackingMethod</b> field in a <b>GetSellerTransactions</b> call and setting its value to <code>SKU</code>.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> SKU values must be defined for products in listings for this container to be applicable.
     *  </span>
     *
     * @var string[] $sKUArray
     */
    private $sKUArray = null;

    /**
     * <span class="tablenote"><b>Note: </b> This field should no longer be used since its sole purpose was to allow the seller to filter between eBay orders and Half.com orders, and the Half.com site no longer exists.
     *  </span>
     *
     * @var string $platform
     */
    private $platform = null;

    /**
     * This field is used to specify how many days (24-hour periods) back in the past you wish to retrieve order line items. All order line items created (or last modified) within this period are retrieved. This value can be set between 1 (day) and 30 (days), and defaults to 30 (days) if omitted from the call.
     *  <br/><br/>
     *  If the <b>NumberOfDays</b> filter is used, <b>ModTimeFrom</b> and <b>ModTimeTo</b> date range filters are ignored (if included in the same request).
     *  <br/>
     *
     * @var int $numberOfDays
     */
    private $numberOfDays = null;

    /**
     * This filter is used if the seller wishes to set/change the inventory tracking method. When creating a listing with the <b>AddFixedPriceItem</b> call (or relisting with <b>RelistFixedPriceItem</b> call), sellers can decide whether to track their inventory by Item ID (generated by eBay at listing time) or by seller-defined SKU value.
     *  <br><br>
     *  This field is needed (and its value must be set to <code>SKU</code>) if the seller wishes to retrieve order line items based on specified SKU values (specified through <b>SKUArray</b> container) and the current inventory tracking method is set to Item ID.
     *  <br><br>
     *  A seller can use a <b>GetItem</b> call for a listing (and look for the <b>Item.InventoryTrackingMethod</b> in the response) to see which inventory tracking method is used for the listing/product.
     *
     * @var string $inventoryTrackingMethod
     */
    private $inventoryTrackingMethod = null;

    /**
     * If this field is included in the call request and set to <code>true</code>, taxpayer identification information for the buyer is returned under the <b>BuyerTaxIdentifier</b> container.
     *  <br><br>
     *  Codice Fiscale is only applicable to buyers on the Italy and Spain sites. It is required that buyers on the Italy site provide their Codice Fiscale ID before buying an item, and sellers on the Spain site have the option of requiring buyers on the Spain site to provide their taxpayer ID.
     *
     * @var bool $includeCodiceFiscale
     */
    private $includeCodiceFiscale = null;

    /**
     * Gets as modTimeFrom
     *
     * The <b>ModTimeFrom</b> and <b>ModTimeTo</b> fields are used to retrieve order line items that were created or modified within a specified date range. The <b>ModTimeFrom</b> field is the starting date range. All of the seller's order line items that were created or modified within this date range are returned in the output. The maximum date range that may be specified is 30 days. This value cannot be set back more than 90 days in the past, as this call cannot retrieve sales older than 90 days. This field is not applicable if the <b>NumberOfDays</b> date filter is used.
     *  <br><br>
     *  If you don't specify a <b>ModTimeFrom</b>/<b>ModTimeTo</b> filter, the <b>NumberOfDays</b> time filter is used and it defaults to 30 (days).
     *  <br>
     *  <span class="tablenote"><b>Note: </b> Please note that for a multiple line item order, all line items of that order that meet the filter criteria may be returned in the responses, even the line item(s) that were not actually modified. In other words, if any part of the order was modified, all line items of that order may be returned.
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
     * The <b>ModTimeFrom</b> and <b>ModTimeTo</b> fields are used to retrieve order line items that were created or modified within a specified date range. The <b>ModTimeFrom</b> field is the starting date range. All of the seller's order line items that were created or modified within this date range are returned in the output. The maximum date range that may be specified is 30 days. This value cannot be set back more than 90 days in the past, as this call cannot retrieve sales older than 90 days. This field is not applicable if the <b>NumberOfDays</b> date filter is used.
     *  <br><br>
     *  If you don't specify a <b>ModTimeFrom</b>/<b>ModTimeTo</b> filter, the <b>NumberOfDays</b> time filter is used and it defaults to 30 (days).
     *  <br>
     *  <span class="tablenote"><b>Note: </b> Please note that for a multiple line item order, all line items of that order that meet the filter criteria may be returned in the responses, even the line item(s) that were not actually modified. In other words, if any part of the order was modified, all line items of that order may be returned.
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
     * The <b>ModTimeFrom</b> and <b>ModTimeTo</b> fields are used to retrieve order line items that were created or modified within a specified date range. The <b>ModTimeTo</b> field is the ending date range. All of the seller's order line items that were created or modified within this date range are returned in the output. The maximum date range that may be specified is 30 days.
     *  <br/><br/>
     *  If the <b>ModTimeFrom</b> field is
     *  used and the <b>ModTimeTo</b> field is omitted, the <b>ModTimeTo</b> value defaults to
     *  the present time or to 30 days past the <b>ModTimeFrom</b> value (if
     *  <b>ModTimeFrom</b> value is more than 30 days in the past). This field is not
     *  applicable if the <b>NumberOfDays</b> date filter is used.
     *  <br><br>
     *  If you don't specify a <b>ModTimeFrom</b>/<b>ModTimeTo</b> filter, the <b>NumberOfDays</b> time filter is used and it defaults to 30 (days).
     *  <br>
     *  <span class="tablenote"><b>Note: </b> Please note that for a multiple line item order, all line items of that order that meet the filter criteria may be returned in the responses, even the line item(s) that were not actually modified. In other words, if any part of the order was modified, all line items of that order may be returned.
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
     * The <b>ModTimeFrom</b> and <b>ModTimeTo</b> fields are used to retrieve order line items that were created or modified within a specified date range. The <b>ModTimeTo</b> field is the ending date range. All of the seller's order line items that were created or modified within this date range are returned in the output. The maximum date range that may be specified is 30 days.
     *  <br/><br/>
     *  If the <b>ModTimeFrom</b> field is
     *  used and the <b>ModTimeTo</b> field is omitted, the <b>ModTimeTo</b> value defaults to
     *  the present time or to 30 days past the <b>ModTimeFrom</b> value (if
     *  <b>ModTimeFrom</b> value is more than 30 days in the past). This field is not
     *  applicable if the <b>NumberOfDays</b> date filter is used.
     *  <br><br>
     *  If you don't specify a <b>ModTimeFrom</b>/<b>ModTimeTo</b> filter, the <b>NumberOfDays</b> time filter is used and it defaults to 30 (days).
     *  <br>
     *  <span class="tablenote"><b>Note: </b> Please note that for a multiple line item order, all line items of that order that meet the filter criteria may be returned in the responses, even the line item(s) that were not actually modified. In other words, if any part of the order was modified, all line items of that order may be returned.
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
     * Gets as pagination
     *
     * If many order line items are available to retrieve, you may need to call <b>GetSellerTransactions</b> multiple times to retrieve all the data. Each result set is returned as a page of order line items. Use the <b>Pagination</b> filters to control the maximum number of order line items to retrieve per page (i.e., per call), and the page number to retrieve.
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
     * If many order line items are available to retrieve, you may need to call <b>GetSellerTransactions</b> multiple times to retrieve all the data. Each result set is returned as a page of order line items. Use the <b>Pagination</b> filters to control the maximum number of order line items to retrieve per page (i.e., per call), and the page number to retrieve.
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
     * Adds as sKU
     *
     * This container is used to search for order line items generated from one or more product SKU values. The response will only include order line items for the seller's product(s) that are represented by the specified SKU value(s).
     *  <br> <br>
     *  If a user wants to retrieve order line items based on SKUs, the
     *  <b>InventoryTrackingMethod</b> must be set to <code>SKU</code>. The <b>InventoryTrackingMethod</b> value can be set when the seller lists the item through an <b>AddFixedPriceItem</b> call, or it can be set by including the <b>InventoryTrackingMethod</b> field in a <b>GetSellerTransactions</b> call and setting its value to <code>SKU</code>.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> SKU values must be defined for products in listings for this container to be applicable.
     *  </span>
     *
     * @return self
     * @param string $sKU
     */
    public function addToSKUArray($sKU)
    {
        $this->sKUArray[] = $sKU;
        return $this;
    }

    /**
     * isset sKUArray
     *
     * This container is used to search for order line items generated from one or more product SKU values. The response will only include order line items for the seller's product(s) that are represented by the specified SKU value(s).
     *  <br> <br>
     *  If a user wants to retrieve order line items based on SKUs, the
     *  <b>InventoryTrackingMethod</b> must be set to <code>SKU</code>. The <b>InventoryTrackingMethod</b> value can be set when the seller lists the item through an <b>AddFixedPriceItem</b> call, or it can be set by including the <b>InventoryTrackingMethod</b> field in a <b>GetSellerTransactions</b> call and setting its value to <code>SKU</code>.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> SKU values must be defined for products in listings for this container to be applicable.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSKUArray($index)
    {
        return isset($this->sKUArray[$index]);
    }

    /**
     * unset sKUArray
     *
     * This container is used to search for order line items generated from one or more product SKU values. The response will only include order line items for the seller's product(s) that are represented by the specified SKU value(s).
     *  <br> <br>
     *  If a user wants to retrieve order line items based on SKUs, the
     *  <b>InventoryTrackingMethod</b> must be set to <code>SKU</code>. The <b>InventoryTrackingMethod</b> value can be set when the seller lists the item through an <b>AddFixedPriceItem</b> call, or it can be set by including the <b>InventoryTrackingMethod</b> field in a <b>GetSellerTransactions</b> call and setting its value to <code>SKU</code>.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> SKU values must be defined for products in listings for this container to be applicable.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSKUArray($index)
    {
        unset($this->sKUArray[$index]);
    }

    /**
     * Gets as sKUArray
     *
     * This container is used to search for order line items generated from one or more product SKU values. The response will only include order line items for the seller's product(s) that are represented by the specified SKU value(s).
     *  <br> <br>
     *  If a user wants to retrieve order line items based on SKUs, the
     *  <b>InventoryTrackingMethod</b> must be set to <code>SKU</code>. The <b>InventoryTrackingMethod</b> value can be set when the seller lists the item through an <b>AddFixedPriceItem</b> call, or it can be set by including the <b>InventoryTrackingMethod</b> field in a <b>GetSellerTransactions</b> call and setting its value to <code>SKU</code>.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> SKU values must be defined for products in listings for this container to be applicable.
     *  </span>
     *
     * @return string[]
     */
    public function getSKUArray()
    {
        return $this->sKUArray;
    }

    /**
     * Sets a new sKUArray
     *
     * This container is used to search for order line items generated from one or more product SKU values. The response will only include order line items for the seller's product(s) that are represented by the specified SKU value(s).
     *  <br> <br>
     *  If a user wants to retrieve order line items based on SKUs, the
     *  <b>InventoryTrackingMethod</b> must be set to <code>SKU</code>. The <b>InventoryTrackingMethod</b> value can be set when the seller lists the item through an <b>AddFixedPriceItem</b> call, or it can be set by including the <b>InventoryTrackingMethod</b> field in a <b>GetSellerTransactions</b> call and setting its value to <code>SKU</code>.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> SKU values must be defined for products in listings for this container to be applicable.
     *  </span>
     *
     * @param string $sKUArray
     * @return self
     */
    public function setSKUArray(array $sKUArray)
    {
        $this->sKUArray = $sKUArray;
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
     * Gets as numberOfDays
     *
     * This field is used to specify how many days (24-hour periods) back in the past you wish to retrieve order line items. All order line items created (or last modified) within this period are retrieved. This value can be set between 1 (day) and 30 (days), and defaults to 30 (days) if omitted from the call.
     *  <br/><br/>
     *  If the <b>NumberOfDays</b> filter is used, <b>ModTimeFrom</b> and <b>ModTimeTo</b> date range filters are ignored (if included in the same request).
     *  <br/>
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
     * This field is used to specify how many days (24-hour periods) back in the past you wish to retrieve order line items. All order line items created (or last modified) within this period are retrieved. This value can be set between 1 (day) and 30 (days), and defaults to 30 (days) if omitted from the call.
     *  <br/><br/>
     *  If the <b>NumberOfDays</b> filter is used, <b>ModTimeFrom</b> and <b>ModTimeTo</b> date range filters are ignored (if included in the same request).
     *  <br/>
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
     * Gets as inventoryTrackingMethod
     *
     * This filter is used if the seller wishes to set/change the inventory tracking method. When creating a listing with the <b>AddFixedPriceItem</b> call (or relisting with <b>RelistFixedPriceItem</b> call), sellers can decide whether to track their inventory by Item ID (generated by eBay at listing time) or by seller-defined SKU value.
     *  <br><br>
     *  This field is needed (and its value must be set to <code>SKU</code>) if the seller wishes to retrieve order line items based on specified SKU values (specified through <b>SKUArray</b> container) and the current inventory tracking method is set to Item ID.
     *  <br><br>
     *  A seller can use a <b>GetItem</b> call for a listing (and look for the <b>Item.InventoryTrackingMethod</b> in the response) to see which inventory tracking method is used for the listing/product.
     *
     * @return string
     */
    public function getInventoryTrackingMethod()
    {
        return $this->inventoryTrackingMethod;
    }

    /**
     * Sets a new inventoryTrackingMethod
     *
     * This filter is used if the seller wishes to set/change the inventory tracking method. When creating a listing with the <b>AddFixedPriceItem</b> call (or relisting with <b>RelistFixedPriceItem</b> call), sellers can decide whether to track their inventory by Item ID (generated by eBay at listing time) or by seller-defined SKU value.
     *  <br><br>
     *  This field is needed (and its value must be set to <code>SKU</code>) if the seller wishes to retrieve order line items based on specified SKU values (specified through <b>SKUArray</b> container) and the current inventory tracking method is set to Item ID.
     *  <br><br>
     *  A seller can use a <b>GetItem</b> call for a listing (and look for the <b>Item.InventoryTrackingMethod</b> in the response) to see which inventory tracking method is used for the listing/product.
     *
     * @param string $inventoryTrackingMethod
     * @return self
     */
    public function setInventoryTrackingMethod($inventoryTrackingMethod)
    {
        $this->inventoryTrackingMethod = $inventoryTrackingMethod;
        return $this;
    }

    /**
     * Gets as includeCodiceFiscale
     *
     * If this field is included in the call request and set to <code>true</code>, taxpayer identification information for the buyer is returned under the <b>BuyerTaxIdentifier</b> container.
     *  <br><br>
     *  Codice Fiscale is only applicable to buyers on the Italy and Spain sites. It is required that buyers on the Italy site provide their Codice Fiscale ID before buying an item, and sellers on the Spain site have the option of requiring buyers on the Spain site to provide their taxpayer ID.
     *
     * @return bool
     */
    public function getIncludeCodiceFiscale()
    {
        return $this->includeCodiceFiscale;
    }

    /**
     * Sets a new includeCodiceFiscale
     *
     * If this field is included in the call request and set to <code>true</code>, taxpayer identification information for the buyer is returned under the <b>BuyerTaxIdentifier</b> container.
     *  <br><br>
     *  Codice Fiscale is only applicable to buyers on the Italy and Spain sites. It is required that buyers on the Italy site provide their Codice Fiscale ID before buying an item, and sellers on the Spain site have the option of requiring buyers on the Spain site to provide their taxpayer ID.
     *
     * @param bool $includeCodiceFiscale
     * @return self
     */
    public function setIncludeCodiceFiscale($includeCodiceFiscale)
    {
        $this->includeCodiceFiscale = $includeCodiceFiscale;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getModTimeFrom();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ModTimeFrom", $value);
        }
        $value = $this->getModTimeTo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ModTimeTo", $value);
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
        $value = $this->getSKUArray();
        if (null !== $value && !empty($this->getSKUArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SKUArray", array_map(function ($v) {return ["SKU" => $v];}, $value));
        }
        $value = $this->getPlatform();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Platform", $value);
        }
        $value = $this->getNumberOfDays();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NumberOfDays", $value);
        }
        $value = $this->getInventoryTrackingMethod();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InventoryTrackingMethod", $value);
        }
        $value = $this->getIncludeCodiceFiscale();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IncludeCodiceFiscale", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ModTimeFrom');
        if (null !== $value) {
            $this->setModTimeFrom(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ModTimeTo');
        if (null !== $value) {
            $this->setModTimeTo(new \DateTime($value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SKUArray', true);
        if (null !== $value && !empty($value)) {
            $this->setSKUArray($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Platform');
        if (null !== $value) {
            $this->setPlatform($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NumberOfDays');
        if (null !== $value) {
            $this->setNumberOfDays($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InventoryTrackingMethod');
        if (null !== $value) {
            $this->setInventoryTrackingMethod($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IncludeCodiceFiscale');
        if (null !== $value) {
            $this->setIncludeCodiceFiscale($value);
        }
    }
}
