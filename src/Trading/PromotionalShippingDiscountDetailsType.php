<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PromotionalShippingDiscountDetailsType
 *
 * Details of a promotional shipping discount.
 * XSD Type: PromotionalShippingDiscountDetailsType
 */
class PromotionalShippingDiscountDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The type of promotional shipping discount that is detailed in the profile. If the discount type is <code>MaximumShippingCostPerOrder</code>, see <b>ShippingCost</b>. If the discount type is <code>ShippingCostXForAmountY</code>, see <b>ShippingCost</b> and <b>OrderAmount</b>. If the discount type is <code>ShippingCostXForItemCountN</code>, see <b>ShippingCost</b> and <b>ItemCount</b>.
     *
     * @var string $discountName
     */
    private $discountName = null;

    /**
     * This is shipping cost X when <b>DiscountName</b> is either <code>ShippingCostXForAmountY</code> or
     *  <code>ShippingCostXForItemCountN</code>, and is the maximum cost when <b>DiscountName</b> is
     *  <code>MaximumShippingCostPerOrder</code>.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $shippingCost
     */
    private $shippingCost = null;

    /**
     * This is the cost Y of the order (not including shipping cost)
     *  when <b>DiscountName</b> is set to <code>ShippingCostXForAmountY</code>.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $orderAmount
     */
    private $orderAmount = null;

    /**
     * This is the number of items when <b>DiscountName</b> is set to <code>ShippingCostXForItemsY</code>.
     *
     * @var int $itemCount
     */
    private $itemCount = null;

    /**
     * Gets as discountName
     *
     * The type of promotional shipping discount that is detailed in the profile. If the discount type is <code>MaximumShippingCostPerOrder</code>, see <b>ShippingCost</b>. If the discount type is <code>ShippingCostXForAmountY</code>, see <b>ShippingCost</b> and <b>OrderAmount</b>. If the discount type is <code>ShippingCostXForItemCountN</code>, see <b>ShippingCost</b> and <b>ItemCount</b>.
     *
     * @return string
     */
    public function getDiscountName()
    {
        return $this->discountName;
    }

    /**
     * Sets a new discountName
     *
     * The type of promotional shipping discount that is detailed in the profile. If the discount type is <code>MaximumShippingCostPerOrder</code>, see <b>ShippingCost</b>. If the discount type is <code>ShippingCostXForAmountY</code>, see <b>ShippingCost</b> and <b>OrderAmount</b>. If the discount type is <code>ShippingCostXForItemCountN</code>, see <b>ShippingCost</b> and <b>ItemCount</b>.
     *
     * @param string $discountName
     * @return self
     */
    public function setDiscountName($discountName)
    {
        $this->discountName = $discountName;
        return $this;
    }

    /**
     * Gets as shippingCost
     *
     * This is shipping cost X when <b>DiscountName</b> is either <code>ShippingCostXForAmountY</code> or
     *  <code>ShippingCostXForItemCountN</code>, and is the maximum cost when <b>DiscountName</b> is
     *  <code>MaximumShippingCostPerOrder</code>.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getShippingCost()
    {
        return $this->shippingCost;
    }

    /**
     * Sets a new shippingCost
     *
     * This is shipping cost X when <b>DiscountName</b> is either <code>ShippingCostXForAmountY</code> or
     *  <code>ShippingCostXForItemCountN</code>, and is the maximum cost when <b>DiscountName</b> is
     *  <code>MaximumShippingCostPerOrder</code>.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $shippingCost
     * @return self
     */
    public function setShippingCost(\Nogrod\eBaySDK\Trading\AmountType $shippingCost)
    {
        $this->shippingCost = $shippingCost;
        return $this;
    }

    /**
     * Gets as orderAmount
     *
     * This is the cost Y of the order (not including shipping cost)
     *  when <b>DiscountName</b> is set to <code>ShippingCostXForAmountY</code>.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getOrderAmount()
    {
        return $this->orderAmount;
    }

    /**
     * Sets a new orderAmount
     *
     * This is the cost Y of the order (not including shipping cost)
     *  when <b>DiscountName</b> is set to <code>ShippingCostXForAmountY</code>.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $orderAmount
     * @return self
     */
    public function setOrderAmount(\Nogrod\eBaySDK\Trading\AmountType $orderAmount)
    {
        $this->orderAmount = $orderAmount;
        return $this;
    }

    /**
     * Gets as itemCount
     *
     * This is the number of items when <b>DiscountName</b> is set to <code>ShippingCostXForItemsY</code>.
     *
     * @return int
     */
    public function getItemCount()
    {
        return $this->itemCount;
    }

    /**
     * Sets a new itemCount
     *
     * This is the number of items when <b>DiscountName</b> is set to <code>ShippingCostXForItemsY</code>.
     *
     * @param int $itemCount
     * @return self
     */
    public function setItemCount($itemCount)
    {
        $this->itemCount = $itemCount;
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
        $value = $this->discountName;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DiscountName', null, (string) $value);
        }
        $value = $this->shippingCost;
        if (null !== $value) {
            $writer->startElementNs(null, 'ShippingCost', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->orderAmount;
        if (null !== $value) {
            $writer->startElementNs(null, 'OrderAmount', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->itemCount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ItemCount', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\PromotionalShippingDiscountDetailsType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
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
                case 'DiscountName':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->discountName = $value;
                    }
                    return true;
                case 'ShippingCost':
                    $this->shippingCost = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'OrderAmount':
                    $this->orderAmount = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'ItemCount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->itemCount = (int) $value;
                    }
                    return true;
            }
        }
        return false;
    }
}
