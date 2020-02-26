<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing AccessRuleCurrentStatusCodeType
 *
 * Enumerated type that defines the possible values that can be returned in the <b>RuleCurrentStatus</b> output field of the <b>GetApiAccessRules</b> call. The <b>RuleCurrentStatus</b> is only returned if the daily, hourly, or periodic call limit for the corresponding API call has been exceeded, or if a call limit does not apply to the API call.
 * XSD Type: AccessRuleCurrentStatusCodeType
 */
class AccessRuleCurrentStatusCodeType
{

    /**
     * Constant for 'NotSet' value.
     *
     * This value indicates that usage limits do not apply to the corresponding API
     * call.
     */
    public const VAL_NOT_SET = 'NotSet';

    /**
     * Constant for 'HourlyLimitExceeded' value.
     *
     * This value indicates that your application has exceeded its hourly hard call
     * limit for the corresponding API call.
     */
    public const VAL_HOURLY_LIMIT_EXCEEDED = 'HourlyLimitExceeded';

    /**
     * Constant for 'DailyLimitExceeded' value.
     *
     * This value indicates that your application has exceeded its daily hard call
     * limit for the corresponding API call.
     */
    public const VAL_DAILY_LIMIT_EXCEEDED = 'DailyLimitExceeded';

    /**
     * Constant for 'PeriodicLimitExceeded' value.
     *
     * This value indicates that your application has exceeded its periodic hard call
     * limit for the corresponding API call. The period is defined in the
     * <b>ApiAccessRule.Period</b> field and can be a calendar month or a specific
     * number of days.
     */
    public const VAL_PERIODIC_LIMIT_EXCEEDED = 'PeriodicLimitExceeded';

    /**
     * Constant for 'HourlySoftLimitExceeded' value.
     *
     * This value indicates that your application has exceeded its hourly soft call
     * limit for the corresponding API call.
     */
    public const VAL_HOURLY_SOFT_LIMIT_EXCEEDED = 'HourlySoftLimitExceeded';

    /**
     * Constant for 'DailySoftLimitExceeded' value.
     *
     * This value indicates that your application has exceeded its daily soft call
     * limit for the corresponding API call.
     */
    public const VAL_DAILY_SOFT_LIMIT_EXCEEDED = 'DailySoftLimitExceeded';

    /**
     * Constant for 'PeriodicSoftLimitExceeded' value.
     *
     * This value indicates that your application has exceeded its periodic soft call
     * limit for the corresponding API call. The period is defined in the
     * <b>ApiAccessRule.Period</b> field and can be a calendar month or a specific
     * number of days.
     */
    public const VAL_PERIODIC_SOFT_LIMIT_EXCEEDED = 'PeriodicSoftLimitExceeded';

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
