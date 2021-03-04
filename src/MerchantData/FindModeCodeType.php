<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing FindModeCodeType
 *
 * How the match is to be done.
 * XSD Type: FindModeCodeType
 */
class FindModeCodeType
{
    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for internal or future use.
     */
    public const VAL_CUSTOM_CODE = 'CustomCode';

    /**
     * Constant for 'Simple' value.
     *
     * Match the search string.
     */
    public const VAL_SIMPLE = 'Simple';

    /**
     * Constant for 'WholeWord' value.
     *
     * Match only whole words or group of words.
     */
    public const VAL_WHOLE_WORD = 'WholeWord';

    /**
     * Constant for 'Pattern' value.
     *
     * Match based on regex style pattern. See the rules in
     *  java.lang.String.replaceAll().
     */
    public const VAL_PATTERN = 'Pattern';

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
