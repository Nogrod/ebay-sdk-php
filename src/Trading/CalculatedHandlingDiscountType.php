<?php

namespace Nogrod\eBaySDK\Trading;

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
     * @var \Nogrod\eBaySDK\Trading\AmountType $orderHandlingAmount
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
     * @var \Nogrod\eBaySDK\Trading\AmountType $eachAdditionalAmount
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
     * @var \Nogrod\eBaySDK\Trading\AmountType $eachAdditionalOffAmount
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
     * @return \Nogrod\eBaySDK\Trading\AmountType
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
     * @param \Nogrod\eBaySDK\Trading\AmountType $orderHandlingAmount
     * @return self
     */
    public function setOrderHandlingAmount(\Nogrod\eBaySDK\Trading\AmountType $orderHandlingAmount)
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
     * @return \Nogrod\eBaySDK\Trading\AmountType
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
     * @param \Nogrod\eBaySDK\Trading\AmountType $eachAdditionalAmount
     * @return self
     */
    public function setEachAdditionalAmount(\Nogrod\eBaySDK\Trading\AmountType $eachAdditionalAmount)
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
     * @return \Nogrod\eBaySDK\Trading\AmountType
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
     * @param \Nogrod\eBaySDK\Trading\AmountType $eachAdditionalOffAmount
     * @return self
     */
    public function setEachAdditionalOffAmount(\Nogrod\eBaySDK\Trading\AmountType $eachAdditionalOffAmount)
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
        $value = $this->orderHandlingAmount;
        if (null !== $value) {
            $writer->startElementNs(null, 'OrderHandlingAmount', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->eachAdditionalAmount;
        if (null !== $value) {
            $writer->startElementNs(null, 'EachAdditionalAmount', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->eachAdditionalOffAmount;
        if (null !== $value) {
            $writer->startElementNs(null, 'EachAdditionalOffAmount', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->eachAdditionalPercentOff;
        if (null !== $value) {
            $writer->writeElementNs(null, 'EachAdditionalPercentOff', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\CalculatedHandlingDiscountType
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
                case 'OrderHandlingAmount':
                    $this->orderHandlingAmount = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'EachAdditionalAmount':
                    $this->eachAdditionalAmount = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'EachAdditionalOffAmount':
                    $this->eachAdditionalOffAmount = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'EachAdditionalPercentOff':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->eachAdditionalPercentOff = (float) $value;
                    }
                    return true;
            }
        }
        return false;
    }
}
