<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing StoreColorType
 *
 * Store color set.
 * XSD Type: StoreColorType
 */
class StoreColorType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Primary color for the Store. Specified in 6-digit Hex format.
     *  For example: F6F6C9
     *
     * @var string $primary
     */
    private $primary = null;

    /**
     * Secondary color for the Store. Specified in 6-digit Hex format.
     *  For example: F6F6C9
     *
     * @var string $secondary
     */
    private $secondary = null;

    /**
     * Accent color for the Store. Specified in 6-digit Hex format.
     *  For example: F6F6C9
     *
     * @var string $accent
     */
    private $accent = null;

    /**
     * Gets as primary
     *
     * Primary color for the Store. Specified in 6-digit Hex format.
     *  For example: F6F6C9
     *
     * @return string
     */
    public function getPrimary()
    {
        return $this->primary;
    }

    /**
     * Sets a new primary
     *
     * Primary color for the Store. Specified in 6-digit Hex format.
     *  For example: F6F6C9
     *
     * @param string $primary
     * @return self
     */
    public function setPrimary($primary)
    {
        $this->primary = $primary;
        return $this;
    }

    /**
     * Gets as secondary
     *
     * Secondary color for the Store. Specified in 6-digit Hex format.
     *  For example: F6F6C9
     *
     * @return string
     */
    public function getSecondary()
    {
        return $this->secondary;
    }

    /**
     * Sets a new secondary
     *
     * Secondary color for the Store. Specified in 6-digit Hex format.
     *  For example: F6F6C9
     *
     * @param string $secondary
     * @return self
     */
    public function setSecondary($secondary)
    {
        $this->secondary = $secondary;
        return $this;
    }

    /**
     * Gets as accent
     *
     * Accent color for the Store. Specified in 6-digit Hex format.
     *  For example: F6F6C9
     *
     * @return string
     */
    public function getAccent()
    {
        return $this->accent;
    }

    /**
     * Sets a new accent
     *
     * Accent color for the Store. Specified in 6-digit Hex format.
     *  For example: F6F6C9
     *
     * @param string $accent
     * @return self
     */
    public function setAccent($accent)
    {
        $this->accent = $accent;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getPrimary();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Primary", $value);
        }
        $value = $this->getSecondary();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Secondary", $value);
        }
        $value = $this->getAccent();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Accent", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Primary');
        if (null !== $value) {
            $this->setPrimary($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Secondary');
        if (null !== $value) {
            $this->setSecondary($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Accent');
        if (null !== $value) {
            $this->setAccent($value);
        }
    }
}
