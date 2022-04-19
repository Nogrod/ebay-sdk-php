<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DisputeMessageType
 *
 * Type used by a <strong>DisputeMessage</strong> container, which provides details on a message left by the buyer, the seller, or eBay related to an Unpaid Item case.
 *  <br/><br/>
 *  <span class="tablenote"><strong>Note:</strong>
 *  The <b>GetDispute</b> and <b>GetUserDisputes</b> calls now only retrieve Unpaid Item cases. They are no longer used to retrieve Item not Received (INR) disputes created through PayPal, since this is no longer an option for eBay buyers. eBay buyers must create an INR case through eBay's Resolution Center, and these calls also do not support eBay Money Back Guarantee cases.
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
