<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellerFavoriteItemPreferencesType
 *
 * Contains the data for the seller favorite item preferences, i.e. the manual or automatic selection criteria to display items for buyer's favourite seller opt in email marketing.
 * XSD Type: SellerFavoriteItemPreferencesType
 */
class SellerFavoriteItemPreferencesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The keywords in the item title for the automatic item search criteria.
     *
     * @var string $searchKeywords
     */
    private $searchKeywords = null;

    /**
     * (For eBay Store owners only) The store custom category for the automatic item search criteria.
     *
     * @var int $storeCategoryID
     */
    private $storeCategoryID = null;

    /**
     * The listing format (fixed price, auction, etc) for the automatic item search criteria.
     *
     * @var string $listingType
     */
    private $listingType = null;

    /**
     * The sort order chosen from the standard ebay sorts for the automatic search criteria.
     *
     * @var string $searchSortOrder
     */
    private $searchSortOrder = null;

    /**
     * Specifies the lower limit of price range for the automatic search criteria.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $minPrice
     */
    private $minPrice = null;

    /**
     * Specifies the upper limit of price range for the automatic search criteria.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $maxPrice
     */
    private $maxPrice = null;

    /**
     * Specifies the list of favorite items.
     *
     * @var string[] $favoriteItemID
     */
    private $favoriteItemID = [

    ];

    /**
     * Gets as searchKeywords
     *
     * The keywords in the item title for the automatic item search criteria.
     *
     * @return string
     */
    public function getSearchKeywords()
    {
        return $this->searchKeywords;
    }

    /**
     * Sets a new searchKeywords
     *
     * The keywords in the item title for the automatic item search criteria.
     *
     * @param string $searchKeywords
     * @return self
     */
    public function setSearchKeywords($searchKeywords)
    {
        $this->searchKeywords = $searchKeywords;
        return $this;
    }

    /**
     * Gets as storeCategoryID
     *
     * (For eBay Store owners only) The store custom category for the automatic item search criteria.
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
     * (For eBay Store owners only) The store custom category for the automatic item search criteria.
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
     * Gets as listingType
     *
     * The listing format (fixed price, auction, etc) for the automatic item search criteria.
     *
     * @return string
     */
    public function getListingType()
    {
        return $this->listingType;
    }

    /**
     * Sets a new listingType
     *
     * The listing format (fixed price, auction, etc) for the automatic item search criteria.
     *
     * @param string $listingType
     * @return self
     */
    public function setListingType($listingType)
    {
        $this->listingType = $listingType;
        return $this;
    }

    /**
     * Gets as searchSortOrder
     *
     * The sort order chosen from the standard ebay sorts for the automatic search criteria.
     *
     * @return string
     */
    public function getSearchSortOrder()
    {
        return $this->searchSortOrder;
    }

    /**
     * Sets a new searchSortOrder
     *
     * The sort order chosen from the standard ebay sorts for the automatic search criteria.
     *
     * @param string $searchSortOrder
     * @return self
     */
    public function setSearchSortOrder($searchSortOrder)
    {
        $this->searchSortOrder = $searchSortOrder;
        return $this;
    }

    /**
     * Gets as minPrice
     *
     * Specifies the lower limit of price range for the automatic search criteria.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getMinPrice()
    {
        return $this->minPrice;
    }

    /**
     * Sets a new minPrice
     *
     * Specifies the lower limit of price range for the automatic search criteria.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $minPrice
     * @return self
     */
    public function setMinPrice(\Nogrod\eBaySDK\Trading\AmountType $minPrice)
    {
        $this->minPrice = $minPrice;
        return $this;
    }

    /**
     * Gets as maxPrice
     *
     * Specifies the upper limit of price range for the automatic search criteria.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getMaxPrice()
    {
        return $this->maxPrice;
    }

    /**
     * Sets a new maxPrice
     *
     * Specifies the upper limit of price range for the automatic search criteria.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $maxPrice
     * @return self
     */
    public function setMaxPrice(\Nogrod\eBaySDK\Trading\AmountType $maxPrice)
    {
        $this->maxPrice = $maxPrice;
        return $this;
    }

    /**
     * Adds as favoriteItemID
     *
     * Specifies the list of favorite items.
     *
     * @return self
     * @param string $favoriteItemID
     */
    public function addToFavoriteItemID($favoriteItemID)
    {
        $this->favoriteItemID[] = $favoriteItemID;
        return $this;
    }

    /**
     * isset favoriteItemID
     *
     * Specifies the list of favorite items.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFavoriteItemID($index)
    {
        return isset($this->favoriteItemID[$index]);
    }

    /**
     * unset favoriteItemID
     *
     * Specifies the list of favorite items.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFavoriteItemID($index)
    {
        unset($this->favoriteItemID[$index]);
    }

    /**
     * Gets as favoriteItemID
     *
     * Specifies the list of favorite items.
     *
     * @return string[]
     */
    public function getFavoriteItemID()
    {
        return $this->favoriteItemID;
    }

    /**
     * Sets a new favoriteItemID
     *
     * Specifies the list of favorite items.
     *
     * @param string $favoriteItemID
     * @return self
     */
    public function setFavoriteItemID(array $favoriteItemID)
    {
        $this->favoriteItemID = $favoriteItemID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getSearchKeywords();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SearchKeywords", $value);
        }
        $value = $this->getStoreCategoryID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StoreCategoryID", $value);
        }
        $value = $this->getListingType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ListingType", $value);
        }
        $value = $this->getSearchSortOrder();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SearchSortOrder", $value);
        }
        $value = $this->getMinPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MinPrice", $value);
        }
        $value = $this->getMaxPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxPrice", $value);
        }
        $value = $this->getFavoriteItemID();
        if (null !== $value && [] !== $this->getFavoriteItemID()) {
            $writer->write(array_map(function ($v) {return ["FavoriteItemID" => $v];}, $value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\SellerFavoriteItemPreferencesType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}SearchKeywords');
        if (null !== $value) {
            $this->setSearchKeywords($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}StoreCategoryID');
        if (null !== $value) {
            $this->setStoreCategoryID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingType');
        if (null !== $value) {
            $this->setListingType($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}SearchSortOrder');
        if (null !== $value) {
            $this->setSearchSortOrder($value);
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}MinPrice');
        if (null !== $value) {
            $this->setMinPrice(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxPrice');
        if (null !== $value) {
            $this->setMaxPrice(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FavoriteItemID', true);
        if (null !== $value) {
            $this->setFavoriteItemID($value);
        }
    }
}
