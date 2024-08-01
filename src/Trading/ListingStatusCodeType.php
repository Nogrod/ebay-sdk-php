<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ListingStatusCodeType
 *
 * Specifies an active or ended listing's status in eBay's processing
 *  workflow. If a listing ends with a sale (or sales), eBay needs to
 *  update the sale details (e.g., total price and buyer/high bidder)
 *  and the transaction fees.
 * XSD Type: ListingStatusCodeType
 */
class ListingStatusCodeType
{
    /**
     * Constant for 'Active' value.
     *
     * The listing is still active or the listing has ended with
     *  a sale but eBay has not completed processing the sale details. If the listing
     * has ended with a sale but this Active
     *  status is returned, please allow several minutes for eBay to
     *  finish processing the listing.
     */
    public const VAL_ACTIVE = 'Active';

    /**
     * Constant for 'Ended' value.
     *
     * The listing has ended. If the listing ended with a sale,
     *  eBay has completed processing of the sale. All sale information
     *  returned from eBay should be considered accurate and complete. However, the
     * transaction fees are
     *  not yet available.
     */
    public const VAL_ENDED = 'Ended';

    /**
     * Constant for 'Completed' value.
     *
     * The listing has closed and eBay has completed processing the sale. All
     *  sale information returned from eBay should be considered accurate and complete.
     * In this state, all transaction fees should be calculated.
     */
    public const VAL_COMPLETED = 'Completed';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for internal or future use.
     */
    public const VAL_CUSTOM_CODE = 'CustomCode';

    /**
     * Constant for 'Custom' value.
     *
     * Reserved for internal or future use.
     */
    public const VAL_CUSTOM = 'Custom';

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
