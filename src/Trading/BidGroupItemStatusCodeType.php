<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing BidGroupItemStatusCodeType
 *
 * This enumerated type is deprecated.
 * XSD Type: BidGroupItemStatusCodeType
 */
class BidGroupItemStatusCodeType
{

    /**
     * Constant for 'CurrentBid' value.
     *
     * This value is not used.
     */
    public const VAL_CURRENT_BID = 'CurrentBid';

    /**
     * Constant for 'Cancelled' value.
     *
     * This value is not used.
     */
    public const VAL_CANCELLED = 'Cancelled';

    /**
     * Constant for 'Pending' value.
     *
     * This value is not used.
     */
    public const VAL_PENDING = 'Pending';

    /**
     * Constant for 'Skipped' value.
     *
     * This value is not used.
     */
    public const VAL_SKIPPED = 'Skipped';

    /**
     * Constant for 'Ended' value.
     *
     * This value is not used.
     */
    public const VAL_ENDED = 'Ended';

    /**
     * Constant for 'Won' value.
     *
     * This value is not used.
     */
    public const VAL_WON = 'Won';

    /**
     * Constant for 'GroupClosed' value.
     *
     * This value is not used.
     */
    public const VAL_GROUP_CLOSED = 'GroupClosed';

    /**
     * Constant for 'CustomCode' value.
     *
     * This value is not used.
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
