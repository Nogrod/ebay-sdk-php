<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing TaxIdentifierAttributeType
 *
 * This type is used to display the value of the <b>name</b> attribute of the <b>BuyerTaxIdentifier.Attribute</b> field.
 * XSD Type: TaxIdentifierAttributeType
 */
class TaxIdentifierAttributeType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The only supported value for this attribute is 'IssuingCountry', but in the future, other attributes related to the tax ID may be supported.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as name
     *
     * The only supported value for this attribute is 'IssuingCountry', but in the future, other attributes related to the tax ID may be supported.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The only supported value for this attribute is 'IssuingCountry', but in the future, other attributes related to the tax ID may be supported.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->value();
        $writer->write($value);
        $value = $this->getName();
        if (null !== $value) {
            $writer->writeAttribute("name", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader)
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue)
    {
        $self = new self($keyValue);
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue)
    {
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
