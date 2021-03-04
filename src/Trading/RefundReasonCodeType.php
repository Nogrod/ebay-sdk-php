<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing RefundReasonCodeType
 *
 * <span class="tablenote"><b>Note: </b> This type was only used for Half.com order refunds, and since the Half.com site has been shut down, this type is no longer applicable.
 *  </span>
 * XSD Type: RefundReasonCodeType
 */
class RefundReasonCodeType
{
    /**
     * Constant for 'CannotShipProduct' value.
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundReasonCodeType</b> and all of its
     * values are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *  Seller is unable to ship the product to the buyer.
     */
    public const VAL_CANNOT_SHIP_PRODUCT = 'CannotShipProduct';

    /**
     * Constant for 'WrongItemShipped' value.
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundReasonCodeType</b> and all of its
     * values are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *  Seller shipped the wrong item to the buyer.
     */
    public const VAL_WRONG_ITEM_SHIPPED = 'WrongItemShipped';

    /**
     * Constant for 'ItemBadQuality' value.
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundReasonCodeType</b> and all of its
     * values are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *  The buyer returned the item due to its quality.
     */
    public const VAL_ITEM_BAD_QUALITY = 'ItemBadQuality';

    /**
     * Constant for 'ItemDamaged' value.
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundReasonCodeType</b> and all of its
     * values are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *  The buyer returned the item due to damage.
     */
    public const VAL_ITEM_DAMAGED = 'ItemDamaged';

    /**
     * Constant for 'BuyerRemorse' value.
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundReasonCodeType</b> and all of its
     * values are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *  The buyer decided they did not want the item.
     */
    public const VAL_BUYER_REMORSE = 'BuyerRemorse';

    /**
     * Constant for 'Other' value.
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundReasonCodeType</b> and all of its
     * values are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *  The seller has another reason for issuing a Half.com refund.
     */
    public const VAL_OTHER = 'Other';

    /**
     * Constant for 'CustomCode' value.
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundReasonCodeType</b> and all of its
     * values are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *  (out) Reserved for internal or future use.
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
