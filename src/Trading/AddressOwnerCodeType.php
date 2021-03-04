<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing AddressOwnerCodeType
 *
 * Enumerated type used by <b>AddressType</b> to indicate whether a shipping address is on file with eBay or on file with PayPal.
 * XSD Type: AddressOwnerCodeType
 */
class AddressOwnerCodeType
{
    /**
     * Constant for 'PayPal' value.
     *
     * This value indicates that the shipping address being referenced is on file with
     * PayPal.
     */
    public const VAL_PAY_PAL = 'PayPal';

    /**
     * Constant for 'eBay' value.
     *
     * This value indicates that the shipping address being referenced is on file with
     * eBay.
     */
    public const VAL_E_BAY = 'eBay';

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
