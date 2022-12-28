<?php

namespace Nogrod\eBaySDK\MerchantData;

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
     *  ignores <b>SKU</b> and considers only the lt;b>ItemID</b>.
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
     *  ignores <b>SKU</b> and considers only the lt;b>ItemID</b>.
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
     *  ignores <b>SKU</b> and considers only the lt;b>ItemID</b>.
     *
     * @param string $sKU
     * @return self
     */
    public function setSKU($sKU)
    {
        $this->sKU = $sKU;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getEndingReason();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EndingReason", $value);
        }
        $value = $this->getSKU();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SKU", $value);
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
        parent::setKeyValue($keyValue);
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EndingReason');
        if (null !== $value) {
            $this->setEndingReason($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SKU');
        if (null !== $value) {
            $this->setSKU($value);
        }
    }
}
