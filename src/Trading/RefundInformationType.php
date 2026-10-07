<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RefundInformationType
 *
 * Type defining the <strong>Refunds</strong> container, which contains an array of zero or more <strong>Refund</strong> objects, each with detailed refund information.
 * XSD Type: RefundInformationType
 */
class RefundInformationType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This container consists of detailed information on an item refund. This container is only returned if the merchant is refunding (or providing a store credit) the buyer. A separate <strong>Refund</strong> container will be returned for each <strong>ORDER.RETURNED</strong> notification that the merchant sends to eBay through the <strong>Inbound Notifications API</strong>.
     *
     * @var \Nogrod\eBaySDK\Trading\RefundTransactionInfoType[] $refund
     */
    private $refund = [

    ];

    /**
     * Adds as refund
     *
     * This container consists of detailed information on an item refund. This container is only returned if the merchant is refunding (or providing a store credit) the buyer. A separate <strong>Refund</strong> container will be returned for each <strong>ORDER.RETURNED</strong> notification that the merchant sends to eBay through the <strong>Inbound Notifications API</strong>.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\RefundTransactionInfoType $refund
     */
    public function addToRefund(\Nogrod\eBaySDK\Trading\RefundTransactionInfoType $refund)
    {
        if (!is_array($this->refund)) {
            throw new \LogicException('refund is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->refund[] = $refund;
        return $this;
    }

    /**
     * isset refund
     *
     * This container consists of detailed information on an item refund. This container is only returned if the merchant is refunding (or providing a store credit) the buyer. A separate <strong>Refund</strong> container will be returned for each <strong>ORDER.RETURNED</strong> notification that the merchant sends to eBay through the <strong>Inbound Notifications API</strong>.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRefund($index)
    {
        return isset($this->refund[$index]);
    }

    /**
     * unset refund
     *
     * This container consists of detailed information on an item refund. This container is only returned if the merchant is refunding (or providing a store credit) the buyer. A separate <strong>Refund</strong> container will be returned for each <strong>ORDER.RETURNED</strong> notification that the merchant sends to eBay through the <strong>Inbound Notifications API</strong>.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRefund($index)
    {
        unset($this->refund[$index]);
    }

    /**
     * Gets as refund
     *
     * This container consists of detailed information on an item refund. This container is only returned if the merchant is refunding (or providing a store credit) the buyer. A separate <strong>Refund</strong> container will be returned for each <strong>ORDER.RETURNED</strong> notification that the merchant sends to eBay through the <strong>Inbound Notifications API</strong>.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\RefundTransactionInfoType>
     */
    public function getRefund()
    {
        return $this->refund;
    }

    /**
     * Sets a new refund
     *
     * This container consists of detailed information on an item refund. This container is only returned if the merchant is refunding (or providing a store credit) the buyer. A separate <strong>Refund</strong> container will be returned for each <strong>ORDER.RETURNED</strong> notification that the merchant sends to eBay through the <strong>Inbound Notifications API</strong>.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\RefundTransactionInfoType> $refund
     * @return self
     */
    public function setRefund(iterable $refund)
    {
        $this->refund = $refund;
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
        $value = $this->refund;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'Refund', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\RefundInformationType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->refund = [];
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
                case 'Refund':
                    $this->refund[] = \Nogrod\eBaySDK\Trading\RefundTransactionInfoType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
