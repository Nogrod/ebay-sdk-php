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
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getRefund();
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->write([["Refund" => $v]]);
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\RefundInformationType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Refund');
        if (null !== $value) {
            $this->setRefund(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\RefundTransactionInfoType::fromKeyValue($v);
            }, $value));
        }
    }
}
