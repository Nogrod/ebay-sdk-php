<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing DiscountNameCodeType
 *
 * This enumerated type is used by the seller to set the shipping discount type. Some of these shipping discount types apply to flat-rate shipping and others apply to calculated shipping.
 * XSD Type: DiscountNameCodeType
 */
class DiscountNameCodeType
{
    /**
     * Constant for 'EachAdditionalAmount' value.
     *
     * The cost to ship each item beyond the first item (where the item with the
     *  highest shipping cost is selected by eBay as the first item).
     *  Let's say the buyer purchases three items, each set to ship for $8, and
     *  the seller set EachAdditionalAmount to $6. The cost to ship three items would
     *  normally be $24, but since the seller specified $6, the total shipping
     *  cost would be $8 + $6 + $6, or $20.
     *  For flat shipping discount profile only.
     */
    public const VAL_EACH_ADDITIONAL_AMOUNT = 'EachAdditionalAmount';

    /**
     * Constant for 'EachAdditionalAmountOff' value.
     *
     * The amount by which to reduce the cost to ship each item beyond the
     *  first item (where the item with the highest shipping cost is selected by eBay
     *  as the first item).
     *  Let's say the buyer purchases three items, each set to ship for $8, and
     *  the seller set EachAdditionalAmountOff to $2. The cost to ship three items
     * would
     *  normally be $24, but since the seller specified $2, the total shipping
     *  cost would be $24 - (two additional items x $2), or $20.
     *  For flat shipping discount profile only.
     */
    public const VAL_EACH_ADDITIONAL_AMOUNT_OFF = 'EachAdditionalAmountOff';

    /**
     * Constant for 'EachAdditionalPercentOff' value.
     *
     * The percentage by which to reduce the cost to ship each item beyond
     *  the first item (where the item with the highest shipping cost is selected by
     *  eBay as the first item).
     *  Let's say the buyer purchases three items, each set to ship for $8, and
     *  the seller set EachAdditionalPercentOff to 0.25. The cost to ship three items
     * would
     *  normally be $24, but since the seller specified 0.25 ($2 out of 8), the total
     * shipping
     *  cost would be $24 - (two additional items x $2), or $20.
     *  For flat rate shipping discount profile only.
     */
    public const VAL_EACH_ADDITIONAL_PERCENT_OFF = 'EachAdditionalPercentOff';

    /**
     * Constant for 'IndividualItemWeight' value.
     *
     * Shipping cost is the total of what it would cost to ship each item individually.
     *  This is simply a way to define how shipping is to be calculated--there is no
     *  discount for the buyer with this selection.
     *  For calculated shipping discount profile only.
     */
    public const VAL_INDIVIDUAL_ITEM_WEIGHT = 'IndividualItemWeight';

    /**
     * Constant for 'CombinedItemWeight' value.
     *
     * Shipping cost is based on the total weight of all individual items.
     *  This is simply a way to define how shipping is to be calculated--there is no
     *  discount for the buyer with this selection.
     *  For calculated shipping discount profile only.
     */
    public const VAL_COMBINED_ITEM_WEIGHT = 'CombinedItemWeight';

    /**
     * Constant for 'WeightOff' value.
     *
     * The amount of weight to subtract for each item beyond the first item
     *  before shipping costs are calculated. For example, there may be less packing
     *  material when the items are combined in one box than if they were shipped
     *  individually. Let's say the buyer purchases three items, each 10 oz. in weight,
     * and
     *  the seller set WeightOff to 2 oz. The combined weight would be 30 oz., but
     * since
     *  the seller specified 2 oz. off, the total weight for shipping cost calculation
     *  would be 30 oz. - (two additional items x 2 oz.), or 26 oz.
     *  For calculated shipping discount profile only.
     */
    public const VAL_WEIGHT_OFF = 'WeightOff';

    /**
     * Constant for 'ShippingCostXForAmountY' value.
     *
     * Shipping cost X applies if the total cost of items purchased is Y.
     *  For promotional discount only.
     */
    public const VAL_SHIPPING_COST_XFOR_AMOUNT_Y = 'ShippingCostXForAmountY';

    /**
     * Constant for 'ShippingCostXForItemCountN' value.
     *
     * Shipping cost X applies if the total number of items purchased is N.
     *  For promotional discount only.
     */
    public const VAL_SHIPPING_COST_XFOR_ITEM_COUNT_N = 'ShippingCostXForItemCountN';

    /**
     * Constant for 'MaximumShippingCostPerOrder' value.
     *
     * The shipping cost will not exceed this.
     *  For promotional discount only.
     */
    public const VAL_MAXIMUM_SHIPPING_COST_PER_ORDER = 'MaximumShippingCostPerOrder';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for internal or future use.
     */
    public const VAL_CUSTOM_CODE = 'CustomCode';

    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }
}
