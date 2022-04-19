<?php

namespace Nogrod\eBaySDK\Shopping;

/**
 * Class representing BuyerPaymentMethodCodeType
 *
 * This enumerated type includes all forms of payment that buyers may use to pay for order line items.
 * XSD Type: BuyerPaymentMethodCodeType
 */
class BuyerPaymentMethodCodeType
{
    /**
     * Constant for 'None' value.
     *
     * This enumeration value is returned in a <b>PaymentMethods</b> field if no
     * payment method is specified for a listing.
     */
    public const VAL_NONE = 'None';

    /**
     * Constant for 'MOCC' value.
     *
     * This enumeration value is returned in a <b>PaymentMethods</b> field if a money
     * order or cashier's check is accepted as a form of payment for the order line
     * item. This payment method is only applicable if the buyer and seller will be
     * handling payment offline.
     */
    public const VAL_MOCC = 'MOCC';

    /**
     * Constant for 'AmEx' value.
     *
     * This enumeration value is returned in a <b>PaymentMethods</b> field if American
     * Express is accepted as a form of payment for the order line item.
     */
    public const VAL_AM_EX = 'AmEx';

    /**
     * Constant for 'PaymentSeeDescription' value.
     *
     * This enumeration value is returned in a <b>PaymentMethods</b> field if payment
     * instructions for the order line item are contained in the listing description.
     */
    public const VAL_PAYMENT_SEE_DESCRIPTION = 'PaymentSeeDescription';

    /**
     * Constant for 'CCAccepted' value.
     *
     * This enumeration value is returned in a <b>PaymentMethods</b> field if credit
     * cards are accepted as a form of payment for the order line item.
     */
    public const VAL_CCACCEPTED = 'CCAccepted';

    /**
     * Constant for 'PersonalCheck' value.
     *
     * This enumeration value is returned in a <b>PaymentMethods</b> field if a
     * personal check is accepted as a form of payment for the order line item. This
     * payment method is only applicable if the buyer and seller will be handling
     * payment offline.
     */
    public const VAL_PERSONAL_CHECK = 'PersonalCheck';

    /**
     * Constant for 'COD' value.
     *
     * This enumeration value is returned in a <b>PaymentMethods</b> field if 'Cash on
     * delivery' is accepted as a form of payment for the order line item. This payment
     * method is only applicable if the buyer and seller will be handling payment
     * offline, and is only applicable to the following eBay sites: AT (16), BEFR (24),
     * BENL (123), CH (193), DE (77), ES (186), FR (71), HK (201), IN (203), IT (101),
     * PL (212), and SG (216).
     */
    public const VAL_COD = 'COD';

    /**
     * Constant for 'VisaMC' value.
     *
     * This enumeration value is returned in a <b>PaymentMethods</b> field if Visa or
     * Mastercard are accepted as forms of payment for the order line item.
     */
    public const VAL_VISA_MC = 'VisaMC';

    /**
     * Constant for 'PaisaPayAccepted' value.
     *
     * This payment method is no longer applicable, as this form of payment was only
     * accepted on the eBay India site, and this site is no longer a functioning eBay
     * marketplace.
     */
    public const VAL_PAISA_PAY_ACCEPTED = 'PaisaPayAccepted';

    /**
     * Constant for 'Other' value.
     *
     * This enumeration value is returned in a <b>PaymentMethods</b> field if the
     * seller is offering the buyer another form of payment not defined in this type.
     */
    public const VAL_OTHER = 'Other';

    /**
     * Constant for 'PayPal' value.
     *
     * This enumeration value is returned in a <b>PaymentMethods</b> field if PayPal is
     * accepted as a form of payment for the order line item. This is a valid value for
     * all countries that accept PayPal.
     */
    public const VAL_PAY_PAL = 'PayPal';

    /**
     * Constant for 'Discover' value.
     *
     * This enumeration value is returned in a <b>PaymentMethods</b> field if Discover
     * is accepted as a form of payment for the order line item.
     */
    public const VAL_DISCOVER = 'Discover';

    /**
     * Constant for 'CashOnPickup' value.
     *
     * This enumeration value is returned in a <b>PaymentMethods</b> field if 'Cash on
     * Pickup' is accepted as a form of payment for the order line item. This payment
     * method is only applicable if the buyer and seller will be handling payment
     * offline.
     */
    public const VAL_CASH_ON_PICKUP = 'CashOnPickup';

