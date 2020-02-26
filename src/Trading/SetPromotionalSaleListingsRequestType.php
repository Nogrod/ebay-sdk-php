<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing SetPromotionalSaleListingsRequestType
 *
 * <span class="tablenote"><b>Note: </b> While the Trading API continues to support item promotions for an eBay store owner, the Trading API will no longer be enhanced with any new item promotion capabilities as they are developed by eBay. In addition, Promoted Listings are also not supported by the Trading API. For these two reasons, it is recommended that sellers/developers make plans to migrate to the
 *  <a href="https://developer.ebay.com/api-docs/sell/marketing/overview.html">Marketing API</a>, which provides all Promotions Manager and Promoted Listings capabilities, and this API will continue to be improved and enhanced as more marketing features become available to sellers.
 *  </span>
 *  Enables the seller to change the item listings that are affected by a promotional sale. To use this call, the seller must be a registered eBay Store owner.
 * XSD Type: SetPromotionalSaleListingsRequestType
 */
class SetPromotionalSaleListingsRequestType extends AbstractRequestType
{

    /**
     * The unique identifier of the seller's promotional sale. Based on the <b>Action</b>
     *  value, listings will either be added to or removed from the promotional sale.
     *
     * @var int $promotionalSaleID
     */
    private $promotionalSaleID = null;

    /**
     * This required field determines whether you are adding (specify 'Add') or
     *  removing (specify 'Delete) one or more listings from the promotional sale
     *  identified by the <b>PromotionalSaleID</b> value in the request.
     *  <br><br>
     *  If you specify 'Delete', you must include one or more <b>ItemID</b> values under the <b>PromotionalSaleItemIDArray</b> container, and you cannot use the other filter options in the request. If you specify 'Add', you can add one or more listings using any of the filtering options in the request. Active auction listings that have one or more bids cannot be added to or removed from a promotional sale.
     *
     * @var string $action
     */
    private $action = null;

    /**
     * Container consisting of one or more <b>ItemID</b> values. Based on the <b>Action</b> value, the listings identified by these <b>ItemID</b> values are either added to or removed from the promotional sale. <br><br> This container is required if listings are being removed (<b>Action</b>='Delete') from the promotional sale.
     *
     * @var string[] $promotionalSaleItemIDArray
     */
    private $promotionalSaleItemIDArray = null;

    /**
     * If a <b>StoreCategoryID</b> value is included in the call request, all active items in this eBay Store category are added to the promotional sale. This field cannot be used if the <b>Action</b> field is set to 'Delete'.
     *
     * @var int $storeCategoryID
     */
    private $storeCategoryID = null;

    /**
     * If a <b>CategoryID</b> value is included in the call request, all active items in this eBay category are added to the promotional sale. This field cannot be used if the <b>Action</b> field is set to 'Delete'.
     *
     * @var int $categoryID
     */
    private $categoryID = null;

    /**
     * If this field is included and set to 'true' in the call request, all fixed-price listings are added to the promotional sale. This field cannot be used if the <b>Action</b> field is set to 'Delete'.
     *
     * @var bool $allFixedPriceItems
     */
    private $allFixedPriceItems = null;

    /**
     * This field is deprecated and should no longer be used because Store Inventory is no longer a supported listing format.
     *
     * @var bool $allStoreInventoryItems
     */
    private $allStoreInventoryItems = null;

    /**
     * If this field is included and set to 'true' in the call request, all auction listings are added to the promotional sale. This field cannot be used if the <b>Action</b> field is set to 'Delete'.
     *
     * @var bool $allAuctionItems
     */
    private $allAuctionItems = null;

    /**
     * Gets as promotionalSaleID
     *
     * The unique identifier of the seller's promotional sale. Based on the <b>Action</b>
     *  value, listings will either be added to or removed from the promotional sale.
     *
     * @return int
     */
    public function getPromotionalSaleID()
    {
        return $this->promotionalSaleID;
    }

    /**
     * Sets a new promotionalSaleID
     *
     * The unique identifier of the seller's promotional sale. Based on the <b>Action</b>
     *  value, listings will either be added to or removed from the promotional sale.
     *
     * @param int $promotionalSaleID
     * @return self
     */
    public function setPromotionalSaleID($promotionalSaleID)
    {
        $this->promotionalSaleID = $promotionalSaleID;
        return $this;
    }

