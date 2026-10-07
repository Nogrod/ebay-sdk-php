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
class SiteHostedPictureDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
     * This is the full URL for the uploaded picture on the EPS server. This value should be stored by the seller, as this URL will be needed when create, revise, or relist an item and add this image to the listing.
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
     *  By default, unpublished pictures (not associated with an active eBay listing) are kept on the EPS server for thirty days.
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
     * This is the full URL for the uploaded picture on the EPS server. This value should be stored by the seller, as this URL will be needed when create, revise, or relist an item and add this image to the listing.
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
     * This is the full URL for the uploaded picture on the EPS server. This value should be stored by the seller, as this URL will be needed when create, revise, or relist an item and add this image to the listing.
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
        if (!is_array($this->pictureSetMember)) {
            throw new \LogicException('pictureSetMember is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\PictureSetMemberType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\PictureSetMemberType> $pictureSetMember
     * @return self
     */
    public function setPictureSetMember(iterable $pictureSetMember)
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
     *  By default, unpublished pictures (not associated with an active eBay listing) are kept on the EPS server for thirty days.
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
     *  By default, unpublished pictures (not associated with an active eBay listing) are kept on the EPS server for thirty days.
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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->pictureName;
        if (null !== $value) {
            $writer->writeElementNs(null, 'PictureName', null, (string) $value);
        }
        $value = $this->pictureSet;
        if (null !== $value) {
            $writer->writeElementNs(null, 'PictureSet', null, (string) $value);
        }
        $value = $this->pictureFormat;
        if (null !== $value) {
            $writer->writeElementNs(null, 'PictureFormat', null, (string) $value);
        }
        $value = $this->fullURL;
        if (null !== $value) {
            $writer->writeElementNs(null, 'FullURL', null, (string) $value);
        }
        $value = $this->baseURL;
        if (null !== $value) {
            $writer->writeElementNs(null, 'BaseURL', null, (string) $value);
        }
        $value = $this->pictureSetMember;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'PictureSetMember', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
        $value = $this->externalPictureURL;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ExternalPictureURL', null, (string) $value);
        }
        $value = $this->useByDate;
        if (null !== $value) {
            $writer->writeElementNs(null, 'UseByDate', null, Func::formatDateTime($value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\SiteHostedPictureDetailsType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->pictureSetMember = [];
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
                case 'PictureName':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->pictureName = $value;
                    }
                    return true;
                case 'PictureSet':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->pictureSet = $value;
                    }
                    return true;
                case 'PictureFormat':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->pictureFormat = $value;
                    }
                    return true;
                case 'FullURL':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->fullURL = $value;
                    }
                    return true;
                case 'BaseURL':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->baseURL = $value;
                    }
                    return true;
                case 'PictureSetMember':
                    $this->pictureSetMember[] = \Nogrod\eBaySDK\Trading\PictureSetMemberType::xmlRead($reader);
                    return true;
                case 'ExternalPictureURL':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->externalPictureURL = $value;
                    }
                    return true;
                case 'UseByDate':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->useByDate = new \DateTime($value);
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['PictureName'] = $this->pictureName;
        $data['PictureSet'] = $this->pictureSet;
        $data['PictureFormat'] = $this->pictureFormat;
        $data['FullURL'] = $this->fullURL;
        $data['BaseURL'] = $this->baseURL;
        $data['PictureSetMember'] = Func::jsonList($this->pictureSetMember);
        $data['ExternalPictureURL'] = $this->externalPictureURL;
        $data['UseByDate'] = Func::jsonDate($this->useByDate);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
