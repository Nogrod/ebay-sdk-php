<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing RefundSourceTypeCodeType
 *
 * <span class="tablenote">
 *  <strong>Note:</strong>
 *  Since BOPIS (Buy Online, Pick Up In Store) is no longer available, this simple type and its associated enumerated values should no longer be used in the Trading API.
 *  </span>
 * XSD Type: RefundSourceTypeCodeType
 */
class RefundSourceTypeCodeType
{
    /**
     * Constant for 'StoreCredit' value.
     *
     * Deprecated.
     */
    public const VAL_STORE_CREDIT = 'StoreCredit';

    /**
     * Constant for 'PaymentRefund' value.
     *
     * Deprecated.
     */
    public const VAL_PAYMENT_REFUND = 'PaymentRefund';

    /**
     * Constant for 'CustomCode' value.
     *
     * Deprecated.
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
