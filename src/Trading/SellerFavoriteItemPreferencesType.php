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
        if (!is_array($this->favoriteItemID)) {
            throw new \LogicException('favoriteItemID is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<string>
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
    public function setFavoriteItemID(iterable $favoriteItemID)
    {
        $this->favoriteItemID = $favoriteItemID;
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
        $value = $this->searchKeywords;
        if (null !== $value) {
            $writer->writeElementNs(null, 'SearchKeywords', null, (string) $value);
        }
        $value = $this->storeCategoryID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'StoreCategoryID', null, (string) $value);
        }
        $value = $this->listingType;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ListingType', null, (string) $value);
        }
        $value = $this->searchSortOrder;
        if (null !== $value) {
            $writer->writeElementNs(null, 'SearchSortOrder', null, (string) $value);
        }
        $value = $this->minPrice;
        if (null !== $value) {
            $writer->startElementNs(null, 'MinPrice', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->maxPrice;
        if (null !== $value) {
            $writer->startElementNs(null, 'MaxPrice', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->favoriteItemID;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->writeElementNs(null, 'FavoriteItemID', null, (string) $v);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\SellerFavoriteItemPreferencesType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->favoriteItemID = [];
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
                case 'SearchKeywords':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->searchKeywords = $value;
                    }
                    return true;
                case 'StoreCategoryID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->storeCategoryID = (int) $value;
                    }
                    return true;
                case 'ListingType':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->listingType = $value;
                    }
                    return true;
                case 'SearchSortOrder':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->searchSortOrder = $value;
                    }
                    return true;
                case 'MinPrice':
                    $this->minPrice = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'MaxPrice':
                    $this->maxPrice = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'FavoriteItemID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->favoriteItemID[] = $value;
                    }
                    return true;
            }
        }
        return false;
    }
}
