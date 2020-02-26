<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing AccountStateCodeType
 *
 * Enumerated type that lists the possible states of an eBay user account.
 * XSD Type: AccountStateCodeType
 */
class AccountStateCodeType
{

    /**
     * Constant for 'Active' value.
     *
     * This value indicates that the eBay user account is active.
     */
    public const VAL_ACTIVE = 'Active';

    /**
     * Constant for 'Pending' value.
     *
     * This value indicates that the eBay user account has been created, but is not yet
     * active, pending additional information or processing by eBay.
     */
    public const VAL_PENDING = 'Pending';

    /**
     * Constant for 'Inactive' value.
     *
     * This value indicates that the eBay user account is inactive. No new seller
     * account entries would be posted by eBay to the account.
     */
    public const VAL_INACTIVE = 'Inactive';

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
