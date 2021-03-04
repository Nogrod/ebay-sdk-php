<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

/**
 * Class representing ProfileType
 *
 *
 * XSD Type: ProfileType
 */
class ProfileType
{
    /**
     * Constant for 'PAYMENT' value.
     */
    public const VAL_PAYMENT = 'PAYMENT';

    /**
     * Constant for 'RETURN_POLICY' value.
     */
    public const VAL_RETURN__POLICY = 'RETURN_POLICY';

    /**
     * Constant for 'SHIPPING' value.
     */
    public const VAL_SHIPPING = 'SHIPPING';

    /**
     * Constant for 'SHIPPING_RATE' value.
     */
    public const VAL_SHIPPING__RATE = 'SHIPPING_RATE';

    /**
     * Constant for 'SHIPPING_EXCLUSION' value.
     */
    public const VAL_SHIPPING__EXCLUSION = 'SHIPPING_EXCLUSION';

    /**
     * Constant for 'SHIPPING_DISCOUNT' value.
     */
    public const VAL_SHIPPING__DISCOUNT = 'SHIPPING_DISCOUNT';

    /**
     * Constant for 'BUYER_REQUIREMENTS' value.
     */
    public const VAL_BUYER__REQUIREMENTS = 'BUYER_REQUIREMENTS';

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
