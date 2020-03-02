<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ExtendedProductFinderIDType
 *
 * This type is deprecated.
 * XSD Type: ExtendedProductFinderIDType
 */
class ExtendedProductFinderIDType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This field is deprecated.
     *
     * @var int $productFinderID
     */
    private $productFinderID = null;

    /**
     * This field is deprecated.
     *
     * @var bool $productFinderBuySide
     */
    private $productFinderBuySide = null;

    /**
     * Gets as productFinderID
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getProductFinderID()
    {
        return $this->productFinderID;
    }

    /**
     * Sets a new productFinderID
     *
     * This field is deprecated.
     *
     * @param int $productFinderID
     * @return self
     */
    public function setProductFinderID($productFinderID)
    {
        $this->productFinderID = $productFinderID;
        return $this;
    }

    /**
     * Gets as productFinderBuySide
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getProductFinderBuySide()
    {
        return $this->productFinderBuySide;
    }

    /**
     * Sets a new productFinderBuySide
     *
     * This field is deprecated.
     *
     * @param bool $productFinderBuySide
     * @return self
     */
    public function setProductFinderBuySide($productFinderBuySide)
    {
        $this->productFinderBuySide = $productFinderBuySide;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getProductFinderID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductFinderID", $value);
        }
        $value = $this->getProductFinderBuySide();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductFinderBuySide", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductFinderID');
        if (null !== $value) {
            $this->setProductFinderID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductFinderBuySide');
        if (null !== $value) {
            $this->setProductFinderBuySide($value);
        }
    }
}
