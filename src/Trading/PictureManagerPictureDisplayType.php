<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PictureManagerPictureDisplayType
 *
 * This type is deprecated.
 * XSD Type: PictureManagerPictureDisplayType
 */
class PictureManagerPictureDisplayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var string $displayType
     */
    private $displayType = null;

    /**
     * This field is deprecated.
     *
     * @var string $uRL
     */
    private $uRL = null;

    /**
     * This field is deprecated.
     *
     * @var int $size
     */
    private $size = null;

    /**
     * This field is deprecated.
     *
     * @var int $height
     */
    private $height = null;

    /**
     * This field is deprecated.
     *
     * @var int $width
     */
    private $width = null;

    /**
     * Gets as displayType
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getDisplayType()
    {
        return $this->displayType;
    }

    /**
     * Sets a new displayType
     *
     * This field is deprecated.
     *
     * @param string $displayType
     * @return self
     */
    public function setDisplayType($displayType)
    {
        $this->displayType = $displayType;
        return $this;
    }

    /**
     * Gets as uRL
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Sets a new uRL
     *
     * This field is deprecated.
     *
     * @param string $uRL
     * @return self
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;
        return $this;
    }

    /**
     * Gets as size
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Sets a new size
     *
     * This field is deprecated.
     *
     * @param int $size
     * @return self
     */
    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }

    /**
     * Gets as height
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Sets a new height
     *
     * This field is deprecated.
     *
     * @param int $height
     * @return self
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * Gets as width
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Sets a new width
     *
     * This field is deprecated.
     *
     * @param int $width
     * @return self
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getDisplayType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisplayType", $value);
        }
        $value = $this->getURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}URL", $value);
        }
        $value = $this->getSize();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Size", $value);
        }
        $value = $this->getHeight();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Height", $value);
        }
        $value = $this->getWidth();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Width", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisplayType');
        if (null !== $value) {
            $this->setDisplayType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}URL');
        if (null !== $value) {
            $this->setURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Size');
        if (null !== $value) {
            $this->setSize($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Height');
        if (null !== $value) {
            $this->setHeight($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Width');
        if (null !== $value) {
            $this->setWidth($value);
        }
    }
}
