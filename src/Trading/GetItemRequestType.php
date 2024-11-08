<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetItemRequestType
 *
 * The <b>GetItem</b> call returns listing data such as title, description, price information, user information, and so on, for the specified <b>ItemID</b>.
 * XSD Type: GetItemRequestType
 */
class GetItemRequestType extends AbstractRequestType
{
    /**
     * This field is used to identify the eBay listing by Item ID value.
     *  <br><br>
     *  <b>ItemID</b> is a required input in most cases. <b>SKU</b> can be used instead in certain
     *  cases (see the description of SKU). If both <b>ItemID</b> and <b>SKU</b> are specified for
     *  items where the inventory tracking method is <b>ItemID</b>, <b>ItemID</b> takes precedence.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * The seller can include this field and set its value to <code>true</code> if that seller wants to see how many prospective bidders/buyers currently have the item added to their Watch Lists. The Watch count is returned in the <b>WatchCount</b> field in the response.
     *  <br>
     *  <br>
     *  This field will only be returnd to the seller of the item.
     *
     * @var bool $includeWatchCount
     */
    private $includeWatchCount = null;

    /**
     * If this field is included and set to <code>true</code>, the call response includes the <b>ItemSpecifics</b> container
     *  if Item Specifics are defined for the listing.<br>
     *  <br>
     *  An Item Specific is any aspect that helps define/classify the item. Many eBay categories mandate including specific Item Specifics, so it is always a good idea to make a call to the <a href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory" target="_blank">getItemAspectsForCategory</a> method of the Taxonomy API to see what Item Specifics are required and which ones are recommended.<br>
     *  <br>
     *  Including this field and setting it to <code>true</code> will also return the <strong>UnitInfo</strong> container if applicable. The <strong>UnitInfo</strong> container will provide information about the weight, volume or other quantity measurement of a listed item. The European Union requires listings for certain types of products to include the price per unit so buyers can accurately compare prices. eBay uses the <strong>UnitType</strong> and <strong>UnitQuantity</strong> values and the item's listed price to calculate and display the per-unit price on eBay EU sites.
     *
     * @var bool $includeItemSpecifics
     */
    private $includeItemSpecifics = null;

    /**
     * The seller will include this field and set its value to <code>true</code> if the seller wishes to view the defined sales tax rates for the various jurisdictions in the country (generally, states and provinces). Information for each defined sales tax rate will be returned in the <b>TaxTable</b> container in the response.
     *  <br/><br/>
     *  Even if this field is included and set to <code>true</code>, no <b>TaxTable</b> container will be returned If no sales tax rates are defined for any tax jurisdiction in the seller's sales tax table.
     *  <br/><br/>
     *  Sales tax tables are only available for eBay US and Canada marketplaces. Sales tax rates can be added/modified in My eBay, through the <b>SetTaxTable</b> and <b>GetTaxTable</b> calls of the Trading API, or through the Sales Tax calls of the Account API.
     *
     * @var bool $includeTaxTable
     */
    private $includeTaxTable = null;

    /**
     * Retrieves an item that was listed by the user identified
     *  in AuthToken and that is being tracked by this SKU.<br>
     *  <br>
     *  A SKU (stock keeping unit) is an identifier defined by a seller.
     *  Some sellers use SKUs to track complex flows of products
     *  and information on the client side.
     *  eBay preserves the SKU on the item, enabling you
     *  to obtain it before and after an order line item is created.
     *  (SKU is recommended as an alternative to
     *  ApplicationData.)<br>
     *  <br>
     *  In <b>GetItem</b>, <b>SKU</b> can only be used to retrieve one of your
     *  own items, where you listed the item by using <b>AddFixedPriceItem</b>
     *  or <b>RelistFixedPriceItem</b>,
     *  and you set <b>Item.InventoryTrackingMethod</b> to <b>SKU</b> at
     *  the time the item was listed. (These criteria are necessary to
     *  uniquely identify the listing by a SKU.)<br>
     *  <br>
     *  Either <b>ItemID</b> or <b>SKU</b> is required in the request.
     *  If both are passed, they must refer to the same item,
     *  and that item must have <b>InventoryTrackingMethod</b> set to <b>SKU</b>.
     *
     * @var string $sKU
     */
    private $sKU = null;

