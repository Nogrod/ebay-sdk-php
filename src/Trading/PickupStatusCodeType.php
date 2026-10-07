<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing PickupStatusCodeType
 *
 * <span class="tablenote">
 *  <strong>Note:</strong>
 *  Since BOPIS (Buy Online, Pick Up In Store) is no longer available, this simple type and its associated enumerated values should no longer be used in the Trading API.
 *  </span>
 * XSD Type: PickupStatusCodeType
 */
class PickupStatusCodeType
{
    /**
     * Constant for 'Invalid' value.
     *
     * Deprecated.
     */
    public const VAL_INVALID = 'Invalid';

    /**
     * Constant for 'NotApplicable' value.
     *
     * Deprecated.
     */
    public const VAL_NOT_APPLICABLE = 'NotApplicable';

    /**
     * Constant for 'PendingMerchantConfirmation' value.
     *
     * Deprecated.
     */
    public const VAL_PENDING_MERCHANT_CONFIRMATION = 'PendingMerchantConfirmation';

    /**
     * Constant for 'ReadyToPickup' value.
     *
     * Deprecated.
     */
    public const VAL_READY_TO_PICKUP = 'ReadyToPickup';

    /**
     * Constant for 'Pickedup' value.
     *
     * Deprecated.
     */
    public const VAL_PICKEDUP = 'Pickedup';

    /**
     * Constant for 'PickupCancelledOutOfStock' value.
     *
     * Deprecated.
     */
    public const VAL_PICKUP_CANCELLED_OUT_OF_STOCK = 'PickupCancelledOutOfStock';

    /**
     * Constant for 'PickupCancelledBuyerRejected' value.
     *
     * Deprecated.
     */
    public const VAL_PICKUP_CANCELLED_BUYER_REJECTED = 'PickupCancelledBuyerRejected';

    /**
     * Constant for 'PickupCancelledBuyerNoShow' value.
     *
     * Deprecated.
     */
    public const VAL_PICKUP_CANCELLED_BUYER_NO_SHOW = 'PickupCancelledBuyerNoShow';

    /**
     * Constant for 'PickupCancelled' value.
     *
     * Deprecated.
     */
    public const VAL_PICKUP_CANCELLED = 'PickupCancelled';

    /**
     * Constant for 'CustomCode' value.
     *
     * Deprecated.
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
