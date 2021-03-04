<?php

namespace Nogrod\eBaySDK\Shopping;

/**
 * Class representing FeedbackRatingStarCodeType
 *
 * The color of a Feedback score star visually denotes the range in which the member's summary Feedback score falls. The score is the net positive Feedback minus the net negative Feedback left for the member.
 * XSD Type: FeedbackRatingStarCodeType
 */
class FeedbackRatingStarCodeType
{
    /**
     * Constant for 'None' value.
     *
     * This value indicates that the user has a Feedback score ranging from 0-9. There
     * is no Feedback Rating Star associated with this score range.
     */
    public const VAL_NONE = 'None';

    /**
     * Constant for 'Yellow' value.
     *
     * This value indicates that the user has a Feedback score ranging from 10-49.
     *  A Yellow Feedback Rating Star is used with this score range.
     */
    public const VAL_YELLOW = 'Yellow';

    /**
     * Constant for 'Blue' value.
     *
     * This value indicates that the user has a Feedback score ranging from 50-99.
     *  A Blue Feedback Rating Star is used with this score range.
     */
    public const VAL_BLUE = 'Blue';

    /**
     * Constant for 'Turquoise' value.
     *
     * This value indicates that the user has a Feedback score ranging from 100-499.
     *  A Turquoise Feedback Rating Star is used with this score range.
     */
    public const VAL_TURQUOISE = 'Turquoise';

    /**
     * Constant for 'Purple' value.
     *
     * This value indicates that the user has a Feedback score ranging from 500-999.
     *  A Purple Feedback Rating Star is used with this score range.
     */
    public const VAL_PURPLE = 'Purple';

    /**
     * Constant for 'Red' value.
     *
     * This value indicates that the user has a Feedback score ranging from 1000-4999.
     * A Red Feedback Rating Star is used with this score range.
     */
    public const VAL_RED = 'Red';

    /**
     * Constant for 'Green' value.
     *
     * This value indicates that the user has a Feedback score ranging from 5000-9999.
     * A Green Feedback Rating Star is used with this score range.
     */
    public const VAL_GREEN = 'Green';

    /**
     * Constant for 'YellowShooting' value.
     *
     * This value indicates that the user has a Feedback score ranging from
     * 10000-24999. A Yellow Shooting Feedback Rating Star is used with this score
     * range.
     */
    public const VAL_YELLOW_SHOOTING = 'YellowShooting';

    /**
     * Constant for 'TurquoiseShooting' value.
     *
     * This value indicates that the user has a Feedback score ranging from
     * 25000-49999. A Turquoise Shooting Feedback Rating Star is used with this score
     * range.
     */
    public const VAL_TURQUOISE_SHOOTING = 'TurquoiseShooting';

    /**
     * Constant for 'PurpleShooting' value.
     *
     * This value indicates that the user has a Feedback score ranging from
     * 50000-99999. A Purple Shooting Feedback Rating Star is used with this score
     * range.
     */
    public const VAL_PURPLE_SHOOTING = 'PurpleShooting';

    /**
     * Constant for 'RedShooting' value.
     *
     * This value indicates that the user has a Feedback score ranging from
     * 100000-499999. A Red Shooting Feedback Rating Star is used with this score
     * range.
     */
    public const VAL_RED_SHOOTING = 'RedShooting';

    /**
     * Constant for 'GreenShooting' value.
     *
     * This value indicates that the user has a Feedback score ranging from
     * 500000-90000. A Green Shooting Feedback Rating Star is used with this score
     * range.
     */
    public const VAL_GREEN_SHOOTING = 'GreenShooting';

    /**
     * Constant for 'SilverShooting' value.
     *
     * This value indicates that the user has a Feedback score of 1000000 or above. A
     * Silver Shooting Feedback Rating Star is used with this score range.
     */
    public const VAL_SILVER_SHOOTING = 'SilverShooting';

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
