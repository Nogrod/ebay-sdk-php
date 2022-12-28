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
     *  <span class="tablenote"><b>Note: </b> Australia import tax is only applicable to the Australia site.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\PaymentTransactionType $payment
     */
    public function addToPayment(\Nogrod\eBaySDK\Trading\PaymentTransactionType $payment)
    {
        $this->payment[] = $payment;
        return $this;
    }

    /**
     * isset payment
     *
     * This container consists of detailed information about each payment made by the buyer to pay for an order. In many cases, there may be only one payment - the payment made from the buyer to the seller, but in the case of an order going through the Global Shipping Program, one payment goes to the seller for the price of the order, and then an import charge and a portion of the shipping charges may go to eBay Global Shipping Program partner. In the case of an order that is subject to Australia import tax, one payment goes to the seller for the total price of the order, and the import tax goes to eBay for remittance to the Australian government.
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
     *  <span class="tablenote"><b>Note: </b> Australia import tax is only applicable to the Australia site.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\PaymentTransactionType[]
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
     *  <span class="tablenote"><b>Note: </b> Australia import tax is only applicable to the Australia site.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\PaymentTransactionType[] $payment
     * @return self
     */
    public function setPayment(array $payment)
    {
        $this->payment = $payment;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getPayment();
        if (null !== $value && !empty($this->getPayment())) {
            $writer->write(array_map(function ($v) {
                return ["Payment" => $v];
            }, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Payment', true);
        if (null !== $value && !empty($value)) {
            $this->setPayment(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\PaymentTransactionType::fromKeyValue($v);
            }, $value));
        }
    }
}
