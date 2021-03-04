<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing RefundOptionsCodeType
 *
 * This enumerated type contains the possible refund, exchange, or store credit options that a
 *  seller may offer a buyer when the buyer wants to return the item.
 * XSD Type: RefundOptionsCodeType
 */
class RefundOptionsCodeType
{
    /**
     * Constant for 'MoneyBack' value.
     *
     * This value indicates that the seller will refund the buyer the cost of the item,
     * excluding shipping and handling costs and any restocking fee (US only).
     *  <br><br>
     *  The seller should use the <b>ReturnPolicy.Description</b> field in the Add API
     * call to explain how the refund will be handled (such as whether the refund will
     * occur via PayPal).
     */
    public const VAL_MONEY_BACK = 'MoneyBack';

    /**
     * Constant for 'Exchange' value.
     *
     * <span class="tablenote"><b>Note:</b>
     *  This value is deprecated on the US site, and all listings attempting to use
     * this
     *  value will be blocked.
     *  </span>
     *  This value indicates that the seller will exchange the returned item for
     * another item.
     *  The seller should use the <b>ReturnPolicy.Description</b> field in the Add API
     * call to explain how this will occur (such as whether the seller will send an
     * identical item in place of the returned item).
     */
    public const VAL_EXCHANGE = 'Exchange';

    /**
     * Constant for 'MerchandiseCredit' value.
     *
     * <span class="tablenote"><b>Note:</b>
     *  This value is deprecated on the US site, and all listings attempting to use
     * this value are blocked.
     *  </span>
     *  The seller will give the buyer a credit toward the purchase of another item.
     * The seller should use the <b>ReturnPolicy.Description</b> field in the Add API
     * call to explain how the buyer can redeem this credit.
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
     *  This value indicates that the seller will refund the buyer the cost of the
     * item, excluding shipping and handling costs and any restocking fee (US only), or
     * the seller will exchange the returned item for another identical item.
     *  <br><br>
     *  The seller should use the <b>ReturnPolicy.Description</b> field in the Add API
     * call to explain how the refund will be handled, such as whether the refund will
     * occur via PayPal, or how the exchange will occur, such as whether the seller
     * will send an identical item in place of the returned item.
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
     * (excluding shipping and handling costs and any restocking fee) through eBay
     * returns, or the seller will replace the returned item with another identical
     * item.
     *  <br><br>
     *  The seller should use the <b>ReturnPolicy.Description</b> field in the Add API
     * call to explain to buyer that are refunds and replacements will be handled
     * through the eBay returns process.
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
