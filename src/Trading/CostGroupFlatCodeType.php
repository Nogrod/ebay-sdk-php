<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing CostGroupFlatCodeType
 *
 * This enumerated type is used to indicate which flat-rate shipping cost group that a shipping service option belongs to.
 * XSD Type: CostGroupFlatCodeType
 */
class CostGroupFlatCodeType
{

    /**
     * Constant for 'Group1MaxFlatShippingCost' value.
     *
     * This enumeration value indicates that the shipping service option belongs to
     * flat-rate shipping cost group 1.
     */
    public const VAL_GROUP_1_MAX_FLAT_SHIPPING_COST = 'Group1MaxFlatShippingCost';

    /**
     * Constant for 'Group2MaxFlatShippingCost' value.
     *
     * This enumeration value indicates that the shipping service option belongs to
     * flat-rate shipping cost group 2.
     */
    public const VAL_GROUP_2_MAX_FLAT_SHIPPING_COST = 'Group2MaxFlatShippingCost';

    /**
     * Constant for 'Group3MaxFlatShippingCost' value.
     *
     * This enumeration value indicates that the shipping service option belongs to
     * flat-rate shipping cost group 3.
     */
    public const VAL_GROUP_3_MAX_FLAT_SHIPPING_COST = 'Group3MaxFlatShippingCost';

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
