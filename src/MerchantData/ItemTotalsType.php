<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ItemTotalsType
 *
 * This type is deprecated.
 * XSD Type: ItemTotalsType
 */
class ItemTotalsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * @var int $totalQuantity
     */
    private $totalQuantity = null;

    /**
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $totalValue
     */
    private $totalValue = null;

    /**
     * Gets as totalQuantity
     *
     * @return int
     */
    public function getTotalQuantity()
    {
        return $this->totalQuantity;
    }

    /**
     * Sets a new totalQuantity
     *
     * @param int $totalQuantity
     * @return self
     */
    public function setTotalQuantity($totalQuantity)
    {
        $this->totalQuantity = $totalQuantity;
        return $this;
    }

    /**
     * Gets as totalValue
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getTotalValue()
    {
        return $this->totalValue;
    }

    /**
     * Sets a new totalValue
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $totalValue
     * @return self
     */
    public function setTotalValue(\Nogrod\eBaySDK\MerchantData\AmountType $totalValue)
    {
        $this->totalValue = $totalValue;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getTotalQuantity();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalQuantity", $value);
        }
        $value = $this->getTotalValue();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalValue", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalQuantity');
        if (null !== $value) {
            $this->setTotalQuantity($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalValue');
        if (null !== $value) {
            $this->setTotalValue(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
    }
}
