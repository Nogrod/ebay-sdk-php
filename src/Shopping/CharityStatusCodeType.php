<?php

namespace Nogrod\eBaySDK\Shopping;

/**
 * Class representing CharityStatusCodeType
 *
 * Enumerated type defining the possible states for a nonprofit charity organization registered with the PayPal Giving Fund.
 * XSD Type: CharityStatusCodeType
 */
class CharityStatusCodeType
{

    /**
     * Constant for 'Valid' value.
     *
     * The specified nonprofit charity organization is a valid nonprofit charity
     * organization according to the requirements of the PayPal Giving Fund.
     */
    public const VAL_VALID = 'Valid';

    /**
     * Constant for 'NoLongerValid' value.
     *
     * The specified nonprofit charity organization is no longer a valid nonprofit
     * charity organization according to the requirements of the PayPal Giving Fund.
     */
    public const VAL_NO_LONGER_VALID = 'NoLongerValid';

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
