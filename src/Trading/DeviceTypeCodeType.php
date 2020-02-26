<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing DeviceTypeCodeType
 *
 * This enumerated type is a list of the systems used to deliver buyer/seller notifications.
 * XSD Type: DeviceTypeCodeType
 */
class DeviceTypeCodeType
{

    /**
     * Constant for 'Platform' value.
     *
     * This enumeration value indicates that buyer/seller notifications will be
     * delivered through the Platform Notifications system.
     */
    public const VAL_PLATFORM = 'Platform';

    /**
     * Constant for 'SMS' value.
     *
     * This enumeration value indicates that buyer/seller notifications will be
     * delivered through the SMS system to a wireless device.
     */
    public const VAL_SMS = 'SMS';

    /**
     * Constant for 'ClientAlerts' value.
     *
     * This enumeration value indicates that buyer/seller notifications will be
     * delivered through the Client Alerts system.
     */
    public const VAL_CLIENT_ALERTS = 'ClientAlerts';

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
