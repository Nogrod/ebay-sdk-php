<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellingManagerOrderStatusType
 *
 * This type contains details on the status of an order.
 * XSD Type: SellingManagerOrderStatusType
 */
class SellingManagerOrderStatusType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Indicates the current status of the checkout flow for the order.
     *
     * @var string $checkoutStatus
     */
    private $checkoutStatus = null;

    /**
     * The paid status of the order.
     *
     * @var string $paidStatus
     */
    private $paidStatus = null;

    /**
     * The shipped status of the order.
     *
     * @var string $shippedStatus
     */
    private $shippedStatus = null;

    /**
     * The success or failure of a buyer's online payment.
     *
     * @var string $eBayPaymentStatus
     */
    private $eBayPaymentStatus = null;

    /**
     * Unique identifier of the PayPal transaction for the order.
     *
     * @var string $payPalTransactionID
     */
    private $payPalTransactionID = null;

    /**
     * The payment method the buyer selected for paying the seller
     *  for the order. If checkout is incomplete,
     *  PaymentMethodUsed is set to whatever the buyer selected as his
     *  or her preference on the Review Your Purchase page.
     *
     * @var string $paymentMethodUsed
     */
    private $paymentMethodUsed = null;

    /**
     * The type of feedback received (if feedback was received).
     *
     * @var string $feedbackReceived
     */
    private $feedbackReceived = null;

    /**
     * Whether the seller has left feedback.
     *
     * @var bool $feedbackSent
     */
    private $feedbackSent = null;

    /**
     * The total emails sent.
     *
     * @var int $totalEmailsSent
     */
    private $totalEmailsSent = null;

    /**
     * Contains the current status of a hold on a PayPal payment.
     *  The payment hold that is referred to as a "payment review" hold
     *  results from a possible issue with a buyer.
     *  The payment hold referred to as
     *  a "merchant hold" results from a possible issue with a seller.
     *  For more information, please see the link below.
     *
     * @var string $paymentHoldStatus
     */
    private $paymentHoldStatus = null;

    /**
     * The custom invoice number.
     *
     * @var string $sellerInvoiceNumber
     */
    private $sellerInvoiceNumber = null;

    /**
     * The date on which the seller marks the item as shipped, either set by default as
     *  the date date the item was marked shipped or set explicitly by the seller using
     *  the Edit Sales Record page. Note that sellers have the ability to set this value
     *  up to 3 calendar days in the future.
     *
     * @var \DateTime $shippedTime
     */
    private $shippedTime = null;

    /**
     * Date on which the order was paid.
     *
     * @var \DateTime $paidTime
     */
    private $paidTime = null;

    /**
     * The time that the last email was sent.
     *
     * @var \DateTime $lastEmailSentTime
     */
    private $lastEmailSentTime = null;

    /**
     * The time the invoice was sent. This is a seller-entered value for VAT-enabled
     *  sites. It is returned only for business sellers in VAT-enabled sites.
     *
     * @var \DateTime $sellerInvoiceTime
     */
    private $sellerInvoiceTime = null;

    /**
     * Indicates whether the order can be paid for through a payment gateway
     *  (Payflow) account. If <b>IntegratedMerchantCreditCardEnabled</b> is <code>true</code>, then
     *  integrated merchant credit card (IMCC) is enabled for credit cards because
     *  the seller has a payment gateway account. Therefore, if
     *  <b>IntegratedMerchantCreditCardEnabled</b> is <code>true</code>, and AmEx, Discover, or VisaMC
     *  is returned for an item, then on checkout, an online credit-card payment is
     *  processed through a payment gateway account. A payment gateway account is
     *  used by sellers to accept online credit cards (Visa, MasterCard, American
     *  Express, and Discover).
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  Beginning on May 1, 2019, eBay will no longer support electronic payments through Integrated Merchant Credit Card accounts. To accept online credit card payments from buyers, a seller must use specify PayPal as an accepted payment method, or opt in to eBay Managed Payments program (if the program is available to that seller).
     *  </span>
     *
     * @var bool $integratedMerchantCreditCardEnabled
     */
    private $integratedMerchantCreditCardEnabled = null;

    /**
     * Gets as checkoutStatus
     *
     * Indicates the current status of the checkout flow for the order.
     *
     * @return string
     */
    public function getCheckoutStatus()
    {
        return $this->checkoutStatus;
    }

    /**
     * Sets a new checkoutStatus
     *
     * Indicates the current status of the checkout flow for the order.
     *
     * @param string $checkoutStatus
     * @return self
     */
    public function setCheckoutStatus($checkoutStatus)
    {
        $this->checkoutStatus = $checkoutStatus;
        return $this;
    }

    /**
     * Gets as paidStatus
     *
     * The paid status of the order.
     *
     * @return string
     */
    public function getPaidStatus()
    {
        return $this->paidStatus;
    }

    /**
     * Sets a new paidStatus
     *
     * The paid status of the order.
     *
     * @param string $paidStatus
     * @return self
     */
    public function setPaidStatus($paidStatus)
    {
        $this->paidStatus = $paidStatus;
        return $this;
    }

    /**
     * Gets as shippedStatus
     *
     * The shipped status of the order.
     *
     * @return string
     */
    public function getShippedStatus()
    {
        return $this->shippedStatus;
    }

    /**
     * Sets a new shippedStatus
     *
     * The shipped status of the order.
     *
     * @param string $shippedStatus
     * @return self
     */
    public function setShippedStatus($shippedStatus)
    {
        $this->shippedStatus = $shippedStatus;
        return $this;
    }

    /**
     * Gets as eBayPaymentStatus
     *
     * The success or failure of a buyer's online payment.
     *
     * @return string
     */
    public function getEBayPaymentStatus()
    {
        return $this->eBayPaymentStatus;
    }

    /**
     * Sets a new eBayPaymentStatus
     *
     * The success or failure of a buyer's online payment.
     *
     * @param string $eBayPaymentStatus
     * @return self
     */
    public function setEBayPaymentStatus($eBayPaymentStatus)
    {
        $this->eBayPaymentStatus = $eBayPaymentStatus;
        return $this;
    }

    /**
     * Gets as payPalTransactionID
     *
     * Unique identifier of the PayPal transaction for the order.
     *
     * @return string
     */
    public function getPayPalTransactionID()
    {
        return $this->payPalTransactionID;
    }

    /**
     * Sets a new payPalTransactionID
     *
     * Unique identifier of the PayPal transaction for the order.
     *
     * @param string $payPalTransactionID
     * @return self
     */
    public function setPayPalTransactionID($payPalTransactionID)
    {
        $this->payPalTransactionID = $payPalTransactionID;
        return $this;
    }

    /**
     * Gets as paymentMethodUsed
     *
     * The payment method the buyer selected for paying the seller
     *  for the order. If checkout is incomplete,
     *  PaymentMethodUsed is set to whatever the buyer selected as his
     *  or her preference on the Review Your Purchase page.
     *
     * @return string
     */
    public function getPaymentMethodUsed()
    {
        return $this->paymentMethodUsed;
    }

    /**
     * Sets a new paymentMethodUsed
     *
     * The payment method the buyer selected for paying the seller
     *  for the order. If checkout is incomplete,
     *  PaymentMethodUsed is set to whatever the buyer selected as his
     *  or her preference on the Review Your Purchase page.
     *
     * @param string $paymentMethodUsed
     * @return self
     */
    public function setPaymentMethodUsed($paymentMethodUsed)
    {
        $this->paymentMethodUsed = $paymentMethodUsed;
        return $this;
    }

    /**
     * Gets as feedbackReceived
     *
     * The type of feedback received (if feedback was received).
     *
     * @return string
     */
    public function getFeedbackReceived()
    {
        return $this->feedbackReceived;
    }

    /**
     * Sets a new feedbackReceived
     *
     * The type of feedback received (if feedback was received).
     *
     * @param string $feedbackReceived
     * @return self
     */
    public function setFeedbackReceived($feedbackReceived)
    {
        $this->feedbackReceived = $feedbackReceived;
        return $this;
    }

    /**
     * Gets as feedbackSent
     *
     * Whether the seller has left feedback.
     *
     * @return bool
     */
    public function getFeedbackSent()
    {
        return $this->feedbackSent;
    }

    /**
     * Sets a new feedbackSent
     *
     * Whether the seller has left feedback.
     *
     * @param bool $feedbackSent
     * @return self
     */
    public function setFeedbackSent($feedbackSent)
    {
        $this->feedbackSent = $feedbackSent;
        return $this;
    }

    /**
     * Gets as totalEmailsSent
     *
     * The total emails sent.
     *
     * @return int
     */
    public function getTotalEmailsSent()
    {
        return $this->totalEmailsSent;
    }

    /**
     * Sets a new totalEmailsSent
     *
     * The total emails sent.
     *
     * @param int $totalEmailsSent
     * @return self
     */
    public function setTotalEmailsSent($totalEmailsSent)
    {
        $this->totalEmailsSent = $totalEmailsSent;
        return $this;
    }

    /**
     * Gets as paymentHoldStatus
     *
     * Contains the current status of a hold on a PayPal payment.
     *  The payment hold that is referred to as a "payment review" hold
     *  results from a possible issue with a buyer.
     *  The payment hold referred to as
     *  a "merchant hold" results from a possible issue with a seller.
     *  For more information, please see the link below.
     *
     * @return string
     */
    public function getPaymentHoldStatus()
    {
        return $this->paymentHoldStatus;
    }

    /**
     * Sets a new paymentHoldStatus
     *
     * Contains the current status of a hold on a PayPal payment.
     *  The payment hold that is referred to as a "payment review" hold
     *  results from a possible issue with a buyer.
     *  The payment hold referred to as
     *  a "merchant hold" results from a possible issue with a seller.
     *  For more information, please see the link below.
     *
     * @param string $paymentHoldStatus
     * @return self
     */
    public function setPaymentHoldStatus($paymentHoldStatus)
    {
        $this->paymentHoldStatus = $paymentHoldStatus;
        return $this;
    }

    /**
     * Gets as sellerInvoiceNumber
     *
     * The custom invoice number.
     *
     * @return string
     */
    public function getSellerInvoiceNumber()
    {
        return $this->sellerInvoiceNumber;
    }

    /**
     * Sets a new sellerInvoiceNumber
     *
     * The custom invoice number.
     *
     * @param string $sellerInvoiceNumber
     * @return self
     */
    public function setSellerInvoiceNumber($sellerInvoiceNumber)
    {
        $this->sellerInvoiceNumber = $sellerInvoiceNumber;
        return $this;
    }

    /**
     * Gets as shippedTime
     *
     * The date on which the seller marks the item as shipped, either set by default as
     *  the date date the item was marked shipped or set explicitly by the seller using
     *  the Edit Sales Record page. Note that sellers have the ability to set this value
     *  up to 3 calendar days in the future.
     *
     * @return \DateTime
     */
    public function getShippedTime()
    {
        return $this->shippedTime;
    }

    /**
     * Sets a new shippedTime
     *
     * The date on which the seller marks the item as shipped, either set by default as
     *  the date date the item was marked shipped or set explicitly by the seller using
     *  the Edit Sales Record page. Note that sellers have the ability to set this value
     *  up to 3 calendar days in the future.
     *
     * @param \DateTime $shippedTime
     * @return self
     */
    public function setShippedTime(\DateTime $shippedTime)
    {
        $this->shippedTime = $shippedTime;
        return $this;
    }

    /**
     * Gets as paidTime
     *
     * Date on which the order was paid.
     *
     * @return \DateTime
     */
    public function getPaidTime()
    {
        return $this->paidTime;
    }

    /**
     * Sets a new paidTime
     *
     * Date on which the order was paid.
     *
     * @param \DateTime $paidTime
     * @return self
     */
    public function setPaidTime(\DateTime $paidTime)
    {
        $this->paidTime = $paidTime;
        return $this;
    }

    /**
     * Gets as lastEmailSentTime
     *
     * The time that the last email was sent.
     *
     * @return \DateTime
     */
    public function getLastEmailSentTime()
    {
        return $this->lastEmailSentTime;
    }

    /**
     * Sets a new lastEmailSentTime
     *
     * The time that the last email was sent.
     *
     * @param \DateTime $lastEmailSentTime
     * @return self
     */
    public function setLastEmailSentTime(\DateTime $lastEmailSentTime)
    {
        $this->lastEmailSentTime = $lastEmailSentTime;
        return $this;
    }

    /**
     * Gets as sellerInvoiceTime
     *
     * The time the invoice was sent. This is a seller-entered value for VAT-enabled
     *  sites. It is returned only for business sellers in VAT-enabled sites.
     *
     * @return \DateTime
     */
    public function getSellerInvoiceTime()
    {
        return $this->sellerInvoiceTime;
    }

    /**
     * Sets a new sellerInvoiceTime
     *
     * The time the invoice was sent. This is a seller-entered value for VAT-enabled
     *  sites. It is returned only for business sellers in VAT-enabled sites.
     *
     * @param \DateTime $sellerInvoiceTime
     * @return self
     */
    public function setSellerInvoiceTime(\DateTime $sellerInvoiceTime)
    {
        $this->sellerInvoiceTime = $sellerInvoiceTime;
        return $this;
    }

    /**
     * Gets as integratedMerchantCreditCardEnabled
     *
     * Indicates whether the order can be paid for through a payment gateway
     *  (Payflow) account. If <b>IntegratedMerchantCreditCardEnabled</b> is <code>true</code>, then
     *  integrated merchant credit card (IMCC) is enabled for credit cards because
     *  the seller has a payment gateway account. Therefore, if
     *  <b>IntegratedMerchantCreditCardEnabled</b> is <code>true</code>, and AmEx, Discover, or VisaMC
     *  is returned for an item, then on checkout, an online credit-card payment is
     *  processed through a payment gateway account. A payment gateway account is
     *  used by sellers to accept online credit cards (Visa, MasterCard, American
     *  Express, and Discover).
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  Beginning on May 1, 2019, eBay will no longer support electronic payments through Integrated Merchant Credit Card accounts. To accept online credit card payments from buyers, a seller must use specify PayPal as an accepted payment method, or opt in to eBay Managed Payments program (if the program is available to that seller).
     *  </span>
     *
     * @return bool
     */
    public function getIntegratedMerchantCreditCardEnabled()
    {
        return $this->integratedMerchantCreditCardEnabled;
    }

    /**
     * Sets a new integratedMerchantCreditCardEnabled
     *
     * Indicates whether the order can be paid for through a payment gateway
     *  (Payflow) account. If <b>IntegratedMerchantCreditCardEnabled</b> is <code>true</code>, then
     *  integrated merchant credit card (IMCC) is enabled for credit cards because
     *  the seller has a payment gateway account. Therefore, if
     *  <b>IntegratedMerchantCreditCardEnabled</b> is <code>true</code>, and AmEx, Discover, or VisaMC
     *  is returned for an item, then on checkout, an online credit-card payment is
     *  processed through a payment gateway account. A payment gateway account is
     *  used by sellers to accept online credit cards (Visa, MasterCard, American
     *  Express, and Discover).
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  Beginning on May 1, 2019, eBay will no longer support electronic payments through Integrated Merchant Credit Card accounts. To accept online credit card payments from buyers, a seller must use specify PayPal as an accepted payment method, or opt in to eBay Managed Payments program (if the program is available to that seller).
     *  </span>
     *
     * @param bool $integratedMerchantCreditCardEnabled
     * @return self
     */
    public function setIntegratedMerchantCreditCardEnabled($integratedMerchantCreditCardEnabled)
    {
        $this->integratedMerchantCreditCardEnabled = $integratedMerchantCreditCardEnabled;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getCheckoutStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CheckoutStatus", $value);
        }
        $value = $this->getPaidStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaidStatus", $value);
        }
        $value = $this->getShippedStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippedStatus", $value);
        }
        $value = $this->getEBayPaymentStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayPaymentStatus", $value);
        }
        $value = $this->getPayPalTransactionID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PayPalTransactionID", $value);
        }
        $value = $this->getPaymentMethodUsed();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaymentMethodUsed", $value);
        }
        $value = $this->getFeedbackReceived();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeedbackReceived", $value);
        }
        $value = $this->getFeedbackSent();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeedbackSent", $value);
        }
        $value = $this->getTotalEmailsSent();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalEmailsSent", $value);
        }
        $value = $this->getPaymentHoldStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaymentHoldStatus", $value);
        }
        $value = $this->getSellerInvoiceNumber();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerInvoiceNumber", $value);
        }
        $value = $this->getShippedTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippedTime", $value);
        }
        $value = $this->getPaidTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaidTime", $value);
        }
        $value = $this->getLastEmailSentTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LastEmailSentTime", $value);
        }
        $value = $this->getSellerInvoiceTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerInvoiceTime", $value);
        }
        $value = $this->getIntegratedMerchantCreditCardEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IntegratedMerchantCreditCardEnabled", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader)
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue)
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue)
    {
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CheckoutStatus');
        if (null !== $value) {
            $this->setCheckoutStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaidStatus');
        if (null !== $value) {
            $this->setPaidStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippedStatus');
        if (null !== $value) {
            $this->setShippedStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayPaymentStatus');
        if (null !== $value) {
            $this->setEBayPaymentStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PayPalTransactionID');
        if (null !== $value) {
            $this->setPayPalTransactionID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentMethodUsed');
        if (null !== $value) {
            $this->setPaymentMethodUsed($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeedbackReceived');
        if (null !== $value) {
            $this->setFeedbackReceived($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeedbackSent');
        if (null !== $value) {
            $this->setFeedbackSent($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalEmailsSent');
        if (null !== $value) {
            $this->setTotalEmailsSent($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentHoldStatus');
        if (null !== $value) {
            $this->setPaymentHoldStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerInvoiceNumber');
        if (null !== $value) {
            $this->setSellerInvoiceNumber($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippedTime');
        if (null !== $value) {
            $this->setShippedTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaidTime');
        if (null !== $value) {
            $this->setPaidTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LastEmailSentTime');
        if (null !== $value) {
            $this->setLastEmailSentTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerInvoiceTime');
        if (null !== $value) {
            $this->setSellerInvoiceTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IntegratedMerchantCreditCardEnabled');
        if (null !== $value) {
            $this->setIntegratedMerchantCreditCardEnabled($value);
        }
    }
}
