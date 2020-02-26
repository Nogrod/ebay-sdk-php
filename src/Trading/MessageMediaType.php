<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing MessageMediaType
 *
 * Container for the image file that is to be sent in a message, which lets sellers share photos in messages using the API.
 *  The photo must be uploaded by the seller or buyer to
 *  <a href="http://developer.ebay.com/devzone/xml/docs/reference/ebay/uploadsitehostedpictures.html">EPS (eBay Picture Services)</a>
 *  using a separate API call or the web flow. After the image is on the eBay server, you can
 *  use <b>AddMemberMessage</b> calls to pass the URL of the image in a message. The
 *  uploaded images will be available as part of the email as a thumbnail image.
 *  Clicking on the thumbnail, opens a larger version of the image in a filmstrip.
 *  The image name will be displayed on the title of the filmstrip component.
 *  These uploaded images will also be returned as <b>MessageMediaType</b> arrays in the
 *  <b>GetMemberMessages</b> and <b>GetMyMessages</b> API response. It doesn't matter if an image was uploaded using the web flow or using the API, it can be accessed using either the web flow or the API and web.
 * XSD Type: MessageMediaType
 */
class MessageMediaType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * URL of an image to be included in a message.
     *  The image must be uploaded to
     *  <a href="http://developer.ebay.com/devzone/xml/docs/reference/ebay/uploadsitehostedpictures.html">EPS
     *  (eBay Picture Services)</a>
     *  using a separate API call or the web flow. This URL will be
     *  validated and if it doesn't exist, the request will fail.
     *
     * @var string $mediaURL
     */
    private $mediaURL = null;

    /**
     * The name of the image. This will be displayed on the flimstrip.
     *
     * @var string $mediaName
     */
    private $mediaName = null;

    /**
     * Gets as mediaURL
     *
     * URL of an image to be included in a message.
     *  The image must be uploaded to
     *  <a href="http://developer.ebay.com/devzone/xml/docs/reference/ebay/uploadsitehostedpictures.html">EPS
     *  (eBay Picture Services)</a>
     *  using a separate API call or the web flow. This URL will be
     *  validated and if it doesn't exist, the request will fail.
     *
     * @return string
     */
    public function getMediaURL()
    {
        return $this->mediaURL;
    }

    /**
     * Sets a new mediaURL
     *
     * URL of an image to be included in a message.
     *  The image must be uploaded to
     *  <a href="http://developer.ebay.com/devzone/xml/docs/reference/ebay/uploadsitehostedpictures.html">EPS
     *  (eBay Picture Services)</a>
     *  using a separate API call or the web flow. This URL will be
     *  validated and if it doesn't exist, the request will fail.
     *
     * @param string $mediaURL
     * @return self
     */
    public function setMediaURL($mediaURL)
    {
        $this->mediaURL = $mediaURL;
        return $this;
    }

    /**
     * Gets as mediaName
     *
     * The name of the image. This will be displayed on the flimstrip.
     *
     * @return string
     */
    public function getMediaName()
    {
        return $this->mediaName;
    }

    /**
     * Sets a new mediaName
     *
     * The name of the image. This will be displayed on the flimstrip.
     *
     * @param string $mediaName
     * @return self
     */
    public function setMediaName($mediaName)
    {
        $this->mediaName = $mediaName;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getMediaURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MediaURL", $value);
        }
        $value = $this->getMediaName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MediaName", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MediaURL');
        if (null !== $value) {
            $this->setMediaURL($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MediaName');
        if (null !== $value) {
            $this->setMediaName($value);
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
