<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing CheckoutStatusCodeType
 *
 * Enumerated type that lists the possible checkout states of an order line item.
 * XSD Type: CheckoutStatusCodeType
 */
class CheckoutStatusCodeType
{
    /**
     * Constant for 'CheckoutComplete' value.
     *
     * This value indicates that the buyer has paid and checkout is complete.
     */
    public const VAL_CHECKOUT_COMPLETE = 'CheckoutComplete';

    /**
     * Constant for 'CheckoutIncomplete' value.
     *
     * This value indicates that checkout is incomplete, generally because the buyer
     * has not paid yet.
     */
    public const VAL_CHECKOUT_INCOMPLETE = 'CheckoutIncomplete';

    /**
     * Constant for 'BuyerRequestsTotal' value.
     *
     * This value indicates that the buyer wants to confirm the total price of the
     * order line item before making a payment.
     */
    public const VAL_BUYER_REQUESTS_TOTAL = 'BuyerRequestsTotal';

    /**
     * Constant for 'SellerResponded' value.
     *
     * This value indicates that the seller has just responded to the buyer concerning
     * the total price of the order line item.
     */
    public const VAL_SELLER_RESPONDED = 'SellerResponded';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for future use.
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
