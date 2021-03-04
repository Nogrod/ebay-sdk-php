<?php

namespace Nogrod\eBaySDK\Shopping;

/**
 * Class representing SeverityCodeType
 *
 * Enumerated type that is used to show the severity of the API call issue, either an error, or a warning.
 * XSD Type: SeverityCodeType
 */
class SeverityCodeType
{
    /**
     * Constant for 'Warning' value.
     *
     * The request was processed successfully, but something occurred
     *  that may affect your application or the user. For example, eBay may have
     *  changed a value the user sent in. In this case, eBay returns a normal,
     *  successful response and also returns the warning.
     */
    public const VAL_WARNING = 'Warning';

    /**
     * Constant for 'Error' value.
     *
     * The request that triggered the error was not processed
     *  successfully. When a serious application-level error occurs, the error
     *  is returned instead of the business data.
     */
    public const VAL_ERROR = 'Error';

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
