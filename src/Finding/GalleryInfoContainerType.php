<?php

namespace Nogrod\eBaySDK\Finding;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GalleryInfoContainerType
 *
 * Container for URLs of thumbnail images for an item.
 * XSD Type: GalleryInfoContainer
 */
class GalleryInfoContainerType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * URL for a single item image thumbnail of a specific size.
     *
     * @var \Nogrod\eBaySDK\Finding\GalleryURLType[] $galleryURL
     */
    private $galleryURL = [

    ];

    /**
     * Adds as galleryURL
     *
     * URL for a single item image thumbnail of a specific size.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Finding\GalleryURLType $galleryURL
     */
    public function addToGalleryURL(\Nogrod\eBaySDK\Finding\GalleryURLType $galleryURL)
    {
        $this->galleryURL[] = $galleryURL;
        return $this;
    }

    /**
     * isset galleryURL
     *
     * URL for a single item image thumbnail of a specific size.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGalleryURL($index)
    {
        return isset($this->galleryURL[$index]);
    }

    /**
     * unset galleryURL
     *
     * URL for a single item image thumbnail of a specific size.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGalleryURL($index)
    {
        unset($this->galleryURL[$index]);
    }

    /**
     * Gets as galleryURL
     *
     * URL for a single item image thumbnail of a specific size.
     *
     * @return \Nogrod\eBaySDK\Finding\GalleryURLType[]
     */
    public function getGalleryURL()
    {
        return $this->galleryURL;
    }

    /**
     * Sets a new galleryURL
     *
     * URL for a single item image thumbnail of a specific size.
     *
     * @param \Nogrod\eBaySDK\Finding\GalleryURLType[] $galleryURL
     * @return self
     */
    public function setGalleryURL(array $galleryURL)
    {
        $this->galleryURL = $galleryURL;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/search/v1/services");
        $value = $this->getGalleryURL();
        if (null !== $value && !empty($this->getGalleryURL())) {
            $writer->write(array_map(function ($v) {
                return ["galleryURL" => $v];
            }, $value));
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}galleryURL', true);
        if (null !== $value && !empty($value)) {
            $this->setGalleryURL(array_map(function ($v) {
                return \Nogrod\eBaySDK\Finding\GalleryURLType::fromKeyValue($v);
            }, $value));
        }
    }
}
