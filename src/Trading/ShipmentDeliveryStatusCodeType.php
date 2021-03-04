<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ShipmentDeliveryStatusCodeType
 *
 * Status of the delivery.
 * XSD Type: ShipmentDeliveryStatusCodeType
 */
class ShipmentDeliveryStatusCodeType
{
    /**
     * Constant for 'Created' value.
     *
     * Created (default).
     */
    public const VAL_CREATED = 'Created';

    /**
     * Constant for 'DroppedOff' value.
     *
     * Dropped off.
     */
    public const VAL_DROPPED_OFF = 'DroppedOff';

    /**
     * Constant for 'InTransit' value.
     *
     * In transit.
     */
    public const VAL_IN_TRANSIT = 'InTransit';

    /**
     * Constant for 'Delivered' value.
     *
     * Delivered.
     */
    public const VAL_DELIVERED = 'Delivered';

    /**
     * Constant for 'Returned' value.
     *
     * Returned.
     */
    public const VAL_RETURNED = 'Returned';

    /**
     * Constant for 'Canceled' value.
     *
     * Cancelled.
     */
    public const VAL_CANCELED = 'Canceled';

    /**
     * Constant for 'LabelPrinted' value.
     *
     * Label printed.
     */
    public const VAL_LABEL_PRINTED = 'LabelPrinted';

    /**
     * Constant for 'Unconfirmed' value.
     *
     * Unconfirmed.
     */
    public const VAL_UNCONFIRMED = 'Unconfirmed';

    /**
     * Constant for 'Unknown' value.
     *
     * Unknown.
     */
    public const VAL_UNKNOWN = 'Unknown';

    /**
     * Constant for 'Error' value.
     *
     * Error.
     */
    public const VAL_ERROR = 'Error';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for future use.
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
