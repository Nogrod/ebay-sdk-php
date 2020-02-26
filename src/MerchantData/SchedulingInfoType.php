<?php

namespace Nogrod\eBaySDK\MerchantData;

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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getMaxScheduledMinutes();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxScheduledMinutes", $value);
        }
        $value = $this->getMinScheduledMinutes();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MinScheduledMinutes", $value);
        }
        $value = $this->getMaxScheduledItems();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxScheduledItems", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxScheduledMinutes');
        if (null !== $value) {
            $this->setMaxScheduledMinutes($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MinScheduledMinutes');
        if (null !== $value) {
            $this->setMinScheduledMinutes($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxScheduledItems');
        if (null !== $value) {
            $this->setMaxScheduledItems($value);
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
