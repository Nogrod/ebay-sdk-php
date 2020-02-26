<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ItemConditionCodeType
 *
 * Specifies a predefined subset of item conditions. The predefined set of fields
 *  can vary for different calls.
 * XSD Type: ItemConditionCodeType
 */
class ItemConditionCodeType
{

    /**
     * Constant for 'New' value.
     *
     * The seller specified the Item Condition as New, or
     *  did not specify a condition.
     *  (Excludes items that the seller listed as Used.)
     */
    public const VAL_NEW = 'New';

    /**
     * Constant for 'Used' value.
     *
     * The seller specified the Item Condition as Used, or
     *  did not specify a condition.
     *  (Excludes items that the seller listed as New.)
     */
    public const VAL_USED = 'Used';

    /**
     * Constant for 'CustomCode' value.
     *
     * (out) Reserved for internal or future use.
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
