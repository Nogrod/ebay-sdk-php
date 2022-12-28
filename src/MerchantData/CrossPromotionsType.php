<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CrossPromotionsType
 *
 * This type is deprecated.
 * XSD Type: CrossPromotionsType
 */
class CrossPromotionsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * This field is deprecated.
     *
     * @var string $primaryScheme
     */
    private $primaryScheme = null;

    /**
     * This field is deprecated.
     *
     * @var string $promotionMethod
     */
    private $promotionMethod = null;

    /**
     * This field is deprecated.
     *
     * @var string $sellerID
     */
    private $sellerID = null;

    /**
     * This field is deprecated.
     *
     * @var bool $shippingDiscount
     */
    private $shippingDiscount = null;

    /**
     * This field is deprecated.
     *
     * @var string $storeName
     */
    private $storeName = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\PromotedItemType[] $promotedItem
     */
    private $promotedItem = [

    ];

    /**
     * Gets as itemID
     *
     * This field is deprecated.
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
     * This field is deprecated.
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
     * Gets as primaryScheme
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getPrimaryScheme()
    {
        return $this->primaryScheme;
    }

    /**
     * Sets a new primaryScheme
     *
     * This field is deprecated.
     *
     * @param string $primaryScheme
     * @return self
     */
    public function setPrimaryScheme($primaryScheme)
    {
        $this->primaryScheme = $primaryScheme;
        return $this;
    }

    /**
     * Gets as promotionMethod
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getPromotionMethod()
    {
        return $this->promotionMethod;
    }

    /**
     * Sets a new promotionMethod
     *
     * This field is deprecated.
     *
     * @param string $promotionMethod
     * @return self
     */
    public function setPromotionMethod($promotionMethod)
    {
        $this->promotionMethod = $promotionMethod;
        return $this;
    }

    /**
     * Gets as sellerID
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getSellerID()
    {
        return $this->sellerID;
    }

    /**
     * Sets a new sellerID
     *
     * This field is deprecated.
     *
     * @param string $sellerID
     * @return self
     */
    public function setSellerID($sellerID)
    {
        $this->sellerID = $sellerID;
        return $this;
    }

    /**
     * Gets as shippingDiscount
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getShippingDiscount()
    {
        return $this->shippingDiscount;
    }

    /**
     * Sets a new shippingDiscount
     *
     * This field is deprecated.
     *
     * @param bool $shippingDiscount
     * @return self
     */
    public function setShippingDiscount($shippingDiscount)
    {
        $this->shippingDiscount = $shippingDiscount;
        return $this;
    }

    /**
     * Gets as storeName
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getStoreName()
    {
        return $this->storeName;
    }

    /**
     * Sets a new storeName
     *
     * This field is deprecated.
     *
     * @param string $storeName
     * @return self
     */
    public function setStoreName($storeName)
    {
        $this->storeName = $storeName;
        return $this;
    }

    /**
     * Adds as promotedItem
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\PromotedItemType $promotedItem
     */
    public function addToPromotedItem(\Nogrod\eBaySDK\MerchantData\PromotedItemType $promotedItem)
    {
        $this->promotedItem[] = $promotedItem;
        return $this;
    }

    /**
     * isset promotedItem
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPromotedItem($index)
    {
        return isset($this->promotedItem[$index]);
    }

    /**
     * unset promotedItem
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPromotedItem($index)
    {
        unset($this->promotedItem[$index]);
    }

    /**
     * Gets as promotedItem
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\PromotedItemType[]
     */
    public function getPromotedItem()
    {
        return $this->promotedItem;
    }

    /**
     * Sets a new promotedItem
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\PromotedItemType[] $promotedItem
     * @return self
     */
    public function setPromotedItem(array $promotedItem)
    {
        $this->promotedItem = $promotedItem;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getPrimaryScheme();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PrimaryScheme", $value);
        }
        $value = $this->getPromotionMethod();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PromotionMethod", $value);
        }
        $value = $this->getSellerID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerID", $value);
        }
        $value = $this->getShippingDiscount();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingDiscount", $value);
        }
        $value = $this->getStoreName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StoreName", $value);
        }
        $value = $this->getPromotedItem();
        if (null !== $value && !empty($this->getPromotedItem())) {
            $writer->write(array_map(function ($v) {
                return ["PromotedItem" => $v];
            }, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PrimaryScheme');
        if (null !== $value) {
            $this->setPrimaryScheme($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PromotionMethod');
        if (null !== $value) {
            $this->setPromotionMethod($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerID');
        if (null !== $value) {
            $this->setSellerID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingDiscount');
        if (null !== $value) {
            $this->setShippingDiscount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StoreName');
        if (null !== $value) {
            $this->setStoreName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PromotedItem', true);
        if (null !== $value && !empty($value)) {
            $this->setPromotedItem(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\PromotedItemType::fromKeyValue($v);
            }, $value));
        }
    }
}
