<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing HighlightCodeType
 *
 * <span class="tablenote"><b>Note: </b> This enumerated type is deprecated as the Highlighted listing feature is no longer available on any eBay Marketplace sites.
 *  </span>
 * XSD Type: HighlightCodeType
 */
class HighlightCodeType
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
