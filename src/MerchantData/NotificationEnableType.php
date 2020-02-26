<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing NotificationEnableType
 *
 * Specifies a notification event and whether the
 *  notification is enabled or disabled.
 * XSD Type: NotificationEnableType
 */
class NotificationEnableType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getEventType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EventType", $value);
        }
        $value = $this->getEventEnable();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EventEnable", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EventType');
        if (null !== $value) {
            $this->setEventType($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EventEnable');
        if (null !== $value) {
            $this->setEventEnable($value);
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
