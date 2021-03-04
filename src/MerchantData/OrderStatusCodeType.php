<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing OrderStatusCodeType
 *
 * Enumerated type that defines the possible values for order states. Some of these values can be used as <b>OrderStatus</b> filters in the <b>GetOrders</b> request payload, and some of these values may be returned in any of the order management calls under the <b>OrderStatus</b> field. See the individual value descriptions for more information on how they are used and/or when they are returned.
 * XSD Type: OrderStatusCodeType
 */
class OrderStatusCodeType
{
    /**
     * Constant for 'Active' value.
     *
     * This value indicates that the order is not yet complete. An order in the
     * <code>Active</code> state means that the buyer has not initiated payment for the
     * order. While an order is in this state, it can be combined into a <a
     * href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Listing-AnItem.html#CombinedInvoice">Combined
     * Invoice</a>, a buyer can request a cancellation, and/or a seller can update
     * payment details (including a change in order price) or shipping details
     * (including shipping cost and shipping service).
     *  <br><br>
     *  This value can be used a filter value in the <b>OrderStatus</b> field of the
     * <b>GetOrders</b> request payload, and it can also be returned in any of the
     * order management calls.
     */
    public const VAL_ACTIVE = 'Active';

    /**
     * Constant for 'Inactive' value.
     *
     * This value can be used a filter value in the <b>OrderStatus</b> field, and if
     * used, all inactive orders will be returned.
     */
    public const VAL_INACTIVE = 'Inactive';

    /**
     * Constant for 'Completed' value.
     *
     * This value indicates that the order is paid for and complete. An order in the
     * <code>Completed</code> state means that no other changes to the order can be
     * made.
     *  <br><br>
     *  This value can be used a filter value in the <b>OrderStatus</b> field of the
     * <b>GetOrders</b> request payload, and it can also be returned in any of the
     * order management calls.
     */
    public const VAL_COMPLETED = 'Completed';

    /**
     * Constant for 'Cancelled' value.
     *
     * This value indicates that the order has been cancelled. Depending on whether
     * payment was made or not, the seller may also need to refund the buyer after an
     * order is cancelled.
     *  <br><br>
     *  This value can be used a filter value in the <b>OrderStatus</b> field of the
     * <b>GetOrders</b> request payload, and it can also be returned in any of the
     * order management calls.
     */
    public const VAL_CANCELLED = 'Cancelled';

    /**
     * Constant for 'Shipped' value.
     *
     * This enumeration value was only used for the deprecated Half.com site, so is no
     * longer applicable and should not be used as an <b>OrderStatus</b> value in the
     * <b>GetOrders</b> request payload.
     */
    public const VAL_SHIPPED = 'Shipped';

    /**
     * Constant for 'Default' value.
     *
     * This value is not used.
     */
    public const VAL_DEFAULT = 'Default';

    /**
     * Constant for 'Authenticated' value.
     *
     * This enumeration value is no longer applicable and should not be used as an
     * <b>OrderStatus</b> value in the <b>GetOrders</b> request payload.
     */
    public const VAL_AUTHENTICATED = 'Authenticated';

    /**
     * Constant for 'InProcess' value.
     *
     * This enumeration value indicates that the order is currently in the state of
     * being processed, but is not yet complete.
     *  <br><br>
     *  This value is not supported by the <b>OrderStatus</b> field of the
     * <b>GetOrders</b> request payload, but it can be returned in any of the order
     * management calls.
     */
    public const VAL_IN_PROCESS = 'InProcess';

    /**
     * Constant for 'Invalid' value.
     *
     * This enumeration value is no longer applicable and should not be used as an
     * <b>OrderStatus</b> value in the <b>GetOrders</b> request payload.
     */
    public const VAL_INVALID = 'Invalid';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for internal or future use.
     */
    public const VAL_CUSTOM_CODE = 'CustomCode';

    /**
     * Constant for 'All' value.
     *
     * This enumeration value is passed into the <b>OrderStatus</b> of <b>GetOrders</b>
     * to retrieve orders in all states. This is the default value. This value is not
     * applicable to the response payloads of the order management calls.
     */
    public const VAL_ALL = 'All';

    /**
     * Constant for 'CancelPending' value.
     *
     * This value indicates that a buyer has initiated a cancellation request on the
     * order. If a seller sees an order in this state, that seller must either approve
     * or reject the cancellation request through My eBay Web flows or through the
     * Post-Order API cancellation calls.
     *  <br/><br/>
     *  This enumeration value cannot be used as an <b>OrderStatus</b> value in the
     * <b>GetOrders</b> request payload.
     */
    public const VAL_CANCEL_PENDING = 'CancelPending';

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
