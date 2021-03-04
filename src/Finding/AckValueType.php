<?php

namespace Nogrod\eBaySDK\Finding;

/**
 * Class representing AckValueType
 *
 * Indicates whether the error is a fatal error (causing the request to fail)
 *  or a less severe error (a warning) that should be communicated to the user.
 * XSD Type: AckValue
 */
class AckValueType
{
    /**
     * Constant for 'Success' value.
     *
     * eBay successfully processed the request and the business data is returned
     *  in the response. Note that it is possible for a response to return
     *  Success, but still not contain the expected data in the result.
     */
    public const VAL_SUCCESS = 'Success';

    /**
     * Constant for 'Failure' value.
     *
     * eBay encountered a fatal error during the processing of the request,
     *  causing the request to fail. When a serious application-level error
     *  occurs, the error is returned instead of the business data.
     */
    public const VAL_FAILURE = 'Failure';

    /**
     * Constant for 'Warning' value.
     *
     * The request was successfully processed, but eBay encountered a non-fatal
     *  error during the processing. For best results, requests should return
     *  without warnings. Inspect the warning details and resolve the problem
     *  before resubmitting the request.
     */
    public const VAL_WARNING = 'Warning';

    /**
     * Constant for 'PartialFailure' value.
     *
     * eBay successfully processed the request, but one or more non-fatal errors
     *  occurred during the processing. For best results, requests should return
     *  without warning messages. Inspect the message details and resolve any
     *  problems before resubmitting the request.
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
