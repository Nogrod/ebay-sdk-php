<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing AuthTokenTypeCodeType
 *
 * This enumeration type lists the types of user authentication tokens that can be used to access/use eBay APIs.
 * XSD Type: AuthTokenTypeCodeType
 */
class AuthTokenTypeCodeType
{
    /**
     * Constant for 'ClientAlertsToken' value.
     *
     * This value indicates that a Client Alerts token is required.
     */
    public const VAL_CLIENT_ALERTS_TOKEN = 'ClientAlertsToken';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for internal or future use.
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
