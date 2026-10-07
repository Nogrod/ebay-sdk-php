<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing InventoryFeesType
 *
 * This is used in the <b>ReviseInventoryStatus</b> response to provide the set of fees associated with each unique <b>ItemID</b>.
 * XSD Type: InventoryFeesType
 */
class InventoryFeesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * The unique identifier of the listing being changed. <br>
     *  <br> The <b>ReviseInventoryStatus</b> response includes a separate
     *  set of fees for each item that was successfully revised.<br>
     *  <br>
     *  Use the <b>ItemID</b> to correlate the Fees data with the Inventory Status data in the response.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * Contains the data for one fee (such as name and amount).
     *
     * @var \Nogrod\eBaySDK\Trading\FeeType[] $fee
     */
    private $fee = [

    ];

    /**
     * Gets as itemID
     *
     * The unique identifier of the listing being changed. <br>
     *  <br> The <b>ReviseInventoryStatus</b> response includes a separate
     *  set of fees for each item that was successfully revised.<br>
     *  <br>
     *  Use the <b>ItemID</b> to correlate the Fees data with the Inventory Status data in the response.
     *
     * @return string
     */
    public function getItemID()
    {
        return $this->itemID;
    }

    /**
     * Sets a new itemID
     *
     * The unique identifier of the listing being changed. <br>
     *  <br> The <b>ReviseInventoryStatus</b> response includes a separate
     *  set of fees for each item that was successfully revised.<br>
     *  <br>
     *  Use the <b>ItemID</b> to correlate the Fees data with the Inventory Status data in the response.
     *
     * @param string $itemID
     * @return self
     */
    public function setItemID($itemID)
    {
        $this->itemID = $itemID;
        return $this;
    }

    /**
     * Adds as fee
     *
     * Contains the data for one fee (such as name and amount).
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\FeeType $fee
     */
    public function addToFee(\Nogrod\eBaySDK\Trading\FeeType $fee)
    {
        if (!is_array($this->fee)) {
            throw new \LogicException('fee is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->fee[] = $fee;
        return $this;
    }

    /**
     * isset fee
     *
     * Contains the data for one fee (such as name and amount).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFee($index)
    {
        return isset($this->fee[$index]);
    }

    /**
     * unset fee
     *
     * Contains the data for one fee (such as name and amount).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFee($index)
    {
        unset($this->fee[$index]);
    }

    /**
     * Gets as fee
     *
     * Contains the data for one fee (such as name and amount).
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\FeeType>
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Sets a new fee
     *
     * Contains the data for one fee (such as name and amount).
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\FeeType> $fee
     * @return self
     */
    public function setFee(iterable $fee)
    {
        $this->fee = $fee;
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
        $value = $this->itemID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ItemID', null, (string) $value);
        }
        $value = $this->fee;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'Fee', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\InventoryFeesType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->fee = [];
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
                case 'ItemID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->itemID = $value;
                    }
                    return true;
                case 'Fee':
                    $this->fee[] = \Nogrod\eBaySDK\Trading\FeeType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['ItemID'] = $this->itemID;
        $data['Fee'] = Func::jsonList($this->fee);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
