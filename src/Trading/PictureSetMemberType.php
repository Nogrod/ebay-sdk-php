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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->memberURL;
        if (null !== $value) {
            $writer->writeElementNs(null, 'MemberURL', null, (string) $value);
        }
        $value = $this->pictureHeight;
        if (null !== $value) {
            $writer->writeElementNs(null, 'PictureHeight', null, (string) $value);
        }
        $value = $this->pictureWidth;
        if (null !== $value) {
            $writer->writeElementNs(null, 'PictureWidth', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\PictureSetMemberType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
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
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'MemberURL':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->memberURL = $value;
                    }
                    return true;
                case 'PictureHeight':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->pictureHeight = (int) $value;
                    }
                    return true;
                case 'PictureWidth':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->pictureWidth = (int) $value;
                    }
                    return true;
            }
        }
        return false;
    }
}
