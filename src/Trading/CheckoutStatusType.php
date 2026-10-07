<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CheckoutStatusType
 *
 * Type defining the <b>CheckoutStatus</b> container that is returned in
 *  <b>GetOrders</b> to indicate the current checkout status of the order.
 * XSD Type: CheckoutStatusType
 */
class CheckoutStatusType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * Indicates the status of the buyer's payment for an order. If the payment was successfully processed, a value of <code>NoPaymentFailure</code> will be returned.
     *
     * @var string $eBayPaymentStatus
     */
    private $eBayPaymentStatus = null;

    /**
     * This timestamp indicates when the order was last modified.
     *
     * @var \DateTime $lastModifiedTime
     */
    private $lastModifiedTime = null;

    /**
     * The payment method that the buyer selected to pay for the order.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, access to buyer payment details for U.S. users will be limited to select developers. All other developers will receive a value of "CustomCode" in place of buyer payment details. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
     *  <br>
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
     * The enumeration value in this field indicates which payment method was used by the German buyer who was offered the 'Pay Upon Invoice' option. This field will only be returned if a German buyer was offered the 'Pay Upon Invoice' option. Otherwise, the buyer's selected payment method is returned in the <b>PaymentMethod</b> field.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, access to buyer payment details for U.S. users will be limited to select developers. All other developers will receive a value of "CustomCode" in place of buyer payment details. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
     *
     * @var string $paymentInstrument
     */
    private $paymentInstrument = null;

    /**
     * Gets as eBayPaymentStatus
     *
     * Indicates the status of the buyer's payment for an order. If the payment was successfully processed, a value of <code>NoPaymentFailure</code> will be returned.
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
     * Indicates the status of the buyer's payment for an order. If the payment was successfully processed, a value of <code>NoPaymentFailure</code> will be returned.
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
     * This timestamp indicates when the order was last modified.
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
     * This timestamp indicates when the order was last modified.
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
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, access to buyer payment details for U.S. users will be limited to select developers. All other developers will receive a value of "CustomCode" in place of buyer payment details. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
     *  <br>
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
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, access to buyer payment details for U.S. users will be limited to select developers. All other developers will receive a value of "CustomCode" in place of buyer payment details. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
     *  <br>
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
     * Gets as paymentInstrument
     *
     * The enumeration value in this field indicates which payment method was used by the German buyer who was offered the 'Pay Upon Invoice' option. This field will only be returned if a German buyer was offered the 'Pay Upon Invoice' option. Otherwise, the buyer's selected payment method is returned in the <b>PaymentMethod</b> field.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, access to buyer payment details for U.S. users will be limited to select developers. All other developers will receive a value of "CustomCode" in place of buyer payment details. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
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
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, access to buyer payment details for U.S. users will be limited to select developers. All other developers will receive a value of "CustomCode" in place of buyer payment details. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->eBayPaymentStatus;
        if (null !== $value) {
            $writer->writeElementNs(null, 'eBayPaymentStatus', null, (string) $value);
        }
        $value = $this->lastModifiedTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'LastModifiedTime', null, Func::formatDateTime($value));
        }
        $value = $this->paymentMethod;
        if (null !== $value) {
            $writer->writeElementNs(null, 'PaymentMethod', null, (string) $value);
        }
        $value = $this->status;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Status', null, (string) $value);
        }
        $value = $this->integratedMerchantCreditCardEnabled;
        if (null !== $value) {
            $writer->writeElementNs(null, 'IntegratedMerchantCreditCardEnabled', null, ($value ? 'true' : 'false'));
        }
        $value = $this->paymentInstrument;
        if (null !== $value) {
            $writer->writeElementNs(null, 'PaymentInstrument', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\CheckoutStatusType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'eBayPaymentStatus':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->eBayPaymentStatus = $value;
                    }
                    return true;
                case 'LastModifiedTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->lastModifiedTime = new \DateTime($value);
                    }
                    return true;
                case 'PaymentMethod':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->paymentMethod = $value;
                    }
                    return true;
                case 'Status':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->status = $value;
                    }
                    return true;
                case 'IntegratedMerchantCreditCardEnabled':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->integratedMerchantCreditCardEnabled = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'PaymentInstrument':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->paymentInstrument = $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['eBayPaymentStatus'] = $this->eBayPaymentStatus;
        $data['LastModifiedTime'] = Func::jsonDate($this->lastModifiedTime);
        $data['PaymentMethod'] = $this->paymentMethod;
        $data['Status'] = $this->status;
        $data['IntegratedMerchantCreditCardEnabled'] = $this->integratedMerchantCreditCardEnabled;
        $data['PaymentInstrument'] = $this->paymentInstrument;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
