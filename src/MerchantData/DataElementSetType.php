<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DataElementSetType
 *
 * This type is deprecated.
 * XSD Type: DataElementSetType
 */
class DataElementSetType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This attribute is deprecated.
     *
     * @var int $attributeSetID
     */
    private $attributeSetID = null;

    /**
     * This field is deprecated.
     *
     * @var string $dataElement
     */
    private $dataElement = null;

    /**
     * This field is deprecated.
     *
     * @var int $dataElementID
     */
    private $dataElementID = null;

    /**
     * Gets as attributeSetID
     *
     * This attribute is deprecated.
     *
     * @return int
     */
    public function getAttributeSetID()
    {
        return $this->attributeSetID;
    }

    /**
     * Sets a new attributeSetID
     *
     * This attribute is deprecated.
     *
     * @param int $attributeSetID
     * @return self
     */
    public function setAttributeSetID($attributeSetID)
    {
        $this->attributeSetID = $attributeSetID;
        return $this;
    }

    /**
     * Gets as dataElement
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getDataElement()
    {
        return $this->dataElement;
    }

    /**
     * Sets a new dataElement
     *
     * This field is deprecated.
     *
     * @param string $dataElement
     * @return self
     */
    public function setDataElement($dataElement)
    {
        $this->dataElement = $dataElement;
        return $this;
    }

    /**
     * Gets as dataElementID
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getDataElementID()
    {
        return $this->dataElementID;
    }

    /**
     * Sets a new dataElementID
     *
     * This field is deprecated.
     *
     * @param int $dataElementID
     * @return self
     */
    public function setDataElementID($dataElementID)
    {
        $this->dataElementID = $dataElementID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getAttributeSetID();
        if (null !== $value) {
            $writer->writeAttribute("attributeSetID", $value);
        }
        $value = $this->getDataElement();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DataElement", $value);
        }
        $value = $this->getDataElementID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DataElementID", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DataElement');
        if (null !== $value) {
            $this->setDataElement($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DataElementID');
        if (null !== $value) {
            $this->setDataElementID($value);
        }
    }
}
