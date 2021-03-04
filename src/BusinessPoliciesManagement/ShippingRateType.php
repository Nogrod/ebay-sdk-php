<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

/**
 * Class representing ShippingRateType
 *
 * Shipping Rate Type.
 * XSD Type: ShippingRateType
 */
class ShippingRateType
{
    /**
     * Constant for 'OnDemand' value.
     */
    public const VAL_ON_DEMAND = 'OnDemand';

    /**
     * Constant for 'DailyPickup' value.
     */
    public const VAL_DAILY_PICKUP = 'DailyPickup';

    /**
     * Constant for 'FedexStandardList' value.
     */
    public const VAL_FEDEX_STANDARD_LIST = 'FedexStandardList';

    /**
     * Constant for 'FedexDiscounted' value.
     */
    public const VAL_FEDEX_DISCOUNTED = 'FedexDiscounted';

    /**
     * Constant for 'USPSDiscounted' value.
     */
    public const VAL_USPSDISCOUNTED = 'USPSDiscounted';

    /**
     * Constant for 'USPSCommercialPlus' value.
     */
    public const VAL_USPSCOMMERCIAL_PLUS = 'USPSCommercialPlus';

    /**
     * Constant for 'GoldSilver' value.
     */
    public const VAL_GOLD_SILVER = 'GoldSilver';

    /**
     * Constant for 'PlatTitanium' value.
     */
    public const VAL_PLAT_TITANIUM = 'PlatTitanium';

    /**
     * Constant for 'EbayRates' value.
     */
    public const VAL_EBAY_RATES = 'EbayRates';

    /**
     * Constant for 'Retail' value.
     */
    public const VAL_RETAIL = 'Retail';

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
