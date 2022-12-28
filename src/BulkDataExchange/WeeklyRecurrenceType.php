<?php

namespace Nogrod\eBaySDK\BulkDataExchange;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing WeeklyRecurrenceType
 *
 * Type defining the <b>weeklyRecurrence</b> container. This container can be used to create a recurring job that is executed on a weekly basis. If this container is used, the <b>monthlyRecurrence</b> and <b>dailyRecurrence</b> containers, and <b>frequencyInMinutes</b> field should not be used.
 * XSD Type: WeeklyRecurrence
 */
class WeeklyRecurrenceType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This value is used to specify which day of the week that the recurring job should be executed. Supported values are 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', and 'Saturday'.
     *  <br/><br/>
     *  This field is always required if the <b>weeklyRecurrence</b> container is used.
     *
     * @var string $dayOfWeek
     */
    private $dayOfWeek = null;

    /**
     * This value is used to specify the time of day (on the day specified through the <b>dayOfWeek</b> field) that the job will execute. The 24-hour clock and GMT are used. 'HH:MM:SS' is the convention that is used, where 'HH' is hours, 'MM' is minutes, and 'SS' is seconds. A sample value is '05:00:00', which would mean that the recurring job would be executed at 5 AM GMT.
     *  <br/><br/>
     *  This field is always required if the <b>weeklyRecurrence</b> container is used.
     *
     * @var \DateTime $timeOfDay
     */
    private $timeOfDay = null;

    /**
     * Gets as dayOfWeek
     *
     * This value is used to specify which day of the week that the recurring job should be executed. Supported values are 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', and 'Saturday'.
     *  <br/><br/>
     *  This field is always required if the <b>weeklyRecurrence</b> container is used.
     *
     * @return string
     */
    public function getDayOfWeek()
    {
        return $this->dayOfWeek;
    }

    /**
     * Sets a new dayOfWeek
     *
     * This value is used to specify which day of the week that the recurring job should be executed. Supported values are 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', and 'Saturday'.
     *  <br/><br/>
     *  This field is always required if the <b>weeklyRecurrence</b> container is used.
     *
     * @param string $dayOfWeek
     * @return self
     */
    public function setDayOfWeek($dayOfWeek)
    {
        $this->dayOfWeek = $dayOfWeek;
        return $this;
    }

    /**
     * Gets as timeOfDay
     *
     * This value is used to specify the time of day (on the day specified through the <b>dayOfWeek</b> field) that the job will execute. The 24-hour clock and GMT are used. 'HH:MM:SS' is the convention that is used, where 'HH' is hours, 'MM' is minutes, and 'SS' is seconds. A sample value is '05:00:00', which would mean that the recurring job would be executed at 5 AM GMT.
     *  <br/><br/>
     *  This field is always required if the <b>weeklyRecurrence</b> container is used.
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
     * This value is used to specify the time of day (on the day specified through the <b>dayOfWeek</b> field) that the job will execute. The 24-hour clock and GMT are used. 'HH:MM:SS' is the convention that is used, where 'HH' is hours, 'MM' is minutes, and 'SS' is seconds. A sample value is '05:00:00', which would mean that the recurring job would be executed at 5 AM GMT.
     *  <br/><br/>
     *  This field is always required if the <b>weeklyRecurrence</b> container is used.
     *
     * @param \DateTime $timeOfDay
     * @return self
     */
    public function setTimeOfDay(\DateTime $timeOfDay)
    {
        $this->timeOfDay = $timeOfDay;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/services");
        $value = $this->getDayOfWeek();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}dayOfWeek", $value);
        }
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}dayOfWeek');
        if (null !== $value) {
            $this->setDayOfWeek($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}timeOfDay');
        if (null !== $value) {
            $this->setTimeOfDay($value);
        }
    }
}
