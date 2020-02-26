<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

/**
 * Class representing ErrorSeverityType
 *
 * Documentation goes here.
 * XSD Type: ErrorSeverity
 */
class ErrorSeverityType
{

    /**
     * Constant for 'Error' value.
     */
    public const VAL_ERROR = 'Error';

    /**
     * Constant for 'Warning' value.
     */
    public const VAL_WARNING = 'Warning';

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
