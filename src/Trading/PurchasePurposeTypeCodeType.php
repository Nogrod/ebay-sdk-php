<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing PurchasePurposeTypeCodeType
 *
 * This enumerated type is deprecated.
 * XSD Type: PurchasePurposeTypeCodeType
 */
class PurchasePurposeTypeCodeType
{
    /**
     * Constant for 'Other' value.
     *
     * This value is not used.
     */
    public const VAL_OTHER = 'Other';

    /**
     * Constant for 'BuyNowItem' value.
     *
     * This value is not used.
     */
    public const VAL_BUY_NOW_ITEM = 'BuyNowItem';

    /**
     * Constant for 'ShoppingCart' value.
     *
     * This value is not used.
     */
    public const VAL_SHOPPING_CART = 'ShoppingCart';

    /**
     * Constant for 'AuctionItem' value.
     *
     * This value is not used.
     */
    public const VAL_AUCTION_ITEM = 'AuctionItem';

    /**
     * Constant for 'GiftCertificates' value.
     *
     * This value is not used.
     */
    public const VAL_GIFT_CERTIFICATES = 'GiftCertificates';

    /**
     * Constant for 'Subscription' value.
     *
     * This value is not used.
     */
    public const VAL_SUBSCRIPTION = 'Subscription';

    /**
     * Constant for 'Donation' value.
     *
     * This value is not used.
     */
    public const VAL_DONATION = 'Donation';

    /**
     * Constant for 'eBayBilling' value.
     *
     * This value is not used.
     */
    public const VAL_E_BAY_BILLING = 'eBayBilling';

    /**
     * Constant for 'CustomCode' value.
     *
     * This value is not used.
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
