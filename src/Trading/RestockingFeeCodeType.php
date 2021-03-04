<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing RestockingFeeCodeType
 *
 * This type is deprecated, as sellers are no longer allowed to set a restocking fee through a listings's return policy.
 * XSD Type: RestockingFeeCodeType
 */
class RestockingFeeCodeType
{
    /**
     * Constant for 'NoRestockingFee' value.
     *
     * This value indicates that the seller will not charge a restocking fee to the
     *  buyer if the item is returned.
     */
    public const VAL_NO_RESTOCKING_FEE = 'NoRestockingFee';

    /**
     * Constant for 'Percent_10' value.
     *
     * This value indicates that the seller charges the buyer a restocking fee of 10
     *  percent of the item's purchase price if the item is returned.
     */
    public const VAL_PERCENT__10 = 'Percent_10';

    /**
     * Constant for 'Percent_15' value.
     *
     * This value indicates that the seller charges the buyer a restocking fee of 15
     *  percent of the item's purchase price if the item is returned.
     */
    public const VAL_PERCENT__15 = 'Percent_15';

    /**
     * Constant for 'Percent_20' value.
     *
     * This value indicates that the seller charges the buyer a restocking fee of up to
     * 20
     *  percent of the item's purchase price if the item is returned.
     */
    public const VAL_PERCENT__20 = 'Percent_20';

    /**
     * Constant for 'Percent_25' value.
     *
     * This is no longer a valid value.
     */
    public const VAL_PERCENT__25 = 'Percent_25';

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
