<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing AdFormatLeadStatusCodeType
 *
 * Enumerated type that indicates to the owner of a classified ad whether or not an email correspondence from a prospective buyer has been answered.
 * XSD Type: AdFormatLeadStatusCodeType
 */
class AdFormatLeadStatusCodeType
{

    /**
     * Constant for 'New' value.
     *
     * This value will appear in the response if there is a new message from a
     * prospective buyer that the seller has not yet responded to.
     */
    public const VAL_NEW = 'New';

    /**
     * Constant for 'Responded' value.
     *
     * This value will appear in the response if the seller has already responded to
     * the prospective buyer's message.
     */
    public const VAL_RESPONDED = 'Responded';

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
