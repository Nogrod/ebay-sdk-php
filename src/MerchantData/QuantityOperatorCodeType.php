<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing QuantityOperatorCodeType
 *
 * Enumerated type used by the <b>QuantityOperator</b> field that is returned under the <b>FavoriteSearch</b> container in a <b>GetMyeBayBuying</b> call. The values in this type indicate how the quantity of the item that the prospective desires compares to the quantity available.
 * XSD Type: QuantityOperatorCodeType
 */
class QuantityOperatorCodeType
{
    /**
     * Constant for 'LessThan' value.
     *
     * This enumeration value indicates that the quantity sought (specified in
     * <b>Quantity</b> field) is less than the quantity available (specified in
     * <b>TotalAvailable</b> field).
     */
    public const VAL_LESS_THAN = 'LessThan';

    /**
     * Constant for 'LessThanOrEqual' value.
     *
     * This enumeration value indicates that the quantity sought (specified in
     * <b>Quantity</b> field) is less than or equal to the quantity available
     * (specified in <b>TotalAvailable</b> field).
     */
    public const VAL_LESS_THAN_OR_EQUAL = 'LessThanOrEqual';

    /**
     * Constant for 'Equal' value.
     *
     * This enumeration value indicates that the quantity sought (specified in
     * <b>Quantity</b> field) is equal to the quantity available (specified in
     * <b>TotalAvailable</b> field).
     */
    public const VAL_EQUAL = 'Equal';

    /**
     * Constant for 'GreaterThan' value.
     *
     * This enumeration value indicates that the quantity sought (specified in
     * <b>Quantity</b> field) is greater than the quantity available (specified in
     * <b>TotalAvailable</b> field).
     */
    public const VAL_GREATER_THAN = 'GreaterThan';

    /**
     * Constant for 'GreaterThanOrEqual' value.
     *
     * This enumeration value indicates that the quantity sought (specified in
     * <b>Quantity</b> field) is greater than or equal to the quantity available
     * (specified in <b>TotalAvailable</b> field).
     */
    public const VAL_GREATER_THAN_OR_EQUAL = 'GreaterThanOrEqual';

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
