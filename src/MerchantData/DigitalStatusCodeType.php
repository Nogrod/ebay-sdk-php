<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing DigitalStatusCodeType
 *
 * This enumeration type lists the possible states of a purchased digital delivery card.
 * XSD Type: DigitalStatusCodeType
 */
class DigitalStatusCodeType
{
    /**
     * Constant for 'Inactive' value.
     *
     * This enumeration value indicates that the digital gift card has yet to be
     * activated by the buyer or recipient of gift card.
     */
    public const VAL_INACTIVE = 'Inactive';

    /**
     * Constant for 'Activated' value.
     *
     * This enumeration value indicates that the digital gift card has been activated
     * by the buyer or recipient of gift card.
     */
    public const VAL_ACTIVATED = 'Activated';

    /**
     * Constant for 'Downloaded' value.
     *
     * This enumeration value indicates that the digital gift card has been downloaded
     * by the buyer or recipient of gift card. The next step would be to activate the
     * gift card.
     */
    public const VAL_DOWNLOADED = 'Downloaded';

    /**
     * Constant for 'Deactivated' value.
     *
     * This enumeration value indicates that the digital gift card has been
     * deactivated.
     */
    public const VAL_DEACTIVATED = 'Deactivated';

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
