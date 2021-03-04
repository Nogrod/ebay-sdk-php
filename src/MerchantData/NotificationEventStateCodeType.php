<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing NotificationEventStateCodeType
 *
 * Valid notification status codes
 * XSD Type: NotificationEventStateCodeType
 */
class NotificationEventStateCodeType
{
    /**
     * Constant for 'New' value.
     *
     * Status indicating the notification is newly created
     */
    public const VAL_NEW = 'New';

    /**
     * Constant for 'Failed' value.
     *
     * Status indicating the notification was failed
     */
    public const VAL_FAILED = 'Failed';

    /**
     * Constant for 'MarkedDown' value.
     *
     * Status indicating the end user application is marked down
     */
    public const VAL_MARKED_DOWN = 'MarkedDown';

    /**
     * Constant for 'Pending' value.
     *
     * Status indicating the notification is pending
     */
    public const VAL_PENDING = 'Pending';

    /**
     * Constant for 'FailedPending' value.
     *
     * Status indicating the notification is failed pending
     */
    public const VAL_FAILED_PENDING = 'FailedPending';

    /**
     * Constant for 'MarkedDownPending' value.
     *
     * Status indicating the notification is marked down pending
     */
    public const VAL_MARKED_DOWN_PENDING = 'MarkedDownPending';

    /**
     * Constant for 'Delivered' value.
     *
     * Status indicating the notification was successfully delivered
     */
    public const VAL_DELIVERED = 'Delivered';

    /**
     * Constant for 'Undeliverable' value.
     *
     * Status indicating the notification was unable to deliver
     */
    public const VAL_UNDELIVERABLE = 'Undeliverable';

    /**
     * Constant for 'Rejected' value.
     *
     * Status indicating the notification was rejected
     */
    public const VAL_REJECTED = 'Rejected';

    /**
     * Constant for 'Canceled' value.
     *
     * Status indicating the notification was cancelled
     */
    public const VAL_CANCELED = 'Canceled';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for future internal or external use
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
