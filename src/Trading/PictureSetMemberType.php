<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PictureSetMemberType
 *
 * URL and size information for each generated and stored picture.
 *  This data is provided for use in application previews of pictures.
 *  This data is used for display control for specific pictures in the generated imageset.
 *  This container is supplied for all generated pictures.
 * XSD Type: PictureSetMemberType
 */
class PictureSetMemberType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * URL for the picture.
     *
     * @var string $memberURL
     */
    private $memberURL = null;

    /**
     * Height of the picture in pixels.
     *
     * @var int $pictureHeight
     */
    private $pictureHeight = null;

    /**
     * Width of the picture in pixels.
     *
     * @var int $pictureWidth
     */
    private $pictureWidth = null;

    /**
     * Gets as memberURL
     *
     * URL for the picture.
     *
     * @return string
     */
    public function getMemberURL()
    {
        return $this->memberURL;
    }

    /**
     * Sets a new memberURL
     *
     * URL for the picture.
     *
     * @param string $memberURL
     * @return self
     */
    public function setMemberURL($memberURL)
    {
        $this->memberURL = $memberURL;
        return $this;
    }

    /**
     * Gets as pictureHeight
     *
     * Height of the picture in pixels.
     *
     * @return int
     */
    public function getPictureHeight()
    {
        return $this->pictureHeight;
    }

    /**
     * Sets a new pictureHeight
     *
     * Height of the picture in pixels.
     *
     * @param int $pictureHeight
     * @return self
     */
    public function setPictureHeight($pictureHeight)
    {
        $this->pictureHeight = $pictureHeight;
        return $this;
    }

    /**
     * Gets as pictureWidth
     *
     * Width of the picture in pixels.
     *
     * @return int
     */
    public function getPictureWidth()
    {
        return $this->pictureWidth;
    }

    /**
     * Sets a new pictureWidth
     *
     * Width of the picture in pixels.
     *
     * @param int $pictureWidth
     * @return self
     */
    public function setPictureWidth($pictureWidth)
    {
        $this->pictureWidth = $pictureWidth;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getMemberURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MemberURL", $value);
        }
        $value = $this->getPictureHeight();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PictureHeight", $value);
        }
        $value = $this->getPictureWidth();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PictureWidth", $value);
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
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}MemberURL');
        if (null !== $value) {
            $this->setMemberURL($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}PictureHeight');
        if (null !== $value) {
            $this->setPictureHeight($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}PictureWidth');
        if (null !== $value) {
            $this->setPictureWidth($value);
        }
    }
}
