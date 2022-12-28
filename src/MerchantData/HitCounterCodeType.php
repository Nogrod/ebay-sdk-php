<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing HitCounterCodeType
 *
 * This type is deprecated.
 * XSD Type: HitCounterCodeType
 */
class HitCounterCodeType
{
    /**
     * Constant for 'NoHitCounter' value.
     *
     * This value is deprecated.
     */
    public const VAL_NO_HIT_COUNTER = 'NoHitCounter';

    /**
     * Constant for 'HonestyStyle' value.
     *
     * This value is deprecated.
     */
    public const VAL_HONESTY_STYLE = 'HonestyStyle';

    /**
     * Constant for 'GreenLED' value.
     *
     * This value is deprecated.
     */
    public const VAL_GREEN_LED = 'GreenLED';

    /**
     * Constant for 'Hidden' value.
     *
     * This value is deprecated.
     */
    public const VAL_HIDDEN = 'Hidden';

    /**
     * Constant for 'BasicStyle' value.
     *
     * This value is deprecated.
     */
    public const VAL_BASIC_STYLE = 'BasicStyle';

    /**
     * Constant for 'RetroStyle' value.
     *
     * This value is deprecated.
     */
    public const VAL_RETRO_STYLE = 'RetroStyle';

    /**
     * Constant for 'HiddenStyle' value.
     *
     * This value is deprecated.
     */
    public const VAL_HIDDEN_STYLE = 'HiddenStyle';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for internal or future use
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
