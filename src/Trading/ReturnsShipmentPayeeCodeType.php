<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ReturnsShipmentPayeeCodeType
 *
 * This enum defines the different options that are available for specifying the return shipment payee.
 * XSD Type: ReturnsShipmentPayeeCodeType
 */
class ReturnsShipmentPayeeCodeType
{
    /**
     * Constant for 'Buyer' value.
     *
     * <code>Buyer</code> indicates the buyer is responsible for paying for the return
     * shipping.
     */
    public const VAL_BUYER = 'Buyer';

    /**
     * Constant for 'Seller' value.
     *
     * <code>Seller</code> indicates the seller is responsible for paying for the
     * return shipping.
     */
    public const VAL_SELLER = 'Seller';

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
