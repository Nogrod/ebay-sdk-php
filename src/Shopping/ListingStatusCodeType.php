<?php

namespace Nogrod\eBaySDK\Shopping;

/**
 * Class representing ListingStatusCodeType
 *
 * This enumeration type contains the different states of an eBay listing in eBay's processing workflow. If a listing ends with a sale (or sales), eBay needs to update the sale details (e.g., total price and buyer/high bidder) and the Final Value Fee.
 * XSD Type: ListingStatusCodeType
 */
class ListingStatusCodeType
{
    /**
     * Constant for 'Active' value.
     *
     * This enumeration value indicates that the listing is still active. A
     * multiple-quantity, fixed-price listing is considered active until the quantity
     * available is '0', or the listing's scheduled end time has passed.
     */
    public const VAL_ACTIVE = 'Active';

    /**
     * Constant for 'Ended' value.
     *
     * This enumeration value indicates that the listing has ended and eBay has
     * completed processing any sales/winning bids. The next state after 'Ended' is
     * 'Completed'.
     */
    public const VAL_ENDED = 'Ended';

    /**
     * Constant for 'Completed' value.
     *
     * This enumeration value indicates that the listing has ended and eBay has
     * completed processing any sales/winning bids, and the calculation of the seller's
     * Final Value Fee.
     */
    public const VAL_COMPLETED = 'Completed';

    /**
     * Constant for 'CustomCode' value.
     *
     * This enumeration is reserved for future use.
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
