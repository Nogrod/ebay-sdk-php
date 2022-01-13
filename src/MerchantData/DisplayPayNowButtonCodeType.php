<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing DisplayPayNowButtonCodeType
 *
 * This enumerated type is used to control how the "Buy It Now" button is displayed on a listing.
 *  <br><br>
 *  <span class="tablenote"><b>Note:</b> Sellers onboarded for eBay managed payments cannot control the display of the 'Buy It Now' button in listings, and although the <b>DisplayPayNowButton</b> value can still be set in <b>SetUserPreferences</b> and is returned in <b>GetUserPreferences</b>, the setting will not have any affect on any current or future listings for the managed payments seller.
 *  </span>
 *  <br>
 * XSD Type: DisplayPayNowButtonCodeType
 */
class DisplayPayNowButtonCodeType
{
    /**
     * Constant for 'ShowPayNowButtonForAllPaymentMethods' value.
     *
     * This enumeration value indicates that the "Pay Now" button will be displayed no
     * matter what payment method the buyer uses.
     */
    public const VAL_SHOW_PAY_NOW_BUTTON_FOR_ALL_PAYMENT_METHODS = 'ShowPayNowButtonForAllPaymentMethods';

    /**
     * Constant for 'ShowPayNowButtonForPayPalOnly' value.
     *
     * This enumeration value indicates that the "Pay Now" button will only be
     * displayed if the buyer is using PayPal as the payment method.
     */
    public const VAL_SHOW_PAY_NOW_BUTTON_FOR_PAY_PAL_ONLY = 'ShowPayNowButtonForPayPalOnly';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for internal or future use
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
