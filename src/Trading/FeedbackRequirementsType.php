<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing FeedbackRequirementsType
 *
 *
 * XSD Type: FeedbackRequirementsType
 */
class FeedbackRequirementsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * @var bool $__value
     */
    private $__value = null;

    /**
     * This type is deprecated.
     *
     * @var string $minimum
     */
    private $minimum = null;

    /**
     * Construct
     *
     * @param bool $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param bool $value
     * @return bool
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
     * Gets as minimum
     *
     * This type is deprecated.
     *
     * @return string
     */
    public function getMinimum()
    {
        return $this->minimum;
    }

    /**
     * Sets a new minimum
     *
     * This type is deprecated.
     *
     * @param string $minimum
     * @return self
     */
    public function setMinimum($minimum)
    {
        $this->minimum = $minimum;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->value();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        $writer->write($value);
        $value = $this->getMinimum();
        if (null !== $value) {
            $writer->writeAttribute("minimum", $value);
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
