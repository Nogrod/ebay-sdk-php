<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing PaymentMethodSearchCodeType
 *
 * <span class="tablenote"><b>Note:</b>
 *  This enumerated type is no longer applicable, as filtering by a payment method in an advanced item search is no longer supported.
 *  </span>
 * XSD Type: PaymentMethodSearchCodeType
 */
class PaymentMethodSearchCodeType
{
    /**
     * Constant for 'PayPal' value.
     *
     * This enumeration value is deprecated.
     */
    public const VAL_PAY_PAL = 'PayPal';

    /**
     * Constant for 'PaisaPay' value.
     *
     * This enumeration value is deprecated.
     */
    public const VAL_PAISA_PAY = 'PaisaPay';

    /**
     * Constant for 'PayPalOrPaisaPay' value.
     *
     * This enumeration value is deprecated.
     */
    public const VAL_PAY_PAL_OR_PAISA_PAY = 'PayPalOrPaisaPay';

    /**
     * Constant for 'CustomCode' value.
     *
     * This enumeration value is reserved for future use.
     */
    public const VAL_CUSTOM_CODE = 'CustomCode';

    /**
     * Constant for 'PaisaPayEscrowEMI' value.
     *
     * This enumeration value is deprecated.
     */
    public const VAL_PAISA_PAY_ESCROW_EMI = 'PaisaPayEscrowEMI';

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
