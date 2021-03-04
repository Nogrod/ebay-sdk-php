<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing SkypeContactOptionCodeType
 *
 * This type is no longer applicable as member communication through Skype has been disabled in API calls.
 * XSD Type: SkypeContactOptionCodeType
 */
class SkypeContactOptionCodeType
{
    /**
     * Constant for 'Chat' value.
     *
     * The seller can communicate with the buyer by Skype Chat.
     */
    public const VAL_CHAT = 'Chat';

    /**
     * Constant for 'Voice' value.
     *
     * The seller can communicate with the buyer by Skype Voice.
     */
    public const VAL_VOICE = 'Voice';

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
