<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing ProductSearchType
 *
 * This type is deprecated.
 * XSD Type: ProductSearchType
 */
class ProductSearchType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This field is deprecated.
     *
     * @var string $productSearchID
     */
    private $productSearchID = null;

    /**
     * This field is deprecated.
     *
     * @var int $attributeSetID
     */
    private $attributeSetID = null;

    /**
     * This field is deprecated.
     *
     * @var int $productFinderID
     */
    private $productFinderID = null;

    /**
     * This field is deprecated.
     *
     * @var string $productID
     */
    private $productID = null;

    /**
     * This field is deprecated.
     *
     * @var int $sortAttributeID
     */
    private $sortAttributeID = null;

    /**
     * This field is deprecated.
     *
     * @var int $maxChildrenPerFamily
     */
    private $maxChildrenPerFamily = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\SearchAttributesType[] $searchAttributes
     */
    private $searchAttributes = [
        
    ];

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\PaginationType $pagination
     */
    private $pagination = null;

    /**
     * This field is deprecated.
     *
     * @var bool $availableItemsOnly
     */
    private $availableItemsOnly = null;

    /**
     * This field is deprecated.
     *
     * @var string $queryKeywords
     */
    private $queryKeywords = null;

    /**
     * This field is deprecated.
     *
     * @var string[] $characteristicSetIDs
     */
    private $characteristicSetIDs = null;

    /**
     * This field is deprecated.
     *
     * @var string $productReferenceID
     */
    private $productReferenceID = null;

    /**
     * Gets as productSearchID
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getProductSearchID()
    {
        return $this->productSearchID;
    }

    /**
     * Sets a new productSearchID
     *
     * This field is deprecated.
     *
     * @param string $productSearchID
     * @return self
     */
    public function setProductSearchID($productSearchID)
    {
        $this->productSearchID = $productSearchID;
        return $this;
    }

    /**
     * Gets as attributeSetID
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getAttributeSetID()
    {
        return $this->attributeSetID;
    }

    /**
     * Sets a new attributeSetID
     *
     * This field is deprecated.
     *
     * @param int $attributeSetID
     * @return self
     */
    public function setAttributeSetID($attributeSetID)
    {
        $this->attributeSetID = $attributeSetID;
        return $this;
    }

    /**
     * Gets as productFinderID
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getProductFinderID()
    {
        return $this->productFinderID;
    }

    /**
     * Sets a new productFinderID
     *
     * This field is deprecated.
     *
     * @param int $productFinderID
     * @return self
     */
    public function setProductFinderID($productFinderID)
    {
        $this->productFinderID = $productFinderID;
        return $this;
    }

    /**
     * Gets as productID
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getProductID()
    {
        return $this->productID;
    }

    /**
     * Sets a new productID
     *
     * This field is deprecated.
     *
     * @param string $productID
     * @return self
     */
    public function setProductID($productID)
    {
        $this->productID = $productID;
        return $this;
    }

    /**
     * Gets as sortAttributeID
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getSortAttributeID()
    {
        return $this->sortAttributeID;
    }

    /**
     * Sets a new sortAttributeID
     *
     * This field is deprecated.
     *
     * @param int $sortAttributeID
     * @return self
     */
    public function setSortAttributeID($sortAttributeID)
    {
        $this->sortAttributeID = $sortAttributeID;
        return $this;
    }

    /**
     * Gets as maxChildrenPerFamily
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getMaxChildrenPerFamily()
    {
        return $this->maxChildrenPerFamily;
    }

    /**
     * Sets a new maxChildrenPerFamily
     *
     * This field is deprecated.
     *
     * @param int $maxChildrenPerFamily
     * @return self
     */
    public function setMaxChildrenPerFamily($maxChildrenPerFamily)
    {
        $this->maxChildrenPerFamily = $maxChildrenPerFamily;
        return $this;
    }

    /**
     * Adds as searchAttributes
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\SearchAttributesType $searchAttributes
     */
    public function addToSearchAttributes(\Nogrod\eBaySDK\MerchantData\SearchAttributesType $searchAttributes)
    {
        $this->searchAttributes[] = $searchAttributes;
        return $this;
    }

    /**
     * isset searchAttributes
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSearchAttributes($index)
    {
        return isset($this->searchAttributes[$index]);
    }

    /**
     * unset searchAttributes
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSearchAttributes($index)
    {
        unset($this->searchAttributes[$index]);
    }

    /**
     * Gets as searchAttributes
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\SearchAttributesType[]
     */
    public function getSearchAttributes()
    {
        return $this->searchAttributes;
    }

    /**
     * Sets a new searchAttributes
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\SearchAttributesType[] $searchAttributes
     * @return self
     */
    public function setSearchAttributes(array $searchAttributes)
    {
        $this->searchAttributes = $searchAttributes;
        return $this;
    }

    /**
     * Gets as pagination
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\PaginationType
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    /**
     * Sets a new pagination
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\PaginationType $pagination
     * @return self
     */
    public function setPagination(\Nogrod\eBaySDK\MerchantData\PaginationType $pagination)
    {
        $this->pagination = $pagination;
        return $this;
    }

    /**
     * Gets as availableItemsOnly
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getAvailableItemsOnly()
    {
        return $this->availableItemsOnly;
    }

    /**
     * Sets a new availableItemsOnly
     *
     * This field is deprecated.
     *
     * @param bool $availableItemsOnly
     * @return self
     */
    public function setAvailableItemsOnly($availableItemsOnly)
    {
        $this->availableItemsOnly = $availableItemsOnly;
        return $this;
    }

    /**
     * Gets as queryKeywords
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getQueryKeywords()
    {
        return $this->queryKeywords;
    }

    /**
     * Sets a new queryKeywords
     *
     * This field is deprecated.
     *
     * @param string $queryKeywords
     * @return self
     */
    public function setQueryKeywords($queryKeywords)
    {
        $this->queryKeywords = $queryKeywords;
        return $this;
    }

    /**
     * Adds as iD
     *
     * This field is deprecated.
     *
     * @return self
     * @param string $iD
     */
    public function addToCharacteristicSetIDs($iD)
    {
        $this->characteristicSetIDs[] = $iD;
        return $this;
    }

    /**
     * isset characteristicSetIDs
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCharacteristicSetIDs($index)
    {
        return isset($this->characteristicSetIDs[$index]);
    }

    /**
     * unset characteristicSetIDs
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCharacteristicSetIDs($index)
    {
        unset($this->characteristicSetIDs[$index]);
    }

    /**
     * Gets as characteristicSetIDs
     *
     * This field is deprecated.
     *
     * @return string[]
     */
    public function getCharacteristicSetIDs()
    {
        return $this->characteristicSetIDs;
    }

    /**
     * Sets a new characteristicSetIDs
     *
     * This field is deprecated.
     *
     * @param string[] $characteristicSetIDs
     * @return self
     */
    public function setCharacteristicSetIDs(array $characteristicSetIDs)
    {
        $this->characteristicSetIDs = $characteristicSetIDs;
        return $this;
    }

    /**
     * Gets as productReferenceID
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getProductReferenceID()
    {
        return $this->productReferenceID;
    }

    /**
     * Sets a new productReferenceID
     *
     * This field is deprecated.
     *
     * @param string $productReferenceID
     * @return self
     */
    public function setProductReferenceID($productReferenceID)
    {
        $this->productReferenceID = $productReferenceID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getProductSearchID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductSearchID", $value);
        }
        $value = $this->getAttributeSetID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AttributeSetID", $value);
        }
        $value = $this->getProductFinderID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductFinderID", $value);
        }
        $value = $this->getProductID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductID", $value);
        }
        $value = $this->getSortAttributeID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SortAttributeID", $value);
        }
        $value = $this->getMaxChildrenPerFamily();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxChildrenPerFamily", $value);
        }
        $value = $this->getSearchAttributes();
        if (null !== $value && !empty($this->getSearchAttributes())) {
            $writer->write(array_map(function ($v) {
                return ["SearchAttributes" => $v];
            }, $value));
        }
        $value = $this->getPagination();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Pagination", $value);
        }
        $value = $this->getAvailableItemsOnly();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AvailableItemsOnly", $value);
        }
        $value = $this->getQueryKeywords();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QueryKeywords", $value);
        }
        $value = $this->getCharacteristicSetIDs();
        if (null !== $value && !empty($this->getCharacteristicSetIDs())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CharacteristicSetIDs", array_map(function ($v) {
                return ["ID" => $v];
            }, $value));
        }
        $value = $this->getProductReferenceID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductReferenceID", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductSearchID');
        if (null !== $value) {
            $this->setProductSearchID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AttributeSetID');
        if (null !== $value) {
            $this->setAttributeSetID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductFinderID');
        if (null !== $value) {
            $this->setProductFinderID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductID');
        if (null !== $value) {
            $this->setProductID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SortAttributeID');
        if (null !== $value) {
            $this->setSortAttributeID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxChildrenPerFamily');
        if (null !== $value) {
            $this->setMaxChildrenPerFamily($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SearchAttributes', true);
        if (null !== $value && !empty($value)) {
            $this->setSearchAttributes(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\SearchAttributesType::fromKeyValue($v);
            }, $value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Pagination');
        if (null !== $value) {
            $this->setPagination(\Nogrod\eBaySDK\MerchantData\PaginationType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AvailableItemsOnly');
        if (null !== $value) {
            $this->setAvailableItemsOnly($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QueryKeywords');
        if (null !== $value) {
            $this->setQueryKeywords($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CharacteristicSetIDs', true);
        if (null !== $value && !empty($value)) {
            $this->setCharacteristicSetIDs($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductReferenceID');
        if (null !== $value) {
            $this->setProductReferenceID($value);
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
