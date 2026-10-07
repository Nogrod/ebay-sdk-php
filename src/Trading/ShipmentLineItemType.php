<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ShipmentLineItemType
 *
 * This type provides information about one or more order line items in a package.
 * XSD Type: ShipmentLineItemType
 */
class ShipmentLineItemType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Contains information about one order line item in a package. The package can contain multiple units of a given order line item, and multiple order line items.
     *
     * @var \Nogrod\eBaySDK\Trading\LineItemType[] $lineItem
     */
    private $lineItem = [

    ];

    /**
     * Adds as lineItem
     *
     * Contains information about one order line item in a package. The package can contain multiple units of a given order line item, and multiple order line items.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\LineItemType $lineItem
     */
    public function addToLineItem(\Nogrod\eBaySDK\Trading\LineItemType $lineItem)
    {
        if (!is_array($this->lineItem)) {
            throw new \LogicException('lineItem is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->lineItem[] = $lineItem;
        return $this;
    }

    /**
     * isset lineItem
     *
     * Contains information about one order line item in a package. The package can contain multiple units of a given order line item, and multiple order line items.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLineItem($index)
    {
        return isset($this->lineItem[$index]);
    }

    /**
     * unset lineItem
     *
     * Contains information about one order line item in a package. The package can contain multiple units of a given order line item, and multiple order line items.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLineItem($index)
    {
        unset($this->lineItem[$index]);
    }

    /**
     * Gets as lineItem
     *
     * Contains information about one order line item in a package. The package can contain multiple units of a given order line item, and multiple order line items.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\LineItemType>
     */
    public function getLineItem()
    {
        return $this->lineItem;
    }

    /**
     * Sets a new lineItem
     *
     * Contains information about one order line item in a package. The package can contain multiple units of a given order line item, and multiple order line items.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\LineItemType> $lineItem
     * @return self
     */
    public function setLineItem(iterable $lineItem)
    {
        $this->lineItem = $lineItem;
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
        $value = $this->lineItem;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'LineItem', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\ShipmentLineItemType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->lineItem = [];
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
                case 'LineItem':
                    $this->lineItem[] = \Nogrod\eBaySDK\Trading\LineItemType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
