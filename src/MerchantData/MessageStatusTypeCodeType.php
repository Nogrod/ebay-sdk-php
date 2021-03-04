<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing MessageStatusTypeCodeType
 *
 * This enumerated type is used to indicate whether or not a question has been answered.
 * XSD Type: MessageStatusTypeCodeType
 */
class MessageStatusTypeCodeType
{
    /**
     * Constant for 'Answered' value.
     *
     * The question has been answered at least once.
     */
    public const VAL_ANSWERED = 'Answered';

    /**
     * Constant for 'Unanswered' value.
     *
     * The question has not yet been answered.
     */
    public const VAL_UNANSWERED = 'Unanswered';

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
