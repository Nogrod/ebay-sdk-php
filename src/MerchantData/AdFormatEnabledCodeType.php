<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing AdFormatEnabledCodeType
 *
 * This enumerated type contains a list of values that will indicate whether or not an Ad Format listing type is enabled for an eBay site or for an eBay category.
 * XSD Type: AdFormatEnabledCodeType
 */
class AdFormatEnabledCodeType
{
    /**
     * Constant for 'Disabled' value.
     *
     * This value indicates that the Classified Ad format feature is disabled for the
     * site or category.
     */
    public const VAL_DISABLED = 'Disabled';

    /**
     * Constant for 'Enabled' value.
     *
     * This value indicates that the Classified Ad format feature is enabled for the
     * site or category.
     */
    public const VAL_ENABLED = 'Enabled';

    /**
     * Constant for 'Only' value.
     *
     * This value indicates that the Classified Ad format is the only listing type
     * supported by the eBay category. This value is not applicable at the eBay site
     * level.
     */
    public const VAL_ONLY = 'Only';

    /**
     * Constant for 'ClassifiedAdEnabled' value.
     *
     * This value indicates that the lead-generation Classified Ad format feature is
     * enabled for the site or category.
     */
    public const VAL_CLASSIFIED_AD_ENABLED = 'ClassifiedAdEnabled';

    /**
     * Constant for 'ClassifiedAdOnly' value.
     *
     * This value indicates that the lead-generation Classified Ad format is the only
     * listing type supported by the eBay category. This value is not applicable at the
     * eBay site level.
     */
    public const VAL_CLASSIFIED_AD_ONLY = 'ClassifiedAdOnly';

    /**
     * Constant for 'LocalMarketBestOfferOnly' value.
     *
     * This value indicates that eBay Motors Local Market listings are enabled for the
     * site or category.
     */
    public const VAL_LOCAL_MARKET_BEST_OFFER_ONLY = 'LocalMarketBestOfferOnly';

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
