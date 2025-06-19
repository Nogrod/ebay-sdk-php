<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PictureURLsType
 *
 * This container returns the URLs of the seller's self-hosted (hosted outside of eBay) pictures and the URL for the corresponding eBay Picture Services (EPS), that was generated when the picture was uploaded.
 * XSD Type: PictureURLsType
 */
class PictureURLsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The <b>ExtendedPictureDetails</b> container and its child fields are no longer returned under any circumstances, including when self-hosted pictures are used for the item. When self-hosted pictures are used by the seller, only the external URL of the gallery image is shown in the <b>PictureDetails.ExternalPictureURL</b> field, and only the equivalent eBay Picture Server (EPS) URLs are shown for the rest of the item's images in separate <b>PictureDetails.PictureURL</b> fields.
     *
     * @var string $eBayPictureURL
     */
    private $eBayPictureURL = null;

    /**
     * The <b>ExtendedPictureDetails</b> container and its child fields are no longer returned under any circumstances, including when self-hosted pictures are used for the item. When self-hosted pictures are used by the seller, only the external URL of the gallery image is shown in the <b>PictureDetails.ExternalPictureURL</b> field, and only the equivalent eBay Picture Server (EPS) URLs are shown for the rest of the item's images in separate <b>PictureDetails.PictureURL</b> fields.
     *
     * @var string $externalPictureURL
     */
    private $externalPictureURL = null;

    /**
     * Gets as eBayPictureURL
     *
     * The <b>ExtendedPictureDetails</b> container and its child fields are no longer returned under any circumstances, including when self-hosted pictures are used for the item. When self-hosted pictures are used by the seller, only the external URL of the gallery image is shown in the <b>PictureDetails.ExternalPictureURL</b> field, and only the equivalent eBay Picture Server (EPS) URLs are shown for the rest of the item's images in separate <b>PictureDetails.PictureURL</b> fields.
     *
     * @return string
     */
    public function getEBayPictureURL()
    {
        return $this->eBayPictureURL;
    }

    /**
     * Sets a new eBayPictureURL
     *
     * The <b>ExtendedPictureDetails</b> container and its child fields are no longer returned under any circumstances, including when self-hosted pictures are used for the item. When self-hosted pictures are used by the seller, only the external URL of the gallery image is shown in the <b>PictureDetails.ExternalPictureURL</b> field, and only the equivalent eBay Picture Server (EPS) URLs are shown for the rest of the item's images in separate <b>PictureDetails.PictureURL</b> fields.
     *
     * @param string $eBayPictureURL
     * @return self
     */
    public function setEBayPictureURL($eBayPictureURL)
    {
        $this->eBayPictureURL = $eBayPictureURL;
        return $this;
    }

    /**
     * Gets as externalPictureURL
     *
     * The <b>ExtendedPictureDetails</b> container and its child fields are no longer returned under any circumstances, including when self-hosted pictures are used for the item. When self-hosted pictures are used by the seller, only the external URL of the gallery image is shown in the <b>PictureDetails.ExternalPictureURL</b> field, and only the equivalent eBay Picture Server (EPS) URLs are shown for the rest of the item's images in separate <b>PictureDetails.PictureURL</b> fields.
     *
     * @return string
     */
    public function getExternalPictureURL()
    {
        return $this->externalPictureURL;
    }

    /**
     * Sets a new externalPictureURL
     *
     * The <b>ExtendedPictureDetails</b> container and its child fields are no longer returned under any circumstances, including when self-hosted pictures are used for the item. When self-hosted pictures are used by the seller, only the external URL of the gallery image is shown in the <b>PictureDetails.ExternalPictureURL</b> field, and only the equivalent eBay Picture Server (EPS) URLs are shown for the rest of the item's images in separate <b>PictureDetails.PictureURL</b> fields.
     *
     * @param string $externalPictureURL
     * @return self
     */
    public function setExternalPictureURL($externalPictureURL)
    {
        $this->externalPictureURL = $externalPictureURL;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getEBayPictureURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayPictureURL", $value);
        }
        $value = $this->getExternalPictureURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExternalPictureURL", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\PictureURLsType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayPictureURL');
        if (null !== $value) {
            $this->setEBayPictureURL($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExternalPictureURL');
        if (null !== $value) {
            $this->setExternalPictureURL($value);
        }
    }
}
