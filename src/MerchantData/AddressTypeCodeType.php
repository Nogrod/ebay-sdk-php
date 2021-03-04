<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing AddressTypeCodeType
 *
 * Enumerated type that indicates whether or not a nonprofit charity organization is
 *  registered with the PayPal Giving Fund. See the <a href="http://pages.ebay.com/help/sell/nonprofit.html#enrolling">Enrolling your nonprofit</a> help topic for more information on registering with
 *  the PayPal Giving Fund and the benefits that come with being a registered eBay for Charity organization.
 * XSD Type: AddressTypeCodeType
 */
class AddressTypeCodeType
{
    /**
     * Constant for 'Contact' value.
     *
     * This value indicates that the address contained in the <b>NonProfitAddress</b>
     *  container is for a non-registered charity organization.
     */
    public const VAL_CONTACT = 'Contact';

    /**
     * Constant for 'Registered' value.
     *
     * This value indicates that the address contained in the <b>NonProfitAddress</b>
     *  container is for a charity organization registered with the PayPal Giving Fund.
     */
    public const VAL_REGISTERED = 'Registered';

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
