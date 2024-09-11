<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MerchantDataVariationType
 *
 * This type defines the details about one specific variation.
 * XSD Type: MerchantDataVariationType
 */
class MerchantDataVariationType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Stock Keeping Unit that serves as the seller's unique
     *  identifier for items within the same variation.
     *  You can use the variation's SKU instead of the
     *  variation specifics to revise a variation and to
     *  keep track of your eBay inventory.<br>
     *  <br>
     *  Many merchants assign a SKU to an item of a specific type,
     *  size, and color. This way, they can keep track of how many
     *  products of each type, size, and color are selling, and
     *  they can re-stock their shelves or update the variation
     *  quantity on eBay according to customer demand. <br>
     *  <br>
     *  Only returned if the seller specified a SKU for the
     *  variation.
     *
     * @var string $sKU
     */
    private $sKU = null;

    /**
     * The fixed price of all items identified by this variation.
     *  For example, a "Blue, Large" variation price could be USD 10.00,
     *  and a "Black, Medium" variation price could be USD 5.00.<br>
     *  <br>
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $price
     */
    private $price = null;

    /**
     * <b>For ActiveInventoryReport:</b>
     *  The number of items available for sale that are associated
     *  with this variation.<br>
     *
     * @var int $quantity
     */
    private $quantity = null;

    /**
     * A list of name/value pairs that uniquely identify the
     *  variation within the listing. All variations specify
     *  the same set of names, and each variation provides a
     *  unique combination of values for those
     *  names. For example, if the items vary by color and size,
     *  then every variation specifies Color and Size as names,
     *  and no two variations specify the same combination of
     *  color and size values.<br>
     *  <br>
     *  If a variation has no SKU, use the variation specifics
     *  as a unique ID to revise the variation and to keep
     *  track of your eBay inventory.
     *
     * @var \Nogrod\eBaySDK\Trading\NameValueListType[] $variationSpecifics
     */
    private $variationSpecifics = null;

    /**
     * Gets as sKU
     *
     * Stock Keeping Unit that serves as the seller's unique
     *  identifier for items within the same variation.
     *  You can use the variation's SKU instead of the
     *  variation specifics to revise a variation and to
     *  keep track of your eBay inventory.<br>
     *  <br>
     *  Many merchants assign a SKU to an item of a specific type,
     *  size, and color. This way, they can keep track of how many
     *  products of each type, size, and color are selling, and
     *  they can re-stock their shelves or update the variation
     *  quantity on eBay according to customer demand. <br>
     *  <br>
     *  Only returned if the seller specified a SKU for the
     *  variation.
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
     * Stock Keeping Unit that serves as the seller's unique
     *  identifier for items within the same variation.
     *  You can use the variation's SKU instead of the
     *  variation specifics to revise a variation and to
     *  keep track of your eBay inventory.<br>
     *  <br>
     *  Many merchants assign a SKU to an item of a specific type,
     *  size, and color. This way, they can keep track of how many
     *  products of each type, size, and color are selling, and
     *  they can re-stock their shelves or update the variation
     *  quantity on eBay according to customer demand. <br>
     *  <br>
     *  Only returned if the seller specified a SKU for the
     *  variation.
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
     * Gets as price
     *
     * The fixed price of all items identified by this variation.
     *  For example, a "Blue, Large" variation price could be USD 10.00,
     *  and a "Black, Medium" variation price could be USD 5.00.<br>
     *  <br>
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * The fixed price of all items identified by this variation.
     *  For example, a "Blue, Large" variation price could be USD 10.00,
     *  and a "Black, Medium" variation price could be USD 5.00.<br>
     *  <br>
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $price
     * @return self
     */
    public function setPrice(\Nogrod\eBaySDK\Trading\AmountType $price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * <b>For ActiveInventoryReport:</b>
     *  The number of items available for sale that are associated
     *  with this variation.<br>
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
     * <b>For ActiveInventoryReport:</b>
     *  The number of items available for sale that are associated
     *  with this variation.<br>
     *
     * @param int $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Adds as nameValueList
     *
     * A list of name/value pairs that uniquely identify the
     *  variation within the listing. All variations specify
     *  the same set of names, and each variation provides a
     *  unique combination of values for those
     *  names. For example, if the items vary by color and size,
     *  then every variation specifies Color and Size as names,
     *  and no two variations specify the same combination of
     *  color and size values.<br>
     *  <br>
     *  If a variation has no SKU, use the variation specifics
     *  as a unique ID to revise the variation and to keep
     *  track of your eBay inventory.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\NameValueListType $nameValueList
     */
    public function addToVariationSpecifics(\Nogrod\eBaySDK\Trading\NameValueListType $nameValueList)
    {
        $this->variationSpecifics[] = $nameValueList;
        return $this;
    }

    /**
     * isset variationSpecifics
     *
     * A list of name/value pairs that uniquely identify the
     *  variation within the listing. All variations specify
     *  the same set of names, and each variation provides a
     *  unique combination of values for those
     *  names. For example, if the items vary by color and size,
     *  then every variation specifies Color and Size as names,
     *  and no two variations specify the same combination of
     *  color and size values.<br>
     *  <br>
     *  If a variation has no SKU, use the variation specifics
     *  as a unique ID to revise the variation and to keep
     *  track of your eBay inventory.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVariationSpecifics($index)
    {
        return isset($this->variationSpecifics[$index]);
    }

    /**
     * unset variationSpecifics
     *
     * A list of name/value pairs that uniquely identify the
     *  variation within the listing. All variations specify
     *  the same set of names, and each variation provides a
     *  unique combination of values for those
     *  names. For example, if the items vary by color and size,
     *  then every variation specifies Color and Size as names,
     *  and no two variations specify the same combination of
     *  color and size values.<br>
     *  <br>
     *  If a variation has no SKU, use the variation specifics
     *  as a unique ID to revise the variation and to keep
     *  track of your eBay inventory.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVariationSpecifics($index)
    {
        unset($this->variationSpecifics[$index]);
    }

    /**
     * Gets as variationSpecifics
     *
     * A list of name/value pairs that uniquely identify the
     *  variation within the listing. All variations specify
     *  the same set of names, and each variation provides a
     *  unique combination of values for those
     *  names. For example, if the items vary by color and size,
     *  then every variation specifies Color and Size as names,
     *  and no two variations specify the same combination of
     *  color and size values.<br>
     *  <br>
     *  If a variation has no SKU, use the variation specifics
     *  as a unique ID to revise the variation and to keep
     *  track of your eBay inventory.
     *
     * @return \Nogrod\eBaySDK\Trading\NameValueListType[]
     */
    public function getVariationSpecifics()
    {
        return $this->variationSpecifics;
    }

    /**
     * Sets a new variationSpecifics
     *
     * A list of name/value pairs that uniquely identify the
     *  variation within the listing. All variations specify
     *  the same set of names, and each variation provides a
     *  unique combination of values for those
     *  names. For example, if the items vary by color and size,
     *  then every variation specifies Color and Size as names,
     *  and no two variations specify the same combination of
     *  color and size values.<br>
     *  <br>
     *  If a variation has no SKU, use the variation specifics
     *  as a unique ID to revise the variation and to keep
     *  track of your eBay inventory.
     *
     * @param \Nogrod\eBaySDK\Trading\NameValueListType[] $variationSpecifics
     * @return self
     */
    public function setVariationSpecifics(array $variationSpecifics)
    {
        $this->variationSpecifics = $variationSpecifics;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getSKU();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SKU", $value);
        }
        $value = $this->getPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Price", $value);
        }
        $value = $this->getQuantity();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Quantity", $value);
        }
        $value = $this->getVariationSpecifics();
        if (null !== $value && !empty($this->getVariationSpecifics())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VariationSpecifics", array_map(function ($v) {return ["NameValueList" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Price');
        if (null !== $value) {
            $this->setPrice(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Quantity');
        if (null !== $value) {
            $this->setQuantity($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VariationSpecifics', true);
        if (null !== $value && !empty($value)) {
            $this->setVariationSpecifics(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\NameValueListType::fromKeyValue($v);}, $value));
        }
    }
}
