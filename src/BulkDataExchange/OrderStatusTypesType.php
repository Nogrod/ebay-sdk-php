<?php

namespace Nogrod\eBaySDK\BulkDataExchange;

/**
 * Class representing OrderStatusTypesType
 *
 * Enumerated type defining the order status values that can be used in the <b>orderStatus</b> field, which is used if the seller wants to retrieve eBay.com or Half.com orders in a specific state.
 * XSD Type: OrderStatusTypes
 */
class OrderStatusTypesType
{

    /**
     * Constant for 'Active' value.
     *
     * If this value is used, only active orders are retrieved. Orders in the 'Active'
     * state means that the buyer's payment on the order has not yet cleared. This
     * value is supported for eBay.com and Half.com orders.
     */
    public const VAL_ACTIVE = 'Active';

    /**
     * Constant for 'All' value.
     *
     * If this value is used, orders in all states are retrieved. This is the default
     * <b>orderStatus</b> value, and is supported for eBay.com and Half.com orders.
     */
    public const VAL_ALL = 'All';

    /**
     * Constant for 'Completed' value.
     *
     * If this value is used, only completed orders are retrieved. Orders in the
     * 'Completed' state indicates that the buyer's payment on the order has cleared
     * and checkout is complete. This value is supported for eBay.com and Half.com
     * orders.
     */
    public const VAL_COMPLETED = 'Completed';

    /**
     * Constant for 'Cancelled' value.
     *
     * If this value is used, only cancelled Half.com orders are retrieved. This value
     * is only supported for Half.com orders.
     */
    public const VAL_CANCELLED = 'Cancelled';

    /**
     * Constant for 'Shipped' value.
     *
     * If this value is used, only Half.com orders that have been shipped by the seller
     * are retrieved. This value is only supported for Half.com orders.
     */
    public const VAL_SHIPPED = 'Shipped';

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
