<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing FeedbackRatingStarCodeType
 *
 * The color of a feedback score star visually denotes the
 *  range in which the member's summary feedback score falls. The score
 *  is the net positive feedback minus the net negative feedback left
 *  for the member.
 * XSD Type: FeedbackRatingStarCodeType
 */
class FeedbackRatingStarCodeType
{
    /**
     * Constant for 'None' value.
     *
     * No graphic displayed, feedback score 0-9.
     */
    public const VAL_NONE = 'None';

    /**
     * Constant for 'Yellow' value.
     *
     * Yellow Star, feedback score 10-49.
     */
    public const VAL_YELLOW = 'Yellow';

    /**
     * Constant for 'Blue' value.
     *
     * Blue Star, feedback score 50-99.
     */
    public const VAL_BLUE = 'Blue';

    /**
     * Constant for 'Turquoise' value.
     *
     * Turquoise Star, feedback score 100-499.
     */
    public const VAL_TURQUOISE = 'Turquoise';

    /**
     * Constant for 'Purple' value.
     *
     * Purple Star, feedback score 500-999.
     */
    public const VAL_PURPLE = 'Purple';

    /**
     * Constant for 'Red' value.
     *
     * Red Star, feedback score 1,000-4,999
     */
    public const VAL_RED = 'Red';

    /**
     * Constant for 'Green' value.
     *
     * Green Star, feedback score 5,000-9,999.
     */
    public const VAL_GREEN = 'Green';

    /**
     * Constant for 'YellowShooting' value.
     *
     * Yellow Shooting Star, feedback score 10,000-24,999.
     */
    public const VAL_YELLOW_SHOOTING = 'YellowShooting';

    /**
     * Constant for 'TurquoiseShooting' value.
     *
     * Turquoise Shooting Star, feedback score 25,000-49,999.
     */
    public const VAL_TURQUOISE_SHOOTING = 'TurquoiseShooting';

    /**
     * Constant for 'PurpleShooting' value.
     *
     * Purple Shooting Star, feedback score 50,000-99,999.
     */
    public const VAL_PURPLE_SHOOTING = 'PurpleShooting';

    /**
     * Constant for 'RedShooting' value.
     *
     * Red Shooting Star, feedback score 100,000-499,999.
     */
    public const VAL_RED_SHOOTING = 'RedShooting';

    /**
     * Constant for 'GreenShooting' value.
     *
     * Green Shooting Star, feedback score 500,000-999,999.
     */
    public const VAL_GREEN_SHOOTING = 'GreenShooting';

    /**
     * Constant for 'SilverShooting' value.
     *
     * Silver Shooting Star, feedback score 1,000,000 and above.
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
