<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing VeROItemStatusCodeType
 *
 * The VeRO reporting status for an item.
 * XSD Type: VeROItemStatusCodeType
 */
class VeROItemStatusCodeType
{
    /**
     * Constant for 'Received' value.
     *
     * (out) The VeRO report request for the item has been received by eBay.
     */
    public const VAL_RECEIVED = 'Received';

    /**
     * Constant for 'Submitted' value.
     *
     * (out) The VeRO report request for the item has been submitted to eBay.
     */
    public const VAL_SUBMITTED = 'Submitted';

    /**
     * Constant for 'Removed' value.
     *
     * (out) The reported item has been ended by eBay.
     */
    public const VAL_REMOVED = 'Removed';

    /**
     * Constant for 'SubmissionFailed' value.
     *
     * (out) The VeRO report request for the item failed.
     */
    public const VAL_SUBMISSION_FAILED = 'SubmissionFailed';

    /**
     * Constant for 'ClarificationRequired' value.
     *
     * (out) The VeRO report request for the item has been received by eBay, but
     *  additional clarification is needed before eBay can end the item.
     */
    public const VAL_CLARIFICATION_REQUIRED = 'ClarificationRequired';

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
