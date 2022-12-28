<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing BuyerProtectionSourceCodeType
 *
 * This enumeration type indicates the applicable buyer protection program that the item is eligible to be covered under.
 * XSD Type: BuyerProtectionSourceCodeType
 */
class BuyerProtectionSourceCodeType
{
    /**
     * Constant for 'eBay' value.
     *
     * This value indicates that the item is possibly eligible for buyer protection
     * under the eBay Money Back Guarantee program.
     */
    public const VAL_E_BAY = 'eBay';

    /**
     * Constant for 'PayPal' value.
     *
     * This value is deprecated.
     */
    public const VAL_PAY_PAL = 'PayPal';

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
