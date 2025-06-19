<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MyMessagesExternalMessageIDArrayType
 *
 * Contains a list of up to 10 external message IDs.
 * XSD Type: MyMessagesExternalMessageIDArrayType
 */
class MyMessagesExternalMessageIDArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Currently available on the US site. A message ID that uniquely identifies a message
     *  for a given user. If provided at the time of message creation, this ID can be used
     *  to retrieve messages, and will take precedence over the message ID. A total of 10
     *  message IDs can be specified.
     *
     * @var string[] $externalMessageID
     */
    private $externalMessageID = [

    ];

    /**
     * Adds as externalMessageID
     *
     * Currently available on the US site. A message ID that uniquely identifies a message
     *  for a given user. If provided at the time of message creation, this ID can be used
     *  to retrieve messages, and will take precedence over the message ID. A total of 10
     *  message IDs can be specified.
     *
     * @return self
     * @param string $externalMessageID
     */
    public function addToExternalMessageID($externalMessageID)
    {
        $this->externalMessageID[] = $externalMessageID;
        return $this;
    }

    /**
     * isset externalMessageID
     *
     * Currently available on the US site. A message ID that uniquely identifies a message
     *  for a given user. If provided at the time of message creation, this ID can be used
     *  to retrieve messages, and will take precedence over the message ID. A total of 10
     *  message IDs can be specified.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExternalMessageID($index)
    {
        return isset($this->externalMessageID[$index]);
    }

    /**
     * unset externalMessageID
     *
     * Currently available on the US site. A message ID that uniquely identifies a message
     *  for a given user. If provided at the time of message creation, this ID can be used
     *  to retrieve messages, and will take precedence over the message ID. A total of 10
     *  message IDs can be specified.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExternalMessageID($index)
    {
        unset($this->externalMessageID[$index]);
    }

    /**
     * Gets as externalMessageID
     *
     * Currently available on the US site. A message ID that uniquely identifies a message
     *  for a given user. If provided at the time of message creation, this ID can be used
     *  to retrieve messages, and will take precedence over the message ID. A total of 10
     *  message IDs can be specified.
     *
     * @return string[]
     */
    public function getExternalMessageID()
    {
        return $this->externalMessageID;
    }

    /**
     * Sets a new externalMessageID
     *
     * Currently available on the US site. A message ID that uniquely identifies a message
     *  for a given user. If provided at the time of message creation, this ID can be used
     *  to retrieve messages, and will take precedence over the message ID. A total of 10
     *  message IDs can be specified.
     *
     * @param string $externalMessageID
     * @return self
     */
    public function setExternalMessageID(array $externalMessageID)
    {
        $this->externalMessageID = $externalMessageID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getExternalMessageID();
        if (null !== $value && [] !== $this->getExternalMessageID()) {
            $writer->write(array_map(function ($v) {return ["ExternalMessageID" => $v];}, $value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\MyMessagesExternalMessageIDArrayType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExternalMessageID', true);
        if (null !== $value) {
            $this->setExternalMessageID($value);
        }
    }
}
