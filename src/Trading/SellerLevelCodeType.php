<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing SellerLevelCodeType
 *
 * Indicates the user's eBay PowerSeller tier. PowerSellers are distinguished in 5
 *  tiers based on average monthly sales. Benefits and services vary for each tier.
 *  eBay calculates eligibility for each tier monthly.
 * XSD Type: SellerLevelCodeType
 */
class SellerLevelCodeType
{

    /**
     * Constant for 'Bronze' value.
     *
     * Bronze (lowest tier)
     */
    public const VAL_BRONZE = 'Bronze';

    /**
     * Constant for 'Silver' value.
     *
     * Silver (between Bronze and Gold)
     */
    public const VAL_SILVER = 'Silver';

    /**
     * Constant for 'Gold' value.
     *
     * Gold (between Silver and Platinum)
     */
    public const VAL_GOLD = 'Gold';

    /**
     * Constant for 'Platinum' value.
     *
     * Platinum (between Gold and Titanium)
     */
    public const VAL_PLATINUM = 'Platinum';

    /**
     * Constant for 'Titanium' value.
     *
     * Titanium (highest tier)
     */
    public const VAL_TITANIUM = 'Titanium';

    /**
     * Constant for 'None' value.
     *
     * Not a PowerSeller (eBay has not yet evaluated your PowerSeller status, or
     *  you have not chosen to be a member of the PowerSeller program,
     *  or you lost your PowerSeller status due to a policy violation.)
     */
    public const VAL_NONE = 'None';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for internal or future use
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
