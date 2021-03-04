<?php

namespace Nogrod\eBaySDK\BulkDataExchange;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DateFilterType
 *
 * Reserved for internal or future use.
 * XSD Type: DateFilter
 */
class DateFilterType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Reserved for internal or future use.
     *
     * @var \DateTime $startTime
     */
    private $startTime = null;

    /**
     * Reserved for internal or future use.
     *
     * @var \DateTime $endTime
     */
    private $endTime = null;

    /**
     * Gets as startTime
     *
     * Reserved for internal or future use.
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Sets a new startTime
     *
     * Reserved for internal or future use.
     *
     * @param \DateTime $startTime
     * @return self
     */
    public function setStartTime(\DateTime $startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * Gets as endTime
     *
     * Reserved for internal or future use.
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Sets a new endTime
     *
     * Reserved for internal or future use.
     *
     * @param \DateTime $endTime
     * @return self
     */
    public function setEndTime(\DateTime $endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/services");
        $value = $this->getStartTime();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}startTime", $value);
        }
        $value = $this->getEndTime();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}endTime", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}startTime');
        if (null !== $value) {
            $this->setStartTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}endTime');
        if (null !== $value) {
            $this->setEndTime(new \DateTime($value));
        }
    }
}
