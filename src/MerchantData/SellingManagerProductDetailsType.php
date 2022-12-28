<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellingManagerProductDetailsType
 *
 * Returned if the user is a Selling Manager user. Defines product information for Selling Manager users.
 * XSD Type: SellingManagerProductDetailsType
 */
class SellingManagerProductDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The name of a Selling Manager product.
     *
     * @var string $productName
     */
    private $productName = null;

    /**
     * Gets as productName
     *
     * The name of a Selling Manager product.
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Sets a new productName
     *
     * The name of a Selling Manager product.
     *
     * @param string $productName
     * @return self
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getProductName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductName", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductName');
        if (null !== $value) {
            $this->setProductName($value);
        }
    }
}
