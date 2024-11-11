<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetNotificationsUsageRequestType
 *
 * Retrieves usage information about platform notifications for a given application.
 *  You can use this notification information to troubleshoot issues with platform
 *  notifications. You can call this up to 50 times per hour for a given application.
 * XSD Type: GetNotificationsUsageRequestType
 */
class GetNotificationsUsageRequestType extends AbstractRequestType
{
    /**
     * Specifies the start date and time for which notification information will be retrieved. <b>StartTime</b> is optional. If no <b>StartTime</b> is specified, the default value of 24 hours prior to the call time is used. If no <b>StartTime</b> is specified or if an invalid <b>StartTime</b> is specified, date range errors are returned in the response. For a <b>StartTime</b> to be valid, it must be no more than 72 hours before the time of the call, it cannot be more recent than the <b>EndTime</b>, and it cannot be later than the time of the call. If an invalid <b>StartTime</b> is specified, the default value is used.
     *
     * @var \DateTime $startTime
     */
    private $startTime = null;

    /**
     * Specifies the end date and time for which notification information will be retrieved. <b>EndTime</b> is optional. <br/><br/> If no <b>EndTime</b> is specified, the current time (the time the call is made) is used. If no <b>EndTime</b> is specified or if an invalid <b>EndTime</b> is specified, date range errors are returned in the response. For an <b>EndTime</b> to be valid, it must be no more than 72 hours before the time the of the call, it cannot be before the <b>StartTime</b>, and it cannot be later than the time of the call. If an invalid <b>EndTime</b> is specified, the current time is used.
     *
     * @var \DateTime $endTime
     */
    private $endTime = null;

    /**
     * Specifies an item ID for which detailed notification information will be retrieved.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * Gets as startTime
     *
     * Specifies the start date and time for which notification information will be retrieved. <b>StartTime</b> is optional. If no <b>StartTime</b> is specified, the default value of 24 hours prior to the call time is used. If no <b>StartTime</b> is specified or if an invalid <b>StartTime</b> is specified, date range errors are returned in the response. For a <b>StartTime</b> to be valid, it must be no more than 72 hours before the time of the call, it cannot be more recent than the <b>EndTime</b>, and it cannot be later than the time of the call. If an invalid <b>StartTime</b> is specified, the default value is used.
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
     * Specifies the start date and time for which notification information will be retrieved. <b>StartTime</b> is optional. If no <b>StartTime</b> is specified, the default value of 24 hours prior to the call time is used. If no <b>StartTime</b> is specified or if an invalid <b>StartTime</b> is specified, date range errors are returned in the response. For a <b>StartTime</b> to be valid, it must be no more than 72 hours before the time of the call, it cannot be more recent than the <b>EndTime</b>, and it cannot be later than the time of the call. If an invalid <b>StartTime</b> is specified, the default value is used.
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
     * Specifies the end date and time for which notification information will be retrieved. <b>EndTime</b> is optional. <br/><br/> If no <b>EndTime</b> is specified, the current time (the time the call is made) is used. If no <b>EndTime</b> is specified or if an invalid <b>EndTime</b> is specified, date range errors are returned in the response. For an <b>EndTime</b> to be valid, it must be no more than 72 hours before the time the of the call, it cannot be before the <b>StartTime</b>, and it cannot be later than the time of the call. If an invalid <b>EndTime</b> is specified, the current time is used.
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
     * Specifies the end date and time for which notification information will be retrieved. <b>EndTime</b> is optional. <br/><br/> If no <b>EndTime</b> is specified, the current time (the time the call is made) is used. If no <b>EndTime</b> is specified or if an invalid <b>EndTime</b> is specified, date range errors are returned in the response. For an <b>EndTime</b> to be valid, it must be no more than 72 hours before the time the of the call, it cannot be before the <b>StartTime</b>, and it cannot be later than the time of the call. If an invalid <b>EndTime</b> is specified, the current time is used.
     *
     * @param \DateTime $endTime
     * @return self
     */
    public function setEndTime(\DateTime $endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * Gets as itemID
     *
     * Specifies an item ID for which detailed notification information will be retrieved.
     *
     * @return string
     */
    public function getItemID()
    {
        return $this->itemID;
    }

    /**
     * Sets a new itemID
     *
     * Specifies an item ID for which detailed notification information will be retrieved.
     *
     * @param string $itemID
     * @return self
     */
    public function setItemID($itemID)
    {
        $this->itemID = $itemID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getStartTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StartTime", $value);
        }
        $value = $this->getEndTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EndTime", $value);
        }
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
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
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}StartTime');
        if (null !== $value) {
            $this->setStartTime(new \DateTime($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}EndTime');
        if (null !== $value) {
            $this->setEndTime(new \DateTime($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
    }
}
