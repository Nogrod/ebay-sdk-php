<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing MarkUpMarkDownEventTypeCodeType
 *
 * Valid application status codes, either MarkUp (application was marked up,
 *  communication is restored) or MarkDown (application was marked down, no
 *  communication).
 * XSD Type: MarkUpMarkDownEventTypeCodeType
 */
class MarkUpMarkDownEventTypeCodeType
{
    /**
     * Constant for 'MarkUp' value.
     *
     * Status indicating the application was or is marked up.
     */
    public const VAL_MARK_UP = 'MarkUp';

    /**
     * Constant for 'MarkDown' value.
     *
     * Status indicating the application was marked down.
     */
    public const VAL_MARK_DOWN = 'MarkDown';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for future internal or external use.
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
