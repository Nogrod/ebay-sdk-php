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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getDiscountName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DiscountName", $value);
        }
        $value = $this->getShippingCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingCost", $value);
        }
        $value = $this->getOrderAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderAmount", $value);
        }
        $value = $this->getItemCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemCount", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DiscountName');
        if (null !== $value) {
            $this->setDiscountName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingCost');
        if (null !== $value) {
            $this->setShippingCost(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderAmount');
        if (null !== $value) {
            $this->setOrderAmount(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemCount');
        if (null !== $value) {
            $this->setItemCount($value);
        }
    }
}
