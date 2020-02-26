<?php

namespace Nogrod\eBaySDK\Shopping;

/**
 * Class representing FindHalfProductsRequestType
 *
 * <span class="tablenote"><b>Note: </b> The <b>FindHalfProducts</b> call is deprecated.
 *  </span>
 * XSD Type: FindHalfProductsRequestType
 */
class FindHalfProductsRequestType extends AbstractRequestType
{

    /**
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsRequestType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @var string $includeSelector
     */
    private $includeSelector = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsRequestType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @var bool $availableItemsOnly
     */
    private $availableItemsOnly = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsRequestType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @var string[] $domainName
     */
    private $domainName = [
        
    ];

    /**
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsRequestType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Shopping\ProductIDType $productID
     */
    private $productID = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsRequestType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @var string $queryKeywords
     */
    private $queryKeywords = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsRequestType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @var string $sellerID
     */
    private $sellerID = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsRequestType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @var string $productSort
     */
    private $productSort = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsRequestType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @var string $sortOrder
     */
    private $sortOrder = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsRequestType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @var int $maxEntries
     */
    private $maxEntries = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsRequestType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @var int $pageNumber
     */
    private $pageNumber = null;

    /**
     * Gets as includeSelector
     *
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsRequestType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @return string
     */
    public function getIncludeSelector()
    {
        return $this->includeSelector;
    }

    /**
     * Sets a new includeSelector
     *
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsRequestType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param string $includeSelector
     * @return self
     */
    public function setIncludeSelector($includeSelector)
    {
        $this->includeSelector = $includeSelector;
        return $this;
    }

    /**
     * Gets as availableItemsOnly
     *
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsRequestType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
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
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsRequestType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
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
     * Adds as domainName
     *
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsRequestType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @return self
     * @param string $domainName
     */
    public function addToDomainName($domainName)
    {
        $this->domainName[] = $domainName;
        return $this;
    }

    /**
     * isset domainName
     *
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsRequestType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDomainName($index)
    {
        return isset($this->domainName[$index]);
    }

    /**
     * unset domainName
     *
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsRequestType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDomainName($index)
    {
        unset($this->domainName[$index]);
    }

    /**
     * Gets as domainName
     *
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsRequestType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @return string[]
     */
    public function getDomainName()
    {
        return $this->domainName;
    }

    /**
     * Sets a new domainName
     *
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsRequestType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param string[] $domainName
     * @return self
     */
    public function setDomainName(array $domainName)
    {
        $this->domainName = $domainName;
        return $this;
    }

    /**
     * Gets as productID
     *
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsRequestType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Shopping\ProductIDType
     */
    public function getProductID()
    {
        return $this->productID;
    }

    /**
     * Sets a new productID
     *
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsRequestType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Shopping\ProductIDType $productID
     * @return self
     */
    public function setProductID(\Nogrod\eBaySDK\Shopping\ProductIDType $productID)
    {
        $this->productID = $productID;
        return $this;
    }

    /**
     * Gets as queryKeywords
     *
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsRequestType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
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
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsRequestType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
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
     * Gets as sellerID
     *
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsRequestType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @return string
     */
    public function getSellerID()
    {
        return $this->sellerID;
    }

    /**
     * Sets a new sellerID
     *
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsRequestType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param string $sellerID
     * @return self
     */
    public function setSellerID($sellerID)
    {
        $this->sellerID = $sellerID;
        return $this;
    }

    /**
     * Gets as productSort
     *
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsRequestType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @return string
     */
    public function getProductSort()
    {
        return $this->productSort;
    }

    /**
     * Sets a new productSort
     *
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsRequestType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param string $productSort
     * @return self
     */
    public function setProductSort($productSort)
    {
        $this->productSort = $productSort;
        return $this;
    }

    /**
     * Gets as sortOrder
     *
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsRequestType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @return string
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * Sets a new sortOrder
     *
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsRequestType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param string $sortOrder
     * @return self
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;
        return $this;
    }

    /**
     * Gets as maxEntries
     *
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsRequestType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
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
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsRequestType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param int $maxEntries
     * @return self
     */
    public function setMaxEntries($maxEntries)
    {
        $this->maxEntries = $maxEntries;
        return $this;
    }

    /**
     * Gets as pageNumber
     *
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsRequestType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
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
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsRequestType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param int $pageNumber
     * @return self
     */
    public function setPageNumber($pageNumber)
    {
        $this->pageNumber = $pageNumber;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getIncludeSelector();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IncludeSelector", $value);
        }
        $value = $this->getAvailableItemsOnly();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AvailableItemsOnly", $value);
        }
        $value = $this->getDomainName();
        if (null !== $value && !empty($this->getDomainName())) {
            $writer->write(array_map(function ($v) {
                return ["DomainName" => $v];
            }, $value));
        }
        $value = $this->getProductID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductID", $value);
        }
        $value = $this->getQueryKeywords();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QueryKeywords", $value);
        }
        $value = $this->getSellerID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerID", $value);
        }
        $value = $this->getProductSort();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductSort", $value);
        }
        $value = $this->getSortOrder();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SortOrder", $value);
        }
        $value = $this->getMaxEntries();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxEntries", $value);
        }
        $value = $this->getPageNumber();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PageNumber", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IncludeSelector');
        if (null !== $value) {
            $this->setIncludeSelector($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AvailableItemsOnly');
        if (null !== $value) {
            $this->setAvailableItemsOnly($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DomainName', true);
        if (null !== $value && !empty($value)) {
            $this->setDomainName($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductID');
        if (null !== $value) {
            $this->setProductID(\Nogrod\eBaySDK\Shopping\ProductIDType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QueryKeywords');
        if (null !== $value) {
            $this->setQueryKeywords($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerID');
        if (null !== $value) {
            $this->setSellerID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductSort');
        if (null !== $value) {
            $this->setProductSort($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SortOrder');
        if (null !== $value) {
            $this->setSortOrder($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxEntries');
        if (null !== $value) {
            $this->setMaxEntries($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PageNumber');
        if (null !== $value) {
            $this->setPageNumber($value);
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
