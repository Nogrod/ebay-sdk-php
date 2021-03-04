<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing HomePageFeaturedCodeType
 *
 * Specifies whether a listing feature is available for the site specified in the request.
 * XSD Type: HomePageFeaturedCodeType
 */
class HomePageFeaturedCodeType
{
    /**
     * Constant for 'Enabled' value.
     *
     * The listing feature is enabled for the site.
     */
    public const VAL_ENABLED = 'Enabled';

    /**
     * Constant for 'Disabled' value.
     *
     * The listing feature is disabled for the site.
     */
    public const VAL_DISABLED = 'Disabled';

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
