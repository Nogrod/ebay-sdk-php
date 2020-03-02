<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PopularSearchesType
 *
 * This type is deprecated, as it was only used by the deprecated <b>FindPopularSearches</b> call.
 * XSD Type: PopularSearchesType
 */
class PopularSearchesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * @var string $categoryID
     */
    private $categoryID = null;

    /**
     * @var string $categoryParentID
     */
    private $categoryParentID = null;

    /**
     * @var string $queryKeywords
     */
    private $queryKeywords = null;

    /**
     * @var string $alternativeSearches
     */
    private $alternativeSearches = null;

    /**
     * @var string $relatedSearches
     */
    private $relatedSearches = null;

    /**
     * @var string $categoryName
     */
    private $categoryName = null;

    /**
     * @var string $categoryParentName
     */
    private $categoryParentName = null;

    /**
     * Gets as categoryID
     *
     * @return string
     */
    public function getCategoryID()
    {
        return $this->categoryID;
    }

    /**
     * Sets a new categoryID
     *
     * @param string $categoryID
     * @return self
     */
    public function setCategoryID($categoryID)
    {
        $this->categoryID = $categoryID;
        return $this;
    }

    /**
     * Gets as categoryParentID
     *
     * @return string
     */
    public function getCategoryParentID()
    {
        return $this->categoryParentID;
    }

    /**
     * Sets a new categoryParentID
     *
     * @param string $categoryParentID
     * @return self
     */
    public function setCategoryParentID($categoryParentID)
    {
        $this->categoryParentID = $categoryParentID;
        return $this;
    }

    /**
     * Gets as queryKeywords
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
     * @param string $queryKeywords
     * @return self
     */
    public function setQueryKeywords($queryKeywords)
    {
        $this->queryKeywords = $queryKeywords;
        return $this;
    }

    /**
     * Gets as alternativeSearches
     *
     * @return string
     */
    public function getAlternativeSearches()
    {
        return $this->alternativeSearches;
    }

    /**
     * Sets a new alternativeSearches
     *
     * @param string $alternativeSearches
     * @return self
     */
    public function setAlternativeSearches($alternativeSearches)
    {
        $this->alternativeSearches = $alternativeSearches;
        return $this;
    }

    /**
     * Gets as relatedSearches
     *
     * @return string
     */
    public function getRelatedSearches()
    {
        return $this->relatedSearches;
    }

    /**
     * Sets a new relatedSearches
     *
     * @param string $relatedSearches
     * @return self
     */
    public function setRelatedSearches($relatedSearches)
    {
        $this->relatedSearches = $relatedSearches;
        return $this;
    }

    /**
     * Gets as categoryName
     *
     * @return string
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * Sets a new categoryName
     *
     * @param string $categoryName
     * @return self
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;
        return $this;
    }

    /**
     * Gets as categoryParentName
     *
     * @return string
     */
    public function getCategoryParentName()
    {
        return $this->categoryParentName;
    }

    /**
     * Sets a new categoryParentName
     *
     * @param string $categoryParentName
     * @return self
     */
    public function setCategoryParentName($categoryParentName)
    {
        $this->categoryParentName = $categoryParentName;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getCategoryID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryID", $value);
        }
        $value = $this->getCategoryParentID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryParentID", $value);
        }
        $value = $this->getQueryKeywords();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QueryKeywords", $value);
        }
        $value = $this->getAlternativeSearches();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AlternativeSearches", $value);
        }
        $value = $this->getRelatedSearches();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RelatedSearches", $value);
        }
        $value = $this->getCategoryName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryName", $value);
        }
        $value = $this->getCategoryParentName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryParentName", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryID');
        if (null !== $value) {
            $this->setCategoryID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryParentID');
        if (null !== $value) {
            $this->setCategoryParentID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QueryKeywords');
        if (null !== $value) {
            $this->setQueryKeywords($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AlternativeSearches');
        if (null !== $value) {
            $this->setAlternativeSearches($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RelatedSearches');
        if (null !== $value) {
            $this->setRelatedSearches($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryName');
        if (null !== $value) {
            $this->setCategoryName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryParentName');
        if (null !== $value) {
            $this->setCategoryParentName($value);
        }
    }
}
