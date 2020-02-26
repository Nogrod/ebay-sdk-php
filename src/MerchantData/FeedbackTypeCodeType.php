<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing FeedbackTypeCodeType
 *
 * This enumerated type consists of the values that may be used in the request of a <b>GetFeedback</b> call in order to retrieve a specific type of Feedback.
 * XSD Type: FeedbackTypeCodeType
 */
class FeedbackTypeCodeType
{

    /**
     * Constant for 'FeedbackReceivedAsSeller' value.
     *
     * This enumeration value will be used in the <b>FeedbackType</b> field of a
     * <b>GetFeedback</b> call if the user only wants to retrieve the Feedback data
     * that they have received acting as a seller.
     */
    public const VAL_FEEDBACK_RECEIVED_AS_SELLER = 'FeedbackReceivedAsSeller';

    /**
     * Constant for 'FeedbackReceivedAsBuyer' value.
     *
     * This enumeration value will be used in the <b>FeedbackType</b> field of a
     * <b>GetFeedback</b> call if the user only wants to retrieve the Feedback data
     * that they have received acting as a buyer.
     */
    public const VAL_FEEDBACK_RECEIVED_AS_BUYER = 'FeedbackReceivedAsBuyer';

    /**
     * Constant for 'FeedbackReceived' value.
     *
     * This enumeration value will be used in the <b>FeedbackType</b> field of a
     * <b>GetFeedback</b> call if the user wants to retrieve the Feedback data that
     * they have received acting as a seller and buyer.
     */
    public const VAL_FEEDBACK_RECEIVED = 'FeedbackReceived';

    /**
     * Constant for 'FeedbackLeft' value.
     *
     * This enumeration value will be used in the <b>FeedbackType</b> field of a
     * <b>GetFeedback</b> call if the user wants to retrieve the Feedback they have
     * left for their order partners while acting as a seller or buyer.
     */
    public const VAL_FEEDBACK_LEFT = 'FeedbackLeft';

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
