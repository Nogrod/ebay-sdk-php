<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellerDiscountsType
 *
 * Type defining the <b>SellerDiscounts</b> container, which consists of one or
 *  more <b>SellerDiscount</b> nodes, as well as the original purchase price and
 *  shipping cost of the order line item.
 * XSD Type: SellerDiscountsType
 */
class SellerDiscountsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The original purchase price of the order line item (before any seller discounts are
     *  applied).
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $originalItemPrice
     */
    private $originalItemPrice = null;

    /**
     * The original shipping cost for the order line item (before any seller
     *  discounts are applied).
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $originalItemShippingCost
     */
    private $originalItemShippingCost = null;

    /**
     * The original shipping service offered by the seller to ship an item to a buyer.
     *
     * @var string $originalShippingService
     */
    private $originalShippingService = null;

    /**
     * A container consisting of name and ID of the seller's discount campaign, as well as the discount amount that is being applied to the order line item.
     *
     * @var \Nogrod\eBaySDK\Trading\SellerDiscountType[] $sellerDiscount
     */
    private $sellerDiscount = [

    ];

    /**
     * Gets as originalItemPrice
     *
     * The original purchase price of the order line item (before any seller discounts are
     *  applied).
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getOriginalItemPrice()
    {
        return $this->originalItemPrice;
    }

    /**
     * Sets a new originalItemPrice
     *
     * The original purchase price of the order line item (before any seller discounts are
     *  applied).
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $originalItemPrice
     * @return self
     */
    public function setOriginalItemPrice(\Nogrod\eBaySDK\Trading\AmountType $originalItemPrice)
    {
        $this->originalItemPrice = $originalItemPrice;
        return $this;
    }

    /**
     * Gets as originalItemShippingCost
     *
     * The original shipping cost for the order line item (before any seller
     *  discounts are applied).
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getOriginalItemShippingCost()
    {
        return $this->originalItemShippingCost;
    }

    /**
     * Sets a new originalItemShippingCost
     *
     * The original shipping cost for the order line item (before any seller
     *  discounts are applied).
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $originalItemShippingCost
     * @return self
     */
    public function setOriginalItemShippingCost(\Nogrod\eBaySDK\Trading\AmountType $originalItemShippingCost)
    {
        $this->originalItemShippingCost = $originalItemShippingCost;
        return $this;
    }

    /**
     * Gets as originalShippingService
     *
     * The original shipping service offered by the seller to ship an item to a buyer.
     *
     * @return string
     */
    public function getOriginalShippingService()
    {
        return $this->originalShippingService;
    }

    /**
     * Sets a new originalShippingService
     *
     * The original shipping service offered by the seller to ship an item to a buyer.
     *
     * @param string $originalShippingService
     * @return self
     */
    public function setOriginalShippingService($originalShippingService)
    {
        $this->originalShippingService = $originalShippingService;
        return $this;
    }

    /**
     * Adds as sellerDiscount
     *
     * A container consisting of name and ID of the seller's discount campaign, as well as the discount amount that is being applied to the order line item.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\SellerDiscountType $sellerDiscount
     */
    public function addToSellerDiscount(\Nogrod\eBaySDK\Trading\SellerDiscountType $sellerDiscount)
    {
        $this->sellerDiscount[] = $sellerDiscount;
        return $this;
    }

    /**
     * isset sellerDiscount
     *
     * A container consisting of name and ID of the seller's discount campaign, as well as the discount amount that is being applied to the order line item.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSellerDiscount($index)
    {
        return isset($this->sellerDiscount[$index]);
    }

    /**
     * unset sellerDiscount
     *
     * A container consisting of name and ID of the seller's discount campaign, as well as the discount amount that is being applied to the order line item.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSellerDiscount($index)
    {
        unset($this->sellerDiscount[$index]);
    }

    /**
     * Gets as sellerDiscount
     *
     * A container consisting of name and ID of the seller's discount campaign, as well as the discount amount that is being applied to the order line item.
     *
     * @return \Nogrod\eBaySDK\Trading\SellerDiscountType[]
     */
    public function getSellerDiscount()
    {
        return $this->sellerDiscount;
    }

    /**
     * Sets a new sellerDiscount
     *
     * A container consisting of name and ID of the seller's discount campaign, as well as the discount amount that is being applied to the order line item.
     *
     * @param \Nogrod\eBaySDK\Trading\SellerDiscountType[] $sellerDiscount
     * @return self
     */
    public function setSellerDiscount(array $sellerDiscount)
    {
        $this->sellerDiscount = $sellerDiscount;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getOriginalItemPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OriginalItemPrice", $value);
        }
        $value = $this->getOriginalItemShippingCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OriginalItemShippingCost", $value);
        }
        $value = $this->getOriginalShippingService();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OriginalShippingService", $value);
        }
        $value = $this->getSellerDiscount();
        if (null !== $value && [] !== $this->getSellerDiscount()) {
            $writer->write(array_map(function ($v) {return ["SellerDiscount" => $v];}, $value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\SellerDiscountsType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}OriginalItemPrice');
        if (null !== $value) {
            $this->setOriginalItemPrice(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}OriginalItemShippingCost');
        if (null !== $value) {
            $this->setOriginalItemShippingCost(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}OriginalShippingService');
        if (null !== $value) {
            $this->setOriginalShippingService($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerDiscount');
        if (null !== $value) {
            $this->setSellerDiscount(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\SellerDiscountType::fromKeyValue($v);}, $value));
        }
    }
}
