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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getPictureSystemVersion();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PictureSystemVersion", $value);
        }
        $value = $this->getSiteHostedPictureDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SiteHostedPictureDetails", $value);
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
        parent::setKeyValue($keyValue);
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PictureSystemVersion');
        if (null !== $value) {
            $this->setPictureSystemVersion($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SiteHostedPictureDetails');
        if (null !== $value) {
            $this->setSiteHostedPictureDetails(\Nogrod\eBaySDK\Trading\SiteHostedPictureDetailsType::fromKeyValue($value));
        }
    }
}
