<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ReturnsRefundMethodCodeType
 *
 * This enum defines the different options that are available for specifying the available refund methods.
 * XSD Type: ReturnsRefundMethodCodeType
 */
class ReturnsRefundMethodCodeType
{

    /**
     * Constant for 'MoneyBack' value.
     *
     * <code>MoneyBack</code> indicates the seller will refund the cost of the item
     * returned.
     */
    public const VAL_MONEY_BACK = 'MoneyBack';

    /**
     * Constant for 'MoneyBackorReplacement' value.
     *
     * Available on the US marketplace only, <code>MoneyBackorReplacement</code>
     * indicates the seller will refund the cost of the item returned or they will
     * replace the returned item.
     */
    public const VAL_MONEY_BACKOR_REPLACEMENT = 'MoneyBackorReplacement';

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
