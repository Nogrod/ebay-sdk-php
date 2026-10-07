<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SchedulingInfoType
 *
 * Contains information for scheduling limits for the user.
 * XSD Type: SchedulingInfoType
 */
class SchedulingInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Maximum number of minutes that a listing may be scheduled in advance of its going live.
     *
     * @var int $maxScheduledMinutes
     */
    private $maxScheduledMinutes = null;

    /**
     * Minimum number of minutes that a listing may be scheduled in advance of its going live.
     *
     * @var int $minScheduledMinutes
     */
    private $minScheduledMinutes = null;

    /**
     * Maximum number of Items that a user may schedule.
     *
     * @var int $maxScheduledItems
     */
    private $maxScheduledItems = null;

    /**
     * Gets as maxScheduledMinutes
     *
     * Maximum number of minutes that a listing may be scheduled in advance of its going live.
     *
     * @return int
     */
    public function getMaxScheduledMinutes()
    {
        return $this->maxScheduledMinutes;
    }

    /**
     * Sets a new maxScheduledMinutes
     *
     * Maximum number of minutes that a listing may be scheduled in advance of its going live.
     *
     * @param int $maxScheduledMinutes
     * @return self
     */
    public function setMaxScheduledMinutes($maxScheduledMinutes)
    {
        $this->maxScheduledMinutes = $maxScheduledMinutes;
        return $this;
    }

    /**
     * Gets as minScheduledMinutes
     *
     * Minimum number of minutes that a listing may be scheduled in advance of its going live.
     *
     * @return int
     */
    public function getMinScheduledMinutes()
    {
        return $this->minScheduledMinutes;
    }

    /**
     * Sets a new minScheduledMinutes
     *
     * Minimum number of minutes that a listing may be scheduled in advance of its going live.
     *
     * @param int $minScheduledMinutes
     * @return self
     */
    public function setMinScheduledMinutes($minScheduledMinutes)
    {
        $this->minScheduledMinutes = $minScheduledMinutes;
        return $this;
    }

    /**
     * Gets as maxScheduledItems
     *
     * Maximum number of Items that a user may schedule.
     *
     * @return int
     */
    public function getMaxScheduledItems()
    {
        return $this->maxScheduledItems;
    }

    /**
     * Sets a new maxScheduledItems
     *
     * Maximum number of Items that a user may schedule.
     *
     * @param int $maxScheduledItems
     * @return self
     */
    public function setMaxScheduledItems($maxScheduledItems)
    {
        $this->maxScheduledItems = $maxScheduledItems;
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
        $value = $this->maxScheduledMinutes;
        if (null !== $value) {
            $writer->writeElementNs(null, 'MaxScheduledMinutes', null, (string) $value);
        }
        $value = $this->minScheduledMinutes;
        if (null !== $value) {
            $writer->writeElementNs(null, 'MinScheduledMinutes', null, (string) $value);
        }
        $value = $this->maxScheduledItems;
        if (null !== $value) {
            $writer->writeElementNs(null, 'MaxScheduledItems', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\SchedulingInfoType
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
                case 'MaxScheduledMinutes':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->maxScheduledMinutes = (int) $value;
                    }
                    return true;
                case 'MinScheduledMinutes':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->minScheduledMinutes = (int) $value;
                    }
                    return true;
                case 'MaxScheduledItems':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->maxScheduledItems = (int) $value;
                    }
                    return true;
            }
        }
        return false;
    }
}
