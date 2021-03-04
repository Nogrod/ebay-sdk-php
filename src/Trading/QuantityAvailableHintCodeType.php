<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing QuantityAvailableHintCodeType
 *
 * Indicates the text message type of the item's quantity availability.
 * XSD Type: QuantityAvailableHintCodeType
 */
class QuantityAvailableHintCodeType
{
    /**
     * Constant for 'Limited' value.
     *
     * (out) The message "Limited quantity available" is shown in the web
     *  flow (e.g., for a flash sale or a Daily Deal).
     */
    public const VAL_LIMITED = 'Limited';

    /**
     * Constant for 'MoreThan' value.
     *
     * (out) The message "More than 10 available" is shown in the web flow.
     *  10 is the value of QuantityThreshold tag based on the seller's
     *  preference.
     */
    public const VAL_MORE_THAN = 'MoreThan';

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
