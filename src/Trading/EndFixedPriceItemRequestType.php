<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing EndFixedPriceItemRequestType
 *
 * Ends the specified fixed-price listing before the date and time at which
 *  it would normally end (per the listing duration).
 * XSD Type: EndFixedPriceItemRequestType
 */
class EndFixedPriceItemRequestType extends AbstractRequestType
{
    /**
     * Unique identifier of the listing that you want to end.
     *  <br><br>
     *  In the <b>EndFixedPriceItem</b> request, either <b>ItemID</b> or <b>SKU</b> value is required.
     *  If both are passed in and they don't refer to the same listing, eBay
     *  ignores <b>SKU</b> and considers only the <b>ItemID</b>.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * The seller's reason for ending the listing early is input into this required field. The seller is not allowed to use the <code>ProductDeleted</code> value, as this ending reason can only be used internally by eBay to administratively end a listing due to the associated Catalog product being removed from the eBay Catalog.
     *
     * @var string $endingReason
     */
    private $endingReason = null;

    /**
     * The seller-defined SKU (stock keeping unit) value of the item in the listing being ended. The <b>SKU</b> field can only be used to end a listing if that listing was created or relisted with an <b>AddFixedPriceItem</b> or <b>RelistFixedPriceItem</b> call, and the <b>Item.InventoryTrackingMethod</b> was included in the call and set to <code>SKU</code>.
     *  <br><br>
     *  In the <b>EndFixedPriceItem</b> request, either <b>ItemID</b> or <b>SKU</b> is required.
     *  If both are passed in and they don't refer to the same listing, eBay
     *  ignores <b>SKU</b> and considers only the <b>ItemID</b>.
     *
     * @var string $sKU
     */
    private $sKU = null;

    /**
     * Gets as itemID
     *
     * Unique identifier of the listing that you want to end.
     *  <br><br>
     *  In the <b>EndFixedPriceItem</b> request, either <b>ItemID</b> or <b>SKU</b> value is required.
     *  If both are passed in and they don't refer to the same listing, eBay
     *  ignores <b>SKU</b> and considers only the <b>ItemID</b>.
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
     * Unique identifier of the listing that you want to end.
     *  <br><br>
     *  In the <b>EndFixedPriceItem</b> request, either <b>ItemID</b> or <b>SKU</b> value is required.
     *  If both are passed in and they don't refer to the same listing, eBay
     *  ignores <b>SKU</b> and considers only the <b>ItemID</b>.
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
     * Gets as endingReason
     *
     * The seller's reason for ending the listing early is input into this required field. The seller is not allowed to use the <code>ProductDeleted</code> value, as this ending reason can only be used internally by eBay to administratively end a listing due to the associated Catalog product being removed from the eBay Catalog.
     *
     * @return string
     */
    public function getEndingReason()
    {
        return $this->endingReason;
    }

    /**
     * Sets a new endingReason
     *
     * The seller's reason for ending the listing early is input into this required field. The seller is not allowed to use the <code>ProductDeleted</code> value, as this ending reason can only be used internally by eBay to administratively end a listing due to the associated Catalog product being removed from the eBay Catalog.
     *
     * @param string $endingReason
     * @return self
     */
    public function setEndingReason($endingReason)
    {
        $this->endingReason = $endingReason;
        return $this;
    }

    /**
     * Gets as sKU
     *
     * The seller-defined SKU (stock keeping unit) value of the item in the listing being ended. The <b>SKU</b> field can only be used to end a listing if that listing was created or relisted with an <b>AddFixedPriceItem</b> or <b>RelistFixedPriceItem</b> call, and the <b>Item.InventoryTrackingMethod</b> was included in the call and set to <code>SKU</code>.
     *  <br><br>
     *  In the <b>EndFixedPriceItem</b> request, either <b>ItemID</b> or <b>SKU</b> is required.
     *  If both are passed in and they don't refer to the same listing, eBay
     *  ignores <b>SKU</b> and considers only the <b>ItemID</b>.
     *
     * @return string
     */
    public function getSKU()
    {
        return $this->sKU;
    }

    /**
     * Sets a new sKU
     *
     * The seller-defined SKU (stock keeping unit) value of the item in the listing being ended. The <b>SKU</b> field can only be used to end a listing if that listing was created or relisted with an <b>AddFixedPriceItem</b> or <b>RelistFixedPriceItem</b> call, and the <b>Item.InventoryTrackingMethod</b> was included in the call and set to <code>SKU</code>.
     *  <br><br>
     *  In the <b>EndFixedPriceItem</b> request, either <b>ItemID</b> or <b>SKU</b> is required.
     *  If both are passed in and they don't refer to the same listing, eBay
     *  ignores <b>SKU</b> and considers only the <b>ItemID</b>.
     *
     * @param string $sKU
     * @return self
     */
    public function setSKU($sKU)
    {
        $this->sKU = $sKU;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->itemID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ItemID', null, (string) $value);
        }
        $value = $this->endingReason;
        if (null !== $value) {
            $writer->writeElementNs(null, 'EndingReason', null, (string) $value);
        }
        $value = $this->sKU;
        if (null !== $value) {
            $writer->writeElementNs(null, 'SKU', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\EndFixedPriceItemRequestType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return parent::xmlReadAttribute($reader);
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
                case 'EndingReason':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->endingReason = $value;
                    }
                    return true;
                case 'SKU':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->sKU = $value;
                    }
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }

    protected function jsonProperties(): array
    {
        $data = parent::jsonProperties();
        $data['ItemID'] = $this->itemID;
        $data['EndingReason'] = $this->endingReason;
        $data['SKU'] = $this->sKU;
        return $data;
    }
}
