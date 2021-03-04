<?php

namespace Nogrod\eBaySDK\FileTransfer;

/**
 * Class representing AckValueType
 *
 * Indicates whether the error is a severe error (causing the request to fail)
 *  or an informational error (a warning) that should be communicated to the
 *  user.
 * XSD Type: AckValue
 */
class AckValueType
{
    /**
     * Constant for 'Success' value.
     *
     * The request was processed successfully, but something occurred that may
     *  affect your application or the user.
     */
    public const VAL_SUCCESS = 'Success';

    /**
     * Constant for 'Failure' value.
     *
     * The request that triggered the error was not processed successfully.
     *  When a serious application-level error occurs, the error is returned
     *  instead of the business data.
     */
    public const VAL_FAILURE = 'Failure';

    /**
     * Constant for 'Warning' value.
     *
     * The request that triggered the error was processed successfully but with some
     *  warnings.
     */
    public const VAL_WARNING = 'Warning';

    /**
     * Constant for 'PartialFailure' value.
     *
     * The request that triggered the error was processed successfully but there is
     *  some error in the application or data.
     */
    public const VAL_PARTIAL_FAILURE = 'PartialFailure';

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
