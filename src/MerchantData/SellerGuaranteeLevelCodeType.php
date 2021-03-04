<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing SellerGuaranteeLevelCodeType
 *
 * This type was deprecated along with the Seller Guarantee feature.
 * XSD Type: SellerGuaranteeLevelCodeType
 */
class SellerGuaranteeLevelCodeType
{
    /**
     * Constant for 'NotEligible' value.
     *
     * (out) Not eligible for Seller Level Guarantee
     */
    public const VAL_NOT_ELIGIBLE = 'NotEligible';

    /**
     * Constant for 'Regular' value.
     *
     * (out) Regular eligibility level
     */
    public const VAL_REGULAR = 'Regular';

    /**
     * Constant for 'Premium' value.
     *
     * (out) Premium eligibility level
     */
    public const VAL_PREMIUM = 'Premium';

    /**
     * Constant for 'Ultra' value.
     *
     * (out) Ultra eligibility level
     */
    public const VAL_ULTRA = 'Ultra';

    /**
     * Constant for 'CustomCode' value.
     *
     * (out) Reserved for internal or future use.
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
