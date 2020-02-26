<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing SellingManagerSoldListingsSortTypeCodeType
 *
 * SellingManagerSoldListingsSortType - Specifies the fields that can be used to sort the listings.
 * XSD Type: SellingManagerSoldListingsSortTypeCodeType
 */
class SellingManagerSoldListingsSortTypeCodeType
{

    /**
     * Constant for 'SalesRecordID' value.
     *
     * Sorts listings by sales Record ID.
     */
    public const VAL_SALES_RECORD_ID = 'SalesRecordID';

    /**
     * Constant for 'BuyerEmail' value.
     *
     * Sorts listings by Buyer email or ID.
     */
    public const VAL_BUYER_EMAIL = 'BuyerEmail';

    /**
     * Constant for 'SaleFormat' value.
     *
     * Sorts listings by sale format.
     */
    public const VAL_SALE_FORMAT = 'SaleFormat';

    /**
     * Constant for 'CustomLabel' value.
     *
     * Sorts listings by Custom label.
     */
    public const VAL_CUSTOM_LABEL = 'CustomLabel';

    /**
     * Constant for 'TotalPrice' value.
     *
     * Sorts listings by Total Price.
     */
    public const VAL_TOTAL_PRICE = 'TotalPrice';

    /**
     * Constant for 'SaleDate' value.
     *
     * Sorts listings by Sale Date.
     */
    public const VAL_SALE_DATE = 'SaleDate';

    /**
     * Constant for 'PaidDate' value.
     *
     * Sorts listings by Paid Date.
     */
    public const VAL_PAID_DATE = 'PaidDate';

    /**
     * Constant for 'EmailsSent' value.
     *
     * Sorts listings by Emails sent.
     */
    public const VAL_EMAILS_SENT = 'EmailsSent';

    /**
     * Constant for 'CheckoutState' value.
     *
     * Sorts listings by Checkout status.
     */
    public const VAL_CHECKOUT_STATE = 'CheckoutState';

    /**
     * Constant for 'PaidState' value.
     *
     * Sorts by Paid status.
     */
    public const VAL_PAID_STATE = 'PaidState';

    /**
     * Constant for 'ShippedState' value.
     *
     * Sorts by Shipped state.
     */
    public const VAL_SHIPPED_STATE = 'ShippedState';

    /**
     * Constant for 'FeedbackLeft' value.
     *
     * Sorts by feedback left.
     */
    public const VAL_FEEDBACK_LEFT = 'FeedbackLeft';

    /**
     * Constant for 'FeedbackReceived' value.
     *
     * Sorts by FeedbackReceived.
     */
    public const VAL_FEEDBACK_RECEIVED = 'FeedbackReceived';

    /**
     * Constant for 'ShippedDate' value.
     *
     * Sorts by Shipped Date.
     */
    public const VAL_SHIPPED_DATE = 'ShippedDate';

    /**
     * Constant for 'BuyerPostalCode' value.
     *
     * Sorts by buyer Postal code.
     */
    public const VAL_BUYER_POSTAL_CODE = 'BuyerPostalCode';

    /**
     * Constant for 'DaysSinceSale' value.
     *
     * Sorts by Days since sale.
     */
    public const VAL_DAYS_SINCE_SALE = 'DaysSinceSale';

    /**
     * Constant for 'StartPrice' value.
     *
     * Sort by Start price.
     */
    public const VAL_START_PRICE = 'StartPrice';

    /**
     * Constant for 'ReservePrice' value.
     *
     * Sort by ReservePrice.
     */
    public const VAL_RESERVE_PRICE = 'ReservePrice';

    /**
     * Constant for 'SoldOn' value.
     *
     * Sorts by Sold site.
     */
    public const VAL_SOLD_ON = 'SoldOn';

    /**
     * Constant for 'ShippingCost' value.
     *
     * Sorts by Shipping cost.
     */
    public const VAL_SHIPPING_COST = 'ShippingCost';

    /**
     * Constant for 'ListedOn' value.
     *
     * Sorts by Listed site.
     */
    public const VAL_LISTED_ON = 'ListedOn';

    /**
     * Constant for 'CustomCode' value.
     *
     * (out) Reserved for internal or future use.
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
