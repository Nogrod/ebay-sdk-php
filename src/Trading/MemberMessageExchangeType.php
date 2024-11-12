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
     *  For GetAdFormatLeads, returned if the seller responded to the
     *  lead's question. Contains the body of the seller's response
     *  message.
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
     *  For GetAdFormatLeads, returned if the seller responded to the
     *  lead's question. Contains the body of the seller's response
     *  message.
     *
     * @return self
     * @param string $response
     */
    public function addToResponse($response)
    {
        $this->response[] = $response;
        return $this;
    }

    /**
     * isset response
     *
     * An answer to the question. Returned if the parent container is returned.
     *  <br/><br/>
     *  For GetAdFormatLeads, returned if the seller responded to the
     *  lead's question. Contains the body of the seller's response
     *  message.
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
     *  For GetAdFormatLeads, returned if the seller responded to the
     *  lead's question. Contains the body of the seller's response
     *  message.
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
     *  For GetAdFormatLeads, returned if the seller responded to the
     *  lead's question. Contains the body of the seller's response
     *  message.
     *
     * @return string[]
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
     *  For GetAdFormatLeads, returned if the seller responded to the
     *  lead's question. Contains the body of the seller's response
     *  message.
     *
     * @param string[] $response
     * @return self
     */
    public function setResponse(array $response)
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
     * @return \Nogrod\eBaySDK\Trading\MessageMediaType[]
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
     * @param \Nogrod\eBaySDK\Trading\MessageMediaType[] $messageMedia
     * @return self
     */
    public function setMessageMedia(array $messageMedia)
    {
        $this->messageMedia = $messageMedia;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getItem();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Item", $value);
        }
        $value = $this->getQuestion();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Question", $value);
        }
        $value = $this->getResponse();
        if (null !== $value && [] !== $this->getResponse()) {
            $writer->write(array_map(function ($v) {return ["Response" => $v];}, $value));
        }
        $value = $this->getMessageStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MessageStatus", $value);
        }
        $value = $this->getCreationDate();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CreationDate", $value);
        }
        $value = $this->getLastModifiedDate();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LastModifiedDate", $value);
        }
        $value = $this->getMessageMedia();
        if (null !== $value && [] !== $this->getMessageMedia()) {
            $writer->write(array_map(function ($v) {return ["MessageMedia" => $v];}, $value));
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
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}Item');
        if (null !== $value) {
            $this->setItem(\Nogrod\eBaySDK\Trading\ItemType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}Question');
        if (null !== $value) {
            $this->setQuestion(\Nogrod\eBaySDK\Trading\MemberMessageType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Response', true);
        if (null !== $value) {
            $this->setResponse($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}MessageStatus');
        if (null !== $value) {
            $this->setMessageStatus($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}CreationDate');
        if (null !== $value) {
            $this->setCreationDate(new \DateTime($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}LastModifiedDate');
        if (null !== $value) {
            $this->setLastModifiedDate(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MessageMedia');
        if (null !== $value) {
            $this->setMessageMedia(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\MessageMediaType::fromKeyValue($v);}, $value));
        }
    }
}
