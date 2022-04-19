<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MyMessagesMessageIDArrayType
 *
 * Contains a list of up to 10 MessageID values.
 * XSD Type: MyMessagesMessageIDArrayType
 */
class MyMessagesMessageIDArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * An ID that uniquely identifies a message for a given user.
     *
     * @var string[] $messageID
     */
    private $messageID = [

    ];

    /**
     * Adds as messageID
     *
     * An ID that uniquely identifies a message for a given user.
     *
     * @return self
     * @param string $messageID
     */
    public function addToMessageID($messageID)
    {
        $this->messageID[] = $messageID;
        return $this;
    }

    /**
     * isset messageID
     *
     * An ID that uniquely identifies a message for a given user.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMessageID($index)
    {
        return isset($this->messageID[$index]);
    }

    /**
     * unset messageID
     *
     * An ID that uniquely identifies a message for a given user.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMessageID($index)
    {
        unset($this->messageID[$index]);
    }

    /**
     * Gets as messageID
     *
     * An ID that uniquely identifies a message for a given user.
     *
     * @return string[]
     */
    public function getMessageID()
    {
        return $this->messageID;
    }

    /**
     * Sets a new messageID
     *
     * An ID that uniquely identifies a message for a given user.
     *
     * @param string $messageID
     * @return self
     */
    public function setMessageID(array $messageID)
    {
        $this->messageID = $messageID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getMessageID();
        if (null !== $value && !empty($this->getMessageID())) {
            $writer->write(array_map(function ($v) {
                return ["MessageID" => $v];
            }, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MessageID', true);
        if (null !== $value && !empty($value)) {
            $this->setMessageID($value);
        }
    }
}
