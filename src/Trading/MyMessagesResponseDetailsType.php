<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MyMessagesResponseDetailsType
 *
 * Details relating to the response to a message.
 * XSD Type: MyMessagesResponseDetailsType
 */
class MyMessagesResponseDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->responseEnabled;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ResponseEnabled', null, ($value ? 'true' : 'false'));
        }
        $value = $this->responseURL;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ResponseURL', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\MyMessagesResponseDetailsType
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
                case 'ResponseEnabled':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->responseEnabled = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'ResponseURL':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->responseURL = $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['ResponseEnabled'] = $this->responseEnabled;
        $data['ResponseURL'] = $this->responseURL;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
