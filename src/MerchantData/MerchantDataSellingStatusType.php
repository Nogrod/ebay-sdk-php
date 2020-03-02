<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MerchantDataSellingStatusType
 *
 * Contains details about the current status of a listing. These
 *  values are computed by eBay and cannot be specified at listing time.
 * XSD Type: MerchantDataSellingStatusType
 */
class MerchantDataSellingStatusType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Total number of items sold in the variation (across the
     *  variation's lifetime). To determine the quantity sold
     *  for the order line item, use OrderLineItem.QuantitySold.
     *
     * @var int $quantitySold
     */
    private $quantitySold = null;

    /**
     * Gets as quantitySold
     *
     * Total number of items sold in the variation (across the
     *  variation's lifetime). To determine the quantity sold
     *  for the order line item, use OrderLineItem.QuantitySold.
     *
     * @return int
     */
    public function getQuantitySold()
    {
        return $this->quantitySold;
    }

    /**
     * Sets a new quantitySold
     *
     * Total number of items sold in the variation (across the
     *  variation's lifetime). To determine the quantity sold
     *  for the order line item, use OrderLineItem.QuantitySold.
     *
     * @param int $quantitySold
     * @return self
     */
    public function setQuantitySold($quantitySold)
    {
        $this->quantitySold = $quantitySold;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getQuantitySold();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QuantitySold", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QuantitySold');
        if (null !== $value) {
            $this->setQuantitySold($value);
        }
    }
}
