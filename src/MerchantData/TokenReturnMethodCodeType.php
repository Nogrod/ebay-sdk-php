<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing TokenReturnMethodCodeType
 *
 * Indicates how the application wants eBay to handle the user's token after
 *  the user signs in.
 * XSD Type: TokenReturnMethodCodeType
 */
class TokenReturnMethodCodeType
{
    /**
     * Constant for 'Redirect' value.
     *
     * Return the token in the HTTP redirect to the application-specified
     *  accept URL.
     */
    public const VAL_REDIRECT = 'Redirect';

    /**
     * Constant for 'FetchToken' value.
     *
     * Leave the token at eBay so that the application can get
     *  the token through the FetchToken API call (SecretId required).
     */
    public const VAL_FETCH_TOKEN = 'FetchToken';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for future use
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
