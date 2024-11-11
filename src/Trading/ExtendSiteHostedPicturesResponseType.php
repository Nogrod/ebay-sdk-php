<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ExtendSiteHostedPicturesResponseType
 *
 * Returns the URL of an eBay Picture Services image whose expiration date was
 *  extended.
 * XSD Type: ExtendSiteHostedPicturesResponseType
 */
class ExtendSiteHostedPicturesResponseType extends AbstractResponseType
{
    /**
     * The URL of the site-hosted picture whose expiration date was extended through the <b>ExtendSiteHostedPictures</b> call. This field will be returned if the expiration date of the site-hosted picture was successfully extended.
     *
     * @var string[] $pictureURL
     */
    private $pictureURL = [

    ];

    /**
     * Adds as pictureURL
     *
     * The URL of the site-hosted picture whose expiration date was extended through the <b>ExtendSiteHostedPictures</b> call. This field will be returned if the expiration date of the site-hosted picture was successfully extended.
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
     * The URL of the site-hosted picture whose expiration date was extended through the <b>ExtendSiteHostedPictures</b> call. This field will be returned if the expiration date of the site-hosted picture was successfully extended.
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
     * The URL of the site-hosted picture whose expiration date was extended through the <b>ExtendSiteHostedPictures</b> call. This field will be returned if the expiration date of the site-hosted picture was successfully extended.
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
     * The URL of the site-hosted picture whose expiration date was extended through the <b>ExtendSiteHostedPictures</b> call. This field will be returned if the expiration date of the site-hosted picture was successfully extended.
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
     * The URL of the site-hosted picture whose expiration date was extended through the <b>ExtendSiteHostedPictures</b> call. This field will be returned if the expiration date of the site-hosted picture was successfully extended.
     *
     * @param string[] $pictureURL
     * @return self
     */
    public function setPictureURL(array $pictureURL)
    {
        $this->pictureURL = $pictureURL;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getPictureURL();
        if (null !== $value && [] !== $this->getPictureURL()) {
            $writer->write(array_map(function ($v) {return ["PictureURL" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PictureURL');
        if (null !== $value) {
            $this->setPictureURL($value);
        }
    }
}
