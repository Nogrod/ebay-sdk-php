<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing StoreCustomCategoryType
 *
 * This type is used to express details about a customized eBay Store category.
 * XSD Type: StoreCustomCategoryType
 */
class StoreCustomCategoryType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Unique identifier of an eBay Store's custom category. eBay auto-generates this identifier when a seller establishes a custom store category. This category ID should not be confused with an eBay category ID.
     *  <br>
     *  <br>
     *  This field is conditionally required for <b>SetStoreCategories</b>, if the <b>Action</b> value is set to <code>Rename</code>, <code>Move</code> or <code>Delete</code>.
     *
     * @var int $categoryID
     */
    private $categoryID = null;

    /**
     * The seller-specified name of the custom category.
     *  <br>
     *  This field is conditionally required for <b>SetStoreCategories</b>, if the <b>Action</b> value is set to <code>Add</code>.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * The order in which the custom store category appears in the list of store
     *  categories when the eBay store is visited.
     *
     * @var int $order
     */
    private $order = null;

    /**
     * This container is used if the seller wants to add child categories to a top-level eBay store category. eBay Stores support three category levels.
     *
     * @var \Nogrod\eBaySDK\Trading\StoreCustomCategoryType[] $childCategory
     */
    private $childCategory = [

    ];

    /**
     * Gets as categoryID
     *
     * Unique identifier of an eBay Store's custom category. eBay auto-generates this identifier when a seller establishes a custom store category. This category ID should not be confused with an eBay category ID.
     *  <br>
     *  <br>
     *  This field is conditionally required for <b>SetStoreCategories</b>, if the <b>Action</b> value is set to <code>Rename</code>, <code>Move</code> or <code>Delete</code>.
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
     * Unique identifier of an eBay Store's custom category. eBay auto-generates this identifier when a seller establishes a custom store category. This category ID should not be confused with an eBay category ID.
     *  <br>
     *  <br>
     *  This field is conditionally required for <b>SetStoreCategories</b>, if the <b>Action</b> value is set to <code>Rename</code>, <code>Move</code> or <code>Delete</code>.
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
     * The seller-specified name of the custom category.
     *  <br>
     *  This field is conditionally required for <b>SetStoreCategories</b>, if the <b>Action</b> value is set to <code>Add</code>.
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
     * The seller-specified name of the custom category.
     *  <br>
     *  This field is conditionally required for <b>SetStoreCategories</b>, if the <b>Action</b> value is set to <code>Add</code>.
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
     * The order in which the custom store category appears in the list of store
     *  categories when the eBay store is visited.
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
     * The order in which the custom store category appears in the list of store
     *  categories when the eBay store is visited.
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
     * This container is used if the seller wants to add child categories to a top-level eBay store category. eBay Stores support three category levels.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\StoreCustomCategoryType $childCategory
     */
    public function addToChildCategory(\Nogrod\eBaySDK\Trading\StoreCustomCategoryType $childCategory)
    {
        $this->childCategory[] = $childCategory;
        return $this;
    }

    /**
     * isset childCategory
     *
     * This container is used if the seller wants to add child categories to a top-level eBay store category. eBay Stores support three category levels.
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
     * This container is used if the seller wants to add child categories to a top-level eBay store category. eBay Stores support three category levels.
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
     * This container is used if the seller wants to add child categories to a top-level eBay store category. eBay Stores support three category levels.
     *
     * @return \Nogrod\eBaySDK\Trading\StoreCustomCategoryType[]
     */
    public function getChildCategory()
    {
        return $this->childCategory;
    }

    /**
     * Sets a new childCategory
     *
     * This container is used if the seller wants to add child categories to a top-level eBay store category. eBay Stores support three category levels.
     *
     * @param \Nogrod\eBaySDK\Trading\StoreCustomCategoryType[] $childCategory
     * @return self
     */
    public function setChildCategory(array $childCategory)
    {
        $this->childCategory = $childCategory;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
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
            $writer->write(array_map(function ($v) {return ["ChildCategory" => $v];}, $value));
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
            $this->setChildCategory(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\StoreCustomCategoryType::fromKeyValue($v);}, $value));
        }
    }
}
