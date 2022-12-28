<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing FeedbackResponseCodeType
 *
 * This enumerated type is used to indicate the type of response to a Feedback entry.
 * XSD Type: FeedbackResponseCodeType
 */
class FeedbackResponseCodeType
{
    /**
     * Constant for 'Reply' value.
     *
     * This enumeration value is used in the <b>ResponseType</b> field of a
     * <b>RespondToFeedback</b> call if the user is replying to a Feedback entry left
     * by another user.
     */
    public const VAL_REPLY = 'Reply';

    /**
     * Constant for 'FollowUp' value.
     *
     * This enumeration value is used in the <b>ResponseType</b> field of a
     * <b>RespondToFeedback</b> call if the user is following up on a Feedback entry
     * comment left by another user.
     */
    public const VAL_FOLLOW_UP = 'FollowUp';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for future use.
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
