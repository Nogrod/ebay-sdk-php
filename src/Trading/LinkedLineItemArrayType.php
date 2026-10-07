<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing LinkedLineItemArrayType
 *
 * Contains data that links line item objects from separate orders.
 * XSD Type: LinkedLineItemArrayType
 */
class LinkedLineItemArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This container shows a line item that is related to the corresponding order, but not a part of that order. Details can identify the linked seller and also include delivery times, item information, and order information.
     *
     * @var \Nogrod\eBaySDK\Trading\LinkedLineItemType[] $linkedLineItem
     */
    private $linkedLineItem = [

    ];

    /**
     * Adds as linkedLineItem
     *
     * This container shows a line item that is related to the corresponding order, but not a part of that order. Details can identify the linked seller and also include delivery times, item information, and order information.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\LinkedLineItemType $linkedLineItem
     */
    public function addToLinkedLineItem(\Nogrod\eBaySDK\Trading\LinkedLineItemType $linkedLineItem)
    {
        if (!is_array($this->linkedLineItem)) {
            throw new \LogicException('linkedLineItem is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->linkedLineItem[] = $linkedLineItem;
        return $this;
    }

    /**
     * isset linkedLineItem
     *
     * This container shows a line item that is related to the corresponding order, but not a part of that order. Details can identify the linked seller and also include delivery times, item information, and order information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLinkedLineItem($index)
    {
        return isset($this->linkedLineItem[$index]);
    }

    /**
     * unset linkedLineItem
     *
     * This container shows a line item that is related to the corresponding order, but not a part of that order. Details can identify the linked seller and also include delivery times, item information, and order information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLinkedLineItem($index)
    {
        unset($this->linkedLineItem[$index]);
    }

    /**
     * Gets as linkedLineItem
     *
     * This container shows a line item that is related to the corresponding order, but not a part of that order. Details can identify the linked seller and also include delivery times, item information, and order information.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\LinkedLineItemType>
     */
    public function getLinkedLineItem()
    {
        return $this->linkedLineItem;
    }

    /**
     * Sets a new linkedLineItem
     *
     * This container shows a line item that is related to the corresponding order, but not a part of that order. Details can identify the linked seller and also include delivery times, item information, and order information.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\LinkedLineItemType> $linkedLineItem
     * @return self
     */
    public function setLinkedLineItem(iterable $linkedLineItem)
    {
        $this->linkedLineItem = $linkedLineItem;
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
        $value = $this->linkedLineItem;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'LinkedLineItem', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\LinkedLineItemArrayType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->linkedLineItem = [];
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
                case 'LinkedLineItem':
                    $this->linkedLineItem[] = \Nogrod\eBaySDK\Trading\LinkedLineItemType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
