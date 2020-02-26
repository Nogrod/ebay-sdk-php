<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing ScheduleType
 *
 * This type is deprecated.
 * XSD Type: ScheduleType
 */
class ScheduleType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This field is deprecated.
     *
     * @var int $scheduleID
     */
    private $scheduleID = null;

    /**
     * This field is deprecated.
     *
     * @var \DateTime $scheduleTime
     */
    private $scheduleTime = null;

    /**
     * Gets as scheduleID
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getScheduleID()
    {
        return $this->scheduleID;
    }

    /**
     * Sets a new scheduleID
     *
     * This field is deprecated.
     *
     * @param int $scheduleID
     * @return self
     */
    public function setScheduleID($scheduleID)
    {
        $this->scheduleID = $scheduleID;
        return $this;
    }

    /**
     * Gets as scheduleTime
     *
     * This field is deprecated.
     *
     * @return \DateTime
     */
    public function getScheduleTime()
    {
        return $this->scheduleTime;
    }

    /**
     * Sets a new scheduleTime
     *
     * This field is deprecated.
     *
     * @param \DateTime $scheduleTime
     * @return self
     */
    public function setScheduleTime(\DateTime $scheduleTime)
    {
        $this->scheduleTime = $scheduleTime;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getScheduleID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ScheduleID", $value);
        }
        $value = $this->getScheduleTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ScheduleTime", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ScheduleID');
        if (null !== $value) {
            $this->setScheduleID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ScheduleTime');
        if (null !== $value) {
            $this->setScheduleTime(new \DateTime($value));
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
