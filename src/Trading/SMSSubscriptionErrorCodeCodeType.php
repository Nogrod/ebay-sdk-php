<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing SMSSubscriptionErrorCodeCodeType
 *
 * Type of SMS subscription error.
 * XSD Type: SMSSubscriptionErrorCodeCodeType
 */
class SMSSubscriptionErrorCodeCodeType
{
    /**
     * Constant for 'SMSAggregatorNotAvailable' value.
     *
     * Aggregator not available.
     */
    public const VAL_SMSAGGREGATOR_NOT_AVAILABLE = 'SMSAggregatorNotAvailable';

    /**
     * Constant for 'PhoneNumberInvalid' value.
     *
     * Phone number invalid.
     */
    public const VAL_PHONE_NUMBER_INVALID = 'PhoneNumberInvalid';

    /**
     * Constant for 'PhoneNumberChanged' value.
     *
     * Phone number has changed.
     */
    public const VAL_PHONE_NUMBER_CHANGED = 'PhoneNumberChanged';

    /**
     * Constant for 'PhoneNumberCarrierChanged' value.
     *
     * The carrier has changed.
     */
    public const VAL_PHONE_NUMBER_CARRIER_CHANGED = 'PhoneNumberCarrierChanged';

    /**
     * Constant for 'UserRequestedUnregistration' value.
     *
     * The user has requested to be unregistered.
     */
    public const VAL_USER_REQUESTED_UNREGISTRATION = 'UserRequestedUnregistration';

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