    /**
     * Variation-level SKU that uniquely identifes a Variation within
     *  the listing identified by <b>ItemID</b>. Only applicable when the
     *  seller listed the item with Variation-level SKU (<b>Variation.SKU</b>)
     *  values. Retrieves all the usual <b>Item</b> fields, but limits the
     *  <b>Variations</b> content to the specified Variation.
     *  If not specified, the response includes all Variations.
     *
     * @var string $variationSKU
     */
    private $variationSKU = null;

    /**
     * Name-value pairs that identify one or more Variations within the
     *  listing identified by <b>ItemID</b>. Only applicable when the seller
     *  listed the item with Variations. Retrieves all the usual <b>Item</b>
     *  fields, but limits the Variations content to the specified
     *  Variation(s). If the specified pairs do not match any Variation,
     *  eBay returns all Variations.<br>
     *  <br>
     *  To retrieve only one variation, specify the full set of
     *  name/value pairs that match all the name-value pairs of one
     *  Variation. <br>
     *  <br>
     *  To retrieve multiple variations (using a wildcard),
     *  specify one or more name/value pairs that partially match the
     *  desired variations. For example, if the listing contains
     *  Variations for shirts in different colors and sizes, specify
     *  Color as Red (and no other name/value pairs) to retrieve
     *  all the red shirts in all sizes (but no other colors).
     *
     * @var \Nogrod\eBaySDK\Trading\NameValueListType[] $variationSpecifics
     */
    private $variationSpecifics = null;

    /**
     * A unique identifier for an order line item. An order line item is created
     *  when a buyer commits to purchasing an item.
     *  <br><br>
     *  Since you can change active multiple-quantity fixed-price listings even
     *  after one of the items has been purchased, the <b>TransactionID</b> is
     *  associated with a snapshot of the item data at the time of the purchase.
     *  <br><br>
     *  After one item in a multi-quantity listing has been sold, sellers can not
     *  change the values in the Title, Primary Category, Secondary Category,
     *  Listing Duration, and Listing Type fields. However, all other fields are
     *  editable.
     *  <br><br>
     *  Specifying a <b>TransactionID</b> in the <b>GetItem</b> request allows you to retrieve
     *  a snapshot of the listing as it was when the order line item was created.
     *  <br>
     *  <br>
     *  The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> Beginning in July 2024, non-zero transaction IDs will start being returned for auction listings. If necessary, update code to handle non-zero transaction IDs for auction transactions before this time.
     *  </span>
     *
     * @var string $transactionID
     */
    private $transactionID = null;

    /**
     * This field is used to specify whether or not to retrieve Parts
     *  Compatiblity information for a motor part or accessory listing. If this field is included and set to <code>true</code>, the <b>Item.ItemCompatibilityList</b> container will be returned if a Parts Compatibility list exists for the listing. A Parts Compatibility list is a list of motor vehicles that are compatible with the listed motor part or accesory item. If a Parts Compatibility list does not exist for the listing, this field will have no effect if it is included, regardless of its value (<code>true</code> or <code>false</code>).
     *  <br><br>
     *  If this field is included and set to <code>false</code> or omitted, but a Parts Compatibility list does exist for the listing, the <b>Item.ItemCompatibilityList</b> container will not be returned, but the <b>Item.ItemCompatibilityCount</b> field will be returned, and this field will simply indicate the quantity of motor vehicles that are compatible with the the listed motor part or accesory item.
     *  <br><br>
     *  Parts Compatibility lists are only applicable to motor parts and accessory categories on the sites that support eBay Motors - US, CA, UK, and DE.
     *
     * @var bool $includeItemCompatibilityList
     */
    private $includeItemCompatibilityList = null;

