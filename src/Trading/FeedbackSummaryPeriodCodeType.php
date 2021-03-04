<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing FeedbackSummaryPeriodCodeType
 *
 * This enumerated type is used to indicate the length of the time period for which Detailed Seller Ratings are evaluated under the <b>AverageRatingSummary</b> container returned in the <b>GetFeedback</b> call.
 * XSD Type: FeedbackSummaryPeriodCodeType
 */
class FeedbackSummaryPeriodCodeType
{
    /**
     * Constant for 'ThirtyDays' value.
     *
     * This enumeration value indicates that the Detailed Seller Rating statistics
     * shown under each <b>AverageRatingDetails</b> container were compiled over the
     * last 30 days.
     */
    public const VAL_THIRTY_DAYS = 'ThirtyDays';

    /**
     * Constant for 'FiftyTwoWeeks' value.
     *
     * This enumeration value indicates that the Detailed Seller Rating statistics
     * shown under each <b>AverageRatingDetails</b> container were compiled over the
     * last 52 weeks, or one year.
     */
    public const VAL_FIFTY_TWO_WEEKS = 'FiftyTwoWeeks';

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
