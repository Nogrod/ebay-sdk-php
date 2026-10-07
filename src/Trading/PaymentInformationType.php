<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PaymentInformationType
 *
 * This type contains information about one or more payments made by the buyer to pay for an order.
 * XSD Type: PaymentInformationType
 */
class PaymentInformationType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This container consists of detailed information about each payment made by the buyer to pay for an order. In many cases, there may be only one payment - the payment made from the buyer to the seller, but in the case of an order going through the Global Shipping Program, one payment goes to the seller for the price of the order, and then an import charge and a portion of the shipping charges may go to eBay Global Shipping Program partner. In the case of an order that is subject to Australia import tax, one payment goes to the seller for the total price of the order, and the import tax goes to eBay for remittance to the Australian government.
     *  <br><br>
     *  A <b>Payment</b> container will be returned that shows the <a href="https://www.ebay.co.uk/help/buying/paying-items/buyer-protection-fee?id=5594" target="_blank">Buyer Protection fees</a>, plus the tax applied against that fee. Please note that the additional <b>Payment</b> container will show <code>eBay</code> as the <b>Payee</b> instead of the seller. The <b>FeeOrCreditAmount</b> container will reflect the amount.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> Australia import tax is only applicable to the Australia site.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\PaymentTransactionType[] $payment
     */
    private $payment = [

    ];

    /**
     * Adds as payment
     *
     * This container consists of detailed information about each payment made by the buyer to pay for an order. In many cases, there may be only one payment - the payment made from the buyer to the seller, but in the case of an order going through the Global Shipping Program, one payment goes to the seller for the price of the order, and then an import charge and a portion of the shipping charges may go to eBay Global Shipping Program partner. In the case of an order that is subject to Australia import tax, one payment goes to the seller for the total price of the order, and the import tax goes to eBay for remittance to the Australian government.
     *  <br><br>
     *  A <b>Payment</b> container will be returned that shows the <a href="https://www.ebay.co.uk/help/buying/paying-items/buyer-protection-fee?id=5594" target="_blank">Buyer Protection fees</a>, plus the tax applied against that fee. Please note that the additional <b>Payment</b> container will show <code>eBay</code> as the <b>Payee</b> instead of the seller. The <b>FeeOrCreditAmount</b> container will reflect the amount.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> Australia import tax is only applicable to the Australia site.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\PaymentTransactionType $payment
     */
    public function addToPayment(\Nogrod\eBaySDK\Trading\PaymentTransactionType $payment)
    {
        if (!is_array($this->payment)) {
            throw new \LogicException('payment is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->payment[] = $payment;
        return $this;
    }

    /**
     * isset payment
     *
     * This container consists of detailed information about each payment made by the buyer to pay for an order. In many cases, there may be only one payment - the payment made from the buyer to the seller, but in the case of an order going through the Global Shipping Program, one payment goes to the seller for the price of the order, and then an import charge and a portion of the shipping charges may go to eBay Global Shipping Program partner. In the case of an order that is subject to Australia import tax, one payment goes to the seller for the total price of the order, and the import tax goes to eBay for remittance to the Australian government.
     *  <br><br>
     *  A <b>Payment</b> container will be returned that shows the <a href="https://www.ebay.co.uk/help/buying/paying-items/buyer-protection-fee?id=5594" target="_blank">Buyer Protection fees</a>, plus the tax applied against that fee. Please note that the additional <b>Payment</b> container will show <code>eBay</code> as the <b>Payee</b> instead of the seller. The <b>FeeOrCreditAmount</b> container will reflect the amount.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> Australia import tax is only applicable to the Australia site.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPayment($index)
    {
        return isset($this->payment[$index]);
    }

    /**
     * unset payment
     *
     * This container consists of detailed information about each payment made by the buyer to pay for an order. In many cases, there may be only one payment - the payment made from the buyer to the seller, but in the case of an order going through the Global Shipping Program, one payment goes to the seller for the price of the order, and then an import charge and a portion of the shipping charges may go to eBay Global Shipping Program partner. In the case of an order that is subject to Australia import tax, one payment goes to the seller for the total price of the order, and the import tax goes to eBay for remittance to the Australian government.
     *  <br><br>
     *  A <b>Payment</b> container will be returned that shows the <a href="https://www.ebay.co.uk/help/buying/paying-items/buyer-protection-fee?id=5594" target="_blank">Buyer Protection fees</a>, plus the tax applied against that fee. Please note that the additional <b>Payment</b> container will show <code>eBay</code> as the <b>Payee</b> instead of the seller. The <b>FeeOrCreditAmount</b> container will reflect the amount.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> Australia import tax is only applicable to the Australia site.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPayment($index)
    {
        unset($this->payment[$index]);
    }

    /**
     * Gets as payment
     *
     * This container consists of detailed information about each payment made by the buyer to pay for an order. In many cases, there may be only one payment - the payment made from the buyer to the seller, but in the case of an order going through the Global Shipping Program, one payment goes to the seller for the price of the order, and then an import charge and a portion of the shipping charges may go to eBay Global Shipping Program partner. In the case of an order that is subject to Australia import tax, one payment goes to the seller for the total price of the order, and the import tax goes to eBay for remittance to the Australian government.
     *  <br><br>
     *  A <b>Payment</b> container will be returned that shows the <a href="https://www.ebay.co.uk/help/buying/paying-items/buyer-protection-fee?id=5594" target="_blank">Buyer Protection fees</a>, plus the tax applied against that fee. Please note that the additional <b>Payment</b> container will show <code>eBay</code> as the <b>Payee</b> instead of the seller. The <b>FeeOrCreditAmount</b> container will reflect the amount.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> Australia import tax is only applicable to the Australia site.
     *  </span>
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\PaymentTransactionType>
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Sets a new payment
     *
     * This container consists of detailed information about each payment made by the buyer to pay for an order. In many cases, there may be only one payment - the payment made from the buyer to the seller, but in the case of an order going through the Global Shipping Program, one payment goes to the seller for the price of the order, and then an import charge and a portion of the shipping charges may go to eBay Global Shipping Program partner. In the case of an order that is subject to Australia import tax, one payment goes to the seller for the total price of the order, and the import tax goes to eBay for remittance to the Australian government.
     *  <br><br>
     *  A <b>Payment</b> container will be returned that shows the <a href="https://www.ebay.co.uk/help/buying/paying-items/buyer-protection-fee?id=5594" target="_blank">Buyer Protection fees</a>, plus the tax applied against that fee. Please note that the additional <b>Payment</b> container will show <code>eBay</code> as the <b>Payee</b> instead of the seller. The <b>FeeOrCreditAmount</b> container will reflect the amount.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> Australia import tax is only applicable to the Australia site.
     *  </span>
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\PaymentTransactionType> $payment
     * @return self
     */
    public function setPayment(iterable $payment)
    {
        $this->payment = $payment;
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
        $value = $this->payment;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'Payment', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\PaymentInformationType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->payment = [];
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
                case 'Payment':
                    $this->payment[] = \Nogrod\eBaySDK\Trading\PaymentTransactionType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