    /**
     * Gets as itemID
     *
     * This field is used to identify the eBay listing by Item ID value.
     *  <br><br>
     *  <b>ItemID</b> is a required input in most cases. <b>SKU</b> can be used instead in certain
     *  cases (see the description of SKU). If both <b>ItemID</b> and <b>SKU</b> are specified for
     *  items where the inventory tracking method is <b>ItemID</b>, <b>ItemID</b> takes precedence.
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
     * This field is used to identify the eBay listing by Item ID value.
     *  <br><br>
     *  <b>ItemID</b> is a required input in most cases. <b>SKU</b> can be used instead in certain
     *  cases (see the description of SKU). If both <b>ItemID</b> and <b>SKU</b> are specified for
     *  items where the inventory tracking method is <b>ItemID</b>, <b>ItemID</b> takes precedence.
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
     * Gets as includeWatchCount
     *
     * The seller can include this field and set its value to <code>true</code> if that seller wants to see how many prospective bidders/buyers currently have the item added to their Watch Lists. The Watch count is returned in the <b>WatchCount</b> field in the response.
     *  <br>
     *  <br>
     *  This field will only be returnd to the seller of the item.
     *
     * @return bool
     */
    public function getIncludeWatchCount()
    {
        return $this->includeWatchCount;
    }

    /**
     * Sets a new includeWatchCount
     *
     * The seller can include this field and set its value to <code>true</code> if that seller wants to see how many prospective bidders/buyers currently have the item added to their Watch Lists. The Watch count is returned in the <b>WatchCount</b> field in the response.
     *  <br>
     *  <br>
     *  This field will only be returnd to the seller of the item.
     *
     * @param bool $includeWatchCount
     * @return self
     */
    public function setIncludeWatchCount($includeWatchCount)
    {
        $this->includeWatchCount = $includeWatchCount;
        return $this;
    }

    /**
     * Gets as includeItemSpecifics
     *
     * If this field is included and set to <code>true</code>, the call response includes the <b>ItemSpecifics</b> container
     *  if Item Specifics are defined for the listing.<br>
     *  <br>
     *  An Item Specific is any aspect that helps define/classify the item. Many eBay categories mandate including specific Item Specifics, so it is always a good idea to make a call to the <a href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory" target="_blank">getItemAspectsForCategory</a> method of the Taxonomy API to see what Item Specifics are required and which ones are recommended.<br>
     *  <br>
     *  Including this field and setting it to <code>true</code> will also return the <strong>UnitInfo</strong> container if applicable. The <strong>UnitInfo</strong> container will provide information about the weight, volume or other quantity measurement of a listed item. The European Union requires listings for certain types of products to include the price per unit so buyers can accurately compare prices. eBay uses the <strong>UnitType</strong> and <strong>UnitQuantity</strong> values and the item's listed price to calculate and display the per-unit price on eBay EU sites.
     *
     * @return bool
     */
    public function getIncludeItemSpecifics()
    {
        return $this->includeItemSpecifics;
    }

    /**
     * Sets a new includeItemSpecifics
     *
     * If this field is included and set to <code>true</code>, the call response includes the <b>ItemSpecifics</b> container
     *  if Item Specifics are defined for the listing.<br>
     *  <br>
     *  An Item Specific is any aspect that helps define/classify the item. Many eBay categories mandate including specific Item Specifics, so it is always a good idea to make a call to the <a href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory" target="_blank">getItemAspectsForCategory</a> method of the Taxonomy API to see what Item Specifics are required and which ones are recommended.<br>
     *  <br>
     *  Including this field and setting it to <code>true</code> will also return the <strong>UnitInfo</strong> container if applicable. The <strong>UnitInfo</strong> container will provide information about the weight, volume or other quantity measurement of a listed item. The European Union requires listings for certain types of products to include the price per unit so buyers can accurately compare prices. eBay uses the <strong>UnitType</strong> and <strong>UnitQuantity</strong> values and the item's listed price to calculate and display the per-unit price on eBay EU sites.
     *
     * @param bool $includeItemSpecifics
     * @return self
     */
    public function setIncludeItemSpecifics($includeItemSpecifics)
    {
        $this->includeItemSpecifics = $includeItemSpecifics;
        return $this;
    }

    /**
     * Gets as includeTaxTable
     *
     * The seller will include this field and set its value to <code>true</code> if the seller wishes to view the defined sales tax rates for the various jurisdictions in the country (generally, states and provinces). Information for each defined sales tax rate will be returned in the <b>TaxTable</b> container in the response.
     *  <br/><br/>
     *  Even if this field is included and set to <code>true</code>, no <b>TaxTable</b> container will be returned If no sales tax rates are defined for any tax jurisdiction in the seller's sales tax table.
     *  <br/><br/>
     *  Sales tax tables are only available for eBay US and Canada marketplaces. Sales tax rates can be added/modified in My eBay, through the <b>SetTaxTable</b> and <b>GetTaxTable</b> calls of the Trading API, or through the Sales Tax calls of the Account API.
     *
     * @return bool
     */
    public function getIncludeTaxTable()
    {
        return $this->includeTaxTable;
    }

