<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing WarrantyDurationOptionsCodeType
 *
 * This type is deprecated, as product warranties are no longer applicable or supported in eBay APIs.
 * XSD Type: WarrantyDurationOptionsCodeType
 */
class WarrantyDurationOptionsCodeType
{

    /**
     * Constant for 'Months_1' value.
     *
     * This value indicates that the duration of the warranty will be one month from
     * time of purchase. If this value is returned in the
     * <b>ReturnPolicyDetails.WarrantyDuration</b> container of the
     * <b>GeteBayDetails</b> response, the seller may offer this warranty duration to
     * the buyer. The warranty duration value is specified through the
     * <b>ReturnPolicy.WarrantyDurationOption</b> field in an add/revise/relist API
     * call.
     */
    public const VAL_MONTHS__1 = 'Months_1';

    /**
     * Constant for 'Months_3' value.
     *
     * This value indicates that the duration of the warranty will be three months from
     * time of purchase. If this value is returned in the
     * <b>ReturnPolicyDetails.WarrantyDuration</b> container of the
     * <b>GeteBayDetails</b> response, the seller may offer this warranty duration to
     * the buyer. The warranty duration value is specified through the
     * <b>ReturnPolicy.WarrantyDurationOption</b> field in an add/revise/relist API
     * call.
     */
    public const VAL_MONTHS__3 = 'Months_3';

    /**
     * Constant for 'Months_6' value.
     *
     * This value indicates that the duration of the warranty will be six months from
     * time of purchase. If this value is returned in the
     * <b>ReturnPolicyDetails.WarrantyDuration</b> container of the
     * <b>GeteBayDetails</b> response, the seller may offer this warranty duration to
     * the buyer. The warranty duration value is specified through the
     * <b>ReturnPolicy.WarrantyDurationOption</b> field in an add/revise/relist API
     * call.
     */
    public const VAL_MONTHS__6 = 'Months_6';

    /**
     * Constant for 'Years_1' value.
     *
     * This value indicates that the duration of the warranty will be one year from
     * time of purchase. If this value is returned in the
     * <b>ReturnPolicyDetails.WarrantyDuration</b> container of the
     * <b>GeteBayDetails</b> response, the seller may offer this warranty duration to
     * the buyer. The warranty duration value is specified through the
     * <b>ReturnPolicy.WarrantyDurationOption</b> field in an add/revise/relist API
     * call.
     */
    public const VAL_YEARS__1 = 'Years_1';

    /**
     * Constant for 'Years_2' value.
     *
     * This value indicates that the duration of the warranty will be two years from
     * time of purchase. If this value is returned in the
     * <b>ReturnPolicyDetails.WarrantyDuration</b> container of the
     * <b>GeteBayDetails</b> response, the seller may offer this warranty duration to
     * the buyer. The warranty duration value is specified through the
     * <b>ReturnPolicy.WarrantyDurationOption</b> field in an add/revise/relist API
     * call.
     */
    public const VAL_YEARS__2 = 'Years_2';

    /**
     * Constant for 'Years_3' value.
     *
     * This value indicates that the duration of the warranty will be three years from
     * time of purchase. If this value is returned in the
     * <b>ReturnPolicyDetails.WarrantyDuration</b> container of the
     * <b>GeteBayDetails</b> response, the seller may offer this warranty duration to
     * the buyer. The warranty duration value is specified through the
     * <b>ReturnPolicy.WarrantyDurationOption</b> field in an add/revise/relist API
     * call.
     */
    public const VAL_YEARS__3 = 'Years_3';

    /**
     * Constant for 'Years_MoreThan3' value.
     *
     * This value indicates that the duration of the warranty is longer than three
     * years from time of purchase. If this value is returned in the
     * <b>ReturnPolicyDetails.WarrantyDuration</b> container of the
     * <b>GeteBayDetails</b> response, the seller may offer this warranty duration to
     * the buyer. The warranty duration value is specified through the
     * <b>ReturnPolicy.WarrantyDurationOption</b> field in an add/revise/relist API
     * call.
     */
    public const VAL_YEARS__MORE_THAN_3 = 'Years_MoreThan3';

    /**
     * Constant for 'CustomCode' value.
     *
     * This value is reserved for internal or future use.
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
