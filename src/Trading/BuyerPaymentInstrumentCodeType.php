<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing BuyerPaymentInstrumentCodeType
 *
 * This enumerated type identifies all of the payment methods supported for the 'Pay Upon Invoice' feature. The 'Pay Upon Invoice' feature is only available through the eBay Germany marketplace.
 * XSD Type: BuyerPaymentInstrumentCodeType
 */
class BuyerPaymentInstrumentCodeType
{

    /**
     * Constant for 'None' value.
     *
     * This enumeration value indicates that no payment method was specified by the
     * seller.
     */
    public const VAL_NONE = 'None';

    /**
     * Constant for 'CreditCard' value.
     *
     * This enumeration value indicates that a credit card was used to pay for the
     * order.
     */
    public const VAL_CREDIT_CARD = 'CreditCard';

    /**
     * Constant for 'BankDirectDebit' value.
     *
     * This enumeration value indicates that a bank debit card was used to pay for the
     * order.
     */
    public const VAL_BANK_DIRECT_DEBIT = 'BankDirectDebit';

    /**
     * Constant for 'PayPal' value.
     *
     * This enumeration value indicates that PayPal was used to pay for the order.
     */
    public const VAL_PAY_PAL = 'PayPal';

    /**
     * Constant for 'ELV' value.
     *
     * This enumeration value indicates that Elektronisches Lastschriftverfahren
     * (direct debit) was used to pay for the order.
     */
    public const VAL_ELV = 'ELV';

    /**
     * Constant for 'LocalPaymentCreditCardOther' value.
     *
     * This enumeration value indicates that an unknown credit card was used to pay for
     * the order.
     */
    public const VAL_LOCAL_PAYMENT_CREDIT_CARD_OTHER = 'LocalPaymentCreditCardOther';

    /**
     * Constant for 'LocalPaymentELV' value.
     *
     * This enumeration value indicates that Elektronisches Lastschriftverfahren
     * (direct debit) was used locally to pay for the order.
     */
    public const VAL_LOCAL_PAYMENT_ELV = 'LocalPaymentELV';

    /**
     * Constant for 'LocalPaymentMasterCard' value.
     *
     * This enumeration value indicates that a Master Card credit card was used to pay
     * for the order.
     */
    public const VAL_LOCAL_PAYMENT_MASTER_CARD = 'LocalPaymentMasterCard';

    /**
     * Constant for 'LocalPaymentAMEX' value.
     *
     * This enumeration value indicates that an American Express credit card was used
     * to pay for the order.
     */
    public const VAL_LOCAL_PAYMENT_AMEX = 'LocalPaymentAMEX';

    /**
     * Constant for 'LocalPaymentVISA' value.
     *
     * This enumeration value indicates that a Visa credit card was used to pay for the
     * order.
     */
    public const VAL_LOCAL_PAYMENT_VISA = 'LocalPaymentVISA';

    /**
     * Constant for 'LocalPaymentDiscover' value.
     *
     * This enumeration value indicates that a Discover credit card was used to pay for
     * the order.
     */
    public const VAL_LOCAL_PAYMENT_DISCOVER = 'LocalPaymentDiscover';

    /**
     * Constant for 'LocalPaymentDinersclub' value.
     *
     * This enumeration value indicates that a Diners Club credit card was used to pay
     * for the order.
     */
    public const VAL_LOCAL_PAYMENT_DINERSCLUB = 'LocalPaymentDinersclub';

    /**
     * Constant for 'LocalPaymentJCB' value.
     *
     * This enumeration value indicates that a JCB credit card was used to pay for the
     * order.
     */
    public const VAL_LOCAL_PAYMENT_JCB = 'LocalPaymentJCB';

    /**
     * Constant for 'LocalPaymentSWITCH' value.
     *
     * This enumeration value indicates that a Switch debit card was used to pay for
     * the order.
     */
    public const VAL_LOCAL_PAYMENT_SWITCH = 'LocalPaymentSWITCH';

    /**
     * Constant for 'LocalPaymentSOLO' value.
     *
     * This enumeration value indicates that a Solo debit card was used to pay for the
     * order.
     */
    public const VAL_LOCAL_PAYMENT_SOLO = 'LocalPaymentSOLO';

    /**
     * Constant for 'GIROPAY' value.
     *
     * This enumeration value indicates that Giropay was used to pay for the order.
     */
    public const VAL_GIROPAY = 'GIROPAY';

    /**
     * Constant for 'BML' value.
     *
     * This enumeration value indicates that BML was used to pay for the order.
     */
    public const VAL_BML = 'BML';

    /**
     * Constant for 'PayUponInvoice' value.
     *
     * This enumeration value indicates that the 'Pay Upon Invoice' option was offered
     * to the buyer on the Germany site.
     */
    public const VAL_PAY_UPON_INVOICE = 'PayUponInvoice';

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
