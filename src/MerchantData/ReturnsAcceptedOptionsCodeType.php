<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing ReturnsAcceptedOptionsCodeType
 *
 * Specified whether returns are accepted.
 * XSD Type: ReturnsAcceptedOptionsCodeType
 */
class ReturnsAcceptedOptionsCodeType
{

    /**
     * Constant for 'ReturnsAccepted' value.
     *
     * The seller accepts returns, subject to other details
     *  specified in the policy.
     */
    public const VAL_RETURNS_ACCEPTED = 'ReturnsAccepted';

    /**
     * Constant for 'ReturnsNotAccepted' value.
     *
     * The seller does not accept returns.
     */
    public const VAL_RETURNS_NOT_ACCEPTED = 'ReturnsNotAccepted';

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
