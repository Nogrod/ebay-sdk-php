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
        if (!is_array($this->maximumUnpaidItemStrikesCount)) {
            throw new \LogicException('maximumUnpaidItemStrikesCount is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<int>
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
     * @param iterable<int> $maximumUnpaidItemStrikesCount
     * @return self
     */
    public function setMaximumUnpaidItemStrikesCount(iterable $maximumUnpaidItemStrikesCount)
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
        if (!is_array($this->maximumUnpaidItemStrikesDuration)) {
            throw new \LogicException('maximumUnpaidItemStrikesDuration is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\MaximumUnpaidItemStrikesDurationDetailsType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\MaximumUnpaidItemStrikesDurationDetailsType> $maximumUnpaidItemStrikesDuration
     * @return self
     */
    public function setMaximumUnpaidItemStrikesDuration(iterable $maximumUnpaidItemStrikesDuration)
    {
        $this->maximumUnpaidItemStrikesDuration = $maximumUnpaidItemStrikesDuration;
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
        $value = $this->maximumUnpaidItemStrikesCount;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'MaximumUnpaidItemStrikesCount', null);
                    $open = true;
                }
                $writer->writeElementNs(null, 'Count', null, (string) $v);
            }
            if ($open) {
                $writer->endElement();
            }
        }
        $value = $this->maximumUnpaidItemStrikesDuration;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'MaximumUnpaidItemStrikesDuration', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\MaximumUnpaidItemStrikesInfoDetailsType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->maximumUnpaidItemStrikesCount = [];
        $this->maximumUnpaidItemStrikesDuration = [];
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
                case 'MaximumUnpaidItemStrikesCount':
                    $this->maximumUnpaidItemStrikesCount = Func::readList($reader, 'Count', 'urn:ebay:apis:eBLBaseComponents', static function (\XMLReader $reader) {
                        $value = Func::readText($reader);
                        return '' !== $value ? (int) $value : null;
                    });
                    return true;
                case 'MaximumUnpaidItemStrikesDuration':
                    $this->maximumUnpaidItemStrikesDuration[] = \Nogrod\eBaySDK\Trading\MaximumUnpaidItemStrikesDurationDetailsType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
