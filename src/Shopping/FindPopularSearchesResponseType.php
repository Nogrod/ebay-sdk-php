<?php

namespace Nogrod\eBaySDK\Shopping;

/**
 * Class representing FindPopularSearchesResponseType
 *
 * <b>This call is deprecated.</b>
 * XSD Type: FindPopularSearchesResponseType
 */
class FindPopularSearchesResponseType extends AbstractResponseType
{

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Shopping\PopularSearchesType[] $popularSearchResult
     */
    private $popularSearchResult = [
        
    ];

    /**
     * This field is deprecated.
     *
     * @var int $pageNumber
     */
    private $pageNumber = null;

    /**
     * This field is deprecated.
     *
     * @var int $totalPages
     */
    private $totalPages = null;

    /**
     * Adds as popularSearchResult
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\PopularSearchesType $popularSearchResult
     */
    public function addToPopularSearchResult(\Nogrod\eBaySDK\Shopping\PopularSearchesType $popularSearchResult)
    {
        $this->popularSearchResult[] = $popularSearchResult;
        return $this;
    }

    /**
     * isset popularSearchResult
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPopularSearchResult($index)
    {
        return isset($this->popularSearchResult[$index]);
    }

    /**
     * unset popularSearchResult
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPopularSearchResult($index)
    {
        unset($this->popularSearchResult[$index]);
    }

    /**
     * Gets as popularSearchResult
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Shopping\PopularSearchesType[]
     */
    public function getPopularSearchResult()
    {
        return $this->popularSearchResult;
    }

    /**
     * Sets a new popularSearchResult
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Shopping\PopularSearchesType[] $popularSearchResult
     * @return self
     */
    public function setPopularSearchResult(array $popularSearchResult)
    {
        $this->popularSearchResult = $popularSearchResult;
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
     * Gets as totalPages
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getTotalPages()
    {
        return $this->totalPages;
    }

    /**
     * Sets a new totalPages
     *
     * This field is deprecated.
     *
     * @param int $totalPages
     * @return self
     */
    public function setTotalPages($totalPages)
    {
        $this->totalPages = $totalPages;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getPopularSearchResult();
        if (null !== $value && !empty($this->getPopularSearchResult())) {
            $writer->write(array_map(function ($v) {
                return ["PopularSearchResult" => $v];
            }, $value));
        }
        $value = $this->getPageNumber();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PageNumber", $value);
        }
        $value = $this->getTotalPages();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalPages", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PopularSearchResult', true);
        if (null !== $value && !empty($value)) {
            $this->setPopularSearchResult(array_map(function ($v) {
                return \Nogrod\eBaySDK\Shopping\PopularSearchesType::fromKeyValue($v);
            }, $value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PageNumber');
        if (null !== $value) {
            $this->setPageNumber($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalPages');
        if (null !== $value) {
            $this->setTotalPages($value);
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