    /**
     * Gets as action
     *
     * This required field determines whether you are adding (specify 'Add') or
     *  removing (specify 'Delete) one or more listings from the promotional sale
     *  identified by the <b>PromotionalSaleID</b> value in the request.
     *  <br><br>
     *  If you specify 'Delete', you must include one or more <b>ItemID</b> values under the <b>PromotionalSaleItemIDArray</b> container, and you cannot use the other filter options in the request. If you specify 'Add', you can add one or more listings using any of the filtering options in the request. Active auction listings that have one or more bids cannot be added to or removed from a promotional sale.
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Sets a new action
     *
     * This required field determines whether you are adding (specify 'Add') or
     *  removing (specify 'Delete) one or more listings from the promotional sale
     *  identified by the <b>PromotionalSaleID</b> value in the request.
     *  <br><br>
     *  If you specify 'Delete', you must include one or more <b>ItemID</b> values under the <b>PromotionalSaleItemIDArray</b> container, and you cannot use the other filter options in the request. If you specify 'Add', you can add one or more listings using any of the filtering options in the request. Active auction listings that have one or more bids cannot be added to or removed from a promotional sale.
     *
     * @param string $action
     * @return self
     */
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * Adds as itemID
     *
     * Container consisting of one or more <b>ItemID</b> values. Based on the <b>Action</b> value, the listings identified by these <b>ItemID</b> values are either added to or removed from the promotional sale. <br><br> This container is required if listings are being removed (<b>Action</b>='Delete') from the promotional sale.
     *
     * @return self
     * @param string $itemID
     */
    public function addToPromotionalSaleItemIDArray($itemID)
    {
        $this->promotionalSaleItemIDArray[] = $itemID;
        return $this;
    }

    /**
     * isset promotionalSaleItemIDArray
     *
     * Container consisting of one or more <b>ItemID</b> values. Based on the <b>Action</b> value, the listings identified by these <b>ItemID</b> values are either added to or removed from the promotional sale. <br><br> This container is required if listings are being removed (<b>Action</b>='Delete') from the promotional sale.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPromotionalSaleItemIDArray($index)
    {
        return isset($this->promotionalSaleItemIDArray[$index]);
    }

    /**
     * unset promotionalSaleItemIDArray
     *
     * Container consisting of one or more <b>ItemID</b> values. Based on the <b>Action</b> value, the listings identified by these <b>ItemID</b> values are either added to or removed from the promotional sale. <br><br> This container is required if listings are being removed (<b>Action</b>='Delete') from the promotional sale.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPromotionalSaleItemIDArray($index)
    {
        unset($this->promotionalSaleItemIDArray[$index]);
    }

    /**
     * Gets as promotionalSaleItemIDArray
     *
     * Container consisting of one or more <b>ItemID</b> values. Based on the <b>Action</b> value, the listings identified by these <b>ItemID</b> values are either added to or removed from the promotional sale. <br><br> This container is required if listings are being removed (<b>Action</b>='Delete') from the promotional sale.
     *
     * @return string[]
     */
    public function getPromotionalSaleItemIDArray()
    {
        return $this->promotionalSaleItemIDArray;
    }

    /**
     * Sets a new promotionalSaleItemIDArray
     *
     * Container consisting of one or more <b>ItemID</b> values. Based on the <b>Action</b> value, the listings identified by these <b>ItemID</b> values are either added to or removed from the promotional sale. <br><br> This container is required if listings are being removed (<b>Action</b>='Delete') from the promotional sale.
     *
     * @param string $promotionalSaleItemIDArray
     * @return self
     */
    public function setPromotionalSaleItemIDArray(array $promotionalSaleItemIDArray)
    {
        $this->promotionalSaleItemIDArray = $promotionalSaleItemIDArray;
        return $this;
    }

    /**
     * Gets as storeCategoryID
     *
     * If a <b>StoreCategoryID</b> value is included in the call request, all active items in this eBay Store category are added to the promotional sale. This field cannot be used if the <b>Action</b> field is set to 'Delete'.
     *
     * @return int
     */
    public function getStoreCategoryID()
    {
        return $this->storeCategoryID;
    }

    /**
     * Sets a new storeCategoryID
     *
     * If a <b>StoreCategoryID</b> value is included in the call request, all active items in this eBay Store category are added to the promotional sale. This field cannot be used if the <b>Action</b> field is set to 'Delete'.
     *
     * @param int $storeCategoryID
     * @return self
     */
    public function setStoreCategoryID($storeCategoryID)
    {
        $this->storeCategoryID = $storeCategoryID;
        return $this;
    }

