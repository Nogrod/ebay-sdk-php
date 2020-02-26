<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

/**
 * Class representing ErrorCategoryType
 *
 * Documentation goes here.
 * XSD Type: ErrorCategory
 */
class ErrorCategoryType
{

    /**
     * Constant for 'System' value.
     */
    public const VAL_SYSTEM = 'System';

    /**
     * Constant for 'Application' value.
     */
    public const VAL_APPLICATION = 'Application';

    /**
     * Constant for 'Request' value.
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
