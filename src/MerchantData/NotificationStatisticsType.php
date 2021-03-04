<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing NotificationStatisticsType
 *
 * Summary information about notifications delivered, failed, errors, queued for
 *  a given application ID and time period.
 * XSD Type: NotificationStatisticsType
 */
class NotificationStatisticsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Returns the number of notifications delivered successfully during the given
     *  time period.
     *
     * @var int $deliveredCount
     */
    private $deliveredCount = null;

    /**
     * Returns the number of new notifications that were queued during
     *  the given time period.
     *
     * @var int $queuedNewCount
     */
    private $queuedNewCount = null;

    /**
     * Returns the number of pending notifications in the queue during
     *  the given time period.
     *
     * @var int $queuedPendingCount
     */
    private $queuedPendingCount = null;

    /**
     * Returns the number of notifications that permanently failed during
     *  the given time period.
     *
     * @var int $expiredCount
     */
    private $expiredCount = null;

    /**
     * Returns the number of notifications for which there were delivery errors
     *  during the given time period.
     *
     * @var int $errorCount
     */
    private $errorCount = null;

    /**
     * Gets as deliveredCount
     *
     * Returns the number of notifications delivered successfully during the given
     *  time period.
     *
     * @return int
     */
    public function getDeliveredCount()
    {
        return $this->deliveredCount;
    }

    /**
     * Sets a new deliveredCount
     *
     * Returns the number of notifications delivered successfully during the given
     *  time period.
     *
     * @param int $deliveredCount
     * @return self
     */
    public function setDeliveredCount($deliveredCount)
    {
        $this->deliveredCount = $deliveredCount;
        return $this;
    }

    /**
     * Gets as queuedNewCount
     *
     * Returns the number of new notifications that were queued during
     *  the given time period.
     *
     * @return int
     */
    public function getQueuedNewCount()
    {
        return $this->queuedNewCount;
    }

    /**
     * Sets a new queuedNewCount
     *
     * Returns the number of new notifications that were queued during
     *  the given time period.
     *
     * @param int $queuedNewCount
     * @return self
     */
    public function setQueuedNewCount($queuedNewCount)
    {
        $this->queuedNewCount = $queuedNewCount;
        return $this;
    }

    /**
     * Gets as queuedPendingCount
     *
     * Returns the number of pending notifications in the queue during
     *  the given time period.
     *
     * @return int
     */
    public function getQueuedPendingCount()
    {
        return $this->queuedPendingCount;
    }

    /**
     * Sets a new queuedPendingCount
     *
     * Returns the number of pending notifications in the queue during
     *  the given time period.
     *
     * @param int $queuedPendingCount
     * @return self
     */
    public function setQueuedPendingCount($queuedPendingCount)
    {
        $this->queuedPendingCount = $queuedPendingCount;
        return $this;
    }

    /**
     * Gets as expiredCount
     *
     * Returns the number of notifications that permanently failed during
     *  the given time period.
     *
     * @return int
     */
    public function getExpiredCount()
    {
        return $this->expiredCount;
    }

    /**
     * Sets a new expiredCount
     *
     * Returns the number of notifications that permanently failed during
     *  the given time period.
     *
     * @param int $expiredCount
     * @return self
     */
    public function setExpiredCount($expiredCount)
    {
        $this->expiredCount = $expiredCount;
        return $this;
    }

    /**
     * Gets as errorCount
     *
     * Returns the number of notifications for which there were delivery errors
     *  during the given time period.
     *
     * @return int
     */
    public function getErrorCount()
    {
        return $this->errorCount;
    }

    /**
     * Sets a new errorCount
     *
     * Returns the number of notifications for which there were delivery errors
     *  during the given time period.
     *
     * @param int $errorCount
     * @return self
     */
    public function setErrorCount($errorCount)
    {
        $this->errorCount = $errorCount;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getDeliveredCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DeliveredCount", $value);
        }
        $value = $this->getQueuedNewCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QueuedNewCount", $value);
        }
        $value = $this->getQueuedPendingCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QueuedPendingCount", $value);
        }
        $value = $this->getExpiredCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExpiredCount", $value);
        }
        $value = $this->getErrorCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ErrorCount", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DeliveredCount');
        if (null !== $value) {
            $this->setDeliveredCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QueuedNewCount');
        if (null !== $value) {
            $this->setQueuedNewCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QueuedPendingCount');
        if (null !== $value) {
            $this->setQueuedPendingCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExpiredCount');
        if (null !== $value) {
            $this->setExpiredCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ErrorCount');
        if (null !== $value) {
            $this->setErrorCount($value);
        }
    }
}
