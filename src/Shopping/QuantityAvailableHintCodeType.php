<?php

namespace Nogrod\eBaySDK\Shopping;

/**
 * Class representing QuantityAvailableHintCodeType
 *
 * eBay allows sellers to control messaging on the View Item page about the quantity available for an order line item. <b>QuantityAvailableHintCodeType</b> is an enumerated type that indicates the quantity message that the seller has decided to display on the View Item page.
 * XSD Type: QuantityAvailableHintCodeType
 */
class QuantityAvailableHintCodeType
{

    /**
     * Constant for 'Limited' value.
     *
     * If this enumeration value is returned, the message on the View Item page is
     * "Limited quantity available", based on a quantity threshold.
     */
    public const VAL_LIMITED = 'Limited';

    /**
     * Constant for 'MoreThan' value.
     *
     * If this enumeration value is returned, the message on the View Item page is
     * "More than 10 available", as long as there is more than a quantity of 10 order
     * line items available.
     */
    public const VAL_MORE_THAN = 'MoreThan';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for internal or future use.
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
