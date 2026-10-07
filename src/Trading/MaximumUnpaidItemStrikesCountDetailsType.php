<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MaximumUnpaidItemStrikesCountDetailsType
 *
 * Type defining the <b>MaximumUnpaidItemStrikesCount</b> container that is returned
 *  in the <b>GeteBayDetails</b> response. The <b>MaximumUnpaidItemStrikesCount</b>
 *  container consists of multiple <b>Count</b> fields with values that can be
 *  used in the <b>BuyerRequirementDetails.MaximumUnpaidItemStrikesInfo.Count</b>
 *  field when using the Trading API to add, revise, or relist an item.
 *  <br><br>
 *  The <b>Item.MaximumUnpaidItemStrikesInfo</b> container in Add/Revise/Relist
 *  API calls is used to block buyers with unpaid item strikes equal to or exceeding
 *  the specified <b>Count</b> value during the specified <b>Period</b>
 *  value from buying/bidding on the item.
 * XSD Type: MaximumUnpaidItemStrikesCountDetailsType
 */
class MaximumUnpaidItemStrikesCountDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Each value returned in each <b>MaximumUnpaidItemStrikesCount.Count</b> field
     *  can be used in the <b>BuyerRequirementDetails.MaximumUnpaidItemStrikesInfo.Count</b>
     *  field when using the Trading API to add, revise, or relist an item.
     *
     * @var int[] $count
     */
    private $count = [

    ];

    /**
     * Adds as count
     *
     * Each value returned in each <b>MaximumUnpaidItemStrikesCount.Count</b> field
     *  can be used in the <b>BuyerRequirementDetails.MaximumUnpaidItemStrikesInfo.Count</b>
     *  field when using the Trading API to add, revise, or relist an item.
     *
     * @return self
     * @param int $count
     */
    public function addToCount($count)
    {
        if (!is_array($this->count)) {
            throw new \LogicException('count is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->count[] = $count;
        return $this;
    }

    /**
     * isset count
     *
     * Each value returned in each <b>MaximumUnpaidItemStrikesCount.Count</b> field
     *  can be used in the <b>BuyerRequirementDetails.MaximumUnpaidItemStrikesInfo.Count</b>
     *  field when using the Trading API to add, revise, or relist an item.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCount($index)
    {
        return isset($this->count[$index]);
    }

    /**
     * unset count
     *
     * Each value returned in each <b>MaximumUnpaidItemStrikesCount.Count</b> field
     *  can be used in the <b>BuyerRequirementDetails.MaximumUnpaidItemStrikesInfo.Count</b>
     *  field when using the Trading API to add, revise, or relist an item.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCount($index)
    {
        unset($this->count[$index]);
    }

    /**
     * Gets as count
     *
     * Each value returned in each <b>MaximumUnpaidItemStrikesCount.Count</b> field
     *  can be used in the <b>BuyerRequirementDetails.MaximumUnpaidItemStrikesInfo.Count</b>
     *  field when using the Trading API to add, revise, or relist an item.
     *
     * @return iterable<int>
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Sets a new count
     *
     * Each value returned in each <b>MaximumUnpaidItemStrikesCount.Count</b> field
     *  can be used in the <b>BuyerRequirementDetails.MaximumUnpaidItemStrikesInfo.Count</b>
     *  field when using the Trading API to add, revise, or relist an item.
     *
     * @param iterable<int> $count
     * @return self
     */
    public function setCount(iterable $count)
    {
        $this->count = $count;
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
            foreach ($value as $v) {
                $writer->writeElementNs(null, 'Count', null, (string) $v);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\MaximumUnpaidItemStrikesCountDetailsType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->count = [];
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
                        $this->count[] = (int) $value;
                    }
                    return true;
            }
        }
        return false;
    }
}
