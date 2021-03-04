<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SupportedEventTypesArrayType
 *
 *
 * XSD Type: SupportedEventTypesArrayType
 */
class SupportedEventTypesArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * @var string[] $eventType
     */
    private $eventType = [
        
    ];

    /**
     * Adds as eventType
     *
     * @return self
     * @param string $eventType
     */
    public function addToEventType($eventType)
    {
        $this->eventType[] = $eventType;
        return $this;
    }

    /**
     * isset eventType
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEventType($index)
    {
        return isset($this->eventType[$index]);
    }

    /**
     * unset eventType
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEventType($index)
    {
        unset($this->eventType[$index]);
    }

    /**
     * Gets as eventType
     *
     * @return string[]
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * Sets a new eventType
     *
     * @param string $eventType
     * @return self
     */
    public function setEventType(array $eventType)
    {
        $this->eventType = $eventType;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getEventType();
        if (null !== $value && !empty($this->getEventType())) {
            $writer->write(array_map(function ($v) {
                return ["EventType" => $v];
            }, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EventType', true);
        if (null !== $value && !empty($value)) {
            $this->setEventType($value);
        }
    }
}
