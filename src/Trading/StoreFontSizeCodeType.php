<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing StoreFontSizeCodeType
 *
 * Font size selection for Store configuration.
 * XSD Type: StoreFontSizeCodeType
 */
class StoreFontSizeCodeType
{

    /**
     * Constant for 'XXS' value.
     *
     * Extra extra small.
     */
    public const VAL_XXS = 'XXS';

    /**
     * Constant for 'XS' value.
     *
     * Extra small.
     */
    public const VAL_XS = 'XS';

    /**
     * Constant for 'S' value.
     *
     * Small.
     */
    public const VAL_S = 'S';

    /**
     * Constant for 'M' value.
     *
     * Medium.
     */
    public const VAL_M = 'M';

    /**
     * Constant for 'L' value.
     *
     * Large.
     */
    public const VAL_L = 'L';

    /**
     * Constant for 'XL' value.
     *
     * Extra large.
     */
    public const VAL_XL = 'XL';

    /**
     * Constant for 'XXL' value.
     *
     * Extra extra large.
     */
    public const VAL_XXL = 'XXL';

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
