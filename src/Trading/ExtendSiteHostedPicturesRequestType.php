<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ExtendSiteHostedPicturesRequestType
 *
 * By default, unpublished pictures uploaded to eBay Picture Services (EPS) via the <b>UploadSiteHostedPictures</b> call will be kept on the server for five days before being purged. The <b>ExtendSiteHostedPictures</b> call is used to extend this expiration date by the number of days specified in the call. This restricted call gives approved sellers the ability to extend the default expiration date of pictures uploaded to EPS but not immediately published in an eBay listing.
 * XSD Type: ExtendSiteHostedPicturesRequestType
 */
class ExtendSiteHostedPicturesRequestType extends AbstractRequestType
{
    /**
     * The URL of the image hosted by eBay Picture Services. This URL is returned in the <b>SiteHostedPictureDetails.FullURL</b> field of the <b>UploadSiteHostedPictures</b> response.
     *
     * @var string[] $pictureURL
     */
    private $pictureURL = [

    ];

    /**
     * The number of days by which to extend the expiration date for the
     *  specified image.
     *
     * @var int $extensionInDays
     */
    private $extensionInDays = null;

    /**
     * Adds as pictureURL
     *
     * The URL of the image hosted by eBay Picture Services. This URL is returned in the <b>SiteHostedPictureDetails.FullURL</b> field of the <b>UploadSiteHostedPictures</b> response.
     *
     * @return self
     * @param string $pictureURL
     */
    public function addToPictureURL($pictureURL)
    {
        $this->pictureURL[] = $pictureURL;
        return $this;
    }

    /**
     * isset pictureURL
     *
     * The URL of the image hosted by eBay Picture Services. This URL is returned in the <b>SiteHostedPictureDetails.FullURL</b> field of the <b>UploadSiteHostedPictures</b> response.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPictureURL($index)
    {
        return isset($this->pictureURL[$index]);
    }

    /**
     * unset pictureURL
     *
     * The URL of the image hosted by eBay Picture Services. This URL is returned in the <b>SiteHostedPictureDetails.FullURL</b> field of the <b>UploadSiteHostedPictures</b> response.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPictureURL($index)
    {
        unset($this->pictureURL[$index]);
    }

    /**
     * Gets as pictureURL
     *
     * The URL of the image hosted by eBay Picture Services. This URL is returned in the <b>SiteHostedPictureDetails.FullURL</b> field of the <b>UploadSiteHostedPictures</b> response.
     *
     * @return string[]
     */
    public function getPictureURL()
    {
        return $this->pictureURL;
    }

    /**
     * Sets a new pictureURL
     *
     * The URL of the image hosted by eBay Picture Services. This URL is returned in the <b>SiteHostedPictureDetails.FullURL</b> field of the <b>UploadSiteHostedPictures</b> response.
     *
     * @param string[] $pictureURL
     * @return self
     */
    public function setPictureURL(array $pictureURL)
    {
        $this->pictureURL = $pictureURL;
        return $this;
    }

    /**
     * Gets as extensionInDays
     *
     * The number of days by which to extend the expiration date for the
     *  specified image.
     *
     * @return int
     */
    public function getExtensionInDays()
    {
        return $this->extensionInDays;
    }

    /**
     * Sets a new extensionInDays
     *
     * The number of days by which to extend the expiration date for the
     *  specified image.
     *
     * @param int $extensionInDays
     * @return self
     */
    public function setExtensionInDays($extensionInDays)
    {
        $this->extensionInDays = $extensionInDays;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getPictureURL();
        if (null !== $value && !empty($this->getPictureURL())) {
            $writer->write(array_map(function ($v) {return ["PictureURL" => $v];}, $value));
        }
        $value = $this->getExtensionInDays();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExtensionInDays", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PictureURL', true);
        if (null !== $value && !empty($value)) {
            $this->setPictureURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExtensionInDays');
        if (null !== $value) {
            $this->setExtensionInDays($value);
        }
    }
}
