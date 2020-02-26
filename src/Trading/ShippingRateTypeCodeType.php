<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ShippingRateTypeCodeType
 *
 * A shipping rate scale for shipping through UPS that affects the shipping cost calculated for UPS (lower if <strong>ShippingRateType</strong> is <code>DailyPickup</code>). For calculated shipping only.
 * XSD Type: ShippingRateTypeCodeType
 */
class ShippingRateTypeCodeType
{

    /**
     * Constant for 'OnDemand' value.
     *
     * "On-demand" shipping rate scale.
     */
    public const VAL_ON_DEMAND = 'OnDemand';

    /**
     * Constant for 'DailyPickup' value.
     *
     * "Daily pickup" shipping rate scale.
     */
    public const VAL_DAILY_PICKUP = 'DailyPickup';

    /**
     * Constant for 'StandardList' value.
     *
     * "Standard List" shipping rate scale.
     */
    public const VAL_STANDARD_LIST = 'StandardList';

    /**
     * Constant for 'Counter' value.
     *
     * "Counter" shipping rate scale.
     */
    public const VAL_COUNTER = 'Counter';

    /**
     * Constant for 'Discounted' value.
     *
     * "Discounted" shipping rate scale.
     */
    public const VAL_DISCOUNTED = 'Discounted';

    /**
     * Constant for 'CommercialPlus' value.
     *
     * "Commercial Plus" shipping rate scale.
     */
    public const VAL_COMMERCIAL_PLUS = 'CommercialPlus';

    /**
     * Constant for 'GoldSilver' value.
     *
     * "Commercial Plus Discounted Rate1" shipping rate scale.
     */
    public const VAL_GOLD_SILVER = 'GoldSilver';

    /**
     * Constant for 'PlatTitanium' value.
     *
     * "Commercial Plus Discounted Rate2" shipping rate scale.
     */
    public const VAL_PLAT_TITANIUM = 'PlatTitanium';

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
