<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

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
     * @var \Nogrod\eBaySDK\MerchantData\AttributeSetType[] $attributeSet
     */
    private $attributeSet = [

    ];

    /**
     * Adds as attributeSet
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\AttributeSetType $attributeSet
     */
    public function addToAttributeSet(\Nogrod\eBaySDK\MerchantData\AttributeSetType $attributeSet)
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
     * @return \Nogrod\eBaySDK\MerchantData\AttributeSetType[]
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
     * @param \Nogrod\eBaySDK\MerchantData\AttributeSetType[] $attributeSet
     * @return self
     */
    public function setAttributeSet(array $attributeSet)
    {
        $this->attributeSet = $attributeSet;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getAttributeSet();
        if (null !== $value && !empty($this->getAttributeSet())) {
            $writer->write(array_map(function ($v) {return ["AttributeSet" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AttributeSet', true);
        if (null !== $value && !empty($value)) {
            $this->setAttributeSet(array_map(function ($v) {return \Nogrod\eBaySDK\MerchantData\AttributeSetType::fromKeyValue($v);}, $value));
        }
    }
}
