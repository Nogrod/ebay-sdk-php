<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing ConditionEnabledCodeType
 *
 * Enumerated type that defines the values used to indicate whether Condition IDs are enabled/disabled for all/most of a site's categories (<b>SiteDefaults.ConditionEnabled</b>), or enabled/required/disabled for a specific eBay category (<b>Category.ConditionEnabled</b>).
 * XSD Type: ConditionEnabledCodeType
 */
class ConditionEnabledCodeType
{
    /**
     * Constant for 'Disabled' value.
     *
     * This value indicates that Condition IDs are disabled for all/most of a site's
     * categories (if returned in the <b>SiteDefaults.ConditionEnabled</b> field), or
     * disabled for a specific category (if returned in the
     * <b>Category.ConditionEnabled</b> field).
     */
    public const VAL_DISABLED = 'Disabled';

    /**
     * Constant for 'Enabled' value.
     *
     * This value indicates that Condition IDs are enabled for all/most of a site's
     * categories (if returned in the <b>SiteDefaults.ConditionEnabled</b> field), or
     * enabled for a specific category (if returned in the
     * <b>Category.ConditionEnabled</b> field).
     */
    public const VAL_ENABLED = 'Enabled';

    /**
     * Constant for 'Required' value.
     *
     * This value indicates that Condition IDs are required for a specific category (if
     * returned in the <b>Category.ConditionEnabled</b> field). This value is not
     * applicable at the site level (<b>SiteDefaults</b> container).
     */
    public const VAL_REQUIRED = 'Required';

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
