<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ErrorParameterType
 *
 * Contextual data associated with an error.
 * XSD Type: ErrorParameter
 */
class ErrorParameterType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The name of the input parameter returned with the error. Inspecting the parameter (or its input value) will often aid in understanding the cause of the error. Not all error messages contain this value.
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
     * The name of the input parameter returned with the error. Inspecting the parameter (or its input value) will often aid in understanding the cause of the error. Not all error messages contain this value.
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
     * The name of the input parameter returned with the error. Inspecting the parameter (or its input value) will often aid in understanding the cause of the error. Not all error messages contain this value.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "http://www.ebay.com/marketplace/selling/v1/services");
        $value = $this->name;
        if (null !== $value) {
            $writer->writeAttribute('name', (string) $value);
        }
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->__value;
        if (null !== $value) {
            $writer->text((string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorParameterType
    {
        $self = new self(null);
        $self->xmlInitLists();
        $value = Func::readValue($reader, $self);
        if ('' !== $value) {
            $self->value($value);
        }
        return $self;
    }

    protected function xmlInitLists(): void
    {
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        switch ($reader->localName) {
            case 'name':
                $this->name = $reader->value;
                return true;
        }
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        return false;
    }
}
