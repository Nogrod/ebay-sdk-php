<?php

namespace Nogrod\eBaySDK\BulkDataExchange;

/**
 * Class representing IncludeListingType
 *
 * Simple type defining the listing types that may be specified in the <b>includeListingType</b> field to control whether fixed-price and/or auction listings are returned in an <b>ActiveInventoryReport</b> response.
 * XSD Type: IncludeListingType
 */
class IncludeListingType
{
    /**
     * Constant for 'Auction' value.
     *
     * This value is specified in the <b>includeListingType</b> field if the user wants
     * to limit the data returned in the <b>ActiveInventoryReport</b> response to
     * auction listings.
     */
    public const VAL_AUCTION = 'Auction';

    /**
     * Constant for 'FixedPrice' value.
     *
     * This value is specified in the <b>includeListingType</b> field if the user wants
     * to limit the data returned in the <b>ActiveInventoryReport</b> response to
     * fixed-price listings.
     */
    public const VAL_FIXED_PRICE = 'FixedPrice';

    /**
     * Constant for 'AuctionAndFixedPrice' value.
     *
     * This value is specified in the <b>includeListingType</b> field if the user wants
     * data from both auction and fixed-price listings returned in the
     * <b>ActiveInventoryReport</b> response.
     */
    public const VAL_AUCTION_AND_FIXED_PRICE = 'AuctionAndFixedPrice';

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
