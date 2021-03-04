<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing NotificationDeliveryStatusCodeType
 *
 * This enumerated type is deprecated.
 * XSD Type: NotificationDeliveryStatusCodeType
 */
class NotificationDeliveryStatusCodeType
{
    /**
     * Constant for 'CustomCode' value.
     */
    public const VAL_CUSTOM_CODE = 'CustomCode';

    /**
     * Constant for 'Delivered' value.
     */
    public const VAL_DELIVERED = 'Delivered';

    /**
     * Constant for 'Failed' value.
     */
    public const VAL_FAILED = 'Failed';

    /**
     * Constant for 'Rejected' value.
     */
    public const VAL_REJECTED = 'Rejected';

    /**
     * Constant for 'MarkedDown' value.
     */
    public const VAL_MARKED_DOWN = 'MarkedDown';

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
