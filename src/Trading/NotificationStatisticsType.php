<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing NotificationStatisticsType
 *
 * Summary information about notifications delivered, failed, errors, queued for
 *  a given application ID and time period.
 * XSD Type: NotificationStatisticsType
 */
class NotificationStatisticsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->deliveredCount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DeliveredCount', null, (string) $value);
        }
        $value = $this->queuedNewCount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'QueuedNewCount', null, (string) $value);
        }
        $value = $this->queuedPendingCount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'QueuedPendingCount', null, (string) $value);
        }
        $value = $this->expiredCount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ExpiredCount', null, (string) $value);
        }
        $value = $this->errorCount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ErrorCount', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\NotificationStatisticsType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'DeliveredCount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->deliveredCount = (int) $value;
                    }
                    return true;
                case 'QueuedNewCount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->queuedNewCount = (int) $value;
                    }
                    return true;
                case 'QueuedPendingCount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->queuedPendingCount = (int) $value;
                    }
                    return true;
                case 'ExpiredCount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->expiredCount = (int) $value;
                    }
                    return true;
                case 'ErrorCount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->errorCount = (int) $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['DeliveredCount'] = $this->deliveredCount;
        $data['QueuedNewCount'] = $this->queuedNewCount;
        $data['QueuedPendingCount'] = $this->queuedPendingCount;
        $data['ExpiredCount'] = $this->expiredCount;
        $data['ErrorCount'] = $this->errorCount;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
