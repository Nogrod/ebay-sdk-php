<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MyMessagesResponseDetailsType
 *
 * Details relating to the response to a message.
 * XSD Type: MyMessagesResponseDetailsType
 */
class MyMessagesResponseDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Whether a message can be responded
     *  to. To respond to a message, use the URL
     *  in ResponseURL. You may need to log into the eBay
     *  Web site to complete the response.
     *
     * @var bool $responseEnabled
     */
    private $responseEnabled = null;

    /**
     * A URL that the recipient must visit to respond to a
     *  message. Responding may require logging
     *  into the eBay Web site.
     *
     * @var string $responseURL
     */
    private $responseURL = null;

    /**
     * Gets as responseEnabled
     *
     * Whether a message can be responded
     *  to. To respond to a message, use the URL
     *  in ResponseURL. You may need to log into the eBay
     *  Web site to complete the response.
     *
     * @return bool
     */
    public function getResponseEnabled()
    {
        return $this->responseEnabled;
    }

    /**
     * Sets a new responseEnabled
     *
     * Whether a message can be responded
     *  to. To respond to a message, use the URL
     *  in ResponseURL. You may need to log into the eBay
     *  Web site to complete the response.
     *
     * @param bool $responseEnabled
     * @return self
     */
    public function setResponseEnabled($responseEnabled)
    {
        $this->responseEnabled = $responseEnabled;
        return $this;
    }

    /**
     * Gets as responseURL
     *
     * A URL that the recipient must visit to respond to a
     *  message. Responding may require logging
     *  into the eBay Web site.
     *
     * @return string
     */
    public function getResponseURL()
    {
        return $this->responseURL;
    }

    /**
     * Sets a new responseURL
     *
     * A URL that the recipient must visit to respond to a
     *  message. Responding may require logging
     *  into the eBay Web site.
     *
     * @param string $responseURL
     * @return self
     */
    public function setResponseURL($responseURL)
    {
        $this->responseURL = $responseURL;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getResponseEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ResponseEnabled", $value);
        }
        $value = $this->getResponseURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ResponseURL", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\MyMessagesResponseDetailsType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ResponseEnabled');
        if (null !== $value) {
            $this->setResponseEnabled(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ResponseURL');
        if (null !== $value) {
            $this->setResponseURL($value);
        }
    }
}
