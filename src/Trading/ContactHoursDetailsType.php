<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ContactHoursDetailsType
 *
 * Type defining the <b>ContactHoursDetails</b> container, which is used in Add/Revise/Relist calls to provide contact hours for the owner of a Classified Ad. The <b>ContactHoursDetails</b> container is only applicable to Classified Ad listings.
 * XSD Type: ContactHoursDetailsType
 */
class ContactHoursDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Indicates the local time zone of the values provided for Hours1From/Hours1To
     *  and Hours2From/Hours2To. If you specify a contact hours time range with
     *  Hours1From and Hours1To, you must provide a local time zone.
     *  To retrieve a complete list of the TimeZoneID values
     *  supported by eBay, call <b>GeteBayDetails</b> with <b>DetailName</b>
     *  set to <b>TimeZoneDetails</b>.
     *
     * @var string $timeZoneID
     */
    private $timeZoneID = null;

    /**
     * Indicates the range of days for which the primary contact hours
     *  specified by Hours1AnyTime or Hours1From and Hours1To apply.
     *  If a value of None is provided for this field, the values provided for
     *  Hours1AnyTime, Hours1From, Hours1To are ignored.
     *
     * @var string $hours1Days
     */
    private $hours1Days = null;

    /**
     * Indicates whether or not a user is available to be contacted 24 hours a day
     *  during the range of days specified using the Hours1Days element.
     *  True indicates the user is available 24 hours a day, false indicates otherwise.
     *  In the case of this field being true, all values provided for Hours1From and
     *  Hours1To will be ignored. In the case of this field being false,
     *  the values provided Hours1From and Hours1To will be considered.
     *
     * @var bool $hours1AnyTime
     */
    private $hours1AnyTime = null;

    /**
     * Indicates the starting time of day this eBay user is available for other eBay
     *  members to contact for the range of days specified using Hours1Days.
     *  Enter times in 30 minute increments from the top of the hour. That is, enter
     *  values either on the hour (:00) or 30 minutes past the hour (:30).
     *  Other values will be will be rounded down to the next closest 30 minute
     *  increment. Times entered should be local to the value provided for TimeZoneID.
     *
     * @var \DateTime $hours1From
     */
    private $hours1From = null;

    /**
     * Indicates the ending time of day this eBay user is available for other eBay
     *  members to contact them for the range of days specified using Hours1Days.
     *  Enter times in 30 minute increments from the top of the hour. That is, enter
     *  values either on the hour (:00) or 30 minutes past the hour (:30).
     *  Other values will be will be rounded down to the next closest 30 minute
     *  increment. Times entered should be local to the value provided for TimeZoneID.
     *
     * @var \DateTime $hours1To
     */
    private $hours1To = null;

    /**
     * Indicates the range of days for which the secondary contact hours
     *  specified by Hours2AnyTime or Hours2From and Hours2To apply.
     *  If a value of None is provided for this field, the values provided for
     *  Hours2AnyTime, Hours2From, Hours2To are ignored.
     *  <br>
     *  <b>Note:</b> You cannot set Hours2Days to EveryDay. If Hours1Days
     *  is set to EveryDay, secondary contact hours do not apply. Hours2Days cannot be
     *  set to the same value as Hours1Days.
     *
     * @var string $hours2Days
     */
    private $hours2Days = null;

    /**
     * Indicates whether or not a user is available to be contacted 24 hours a day
     *  during the range of days specified using the Hours2Days element.
     *  True indicates the user is available 24 hours a day, false indicates otherwise.
     *  In the case of this field being true, all values provided for Hours2From and
     *  Hours2To will be ignored. In the case of this field being false,
     *  the values provided Hours2From and Hours2To will be considered.
     *
     * @var bool $hours2AnyTime
     */
    private $hours2AnyTime = null;

    /**
     * Indicates the starting time of day this eBay user is available for other eBay
     *  members to contact for the range of days specified using Hours2Days.
     *  Enter times in 30 minute increments from the top of the hour. That is, enter
     *  values either on the hour (:00) or 30 minutes past the hour (:30).
     *  Other values will be will be rounded down to the next closest 30 minute
     *  increment. Times entered should be local to the value provided for TimeZoneID.
     *
     * @var \DateTime $hours2From
     */
    private $hours2From = null;

    /**
     * Indicates the ending time of day this eBay user is available for other eBay
     *  members to contact them for the range of days specified using Hours1Days.
     *  Enter times in 30 minute increments from the top of the hour. That is, enter
     *  values either on the hour (:00) or 30 minutes past the hour (:30).
     *  Other values will be will be rounded down to the next closest 30 minute
     *  increment. Times entered should be local to the value provided for TimeZoneID.
     *
     * @var \DateTime $hours2To
     */
    private $hours2To = null;

    /**
     * Gets as timeZoneID
     *
     * Indicates the local time zone of the values provided for Hours1From/Hours1To
     *  and Hours2From/Hours2To. If you specify a contact hours time range with
     *  Hours1From and Hours1To, you must provide a local time zone.
     *  To retrieve a complete list of the TimeZoneID values
     *  supported by eBay, call <b>GeteBayDetails</b> with <b>DetailName</b>
     *  set to <b>TimeZoneDetails</b>.
     *
     * @return string
     */
    public function getTimeZoneID()
    {
        return $this->timeZoneID;
    }

    /**
     * Sets a new timeZoneID
     *
     * Indicates the local time zone of the values provided for Hours1From/Hours1To
     *  and Hours2From/Hours2To. If you specify a contact hours time range with
     *  Hours1From and Hours1To, you must provide a local time zone.
     *  To retrieve a complete list of the TimeZoneID values
     *  supported by eBay, call <b>GeteBayDetails</b> with <b>DetailName</b>
     *  set to <b>TimeZoneDetails</b>.
     *
     * @param string $timeZoneID
     * @return self
     */
    public function setTimeZoneID($timeZoneID)
    {
        $this->timeZoneID = $timeZoneID;
        return $this;
    }

    /**
     * Gets as hours1Days
     *
     * Indicates the range of days for which the primary contact hours
     *  specified by Hours1AnyTime or Hours1From and Hours1To apply.
     *  If a value of None is provided for this field, the values provided for
     *  Hours1AnyTime, Hours1From, Hours1To are ignored.
     *
     * @return string
     */
    public function getHours1Days()
    {
        return $this->hours1Days;
    }

    /**
     * Sets a new hours1Days
     *
     * Indicates the range of days for which the primary contact hours
     *  specified by Hours1AnyTime or Hours1From and Hours1To apply.
     *  If a value of None is provided for this field, the values provided for
     *  Hours1AnyTime, Hours1From, Hours1To are ignored.
     *
     * @param string $hours1Days
     * @return self
     */
    public function setHours1Days($hours1Days)
    {
        $this->hours1Days = $hours1Days;
        return $this;
    }

    /**
     * Gets as hours1AnyTime
     *
     * Indicates whether or not a user is available to be contacted 24 hours a day
     *  during the range of days specified using the Hours1Days element.
     *  True indicates the user is available 24 hours a day, false indicates otherwise.
     *  In the case of this field being true, all values provided for Hours1From and
     *  Hours1To will be ignored. In the case of this field being false,
     *  the values provided Hours1From and Hours1To will be considered.
     *
     * @return bool
     */
    public function getHours1AnyTime()
    {
        return $this->hours1AnyTime;
    }

    /**
     * Sets a new hours1AnyTime
     *
     * Indicates whether or not a user is available to be contacted 24 hours a day
     *  during the range of days specified using the Hours1Days element.
     *  True indicates the user is available 24 hours a day, false indicates otherwise.
     *  In the case of this field being true, all values provided for Hours1From and
     *  Hours1To will be ignored. In the case of this field being false,
     *  the values provided Hours1From and Hours1To will be considered.
     *
     * @param bool $hours1AnyTime
     * @return self
     */
    public function setHours1AnyTime($hours1AnyTime)
    {
        $this->hours1AnyTime = $hours1AnyTime;
        return $this;
    }

    /**
     * Gets as hours1From
     *
     * Indicates the starting time of day this eBay user is available for other eBay
     *  members to contact for the range of days specified using Hours1Days.
     *  Enter times in 30 minute increments from the top of the hour. That is, enter
     *  values either on the hour (:00) or 30 minutes past the hour (:30).
     *  Other values will be will be rounded down to the next closest 30 minute
     *  increment. Times entered should be local to the value provided for TimeZoneID.
     *
     * @return \DateTime
     */
    public function getHours1From()
    {
        return $this->hours1From;
    }

    /**
     * Sets a new hours1From
     *
     * Indicates the starting time of day this eBay user is available for other eBay
     *  members to contact for the range of days specified using Hours1Days.
     *  Enter times in 30 minute increments from the top of the hour. That is, enter
     *  values either on the hour (:00) or 30 minutes past the hour (:30).
     *  Other values will be will be rounded down to the next closest 30 minute
     *  increment. Times entered should be local to the value provided for TimeZoneID.
     *
     * @param \DateTime $hours1From
     * @return self
     */
    public function setHours1From(\DateTime $hours1From)
    {
        $this->hours1From = $hours1From;
        return $this;
    }

    /**
     * Gets as hours1To
     *
     * Indicates the ending time of day this eBay user is available for other eBay
     *  members to contact them for the range of days specified using Hours1Days.
     *  Enter times in 30 minute increments from the top of the hour. That is, enter
     *  values either on the hour (:00) or 30 minutes past the hour (:30).
     *  Other values will be will be rounded down to the next closest 30 minute
     *  increment. Times entered should be local to the value provided for TimeZoneID.
     *
     * @return \DateTime
     */
    public function getHours1To()
    {
        return $this->hours1To;
    }

    /**
     * Sets a new hours1To
     *
     * Indicates the ending time of day this eBay user is available for other eBay
     *  members to contact them for the range of days specified using Hours1Days.
     *  Enter times in 30 minute increments from the top of the hour. That is, enter
     *  values either on the hour (:00) or 30 minutes past the hour (:30).
     *  Other values will be will be rounded down to the next closest 30 minute
     *  increment. Times entered should be local to the value provided for TimeZoneID.
     *
     * @param \DateTime $hours1To
     * @return self
     */
    public function setHours1To(\DateTime $hours1To)
    {
        $this->hours1To = $hours1To;
        return $this;
    }

    /**
     * Gets as hours2Days
     *
     * Indicates the range of days for which the secondary contact hours
     *  specified by Hours2AnyTime or Hours2From and Hours2To apply.
     *  If a value of None is provided for this field, the values provided for
     *  Hours2AnyTime, Hours2From, Hours2To are ignored.
     *  <br>
     *  <b>Note:</b> You cannot set Hours2Days to EveryDay. If Hours1Days
     *  is set to EveryDay, secondary contact hours do not apply. Hours2Days cannot be
     *  set to the same value as Hours1Days.
     *
     * @return string
     */
    public function getHours2Days()
    {
        return $this->hours2Days;
    }

    /**
     * Sets a new hours2Days
     *
     * Indicates the range of days for which the secondary contact hours
     *  specified by Hours2AnyTime or Hours2From and Hours2To apply.
     *  If a value of None is provided for this field, the values provided for
     *  Hours2AnyTime, Hours2From, Hours2To are ignored.
     *  <br>
     *  <b>Note:</b> You cannot set Hours2Days to EveryDay. If Hours1Days
     *  is set to EveryDay, secondary contact hours do not apply. Hours2Days cannot be
     *  set to the same value as Hours1Days.
     *
     * @param string $hours2Days
     * @return self
     */
    public function setHours2Days($hours2Days)
    {
        $this->hours2Days = $hours2Days;
        return $this;
    }

    /**
     * Gets as hours2AnyTime
     *
     * Indicates whether or not a user is available to be contacted 24 hours a day
     *  during the range of days specified using the Hours2Days element.
     *  True indicates the user is available 24 hours a day, false indicates otherwise.
     *  In the case of this field being true, all values provided for Hours2From and
     *  Hours2To will be ignored. In the case of this field being false,
     *  the values provided Hours2From and Hours2To will be considered.
     *
     * @return bool
     */
    public function getHours2AnyTime()
    {
        return $this->hours2AnyTime;
    }

    /**
     * Sets a new hours2AnyTime
     *
     * Indicates whether or not a user is available to be contacted 24 hours a day
     *  during the range of days specified using the Hours2Days element.
     *  True indicates the user is available 24 hours a day, false indicates otherwise.
     *  In the case of this field being true, all values provided for Hours2From and
     *  Hours2To will be ignored. In the case of this field being false,
     *  the values provided Hours2From and Hours2To will be considered.
     *
     * @param bool $hours2AnyTime
     * @return self
     */
    public function setHours2AnyTime($hours2AnyTime)
    {
        $this->hours2AnyTime = $hours2AnyTime;
        return $this;
    }

    /**
     * Gets as hours2From
     *
     * Indicates the starting time of day this eBay user is available for other eBay
     *  members to contact for the range of days specified using Hours2Days.
     *  Enter times in 30 minute increments from the top of the hour. That is, enter
     *  values either on the hour (:00) or 30 minutes past the hour (:30).
     *  Other values will be will be rounded down to the next closest 30 minute
     *  increment. Times entered should be local to the value provided for TimeZoneID.
     *
     * @return \DateTime
     */
    public function getHours2From()
    {
        return $this->hours2From;
    }

    /**
     * Sets a new hours2From
     *
     * Indicates the starting time of day this eBay user is available for other eBay
     *  members to contact for the range of days specified using Hours2Days.
     *  Enter times in 30 minute increments from the top of the hour. That is, enter
     *  values either on the hour (:00) or 30 minutes past the hour (:30).
     *  Other values will be will be rounded down to the next closest 30 minute
     *  increment. Times entered should be local to the value provided for TimeZoneID.
     *
     * @param \DateTime $hours2From
     * @return self
     */
    public function setHours2From(\DateTime $hours2From)
    {
        $this->hours2From = $hours2From;
        return $this;
    }

    /**
     * Gets as hours2To
     *
     * Indicates the ending time of day this eBay user is available for other eBay
     *  members to contact them for the range of days specified using Hours1Days.
     *  Enter times in 30 minute increments from the top of the hour. That is, enter
     *  values either on the hour (:00) or 30 minutes past the hour (:30).
     *  Other values will be will be rounded down to the next closest 30 minute
     *  increment. Times entered should be local to the value provided for TimeZoneID.
     *
     * @return \DateTime
     */
    public function getHours2To()
    {
        return $this->hours2To;
    }

    /**
     * Sets a new hours2To
     *
     * Indicates the ending time of day this eBay user is available for other eBay
     *  members to contact them for the range of days specified using Hours1Days.
     *  Enter times in 30 minute increments from the top of the hour. That is, enter
     *  values either on the hour (:00) or 30 minutes past the hour (:30).
     *  Other values will be will be rounded down to the next closest 30 minute
     *  increment. Times entered should be local to the value provided for TimeZoneID.
     *
     * @param \DateTime $hours2To
     * @return self
     */
    public function setHours2To(\DateTime $hours2To)
    {
        $this->hours2To = $hours2To;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getTimeZoneID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TimeZoneID", $value);
        }
        $value = $this->getHours1Days();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Hours1Days", $value);
        }
        $value = $this->getHours1AnyTime();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Hours1AnyTime", $value);
        }
        $value = $this->getHours1From();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Hours1From", $value);
        }
        $value = $this->getHours1To();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Hours1To", $value);
        }
        $value = $this->getHours2Days();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Hours2Days", $value);
        }
        $value = $this->getHours2AnyTime();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Hours2AnyTime", $value);
        }
        $value = $this->getHours2From();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Hours2From", $value);
        }
        $value = $this->getHours2To();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Hours2To", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TimeZoneID');
        if (null !== $value) {
            $this->setTimeZoneID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Hours1Days');
        if (null !== $value) {
            $this->setHours1Days($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Hours1AnyTime');
        if (null !== $value) {
            $this->setHours1AnyTime(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Hours1From');
        if (null !== $value) {
            $this->setHours1From($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Hours1To');
        if (null !== $value) {
            $this->setHours1To($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Hours2Days');
        if (null !== $value) {
            $this->setHours2Days($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Hours2AnyTime');
        if (null !== $value) {
            $this->setHours2AnyTime(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Hours2From');
        if (null !== $value) {
            $this->setHours2From($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Hours2To');
        if (null !== $value) {
            $this->setHours2To($value);
        }
    }
}
