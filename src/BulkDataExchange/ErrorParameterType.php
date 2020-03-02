<?php

namespace Nogrod\eBaySDK\BulkDataExchange;

/**
 * Class representing ErrorParameterType
 *
 * Contextual information associated with an error.
 * XSD Type: ErrorParameter
 */
class ErrorParameterType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The name of the parameter in the get of parameter types returned
     *  within the error type.
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
     * The name of the parameter in the get of parameter types returned
     *  within the error type.
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
     * The name of the parameter in the get of parameter types returned
     *  within the error type.
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
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/services");
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
}
