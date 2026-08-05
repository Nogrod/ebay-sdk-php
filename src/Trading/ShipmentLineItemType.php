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
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getLineItem();
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->write([["LineItem" => $v]]);
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\ShipmentLineItemType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LineItem');
        if (null !== $value) {
            $this->setLineItem(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\LineItemType::fromKeyValue($v);
            }, $value));
        }
    }
}
