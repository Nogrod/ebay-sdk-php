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
 *  If a seller is opted in to the new eBay Managed Payments program, a payment method does not need to be specified at listing time, as eBay manages the payment methods that are available to the buyer. Any payment method that is specified at listing time (or defined in a payment business policy) will be ignored and dropped from the listing, and the seller will get a warning message in the response. The eBay Managed Payments program is currently only available to a limited number of sellers on the US site, but this feature will be rolled out to more and more US sellers throughout 2019, and is expected to start being rolled out to some Germany sellers in Q3 of 2019.
 *  </span>
 * XSD Type: BuyerPaymentMethodCodeType
 */
class BuyerPaymentMethodCodeType
{

    /**
     * Constant for 'None' value.
     *
     * This enumeration value indicates that no payment method has been specified for
     * the listing. This may be the case for a classified ad listing, since payment
     * happens outside of the eBay platform.
     */
    public const VAL_NONE = 'None';

    /**
     * Constant for 'MOCC' value.
     *
     * This enumeration value indicates that a money order or cashiers check is
     * accepted for payment.
     */
    public const VAL_MOCC = 'MOCC';

    /**
     * Constant for 'AmEx' value.
     *
     * This enumeration value indicates that American Express is accepted for payment.
     */
    public const VAL_AM_EX = 'AmEx';

    /**
     * Constant for 'PaymentSeeDescription' value.
     *
     * This enumeration value indicates that buyers should check the listing
     * description for more details on payment. This may be the case for a classified
     * ad listing, since payment happens outside of the eBay platform.
     */
    public const VAL_PAYMENT_SEE_DESCRIPTION = 'PaymentSeeDescription';

    /**
     * Constant for 'CCAccepted' value.
     *
     * This enumeration value indicates that credit cards are accepted for payment.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This enumeration value is also returned in the response of order management
     * calls if the seller is opted in to eBay Managed Payments, and the buyer used an
     * eBay gift card to pay the full or partial balance of the order.
     *  </span>
     */
    public const VAL_CCACCEPTED = 'CCAccepted';

    /**
     * Constant for 'PersonalCheck' value.
     *
     * This enumeration value indicates that a personal check is accepted for payment.
     */
    public const VAL_PERSONAL_CHECK = 'PersonalCheck';

    /**
     * Constant for 'COD' value.
     *
     * This enumeration value indicates that cash on delivery of item is accepted for
     * payment.
     */
    public const VAL_COD = 'COD';

    /**
     * Constant for 'VisaMC' value.
     *
     * This enumeration value indicates that Visa or MasterCard are accepted for
     * payment.
     */
    public const VAL_VISA_MC = 'VisaMC';

    /**
     * Constant for 'PaisaPayAccepted' value.
     *
     * This enumeration value indicates that PaisaPay is accepted for payment. This
     * form of payment is only available to buyers in India.
     */
    public const VAL_PAISA_PAY_ACCEPTED = 'PaisaPayAccepted';

    /**
     * Constant for 'Other' value.
     *
     * This enumeration value may be returned if the payment method is unknown.
     */
    public const VAL_OTHER = 'Other';

    /**
     * Constant for 'PayPal' value.
     *
     * This enumeration value indicates that PayPal is accepted as a payment method. If
     * PayPal is set by the seller as an accepted payment method, the seller must also
     * supply their PayPal email address through the <b>Item.PayPalEmailAddress</b>
     * field in an Add/Revise/Relist call. <br>
     *  <br>
     *  If you don't pass PayPal in the listing request but the seller's eBay
     *  preferences are set to accept PayPal on all listings,
     *  eBay will add PayPal as a payment method for you in most cases,
     *  and we may return a warning. <br>
     *  <br>
     *  Except for sellers opted in to eBay Managed Payments, PayPal must be the only
     * accepted payment method to enable the immediate payment feature (Item.AutoPay).
     * PayPal must be accepted for charity listings. PayPal must be accepted for event
     * ticket listings when the venue is in New York state or Illinois, so that eBay
     * can offer buyer protection (per state law). (For some applications, it may be
     * simplest to use errors returned from VerifyAddItem to flag the PayPal
     * requirement for New York and Illinois ticket listings.) PayPal must be accepted
     * for US eBay Motors listings that require a deposit (and it will not be set
     * automatically based on the seller's preferences). Conversely, if PayPal is
     * specified for US eBay Motors listings, deposit attributes must be specified.<br>
     */
    public const VAL_PAY_PAL = 'PayPal';

