<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing DepositTypeCodeType
 *
 * For vehicles listed through the US eBay Motors site, DepositType
 *  indicates how the buyer should pay the deposit amount. It is
 *  used in conjunction with a buyer payment method (BuyerPaymentMethodCodeType).
 * XSD Type: DepositTypeCodeType
 */
class DepositTypeCodeType
{

    /**
     * Constant for 'None' value.
     *
     * (out) No deposit needed.
     */
    public const VAL_NONE = 'None';

    /**
     * Constant for 'OtherMethod' value.
     *
     * (out) Pay the deposit using PayPal, and then
     *  use any of the other specified payment methods to pay the balance.
     */
    public const VAL_OTHER_METHOD = 'OtherMethod';

    /**
     * Constant for 'FastDeposit' value.
     *
     * (out) No longer used.
     */
    public const VAL_FAST_DEPOSIT = 'FastDeposit';

    /**
     * Constant for 'CustomCode' value.
     *
     * (out) Reserved for internal or future use
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
