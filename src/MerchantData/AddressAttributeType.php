<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing AddressAttributeType
 *
 * This type is used to display the value of the <b>type</b> attribute of the <b>AddressAttribute</b> field.
 * XSD Type: AddressAttributeType
 */
class AddressAttributeType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The only supported value for this attribute is <code>ReferenceNumber</code>, but in the future, other address attributes may be supported. The <code>ReferenceNumber</code> is a unique identifier for a 'Click and Collect' order. Click and Collect orders are only available on the eBay UK and eBay Australia sites.
     *
     * @var string $type
     */
    private $type = null;

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
     * Gets as type
     *
     * The only supported value for this attribute is <code>ReferenceNumber</code>, but in the future, other address attributes may be supported. The <code>ReferenceNumber</code> is a unique identifier for a 'Click and Collect' order. Click and Collect orders are only available on the eBay UK and eBay Australia sites.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The only supported value for this attribute is <code>ReferenceNumber</code>, but in the future, other address attributes may be supported. The <code>ReferenceNumber</code> is a unique identifier for a 'Click and Collect' order. Click and Collect orders are only available on the eBay UK and eBay Australia sites.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->value();
        $writer->write($value);
        $value = $this->getType();
        if (null !== $value) {
            $writer->writeAttribute("type", $value);
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
