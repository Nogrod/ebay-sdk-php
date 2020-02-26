<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing StringMatchCodeType
 *
 * Indicates the type of string matching to use
 *  when a value is submitted in CharityName. If no value is
 *  specified, default behavior is "StartsWith." Does not
 *  apply to Query.
 * XSD Type: StringMatchCodeType
 */
class StringMatchCodeType
{

    /**
     * Constant for 'CustomCode' value.
     *
     * (in) Reserved for internal or future use.
     */
    public const VAL_CUSTOM_CODE = 'CustomCode';

    /**
     * Constant for 'StartsWith' value.
     *
     * (in) Matches strings that begin with the submitted
     *  value. For example, submitting a CharityName value
     *  of "heart" matches "Heart of Gold," but not "Open
     *  Hearts." Default behavior if no value is
     *  specified.
     */
    public const VAL_STARTS_WITH = 'StartsWith';

    /**
     * Constant for 'Contains' value.
     *
     * (in) Matches strings that contain the submitted
     *  value. For example, submitting a CharityName value
     *  of "heart" matches both "Heart of Gold" and "Open
     *  Hearts."
     */
    public const VAL_CONTAINS = 'Contains';

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
