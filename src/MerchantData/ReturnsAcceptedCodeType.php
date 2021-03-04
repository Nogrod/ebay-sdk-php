<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing ReturnsAcceptedCodeType
 *
 * This enum defines the different options that are available for specifying whether or not the seller accepts returns.
 * XSD Type: ReturnsAcceptedCodeType
 */
class ReturnsAcceptedCodeType
{
    /**
     * Constant for 'ReturnsAccepted' value.
     *
     * <code>ReturnsAccepted</code> indicates the seller does accept returns.
     */
    public const VAL_RETURNS_ACCEPTED = 'ReturnsAccepted';

    /**
     * Constant for 'ReturnsNotAccepted' value.
     *
     * <code>ReturnsNotAccepted</code> indicates the seller does <i>not</i> accept
     * returns.
     */
    public const VAL_RETURNS_NOT_ACCEPTED = 'ReturnsNotAccepted';

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
