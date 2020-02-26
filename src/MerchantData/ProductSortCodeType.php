<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing ProductSortCodeType
 *
 * This enumerated type is deprecated.
 * XSD Type: ProductSortCodeType
 */
class ProductSortCodeType
{

    /**
     * Constant for 'PopularityAsc' value.
     *
     * This value is not used.
     */
    public const VAL_POPULARITY_ASC = 'PopularityAsc';

    /**
     * Constant for 'PopularityDesc' value.
     *
     * This value is not used.
     */
    public const VAL_POPULARITY_DESC = 'PopularityDesc';

    /**
     * Constant for 'RatingAsc' value.
     *
     * This value is not used.
     */
    public const VAL_RATING_ASC = 'RatingAsc';

    /**
     * Constant for 'RatingDesc' value.
     *
     * This value is not used.
     */
    public const VAL_RATING_DESC = 'RatingDesc';

    /**
     * Constant for 'ReviewCountAsc' value.
     *
     * This value is not used.
     */
    public const VAL_REVIEW_COUNT_ASC = 'ReviewCountAsc';

    /**
     * Constant for 'ReviewCountDesc' value.
     *
     * This value is not used.
     */
    public const VAL_REVIEW_COUNT_DESC = 'ReviewCountDesc';

    /**
     * Constant for 'ItemCountAsc' value.
     *
     * This value is not used.
     */
    public const VAL_ITEM_COUNT_ASC = 'ItemCountAsc';

    /**
     * Constant for 'ItemCountDesc' value.
     *
     * This value is not used.
     */
    public const VAL_ITEM_COUNT_DESC = 'ItemCountDesc';

    /**
     * Constant for 'TitleAsc' value.
     *
     * This value is not used.
     */
    public const VAL_TITLE_ASC = 'TitleAsc';

    /**
     * Constant for 'TitleDesc' value.
     *
     * This value is not used.
     */
    public const VAL_TITLE_DESC = 'TitleDesc';

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