    /**
     * Sets a new includeTaxTable
     *
     * The seller will include this field and set its value to <code>true</code> if the seller wishes to view the defined sales tax rates for the various jurisdictions in the country (generally, states and provinces). Information for each defined sales tax rate will be returned in the <b>TaxTable</b> container in the response.
     *  <br/><br/>
     *  Even if this field is included and set to <code>true</code>, no <b>TaxTable</b> container will be returned If no sales tax rates are defined for any tax jurisdiction in the seller's sales tax table.
     *  <br/><br/>
     *  Sales tax tables are only available for eBay US and Canada marketplaces. Sales tax rates can be added/modified in My eBay, through the <b>SetTaxTable</b> and <b>GetTaxTable</b> calls of the Trading API, or through the Sales Tax calls of the Account API.
     *
     * @param bool $includeTaxTable
     * @return self
     */
    public function setIncludeTaxTable($includeTaxTable)
    {
        $this->includeTaxTable = $includeTaxTable;
        return $this;
    }

    /**
     * Gets as sKU
     *
     * Retrieves an item that was listed by the user identified
     *  in AuthToken and that is being tracked by this SKU.<br>
     *  <br>
     *  A SKU (stock keeping unit) is an identifier defined by a seller.
     *  Some sellers use SKUs to track complex flows of products
     *  and information on the client side.
     *  eBay preserves the SKU on the item, enabling you
     *  to obtain it before and after an order line item is created.
     *  (SKU is recommended as an alternative to
     *  ApplicationData.)<br>
     *  <br>
     *  In <b>GetItem</b>, <b>SKU</b> can only be used to retrieve one of your
     *  own items, where you listed the item by using <b>AddFixedPriceItem</b>
     *  or <b>RelistFixedPriceItem</b>,
     *  and you set <b>Item.InventoryTrackingMethod</b> to <b>SKU</b> at
     *  the time the item was listed. (These criteria are necessary to
     *  uniquely identify the listing by a SKU.)<br>
     *  <br>
     *  Either <b>ItemID</b> or <b>SKU</b> is required in the request.
     *  If both are passed, they must refer to the same item,
     *  and that item must have <b>InventoryTrackingMethod</b> set to <b>SKU</b>.
     *
     * @return string
     */
    public function getSKU()
    {
        return $this->sKU;
    }

    /**
     * Sets a new sKU
     *
     * Retrieves an item that was listed by the user identified
     *  in AuthToken and that is being tracked by this SKU.<br>
     *  <br>
     *  A SKU (stock keeping unit) is an identifier defined by a seller.
     *  Some sellers use SKUs to track complex flows of products
     *  and information on the client side.
     *  eBay preserves the SKU on the item, enabling you
     *  to obtain it before and after an order line item is created.
     *  (SKU is recommended as an alternative to
     *  ApplicationData.)<br>
     *  <br>
     *  In <b>GetItem</b>, <b>SKU</b> can only be used to retrieve one of your
     *  own items, where you listed the item by using <b>AddFixedPriceItem</b>
     *  or <b>RelistFixedPriceItem</b>,
     *  and you set <b>Item.InventoryTrackingMethod</b> to <b>SKU</b> at
     *  the time the item was listed. (These criteria are necessary to
     *  uniquely identify the listing by a SKU.)<br>
     *  <br>
     *  Either <b>ItemID</b> or <b>SKU</b> is required in the request.
     *  If both are passed, they must refer to the same item,
     *  and that item must have <b>InventoryTrackingMethod</b> set to <b>SKU</b>.
     *
     * @param string $sKU
     * @return self
     */
    public function setSKU($sKU)
    {
        $this->sKU = $sKU;
        return $this;
    }

