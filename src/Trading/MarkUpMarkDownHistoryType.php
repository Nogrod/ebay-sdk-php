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
     * @return \Nogrod\eBaySDK\Trading\MarkUpMarkDownEventType[]
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
     * @param \Nogrod\eBaySDK\Trading\MarkUpMarkDownEventType[] $markUpMarkDownEvent
     * @return self
     */
    public function setMarkUpMarkDownEvent(array $markUpMarkDownEvent)
    {
        $this->markUpMarkDownEvent = $markUpMarkDownEvent;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getMarkUpMarkDownEvent();
        if (null !== $value && [] !== $this->getMarkUpMarkDownEvent()) {
            $writer->write(array_map(function ($v) {return ["MarkUpMarkDownEvent" => $v];}, $value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\MarkUpMarkDownHistoryType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MarkUpMarkDownEvent');
        if (null !== $value) {
            $this->setMarkUpMarkDownEvent(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\MarkUpMarkDownEventType::fromKeyValue($v);}, $value));
        }
    }
}
