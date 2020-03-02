<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SummaryEventScheduleType
 *
 * Details about a summary event schedule.
 * XSD Type: SummaryEventScheduleType
 */
class SummaryEventScheduleType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The event type associated with this alert.
     *
     * @var string $eventType
     */
    private $eventType = null;

    /**
     * The period of time for which to create a summary.
     *
     * @var string $summaryPeriod
     */
    private $summaryPeriod = null;

    /**
     * How often the summary is to be delivered.
     *
     * @var string $frequency
     */
    private $frequency = null;

    /**
     * Gets as eventType
     *
     * The event type associated with this alert.
     *
     * @return string
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * Sets a new eventType
     *
     * The event type associated with this alert.
     *
     * @param string $eventType
     * @return self
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;
        return $this;
    }

    /**
     * Gets as summaryPeriod
     *
     * The period of time for which to create a summary.
     *
     * @return string
     */
    public function getSummaryPeriod()
    {
        return $this->summaryPeriod;
    }

    /**
     * Sets a new summaryPeriod
     *
     * The period of time for which to create a summary.
     *
     * @param string $summaryPeriod
     * @return self
     */
    public function setSummaryPeriod($summaryPeriod)
    {
        $this->summaryPeriod = $summaryPeriod;
        return $this;
    }

    /**
     * Gets as frequency
     *
     * How often the summary is to be delivered.
     *
     * @return string
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Sets a new frequency
     *
     * How often the summary is to be delivered.
     *
     * @param string $frequency
     * @return self
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getEventType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EventType", $value);
        }
        $value = $this->getSummaryPeriod();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SummaryPeriod", $value);
        }
        $value = $this->getFrequency();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Frequency", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EventType');
        if (null !== $value) {
            $this->setEventType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SummaryPeriod');
        if (null !== $value) {
            $this->setSummaryPeriod($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Frequency');
        if (null !== $value) {
            $this->setFrequency($value);
        }
    }
}
