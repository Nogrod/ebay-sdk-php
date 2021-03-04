<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing BidActionCodeType
 *
 * This enumerated type lists the possible actions that can be made on a listing or Best Offer and the possible states of a bid or Best Offer.
 * XSD Type: BidActionCodeType
 */
class BidActionCodeType
{
    /**
     * Constant for 'Unknown' value.
     *
     * This value indicates that the action or state is unknown.
     */
    public const VAL_UNKNOWN = 'Unknown';

    /**
     * Constant for 'Bid' value.
     *
     * This value is used in a <b>PlaceOffer</b> call if the buyer wants to bid on an
     * auction listing. If this value is used, the prospective buyer must also include
     * the <b>Offer.MaxBid</b> field in the <b>PlaceOffer</b> call and specify the
     * maximum amount that they are willing to bid in an attempt to win the auction.
     * eBay will automatically rebid on behalf of the buyer each time the buyer is
     * outbid up until the time when their <b>Offer.MaxBid</b> value threshold is met.
     * The <b>GetAllBidders</b> call will return this value as well if the buyer has
     * set up automatic bidding using a maximum bid threshold.
     */
    public const VAL_BID = 'Bid';

    /**
     * Constant for 'NotUsed' value.
     *
     * This value is no longer applicable.
     */
    public const VAL_NOT_USED = 'NotUsed';

    /**
     * Constant for 'Retraction' value.
     *
     * This value indicates that a buyer's Best Offer or a seller's or buyer's counter
     * offer was retracted. This value cannot be used with the <b>PlaceOffer</b> call.
     */
    public const VAL_RETRACTION = 'Retraction';

    /**
     * Constant for 'AutoRetraction' value.
     *
     * This value indicates that a buyer's Best Offer or a seller's or buyer's counter
     * offer was automatically retracted. This value cannot be used with the
     * <b>PlaceOffer</b> call.
     */
    public const VAL_AUTO_RETRACTION = 'AutoRetraction';

    /**
     * Constant for 'Cancelled' value.
     *
     * This value indicates that a buyer's Best Offer or a seller's or buyer's counter
     * offer was cancelled. This value cannot be used with the <b>PlaceOffer</b> call.
     */
    public const VAL_CANCELLED = 'Cancelled';

    /**
     * Constant for 'AutoCancel' value.
     *
     * This value indicates that a buyer's Best Offer or a seller's or buyer's counter
     * offer was automatically cancelled. This value cannot be used with the
     * <b>PlaceOffer</b> call.
     */
    public const VAL_AUTO_CANCEL = 'AutoCancel';

    /**
     * Constant for 'Absentee' value.
     *
     * This value is returned in the <b>GetAllBidders</b> call if an absentee bid was
     * made, which means that eBay made a bid on the auction listing on behalf of the
     * buyer, who has set a maximum bid threshold. This value is not applicable for the
     * <b>PlaceOffer</b> call, as the buyer would use the <code>Bid</code> value
     * instead, as well as setting a <b>Offer.MaxBid</b> value that would specify the
     * maxium amount that the buyer is willing to bid in an attempt to win the auction.
     */
    public const VAL_ABSENTEE = 'Absentee';

    /**
     * Constant for 'BuyItNow' value.
     *
     * This value is returned in the <b>GetAllBidders</b> call if the buyer purchased
     * an item in an auction listing using the Buy It Now feature. This value is not
     * applicable for the <b>PlaceOffer</b> call, as the buyer would use the
     * <code>Purchase</code> value instead.
     */
    public const VAL_BUY_IT_NOW = 'BuyItNow';

    /**
     * Constant for 'Purchase' value.
     *
     * This value is used in a <b>PlaceOffer</b> call if the buyer wants to purchase a
     * fixed-price item or purchase an auction item enabled with the Buy It Now
     * feature. Note that this call cannot be used to purchase items that require
     * immediate payment. The <b>GetAllBidders</b> call will return this value as well
     * if the buyer purchased the item. For items requiring immediate payment, the
     * <b>PlaceOffer</b> call cannot be used for purchase.
     */
    public const VAL_PURCHASE = 'Purchase';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for future or internal use.
     */
    public const VAL_CUSTOM_CODE = 'CustomCode';

    /**
     * Constant for 'Offer' value.
     *
     * This value is used in a <b>PlaceOffer</b> call if the buyer is proposing a Best
     * Offer to the seller. The <b>GetAllBidders</b> call will return this value as
     * well if the buyer proposed a Best Offer to the seller.
     */
    public const VAL_OFFER = 'Offer';

    /**
     * Constant for 'Counter' value.
     *
     * This value is used in a <b>PlaceOffer</b> call if the buyer is proposing a
     * counter offer to the seller's proposed counter offer. The <b>GetAllBidders</b>
     * call will return this value as well if the buyer proposed a counter offer to the
     * seller's counter offer.
     */
    public const VAL_COUNTER = 'Counter';

    /**
     * Constant for 'Accept' value.
     *
     * This value is used in a <b>PlaceOffer</b> call if the buyer is accepting a
     * counter offer proposed by the seller. The <b>GetAllBidders</b> call will return
     * this value as well if the buyer accepted a counter offer.
     */
    public const VAL_ACCEPT = 'Accept';

    /**
     * Constant for 'Decline' value.
     *
     * This value is used in a <b>PlaceOffer</b> call if the buyer is declining a
     * counter offer proposed by the seller. The <b>GetAllBidders</b> call will return
     * this value as well if the buyer declined a counter offer.
     */
    public const VAL_DECLINE = 'Decline';

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
