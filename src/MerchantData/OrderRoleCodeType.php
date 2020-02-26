<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing OrderRoleCodeType
 *
 * This enumerated type is deprecated
 * XSD Type: OrderRoleCodeType
 */
class OrderRoleCodeType
{

    /**
     * Constant for 'Buyer' value.
     */
    public const VAL_BUYER = 'Buyer';

    /**
     * Constant for 'Seller' value.
     */
    public const VAL_SELLER = 'Seller';

    /**
     * Constant for 'CustomCode' value.
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
