<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing MailOptionsTypeCodeType
 *
 * This enumerated type is deprecated.
 * XSD Type: MailOptionsTypeCodeType
 */
class MailOptionsTypeCodeType
{

    /**
     * Constant for 'DoNotSendEmail' value.
     *
     * This field is deprecated.
     */
    public const VAL_DO_NOT_SEND_EMAIL = 'DoNotSendEmail';

    /**
     * Constant for 'EmailCopyToSender' value.
     *
     * This field is deprecated.
     */
    public const VAL_EMAIL_COPY_TO_SENDER = 'EmailCopyToSender';

    /**
     * Constant for 'HideSenderEmailAddress' value.
     *
     * This field is deprecated.
     */
    public const VAL_HIDE_SENDER_EMAIL_ADDRESS = 'HideSenderEmailAddress';

    /**
     * Constant for 'CustomCode' value.
     *
     * This field is deprecated.
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
