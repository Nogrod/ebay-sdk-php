<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing CombinedPaymentPeriodCodeType
 *
 * This enumerated type contains the list of values that can be used by the seller to set
 *  the number of days after item purchase that an unpaid order can be combined with one
 *  or more other mutual (same buyer and same seller) unpaid orders into one
 *  <a href="http://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Listing-AnItem.html#CombinedInvoice">Combined Invoice</a>
 *  order. Either the buyer or the seller can initiate the Combined Invoice
 *  process. Sellers can offer buyers shipping discounts through Combined Invoice orders,
 *  and buyers only have to make one payment for multiple orders as opposed to a payment
 *  for each order.
 * XSD Type: CombinedPaymentPeriodCodeType
 */
class CombinedPaymentPeriodCodeType
{
    /**
     * Constant for 'Days_3' value.
     *
     * This value indicates that an unpaid order can be combined into a Combined
     * Invoice
     *  order within three days after purchase (creation of order).
     */
    public const VAL_DAYS__3 = 'Days_3';

    /**
     * Constant for 'Days_5' value.
     *
     * This value indicates that an unpaid order can be combined into a Combined
     * Invoice
     *  order within five days after purchase (creation of order).
     */
    public const VAL_DAYS__5 = 'Days_5';

    /**
     * Constant for 'Days_7' value.
     *
     * This value indicates that an unpaid order can be combined into a Combined
     * Invoice
     *  order within seven days after purchase (creation of order).
     */
    public const VAL_DAYS__7 = 'Days_7';

    /**
     * Constant for 'Days_14' value.
     *
     * This value indicates that an unpaid order can be combined into a Combined
     * Invoice
     *  order within 14 days after purchase (creation of order).
     */
    public const VAL_DAYS__14 = 'Days_14';

    /**
     * Constant for 'Days_30' value.
     *
     * This value indicates that an unpaid order can be combined into a Combined
     * Invoice
     *  order within 30 days after purchase (creation of order).
     */
    public const VAL_DAYS__30 = 'Days_30';

    /**
     * Constant for 'Ineligible' value.
     *
     * This value indicates that an order is not eligible to be combined into a
     * Combined
     *  Payment order.
     */
    public const VAL_INELIGIBLE = 'Ineligible';

    /**
     * Constant for 'CustomCode' value.
     *
     * This value is reserved for internal or future use.
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
