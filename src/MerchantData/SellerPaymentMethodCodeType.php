<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing SellerPaymentMethodCodeType
 *
 * This enumerated type defines the payment methods that an eBay user can use to pay fees on monthly eBay invoice.
 * XSD Type: SellerPaymentMethodCodeType
 */
class SellerPaymentMethodCodeType
{
    /**
     * Constant for 'NothingOnFile' value.
     *
     * This enumeration value indicates that eBay does not currently have a payment
     * method on file for the eBay user.
     */
    public const VAL_NOTHING_ON_FILE = 'NothingOnFile';

    /**
     * Constant for 'CreditCard' value.
     *
     * This enumeration value indicates that eBay will use the credit card on file to
     * process the eBay user's monthly invoice.
     */
    public const VAL_CREDIT_CARD = 'CreditCard';

    /**
     * Constant for 'PayPal' value.
     *
     * This enumeration value is deprecated.
     */
    public const VAL_PAY_PAL = 'PayPal';

    /**
     * Constant for 'DirectDebit' value.
     *
     * This enumeration value indicates that eBay will debit the bank account on file
     * to process the eBay user's monthly invoice.
     */
    public const VAL_DIRECT_DEBIT = 'DirectDebit';

    /**
     * Constant for 'DirectDebitPendingSignatureMandate' value.
     *
     * This enumeration value indicates that eBay will debit the bank account on file
     * to process the eBay user's monthly invoice. A signature will be needed from the
     * eBay user before a payment can be processed.
     */
    public const VAL_DIRECT_DEBIT_PENDING_SIGNATURE_MANDATE = 'DirectDebitPendingSignatureMandate';

    /**
     * Constant for 'eBayDirectPay' value.
     *
     * This enumeration value indicates that the eBay user will use eBay Direct Pay to
     * pay the monthly invoice.
     */
    public const VAL_E_BAY_DIRECT_PAY = 'eBayDirectPay';

    /**
     * Constant for 'CustomCode' value.
     *
     * (out) Reserved for internal or future use
     */
    public const VAL_CUSTOM_CODE = 'CustomCode';

    /**
     * Constant for 'DirectDebitPendingVerification' value.
     *
     * This enumeration value indicates that eBay will debit the bank account on file
     * to process the eBay user's monthly invoice. However, the bank account
     * information must be verified before a payment can be processed.
     */
    public const VAL_DIRECT_DEBIT_PENDING_VERIFICATION = 'DirectDebitPendingVerification';

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
