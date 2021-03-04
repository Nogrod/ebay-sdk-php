<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing SellingManagerGeneralPropertyTypeCodeType
 *
 * Container for other alerts for Selling Manager.
 * XSD Type: SellingManagerGeneralPropertyTypeCodeType
 */
class SellingManagerGeneralPropertyTypeCodeType
{
    /**
     * Constant for 'NegativeFeedbackReceived' value.
     *
     * Items that received negative feeback.
     */
    public const VAL_NEGATIVE_FEEDBACK_RECEIVED = 'NegativeFeedbackReceived';

    /**
     * Constant for 'UnpaidItemDispute' value.
     *
     * Unpaid item disputes require your response.
     */
    public const VAL_UNPAID_ITEM_DISPUTE = 'UnpaidItemDispute';

    /**
     * Constant for 'BadEmailTemplate' value.
     *
     * Emails not set because of HTML or active content.
     */
    public const VAL_BAD_EMAIL_TEMPLATE = 'BadEmailTemplate';

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
