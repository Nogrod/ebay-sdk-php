<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing GetRecommendationsRequestContainerType
 *
 * This type is deprecated.
 * XSD Type: GetRecommendationsRequestContainerType
 */
class GetRecommendationsRequestContainerType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This field is deprecated.
     *
     * @var string $listingFlow
     */
    private $listingFlow = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ItemType $item
     */
    private $item = null;

    /**
     * This field is deprecated.
     *
     * @var string[] $recommendationEngine
     */
    private $recommendationEngine = [
        
    ];

    /**
     * This field is deprecated.
     *
     * @var string $query
     */
    private $query = null;

    /**
     * This field is deprecated.
     *
     * @var string $correlationID
     */
    private $correlationID = null;

    /**
     * This field is deprecated.
     *
     * @var string[] $deletedField
     */
    private $deletedField = [
        
    ];

    /**
     * This field is deprecated.
     *
     * @var bool $excludeRelationships
     */
    private $excludeRelationships = null;

    /**
     * This field is deprecated.
     *
     * @var bool $includeConfidence
     */
    private $includeConfidence = null;

    /**
     * Gets as listingFlow
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getListingFlow()
    {
        return $this->listingFlow;
    }

    /**
     * Sets a new listingFlow
     *
     * This field is deprecated.
     *
     * @param string $listingFlow
     * @return self
     */
    public function setListingFlow($listingFlow)
    {
        $this->listingFlow = $listingFlow;
        return $this;
    }

    /**
     * Gets as item
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ItemType
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ItemType $item
     * @return self
     */
    public function setItem(\Nogrod\eBaySDK\MerchantData\ItemType $item)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Adds as recommendationEngine
     *
     * This field is deprecated.
     *
     * @return self
     * @param string $recommendationEngine
     */
    public function addToRecommendationEngine($recommendationEngine)
    {
        $this->recommendationEngine[] = $recommendationEngine;
        return $this;
    }

    /**
     * isset recommendationEngine
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRecommendationEngine($index)
    {
        return isset($this->recommendationEngine[$index]);
    }

    /**
     * unset recommendationEngine
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRecommendationEngine($index)
    {
        unset($this->recommendationEngine[$index]);
    }

    /**
     * Gets as recommendationEngine
     *
     * This field is deprecated.
     *
     * @return string[]
     */
    public function getRecommendationEngine()
    {
        return $this->recommendationEngine;
    }

    /**
     * Sets a new recommendationEngine
     *
     * This field is deprecated.
     *
     * @param string $recommendationEngine
     * @return self
     */
    public function setRecommendationEngine(array $recommendationEngine)
    {
        $this->recommendationEngine = $recommendationEngine;
        return $this;
    }

    /**
     * Gets as query
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Sets a new query
     *
     * This field is deprecated.
     *
     * @param string $query
     * @return self
     */
    public function setQuery($query)
    {
        $this->query = $query;
        return $this;
    }

    /**
     * Gets as correlationID
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getCorrelationID()
    {
        return $this->correlationID;
    }

    /**
     * Sets a new correlationID
     *
     * This field is deprecated.
     *
     * @param string $correlationID
     * @return self
     */
    public function setCorrelationID($correlationID)
    {
        $this->correlationID = $correlationID;
        return $this;
    }

    /**
     * Adds as deletedField
     *
     * This field is deprecated.
     *
     * @return self
     * @param string $deletedField
     */
    public function addToDeletedField($deletedField)
    {
        $this->deletedField[] = $deletedField;
        return $this;
    }

    /**
     * isset deletedField
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeletedField($index)
    {
        return isset($this->deletedField[$index]);
    }

    /**
     * unset deletedField
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeletedField($index)
    {
        unset($this->deletedField[$index]);
    }

    /**
     * Gets as deletedField
     *
     * This field is deprecated.
     *
     * @return string[]
     */
    public function getDeletedField()
    {
        return $this->deletedField;
    }

    /**
     * Sets a new deletedField
     *
     * This field is deprecated.
     *
     * @param string[] $deletedField
     * @return self
     */
    public function setDeletedField(array $deletedField)
    {
        $this->deletedField = $deletedField;
        return $this;
    }

    /**
     * Gets as excludeRelationships
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getExcludeRelationships()
    {
        return $this->excludeRelationships;
    }

    /**
     * Sets a new excludeRelationships
     *
     * This field is deprecated.
     *
     * @param bool $excludeRelationships
     * @return self
     */
    public function setExcludeRelationships($excludeRelationships)
    {
        $this->excludeRelationships = $excludeRelationships;
        return $this;
    }

    /**
     * Gets as includeConfidence
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getIncludeConfidence()
    {
        return $this->includeConfidence;
    }

    /**
     * Sets a new includeConfidence
     *
     * This field is deprecated.
     *
     * @param bool $includeConfidence
     * @return self
     */
    public function setIncludeConfidence($includeConfidence)
    {
        $this->includeConfidence = $includeConfidence;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getListingFlow();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ListingFlow", $value);
        }
        $value = $this->getItem();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Item", $value);
        }
        $value = $this->getRecommendationEngine();
        if (null !== $value && !empty($this->getRecommendationEngine())) {
            $writer->write(array_map(function ($v) {
                return ["RecommendationEngine" => $v];
            }, $value));
        }
        $value = $this->getQuery();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Query", $value);
        }
        $value = $this->getCorrelationID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CorrelationID", $value);
        }
        $value = $this->getDeletedField();
        if (null !== $value && !empty($this->getDeletedField())) {
            $writer->write(array_map(function ($v) {
                return ["DeletedField" => $v];
            }, $value));
        }
        $value = $this->getExcludeRelationships();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExcludeRelationships", $value);
        }
        $value = $this->getIncludeConfidence();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IncludeConfidence", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingFlow');
        if (null !== $value) {
            $this->setListingFlow($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Item');
        if (null !== $value) {
            $this->setItem(\Nogrod\eBaySDK\MerchantData\ItemType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RecommendationEngine', true);
        if (null !== $value && !empty($value)) {
            $this->setRecommendationEngine($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Query');
        if (null !== $value) {
            $this->setQuery($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CorrelationID');
        if (null !== $value) {
            $this->setCorrelationID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DeletedField', true);
        if (null !== $value && !empty($value)) {
            $this->setDeletedField($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExcludeRelationships');
        if (null !== $value) {
            $this->setExcludeRelationships($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IncludeConfidence');
        if (null !== $value) {
            $this->setIncludeConfidence($value);
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