    /**
     * Constant for 'Discover' value.
     *
     * This enumeration value indicates that Discover Card is accepted for payment.
     */
    public const VAL_DISCOVER = 'Discover';

    /**
     * Constant for 'CashOnPickup' value.
     *
     * This enumeration value indicates that cash on pickup is accepted for payment.
     */
    public const VAL_CASH_ON_PICKUP = 'CashOnPickup';

    /**
     * Constant for 'MoneyXferAccepted' value.
     *
     * This enumeration value indicates that a direct transfer of money is accepted for
     * payment.
     */
    public const VAL_MONEY_XFER_ACCEPTED = 'MoneyXferAccepted';

    /**
     * Constant for 'MoneyXferAcceptedInCheckout' value.
     *
     * This enumeration value indicates that a direct transfer of money during checkout
     * is accepted for payment.
     */
    public const VAL_MONEY_XFER_ACCEPTED_IN_CHECKOUT = 'MoneyXferAcceptedInCheckout';

    /**
     * Constant for 'OtherOnlinePayments' value.
     *
     * This enumeration value may be returned if the payment method is unknown.
     */
    public const VAL_OTHER_ONLINE_PAYMENTS = 'OtherOnlinePayments';

    /**
     * Constant for 'Escrow' value.
     *
     * Reserved for future use.
     */
    public const VAL_ESCROW = 'Escrow';

    /**
     * Constant for 'PrePayDelivery' value.
     *
     * Reserved for future use.
     */
    public const VAL_PRE_PAY_DELIVERY = 'PrePayDelivery';

    /**
     * Constant for 'CODPrePayDelivery' value.
     *
     * Reserved for future use.
     */
    public const VAL_CODPRE_PAY_DELIVERY = 'CODPrePayDelivery';

    /**
     * Constant for 'PostalTransfer' value.
     *
     * Reserved for future use.
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
     * This enumeration value indicates that a loan check is accepted for payment. This
     * option is generally only applicable to motor vehicle listings.
     */
    public const VAL_LOAN_CHECK = 'LoanCheck';

    /**
     * Constant for 'CashInPerson' value.
     *
     * This enumeration value indicates that cash is accepted for payment. This option
     * is generally only applicable to motor vehicle listings on the US and Canada
     * sites.
     */
    public const VAL_CASH_IN_PERSON = 'CashInPerson';

    /**
     * Constant for 'ELV' value.
     *
     * Elektronisches Lastschriftverfahren (direct debit).
     *  Only applicable to the Express Germany site, which has been shut down.
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
     * <span class="tablenote"><b>Note: </b>
     *  This enumeration value should no longer be passed in as an accepted payment
     * method on any eBay marketplace. If this value is specified in an
     * Add/Revise/Relist call, it will be ignored and dropped. eBay no longer supports
     * electronic payments through Integrated Merchant Credit Card accounts. To accept
     * online credit card payments from buyers, a seller must use specify 'PayPal' as a
     * payment method, and the buyer can pay by credit card through their PayPal
     * account, or the seller must opt in to eBay Managed Payments program, and eBay
     * will process credit card payments.
     *  </span>
     */
    public const VAL_INTEGRATED_MERCHANT_CREDIT_CARD = 'IntegratedMerchantCreditCard';

    /**
     * Constant for 'Moneybookers' value.
     *
     * <span class="tablenote"><b>Note:</b>
     *  This payment method is no longer an acceptable form of payment. Sellers may no
     * longer offer this payment method to buyers when creating new listings.
     *  </span>
     *  <br>
     *  The Moneybookers payment method.
     *  For more information, see http://www.moneybookers.com/partners/us/ebay.
     *  Only applicable to the US site (and
     *  to the Parts and Accessories category of the US eBay Motors site).
     */
    public const VAL_MONEYBOOKERS = 'Moneybookers';

    /**
     * Constant for 'Paymate' value.
     *
     * <span class="tablenote"><b>Note:</b>
     *  This payment method is no longer an acceptable form of payment. Sellers may no
     * longer offer this payment method to buyers when creating new listings.
     *  </span>
     *  <br>
     *  The Paymate payment method. This payment method is only accepted on the eBay
     * Australia site. For more information on setting up Paymate as an accepted
     * payment method on the eBay Australia site,
     *  see the <a
     * href="http://www.paymate.com/cms/index.php/sellers/sell-on-ebay/selling-on-ebay"
     * target="_blank">Sell with Paymate on eBay.com.au</a> help page.
     */
    public const VAL_PAYMATE = 'Paymate';

