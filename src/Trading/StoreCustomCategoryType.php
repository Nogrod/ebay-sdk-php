<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing StoreCustomCategoryType
 *
 * This type is used to express details about a customized eBay Store category.
 * XSD Type: StoreCustomCategoryType
 */
class StoreCustomCategoryType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
        if (!is_array($this->childCategory)) {
            throw new \LogicException('childCategory is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\StoreCustomCategoryType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\StoreCustomCategoryType> $childCategory
     * @return self
     */
    public function setChildCategory(iterable $childCategory)
    {
        $this->childCategory = $childCategory;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->categoryID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'CategoryID', null, (string) $value);
        }
        $value = $this->name;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Name', null, (string) $value);
        }
        $value = $this->order;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Order', null, (string) $value);
        }
        $value = $this->childCategory;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'ChildCategory', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\StoreCustomCategoryType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->childCategory = [];
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'CategoryID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->categoryID = (int) $value;
                    }
                    return true;
                case 'Name':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->name = $value;
                    }
                    return true;
                case 'Order':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->order = (int) $value;
                    }
                    return true;
                case 'ChildCategory':
                    $this->childCategory[] = \Nogrod\eBaySDK\Trading\StoreCustomCategoryType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['CategoryID'] = $this->categoryID;
        $data['Name'] = $this->name;
        $data['Order'] = $this->order;
        $data['ChildCategory'] = Func::jsonList($this->childCategory);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
