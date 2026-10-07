<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PictureURLsType
 *
 * This container returns the URLs of the seller's self-hosted (hosted outside of eBay) pictures and the URL for the corresponding eBay Picture Services (EPS), that was generated when the picture was uploaded.
 * XSD Type: PictureURLsType
 */
class PictureURLsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->eBayPictureURL;
        if (null !== $value) {
            $writer->writeElementNs(null, 'eBayPictureURL', null, (string) $value);
        }
        $value = $this->externalPictureURL;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ExternalPictureURL', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\PictureURLsType
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
                case 'eBayPictureURL':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->eBayPictureURL = $value;
                    }
                    return true;
                case 'ExternalPictureURL':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->externalPictureURL = $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['eBayPictureURL'] = $this->eBayPictureURL;
        $data['ExternalPictureURL'] = $this->externalPictureURL;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
