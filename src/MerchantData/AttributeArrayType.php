<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AttributeArrayType
 *
 * This type is only applicable for Half.com listings, and since the Half.com site was taken down, this type is no longer applicable.
 * XSD Type: AttributeArrayType
 */
class AttributeArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * <b>AttributeArrayType</b> and the <b>Attribute</b> element are only applicable for Half.com listings, and since the Half.com site was taken down, this field is no longer applicable.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AttributeType[] $attribute
     */
    private $attribute = [
        
    ];

    /**
     * Adds as attribute
     *
     * <b>AttributeArrayType</b> and the <b>Attribute</b> element are only applicable for Half.com listings, and since the Half.com site was taken down, this field is no longer applicable.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\AttributeType $attribute
     */
    public function addToAttribute(\Nogrod\eBaySDK\MerchantData\AttributeType $attribute)
    {
        $this->attribute[] = $attribute;
        return $this;
    }

    /**
     * isset attribute
     *
     * <b>AttributeArrayType</b> and the <b>Attribute</b> element are only applicable for Half.com listings, and since the Half.com site was taken down, this field is no longer applicable.
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
     * <b>AttributeArrayType</b> and the <b>Attribute</b> element are only applicable for Half.com listings, and since the Half.com site was taken down, this field is no longer applicable.
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
     * <b>AttributeArrayType</b> and the <b>Attribute</b> element are only applicable for Half.com listings, and since the Half.com site was taken down, this field is no longer applicable.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AttributeType[]
     */
    public function getAttribute()
    {
        return $this->attribute;
    }

    /**
     * Sets a new attribute
     *
     * <b>AttributeArrayType</b> and the <b>Attribute</b> element are only applicable for Half.com listings, and since the Half.com site was taken down, this field is no longer applicable.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AttributeType[] $attribute
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
                return \Nogrod\eBaySDK\MerchantData\AttributeType::fromKeyValue($v);
            }, $value));
        }
    }
}
