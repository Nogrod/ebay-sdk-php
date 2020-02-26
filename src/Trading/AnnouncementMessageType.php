<?php

namespace Nogrod\eBaySDK\Trading;

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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getAnnouncementStartTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AnnouncementStartTime", $value);
        }
        $value = $this->getEventTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EventTime", $value);
        }
        $value = $this->getMessageType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MessageType", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AnnouncementStartTime');
        if (null !== $value) {
            $this->setAnnouncementStartTime(new \DateTime($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EventTime');
        if (null !== $value) {
            $this->setEventTime(new \DateTime($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MessageType');
        if (null !== $value) {
            $this->setMessageType($value);
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