    /**
     * Constant for 'ProPay' value.
     *
     * <span class="tablenote"><b>Note:</b>
     *  This payment method is no longer an acceptable form of payment. Sellers may no
     * longer offer this payment method to buyers when creating new listings.
     *  </span>
     *  <br>
     *  The ProPay payment method. US site only. For more information,
     *  see http://www.Propay.com/eBay.
     */
    public const VAL_PRO_PAY = 'ProPay';

    /**
     * Constant for 'PayOnPickup' value.
     *
     * PayOnPickup payment method. PayOnPickup is the same as CashOnPickup.
     *  For listings on the eBay US site, the user interface refers to this feature as
     * Pay on pickup.
     *  In the user interface of your application, please refer to the feature as Pay
     * on pickup so that
     *  the name in your user interface corresponds to the name on the eBay US site.
     */
    public const VAL_PAY_ON_PICKUP = 'PayOnPickup';

    /**
     * Constant for 'Diners' value.
     *
     * This enumeration value indicates that the Diners Club credit card is accepted
     * for payment.
     */
    public const VAL_DINERS = 'Diners';

    /**
     * Constant for 'StandardPayment' value.
     *
     * This value is no longer used.
     */
    public const VAL_STANDARD_PAYMENT = 'StandardPayment';

    /**
     * Constant for 'DirectDebit' value.
     *
     * This value indicates that a debit card can be used/was used to pay for the
     * order. This payment method value must be passed in one of the
     * <b>Item.PaymentMethods</b> fields if the seller is making the item available for
     * eBay Now delivery. For eBay Now orders, the eBay Now valet accepts debit cards
     * as a form of payment. This value is only applicable for eBay Now orders.
     */
    public const VAL_DIRECT_DEBIT = 'DirectDebit';

    /**
     * Constant for 'CreditCard' value.
     *
     * This enumeration value is returned in the response of order management calls if
     * the seller is opted in to eBay Managed Payments, and the buyer has paid for the
     * order with any accepted payment method except an eBay gift card. If the buyer
     * used an eBay gift card to pay the full or partial balance of the order, the
     * <code>CCAccepted</code> value will be returned instead.
     *  <br/><br/>
     *  This is not an enumeration value that a seller would pass in as an accepted
     * payment method.
     */
    public const VAL_CREDIT_CARD = 'CreditCard';

    /**
     * Constant for 'PayUponInvoice' value.
     *
     * This buyer payment method is only applicable for the Germany site and is
     * associated with the rollout of Progressive Checkout and the Pay Upon Invoice
     * feature. 'PayUponInvoice' is not a payment method that is offered to the buyer,
     * but instead, eBay/PayPal makes the determination (based on several factors)
     * during checkout whether the buyer is eligible for 'Pay Upon Invoice'. If the
     * buyer is offered the 'Pay Upon Invoice' option, that buyer is not required to
     * pay for the order until an order invoice is sent by the seller. The seller must
     * offer PayPal as a payment option or the 'Pay Upon Invoice' option will not be
     * made available to the buyer under any circumstance.
     *  <br><br>
     *  Only select categories on the Germany site will support the 'Pay Upon Invoice'
     * option, and orders going above the two-thousand dollar EURO mark will not be
     * eligible for 'Pay Upon Invoice'.
     *  <br><br>
     *  Since the seller can not specify 'Pay Upon Invoice' as a payment method, this
     * enumeration value cannot be passed into a <b>Item.PaymentMethods</b> field in an
     * Add/Revise/Relist call.
     */
    public const VAL_PAY_UPON_INVOICE = 'PayUponInvoice';

    /**
     * Constant for 'QIWI' value.
     *
     * This value indicates that QIWI can be used/was used by Russian buyers to pay for
     * the order. This payment method value must be passed in one of the
     * <b>Item.PaymentMethods</b> fields in an Add/Revise/Relist API call if the seller
     * wants to make QIWI an available payment method for Russian buyers. QIWI works in
     * conjunction with PayPal, so if 'QIWI' is set as an available payment method,
     * 'PayPal' must be specified as well. This value can only be specified on the eBay
     * US site, and it is only applicable for Russian buyers.
     */
    public const VAL_QIWI = 'QIWI';

    /**
     * Constant for 'PayPalCredit' value.
     *
     * This value indicates that a PayPal credit card can be used/was used to pay for
     * the order.
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
