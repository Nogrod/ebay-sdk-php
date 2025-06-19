<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetNotificationsUsageResponseType
 *
 * Returns an array of notifications sent to a given application identified by the appID (comes in the credentials). The result can be used by third-party developers troubleshoot issues with notifications. <br/><br/> Zero, one or many notifications can be returned in the array. The set of notifications returned is limited to those that were sent between the <b>StartTime</b> and <b>EndTime</b> specified in the request. <br/><br/> If <b>StartTime</b> or <b>EndTime</b> filters were not found in the request, then the response will contain the data for only one day (Now-1day). By default, maximum duration is limited to 3 days (Now-3days). These min (1day) and max(3days) applies to <b>Notifications</b>, <b>MarkDownMarkUpHistory</b> and <b>NotificationStatistics</b>. <br/><br/> Notifications are sent only if the <b>ItemID</b> is included in the request. If there is no <b>ItemID</b>, then only <b>Statistics</b> and <b>MarkDownMarkUpHistory</b> information is included.
 * XSD Type: GetNotificationsUsageResponseType
 */
class GetNotificationsUsageResponseType extends AbstractResponseType
{
    /**
     * Returns the start date and time for the notification information that is
     *  returned by this call.
     *
     * @var \DateTime $startTime
     */
    private $startTime = null;

    /**
     * Returns the end date and time for the notification information that is
     *  returned by this call.
     *
     * @var \DateTime $endTime
     */
    private $endTime = null;

    /**
     * List of notification objects representing the notifications sent to an
     *  application for the given time period.
     *
     * @var \Nogrod\eBaySDK\Trading\NotificationDetailsType[] $notificationDetailsArray
     */
    private $notificationDetailsArray = null;

    /**
     * List of objects representing <b>MarkUp</b> or <b>MarkDown</b> history for a given appID
     *  and for given <b>StartTime</b> and <b>EndTime</b>. This node will always be returned.
     *
     * @var \Nogrod\eBaySDK\Trading\MarkUpMarkDownEventType[] $markUpMarkDownHistory
     */
    private $markUpMarkDownHistory = null;

    /**
     * Summary information about number of notifications that were successfully
     *  delivered, queued, failed, connection attempts made, connection timeouts,
     *  http errors for the given appID and given time period. By default, statistics
     *  for only one day (Now-1day) is included. Maximum time duration allowed is 3 days
     *  (Now-3days).
     *
     * @var \Nogrod\eBaySDK\Trading\NotificationStatisticsType $notificationStatistics
     */
    private $notificationStatistics = null;

    /**
     * Gets as startTime
     *
     * Returns the start date and time for the notification information that is
     *  returned by this call.
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
     * Returns the start date and time for the notification information that is
     *  returned by this call.
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
     * Returns the end date and time for the notification information that is
     *  returned by this call.
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
     * Returns the end date and time for the notification information that is
     *  returned by this call.
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
     * Adds as notificationDetails
     *
     * List of notification objects representing the notifications sent to an
     *  application for the given time period.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\NotificationDetailsType $notificationDetails
     */
    public function addToNotificationDetailsArray(\Nogrod\eBaySDK\Trading\NotificationDetailsType $notificationDetails)
    {
        $this->notificationDetailsArray[] = $notificationDetails;
        return $this;
    }

    /**
     * isset notificationDetailsArray
     *
     * List of notification objects representing the notifications sent to an
     *  application for the given time period.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNotificationDetailsArray($index)
    {
        return isset($this->notificationDetailsArray[$index]);
    }

    /**
     * unset notificationDetailsArray
     *
     * List of notification objects representing the notifications sent to an
     *  application for the given time period.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNotificationDetailsArray($index)
    {
        unset($this->notificationDetailsArray[$index]);
    }

    /**
     * Gets as notificationDetailsArray
     *
     * List of notification objects representing the notifications sent to an
     *  application for the given time period.
     *
     * @return \Nogrod\eBaySDK\Trading\NotificationDetailsType[]
     */
    public function getNotificationDetailsArray()
    {
        return $this->notificationDetailsArray;
    }

    /**
     * Sets a new notificationDetailsArray
     *
     * List of notification objects representing the notifications sent to an
     *  application for the given time period.
     *
     * @param \Nogrod\eBaySDK\Trading\NotificationDetailsType[] $notificationDetailsArray
     * @return self
     */
    public function setNotificationDetailsArray(array $notificationDetailsArray)
    {
        $this->notificationDetailsArray = $notificationDetailsArray;
        return $this;
    }

