<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing FlatShippingRateOptionCodeType
 *
 * This enumerated type is deprecated.
 * XSD Type: FlatShippingRateOptionCodeType
 */
class FlatShippingRateOptionCodeType
{

    /**
     * Constant for 'ChargeAmountForEachAdditionalItem' value.
     *
     * This value is not used.
     */
    public const VAL_CHARGE_AMOUNT_FOR_EACH_ADDITIONAL_ITEM = 'ChargeAmountForEachAdditionalItem';

    /**
     * Constant for 'DeductAmountFromEachAdditionalItem' value.
     *
     * This value is not used.
     */
    public const VAL_DEDUCT_AMOUNT_FROM_EACH_ADDITIONAL_ITEM = 'DeductAmountFromEachAdditionalItem';

    /**
     * Constant for 'ShipAdditionalItemsFree' value.
     *
     * This value is not used.
     */
    public const VAL_SHIP_ADDITIONAL_ITEMS_FREE = 'ShipAdditionalItemsFree';

    /**
     * Constant for 'CustomCode' value.
     *
     * This value is not used.
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
