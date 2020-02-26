<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing RecommendationEngineCodeType
 *
 * This enumerated type is deprecated.
 * XSD Type: RecommendationEngineCodeType
 */
class RecommendationEngineCodeType
{

    /**
     * Constant for 'ListingAnalyzer' value.
     *
     * This value is not used.
     */
    public const VAL_LISTING_ANALYZER = 'ListingAnalyzer';

    /**
     * Constant for 'SIFFTAS' value.
     *
     * This value is not used.
     */
    public const VAL_SIFFTAS = 'SIFFTAS';

    /**
     * Constant for 'ProductPricing' value.
     *
     * This value is not used.
     */
    public const VAL_PRODUCT_PRICING = 'ProductPricing';

    /**
     * Constant for 'CustomCode' value.
     *
     * This value is not used.
     */
    public const VAL_CUSTOM_CODE = 'CustomCode';

    /**
     * Constant for 'SuggestedAttributes' value.
     *
     * This value is not used.
     */
    public const VAL_SUGGESTED_ATTRIBUTES = 'SuggestedAttributes';

    /**
     * Constant for 'ItemSpecifics' value.
     *
     * This value is not used.
     */
    public const VAL_ITEM_SPECIFICS = 'ItemSpecifics';

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
