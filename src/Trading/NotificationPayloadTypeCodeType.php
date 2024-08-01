<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing NotificationPayloadTypeCodeType
 *
 * This enumeration type contains the payloads to use for delivering platform notifications.
 *  <br>
 *  <br>
 *  <span class="tablenote"><strong>Note:</strong>
 *  The notification payload type defaults to <code>eBLSchemaSOAP</code>, so the <strong>NotificationPayloadType</strong> field no longer has to be included in a <strong>SetNotificationPreferences</strong> call.
 *  </span>
 * XSD Type: NotificationPayloadTypeCodeType
 */
class NotificationPayloadTypeCodeType
{
    /**
     * Constant for 'eBLSchemaSOAP' value.
     *
     * The only schema format supported for both standard XML and SOAP API payloads.
     */
    public const VAL_E_BLSCHEMA_SOAP = 'eBLSchemaSOAP';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for internal or future use
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
