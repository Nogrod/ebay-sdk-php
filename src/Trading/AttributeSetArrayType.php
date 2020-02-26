<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing AttributeSetArrayType
 *
 * This type is deprecated.
 * XSD Type: AttributeSetArrayType
 */
class AttributeSetArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\AttributeSetType[] $attributeSet
     */
    private $attributeSet = [
        
    ];

    /**
     * Adds as attributeSet
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\AttributeSetType $attributeSet
     */
    public function addToAttributeSet(\Nogrod\eBaySDK\Trading\AttributeSetType $attributeSet)
    {
        $this->attributeSet[] = $attributeSet;
        return $this;
    }

    /**
     * isset attributeSet
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAttributeSet($index)
    {
        return isset($this->attributeSet[$index]);
    }

    /**
     * unset attributeSet
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAttributeSet($index)
    {
        unset($this->attributeSet[$index]);
    }

    /**
     * Gets as attributeSet
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\AttributeSetType[]
     */
    public function getAttributeSet()
    {
        return $this->attributeSet;
    }

    /**
     * Sets a new attributeSet
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\AttributeSetType[] $attributeSet
     * @return self
     */
    public function setAttributeSet(array $attributeSet)
    {
        $this->attributeSet = $attributeSet;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getAttributeSet();
        if (null !== $value && !empty($this->getAttributeSet())) {
            $writer->write(array_map(function ($v) {
                return ["AttributeSet" => $v];
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AttributeSet', true);
        if (null !== $value && !empty($value)) {
            $this->setAttributeSet(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\AttributeSetType::fromKeyValue($v);
            }, $value));
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
