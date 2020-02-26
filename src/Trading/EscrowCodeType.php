<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing EscrowCodeType
 *
 * This enumerated type is deprecated.
 * XSD Type: EscrowCodeType
 */
class EscrowCodeType
{

    /**
     * Constant for 'ByBuyer' value.
     *
     * This field is deprecated.
     */
    public const VAL_BY_BUYER = 'ByBuyer';

    /**
     * Constant for 'BySeller' value.
     *
     * This field is deprecated.
     */
    public const VAL_BY_SELLER = 'BySeller';

    /**
     * Constant for 'None' value.
     *
     * This field is deprecated.
     */
    public const VAL_NONE = 'None';

    /**
     * Constant for 'CustomCode' value.
     *
     * This field is deprecated.
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
