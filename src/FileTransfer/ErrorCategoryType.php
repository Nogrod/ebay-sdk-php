<?php

namespace Nogrod\eBaySDK\FileTransfer;

/**
 * Class representing ErrorCategoryType
 *
 * There are three categories of error: request errors, application errors,
 *  and system errors. Request and application errors are caused primarily by
 *  invalid data passed in the request. System errors are caused by
 *  application failures and cannot be corrected by changing request values.
 * XSD Type: ErrorCategory
 */
class ErrorCategoryType
{

    /**
     * Constant for 'System' value.
     *
     * Indicates that an error has occurred on the eBay system side, such as a
     *  database or server outage. An application can retry the request a
     *  reasonable number of times (eBay recommends twice). If the error
     *  persists, contact Developer Technical Support. Once the problem has been
     *  resolved, the request may be resent in its original form.
     */
    public const VAL_SYSTEM = 'System';

    /**
     * Constant for 'Application' value.
     *
     * An error occurred due to a problem with the request, such as missing or
     *  invalid fields. The problem must be corrected before the request can be
     *  made again. If the problem is due to something in the application (such
     *  as a missing required field), the application must be changed. Once the
     *  problem in the application or data is resolved, resend the corrected
     *  request to eBay.
     */
    public const VAL_APPLICATION = 'Application';

    /**
     * Constant for 'Request' value.
     *
     * An error occurred due to a problem with the request, such as invalid or
     *  missing data. The problem must be corrected before the request can be
     *  made again. If the problem is a result of end-user data, the application
     *  must alert the end-user to the problem and provide the means for the
     *  end-user to correct the data. Once the problem in the data is resolved,
     *  resend the request to eBay with the corrected data.
     */
    public const VAL_REQUEST = 'Request';

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
