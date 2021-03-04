<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing AutomatedLeaveFeedbackEventCodeType
 *
 * Enumerated type that defines the possible settings for the automated feedback mechanism embedded in the <b>SetSellingManagerFeedbackOptions</b> API call. This type is only applicable to Selling Manager Pro users.
 * XSD Type: AutomatedLeaveFeedbackEventCodeType
 */
class AutomatedLeaveFeedbackEventCodeType
{
    /**
     * Constant for 'PositiveFeedbackReceived' value.
     *
     * If the <b>AutomatedLeaveFeedbackEvent</b> field is set to this value, the
     * automated feedback mechanism will automatically leave feedback for the buyer
     * once that buyer leaves positive feedback for the seller.
     */
    public const VAL_POSITIVE_FEEDBACK_RECEIVED = 'PositiveFeedbackReceived';

    /**
     * Constant for 'PaymentReceived' value.
     *
     * If the <b>AutomatedLeaveFeedbackEvent</b> field is set to this value, the
     * automated feedback mechanism will automatically leave feedback for the buyer
     * once that buyer pays for the line item.
     */
    public const VAL_PAYMENT_RECEIVED = 'PaymentReceived';

    /**
     * Constant for 'None' value.
     *
     * If the <b>AutomatedLeaveFeedbackEvent</b> field is set to this value, the
     * automated feedback mechanism will essentially be turned off. Automated feedback
     * will not occur.
     */
    public const VAL_NONE = 'None';

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
