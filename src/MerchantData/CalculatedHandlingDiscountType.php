<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CalculatedHandlingDiscountType
 *
 * Type defining the <b>CalculatedHandlingDiscount</b> container that is used in the <b>SetShippingDiscountProfiles</b> call to specify the rules used to determine package handling costs for an order in which calculated shipping is used.
 * XSD Type: CalculatedHandlingDiscountType
 */
class CalculatedHandlingDiscountType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The type of discount that is detailed in the profile.
     *  If the selection is <code>EachAdditionalAmount</code>, <code>EachAdditionalAmountOff</code> or
     *  <code>EachAdditionalPercentOff</code>, the value is set in the child element of same
     *  name in <b>CalculatedHandlingDiscount</b>. If the selection is <code>CombinedHandlingFee</code>,
     *  specify the amount in <b>CalculatedHandlingDiscount.OrderHandlingAmount</b>.
     *  If the selection is <code>IndividualHandlingFee</code>, the amount is determined by eBay
     *  by adding the fees of the individual items.
     *
     * @var string $discountName
     */
    private $discountName = null;

    /**
     * If specified, this is the fixed shipping cost to charge for an order,
     *  regardless of the number of items in the order.
     *  This field is mutually exclusive with the other amount and percentage
     *  fields within this type.
     *  This field only applies when the specified <b>DiscountName</b> value is <code>CombinedHandlingFee</code>.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $orderHandlingAmount
     */
    private $orderHandlingAmount = null;

    /**
     * The packaging/handling cost for each item beyond the first item (where the
     *  item with the highest packaging/handling cost is selected by eBay as the first
     *  item). Let's say the buyer purchases three items, each assigned a
     *  packaging/handling cost of $8, and the seller set <b>EachAdditionalAmount</b> to $6.
     *  The packaging/handling cost for three items would normally be $24, but since
     *  the seller specified $6, the total packaging/handling cost would be $8 + $6 +
     *  $6, or $20.
     *  This field is mutually exclusive with the other amount and percentage
     *  fields within this type.
     *  This field only applies when the <b>DiscountName</b> value is <code>EachAdditionalAmount</code>.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $eachAdditionalAmount
     */
    private $eachAdditionalAmount = null;

    /**
     * The amount by which to reduce the packaging/handling cost for each item beyond
     *  the first item (where the item with the highest packaging/handling cost is
     *  selected by eBay as the first item). Let's say the buyer purchases three
     *  items, each assigned a packaging/handling cost of $8, and the seller set
     *  <b>EachAdditionalAmountOff</b> to $2. The packaging/handling cost for three items
     *  would normally be $24, but since the seller specified $2, the total
     *  packaging/handling cost would be $24 - (two additional items x $2), or $20.
     *  This field is mutually exclusive with the other amount and percentage
     *  fields within this type.
     *  This field only applies when the <b>DiscountName</b> value is <code>EachAdditionalOffAmount</code>.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $eachAdditionalOffAmount
     */
    private $eachAdditionalOffAmount = null;

    /**
     * The percentage by which to reduce the packaging/handling cost for each item
     *  beyond the first item (where the item with the highest packaging/handling cost
     *  is selected by eBay as the first item). Let's say the buyer purchases three
     *  items, each assigned a packaging/handling cost of $8, and the seller set
     *  <b>EachAdditionalPercentOff</b> to 0.25. The packaging/handling cost for three items
     *  would normally be $24, but since the seller specified 0.25 ($2 out of 8), the
     *  total packaging/handling cost would be $24 - (two additional items x $2), or
     *  $20.
     *  This field is mutually exclusive with the amount fields within this type.
     *  This field only applies when the <b>DiscountName</b> value is <code>EachAdditionalPercentOff</code>.
     *
     * @var float $eachAdditionalPercentOff
     */
    private $eachAdditionalPercentOff = null;

    /**
     * Gets as discountName
     *
     * The type of discount that is detailed in the profile.
     *  If the selection is <code>EachAdditionalAmount</code>, <code>EachAdditionalAmountOff</code> or
     *  <code>EachAdditionalPercentOff</code>, the value is set in the child element of same
     *  name in <b>CalculatedHandlingDiscount</b>. If the selection is <code>CombinedHandlingFee</code>,
     *  specify the amount in <b>CalculatedHandlingDiscount.OrderHandlingAmount</b>.
     *  If the selection is <code>IndividualHandlingFee</code>, the amount is determined by eBay
     *  by adding the fees of the individual items.
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
     * The type of discount that is detailed in the profile.
     *  If the selection is <code>EachAdditionalAmount</code>, <code>EachAdditionalAmountOff</code> or
     *  <code>EachAdditionalPercentOff</code>, the value is set in the child element of same
     *  name in <b>CalculatedHandlingDiscount</b>. If the selection is <code>CombinedHandlingFee</code>,
     *  specify the amount in <b>CalculatedHandlingDiscount.OrderHandlingAmount</b>.
     *  If the selection is <code>IndividualHandlingFee</code>, the amount is determined by eBay
     *  by adding the fees of the individual items.
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
     * Gets as orderHandlingAmount
     *
     * If specified, this is the fixed shipping cost to charge for an order,
     *  regardless of the number of items in the order.
     *  This field is mutually exclusive with the other amount and percentage
     *  fields within this type.
     *  This field only applies when the specified <b>DiscountName</b> value is <code>CombinedHandlingFee</code>.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getOrderHandlingAmount()
    {
        return $this->orderHandlingAmount;
    }

    /**
     * Sets a new orderHandlingAmount
     *
     * If specified, this is the fixed shipping cost to charge for an order,
     *  regardless of the number of items in the order.
     *  This field is mutually exclusive with the other amount and percentage
     *  fields within this type.
     *  This field only applies when the specified <b>DiscountName</b> value is <code>CombinedHandlingFee</code>.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $orderHandlingAmount
     * @return self
     */
    public function setOrderHandlingAmount(\Nogrod\eBaySDK\MerchantData\AmountType $orderHandlingAmount)
    {
        $this->orderHandlingAmount = $orderHandlingAmount;
        return $this;
    }

    /**
     * Gets as eachAdditionalAmount
     *
     * The packaging/handling cost for each item beyond the first item (where the
     *  item with the highest packaging/handling cost is selected by eBay as the first
     *  item). Let's say the buyer purchases three items, each assigned a
     *  packaging/handling cost of $8, and the seller set <b>EachAdditionalAmount</b> to $6.
     *  The packaging/handling cost for three items would normally be $24, but since
     *  the seller specified $6, the total packaging/handling cost would be $8 + $6 +
     *  $6, or $20.
     *  This field is mutually exclusive with the other amount and percentage
     *  fields within this type.
     *  This field only applies when the <b>DiscountName</b> value is <code>EachAdditionalAmount</code>.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getEachAdditionalAmount()
    {
        return $this->eachAdditionalAmount;
    }

    /**
     * Sets a new eachAdditionalAmount
     *
     * The packaging/handling cost for each item beyond the first item (where the
     *  item with the highest packaging/handling cost is selected by eBay as the first
     *  item). Let's say the buyer purchases three items, each assigned a
     *  packaging/handling cost of $8, and the seller set <b>EachAdditionalAmount</b> to $6.
     *  The packaging/handling cost for three items would normally be $24, but since
     *  the seller specified $6, the total packaging/handling cost would be $8 + $6 +
     *  $6, or $20.
     *  This field is mutually exclusive with the other amount and percentage
     *  fields within this type.
     *  This field only applies when the <b>DiscountName</b> value is <code>EachAdditionalAmount</code>.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $eachAdditionalAmount
     * @return self
     */
    public function setEachAdditionalAmount(\Nogrod\eBaySDK\MerchantData\AmountType $eachAdditionalAmount)
    {
        $this->eachAdditionalAmount = $eachAdditionalAmount;
        return $this;
    }

    /**
     * Gets as eachAdditionalOffAmount
     *
     * The amount by which to reduce the packaging/handling cost for each item beyond
     *  the first item (where the item with the highest packaging/handling cost is
     *  selected by eBay as the first item). Let's say the buyer purchases three
     *  items, each assigned a packaging/handling cost of $8, and the seller set
     *  <b>EachAdditionalAmountOff</b> to $2. The packaging/handling cost for three items
     *  would normally be $24, but since the seller specified $2, the total
     *  packaging/handling cost would be $24 - (two additional items x $2), or $20.
     *  This field is mutually exclusive with the other amount and percentage
     *  fields within this type.
     *  This field only applies when the <b>DiscountName</b> value is <code>EachAdditionalOffAmount</code>.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getEachAdditionalOffAmount()
    {
        return $this->eachAdditionalOffAmount;
    }

    /**
     * Sets a new eachAdditionalOffAmount
     *
     * The amount by which to reduce the packaging/handling cost for each item beyond
     *  the first item (where the item with the highest packaging/handling cost is
     *  selected by eBay as the first item). Let's say the buyer purchases three
     *  items, each assigned a packaging/handling cost of $8, and the seller set
     *  <b>EachAdditionalAmountOff</b> to $2. The packaging/handling cost for three items
     *  would normally be $24, but since the seller specified $2, the total
     *  packaging/handling cost would be $24 - (two additional items x $2), or $20.
     *  This field is mutually exclusive with the other amount and percentage
     *  fields within this type.
     *  This field only applies when the <b>DiscountName</b> value is <code>EachAdditionalOffAmount</code>.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $eachAdditionalOffAmount
     * @return self
     */
    public function setEachAdditionalOffAmount(\Nogrod\eBaySDK\MerchantData\AmountType $eachAdditionalOffAmount)
    {
        $this->eachAdditionalOffAmount = $eachAdditionalOffAmount;
        return $this;
    }

    /**
     * Gets as eachAdditionalPercentOff
     *
     * The percentage by which to reduce the packaging/handling cost for each item
     *  beyond the first item (where the item with the highest packaging/handling cost
     *  is selected by eBay as the first item). Let's say the buyer purchases three
     *  items, each assigned a packaging/handling cost of $8, and the seller set
     *  <b>EachAdditionalPercentOff</b> to 0.25. The packaging/handling cost for three items
     *  would normally be $24, but since the seller specified 0.25 ($2 out of 8), the
     *  total packaging/handling cost would be $24 - (two additional items x $2), or
     *  $20.
     *  This field is mutually exclusive with the amount fields within this type.
     *  This field only applies when the <b>DiscountName</b> value is <code>EachAdditionalPercentOff</code>.
     *
     * @return float
     */
    public function getEachAdditionalPercentOff()
    {
        return $this->eachAdditionalPercentOff;
    }

    /**
     * Sets a new eachAdditionalPercentOff
     *
     * The percentage by which to reduce the packaging/handling cost for each item
     *  beyond the first item (where the item with the highest packaging/handling cost
     *  is selected by eBay as the first item). Let's say the buyer purchases three
     *  items, each assigned a packaging/handling cost of $8, and the seller set
     *  <b>EachAdditionalPercentOff</b> to 0.25. The packaging/handling cost for three items
     *  would normally be $24, but since the seller specified 0.25 ($2 out of 8), the
     *  total packaging/handling cost would be $24 - (two additional items x $2), or
     *  $20.
     *  This field is mutually exclusive with the amount fields within this type.
     *  This field only applies when the <b>DiscountName</b> value is <code>EachAdditionalPercentOff</code>.
     *
     * @param float $eachAdditionalPercentOff
     * @return self
     */
    public function setEachAdditionalPercentOff($eachAdditionalPercentOff)
    {
        $this->eachAdditionalPercentOff = $eachAdditionalPercentOff;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getDiscountName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DiscountName", $value);
        }
        $value = $this->getOrderHandlingAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderHandlingAmount", $value);
        }
        $value = $this->getEachAdditionalAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EachAdditionalAmount", $value);
        }
        $value = $this->getEachAdditionalOffAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EachAdditionalOffAmount", $value);
        }
        $value = $this->getEachAdditionalPercentOff();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EachAdditionalPercentOff", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderHandlingAmount');
        if (null !== $value) {
            $this->setOrderHandlingAmount(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EachAdditionalAmount');
        if (null !== $value) {
            $this->setEachAdditionalAmount(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EachAdditionalOffAmount');
        if (null !== $value) {
            $this->setEachAdditionalOffAmount(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EachAdditionalPercentOff');
        if (null !== $value) {
            $this->setEachAdditionalPercentOff($value);
        }
    }
}
