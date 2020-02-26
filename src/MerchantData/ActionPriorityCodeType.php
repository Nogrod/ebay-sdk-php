<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing ActionPriorityCodeType
 *
 * This enumerated type is deprecated.
 * XSD Type: ActionPriorityCodeType
 */
class ActionPriorityCodeType
{

    /**
     * Constant for 'High' value.
     *
     * This type and this value is no longer used.
     */
    public const VAL_HIGH = 'High';

    /**
     * Constant for 'Low' value.
     *
     * This type and this value is no longer used.
     */
    public const VAL_LOW = 'Low';

    /**
     * Constant for 'CustomCode' value.
     *
     * (in) Reserved for internal or future use.
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
