<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing ShippingTrackingEventCodeType
 *
 * This type is no longer applicable as it only pertained to eBay Now orders, and eBay Now has been discontinued.
 * XSD Type: ShippingTrackingEventCodeType
 */
class ShippingTrackingEventCodeType
{
    /**
     * Constant for 'ValetReadyForPickup' value.
     *
     * This value indicates that the eBay Now order is ready for pickup by the eBay Now
     * valet at the store.
     */
    public const VAL_VALET_READY_FOR_PICKUP = 'ValetReadyForPickup';

    /**
     * Constant for 'ValetPickedUpOrder' value.
     *
     * This value indicates that the eBay Now order was picked up by the eBay Now
     * valet.
     */
    public const VAL_VALET_PICKED_UP_ORDER = 'ValetPickedUpOrder';

    /**
     * Constant for 'CustomCode' value.
     *
     * This value is reserved for internal or future use.
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
