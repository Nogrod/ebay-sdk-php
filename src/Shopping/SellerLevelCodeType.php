<?php

namespace Nogrod\eBaySDK\Shopping;

/**
 * Class representing SellerLevelCodeType
 *
 * Enumerated type that consists of the five different Power Seller levels. Each Power Seller tier is based on average monthly sales, and eBay reviews eligibility on a monthly basis. Available benefits and services to the seller vary for each tier.
 * XSD Type: SellerLevelCodeType
 */
class SellerLevelCodeType
{

    /**
     * Constant for 'Bronze' value.
     *
     * This enumeration value indicates that the Power Seller is at the Bronze level,
     * which is the lowest tier.
     */
    public const VAL_BRONZE = 'Bronze';

    /**
     * Constant for 'Silver' value.
     *
     * This enumeration value indicates that the Power Seller is at the Silver level,
     * which is the second lowest tier (between Bronze and Gold).
     */
    public const VAL_SILVER = 'Silver';

    /**
     * Constant for 'Gold' value.
     *
     * This enumeration value indicates that the Power Seller is at the Gold level,
     * which is the third tier (between Silver and Platinum).
     */
    public const VAL_GOLD = 'Gold';

    /**
     * Constant for 'Platinum' value.
     *
     * This enumeration value indicates that the Power Seller is at the Platinum level,
     * which is the second highest tier (between Gold and Titanium).
     */
    public const VAL_PLATINUM = 'Platinum';

    /**
     * Constant for 'Titanium' value.
     *
     * This enumeration value indicates that the Power Seller is at the Titanium level,
     * which is the highest tier.
     */
    public const VAL_TITANIUM = 'Titanium';

    /**
     * Constant for 'Diamond' value.
     *
     * Deprecated value.
     */
    public const VAL_DIAMOND = 'Diamond';

    /**
     * Constant for 'None' value.
     *
     * This enumeration value indicates that the seller does not qualify to be a Power
     * Seller based on calculated monthly sales.
     */
    public const VAL_NONE = 'None';

    /**
     * Constant for 'CustomCode' value.
     *
     * eserved for internal or future use
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
