<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing BuyerPaymentMethodCodeType
 *
 * This enumerated type defines different payment methods that can be used by buyers to pay sellers for purchases. Supported payment methods vary by eBay marketplace, by eBay Category, and even by listing format. If a seller is listing, revising, or relisting an item with a Trading API call, the seller should use one of the following metadata calls to see which payment methods are supported at the site and category level:
 *  <ul>
 *  <li><b>GeteBayDetails</b>: through <b>PaymentOptionDetails</b> containers in the response, this call will show the seller all of the payment methods that are available for the specified marketplace. To retrieve this metadata, the seller should include the <b>DetailName</b> field in the request, and set its value to <code>PaymentOptionDetails</code></li>
 *  <li><b>GetCategoryFeatures</b>: through <b>PaymentMethod</b> fields that are returned under the <b>SiteDefaults</b> container or under one or more <b>Category</b> containers in the response, this call will show the seller all of the payment methods that are available for the specified marketplace, including any category exceptions. To retrieve this metadata, the seller should include the <b>FeatureID</b> field in the request, and set its value to <code>PaymentMethods</code>. Note that <b>Category</b> containers will only be returned for categories that differ from Site Defaults as far as supported payment methods are concerned. </li>
 *  </ul>
 *  <br>
 *  <span class="tablenote"><b>Note: </b>
 *  As eBay now controls all of the online payment methods available to buyers, sellers will only specify offline payment methods for listings that require/support offline payment.
 *  </span>
 * XSD Type: BuyerPaymentMethodCodeType
 */
class BuyerPaymentMethodCodeType
{
    /**
     * Constant for 'None' value.
     *
     * This enumeration value is deprecated, and should no longer be used in listing
     * flows.
     */
    public const VAL_NONE = 'None';

    /**
     * Constant for 'MOCC' value.
     *
     * This enumeration value indicates that a money order or cashiers check is
     * accepted for payment. This value is only applicable for offline payments and is
     * not supported on all marketplaces.
     */
    public const VAL_MOCC = 'MOCC';

    /**
     * Constant for 'AmEx' value.
     *
     * This enumeration value is deprecated, and should no longer be used in listing
     * flows.
     */
    public const VAL_AM_EX = 'AmEx';

    /**
     * Constant for 'PaymentSeeDescription' value.
     *
     * This enumeration value is deprecated, and should no longer be used in listing
     * flows.
     */
    public const VAL_PAYMENT_SEE_DESCRIPTION = 'PaymentSeeDescription';

    /**
     * Constant for 'CCAccepted' value.
     *
     * This enumeration value is deprecated, and should no longer be used in listing
     * flows.
     */
    public const VAL_CCACCEPTED = 'CCAccepted';

    /**
     * Constant for 'PersonalCheck' value.
     *
     * This enumeration value indicates that a personal check is accepted for payment.
     * This value is only applicable for offline payments and is not supported on all
     * marketplaces.
     */
    public const VAL_PERSONAL_CHECK = 'PersonalCheck';

    /**
     * Constant for 'VisaMC' value.
     *
     * This enumeration value is deprecated, and should no longer be used in listing
     * flows.
     */
    public const VAL_VISA_MC = 'VisaMC';

    /**
     * Constant for 'PaisaPayAccepted' value.
     *
     * This payment method is deprecated.
     */
    public const VAL_PAISA_PAY_ACCEPTED = 'PaisaPayAccepted';

    /**
     * Constant for 'Other' value.
     *
     * This enumeration value is deprecated, and should no longer be used in listing
     * flows.
     */
    public const VAL_OTHER = 'Other';

    /**
     * Constant for 'PayPal' value.
     *
     * This enumeration value is deprecated, and should no longer be used in listing
     * flows.
     */
    public const VAL_PAY_PAL = 'PayPal';

    /**
     * Constant for 'Discover' value.
     *
     * This enumeration value is deprecated, and should no longer be used in listing
     * flows.
     */
    public const VAL_DISCOVER = 'Discover';

    /**
     * Constant for 'CashOnPickup' value.
     *
     * This enumeration value indicates that cash on pickup is accepted for payment.
     * This value is only applicable for offline payments.
     */
    public const VAL_CASH_ON_PICKUP = 'CashOnPickup';

    /**
     * Constant for 'MoneyXferAccepted' value.
     *
     * This enumeration value is deprecated, and should no longer be used in listing
     * flows.
     */
    public const VAL_MONEY_XFER_ACCEPTED = 'MoneyXferAccepted';

    /**
     * Constant for 'MoneyXferAcceptedInCheckout' value.
     *
     * This enumeration value is deprecated, and should no longer be used in listing
     * flows.
     */
    public const VAL_MONEY_XFER_ACCEPTED_IN_CHECKOUT = 'MoneyXferAcceptedInCheckout';

