<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SetStoreCategoriesRequestType
 *
 * This call allows you to set or modify the category structure of an eBay Store. Sellers must have an eBay Store subscription in order to use this call.
 * XSD Type: SetStoreCategoriesRequestType
 */
class SetStoreCategoriesRequestType extends AbstractRequestType
{
    /**
     * Specifies the type of action (Add, Move, Delete, or Rename) to carry out
     *  for the specified eBay Store categories.
     *
     * @var string $action
     */
    private $action = null;

    /**
     * Items can only be contained within child categories. A parent category
     *  cannot contain items. If adding, moving, or deleting categories displaces
     *  items, you must specify a destination child category under which the
     *  displaced items will be moved. The destination category must have no
     *  child categories.
     *
     * @var int $itemDestinationCategoryID
     */
    private $itemDestinationCategoryID = null;

    /**
     * When adding or moving store categories, specifies the category under
     *  which the listed categories will be located. To add or move categories to
     *  the top level, set the value to -999.
     *
     * @var int $destinationParentCategoryID
     */
    private $destinationParentCategoryID = null;

    /**
     * Specifies the store categories on which to act.
     *
     * @var \Nogrod\eBaySDK\Trading\StoreCustomCategoryType[] $storeCategories
     */
    private $storeCategories = null;

    /**
     * Gets as action
     *
     * Specifies the type of action (Add, Move, Delete, or Rename) to carry out
     *  for the specified eBay Store categories.
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
     * Specifies the type of action (Add, Move, Delete, or Rename) to carry out
     *  for the specified eBay Store categories.
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
     * Gets as itemDestinationCategoryID
     *
     * Items can only be contained within child categories. A parent category
     *  cannot contain items. If adding, moving, or deleting categories displaces
     *  items, you must specify a destination child category under which the
     *  displaced items will be moved. The destination category must have no
     *  child categories.
     *
     * @return int
     */
    public function getItemDestinationCategoryID()
    {
        return $this->itemDestinationCategoryID;
    }

    /**
     * Sets a new itemDestinationCategoryID
     *
     * Items can only be contained within child categories. A parent category
     *  cannot contain items. If adding, moving, or deleting categories displaces
     *  items, you must specify a destination child category under which the
     *  displaced items will be moved. The destination category must have no
     *  child categories.
     *
     * @param int $itemDestinationCategoryID
     * @return self
     */
    public function setItemDestinationCategoryID($itemDestinationCategoryID)
    {
        $this->itemDestinationCategoryID = $itemDestinationCategoryID;
        return $this;
    }

    /**
     * Gets as destinationParentCategoryID
     *
     * When adding or moving store categories, specifies the category under
     *  which the listed categories will be located. To add or move categories to
     *  the top level, set the value to -999.
     *
     * @return int
     */
    public function getDestinationParentCategoryID()
    {
        return $this->destinationParentCategoryID;
    }

    /**
     * Sets a new destinationParentCategoryID
     *
     * When adding or moving store categories, specifies the category under
     *  which the listed categories will be located. To add or move categories to
     *  the top level, set the value to -999.
     *
     * @param int $destinationParentCategoryID
     * @return self
     */
    public function setDestinationParentCategoryID($destinationParentCategoryID)
    {
        $this->destinationParentCategoryID = $destinationParentCategoryID;
        return $this;
    }

    /**
     * Adds as customCategory
     *
     * Specifies the store categories on which to act.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\StoreCustomCategoryType $customCategory
     */
    public function addToStoreCategories(\Nogrod\eBaySDK\Trading\StoreCustomCategoryType $customCategory)
    {
        $this->storeCategories[] = $customCategory;
        return $this;
    }

    /**
     * isset storeCategories
     *
     * Specifies the store categories on which to act.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStoreCategories($index)
    {
        return isset($this->storeCategories[$index]);
    }

    /**
     * unset storeCategories
     *
     * Specifies the store categories on which to act.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStoreCategories($index)
    {
        unset($this->storeCategories[$index]);
    }

    /**
     * Gets as storeCategories
     *
     * Specifies the store categories on which to act.
     *
     * @return \Nogrod\eBaySDK\Trading\StoreCustomCategoryType[]
     */
    public function getStoreCategories()
    {
        return $this->storeCategories;
    }

    /**
     * Sets a new storeCategories
     *
     * Specifies the store categories on which to act.
     *
     * @param \Nogrod\eBaySDK\Trading\StoreCustomCategoryType[] $storeCategories
     * @return self
     */
    public function setStoreCategories(array $storeCategories)
    {
        $this->storeCategories = $storeCategories;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getAction();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Action", $value);
        }
        $value = $this->getItemDestinationCategoryID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemDestinationCategoryID", $value);
        }
        $value = $this->getDestinationParentCategoryID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DestinationParentCategoryID", $value);
        }
        $value = $this->getStoreCategories();
        if (null !== $value && [] !== $this->getStoreCategories()) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StoreCategories", array_map(function ($v) {return ["CustomCategory" => $v];}, $value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\SetStoreCategoriesRequestType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        parent::setKeyValue($keyValue);
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}Action');
        if (null !== $value) {
            $this->setAction($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemDestinationCategoryID');
        if (null !== $value) {
            $this->setItemDestinationCategoryID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}DestinationParentCategoryID');
        if (null !== $value) {
            $this->setDestinationParentCategoryID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StoreCategories');
        if (null !== $value) {
            $this->setStoreCategories(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\StoreCustomCategoryType::fromKeyValue(Func::mapObject($v, '{urn:ebay:apis:eBLBaseComponents}CustomCategory'));}, $value));
        }
    }
}
