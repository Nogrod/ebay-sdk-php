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
        if (!is_array($this->storeCategories)) {
            throw new \LogicException('storeCategories is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\StoreCustomCategoryType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\StoreCustomCategoryType> $storeCategories
     * @return self
     */
    public function setStoreCategories(iterable $storeCategories)
    {
        $this->storeCategories = $storeCategories;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->action;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Action', null, (string) $value);
        }
        $value = $this->itemDestinationCategoryID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ItemDestinationCategoryID', null, (string) $value);
        }
        $value = $this->destinationParentCategoryID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DestinationParentCategoryID', null, (string) $value);
        }
        $value = $this->storeCategories;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'StoreCategories', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'CustomCategory', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\SetStoreCategoriesRequestType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
        $this->storeCategories = [];
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return parent::xmlReadAttribute($reader);
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'Action':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->action = $value;
                    }
                    return true;
                case 'ItemDestinationCategoryID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->itemDestinationCategoryID = (int) $value;
                    }
                    return true;
                case 'DestinationParentCategoryID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->destinationParentCategoryID = (int) $value;
                    }
                    return true;
                case 'StoreCategories':
                    $this->storeCategories = Func::readList($reader, 'CustomCategory', 'urn:ebay:apis:eBLBaseComponents', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\Trading\StoreCustomCategoryType::xmlRead($reader));
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }

    protected function jsonProperties(): array
    {
        $data = parent::jsonProperties();
        $data['Action'] = $this->action;
        $data['ItemDestinationCategoryID'] = $this->itemDestinationCategoryID;
        $data['DestinationParentCategoryID'] = $this->destinationParentCategoryID;
        $data['StoreCategories'] = Func::jsonList($this->storeCategories);
        return $data;
    }
}
