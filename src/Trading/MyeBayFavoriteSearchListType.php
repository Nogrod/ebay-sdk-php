<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MyeBayFavoriteSearchListType
 *
 * A list of favorite searches a user has saved on the My eBay page.
 * XSD Type: MyeBayFavoriteSearchListType
 */
class MyeBayFavoriteSearchListType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The total number of favorite searches saved.
     *
     * @var int $totalAvailable
     */
    private $totalAvailable = null;

    /**
     * A favorite search the user has saved, with a name and a search query.
     *
     * @var \Nogrod\eBaySDK\Trading\MyeBayFavoriteSearchType[] $favoriteSearch
     */
    private $favoriteSearch = [

    ];

    /**
     * Gets as totalAvailable
     *
     * The total number of favorite searches saved.
     *
     * @return int
     */
    public function getTotalAvailable()
    {
        return $this->totalAvailable;
    }

    /**
     * Sets a new totalAvailable
     *
     * The total number of favorite searches saved.
     *
     * @param int $totalAvailable
     * @return self
     */
    public function setTotalAvailable($totalAvailable)
    {
        $this->totalAvailable = $totalAvailable;
        return $this;
    }

    /**
     * Adds as favoriteSearch
     *
     * A favorite search the user has saved, with a name and a search query.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\MyeBayFavoriteSearchType $favoriteSearch
     */
    public function addToFavoriteSearch(\Nogrod\eBaySDK\Trading\MyeBayFavoriteSearchType $favoriteSearch)
    {
        if (!is_array($this->favoriteSearch)) {
            throw new \LogicException('favoriteSearch is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->favoriteSearch[] = $favoriteSearch;
        return $this;
    }

    /**
     * isset favoriteSearch
     *
     * A favorite search the user has saved, with a name and a search query.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFavoriteSearch($index)
    {
        return isset($this->favoriteSearch[$index]);
    }

    /**
     * unset favoriteSearch
     *
     * A favorite search the user has saved, with a name and a search query.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFavoriteSearch($index)
    {
        unset($this->favoriteSearch[$index]);
    }

    /**
     * Gets as favoriteSearch
     *
     * A favorite search the user has saved, with a name and a search query.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\MyeBayFavoriteSearchType>
     */
    public function getFavoriteSearch()
    {
        return $this->favoriteSearch;
    }

    /**
     * Sets a new favoriteSearch
     *
     * A favorite search the user has saved, with a name and a search query.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\MyeBayFavoriteSearchType> $favoriteSearch
     * @return self
     */
    public function setFavoriteSearch(iterable $favoriteSearch)
    {
        $this->favoriteSearch = $favoriteSearch;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getTotalAvailable();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalAvailable", $value);
        }
        $value = $this->getFavoriteSearch();
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->write([["FavoriteSearch" => $v]]);
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\MyeBayFavoriteSearchListType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalAvailable');
        if (null !== $value) {
            $this->setTotalAvailable($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FavoriteSearch');
        if (null !== $value) {
            $this->setFavoriteSearch(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\MyeBayFavoriteSearchType::fromKeyValue($v);
            }, $value));
        }
    }
}
