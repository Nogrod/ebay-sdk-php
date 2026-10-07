<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing NotificationEnableType
 *
 * Specifies a notification event and whether the
 *  notification is enabled or disabled.
 * XSD Type: NotificationEnableType
 */
class NotificationEnableType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * The name of the notification event.
     *
     * @var string $eventType
     */
    private $eventType = null;

    /**
     * Whether the event is enabled or disabled.
     *
     * @var string $eventEnable
     */
    private $eventEnable = null;

    /**
     * Gets as eventType
     *
     * The name of the notification event.
     *
     * @return string
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * Sets a new eventType
     *
     * The name of the notification event.
     *
     * @param string $eventType
     * @return self
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;
        return $this;
    }

    /**
     * Gets as eventEnable
     *
     * Whether the event is enabled or disabled.
     *
     * @return string
     */
    public function getEventEnable()
    {
        return $this->eventEnable;
    }

    /**
     * Sets a new eventEnable
     *
     * Whether the event is enabled or disabled.
     *
     * @param string $eventEnable
     * @return self
     */
    public function setEventEnable($eventEnable)
    {
        $this->eventEnable = $eventEnable;
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
        $value = $this->eventType;
        if (null !== $value) {
            $writer->writeElementNs(null, 'EventType', null, (string) $value);
        }
        $value = $this->eventEnable;
        if (null !== $value) {
            $writer->writeElementNs(null, 'EventEnable', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\NotificationEnableType
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
                case 'EventType':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->eventType = $value;
                    }
                    return true;
                case 'EventEnable':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->eventEnable = $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['EventType'] = $this->eventType;
        $data['EventEnable'] = $this->eventEnable;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
