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
     * @return \Nogrod\eBaySDK\Trading\LinkedLineItemType[]
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
     * @param \Nogrod\eBaySDK\Trading\LinkedLineItemType[] $linkedLineItem
     * @return self
     */
    public function setLinkedLineItem(array $linkedLineItem)
    {
        $this->linkedLineItem = $linkedLineItem;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getLinkedLineItem();
        if (null !== $value && !empty($this->getLinkedLineItem())) {
            $writer->write(array_map(function ($v) {return ["LinkedLineItem" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LinkedLineItem', true);
        if (null !== $value && !empty($value)) {
            $this->setLinkedLineItem(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\LinkedLineItemType::fromKeyValue($v);}, $value));
        }
    }
}
