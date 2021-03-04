<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ListingStatusCodeType
 *
 * Specifies an active or ended listing's status in eBay's processing
 *  workflow. If a listing ends with a sale (or sales), eBay needs to
 *  update the sale details (e.g., total price and buyer/high bidder)
 *  and the final value fee. This processing can take several minutes.
 *  If you retrieve a sold item and no details about the buyer/high
 *  bidder are returned or no final value fee is available, use this
 *  listing status information to determine whether eBay has finished
 *  processing the listing.
 * XSD Type: ListingStatusCodeType
 */
class ListingStatusCodeType
{
    /**
     * Constant for 'Active' value.
     *
     * The listing is still active or the listing has ended with
     *  a sale but eBay has not completed processing the sale details
     *  (e.g., total price and high bidder). A multi-item listing is
     *  considered active until all items have winning bids or
     *  purchases or the listing ends with at least one winning bid or
     *  purchase. If the listing has ended with a sale but this Active
     *  status is returned, please allow several minutes for eBay to
     *  finish processing the listing.
     */
    public const VAL_ACTIVE = 'Active';

    /**
     * Constant for 'Ended' value.
     *
     * The listing has ended. If the listing ended with a sale,
     *  eBay has completed processing of the sale. All sale information
     *  returned from eBay (e.g., total price and high bidder) should be
     *  considered accurate and complete. However, the final value fee is
     *  not yet available.
     */
    public const VAL_ENDED = 'Ended';

    /**
     * Constant for 'Completed' value.
     *
     * The listing has closed and eBay has completed processing the sale. All
     *  sale information returned from eBay (e.g., total price and high bidder) should
     *  be considered accurate and complete. Although the Final Value Fee (FVF) for
     *  FixedPriceItem and StoresFixedPrice items is returned by GetSellerTransactions
     *  and GetItemTransactions, all other listing types (excluding Buy It Now
     *  purchases) require the listing status to be Completed before the Final Value
     *  Fee is returned.
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
