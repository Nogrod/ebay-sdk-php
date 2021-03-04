<?php

namespace Nogrod\eBaySDK\Finding;

/**
 * Class representing ErrorSeverityType
 *
 * Indicates whether the error is a fatal error (causing the request to fail)
 *  or a less severe error (a warning) that should be communicated to the user.
 * XSD Type: ErrorSeverity
 */
class ErrorSeverityType
{
    /**
     * Constant for 'Error' value.
     *
     * eBay encountered a fatal error during the processing of the request,
     *  causing the request to fail. When eBay encounters an error, it returns
     *  error data instead of the requested business data. Inspect the error
     *  details and resolve the problem before resubmitting the request.
     */
    public const VAL_ERROR = 'Error';

    /**
     * Constant for 'Warning' value.
     *
     * The request was successfully processed, but eBay encountered a non-fatal
     *  error during the processing that could affect the data returned. For
     *  example, eBay might have changed the value of an input field. In this
     *  case, eBay returns a successful response, but it also returns a warning.
     *  For best results, requests should return without warnings. Inspect the
     *  warning details and resolve the problem before resubmitting the request.
     */
    public const VAL_WARNING = 'Warning';

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
