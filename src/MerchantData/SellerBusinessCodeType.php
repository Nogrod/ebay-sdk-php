<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing SellerBusinessCodeType
 *
 * Type of seller account. This value is returned if the user is a
 *  business seller with a site ID of 77 (Germany), 3 (UK), 205 (Ireland) or 0 (US Motors).
 * XSD Type: SellerBusinessCodeType
 */
class SellerBusinessCodeType
{

    /**
     * Constant for 'Undefined' value.
     *
     * Type of seller account not defined.
     */
    public const VAL_UNDEFINED = 'Undefined';

    /**
     * Constant for 'Private' value.
     *
     * Private seller account.
     */
    public const VAL_PRIVATE = 'Private';

    /**
     * Constant for 'Commercial' value.
     *
     * Commercial seller account.
     */
    public const VAL_COMMERCIAL = 'Commercial';

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
