<?php

namespace Nogrod\eBaySDK\Finding;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing FindItemsByCategoryResponseType
 *
 * Response container for the findItemsByKeywords call.
 * XSD Type: FindItemsByCategoryResponse
 */
class FindItemsByCategoryResponseType extends BaseFindingServiceResponseType
{
    /**
     * Response container for a category histogram. This container is
     *  returned only when the specified category has children categories.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  The category IDs returned for items in search results are for the
     *  leaf categories in which the items are listed. If you use a leaf
     *  category ID as input, the response will not return a category
     *  histogram.
     *  </span>
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  When searching the eBay Motors site, category histograms may not be
     *  available for some parent categories. In these cases, aspect
     *  histograms should be used to refine search results. This behavior
     *  is consistent with eBay Motors site search behavior.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Finding\CategoryHistogramContainerType $categoryHistogramContainer
     */
    private $categoryHistogramContainer = null;

    /**
     * Response container for aspect histograms. Aspect histograms are
     *  returned for categories that have been mapped to domains only. In
     *  most cases, just leaf categories are mapped to domains, but there are
     *  exceptions.
     *
     * @var \Nogrod\eBaySDK\Finding\AspectHistogramContainerType $aspectHistogramContainer
     */
    private $aspectHistogramContainer = null;

    /**
     * Response container for condition histograms.
     *  Condition histograms are returned for any category
     *  (leaf or parent).<br>
     *  <br>
     *  Not returned when Condition is specified in itemFilter.
     *  That is, only returned when you have not yet narrowed
     *  your search based on specific conditions.<br>
     *  <br>
     *  Only returned when you search the eBay US site (as of
     *  February 2011). International items in US search results
     *  are included in the histogram counts.
     *
     * @var \Nogrod\eBaySDK\Finding\ConditionHistogramContainerType $conditionHistogramContainer
     */
    private $conditionHistogramContainer = null;

    /**
     * Gets as categoryHistogramContainer
     *
     * Response container for a category histogram. This container is
     *  returned only when the specified category has children categories.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  The category IDs returned for items in search results are for the
     *  leaf categories in which the items are listed. If you use a leaf
     *  category ID as input, the response will not return a category
     *  histogram.
     *  </span>
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  When searching the eBay Motors site, category histograms may not be
     *  available for some parent categories. In these cases, aspect
     *  histograms should be used to refine search results. This behavior
     *  is consistent with eBay Motors site search behavior.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Finding\CategoryHistogramContainerType
     */
    public function getCategoryHistogramContainer()
    {
        return $this->categoryHistogramContainer;
    }

    /**
     * Sets a new categoryHistogramContainer
     *
     * Response container for a category histogram. This container is
     *  returned only when the specified category has children categories.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  The category IDs returned for items in search results are for the
     *  leaf categories in which the items are listed. If you use a leaf
     *  category ID as input, the response will not return a category
     *  histogram.
     *  </span>
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  When searching the eBay Motors site, category histograms may not be
     *  available for some parent categories. In these cases, aspect
     *  histograms should be used to refine search results. This behavior
     *  is consistent with eBay Motors site search behavior.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Finding\CategoryHistogramContainerType $categoryHistogramContainer
     * @return self
     */
    public function setCategoryHistogramContainer(\Nogrod\eBaySDK\Finding\CategoryHistogramContainerType $categoryHistogramContainer)
    {
        $this->categoryHistogramContainer = $categoryHistogramContainer;
        return $this;
    }

    /**
     * Gets as aspectHistogramContainer
     *
     * Response container for aspect histograms. Aspect histograms are
     *  returned for categories that have been mapped to domains only. In
     *  most cases, just leaf categories are mapped to domains, but there are
     *  exceptions.
     *
     * @return \Nogrod\eBaySDK\Finding\AspectHistogramContainerType
     */
    public function getAspectHistogramContainer()
    {
        return $this->aspectHistogramContainer;
    }

    /**
     * Sets a new aspectHistogramContainer
     *
     * Response container for aspect histograms. Aspect histograms are
     *  returned for categories that have been mapped to domains only. In
     *  most cases, just leaf categories are mapped to domains, but there are
     *  exceptions.
     *
     * @param \Nogrod\eBaySDK\Finding\AspectHistogramContainerType $aspectHistogramContainer
     * @return self
     */
    public function setAspectHistogramContainer(\Nogrod\eBaySDK\Finding\AspectHistogramContainerType $aspectHistogramContainer)
    {
        $this->aspectHistogramContainer = $aspectHistogramContainer;
        return $this;
    }

    /**
     * Gets as conditionHistogramContainer
     *
     * Response container for condition histograms.
     *  Condition histograms are returned for any category
     *  (leaf or parent).<br>
     *  <br>
     *  Not returned when Condition is specified in itemFilter.
     *  That is, only returned when you have not yet narrowed
     *  your search based on specific conditions.<br>
     *  <br>
     *  Only returned when you search the eBay US site (as of
     *  February 2011). International items in US search results
     *  are included in the histogram counts.
     *
     * @return \Nogrod\eBaySDK\Finding\ConditionHistogramContainerType
     */
    public function getConditionHistogramContainer()
    {
        return $this->conditionHistogramContainer;
    }

    /**
     * Sets a new conditionHistogramContainer
     *
     * Response container for condition histograms.
     *  Condition histograms are returned for any category
     *  (leaf or parent).<br>
     *  <br>
     *  Not returned when Condition is specified in itemFilter.
     *  That is, only returned when you have not yet narrowed
     *  your search based on specific conditions.<br>
     *  <br>
     *  Only returned when you search the eBay US site (as of
     *  February 2011). International items in US search results
     *  are included in the histogram counts.
     *
     * @param \Nogrod\eBaySDK\Finding\ConditionHistogramContainerType $conditionHistogramContainer
     * @return self
     */
    public function setConditionHistogramContainer(\Nogrod\eBaySDK\Finding\ConditionHistogramContainerType $conditionHistogramContainer)
    {
        $this->conditionHistogramContainer = $conditionHistogramContainer;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getCategoryHistogramContainer();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}categoryHistogramContainer", $value);
        }
        $value = $this->getAspectHistogramContainer();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}aspectHistogramContainer", $value);
        }
        $value = $this->getConditionHistogramContainer();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}conditionHistogramContainer", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}categoryHistogramContainer');
        if (null !== $value) {
            $this->setCategoryHistogramContainer(\Nogrod\eBaySDK\Finding\CategoryHistogramContainerType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}aspectHistogramContainer');
        if (null !== $value) {
            $this->setAspectHistogramContainer(\Nogrod\eBaySDK\Finding\AspectHistogramContainerType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}conditionHistogramContainer');
        if (null !== $value) {
            $this->setConditionHistogramContainer(\Nogrod\eBaySDK\Finding\ConditionHistogramContainerType::fromKeyValue($value));
        }
    }
}
