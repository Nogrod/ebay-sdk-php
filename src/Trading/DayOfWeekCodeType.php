<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing DayOfWeekCodeType
 *
 * Enumerated type that consists of all days of the week.
 * XSD Type: DayOfWeekCodeType
 */
class DayOfWeekCodeType
{

    /**
     * Constant for 'Sunday' value.
     *
     * This enumeration value indicates the day of the week is Sunday.
     */
    public const VAL_SUNDAY = 'Sunday';

    /**
     * Constant for 'Monday' value.
     *
     * This enumeration value indicates the day of the week is Monday.
     */
    public const VAL_MONDAY = 'Monday';

    /**
     * Constant for 'Tuesday' value.
     *
     * This enumeration value indicates the day of the week is Tuesday.
     */
    public const VAL_TUESDAY = 'Tuesday';

    /**
     * Constant for 'Wednesday' value.
     *
     * This enumeration value indicates the day of the week is Wednesday.
     */
    public const VAL_WEDNESDAY = 'Wednesday';

    /**
     * Constant for 'Thursday' value.
     *
     * This enumeration value indicates the day of the week is Thursday.
     */
    public const VAL_THURSDAY = 'Thursday';

    /**
     * Constant for 'Friday' value.
     *
     * This enumeration value indicates the day of the week is Friday.
     */
    public const VAL_FRIDAY = 'Friday';

    /**
     * Constant for 'Saturday' value.
     *
     * This enumeration value indicates the day of the week is Saturday.
     */
    public const VAL_SATURDAY = 'Saturday';

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
