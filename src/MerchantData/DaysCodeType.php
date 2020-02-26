<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing DaysCodeType
 *
 * Specifies the range of days the seller can be contacted.
 * XSD Type: DaysCodeType
 */
class DaysCodeType
{

    /**
     * Constant for 'None' value.
     *
     * Seller does not want to be contacted. Contact hours will not be supported for
     *  any days. If contact hours are specified, they will be ignored.
     */
    public const VAL_NONE = 'None';

    /**
     * Constant for 'EveryDay' value.
     *
     * Seller can be contacted any day during the specified contact hours.
     */
    public const VAL_EVERY_DAY = 'EveryDay';

    /**
     * Constant for 'Weekdays' value.
     *
     * Seller can be contacted Monday through Friday during the specified
     *  contact hours.
     */
    public const VAL_WEEKDAYS = 'Weekdays';

    /**
     * Constant for 'Weekends' value.
     *
     * Seller can be contacted Saturday or Sunday during the specified
     *  contact hours.
     */
    public const VAL_WEEKENDS = 'Weekends';

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
