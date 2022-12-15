<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing InventoryStatusType
 *
 * This type is used by the <b>ReviseInventoryStatus</b> call to update the price and/or quantity of an item or an item variation within a single-variation or multiple-variation, fixed-price listing.
 * XSD Type: InventoryStatusType
 */
class InventoryStatusType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This value is the seller-defined SKU value of the item being revised.
     *  <br>
     *  <br>
     *  For a single-variation listing, either the <b>ItemID</b> of the listing or the <b>SKU</b> value of the item (if it exists) is required, and which one to use will depend on the value of the <b>InventoryTrackingMethod</b> setting. If the value of <b>InventoryTrackingMethod</b> is <code>ItemID</code>, the <b>ItemID</b> field should be used. If the value of <b>InventoryTrackingMethod</b> is <code>SKU</code>, the <b>SKU</b> field should be used. <code>ItemID</code> is the default value of <b>InventoryTrackingMethod</b>, and its value can only be set/changed to <code>SKU</code> through either an <b>AddFixedPriceItem</b> or <b>RelistFixedPriceItem</b> call.
     *  <br>
     *  <br>
     *  For a multiple-variation listing, the <b>SKU</b> value of the item variation is required in order to identify a specific item variation. An <b>ItemID</b> field is also required if the <b>InventoryTrackingMethod</b> value is set to <code>ItemID</code>. However, if the <b>InventoryTrackingMethod</b> value is set to <code>SKU</code>, only the <b>SKU</b> value of the item variation is needed to identify a specific item variation. Note that a seller-defined <b>SKU</b> value is required when a seller creates a multiple-variation listing, regardless of whether they decide to track inventory by Item ID or SKU.
     *  <br>
     *  <br>
     *  The <b>SKU</b> field is always returned in the response, and if a SKU value doesn't exist for a single-variation listing, it is returned as an empty tag.
     *
     * @var string $sKU
     */
    private $sKU = null;

    /**
     * The unique identifier of the listing being revised.
     *  <br>
     *  <br>
     *  For a single-variation listing, either the <b>ItemID</b> of the listing or the <b>SKU</b> value of the item (if it exists) is required, and which one to use will depend on the value of the <b>InventoryTrackingMethod</b> setting. If the value of <b>InventoryTrackingMethod</b> is <code>ItemID</code>, the <b>ItemID</b> field should be used. If the value of <b>InventoryTrackingMethod</b> is <code>SKU</code>, the <b>SKU</b> field should be used. <code>ItemID</code> is the default value of <b>InventoryTrackingMethod</b>, and its value can only be set/changed to <code>SKU</code> through either an <b>AddFixedPriceItem</b> or <b>RelistFixedPriceItem</b> call.
     *  <br>
     *  <br>
     *  For a multiple-variation listing, the <b>SKU</b> value of the item variation is required in order to identify a specific item variation. An <b>ItemID</b> field is also required if the <b>InventoryTrackingMethod</b> value is set to <code>ItemID</code>. However, if the <b>InventoryTrackingMethod</b> value is set to <code>SKU</code>, only the <b>SKU</b> value of the item variation is needed to identify a specific item variation. Note that a seller-defined <b>SKU</b> value is required when a seller creates a multiple-variation listing, regardless of whether they decide to track inventory by Item ID or SKU.
     *  <br>
     *  <br>
     *  Please note that the same <b>ItemID</b> value can be used
     *  multiple times in the same call if you revise several
     *  item variations from the same multiple-variation listing.
     *  <br>
     *  <br>
     *  The <b>ItemID</b> field is always returned in the response, even if an <b>ItemID</b> value was not included in the request.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * This field is used to update the price of a fixed-price item, or to update the price of an item variation within a multiple-variation listing. To update the price of an item variation, both the <b>ItemID</b> and <b>SKU</b> fields are required to identify the listing and the specific variation within that listing, respectively.
     *  <br>
     *  <br>
     *  In each <b>InventoryStatus</b> container, either <b>StartPrice</b> or <b>Quantity</b> (or both) are required.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>StartPrice</b> field should no longer appear in the response payload. If it does appear, it can be ignored. Sellers can leverage the <a href="https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/GetItem.html">GetItem</a> call to verify that the requested price updates were successful.</span>
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $startPrice
     */
    private $startPrice = null;

    /**
     * This field is used to update the quantity of a fixed-price listing, or to update the quantity of a variation within a multiple-variation listing. To update a variation, both the <b>ItemID</b> and <b>SKU</b> fields are required to identify the listing and the specific variation within that listing, respectively.
     *  <br>
     *  <br>
     *  In each <b>InventoryStatus</b> container, either <b>StartPrice</b> or <b>Quantity</b> (or both) are required.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>Quantity</b> field should no longer appear in the response payload. If it does appear, it can be ignored. Sellers can leverage the <a href="https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/GetItem.html">GetItem</a> call to verify that the requested quantity updates were successful.</span>
     *
     * @var int $quantity
     */
    private $quantity = null;

    /**
     * Gets as sKU
     *
     * This value is the seller-defined SKU value of the item being revised.
     *  <br>
     *  <br>
     *  For a single-variation listing, either the <b>ItemID</b> of the listing or the <b>SKU</b> value of the item (if it exists) is required, and which one to use will depend on the value of the <b>InventoryTrackingMethod</b> setting. If the value of <b>InventoryTrackingMethod</b> is <code>ItemID</code>, the <b>ItemID</b> field should be used. If the value of <b>InventoryTrackingMethod</b> is <code>SKU</code>, the <b>SKU</b> field should be used. <code>ItemID</code> is the default value of <b>InventoryTrackingMethod</b>, and its value can only be set/changed to <code>SKU</code> through either an <b>AddFixedPriceItem</b> or <b>RelistFixedPriceItem</b> call.
     *  <br>
     *  <br>
     *  For a multiple-variation listing, the <b>SKU</b> value of the item variation is required in order to identify a specific item variation. An <b>ItemID</b> field is also required if the <b>InventoryTrackingMethod</b> value is set to <code>ItemID</code>. However, if the <b>InventoryTrackingMethod</b> value is set to <code>SKU</code>, only the <b>SKU</b> value of the item variation is needed to identify a specific item variation. Note that a seller-defined <b>SKU</b> value is required when a seller creates a multiple-variation listing, regardless of whether they decide to track inventory by Item ID or SKU.
     *  <br>
     *  <br>
     *  The <b>SKU</b> field is always returned in the response, and if a SKU value doesn't exist for a single-variation listing, it is returned as an empty tag.
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
     * This value is the seller-defined SKU value of the item being revised.
     *  <br>
     *  <br>
     *  For a single-variation listing, either the <b>ItemID</b> of the listing or the <b>SKU</b> value of the item (if it exists) is required, and which one to use will depend on the value of the <b>InventoryTrackingMethod</b> setting. If the value of <b>InventoryTrackingMethod</b> is <code>ItemID</code>, the <b>ItemID</b> field should be used. If the value of <b>InventoryTrackingMethod</b> is <code>SKU</code>, the <b>SKU</b> field should be used. <code>ItemID</code> is the default value of <b>InventoryTrackingMethod</b>, and its value can only be set/changed to <code>SKU</code> through either an <b>AddFixedPriceItem</b> or <b>RelistFixedPriceItem</b> call.
     *  <br>
     *  <br>
     *  For a multiple-variation listing, the <b>SKU</b> value of the item variation is required in order to identify a specific item variation. An <b>ItemID</b> field is also required if the <b>InventoryTrackingMethod</b> value is set to <code>ItemID</code>. However, if the <b>InventoryTrackingMethod</b> value is set to <code>SKU</code>, only the <b>SKU</b> value of the item variation is needed to identify a specific item variation. Note that a seller-defined <b>SKU</b> value is required when a seller creates a multiple-variation listing, regardless of whether they decide to track inventory by Item ID or SKU.
     *  <br>
     *  <br>
     *  The <b>SKU</b> field is always returned in the response, and if a SKU value doesn't exist for a single-variation listing, it is returned as an empty tag.
     *
     * @param string $sKU
     * @return self
     */
    public function setSKU($sKU)
    {
        $this->sKU = $sKU;
        return $this;
    }

    /**
     * Gets as itemID
     *
     * The unique identifier of the listing being revised.
     *  <br>
     *  <br>
     *  For a single-variation listing, either the <b>ItemID</b> of the listing or the <b>SKU</b> value of the item (if it exists) is required, and which one to use will depend on the value of the <b>InventoryTrackingMethod</b> setting. If the value of <b>InventoryTrackingMethod</b> is <code>ItemID</code>, the <b>ItemID</b> field should be used. If the value of <b>InventoryTrackingMethod</b> is <code>SKU</code>, the <b>SKU</b> field should be used. <code>ItemID</code> is the default value of <b>InventoryTrackingMethod</b>, and its value can only be set/changed to <code>SKU</code> through either an <b>AddFixedPriceItem</b> or <b>RelistFixedPriceItem</b> call.
     *  <br>
     *  <br>
     *  For a multiple-variation listing, the <b>SKU</b> value of the item variation is required in order to identify a specific item variation. An <b>ItemID</b> field is also required if the <b>InventoryTrackingMethod</b> value is set to <code>ItemID</code>. However, if the <b>InventoryTrackingMethod</b> value is set to <code>SKU</code>, only the <b>SKU</b> value of the item variation is needed to identify a specific item variation. Note that a seller-defined <b>SKU</b> value is required when a seller creates a multiple-variation listing, regardless of whether they decide to track inventory by Item ID or SKU.
     *  <br>
     *  <br>
     *  Please note that the same <b>ItemID</b> value can be used
     *  multiple times in the same call if you revise several
     *  item variations from the same multiple-variation listing.
     *  <br>
     *  <br>
     *  The <b>ItemID</b> field is always returned in the response, even if an <b>ItemID</b> value was not included in the request.
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
     * The unique identifier of the listing being revised.
     *  <br>
     *  <br>
     *  For a single-variation listing, either the <b>ItemID</b> of the listing or the <b>SKU</b> value of the item (if it exists) is required, and which one to use will depend on the value of the <b>InventoryTrackingMethod</b> setting. If the value of <b>InventoryTrackingMethod</b> is <code>ItemID</code>, the <b>ItemID</b> field should be used. If the value of <b>InventoryTrackingMethod</b> is <code>SKU</code>, the <b>SKU</b> field should be used. <code>ItemID</code> is the default value of <b>InventoryTrackingMethod</b>, and its value can only be set/changed to <code>SKU</code> through either an <b>AddFixedPriceItem</b> or <b>RelistFixedPriceItem</b> call.
     *  <br>
     *  <br>
     *  For a multiple-variation listing, the <b>SKU</b> value of the item variation is required in order to identify a specific item variation. An <b>ItemID</b> field is also required if the <b>InventoryTrackingMethod</b> value is set to <code>ItemID</code>. However, if the <b>InventoryTrackingMethod</b> value is set to <code>SKU</code>, only the <b>SKU</b> value of the item variation is needed to identify a specific item variation. Note that a seller-defined <b>SKU</b> value is required when a seller creates a multiple-variation listing, regardless of whether they decide to track inventory by Item ID or SKU.
     *  <br>
     *  <br>
     *  Please note that the same <b>ItemID</b> value can be used
     *  multiple times in the same call if you revise several
     *  item variations from the same multiple-variation listing.
     *  <br>
     *  <br>
     *  The <b>ItemID</b> field is always returned in the response, even if an <b>ItemID</b> value was not included in the request.
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
     * Gets as startPrice
     *
     * This field is used to update the price of a fixed-price item, or to update the price of an item variation within a multiple-variation listing. To update the price of an item variation, both the <b>ItemID</b> and <b>SKU</b> fields are required to identify the listing and the specific variation within that listing, respectively.
     *  <br>
     *  <br>
     *  In each <b>InventoryStatus</b> container, either <b>StartPrice</b> or <b>Quantity</b> (or both) are required.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>StartPrice</b> field should no longer appear in the response payload. If it does appear, it can be ignored. Sellers can leverage the <a href="https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/GetItem.html">GetItem</a> call to verify that the requested price updates were successful.</span>
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getStartPrice()
    {
        return $this->startPrice;
    }

    /**
     * Sets a new startPrice
     *
     * This field is used to update the price of a fixed-price item, or to update the price of an item variation within a multiple-variation listing. To update the price of an item variation, both the <b>ItemID</b> and <b>SKU</b> fields are required to identify the listing and the specific variation within that listing, respectively.
     *  <br>
     *  <br>
     *  In each <b>InventoryStatus</b> container, either <b>StartPrice</b> or <b>Quantity</b> (or both) are required.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>StartPrice</b> field should no longer appear in the response payload. If it does appear, it can be ignored. Sellers can leverage the <a href="https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/GetItem.html">GetItem</a> call to verify that the requested price updates were successful.</span>
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $startPrice
     * @return self
     */
    public function setStartPrice(\Nogrod\eBaySDK\Trading\AmountType $startPrice)
    {
        $this->startPrice = $startPrice;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * This field is used to update the quantity of a fixed-price listing, or to update the quantity of a variation within a multiple-variation listing. To update a variation, both the <b>ItemID</b> and <b>SKU</b> fields are required to identify the listing and the specific variation within that listing, respectively.
     *  <br>
     *  <br>
     *  In each <b>InventoryStatus</b> container, either <b>StartPrice</b> or <b>Quantity</b> (or both) are required.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>Quantity</b> field should no longer appear in the response payload. If it does appear, it can be ignored. Sellers can leverage the <a href="https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/GetItem.html">GetItem</a> call to verify that the requested quantity updates were successful.</span>
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * This field is used to update the quantity of a fixed-price listing, or to update the quantity of a variation within a multiple-variation listing. To update a variation, both the <b>ItemID</b> and <b>SKU</b> fields are required to identify the listing and the specific variation within that listing, respectively.
     *  <br>
     *  <br>
     *  In each <b>InventoryStatus</b> container, either <b>StartPrice</b> or <b>Quantity</b> (or both) are required.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>Quantity</b> field should no longer appear in the response payload. If it does appear, it can be ignored. Sellers can leverage the <a href="https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/GetItem.html">GetItem</a> call to verify that the requested quantity updates were successful.</span>
     *
     * @param int $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getSKU();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SKU", $value);
        }
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getStartPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StartPrice", $value);
        }
        $value = $this->getQuantity();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Quantity", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SKU');
        if (null !== $value) {
            $this->setSKU($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StartPrice');
        if (null !== $value) {
            $this->setStartPrice(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Quantity');
        if (null !== $value) {
            $this->setQuantity($value);
        }
    }
}