    /**
     * Gets as variationSKU
     *
     * Variation-level SKU that uniquely identifes a Variation within
     *  the listing identified by <b>ItemID</b>. Only applicable when the
     *  seller listed the item with Variation-level SKU (<b>Variation.SKU</b>)
     *  values. Retrieves all the usual <b>Item</b> fields, but limits the
     *  <b>Variations</b> content to the specified Variation.
     *  If not specified, the response includes all Variations.
     *
     * @return string
     */
    public function getVariationSKU()
    {
        return $this->variationSKU;
    }

    /**
     * Sets a new variationSKU
     *
     * Variation-level SKU that uniquely identifes a Variation within
     *  the listing identified by <b>ItemID</b>. Only applicable when the
     *  seller listed the item with Variation-level SKU (<b>Variation.SKU</b>)
     *  values. Retrieves all the usual <b>Item</b> fields, but limits the
     *  <b>Variations</b> content to the specified Variation.
     *  If not specified, the response includes all Variations.
     *
     * @param string $variationSKU
     * @return self
     */
    public function setVariationSKU($variationSKU)
    {
        $this->variationSKU = $variationSKU;
        return $this;
    }

    /**
     * Adds as nameValueList
     *
     * Name-value pairs that identify one or more Variations within the
     *  listing identified by <b>ItemID</b>. Only applicable when the seller
     *  listed the item with Variations. Retrieves all the usual <b>Item</b>
     *  fields, but limits the Variations content to the specified
     *  Variation(s). If the specified pairs do not match any Variation,
     *  eBay returns all Variations.<br>
     *  <br>
     *  To retrieve only one variation, specify the full set of
     *  name/value pairs that match all the name-value pairs of one
     *  Variation. <br>
     *  <br>
     *  To retrieve multiple variations (using a wildcard),
     *  specify one or more name/value pairs that partially match the
     *  desired variations. For example, if the listing contains
     *  Variations for shirts in different colors and sizes, specify
     *  Color as Red (and no other name/value pairs) to retrieve
     *  all the red shirts in all sizes (but no other colors).
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\NameValueListType $nameValueList
     */
    public function addToVariationSpecifics(\Nogrod\eBaySDK\Trading\NameValueListType $nameValueList)
    {
        $this->variationSpecifics[] = $nameValueList;
        return $this;
    }

    /**
     * isset variationSpecifics
     *
     * Name-value pairs that identify one or more Variations within the
     *  listing identified by <b>ItemID</b>. Only applicable when the seller
     *  listed the item with Variations. Retrieves all the usual <b>Item</b>
     *  fields, but limits the Variations content to the specified
     *  Variation(s). If the specified pairs do not match any Variation,
     *  eBay returns all Variations.<br>
     *  <br>
     *  To retrieve only one variation, specify the full set of
     *  name/value pairs that match all the name-value pairs of one
     *  Variation. <br>
     *  <br>
     *  To retrieve multiple variations (using a wildcard),
     *  specify one or more name/value pairs that partially match the
     *  desired variations. For example, if the listing contains
     *  Variations for shirts in different colors and sizes, specify
     *  Color as Red (and no other name/value pairs) to retrieve
     *  all the red shirts in all sizes (but no other colors).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVariationSpecifics($index)
    {
        return isset($this->variationSpecifics[$index]);
    }

    /**
     * unset variationSpecifics
     *
     * Name-value pairs that identify one or more Variations within the
     *  listing identified by <b>ItemID</b>. Only applicable when the seller
     *  listed the item with Variations. Retrieves all the usual <b>Item</b>
     *  fields, but limits the Variations content to the specified
     *  Variation(s). If the specified pairs do not match any Variation,
     *  eBay returns all Variations.<br>
     *  <br>
     *  To retrieve only one variation, specify the full set of
     *  name/value pairs that match all the name-value pairs of one
     *  Variation. <br>
     *  <br>
     *  To retrieve multiple variations (using a wildcard),
     *  specify one or more name/value pairs that partially match the
     *  desired variations. For example, if the listing contains
     *  Variations for shirts in different colors and sizes, specify
     *  Color as Red (and no other name/value pairs) to retrieve
     *  all the red shirts in all sizes (but no other colors).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVariationSpecifics($index)
    {
        unset($this->variationSpecifics[$index]);
    }

    /**
     * Gets as variationSpecifics
     *
     * Name-value pairs that identify one or more Variations within the
     *  listing identified by <b>ItemID</b>. Only applicable when the seller
     *  listed the item with Variations. Retrieves all the usual <b>Item</b>
     *  fields, but limits the Variations content to the specified
     *  Variation(s). If the specified pairs do not match any Variation,
     *  eBay returns all Variations.<br>
     *  <br>
     *  To retrieve only one variation, specify the full set of
     *  name/value pairs that match all the name-value pairs of one
     *  Variation. <br>
     *  <br>
     *  To retrieve multiple variations (using a wildcard),
     *  specify one or more name/value pairs that partially match the
     *  desired variations. For example, if the listing contains
     *  Variations for shirts in different colors and sizes, specify
     *  Color as Red (and no other name/value pairs) to retrieve
     *  all the red shirts in all sizes (but no other colors).
     *
     * @return \Nogrod\eBaySDK\Trading\NameValueListType[]
     */
    public function getVariationSpecifics()
    {
        return $this->variationSpecifics;
    }

