<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing PayoutMethodType
 *
 * This enumerated type is deprecated.
 * XSD Type: PayoutMethodType
 */
class PayoutMethodType
{

    /**
     * Constant for 'PAYPAL' value.
     *
     * This value is not used.
     */
    public const VAL_PAYPAL = 'PAYPAL';

    /**
     * Constant for 'EFT' value.
     *
     * This value is not used.
     */
    public const VAL_EFT = 'EFT';

    /**
     * Constant for 'MONEYBOOKERS' value.
     *
     * This value is not used.
     */
    public const VAL_MONEYBOOKERS = 'MONEYBOOKERS';

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
