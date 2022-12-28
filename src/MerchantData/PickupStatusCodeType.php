<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing PickupStatusCodeType
 *
 * Simple type defining all possible states for an In-Store Pickup order. The value of the <strong>PickupStatus</strong> field (returned under the <strong>PickupMethodSelected</strong> container) can change during the lifecycle of the order based on the notifications that a merchant sends to eBay through the <strong>Inbound Notifications API</strong>.
 *  <br/><br/>
 *  <span class="tablenote">
 *  <strong>Note:</strong> At this time, the In-Store Pickup feature is generally only available to large retail merchants in US, and can only be applied to multi-quantity, fixed-price listings.
 *  </span>
 * XSD Type: PickupStatusCodeType
 */
class PickupStatusCodeType
{
    /**
     * Constant for 'Invalid' value.
     *
     * This value indicates that the current status value of the In-Store Pickup order
     * is invalid.
     */
    public const VAL_INVALID = 'Invalid';

    /**
     * Constant for 'NotApplicable' value.
     *
     * This value indicates that the current status value of the In-Store Pickup order
     * is not applicable.
     */
    public const VAL_NOT_APPLICABLE = 'NotApplicable';

    /**
     * Constant for 'PendingMerchantConfirmation' value.
     *
     * This status indicates that the In-Store Pickup order has yet to be acknowledged
     * by the merchant. This is typically the state before the merchant sends the
     * <strong>ORDER.READY_FOR_PICKUP</strong> notification to eBay through the
     * <strong>Inbound Notifications API</strong>.
     */
    public const VAL_PENDING_MERCHANT_CONFIRMATION = 'PendingMerchantConfirmation';

    /**
     * Constant for 'ReadyToPickup' value.
     *
     * This status indicates that the In-Store Pickup order is ready to be picked up by
     * the buyer. This state occurs after the merchant sends the
     * <strong>ORDER.READY_FOR_PICKUP</strong> notification to eBay through the
     * <strong>Inbound Notifications API</strong>.
     */
    public const VAL_READY_TO_PICKUP = 'ReadyToPickup';

    /**
     * Constant for 'Pickedup' value.
     *
     * This status indicates that the In-Store Pickup order has been picked up by the
     * buyer. This state occurs after the merchant sends the
     * <strong>ORDER.PICKEDUP</strong> notification to eBay through the <strong>Inbound
     * Notifications API</strong>.
     */
    public const VAL_PICKEDUP = 'Pickedup';

    /**
     * Constant for 'PickupCancelledOutOfStock' value.
     *
     * This status indicates that the In-Store Pickup order has been cancelled by the
     * merchant, because the product was out of stock. This state occurs after the
     * merchant sends the <strong>ORDER.PICKUP_CANCELED</strong> notification (with the
     * <strong>CANCEL_TYPE</strong> parameter in the notification payload set to
     * "OUT_OF_STOCK") to eBay through the <strong>Inbound Notifications API</strong>.
     */
    public const VAL_PICKUP_CANCELLED_OUT_OF_STOCK = 'PickupCancelledOutOfStock';

    /**
     * Constant for 'PickupCancelledBuyerRejected' value.
     *
     * This status indicates that the In-Store Pickup order has been cancelled by the
     * merchant, because the buyer rejected the item. This state occurs after the
     * merchant sends the <strong>ORDER.PICKUP_CANCELED</strong> notification (with the
     * <strong>CANCEL_TYPE</strong> parameter in the notification payload set to
     * "BUYER_REJECTED") to eBay through the <strong>Inbound Notifications
     * API</strong>.
     */
    public const VAL_PICKUP_CANCELLED_BUYER_REJECTED = 'PickupCancelledBuyerRejected';

    /**
     * Constant for 'PickupCancelledBuyerNoShow' value.
     *
     * This status indicates that the In-Store Pickup order has been cancelled by the
     * merchant, because the buyer never showed up to pick up the item. This state
     * occurs after the merchant sends the <strong>ORDER.PICKUP_CANCELED</strong>
     * notification (with the <strong>CANCEL_TYPE</strong> parameter in the
     * notification payload set to "BUYER_NO_SHOW") to eBay through the <strong>Inbound
     * Notifications API</strong>.
     */
    public const VAL_PICKUP_CANCELLED_BUYER_NO_SHOW = 'PickupCancelledBuyerNoShow';

    /**
     * Constant for 'PickupCancelled' value.
     *
     * This status indicates that the In-Store Pickup order has been cancelled, and the
     * exact reason is not available.
     */
    public const VAL_PICKUP_CANCELLED = 'PickupCancelled';

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
