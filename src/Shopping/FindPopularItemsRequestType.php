<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing FindPopularItemsRequestType
 *
 * <b>This call is deprecated.</b>
 * XSD Type: FindPopularItemsRequestType
 */
class FindPopularItemsRequestType extends AbstractRequestType
{

    /**
     * This field is deprecated.
     *
     * @var string[] $categoryID
     */
    private $categoryID = [
        
    ];

    /**
     * This field is deprecated.
     *
     * @var string $queryKeywords
     */
    private $queryKeywords = null;

    /**
     * This field is deprecated.
     *
     * @var string[] $categoryIDExclude
     */
    private $categoryIDExclude = [
        
    ];

    /**
     * This field is deprecated.
     *
     * @var int $maxEntries
     */
    private $maxEntries = null;

    /**
     * Adds as categoryID
     *
     * This field is deprecated.
     *
     * @return self
     * @param string $categoryID
     */
    public function addToCategoryID($categoryID)
    {
        $this->categoryID[] = $categoryID;
        return $this;
    }

    /**
     * isset categoryID
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategoryID($index)
    {
        return isset($this->categoryID[$index]);
    }

    /**
     * unset categoryID
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategoryID($index)
    {
        unset($this->categoryID[$index]);
    }

    /**
     * Gets as categoryID
     *
     * This field is deprecated.
     *
     * @return string[]
     */
    public function getCategoryID()
    {
        return $this->categoryID;
    }

    /**
     * Sets a new categoryID
     *
     * This field is deprecated.
     *
     * @param string[] $categoryID
     * @return self
     */
    public function setCategoryID(array $categoryID)
    {
        $this->categoryID = $categoryID;
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
     * Adds as categoryIDExclude
     *
     * This field is deprecated.
     *
     * @return self
     * @param string $categoryIDExclude
     */
    public function addToCategoryIDExclude($categoryIDExclude)
    {
        $this->categoryIDExclude[] = $categoryIDExclude;
        return $this;
    }

    /**
     * isset categoryIDExclude
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategoryIDExclude($index)
    {
        return isset($this->categoryIDExclude[$index]);
    }

    /**
     * unset categoryIDExclude
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategoryIDExclude($index)
    {
        unset($this->categoryIDExclude[$index]);
    }

    /**
     * Gets as categoryIDExclude
     *
     * This field is deprecated.
     *
     * @return string[]
     */
    public function getCategoryIDExclude()
    {
        return $this->categoryIDExclude;
    }

    /**
     * Sets a new categoryIDExclude
     *
     * This field is deprecated.
     *
     * @param string[] $categoryIDExclude
     * @return self
     */
    public function setCategoryIDExclude(array $categoryIDExclude)
    {
        $this->categoryIDExclude = $categoryIDExclude;
        return $this;
    }

    /**
     * Gets as maxEntries
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getMaxEntries()
    {
        return $this->maxEntries;
    }

    /**
     * Sets a new maxEntries
     *
     * This field is deprecated.
     *
     * @param int $maxEntries
     * @return self
     */
    public function setMaxEntries($maxEntries)
    {
        $this->maxEntries = $maxEntries;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getCategoryID();
        if (null !== $value && !empty($this->getCategoryID())) {
            $writer->write(array_map(function ($v) {
                return ["CategoryID" => $v];
            }, $value));
        }
        $value = $this->getQueryKeywords();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QueryKeywords", $value);
        }
        $value = $this->getCategoryIDExclude();
        if (null !== $value && !empty($this->getCategoryIDExclude())) {
            $writer->write(array_map(function ($v) {
                return ["CategoryIDExclude" => $v];
            }, $value));
        }
        $value = $this->getMaxEntries();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxEntries", $value);
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
        parent::setKeyValue($keyValue);
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryID', true);
        if (null !== $value && !empty($value)) {
            $this->setCategoryID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QueryKeywords');
        if (null !== $value) {
            $this->setQueryKeywords($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryIDExclude', true);
        if (null !== $value && !empty($value)) {
            $this->setCategoryIDExclude($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxEntries');
        if (null !== $value) {
            $this->setMaxEntries($value);
        }
    }
}
