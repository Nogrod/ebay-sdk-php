<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing CancelInitiatorCodeType
 *
 * Enumerated type that defines the possible parties that can initiate the cancellation of an eBay order.
 * XSD Type: CancelInitiatorCodeType
 */
class CancelInitiatorCodeType
{
    /**
     * Constant for 'Unknown' value.
     *
     * This value indicates that the party whom initiated the cancellation of the order
     * is not known.
     */
    public const VAL_UNKNOWN = 'Unknown';

    /**
     * Constant for 'Seller' value.
     *
     * This value indicates that the seller initiated the cancellation of the order.
     */
    public const VAL_SELLER = 'Seller';

    /**
     * Constant for 'Buyer' value.
     *
     * This value indicates that the buyer initiated the cancellation of the order.
     */
    public const VAL_BUYER = 'Buyer';

    /**
     * Constant for 'CS' value.
     *
     * This value indicates that eBay customer support initiated the cancellation of
     * the order.
     */
    public const VAL_CS = 'CS';

    /**
     * Constant for 'System' value.
     *
     * This value indicates that the cancellation of the order was initiated by the
     * system.
     */
    public const VAL_SYSTEM = 'System';

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
