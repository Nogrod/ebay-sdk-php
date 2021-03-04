<?php

namespace Nogrod\eBaySDK\BulkDataExchange;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MonthlyRecurrenceType
 *
 * Type defining the <b>monthlyRecurrence</b> container. This container can be used to create a recurring job that is executed on a monthly basis. If this container is used, the <b>weeklyRecurrence</b> and <b>dailyRecurrence</b> containers, and <b>frequencyInMinutes</b> field should not be used.
 * XSD Type: MonthlyRecurrence
 */
class MonthlyRecurrenceType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This value is used to specify which day of each month that the recurring job should be executed. Supported values are 'Day_1', 'Day_2', 'Day_3', and all the way up to 'Day_28'. 'Day_Last' is also a supported value and indicates that the recurring job should be executed on the last day of each month, whether that be the 28th (in February), the 29th (in February during a leap year), the 30th, or 31st.
     *  <br/><br/>
     *  'Day_29', 'Day_30', and 'Day_31' are NOT supported values. This field is always required if the <b>monthlyRecurrence</b> container is used.
     *
     * @var string $dayOfMonth
     */
    private $dayOfMonth = null;

    /**
     * This value is used to specify the time of day (on the day specified through the <b>dayOfMonth</b> field) that the job will execute. The 24-hour clock and GMT are used. 'HH:MM:SS' is the convention that is used, where 'HH' is hours, 'MM' is minutes, and 'SS' is seconds. A sample value is '05:00:00', which would mean that the recurring job would be executed at 5 AM GMT.
     *  <br/><br/>
     *  This field is always required if the <b>monthlyRecurrence</b> container is used.
     *
     * @var \DateTime $timeOfDay
     */
    private $timeOfDay = null;

    /**
     * Gets as dayOfMonth
     *
     * This value is used to specify which day of each month that the recurring job should be executed. Supported values are 'Day_1', 'Day_2', 'Day_3', and all the way up to 'Day_28'. 'Day_Last' is also a supported value and indicates that the recurring job should be executed on the last day of each month, whether that be the 28th (in February), the 29th (in February during a leap year), the 30th, or 31st.
     *  <br/><br/>
     *  'Day_29', 'Day_30', and 'Day_31' are NOT supported values. This field is always required if the <b>monthlyRecurrence</b> container is used.
     *
     * @return string
     */
    public function getDayOfMonth()
    {
        return $this->dayOfMonth;
    }

    /**
     * Sets a new dayOfMonth
     *
     * This value is used to specify which day of each month that the recurring job should be executed. Supported values are 'Day_1', 'Day_2', 'Day_3', and all the way up to 'Day_28'. 'Day_Last' is also a supported value and indicates that the recurring job should be executed on the last day of each month, whether that be the 28th (in February), the 29th (in February during a leap year), the 30th, or 31st.
     *  <br/><br/>
     *  'Day_29', 'Day_30', and 'Day_31' are NOT supported values. This field is always required if the <b>monthlyRecurrence</b> container is used.
     *
     * @param string $dayOfMonth
     * @return self
     */
    public function setDayOfMonth($dayOfMonth)
    {
        $this->dayOfMonth = $dayOfMonth;
        return $this;
    }

    /**
     * Gets as timeOfDay
     *
     * This value is used to specify the time of day (on the day specified through the <b>dayOfMonth</b> field) that the job will execute. The 24-hour clock and GMT are used. 'HH:MM:SS' is the convention that is used, where 'HH' is hours, 'MM' is minutes, and 'SS' is seconds. A sample value is '05:00:00', which would mean that the recurring job would be executed at 5 AM GMT.
     *  <br/><br/>
     *  This field is always required if the <b>monthlyRecurrence</b> container is used.
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
     * This value is used to specify the time of day (on the day specified through the <b>dayOfMonth</b> field) that the job will execute. The 24-hour clock and GMT are used. 'HH:MM:SS' is the convention that is used, where 'HH' is hours, 'MM' is minutes, and 'SS' is seconds. A sample value is '05:00:00', which would mean that the recurring job would be executed at 5 AM GMT.
     *  <br/><br/>
     *  This field is always required if the <b>monthlyRecurrence</b> container is used.
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
        $value = $this->getDayOfMonth();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}dayOfMonth", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}dayOfMonth');
        if (null !== $value) {
            $this->setDayOfMonth($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}timeOfDay');
        if (null !== $value) {
            $this->setTimeOfDay($value);
        }
    }
}
