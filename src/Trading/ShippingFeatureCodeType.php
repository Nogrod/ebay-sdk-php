<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ShippingFeatureCodeType
 *
 * Miscellaneous details of the shipment.
 * XSD Type: ShippingFeatureCodeType
 */
class ShippingFeatureCodeType
{
    /**
     * Constant for 'DeliveryConfirmation' value.
     *
     * Confirmation requested.
     */
    public const VAL_DELIVERY_CONFIRMATION = 'DeliveryConfirmation';

    /**
     * Constant for 'SignatureConfirmation' value.
     *
     * Signature requested upon receipt.
     */
    public const VAL_SIGNATURE_CONFIRMATION = 'SignatureConfirmation';

    /**
     * Constant for 'StealthPostage' value.
     *
     * Stealth postage.
     */
    public const VAL_STEALTH_POSTAGE = 'StealthPostage';

    /**
     * Constant for 'SaturdayDelivery' value.
     *
     * Saturday delivery.
     */
    public const VAL_SATURDAY_DELIVERY = 'SaturdayDelivery';

    /**
     * Constant for 'Other' value.
     *
     * Other.
     */
    public const VAL_OTHER = 'Other';

    /**
     * Constant for 'NotDefined' value.
     *
     * Not defined.
     */
    public const VAL_NOT_DEFINED = 'NotDefined';

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
