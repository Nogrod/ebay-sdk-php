<?php

namespace Nogrod\eBaySDK\Shopping;

/**
 * Class representing ListingTypeCodeType
 *
 * This enumerated type contains the valid selling formats for eBay listings.
 * XSD Type: ListingTypeCodeType
 */
class ListingTypeCodeType
{

    /**
     * Constant for 'Unknown' value.
     *
     * This enumeration value may be returned if the listing format cannot be
     * determined.
     */
    public const VAL_UNKNOWN = 'Unknown';

    /**
     * Constant for 'Chinese' value.
     *
     * This enumeration value is returned for auction listings.
     */
    public const VAL_CHINESE = 'Chinese';

    /**
     * Constant for 'Dutch' value.
     *
     * This value is no longer applicable as Dutch auctions are deprecated.
     */
    public const VAL_DUTCH = 'Dutch';

    /**
     * Constant for 'Live' value.
     *
     * This value is no longer applicable as the original eBay live auctions are
     * deprecated.
     */
    public const VAL_LIVE = 'Live';

    /**
     * Constant for 'Auction' value.
     *
     * This value is no longer applicable as <code>Chinese</code> is the enumeration
     * value that is returned for all auction listings.
     */
    public const VAL_AUCTION = 'Auction';

    /**
     * Constant for 'AdType' value.
     *
     * This enumeration value is returned for advertisements to solicit inquiries on
     * listings such as real estate. Permits no
     *  bidding on that item, service, or property. To express interest, a buyer fills
     *  out a contact form that eBay forwards to the seller as a lead. This format
     *  does not enable buyers and sellers to transact online through eBay, and eBay
     *  Feedback is not available for ad format listings.
     */
    public const VAL_AD_TYPE = 'AdType';

    /**
     * Constant for 'StoresFixedPrice' value.
     *
     * This value is no longer applicable and has been replaced by the
     * <code>FixedPriceItem</code> value.
     */
    public const VAL_STORES_FIXED_PRICE = 'StoresFixedPrice';

    /**
     * Constant for 'PersonalOffer' value.
     *
     * This enumeration value is returned for Second Chance Offers. A seller can
     * propose a Second Chance Offer to a non-winning bidder on an ended listing. A
     * seller can make an offer to a non-winning bidder when either the winning bidder
     * has failed to pay for an item, or the seller has a duplicate item. Second Chance
     * Offer items are on eBay, but they do not appear when browsing or searching
     * listings. You need to already know the item ID in order to retrieve a Second
     * Chance Offer.
     */
    public const VAL_PERSONAL_OFFER = 'PersonalOffer';

    /**
     * Constant for 'FixedPriceItem' value.
     *
     * This enumeration value is returned for fixed-price listings.
     */
    public const VAL_FIXED_PRICE_ITEM = 'FixedPriceItem';

    /**
     * Constant for 'Half' value.
     *
     * This value is no longer applicable as the Half.com site has been shut down.
     */
    public const VAL_HALF = 'Half';

    /**
     * Constant for 'LeadGeneration' value.
     *
     * This enumeration value is returned for Lead Generation listings.
     */
    public const VAL_LEAD_GENERATION = 'LeadGeneration';

    /**
     * Constant for 'Express' value.
     *
     * This value is no longer applicable as eBay Express listings have been
     * deprecated.
     */
    public const VAL_EXPRESS = 'Express';

    /**
     * Constant for 'CustomCode' value.
     *
     * Placeholder value. See
     *  <a
     * href="http://developer.ebay.com/DevZone/shopping/docs/CallRef/types/simpleTypes.html#token">token</a>.
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
