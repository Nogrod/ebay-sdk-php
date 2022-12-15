<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

/**
 * Class representing ProfileType
 *
 * Enumerated type that defines the business policy types.
 * XSD Type: ProfileType
 */
class ProfileType
{
    /**
     * Constant for 'PAYMENT' value.
     *
     * This value indicates the business policy is a payment policy.
     */
    public const VAL_PAYMENT = 'PAYMENT';

    /**
     * Constant for 'RETURN_POLICY' value.
     *
     * This value indicates the business policy is a return policy.
     */
    public const VAL_RETURN__POLICY = 'RETURN_POLICY';

    /**
     * Constant for 'SHIPPING' value.
     *
     * This value indicates the business policy is a shipping policy.
     */
    public const VAL_SHIPPING = 'SHIPPING';

    /**
     * Constant for 'SHIPPING_RATE' value.
     *
     * This value is for future use.
     */
    public const VAL_SHIPPING__RATE = 'SHIPPING_RATE';

    /**
     * Constant for 'SHIPPING_EXCLUSION' value.
     *
     * This value is for future use.
     */
    public const VAL_SHIPPING__EXCLUSION = 'SHIPPING_EXCLUSION';

    /**
     * Constant for 'SHIPPING_DISCOUNT' value.
     *
     * This value is for future use.
     */
    public const VAL_SHIPPING__DISCOUNT = 'SHIPPING_DISCOUNT';

    /**
     * Constant for 'BUYER_REQUIREMENTS' value.
     *
     * This value is for future use.
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
