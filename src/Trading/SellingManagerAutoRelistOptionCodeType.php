<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing SellingManagerAutoRelistOptionCodeType
 *
 * Enumerated type that defines the values that control how soon the item is relisted after the original listing ends.
 * XSD Type: SellingManagerAutoRelistOptionCodeType
 */
class SellingManagerAutoRelistOptionCodeType
{
    /**
     * Constant for 'RelistImmediately' value.
     *
     * If this value is set, the item is relisted immediately after the original
     * listing ends.
     */
    public const VAL_RELIST_IMMEDIATELY = 'RelistImmediately';

    /**
     * Constant for 'RelistAfterDaysHours' value.
     *
     * If this value is set, the item is relisted after a specified number of days
     * and/or hours. If this value is set, the <b>RelistAfterDays</b> and/or the
     * <b>RelistAfterHours</b> fields must also be set.
     */
    public const VAL_RELIST_AFTER_DAYS_HOURS = 'RelistAfterDaysHours';

    /**
     * Constant for 'RelistAtSpecificTimeOfDay' value.
     *
     * If this value is set, the item is relisted at a specific time of day, either the
     * day when the listing ends (if the specified time has not passed), or the day
     * after (if the specified time has already passed on that day). If this value is
     * set, the <b>RelistAtSpecificTimeOfDay</b> field must also be set.
     */
    public const VAL_RELIST_AT_SPECIFIC_TIME_OF_DAY = 'RelistAtSpecificTimeOfDay';

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
