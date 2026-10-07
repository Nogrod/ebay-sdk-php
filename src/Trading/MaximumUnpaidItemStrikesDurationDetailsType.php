<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MaximumUnpaidItemStrikesDurationDetailsType
 *
 * Type used by the <b>MaximumUnpaidItemStrikesDuration</b> container that is returned in <b>GeteBayDetails</b>. The <b>MaximumUnpaidItemStrikesDuration</b> container indicates the periods of time that can be used when evaluating how many unpaid item strikes against a buyer during this given period will exclude the prospective buyer from purchasing the line item.
 * XSD Type: MaximumUnpaidItemStrikesDurationDetailsType
 */
class MaximumUnpaidItemStrikesDurationDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * The period is the number of days (last 60 days, last 180 days, etc.)
     *  during which the buyer's unpaid item strikes are calculated.
     *  This is applicable only to sellers.
     *
     * @var string $period
     */
    private $period = null;

    /**
     * The description of the period, such as 'month', 'quarter', or 'half a year'.
     *  The data in this field can be used as a label in your application's display.
     *  This is applicable only to sellers.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * Gets as period
     *
     * The period is the number of days (last 60 days, last 180 days, etc.)
     *  during which the buyer's unpaid item strikes are calculated.
     *  This is applicable only to sellers.
     *
     * @return string
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * The period is the number of days (last 60 days, last 180 days, etc.)
     *  during which the buyer's unpaid item strikes are calculated.
     *  This is applicable only to sellers.
     *
     * @param string $period
     * @return self
     */
    public function setPeriod($period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Gets as description
     *
     * The description of the period, such as 'month', 'quarter', or 'half a year'.
     *  The data in this field can be used as a label in your application's display.
     *  This is applicable only to sellers.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * The description of the period, such as 'month', 'quarter', or 'half a year'.
     *  The data in this field can be used as a label in your application's display.
     *  This is applicable only to sellers.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
        $value = $this->period;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Period', null, (string) $value);
        }
        $value = $this->description;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Description', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\MaximumUnpaidItemStrikesDurationDetailsType
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
                case 'Period':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->period = $value;
                    }
                    return true;
                case 'Description':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->description = $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['Period'] = $this->period;
        $data['Description'] = $this->description;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
