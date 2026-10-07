<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing UserDefinedListType
 *
 * Contains the items, searches and sellers that the user has saved to this
 *  list using the "Add to list" feature. The name of the list is given by the
 *  "Name" element.
 * XSD Type: UserDefinedListType
 */
class UserDefinedListType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * The user's chosen name for this list.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * The value in this field indicates the total number of items in the
     *  user-defined list. The number of <b>Item</b> nodes in the
     *  <b>ItemArray</b> should match this value.
     *
     * @var int $itemCount
     */
    private $itemCount = null;

    /**
     * This field is not supported.
     *
     * @var int $favoriteSearcheCount
     */
    private $favoriteSearcheCount = null;

    /**
     * The value in this field indicates the total number of favorite sellers in the
     *  user-defined list. The number of <b>FavoriteSeller</b> nodes returned
     *  in the response should match this value.
     *
     * @var int $favoriteSellerCount
     */
    private $favoriteSellerCount = null;

    /**
     * An array of Items that the user has added to the user-defined list.
     *
     * @var \Nogrod\eBaySDK\Trading\ItemType[] $itemArray
     */
    private $itemArray = null;

    /**
     * An array of Favorite Searches that the user has added to the user-defined list.
     *
     * @var \Nogrod\eBaySDK\Trading\MyeBayFavoriteSearchListType $favoriteSearches
     */
    private $favoriteSearches = null;

    /**
     * An array of Favorite Sellers that the user has added to the user-defined list.
     *
     * @var \Nogrod\eBaySDK\Trading\MyeBayFavoriteSellerListType $favoriteSellers
     */
    private $favoriteSellers = null;

    /**
     * Gets as name
     *
     * The user's chosen name for this list.
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
     * The user's chosen name for this list.
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
     * Gets as itemCount
     *
     * The value in this field indicates the total number of items in the
     *  user-defined list. The number of <b>Item</b> nodes in the
     *  <b>ItemArray</b> should match this value.
     *
     * @return int
     */
    public function getItemCount()
    {
        return $this->itemCount;
    }

    /**
     * Sets a new itemCount
     *
     * The value in this field indicates the total number of items in the
     *  user-defined list. The number of <b>Item</b> nodes in the
     *  <b>ItemArray</b> should match this value.
     *
     * @param int $itemCount
     * @return self
     */
    public function setItemCount($itemCount)
    {
        $this->itemCount = $itemCount;
        return $this;
    }

    /**
     * Gets as favoriteSearcheCount
     *
     * This field is not supported.
     *
     * @return int
     */
    public function getFavoriteSearcheCount()
    {
        return $this->favoriteSearcheCount;
    }

    /**
     * Sets a new favoriteSearcheCount
     *
     * This field is not supported.
     *
     * @param int $favoriteSearcheCount
     * @return self
     */
    public function setFavoriteSearcheCount($favoriteSearcheCount)
    {
        $this->favoriteSearcheCount = $favoriteSearcheCount;
        return $this;
    }

    /**
     * Gets as favoriteSellerCount
     *
     * The value in this field indicates the total number of favorite sellers in the
     *  user-defined list. The number of <b>FavoriteSeller</b> nodes returned
     *  in the response should match this value.
     *
     * @return int
     */
    public function getFavoriteSellerCount()
    {
        return $this->favoriteSellerCount;
    }

    /**
     * Sets a new favoriteSellerCount
     *
     * The value in this field indicates the total number of favorite sellers in the
     *  user-defined list. The number of <b>FavoriteSeller</b> nodes returned
     *  in the response should match this value.
     *
     * @param int $favoriteSellerCount
     * @return self
     */
    public function setFavoriteSellerCount($favoriteSellerCount)
    {
        $this->favoriteSellerCount = $favoriteSellerCount;
        return $this;
    }

    /**
     * Adds as item
     *
     * An array of Items that the user has added to the user-defined list.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ItemType $item
     */
    public function addToItemArray(\Nogrod\eBaySDK\Trading\ItemType $item)
    {
        if (!is_array($this->itemArray)) {
            throw new \LogicException('itemArray is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->itemArray[] = $item;
        return $this;
    }

    /**
     * isset itemArray
     *
     * An array of Items that the user has added to the user-defined list.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemArray($index)
    {
        return isset($this->itemArray[$index]);
    }

    /**
     * unset itemArray
     *
     * An array of Items that the user has added to the user-defined list.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemArray($index)
    {
        unset($this->itemArray[$index]);
    }

    /**
     * Gets as itemArray
     *
     * An array of Items that the user has added to the user-defined list.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\ItemType>
     */
    public function getItemArray()
    {
        return $this->itemArray;
    }

    /**
     * Sets a new itemArray
     *
     * An array of Items that the user has added to the user-defined list.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\ItemType> $itemArray
     * @return self
     */
    public function setItemArray(iterable $itemArray)
    {
        $this->itemArray = $itemArray;
        return $this;
    }

    /**
     * Gets as favoriteSearches
     *
     * An array of Favorite Searches that the user has added to the user-defined list.
     *
     * @return \Nogrod\eBaySDK\Trading\MyeBayFavoriteSearchListType
     */
    public function getFavoriteSearches()
    {
        return $this->favoriteSearches;
    }

    /**
     * Sets a new favoriteSearches
     *
     * An array of Favorite Searches that the user has added to the user-defined list.
     *
     * @param \Nogrod\eBaySDK\Trading\MyeBayFavoriteSearchListType $favoriteSearches
     * @return self
     */
    public function setFavoriteSearches(\Nogrod\eBaySDK\Trading\MyeBayFavoriteSearchListType $favoriteSearches)
    {
        $this->favoriteSearches = $favoriteSearches;
        return $this;
    }

    /**
     * Gets as favoriteSellers
     *
     * An array of Favorite Sellers that the user has added to the user-defined list.
     *
     * @return \Nogrod\eBaySDK\Trading\MyeBayFavoriteSellerListType
     */
    public function getFavoriteSellers()
    {
        return $this->favoriteSellers;
    }

    /**
     * Sets a new favoriteSellers
     *
     * An array of Favorite Sellers that the user has added to the user-defined list.
     *
     * @param \Nogrod\eBaySDK\Trading\MyeBayFavoriteSellerListType $favoriteSellers
     * @return self
     */
    public function setFavoriteSellers(\Nogrod\eBaySDK\Trading\MyeBayFavoriteSellerListType $favoriteSellers)
    {
        $this->favoriteSellers = $favoriteSellers;
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
        $value = $this->name;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Name', null, (string) $value);
        }
        $value = $this->itemCount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ItemCount', null, (string) $value);
        }
        $value = $this->favoriteSearcheCount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'FavoriteSearcheCount', null, (string) $value);
        }
        $value = $this->favoriteSellerCount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'FavoriteSellerCount', null, (string) $value);
        }
        $value = $this->itemArray;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'ItemArray', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'Item', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
                $writer->endElement();
            }
        }
        $value = $this->favoriteSearches;
        if (null !== $value) {
            $writer->startElementNs(null, 'FavoriteSearches', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->favoriteSellers;
        if (null !== $value) {
            $writer->startElementNs(null, 'FavoriteSellers', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\UserDefinedListType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->itemArray = [];
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
                case 'Name':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->name = $value;
                    }
                    return true;
                case 'ItemCount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->itemCount = (int) $value;
                    }
                    return true;
                case 'FavoriteSearcheCount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->favoriteSearcheCount = (int) $value;
                    }
                    return true;
                case 'FavoriteSellerCount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->favoriteSellerCount = (int) $value;
                    }
                    return true;
                case 'ItemArray':
                    $this->itemArray = Func::readList($reader, 'Item', 'urn:ebay:apis:eBLBaseComponents', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\Trading\ItemType::xmlRead($reader));
                    return true;
                case 'FavoriteSearches':
                    $this->favoriteSearches = \Nogrod\eBaySDK\Trading\MyeBayFavoriteSearchListType::xmlRead($reader);
                    return true;
                case 'FavoriteSellers':
                    $this->favoriteSellers = \Nogrod\eBaySDK\Trading\MyeBayFavoriteSellerListType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['Name'] = $this->name;
        $data['ItemCount'] = $this->itemCount;
        $data['FavoriteSearcheCount'] = $this->favoriteSearcheCount;
        $data['FavoriteSellerCount'] = $this->favoriteSellerCount;
        $data['ItemArray'] = Func::jsonList($this->itemArray);
        $data['FavoriteSearches'] = $this->favoriteSearches;
        $data['FavoriteSellers'] = $this->favoriteSellers;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
