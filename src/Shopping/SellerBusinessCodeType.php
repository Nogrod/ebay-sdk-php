<?php

namespace Nogrod\eBaySDK\Shopping;

/**
 * Class representing SellerBusinessCodeType
 *
 * This enumerated type contains the type of eBay seller account types that are available.
 * XSD Type: SellerBusinessCodeType
 */
class SellerBusinessCodeType
{

    /**
     * Constant for 'Undefined' value.
     *
     * This enumeration value indicates that the type of seller account is undefined,
     * or cannot be determined.
     */
    public const VAL_UNDEFINED = 'Undefined';

    /**
     * Constant for 'Private' value.
     *
     * This enumeration value indicates that the type of seller account is a private
     * seller account (or non-business account).
     */
    public const VAL_PRIVATE = 'Private';

    /**
     * Constant for 'Commercial' value.
     *
     * This enumeration value indicates that the type of seller account is a commercial
     * (or business seller account).
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
