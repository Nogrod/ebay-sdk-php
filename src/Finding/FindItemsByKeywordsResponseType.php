<?php

namespace Nogrod\eBaySDK\Finding;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing FindItemsByKeywordsResponseType
 *
 * Response container for the findItemsByKeywords call.
 * XSD Type: FindItemsByKeywordsResponse
 */
class FindItemsByKeywordsResponseType extends BaseFindingServiceResponseType
{
    /**
     * Response container for category histograms. Only returned when one or
     *  more category histograms are returned. A category histogram is not
     *  returned if the search query returns no matching items.
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
     * Response container for aspect histograms.
     *
     * @var \Nogrod\eBaySDK\Finding\AspectHistogramContainerType $aspectHistogramContainer
     */
    private $aspectHistogramContainer = null;

    /**
     * Response container for condition histograms.<br>
     *  <br>
     *  Not returned when Condition is specified in itemFilter.
     *  That is, only returned when you have not yet narrowed
     *  your search based on specific conditions.<br>
     *  <br>
     *  Supported for all eBay sites except US eBay Motors,
     *  India (IN), Malaysia (MY) and Philippines (PH).
     *  International items that appear in search results
     *  are included in a site's histogram counts.
     *
     * @var \Nogrod\eBaySDK\Finding\ConditionHistogramContainerType $conditionHistogramContainer
     */
    private $conditionHistogramContainer = null;

    /**
     * Gets as categoryHistogramContainer
     *
     * Response container for category histograms. Only returned when one or
     *  more category histograms are returned. A category histogram is not
     *  returned if the search query returns no matching items.
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
     * Response container for category histograms. Only returned when one or
     *  more category histograms are returned. A category histogram is not
     *  returned if the search query returns no matching items.
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
     * Response container for aspect histograms.
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
     * Response container for aspect histograms.
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
     * Response container for condition histograms.<br>
     *  <br>
     *  Not returned when Condition is specified in itemFilter.
     *  That is, only returned when you have not yet narrowed
     *  your search based on specific conditions.<br>
     *  <br>
     *  Supported for all eBay sites except US eBay Motors,
     *  India (IN), Malaysia (MY) and Philippines (PH).
     *  International items that appear in search results
     *  are included in a site's histogram counts.
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
     * Response container for condition histograms.<br>
     *  <br>
     *  Not returned when Condition is specified in itemFilter.
     *  That is, only returned when you have not yet narrowed
     *  your search based on specific conditions.<br>
     *  <br>
     *  Supported for all eBay sites except US eBay Motors,
     *  India (IN), Malaysia (MY) and Philippines (PH).
     *  International items that appear in search results
     *  are included in a site's histogram counts.
     *
     * @param \Nogrod\eBaySDK\Finding\ConditionHistogramContainerType $conditionHistogramContainer
     * @return self
     */
    public function setConditionHistogramContainer(\Nogrod\eBaySDK\Finding\ConditionHistogramContainerType $conditionHistogramContainer)
    {
        $this->conditionHistogramContainer = $conditionHistogramContainer;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
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
