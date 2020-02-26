<?php

namespace Nogrod\eBaySDK\Shopping;

/**
 * Class representing SellingStatusType
 *
 * This type indicates the quantity sold for each variation within a multiple-variation listing. This type is only applicable for multiple-variation listings, and is not returned at the listing level. To return data on individual variations within the listing, you must include the <b>IncludeSelector</b> field and set its value to <code>Variations</code>.
 * XSD Type: SellingStatusType
 */
class SellingStatusType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This field is no longer returned.
     *
     * @var \Nogrod\eBaySDK\Shopping\AmountType $convertedCurrentPrice
     */
    private $convertedCurrentPrice = null;

    /**
     * This field is no longer returned. See <b>Variation.StartPrice</b> instead.
     *
     * @var \Nogrod\eBaySDK\Shopping\AmountType $currentPrice
     */
    private $currentPrice = null;

    /**
     * This integer value indicates the quantity sold for the corresponding variation. You can subtract this integer value from the value in the <b>Variation.Quantity</b> field to determine the quantity of the variation that is still available for purchase.
     *
     * @var int $quantitySold
     */
    private $quantitySold = null;

    /**
     * This field indicates the total quantity of the corresponding variation sold and picked up by buyers using the In-Store Pickup or Click and Collect option. This value is the total quantity of this variation purchased by one or more buyers using the In-Store Pickup or Click and Collect option, and is not the total number of In-Store Pickup or Click and Collect orders for that variation. So, if two buyers selected the In-Store Pickup or Click and Collect option, but each of these buyers bought a quantity of five of these variations (in same purchase), the <b>Item.Variations.Variation.SellingStatus.QuantitySoldByPickupInStore</b> value would be <code>10</code> and not <code>2</code>.
     *  <br>
     *  <br>
     *  This field will only be returned if the listing is eligible for In-Store Pickup or Click and Collect.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> The In-Store Pickup feature is generally only available to large retail merchants in US, Canada, UK, Germany, and Australia marketplaces, and the In-Store Pickup feature is generally only available to large retail merchants in UK, Australia, and Germany marketplaces. Both of these features can only be applied to multiple-quantity, fixed-price listings.
     *  </span>
     *
     * @var int $quantitySoldByPickupInStore
     */
    private $quantitySoldByPickupInStore = null;

    /**
     * Gets as convertedCurrentPrice
     *
     * This field is no longer returned.
     *
     * @return \Nogrod\eBaySDK\Shopping\AmountType
     */
    public function getConvertedCurrentPrice()
    {
        return $this->convertedCurrentPrice;
    }

    /**
     * Sets a new convertedCurrentPrice
     *
     * This field is no longer returned.
     *
     * @param \Nogrod\eBaySDK\Shopping\AmountType $convertedCurrentPrice
     * @return self
     */
    public function setConvertedCurrentPrice(\Nogrod\eBaySDK\Shopping\AmountType $convertedCurrentPrice)
    {
        $this->convertedCurrentPrice = $convertedCurrentPrice;
        return $this;
    }

    /**
     * Gets as currentPrice
     *
     * This field is no longer returned. See <b>Variation.StartPrice</b> instead.
     *
     * @return \Nogrod\eBaySDK\Shopping\AmountType
     */
    public function getCurrentPrice()
    {
        return $this->currentPrice;
    }

    /**
     * Sets a new currentPrice
     *
     * This field is no longer returned. See <b>Variation.StartPrice</b> instead.
     *
     * @param \Nogrod\eBaySDK\Shopping\AmountType $currentPrice
     * @return self
     */
    public function setCurrentPrice(\Nogrod\eBaySDK\Shopping\AmountType $currentPrice)
    {
        $this->currentPrice = $currentPrice;
        return $this;
    }

    /**
     * Gets as quantitySold
     *
     * This integer value indicates the quantity sold for the corresponding variation. You can subtract this integer value from the value in the <b>Variation.Quantity</b> field to determine the quantity of the variation that is still available for purchase.
     *
     * @return int
     */
    public function getQuantitySold()
    {
        return $this->quantitySold;
    }

    /**
     * Sets a new quantitySold
     *
     * This integer value indicates the quantity sold for the corresponding variation. You can subtract this integer value from the value in the <b>Variation.Quantity</b> field to determine the quantity of the variation that is still available for purchase.
     *
     * @param int $quantitySold
     * @return self
     */
    public function setQuantitySold($quantitySold)
    {
        $this->quantitySold = $quantitySold;
        return $this;
    }

    /**
     * Gets as quantitySoldByPickupInStore
     *
     * This field indicates the total quantity of the corresponding variation sold and picked up by buyers using the In-Store Pickup or Click and Collect option. This value is the total quantity of this variation purchased by one or more buyers using the In-Store Pickup or Click and Collect option, and is not the total number of In-Store Pickup or Click and Collect orders for that variation. So, if two buyers selected the In-Store Pickup or Click and Collect option, but each of these buyers bought a quantity of five of these variations (in same purchase), the <b>Item.Variations.Variation.SellingStatus.QuantitySoldByPickupInStore</b> value would be <code>10</code> and not <code>2</code>.
     *  <br>
     *  <br>
     *  This field will only be returned if the listing is eligible for In-Store Pickup or Click and Collect.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> The In-Store Pickup feature is generally only available to large retail merchants in US, Canada, UK, Germany, and Australia marketplaces, and the In-Store Pickup feature is generally only available to large retail merchants in UK, Australia, and Germany marketplaces. Both of these features can only be applied to multiple-quantity, fixed-price listings.
     *  </span>
     *
     * @return int
     */
    public function getQuantitySoldByPickupInStore()
    {
        return $this->quantitySoldByPickupInStore;
    }

    /**
     * Sets a new quantitySoldByPickupInStore
     *
     * This field indicates the total quantity of the corresponding variation sold and picked up by buyers using the In-Store Pickup or Click and Collect option. This value is the total quantity of this variation purchased by one or more buyers using the In-Store Pickup or Click and Collect option, and is not the total number of In-Store Pickup or Click and Collect orders for that variation. So, if two buyers selected the In-Store Pickup or Click and Collect option, but each of these buyers bought a quantity of five of these variations (in same purchase), the <b>Item.Variations.Variation.SellingStatus.QuantitySoldByPickupInStore</b> value would be <code>10</code> and not <code>2</code>.
     *  <br>
     *  <br>
     *  This field will only be returned if the listing is eligible for In-Store Pickup or Click and Collect.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> The In-Store Pickup feature is generally only available to large retail merchants in US, Canada, UK, Germany, and Australia marketplaces, and the In-Store Pickup feature is generally only available to large retail merchants in UK, Australia, and Germany marketplaces. Both of these features can only be applied to multiple-quantity, fixed-price listings.
     *  </span>
     *
     * @param int $quantitySoldByPickupInStore
     * @return self
     */
    public function setQuantitySoldByPickupInStore($quantitySoldByPickupInStore)
    {
        $this->quantitySoldByPickupInStore = $quantitySoldByPickupInStore;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getConvertedCurrentPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ConvertedCurrentPrice", $value);
        }
        $value = $this->getCurrentPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CurrentPrice", $value);
        }
        $value = $this->getQuantitySold();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QuantitySold", $value);
        }
        $value = $this->getQuantitySoldByPickupInStore();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QuantitySoldByPickupInStore", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ConvertedCurrentPrice');
        if (null !== $value) {
            $this->setConvertedCurrentPrice(\Nogrod\eBaySDK\Shopping\AmountType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CurrentPrice');
        if (null !== $value) {
            $this->setCurrentPrice(\Nogrod\eBaySDK\Shopping\AmountType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QuantitySold');
        if (null !== $value) {
            $this->setQuantitySold($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QuantitySoldByPickupInStore');
        if (null !== $value) {
            $this->setQuantitySoldByPickupInStore($value);
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
