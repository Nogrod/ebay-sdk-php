<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PaymentsInformationType
 *
 * This type defines the <strong>MonetaryDetails</strong> container, which consists of detailed information about one or more exchanges of funds that occur between the buyer, seller, eBay, and eBay partners during the lifecycle of an order, as well as detailed information about a seller's refund (or store credit) to a buyer who has returned an item.
 * XSD Type: PaymentsInformationType
 */
class PaymentsInformationType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Contains information about how different portions of the funds exchanged for a specified order are allocated among payees. Each allocated portion is represented by a <strong>Payment</strong> container.
     *
     * @var \Nogrod\eBaySDK\Trading\PaymentTransactionType[] $payments
     */
    private $payments = null;

    /**
     * This container consists of an array of one or more <strong>Refund</strong> containers, and each <strong>Refund</strong> container consists of detailed information about a seller's refund (or store credit) to a buyer who has returned an item.
     *  <br/><br/>
     *  This container is also returned if the buyer has returned an In-Store Pickup item to the merchant at a physical store, and the merchant has notified eBay through the <strong>ORDER.RETURNED</strong> notification of the Inbound Notifications API.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> At this time, the In-Store Pickup feature is generally only available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\RefundTransactionInfoType[] $refunds
     */
    private $refunds = null;

    /**
     * Adds as payment
     *
     * Contains information about how different portions of the funds exchanged for a specified order are allocated among payees. Each allocated portion is represented by a <strong>Payment</strong> container.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\PaymentTransactionType $payment
     */
    public function addToPayments(\Nogrod\eBaySDK\Trading\PaymentTransactionType $payment)
    {
        $this->payments[] = $payment;
        return $this;
    }

    /**
     * isset payments
     *
     * Contains information about how different portions of the funds exchanged for a specified order are allocated among payees. Each allocated portion is represented by a <strong>Payment</strong> container.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPayments($index)
    {
        return isset($this->payments[$index]);
    }

    /**
     * unset payments
     *
     * Contains information about how different portions of the funds exchanged for a specified order are allocated among payees. Each allocated portion is represented by a <strong>Payment</strong> container.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPayments($index)
    {
        unset($this->payments[$index]);
    }

    /**
     * Gets as payments
     *
     * Contains information about how different portions of the funds exchanged for a specified order are allocated among payees. Each allocated portion is represented by a <strong>Payment</strong> container.
     *
     * @return \Nogrod\eBaySDK\Trading\PaymentTransactionType[]
     */
    public function getPayments()
    {
        return $this->payments;
    }

    /**
     * Sets a new payments
     *
     * Contains information about how different portions of the funds exchanged for a specified order are allocated among payees. Each allocated portion is represented by a <strong>Payment</strong> container.
     *
     * @param \Nogrod\eBaySDK\Trading\PaymentTransactionType[] $payments
     * @return self
     */
    public function setPayments(array $payments)
    {
        $this->payments = $payments;
        return $this;
    }

    /**
     * Adds as refund
     *
     * This container consists of an array of one or more <strong>Refund</strong> containers, and each <strong>Refund</strong> container consists of detailed information about a seller's refund (or store credit) to a buyer who has returned an item.
     *  <br/><br/>
     *  This container is also returned if the buyer has returned an In-Store Pickup item to the merchant at a physical store, and the merchant has notified eBay through the <strong>ORDER.RETURNED</strong> notification of the Inbound Notifications API.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> At this time, the In-Store Pickup feature is generally only available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\RefundTransactionInfoType $refund
     */
    public function addToRefunds(\Nogrod\eBaySDK\Trading\RefundTransactionInfoType $refund)
    {
        $this->refunds[] = $refund;
        return $this;
    }

    /**
     * isset refunds
     *
     * This container consists of an array of one or more <strong>Refund</strong> containers, and each <strong>Refund</strong> container consists of detailed information about a seller's refund (or store credit) to a buyer who has returned an item.
     *  <br/><br/>
     *  This container is also returned if the buyer has returned an In-Store Pickup item to the merchant at a physical store, and the merchant has notified eBay through the <strong>ORDER.RETURNED</strong> notification of the Inbound Notifications API.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> At this time, the In-Store Pickup feature is generally only available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRefunds($index)
    {
        return isset($this->refunds[$index]);
    }

    /**
     * unset refunds
     *
     * This container consists of an array of one or more <strong>Refund</strong> containers, and each <strong>Refund</strong> container consists of detailed information about a seller's refund (or store credit) to a buyer who has returned an item.
     *  <br/><br/>
     *  This container is also returned if the buyer has returned an In-Store Pickup item to the merchant at a physical store, and the merchant has notified eBay through the <strong>ORDER.RETURNED</strong> notification of the Inbound Notifications API.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> At this time, the In-Store Pickup feature is generally only available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRefunds($index)
    {
        unset($this->refunds[$index]);
    }

    /**
     * Gets as refunds
     *
     * This container consists of an array of one or more <strong>Refund</strong> containers, and each <strong>Refund</strong> container consists of detailed information about a seller's refund (or store credit) to a buyer who has returned an item.
     *  <br/><br/>
     *  This container is also returned if the buyer has returned an In-Store Pickup item to the merchant at a physical store, and the merchant has notified eBay through the <strong>ORDER.RETURNED</strong> notification of the Inbound Notifications API.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> At this time, the In-Store Pickup feature is generally only available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\RefundTransactionInfoType[]
     */
    public function getRefunds()
    {
        return $this->refunds;
    }

    /**
     * Sets a new refunds
     *
     * This container consists of an array of one or more <strong>Refund</strong> containers, and each <strong>Refund</strong> container consists of detailed information about a seller's refund (or store credit) to a buyer who has returned an item.
     *  <br/><br/>
     *  This container is also returned if the buyer has returned an In-Store Pickup item to the merchant at a physical store, and the merchant has notified eBay through the <strong>ORDER.RETURNED</strong> notification of the Inbound Notifications API.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> At this time, the In-Store Pickup feature is generally only available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\RefundTransactionInfoType[] $refunds
     * @return self
     */
    public function setRefunds(array $refunds)
    {
        $this->refunds = $refunds;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getPayments();
        if (null !== $value && !empty($this->getPayments())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Payments", array_map(function ($v) {return ["Payment" => $v];}, $value));
        }
        $value = $this->getRefunds();
        if (null !== $value && !empty($this->getRefunds())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Refunds", array_map(function ($v) {return ["Refund" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Payments');
        if (null !== $value) {
            $this->setPayments(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\PaymentTransactionType::fromKeyValue(Func::mapObject($v, '{urn:ebay:apis:eBLBaseComponents}Payment'));}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Refunds');
        if (null !== $value) {
            $this->setRefunds(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\RefundTransactionInfoType::fromKeyValue(Func::mapObject($v, '{urn:ebay:apis:eBLBaseComponents}Refund'));}, $value));
        }
    }
}
