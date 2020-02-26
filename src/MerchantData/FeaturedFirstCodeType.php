<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing FeaturedFirstCodeType
 *
 * Enumerated type that indicates if the Featured First listing upgrade is enabled for the specified site, and whether it is restricted to a specific seller level.
 *  <br/><br/>
 *  <span class="tablenote"><strong>Note:</strong>
 *  Beginning in mid-August 2019, the Featured First listing upgrade can no longer be added for new listings in any eBay marketplace. Existing listings enabled with this feature will still be honored until mid-September 2019, at which time the feature will be fully disabled.
 *  </span>
 * XSD Type: FeaturedFirstCodeType
 */
class FeaturedFirstCodeType
{

    /**
     * Constant for 'Enabled' value.
     *
     * This enumeration value indicates that the Featured First listing upgrade is
     * enabled for all sellers on the site.
     */
    public const VAL_ENABLED = 'Enabled';

    /**
     * Constant for 'Disabled' value.
     *
     * This enumeration value indicates that the Featured First listing upgrade is not
     * available for any sellers on the site.
     */
    public const VAL_DISABLED = 'Disabled';

    /**
     * Constant for 'PowerSellerOnly' value.
     *
     * This enumeration value indicates that the Featured First listing upgrade is only
     * enabled for Power Sellers on the site.
     */
    public const VAL_POWER_SELLER_ONLY = 'PowerSellerOnly';

    /**
     * Constant for 'TopRatedSellerOnly' value.
     *
     * This enumeration value indicates that the Featured First listing upgrade is only
     * enabled for Top-Rated Sellers on the site.
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
