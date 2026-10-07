<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AnnouncementMessageType
 *
 * Type defining the <b>ShippingServiceDetails.DeprecationDetails</b> container that is returned in the <b>GeteBayDetails</b> response. The <b>ShippingServiceDetails.DeprecationDetails</b> container consists of information related to a deprecated shipping service.
 * XSD Type: AnnouncementMessageType
 */
class AnnouncementMessageType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The date on which an upcoming event can start to be announced.
     *
     * @var \DateTime $announcementStartTime
     */
    private $announcementStartTime = null;

    /**
     * The date on which the event occurs. This is also the ending date of the
     *  announcement that lead up to the event (see <b>AnnouncementStartTime</b>).
     *
     * @var \DateTime $eventTime
     */
    private $eventTime = null;

    /**
     * Control of what messages to display.
     *
     * @var string $messageType
     */
    private $messageType = null;

    /**
     * Gets as announcementStartTime
     *
     * The date on which an upcoming event can start to be announced.
     *
     * @return \DateTime
     */
    public function getAnnouncementStartTime()
    {
        return $this->announcementStartTime;
    }

    /**
     * Sets a new announcementStartTime
     *
     * The date on which an upcoming event can start to be announced.
     *
     * @param \DateTime $announcementStartTime
     * @return self
     */
    public function setAnnouncementStartTime(\DateTime $announcementStartTime)
    {
        $this->announcementStartTime = $announcementStartTime;
        return $this;
    }

    /**
     * Gets as eventTime
     *
     * The date on which the event occurs. This is also the ending date of the
     *  announcement that lead up to the event (see <b>AnnouncementStartTime</b>).
     *
     * @return \DateTime
     */
    public function getEventTime()
    {
        return $this->eventTime;
    }

    /**
     * Sets a new eventTime
     *
     * The date on which the event occurs. This is also the ending date of the
     *  announcement that lead up to the event (see <b>AnnouncementStartTime</b>).
     *
     * @param \DateTime $eventTime
     * @return self
     */
    public function setEventTime(\DateTime $eventTime)
    {
        $this->eventTime = $eventTime;
        return $this;
    }

    /**
     * Gets as messageType
     *
     * Control of what messages to display.
     *
     * @return string
     */
    public function getMessageType()
    {
        return $this->messageType;
    }

    /**
     * Sets a new messageType
     *
     * Control of what messages to display.
     *
     * @param string $messageType
     * @return self
     */
    public function setMessageType($messageType)
    {
        $this->messageType = $messageType;
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
        $value = $this->announcementStartTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'AnnouncementStartTime', null, Func::formatDateTime($value));
        }
        $value = $this->eventTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'EventTime', null, Func::formatDateTime($value));
        }
        $value = $this->messageType;
        if (null !== $value) {
            $writer->writeElementNs(null, 'MessageType', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\AnnouncementMessageType
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
                case 'AnnouncementStartTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->announcementStartTime = new \DateTime($value);
                    }
                    return true;
                case 'EventTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->eventTime = new \DateTime($value);
                    }
                    return true;
                case 'MessageType':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->messageType = $value;
                    }
                    return true;
            }
        }
        return false;
    }
}
