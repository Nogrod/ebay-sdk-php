<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing SellingManagerShippedStatusCodeType
 *
 * Contains values for shipped status.
 * XSD Type: SellingManagerShippedStatusCodeType
 */
class SellingManagerShippedStatusCodeType
{
    /**
     * Constant for 'Shipped' value.
     *
     * The shipped status is "shipped."
     */
    public const VAL_SHIPPED = 'Shipped';

    /**
     * Constant for 'Unshipped' value.
     *
     * The shipped status is "unshipped."
     */
    public const VAL_UNSHIPPED = 'Unshipped';

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
