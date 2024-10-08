<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing PromotionSchemeCodeType
 *
 * This type is deprecated.
 * XSD Type: PromotionSchemeCodeType
 */
class PromotionSchemeCodeType
{
    /**
     * Constant for 'ItemToItem' value.
     *
     * This value is not used.
     */
    public const VAL_ITEM_TO_ITEM = 'ItemToItem';

    /**
     * Constant for 'ItemToStoreCat' value.
     *
     * This value is not used.
     */
    public const VAL_ITEM_TO_STORE_CAT = 'ItemToStoreCat';

    /**
     * Constant for 'StoreToStoreCat' value.
     *
     * This value is not used.
     */
    public const VAL_STORE_TO_STORE_CAT = 'StoreToStoreCat';

    /**
     * Constant for 'ItemToDefaultRule' value.
     *
     * This value is not used.
     */
    public const VAL_ITEM_TO_DEFAULT_RULE = 'ItemToDefaultRule';

    /**
     * Constant for 'DefaultRule' value.
     *
     * This value is not used.
     */
    public const VAL_DEFAULT_RULE = 'DefaultRule';

    /**
     * Constant for 'CategoryProximity' value.
     *
     * This value is not used.
     */
    public const VAL_CATEGORY_PROXIMITY = 'CategoryProximity';

    /**
     * Constant for 'RelatedCategoryRule' value.
     *
     * This value is not used.
     */
    public const VAL_RELATED_CATEGORY_RULE = 'RelatedCategoryRule';

    /**
     * Constant for 'DefaultUpSellLogic' value.
     *
     * This value is not used.
     */
    public const VAL_DEFAULT_UP_SELL_LOGIC = 'DefaultUpSellLogic';

    /**
     * Constant for 'DefaultCrossSellLogic' value.
     *
     * This value is not used.
     */
    public const VAL_DEFAULT_CROSS_SELL_LOGIC = 'DefaultCrossSellLogic';

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
