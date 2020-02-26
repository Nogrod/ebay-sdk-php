<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing OrderStatusFilterCodeType
 *
 *
 * XSD Type: OrderStatusFilterCodeType
 */
class OrderStatusFilterCodeType
{

    /**
     * Constant for 'All' value.
     *
     * All applicable sold listings, regardless of
     *  their Paid or Shipped status.
     */
    public const VAL_ALL = 'All';

    /**
     * Constant for 'AwaitingPayment' value.
     *
     * Sold listings that have not yet been marked as
     *  Paid in My eBay.
     */
    public const VAL_AWAITING_PAYMENT = 'AwaitingPayment';

    /**
     * Constant for 'AwaitingShipment' value.
     *
     * Sold listings that have not yet been marked as
     *  Shipped in My eBay.
     */
    public const VAL_AWAITING_SHIPMENT = 'AwaitingShipment';

    /**
     * Constant for 'PaidAndShipped' value.
     *
     * Sold listings that have been marked as
     *  Paid and Shipped in My eBay.
     */
    public const VAL_PAID_AND_SHIPPED = 'PaidAndShipped';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for future or internal use.
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
