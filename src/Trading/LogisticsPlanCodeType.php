<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing LogisticsPlanCodeType
 *
 * This enumerated type is used by <b>OrderType</b> and <b>TransactionType</b> to indicate which logistics plan was selected by the buyer at the order or order line item level. Currently, this type is only supporting the "Click and Collect" and digital gift card use cases, but more logistics plan types may be added in the future.
 * XSD Type: LogisticsPlanCodeType
 */
class LogisticsPlanCodeType
{
    /**
     * Constant for 'PickUpDropOff' value.
     *
     * This value indicates that the buyer has selected "Click and Collect" as the
     * logistics plan. With the 'Click and Collect' feature, a buyer can purchase
     * certain items on eBay and collect them at a local store. Buyers are notified by
     * eBay once their items are available. The "Click and Collect" feature is only
     * available to large merchants on the eBay UK (site ID - 3), eBay Australia (Site
     * ID - 15), and eBay Germany (Site ID - 77) sites.
     */
    public const VAL_PICK_UP_DROP_OFF = 'PickUpDropOff';

    /**
     * Constant for 'DigitalDelivery' value.
     *
     * This value indicates that the order or order line item is a digital gift card
     * that will be delivered to the buyer or the recipient of the gift card by email.
     */
    public const VAL_DIGITAL_DELIVERY = 'DigitalDelivery';

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
