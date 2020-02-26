<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing UserIdentityCodeType
 *
 * Enumerated type this is used to indicate the type of user that initiated a monetary transaction.
 * XSD Type: UserIdentityCodeType
 */
class UserIdentityCodeType
{

    /**
     * Constant for 'eBayUser' value.
     *
     * This enumeration value indicates that an eBay user initiated the monetary
     * transaction.
     */
    public const VAL_E_BAY_USER = 'eBayUser';

    /**
     * Constant for 'eBayPartner' value.
     *
     * This enumeration value indicates that an eBay partner (such as Pitney Bowes)
     * initiated the monetary transaction.
     */
    public const VAL_E_BAY_PARTNER = 'eBayPartner';

    /**
     * Constant for 'CustomCode' value.
     *
     * This value is reserved for future use.
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
