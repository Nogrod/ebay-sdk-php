<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CheckoutStatusType
 *
 * Type defining the <b>CheckoutStatus</b> container that is returned in
 *  <b>GetOrders</b> and <b>GetOrderTransactions</b> to indicate
 *  the current checkout status of the order.
 * XSD Type: CheckoutStatusType
 */
class CheckoutStatusType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Indicates the status of the buyer's payment for an order. If the payment was successfuly processed, a value of <code>NoPaymentFailure</code> will be returned.
     *
     * @var string $eBayPaymentStatus
     */
    private $eBayPaymentStatus = null;

    /**
     * Indicates the last time that there was a change in value of the
     *  <b>CheckoutStatus.Status</b> field, such as 'Pending' to 'Complete'.
     *
     * @var \DateTime $lastModifiedTime
     */
    private $lastModifiedTime = null;

    /**
     * The payment method that the buyer selected to pay for the order.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  Sellers no longer have to specify any electronic payment methods at listing time, but this field is still returned. The value returned in this field will generally be <code>CreditCard</code>, unless an eBay gift card was used by the buyer to pay a partial or full balance of the order. If this is the case, the value returned in this field will be <code>CCAccepted</code>. Either of these two values will be returned, but neither accurately reflects the actual payment method that the buyer used. If the order was paid for off of eBay's platform using an 'offline' payment method such as 'CashOnPickup' or 'MOCC' (money order or cashier's check), and the seller marked the order as paid, either of those values may get returned here.
     *  </span>
     *
     * @var string $paymentMethod
     */
    private $paymentMethod = null;

    /**
     * Indicates the status of the order. This value is subject to change based on the status of the checkout flow. Generally speaking, the <b>Status</b> field reads <code>Incomplete</code> when payment has yet to be initiated, <code>Pending</code> when payment has been initiated but is in process, and <code>Complete</code> when the payment process has completed.
     *  <br><br>
     *  <b>Note</b>: If the <b>PaymentMethod</b> is <code>CashOnPickup</code>, the <b>Status</b> value
     *  will read <code>Complete</code> right at checkout, even though the seller may not have been
     *  officially paid yet, and the <b>eBayPaymentStatus</b> field will read <code>NoPaymentFailure</code>.
     *  The <b>Status</b> value will remain as <code>Complete</code> even if the seller changes the checkout status to Pending. However, the
     *  <b>eBayPaymentStatus</b> value in <b>GetOrders</b> will change from <code>NoPaymentFailure</code> to
     *  <code>PaymentInProcess</code>.
     *
     * @var string $status
     */
    private $status = null;

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
     * The enumeration value in this field indicates which payment method was used by the German buyer who was offered the 'Pay Upon Invoice' option. This field will only be returned if a German buyer was offered the 'Pay Upon Invoice' option. Otherwise, the buyer's selected payment method is returned in the <b>PaymentMethod</b> field.
     *
     * @var string $paymentInstrument
     */
    private $paymentInstrument = null;

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
     * Gets as lastModifiedTime
     *
     * Indicates the last time that there was a change in value of the
     *  <b>CheckoutStatus.Status</b> field, such as 'Pending' to 'Complete'.
     *
     * @return \DateTime
     */
    public function getLastModifiedTime()
    {
        return $this->lastModifiedTime;
    }

    /**
     * Sets a new lastModifiedTime
     *
     * Indicates the last time that there was a change in value of the
     *  <b>CheckoutStatus.Status</b> field, such as 'Pending' to 'Complete'.
     *
     * @param \DateTime $lastModifiedTime
     * @return self
     */
    public function setLastModifiedTime(\DateTime $lastModifiedTime)
    {
        $this->lastModifiedTime = $lastModifiedTime;
        return $this;
    }

    /**
     * Gets as paymentMethod
     *
     * The payment method that the buyer selected to pay for the order.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  Sellers no longer have to specify any electronic payment methods at listing time, but this field is still returned. The value returned in this field will generally be <code>CreditCard</code>, unless an eBay gift card was used by the buyer to pay a partial or full balance of the order. If this is the case, the value returned in this field will be <code>CCAccepted</code>. Either of these two values will be returned, but neither accurately reflects the actual payment method that the buyer used. If the order was paid for off of eBay's platform using an 'offline' payment method such as 'CashOnPickup' or 'MOCC' (money order or cashier's check), and the seller marked the order as paid, either of those values may get returned here.
     *  </span>
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * Sets a new paymentMethod
     *
     * The payment method that the buyer selected to pay for the order.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  Sellers no longer have to specify any electronic payment methods at listing time, but this field is still returned. The value returned in this field will generally be <code>CreditCard</code>, unless an eBay gift card was used by the buyer to pay a partial or full balance of the order. If this is the case, the value returned in this field will be <code>CCAccepted</code>. Either of these two values will be returned, but neither accurately reflects the actual payment method that the buyer used. If the order was paid for off of eBay's platform using an 'offline' payment method such as 'CashOnPickup' or 'MOCC' (money order or cashier's check), and the seller marked the order as paid, either of those values may get returned here.
     *  </span>
     *
     * @param string $paymentMethod
     * @return self
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }

    /**
     * Gets as status
     *
     * Indicates the status of the order. This value is subject to change based on the status of the checkout flow. Generally speaking, the <b>Status</b> field reads <code>Incomplete</code> when payment has yet to be initiated, <code>Pending</code> when payment has been initiated but is in process, and <code>Complete</code> when the payment process has completed.
     *  <br><br>
     *  <b>Note</b>: If the <b>PaymentMethod</b> is <code>CashOnPickup</code>, the <b>Status</b> value
     *  will read <code>Complete</code> right at checkout, even though the seller may not have been
     *  officially paid yet, and the <b>eBayPaymentStatus</b> field will read <code>NoPaymentFailure</code>.
     *  The <b>Status</b> value will remain as <code>Complete</code> even if the seller changes the checkout status to Pending. However, the
     *  <b>eBayPaymentStatus</b> value in <b>GetOrders</b> will change from <code>NoPaymentFailure</code> to
     *  <code>PaymentInProcess</code>.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Indicates the status of the order. This value is subject to change based on the status of the checkout flow. Generally speaking, the <b>Status</b> field reads <code>Incomplete</code> when payment has yet to be initiated, <code>Pending</code> when payment has been initiated but is in process, and <code>Complete</code> when the payment process has completed.
     *  <br><br>
     *  <b>Note</b>: If the <b>PaymentMethod</b> is <code>CashOnPickup</code>, the <b>Status</b> value
     *  will read <code>Complete</code> right at checkout, even though the seller may not have been
     *  officially paid yet, and the <b>eBayPaymentStatus</b> field will read <code>NoPaymentFailure</code>.
     *  The <b>Status</b> value will remain as <code>Complete</code> even if the seller changes the checkout status to Pending. However, the
     *  <b>eBayPaymentStatus</b> value in <b>GetOrders</b> will change from <code>NoPaymentFailure</code> to
     *  <code>PaymentInProcess</code>.
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
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
     * Gets as paymentInstrument
     *
     * The enumeration value in this field indicates which payment method was used by the German buyer who was offered the 'Pay Upon Invoice' option. This field will only be returned if a German buyer was offered the 'Pay Upon Invoice' option. Otherwise, the buyer's selected payment method is returned in the <b>PaymentMethod</b> field.
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
     * The enumeration value in this field indicates which payment method was used by the German buyer who was offered the 'Pay Upon Invoice' option. This field will only be returned if a German buyer was offered the 'Pay Upon Invoice' option. Otherwise, the buyer's selected payment method is returned in the <b>PaymentMethod</b> field.
     *
     * @param string $paymentInstrument
     * @return self
     */
    public function setPaymentInstrument($paymentInstrument)
    {
        $this->paymentInstrument = $paymentInstrument;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getEBayPaymentStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayPaymentStatus", $value);
        }
        $value = $this->getLastModifiedTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LastModifiedTime", $value);
        }
        $value = $this->getPaymentMethod();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaymentMethod", $value);
        }
        $value = $this->getStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Status", $value);
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
        $value = $this->getPaymentInstrument();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaymentInstrument", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LastModifiedTime');
        if (null !== $value) {
            $this->setLastModifiedTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentMethod');
        if (null !== $value) {
            $this->setPaymentMethod($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Status');
        if (null !== $value) {
            $this->setStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IntegratedMerchantCreditCardEnabled');
        if (null !== $value) {
            $this->setIntegratedMerchantCreditCardEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayPaymentMismatchDetails');
        if (null !== $value) {
            $this->setEBayPaymentMismatchDetails(\Nogrod\eBaySDK\MerchantData\EBayPaymentMismatchDetailsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentInstrument');
        if (null !== $value) {
            $this->setPaymentInstrument($value);
        }
    }
}
