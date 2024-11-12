<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MaximumUnpaidItemStrikesInfoDetailsType
 *
 * Details of a buyer's maximum unpaid item strikes in a pre-defined time period. This is applicable only to sellers.
 * XSD Type: MaximumUnpaidItemStrikesInfoDetailsType
 */
class MaximumUnpaidItemStrikesInfoDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The number of the maximum unpaid item strikes. This is applicable only to sellers.
     *
     * @var int[] $maximumUnpaidItemStrikesCount
     */
    private $maximumUnpaidItemStrikesCount = null;

    /**
     * Range of time used to determine maximum unpaid item count. This is applicable only to sellers.
     *
     * @var \Nogrod\eBaySDK\Trading\MaximumUnpaidItemStrikesDurationDetailsType[] $maximumUnpaidItemStrikesDuration
     */
    private $maximumUnpaidItemStrikesDuration = [

    ];

    /**
     * Adds as count
     *
     * The number of the maximum unpaid item strikes. This is applicable only to sellers.
     *
     * @return self
     * @param int $count
     */
    public function addToMaximumUnpaidItemStrikesCount($count)
    {
        $this->maximumUnpaidItemStrikesCount[] = $count;
        return $this;
    }

    /**
     * isset maximumUnpaidItemStrikesCount
     *
     * The number of the maximum unpaid item strikes. This is applicable only to sellers.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMaximumUnpaidItemStrikesCount($index)
    {
        return isset($this->maximumUnpaidItemStrikesCount[$index]);
    }

    /**
     * unset maximumUnpaidItemStrikesCount
     *
     * The number of the maximum unpaid item strikes. This is applicable only to sellers.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMaximumUnpaidItemStrikesCount($index)
    {
        unset($this->maximumUnpaidItemStrikesCount[$index]);
    }

    /**
     * Gets as maximumUnpaidItemStrikesCount
     *
     * The number of the maximum unpaid item strikes. This is applicable only to sellers.
     *
     * @return int[]
     */
    public function getMaximumUnpaidItemStrikesCount()
    {
        return $this->maximumUnpaidItemStrikesCount;
    }

    /**
     * Sets a new maximumUnpaidItemStrikesCount
     *
     * The number of the maximum unpaid item strikes. This is applicable only to sellers.
     *
     * @param int[] $maximumUnpaidItemStrikesCount
     * @return self
     */
    public function setMaximumUnpaidItemStrikesCount(array $maximumUnpaidItemStrikesCount)
    {
        $this->maximumUnpaidItemStrikesCount = $maximumUnpaidItemStrikesCount;
        return $this;
    }

    /**
     * Adds as maximumUnpaidItemStrikesDuration
     *
     * Range of time used to determine maximum unpaid item count. This is applicable only to sellers.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\MaximumUnpaidItemStrikesDurationDetailsType $maximumUnpaidItemStrikesDuration
     */
    public function addToMaximumUnpaidItemStrikesDuration(\Nogrod\eBaySDK\Trading\MaximumUnpaidItemStrikesDurationDetailsType $maximumUnpaidItemStrikesDuration)
    {
        $this->maximumUnpaidItemStrikesDuration[] = $maximumUnpaidItemStrikesDuration;
        return $this;
    }

    /**
     * isset maximumUnpaidItemStrikesDuration
     *
     * Range of time used to determine maximum unpaid item count. This is applicable only to sellers.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMaximumUnpaidItemStrikesDuration($index)
    {
        return isset($this->maximumUnpaidItemStrikesDuration[$index]);
    }

    /**
     * unset maximumUnpaidItemStrikesDuration
     *
     * Range of time used to determine maximum unpaid item count. This is applicable only to sellers.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMaximumUnpaidItemStrikesDuration($index)
    {
        unset($this->maximumUnpaidItemStrikesDuration[$index]);
    }

    /**
     * Gets as maximumUnpaidItemStrikesDuration
     *
     * Range of time used to determine maximum unpaid item count. This is applicable only to sellers.
     *
     * @return \Nogrod\eBaySDK\Trading\MaximumUnpaidItemStrikesDurationDetailsType[]
     */
    public function getMaximumUnpaidItemStrikesDuration()
    {
        return $this->maximumUnpaidItemStrikesDuration;
    }

    /**
     * Sets a new maximumUnpaidItemStrikesDuration
     *
     * Range of time used to determine maximum unpaid item count. This is applicable only to sellers.
     *
     * @param \Nogrod\eBaySDK\Trading\MaximumUnpaidItemStrikesDurationDetailsType[] $maximumUnpaidItemStrikesDuration
     * @return self
     */
    public function setMaximumUnpaidItemStrikesDuration(array $maximumUnpaidItemStrikesDuration)
    {
        $this->maximumUnpaidItemStrikesDuration = $maximumUnpaidItemStrikesDuration;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getMaximumUnpaidItemStrikesCount();
        if (null !== $value && [] !== $this->getMaximumUnpaidItemStrikesCount()) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaximumUnpaidItemStrikesCount", array_map(function ($v) {return ["Count" => $v];}, $value));
        }
        $value = $this->getMaximumUnpaidItemStrikesDuration();
        if (null !== $value && [] !== $this->getMaximumUnpaidItemStrikesDuration()) {
            $writer->write(array_map(function ($v) {return ["MaximumUnpaidItemStrikesDuration" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaximumUnpaidItemStrikesCount', true);
        if (null !== $value) {
            $this->setMaximumUnpaidItemStrikesCount(array_map(function ($v) {return Func::mapValue($v, '{urn:ebay:apis:eBLBaseComponents}Count');}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaximumUnpaidItemStrikesDuration');
        if (null !== $value) {
            $this->setMaximumUnpaidItemStrikesDuration(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\MaximumUnpaidItemStrikesDurationDetailsType::fromKeyValue($v);}, $value));
        }
    }
}
