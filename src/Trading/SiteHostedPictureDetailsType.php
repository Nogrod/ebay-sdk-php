<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SiteHostedPictureDetailsType
 *
 * Type defining the <b>SiteHostedPictureDetails</b> container that is returned
 *  in an <b>UploadSiteHostedPictures</b> call.
 * XSD Type: SiteHostedPictureDetailsType
 */
class SiteHostedPictureDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The seller-defined name for the picture. This field is only returned if a <b>PictureName</b> value was specified in the request. A name for a picture can make it easier to track than an arbitrary, eBay-assigned URL.
     *
     * @var string $pictureName
     */
    private $pictureName = null;

    /**
     * This enumeration value indicates the size of the generated picture. This value may differ from the one specified in the request (e.g. if a Supersize image cannot be generated).
     *
     * @var string $pictureSet
     */
    private $pictureSet = null;

    /**
     * This enumeration value indicates the image format of the generated image, such as JPG, GIF, or PNG.
     *
     * @var string $pictureFormat
     */
    private $pictureFormat = null;

    /**
     * This is the full URL for the uploaded picture on the EPS server. This value should be stored by the seller, as this URL will be needed when create, revise, or relist an item and add this image to the listing. This URL will also be needed for unpublished pictures whose expiration date must be extended through an <b>ExtendSiteHostedPictures</b> call.
     *
     * @var string $fullURL
     */
    private $fullURL = null;

    /**
     * This is the truncated version of the full URL.
     *
     * @var string $baseURL
     */
    private $baseURL = null;

    /**
     * The URL and size information for each generated image.
     *
     * @var \Nogrod\eBaySDK\Trading\PictureSetMemberType[] $pictureSetMember
     */
    private $pictureSetMember = [

    ];

    /**
     * The URL of the external Web site hosting the uploaded photo. This field is returned if an <b>ExternalPictureURL</b> is provided in the call request.
     *  <br>
     *
     * @var string $externalPictureURL
     */
    private $externalPictureURL = null;

    /**
     * This timestamp indicates when the picture must be uploaded with an eBay listing before it is purged from the EPS server.
     *  <br>
     *  <br>
     *  By default, unpublished pictures (not associated with an active eBay listing) are kept on the EPS server for five days, but a seller can use the <b>ExtensionInDays</b> field in the request to make the expiration date further into the future (a maximum of 30 days). The seller can also use the <b>ExtendSiteHostedPictures</b> to extend the expiration date of the picture.
     *
     * @var \DateTime $useByDate
     */
    private $useByDate = null;

    /**
     * Gets as pictureName
     *
     * The seller-defined name for the picture. This field is only returned if a <b>PictureName</b> value was specified in the request. A name for a picture can make it easier to track than an arbitrary, eBay-assigned URL.
     *
     * @return string
     */
    public function getPictureName()
    {
        return $this->pictureName;
    }

    /**
     * Sets a new pictureName
     *
     * The seller-defined name for the picture. This field is only returned if a <b>PictureName</b> value was specified in the request. A name for a picture can make it easier to track than an arbitrary, eBay-assigned URL.
     *
     * @param string $pictureName
     * @return self
     */
    public function setPictureName($pictureName)
    {
        $this->pictureName = $pictureName;
        return $this;
    }

    /**
     * Gets as pictureSet
     *
     * This enumeration value indicates the size of the generated picture. This value may differ from the one specified in the request (e.g. if a Supersize image cannot be generated).
     *
     * @return string
     */
    public function getPictureSet()
    {
        return $this->pictureSet;
    }

    /**
     * Sets a new pictureSet
     *
     * This enumeration value indicates the size of the generated picture. This value may differ from the one specified in the request (e.g. if a Supersize image cannot be generated).
     *
     * @param string $pictureSet
     * @return self
     */
    public function setPictureSet($pictureSet)
    {
        $this->pictureSet = $pictureSet;
        return $this;
    }

    /**
     * Gets as pictureFormat
     *
     * This enumeration value indicates the image format of the generated image, such as JPG, GIF, or PNG.
     *
     * @return string
     */
    public function getPictureFormat()
    {
        return $this->pictureFormat;
    }

    /**
     * Sets a new pictureFormat
     *
     * This enumeration value indicates the image format of the generated image, such as JPG, GIF, or PNG.
     *
     * @param string $pictureFormat
     * @return self
     */
    public function setPictureFormat($pictureFormat)
    {
        $this->pictureFormat = $pictureFormat;
        return $this;
    }

    /**
     * Gets as fullURL
     *
     * This is the full URL for the uploaded picture on the EPS server. This value should be stored by the seller, as this URL will be needed when create, revise, or relist an item and add this image to the listing. This URL will also be needed for unpublished pictures whose expiration date must be extended through an <b>ExtendSiteHostedPictures</b> call.
     *
     * @return string
     */
    public function getFullURL()
    {
        return $this->fullURL;
    }

    /**
     * Sets a new fullURL
     *
     * This is the full URL for the uploaded picture on the EPS server. This value should be stored by the seller, as this URL will be needed when create, revise, or relist an item and add this image to the listing. This URL will also be needed for unpublished pictures whose expiration date must be extended through an <b>ExtendSiteHostedPictures</b> call.
     *
     * @param string $fullURL
     * @return self
     */
    public function setFullURL($fullURL)
    {
        $this->fullURL = $fullURL;
        return $this;
    }

    /**
     * Gets as baseURL
     *
     * This is the truncated version of the full URL.
     *
     * @return string
     */
    public function getBaseURL()
    {
        return $this->baseURL;
    }

    /**
     * Sets a new baseURL
     *
     * This is the truncated version of the full URL.
     *
     * @param string $baseURL
     * @return self
     */
    public function setBaseURL($baseURL)
    {
        $this->baseURL = $baseURL;
        return $this;
    }

    /**
     * Adds as pictureSetMember
     *
     * The URL and size information for each generated image.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\PictureSetMemberType $pictureSetMember
     */
    public function addToPictureSetMember(\Nogrod\eBaySDK\Trading\PictureSetMemberType $pictureSetMember)
    {
        $this->pictureSetMember[] = $pictureSetMember;
        return $this;
    }

    /**
     * isset pictureSetMember
     *
     * The URL and size information for each generated image.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPictureSetMember($index)
    {
        return isset($this->pictureSetMember[$index]);
    }

    /**
     * unset pictureSetMember
     *
     * The URL and size information for each generated image.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPictureSetMember($index)
    {
        unset($this->pictureSetMember[$index]);
    }

    /**
     * Gets as pictureSetMember
     *
     * The URL and size information for each generated image.
     *
     * @return \Nogrod\eBaySDK\Trading\PictureSetMemberType[]
     */
    public function getPictureSetMember()
    {
        return $this->pictureSetMember;
    }

    /**
     * Sets a new pictureSetMember
     *
     * The URL and size information for each generated image.
     *
     * @param \Nogrod\eBaySDK\Trading\PictureSetMemberType[] $pictureSetMember
     * @return self
     */
    public function setPictureSetMember(array $pictureSetMember)
    {
        $this->pictureSetMember = $pictureSetMember;
        return $this;
    }

    /**
     * Gets as externalPictureURL
     *
     * The URL of the external Web site hosting the uploaded photo. This field is returned if an <b>ExternalPictureURL</b> is provided in the call request.
     *  <br>
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
     * The URL of the external Web site hosting the uploaded photo. This field is returned if an <b>ExternalPictureURL</b> is provided in the call request.
     *  <br>
     *
     * @param string $externalPictureURL
     * @return self
     */
    public function setExternalPictureURL($externalPictureURL)
    {
        $this->externalPictureURL = $externalPictureURL;
        return $this;
    }

    /**
     * Gets as useByDate
     *
     * This timestamp indicates when the picture must be uploaded with an eBay listing before it is purged from the EPS server.
     *  <br>
     *  <br>
     *  By default, unpublished pictures (not associated with an active eBay listing) are kept on the EPS server for five days, but a seller can use the <b>ExtensionInDays</b> field in the request to make the expiration date further into the future (a maximum of 30 days). The seller can also use the <b>ExtendSiteHostedPictures</b> to extend the expiration date of the picture.
     *
     * @return \DateTime
     */
    public function getUseByDate()
    {
        return $this->useByDate;
    }

    /**
     * Sets a new useByDate
     *
     * This timestamp indicates when the picture must be uploaded with an eBay listing before it is purged from the EPS server.
     *  <br>
     *  <br>
     *  By default, unpublished pictures (not associated with an active eBay listing) are kept on the EPS server for five days, but a seller can use the <b>ExtensionInDays</b> field in the request to make the expiration date further into the future (a maximum of 30 days). The seller can also use the <b>ExtendSiteHostedPictures</b> to extend the expiration date of the picture.
     *
     * @param \DateTime $useByDate
     * @return self
     */
    public function setUseByDate(\DateTime $useByDate)
    {
        $this->useByDate = $useByDate;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getPictureName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PictureName", $value);
        }
        $value = $this->getPictureSet();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PictureSet", $value);
        }
        $value = $this->getPictureFormat();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PictureFormat", $value);
        }
        $value = $this->getFullURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FullURL", $value);
        }
        $value = $this->getBaseURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BaseURL", $value);
        }
        $value = $this->getPictureSetMember();
        if (null !== $value && !empty($this->getPictureSetMember())) {
            $writer->write(array_map(function ($v) {return ["PictureSetMember" => $v];}, $value));
        }
        $value = $this->getExternalPictureURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExternalPictureURL", $value);
        }
        $value = $this->getUseByDate();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UseByDate", $value);
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
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}PictureName');
        if (null !== $value) {
            $this->setPictureName($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}PictureSet');
        if (null !== $value) {
            $this->setPictureSet($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}PictureFormat');
        if (null !== $value) {
            $this->setPictureFormat($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}FullURL');
        if (null !== $value) {
            $this->setFullURL($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}BaseURL');
        if (null !== $value) {
            $this->setBaseURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PictureSetMember');
        if (null !== $value) {
            $this->setPictureSetMember(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\PictureSetMemberType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExternalPictureURL');
        if (null !== $value) {
            $this->setExternalPictureURL($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}UseByDate');
        if (null !== $value) {
            $this->setUseByDate(new \DateTime($value));
        }
    }
}
