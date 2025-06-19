<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ExtendedPictureDetailsType
 *
 * This type is used by the <b>ExtendedPictureDetails</b> container, which is no longer returned under any circumstances, including when self-hosted pictures are used for the item. When self-hosted pictures are used by the seller, only the external URL of the gallery image is shown in the <b>PictureDetails.ExternalPictureURL</b> field, and only the equivalent eBay Picture Server (EPS) URLs are shown for the rest of the item's images in separate <b>PictureDetails.PictureURL</b> fields.
 * XSD Type: ExtendedPictureDetailsType
 */
class ExtendedPictureDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The <b>ExtendedPictureDetails</b> container and its child fields are no longer returned under any circumstances, including when self-hosted pictures are used for the item. When self-hosted pictures are used by the seller, only the external URL of the gallery image is shown in the <b>PictureDetails.ExternalPictureURL</b> field, and only the equivalent eBay Picture Server (EPS) URLs are shown for the rest of the item's images in separate <b>PictureDetails.PictureURL</b> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\PictureURLsType[] $pictureURLs
     */
    private $pictureURLs = [

    ];

    /**
     * Adds as pictureURLs
     *
     * The <b>ExtendedPictureDetails</b> container and its child fields are no longer returned under any circumstances, including when self-hosted pictures are used for the item. When self-hosted pictures are used by the seller, only the external URL of the gallery image is shown in the <b>PictureDetails.ExternalPictureURL</b> field, and only the equivalent eBay Picture Server (EPS) URLs are shown for the rest of the item's images in separate <b>PictureDetails.PictureURL</b> fields.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\PictureURLsType $pictureURLs
     */
    public function addToPictureURLs(\Nogrod\eBaySDK\Trading\PictureURLsType $pictureURLs)
    {
        $this->pictureURLs[] = $pictureURLs;
        return $this;
    }

    /**
     * isset pictureURLs
     *
     * The <b>ExtendedPictureDetails</b> container and its child fields are no longer returned under any circumstances, including when self-hosted pictures are used for the item. When self-hosted pictures are used by the seller, only the external URL of the gallery image is shown in the <b>PictureDetails.ExternalPictureURL</b> field, and only the equivalent eBay Picture Server (EPS) URLs are shown for the rest of the item's images in separate <b>PictureDetails.PictureURL</b> fields.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPictureURLs($index)
    {
        return isset($this->pictureURLs[$index]);
    }

    /**
     * unset pictureURLs
     *
     * The <b>ExtendedPictureDetails</b> container and its child fields are no longer returned under any circumstances, including when self-hosted pictures are used for the item. When self-hosted pictures are used by the seller, only the external URL of the gallery image is shown in the <b>PictureDetails.ExternalPictureURL</b> field, and only the equivalent eBay Picture Server (EPS) URLs are shown for the rest of the item's images in separate <b>PictureDetails.PictureURL</b> fields.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPictureURLs($index)
    {
        unset($this->pictureURLs[$index]);
    }

    /**
     * Gets as pictureURLs
     *
     * The <b>ExtendedPictureDetails</b> container and its child fields are no longer returned under any circumstances, including when self-hosted pictures are used for the item. When self-hosted pictures are used by the seller, only the external URL of the gallery image is shown in the <b>PictureDetails.ExternalPictureURL</b> field, and only the equivalent eBay Picture Server (EPS) URLs are shown for the rest of the item's images in separate <b>PictureDetails.PictureURL</b> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\PictureURLsType[]
     */
    public function getPictureURLs()
    {
        return $this->pictureURLs;
    }

    /**
     * Sets a new pictureURLs
     *
     * The <b>ExtendedPictureDetails</b> container and its child fields are no longer returned under any circumstances, including when self-hosted pictures are used for the item. When self-hosted pictures are used by the seller, only the external URL of the gallery image is shown in the <b>PictureDetails.ExternalPictureURL</b> field, and only the equivalent eBay Picture Server (EPS) URLs are shown for the rest of the item's images in separate <b>PictureDetails.PictureURL</b> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\PictureURLsType[] $pictureURLs
     * @return self
     */
    public function setPictureURLs(array $pictureURLs)
    {
        $this->pictureURLs = $pictureURLs;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getPictureURLs();
        if (null !== $value && [] !== $this->getPictureURLs()) {
            $writer->write(array_map(function ($v) {return ["PictureURLs" => $v];}, $value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\ExtendedPictureDetailsType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PictureURLs');
        if (null !== $value) {
            $this->setPictureURLs(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\PictureURLsType::fromKeyValue($v);}, $value));
        }
    }
}
