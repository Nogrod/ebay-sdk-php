<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing TimeRangeType
 *
 * Specifies the Date range.
 * XSD Type: TimeRangeType
 */
class TimeRangeType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Specifies the earliest (oldest) date to be used in a date range.
     *
     * @var \DateTime $timeFrom
     */
    private $timeFrom = null;

    /**
     * Specifies the latest (most recent) date to be used in a date range.
     *
     * @var \DateTime $timeTo
     */
    private $timeTo = null;

    /**
     * Gets as timeFrom
     *
     * Specifies the earliest (oldest) date to be used in a date range.
     *
     * @return \DateTime
     */
    public function getTimeFrom()
    {
        return $this->timeFrom;
    }

    /**
     * Sets a new timeFrom
     *
     * Specifies the earliest (oldest) date to be used in a date range.
     *
     * @param \DateTime $timeFrom
     * @return self
     */
    public function setTimeFrom(\DateTime $timeFrom)
    {
        $this->timeFrom = $timeFrom;
        return $this;
    }

    /**
     * Gets as timeTo
     *
     * Specifies the latest (most recent) date to be used in a date range.
     *
     * @return \DateTime
     */
    public function getTimeTo()
    {
        return $this->timeTo;
    }

    /**
     * Sets a new timeTo
     *
     * Specifies the latest (most recent) date to be used in a date range.
     *
     * @param \DateTime $timeTo
     * @return self
     */
    public function setTimeTo(\DateTime $timeTo)
    {
        $this->timeTo = $timeTo;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getTimeFrom();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TimeFrom", $value);
        }
        $value = $this->getTimeTo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TimeTo", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TimeFrom');
        if (null !== $value) {
            $this->setTimeFrom(new \DateTime($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TimeTo');
        if (null !== $value) {
            $this->setTimeTo(new \DateTime($value));
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
