<?php

namespace Nogrod\eBaySDK\MerchantData;

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
     * @var \Nogrod\eBaySDK\MerchantData\MyeBayFavoriteSearchType[] $favoriteSearch
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
     * @param \Nogrod\eBaySDK\MerchantData\MyeBayFavoriteSearchType $favoriteSearch
     */
    public function addToFavoriteSearch(\Nogrod\eBaySDK\MerchantData\MyeBayFavoriteSearchType $favoriteSearch)
    {
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
     * @return \Nogrod\eBaySDK\MerchantData\MyeBayFavoriteSearchType[]
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
     * @param \Nogrod\eBaySDK\MerchantData\MyeBayFavoriteSearchType[] $favoriteSearch
     * @return self
     */
    public function setFavoriteSearch(array $favoriteSearch)
    {
        $this->favoriteSearch = $favoriteSearch;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getTotalAvailable();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalAvailable", $value);
        }
        $value = $this->getFavoriteSearch();
        if (null !== $value && !empty($this->getFavoriteSearch())) {
            $writer->write(array_map(function ($v) {
                return ["FavoriteSearch" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalAvailable');
        if (null !== $value) {
            $this->setTotalAvailable($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FavoriteSearch', true);
        if (null !== $value && !empty($value)) {
            $this->setFavoriteSearch(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\MyeBayFavoriteSearchType::fromKeyValue($v);
            }, $value));
        }
    }
}
