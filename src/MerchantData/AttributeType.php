<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AttributeType
 *
 * This type is only applicable for Half.com listings, and since the Half.com site was taken down, this type is no longer applicable.
 * XSD Type: AttributeType
 */
class AttributeType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * <b>AttributeType</b> and all of its elements are only applicable for Half.com listings, and since the Half.com site was taken down, this field is no longer applicable.
     *
     * @var int $attributeID
     */
    private $attributeID = null;

    /**
     * <b>AttributeType</b> and all of its elements are only applicable for Half.com listings, and since the Half.com site was taken down, this field is no longer applicable.
     *
     * @var string $attributeLabel
     */
    private $attributeLabel = null;

    /**
     * <b>AttributeType</b> and all of its elements are only applicable for Half.com listings, and since the Half.com site was taken down, this field is no longer applicable.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ValType[] $value
     */
    private $value = [

    ];

    /**
     * Gets as attributeID
     *
     * <b>AttributeType</b> and all of its elements are only applicable for Half.com listings, and since the Half.com site was taken down, this field is no longer applicable.
     *
     * @return int
     */
    public function getAttributeID()
    {
        return $this->attributeID;
    }

    /**
     * Sets a new attributeID
     *
     * <b>AttributeType</b> and all of its elements are only applicable for Half.com listings, and since the Half.com site was taken down, this field is no longer applicable.
     *
     * @param int $attributeID
     * @return self
     */
    public function setAttributeID($attributeID)
    {
        $this->attributeID = $attributeID;
        return $this;
    }

    /**
     * Gets as attributeLabel
     *
     * <b>AttributeType</b> and all of its elements are only applicable for Half.com listings, and since the Half.com site was taken down, this field is no longer applicable.
     *
     * @return string
     */
    public function getAttributeLabel()
    {
        return $this->attributeLabel;
    }

    /**
     * Sets a new attributeLabel
     *
     * <b>AttributeType</b> and all of its elements are only applicable for Half.com listings, and since the Half.com site was taken down, this field is no longer applicable.
     *
     * @param string $attributeLabel
     * @return self
     */
    public function setAttributeLabel($attributeLabel)
    {
        $this->attributeLabel = $attributeLabel;
        return $this;
    }

    /**
     * Adds as value
     *
     * <b>AttributeType</b> and all of its elements are only applicable for Half.com listings, and since the Half.com site was taken down, this field is no longer applicable.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\ValType $value
     */
    public function addToValue(\Nogrod\eBaySDK\MerchantData\ValType $value)
    {
        $this->value[] = $value;
        return $this;
    }

    /**
     * isset value
     *
     * <b>AttributeType</b> and all of its elements are only applicable for Half.com listings, and since the Half.com site was taken down, this field is no longer applicable.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValue($index)
    {
        return isset($this->value[$index]);
    }

    /**
     * unset value
     *
     * <b>AttributeType</b> and all of its elements are only applicable for Half.com listings, and since the Half.com site was taken down, this field is no longer applicable.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValue($index)
    {
        unset($this->value[$index]);
    }

    /**
     * Gets as value
     *
     * <b>AttributeType</b> and all of its elements are only applicable for Half.com listings, and since the Half.com site was taken down, this field is no longer applicable.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ValType[]
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * <b>AttributeType</b> and all of its elements are only applicable for Half.com listings, and since the Half.com site was taken down, this field is no longer applicable.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ValType[] $value
     * @return self
     */
    public function setValue(array $value)
    {
        $this->value = $value;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getAttributeID();
        if (null !== $value) {
            $writer->writeAttribute("attributeID", $value);
        }
        $value = $this->getAttributeLabel();
        if (null !== $value) {
            $writer->writeAttribute("attributeLabel", $value);
        }
        $value = $this->getValue();
        if (null !== $value && !empty($this->getValue())) {
            $writer->write(array_map(function ($v) {return ["Value" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Value', true);
        if (null !== $value && !empty($value)) {
            $this->setValue(array_map(function ($v) {return \Nogrod\eBaySDK\MerchantData\ValType::fromKeyValue($v);}, $value));
        }
    }
}
