<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing TopRatedProgramCodeType
 *
 * Enumerated type that consists of the Top-Rated Seller programs that exist around the world.
 * XSD Type: TopRatedProgramCodeType
 */
class TopRatedProgramCodeType
{

    /**
     * Constant for 'US' value.
     *
     * If this enumeration value is returned, it indicates that the eBay user is in the
     * US Top-Rated Seller program.
     */
    public const VAL_US = 'US';

    /**
     * Constant for 'UK' value.
     *
     * If this enumeration value is returned, it indicates that the eBay user is in the
     * UK Top-Rated Seller program.
     */
    public const VAL_UK = 'UK';

    /**
     * Constant for 'DE' value.
     *
     * If this enumeration value is returned, it indicates that the eBay user is in the
     * Germany Top-Rated Seller program.
     */
    public const VAL_DE = 'DE';

    /**
     * Constant for 'Global' value.
     *
     * If this enumeration value is returned, it indicates that the eBay user is in the
     * Global Top-Rated Seller program.
     */
    public const VAL_GLOBAL = 'Global';

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
