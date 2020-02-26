<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ProPackCodeType
 *
 * <span class="tablenote"><b>Note: </b> This enumerated type is deprecated as the Pro Pack Bundle feature is no longer available on any eBay Marketplace sites.
 *  </span>
 * XSD Type: ProPackCodeType
 */
class ProPackCodeType
{

    /**
     * Constant for 'Enabled' value.
     *
     * This value indicates that the Pro Pack listing upgrade is available for all
     * sellers on the listing site.
     */
    public const VAL_ENABLED = 'Enabled';

    /**
     * Constant for 'Disabled' value.
     *
     * This value indicates that the Pro Pack listing upgrade is not available to any
     * sellers on the listing site.
     */
    public const VAL_DISABLED = 'Disabled';

    /**
     * Constant for 'PowerSellerOnly' value.
     *
     * This value indicates that the Pro Pack listing upgrade is only available to
     * seller with Power Seller status on the listing site.
     */
    public const VAL_POWER_SELLER_ONLY = 'PowerSellerOnly';

    /**
     * Constant for 'TopRatedSellerOnly' value.
     *
     * This value indicates that the Pro Pack listing upgrade is only available to Top
     * Rated sellers on the listing site.
     */
    public const VAL_TOP_RATED_SELLER_ONLY = 'TopRatedSellerOnly';

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
