<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing PerformanceStatusCodeType
 *
 * Enumerated type that defines eBay Seller Levels.
 * XSD Type: PerformanceStatusCodeType
 */
class PerformanceStatusCodeType
{
    /**
     * Constant for 'TopRated' value.
     *
     * This enumeration value indicates that the user's Seller Level is Top-Rated.
     */
    public const VAL_TOP_RATED = 'TopRated';

    /**
     * Constant for 'AboveStandard' value.
     *
     * This enumeration value indicates that the user's Seller Level is Above Standard.
     */
    public const VAL_ABOVE_STANDARD = 'AboveStandard';

    /**
     * Constant for 'Standard' value.
     *
     * This enumeration value indicates that the user's Seller Level is Standard.
     */
    public const VAL_STANDARD = 'Standard';

    /**
     * Constant for 'BelowStandard' value.
     *
     * This enumeration value indicates that the user's Seller Level is Below Standard.
     */
    public const VAL_BELOW_STANDARD = 'BelowStandard';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for internal use.
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
