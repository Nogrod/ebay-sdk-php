<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MemberMessageType
 *
 * Container for individual message information.
 * XSD Type: MemberMessageType
 */
class MemberMessageType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Type of message being retrieved. Note that some message
     *  types can only be created via the eBay Web site.
     *
     * @var string $messageType
     */
    private $messageType = null;

    /**
     * Context of the question (e.g. Shipping, General).
     *
     * @var string $questionType
     */
    private $questionType = null;

    /**
     * Indicates if a copy of the messages is to be emailed
     *  to the sender. If omitted, this defaults to whatever
     *  the user set in preferences.
     *
     * @var bool $emailCopyToSender
     */
    private $emailCopyToSender = null;

    /**
     * This field is deprecated.
     *
     * @var bool $hideSendersEmailAddress
     */
    private $hideSendersEmailAddress = null;

    /**
     * Indicates if the member message is viewable in the item listing.
     *
     * @var bool $displayToPublic
     */
    private $displayToPublic = null;

    /**
     * The eBay user ID of the person who asked the question or sent
     *  the message.
     *
     * @var string $senderID
     */
    private $senderID = null;

    /**
     * SenderEmail contains the static email address of an eBay member,
     *  used within the "reply to"
     *  email address when the eBay member sends a message.
     *  (Each eBay member is assigned a static alias. The alias is
     *  used within a static email address.)
     *  SenderEmail is returned if MessageType is AskSellerQuestion.
     *  SenderEmail is also returned in the AskSellerQuestion notification.
     *  The following functionality of this field has been deprecated:
     *  return of a dynamic email address.
     *
     * @var string $senderEmail
     */
    private $senderEmail = null;

    /**
     * Recipient's eBay user ID. For
     *  AddMemberMessagesAAQToBidder, it must be the seller of an
     *  item, that item's bidder, or a user who has made an
     *  offer on that item using Best Offer. Note: maxOccurs is a shared schema
     *  element and needs to be unbounded for AddMemberMessagesAAQToBidder.
     *  For AddMemberMessageRTQ, this field is mandatory if ItemID is not in the request.
     *  For all other uses, there can only be one RecipientID.
     *
     * @var string[] $recipientID
     */
    private $recipientID = [

    ];

    /**
     * Subject of this email message.
     *
     * @var string $subject
     */
    private $subject = null;

    /**
     * Content of the message is input into this string field. HTML formatting is not
     *  allowed in the body of the message. If plain HTML is used, an error occurs and the
     *  message will not go through. If encoded HTML is used, the message may go through but
     *  the formatting will not be successful, and the recipient of the message will just
     *  see the HTML formatting tags.
     *
     * @var string $body
     */
    private $body = null;

    /**
     * ID that uniquely identifies a message for a given user.
     *  <br><br>
     *  This value is not the same as the value used for the
     *  GetMyMessages MessageID. However, this MessageID value can be
     *  used as the GetMyMessages ExternalID.
     *
     * @var string $messageID
     */
    private $messageID = null;

    /**
     * ID number of the question to which this message is responding.
     *
     * @var string $parentMessageID
     */
    private $parentMessageID = null;

    /**
     * Media details attached to the message.
     *
     * @var \Nogrod\eBaySDK\Trading\MessageMediaType[] $messageMedia
     */
    private $messageMedia = [

    ];

    /**
     * Gets as messageType
     *
     * Type of message being retrieved. Note that some message
     *  types can only be created via the eBay Web site.
     *
     * @return string
     */
    public function getMessageType()
    {
        return $this->messageType;
    }

    /**
     * Sets a new messageType
     *
     * Type of message being retrieved. Note that some message
     *  types can only be created via the eBay Web site.
     *
     * @param string $messageType
     * @return self
     */
    public function setMessageType($messageType)
    {
        $this->messageType = $messageType;
        return $this;
    }

    /**
     * Gets as questionType
     *
     * Context of the question (e.g. Shipping, General).
     *
     * @return string
     */
    public function getQuestionType()
    {
        return $this->questionType;
    }

    /**
     * Sets a new questionType
     *
     * Context of the question (e.g. Shipping, General).
     *
     * @param string $questionType
     * @return self
     */
    public function setQuestionType($questionType)
    {
        $this->questionType = $questionType;
        return $this;
    }

    /**
     * Gets as emailCopyToSender
     *
     * Indicates if a copy of the messages is to be emailed
     *  to the sender. If omitted, this defaults to whatever
     *  the user set in preferences.
     *
     * @return bool
     */
    public function getEmailCopyToSender()
    {
        return $this->emailCopyToSender;
    }

    /**
     * Sets a new emailCopyToSender
     *
     * Indicates if a copy of the messages is to be emailed
     *  to the sender. If omitted, this defaults to whatever
     *  the user set in preferences.
     *
     * @param bool $emailCopyToSender
     * @return self
     */
    public function setEmailCopyToSender($emailCopyToSender)
    {
        $this->emailCopyToSender = $emailCopyToSender;
        return $this;
    }

    /**
     * Gets as hideSendersEmailAddress
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getHideSendersEmailAddress()
    {
        return $this->hideSendersEmailAddress;
    }

    /**
     * Sets a new hideSendersEmailAddress
     *
     * This field is deprecated.
     *
     * @param bool $hideSendersEmailAddress
     * @return self
     */
    public function setHideSendersEmailAddress($hideSendersEmailAddress)
    {
        $this->hideSendersEmailAddress = $hideSendersEmailAddress;
        return $this;
    }

    /**
     * Gets as displayToPublic
     *
     * Indicates if the member message is viewable in the item listing.
     *
     * @return bool
     */
    public function getDisplayToPublic()
    {
        return $this->displayToPublic;
    }

    /**
     * Sets a new displayToPublic
     *
     * Indicates if the member message is viewable in the item listing.
     *
     * @param bool $displayToPublic
     * @return self
     */
    public function setDisplayToPublic($displayToPublic)
    {
        $this->displayToPublic = $displayToPublic;
        return $this;
    }

    /**
     * Gets as senderID
     *
     * The eBay user ID of the person who asked the question or sent
     *  the message.
     *
     * @return string
     */
    public function getSenderID()
    {
        return $this->senderID;
    }

    /**
     * Sets a new senderID
     *
     * The eBay user ID of the person who asked the question or sent
     *  the message.
     *
     * @param string $senderID
     * @return self
     */
    public function setSenderID($senderID)
    {
        $this->senderID = $senderID;
        return $this;
    }

    /**
     * Gets as senderEmail
     *
     * SenderEmail contains the static email address of an eBay member,
     *  used within the "reply to"
     *  email address when the eBay member sends a message.
     *  (Each eBay member is assigned a static alias. The alias is
     *  used within a static email address.)
     *  SenderEmail is returned if MessageType is AskSellerQuestion.
     *  SenderEmail is also returned in the AskSellerQuestion notification.
     *  The following functionality of this field has been deprecated:
     *  return of a dynamic email address.
     *
     * @return string
     */
    public function getSenderEmail()
    {
        return $this->senderEmail;
    }

    /**
     * Sets a new senderEmail
     *
     * SenderEmail contains the static email address of an eBay member,
     *  used within the "reply to"
     *  email address when the eBay member sends a message.
     *  (Each eBay member is assigned a static alias. The alias is
     *  used within a static email address.)
     *  SenderEmail is returned if MessageType is AskSellerQuestion.
     *  SenderEmail is also returned in the AskSellerQuestion notification.
     *  The following functionality of this field has been deprecated:
     *  return of a dynamic email address.
     *
     * @param string $senderEmail
     * @return self
     */
    public function setSenderEmail($senderEmail)
    {
        $this->senderEmail = $senderEmail;
        return $this;
    }

    /**
     * Adds as recipientID
     *
     * Recipient's eBay user ID. For
     *  AddMemberMessagesAAQToBidder, it must be the seller of an
     *  item, that item's bidder, or a user who has made an
     *  offer on that item using Best Offer. Note: maxOccurs is a shared schema
     *  element and needs to be unbounded for AddMemberMessagesAAQToBidder.
     *  For AddMemberMessageRTQ, this field is mandatory if ItemID is not in the request.
     *  For all other uses, there can only be one RecipientID.
     *
     * @return self
     * @param string $recipientID
     */
    public function addToRecipientID($recipientID)
    {
        $this->recipientID[] = $recipientID;
        return $this;
    }

    /**
     * isset recipientID
     *
     * Recipient's eBay user ID. For
     *  AddMemberMessagesAAQToBidder, it must be the seller of an
     *  item, that item's bidder, or a user who has made an
     *  offer on that item using Best Offer. Note: maxOccurs is a shared schema
     *  element and needs to be unbounded for AddMemberMessagesAAQToBidder.
     *  For AddMemberMessageRTQ, this field is mandatory if ItemID is not in the request.
     *  For all other uses, there can only be one RecipientID.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRecipientID($index)
    {
        return isset($this->recipientID[$index]);
    }

    /**
     * unset recipientID
     *
     * Recipient's eBay user ID. For
     *  AddMemberMessagesAAQToBidder, it must be the seller of an
     *  item, that item's bidder, or a user who has made an
     *  offer on that item using Best Offer. Note: maxOccurs is a shared schema
     *  element and needs to be unbounded for AddMemberMessagesAAQToBidder.
     *  For AddMemberMessageRTQ, this field is mandatory if ItemID is not in the request.
     *  For all other uses, there can only be one RecipientID.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRecipientID($index)
    {
        unset($this->recipientID[$index]);
    }

    /**
     * Gets as recipientID
     *
     * Recipient's eBay user ID. For
     *  AddMemberMessagesAAQToBidder, it must be the seller of an
     *  item, that item's bidder, or a user who has made an
     *  offer on that item using Best Offer. Note: maxOccurs is a shared schema
     *  element and needs to be unbounded for AddMemberMessagesAAQToBidder.
     *  For AddMemberMessageRTQ, this field is mandatory if ItemID is not in the request.
     *  For all other uses, there can only be one RecipientID.
     *
     * @return string[]
     */
    public function getRecipientID()
    {
        return $this->recipientID;
    }

    /**
     * Sets a new recipientID
     *
     * Recipient's eBay user ID. For
     *  AddMemberMessagesAAQToBidder, it must be the seller of an
     *  item, that item's bidder, or a user who has made an
     *  offer on that item using Best Offer. Note: maxOccurs is a shared schema
     *  element and needs to be unbounded for AddMemberMessagesAAQToBidder.
     *  For AddMemberMessageRTQ, this field is mandatory if ItemID is not in the request.
     *  For all other uses, there can only be one RecipientID.
     *
     * @param string[] $recipientID
     * @return self
     */
    public function setRecipientID(array $recipientID)
    {
        $this->recipientID = $recipientID;
        return $this;
    }

    /**
     * Gets as subject
     *
     * Subject of this email message.
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * Subject of this email message.
     *
     * @param string $subject
     * @return self
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as body
     *
     * Content of the message is input into this string field. HTML formatting is not
     *  allowed in the body of the message. If plain HTML is used, an error occurs and the
     *  message will not go through. If encoded HTML is used, the message may go through but
     *  the formatting will not be successful, and the recipient of the message will just
     *  see the HTML formatting tags.
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * Content of the message is input into this string field. HTML formatting is not
     *  allowed in the body of the message. If plain HTML is used, an error occurs and the
     *  message will not go through. If encoded HTML is used, the message may go through but
     *  the formatting will not be successful, and the recipient of the message will just
     *  see the HTML formatting tags.
     *
     * @param string $body
     * @return self
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as messageID
     *
     * ID that uniquely identifies a message for a given user.
     *  <br><br>
     *  This value is not the same as the value used for the
     *  GetMyMessages MessageID. However, this MessageID value can be
     *  used as the GetMyMessages ExternalID.
     *
     * @return string
     */
    public function getMessageID()
    {
        return $this->messageID;
    }

    /**
     * Sets a new messageID
     *
     * ID that uniquely identifies a message for a given user.
     *  <br><br>
     *  This value is not the same as the value used for the
     *  GetMyMessages MessageID. However, this MessageID value can be
     *  used as the GetMyMessages ExternalID.
     *
     * @param string $messageID
     * @return self
     */
    public function setMessageID($messageID)
    {
        $this->messageID = $messageID;
        return $this;
    }

    /**
     * Gets as parentMessageID
     *
     * ID number of the question to which this message is responding.
     *
     * @return string
     */
    public function getParentMessageID()
    {
        return $this->parentMessageID;
    }

    /**
     * Sets a new parentMessageID
     *
     * ID number of the question to which this message is responding.
     *
     * @param string $parentMessageID
     * @return self
     */
    public function setParentMessageID($parentMessageID)
    {
        $this->parentMessageID = $parentMessageID;
        return $this;
    }

    /**
     * Adds as messageMedia
     *
     * Media details attached to the message.
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
     * Media details attached to the message.
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
     * Media details attached to the message.
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
     * Media details attached to the message.
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
     * Media details attached to the message.
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
        $value = $this->getMessageType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MessageType", $value);
        }
        $value = $this->getQuestionType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QuestionType", $value);
        }
        $value = $this->getEmailCopyToSender();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EmailCopyToSender", $value);
        }
        $value = $this->getHideSendersEmailAddress();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HideSendersEmailAddress", $value);
        }
        $value = $this->getDisplayToPublic();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisplayToPublic", $value);
        }
        $value = $this->getSenderID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SenderID", $value);
        }
        $value = $this->getSenderEmail();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SenderEmail", $value);
        }
        $value = $this->getRecipientID();
        if (null !== $value && !empty($this->getRecipientID())) {
            $writer->write(array_map(function ($v) {return ["RecipientID" => $v];}, $value));
        }
        $value = $this->getSubject();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Subject", $value);
        }
        $value = $this->getBody();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Body", $value);
        }
        $value = $this->getMessageID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MessageID", $value);
        }
        $value = $this->getParentMessageID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ParentMessageID", $value);
        }
        $value = $this->getMessageMedia();
        if (null !== $value && !empty($this->getMessageMedia())) {
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MessageType');
        if (null !== $value) {
            $this->setMessageType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QuestionType');
        if (null !== $value) {
            $this->setQuestionType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EmailCopyToSender');
        if (null !== $value) {
            $this->setEmailCopyToSender($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}HideSendersEmailAddress');
        if (null !== $value) {
            $this->setHideSendersEmailAddress($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisplayToPublic');
        if (null !== $value) {
            $this->setDisplayToPublic($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SenderID');
        if (null !== $value) {
            $this->setSenderID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SenderEmail');
        if (null !== $value) {
            $this->setSenderEmail($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RecipientID', true);
        if (null !== $value && !empty($value)) {
            $this->setRecipientID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Subject');
        if (null !== $value) {
            $this->setSubject($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Body');
        if (null !== $value) {
            $this->setBody($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MessageID');
        if (null !== $value) {
            $this->setMessageID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ParentMessageID');
        if (null !== $value) {
            $this->setParentMessageID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MessageMedia', true);
        if (null !== $value && !empty($value)) {
            $this->setMessageMedia(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\MessageMediaType::fromKeyValue($v);}, $value));
        }
    }
}
