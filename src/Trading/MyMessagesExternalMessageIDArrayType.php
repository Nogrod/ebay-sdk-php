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
        if (!is_array($this->externalMessageID)) {
            throw new \LogicException('externalMessageID is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<string>
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
    public function setExternalMessageID(iterable $externalMessageID)
    {
        $this->externalMessageID = $externalMessageID;
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
        $value = $this->externalMessageID;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->writeElementNs(null, 'ExternalMessageID', null, (string) $v);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\MyMessagesExternalMessageIDArrayType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->externalMessageID = [];
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
                case 'ExternalMessageID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->externalMessageID[] = $value;
                    }
                    return true;
            }
        }
        return false;
    }
}
