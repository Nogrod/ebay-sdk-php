<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing CharityAffiliationTypeCodeType
 *
 * This enumeration type defines the possible values that can be returned for the <b>CharityAffiliationDetail.AffiliationType</b> field in the <b>GetUser</b> response.
 * XSD Type: CharityAffiliationTypeCodeType
 */
class CharityAffiliationTypeCodeType
{

    /**
     * Constant for 'Community' value.
     *
     * This enumeration value indicates that the seller is selling to benefit a
     * nonprofit charity organization identified through the <b>CharityID</b> field.
     */
    public const VAL_COMMUNITY = 'Community';

    /**
     * Constant for 'Direct' value.
     *
     * This enumeration value indicates that the seller is a direct, non-profit
     * organization registered with the PayPal Giving Fund, and selling to directly
     * benefit their association.
     */
    public const VAL_DIRECT = 'Direct';

    /**
     * Constant for 'Remove' value.
     *
     * This enumeration value may be returned if a direct, non-profit organization has
     * recently unregistered with the PayPal Giving Fund, or if a Community Seller has
     * recently removed the charity feature from a listing.
     */
    public const VAL_REMOVE = 'Remove';

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
