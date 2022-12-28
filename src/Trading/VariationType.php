<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing VariationType
 *
 * This type is used by the <b>Variation</b> container, which provides full details on each item variation in a multiple-variation listing.
 * XSD Type: VariationType
 */
class VariationType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * A SKU (stock keeping unit) is a seller-defined identifier. It is only intended for the seller's use (not for buyers). A SKU value is not required, but many large sellers like to add SKU value to their listings. If defined on a listing, a SKU value can be used by sellers to reconcile their eBay inventory with your own inventory system, instead of using the <b>VariationSpecifics</b> identifying values.
     *  <br>
     *  <br>
     *  If specified, all SKU values must be unique within the <b>Variations</b>
     *  node. That is, no two variations within the same listing can have
     *  the same SKU. <br>
     *  <br>
     *  If you include the <b>Item.InventoryTrackingMethod</b> field in an 'FixedPriceItem' call and set its value to <code>SKU</code>,
     *  the <b>Variation.SKU</b> values become required for each variation..<br>
     *  <br>
     *  <b>For GetItem, GetOrders and other 'Get' calls:</b> Only returned if the
     *  seller specified a SKU for the variation.
     *
     * @var string $sKU
     */
    private $sKU = null;

    /**
     * The fixed price for this item variation.
     *  For example, a "Blue, Large" variation price could be USD 10.00,
     *  and a "Black, Medium" variation price could be USD 5.00.<br>
     *  <br>
     *  Each variation requires this field, and the prices can be the same for all variations, or
     *  be different for each variation. This enables sellers to
     *  provide discounts on certain
     *  variations without affecting the price of others.
     *  Required (and always returned) for listings with variations.<br>
     *  <br>
     *  You can revise a variation's price at any time (even if it
     *  has purchases). When you modify a variation during revise or
     *  relist, you need to include both its <b>StartPrice</b> and <b>Quantity</b>.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $startPrice
     */
    private $startPrice = null;

    /**
     * This value indicates the quantity of the specific variation that are
     *  available for purchase. If you set <b>Variation.Quantity</b> to <code>0</code> when
     *  you create, revise, or relist an item listing, the variation is dropped from
     *  the listing. To prevent this, you can set
     *  <a href="https://developer.ebay.com/DevZone/XML/docs/Reference/ebay/SetUserPreferences.html#Request.OutOfStockControlPreference">SetUserPreferences.OutOfStockControlPreference</a> to <code>true</code>.
     *  <br/><br/>
     *  For <b>GetItem</b> (and other related calls that retrieve the Item
     *  object), the <b>Variation.Quantity</b> value indicates the total quantity associated with the variation, including the quantity available and the
     *  quantity sold. To calculate the quantity available for sale, subtract
     *  <b>SellingStatus.QuantitySold</b> from this value.<br>
     *  <br>
     *  <b>For RelistFixedPriceItem:</b>
     *  <ul>
     *  <li>For an item variation that had an available quantity greater than <code>0</code> when the listing ended, the <b>Quantity</b> value of the item variation for the newly relisted item is set to the actual quantity available. For item variations, there is actually no <b>QuantityAvailable</b> field, but this value may be derived if you look at the corresponding item variation in a <b>GetMyeBaySelling</b>) response and subtract the <b>Variation.QuantitySold</b> value from the <b>Variation.Quantity</b> value, which represents the original <b>Variation.Quantity</b> value at creation time of the previous listing. </li>
     *  <li>For item variations with an available quantity of <code>0</code> when the listing ended, the relisted item will retain the <b>Variaton.Quantity</b> value that was passed in at creation time of the previous listing. </li>
     *  </ul>
     *  So, if you are relisting an item that had one or more item variations with an available quantity of <code>0</code> when the listing ended, we strongly recommend that you pass in the correct available quantity through the corresponding <b>Variation.Quantity</b> field of a relist call. Alternatively, you can update the correct quantity available by using a <b>ReviseInventoryStatus</b> call and passing in a <b>Quantity</b> value, while also making sure to pass in the correct <b>SKU</b> value(s) to identify the correct item variation. A <b>ReviseInventoryStatus</b> call can be used to revise the quantity of up to four single item listings and/or item variations (from the same or different listings).
     *  <br> <br>
     *  <b>For ReviseFixedPriceItem:</b>
     *  You can revise a variation's quantity at any time, even if
     *  it has purchases. However, unless you set the <a href="https://developer.ebay.com/DevZone/XML/docs/Reference/ebay/SetUserPreferences.html#Request.OutOfStockControlPreference">OutOfStockControlPreference</a> boolean field of the <b>SetUserPreferences</b> call to <code>true</code>, at least one variation must remain
     *  with a non-zero quantity in order for the listing to remain active. If you set the <b>OutOfStockControlPreference</b> field to <code>true</code>, a multiple-variation listing will remain active but hidden from search even if the quantity of all variations in the listing is set to <code>0</code>.
     *  When you modify a variation during revise or
     *  relist, you need to include both its <b>StartPrice</b> and <b>Quantity</b>.
     *  If you revise the <b>Quantity</b> value for a variation after items have
     *  already sold, specify the quantity available for sale.
     *  (eBay will automatically add the
     *  quantity sold to the value you specify.) If you set the quantity to
     *  <code>0</code> and the variation has no purchases, the variation may be
     *  dropped from the listing.
     *  <br> <br>
     *  <b>For GetSellerTransactions:</b> See <b>Item.Quantity</b> instead.<br>
     *  <br>
     *  See the <a href="https://developer.ebay.com/Devzone/guides/features-guide/default.html#development/Variations-Updating.html">eBay Features Guide</a>
     *  for more details about setting and modifying a variation's quantity.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  The number in the <b>Variation.Quantity</b> field represents the current quantity of the item variation that is available using the "Ship to home" fulfillment method. This number does not take into account any quantity of the item variation that is available through "local" fulfillment methods such as In-Store Pickup or Click and Collect. This is due to the fact that there is no current implementation (or API field) where the seller informs eBay about the quantity of item variations available through each local fulfillment method. In the case where a listing is only offering the item variations through a local fulfillment method, this value should default to <code>0</code>, and the <b>Item.IgnoreQuantity</b> will also be returned as <code>True</code>.
     *  </span>
     *  <br>
     *
     * @var int $quantity
     */
    private $quantity = null;

    /**
     * A list of name/value pairs that uniquely identify the variation within
     *  the listing. All variations must specify the same set of Item Specific names, but
     *  each variation must provide a unique combination of values for those
     *  Item Specific names. For example, if the items vary by color and size, then every
     *  variation must specify 'Color' and 'Size' as Item Specific names, but no two
     *  variations can specify the same combination of 'Color' and 'Size' values.<br>
     *  <br>
     *  When you revise a listing that includes variations, you can
     *  change names of <b>Variationpecifics</b> by using the <b>Variations.ModifyNameList</b> container. You can also add, delete, or replace individual variations as needed to match your
     *  current inventory. Use the <b>Variation.Delete</b> field to delete a variation that has no sales (order line items). If the variation has
     *  sales, then set the Quantity to 0.<br>
     *  <br>
     *  <b>For GetSellerEvents</b> To keep the <b>GetSellerEvents</b>
     *  response smaller, <b>Variationpecifics</b> are not returned if the
     *  variation has a SKU. If the variation has no SKU, then
     *  <b>Variationpecifics</b> are returned instead. Optionally, you can pass
     *  <b>IncludeVariationSpecifics</b> as <code>true</code> in the request to force
     *  <b>Variationpecifics</b> to be returned, even when the SKU is returned.
     *
     * @var \Nogrod\eBaySDK\Trading\NameValueListType[] $variationSpecifics
     */
    private $variationSpecifics = null;

    /**
     * Quantity of items in the seller's inventory for this
     *  Selling Manager product.
     *  This is not the same as the quantity available in a listed item.
     *  Required when a Selling Manager product defines variations.
     *
     * @var int $unitsAvailable
     */
    private $unitsAvailable = null;

    /**
     * Contains the variation's quantity sold.
     *  Always returned when variations are present.
     *
     * @var \Nogrod\eBaySDK\Trading\SellingStatusType $sellingStatus
     */
    private $sellingStatus = null;

    /**
     * The title of the variation. This is a concatenation of the listing
     *  title plus the values (no names) from <b>Variationpecifics</b>.
     *  For example, if the Title is "Polo Shirt" and the variation is
     *  for a medium pink shirt, the variation title could be
     *  "Polo Shirt[Pink,M].
     *  <br/>
     *
     * @var string $variationTitle
     */
    private $variationTitle = null;

    /**
     * URL for the variation on eBay. This links to eBay's View Item page,
     *  with the page configured to show details of the specified variation.
     *  The syntax of this URL is similar to Item.ViewItemURL (not optimized
     *  for natural search).
     *
     * @var string $variationViewItemURL
     */
    private $variationViewItemURL = null;

    /**
     * If this field is included and set to <b>true</b>, the corresponding variation is deleted from the listing with a successful call. In general,
     *  a listing with variations must have at least one
     *  variation with a non-zero quantity in order to remain active.
     *  Additional deletion rules depend
     *  on whether you are revising or relisting.<br>
     *  <br>
     *  <b>For ReviseFixedPriceItem only</b>:
     *  This boolean field can now be used in a Revise call to delete a variation even if the variation still has quantity and/or has had one or more previous sales during the life of the listing. Previously, if a variation had any purchases, you could not delete the variation, but only set its quantity to zero.
     *  <br>
     *  <br>
     *  To replace a varation, you can delete it and add the new
     *  or corrected one.
     *  However, you can't specify the same SKU twice in the
     *  same request (because the intent would be ambiguous).
     *  So, either use a new SKU for the newer variation,
     *  or use the call twice (once to delete the variation, and
     *  once to add the new variation with the same SKU).<br>
     *  <br>
     *  <b>For RelistFixedPriceItem only</b>:
     *  You can delete any variation, as long as the relisted listing
     *  includes at least 1 variation with a non-zero quantity.
     *  (That is, when you relist, you could delete all but one variation,
     *  or you could delete all existing variations and add a new one.)
     *
     * @var bool $delete
     */
    private $delete = null;

    /**
     * The number of watches placed on this variation by eBay users.
     *
     * @var int $watchCount
     */
    private $watchCount = null;

    /**
     * A note a user makes on an item with variations in My eBay.
     *  <br>
     *  <br>
     *  For eBay.com, only GetMyeBaySelling (not GetItem) returns this
     *  field, and only if you pass IncludeNotes in the request.
     *  Only visible to the user who created the note.<br>
     *  <br>
     *  Not supported as input in ReviseFixedPriceItem.
     *  Use SetUserNotes instead.<br>
     *  <br>
     *  In SoldList, notes for variations are only returned at the
     *  Item level, not the variation level.
     *
     * @var string $privateNotes
     */
    private $privateNotes = null;

    /**
     * This container provides information for a single variation (within a multiple-variation listing) that has a Strikethrough Price (STP) or a Minimum Advertised Price (MAP) discount pricing treatment. For a multiple-variation listing, the discount pricing information should be set at the variation level and not at the item level (e.g. <b>Item.DiscountPriceInfo</b>). STP and MAP apply only to fixed-price listings. STP is available on the US, eBay Motors, UK, Germany, Canada (English and French), France, Italy, Spain, and Ireland sites, while MAP is available only on the US site.
     *  <br><br>
     *  Discount pricing is available to qualified sellers (and their associated developers) who participate in the Discount Pricing Program. Once qualified, sellers receive a 'special account flag' (SAF) that allows them to apply Discount Pricing to both single-variation and multi-variation items. STP is intended for eBay partners and their sellers only.
     *  <br><br>
     *  As a seller listing Discount Price items, you are required to maintain records of your discount pricing in the event you are called upon to substantiate your item pricing.
     *
     * @var \Nogrod\eBaySDK\Trading\DiscountPriceInfoType $discountPriceInfo
     */
    private $discountPriceInfo = null;

    /**
     * This container is used to provide one or more product identifiers for a product variation within a multiple-variation, fixed-price listing. The same product identifier type(s) must be used for all product variations within the listing. For instance, if one product variation uses ISBNs, all product variations must use ISBN values.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Currently, the <b>EAN</b>, <b>ISBN</b>, or <b>UPC</b> fields are used to specify a Global Trade Item Number (GTIN), and the <b>GetCategoryFeatures</b> call is used to see if particular product identifier types are supported/required. The <b>ProductReferenceID</b> field can only be used to specify an ePID for an eBay Catalog product that is part of the Product-Based Shopping Experience mandate. For more information about PBSE, see the <a href="https://developer.ebay.com/pbse/" target="_blank">Product-Based Shopping Experience</a> page.
     *  </span>
     *  <br>
     *  When you include the <b>VariationProductListingDetails</b> container in a call, you must specify at least one GTIN or ePID. If an ePID is provided, a matching eBay catalog product must exist for the value that is passed in.
     *  <br>
     *  <br>
     *  <b>For ReviseItem and RelistItem only:</b> When you revise a
     *  listing, if it ends within 12 hours, you cannot change the
     *  product identifier and you cannot remove existing product variation listing details data.
     *
     * @var \Nogrod\eBaySDK\Trading\VariationProductListingDetailsType $variationProductListingDetails
     */
    private $variationProductListingDetails = null;

    /**
     * This container defines variation-specific Extended Producer Responsibility information, specifically the <strong>EcoParticipationFee</strong>. <br/><br/>For <b>GetItem</b> calls, this container is only returned to the listing owner, if the container is available.
     *
     * @var \Nogrod\eBaySDK\Trading\VariationExtendedProducerResponsibilityType $variationExtendedProducerResponsibility
     */
    private $variationExtendedProducerResponsibility = null;

    /**
     * Gets as sKU
     *
     * A SKU (stock keeping unit) is a seller-defined identifier. It is only intended for the seller's use (not for buyers). A SKU value is not required, but many large sellers like to add SKU value to their listings. If defined on a listing, a SKU value can be used by sellers to reconcile their eBay inventory with your own inventory system, instead of using the <b>VariationSpecifics</b> identifying values.
     *  <br>
     *  <br>
     *  If specified, all SKU values must be unique within the <b>Variations</b>
     *  node. That is, no two variations within the same listing can have
     *  the same SKU. <br>
     *  <br>
     *  If you include the <b>Item.InventoryTrackingMethod</b> field in an 'FixedPriceItem' call and set its value to <code>SKU</code>,
     *  the <b>Variation.SKU</b> values become required for each variation..<br>
     *  <br>
     *  <b>For GetItem, GetOrders and other 'Get' calls:</b> Only returned if the
     *  seller specified a SKU for the variation.
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
     * A SKU (stock keeping unit) is a seller-defined identifier. It is only intended for the seller's use (not for buyers). A SKU value is not required, but many large sellers like to add SKU value to their listings. If defined on a listing, a SKU value can be used by sellers to reconcile their eBay inventory with your own inventory system, instead of using the <b>VariationSpecifics</b> identifying values.
     *  <br>
     *  <br>
     *  If specified, all SKU values must be unique within the <b>Variations</b>
     *  node. That is, no two variations within the same listing can have
     *  the same SKU. <br>
     *  <br>
     *  If you include the <b>Item.InventoryTrackingMethod</b> field in an 'FixedPriceItem' call and set its value to <code>SKU</code>,
     *  the <b>Variation.SKU</b> values become required for each variation..<br>
     *  <br>
     *  <b>For GetItem, GetOrders and other 'Get' calls:</b> Only returned if the
     *  seller specified a SKU for the variation.
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
     * Gets as startPrice
     *
     * The fixed price for this item variation.
     *  For example, a "Blue, Large" variation price could be USD 10.00,
     *  and a "Black, Medium" variation price could be USD 5.00.<br>
     *  <br>
     *  Each variation requires this field, and the prices can be the same for all variations, or
     *  be different for each variation. This enables sellers to
     *  provide discounts on certain
     *  variations without affecting the price of others.
     *  Required (and always returned) for listings with variations.<br>
     *  <br>
     *  You can revise a variation's price at any time (even if it
     *  has purchases). When you modify a variation during revise or
     *  relist, you need to include both its <b>StartPrice</b> and <b>Quantity</b>.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getStartPrice()
    {
        return $this->startPrice;
    }

    /**
     * Sets a new startPrice
     *
     * The fixed price for this item variation.
     *  For example, a "Blue, Large" variation price could be USD 10.00,
     *  and a "Black, Medium" variation price could be USD 5.00.<br>
     *  <br>
     *  Each variation requires this field, and the prices can be the same for all variations, or
     *  be different for each variation. This enables sellers to
     *  provide discounts on certain
     *  variations without affecting the price of others.
     *  Required (and always returned) for listings with variations.<br>
     *  <br>
     *  You can revise a variation's price at any time (even if it
     *  has purchases). When you modify a variation during revise or
     *  relist, you need to include both its <b>StartPrice</b> and <b>Quantity</b>.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $startPrice
     * @return self
     */
    public function setStartPrice(\Nogrod\eBaySDK\Trading\AmountType $startPrice)
    {
        $this->startPrice = $startPrice;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * This value indicates the quantity of the specific variation that are
     *  available for purchase. If you set <b>Variation.Quantity</b> to <code>0</code> when
     *  you create, revise, or relist an item listing, the variation is dropped from
     *  the listing. To prevent this, you can set
     *  <a href="https://developer.ebay.com/DevZone/XML/docs/Reference/ebay/SetUserPreferences.html#Request.OutOfStockControlPreference">SetUserPreferences.OutOfStockControlPreference</a> to <code>true</code>.
     *  <br/><br/>
     *  For <b>GetItem</b> (and other related calls that retrieve the Item
     *  object), the <b>Variation.Quantity</b> value indicates the total quantity associated with the variation, including the quantity available and the
     *  quantity sold. To calculate the quantity available for sale, subtract
     *  <b>SellingStatus.QuantitySold</b> from this value.<br>
     *  <br>
     *  <b>For RelistFixedPriceItem:</b>
     *  <ul>
     *  <li>For an item variation that had an available quantity greater than <code>0</code> when the listing ended, the <b>Quantity</b> value of the item variation for the newly relisted item is set to the actual quantity available. For item variations, there is actually no <b>QuantityAvailable</b> field, but this value may be derived if you look at the corresponding item variation in a <b>GetMyeBaySelling</b>) response and subtract the <b>Variation.QuantitySold</b> value from the <b>Variation.Quantity</b> value, which represents the original <b>Variation.Quantity</b> value at creation time of the previous listing. </li>
     *  <li>For item variations with an available quantity of <code>0</code> when the listing ended, the relisted item will retain the <b>Variaton.Quantity</b> value that was passed in at creation time of the previous listing. </li>
     *  </ul>
     *  So, if you are relisting an item that had one or more item variations with an available quantity of <code>0</code> when the listing ended, we strongly recommend that you pass in the correct available quantity through the corresponding <b>Variation.Quantity</b> field of a relist call. Alternatively, you can update the correct quantity available by using a <b>ReviseInventoryStatus</b> call and passing in a <b>Quantity</b> value, while also making sure to pass in the correct <b>SKU</b> value(s) to identify the correct item variation. A <b>ReviseInventoryStatus</b> call can be used to revise the quantity of up to four single item listings and/or item variations (from the same or different listings).
     *  <br> <br>
     *  <b>For ReviseFixedPriceItem:</b>
     *  You can revise a variation's quantity at any time, even if
     *  it has purchases. However, unless you set the <a href="https://developer.ebay.com/DevZone/XML/docs/Reference/ebay/SetUserPreferences.html#Request.OutOfStockControlPreference">OutOfStockControlPreference</a> boolean field of the <b>SetUserPreferences</b> call to <code>true</code>, at least one variation must remain
     *  with a non-zero quantity in order for the listing to remain active. If you set the <b>OutOfStockControlPreference</b> field to <code>true</code>, a multiple-variation listing will remain active but hidden from search even if the quantity of all variations in the listing is set to <code>0</code>.
     *  When you modify a variation during revise or
     *  relist, you need to include both its <b>StartPrice</b> and <b>Quantity</b>.
     *  If you revise the <b>Quantity</b> value for a variation after items have
     *  already sold, specify the quantity available for sale.
     *  (eBay will automatically add the
     *  quantity sold to the value you specify.) If you set the quantity to
     *  <code>0</code> and the variation has no purchases, the variation may be
     *  dropped from the listing.
     *  <br> <br>
     *  <b>For GetSellerTransactions:</b> See <b>Item.Quantity</b> instead.<br>
     *  <br>
     *  See the <a href="https://developer.ebay.com/Devzone/guides/features-guide/default.html#development/Variations-Updating.html">eBay Features Guide</a>
     *  for more details about setting and modifying a variation's quantity.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  The number in the <b>Variation.Quantity</b> field represents the current quantity of the item variation that is available using the "Ship to home" fulfillment method. This number does not take into account any quantity of the item variation that is available through "local" fulfillment methods such as In-Store Pickup or Click and Collect. This is due to the fact that there is no current implementation (or API field) where the seller informs eBay about the quantity of item variations available through each local fulfillment method. In the case where a listing is only offering the item variations through a local fulfillment method, this value should default to <code>0</code>, and the <b>Item.IgnoreQuantity</b> will also be returned as <code>True</code>.
     *  </span>
     *  <br>
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * This value indicates the quantity of the specific variation that are
     *  available for purchase. If you set <b>Variation.Quantity</b> to <code>0</code> when
     *  you create, revise, or relist an item listing, the variation is dropped from
     *  the listing. To prevent this, you can set
     *  <a href="https://developer.ebay.com/DevZone/XML/docs/Reference/ebay/SetUserPreferences.html#Request.OutOfStockControlPreference">SetUserPreferences.OutOfStockControlPreference</a> to <code>true</code>.
     *  <br/><br/>
     *  For <b>GetItem</b> (and other related calls that retrieve the Item
     *  object), the <b>Variation.Quantity</b> value indicates the total quantity associated with the variation, including the quantity available and the
     *  quantity sold. To calculate the quantity available for sale, subtract
     *  <b>SellingStatus.QuantitySold</b> from this value.<br>
     *  <br>
     *  <b>For RelistFixedPriceItem:</b>
     *  <ul>
     *  <li>For an item variation that had an available quantity greater than <code>0</code> when the listing ended, the <b>Quantity</b> value of the item variation for the newly relisted item is set to the actual quantity available. For item variations, there is actually no <b>QuantityAvailable</b> field, but this value may be derived if you look at the corresponding item variation in a <b>GetMyeBaySelling</b>) response and subtract the <b>Variation.QuantitySold</b> value from the <b>Variation.Quantity</b> value, which represents the original <b>Variation.Quantity</b> value at creation time of the previous listing. </li>
     *  <li>For item variations with an available quantity of <code>0</code> when the listing ended, the relisted item will retain the <b>Variaton.Quantity</b> value that was passed in at creation time of the previous listing. </li>
     *  </ul>
     *  So, if you are relisting an item that had one or more item variations with an available quantity of <code>0</code> when the listing ended, we strongly recommend that you pass in the correct available quantity through the corresponding <b>Variation.Quantity</b> field of a relist call. Alternatively, you can update the correct quantity available by using a <b>ReviseInventoryStatus</b> call and passing in a <b>Quantity</b> value, while also making sure to pass in the correct <b>SKU</b> value(s) to identify the correct item variation. A <b>ReviseInventoryStatus</b> call can be used to revise the quantity of up to four single item listings and/or item variations (from the same or different listings).
     *  <br> <br>
     *  <b>For ReviseFixedPriceItem:</b>
     *  You can revise a variation's quantity at any time, even if
     *  it has purchases. However, unless you set the <a href="https://developer.ebay.com/DevZone/XML/docs/Reference/ebay/SetUserPreferences.html#Request.OutOfStockControlPreference">OutOfStockControlPreference</a> boolean field of the <b>SetUserPreferences</b> call to <code>true</code>, at least one variation must remain
     *  with a non-zero quantity in order for the listing to remain active. If you set the <b>OutOfStockControlPreference</b> field to <code>true</code>, a multiple-variation listing will remain active but hidden from search even if the quantity of all variations in the listing is set to <code>0</code>.
     *  When you modify a variation during revise or
     *  relist, you need to include both its <b>StartPrice</b> and <b>Quantity</b>.
     *  If you revise the <b>Quantity</b> value for a variation after items have
     *  already sold, specify the quantity available for sale.
     *  (eBay will automatically add the
     *  quantity sold to the value you specify.) If you set the quantity to
     *  <code>0</code> and the variation has no purchases, the variation may be
     *  dropped from the listing.
     *  <br> <br>
     *  <b>For GetSellerTransactions:</b> See <b>Item.Quantity</b> instead.<br>
     *  <br>
     *  See the <a href="https://developer.ebay.com/Devzone/guides/features-guide/default.html#development/Variations-Updating.html">eBay Features Guide</a>
     *  for more details about setting and modifying a variation's quantity.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  The number in the <b>Variation.Quantity</b> field represents the current quantity of the item variation that is available using the "Ship to home" fulfillment method. This number does not take into account any quantity of the item variation that is available through "local" fulfillment methods such as In-Store Pickup or Click and Collect. This is due to the fact that there is no current implementation (or API field) where the seller informs eBay about the quantity of item variations available through each local fulfillment method. In the case where a listing is only offering the item variations through a local fulfillment method, this value should default to <code>0</code>, and the <b>Item.IgnoreQuantity</b> will also be returned as <code>True</code>.
     *  </span>
     *  <br>
     *
     * @param int $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Adds as nameValueList
     *
     * A list of name/value pairs that uniquely identify the variation within
     *  the listing. All variations must specify the same set of Item Specific names, but
     *  each variation must provide a unique combination of values for those
     *  Item Specific names. For example, if the items vary by color and size, then every
     *  variation must specify 'Color' and 'Size' as Item Specific names, but no two
     *  variations can specify the same combination of 'Color' and 'Size' values.<br>
     *  <br>
     *  When you revise a listing that includes variations, you can
     *  change names of <b>Variationpecifics</b> by using the <b>Variations.ModifyNameList</b> container. You can also add, delete, or replace individual variations as needed to match your
     *  current inventory. Use the <b>Variation.Delete</b> field to delete a variation that has no sales (order line items). If the variation has
     *  sales, then set the Quantity to 0.<br>
     *  <br>
     *  <b>For GetSellerEvents</b> To keep the <b>GetSellerEvents</b>
     *  response smaller, <b>Variationpecifics</b> are not returned if the
     *  variation has a SKU. If the variation has no SKU, then
     *  <b>Variationpecifics</b> are returned instead. Optionally, you can pass
     *  <b>IncludeVariationSpecifics</b> as <code>true</code> in the request to force
     *  <b>Variationpecifics</b> to be returned, even when the SKU is returned.
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
     * A list of name/value pairs that uniquely identify the variation within
     *  the listing. All variations must specify the same set of Item Specific names, but
     *  each variation must provide a unique combination of values for those
     *  Item Specific names. For example, if the items vary by color and size, then every
     *  variation must specify 'Color' and 'Size' as Item Specific names, but no two
     *  variations can specify the same combination of 'Color' and 'Size' values.<br>
     *  <br>
     *  When you revise a listing that includes variations, you can
     *  change names of <b>Variationpecifics</b> by using the <b>Variations.ModifyNameList</b> container. You can also add, delete, or replace individual variations as needed to match your
     *  current inventory. Use the <b>Variation.Delete</b> field to delete a variation that has no sales (order line items). If the variation has
     *  sales, then set the Quantity to 0.<br>
     *  <br>
     *  <b>For GetSellerEvents</b> To keep the <b>GetSellerEvents</b>
     *  response smaller, <b>Variationpecifics</b> are not returned if the
     *  variation has a SKU. If the variation has no SKU, then
     *  <b>Variationpecifics</b> are returned instead. Optionally, you can pass
     *  <b>IncludeVariationSpecifics</b> as <code>true</code> in the request to force
     *  <b>Variationpecifics</b> to be returned, even when the SKU is returned.
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
     * A list of name/value pairs that uniquely identify the variation within
     *  the listing. All variations must specify the same set of Item Specific names, but
     *  each variation must provide a unique combination of values for those
     *  Item Specific names. For example, if the items vary by color and size, then every
     *  variation must specify 'Color' and 'Size' as Item Specific names, but no two
     *  variations can specify the same combination of 'Color' and 'Size' values.<br>
     *  <br>
     *  When you revise a listing that includes variations, you can
     *  change names of <b>Variationpecifics</b> by using the <b>Variations.ModifyNameList</b> container. You can also add, delete, or replace individual variations as needed to match your
     *  current inventory. Use the <b>Variation.Delete</b> field to delete a variation that has no sales (order line items). If the variation has
     *  sales, then set the Quantity to 0.<br>
     *  <br>
     *  <b>For GetSellerEvents</b> To keep the <b>GetSellerEvents</b>
     *  response smaller, <b>Variationpecifics</b> are not returned if the
     *  variation has a SKU. If the variation has no SKU, then
     *  <b>Variationpecifics</b> are returned instead. Optionally, you can pass
     *  <b>IncludeVariationSpecifics</b> as <code>true</code> in the request to force
     *  <b>Variationpecifics</b> to be returned, even when the SKU is returned.
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
     * A list of name/value pairs that uniquely identify the variation within
     *  the listing. All variations must specify the same set of Item Specific names, but
     *  each variation must provide a unique combination of values for those
     *  Item Specific names. For example, if the items vary by color and size, then every
     *  variation must specify 'Color' and 'Size' as Item Specific names, but no two
     *  variations can specify the same combination of 'Color' and 'Size' values.<br>
     *  <br>
     *  When you revise a listing that includes variations, you can
     *  change names of <b>Variationpecifics</b> by using the <b>Variations.ModifyNameList</b> container. You can also add, delete, or replace individual variations as needed to match your
     *  current inventory. Use the <b>Variation.Delete</b> field to delete a variation that has no sales (order line items). If the variation has
     *  sales, then set the Quantity to 0.<br>
     *  <br>
     *  <b>For GetSellerEvents</b> To keep the <b>GetSellerEvents</b>
     *  response smaller, <b>Variationpecifics</b> are not returned if the
     *  variation has a SKU. If the variation has no SKU, then
     *  <b>Variationpecifics</b> are returned instead. Optionally, you can pass
     *  <b>IncludeVariationSpecifics</b> as <code>true</code> in the request to force
     *  <b>Variationpecifics</b> to be returned, even when the SKU is returned.
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
     * A list of name/value pairs that uniquely identify the variation within
     *  the listing. All variations must specify the same set of Item Specific names, but
     *  each variation must provide a unique combination of values for those
     *  Item Specific names. For example, if the items vary by color and size, then every
     *  variation must specify 'Color' and 'Size' as Item Specific names, but no two
     *  variations can specify the same combination of 'Color' and 'Size' values.<br>
     *  <br>
     *  When you revise a listing that includes variations, you can
     *  change names of <b>Variationpecifics</b> by using the <b>Variations.ModifyNameList</b> container. You can also add, delete, or replace individual variations as needed to match your
     *  current inventory. Use the <b>Variation.Delete</b> field to delete a variation that has no sales (order line items). If the variation has
     *  sales, then set the Quantity to 0.<br>
     *  <br>
     *  <b>For GetSellerEvents</b> To keep the <b>GetSellerEvents</b>
     *  response smaller, <b>Variationpecifics</b> are not returned if the
     *  variation has a SKU. If the variation has no SKU, then
     *  <b>Variationpecifics</b> are returned instead. Optionally, you can pass
     *  <b>IncludeVariationSpecifics</b> as <code>true</code> in the request to force
     *  <b>Variationpecifics</b> to be returned, even when the SKU is returned.
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
     * Gets as unitsAvailable
     *
     * Quantity of items in the seller's inventory for this
     *  Selling Manager product.
     *  This is not the same as the quantity available in a listed item.
     *  Required when a Selling Manager product defines variations.
     *
     * @return int
     */
    public function getUnitsAvailable()
    {
        return $this->unitsAvailable;
    }

    /**
     * Sets a new unitsAvailable
     *
     * Quantity of items in the seller's inventory for this
     *  Selling Manager product.
     *  This is not the same as the quantity available in a listed item.
     *  Required when a Selling Manager product defines variations.
     *
     * @param int $unitsAvailable
     * @return self
     */
    public function setUnitsAvailable($unitsAvailable)
    {
        $this->unitsAvailable = $unitsAvailable;
        return $this;
    }

    /**
     * Gets as sellingStatus
     *
     * Contains the variation's quantity sold.
     *  Always returned when variations are present.
     *
     * @return \Nogrod\eBaySDK\Trading\SellingStatusType
     */
    public function getSellingStatus()
    {
        return $this->sellingStatus;
    }

    /**
     * Sets a new sellingStatus
     *
     * Contains the variation's quantity sold.
     *  Always returned when variations are present.
     *
     * @param \Nogrod\eBaySDK\Trading\SellingStatusType $sellingStatus
     * @return self
     */
    public function setSellingStatus(\Nogrod\eBaySDK\Trading\SellingStatusType $sellingStatus)
    {
        $this->sellingStatus = $sellingStatus;
        return $this;
    }

    /**
     * Gets as variationTitle
     *
     * The title of the variation. This is a concatenation of the listing
     *  title plus the values (no names) from <b>Variationpecifics</b>.
     *  For example, if the Title is "Polo Shirt" and the variation is
     *  for a medium pink shirt, the variation title could be
     *  "Polo Shirt[Pink,M].
     *  <br/>
     *
     * @return string
     */
    public function getVariationTitle()
    {
        return $this->variationTitle;
    }

    /**
     * Sets a new variationTitle
     *
     * The title of the variation. This is a concatenation of the listing
     *  title plus the values (no names) from <b>Variationpecifics</b>.
     *  For example, if the Title is "Polo Shirt" and the variation is
     *  for a medium pink shirt, the variation title could be
     *  "Polo Shirt[Pink,M].
     *  <br/>
     *
     * @param string $variationTitle
     * @return self
     */
    public function setVariationTitle($variationTitle)
    {
        $this->variationTitle = $variationTitle;
        return $this;
    }

    /**
     * Gets as variationViewItemURL
     *
     * URL for the variation on eBay. This links to eBay's View Item page,
     *  with the page configured to show details of the specified variation.
     *  The syntax of this URL is similar to Item.ViewItemURL (not optimized
     *  for natural search).
     *
     * @return string
     */
    public function getVariationViewItemURL()
    {
        return $this->variationViewItemURL;
    }

    /**
     * Sets a new variationViewItemURL
     *
     * URL for the variation on eBay. This links to eBay's View Item page,
     *  with the page configured to show details of the specified variation.
     *  The syntax of this URL is similar to Item.ViewItemURL (not optimized
     *  for natural search).
     *
     * @param string $variationViewItemURL
     * @return self
     */
    public function setVariationViewItemURL($variationViewItemURL)
    {
        $this->variationViewItemURL = $variationViewItemURL;
        return $this;
    }

    /**
     * Gets as delete
     *
     * If this field is included and set to <b>true</b>, the corresponding variation is deleted from the listing with a successful call. In general,
     *  a listing with variations must have at least one
     *  variation with a non-zero quantity in order to remain active.
     *  Additional deletion rules depend
     *  on whether you are revising or relisting.<br>
     *  <br>
     *  <b>For ReviseFixedPriceItem only</b>:
     *  This boolean field can now be used in a Revise call to delete a variation even if the variation still has quantity and/or has had one or more previous sales during the life of the listing. Previously, if a variation had any purchases, you could not delete the variation, but only set its quantity to zero.
     *  <br>
     *  <br>
     *  To replace a varation, you can delete it and add the new
     *  or corrected one.
     *  However, you can't specify the same SKU twice in the
     *  same request (because the intent would be ambiguous).
     *  So, either use a new SKU for the newer variation,
     *  or use the call twice (once to delete the variation, and
     *  once to add the new variation with the same SKU).<br>
     *  <br>
     *  <b>For RelistFixedPriceItem only</b>:
     *  You can delete any variation, as long as the relisted listing
     *  includes at least 1 variation with a non-zero quantity.
     *  (That is, when you relist, you could delete all but one variation,
     *  or you could delete all existing variations and add a new one.)
     *
     * @return bool
     */
    public function getDelete()
    {
        return $this->delete;
    }

    /**
     * Sets a new delete
     *
     * If this field is included and set to <b>true</b>, the corresponding variation is deleted from the listing with a successful call. In general,
     *  a listing with variations must have at least one
     *  variation with a non-zero quantity in order to remain active.
     *  Additional deletion rules depend
     *  on whether you are revising or relisting.<br>
     *  <br>
     *  <b>For ReviseFixedPriceItem only</b>:
     *  This boolean field can now be used in a Revise call to delete a variation even if the variation still has quantity and/or has had one or more previous sales during the life of the listing. Previously, if a variation had any purchases, you could not delete the variation, but only set its quantity to zero.
     *  <br>
     *  <br>
     *  To replace a varation, you can delete it and add the new
     *  or corrected one.
     *  However, you can't specify the same SKU twice in the
     *  same request (because the intent would be ambiguous).
     *  So, either use a new SKU for the newer variation,
     *  or use the call twice (once to delete the variation, and
     *  once to add the new variation with the same SKU).<br>
     *  <br>
     *  <b>For RelistFixedPriceItem only</b>:
     *  You can delete any variation, as long as the relisted listing
     *  includes at least 1 variation with a non-zero quantity.
     *  (That is, when you relist, you could delete all but one variation,
     *  or you could delete all existing variations and add a new one.)
     *
     * @param bool $delete
     * @return self
     */
    public function setDelete($delete)
    {
        $this->delete = $delete;
        return $this;
    }

    /**
     * Gets as watchCount
     *
     * The number of watches placed on this variation by eBay users.
     *
     * @return int
     */
    public function getWatchCount()
    {
        return $this->watchCount;
    }

    /**
     * Sets a new watchCount
     *
     * The number of watches placed on this variation by eBay users.
     *
     * @param int $watchCount
     * @return self
     */
    public function setWatchCount($watchCount)
    {
        $this->watchCount = $watchCount;
        return $this;
    }

    /**
     * Gets as privateNotes
     *
     * A note a user makes on an item with variations in My eBay.
     *  <br>
     *  <br>
     *  For eBay.com, only GetMyeBaySelling (not GetItem) returns this
     *  field, and only if you pass IncludeNotes in the request.
     *  Only visible to the user who created the note.<br>
     *  <br>
     *  Not supported as input in ReviseFixedPriceItem.
     *  Use SetUserNotes instead.<br>
     *  <br>
     *  In SoldList, notes for variations are only returned at the
     *  Item level, not the variation level.
     *
     * @return string
     */
    public function getPrivateNotes()
    {
        return $this->privateNotes;
    }

    /**
     * Sets a new privateNotes
     *
     * A note a user makes on an item with variations in My eBay.
     *  <br>
     *  <br>
     *  For eBay.com, only GetMyeBaySelling (not GetItem) returns this
     *  field, and only if you pass IncludeNotes in the request.
     *  Only visible to the user who created the note.<br>
     *  <br>
     *  Not supported as input in ReviseFixedPriceItem.
     *  Use SetUserNotes instead.<br>
     *  <br>
     *  In SoldList, notes for variations are only returned at the
     *  Item level, not the variation level.
     *
     * @param string $privateNotes
     * @return self
     */
    public function setPrivateNotes($privateNotes)
    {
        $this->privateNotes = $privateNotes;
        return $this;
    }

    /**
     * Gets as discountPriceInfo
     *
     * This container provides information for a single variation (within a multiple-variation listing) that has a Strikethrough Price (STP) or a Minimum Advertised Price (MAP) discount pricing treatment. For a multiple-variation listing, the discount pricing information should be set at the variation level and not at the item level (e.g. <b>Item.DiscountPriceInfo</b>). STP and MAP apply only to fixed-price listings. STP is available on the US, eBay Motors, UK, Germany, Canada (English and French), France, Italy, Spain, and Ireland sites, while MAP is available only on the US site.
     *  <br><br>
     *  Discount pricing is available to qualified sellers (and their associated developers) who participate in the Discount Pricing Program. Once qualified, sellers receive a 'special account flag' (SAF) that allows them to apply Discount Pricing to both single-variation and multi-variation items. STP is intended for eBay partners and their sellers only.
     *  <br><br>
     *  As a seller listing Discount Price items, you are required to maintain records of your discount pricing in the event you are called upon to substantiate your item pricing.
     *
     * @return \Nogrod\eBaySDK\Trading\DiscountPriceInfoType
     */
    public function getDiscountPriceInfo()
    {
        return $this->discountPriceInfo;
    }

    /**
     * Sets a new discountPriceInfo
     *
     * This container provides information for a single variation (within a multiple-variation listing) that has a Strikethrough Price (STP) or a Minimum Advertised Price (MAP) discount pricing treatment. For a multiple-variation listing, the discount pricing information should be set at the variation level and not at the item level (e.g. <b>Item.DiscountPriceInfo</b>). STP and MAP apply only to fixed-price listings. STP is available on the US, eBay Motors, UK, Germany, Canada (English and French), France, Italy, Spain, and Ireland sites, while MAP is available only on the US site.
     *  <br><br>
     *  Discount pricing is available to qualified sellers (and their associated developers) who participate in the Discount Pricing Program. Once qualified, sellers receive a 'special account flag' (SAF) that allows them to apply Discount Pricing to both single-variation and multi-variation items. STP is intended for eBay partners and their sellers only.
     *  <br><br>
     *  As a seller listing Discount Price items, you are required to maintain records of your discount pricing in the event you are called upon to substantiate your item pricing.
     *
     * @param \Nogrod\eBaySDK\Trading\DiscountPriceInfoType $discountPriceInfo
     * @return self
     */
    public function setDiscountPriceInfo(\Nogrod\eBaySDK\Trading\DiscountPriceInfoType $discountPriceInfo)
    {
        $this->discountPriceInfo = $discountPriceInfo;
        return $this;
    }

    /**
     * Gets as variationProductListingDetails
     *
     * This container is used to provide one or more product identifiers for a product variation within a multiple-variation, fixed-price listing. The same product identifier type(s) must be used for all product variations within the listing. For instance, if one product variation uses ISBNs, all product variations must use ISBN values.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Currently, the <b>EAN</b>, <b>ISBN</b>, or <b>UPC</b> fields are used to specify a Global Trade Item Number (GTIN), and the <b>GetCategoryFeatures</b> call is used to see if particular product identifier types are supported/required. The <b>ProductReferenceID</b> field can only be used to specify an ePID for an eBay Catalog product that is part of the Product-Based Shopping Experience mandate. For more information about PBSE, see the <a href="https://developer.ebay.com/pbse/" target="_blank">Product-Based Shopping Experience</a> page.
     *  </span>
     *  <br>
     *  When you include the <b>VariationProductListingDetails</b> container in a call, you must specify at least one GTIN or ePID. If an ePID is provided, a matching eBay catalog product must exist for the value that is passed in.
     *  <br>
     *  <br>
     *  <b>For ReviseItem and RelistItem only:</b> When you revise a
     *  listing, if it ends within 12 hours, you cannot change the
     *  product identifier and you cannot remove existing product variation listing details data.
     *
     * @return \Nogrod\eBaySDK\Trading\VariationProductListingDetailsType
     */
    public function getVariationProductListingDetails()
    {
        return $this->variationProductListingDetails;
    }

    /**
     * Sets a new variationProductListingDetails
     *
     * This container is used to provide one or more product identifiers for a product variation within a multiple-variation, fixed-price listing. The same product identifier type(s) must be used for all product variations within the listing. For instance, if one product variation uses ISBNs, all product variations must use ISBN values.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Currently, the <b>EAN</b>, <b>ISBN</b>, or <b>UPC</b> fields are used to specify a Global Trade Item Number (GTIN), and the <b>GetCategoryFeatures</b> call is used to see if particular product identifier types are supported/required. The <b>ProductReferenceID</b> field can only be used to specify an ePID for an eBay Catalog product that is part of the Product-Based Shopping Experience mandate. For more information about PBSE, see the <a href="https://developer.ebay.com/pbse/" target="_blank">Product-Based Shopping Experience</a> page.
     *  </span>
     *  <br>
     *  When you include the <b>VariationProductListingDetails</b> container in a call, you must specify at least one GTIN or ePID. If an ePID is provided, a matching eBay catalog product must exist for the value that is passed in.
     *  <br>
     *  <br>
     *  <b>For ReviseItem and RelistItem only:</b> When you revise a
     *  listing, if it ends within 12 hours, you cannot change the
     *  product identifier and you cannot remove existing product variation listing details data.
     *
     * @param \Nogrod\eBaySDK\Trading\VariationProductListingDetailsType $variationProductListingDetails
     * @return self
     */
    public function setVariationProductListingDetails(\Nogrod\eBaySDK\Trading\VariationProductListingDetailsType $variationProductListingDetails)
    {
        $this->variationProductListingDetails = $variationProductListingDetails;
        return $this;
    }

    /**
     * Gets as variationExtendedProducerResponsibility
     *
     * This container defines variation-specific Extended Producer Responsibility information, specifically the <strong>EcoParticipationFee</strong>. <br/><br/>For <b>GetItem</b> calls, this container is only returned to the listing owner, if the container is available.
     *
     * @return \Nogrod\eBaySDK\Trading\VariationExtendedProducerResponsibilityType
     */
    public function getVariationExtendedProducerResponsibility()
    {
        return $this->variationExtendedProducerResponsibility;
    }

    /**
     * Sets a new variationExtendedProducerResponsibility
     *
     * This container defines variation-specific Extended Producer Responsibility information, specifically the <strong>EcoParticipationFee</strong>. <br/><br/>For <b>GetItem</b> calls, this container is only returned to the listing owner, if the container is available.
     *
     * @param \Nogrod\eBaySDK\Trading\VariationExtendedProducerResponsibilityType $variationExtendedProducerResponsibility
     * @return self
     */
    public function setVariationExtendedProducerResponsibility(\Nogrod\eBaySDK\Trading\VariationExtendedProducerResponsibilityType $variationExtendedProducerResponsibility)
    {
        $this->variationExtendedProducerResponsibility = $variationExtendedProducerResponsibility;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getSKU();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SKU", $value);
        }
        $value = $this->getStartPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StartPrice", $value);
        }
        $value = $this->getQuantity();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Quantity", $value);
        }
        $value = $this->getVariationSpecifics();
        if (null !== $value && !empty($this->getVariationSpecifics())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VariationSpecifics", array_map(function ($v) {
                return ["NameValueList" => $v];
            }, $value));
        }
        $value = $this->getUnitsAvailable();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UnitsAvailable", $value);
        }
        $value = $this->getSellingStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellingStatus", $value);
        }
        $value = $this->getVariationTitle();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VariationTitle", $value);
        }
        $value = $this->getVariationViewItemURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VariationViewItemURL", $value);
        }
        $value = $this->getDelete();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Delete", $value);
        }
        $value = $this->getWatchCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}WatchCount", $value);
        }
        $value = $this->getPrivateNotes();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PrivateNotes", $value);
        }
        $value = $this->getDiscountPriceInfo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DiscountPriceInfo", $value);
        }
        $value = $this->getVariationProductListingDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VariationProductListingDetails", $value);
        }
        $value = $this->getVariationExtendedProducerResponsibility();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VariationExtendedProducerResponsibility", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SKU');
        if (null !== $value) {
            $this->setSKU($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StartPrice');
        if (null !== $value) {
            $this->setStartPrice(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Quantity');
        if (null !== $value) {
            $this->setQuantity($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VariationSpecifics', true);
        if (null !== $value && !empty($value)) {
            $this->setVariationSpecifics(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\NameValueListType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UnitsAvailable');
        if (null !== $value) {
            $this->setUnitsAvailable($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellingStatus');
        if (null !== $value) {
            $this->setSellingStatus(\Nogrod\eBaySDK\Trading\SellingStatusType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VariationTitle');
        if (null !== $value) {
            $this->setVariationTitle($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VariationViewItemURL');
        if (null !== $value) {
            $this->setVariationViewItemURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Delete');
        if (null !== $value) {
            $this->setDelete($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}WatchCount');
        if (null !== $value) {
            $this->setWatchCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PrivateNotes');
        if (null !== $value) {
            $this->setPrivateNotes($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DiscountPriceInfo');
        if (null !== $value) {
            $this->setDiscountPriceInfo(\Nogrod\eBaySDK\Trading\DiscountPriceInfoType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VariationProductListingDetails');
        if (null !== $value) {
            $this->setVariationProductListingDetails(\Nogrod\eBaySDK\Trading\VariationProductListingDetailsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VariationExtendedProducerResponsibility');
        if (null !== $value) {
            $this->setVariationExtendedProducerResponsibility(\Nogrod\eBaySDK\Trading\VariationExtendedProducerResponsibilityType::fromKeyValue($value));
        }
    }
}
