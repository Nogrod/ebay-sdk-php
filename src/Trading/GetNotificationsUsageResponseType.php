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
        if (!is_array($this->notificationDetailsArray)) {
            throw new \LogicException('notificationDetailsArray is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\NotificationDetailsType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\NotificationDetailsType> $notificationDetailsArray
     * @return self
     */
    public function setNotificationDetailsArray(iterable $notificationDetailsArray)
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
        if (!is_array($this->markUpMarkDownHistory)) {
            throw new \LogicException('markUpMarkDownHistory is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\MarkUpMarkDownEventType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\MarkUpMarkDownEventType> $markUpMarkDownHistory
     * @return self
     */
    public function setMarkUpMarkDownHistory(iterable $markUpMarkDownHistory)
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

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->startTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'StartTime', null, Func::formatDateTime($value));
        }
        $value = $this->endTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'EndTime', null, Func::formatDateTime($value));
        }
        $value = $this->notificationDetailsArray;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'NotificationDetailsArray', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'NotificationDetails', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
                $writer->endElement();
            }
        }
        $value = $this->markUpMarkDownHistory;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'MarkUpMarkDownHistory', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'MarkUpMarkDownEvent', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
                $writer->endElement();
            }
        }
        $value = $this->notificationStatistics;
        if (null !== $value) {
            $writer->startElementNs(null, 'NotificationStatistics', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\GetNotificationsUsageResponseType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
        $this->notificationDetailsArray = [];
        $this->markUpMarkDownHistory = [];
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return parent::xmlReadAttribute($reader);
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'StartTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->startTime = new \DateTime($value);
                    }
                    return true;
                case 'EndTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->endTime = new \DateTime($value);
                    }
                    return true;
                case 'NotificationDetailsArray':
                    $this->notificationDetailsArray = Func::readList($reader, 'NotificationDetails', 'urn:ebay:apis:eBLBaseComponents', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\Trading\NotificationDetailsType::xmlRead($reader));
                    return true;
                case 'MarkUpMarkDownHistory':
                    $this->markUpMarkDownHistory = Func::readList($reader, 'MarkUpMarkDownEvent', 'urn:ebay:apis:eBLBaseComponents', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\Trading\MarkUpMarkDownEventType::xmlRead($reader));
                    return true;
                case 'NotificationStatistics':
                    $this->notificationStatistics = \Nogrod\eBaySDK\Trading\NotificationStatisticsType::xmlRead($reader);
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }
}
