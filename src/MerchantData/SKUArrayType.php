<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SKUArrayType
 *
 * A list of stock-keeping unit (SKU) identifiers that a seller uses in listings.
 * XSD Type: SKUArrayType
 */
class SKUArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * A SKU (stock keeping unit) is an identifier defined by a seller.
     *  Some sellers use SKUs to track complex flows of products
     *  and information on the client side.
     *  A seller can specify a SKU when listing an item with AddItem
     *  and related calls. eBay preserves the SKU on the item, enabling you
     *  to obtain it before and after an order line item is created.
     *  (SKU is recommended as an alternative to ApplicationData.)<br>
     *  <br>
     *  A SKU is not required to be unique. A seller can specify a
     *  particular SKU value on one item or on multiple items.
     *  Different sellers can use the same SKUs.<br>
     *  <br>
     *  If the SKU is unique across a seller's active listings, and if
     *  the seller listed the item by using AddFixedPriceItem
     *  or RelistFixedPriceItem, the seller can also set
     *  Item.InventoryTrackingMethod to SKU. This allows the seller to use
     *  SKU instead of ItemID as a unique identifier in subsequent calls,
     *  such as GetItem and ReviseInventoryStatus.<br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  AddFixedPriceItem and RelistFixedPriceItem are defined in
     *  the Merchant Data API (part of Large Merchant Services).
     *  </span>
     *
     * @var string[] $sKU
     */
    private $sKU = [

    ];

    /**
     * Adds as sKU
     *
     * A SKU (stock keeping unit) is an identifier defined by a seller.
     *  Some sellers use SKUs to track complex flows of products
     *  and information on the client side.
     *  A seller can specify a SKU when listing an item with AddItem
     *  and related calls. eBay preserves the SKU on the item, enabling you
     *  to obtain it before and after an order line item is created.
     *  (SKU is recommended as an alternative to ApplicationData.)<br>
     *  <br>
     *  A SKU is not required to be unique. A seller can specify a
     *  particular SKU value on one item or on multiple items.
     *  Different sellers can use the same SKUs.<br>
     *  <br>
     *  If the SKU is unique across a seller's active listings, and if
     *  the seller listed the item by using AddFixedPriceItem
     *  or RelistFixedPriceItem, the seller can also set
     *  Item.InventoryTrackingMethod to SKU. This allows the seller to use
     *  SKU instead of ItemID as a unique identifier in subsequent calls,
     *  such as GetItem and ReviseInventoryStatus.<br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  AddFixedPriceItem and RelistFixedPriceItem are defined in
     *  the Merchant Data API (part of Large Merchant Services).
     *  </span>
     *
     * @return self
     * @param string $sKU
     */
    public function addToSKU($sKU)
    {
        $this->sKU[] = $sKU;
        return $this;
    }

    /**
     * isset sKU
     *
     * A SKU (stock keeping unit) is an identifier defined by a seller.
     *  Some sellers use SKUs to track complex flows of products
     *  and information on the client side.
     *  A seller can specify a SKU when listing an item with AddItem
     *  and related calls. eBay preserves the SKU on the item, enabling you
     *  to obtain it before and after an order line item is created.
     *  (SKU is recommended as an alternative to ApplicationData.)<br>
     *  <br>
     *  A SKU is not required to be unique. A seller can specify a
     *  particular SKU value on one item or on multiple items.
     *  Different sellers can use the same SKUs.<br>
     *  <br>
     *  If the SKU is unique across a seller's active listings, and if
     *  the seller listed the item by using AddFixedPriceItem
     *  or RelistFixedPriceItem, the seller can also set
     *  Item.InventoryTrackingMethod to SKU. This allows the seller to use
     *  SKU instead of ItemID as a unique identifier in subsequent calls,
     *  such as GetItem and ReviseInventoryStatus.<br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  AddFixedPriceItem and RelistFixedPriceItem are defined in
     *  the Merchant Data API (part of Large Merchant Services).
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSKU($index)
    {
        return isset($this->sKU[$index]);
    }

    /**
     * unset sKU
     *
     * A SKU (stock keeping unit) is an identifier defined by a seller.
     *  Some sellers use SKUs to track complex flows of products
     *  and information on the client side.
     *  A seller can specify a SKU when listing an item with AddItem
     *  and related calls. eBay preserves the SKU on the item, enabling you
     *  to obtain it before and after an order line item is created.
     *  (SKU is recommended as an alternative to ApplicationData.)<br>
     *  <br>
     *  A SKU is not required to be unique. A seller can specify a
     *  particular SKU value on one item or on multiple items.
     *  Different sellers can use the same SKUs.<br>
     *  <br>
     *  If the SKU is unique across a seller's active listings, and if
     *  the seller listed the item by using AddFixedPriceItem
     *  or RelistFixedPriceItem, the seller can also set
     *  Item.InventoryTrackingMethod to SKU. This allows the seller to use
     *  SKU instead of ItemID as a unique identifier in subsequent calls,
     *  such as GetItem and ReviseInventoryStatus.<br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  AddFixedPriceItem and RelistFixedPriceItem are defined in
     *  the Merchant Data API (part of Large Merchant Services).
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSKU($index)
    {
        unset($this->sKU[$index]);
    }

    /**
     * Gets as sKU
     *
     * A SKU (stock keeping unit) is an identifier defined by a seller.
     *  Some sellers use SKUs to track complex flows of products
     *  and information on the client side.
     *  A seller can specify a SKU when listing an item with AddItem
     *  and related calls. eBay preserves the SKU on the item, enabling you
     *  to obtain it before and after an order line item is created.
     *  (SKU is recommended as an alternative to ApplicationData.)<br>
     *  <br>
     *  A SKU is not required to be unique. A seller can specify a
     *  particular SKU value on one item or on multiple items.
     *  Different sellers can use the same SKUs.<br>
     *  <br>
     *  If the SKU is unique across a seller's active listings, and if
     *  the seller listed the item by using AddFixedPriceItem
     *  or RelistFixedPriceItem, the seller can also set
     *  Item.InventoryTrackingMethod to SKU. This allows the seller to use
     *  SKU instead of ItemID as a unique identifier in subsequent calls,
     *  such as GetItem and ReviseInventoryStatus.<br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  AddFixedPriceItem and RelistFixedPriceItem are defined in
     *  the Merchant Data API (part of Large Merchant Services).
     *  </span>
     *
     * @return string[]
     */
    public function getSKU()
    {
        return $this->sKU;
    }

    /**
     * Sets a new sKU
     *
     * A SKU (stock keeping unit) is an identifier defined by a seller.
     *  Some sellers use SKUs to track complex flows of products
     *  and information on the client side.
     *  A seller can specify a SKU when listing an item with AddItem
     *  and related calls. eBay preserves the SKU on the item, enabling you
     *  to obtain it before and after an order line item is created.
     *  (SKU is recommended as an alternative to ApplicationData.)<br>
     *  <br>
     *  A SKU is not required to be unique. A seller can specify a
     *  particular SKU value on one item or on multiple items.
     *  Different sellers can use the same SKUs.<br>
     *  <br>
     *  If the SKU is unique across a seller's active listings, and if
     *  the seller listed the item by using AddFixedPriceItem
     *  or RelistFixedPriceItem, the seller can also set
     *  Item.InventoryTrackingMethod to SKU. This allows the seller to use
     *  SKU instead of ItemID as a unique identifier in subsequent calls,
     *  such as GetItem and ReviseInventoryStatus.<br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  AddFixedPriceItem and RelistFixedPriceItem are defined in
     *  the Merchant Data API (part of Large Merchant Services).
     *  </span>
     *
     * @param string $sKU
     * @return self
     */
    public function setSKU(array $sKU)
    {
        $this->sKU = $sKU;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getSKU();
        if (null !== $value && !empty($this->getSKU())) {
            $writer->write(array_map(function ($v) {return ["SKU" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SKU', true);
        if (null !== $value && !empty($value)) {
            $this->setSKU($value);
        }
    }
}
