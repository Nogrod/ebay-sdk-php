<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing UnpaidItemCaseStatusTypeCodeType
 *
 * Enumeration type that indicates the current status of an Unpaid Item case.
 * XSD Type: UnpaidItemCaseStatusTypeCodeType
 */
class UnpaidItemCaseStatusTypeCodeType
{

    /**
     * Constant for 'Open' value.
     *
     * This value indicates that the Unpaid Item case is open.
     */
    public const VAL_OPEN = 'Open';

    /**
     * Constant for 'ClosedWithPayment' value.
     *
     * This value indicates that the Unpaid Item case is closed with payment
     *  received from the buyer.
     */
    public const VAL_CLOSED_WITH_PAYMENT = 'ClosedWithPayment';

    /**
     * Constant for 'ClosedWithoutPayment' value.
     *
     * This value indicates that the Unpaid Item case is closed with no payment
     *  received from the buyer.
     */
    public const VAL_CLOSED_WITHOUT_PAYMENT = 'ClosedWithoutPayment';

    /**
     * Constant for 'CustomCode' value.
     *
     * This value is reserved for future or internal use.
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
