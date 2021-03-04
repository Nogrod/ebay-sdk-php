<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing PromotionalSaleTypeCodeType
 *
 * <span class="tablenote"><b>Note: </b> While the Trading API continues to support item promotions for an eBay store owner, the Trading API will no longer be enhanced with any new item promotion capabilities as they are developed by eBay. In addition, Promoted Listings are also not supported by the Trading API. For these two reasons, it is recommended that sellers/developers make plans to migrate to the
 *  <a href="https://developer.ebay.com/api-docs/sell/marketing/overview.html">Marketing API</a>, which provides all Promotions Manager and Promoted Listings capabilities, and this API will continue to be improved and enhanced as more marketing features become available to sellers.
 *  </span>
 *  Values specify or indicate the type of promotional sale offered.
 *  Promotional sales give store owners the ability to apply discounts and/or
 *  free shipping across many listings for a specific duration.
 * XSD Type: PromotionalSaleTypeCodeType
 */
class PromotionalSaleTypeCodeType
{
    /**
     * Constant for 'PriceDiscountOnly' value.
     *
     * Sale offers price discount only.
     */
    public const VAL_PRICE_DISCOUNT_ONLY = 'PriceDiscountOnly';

    /**
     * Constant for 'FreeShippingOnly' value.
     *
     * Sale offers free shipping only.
     */
    public const VAL_FREE_SHIPPING_ONLY = 'FreeShippingOnly';

    /**
     * Constant for 'PriceDiscountAndFreeShipping' value.
     *
     * Sale offers both price discount and free shipping.
     */
    public const VAL_PRICE_DISCOUNT_AND_FREE_SHIPPING = 'PriceDiscountAndFreeShipping';

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
