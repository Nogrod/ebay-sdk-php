<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing ListingSubtypeEnumType
 *
 * Indicates a specific type of lead generation format listing (within the classified subtypes, which include the general ClassifiedAd subtype).
 * XSD Type: ListingSubtypeEnum
 */
class ListingSubtypeEnumType
{

    /**
     * Constant for 'ClassifiedAd' value.
     *
     * (in/out) General classified ad listing subtype.
     */
    public const VAL_CLASSIFIED_AD = 'ClassifiedAd';

    /**
     * Constant for 'LocalMarketBestOfferOnly' value.
     *
     * (in/out) General LocalMarketBestOfferOnly listing subtype.
     */
    public const VAL_LOCAL_MARKET_BEST_OFFER_ONLY = 'LocalMarketBestOfferOnly';

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