    /**
     * Sets a new variationSpecifics
     *
     * Name-value pairs that identify one or more Variations within the
     *  listing identified by <b>ItemID</b>. Only applicable when the seller
     *  listed the item with Variations. Retrieves all the usual <b>Item</b>
     *  fields, but limits the Variations content to the specified
     *  Variation(s). If the specified pairs do not match any Variation,
     *  eBay returns all Variations.<br>
     *  <br>
     *  To retrieve only one variation, specify the full set of
     *  name/value pairs that match all the name-value pairs of one
     *  Variation. <br>
     *  <br>
     *  To retrieve multiple variations (using a wildcard),
     *  specify one or more name/value pairs that partially match the
     *  desired variations. For example, if the listing contains
     *  Variations for shirts in different colors and sizes, specify
     *  Color as Red (and no other name/value pairs) to retrieve
     *  all the red shirts in all sizes (but no other colors).
     *
     * @param \Nogrod\eBaySDK\Trading\NameValueListType[] $variationSpecifics
     * @return self
     */
    public function setVariationSpecifics(array $variationSpecifics)
    {
        $this->variationSpecifics = $variationSpecifics;
        return $this;
    }

    /**
     * Gets as transactionID
     *
     * A unique identifier for an order line item. An order line item is created
     *  when a buyer commits to purchasing an item.
     *  <br><br>
     *  Since you can change active multiple-quantity fixed-price listings even
     *  after one of the items has been purchased, the <b>TransactionID</b> is
     *  associated with a snapshot of the item data at the time of the purchase.
     *  <br><br>
     *  After one item in a multi-quantity listing has been sold, sellers can not
     *  change the values in the Title, Primary Category, Secondary Category,
     *  Listing Duration, and Listing Type fields. However, all other fields are
     *  editable.
     *  <br><br>
     *  Specifying a <b>TransactionID</b> in the <b>GetItem</b> request allows you to retrieve
     *  a snapshot of the listing as it was when the order line item was created.
     *  <br>
     *  <br>
     *  The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> Beginning in July 2024, non-zero transaction IDs will start being returned for auction listings. If necessary, update code to handle non-zero transaction IDs for auction transactions before this time.
     *  </span>
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
     * A unique identifier for an order line item. An order line item is created
     *  when a buyer commits to purchasing an item.
     *  <br><br>
     *  Since you can change active multiple-quantity fixed-price listings even
     *  after one of the items has been purchased, the <b>TransactionID</b> is
     *  associated with a snapshot of the item data at the time of the purchase.
     *  <br><br>
     *  After one item in a multi-quantity listing has been sold, sellers can not
     *  change the values in the Title, Primary Category, Secondary Category,
     *  Listing Duration, and Listing Type fields. However, all other fields are
     *  editable.
     *  <br><br>
     *  Specifying a <b>TransactionID</b> in the <b>GetItem</b> request allows you to retrieve
     *  a snapshot of the listing as it was when the order line item was created.
     *  <br>
     *  <br>
     *  The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> Beginning in July 2024, non-zero transaction IDs will start being returned for auction listings. If necessary, update code to handle non-zero transaction IDs for auction transactions before this time.
     *  </span>
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
     * Gets as includeItemCompatibilityList
     *
     * This field is used to specify whether or not to retrieve Parts
     *  Compatiblity information for a motor part or accessory listing. If this field is included and set to <code>true</code>, the <b>Item.ItemCompatibilityList</b> container will be returned if a Parts Compatibility list exists for the listing. A Parts Compatibility list is a list of motor vehicles that are compatible with the listed motor part or accesory item. If a Parts Compatibility list does not exist for the listing, this field will have no effect if it is included, regardless of its value (<code>true</code> or <code>false</code>).
     *  <br><br>
     *  If this field is included and set to <code>false</code> or omitted, but a Parts Compatibility list does exist for the listing, the <b>Item.ItemCompatibilityList</b> container will not be returned, but the <b>Item.ItemCompatibilityCount</b> field will be returned, and this field will simply indicate the quantity of motor vehicles that are compatible with the the listed motor part or accesory item.
     *  <br><br>
     *  Parts Compatibility lists are only applicable to motor parts and accessory categories on the sites that support eBay Motors - US, CA, UK, and DE.
     *
     * @return bool
     */
    public function getIncludeItemCompatibilityList()
    {
        return $this->includeItemCompatibilityList;
    }

