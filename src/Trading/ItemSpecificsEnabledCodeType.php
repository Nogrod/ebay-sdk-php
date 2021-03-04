<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ItemSpecificsEnabledCodeType
 *
 * This enumerated type is used to indicate whether an eBay marketplace and/or category supports the use of Item Specifics when creating, revising, or relisting an item.
 * XSD Type: ItemSpecificsEnabledCodeType
 */
class ItemSpecificsEnabledCodeType
{
    /**
     * Constant for 'Disabled' value.
     *
     * This enumeration value indicates that the seller may not use Item Specifics for
     * the specified eBay marketplace or corresponding category.
     */
    public const VAL_DISABLED = 'Disabled';

    /**
     * Constant for 'Enabled' value.
     *
     * This enumeration value indicates that the seller may use Item Specifics for the
     * specified eBay marketplace or corresponding category.
     */
    public const VAL_ENABLED = 'Enabled';

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
