<?php

namespace Nogrod\eBaySDK\Finding;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing FindItemsForFavoriteSearchResponseType
 *
 * Reserved for future use.
 * XSD Type: FindItemsForFavoriteSearchResponse
 */
class FindItemsForFavoriteSearchResponseType extends BaseFindingServiceResponseType
{
    /**
     * Reserved for future use.
     *
     * @var \Nogrod\eBaySDK\Finding\CategoryHistogramContainerType $categoryHistogramContainer
     */
    private $categoryHistogramContainer = null;

    /**
     * Reserved for future use.
     *
     * @var \Nogrod\eBaySDK\Finding\AspectHistogramContainerType $aspectHistogramContainer
     */
    private $aspectHistogramContainer = null;

    /**
     * Reserved for future use.
     *
     * @var \Nogrod\eBaySDK\Finding\ConditionHistogramContainerType $conditionHistogramContainer
     */
    private $conditionHistogramContainer = null;

    /**
     * Gets as categoryHistogramContainer
     *
     * Reserved for future use.
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
     * Reserved for future use.
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
     * Reserved for future use.
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
     * Reserved for future use.
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
     * Reserved for future use.
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
     * Reserved for future use.
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
