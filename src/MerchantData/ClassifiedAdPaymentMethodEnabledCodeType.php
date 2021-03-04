<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing ClassifiedAdPaymentMethodEnabledCodeType
 *
 * Used to indicate whether the payment method will be displayed for a category
 *  belonging to the Lead Generation Format.
 * XSD Type: ClassifiedAdPaymentMethodEnabledCodeType
 */
class ClassifiedAdPaymentMethodEnabledCodeType
{
    /**
     * Constant for 'EnabledWithCheckout' value.
     *
     * Display the payment method and permit checkout.
     */
    public const VAL_ENABLED_WITH_CHECKOUT = 'EnabledWithCheckout';

    /**
     * Constant for 'EnabledWithoutCheckout' value.
     *
     * Display the payment method and suppress checkout.
     */
    public const VAL_ENABLED_WITHOUT_CHECKOUT = 'EnabledWithoutCheckout';

    /**
     * Constant for 'NotSupported' value.
     *
     * Do not display the payment method.
     */
    public const VAL_NOT_SUPPORTED = 'NotSupported';

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
