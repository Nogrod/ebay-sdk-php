<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

/**
 * Class representing ShippingRateType
 *
 * Enumerated type defining the shipping rates that the seller will receive through USPS, UPS, or Federal Express to ship an item. The shipping rate also affects how much the buyer will pay for shipping.
 * XSD Type: ShippingRateType
 */
class ShippingRateType
{
    /**
     * Constant for 'OnDemand' value.
     *
     * This value indicates that the seller gets On Demand shipping rates through
     * United Parcel Service (UPS).
     */
    public const VAL_ON_DEMAND = 'OnDemand';

    /**
     * Constant for 'DailyPickup' value.
     *
     * This value indicates that the seller gets Daily Pickup shipping rates through
     * United Parcel Service (UPS).
     */
    public const VAL_DAILY_PICKUP = 'DailyPickup';

    /**
     * Constant for 'FedexStandardList' value.
     *
     * This value indicates that the seller gets Standard shipping rates through
     * Federal Express (FedEx).
     */
    public const VAL_FEDEX_STANDARD_LIST = 'FedexStandardList';

    /**
     * Constant for 'FedexCounter' value.
     *
     * This value indicates that the seller gets Counter shipping rates through Federal
     * Express (FedEx).
     */
    public const VAL_FEDEX_COUNTER = 'FedexCounter';

    /**
     * Constant for 'USPSDiscounted' value.
     *
     * This value indicates that the seller gets Discounted shipping rates through US
     * Postal Service (USPS).
     */
    public const VAL_USPSDISCOUNTED = 'USPSDiscounted';

    /**
     * Constant for 'USPSCommercialPlus' value.
     *
     * This value indicates that the seller gets Commercial Plus shipping rates through
     * US Postal Service (USPS).
     */
    public const VAL_USPSCOMMERCIAL_PLUS = 'USPSCommercialPlus';

    /**
     * Constant for 'FedexDiscounted' value.
     *
     * This value indicates that the seller gets discounted shipping rates through
     * Federal Express (FedEx).
     */
    public const VAL_FEDEX_DISCOUNTED = 'FedexDiscounted';

    /**
     * Constant for 'GoldSilver' value.
     *
     * This value indicates that the seller gets gold/silver-level shipping rates.
     */
    public const VAL_GOLD_SILVER = 'GoldSilver';

    /**
     * Constant for 'PlatTitanium' value.
     *
     * This value indicates that the seller gets platinum/titanium-level shipping
     * rates.
     */
    public const VAL_PLAT_TITANIUM = 'PlatTitanium';

    /**
     * Constant for 'EbayRates' value.
     *
     * This value indicates that the seller gets standard eBay shipping rates.
     */
    public const VAL_EBAY_RATES = 'EbayRates';

    /**
     * Constant for 'Retail' value.
     *
     * This value indicates that the seller gets standard retail shipping rates.
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
