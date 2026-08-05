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
        if (!is_array($this->payments)) {
            throw new \LogicException('payments is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\PaymentTransactionType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\PaymentTransactionType> $payments
     * @return self
     */
    public function setPayments(iterable $payments)
    {
        $this->payments = $payments;
        return $this;
    }

    /**
     * Adds as refund
     *
     * This container consists of an array of one or more <strong>Refund</strong> containers, and each <strong>Refund</strong> container consists of detailed information about a seller's refund (or store credit) to a buyer who has returned an item.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\RefundTransactionInfoType $refund
     */
    public function addToRefunds(\Nogrod\eBaySDK\Trading\RefundTransactionInfoType $refund)
    {
        if (!is_array($this->refunds)) {
            throw new \LogicException('refunds is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->refunds[] = $refund;
        return $this;
    }

    /**
     * isset refunds
     *
     * This container consists of an array of one or more <strong>Refund</strong> containers, and each <strong>Refund</strong> container consists of detailed information about a seller's refund (or store credit) to a buyer who has returned an item.
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
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\RefundTransactionInfoType>
     */
    public function getRefunds()
    {
        return $this->refunds;
    }

    /**
     * Sets a new refunds
     *
     * This container consists of an array of one or more <strong>Refund</strong> containers, and each <strong>Refund</strong> container consists of detailed information about a seller's refund (or store credit) to a buyer who has returned an item.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\RefundTransactionInfoType> $refunds
     * @return self
     */
    public function setRefunds(iterable $refunds)
    {
        $this->refunds = $refunds;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getPayments();
        if (null !== $value) {
            $value = is_array($value) ? $value : iterator_to_array($value);
            if ([] !== $value) {
                $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Payments", array_map(function ($v) {
                    return ["Payment" => $v];
                }, $value));
            }
        }
        $value = $this->getRefunds();
        if (null !== $value) {
            $value = is_array($value) ? $value : iterator_to_array($value);
            if ([] !== $value) {
                $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Refunds", array_map(function ($v) {
                    return ["Refund" => $v];
                }, $value));
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\PaymentsInformationType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Payments');
        if (null !== $value) {
            $this->setPayments(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\PaymentTransactionType::fromKeyValue(Func::mapObject($v, '{urn:ebay:apis:eBLBaseComponents}Payment'));
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Refunds');
        if (null !== $value) {
            $this->setRefunds(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\RefundTransactionInfoType::fromKeyValue(Func::mapObject($v, '{urn:ebay:apis:eBLBaseComponents}Refund'));
            }, $value));
        }
    }
}
