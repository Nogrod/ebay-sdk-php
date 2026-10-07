<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MarkUpMarkDownHistoryType
 *
 * List of objects representing markup or markdown events for a given application
 *  and time period. If no time period is specified in the request, the information
 *  for only one day (24 hours before the time the call is made to the time the call
 *  is made) is included. The maximum time period is allowed is 3 days (72 hours
 *  before the call is made to the time the call is made).
 * XSD Type: MarkUpMarkDownHistoryType
 */
class MarkUpMarkDownHistoryType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Details for a MarkDown or MarkUp event.
     *
     * @var \Nogrod\eBaySDK\Trading\MarkUpMarkDownEventType[] $markUpMarkDownEvent
     */
    private $markUpMarkDownEvent = [

    ];

    /**
     * Adds as markUpMarkDownEvent
     *
     * Details for a MarkDown or MarkUp event.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\MarkUpMarkDownEventType $markUpMarkDownEvent
     */
    public function addToMarkUpMarkDownEvent(\Nogrod\eBaySDK\Trading\MarkUpMarkDownEventType $markUpMarkDownEvent)
    {
        if (!is_array($this->markUpMarkDownEvent)) {
            throw new \LogicException('markUpMarkDownEvent is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->markUpMarkDownEvent[] = $markUpMarkDownEvent;
        return $this;
    }

    /**
     * isset markUpMarkDownEvent
     *
     * Details for a MarkDown or MarkUp event.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMarkUpMarkDownEvent($index)
    {
        return isset($this->markUpMarkDownEvent[$index]);
    }

    /**
     * unset markUpMarkDownEvent
     *
     * Details for a MarkDown or MarkUp event.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMarkUpMarkDownEvent($index)
    {
        unset($this->markUpMarkDownEvent[$index]);
    }

    /**
     * Gets as markUpMarkDownEvent
     *
     * Details for a MarkDown or MarkUp event.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\MarkUpMarkDownEventType>
     */
    public function getMarkUpMarkDownEvent()
    {
        return $this->markUpMarkDownEvent;
    }

    /**
     * Sets a new markUpMarkDownEvent
     *
     * Details for a MarkDown or MarkUp event.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\MarkUpMarkDownEventType> $markUpMarkDownEvent
     * @return self
     */
    public function setMarkUpMarkDownEvent(iterable $markUpMarkDownEvent)
    {
        $this->markUpMarkDownEvent = $markUpMarkDownEvent;
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
        $value = $this->markUpMarkDownEvent;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'MarkUpMarkDownEvent', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\MarkUpMarkDownHistoryType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->markUpMarkDownEvent = [];
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
                case 'MarkUpMarkDownEvent':
                    $this->markUpMarkDownEvent[] = \Nogrod\eBaySDK\Trading\MarkUpMarkDownEventType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
