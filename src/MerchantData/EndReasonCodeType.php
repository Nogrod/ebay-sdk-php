<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing EndReasonCodeType
 *
 * This type defines the reasons that a seller can end an item listing early. This value is required if the seller ends a listing early. This can be on an item that hasn't
 *  sold and has no bids or on an item that has bids and the seller wants to sell the item to the high bidder now.
 * XSD Type: EndReasonCodeType
 */
class EndReasonCodeType
{

    /**
     * Constant for 'LostOrBroken' value.
     *
     * Use this enumeration value in an End listing call if the seller is ending a
     * listing because the item was lost or is broken.
     */
    public const VAL_LOST_OR_BROKEN = 'LostOrBroken';

    /**
     * Constant for 'NotAvailable' value.
     *
     * Use this enumeration value in an End listing call if the seller is ending a
     * listing because the item is no longer available for sale.
     */
    public const VAL_NOT_AVAILABLE = 'NotAvailable';

    /**
     * Constant for 'Incorrect' value.
     *
     * Use this enumeration value in an End listing call if the seller is ending a
     * listing because the start price or reserve price is incorrect.
     */
    public const VAL_INCORRECT = 'Incorrect';

    /**
     * Constant for 'OtherListingError' value.
     *
     * Use this enumeration value in an End listing call if the seller is ending a
     * listing because the listing contained an error (other than start price or
     * reserve price).
     */
    public const VAL_OTHER_LISTING_ERROR = 'OtherListingError';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for internal or future use.
     */
    public const VAL_CUSTOM_CODE = 'CustomCode';

    /**
     * Constant for 'SellToHighBidder' value.
     *
     * Use this enumeration value in an End listing call if the seller is ending a
     * listing because they want to sell an auction item to the current high bidder. A
     * seller can end a listing early in order to sell to the current high bidder when
     * the listing has qualifying bids (i.e., there is a current high bid that,
     *  when applicable, meets the minimum reserve price) and there is more than 12
     * hours before the listing ends.
     *  <br>
     *  <b>Note</b>: In the last 12 hours of an item listing, you cannot end an item
     * early if it has bids.
     */
    public const VAL_SELL_TO_HIGH_BIDDER = 'SellToHighBidder';

    /**
     * Constant for 'Sold' value.
     *
     * The vehicle was sold. Applies to local classified listings for vehicles only.
     */
    public const VAL_SOLD = 'Sold';

    /**
     * Constant for 'ProductDeleted' value.
     *
     * For internal use only. This enumeration value cannot be used by the seller in an
     * End listing call, but it will get returned in <b>GetItem</b> if a listing was
     * administratively ended by eBay if the item in a listing becomes unpurchasable
     * due to the eBay Catalog product associated with the listing being removed from
     * the catalog.
     */
    public const VAL_PRODUCT_DELETED = 'ProductDeleted';

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
