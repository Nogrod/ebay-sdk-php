<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing CategoryFeatureDetailLevelCodeType
 *
 * This type is deprecated. Use <b>DetailLevelCodeType</b> instead.
 * XSD Type: CategoryFeatureDetailLevelCodeType
 */
class CategoryFeatureDetailLevelCodeType
{
    /**
     * Constant for 'ReturnAll' value.
     *
     * Return all available data.
     */
    public const VAL_RETURN_ALL = 'ReturnAll';

    /**
     * Constant for 'ReturnFeatureDefinitions' value.
     *
     * Return the category feature definitions only.
     */
    public const VAL_RETURN_FEATURE_DEFINITIONS = 'ReturnFeatureDefinitions';

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
