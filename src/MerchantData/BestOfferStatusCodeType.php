<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing BestOfferStatusCodeType
 *
 * Enumerated type that defines the possible values for the status of a Best Offer or a buyer's/seller's counter offer.
 * XSD Type: BestOfferStatusCodeType
 */
class BestOfferStatusCodeType
{

    /**
     * Constant for 'Pending' value.
     *
     * This value indicates that the buyer's Best Offer on an item is awaiting the
     *  seller's response (accept, decline, counter offer). A buyer's Best Offer
     * expires
     *  after 48 hours without a seller's response.
     */
    public const VAL_PENDING = 'Pending';

    /**
     * Constant for 'Accepted' value.
     *
     * Depending on context, this value can indicate that the buyer's Best Offer was
     *  accepted by the seller, or that the seller's or buyer's counter offer was
     * accepted by the other party.
     */
    public const VAL_ACCEPTED = 'Accepted';

    /**
     * Constant for 'Declined' value.
     *
     * Depending on context, this value can indicate that the buyer's Best Offer was
     *  declined by the seller, or that the seller's or buyer's counter offer was
     * declined by the other party.
     */
    public const VAL_DECLINED = 'Declined';

    /**
     * Constant for 'Expired' value.
     *
     * Depending on context, this value can indicate that the buyer's Best Offer
     * expired due to the passing of 48 hours with no seller response (accept, decline,
     * counter offer), or that the seller's or buyer's counter offer expired due to the
     * passing of 48 hours with no response from other party.
     */
    public const VAL_EXPIRED = 'Expired';

    /**
     * Constant for 'Retracted' value.
     *
     * Depending on context, this value can indicate that the buyer has retracted the
     * Best Offer, or that the seller's or buyer's counter offer has been retracted.
     */
    public const VAL_RETRACTED = 'Retracted';

    /**
     * Constant for 'AdminEnded' value.
     *
     * This value indicates that the Best Offer was ended by an eBay administrator.
     */
    public const VAL_ADMIN_ENDED = 'AdminEnded';

    /**
     * Constant for 'Active' value.
     *
     * Depending on context, this value can indicate that a buyer's Best Offer or that
     * the seller's or buyer's counter offer is in the active state. The
     * <code>Active</code> value can also be used in the <b>GetBestOffers</b> request
     * to retrieve only active Best Offers.
     */
    public const VAL_ACTIVE = 'Active';

    /**
     * Constant for 'Countered' value.
     *
     * Depending on context, this value can indicate that a buyer's Best Offer has been
     * countered by the seller, or that the seller's or buyer's counter offer has been
     * countered by the other party.
     */
    public const VAL_COUNTERED = 'Countered';

    /**
     * Constant for 'All' value.
     *
     * This value is used in the <b>GetBestOffers</b> request to retrieve all Best
     * Offers in all states. This value is only applicable to the <b>GetBestOffers</b>
     * call.
     */
    public const VAL_ALL = 'All';

    /**
     * Constant for 'PendingBuyerPayment' value.
     *
     * This value indicates that the buyer and seller have come to agreement on a Best
     * Offer price, but the seller is still waiting for payment from the buyer. If the
     * buyer does not pay within 48 hours, the Best Offer will expire.
     */
    public const VAL_PENDING_BUYER_PAYMENT = 'PendingBuyerPayment';

    /**
     * Constant for 'PendingBuyerConfirmation' value.
     *
     * This value indicates that the seller is waiting on the buyer to commit to buying
     * the item at the counter offer price.
     */
    public const VAL_PENDING_BUYER_CONFIRMATION = 'PendingBuyerConfirmation';

    /**
     * Constant for 'CustomCode' value.
     *
     * (out) Reserved for internal or future use.
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
