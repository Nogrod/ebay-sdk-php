<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing DepositTypeCodeType
 *
 * This enumerated type is a list of applicable values that indicate how a motor vehicle deposit should be paid.
 * XSD Type: DepositTypeCodeType
 */
class DepositTypeCodeType
{
    /**
     * Constant for 'None' value.
     *
     * This value indicates that no deposit is required.
     */
    public const VAL_NONE = 'None';

    /**
     * Constant for 'OtherMethod' value.
     *
     * This value indicates that a deposit is required from the buyer when purchasing a
     * motor vehicle. Deposits for a motor vehicle are either due in 24, 48, or 72
     * hours after commitment to purchase. Or, in the case of a motor vehicle listing
     * that is requiring immediate payment, the deposit it due immediately after
     * commitment to purchase.
     *  <br><br>
     *  This value should be used in an Add/Revise call if the seller is requiring a
     * deposit for a motor vehicle listing.
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
