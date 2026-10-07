<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MemberMessageType
 *
 * Container for individual message information.
 * XSD Type: MemberMessageType
 */
class MemberMessageType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
     * Indicates if the member message is viewable in the item listing.
     *
     * @var bool $displayToPublic
     */
    private $displayToPublic = null;

    /**
     * The eBay user ID of the person who asked the question or sent
     *  the message.
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
     *  <br/>
     *  <span class="tablenote"><strong>Note:</strong> Effective September 26, 2025, both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.</span>
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
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
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
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
     *  <br/>
     *  <span class="tablenote"><strong>Note:</strong> Effective September 26, 2025, both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.</span>
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
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
     *  <br/>
     *  <span class="tablenote"><strong>Note:</strong> Effective September 26, 2025, both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.</span>
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
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
     *
     * @return self
     * @param string $recipientID
     */
    public function addToRecipientID($recipientID)
    {
        if (!is_array($this->recipientID)) {
            throw new \LogicException('recipientID is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
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
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
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
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
     *
     * @return iterable<string>
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
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
     *
     * @param iterable<string> $recipientID
     * @return self
     */
    public function setRecipientID(iterable $recipientID)
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
        if (!is_array($this->messageMedia)) {
            throw new \LogicException('messageMedia is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\MessageMediaType>
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
        $value = $this->messageType;
        if (null !== $value) {
            $writer->writeElementNs(null, 'MessageType', null, (string) $value);
        }
        $value = $this->questionType;
        if (null !== $value) {
            $writer->writeElementNs(null, 'QuestionType', null, (string) $value);
        }
        $value = $this->emailCopyToSender;
        if (null !== $value) {
            $writer->writeElementNs(null, 'EmailCopyToSender', null, ($value ? 'true' : 'false'));
        }
        $value = $this->displayToPublic;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DisplayToPublic', null, ($value ? 'true' : 'false'));
        }
        $value = $this->senderID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'SenderID', null, (string) $value);
        }
        $value = $this->senderEmail;
        if (null !== $value) {
            $writer->writeElementNs(null, 'SenderEmail', null, (string) $value);
        }
        $value = $this->recipientID;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->writeElementNs(null, 'RecipientID', null, (string) $v);
            }
        }
        $value = $this->subject;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Subject', null, (string) $value);
        }
        $value = $this->body;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Body', null, (string) $value);
        }
        $value = $this->messageID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'MessageID', null, (string) $value);
        }
        $value = $this->parentMessageID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ParentMessageID', null, (string) $value);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\MemberMessageType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->recipientID = [];
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
                case 'MessageType':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->messageType = $value;
                    }
                    return true;
                case 'QuestionType':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->questionType = $value;
                    }
                    return true;
                case 'EmailCopyToSender':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->emailCopyToSender = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'DisplayToPublic':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->displayToPublic = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'SenderID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->senderID = $value;
                    }
                    return true;
                case 'SenderEmail':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->senderEmail = $value;
                    }
                    return true;
                case 'RecipientID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->recipientID[] = $value;
                    }
                    return true;
                case 'Subject':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->subject = $value;
                    }
                    return true;
                case 'Body':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->body = $value;
                    }
                    return true;
                case 'MessageID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->messageID = $value;
                    }
                    return true;
                case 'ParentMessageID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->parentMessageID = $value;
                    }
                    return true;
                case 'MessageMedia':
                    $this->messageMedia[] = \Nogrod\eBaySDK\Trading\MessageMediaType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['MessageType'] = $this->messageType;
        $data['QuestionType'] = $this->questionType;
        $data['EmailCopyToSender'] = $this->emailCopyToSender;
        $data['DisplayToPublic'] = $this->displayToPublic;
        $data['SenderID'] = $this->senderID;
        $data['SenderEmail'] = $this->senderEmail;
        $data['RecipientID'] = Func::jsonList($this->recipientID);
        $data['Subject'] = $this->subject;
        $data['Body'] = $this->body;
        $data['MessageID'] = $this->messageID;
        $data['ParentMessageID'] = $this->parentMessageID;
        $data['MessageMedia'] = Func::jsonList($this->messageMedia);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