    /**
     * Constant for 'MoneyXferAccepted' value.
     *
     * This enumeration value is returned in a <b>PaymentMethods</b> field if the
     * seller is willing to accept a money transfer as a form of payment for the order
     * line item.
     */
    public const VAL_MONEY_XFER_ACCEPTED = 'MoneyXferAccepted';

    /**
     * Constant for 'MoneyXferAcceptedInCheckout' value.
     *
     * If the seller has bank account information on file, and
     *  <b>MoneyXferAcceptedInCheckout</b> is <code>true</code>, then the bank account
     *  information will be displayed at checkout.
     */
    public const VAL_MONEY_XFER_ACCEPTED_IN_CHECKOUT = 'MoneyXferAcceptedInCheckout';

    /**
     * Constant for 'OtherOnlinePayments' value.
     *
     * This enumeration value is returned in a <b>PaymentMethods</b> field if the
     * seller is offering the buyer another form of online payment not defined in this
     * type.
     */
    public const VAL_OTHER_ONLINE_PAYMENTS = 'OtherOnlinePayments';

    /**
     * Constant for 'Escrow' value.
     */
    public const VAL_ESCROW = 'Escrow';

    /**
     * Constant for 'PrePayDelivery' value.
     */
    public const VAL_PRE_PAY_DELIVERY = 'PrePayDelivery';

    /**
     * Constant for 'CODPrePayDelivery' value.
     */
    public const VAL_CODPRE_PAY_DELIVERY = 'CODPrePayDelivery';

    /**
     * Constant for 'PostalTransfer' value.
     */
    public const VAL_POSTAL_TRANSFER = 'PostalTransfer';

    /**
     * Constant for 'CustomCode' value.
     *
     * Placeholder value. See
     *  <a
     * href="https://developer.ebay.com/DevZone/shopping/docs/CallRef/types/simpleTypes.html#token">token</a>.
     */
    public const VAL_CUSTOM_CODE = 'CustomCode';

    /**
     * Constant for 'LoanCheck' value.
     *
     * This enumeration value is returned in a <b>PaymentMethods</b> field if a loan
     * check is accepted as a form of payment for the order line item.
     *  This option is only applicable to motor vehicle listings.
     */
    public const VAL_LOAN_CHECK = 'LoanCheck';

    /**
     * Constant for 'CashInPerson' value.
     */
    public const VAL_CASH_IN_PERSON = 'CashInPerson';

    /**
     * Constant for 'ELV' value.
     *
     * Elektronisches Lastschriftverfahren (direct debit).
     *  Only applicable to Express Germany.
     */
    public const VAL_ELV = 'ELV';

    /**
     * Constant for 'PaisaPayEscrowEMI' value.
     *
     * This payment method is no longer applicable, as this form of payment was only
     * accepted on the eBay India site, and this site is no longer a functioning eBay
     * marketplace.
     */
    public const VAL_PAISA_PAY_ESCROW_EMI = 'PaisaPayEscrowEMI';

    /**
     * Constant for 'Moneybookers' value.
     */
    public const VAL_MONEYBOOKERS = 'Moneybookers';

    /**
     * Constant for 'Paymate' value.
     */
    public const VAL_PAYMATE = 'Paymate';

    /**
     * Constant for 'ProPay' value.
     */
    public const VAL_PRO_PAY = 'ProPay';

    /**
     * Constant for 'StandardPayment' value.
     */
    public const VAL_STANDARD_PAYMENT = 'StandardPayment';

    /**
     * Constant for 'DirectDebit' value.
     *
     * This enumeration value is returned in a <b>PaymentMethods</b> field if a debit
     * card is accepted as a form of payment for the order line item. This value is
     * only applicable to eBay Scheduled Delivery orders in the UK.
     */
    public const VAL_DIRECT_DEBIT = 'DirectDebit';

    /**
     * Constant for 'CreditCard' value.
     *
     * This enumeration value is returned in a <b>PaymentMethods</b> field if a credit
     * card is accepted as a form of payment for the order line item.
     */
    public const VAL_CREDIT_CARD = 'CreditCard';

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