    /**
     * Sets a new includeItemCompatibilityList
     *
     * This field is used to specify whether or not to retrieve Parts
     *  Compatiblity information for a motor part or accessory listing. If this field is included and set to <code>true</code>, the <b>Item.ItemCompatibilityList</b> container will be returned if a Parts Compatibility list exists for the listing. A Parts Compatibility list is a list of motor vehicles that are compatible with the listed motor part or accesory item. If a Parts Compatibility list does not exist for the listing, this field will have no effect if it is included, regardless of its value (<code>true</code> or <code>false</code>).
     *  <br><br>
     *  If this field is included and set to <code>false</code> or omitted, but a Parts Compatibility list does exist for the listing, the <b>Item.ItemCompatibilityList</b> container will not be returned, but the <b>Item.ItemCompatibilityCount</b> field will be returned, and this field will simply indicate the quantity of motor vehicles that are compatible with the the listed motor part or accesory item.
     *  <br><br>
     *  Parts Compatibility lists are only applicable to motor parts and accessory categories on the sites that support eBay Motors - US, CA, UK, and DE.
     *
     * @param bool $includeItemCompatibilityList
     * @return self
     */
    public function setIncludeItemCompatibilityList($includeItemCompatibilityList)
    {
        $this->includeItemCompatibilityList = $includeItemCompatibilityList;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getIncludeWatchCount();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IncludeWatchCount", $value);
        }
        $value = $this->getIncludeItemSpecifics();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IncludeItemSpecifics", $value);
        }
        $value = $this->getIncludeTaxTable();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IncludeTaxTable", $value);
        }
        $value = $this->getSKU();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SKU", $value);
        }
        $value = $this->getVariationSKU();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VariationSKU", $value);
        }
        $value = $this->getVariationSpecifics();
        if (null !== $value && !empty($this->getVariationSpecifics())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VariationSpecifics", array_map(function ($v) {return ["NameValueList" => $v];}, $value));
        }
        $value = $this->getTransactionID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TransactionID", $value);
        }
        $value = $this->getIncludeItemCompatibilityList();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IncludeItemCompatibilityList", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IncludeWatchCount');
        if (null !== $value) {
            $this->setIncludeWatchCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IncludeItemSpecifics');
        if (null !== $value) {
            $this->setIncludeItemSpecifics($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IncludeTaxTable');
        if (null !== $value) {
            $this->setIncludeTaxTable($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SKU');
        if (null !== $value) {
            $this->setSKU($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VariationSKU');
        if (null !== $value) {
            $this->setVariationSKU($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VariationSpecifics', true);
        if (null !== $value && !empty($value)) {
            $this->setVariationSpecifics(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\NameValueListType::fromKeyValue(Func::mapArray($v, '{urn:ebay:apis:eBLBaseComponents}NameValueList'));}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TransactionID');
        if (null !== $value) {
            $this->setTransactionID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IncludeItemCompatibilityList');
        if (null !== $value) {
            $this->setIncludeItemCompatibilityList($value);
        }
    }
}
