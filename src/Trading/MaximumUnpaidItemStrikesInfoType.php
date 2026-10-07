<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MaximumUnpaidItemStrikesInfoType
 *
 * Type defining the <b>MaximumUnpaidItemStrikesInfo</b> container, which indicates if the seller has enabled a setting to block prospective buyers who have unpaid items and/or buyer-inititated cancellations on their account exceeding the value set in the <b>Count</b>
 *  field during a specified time period (set in the <b>Period</b> field).
 * XSD Type: MaximumUnpaidItemStrikesInfoType
 */
class MaximumUnpaidItemStrikesInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * This integer value indicates the maximum number of unpaid items and/or buyer-initiated cancellations that a prospective buyer is allowed to have during a specified time period (<b>MaximumUnpaidItemStrikesInfo.Period</b>) before being blocked from buying or bidding on the item.
     *
     * @var int $count
     */
    private $count = null;

    /**
     * This enumerated value defines the length of time over which a prospective buyer's unpaid items and/or buyer-initiated cancellations will be counted. If the prospective buyer's number of unpaid items and/or buyer-initiated cancellations during this defined period exceeds the value set in the <b>MaximumUnpaidItemStrikesInfo.Count</b> field, that prospective buyer is blocked from buying/bidding on the item. <br/><br/> If the <b>Count</b> value is 2, and the specified <b>Period</b> is <code>Days_30</code> (counting back 30 days from the present day), any prospective buyer that has had three or more unpaid items and/or buyer-initiated cancellations is blocked from buying/bidding on the item.
     *
     * @var string $period
     */
    private $period = null;

    /**
     * Gets as count
     *
     * This integer value indicates the maximum number of unpaid items and/or buyer-initiated cancellations that a prospective buyer is allowed to have during a specified time period (<b>MaximumUnpaidItemStrikesInfo.Period</b>) before being blocked from buying or bidding on the item.
     *
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Sets a new count
     *
     * This integer value indicates the maximum number of unpaid items and/or buyer-initiated cancellations that a prospective buyer is allowed to have during a specified time period (<b>MaximumUnpaidItemStrikesInfo.Period</b>) before being blocked from buying or bidding on the item.
     *
     * @param int $count
     * @return self
     */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }

    /**
     * Gets as period
     *
     * This enumerated value defines the length of time over which a prospective buyer's unpaid items and/or buyer-initiated cancellations will be counted. If the prospective buyer's number of unpaid items and/or buyer-initiated cancellations during this defined period exceeds the value set in the <b>MaximumUnpaidItemStrikesInfo.Count</b> field, that prospective buyer is blocked from buying/bidding on the item. <br/><br/> If the <b>Count</b> value is 2, and the specified <b>Period</b> is <code>Days_30</code> (counting back 30 days from the present day), any prospective buyer that has had three or more unpaid items and/or buyer-initiated cancellations is blocked from buying/bidding on the item.
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
     * This enumerated value defines the length of time over which a prospective buyer's unpaid items and/or buyer-initiated cancellations will be counted. If the prospective buyer's number of unpaid items and/or buyer-initiated cancellations during this defined period exceeds the value set in the <b>MaximumUnpaidItemStrikesInfo.Count</b> field, that prospective buyer is blocked from buying/bidding on the item. <br/><br/> If the <b>Count</b> value is 2, and the specified <b>Period</b> is <code>Days_30</code> (counting back 30 days from the present day), any prospective buyer that has had three or more unpaid items and/or buyer-initiated cancellations is blocked from buying/bidding on the item.
     *
     * @param string $period
     * @return self
     */
    public function setPeriod($period)
    {
        $this->period = $period;
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
        $value = $this->count;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Count', null, (string) $value);
        }
        $value = $this->period;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Period', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\MaximumUnpaidItemStrikesInfoType
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
                case 'Count':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->count = (int) $value;
                    }
                    return true;
                case 'Period':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->period = $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['Count'] = $this->count;
        $data['Period'] = $this->period;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
