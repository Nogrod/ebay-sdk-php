<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing VariationType
 *
 * This type is used by the <b>Variation</b> container, which provides full details on each item variation in a multiple-variation listing. A <b>Variation</b> container is returned for each product variation within a multiple-variation listing.
 * XSD Type: VariationType
 */
class VariationType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * A SKU (stock keeping unit) is a seller-defined identifier. It is only intended for the seller's use (not necessarily for buyers). A SKU value is not required, but many large sellers like to add SKU values for their products. If SKU values are defined for variations in a multiple-variation listing, the seller can specify a variation's SKU value in the <b>VariationSKU</b> field of a <b>GetSingleItem</b> call to retrieve details on that particular variation. The <b>VariationSKU</b> field is not available in the <b>GetMultipleItems</b> call.
     *  <br>
     *  <br>
     *  If specified, all SKU values must be unique within the <b>Variations</b>
     *  node. That is, no two variations within the same listing can have
     *  the same SKU.
     *  <br>
     *  <br>
     *  This field is only returned if the seller specified a SKU for the variation.
     *
     * @var string $sKU
     */
    private $sKU = null;

    /**
     * The fixed price for this item variation.
     *  For example, a "Blue, Large" variation price could be USD 10.00,
     *  and a "Black, Medium" variation price could be USD 8.00.<br>
     *  <br>
     *  The <b>StartPrice</b> is mandatory for each variation, regardless of whether the price is the same for all variations, or if the price differs for different variations. This field will be returned for each <b>Variation</b> container.
     *
     * @var \Nogrod\eBaySDK\Shopping\AmountType $startPrice
     */
    private $startPrice = null;

    /**
     * This field shows the total quantity associated with the variation, including
     *  the quantity available and the
     *  quantity sold. To calculate the quantity available for sale, subtract the
     *  corresponding
     *  <b>Variation.SellingStatus.QuantitySold</b> value from this
     *  value.
     *  <br>
     *  <br>
     *  Generally, this integer value will be '1' or greater, but it is possible that the value will be '0' if the variation is currently out of stock, but the seller is using the 'Out-of-Stock Control' feature. When the seller uses the 'Out-of-Stock Control' feature, an item (or item variation) will still surface in search results, although that particular item (or item variation) will not be purchasable.
     *
     * @var int $quantity
     */
    private $quantity = null;

    /**
     * A list of name/value pairs that uniquely identify the variation
     *  within the listing. All variations specify the same set of
     *  names, and each variation provides a unique combination of
     *  values for those names. For example, if the items vary by color and
     *  size, then every variation specifies Color and Size as names,
     *  and no two variations can specify the same combination of
     *  color and size values. Use this information to identify a
     *  variation of interest when you communicate with
     *  the seller.
     *  <br>
     *  <br>
     *  If your application supports PlaceOffer (in the Trading API),
     *  you use this information to uniquely identify the variation
     *  that you want to purchase.
     *
     * @var \Nogrod\eBaySDK\Shopping\NameValueListType[] $variationSpecifics
     */
    private $variationSpecifics = null;

    /**
     * This field is no longer Not used. The quantity sold for the variation is now shown in the <b>Variation.SellingStatus.QuantitySold</b> field.
     *
     * @var int $quantitySold
     */
    private $quantitySold = null;

    /**
     * This container shows the quantity sold for the variation, including the quantity that is sold through 'In-Store Pickup' (a logistics option that is only available to a select number of large US sellers with 'brick and mortar' stores). The <b>SellingStatus</b> container is returned for each item variation, even if the quantity sold value is '0'.
     *
     * @var \Nogrod\eBaySDK\Shopping\SellingStatusType $sellingStatus
     */
    private $sellingStatus = null;

    /**
     * This container provides information for a single variation (within a multiple-variation listing) that has a Strikethrough Price (STP) or a Minimum Advertised Price (MAP) discount pricing treatment. STP and MAP apply only to fixed-price listings. STP is available on the US, eBay Motors, UK, Germany, Canada (English and French), France, Italy, and Spain sites, while MAP is available only on the US site.
     *  <br><br>
     *  Discount pricing is available to qualified sellers (and their associated developers) who participate in the Discount Pricing Program. Once qualified, sellers receive a 'special account flag' (SAF) that allows them to apply Discount Pricing to both single-variation and multi-variation items. STP is intended for eBay partners and their sellers only.
     *  <br><br>
     *  As a seller listing Discount Price items, you are required to maintain records of your discount pricing in the event you are called upon to substantiate your item pricing.
     *
     * @var \Nogrod\eBaySDK\Shopping\DiscountPriceInfoType $discountPriceInfo
     */
    private $discountPriceInfo = null;

    /**
     * This field is the unique identifier of the product variation. This identfier can either be an eBay Product ID (also known as an ePID), or a Global Trade Item Number (GTIN) such as UPC, EAN, or ISBN. This field is only returned if the seller has supplied an ePID or GTIN value for the each variation within a multiple-variation listing.
     *  <br><br>
     *  The <b>type</b> attribute's value indicates the type of product identifier.
     *
     * @var \Nogrod\eBaySDK\Shopping\ProductIDType $productID
     */
    private $productID = null;

    /**
     * Gets as sKU
     *
     * A SKU (stock keeping unit) is a seller-defined identifier. It is only intended for the seller's use (not necessarily for buyers). A SKU value is not required, but many large sellers like to add SKU values for their products. If SKU values are defined for variations in a multiple-variation listing, the seller can specify a variation's SKU value in the <b>VariationSKU</b> field of a <b>GetSingleItem</b> call to retrieve details on that particular variation. The <b>VariationSKU</b> field is not available in the <b>GetMultipleItems</b> call.
     *  <br>
     *  <br>
     *  If specified, all SKU values must be unique within the <b>Variations</b>
     *  node. That is, no two variations within the same listing can have
     *  the same SKU.
     *  <br>
     *  <br>
     *  This field is only returned if the seller specified a SKU for the variation.
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
     * A SKU (stock keeping unit) is a seller-defined identifier. It is only intended for the seller's use (not necessarily for buyers). A SKU value is not required, but many large sellers like to add SKU values for their products. If SKU values are defined for variations in a multiple-variation listing, the seller can specify a variation's SKU value in the <b>VariationSKU</b> field of a <b>GetSingleItem</b> call to retrieve details on that particular variation. The <b>VariationSKU</b> field is not available in the <b>GetMultipleItems</b> call.
     *  <br>
     *  <br>
     *  If specified, all SKU values must be unique within the <b>Variations</b>
     *  node. That is, no two variations within the same listing can have
     *  the same SKU.
     *  <br>
     *  <br>
     *  This field is only returned if the seller specified a SKU for the variation.
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
     * Gets as startPrice
     *
     * The fixed price for this item variation.
     *  For example, a "Blue, Large" variation price could be USD 10.00,
     *  and a "Black, Medium" variation price could be USD 8.00.<br>
     *  <br>
     *  The <b>StartPrice</b> is mandatory for each variation, regardless of whether the price is the same for all variations, or if the price differs for different variations. This field will be returned for each <b>Variation</b> container.
     *
     * @return \Nogrod\eBaySDK\Shopping\AmountType
     */
    public function getStartPrice()
    {
        return $this->startPrice;
    }

    /**
     * Sets a new startPrice
     *
     * The fixed price for this item variation.
     *  For example, a "Blue, Large" variation price could be USD 10.00,
     *  and a "Black, Medium" variation price could be USD 8.00.<br>
     *  <br>
     *  The <b>StartPrice</b> is mandatory for each variation, regardless of whether the price is the same for all variations, or if the price differs for different variations. This field will be returned for each <b>Variation</b> container.
     *
     * @param \Nogrod\eBaySDK\Shopping\AmountType $startPrice
     * @return self
     */
    public function setStartPrice(\Nogrod\eBaySDK\Shopping\AmountType $startPrice)
    {
        $this->startPrice = $startPrice;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * This field shows the total quantity associated with the variation, including
     *  the quantity available and the
     *  quantity sold. To calculate the quantity available for sale, subtract the
     *  corresponding
     *  <b>Variation.SellingStatus.QuantitySold</b> value from this
     *  value.
     *  <br>
     *  <br>
     *  Generally, this integer value will be '1' or greater, but it is possible that the value will be '0' if the variation is currently out of stock, but the seller is using the 'Out-of-Stock Control' feature. When the seller uses the 'Out-of-Stock Control' feature, an item (or item variation) will still surface in search results, although that particular item (or item variation) will not be purchasable.
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
     * This field shows the total quantity associated with the variation, including
     *  the quantity available and the
     *  quantity sold. To calculate the quantity available for sale, subtract the
     *  corresponding
     *  <b>Variation.SellingStatus.QuantitySold</b> value from this
     *  value.
     *  <br>
     *  <br>
     *  Generally, this integer value will be '1' or greater, but it is possible that the value will be '0' if the variation is currently out of stock, but the seller is using the 'Out-of-Stock Control' feature. When the seller uses the 'Out-of-Stock Control' feature, an item (or item variation) will still surface in search results, although that particular item (or item variation) will not be purchasable.
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
     * A list of name/value pairs that uniquely identify the variation
     *  within the listing. All variations specify the same set of
     *  names, and each variation provides a unique combination of
     *  values for those names. For example, if the items vary by color and
     *  size, then every variation specifies Color and Size as names,
     *  and no two variations can specify the same combination of
     *  color and size values. Use this information to identify a
     *  variation of interest when you communicate with
     *  the seller.
     *  <br>
     *  <br>
     *  If your application supports PlaceOffer (in the Trading API),
     *  you use this information to uniquely identify the variation
     *  that you want to purchase.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\NameValueListType $nameValueList
     */
    public function addToVariationSpecifics(\Nogrod\eBaySDK\Shopping\NameValueListType $nameValueList)
    {
        $this->variationSpecifics[] = $nameValueList;
        return $this;
    }

    /**
     * isset variationSpecifics
     *
     * A list of name/value pairs that uniquely identify the variation
     *  within the listing. All variations specify the same set of
     *  names, and each variation provides a unique combination of
     *  values for those names. For example, if the items vary by color and
     *  size, then every variation specifies Color and Size as names,
     *  and no two variations can specify the same combination of
     *  color and size values. Use this information to identify a
     *  variation of interest when you communicate with
     *  the seller.
     *  <br>
     *  <br>
     *  If your application supports PlaceOffer (in the Trading API),
     *  you use this information to uniquely identify the variation
     *  that you want to purchase.
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
     * A list of name/value pairs that uniquely identify the variation
     *  within the listing. All variations specify the same set of
     *  names, and each variation provides a unique combination of
     *  values for those names. For example, if the items vary by color and
     *  size, then every variation specifies Color and Size as names,
     *  and no two variations can specify the same combination of
     *  color and size values. Use this information to identify a
     *  variation of interest when you communicate with
     *  the seller.
     *  <br>
     *  <br>
     *  If your application supports PlaceOffer (in the Trading API),
     *  you use this information to uniquely identify the variation
     *  that you want to purchase.
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
     * A list of name/value pairs that uniquely identify the variation
     *  within the listing. All variations specify the same set of
     *  names, and each variation provides a unique combination of
     *  values for those names. For example, if the items vary by color and
     *  size, then every variation specifies Color and Size as names,
     *  and no two variations can specify the same combination of
     *  color and size values. Use this information to identify a
     *  variation of interest when you communicate with
     *  the seller.
     *  <br>
     *  <br>
     *  If your application supports PlaceOffer (in the Trading API),
     *  you use this information to uniquely identify the variation
     *  that you want to purchase.
     *
     * @return \Nogrod\eBaySDK\Shopping\NameValueListType[]
     */
    public function getVariationSpecifics()
    {
        return $this->variationSpecifics;
    }

    /**
     * Sets a new variationSpecifics
     *
     * A list of name/value pairs that uniquely identify the variation
     *  within the listing. All variations specify the same set of
     *  names, and each variation provides a unique combination of
     *  values for those names. For example, if the items vary by color and
     *  size, then every variation specifies Color and Size as names,
     *  and no two variations can specify the same combination of
     *  color and size values. Use this information to identify a
     *  variation of interest when you communicate with
     *  the seller.
     *  <br>
     *  <br>
     *  If your application supports PlaceOffer (in the Trading API),
     *  you use this information to uniquely identify the variation
     *  that you want to purchase.
     *
     * @param \Nogrod\eBaySDK\Shopping\NameValueListType[] $variationSpecifics
     * @return self
     */
    public function setVariationSpecifics(array $variationSpecifics)
    {
        $this->variationSpecifics = $variationSpecifics;
        return $this;
    }

    /**
     * Gets as quantitySold
     *
     * This field is no longer Not used. The quantity sold for the variation is now shown in the <b>Variation.SellingStatus.QuantitySold</b> field.
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
     * This field is no longer Not used. The quantity sold for the variation is now shown in the <b>Variation.SellingStatus.QuantitySold</b> field.
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
     * Gets as sellingStatus
     *
     * This container shows the quantity sold for the variation, including the quantity that is sold through 'In-Store Pickup' (a logistics option that is only available to a select number of large US sellers with 'brick and mortar' stores). The <b>SellingStatus</b> container is returned for each item variation, even if the quantity sold value is '0'.
     *
     * @return \Nogrod\eBaySDK\Shopping\SellingStatusType
     */
    public function getSellingStatus()
    {
        return $this->sellingStatus;
    }

    /**
     * Sets a new sellingStatus
     *
     * This container shows the quantity sold for the variation, including the quantity that is sold through 'In-Store Pickup' (a logistics option that is only available to a select number of large US sellers with 'brick and mortar' stores). The <b>SellingStatus</b> container is returned for each item variation, even if the quantity sold value is '0'.
     *
     * @param \Nogrod\eBaySDK\Shopping\SellingStatusType $sellingStatus
     * @return self
     */
    public function setSellingStatus(\Nogrod\eBaySDK\Shopping\SellingStatusType $sellingStatus)
    {
        $this->sellingStatus = $sellingStatus;
        return $this;
    }

    /**
     * Gets as discountPriceInfo
     *
     * This container provides information for a single variation (within a multiple-variation listing) that has a Strikethrough Price (STP) or a Minimum Advertised Price (MAP) discount pricing treatment. STP and MAP apply only to fixed-price listings. STP is available on the US, eBay Motors, UK, Germany, Canada (English and French), France, Italy, and Spain sites, while MAP is available only on the US site.
     *  <br><br>
     *  Discount pricing is available to qualified sellers (and their associated developers) who participate in the Discount Pricing Program. Once qualified, sellers receive a 'special account flag' (SAF) that allows them to apply Discount Pricing to both single-variation and multi-variation items. STP is intended for eBay partners and their sellers only.
     *  <br><br>
     *  As a seller listing Discount Price items, you are required to maintain records of your discount pricing in the event you are called upon to substantiate your item pricing.
     *
     * @return \Nogrod\eBaySDK\Shopping\DiscountPriceInfoType
     */
    public function getDiscountPriceInfo()
    {
        return $this->discountPriceInfo;
    }

    /**
     * Sets a new discountPriceInfo
     *
     * This container provides information for a single variation (within a multiple-variation listing) that has a Strikethrough Price (STP) or a Minimum Advertised Price (MAP) discount pricing treatment. STP and MAP apply only to fixed-price listings. STP is available on the US, eBay Motors, UK, Germany, Canada (English and French), France, Italy, and Spain sites, while MAP is available only on the US site.
     *  <br><br>
     *  Discount pricing is available to qualified sellers (and their associated developers) who participate in the Discount Pricing Program. Once qualified, sellers receive a 'special account flag' (SAF) that allows them to apply Discount Pricing to both single-variation and multi-variation items. STP is intended for eBay partners and their sellers only.
     *  <br><br>
     *  As a seller listing Discount Price items, you are required to maintain records of your discount pricing in the event you are called upon to substantiate your item pricing.
     *
     * @param \Nogrod\eBaySDK\Shopping\DiscountPriceInfoType $discountPriceInfo
     * @return self
     */
    public function setDiscountPriceInfo(\Nogrod\eBaySDK\Shopping\DiscountPriceInfoType $discountPriceInfo)
    {
        $this->discountPriceInfo = $discountPriceInfo;
        return $this;
    }

    /**
     * Gets as productID
     *
     * This field is the unique identifier of the product variation. This identfier can either be an eBay Product ID (also known as an ePID), or a Global Trade Item Number (GTIN) such as UPC, EAN, or ISBN. This field is only returned if the seller has supplied an ePID or GTIN value for the each variation within a multiple-variation listing.
     *  <br><br>
     *  The <b>type</b> attribute's value indicates the type of product identifier.
     *
     * @return \Nogrod\eBaySDK\Shopping\ProductIDType
     */
    public function getProductID()
    {
        return $this->productID;
    }

    /**
     * Sets a new productID
     *
     * This field is the unique identifier of the product variation. This identfier can either be an eBay Product ID (also known as an ePID), or a Global Trade Item Number (GTIN) such as UPC, EAN, or ISBN. This field is only returned if the seller has supplied an ePID or GTIN value for the each variation within a multiple-variation listing.
     *  <br><br>
     *  The <b>type</b> attribute's value indicates the type of product identifier.
     *
     * @param \Nogrod\eBaySDK\Shopping\ProductIDType $productID
     * @return self
     */
    public function setProductID(\Nogrod\eBaySDK\Shopping\ProductIDType $productID)
    {
        $this->productID = $productID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getSKU();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SKU", $value);
        }
        $value = $this->getStartPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StartPrice", $value);
        }
        $value = $this->getQuantity();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Quantity", $value);
        }
        $value = $this->getVariationSpecifics();
        if (null !== $value && [] !== $this->getVariationSpecifics()) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VariationSpecifics", array_map(function ($v) {return ["NameValueList" => $v];}, $value));
        }
        $value = $this->getQuantitySold();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QuantitySold", $value);
        }
        $value = $this->getSellingStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellingStatus", $value);
        }
        $value = $this->getDiscountPriceInfo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DiscountPriceInfo", $value);
        }
        $value = $this->getProductID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductID", $value);
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
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}SKU');
        if (null !== $value) {
            $this->setSKU($value);
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}StartPrice');
        if (null !== $value) {
            $this->setStartPrice(\Nogrod\eBaySDK\Shopping\AmountType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}Quantity');
        if (null !== $value) {
            $this->setQuantity($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VariationSpecifics');
        if (null !== $value) {
            $this->setVariationSpecifics(array_map(function ($v) {return \Nogrod\eBaySDK\Shopping\NameValueListType::fromKeyValue(Func::mapObject($v, '{urn:ebay:apis:eBLBaseComponents}NameValueList'));}, $value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}QuantitySold');
        if (null !== $value) {
            $this->setQuantitySold($value);
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellingStatus');
        if (null !== $value) {
            $this->setSellingStatus(\Nogrod\eBaySDK\Shopping\SellingStatusType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}DiscountPriceInfo');
        if (null !== $value) {
            $this->setDiscountPriceInfo(\Nogrod\eBaySDK\Shopping\DiscountPriceInfoType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductID');
        if (null !== $value) {
            $this->setProductID(\Nogrod\eBaySDK\Shopping\ProductIDType::fromKeyValue($value));
        }
    }
}
