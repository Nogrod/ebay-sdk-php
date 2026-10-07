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
        if (!is_array($this->sellerDiscount)) {
            throw new \LogicException('sellerDiscount is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\SellerDiscountType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\SellerDiscountType> $sellerDiscount
     * @return self
     */
    public function setSellerDiscount(iterable $sellerDiscount)
    {
        $this->sellerDiscount = $sellerDiscount;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->originalItemPrice;
        if (null !== $value) {
            $writer->startElementNs(null, 'OriginalItemPrice', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->originalItemShippingCost;
        if (null !== $value) {
            $writer->startElementNs(null, 'OriginalItemShippingCost', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->originalShippingService;
        if (null !== $value) {
            $writer->writeElementNs(null, 'OriginalShippingService', null, (string) $value);
        }
        $value = $this->sellerDiscount;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'SellerDiscount', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\SellerDiscountsType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->sellerDiscount = [];
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'OriginalItemPrice':
                    $this->originalItemPrice = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'OriginalItemShippingCost':
                    $this->originalItemShippingCost = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'OriginalShippingService':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->originalShippingService = $value;
                    }
                    return true;
                case 'SellerDiscount':
                    $this->sellerDiscount[] = \Nogrod\eBaySDK\Trading\SellerDiscountType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
