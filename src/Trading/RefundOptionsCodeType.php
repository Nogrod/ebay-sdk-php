<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing RefundOptionsCodeType
 *
 * This enumerated type contains the possible refund, exchange, or store credit options that a
 *  seller may offer the buyer as part of the return policy.
 * XSD Type: RefundOptionsCodeType
 */
class RefundOptionsCodeType
{
    /**
     * Constant for 'MoneyBack' value.
     *
     * This value indicates that the seller will refund the buyer the cost of the item,
     * excluding shipping and handling costs.
     */
    public const VAL_MONEY_BACK = 'MoneyBack';

    /**
     * Constant for 'Exchange' value.
     *
     * This value is deprecated since receiving money back must always be one of the
     * options in a return policy and not just exchanging the item. If a seller wants
     * to make an exchange one of the options, the <code>MoneyBackOrExchange</code>
     * option should be used.
     */
    public const VAL_EXCHANGE = 'Exchange';

    /**
     * Constant for 'MerchandiseCredit' value.
     *
     * This value is deprecated since receiving money back must always be one of the
     * options in a return policy and not just store credit.
     */
    public const VAL_MERCHANDISE_CREDIT = 'MerchandiseCredit';

    /**
     * Constant for 'MoneyBackOrExchange' value.
     *
     * <span class="tablenote"><b>Note:</b>
     *  This value has been deprecated and US sellers that are willing to refund buyers
     * or offer an identical replacement item should use the
     * <code>MoneyBackOrReplacement</code> value instead.
     *  </span>
     */
    public const VAL_MONEY_BACK_OR_EXCHANGE = 'MoneyBackOrExchange';

    /**
     * Constant for 'MoneyBackOrReplacement' value.
     *
     * <span class="tablenote"><b>Note:</b>
     *  This value is only available on the US site. US sellers should use this value
     * if they are willing to refund buyers or offer an identical replacement item.
     *  </span>
     *  This value indicates that the seller will refund the buyer the cost of the item
     * (excluding shipping and handling costs) through eBay returns, or the seller will
     * replace the returned item with another identical item if the buyer prefers this.
     */
    public const VAL_MONEY_BACK_OR_REPLACEMENT = 'MoneyBackOrReplacement';

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
