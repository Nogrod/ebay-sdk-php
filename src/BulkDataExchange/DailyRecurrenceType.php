<?php

namespace Nogrod\eBaySDK\BulkDataExchange;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DailyRecurrenceType
 *
 * Type defining the <b>dailyRecurrence</b> container. This container can be used to create a recurring job that is executed on a daily basis. If this container is used, the <b>monthlyRecurrence</b> and <b>weeklyRecurrence</b> containers, and <b>frequencyInMinutes</b> field should not be used.
 * XSD Type: DailyRecurrence
 */
class DailyRecurrenceType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This value is used to specify the time of day that the job will execute on a daily basis. The 24-hour clock and GMT are used. 'HH:MM:SS' is the convention that is used, where 'HH' is hours, 'MM' is minutes, and 'SS' is seconds. A sample value is '05:00:00', which would mean that the recurring job would be executed at 5 AM GMT.
     *  <br/><br/>
     *  This field is always required if the <b>dailyRecurrence</b> container is used.
     *
     * @var \DateTime $timeOfDay
     */
    private $timeOfDay = null;

    /**
     * Gets as timeOfDay
     *
     * This value is used to specify the time of day that the job will execute on a daily basis. The 24-hour clock and GMT are used. 'HH:MM:SS' is the convention that is used, where 'HH' is hours, 'MM' is minutes, and 'SS' is seconds. A sample value is '05:00:00', which would mean that the recurring job would be executed at 5 AM GMT.
     *  <br/><br/>
     *  This field is always required if the <b>dailyRecurrence</b> container is used.
     *
     * @return \DateTime
     */
    public function getTimeOfDay()
    {
        return $this->timeOfDay;
    }

    /**
     * Sets a new timeOfDay
     *
     * This value is used to specify the time of day that the job will execute on a daily basis. The 24-hour clock and GMT are used. 'HH:MM:SS' is the convention that is used, where 'HH' is hours, 'MM' is minutes, and 'SS' is seconds. A sample value is '05:00:00', which would mean that the recurring job would be executed at 5 AM GMT.
     *  <br/><br/>
     *  This field is always required if the <b>dailyRecurrence</b> container is used.
     *
     * @param \DateTime $timeOfDay
     * @return self
     */
    public function setTimeOfDay(\DateTime $timeOfDay)
    {
        $this->timeOfDay = $timeOfDay;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/services");
        $value = $this->getTimeOfDay();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}timeOfDay", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}timeOfDay');
        if (null !== $value) {
            $this->setTimeOfDay($value);
        }
    }
}
