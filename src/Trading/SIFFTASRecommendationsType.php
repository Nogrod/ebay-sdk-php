<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SIFFTASRecommendationsType
 *
 * This type is deprecated.
 * XSD Type: SIFFTASRecommendationsType
 */
class SIFFTASRecommendationsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\AttributeSetType[] $attributeSetArray
     */
    private $attributeSetArray = null;

    /**
     * Adds as attributeSet
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\AttributeSetType $attributeSet
     */
    public function addToAttributeSetArray(\Nogrod\eBaySDK\Trading\AttributeSetType $attributeSet)
    {
        $this->attributeSetArray[] = $attributeSet;
        return $this;
    }

    /**
     * isset attributeSetArray
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAttributeSetArray($index)
    {
        return isset($this->attributeSetArray[$index]);
    }

    /**
     * unset attributeSetArray
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAttributeSetArray($index)
    {
        unset($this->attributeSetArray[$index]);
    }

    /**
     * Gets as attributeSetArray
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\AttributeSetType[]
     */
    public function getAttributeSetArray()
    {
        return $this->attributeSetArray;
    }

    /**
     * Sets a new attributeSetArray
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\AttributeSetType[] $attributeSetArray
     * @return self
     */
    public function setAttributeSetArray(array $attributeSetArray)
    {
        $this->attributeSetArray = $attributeSetArray;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getAttributeSetArray();
        if (null !== $value && !empty($this->getAttributeSetArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AttributeSetArray", array_map(function ($v) {return ["AttributeSet" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AttributeSetArray', true);
        if (null !== $value && !empty($value)) {
            $this->setAttributeSetArray(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\AttributeSetType::fromKeyValue($v);}, $value));
        }
    }
}
