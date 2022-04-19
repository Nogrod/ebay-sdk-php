<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellingManagerAutoListAccordingToScheduleType
 *
 * Defines the options available for an Automated Listing Rule that
 *  keeps a fixed number of items on the site
 * XSD Type: SellingManagerAutoListAccordingToScheduleType
 */
class SellingManagerAutoListAccordingToScheduleType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The day of the week on which items should be listed.
     *
     * @var string[] $dayOfWeek
     */
    private $dayOfWeek = [

    ];

    /**
     * The number of weeks between rule executions.
     *
     * @var int $listingPeriodInWeeks
     */
    private $listingPeriodInWeeks = null;

    /**
     * The time at which items should be listed.
     *
     * @var \DateTime $listAtSpecificTimeOfDay
     */
    private $listAtSpecificTimeOfDay = null;

    /**
     * The date from which the rule is active.
     *
     * @var \DateTime $startTime
     */
    private $startTime = null;

    /**
     * The date after which the rule is disabled.
     *
     * @var \DateTime $endTime
     */
    private $endTime = null;

    /**
     * The number of current, listed items required for the rule to no longer be run.
     *
     * @var int $maxActiveItemCount
     */
    private $maxActiveItemCount = null;

    /**
     * Sets a minimum inventory level for listings of associated products
     *  to occur.
     *
     * @var int $listingHoldInventoryLevel
     */
    private $listingHoldInventoryLevel = null;

    /**
     * Adds as dayOfWeek
     *
     * The day of the week on which items should be listed.
     *
     * @return self
     * @param string $dayOfWeek
     */
    public function addToDayOfWeek($dayOfWeek)
    {
        $this->dayOfWeek[] = $dayOfWeek;
        return $this;
    }

    /**
     * isset dayOfWeek
     *
     * The day of the week on which items should be listed.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDayOfWeek($index)
    {
        return isset($this->dayOfWeek[$index]);
    }

    /**
     * unset dayOfWeek
     *
     * The day of the week on which items should be listed.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDayOfWeek($index)
    {
        unset($this->dayOfWeek[$index]);
    }

    /**
     * Gets as dayOfWeek
     *
     * The day of the week on which items should be listed.
     *
     * @return string[]
     */
    public function getDayOfWeek()
    {
        return $this->dayOfWeek;
    }

    /**
     * Sets a new dayOfWeek
     *
     * The day of the week on which items should be listed.
     *
     * @param string $dayOfWeek
     * @return self
     */
    public function setDayOfWeek(array $dayOfWeek)
    {
        $this->dayOfWeek = $dayOfWeek;
        return $this;
    }

    /**
     * Gets as listingPeriodInWeeks
     *
     * The number of weeks between rule executions.
     *
     * @return int
     */
    public function getListingPeriodInWeeks()
    {
        return $this->listingPeriodInWeeks;
    }

    /**
     * Sets a new listingPeriodInWeeks
     *
     * The number of weeks between rule executions.
     *
     * @param int $listingPeriodInWeeks
     * @return self
     */
    public function setListingPeriodInWeeks($listingPeriodInWeeks)
    {
        $this->listingPeriodInWeeks = $listingPeriodInWeeks;
        return $this;
    }

    /**
     * Gets as listAtSpecificTimeOfDay
     *
     * The time at which items should be listed.
     *
     * @return \DateTime
     */
    public function getListAtSpecificTimeOfDay()
    {
        return $this->listAtSpecificTimeOfDay;
    }

    /**
     * Sets a new listAtSpecificTimeOfDay
     *
     * The time at which items should be listed.
     *
     * @param \DateTime $listAtSpecificTimeOfDay
     * @return self
     */
    public function setListAtSpecificTimeOfDay(\DateTime $listAtSpecificTimeOfDay)
    {
        $this->listAtSpecificTimeOfDay = $listAtSpecificTimeOfDay;
        return $this;
    }

    /**
     * Gets as startTime
     *
     * The date from which the rule is active.
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Sets a new startTime
     *
     * The date from which the rule is active.
     *
     * @param \DateTime $startTime
     * @return self
     */
    public function setStartTime(\DateTime $startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * Gets as endTime
     *
     * The date after which the rule is disabled.
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Sets a new endTime
     *
     * The date after which the rule is disabled.
     *
     * @param \DateTime $endTime
     * @return self
     */
    public function setEndTime(\DateTime $endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * Gets as maxActiveItemCount
     *
     * The number of current, listed items required for the rule to no longer be run.
     *
     * @return int
     */
    public function getMaxActiveItemCount()
    {
        return $this->maxActiveItemCount;
    }

    /**
     * Sets a new maxActiveItemCount
     *
     * The number of current, listed items required for the rule to no longer be run.
     *
     * @param int $maxActiveItemCount
     * @return self
     */
    public function setMaxActiveItemCount($maxActiveItemCount)
    {
        $this->maxActiveItemCount = $maxActiveItemCount;
        return $this;
    }

    /**
     * Gets as listingHoldInventoryLevel
     *
     * Sets a minimum inventory level for listings of associated products
     *  to occur.
     *
     * @return int
     */
    public function getListingHoldInventoryLevel()
    {
        return $this->listingHoldInventoryLevel;
    }

    /**
     * Sets a new listingHoldInventoryLevel
     *
     * Sets a minimum inventory level for listings of associated products
     *  to occur.
     *
     * @param int $listingHoldInventoryLevel
     * @return self
     */
    public function setListingHoldInventoryLevel($listingHoldInventoryLevel)
    {
        $this->listingHoldInventoryLevel = $listingHoldInventoryLevel;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getDayOfWeek();
        if (null !== $value && !empty($this->getDayOfWeek())) {
            $writer->write(array_map(function ($v) {
                return ["DayOfWeek" => $v];
            }, $value));
        }
        $value = $this->getListingPeriodInWeeks();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ListingPeriodInWeeks", $value);
        }
        $value = $this->getListAtSpecificTimeOfDay();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ListAtSpecificTimeOfDay", $value);
        }
        $value = $this->getStartTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StartTime", $value);
        }
        $value = $this->getEndTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EndTime", $value);
        }
        $value = $this->getMaxActiveItemCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxActiveItemCount", $value);
        }
        $value = $this->getListingHoldInventoryLevel();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ListingHoldInventoryLevel", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DayOfWeek', true);
        if (null !== $value && !empty($value)) {
            $this->setDayOfWeek($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingPeriodInWeeks');
        if (null !== $value) {
            $this->setListingPeriodInWeeks($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListAtSpecificTimeOfDay');
        if (null !== $value) {
            $this->setListAtSpecificTimeOfDay($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StartTime');
        if (null !== $value) {
            $this->setStartTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EndTime');
        if (null !== $value) {
            $this->setEndTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxActiveItemCount');
        if (null !== $value) {
            $this->setMaxActiveItemCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingHoldInventoryLevel');
        if (null !== $value) {
            $this->setListingHoldInventoryLevel($value);
        }
    }
}
