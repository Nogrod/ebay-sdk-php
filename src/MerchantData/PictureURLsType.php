<?php

namespace Nogrod\eBaySDK\MerchantData;

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
     * The URL of an eBay Picture Services (EPS) image. This image is created when a seller uploads a self-hosted image using the <b>UploadSiteHostedPictures</b>, <b>AddItem</b> or <b>AddFixedPriceItem</b> call.
     *  <br>
     *
     * @var string $eBayPictureURL
     */
    private $eBayPictureURL = null;

    /**
     * The URL of a seller's self-hosted image(s).
     *  <br>
     *
     * @var string $externalPictureURL
     */
    private $externalPictureURL = null;

    /**
     * Gets as eBayPictureURL
     *
     * The URL of an eBay Picture Services (EPS) image. This image is created when a seller uploads a self-hosted image using the <b>UploadSiteHostedPictures</b>, <b>AddItem</b> or <b>AddFixedPriceItem</b> call.
     *  <br>
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
     * The URL of an eBay Picture Services (EPS) image. This image is created when a seller uploads a self-hosted image using the <b>UploadSiteHostedPictures</b>, <b>AddItem</b> or <b>AddFixedPriceItem</b> call.
     *  <br>
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
     * The URL of a seller's self-hosted image(s).
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
     * The URL of a seller's self-hosted image(s).
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayPictureURL');
        if (null !== $value) {
            $this->setEBayPictureURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExternalPictureURL');
        if (null !== $value) {
            $this->setExternalPictureURL($value);
        }
    }
}
