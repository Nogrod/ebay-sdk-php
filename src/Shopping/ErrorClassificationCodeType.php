<?php

namespace Nogrod\eBaySDK\Shopping;

/**
 * Class representing ErrorClassificationCodeType
 *
 * This enumerated type contains the type of errors that may occur with an Shopping API call.
 * XSD Type: ErrorClassificationCodeType
 */
class ErrorClassificationCodeType
{
    /**
     * Constant for 'RequestError' value.
     *
     * An error has occurred either as a result of a problem in the sending application
     * or because
     *  the application's end-user has attempted to submit invalid data (or missing
     * data).
     *  In these cases, do not retry the request. The problem must be corrected before
     * the request
     *  can be made again. If the problem is due to something in the application (such
     * as a missing
     *  required field), the application must be changed. If the problem is a result of
     * end-user data,
     *  the application must alert the end-user to the problem and provide the means
     * for the end-user
     *  to correct the data. Once the problem in the application or data is resolved,
     * resend the request to eBay
     *  with the corrected data.
     */
    public const VAL_REQUEST_ERROR = 'RequestError';

    /**
     * Constant for 'SystemError' value.
     *
     * Indicates that an error has occurred on the eBay system side, such as a database
     * or server down.
     *  An application can retry the request as-is a reasonable number of times (eBay
     * recommends twice).
     *  If the error persists, contact Developer Technical Support. Once the problem
     * has been resolved,
     *  the request may be resent in its original form.
     */
    public const VAL_SYSTEM_ERROR = 'SystemError';

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
