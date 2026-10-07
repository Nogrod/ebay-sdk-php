<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PaymentsInformationType
 *
 * This type defines the <strong>MonetaryDetails</strong> container, which consists of detailed information about one or more exchanges of funds that occur between the buyer, seller, eBay, and eBay partners during the lifecycle of an order, as well as detailed information about a seller's refund (or store credit) to a buyer who has returned an item.
 * XSD Type: PaymentsInformationType
 */
class PaymentsInformationType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->payments;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'Payments', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'Payment', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
                $writer->endElement();
            }
        }
        $value = $this->refunds;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'Refunds', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'Refund', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\PaymentsInformationType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->payments = [];
        $this->refunds = [];
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
                case 'Payments':
                    $this->payments = Func::readList($reader, 'Payment', 'urn:ebay:apis:eBLBaseComponents', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\Trading\PaymentTransactionType::xmlRead($reader));
                    return true;
                case 'Refunds':
                    $this->refunds = Func::readList($reader, 'Refund', 'urn:ebay:apis:eBLBaseComponents', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\Trading\RefundTransactionInfoType::xmlRead($reader));
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['Payments'] = Func::jsonList($this->payments);
        $data['Refunds'] = Func::jsonList($this->refunds);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
