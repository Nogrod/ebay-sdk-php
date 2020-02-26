<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing SummaryWindowPeriodCodeType
 *
 * The period of time for which to create a summary.
 * XSD Type: SummaryWindowPeriodCodeType
 */
class SummaryWindowPeriodCodeType
{

    /**
     * Constant for 'Last24Hours' value.
     *
     * The last 24 hours.
     */
    public const VAL_LAST_24_HOURS = 'Last24Hours';

    /**
     * Constant for 'Last7Days' value.
     *
     * The last 7 days.
     */
    public const VAL_LAST_7_DAYS = 'Last7Days';

    /**
     * Constant for 'Last31Days' value.
     *
     * The last 31 days.
     */
    public const VAL_LAST_31_DAYS = 'Last31Days';

    /**
     * Constant for 'CurrentWeek' value.
     *
     * The current week.
     */
    public const VAL_CURRENT_WEEK = 'CurrentWeek';

    /**
     * Constant for 'LastWeek' value.
     *
     * The prior week.
     */
    public const VAL_LAST_WEEK = 'LastWeek';

    /**
     * Constant for 'CurrentMonth' value.
     *
     * The current month.
     */
    public const VAL_CURRENT_MONTH = 'CurrentMonth';

    /**
     * Constant for 'LastMonth' value.
     *
     * The prior month.
     */
    public const VAL_LAST_MONTH = 'LastMonth';

    /**
     * Constant for 'Last60Days' value.
     *
     * The last 60 days.
     */
    public const VAL_LAST_60_DAYS = 'Last60Days';

    /**
     * Constant for 'CustomCode' value.
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
