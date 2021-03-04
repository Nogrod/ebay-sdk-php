<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing PromotionItemPriceTypeCodeType
 *
 * This enumerated type is deprecated.
 * XSD Type: PromotionItemPriceTypeCodeType
 */
class PromotionItemPriceTypeCodeType
{
    /**
     * Constant for 'AuctionPrice' value.
     *
     * This value is not used.
     */
    public const VAL_AUCTION_PRICE = 'AuctionPrice';

    /**
     * Constant for 'BuyItNowPrice' value.
     *
     * This value is not used.
     */
    public const VAL_BUY_IT_NOW_PRICE = 'BuyItNowPrice';

    /**
     * Constant for 'BestOfferOnlyPrice' value.
     *
     * This value is not used.
     */
    public const VAL_BEST_OFFER_ONLY_PRICE = 'BestOfferOnlyPrice';

    /**
     * Constant for 'ClassifiedAdPrice' value.
     *
     * This value is not used.
     */
    public const VAL_CLASSIFIED_AD_PRICE = 'ClassifiedAdPrice';

    /**
     * Constant for 'CustomCode' value.
     *
     * This value is not used.
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
