<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MemberMessageExchangeType
 *
 * Container for message metadata.
 * XSD Type: MemberMessageExchangeType
 */
class MemberMessageExchangeType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The item about which the question was asked. Returned if the parent container is returned.
     *
     * @var \Nogrod\eBaySDK\Trading\ItemType $item
     */
    private $item = null;

    /**
     * Contains all the information about the question being asked. Returned if the
     *  parent container is returned.
     *
     * @var \Nogrod\eBaySDK\Trading\MemberMessageType $question
     */
    private $question = null;

    /**
     * An answer to the question. Returned if the parent container is returned.
     *  <br/><br/>
     *
     * @var string[] $response
     */
    private $response = [

    ];

    /**
     * Status of the message. Returned if the parent container is returned.
     *
     * @var string $messageStatus
     */
    private $messageStatus = null;

    /**
     * Date the message was created. Returned if the parent container is returned.
     *
     * @var \DateTime $creationDate
     */
    private $creationDate = null;

    /**
     * Date the message was last modified. Returned if the parent container is returned.
     *
     * @var \DateTime $lastModifiedDate
     */
    private $lastModifiedDate = null;

    /**
     * Media details stored as part of the message.
     *
     * @var \Nogrod\eBaySDK\Trading\MessageMediaType[] $messageMedia
     */
    private $messageMedia = [

    ];

    /**
     * Gets as item
     *
     * The item about which the question was asked. Returned if the parent container is returned.
     *
     * @return \Nogrod\eBaySDK\Trading\ItemType
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * The item about which the question was asked. Returned if the parent container is returned.
     *
     * @param \Nogrod\eBaySDK\Trading\ItemType $item
     * @return self
     */
    public function setItem(\Nogrod\eBaySDK\Trading\ItemType $item)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Gets as question
     *
     * Contains all the information about the question being asked. Returned if the
     *  parent container is returned.
     *
     * @return \Nogrod\eBaySDK\Trading\MemberMessageType
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Sets a new question
     *
     * Contains all the information about the question being asked. Returned if the
     *  parent container is returned.
     *
     * @param \Nogrod\eBaySDK\Trading\MemberMessageType $question
     * @return self
     */
    public function setQuestion(\Nogrod\eBaySDK\Trading\MemberMessageType $question)
    {
        $this->question = $question;
        return $this;
    }

    /**
     * Adds as response
     *
     * An answer to the question. Returned if the parent container is returned.
     *  <br/><br/>
     *
     * @return self
     * @param string $response
     */
    public function addToResponse($response)
    {
        if (!is_array($this->response)) {
            throw new \LogicException('response is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->response[] = $response;
        return $this;
    }

    /**
     * isset response
     *
     * An answer to the question. Returned if the parent container is returned.
     *  <br/><br/>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResponse($index)
    {
        return isset($this->response[$index]);
    }

    /**
     * unset response
     *
     * An answer to the question. Returned if the parent container is returned.
     *  <br/><br/>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResponse($index)
    {
        unset($this->response[$index]);
    }

    /**
     * Gets as response
     *
     * An answer to the question. Returned if the parent container is returned.
     *  <br/><br/>
     *
     * @return iterable<string>
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Sets a new response
     *
     * An answer to the question. Returned if the parent container is returned.
     *  <br/><br/>
     *
     * @param iterable<string> $response
     * @return self
     */
    public function setResponse(iterable $response)
    {
        $this->response = $response;
        return $this;
    }

    /**
     * Gets as messageStatus
     *
     * Status of the message. Returned if the parent container is returned.
     *
     * @return string
     */
    public function getMessageStatus()
    {
        return $this->messageStatus;
    }

    /**
     * Sets a new messageStatus
     *
     * Status of the message. Returned if the parent container is returned.
     *
     * @param string $messageStatus
     * @return self
     */
    public function setMessageStatus($messageStatus)
    {
        $this->messageStatus = $messageStatus;
        return $this;
    }

    /**
     * Gets as creationDate
     *
     * Date the message was created. Returned if the parent container is returned.
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Sets a new creationDate
     *
     * Date the message was created. Returned if the parent container is returned.
     *
     * @param \DateTime $creationDate
     * @return self
     */
    public function setCreationDate(\DateTime $creationDate)
    {
        $this->creationDate = $creationDate;
        return $this;
    }

    /**
     * Gets as lastModifiedDate
     *
     * Date the message was last modified. Returned if the parent container is returned.
     *
     * @return \DateTime
     */
    public function getLastModifiedDate()
    {
        return $this->lastModifiedDate;
    }

    /**
     * Sets a new lastModifiedDate
     *
     * Date the message was last modified. Returned if the parent container is returned.
     *
     * @param \DateTime $lastModifiedDate
     * @return self
     */
    public function setLastModifiedDate(\DateTime $lastModifiedDate)
    {
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }

    /**
     * Adds as messageMedia
     *
     * Media details stored as part of the message.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\MessageMediaType $messageMedia
     */
    public function addToMessageMedia(\Nogrod\eBaySDK\Trading\MessageMediaType $messageMedia)
    {
        if (!is_array($this->messageMedia)) {
            throw new \LogicException('messageMedia is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->messageMedia[] = $messageMedia;
        return $this;
    }

    /**
     * isset messageMedia
     *
     * Media details stored as part of the message.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMessageMedia($index)
    {
        return isset($this->messageMedia[$index]);
    }

    /**
     * unset messageMedia
     *
     * Media details stored as part of the message.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMessageMedia($index)
    {
        unset($this->messageMedia[$index]);
    }

    /**
     * Gets as messageMedia
     *
     * Media details stored as part of the message.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\MessageMediaType>
     */
    public function getMessageMedia()
    {
        return $this->messageMedia;
    }

    /**
     * Sets a new messageMedia
     *
     * Media details stored as part of the message.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\MessageMediaType> $messageMedia
     * @return self
     */
    public function setMessageMedia(iterable $messageMedia)
    {
        $this->messageMedia = $messageMedia;
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
        $value = $this->item;
        if (null !== $value) {
            $writer->startElementNs(null, 'Item', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->question;
        if (null !== $value) {
            $writer->startElementNs(null, 'Question', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->response;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->writeElementNs(null, 'Response', null, (string) $v);
            }
        }
        $value = $this->messageStatus;
        if (null !== $value) {
            $writer->writeElementNs(null, 'MessageStatus', null, (string) $value);
        }
        $value = $this->creationDate;
        if (null !== $value) {
            $writer->writeElementNs(null, 'CreationDate', null, Func::formatDateTime($value));
        }
        $value = $this->lastModifiedDate;
        if (null !== $value) {
            $writer->writeElementNs(null, 'LastModifiedDate', null, Func::formatDateTime($value));
        }
        $value = $this->messageMedia;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'MessageMedia', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\MemberMessageExchangeType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->response = [];
        $this->messageMedia = [];
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
                case 'Item':
                    $this->item = \Nogrod\eBaySDK\Trading\ItemType::xmlRead($reader);
                    return true;
                case 'Question':
                    $this->question = \Nogrod\eBaySDK\Trading\MemberMessageType::xmlRead($reader);
                    return true;
                case 'Response':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->response[] = $value;
                    }
                    return true;
                case 'MessageStatus':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->messageStatus = $value;
                    }
                    return true;
                case 'CreationDate':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->creationDate = new \DateTime($value);
                    }
                    return true;
                case 'LastModifiedDate':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->lastModifiedDate = new \DateTime($value);
                    }
                    return true;
                case 'MessageMedia':
                    $this->messageMedia[] = \Nogrod\eBaySDK\Trading\MessageMediaType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
