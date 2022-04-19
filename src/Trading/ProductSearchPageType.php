<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ProductSearchPageType
 *
 * This type is deprecated.
 * XSD Type: ProductSearchPageType
 */
class ProductSearchPageType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\CharacteristicsSetType $searchCharacteristicsSet
     */
    private $searchCharacteristicsSet = null;

    /**
     * This field is deprecated.
     *
     * @var string $searchType
     */
    private $searchType = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\CharacteristicType[] $sortCharacteristics
     */
    private $sortCharacteristics = [

    ];

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\DataElementSetType[] $dataElementSet
     */
    private $dataElementSet = [

    ];

    /**
     * Gets as searchCharacteristicsSet
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\CharacteristicsSetType
     */
    public function getSearchCharacteristicsSet()
    {
        return $this->searchCharacteristicsSet;
    }

    /**
     * Sets a new searchCharacteristicsSet
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\CharacteristicsSetType $searchCharacteristicsSet
     * @return self
     */
    public function setSearchCharacteristicsSet(\Nogrod\eBaySDK\Trading\CharacteristicsSetType $searchCharacteristicsSet)
    {
        $this->searchCharacteristicsSet = $searchCharacteristicsSet;
        return $this;
    }

    /**
     * Gets as searchType
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getSearchType()
    {
        return $this->searchType;
    }

    /**
     * Sets a new searchType
     *
     * This field is deprecated.
     *
     * @param string $searchType
     * @return self
     */
    public function setSearchType($searchType)
    {
        $this->searchType = $searchType;
        return $this;
    }

    /**
     * Adds as sortCharacteristics
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\CharacteristicType $sortCharacteristics
     */
    public function addToSortCharacteristics(\Nogrod\eBaySDK\Trading\CharacteristicType $sortCharacteristics)
    {
        $this->sortCharacteristics[] = $sortCharacteristics;
        return $this;
    }

    /**
     * isset sortCharacteristics
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSortCharacteristics($index)
    {
        return isset($this->sortCharacteristics[$index]);
    }

    /**
     * unset sortCharacteristics
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSortCharacteristics($index)
    {
        unset($this->sortCharacteristics[$index]);
    }

    /**
     * Gets as sortCharacteristics
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\CharacteristicType[]
     */
    public function getSortCharacteristics()
    {
        return $this->sortCharacteristics;
    }

    /**
     * Sets a new sortCharacteristics
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\CharacteristicType[] $sortCharacteristics
     * @return self
     */
    public function setSortCharacteristics(array $sortCharacteristics)
    {
        $this->sortCharacteristics = $sortCharacteristics;
        return $this;
    }

    /**
     * Adds as dataElementSet
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\DataElementSetType $dataElementSet
     */
    public function addToDataElementSet(\Nogrod\eBaySDK\Trading\DataElementSetType $dataElementSet)
    {
        $this->dataElementSet[] = $dataElementSet;
        return $this;
    }

    /**
     * isset dataElementSet
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDataElementSet($index)
    {
        return isset($this->dataElementSet[$index]);
    }

    /**
     * unset dataElementSet
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDataElementSet($index)
    {
        unset($this->dataElementSet[$index]);
    }

    /**
     * Gets as dataElementSet
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\DataElementSetType[]
     */
    public function getDataElementSet()
    {
        return $this->dataElementSet;
    }

    /**
     * Sets a new dataElementSet
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\DataElementSetType[] $dataElementSet
     * @return self
     */
    public function setDataElementSet(array $dataElementSet)
    {
        $this->dataElementSet = $dataElementSet;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getSearchCharacteristicsSet();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SearchCharacteristicsSet", $value);
        }
        $value = $this->getSearchType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SearchType", $value);
        }
        $value = $this->getSortCharacteristics();
        if (null !== $value && !empty($this->getSortCharacteristics())) {
            $writer->write(array_map(function ($v) {
                return ["SortCharacteristics" => $v];
            }, $value));
        }
        $value = $this->getDataElementSet();
        if (null !== $value && !empty($this->getDataElementSet())) {
            $writer->write(array_map(function ($v) {
                return ["DataElementSet" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SearchCharacteristicsSet');
        if (null !== $value) {
            $this->setSearchCharacteristicsSet(\Nogrod\eBaySDK\Trading\CharacteristicsSetType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SearchType');
        if (null !== $value) {
            $this->setSearchType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SortCharacteristics', true);
        if (null !== $value && !empty($value)) {
            $this->setSortCharacteristics(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\CharacteristicType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DataElementSet', true);
        if (null !== $value && !empty($value)) {
            $this->setDataElementSet(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\DataElementSetType::fromKeyValue($v);
            }, $value));
        }
    }
}
