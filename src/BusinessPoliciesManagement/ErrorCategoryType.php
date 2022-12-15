<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

/**
 * Class representing ErrorCategoryType
 *
 * Returned errors are categorized as either Application, Request, or System errors. Request and application errors are often caused by passing invalid data in the call request. System errors are primarily caused by application failures and cannot be corrected by changing request values.
 * XSD Type: ErrorCategory
 */
class ErrorCategoryType
{
    /**
     * Constant for 'System' value.
     *
     * Indicates that an error has occurred on the eBay system side. For example, a
     * database or server could be down. Inspect the error message to find the cause of
     * the problem. If the problem is on the eBay side, an application can retry the
     * request a reasonable number of times (eBay recommends twice). If the error
     * persists, contact Developer Technical Support. Once the problem has been
     * resolved, the request may be resent in its original form.
     */
    public const VAL_SYSTEM = 'System';

    /**
     * Constant for 'Application' value.
     *
     * An error occurred due to a problem with the request, with the most likely source
     * being the application sending the request. For example, the request is missing a
     * required data element or it contains an invalid field. The problem must be
     * corrected before the request can be resent. Inspect the error message to find
     * the cause of the problem. If the problem is due to an application error, modify
     * the application and resend the request. If the error is due to invalid data, the
     * source of the data must be corrected before you resend the resend request to
     * eBay.
     */
    public const VAL_APPLICATION = 'Application';

    /**
     * Constant for 'Request' value.
     *
     * An error occurred due to a problem with the request, with the most likely source
     * being missing or invalid data in the request. The problem must be corrected
     * before the request can be retried. Inspect the error message to find the cause
     * of the problem. If the problem is a result of end user data, alert the end-user
     * to the problem and provide the means for them to correct the problem. Once the
     * problem is resolved, resend the request to eBay.
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
