<?php

namespace Nogrod\eBaySDK\BulkDataExchange;

/**
 * Class representing ItemEventType
 *
 * Reserved for internal or future use.
 * XSD Type: ItemEventType
 */
class ItemEventType
{

    /**
     * Constant for 'New' value.
     *
     * Reserved for internal or future use.
     */
    public const VAL_NEW = 'New';

    /**
     * Constant for 'Changed' value.
     *
     * Reserved for internal or future use.
     */
    public const VAL_CHANGED = 'Changed';

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
