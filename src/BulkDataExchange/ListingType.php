<?php

namespace Nogrod\eBaySDK\BulkDataExchange;

/**
 * Class representing ListingType
 *
 * Enumerated type used by the <b>listingType</b> field if the seller wants to retrieve Half.com orders. The <b>listingType</b> field is only used if the seller wants to retrieve Half.com orders.
 * XSD Type: ListingType
 */
class ListingType
{
    /**
     * Constant for 'Half' value.
     *
     * This value is used if the seller wants to retrieve Half.com orders.
     */
    public const VAL_HALF = 'Half';

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
