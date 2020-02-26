<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing PickupMethodCodeType
 *
 * Simple type defining all possible local pickup methods for buyers. A <strong>PickupMethodCodeType</strong> value is always returned under the <strong>PickupOptions</strong> and <strong>PickupMethodSelected</strong> containers.
 * XSD Type: PickupMethodCodeType
 */
class PickupMethodCodeType
{

    /**
     * Constant for 'InStorePickup' value.
     *
     * This value indicates that the buyer will pick up the In-Store Pickup item at the
     * merchant's physical store.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A merchant must be eligible for the In-Store Pickup
     * feature to list an item that is eligible for In-Store Pickup. At this time, the
     * In-Store Pickup feature is generally only available to large retail merchants in
     * US, and can only be applied to multi-quantity, fixed-price listings.
     *  </span>
     */
    public const VAL_IN_STORE_PICKUP = 'InStorePickup';

    /**
     * Constant for 'PickUpDropOff' value.
     *
     * This value indicates that the buyer will pick up the "Click and Collect" item at
     * the merchant's physical store.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A merchant must be eligible for the "Click and Collect"
     * feature to list an item that is eligible for "Click and Collect". At this time,
     * the "Click and Collect" feature is only available to large merchants on the eBay
     * UK (site ID - 3), eBay Australia (Site ID - 15), and eBay Germany (Site ID - 77)
     * sites. sites.
     */
    public const VAL_PICK_UP_DROP_OFF = 'PickUpDropOff';

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
