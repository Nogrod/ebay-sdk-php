<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing HitCounterCodeType
 *
 * Enumerated type containing a list of visit counter styles that can be used in an eBay listing to track page visits.
 * XSD Type: HitCounterCodeType
 */
class HitCounterCodeType
{

    /**
     * Constant for 'NoHitCounter' value.
     *
     * No hit counter. The number of page views will not be available.
     */
    public const VAL_NO_HIT_COUNTER = 'NoHitCounter';

    /**
     * Constant for 'HonestyStyle' value.
     *
     * A basic style hit counter (US only). Non-US sites will return errors if they use
     * HonestyStyle as input, and should use BasicStyle instead.
     */
    public const VAL_HONESTY_STYLE = 'HonestyStyle';

    /**
     * Constant for 'GreenLED' value.
     *
     * A green LED, computer-style hit counter (US only). Non-US sites will return
     * errors if they use GreenLED as input, and should use RetroStyle instead.
     */
    public const VAL_GREEN_LED = 'GreenLED';

    /**
     * Constant for 'Hidden' value.
     *
     * A hidden hit counter (US only). The number of page views will only be available
     * to
     *  the item's seller. For faster "View Item" page loads, use HiddenStyle.
     */
    public const VAL_HIDDEN = 'Hidden';

    /**
     * Constant for 'BasicStyle' value.
     *
     * A basic style hit counter.
     */
    public const VAL_BASIC_STYLE = 'BasicStyle';

    /**
     * Constant for 'RetroStyle' value.
     *
     * A retro, computer-style hit counter.
     */
    public const VAL_RETRO_STYLE = 'RetroStyle';

    /**
     * Constant for 'HiddenStyle' value.
     *
     * A hidden hit counter. The number of page views will only be available to
     *  the item's seller.
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
