<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing DeliveryMethodCodeType
 *
 * This enumeration type lists the possible delivery methods of a digital gift card. Currently, the only supported delivery method is by email.
 * XSD Type: DeliveryMethodCodeType
 */
class DeliveryMethodCodeType
{
    /**
     * Constant for 'Email' value.
     *
     * This value indicates that the link to download the digital gift card will be
     * delivered to the recipient by email.
     */
    public const VAL_EMAIL = 'Email';

    /**
     * Constant for 'CustomCode' value.
     *
     * This value is reserved for internal or future use.
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
