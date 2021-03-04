<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing CheckoutMethodCodeType
 *
 * This enumerated type is deprecated.
 * XSD Type: CheckoutMethodCodeType
 */
class CheckoutMethodCodeType
{
    /**
     * Constant for 'Other' value.
     *
     * This value is not used.
     */
    public const VAL_OTHER = 'Other';

    /**
     * Constant for 'ThirdPartyCheckout' value.
     *
     * This value is not used.
     */
    public const VAL_THIRD_PARTY_CHECKOUT = 'ThirdPartyCheckout';

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
