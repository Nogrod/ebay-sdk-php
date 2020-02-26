<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing HalfItemConditionCodeType
 *
 * Controls values for item condition, especially for Books catalog.
 * XSD Type: HalfItemConditionCodeType
 */
class HalfItemConditionCodeType
{

    /**
     * Constant for 'BrandNew' value.
     */
    public const VAL_BRAND_NEW = 'BrandNew';

    /**
     * Constant for 'LikeNew' value.
     */
    public const VAL_LIKE_NEW = 'LikeNew';

    /**
     * Constant for 'VeryGood' value.
     */
    public const VAL_VERY_GOOD = 'VeryGood';

    /**
     * Constant for 'Good' value.
     */
    public const VAL_GOOD = 'Good';

    /**
     * Constant for 'Acceptable' value.
     */
    public const VAL_ACCEPTABLE = 'Acceptable';

    /**
     * Constant for 'Used' value.
     */
    public const VAL_USED = 'Used';

    /**
     * Constant for 'CustomCode' value.
     *
     * (out) Reserved for internal or future use
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
