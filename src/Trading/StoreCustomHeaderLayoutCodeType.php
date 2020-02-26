<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing StoreCustomHeaderLayoutCodeType
 *
 * Specifies whether the Store has a custom header.
 * XSD Type: StoreCustomHeaderLayoutCodeType
 */
class StoreCustomHeaderLayoutCodeType
{

    /**
     * Constant for 'NoHeader' value.
     *
     * Specifies that the Store does not have a custom header.
     */
    public const VAL_NO_HEADER = 'NoHeader';

    /**
     * Constant for 'CustomHeaderShown' value.
     *
     * Specifies that the Store does have a custom header.
     */
    public const VAL_CUSTOM_HEADER_SHOWN = 'CustomHeaderShown';

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