    /**
     * Gets as categoryID
     *
     * If a <b>CategoryID</b> value is included in the call request, all active items in this eBay category are added to the promotional sale. This field cannot be used if the <b>Action</b> field is set to 'Delete'.
     *
     * @return int
     */
    public function getCategoryID()
    {
        return $this->categoryID;
    }

    /**
     * Sets a new categoryID
     *
     * If a <b>CategoryID</b> value is included in the call request, all active items in this eBay category are added to the promotional sale. This field cannot be used if the <b>Action</b> field is set to 'Delete'.
     *
     * @param int $categoryID
     * @return self
     */
    public function setCategoryID($categoryID)
    {
        $this->categoryID = $categoryID;
        return $this;
    }

    /**
     * Gets as allFixedPriceItems
     *
     * If this field is included and set to 'true' in the call request, all fixed-price listings are added to the promotional sale. This field cannot be used if the <b>Action</b> field is set to 'Delete'.
     *
     * @return bool
     */
    public function getAllFixedPriceItems()
    {
        return $this->allFixedPriceItems;
    }

    /**
     * Sets a new allFixedPriceItems
     *
     * If this field is included and set to 'true' in the call request, all fixed-price listings are added to the promotional sale. This field cannot be used if the <b>Action</b> field is set to 'Delete'.
     *
     * @param bool $allFixedPriceItems
     * @return self
     */
    public function setAllFixedPriceItems($allFixedPriceItems)
    {
        $this->allFixedPriceItems = $allFixedPriceItems;
        return $this;
    }

    /**
     * Gets as allStoreInventoryItems
     *
     * This field is deprecated and should no longer be used because Store Inventory is no longer a supported listing format.
     *
     * @return bool
     */
    public function getAllStoreInventoryItems()
    {
        return $this->allStoreInventoryItems;
    }

    /**
     * Sets a new allStoreInventoryItems
     *
     * This field is deprecated and should no longer be used because Store Inventory is no longer a supported listing format.
     *
     * @param bool $allStoreInventoryItems
     * @return self
     */
    public function setAllStoreInventoryItems($allStoreInventoryItems)
    {
        $this->allStoreInventoryItems = $allStoreInventoryItems;
        return $this;
    }

    /**
     * Gets as allAuctionItems
     *
     * If this field is included and set to 'true' in the call request, all auction listings are added to the promotional sale. This field cannot be used if the <b>Action</b> field is set to 'Delete'.
     *
     * @return bool
     */
    public function getAllAuctionItems()
    {
        return $this->allAuctionItems;
    }

    /**
     * Sets a new allAuctionItems
     *
     * If this field is included and set to 'true' in the call request, all auction listings are added to the promotional sale. This field cannot be used if the <b>Action</b> field is set to 'Delete'.
     *
     * @param bool $allAuctionItems
     * @return self
     */
    public function setAllAuctionItems($allAuctionItems)
    {
        $this->allAuctionItems = $allAuctionItems;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getPromotionalSaleID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PromotionalSaleID", $value);
        }
        $value = $this->getAction();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Action", $value);
        }
        $value = $this->getPromotionalSaleItemIDArray();
        if (null !== $value && !empty($this->getPromotionalSaleItemIDArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PromotionalSaleItemIDArray", array_map(function ($v) {
                return ["ItemID" => $v];
            }, $value));
        }
        $value = $this->getStoreCategoryID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StoreCategoryID", $value);
        }
        $value = $this->getCategoryID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryID", $value);
        }
        $value = $this->getAllFixedPriceItems();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AllFixedPriceItems", $value);
        }
        $value = $this->getAllStoreInventoryItems();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AllStoreInventoryItems", $value);
        }
        $value = $this->getAllAuctionItems();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AllAuctionItems", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PromotionalSaleID');
        if (null !== $value) {
            $this->setPromotionalSaleID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Action');
        if (null !== $value) {
            $this->setAction($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PromotionalSaleItemIDArray', true);
        if (null !== $value && !empty($value)) {
            $this->setPromotionalSaleItemIDArray($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StoreCategoryID');
        if (null !== $value) {
            $this->setStoreCategoryID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryID');
        if (null !== $value) {
            $this->setCategoryID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AllFixedPriceItems');
        if (null !== $value) {
            $this->setAllFixedPriceItems($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AllStoreInventoryItems');
        if (null !== $value) {
            $this->setAllStoreInventoryItems($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AllAuctionItems');
        if (null !== $value) {
            $this->setAllAuctionItems($value);
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
