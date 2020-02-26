<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing InvocationStatusType
 *
 *
 * XSD Type: InvocationStatusType
 */
class InvocationStatusType
{

    /**
     * Constant for 'InProgress' value.
     */
    public const VAL_IN_PROGRESS = 'InProgress';

    /**
     * Constant for 'Success' value.
     */
    public const VAL_SUCCESS = 'Success';

    /**
     * Constant for 'Failure' value.
     */
    public const VAL_FAILURE = 'Failure';

    /**
     * Constant for 'CustomCode' value.
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
