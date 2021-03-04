<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing FindPopularSearchesRequestType
 *
 * <b>This call is deprecated.</b>
 * XSD Type: FindPopularSearchesRequestType
 */
class FindPopularSearchesRequestType extends AbstractRequestType
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
     * @var string[] $queryKeywords
     */
    private $queryKeywords = [
        
    ];

    /**
     * This field is deprecated.
     *
     * @var int $maxKeywords
     */
    private $maxKeywords = null;

    /**
     * This field is deprecated.
     *
     * @var int $maxResultsPerPage
     */
    private $maxResultsPerPage = null;

    /**
     * This field is deprecated.
     *
     * @var int $pageNumber
     */
    private $pageNumber = null;

    /**
     * This field is deprecated.
     *
     * @var bool $includeChildCategories
     */
    private $includeChildCategories = null;

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
     * Adds as queryKeywords
     *
     * This field is deprecated.
     *
     * @return self
     * @param string $queryKeywords
     */
    public function addToQueryKeywords($queryKeywords)
    {
        $this->queryKeywords[] = $queryKeywords;
        return $this;
    }

    /**
     * isset queryKeywords
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetQueryKeywords($index)
    {
        return isset($this->queryKeywords[$index]);
    }

    /**
     * unset queryKeywords
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetQueryKeywords($index)
    {
        unset($this->queryKeywords[$index]);
    }

    /**
     * Gets as queryKeywords
     *
     * This field is deprecated.
     *
     * @return string[]
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
     * @param string[] $queryKeywords
     * @return self
     */
    public function setQueryKeywords(array $queryKeywords)
    {
        $this->queryKeywords = $queryKeywords;
        return $this;
    }

    /**
     * Gets as maxKeywords
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getMaxKeywords()
    {
        return $this->maxKeywords;
    }

    /**
     * Sets a new maxKeywords
     *
     * This field is deprecated.
     *
     * @param int $maxKeywords
     * @return self
     */
    public function setMaxKeywords($maxKeywords)
    {
        $this->maxKeywords = $maxKeywords;
        return $this;
    }

    /**
     * Gets as maxResultsPerPage
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getMaxResultsPerPage()
    {
        return $this->maxResultsPerPage;
    }

    /**
     * Sets a new maxResultsPerPage
     *
     * This field is deprecated.
     *
     * @param int $maxResultsPerPage
     * @return self
     */
    public function setMaxResultsPerPage($maxResultsPerPage)
    {
        $this->maxResultsPerPage = $maxResultsPerPage;
        return $this;
    }

    /**
     * Gets as pageNumber
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getPageNumber()
    {
        return $this->pageNumber;
    }

    /**
     * Sets a new pageNumber
     *
     * This field is deprecated.
     *
     * @param int $pageNumber
     * @return self
     */
    public function setPageNumber($pageNumber)
    {
        $this->pageNumber = $pageNumber;
        return $this;
    }

    /**
     * Gets as includeChildCategories
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getIncludeChildCategories()
    {
        return $this->includeChildCategories;
    }

    /**
     * Sets a new includeChildCategories
     *
     * This field is deprecated.
     *
     * @param bool $includeChildCategories
     * @return self
     */
    public function setIncludeChildCategories($includeChildCategories)
    {
        $this->includeChildCategories = $includeChildCategories;
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
        if (null !== $value && !empty($this->getQueryKeywords())) {
            $writer->write(array_map(function ($v) {
                return ["QueryKeywords" => $v];
            }, $value));
        }
        $value = $this->getMaxKeywords();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxKeywords", $value);
        }
        $value = $this->getMaxResultsPerPage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxResultsPerPage", $value);
        }
        $value = $this->getPageNumber();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PageNumber", $value);
        }
        $value = $this->getIncludeChildCategories();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IncludeChildCategories", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QueryKeywords', true);
        if (null !== $value && !empty($value)) {
            $this->setQueryKeywords($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxKeywords');
        if (null !== $value) {
            $this->setMaxKeywords($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxResultsPerPage');
        if (null !== $value) {
            $this->setMaxResultsPerPage($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PageNumber');
        if (null !== $value) {
            $this->setPageNumber($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IncludeChildCategories');
        if (null !== $value) {
            $this->setIncludeChildCategories($value);
        }
    }
}
