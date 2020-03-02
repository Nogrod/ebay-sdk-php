<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DiscountProfileType
 *
 * Details of a flat or calculated shipping discount rule. Shipping Discount Rules can be set up through the <b>SetShippingDiscountProfiles</b> call or through My eBay.
 * XSD Type: DiscountProfileType
 */
class DiscountProfileType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The unique eBay-created unique identifier for the shipping discount, assigned when the shipping discount rule is created.
     *  <br/>
     *  In a <b>SetShippingDiscountProfiles</b> call,
     *  <ul>
     *  <li>If the value of <b>ModifyActionCode</b> is set to <code>Add</code>, this field is not applicable and is ignored <li>If provided.</li>
     *  <li>If the value of <b>Mod <li>IfyActionCode</b> is set to <code>Update</code>, all fields of the modified rule must be provided, even if the values are not changing.</li>
     *  <li>If the value of <b>ModifyActionCode</b> is set to <code>Delete</code>, either the <b>DiscountProfileID</b> value or is <b>DiscountProfileName</b> value is required, the <b>MappingDiscountProfileID</b> is optional, and all other fields of the <b>DiscountProfile</b> container are ignored.</li>
     *  </ul>
     *
     * @var string $discountProfileID
     */
    private $discountProfileID = null;

    /**
     * The seller-provided title for the shipping discount rule.
     *  <br/>
     *  In a <b>SetShippingDiscountProfiles</b> call,
     *  <ul>
     *  <li>If the value of <b>ModifyActionCode</b> is set to <code>Add</code>, this field is ignored (if provided) if this is the first shipping discount rule being created, but this field is required if there is more than one existing shipping discount rule of that type (flat rate or calculated)</li>
     *  <li>If the value of <b>ModifyActionCode</b> is set to <code>Update</code>, all fields of the modified rule must be provided, even if the values are not changing</li>
     *  <li>If the value of <b>ModifyActionCode</b> is set to <code>Delete</code>, the <b>DiscountProfileID</b> is required, the <b>MappingDiscountProfileID</b> is optional, and all other fields of the <b>DiscountProfile</b> container are ignored</li>
     *  <li>If the value of <b>ModifyActionCode</b> is set to <code>Delete</code>, either the <b>DiscountProfileID</b> value or is <b>DiscountProfileName</b> value is required, the <b>MappingDiscountProfileID</b> is optional, and all other fields of the <b>DiscountProfile</b> container are ignored</li>
     *  </ul>
     *
     * @var string $discountProfileName
     */
    private $discountProfileName = null;

    /**
     * The cost to ship each item beyond the first item (where the item with the highest shipping cost is selected by eBay as the first item). Let's say the buyer purchases three items, each set to ship for $8, and the seller set the <b>EachAdditionalAmount</b> to $6. The cost to ship three items would normally be $24, but since the seller specified $6, the total shipping cost would be $8 + $6 + $6, or $20. This field is only applicable for flat-rate shipping.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $eachAdditionalAmount
     */
    private $eachAdditionalAmount = null;

    /**
     * The amount by which to reduce the cost to ship each item beyond the first item (where the item with the highest shipping cost is selected by eBay as the first item). Let's say the buyer purchases three items, each set to ship for $8, and the seller set <b>EachAdditionalAmountOff</b> to $2. The cost to ship three items would normally be $24, but since the seller specified $2, the total shipping cost would be <i>$24 - (two additional items x $2)</i>, or $20. This field is only applicable for flat-rate shipping.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $eachAdditionalAmountOff
     */
    private $eachAdditionalAmountOff = null;

    /**
     * The percentage by which to reduce the cost to ship each item beyond the first item (where the item with the highest shipping cost is selected by eBay as the first item). Let's say the buyer purchases three items, each set to ship for $8, and the seller set <b>EachAdditionalPercentOff</b> to 0.25. The cost to ship three items would normally be $24, but since the seller specified 0.25 ($2 out of $8), the total shipping cost would be <i>$24 - (two additional items x $2)</i>, or $20. This field is only applicable for flat-rate shipping.
     *
     * @var float $eachAdditionalPercentOff
     */
    private $eachAdditionalPercentOff = null;

    /**
     * The amount of weight to subtract for each item beyond the first item before shipping costs are calculated. For example, there may be less packing material when the items are combined in one box than if they were shipped individually. Let's say the buyer purchases three items, each 10 oz. in weight, and the seller set <b>WeightOff</b> to 2 oz. The combined weight would be 30 oz., but since the seller specified 2 oz. off, the total weight for shipping cost calculation would be <i>30 oz. - (two additional items x 2 oz.)</i>, or 26 oz. This field is only applicable for calculated shipping.
     *
     * @var \Nogrod\eBaySDK\Trading\MeasureType $weightOff
     */
    private $weightOff = null;

    /**
     * For <b>SetShippingDiscountProfiles</b>, if <b>MappedDiscountProfileID</b> is omitted when
     *  <b>ModifyActionCode</b> is set to <code>Delete</code>, any listings currently using the profile
     *  identified by <b>DiscountProfileID</b> will have that profile removed.
     *
     * @var string $mappedDiscountProfileID
     */
    private $mappedDiscountProfileID = null;

    /**
     * Gets as discountProfileID
     *
     * The unique eBay-created unique identifier for the shipping discount, assigned when the shipping discount rule is created.
     *  <br/>
     *  In a <b>SetShippingDiscountProfiles</b> call,
     *  <ul>
     *  <li>If the value of <b>ModifyActionCode</b> is set to <code>Add</code>, this field is not applicable and is ignored <li>If provided.</li>
     *  <li>If the value of <b>Mod <li>IfyActionCode</b> is set to <code>Update</code>, all fields of the modified rule must be provided, even if the values are not changing.</li>
     *  <li>If the value of <b>ModifyActionCode</b> is set to <code>Delete</code>, either the <b>DiscountProfileID</b> value or is <b>DiscountProfileName</b> value is required, the <b>MappingDiscountProfileID</b> is optional, and all other fields of the <b>DiscountProfile</b> container are ignored.</li>
     *  </ul>
     *
     * @return string
     */
    public function getDiscountProfileID()
    {
        return $this->discountProfileID;
    }

    /**
     * Sets a new discountProfileID
     *
     * The unique eBay-created unique identifier for the shipping discount, assigned when the shipping discount rule is created.
     *  <br/>
     *  In a <b>SetShippingDiscountProfiles</b> call,
     *  <ul>
     *  <li>If the value of <b>ModifyActionCode</b> is set to <code>Add</code>, this field is not applicable and is ignored <li>If provided.</li>
     *  <li>If the value of <b>Mod <li>IfyActionCode</b> is set to <code>Update</code>, all fields of the modified rule must be provided, even if the values are not changing.</li>
     *  <li>If the value of <b>ModifyActionCode</b> is set to <code>Delete</code>, either the <b>DiscountProfileID</b> value or is <b>DiscountProfileName</b> value is required, the <b>MappingDiscountProfileID</b> is optional, and all other fields of the <b>DiscountProfile</b> container are ignored.</li>
     *  </ul>
     *
     * @param string $discountProfileID
     * @return self
     */
    public function setDiscountProfileID($discountProfileID)
    {
        $this->discountProfileID = $discountProfileID;
        return $this;
    }

    /**
     * Gets as discountProfileName
     *
     * The seller-provided title for the shipping discount rule.
     *  <br/>
     *  In a <b>SetShippingDiscountProfiles</b> call,
     *  <ul>
     *  <li>If the value of <b>ModifyActionCode</b> is set to <code>Add</code>, this field is ignored (if provided) if this is the first shipping discount rule being created, but this field is required if there is more than one existing shipping discount rule of that type (flat rate or calculated)</li>
     *  <li>If the value of <b>ModifyActionCode</b> is set to <code>Update</code>, all fields of the modified rule must be provided, even if the values are not changing</li>
     *  <li>If the value of <b>ModifyActionCode</b> is set to <code>Delete</code>, the <b>DiscountProfileID</b> is required, the <b>MappingDiscountProfileID</b> is optional, and all other fields of the <b>DiscountProfile</b> container are ignored</li>
     *  <li>If the value of <b>ModifyActionCode</b> is set to <code>Delete</code>, either the <b>DiscountProfileID</b> value or is <b>DiscountProfileName</b> value is required, the <b>MappingDiscountProfileID</b> is optional, and all other fields of the <b>DiscountProfile</b> container are ignored</li>
     *  </ul>
     *
     * @return string
     */
    public function getDiscountProfileName()
    {
        return $this->discountProfileName;
    }

    /**
     * Sets a new discountProfileName
     *
     * The seller-provided title for the shipping discount rule.
     *  <br/>
     *  In a <b>SetShippingDiscountProfiles</b> call,
     *  <ul>
     *  <li>If the value of <b>ModifyActionCode</b> is set to <code>Add</code>, this field is ignored (if provided) if this is the first shipping discount rule being created, but this field is required if there is more than one existing shipping discount rule of that type (flat rate or calculated)</li>
     *  <li>If the value of <b>ModifyActionCode</b> is set to <code>Update</code>, all fields of the modified rule must be provided, even if the values are not changing</li>
     *  <li>If the value of <b>ModifyActionCode</b> is set to <code>Delete</code>, the <b>DiscountProfileID</b> is required, the <b>MappingDiscountProfileID</b> is optional, and all other fields of the <b>DiscountProfile</b> container are ignored</li>
     *  <li>If the value of <b>ModifyActionCode</b> is set to <code>Delete</code>, either the <b>DiscountProfileID</b> value or is <b>DiscountProfileName</b> value is required, the <b>MappingDiscountProfileID</b> is optional, and all other fields of the <b>DiscountProfile</b> container are ignored</li>
     *  </ul>
     *
     * @param string $discountProfileName
     * @return self
     */
    public function setDiscountProfileName($discountProfileName)
    {
        $this->discountProfileName = $discountProfileName;
        return $this;
    }

    /**
     * Gets as eachAdditionalAmount
     *
     * The cost to ship each item beyond the first item (where the item with the highest shipping cost is selected by eBay as the first item). Let's say the buyer purchases three items, each set to ship for $8, and the seller set the <b>EachAdditionalAmount</b> to $6. The cost to ship three items would normally be $24, but since the seller specified $6, the total shipping cost would be $8 + $6 + $6, or $20. This field is only applicable for flat-rate shipping.
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
     * The cost to ship each item beyond the first item (where the item with the highest shipping cost is selected by eBay as the first item). Let's say the buyer purchases three items, each set to ship for $8, and the seller set the <b>EachAdditionalAmount</b> to $6. The cost to ship three items would normally be $24, but since the seller specified $6, the total shipping cost would be $8 + $6 + $6, or $20. This field is only applicable for flat-rate shipping.
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
     * Gets as eachAdditionalAmountOff
     *
     * The amount by which to reduce the cost to ship each item beyond the first item (where the item with the highest shipping cost is selected by eBay as the first item). Let's say the buyer purchases three items, each set to ship for $8, and the seller set <b>EachAdditionalAmountOff</b> to $2. The cost to ship three items would normally be $24, but since the seller specified $2, the total shipping cost would be <i>$24 - (two additional items x $2)</i>, or $20. This field is only applicable for flat-rate shipping.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getEachAdditionalAmountOff()
    {
        return $this->eachAdditionalAmountOff;
    }

    /**
     * Sets a new eachAdditionalAmountOff
     *
     * The amount by which to reduce the cost to ship each item beyond the first item (where the item with the highest shipping cost is selected by eBay as the first item). Let's say the buyer purchases three items, each set to ship for $8, and the seller set <b>EachAdditionalAmountOff</b> to $2. The cost to ship three items would normally be $24, but since the seller specified $2, the total shipping cost would be <i>$24 - (two additional items x $2)</i>, or $20. This field is only applicable for flat-rate shipping.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $eachAdditionalAmountOff
     * @return self
     */
    public function setEachAdditionalAmountOff(\Nogrod\eBaySDK\Trading\AmountType $eachAdditionalAmountOff)
    {
        $this->eachAdditionalAmountOff = $eachAdditionalAmountOff;
        return $this;
    }

    /**
     * Gets as eachAdditionalPercentOff
     *
     * The percentage by which to reduce the cost to ship each item beyond the first item (where the item with the highest shipping cost is selected by eBay as the first item). Let's say the buyer purchases three items, each set to ship for $8, and the seller set <b>EachAdditionalPercentOff</b> to 0.25. The cost to ship three items would normally be $24, but since the seller specified 0.25 ($2 out of $8), the total shipping cost would be <i>$24 - (two additional items x $2)</i>, or $20. This field is only applicable for flat-rate shipping.
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
     * The percentage by which to reduce the cost to ship each item beyond the first item (where the item with the highest shipping cost is selected by eBay as the first item). Let's say the buyer purchases three items, each set to ship for $8, and the seller set <b>EachAdditionalPercentOff</b> to 0.25. The cost to ship three items would normally be $24, but since the seller specified 0.25 ($2 out of $8), the total shipping cost would be <i>$24 - (two additional items x $2)</i>, or $20. This field is only applicable for flat-rate shipping.
     *
     * @param float $eachAdditionalPercentOff
     * @return self
     */
    public function setEachAdditionalPercentOff($eachAdditionalPercentOff)
    {
        $this->eachAdditionalPercentOff = $eachAdditionalPercentOff;
        return $this;
    }

    /**
     * Gets as weightOff
     *
     * The amount of weight to subtract for each item beyond the first item before shipping costs are calculated. For example, there may be less packing material when the items are combined in one box than if they were shipped individually. Let's say the buyer purchases three items, each 10 oz. in weight, and the seller set <b>WeightOff</b> to 2 oz. The combined weight would be 30 oz., but since the seller specified 2 oz. off, the total weight for shipping cost calculation would be <i>30 oz. - (two additional items x 2 oz.)</i>, or 26 oz. This field is only applicable for calculated shipping.
     *
     * @return \Nogrod\eBaySDK\Trading\MeasureType
     */
    public function getWeightOff()
    {
        return $this->weightOff;
    }

    /**
     * Sets a new weightOff
     *
     * The amount of weight to subtract for each item beyond the first item before shipping costs are calculated. For example, there may be less packing material when the items are combined in one box than if they were shipped individually. Let's say the buyer purchases three items, each 10 oz. in weight, and the seller set <b>WeightOff</b> to 2 oz. The combined weight would be 30 oz., but since the seller specified 2 oz. off, the total weight for shipping cost calculation would be <i>30 oz. - (two additional items x 2 oz.)</i>, or 26 oz. This field is only applicable for calculated shipping.
     *
     * @param \Nogrod\eBaySDK\Trading\MeasureType $weightOff
     * @return self
     */
    public function setWeightOff(\Nogrod\eBaySDK\Trading\MeasureType $weightOff)
    {
        $this->weightOff = $weightOff;
        return $this;
    }

    /**
     * Gets as mappedDiscountProfileID
     *
     * For <b>SetShippingDiscountProfiles</b>, if <b>MappedDiscountProfileID</b> is omitted when
     *  <b>ModifyActionCode</b> is set to <code>Delete</code>, any listings currently using the profile
     *  identified by <b>DiscountProfileID</b> will have that profile removed.
     *
     * @return string
     */
    public function getMappedDiscountProfileID()
    {
        return $this->mappedDiscountProfileID;
    }

    /**
     * Sets a new mappedDiscountProfileID
     *
     * For <b>SetShippingDiscountProfiles</b>, if <b>MappedDiscountProfileID</b> is omitted when
     *  <b>ModifyActionCode</b> is set to <code>Delete</code>, any listings currently using the profile
     *  identified by <b>DiscountProfileID</b> will have that profile removed.
     *
     * @param string $mappedDiscountProfileID
     * @return self
     */
    public function setMappedDiscountProfileID($mappedDiscountProfileID)
    {
        $this->mappedDiscountProfileID = $mappedDiscountProfileID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getDiscountProfileID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DiscountProfileID", $value);
        }
        $value = $this->getDiscountProfileName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DiscountProfileName", $value);
        }
        $value = $this->getEachAdditionalAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EachAdditionalAmount", $value);
        }
        $value = $this->getEachAdditionalAmountOff();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EachAdditionalAmountOff", $value);
        }
        $value = $this->getEachAdditionalPercentOff();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EachAdditionalPercentOff", $value);
        }
        $value = $this->getWeightOff();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}WeightOff", $value);
        }
        $value = $this->getMappedDiscountProfileID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MappedDiscountProfileID", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DiscountProfileID');
        if (null !== $value) {
            $this->setDiscountProfileID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DiscountProfileName');
        if (null !== $value) {
            $this->setDiscountProfileName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EachAdditionalAmount');
        if (null !== $value) {
            $this->setEachAdditionalAmount(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EachAdditionalAmountOff');
        if (null !== $value) {
            $this->setEachAdditionalAmountOff(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EachAdditionalPercentOff');
        if (null !== $value) {
            $this->setEachAdditionalPercentOff($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}WeightOff');
        if (null !== $value) {
            $this->setWeightOff(\Nogrod\eBaySDK\Trading\MeasureType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MappedDiscountProfileID');
        if (null !== $value) {
            $this->setMappedDiscountProfileID($value);
        }
    }
}
