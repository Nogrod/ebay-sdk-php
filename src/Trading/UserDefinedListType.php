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
class UserDefinedListType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
     * @return \Nogrod\eBaySDK\Trading\ItemType[]
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
     * @param \Nogrod\eBaySDK\Trading\ItemType[] $itemArray
     * @return self
     */
    public function setItemArray(array $itemArray)
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Name", $value);
        }
        $value = $this->getItemCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemCount", $value);
        }
        $value = $this->getFavoriteSearcheCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FavoriteSearcheCount", $value);
        }
        $value = $this->getFavoriteSellerCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FavoriteSellerCount", $value);
        }
        $value = $this->getItemArray();
        if (null !== $value && !empty($this->getItemArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemArray", array_map(function ($v) {
                return ["Item" => $v];
            }, $value));
        }
        $value = $this->getFavoriteSearches();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FavoriteSearches", $value);
        }
        $value = $this->getFavoriteSellers();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FavoriteSellers", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Name');
        if (null !== $value) {
            $this->setName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemCount');
        if (null !== $value) {
            $this->setItemCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FavoriteSearcheCount');
        if (null !== $value) {
            $this->setFavoriteSearcheCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FavoriteSellerCount');
        if (null !== $value) {
            $this->setFavoriteSellerCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemArray', true);
        if (null !== $value && !empty($value)) {
            $this->setItemArray(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ItemType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FavoriteSearches');
        if (null !== $value) {
            $this->setFavoriteSearches(\Nogrod\eBaySDK\Trading\MyeBayFavoriteSearchListType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FavoriteSellers');
        if (null !== $value) {
            $this->setFavoriteSellers(\Nogrod\eBaySDK\Trading\MyeBayFavoriteSellerListType::fromKeyValue($value));
        }
    }
}
