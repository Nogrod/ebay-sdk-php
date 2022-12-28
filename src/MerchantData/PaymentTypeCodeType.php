<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing PaymentTypeCodeType
 *
 * <br>
 *  <span class="tablenote"><b>Note: </b> This type is only applicable to the <b>GetSellerPayments</b> call, which is only relevant to Half.com orders, and since the Half.com site has been shut down, this type is no longer applicable.
 *  </span>
 * XSD Type: PaymentTypeCodeType
 */
class PaymentTypeCodeType
{
    /**
     * Constant for 'Sale' value.
     *
     * <span class="tablenote"><b>Note: </b> <b>PaymentTypeCodeType</b> and all of its
     * values will no longer be applicable since the Half.com site has been shut down.
     *  </span>
     */
    public const VAL_SALE = 'Sale';

    /**
     * Constant for 'Refund' value.
     *
     * <span class="tablenote"><b>Note: </b> <b>PaymentTypeCodeType</b> and all of its
     * values will no longer be applicable since the Half.com site has been shut down.
     *  </span>
     */
    public const VAL_REFUND = 'Refund';

    /**
     * Constant for 'SellerDeniedPayment' value.
     *
     * <span class="tablenote"><b>Note: </b> <b>PaymentTypeCodeType</b> and all of its
     * values will no longer be applicable since the Half.com site has been shut down.
     *  </span>
     */
    public const VAL_SELLER_DENIED_PAYMENT = 'SellerDeniedPayment';

    /**
     * Constant for 'AdminReversal' value.
     *
     * <span class="tablenote"><b>Note: </b> <b>PaymentTypeCodeType</b> and all of its
     * values will no longer be applicable since the Half.com site has been shut down.
     *  </span>
     */
    public const VAL_ADMIN_REVERSAL = 'AdminReversal';

    /**
     * Constant for 'AllOther' value.
     *
     * <span class="tablenote"><b>Note: </b> <b>PaymentTypeCodeType</b> and all of its
     * values will no longer be applicable since the Half.com site has been shut down.
     *  </span>
     */
    public const VAL_ALL_OTHER = 'AllOther';

    /**
     * Constant for 'RentalExtension' value.
     *
     * <span class="tablenote"><b>Note: </b> <b>PaymentTypeCodeType</b> and all of its
     * values will no longer be applicable since the Half.com site has been shut down
     *  </span>
     */
    public const VAL_RENTAL_EXTENSION = 'RentalExtension';

    /**
     * Constant for 'RentalBuyout' value.
     *
     * <span class="tablenote"><b>Note: </b> <b>PaymentTypeCodeType</b> and all of its
     * values will no longer be applicable since the Half.com site has been shut down.
     *  </span>
     */
    public const VAL_RENTAL_BUYOUT = 'RentalBuyout';

    /**
     * Constant for 'CustomCode' value.
     *
     * <span class="tablenote"><b>Note: </b> <b>PaymentTypeCodeType</b> and all of its
     * values will no longer be applicable since the Half.com site has been shut down.
     *  </span>
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