    /**
     * Adds as markUpMarkDownEvent
     *
     * List of objects representing <b>MarkUp</b> or <b>MarkDown</b> history for a given appID
     *  and for given <b>StartTime</b> and <b>EndTime</b>. This node will always be returned.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\MarkUpMarkDownEventType $markUpMarkDownEvent
     */
    public function addToMarkUpMarkDownHistory(\Nogrod\eBaySDK\Trading\MarkUpMarkDownEventType $markUpMarkDownEvent)
    {
        $this->markUpMarkDownHistory[] = $markUpMarkDownEvent;
        return $this;
    }

    /**
     * isset markUpMarkDownHistory
     *
     * List of objects representing <b>MarkUp</b> or <b>MarkDown</b> history for a given appID
     *  and for given <b>StartTime</b> and <b>EndTime</b>. This node will always be returned.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMarkUpMarkDownHistory($index)
    {
        return isset($this->markUpMarkDownHistory[$index]);
    }

    /**
     * unset markUpMarkDownHistory
     *
     * List of objects representing <b>MarkUp</b> or <b>MarkDown</b> history for a given appID
     *  and for given <b>StartTime</b> and <b>EndTime</b>. This node will always be returned.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMarkUpMarkDownHistory($index)
    {
        unset($this->markUpMarkDownHistory[$index]);
    }

    /**
     * Gets as markUpMarkDownHistory
     *
     * List of objects representing <b>MarkUp</b> or <b>MarkDown</b> history for a given appID
     *  and for given <b>StartTime</b> and <b>EndTime</b>. This node will always be returned.
     *
     * @return \Nogrod\eBaySDK\Trading\MarkUpMarkDownEventType[]
     */
    public function getMarkUpMarkDownHistory()
    {
        return $this->markUpMarkDownHistory;
    }

    /**
     * Sets a new markUpMarkDownHistory
     *
     * List of objects representing <b>MarkUp</b> or <b>MarkDown</b> history for a given appID
     *  and for given <b>StartTime</b> and <b>EndTime</b>. This node will always be returned.
     *
     * @param \Nogrod\eBaySDK\Trading\MarkUpMarkDownEventType[] $markUpMarkDownHistory
     * @return self
     */
    public function setMarkUpMarkDownHistory(array $markUpMarkDownHistory)
    {
        $this->markUpMarkDownHistory = $markUpMarkDownHistory;
        return $this;
    }

    /**
     * Gets as notificationStatistics
     *
     * Summary information about number of notifications that were successfully
     *  delivered, queued, failed, connection attempts made, connection timeouts,
     *  http errors for the given appID and given time period. By default, statistics
     *  for only one day (Now-1day) is included. Maximum time duration allowed is 3 days
     *  (Now-3days).
     *
     * @return \Nogrod\eBaySDK\Trading\NotificationStatisticsType
     */
    public function getNotificationStatistics()
    {
        return $this->notificationStatistics;
    }

    /**
     * Sets a new notificationStatistics
     *
     * Summary information about number of notifications that were successfully
     *  delivered, queued, failed, connection attempts made, connection timeouts,
     *  http errors for the given appID and given time period. By default, statistics
     *  for only one day (Now-1day) is included. Maximum time duration allowed is 3 days
     *  (Now-3days).
     *
     * @param \Nogrod\eBaySDK\Trading\NotificationStatisticsType $notificationStatistics
     * @return self
     */
    public function setNotificationStatistics(\Nogrod\eBaySDK\Trading\NotificationStatisticsType $notificationStatistics)
    {
        $this->notificationStatistics = $notificationStatistics;
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
        $value = $this->getNotificationDetailsArray();
        if (null !== $value && [] !== $this->getNotificationDetailsArray()) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NotificationDetailsArray", array_map(function ($v) {return ["NotificationDetails" => $v];}, $value));
        }
        $value = $this->getMarkUpMarkDownHistory();
        if (null !== $value && [] !== $this->getMarkUpMarkDownHistory()) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MarkUpMarkDownHistory", array_map(function ($v) {return ["MarkUpMarkDownEvent" => $v];}, $value));
        }
        $value = $this->getNotificationStatistics();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NotificationStatistics", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\GetNotificationsUsageResponseType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NotificationDetailsArray');
        if (null !== $value) {
            $this->setNotificationDetailsArray(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\NotificationDetailsType::fromKeyValue(Func::mapObject($v, '{urn:ebay:apis:eBLBaseComponents}NotificationDetails'));}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MarkUpMarkDownHistory');
        if (null !== $value) {
            $this->setMarkUpMarkDownHistory(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\MarkUpMarkDownEventType::fromKeyValue(Func::mapObject($v, '{urn:ebay:apis:eBLBaseComponents}MarkUpMarkDownEvent'));}, $value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}NotificationStatistics');
        if (null !== $value) {
            $this->setNotificationStatistics(\Nogrod\eBaySDK\Trading\NotificationStatisticsType::fromKeyValue($value));
        }
    }
}
