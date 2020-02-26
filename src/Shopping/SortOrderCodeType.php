<?php

namespace Nogrod\eBaySDK\Shopping;

/**
 * Class representing SortOrderCodeType
 *
 * This enumerated type defines the sorting order values that can be used when sorting results.
 * XSD Type: SortOrderCodeType
 */
class SortOrderCodeType
{

    /**
     * Constant for 'Ascending' value.
     *
     * This value is used to sort results in ascending (low to high) order.
     */
    public const VAL_ASCENDING = 'Ascending';

    /**
     * Constant for 'Descending' value.
     *
     * This value is used to sort results in descending (high to low) order.
     */
    public const VAL_DESCENDING = 'Descending';

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
