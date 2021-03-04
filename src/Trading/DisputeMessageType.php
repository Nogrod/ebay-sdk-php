<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DisputeMessageType
 *
 * Contains a message posted to a dispute. The message can be posted
 *  by the buyer, the seller, or an eBay representative.
 *  <br/><br/>
 *  <span class="tablenote"><strong>Note:</strong>
 *  'Item Not Received' or 'Significantly Not As Described' cases, initiated by buyers through the eBay Money Back Guarantee program, are not returned with <b>GetDispute</b> or <b>GetUserDisputes</b>. The <a href="https://developer.ebay.com/Devzone/post-order/post-order_v2_casemanagement-caseId__get.html#overview">getCase</a> method of the <a href="https://developer.ebay.com/Devzone/post-order/concepts/UsageGuide.html">Post-Order API</a> is used to retrieve Money Back Guarantee cases programmatically.
 *  </span>
 * XSD Type: DisputeMessageType
 */
class DisputeMessageType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * An ID that uniquely identifies the message.
     *
     * @var int $messageID
     */
    private $messageID = null;

    /**
     * The party who posted the message: the buyer, the seller,
     *  or an eBay representative.
     *
     * @var string $messageSource
     */
    private $messageSource = null;

    /**
     * The date and time the message was created, in GMT.
     *
     * @var \DateTime $messageCreationTime
     */
    private $messageCreationTime = null;

    /**
     * The text of the message.
     *
     * @var string $messageText
     */
    private $messageText = null;

    /**
     * Gets as messageID
     *
     * An ID that uniquely identifies the message.
     *
     * @return int
     */
    public function getMessageID()
    {
        return $this->messageID;
    }

    /**
     * Sets a new messageID
     *
     * An ID that uniquely identifies the message.
     *
     * @param int $messageID
     * @return self
     */
    public function setMessageID($messageID)
    {
        $this->messageID = $messageID;
        return $this;
    }

    /**
     * Gets as messageSource
     *
     * The party who posted the message: the buyer, the seller,
     *  or an eBay representative.
     *
     * @return string
     */
    public function getMessageSource()
    {
        return $this->messageSource;
    }

    /**
     * Sets a new messageSource
     *
     * The party who posted the message: the buyer, the seller,
     *  or an eBay representative.
     *
     * @param string $messageSource
     * @return self
     */
    public function setMessageSource($messageSource)
    {
        $this->messageSource = $messageSource;
        return $this;
    }

    /**
     * Gets as messageCreationTime
     *
     * The date and time the message was created, in GMT.
     *
     * @return \DateTime
     */
    public function getMessageCreationTime()
    {
        return $this->messageCreationTime;
    }

    /**
     * Sets a new messageCreationTime
     *
     * The date and time the message was created, in GMT.
     *
     * @param \DateTime $messageCreationTime
     * @return self
     */
    public function setMessageCreationTime(\DateTime $messageCreationTime)
    {
        $this->messageCreationTime = $messageCreationTime;
        return $this;
    }

    /**
     * Gets as messageText
     *
     * The text of the message.
     *
     * @return string
     */
    public function getMessageText()
    {
        return $this->messageText;
    }

    /**
     * Sets a new messageText
     *
     * The text of the message.
     *
     * @param string $messageText
     * @return self
     */
    public function setMessageText($messageText)
    {
        $this->messageText = $messageText;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getMessageID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MessageID", $value);
        }
        $value = $this->getMessageSource();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MessageSource", $value);
        }
        $value = $this->getMessageCreationTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MessageCreationTime", $value);
        }
        $value = $this->getMessageText();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MessageText", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MessageID');
        if (null !== $value) {
            $this->setMessageID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MessageSource');
        if (null !== $value) {
            $this->setMessageSource($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MessageCreationTime');
        if (null !== $value) {
            $this->setMessageCreationTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MessageText');
        if (null !== $value) {
            $this->setMessageText($value);
        }
    }
}
