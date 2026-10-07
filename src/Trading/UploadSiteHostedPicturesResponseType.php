<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing UploadSiteHostedPicturesResponseType
 *
 * Contains information about a picture upload (i.e., information about a picture
 *  upload containing a binary attachment of an image).
 * XSD Type: UploadSiteHostedPicturesResponseType
 */
class UploadSiteHostedPicturesResponseType extends AbstractResponseType
{
    /**
     * Specifies the picture system version that was used to upload pictures.
     *  Only version 2 is valid.
     *
     * @var int $pictureSystemVersion
     */
    private $pictureSystemVersion = null;

    /**
     * The information about an <b>UploadSiteHostedPictures</b> upload, including the URL of the uploaded picture.
     *
     * @var \Nogrod\eBaySDK\Trading\SiteHostedPictureDetailsType $siteHostedPictureDetails
     */
    private $siteHostedPictureDetails = null;

    /**
     * Gets as pictureSystemVersion
     *
     * Specifies the picture system version that was used to upload pictures.
     *  Only version 2 is valid.
     *
     * @return int
     */
    public function getPictureSystemVersion()
    {
        return $this->pictureSystemVersion;
    }

    /**
     * Sets a new pictureSystemVersion
     *
     * Specifies the picture system version that was used to upload pictures.
     *  Only version 2 is valid.
     *
     * @param int $pictureSystemVersion
     * @return self
     */
    public function setPictureSystemVersion($pictureSystemVersion)
    {
        $this->pictureSystemVersion = $pictureSystemVersion;
        return $this;
    }

    /**
     * Gets as siteHostedPictureDetails
     *
     * The information about an <b>UploadSiteHostedPictures</b> upload, including the URL of the uploaded picture.
     *
     * @return \Nogrod\eBaySDK\Trading\SiteHostedPictureDetailsType
     */
    public function getSiteHostedPictureDetails()
    {
        return $this->siteHostedPictureDetails;
    }

    /**
     * Sets a new siteHostedPictureDetails
     *
     * The information about an <b>UploadSiteHostedPictures</b> upload, including the URL of the uploaded picture.
     *
     * @param \Nogrod\eBaySDK\Trading\SiteHostedPictureDetailsType $siteHostedPictureDetails
     * @return self
     */
    public function setSiteHostedPictureDetails(\Nogrod\eBaySDK\Trading\SiteHostedPictureDetailsType $siteHostedPictureDetails)
    {
        $this->siteHostedPictureDetails = $siteHostedPictureDetails;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->pictureSystemVersion;
        if (null !== $value) {
            $writer->writeElementNs(null, 'PictureSystemVersion', null, (string) $value);
        }
        $value = $this->siteHostedPictureDetails;
        if (null !== $value) {
            $writer->startElementNs(null, 'SiteHostedPictureDetails', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\UploadSiteHostedPicturesResponseType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return parent::xmlReadAttribute($reader);
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'PictureSystemVersion':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->pictureSystemVersion = (int) $value;
                    }
                    return true;
                case 'SiteHostedPictureDetails':
                    $this->siteHostedPictureDetails = \Nogrod\eBaySDK\Trading\SiteHostedPictureDetailsType::xmlRead($reader);
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }

    protected function jsonProperties(): array
    {
        $data = parent::jsonProperties();
        $data['PictureSystemVersion'] = $this->pictureSystemVersion;
        $data['SiteHostedPictureDetails'] = $this->siteHostedPictureDetails;
        return $data;
    }
}
