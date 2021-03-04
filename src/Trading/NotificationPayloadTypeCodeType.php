<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing NotificationPayloadTypeCodeType
 *
 * This type is deprecated.
 * XSD Type: NotificationPayloadTypeCodeType
 */
class NotificationPayloadTypeCodeType
{
    /**
     * Constant for 'eBLSchemaSOAP' value.
     *
     * New Schema format (used by the new schema XML API and SOAP API).
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
