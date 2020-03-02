<?php

namespace Nogrod\eBaySDK\Finding;

/**
 * Class representing GalleryURLType
 *
 * Defines the image URL returned in galleryInfoContainer.
 * XSD Type: GalleryURL
 */
class GalleryURLType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * Relative size (Large, Medium, or Small) of the image thumbnail for the
     *  item.
     *
     * @var string $gallerySize
     */
    private $gallerySize = null;

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
     * Gets as gallerySize
     *
     * Relative size (Large, Medium, or Small) of the image thumbnail for the
     *  item.
     *
     * @return string
     */
    public function getGallerySize()
    {
        return $this->gallerySize;
    }

    /**
     * Sets a new gallerySize
     *
     * Relative size (Large, Medium, or Small) of the image thumbnail for the
     *  item.
     *
     * @param string $gallerySize
     * @return self
     */
    public function setGallerySize($gallerySize)
    {
        $this->gallerySize = $gallerySize;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/search/v1/services");
        $value = $this->value();
        $writer->write($value);
        $value = $this->getGallerySize();
        if (null !== $value) {
            $writer->writeAttribute("gallerySize", $value);
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
