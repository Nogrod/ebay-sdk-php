<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AttributeSetType
 *
 * This type is deprecated.
 * XSD Type: AttributeSetType
 */
class AttributeSetType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This field is deprecated.
     *
     * @var int $attributeSetID
     */
    private $attributeSetID = null;

    /**
     * This field is deprecated.
     *
     * @var string $attributeSetVersion
     */
    private $attributeSetVersion = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\AttributeType[] $attribute
     */
    private $attribute = [
        
    ];

    /**
     * Gets as attributeSetID
     *
     * This field is deprecated.
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
     * This field is deprecated.
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
     * Gets as attributeSetVersion
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getAttributeSetVersion()
    {
        return $this->attributeSetVersion;
    }

    /**
     * Sets a new attributeSetVersion
     *
     * This field is deprecated.
     *
     * @param string $attributeSetVersion
     * @return self
     */
    public function setAttributeSetVersion($attributeSetVersion)
    {
        $this->attributeSetVersion = $attributeSetVersion;
        return $this;
    }

    /**
     * Adds as attribute
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\AttributeType $attribute
     */
    public function addToAttribute(\Nogrod\eBaySDK\Trading\AttributeType $attribute)
    {
        $this->attribute[] = $attribute;
        return $this;
    }

    /**
     * isset attribute
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAttribute($index)
    {
        return isset($this->attribute[$index]);
    }

    /**
     * unset attribute
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAttribute($index)
    {
        unset($this->attribute[$index]);
    }

    /**
     * Gets as attribute
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\AttributeType[]
     */
    public function getAttribute()
    {
        return $this->attribute;
    }

    /**
     * Sets a new attribute
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\AttributeType[] $attribute
     * @return self
     */
    public function setAttribute(array $attribute)
    {
        $this->attribute = $attribute;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getAttributeSetID();
        if (null !== $value) {
            $writer->writeAttribute("attributeSetID", $value);
        }
        $value = $this->getAttributeSetVersion();
        if (null !== $value) {
            $writer->writeAttribute("attributeSetVersion", $value);
        }
        $value = $this->getAttribute();
        if (null !== $value && !empty($this->getAttribute())) {
            $writer->write(array_map(function ($v) {
                return ["Attribute" => $v];
            }, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Attribute', true);
        if (null !== $value && !empty($value)) {
            $this->setAttribute(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\AttributeType::fromKeyValue($v);
            }, $value));
        }
    }
}
