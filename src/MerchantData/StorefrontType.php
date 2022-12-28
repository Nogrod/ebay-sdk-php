<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing StorefrontType
 *
 * This type defines the <b>Storefront</b> container, which can be used by eBay Stores sellers to list an item under two primary custom categories either by category ID or category name. A custom category is a category that was created by a seller in their eBay store. This container is used by Add/Revise/Relist calls.
 *  <br/><br/>
 *  The <b>Storefront</b> container is also returned in <b>GetItem</b> and other Trading calls that retrieve Item data.
 *  <br/><br/>
 *  <span class="tablenote"><b>Note: </b>
 *  This type is applicable only for eBay Store sellers.
 *  </span>
 * XSD Type: StorefrontType
 */
class StorefrontType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Unique identifier of a primary custom category in which to list the item. A custom category is a category that the seller created in their eBay Store. eBay Store sellers can create up to three levels of custom categories for their stores, but the API only supports root-level categories.
     *  <br> <br>
     *  To list an item using the categories in a seller's store, you must set this field to a root-level custom category or a custom category that has no child categories (subcategories). If you attempt to list an item in a category that has subcategories, the call response contains a warning, and the item is listed in the 'Other' store category.
     *
     * @var int $storeCategoryID
     */
    private $storeCategoryID = null;

    /**
     * Unique identifier for the secondary custom category in which to list the item. Set this field to a root-level custom category or a custom category that has no child categories (subcategories).
     *  <br> <br>
     *  The system resets the value to 0 (None) in the following cases:
     *  <br> - The values of <b>StoreCategoryID</b> and <b>StoreCategory2ID</b> field are the same
     *  <br> - You specify <b>StoreCategory2ID</b> but not <b>StoreCategoryID</b>
     *  <br> <br>
     *  <br>In other words, <b>StoreCategoryID</b> must be set to a valid custom category and be different from <b>StoreCategory2ID</b>.
     *
     * @var int $storeCategory2ID
     */
    private $storeCategory2ID = null;

    /**
     * Category name of a primary custom category in which to list the item. A custom category is a category that the seller created in their eBay Store. eBay Store sellers can create up to three levels of custom categories for their stores, but the API only supports root-level categories.
     *  <br> <br>
     *  To list an item using a category name from a seller's store, you must set this field to a root-level custom category or a custom category that has no child categories (subcategories). If you attempt to list an item in a category that has subcategories, the call response contains a warning, and the item is listed in the store category called 'Other'.
     *
     * @var string $storeCategoryName
     */
    private $storeCategoryName = null;

    /**
     * Name of the secondary custom category in which to list the item. Set this field to a root-level custom category or a custom category that has no child categories (subcategories).
     *  <br> <br>
     *  The system resets the value to 0 (None) in the following cases:
     *  <br> - The values of <b>StoreCategoryName</b> and <b>StoreCategory2Name</b> field are the same
     *  <br> - You specify <b>StoreCategory2Name</b> but not <b>StoreCategoryName</b>
     *  <br> <br>
     *  <br>In other words <b>StoreCategoryName</b> must be set to a valid custom category name and be different from <b>StoreCategory2Name</b>.
     *
     * @var string $storeCategory2Name
     */
    private $storeCategory2Name = null;

    /**
     * The URL of the seller's eBay Stores page.
     *
     * @var string $storeURL
     */
    private $storeURL = null;

    /**
     * The name of the seller's eBay Store.
     *
     * @var string $storeName
     */
    private $storeName = null;

    /**
     * Gets as storeCategoryID
     *
     * Unique identifier of a primary custom category in which to list the item. A custom category is a category that the seller created in their eBay Store. eBay Store sellers can create up to three levels of custom categories for their stores, but the API only supports root-level categories.
     *  <br> <br>
     *  To list an item using the categories in a seller's store, you must set this field to a root-level custom category or a custom category that has no child categories (subcategories). If you attempt to list an item in a category that has subcategories, the call response contains a warning, and the item is listed in the 'Other' store category.
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
     * Unique identifier of a primary custom category in which to list the item. A custom category is a category that the seller created in their eBay Store. eBay Store sellers can create up to three levels of custom categories for their stores, but the API only supports root-level categories.
     *  <br> <br>
     *  To list an item using the categories in a seller's store, you must set this field to a root-level custom category or a custom category that has no child categories (subcategories). If you attempt to list an item in a category that has subcategories, the call response contains a warning, and the item is listed in the 'Other' store category.
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
     * Gets as storeCategory2ID
     *
     * Unique identifier for the secondary custom category in which to list the item. Set this field to a root-level custom category or a custom category that has no child categories (subcategories).
     *  <br> <br>
     *  The system resets the value to 0 (None) in the following cases:
     *  <br> - The values of <b>StoreCategoryID</b> and <b>StoreCategory2ID</b> field are the same
     *  <br> - You specify <b>StoreCategory2ID</b> but not <b>StoreCategoryID</b>
     *  <br> <br>
     *  <br>In other words, <b>StoreCategoryID</b> must be set to a valid custom category and be different from <b>StoreCategory2ID</b>.
     *
     * @return int
     */
    public function getStoreCategory2ID()
    {
        return $this->storeCategory2ID;
    }

    /**
     * Sets a new storeCategory2ID
     *
     * Unique identifier for the secondary custom category in which to list the item. Set this field to a root-level custom category or a custom category that has no child categories (subcategories).
     *  <br> <br>
     *  The system resets the value to 0 (None) in the following cases:
     *  <br> - The values of <b>StoreCategoryID</b> and <b>StoreCategory2ID</b> field are the same
     *  <br> - You specify <b>StoreCategory2ID</b> but not <b>StoreCategoryID</b>
     *  <br> <br>
     *  <br>In other words, <b>StoreCategoryID</b> must be set to a valid custom category and be different from <b>StoreCategory2ID</b>.
     *
     * @param int $storeCategory2ID
     * @return self
     */
    public function setStoreCategory2ID($storeCategory2ID)
    {
        $this->storeCategory2ID = $storeCategory2ID;
        return $this;
    }

    /**
     * Gets as storeCategoryName
     *
     * Category name of a primary custom category in which to list the item. A custom category is a category that the seller created in their eBay Store. eBay Store sellers can create up to three levels of custom categories for their stores, but the API only supports root-level categories.
     *  <br> <br>
     *  To list an item using a category name from a seller's store, you must set this field to a root-level custom category or a custom category that has no child categories (subcategories). If you attempt to list an item in a category that has subcategories, the call response contains a warning, and the item is listed in the store category called 'Other'.
     *
     * @return string
     */
    public function getStoreCategoryName()
    {
        return $this->storeCategoryName;
    }

    /**
     * Sets a new storeCategoryName
     *
     * Category name of a primary custom category in which to list the item. A custom category is a category that the seller created in their eBay Store. eBay Store sellers can create up to three levels of custom categories for their stores, but the API only supports root-level categories.
     *  <br> <br>
     *  To list an item using a category name from a seller's store, you must set this field to a root-level custom category or a custom category that has no child categories (subcategories). If you attempt to list an item in a category that has subcategories, the call response contains a warning, and the item is listed in the store category called 'Other'.
     *
     * @param string $storeCategoryName
     * @return self
     */
    public function setStoreCategoryName($storeCategoryName)
    {
        $this->storeCategoryName = $storeCategoryName;
        return $this;
    }

    /**
     * Gets as storeCategory2Name
     *
     * Name of the secondary custom category in which to list the item. Set this field to a root-level custom category or a custom category that has no child categories (subcategories).
     *  <br> <br>
     *  The system resets the value to 0 (None) in the following cases:
     *  <br> - The values of <b>StoreCategoryName</b> and <b>StoreCategory2Name</b> field are the same
     *  <br> - You specify <b>StoreCategory2Name</b> but not <b>StoreCategoryName</b>
     *  <br> <br>
     *  <br>In other words <b>StoreCategoryName</b> must be set to a valid custom category name and be different from <b>StoreCategory2Name</b>.
     *
     * @return string
     */
    public function getStoreCategory2Name()
    {
        return $this->storeCategory2Name;
    }

    /**
     * Sets a new storeCategory2Name
     *
     * Name of the secondary custom category in which to list the item. Set this field to a root-level custom category or a custom category that has no child categories (subcategories).
     *  <br> <br>
     *  The system resets the value to 0 (None) in the following cases:
     *  <br> - The values of <b>StoreCategoryName</b> and <b>StoreCategory2Name</b> field are the same
     *  <br> - You specify <b>StoreCategory2Name</b> but not <b>StoreCategoryName</b>
     *  <br> <br>
     *  <br>In other words <b>StoreCategoryName</b> must be set to a valid custom category name and be different from <b>StoreCategory2Name</b>.
     *
     * @param string $storeCategory2Name
     * @return self
     */
    public function setStoreCategory2Name($storeCategory2Name)
    {
        $this->storeCategory2Name = $storeCategory2Name;
        return $this;
    }

    /**
     * Gets as storeURL
     *
     * The URL of the seller's eBay Stores page.
     *
     * @return string
     */
    public function getStoreURL()
    {
        return $this->storeURL;
    }

    /**
     * Sets a new storeURL
     *
     * The URL of the seller's eBay Stores page.
     *
     * @param string $storeURL
     * @return self
     */
    public function setStoreURL($storeURL)
    {
        $this->storeURL = $storeURL;
        return $this;
    }

    /**
     * Gets as storeName
     *
     * The name of the seller's eBay Store.
     *
     * @return string
     */
    public function getStoreName()
    {
        return $this->storeName;
    }

    /**
     * Sets a new storeName
     *
     * The name of the seller's eBay Store.
     *
     * @param string $storeName
     * @return self
     */
    public function setStoreName($storeName)
    {
        $this->storeName = $storeName;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getStoreCategoryID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StoreCategoryID", $value);
        }
        $value = $this->getStoreCategory2ID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StoreCategory2ID", $value);
        }
        $value = $this->getStoreCategoryName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StoreCategoryName", $value);
        }
        $value = $this->getStoreCategory2Name();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StoreCategory2Name", $value);
        }
        $value = $this->getStoreURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StoreURL", $value);
        }
        $value = $this->getStoreName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StoreName", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StoreCategoryID');
        if (null !== $value) {
            $this->setStoreCategoryID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StoreCategory2ID');
        if (null !== $value) {
            $this->setStoreCategory2ID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StoreCategoryName');
        if (null !== $value) {
            $this->setStoreCategoryName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StoreCategory2Name');
        if (null !== $value) {
            $this->setStoreCategory2Name($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StoreURL');
        if (null !== $value) {
            $this->setStoreURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StoreName');
        if (null !== $value) {
            $this->setStoreName($value);
        }
    }
}
