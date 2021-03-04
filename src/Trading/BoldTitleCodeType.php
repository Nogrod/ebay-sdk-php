<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing BoldTitleCodeType
 *
 * This enumerated type contains the possible values that can be returned in the <b>ListingFeatureDetails.BoldTitle</b> field to indicate whether or not bold listing titles are supported by the eBay site specified in the <b>GeteBayDetails</b> call request.
 * XSD Type: BoldTitleCodeType
 */
class BoldTitleCodeType
{
    /**
     * Constant for 'Enabled' value.
     *
     * This value indicates that bold listing titles are enabled for the eBay site
     * specified in the <b>GeteBayDetails</b> call request.
     */
    public const VAL_ENABLED = 'Enabled';

    /**
     * Constant for 'Disabled' value.
     *
     * This value indicates that bold listing titles are disabled for the eBay site
     * specified in the <b>GeteBayDetails</b> call request.
     */
    public const VAL_DISABLED = 'Disabled';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for future use.
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
