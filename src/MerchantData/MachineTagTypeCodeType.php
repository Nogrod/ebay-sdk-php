<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing MachineTagTypeCodeType
 *
 * Applicable to sites that support the Detailed Seller Ratings feature.
 * XSD Type: MachineTagTypeCodeType
 */
class MachineTagTypeCodeType
{

    /**
     * Constant for 'ServerFlash' value.
     *
     * User machine tag type "http flash."
     */
    public const VAL_SERVER_FLASH = 'ServerFlash';

    /**
     * Constant for 'ServerHttpCookie' value.
     *
     * User machine tag type "http cookie."
     */
    public const VAL_SERVER_HTTP_COOKIE = 'ServerHttpCookie';

    /**
     * Constant for 'NoTag' value.
     *
     * User machine tag type "API."
     */
    public const VAL_NO_TAG = 'NoTag';

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
