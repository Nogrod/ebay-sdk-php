<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing ProfileCategoryGroupCodeType
 *
 * Enumerated type that defines the category group values. Business Policies profiles (Payment,
 *  Shipping, and Return Policy) are linked to category groups.
 * XSD Type: ProfileCategoryGroupCodeType
 */
class ProfileCategoryGroupCodeType
{
    /**
     * Constant for 'Inherit' value.
     *
     * Default value.
     */
    public const VAL_INHERIT = 'Inherit';

    /**
     * Constant for 'None' value.
     *
     * None.
     */
    public const VAL_NONE = 'None';

    /**
     * Constant for 'ALL' value.
     *
     * For Business Policies, the 'ALL' enumeration value represents all eBay
     * categories except for motor vehicles.
     */
    public const VAL_ALL = 'ALL';

    /**
     * Constant for 'MOTORS_VEHICLE' value.
     *
     * For Business Policies, the 'MOTORS_VEHICLE' enumeration value represents all
     * motor vehicle categories.
     */
    public const VAL_MOTORS__VEHICLE = 'MOTORS_VEHICLE';

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
