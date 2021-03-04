<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing CombinedPaymentOptionCodeType
 *
 * Enumerated type that defines the seller's preference for allowing
 *  <a href="http://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Listing-AnItem.html#CombinedInvoice">Combined Invoice</a>
 *  orders that pass on a shipping discounts to the buyer.
 * XSD Type: CombinedPaymentOptionCodeType
 */
class CombinedPaymentOptionCodeType
{
    /**
     * Constant for 'NoCombinedPayment' value.
     *
     * This value indicates that the seller does not allow Combined Invoice orders. In
     *  other words, the buyer must pay for each order line item separately, and cannot
     *  combine multiple single line item orders into one Combined Invoice order and
     * make
     *  one payment for that order.
     */
    public const VAL_NO_COMBINED_PAYMENT = 'NoCombinedPayment';

    /**
     * Constant for 'DiscountSpecified' value.
     *
     * This value indicates that the seller allows Combined Invoice orders, and that
     * the
     *  seller has one or more shipping discount rules (Flat, Calculated, or
     * Promotional)
     *  that can be applied at the listing level.
     */
    public const VAL_DISCOUNT_SPECIFIED = 'DiscountSpecified';

    /**
     * Constant for 'SpecifyDiscountLater' value.
     *
     * This value indicates that the seller allows Combined Invoice orders, and that
     * the
     *  seller will apply any shipping discounts after the creation of the Combined
     * Invoice
     *  order.
     */
    public const VAL_SPECIFY_DISCOUNT_LATER = 'SpecifyDiscountLater';

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
