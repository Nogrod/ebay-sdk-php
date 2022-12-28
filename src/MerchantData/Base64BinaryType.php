<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing Base64BinaryType
 *
 * Base64 is a binary-to-text encoding scheme that represents binary data in an ASCII string format by translating it into a radix-64 representation. The term "Base64" originates from a specific MIME content transfer encoding.
 *  <br/><br/>
 *  <span class="tablenote">
 *  <strong>Note:</strong> This type contains the name or reference ID of the binary attachment, not the attachment data.
 *  </span>
 * XSD Type: Base64BinaryType
 */
class Base64BinaryType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * @var mixed $__value
     */
    private $__value = null;

    /**
     * This optional attribute allows the binary attachment to be named.
     *
     * @var string $contentType
     */
    private $contentType = null;

    /**
     * Construct
     *
     * @param mixed $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param mixed $value
     * @return mixed
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
     * Gets as contentType
     *
     * This optional attribute allows the binary attachment to be named.
     *
     * @return string
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * Sets a new contentType
     *
     * This optional attribute allows the binary attachment to be named.
     *
     * @param string $contentType
     * @return self
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->value();
        $writer->write($value);
        $value = $this->getContentType();
        if (null !== $value) {
            $writer->writeAttribute("contentType", $value);
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
