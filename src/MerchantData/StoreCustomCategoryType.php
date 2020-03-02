<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing StoreCustomCategoryType
 *
 * Configuration of a store custom category.
 * XSD Type: StoreCustomCategoryType
 */
class StoreCustomCategoryType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Custom category ID. For SetStoreCategories, required only if
     *  Action is set to Rename, Move or Delete.
     *
     * @var int $categoryID
     */
    private $categoryID = null;

    /**
     * Name of the custom category.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Order in which the custom category appears in the list of store
     *  categories.
     *
     * @var int $order
     */
    private $order = null;

    /**
     * Contains the properties of a custom subcategory for an eBay Store. eBay Stores support
     *  three category levels.
     *
     * @var \Nogrod\eBaySDK\MerchantData\StoreCustomCategoryType[] $childCategory
     */
    private $childCategory = [
        
    ];

    /**
     * Gets as categoryID
     *
     * Custom category ID. For SetStoreCategories, required only if
     *  Action is set to Rename, Move or Delete.
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
     * Custom category ID. For SetStoreCategories, required only if
     *  Action is set to Rename, Move or Delete.
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
     * Gets as name
     *
     * Name of the custom category.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Name of the custom category.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as order
     *
     * Order in which the custom category appears in the list of store
     *  categories.
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order
     *
     * Order in which the custom category appears in the list of store
     *  categories.
     *
     * @param int $order
     * @return self
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * Adds as childCategory
     *
     * Contains the properties of a custom subcategory for an eBay Store. eBay Stores support
     *  three category levels.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\StoreCustomCategoryType $childCategory
     */
    public function addToChildCategory(\Nogrod\eBaySDK\MerchantData\StoreCustomCategoryType $childCategory)
    {
        $this->childCategory[] = $childCategory;
        return $this;
    }

    /**
     * isset childCategory
     *
     * Contains the properties of a custom subcategory for an eBay Store. eBay Stores support
     *  three category levels.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetChildCategory($index)
    {
        return isset($this->childCategory[$index]);
    }

    /**
     * unset childCategory
     *
     * Contains the properties of a custom subcategory for an eBay Store. eBay Stores support
     *  three category levels.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetChildCategory($index)
    {
        unset($this->childCategory[$index]);
    }

    /**
     * Gets as childCategory
     *
     * Contains the properties of a custom subcategory for an eBay Store. eBay Stores support
     *  three category levels.
     *
     * @return \Nogrod\eBaySDK\MerchantData\StoreCustomCategoryType[]
     */
    public function getChildCategory()
    {
        return $this->childCategory;
    }

    /**
     * Sets a new childCategory
     *
     * Contains the properties of a custom subcategory for an eBay Store. eBay Stores support
     *  three category levels.
     *
     * @param \Nogrod\eBaySDK\MerchantData\StoreCustomCategoryType[] $childCategory
     * @return self
     */
    public function setChildCategory(array $childCategory)
    {
        $this->childCategory = $childCategory;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getCategoryID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryID", $value);
        }
        $value = $this->getName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Name", $value);
        }
        $value = $this->getOrder();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Order", $value);
        }
        $value = $this->getChildCategory();
        if (null !== $value && !empty($this->getChildCategory())) {
            $writer->write(array_map(function ($v) {
                return ["ChildCategory" => $v];
            }, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryID');
        if (null !== $value) {
            $this->setCategoryID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Name');
        if (null !== $value) {
            $this->setName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Order');
        if (null !== $value) {
            $this->setOrder($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ChildCategory', true);
        if (null !== $value && !empty($value)) {
            $this->setChildCategory(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\StoreCustomCategoryType::fromKeyValue($v);
            }, $value));
        }
    }
}
