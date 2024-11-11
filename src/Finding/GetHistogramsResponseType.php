<?php

namespace Nogrod\eBaySDK\Finding;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetHistogramsResponseType
 *
 * Response container for the getHistogram call.
 * XSD Type: GetHistogramsResponse
 */
class GetHistogramsResponseType extends BaseServiceResponseType
{
    /**
     * Response container for category histograms. This container is
     *  returned only when the specified category has children categories.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Category histograms may not be available for some parent categories
     *  on the eBay Motors site.
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
     *  Returned for leaf and parent categories.<br>
     *  <br>
     *  Only returned when you search the eBay US site (as of
     *  February 2011). International items in US search results
     *  are included in the histogram counts.
     *
     * @var \Nogrod\eBaySDK\Finding\ConditionHistogramContainerType $conditionHistogramContainer
     */
    private $conditionHistogramContainer = null;

    /**
     * Reserved for future use.
     *
     * @var \Nogrod\eBaySDK\Finding\ExtensionTypeType[] $extension
     */
    private $extension = [

    ];

    /**
     * Gets as categoryHistogramContainer
     *
     * Response container for category histograms. This container is
     *  returned only when the specified category has children categories.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Category histograms may not be available for some parent categories
     *  on the eBay Motors site.
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
     * Response container for category histograms. This container is
     *  returned only when the specified category has children categories.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Category histograms may not be available for some parent categories
     *  on the eBay Motors site.
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
     *  Returned for leaf and parent categories.<br>
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
     *  Returned for leaf and parent categories.<br>
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

    /**
     * Adds as extension
     *
     * Reserved for future use.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Finding\ExtensionTypeType $extension
     */
    public function addToExtension(\Nogrod\eBaySDK\Finding\ExtensionTypeType $extension)
    {
        $this->extension[] = $extension;
        return $this;
    }

    /**
     * isset extension
     *
     * Reserved for future use.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExtension($index)
    {
        return isset($this->extension[$index]);
    }

    /**
     * unset extension
     *
     * Reserved for future use.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExtension($index)
    {
        unset($this->extension[$index]);
    }

    /**
     * Gets as extension
     *
     * Reserved for future use.
     *
     * @return \Nogrod\eBaySDK\Finding\ExtensionTypeType[]
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Sets a new extension
     *
     * Reserved for future use.
     *
     * @param \Nogrod\eBaySDK\Finding\ExtensionTypeType[] $extension
     * @return self
     */
    public function setExtension(array $extension)
    {
        $this->extension = $extension;
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
        $value = $this->getExtension();
        if (null !== $value && !empty($this->getExtension())) {
            $writer->write(array_map(function ($v) {return ["extension" => $v];}, $value));
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
        $value = Func::mapObject($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}categoryHistogramContainer');
        if (null !== $value) {
            $this->setCategoryHistogramContainer(\Nogrod\eBaySDK\Finding\CategoryHistogramContainerType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}aspectHistogramContainer');
        if (null !== $value) {
            $this->setAspectHistogramContainer(\Nogrod\eBaySDK\Finding\AspectHistogramContainerType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}conditionHistogramContainer');
        if (null !== $value) {
            $this->setConditionHistogramContainer(\Nogrod\eBaySDK\Finding\ConditionHistogramContainerType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}extension');
        if (null !== $value) {
            $this->setExtension(array_map(function ($v) {return \Nogrod\eBaySDK\Finding\ExtensionTypeType::fromKeyValue($v);}, $value));
        }
    }
}
