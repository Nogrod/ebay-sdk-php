<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing DiscountCodeType
 *
 * This enumerated type is used to specify if the discount used for a promotional sale is a price (dollar value) discount or a percentage (of sale price) discount.
 * XSD Type: DiscountCodeType
 */
class DiscountCodeType
{
    /**
     * Constant for 'Percentage' value.
     *
     * The enumeration value indicates that the discount being offered is a percentage
     * discount, which means a percentage of the total price to the buyer is being
     * discounted. So, if the total price for an order line item is $100, the
     * <b>DiscountType</b> is <code>Percentage</code>, and the <b>DiscountValue</b> is
     * <code>15.0</code> (percent), the buyer will pay just $85.00 for the order line
     * item.
     */
    public const VAL_PERCENTAGE = 'Percentage';

    /**
     * Constant for 'Price' value.
     *
     * The enumeration value indicates that the discount being offered is a price
     * discount, which means the total price to the buyer is being reduced by this
     * amount. So, if the total price for an order line item is $100, the
     * <b>DiscountType</b> is <code>Price</code>, and the <b>DiscountValue</b> is
     * <code>20.0</code> (dollars), the buyer will pay just $80.00 for the order line
     * item.
     */
    public const VAL_PRICE = 'Price';

    /**
     * Constant for 'CustomCode' value.
     *
     * This value is reserved for future use.
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
