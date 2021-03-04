<?php

namespace Nogrod\eBaySDK\Shopping;

/**
 * Class representing TradingRoleCodeType
 *
 * This enumerated type is used to specify whether an eBay user was the buyer or seller in an eBay transaction.
 * XSD Type: TradingRoleCodeType
 */
class TradingRoleCodeType
{
    /**
     * Constant for 'Buyer' value.
     *
     * This enumeration value indicates the eBay user was the buyer in the correponding
     * transaction.
     */
    public const VAL_BUYER = 'Buyer';

    /**
     * Constant for 'Seller' value.
     *
     * This enumeration value indicates the eBay user was the seller in the
     * correponding transaction.
     */
    public const VAL_SELLER = 'Seller';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for future use.
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
