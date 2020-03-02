<?php

namespace Nogrod\eBaySDK\Finding;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CategoryHistogramContainerType
 *
 * Base container for histogram information.
 * XSD Type: CategoryHistogramContainer
 */
class CategoryHistogramContainerType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Statistical (item count) information on the categories that contain items
     *  that match the search criteria or specified category or categories. A
     *  category histogram contains information for up to 10 child categories.
     *  Search result total entries may not necessarily match the sum of category
     *  histogram item counts.
     *  <br><br>
     *  For search calls, the item count shows the distribution of matching items
     *  across each of the returned categories. A category histogram is not
     *  returned if there are no matching items or if the search is restricted to
     *  a single leaf category.
     *  <br><br>
     *  For getHistograms, the category histogram contains the total item count
     *  for the specified category and item counts for the child categories
     *  containing the most item listings. A category histogram is not returned
     *  if the specified category is a leaf category.
     *  <br><br>
     *  For categories associated with specific items, review the individual item
     *  containers returned in the search result.
     *
     * @var \Nogrod\eBaySDK\Finding\CategoryHistogramType[] $categoryHistogram
     */
    private $categoryHistogram = [
        
    ];

    /**
     * @var string $delimiter
     */
    private $delimiter = null;

    /**
     * Adds as categoryHistogram
     *
     * Statistical (item count) information on the categories that contain items
     *  that match the search criteria or specified category or categories. A
     *  category histogram contains information for up to 10 child categories.
     *  Search result total entries may not necessarily match the sum of category
     *  histogram item counts.
     *  <br><br>
     *  For search calls, the item count shows the distribution of matching items
     *  across each of the returned categories. A category histogram is not
     *  returned if there are no matching items or if the search is restricted to
     *  a single leaf category.
     *  <br><br>
     *  For getHistograms, the category histogram contains the total item count
     *  for the specified category and item counts for the child categories
     *  containing the most item listings. A category histogram is not returned
     *  if the specified category is a leaf category.
     *  <br><br>
     *  For categories associated with specific items, review the individual item
     *  containers returned in the search result.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Finding\CategoryHistogramType $categoryHistogram
     */
    public function addToCategoryHistogram(\Nogrod\eBaySDK\Finding\CategoryHistogramType $categoryHistogram)
    {
        $this->categoryHistogram[] = $categoryHistogram;
        return $this;
    }

    /**
     * isset categoryHistogram
     *
     * Statistical (item count) information on the categories that contain items
     *  that match the search criteria or specified category or categories. A
     *  category histogram contains information for up to 10 child categories.
     *  Search result total entries may not necessarily match the sum of category
     *  histogram item counts.
     *  <br><br>
     *  For search calls, the item count shows the distribution of matching items
     *  across each of the returned categories. A category histogram is not
     *  returned if there are no matching items or if the search is restricted to
     *  a single leaf category.
     *  <br><br>
     *  For getHistograms, the category histogram contains the total item count
     *  for the specified category and item counts for the child categories
     *  containing the most item listings. A category histogram is not returned
     *  if the specified category is a leaf category.
     *  <br><br>
     *  For categories associated with specific items, review the individual item
     *  containers returned in the search result.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategoryHistogram($index)
    {
        return isset($this->categoryHistogram[$index]);
    }

    /**
     * unset categoryHistogram
     *
     * Statistical (item count) information on the categories that contain items
     *  that match the search criteria or specified category or categories. A
     *  category histogram contains information for up to 10 child categories.
     *  Search result total entries may not necessarily match the sum of category
     *  histogram item counts.
     *  <br><br>
     *  For search calls, the item count shows the distribution of matching items
     *  across each of the returned categories. A category histogram is not
     *  returned if there are no matching items or if the search is restricted to
     *  a single leaf category.
     *  <br><br>
     *  For getHistograms, the category histogram contains the total item count
     *  for the specified category and item counts for the child categories
     *  containing the most item listings. A category histogram is not returned
     *  if the specified category is a leaf category.
     *  <br><br>
     *  For categories associated with specific items, review the individual item
     *  containers returned in the search result.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategoryHistogram($index)
    {
        unset($this->categoryHistogram[$index]);
    }

    /**
     * Gets as categoryHistogram
     *
     * Statistical (item count) information on the categories that contain items
     *  that match the search criteria or specified category or categories. A
     *  category histogram contains information for up to 10 child categories.
     *  Search result total entries may not necessarily match the sum of category
     *  histogram item counts.
     *  <br><br>
     *  For search calls, the item count shows the distribution of matching items
     *  across each of the returned categories. A category histogram is not
     *  returned if there are no matching items or if the search is restricted to
     *  a single leaf category.
     *  <br><br>
     *  For getHistograms, the category histogram contains the total item count
     *  for the specified category and item counts for the child categories
     *  containing the most item listings. A category histogram is not returned
     *  if the specified category is a leaf category.
     *  <br><br>
     *  For categories associated with specific items, review the individual item
     *  containers returned in the search result.
     *
     * @return \Nogrod\eBaySDK\Finding\CategoryHistogramType[]
     */
    public function getCategoryHistogram()
    {
        return $this->categoryHistogram;
    }

    /**
     * Sets a new categoryHistogram
     *
     * Statistical (item count) information on the categories that contain items
     *  that match the search criteria or specified category or categories. A
     *  category histogram contains information for up to 10 child categories.
     *  Search result total entries may not necessarily match the sum of category
     *  histogram item counts.
     *  <br><br>
     *  For search calls, the item count shows the distribution of matching items
     *  across each of the returned categories. A category histogram is not
     *  returned if there are no matching items or if the search is restricted to
     *  a single leaf category.
     *  <br><br>
     *  For getHistograms, the category histogram contains the total item count
     *  for the specified category and item counts for the child categories
     *  containing the most item listings. A category histogram is not returned
     *  if the specified category is a leaf category.
     *  <br><br>
     *  For categories associated with specific items, review the individual item
     *  containers returned in the search result.
     *
     * @param \Nogrod\eBaySDK\Finding\CategoryHistogramType[] $categoryHistogram
     * @return self
     */
    public function setCategoryHistogram(array $categoryHistogram)
    {
        $this->categoryHistogram = $categoryHistogram;
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
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/search/v1/services");
        $value = $this->getCategoryHistogram();
        if (null !== $value && !empty($this->getCategoryHistogram())) {
            $writer->write(array_map(function ($v) {
                return ["categoryHistogram" => $v];
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}categoryHistogram', true);
        if (null !== $value && !empty($value)) {
            $this->setCategoryHistogram(array_map(function ($v) {
                return \Nogrod\eBaySDK\Finding\CategoryHistogramType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}delimiter');
        if (null !== $value) {
            $this->setDelimiter($value);
        }
    }
}
