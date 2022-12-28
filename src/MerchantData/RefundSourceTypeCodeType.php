<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing RefundSourceTypeCodeType
 *
 * Enumerated type defining the refund types that a merchant can offer a buyer who is returning an In-Store Pickup item to the store.
 * XSD Type: RefundSourceTypeCodeType
 */
class RefundSourceTypeCodeType
{
    /**
     * Constant for 'StoreCredit' value.
     *
     * This value indicates that the merchant issued a store credit to the buyer for
     * the amount of the returned item(s).
     */
    public const VAL_STORE_CREDIT = 'StoreCredit';

    /**
     * Constant for 'PaymentRefund' value.
     *
     * This value indicates that the merchant issued a cash refund (or debit
     * card/credit card reversal) to the buyer for the amount of the returned item(s).
     */
    public const VAL_PAYMENT_REFUND = 'PaymentRefund';

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
