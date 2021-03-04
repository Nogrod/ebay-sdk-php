<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing ItemTypeCodeType
 *
 * Enumerated type containing values that provide more information on the type of
 *  filtering the buyer used when setting up a Saved Search in My eBay.
 * XSD Type: ItemTypeCodeType
 */
class ItemTypeCodeType
{
    /**
     * Constant for 'AuctionItemsOnly' value.
     *
     * When setting up filtering for the Saved Search, the buyer was only looking for
     *  auction items (with or without the Buy It Now option), so only selected the
     * <b>Auction</b> checkbox in the
     *  <b>Format</b> dialog box. When this filter is used in a Saved Search,
     *  fixed-price items and classified ad listings are not retrieved for the buyer.
     */
    public const VAL_AUCTION_ITEMS_ONLY = 'AuctionItemsOnly';

    /**
     * Constant for 'FixedPricedItem' value.
     *
     * When setting up filtering for the Saved Search, the buyer was looking for all
     *  fixed-price items and auction items with Buy It Now available, so only selected
     * the
     *  <b>Buy It Now</b> checkbox in the <b>Format</b> dialog box.
     *  When this filter is used in a Saved Search, auction items (without the Buy It
     * Now
     *  option) and classified ad listings are not retrieved for the buyer.
     */
    public const VAL_FIXED_PRICED_ITEM = 'FixedPricedItem';

    /**
     * Constant for 'AllItems' value.
     *
     * When setting up filtering for the Saved Search, the buyer was looking for all
     *  items closely associated with the search term, so selected all buying formats
     *  (Auction, Buy It Now, and Classified Ads). All items are retrieved for the
     * buyer,
     *  including auction items (with or without the Buy It Now option), fixed-price
     *  items, and classified ad listings.
     */
    public const VAL_ALL_ITEMS = 'AllItems';

    /**
     * Constant for 'StoreInventoryOnly' value.
     *
     * When setting up filtering for the Saved Search, the buyer was only looking for
     *  items sold by sellers with eBay stores, so selected the
     *  <b>Sellers with eBay stores</b> checkbox in the
     *  <b>Seller</b> dialog box. When this filter is used in a Saved Search,
     *  only items for sale in an eBay store are retrieved for the buyer.
     */
    public const VAL_STORE_INVENTORY_ONLY = 'StoreInventoryOnly';

    /**
     * Constant for 'FixedPriceExcludeStoreInventory' value.
     *
     * Excludes listings that have listing type set to StoresFixedPrice.
     *  Excludes listings that have listing type set to AdType.
     *  Excludes auction listings in which BuyItNowEnabled is false.
     */
    public const VAL_FIXED_PRICE_EXCLUDE_STORE_INVENTORY = 'FixedPriceExcludeStoreInventory';

    /**
     * Constant for 'ExcludeStoreInventory' value.
     *
     * Excludes listings that have listing type set to StoresFixedPrice.
     */
    public const VAL_EXCLUDE_STORE_INVENTORY = 'ExcludeStoreInventory';

    /**
     * Constant for 'AllItemTypes' value.
     *
     * Retrieves listings whether or not listing type is set to StoresFixedPrice;
     *  include auction items.
     */
    public const VAL_ALL_ITEM_TYPES = 'AllItemTypes';

    /**
     * Constant for 'AllFixedPriceItemTypes' value.
     *
     * Retrieves fixed-price items.
     *  Whether StoresFixedPrice items are retrieved does not depend on the site
     * default.
     *  The StoresFixedPrice items are retrieved after the basic fixed price items.
     *  Items are retrieved whether or not listing type is set to StoresFixedPrice.
     *  Does not retrieve items for which listing type is AdType.
     *  Does not retrieve auction items for which BuyItNowEnabled is false.
     */
    public const VAL_ALL_FIXED_PRICE_ITEM_TYPES = 'AllFixedPriceItemTypes';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for internal or future use.
     */
    public const VAL_CUSTOM_CODE = 'CustomCode';

    /**
     * Constant for 'ClassifiedItemsOnly' value.
     *
     * When setting up filtering for the Saved Search, the buyer was only looking for
     *  classified ad listings, so only selected the <b>Classified ads</b> checkbox in
     * the
     *  <b>Format</b> dialog box. When this filter is used in a Saved Search,
     *  auction (with or without the Buy It Now option) and fixed-price items
     *  are not retrieved for the buyer.
     */
    public const VAL_CLASSIFIED_ITEMS_ONLY = 'ClassifiedItemsOnly';

    /**
     * Constant for 'AdFormat' value.
     *
     * Restricts listings to return only items that have the Ad Format feature.
     */
    public const VAL_AD_FORMAT = 'AdFormat';

    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }
}
