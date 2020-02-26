<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing SMSSubscriptionUserStatusCodeType
 *
 * The current state of user SMS subscription.
 * XSD Type: SMSSubscriptionUserStatusCodeType
 */
class SMSSubscriptionUserStatusCodeType
{

    /**
     * Constant for 'Registered' value.
     *
     * (out) Registered.
     */
    public const VAL_REGISTERED = 'Registered';

    /**
     * Constant for 'Unregistered' value.
     *
     * (out) Unregistered.
     */
    public const VAL_UNREGISTERED = 'Unregistered';

    /**
     * Constant for 'Pending' value.
     *
     * (out) Pending subscription.
     */
    public const VAL_PENDING = 'Pending';

    /**
     * Constant for 'Failed' value.
     *
     * (out) Subscription failed.
     */
    public const VAL_FAILED = 'Failed';

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
