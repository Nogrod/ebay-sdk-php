<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing TokenStatusCodeType
 *
 * Contains the status of the token
 * XSD Type: TokenStatusCodeType
 */
class TokenStatusCodeType
{

    /**
     * Constant for 'Active' value.
     *
     * Token is Active
     */
    public const VAL_ACTIVE = 'Active';

    /**
     * Constant for 'Expired' value.
     *
     * Token is Expired
     */
    public const VAL_EXPIRED = 'Expired';

    /**
     * Constant for 'RevokedByeBay' value.
     *
     * Token is revoked by eBay
     */
    public const VAL_REVOKED_BYE_BAY = 'RevokedByeBay';

    /**
     * Constant for 'RevokedByUser' value.
     *
     * Token is revoked by user
     */
    public const VAL_REVOKED_BY_USER = 'RevokedByUser';

    /**
     * Constant for 'RevokedByApp' value.
     *
     * Token is revoked by Application
     */
    public const VAL_REVOKED_BY_APP = 'RevokedByApp';

    /**
     * Constant for 'Invalid' value.
     *
     * Token is Invalid
     */
    public const VAL_INVALID = 'Invalid';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for internal or future use
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
