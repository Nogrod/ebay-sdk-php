<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ProductFinderConstraintType
 *
 * This type is deprecated.
 * XSD Type: ProductFinderConstraintType
 */
class ProductFinderConstraintType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This field is deprecated.
     *
     * @var string $displayName
     */
    private $displayName = null;

    /**
     * This field is deprecated.
     *
     * @var string $displayValue
     */
    private $displayValue = null;

    /**
     * Gets as displayName
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * Sets a new displayName
     *
     * This field is deprecated.
     *
     * @param string $displayName
     * @return self
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
        return $this;
    }

    /**
     * Gets as displayValue
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getDisplayValue()
    {
        return $this->displayValue;
    }

    /**
     * Sets a new displayValue
     *
     * This field is deprecated.
     *
     * @param string $displayValue
     * @return self
     */
    public function setDisplayValue($displayValue)
    {
        $this->displayValue = $displayValue;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getDisplayName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisplayName", $value);
        }
        $value = $this->getDisplayValue();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisplayValue", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisplayName');
        if (null !== $value) {
            $this->setDisplayName($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisplayValue');
        if (null !== $value) {
            $this->setDisplayValue($value);
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
