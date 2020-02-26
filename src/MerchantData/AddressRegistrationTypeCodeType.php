<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing AddressRegistrationTypeCodeType
 *
 * AddressRegistrationTypeCodeType.
 *  For GetUserAddresss paypal migration
 * XSD Type: AddressRegistrationTypeCodeType
 */
class AddressRegistrationTypeCodeType
{

    /**
     * Constant for 'None' value.
     */
    public const VAL_NONE = 'None';

    /**
     * Constant for 'Shipping' value.
     */
    public const VAL_SHIPPING = 'Shipping';

    /**
     * Constant for 'Seller' value.
     */
    public const VAL_SELLER = 'Seller';

    /**
     * Constant for 'ShipmentToResidential' value.
     */
    public const VAL_SHIPMENT_TO_RESIDENTIAL = 'ShipmentToResidential';

    /**
     * Constant for 'ShipmentToBusiness' value.
     */
    public const VAL_SHIPMENT_TO_BUSINESS = 'ShipmentToBusiness';

    /**
     * Constant for 'ShipmentFrom' value.
     */
    public const VAL_SHIPMENT_FROM = 'ShipmentFrom';

    /**
     * Constant for 'NumTypes' value.
     */
    public const VAL_NUM_TYPES = 'NumTypes';

    /**
     * Constant for 'Invalid' value.
     */
    public const VAL_INVALID = 'Invalid';

    /**
     * Constant for 'CustomCode' value.
     *
     * (out) For GetUserAddress paypal migration.
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
