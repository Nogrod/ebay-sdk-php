<?php

namespace Nogrod\eBaySDK\Finding;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CategoryHistogramType
 *
 * Statistical (histogram) information about categories that contain items that
 *  match the query, if any. For categories associated with specific items, see
 *  items returned in each search result. Shows the distribution of items across
 *  each category. Not returned if there is no match.
 * XSD Type: CategoryHistogram
 */
class CategoryHistogramType extends CategoryType
{
    /**
     * The total number of items in the associated category that match the
     *  search criteria.
     *
     * @var int $count
     */
    private $count = null;

    /**
     * Container for histogram information pertaining to a child of the
     *  category specified in the request. Histograms return data on up to
     *  10 children. Histograms are only a single level deep. That is, a
     *  given category histogram contains only immediate children.
     *
     * @var \Nogrod\eBaySDK\Finding\CategoryHistogramType[] $childCategoryHistogram
     */
    private $childCategoryHistogram = [
        
    ];

    /**
     * @var string $delimiter
     */
    private $delimiter = null;

    /**
     * Gets as count
     *
     * The total number of items in the associated category that match the
     *  search criteria.
     *
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Sets a new count
     *
     * The total number of items in the associated category that match the
     *  search criteria.
     *
     * @param int $count
     * @return self
     */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }

    /**
     * Adds as childCategoryHistogram
     *
     * Container for histogram information pertaining to a child of the
     *  category specified in the request. Histograms return data on up to
     *  10 children. Histograms are only a single level deep. That is, a
     *  given category histogram contains only immediate children.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Finding\CategoryHistogramType $childCategoryHistogram
     */
    public function addToChildCategoryHistogram(\Nogrod\eBaySDK\Finding\CategoryHistogramType $childCategoryHistogram)
    {
        $this->childCategoryHistogram[] = $childCategoryHistogram;
        return $this;
    }

    /**
     * isset childCategoryHistogram
     *
     * Container for histogram information pertaining to a child of the
     *  category specified in the request. Histograms return data on up to
     *  10 children. Histograms are only a single level deep. That is, a
     *  given category histogram contains only immediate children.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetChildCategoryHistogram($index)
    {
        return isset($this->childCategoryHistogram[$index]);
    }

    /**
     * unset childCategoryHistogram
     *
     * Container for histogram information pertaining to a child of the
     *  category specified in the request. Histograms return data on up to
     *  10 children. Histograms are only a single level deep. That is, a
     *  given category histogram contains only immediate children.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetChildCategoryHistogram($index)
    {
        unset($this->childCategoryHistogram[$index]);
    }

    /**
     * Gets as childCategoryHistogram
     *
     * Container for histogram information pertaining to a child of the
     *  category specified in the request. Histograms return data on up to
     *  10 children. Histograms are only a single level deep. That is, a
     *  given category histogram contains only immediate children.
     *
     * @return \Nogrod\eBaySDK\Finding\CategoryHistogramType[]
     */
    public function getChildCategoryHistogram()
    {
        return $this->childCategoryHistogram;
    }

    /**
     * Sets a new childCategoryHistogram
     *
     * Container for histogram information pertaining to a child of the
     *  category specified in the request. Histograms return data on up to
     *  10 children. Histograms are only a single level deep. That is, a
     *  given category histogram contains only immediate children.
     *
     * @param \Nogrod\eBaySDK\Finding\CategoryHistogramType[] $childCategoryHistogram
     * @return self
     */
    public function setChildCategoryHistogram(array $childCategoryHistogram)
    {
        $this->childCategoryHistogram = $childCategoryHistogram;
        return $this;
    }

    /**
     * Gets as delimiter
     *
     * @return string
     */
    public function getDelimiter()
    {
        return $this->delimiter;
    }

    /**
     * Sets a new delimiter
     *
     * @param string $delimiter
     * @return self
     */
    public function setDelimiter($delimiter)
    {
        $this->delimiter = $delimiter;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getCount();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}count", $value);
        }
        $value = $this->getChildCategoryHistogram();
        if (null !== $value && !empty($this->getChildCategoryHistogram())) {
            $writer->write(array_map(function ($v) {
                return ["childCategoryHistogram" => $v];
            }, $value));
        }
        $value = $this->getDelimiter();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}delimiter", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}count');
        if (null !== $value) {
            $this->setCount($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}childCategoryHistogram', true);
        if (null !== $value && !empty($value)) {
            $this->setChildCategoryHistogram(array_map(function ($v) {
                return \Nogrod\eBaySDK\Finding\CategoryHistogramType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}delimiter');
        if (null !== $value) {
            $this->setDelimiter($value);
        }
    }
}
