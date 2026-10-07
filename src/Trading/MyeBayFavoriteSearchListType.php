<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MyeBayFavoriteSearchListType
 *
 * A list of favorite searches a user has saved on the My eBay page.
 * XSD Type: MyeBayFavoriteSearchListType
 */
class MyeBayFavoriteSearchListType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->totalAvailable;
        if (null !== $value) {
            $writer->writeElementNs(null, 'TotalAvailable', null, (string) $value);
        }
        $value = $this->favoriteSearch;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'FavoriteSearch', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\MyeBayFavoriteSearchListType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->favoriteSearch = [];
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
                case 'TotalAvailable':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->totalAvailable = (int) $value;
                    }
                    return true;
                case 'FavoriteSearch':
                    $this->favoriteSearch[] = \Nogrod\eBaySDK\Trading\MyeBayFavoriteSearchType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['TotalAvailable'] = $this->totalAvailable;
        $data['FavoriteSearch'] = Func::jsonList($this->favoriteSearch);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