    /**
     * Constant for 'OtherOnlinePayments' value.
     *
     * This enumeration value is deprecated, and should no longer be used in listing
     * flows.
     */
    public const VAL_OTHER_ONLINE_PAYMENTS = 'OtherOnlinePayments';

    /**
     * Constant for 'Escrow' value.
     *
     * This enumeration value is deprecated, and should no longer be used in listing
     * flows.
     */
    public const VAL_ESCROW = 'Escrow';

    /**
     * Constant for 'PrePayDelivery' value.
     *
     * This enumeration value is deprecated, and should no longer be used in listing
     * flows.
     */
    public const VAL_PRE_PAY_DELIVERY = 'PrePayDelivery';

    /**
     * Constant for 'CODPrePayDelivery' value.
     *
     * This enumeration value is deprecated, and should no longer be used in listing
     * flows.
     */
    public const VAL_CODPRE_PAY_DELIVERY = 'CODPrePayDelivery';

    /**
     * Constant for 'PostalTransfer' value.
     *
     * This enumeration value is deprecated, and should no longer be used in listing
     * flows.
     */
    public const VAL_POSTAL_TRANSFER = 'PostalTransfer';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for internal or future use.
     */
    public const VAL_CUSTOM_CODE = 'CustomCode';

    /**
     * Constant for 'LoanCheck' value.
     *
     * This enumeration value is deprecated, and should no longer be used in listing
     * flows.
     */
    public const VAL_LOAN_CHECK = 'LoanCheck';

    /**
     * Constant for 'CashInPerson' value.
     *
     * This enumeration value is deprecated, and should no longer be used in listing
     * flows.
     */
    public const VAL_CASH_IN_PERSON = 'CashInPerson';

    /**
     * Constant for 'ELV' value.
     *
     * This enumeration value is deprecated, and should no longer be used in listing
     * flows.
     */
    public const VAL_ELV = 'ELV';

    /**
     * Constant for 'PaisaPayEscrow' value.
     *
     * This payment type is no longer applicable since eBay India is no longer a
     * functioning site.
     */
    public const VAL_PAISA_PAY_ESCROW = 'PaisaPayEscrow';

    /**
     * Constant for 'PaisaPayEscrowEMI' value.
     *
     * This payment type is no longer applicable since eBay India is no longer a
     * functioning site.
     */
    public const VAL_PAISA_PAY_ESCROW_EMI = 'PaisaPayEscrowEMI';

    /**
     * Constant for 'IntegratedMerchantCreditCard' value.
     *
     * This payment method is deprecated.
     */
    public const VAL_INTEGRATED_MERCHANT_CREDIT_CARD = 'IntegratedMerchantCreditCard';

    /**
     * Constant for 'Moneybookers' value.
     *
     * This payment method is deprecated.
     */
    public const VAL_MONEYBOOKERS = 'Moneybookers';

    /**
     * Constant for 'Paymate' value.
     *
     * This payment method is deprecated.
     */
    public const VAL_PAYMATE = 'Paymate';

    /**
     * Constant for 'ProPay' value.
     *
     * This payment method is deprecated.
     */
    public const VAL_PRO_PAY = 'ProPay';

    /**
     * Constant for 'PayOnPickup' value.
     *
     * This enumeration value is deprecated, and should no longer be used in listing
     * flows.
     */
    public const VAL_PAY_ON_PICKUP = 'PayOnPickup';

    /**
     * Constant for 'Diners' value.
     *
     * This enumeration value is deprecated, and should no longer be used in listing
     * flows.
     */
    public const VAL_DINERS = 'Diners';

    /**
     * Constant for 'StandardPayment' value.
     *
     * This enumeration value is deprecated, and should no longer be used in listing
     * flows.
     */
    public const VAL_STANDARD_PAYMENT = 'StandardPayment';

    /**
     * Constant for 'DirectDebit' value.
     *
     * This payment method is deprecated.
     */
    public const VAL_DIRECT_DEBIT = 'DirectDebit';

    /**
     * Constant for 'CreditCard' value.
     *
     * This enumeration value is deprecated, and should no longer be used in listing
     * flows.
     */
    public const VAL_CREDIT_CARD = 'CreditCard';

    /**
     * Constant for 'PayUponInvoice' value.
     *
     * This enumeration value is deprecated, and should no longer be used in listing
     * flows.
     */
    public const VAL_PAY_UPON_INVOICE = 'PayUponInvoice';

    /**
     * Constant for 'QIWI' value.
     *
     * This payment method is deprecated.
     */
    public const VAL_QIWI = 'QIWI';

    /**
     * Constant for 'PayPalCredit' value.
     *
     * This payment method is deprecated.
     */
    public const VAL_PAY_PAL_CREDIT = 'PayPalCredit';

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
