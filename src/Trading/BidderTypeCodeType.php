<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing BidderTypeCodeType
 *
 * This enumerated type is deprecated.
 * XSD Type: BidderTypeCodeType
 */
class BidderTypeCodeType
{

    /**
     * Constant for 'AllBidder' value.
     *
     * This value is not used.
     */
    public const VAL_ALL_BIDDER = 'AllBidder';

    /**
     * Constant for 'HighBidder' value.
     *
     * This value is not used.
     */
    public const VAL_HIGH_BIDDER = 'HighBidder';

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
