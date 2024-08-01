<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing HandlingNameCodeType
 *
 * How packaging/handling cost is to be determined for <a href="https://developer.ebay.com/api-docs/user-guides/static/trading-user-guide/manage-fulfill-combine-invoices.html">Combined Invoice</a>
 *  orders.
 * XSD Type: HandlingNameCodeType
 */
class HandlingNameCodeType
{
    /**
     * Constant for 'EachAdditionalAmount' value.
     *
     * After eBay assigns the highest packaging/handling cost to the first item, the
     *  packaging/handling cost for each additional item is $n.
     */
    public const VAL_EACH_ADDITIONAL_AMOUNT = 'EachAdditionalAmount';

    /**
     * Constant for 'EachAdditionalAmountOff' value.
     *
     * After eBay assigns the highest packaging/handling cost to the first item, the
     *  packaging/handling cost for each additional item is to be reduced by amount N.
     */
    public const VAL_EACH_ADDITIONAL_AMOUNT_OFF = 'EachAdditionalAmountOff';

    /**
     * Constant for 'EachAdditionalPercentOff' value.
     *
     * After eBay assigns the highest packaging/handling cost to the first item, the
     *  packaging/handling cost for each additional item is to be reduced by N percent.
     */
    public const VAL_EACH_ADDITIONAL_PERCENT_OFF = 'EachAdditionalPercentOff';

    /**
     * Constant for 'IndividualHandlingFee' value.
     *
     * The total packaging/handling cost is to be the sum of the
     *  packaging/handling costs of the individual items.
     */
    public const VAL_INDIVIDUAL_HANDLING_FEE = 'IndividualHandlingFee';

    /**
     * Constant for 'CombinedHandlingFee' value.
     *
     * The packaging/handling cost is to be N for the entire order.
     */
    public const VAL_COMBINED_HANDLING_FEE = 'CombinedHandlingFee';

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
