<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing BestOfferTypeCodeType
 *
 * Enumerated type that defines the possible offer types for the Best Offer feature.
 * XSD Type: BestOfferTypeCodeType
 */
class BestOfferTypeCodeType
{
    /**
     * Constant for 'BuyerBestOffer' value.
     *
     * This value indicates that the offer is an original Best Offer made by a
     * prospective buyer to the seller.
     */
    public const VAL_BUYER_BEST_OFFER = 'BuyerBestOffer';

    /**
     * Constant for 'BuyerCounterOffer' value.
     *
     * This value indicates that the offer is a prospective buyer's counter offer
     * against the seller's counter offer.
     */
    public const VAL_BUYER_COUNTER_OFFER = 'BuyerCounterOffer';

    /**
     * Constant for 'SellerCounterOffer' value.
     *
     * This value indicates that the offer is a seller's counter offer against the
     * seller's original Best Offer.
     */
    public const VAL_SELLER_COUNTER_OFFER = 'SellerCounterOffer';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for internal or future use.
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
