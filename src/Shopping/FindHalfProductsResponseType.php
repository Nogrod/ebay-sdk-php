<?php

namespace Nogrod\eBaySDK\Shopping;

/**
 * Class representing FindHalfProductsResponseType
 *
 * <span class="tablenote"><b>Note: </b> The <b>FindHalfProducts</b> call is deprecated.
 *  </span>
 * XSD Type: FindHalfProductsResponseType
 */
class FindHalfProductsResponseType extends AbstractResponseType
{

    /**
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsResponseType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Shopping\HistogramEntryType[] $domainHistogram
     */
    private $domainHistogram = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsResponseType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @var int $pageNumber
     */
    private $pageNumber = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsResponseType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @var int $approximatePages
     */
    private $approximatePages = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsResponseType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @var bool $moreResults
     */
    private $moreResults = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsResponseType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @var int $totalProducts
     */
    private $totalProducts = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsResponseType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Shopping\HalfCatalogProductType[] $products
     */
    private $products = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsResponseType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @var string $productSearchURL
     */
    private $productSearchURL = null;

    /**
     * Adds as domain
     *
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsResponseType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\HistogramEntryType $domain
     */
    public function addToDomainHistogram(\Nogrod\eBaySDK\Shopping\HistogramEntryType $domain)
    {
        $this->domainHistogram[] = $domain;
        return $this;
    }

    /**
     * isset domainHistogram
     *
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsResponseType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDomainHistogram($index)
    {
        return isset($this->domainHistogram[$index]);
    }

    /**
     * unset domainHistogram
     *
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsResponseType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDomainHistogram($index)
    {
        unset($this->domainHistogram[$index]);
    }

    /**
     * Gets as domainHistogram
     *
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsResponseType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Shopping\HistogramEntryType[]
     */
    public function getDomainHistogram()
    {
        return $this->domainHistogram;
    }

    /**
     * Sets a new domainHistogram
     *
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsResponseType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Shopping\HistogramEntryType[] $domainHistogram
     * @return self
     */
    public function setDomainHistogram(array $domainHistogram)
    {
        $this->domainHistogram = $domainHistogram;
        return $this;
    }

    /**
     * Gets as pageNumber
     *
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsResponseType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
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
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsResponseType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
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

    /**
     * Gets as approximatePages
     *
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsResponseType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @return int
     */
    public function getApproximatePages()
    {
        return $this->approximatePages;
    }

    /**
     * Sets a new approximatePages
     *
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsResponseType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param int $approximatePages
     * @return self
     */
    public function setApproximatePages($approximatePages)
    {
        $this->approximatePages = $approximatePages;
        return $this;
    }

    /**
     * Gets as moreResults
     *
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsResponseType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @return bool
     */
    public function getMoreResults()
    {
        return $this->moreResults;
    }

    /**
     * Sets a new moreResults
     *
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsResponseType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param bool $moreResults
     * @return self
     */
    public function setMoreResults($moreResults)
    {
        $this->moreResults = $moreResults;
        return $this;
    }

    /**
     * Gets as totalProducts
     *
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsResponseType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @return int
     */
    public function getTotalProducts()
    {
        return $this->totalProducts;
    }

    /**
     * Sets a new totalProducts
     *
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsResponseType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param int $totalProducts
     * @return self
     */
    public function setTotalProducts($totalProducts)
    {
        $this->totalProducts = $totalProducts;
        return $this;
    }

    /**
     * Adds as product
     *
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsResponseType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\HalfCatalogProductType $product
     */
    public function addToProducts(\Nogrod\eBaySDK\Shopping\HalfCatalogProductType $product)
    {
        $this->products[] = $product;
        return $this;
    }

    /**
     * isset products
     *
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsResponseType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProducts($index)
    {
        return isset($this->products[$index]);
    }

    /**
     * unset products
     *
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsResponseType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProducts($index)
    {
        unset($this->products[$index]);
    }

    /**
     * Gets as products
     *
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsResponseType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Shopping\HalfCatalogProductType[]
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Sets a new products
     *
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsResponseType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Shopping\HalfCatalogProductType[] $products
     * @return self
     */
    public function setProducts(array $products)
    {
        $this->products = $products;
        return $this;
    }

    /**
     * Gets as productSearchURL
     *
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsResponseType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @return string
     */
    public function getProductSearchURL()
    {
        return $this->productSearchURL;
    }

    /**
     * Sets a new productSearchURL
     *
     * <span class="tablenote"><b>Note: </b> <b>FindHalfProductsResponseType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param string $productSearchURL
     * @return self
     */
    public function setProductSearchURL($productSearchURL)
    {
        $this->productSearchURL = $productSearchURL;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getDomainHistogram();
        if (null !== $value && !empty($this->getDomainHistogram())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DomainHistogram", array_map(function ($v) {
                return ["Domain" => $v];
            }, $value));
        }
        $value = $this->getPageNumber();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PageNumber", $value);
        }
        $value = $this->getApproximatePages();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ApproximatePages", $value);
        }
        $value = $this->getMoreResults();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MoreResults", $value);
        }
        $value = $this->getTotalProducts();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalProducts", $value);
        }
        $value = $this->getProducts();
        if (null !== $value && !empty($this->getProducts())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Products", array_map(function ($v) {
                return ["Product" => $v];
            }, $value));
        }
        $value = $this->getProductSearchURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductSearchURL", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DomainHistogram', true);
        if (null !== $value && !empty($value)) {
            $this->setDomainHistogram(array_map(function ($v) {
                return \Nogrod\eBaySDK\Shopping\HistogramEntryType::fromKeyValue($v);
            }, $value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PageNumber');
        if (null !== $value) {
            $this->setPageNumber($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ApproximatePages');
        if (null !== $value) {
            $this->setApproximatePages($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MoreResults');
        if (null !== $value) {
            $this->setMoreResults($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalProducts');
        if (null !== $value) {
            $this->setTotalProducts($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Products', true);
        if (null !== $value && !empty($value)) {
            $this->setProducts(array_map(function ($v) {
                return \Nogrod\eBaySDK\Shopping\HalfCatalogProductType::fromKeyValue($v);
            }, $value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductSearchURL');
        if (null !== $value) {
            $this->setProductSearchURL($value);
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
