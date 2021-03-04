<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing QuestionTypeCodeType
 *
 * Enumerated type used by the member messaging calls to indicate the type of question that was asked.
 * XSD Type: QuestionTypeCodeType
 */
class QuestionTypeCodeType
{
    /**
     * Constant for 'General' value.
     *
     * This enumeration value indicates that a general question was asked about the
     * order line item.
     */
    public const VAL_GENERAL = 'General';

    /**
     * Constant for 'Shipping' value.
     *
     * This enumeration value indicates that a question about shipping the order line
     * item was asked.
     */
    public const VAL_SHIPPING = 'Shipping';

    /**
     * Constant for 'Payment' value.
     *
     * This enumeration value indicates that a payment question was asked about the
     * order line item.
     */
    public const VAL_PAYMENT = 'Payment';

    /**
     * Constant for 'MultipleItemShipping' value.
     *
     * This enumeration value indicates that a question was asked about a shipment that
     * involves multiple packages.
     */
    public const VAL_MULTIPLE_ITEM_SHIPPING = 'MultipleItemShipping';

    /**
     * Constant for 'CustomizedSubject' value.
     *
     * This enumeration value indicates that question was asked about a customized
     * subject.
     */
    public const VAL_CUSTOMIZED_SUBJECT = 'CustomizedSubject';

    /**
     * Constant for 'None' value.
     *
     * This enumeration value indicates that question does not have a subject.
     */
    public const VAL_NONE = 'None';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for future or internal use.
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
