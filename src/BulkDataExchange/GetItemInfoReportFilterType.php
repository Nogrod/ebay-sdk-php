<?php

namespace Nogrod\eBaySDK\BulkDataExchange;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetItemInfoReportFilterType
 *
 * Reserved for internal or future use.
 * XSD Type: GetItemInfoReportFilter
 */
class GetItemInfoReportFilterType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Reserved for internal or future use.
     *
     * @var \Nogrod\eBaySDK\BulkDataExchange\GetItemJobActionType $jobAction
     */
    private $jobAction = null;

    /**
     * Reserved for internal or future use.
     *
     * @var string $filterType
     */
    private $filterType = null;

    /**
     * Reserved for internal or future use.
     *
     * @var bool $includeAttributes
     */
    private $includeAttributes = null;

    /**
     * Reserved for internal or future use.
     *
     * @var bool $includeDescription
     */
    private $includeDescription = null;

    /**
     * Reserved for internal or future use.
     *
     * @var \DateTime $reportDateFrom
     */
    private $reportDateFrom = null;

    /**
     * Reserved for internal or future use.
     *
     * @var \DateTime $reportDateTo
     */
    private $reportDateTo = null;

    /**
     * Reserved for internal or future use.
     *
     * @var string[] $timeFrame
     */
    private $timeFrame = [

    ];

    /**
     * Reserved for internal or future use.
     *
     * @var string[] $changedFieldSelector
     */
    private $changedFieldSelector = [

    ];

    /**
     * Gets as jobAction
     *
     * Reserved for internal or future use.
     *
     * @return \Nogrod\eBaySDK\BulkDataExchange\GetItemJobActionType
     */
    public function getJobAction()
    {
        return $this->jobAction;
    }

    /**
     * Sets a new jobAction
     *
     * Reserved for internal or future use.
     *
     * @param \Nogrod\eBaySDK\BulkDataExchange\GetItemJobActionType $jobAction
     * @return self
     */
    public function setJobAction(\Nogrod\eBaySDK\BulkDataExchange\GetItemJobActionType $jobAction)
    {
        $this->jobAction = $jobAction;
        return $this;
    }

    /**
     * Gets as filterType
     *
     * Reserved for internal or future use.
     *
     * @return string
     */
    public function getFilterType()
    {
        return $this->filterType;
    }

    /**
     * Sets a new filterType
     *
     * Reserved for internal or future use.
     *
     * @param string $filterType
     * @return self
     */
    public function setFilterType($filterType)
    {
        $this->filterType = $filterType;
        return $this;
    }

    /**
     * Gets as includeAttributes
     *
     * Reserved for internal or future use.
     *
     * @return bool
     */
    public function getIncludeAttributes()
    {
        return $this->includeAttributes;
    }

    /**
     * Sets a new includeAttributes
     *
     * Reserved for internal or future use.
     *
     * @param bool $includeAttributes
     * @return self
     */
    public function setIncludeAttributes($includeAttributes)
    {
        $this->includeAttributes = $includeAttributes;
        return $this;
    }

    /**
     * Gets as includeDescription
     *
     * Reserved for internal or future use.
     *
     * @return bool
     */
    public function getIncludeDescription()
    {
        return $this->includeDescription;
    }

    /**
     * Sets a new includeDescription
     *
     * Reserved for internal or future use.
     *
     * @param bool $includeDescription
     * @return self
     */
    public function setIncludeDescription($includeDescription)
    {
        $this->includeDescription = $includeDescription;
        return $this;
    }

    /**
     * Gets as reportDateFrom
     *
     * Reserved for internal or future use.
     *
     * @return \DateTime
     */
    public function getReportDateFrom()
    {
        return $this->reportDateFrom;
    }

    /**
     * Sets a new reportDateFrom
     *
     * Reserved for internal or future use.
     *
     * @param \DateTime $reportDateFrom
     * @return self
     */
    public function setReportDateFrom(\DateTime $reportDateFrom)
    {
        $this->reportDateFrom = $reportDateFrom;
        return $this;
    }

    /**
     * Gets as reportDateTo
     *
     * Reserved for internal or future use.
     *
     * @return \DateTime
     */
    public function getReportDateTo()
    {
        return $this->reportDateTo;
    }

    /**
     * Sets a new reportDateTo
     *
     * Reserved for internal or future use.
     *
     * @param \DateTime $reportDateTo
     * @return self
     */
    public function setReportDateTo(\DateTime $reportDateTo)
    {
        $this->reportDateTo = $reportDateTo;
        return $this;
    }

    /**
     * Adds as timeFrame
     *
     * Reserved for internal or future use.
     *
     * @return self
     * @param string $timeFrame
     */
    public function addToTimeFrame($timeFrame)
    {
        $this->timeFrame[] = $timeFrame;
        return $this;
    }

    /**
     * isset timeFrame
     *
     * Reserved for internal or future use.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTimeFrame($index)
    {
        return isset($this->timeFrame[$index]);
    }

    /**
     * unset timeFrame
     *
     * Reserved for internal or future use.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTimeFrame($index)
    {
        unset($this->timeFrame[$index]);
    }

    /**
     * Gets as timeFrame
     *
     * Reserved for internal or future use.
     *
     * @return string[]
     */
    public function getTimeFrame()
    {
        return $this->timeFrame;
    }

    /**
     * Sets a new timeFrame
     *
     * Reserved for internal or future use.
     *
     * @param string[] $timeFrame
     * @return self
     */
    public function setTimeFrame(array $timeFrame)
    {
        $this->timeFrame = $timeFrame;
        return $this;
    }

    /**
     * Adds as changedFieldSelector
     *
     * Reserved for internal or future use.
     *
     * @return self
     * @param string $changedFieldSelector
     */
    public function addToChangedFieldSelector($changedFieldSelector)
    {
        $this->changedFieldSelector[] = $changedFieldSelector;
        return $this;
    }

    /**
     * isset changedFieldSelector
     *
     * Reserved for internal or future use.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetChangedFieldSelector($index)
    {
        return isset($this->changedFieldSelector[$index]);
    }

    /**
     * unset changedFieldSelector
     *
     * Reserved for internal or future use.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetChangedFieldSelector($index)
    {
        unset($this->changedFieldSelector[$index]);
    }

    /**
     * Gets as changedFieldSelector
     *
     * Reserved for internal or future use.
     *
     * @return string[]
     */
    public function getChangedFieldSelector()
    {
        return $this->changedFieldSelector;
    }

    /**
     * Sets a new changedFieldSelector
     *
     * Reserved for internal or future use.
     *
     * @param string[] $changedFieldSelector
     * @return self
     */
    public function setChangedFieldSelector(array $changedFieldSelector)
    {
        $this->changedFieldSelector = $changedFieldSelector;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/services");
        $value = $this->getJobAction();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}jobAction", $value);
        }
        $value = $this->getFilterType();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}filterType", $value);
        }
        $value = $this->getIncludeAttributes();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}includeAttributes", $value);
        }
        $value = $this->getIncludeDescription();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}includeDescription", $value);
        }
        $value = $this->getReportDateFrom();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}reportDateFrom", $value);
        }
        $value = $this->getReportDateTo();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}reportDateTo", $value);
        }
        $value = $this->getTimeFrame();
        if (null !== $value && !empty($this->getTimeFrame())) {
            $writer->write(array_map(function ($v) {
                return ["timeFrame" => $v];
            }, $value));
        }
        $value = $this->getChangedFieldSelector();
        if (null !== $value && !empty($this->getChangedFieldSelector())) {
            $writer->write(array_map(function ($v) {
                return ["changedFieldSelector" => $v];
            }, $value));
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}jobAction');
        if (null !== $value) {
            $this->setJobAction(\Nogrod\eBaySDK\BulkDataExchange\GetItemJobActionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}filterType');
        if (null !== $value) {
            $this->setFilterType($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}includeAttributes');
        if (null !== $value) {
            $this->setIncludeAttributes($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}includeDescription');
        if (null !== $value) {
            $this->setIncludeDescription($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}reportDateFrom');
        if (null !== $value) {
            $this->setReportDateFrom(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}reportDateTo');
        if (null !== $value) {
            $this->setReportDateTo(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}timeFrame', true);
        if (null !== $value && !empty($value)) {
            $this->setTimeFrame($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}changedFieldSelector', true);
        if (null !== $value && !empty($value)) {
            $this->setChangedFieldSelector($value);
        }
    }
}
