<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing MyMessagesAlertResolutionStatusCodeType
 *
 * This enumerated type is deprecated.
 * XSD Type: MyMessagesAlertResolutionStatusCode
 */
class MyMessagesAlertResolutionStatusCodeType
{

    /**
     * Constant for 'Unresolved' value.
     *
     * This field is deprecated.
     */
    public const VAL_UNRESOLVED = 'Unresolved';

    /**
     * Constant for 'ResolvedByAutoResolution' value.
     *
     * This field is deprecated.
     */
    public const VAL_RESOLVED_BY_AUTO_RESOLUTION = 'ResolvedByAutoResolution';

    /**
     * Constant for 'ResolvedByUser' value.
     *
     * This field is deprecated.
     */
    public const VAL_RESOLVED_BY_USER = 'ResolvedByUser';

    /**
     * Constant for 'CustomCode' value.
     *
     * This field is deprecated.
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
