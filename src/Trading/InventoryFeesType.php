<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing InventoryFeesType
 *
 * This is used in the <b>ReviseInventoryStatus</b> response to provide the set of fees associated with each unique <b>ItemID</b>.
 * XSD Type: InventoryFeesType
 */
class InventoryFeesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
     * @return \Nogrod\eBaySDK\Trading\FeeType[]
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
     * @param \Nogrod\eBaySDK\Trading\FeeType[] $fee
     * @return self
     */
    public function setFee(array $fee)
    {
        $this->fee = $fee;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getFee();
        if (null !== $value && [] !== $this->getFee()) {
            $writer->write(array_map(function ($v) {return ["Fee" => $v];}, $value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\InventoryFeesType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Fee');
        if (null !== $value) {
            $this->setFee(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\FeeType::fromKeyValue($v);}, $value));
        }
    }
}
