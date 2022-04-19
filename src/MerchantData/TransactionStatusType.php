<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing TransactionStatusType
 *
 * Contains the order status, e.g. the buyer's online payment and whether the checkout process for the order is complete.
 * XSD Type: TransactionStatusType
 */
class TransactionStatusType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Indicates the status of the buyer's payment for an order. If the payment was successfuly processed, a value of <code>NoPaymentFailure</code> will be returned.
     *
     * @var string $eBayPaymentStatus
     */
    private $eBayPaymentStatus = null;

    /**
     * Indicates the current status of the checkout flow for the order. If the payment was successfuly processed, a value of <code>CheckoutComplete</code> will be returned.
     *
     * @var string $checkoutStatus
     */
    private $checkoutStatus = null;

    /**
     * Indicates date and time an order's status was last updated (in GMT).
     *
     * @var \DateTime $lastTimeModified
     */
    private $lastTimeModified = null;

    /**
     * The payment method that the buyer selected to pay for the order.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  Sellers no longer have to specify any electronic payment methods at listing time, but this field is still returned. The value returned in this field will generally be <code>CreditCard</code>, unless an eBay gift card was used by the buyer to pay a partial or full balance of the order. If this is the case, the value returned in this field will be <code>CCAccepted</code>. Either of these two values will be returned, but neither accurately reflects the actual payment method that the buyer used. If the order was paid for off of eBay's platform using an 'offline' payment method such as 'CashOnPickup' or 'MOCC' (money order or cashier's check), and the seller marked the order as paid, either of those values may get returned here.
     *  </span>
     *
     * @var string $paymentMethodUsed
     */
    private $paymentMethodUsed = null;

    /**
     * Indicates whether checkout is complete, incomplete, or pending for an order.
     *
     * @var string $completeStatus
     */
    private $completeStatus = null;

    /**
     * Indicates whether the buyer has selected shipping details during checkout. False indicates that the shipping service was selected by eBay for the buyer. For example, if the buyer has not yet completed the Review Your Purchase page, he has not picked a shipping service. If it is false, the application should ignore <strong>ShippingServiceCost</strong> and <strong>ShippingServiceSelected</strong> (items whose values are defaulted by eBay).
     *
     * @var bool $buyerSelectedShipping
     */
    private $buyerSelectedShipping = null;

    /**
     * This field indicates the type and/or status of a payment hold on the item.
     *  <br> <br>
     *  <span class="tablenote"><b>Note:</b>
     *  For the <strong>GetItemTransactions</strong>, <strong>GetOrders</strong>, and <strong>GetOrderTransactions</strong> calls, this field is only returned to the seller of the order; this field is not returned for the buyer or third party.
     *  </span>
     *
     * @var string $paymentHoldStatus
     */
    private $paymentHoldStatus = null;

    /**
     * This field is no longer applicable as eBay sellers can no longer use iMCC gateway accounts to handle buyer payments.
     *
     * @var bool $integratedMerchantCreditCardEnabled
     */
    private $integratedMerchantCreditCardEnabled = null;

    /**
     * This container is no longer used.
     *
     * @var \Nogrod\eBaySDK\MerchantData\EBayPaymentMismatchDetailsType $eBayPaymentMismatchDetails
     */
    private $eBayPaymentMismatchDetails = null;

    /**
     * This field gives the status of a buyer's Item Not Received (INR) Inquiry. This field is only returned if the buyer has created an INR Inquiry through the site or through the Post-Order API.
     *
     * @var string $inquiryStatus
     */
    private $inquiryStatus = null;

    /**
     * This field gives the status of a buyer's return request. This field is only returned if the buyer has initiated a return request, or has escalated an existing return request into a return case.
     *
     * @var string $returnStatus
     */
    private $returnStatus = null;

    /**
     * The enumeration value in this field indicates which payment method was used by the German buyer who was offered the 'Pay Upon Invoice' option. This field will only be returned if a German buyer was offered the 'Pay Upon Invoice' option. Otherwise, the buyer's selected payment method is returned in the <b>PaymentMethodUsed</b> field by the <b>GetItemTransactions</b> call.
     *
     * @var string $paymentInstrument
     */
    private $paymentInstrument = null;

    /**
     * This enumeration value indicates the current state of a purchased digital gift card. The normal flow is for the buyer (or other recipient of the gift card) to download the gift card from the delivered email after purchase, and then to activate the card for use. This field is only applicable and returned for digital gift card order line items.
     *
     * @var string $digitalStatus
     */
    private $digitalStatus = null;

    /**
     * The current status for the order cancellation request if it exists. This field is only returned if a cancellation request has been made on an order, or if the order is currently going through the cancellation process, or if the order has already been cancelled.
     *
     * @var string $cancelStatus
     */
    private $cancelStatus = null;

    /**
     * Gets as eBayPaymentStatus
     *
     * Indicates the status of the buyer's payment for an order. If the payment was successfuly processed, a value of <code>NoPaymentFailure</code> will be returned.
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
     * Indicates the status of the buyer's payment for an order. If the payment was successfuly processed, a value of <code>NoPaymentFailure</code> will be returned.
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
     * Gets as checkoutStatus
     *
     * Indicates the current status of the checkout flow for the order. If the payment was successfuly processed, a value of <code>CheckoutComplete</code> will be returned.
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
     * Indicates the current status of the checkout flow for the order. If the payment was successfuly processed, a value of <code>CheckoutComplete</code> will be returned.
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
     * Gets as lastTimeModified
     *
     * Indicates date and time an order's status was last updated (in GMT).
     *
     * @return \DateTime
     */
    public function getLastTimeModified()
    {
        return $this->lastTimeModified;
    }

    /**
     * Sets a new lastTimeModified
     *
     * Indicates date and time an order's status was last updated (in GMT).
     *
     * @param \DateTime $lastTimeModified
     * @return self
     */
    public function setLastTimeModified(\DateTime $lastTimeModified)
    {
        $this->lastTimeModified = $lastTimeModified;
        return $this;
    }

    /**
     * Gets as paymentMethodUsed
     *
     * The payment method that the buyer selected to pay for the order.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  Sellers no longer have to specify any electronic payment methods at listing time, but this field is still returned. The value returned in this field will generally be <code>CreditCard</code>, unless an eBay gift card was used by the buyer to pay a partial or full balance of the order. If this is the case, the value returned in this field will be <code>CCAccepted</code>. Either of these two values will be returned, but neither accurately reflects the actual payment method that the buyer used. If the order was paid for off of eBay's platform using an 'offline' payment method such as 'CashOnPickup' or 'MOCC' (money order or cashier's check), and the seller marked the order as paid, either of those values may get returned here.
     *  </span>
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
     * The payment method that the buyer selected to pay for the order.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  Sellers no longer have to specify any electronic payment methods at listing time, but this field is still returned. The value returned in this field will generally be <code>CreditCard</code>, unless an eBay gift card was used by the buyer to pay a partial or full balance of the order. If this is the case, the value returned in this field will be <code>CCAccepted</code>. Either of these two values will be returned, but neither accurately reflects the actual payment method that the buyer used. If the order was paid for off of eBay's platform using an 'offline' payment method such as 'CashOnPickup' or 'MOCC' (money order or cashier's check), and the seller marked the order as paid, either of those values may get returned here.
     *  </span>
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
     * Gets as completeStatus
     *
     * Indicates whether checkout is complete, incomplete, or pending for an order.
     *
     * @return string
     */
    public function getCompleteStatus()
    {
        return $this->completeStatus;
    }

    /**
     * Sets a new completeStatus
     *
     * Indicates whether checkout is complete, incomplete, or pending for an order.
     *
     * @param string $completeStatus
     * @return self
     */
    public function setCompleteStatus($completeStatus)
    {
        $this->completeStatus = $completeStatus;
        return $this;
    }

    /**
     * Gets as buyerSelectedShipping
     *
     * Indicates whether the buyer has selected shipping details during checkout. False indicates that the shipping service was selected by eBay for the buyer. For example, if the buyer has not yet completed the Review Your Purchase page, he has not picked a shipping service. If it is false, the application should ignore <strong>ShippingServiceCost</strong> and <strong>ShippingServiceSelected</strong> (items whose values are defaulted by eBay).
     *
     * @return bool
     */
    public function getBuyerSelectedShipping()
    {
        return $this->buyerSelectedShipping;
    }

    /**
     * Sets a new buyerSelectedShipping
     *
     * Indicates whether the buyer has selected shipping details during checkout. False indicates that the shipping service was selected by eBay for the buyer. For example, if the buyer has not yet completed the Review Your Purchase page, he has not picked a shipping service. If it is false, the application should ignore <strong>ShippingServiceCost</strong> and <strong>ShippingServiceSelected</strong> (items whose values are defaulted by eBay).
     *
     * @param bool $buyerSelectedShipping
     * @return self
     */
    public function setBuyerSelectedShipping($buyerSelectedShipping)
    {
        $this->buyerSelectedShipping = $buyerSelectedShipping;
        return $this;
    }

    /**
     * Gets as paymentHoldStatus
     *
     * This field indicates the type and/or status of a payment hold on the item.
     *  <br> <br>
     *  <span class="tablenote"><b>Note:</b>
     *  For the <strong>GetItemTransactions</strong>, <strong>GetOrders</strong>, and <strong>GetOrderTransactions</strong> calls, this field is only returned to the seller of the order; this field is not returned for the buyer or third party.
     *  </span>
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
     * This field indicates the type and/or status of a payment hold on the item.
     *  <br> <br>
     *  <span class="tablenote"><b>Note:</b>
     *  For the <strong>GetItemTransactions</strong>, <strong>GetOrders</strong>, and <strong>GetOrderTransactions</strong> calls, this field is only returned to the seller of the order; this field is not returned for the buyer or third party.
     *  </span>
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
     * Gets as integratedMerchantCreditCardEnabled
     *
     * This field is no longer applicable as eBay sellers can no longer use iMCC gateway accounts to handle buyer payments.
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
     * This field is no longer applicable as eBay sellers can no longer use iMCC gateway accounts to handle buyer payments.
     *
     * @param bool $integratedMerchantCreditCardEnabled
     * @return self
     */
    public function setIntegratedMerchantCreditCardEnabled($integratedMerchantCreditCardEnabled)
    {
        $this->integratedMerchantCreditCardEnabled = $integratedMerchantCreditCardEnabled;
        return $this;
    }

    /**
     * Gets as eBayPaymentMismatchDetails
     *
     * This container is no longer used.
     *
     * @return \Nogrod\eBaySDK\MerchantData\EBayPaymentMismatchDetailsType
     */
    public function getEBayPaymentMismatchDetails()
    {
        return $this->eBayPaymentMismatchDetails;
    }

    /**
     * Sets a new eBayPaymentMismatchDetails
     *
     * This container is no longer used.
     *
     * @param \Nogrod\eBaySDK\MerchantData\EBayPaymentMismatchDetailsType $eBayPaymentMismatchDetails
     * @return self
     */
    public function setEBayPaymentMismatchDetails(\Nogrod\eBaySDK\MerchantData\EBayPaymentMismatchDetailsType $eBayPaymentMismatchDetails)
    {
        $this->eBayPaymentMismatchDetails = $eBayPaymentMismatchDetails;
        return $this;
    }

    /**
     * Gets as inquiryStatus
     *
     * This field gives the status of a buyer's Item Not Received (INR) Inquiry. This field is only returned if the buyer has created an INR Inquiry through the site or through the Post-Order API.
     *
     * @return string
     */
    public function getInquiryStatus()
    {
        return $this->inquiryStatus;
    }

    /**
     * Sets a new inquiryStatus
     *
     * This field gives the status of a buyer's Item Not Received (INR) Inquiry. This field is only returned if the buyer has created an INR Inquiry through the site or through the Post-Order API.
     *
     * @param string $inquiryStatus
     * @return self
     */
    public function setInquiryStatus($inquiryStatus)
    {
        $this->inquiryStatus = $inquiryStatus;
        return $this;
    }

    /**
     * Gets as returnStatus
     *
     * This field gives the status of a buyer's return request. This field is only returned if the buyer has initiated a return request, or has escalated an existing return request into a return case.
     *
     * @return string
     */
    public function getReturnStatus()
    {
        return $this->returnStatus;
    }

    /**
     * Sets a new returnStatus
     *
     * This field gives the status of a buyer's return request. This field is only returned if the buyer has initiated a return request, or has escalated an existing return request into a return case.
     *
     * @param string $returnStatus
     * @return self
     */
    public function setReturnStatus($returnStatus)
    {
        $this->returnStatus = $returnStatus;
        return $this;
    }

    /**
     * Gets as paymentInstrument
     *
     * The enumeration value in this field indicates which payment method was used by the German buyer who was offered the 'Pay Upon Invoice' option. This field will only be returned if a German buyer was offered the 'Pay Upon Invoice' option. Otherwise, the buyer's selected payment method is returned in the <b>PaymentMethodUsed</b> field by the <b>GetItemTransactions</b> call.
     *
     * @return string
     */
    public function getPaymentInstrument()
    {
        return $this->paymentInstrument;
    }

    /**
     * Sets a new paymentInstrument
     *
     * The enumeration value in this field indicates which payment method was used by the German buyer who was offered the 'Pay Upon Invoice' option. This field will only be returned if a German buyer was offered the 'Pay Upon Invoice' option. Otherwise, the buyer's selected payment method is returned in the <b>PaymentMethodUsed</b> field by the <b>GetItemTransactions</b> call.
     *
     * @param string $paymentInstrument
     * @return self
     */
    public function setPaymentInstrument($paymentInstrument)
    {
        $this->paymentInstrument = $paymentInstrument;
        return $this;
    }

    /**
     * Gets as digitalStatus
     *
     * This enumeration value indicates the current state of a purchased digital gift card. The normal flow is for the buyer (or other recipient of the gift card) to download the gift card from the delivered email after purchase, and then to activate the card for use. This field is only applicable and returned for digital gift card order line items.
     *
     * @return string
     */
    public function getDigitalStatus()
    {
        return $this->digitalStatus;
    }

    /**
     * Sets a new digitalStatus
     *
     * This enumeration value indicates the current state of a purchased digital gift card. The normal flow is for the buyer (or other recipient of the gift card) to download the gift card from the delivered email after purchase, and then to activate the card for use. This field is only applicable and returned for digital gift card order line items.
     *
     * @param string $digitalStatus
     * @return self
     */
    public function setDigitalStatus($digitalStatus)
    {
        $this->digitalStatus = $digitalStatus;
        return $this;
    }

    /**
     * Gets as cancelStatus
     *
     * The current status for the order cancellation request if it exists. This field is only returned if a cancellation request has been made on an order, or if the order is currently going through the cancellation process, or if the order has already been cancelled.
     *
     * @return string
     */
    public function getCancelStatus()
    {
        return $this->cancelStatus;
    }

    /**
     * Sets a new cancelStatus
     *
     * The current status for the order cancellation request if it exists. This field is only returned if a cancellation request has been made on an order, or if the order is currently going through the cancellation process, or if the order has already been cancelled.
     *
     * @param string $cancelStatus
     * @return self
     */
    public function setCancelStatus($cancelStatus)
    {
        $this->cancelStatus = $cancelStatus;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getEBayPaymentStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayPaymentStatus", $value);
        }
        $value = $this->getCheckoutStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CheckoutStatus", $value);
        }
        $value = $this->getLastTimeModified();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LastTimeModified", $value);
        }
        $value = $this->getPaymentMethodUsed();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaymentMethodUsed", $value);
        }
        $value = $this->getCompleteStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CompleteStatus", $value);
        }
        $value = $this->getBuyerSelectedShipping();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyerSelectedShipping", $value);
        }
        $value = $this->getPaymentHoldStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaymentHoldStatus", $value);
        }
        $value = $this->getIntegratedMerchantCreditCardEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IntegratedMerchantCreditCardEnabled", $value);
        }
        $value = $this->getEBayPaymentMismatchDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayPaymentMismatchDetails", $value);
        }
        $value = $this->getInquiryStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InquiryStatus", $value);
        }
        $value = $this->getReturnStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReturnStatus", $value);
        }
        $value = $this->getPaymentInstrument();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaymentInstrument", $value);
        }
        $value = $this->getDigitalStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DigitalStatus", $value);
        }
        $value = $this->getCancelStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CancelStatus", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayPaymentStatus');
        if (null !== $value) {
            $this->setEBayPaymentStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CheckoutStatus');
        if (null !== $value) {
            $this->setCheckoutStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LastTimeModified');
        if (null !== $value) {
            $this->setLastTimeModified(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentMethodUsed');
        if (null !== $value) {
            $this->setPaymentMethodUsed($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CompleteStatus');
        if (null !== $value) {
            $this->setCompleteStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyerSelectedShipping');
        if (null !== $value) {
            $this->setBuyerSelectedShipping($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentHoldStatus');
        if (null !== $value) {
            $this->setPaymentHoldStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IntegratedMerchantCreditCardEnabled');
        if (null !== $value) {
            $this->setIntegratedMerchantCreditCardEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayPaymentMismatchDetails');
        if (null !== $value) {
            $this->setEBayPaymentMismatchDetails(\Nogrod\eBaySDK\MerchantData\EBayPaymentMismatchDetailsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InquiryStatus');
        if (null !== $value) {
            $this->setInquiryStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReturnStatus');
        if (null !== $value) {
            $this->setReturnStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentInstrument');
        if (null !== $value) {
            $this->setPaymentInstrument($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DigitalStatus');
        if (null !== $value) {
            $this->setDigitalStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CancelStatus');
        if (null !== $value) {
            $this->setCancelStatus($value);
        }
    }
}
