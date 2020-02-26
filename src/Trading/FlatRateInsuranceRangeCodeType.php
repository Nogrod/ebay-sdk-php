<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing FlatRateInsuranceRangeCodeType
 *
 * This type is deprecated, as shipping insurance is no longer applicable or supported in eBay APIs.
 * XSD Type: FlatRateInsuranceRangeCodeType
 */
class FlatRateInsuranceRangeCodeType
{

    /**
     * Constant for 'FlatRateInsuranceRange1' value.
     *
     * Shipping insurance is no longer applicable or supported in eBay APIs.
     */
    public const VAL_FLAT_RATE_INSURANCE_RANGE_1 = 'FlatRateInsuranceRange1';

    /**
     * Constant for 'FlatRateInsuranceRange2' value.
     *
     * Shipping insurance is no longer applicable or supported in eBay APIs.
     */
    public const VAL_FLAT_RATE_INSURANCE_RANGE_2 = 'FlatRateInsuranceRange2';

    /**
     * Constant for 'FlatRateInsuranceRange3' value.
     *
     * Shipping insurance is no longer applicable or supported in eBay APIs.
     */
    public const VAL_FLAT_RATE_INSURANCE_RANGE_3 = 'FlatRateInsuranceRange3';

    /**
     * Constant for 'FlatRateInsuranceRange4' value.
     *
     * Shipping insurance is no longer applicable or supported in eBay APIs.
     */
    public const VAL_FLAT_RATE_INSURANCE_RANGE_4 = 'FlatRateInsuranceRange4';

    /**
     * Constant for 'FlatRateInsuranceRange5' value.
     *
     * Shipping insurance is no longer applicable or supported in eBay APIs.
     */
    public const VAL_FLAT_RATE_INSURANCE_RANGE_5 = 'FlatRateInsuranceRange5';

    /**
     * Constant for 'FlatRateInsuranceRange6' value.
     *
     * Shipping insurance is no longer applicable or supported in eBay APIs.
     */
    public const VAL_FLAT_RATE_INSURANCE_RANGE_6 = 'FlatRateInsuranceRange6';

    /**
     * Constant for 'CustomCode' value.
     *
     * Shipping insurance is no longer applicable or supported in eBay APIs.
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
