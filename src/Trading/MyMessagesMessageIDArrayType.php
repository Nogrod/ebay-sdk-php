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
        if (!is_array($this->messageID)) {
            throw new \LogicException('messageID is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<string>
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
    public function setMessageID(iterable $messageID)
    {
        $this->messageID = $messageID;
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
        $value = $this->messageID;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->writeElementNs(null, 'MessageID', null, (string) $v);
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\MyMessagesMessageIDArrayType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->messageID = [];
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
                case 'MessageID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->messageID[] = $value;
                    }
                    return true;
            }
        }
        return false;
    }
}
