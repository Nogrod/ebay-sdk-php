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
        $value = $this->itemID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ItemID', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\GetNotificationsUsageRequestType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
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
                case 'ItemID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->itemID = $value;
                    }
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }
}
