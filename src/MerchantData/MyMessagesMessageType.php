<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing MyMessagesMessageType
 *
 * Container for the message information for each message specified in
 *  MessageIDs. The amount and type of information returned varies based on
 *  the requested detail level.
 * XSD Type: MyMessagesMessageType
 */
class MyMessagesMessageType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Display name of the eBay user that sent the message.
     *
     * @var string $sender
     */
    private $sender = null;

    /**
     * Displayable user ID of the recipient.
     *
     * @var string $recipientUserID
     */
    private $recipientUserID = null;

    /**
     * Displayable name of the user or eBay
     *  application to which the message is sent. Only
     *  returned for M2M, and if a value exists.
     *
     * @var string $sendToName
     */
    private $sendToName = null;

    /**
     * Subject of the message.
     *
     * @var string $subject
     */
    private $subject = null;

    /**
     * ID that uniquely identifies a message for a given user.
     *  <br/>
     *  <br/>
     *  This value is not the same as the value used for the
     *  GetMemberMessages MessageID. Use the GetMemberMessages value
     *  (used as the GetMyMessages ExternalID) instead.
     *
     * @var string $messageID
     */
    private $messageID = null;

    /**
     * ID used by an external application to uniquely identify a
     *  message. Returned only when specified by the external
     *  application on message creation.
     *  <br><br>
     *  This value is equivalent to the value used for MessageID in
     *  GetMemberMessages.
     *
     * @var string $externalMessageID
     */
    private $externalMessageID = null;

    /**
     * Content type of the body text. The three acceptable values
     *  are "TEXT", "HTML", and "XML" (Note: This is case sensitive).
     *
     * @var string $contentType
     */
    private $contentType = null;

    /**
     * Contains the message content, and
     *  can contain a threaded message.
     *  This field can contain plain text or HTML,
     *  depending on the format of the original message.
     *  The API does not check the email-format preferences
     *  in My Messages on the eBay Web site.
     *
     * @var string $text
     */
    private $text = null;

    /**
     * Indicates if the message is displayed with a flag in the seller's
     *  My Messages mailbox on eBay.
     *  It is strongly recommended that the seller act on the message by the
     *  specified date (or within 60 days, if not specified).
     *
     * @var bool $flagged
     */
    private $flagged = null;

    /**
     * Indicates if a message has been viewed by a given user. Note that retrieving
     *  a message with the API does not mark it as read.
     *
     * @var bool $read
     */
    private $read = null;

    /**
     * Date and time that a message was created by the sender.
     *
     * @var \DateTime $creationDate
     */
    private $creationDate = null;

    /**
     * Date and time that a message was received by My Messages and stored in a
     *  database for the recipient.
     *
     * @var \DateTime $receiveDate
     */
    private $receiveDate = null;

    /**
     * Date and time at which a message expires.
     *
     * @var \DateTime $expirationDate
     */
    private $expirationDate = null;

    /**
     * Unique identifier of an eBay listing. This field is returned if the corresponding message is associated with a specific listing.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * Details relating to the response to a message.
     *
     * @var \Nogrod\eBaySDK\MerchantData\MyMessagesResponseDetailsType $responseDetails
     */
    private $responseDetails = null;

    /**
     * Details relating to the forwarding of a
     *  message. Only returned if the message is forwarded.
     *
     * @var \Nogrod\eBaySDK\MerchantData\MyMessagesForwardDetailsType $forwardDetails
     */
    private $forwardDetails = null;

    /**
     * Details relating to a My Messages folder.
     *
     * @var \Nogrod\eBaySDK\MerchantData\MyMessagesFolderType $folder
     */
    private $folder = null;

    /**
     * Message body in plain text format. The message body is displayed in plain text
     *  even if the eBay user's Preferred Email Format preference on My eBay is set to HTML.
     *  Graphics and text formatting are dropped if the eBay user's preference is set to
     *  HTML.
     *
     * @var string $content
     */
    private $content = null;

    /**
     * Type of message being retrieved through GetMyMessages. This is available only on
     *  the US site.
     *
     * @var string $messageType
     */
    private $messageType = null;

    /**
     * Specifies an active or ended listing's status in eBay's processing workflow.
     *  If a listing ends with a sale (or sales), eBay needs to update the sale
     *  details (e.g., total price and buyer/high bidder) and the final value fee.
     *  This processing can take several minutes. If you retrieve a sold item and no
     *  details about the buyer/high bidder are returned or no final value fee is
     *  available, use this listing status information to determine whether eBay has
     *  finished processing the listing.
     *  <br><br> <span class="tablenote"><b>Note:</b>
     *  For GetMyMessages, the listing status reflects the status of the listing at the time
     *  the question was created. The listing status for this call must not match the listing
     *  status returned by other calls (such as GetItemTransactions). This is returned only if
     *  Messages.Message.MessageType is AskSellerQuestion. This tag is no longer returned
     *  in the Sandbox environment.
     *  </span>
     *
     * @var string $listingStatus
     */
    private $listingStatus = null;

    /**
     * Currently available only on the US site. Context of the question (e.g. Shipping, General).
     *  Corresponds to the message subject. Applies if Messages.Message.MessageType is AskSellerQuestion.
     *
     * @var string $questionType
     */
    private $questionType = null;

    /**
     * Indicates if there has been a reply to the message.
     *
     * @var bool $replied
     */
    private $replied = null;

    /**
     * Indicates if this message is marked as a high-priority message.
     *
     * @var bool $highPriority
     */
    private $highPriority = null;

    /**
     * Date and time for the ended item.
     *
     * @var \DateTime $itemEndTime
     */
    private $itemEndTime = null;

    /**
     * Title of the item listing.
     *
     * @var string $itemTitle
     */
    private $itemTitle = null;

    /**
     * Media details stored as part of the message.
     *
     * @var \Nogrod\eBaySDK\MerchantData\MessageMediaType[] $messageMedia
     */
    private $messageMedia = [
        
    ];

    /**
     * Gets as sender
     *
     * Display name of the eBay user that sent the message.
     *
     * @return string
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Sets a new sender
     *
     * Display name of the eBay user that sent the message.
     *
     * @param string $sender
     * @return self
     */
    public function setSender($sender)
    {
        $this->sender = $sender;
        return $this;
    }

    /**
     * Gets as recipientUserID
     *
     * Displayable user ID of the recipient.
     *
     * @return string
     */
    public function getRecipientUserID()
    {
        return $this->recipientUserID;
    }

    /**
     * Sets a new recipientUserID
     *
     * Displayable user ID of the recipient.
     *
     * @param string $recipientUserID
     * @return self
     */
    public function setRecipientUserID($recipientUserID)
    {
        $this->recipientUserID = $recipientUserID;
        return $this;
    }

    /**
     * Gets as sendToName
     *
     * Displayable name of the user or eBay
     *  application to which the message is sent. Only
     *  returned for M2M, and if a value exists.
     *
     * @return string
     */
    public function getSendToName()
    {
        return $this->sendToName;
    }

    /**
     * Sets a new sendToName
     *
     * Displayable name of the user or eBay
     *  application to which the message is sent. Only
     *  returned for M2M, and if a value exists.
     *
     * @param string $sendToName
     * @return self
     */
    public function setSendToName($sendToName)
    {
        $this->sendToName = $sendToName;
        return $this;
    }

    /**
     * Gets as subject
     *
     * Subject of the message.
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
     * Subject of the message.
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
     * Gets as messageID
     *
     * ID that uniquely identifies a message for a given user.
     *  <br/>
     *  <br/>
     *  This value is not the same as the value used for the
     *  GetMemberMessages MessageID. Use the GetMemberMessages value
     *  (used as the GetMyMessages ExternalID) instead.
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
     *  <br/>
     *  <br/>
     *  This value is not the same as the value used for the
     *  GetMemberMessages MessageID. Use the GetMemberMessages value
     *  (used as the GetMyMessages ExternalID) instead.
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
     * Gets as externalMessageID
     *
     * ID used by an external application to uniquely identify a
     *  message. Returned only when specified by the external
     *  application on message creation.
     *  <br><br>
     *  This value is equivalent to the value used for MessageID in
     *  GetMemberMessages.
     *
     * @return string
     */
    public function getExternalMessageID()
    {
        return $this->externalMessageID;
    }

    /**
     * Sets a new externalMessageID
     *
     * ID used by an external application to uniquely identify a
     *  message. Returned only when specified by the external
     *  application on message creation.
     *  <br><br>
     *  This value is equivalent to the value used for MessageID in
     *  GetMemberMessages.
     *
     * @param string $externalMessageID
     * @return self
     */
    public function setExternalMessageID($externalMessageID)
    {
        $this->externalMessageID = $externalMessageID;
        return $this;
    }

    /**
     * Gets as contentType
     *
     * Content type of the body text. The three acceptable values
     *  are "TEXT", "HTML", and "XML" (Note: This is case sensitive).
     *
     * @return string
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * Sets a new contentType
     *
     * Content type of the body text. The three acceptable values
     *  are "TEXT", "HTML", and "XML" (Note: This is case sensitive).
     *
     * @param string $contentType
     * @return self
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * Gets as text
     *
     * Contains the message content, and
     *  can contain a threaded message.
     *  This field can contain plain text or HTML,
     *  depending on the format of the original message.
     *  The API does not check the email-format preferences
     *  in My Messages on the eBay Web site.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * Contains the message content, and
     *  can contain a threaded message.
     *  This field can contain plain text or HTML,
     *  depending on the format of the original message.
     *  The API does not check the email-format preferences
     *  in My Messages on the eBay Web site.
     *
     * @param string $text
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Gets as flagged
     *
     * Indicates if the message is displayed with a flag in the seller's
     *  My Messages mailbox on eBay.
     *  It is strongly recommended that the seller act on the message by the
     *  specified date (or within 60 days, if not specified).
     *
     * @return bool
     */
    public function getFlagged()
    {
        return $this->flagged;
    }

    /**
     * Sets a new flagged
     *
     * Indicates if the message is displayed with a flag in the seller's
     *  My Messages mailbox on eBay.
     *  It is strongly recommended that the seller act on the message by the
     *  specified date (or within 60 days, if not specified).
     *
     * @param bool $flagged
     * @return self
     */
    public function setFlagged($flagged)
    {
        $this->flagged = $flagged;
        return $this;
    }

    /**
     * Gets as read
     *
     * Indicates if a message has been viewed by a given user. Note that retrieving
     *  a message with the API does not mark it as read.
     *
     * @return bool
     */
    public function getRead()
    {
        return $this->read;
    }

    /**
     * Sets a new read
     *
     * Indicates if a message has been viewed by a given user. Note that retrieving
     *  a message with the API does not mark it as read.
     *
     * @param bool $read
     * @return self
     */
    public function setRead($read)
    {
        $this->read = $read;
        return $this;
    }

    /**
     * Gets as creationDate
     *
     * Date and time that a message was created by the sender.
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
     * Date and time that a message was created by the sender.
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
     * Gets as receiveDate
     *
     * Date and time that a message was received by My Messages and stored in a
     *  database for the recipient.
     *
     * @return \DateTime
     */
    public function getReceiveDate()
    {
        return $this->receiveDate;
    }

    /**
     * Sets a new receiveDate
     *
     * Date and time that a message was received by My Messages and stored in a
     *  database for the recipient.
     *
     * @param \DateTime $receiveDate
     * @return self
     */
    public function setReceiveDate(\DateTime $receiveDate)
    {
        $this->receiveDate = $receiveDate;
        return $this;
    }

    /**
     * Gets as expirationDate
     *
     * Date and time at which a message expires.
     *
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * Sets a new expirationDate
     *
     * Date and time at which a message expires.
     *
     * @param \DateTime $expirationDate
     * @return self
     */
    public function setExpirationDate(\DateTime $expirationDate)
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * Gets as itemID
     *
     * Unique identifier of an eBay listing. This field is returned if the corresponding message is associated with a specific listing.
     *
     * @return string
     */
    public function getItemID()
    {
        return $this->itemID;
    }

    /**
     * Sets a new itemID
     *
     * Unique identifier of an eBay listing. This field is returned if the corresponding message is associated with a specific listing.
     *
     * @param string $itemID
     * @return self
     */
    public function setItemID($itemID)
    {
        $this->itemID = $itemID;
        return $this;
    }

    /**
     * Gets as responseDetails
     *
     * Details relating to the response to a message.
     *
     * @return \Nogrod\eBaySDK\MerchantData\MyMessagesResponseDetailsType
     */
    public function getResponseDetails()
    {
        return $this->responseDetails;
    }

    /**
     * Sets a new responseDetails
     *
     * Details relating to the response to a message.
     *
     * @param \Nogrod\eBaySDK\MerchantData\MyMessagesResponseDetailsType $responseDetails
     * @return self
     */
    public function setResponseDetails(\Nogrod\eBaySDK\MerchantData\MyMessagesResponseDetailsType $responseDetails)
    {
        $this->responseDetails = $responseDetails;
        return $this;
    }

    /**
     * Gets as forwardDetails
     *
     * Details relating to the forwarding of a
     *  message. Only returned if the message is forwarded.
     *
     * @return \Nogrod\eBaySDK\MerchantData\MyMessagesForwardDetailsType
     */
    public function getForwardDetails()
    {
        return $this->forwardDetails;
    }

    /**
     * Sets a new forwardDetails
     *
     * Details relating to the forwarding of a
     *  message. Only returned if the message is forwarded.
     *
     * @param \Nogrod\eBaySDK\MerchantData\MyMessagesForwardDetailsType $forwardDetails
     * @return self
     */
    public function setForwardDetails(\Nogrod\eBaySDK\MerchantData\MyMessagesForwardDetailsType $forwardDetails)
    {
        $this->forwardDetails = $forwardDetails;
        return $this;
    }

    /**
     * Gets as folder
     *
     * Details relating to a My Messages folder.
     *
     * @return \Nogrod\eBaySDK\MerchantData\MyMessagesFolderType
     */
    public function getFolder()
    {
        return $this->folder;
    }

    /**
     * Sets a new folder
     *
     * Details relating to a My Messages folder.
     *
     * @param \Nogrod\eBaySDK\MerchantData\MyMessagesFolderType $folder
     * @return self
     */
    public function setFolder(\Nogrod\eBaySDK\MerchantData\MyMessagesFolderType $folder)
    {
        $this->folder = $folder;
        return $this;
    }

    /**
     * Gets as content
     *
     * Message body in plain text format. The message body is displayed in plain text
     *  even if the eBay user's Preferred Email Format preference on My eBay is set to HTML.
     *  Graphics and text formatting are dropped if the eBay user's preference is set to
     *  HTML.
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sets a new content
     *
     * Message body in plain text format. The message body is displayed in plain text
     *  even if the eBay user's Preferred Email Format preference on My eBay is set to HTML.
     *  Graphics and text formatting are dropped if the eBay user's preference is set to
     *  HTML.
     *
     * @param string $content
     * @return self
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * Gets as messageType
     *
     * Type of message being retrieved through GetMyMessages. This is available only on
     *  the US site.
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
     * Type of message being retrieved through GetMyMessages. This is available only on
     *  the US site.
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
     * Gets as listingStatus
     *
     * Specifies an active or ended listing's status in eBay's processing workflow.
     *  If a listing ends with a sale (or sales), eBay needs to update the sale
     *  details (e.g., total price and buyer/high bidder) and the final value fee.
     *  This processing can take several minutes. If you retrieve a sold item and no
     *  details about the buyer/high bidder are returned or no final value fee is
     *  available, use this listing status information to determine whether eBay has
     *  finished processing the listing.
     *  <br><br> <span class="tablenote"><b>Note:</b>
     *  For GetMyMessages, the listing status reflects the status of the listing at the time
     *  the question was created. The listing status for this call must not match the listing
     *  status returned by other calls (such as GetItemTransactions). This is returned only if
     *  Messages.Message.MessageType is AskSellerQuestion. This tag is no longer returned
     *  in the Sandbox environment.
     *  </span>
     *
     * @return string
     */
    public function getListingStatus()
    {
        return $this->listingStatus;
    }

    /**
     * Sets a new listingStatus
     *
     * Specifies an active or ended listing's status in eBay's processing workflow.
     *  If a listing ends with a sale (or sales), eBay needs to update the sale
     *  details (e.g., total price and buyer/high bidder) and the final value fee.
     *  This processing can take several minutes. If you retrieve a sold item and no
     *  details about the buyer/high bidder are returned or no final value fee is
     *  available, use this listing status information to determine whether eBay has
     *  finished processing the listing.
     *  <br><br> <span class="tablenote"><b>Note:</b>
     *  For GetMyMessages, the listing status reflects the status of the listing at the time
     *  the question was created. The listing status for this call must not match the listing
     *  status returned by other calls (such as GetItemTransactions). This is returned only if
     *  Messages.Message.MessageType is AskSellerQuestion. This tag is no longer returned
     *  in the Sandbox environment.
     *  </span>
     *
     * @param string $listingStatus
     * @return self
     */
    public function setListingStatus($listingStatus)
    {
        $this->listingStatus = $listingStatus;
        return $this;
    }

    /**
     * Gets as questionType
     *
     * Currently available only on the US site. Context of the question (e.g. Shipping, General).
     *  Corresponds to the message subject. Applies if Messages.Message.MessageType is AskSellerQuestion.
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
     * Currently available only on the US site. Context of the question (e.g. Shipping, General).
     *  Corresponds to the message subject. Applies if Messages.Message.MessageType is AskSellerQuestion.
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
     * Gets as replied
     *
     * Indicates if there has been a reply to the message.
     *
     * @return bool
     */
    public function getReplied()
    {
        return $this->replied;
    }

    /**
     * Sets a new replied
     *
     * Indicates if there has been a reply to the message.
     *
     * @param bool $replied
     * @return self
     */
    public function setReplied($replied)
    {
        $this->replied = $replied;
        return $this;
    }

    /**
     * Gets as highPriority
     *
     * Indicates if this message is marked as a high-priority message.
     *
     * @return bool
     */
    public function getHighPriority()
    {
        return $this->highPriority;
    }

    /**
     * Sets a new highPriority
     *
     * Indicates if this message is marked as a high-priority message.
     *
     * @param bool $highPriority
     * @return self
     */
    public function setHighPriority($highPriority)
    {
        $this->highPriority = $highPriority;
        return $this;
    }

    /**
     * Gets as itemEndTime
     *
     * Date and time for the ended item.
     *
     * @return \DateTime
     */
    public function getItemEndTime()
    {
        return $this->itemEndTime;
    }

    /**
     * Sets a new itemEndTime
     *
     * Date and time for the ended item.
     *
     * @param \DateTime $itemEndTime
     * @return self
     */
    public function setItemEndTime(\DateTime $itemEndTime)
    {
        $this->itemEndTime = $itemEndTime;
        return $this;
    }

    /**
     * Gets as itemTitle
     *
     * Title of the item listing.
     *
     * @return string
     */
    public function getItemTitle()
    {
        return $this->itemTitle;
    }

    /**
     * Sets a new itemTitle
     *
     * Title of the item listing.
     *
     * @param string $itemTitle
     * @return self
     */
    public function setItemTitle($itemTitle)
    {
        $this->itemTitle = $itemTitle;
        return $this;
    }

    /**
     * Adds as messageMedia
     *
     * Media details stored as part of the message.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\MessageMediaType $messageMedia
     */
    public function addToMessageMedia(\Nogrod\eBaySDK\MerchantData\MessageMediaType $messageMedia)
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
     * @return \Nogrod\eBaySDK\MerchantData\MessageMediaType[]
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
     * @param \Nogrod\eBaySDK\MerchantData\MessageMediaType[] $messageMedia
     * @return self
     */
    public function setMessageMedia(array $messageMedia)
    {
        $this->messageMedia = $messageMedia;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getSender();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Sender", $value);
        }
        $value = $this->getRecipientUserID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RecipientUserID", $value);
        }
        $value = $this->getSendToName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SendToName", $value);
        }
        $value = $this->getSubject();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Subject", $value);
        }
        $value = $this->getMessageID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MessageID", $value);
        }
        $value = $this->getExternalMessageID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExternalMessageID", $value);
        }
        $value = $this->getContentType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ContentType", $value);
        }
        $value = $this->getText();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Text", $value);
        }
        $value = $this->getFlagged();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Flagged", $value);
        }
        $value = $this->getRead();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Read", $value);
        }
        $value = $this->getCreationDate();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CreationDate", $value);
        }
        $value = $this->getReceiveDate();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReceiveDate", $value);
        }
        $value = $this->getExpirationDate();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExpirationDate", $value);
        }
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getResponseDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ResponseDetails", $value);
        }
        $value = $this->getForwardDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ForwardDetails", $value);
        }
        $value = $this->getFolder();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Folder", $value);
        }
        $value = $this->getContent();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Content", $value);
        }
        $value = $this->getMessageType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MessageType", $value);
        }
        $value = $this->getListingStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ListingStatus", $value);
        }
        $value = $this->getQuestionType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QuestionType", $value);
        }
        $value = $this->getReplied();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Replied", $value);
        }
        $value = $this->getHighPriority();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HighPriority", $value);
        }
        $value = $this->getItemEndTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemEndTime", $value);
        }
        $value = $this->getItemTitle();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemTitle", $value);
        }
        $value = $this->getMessageMedia();
        if (null !== $value && !empty($this->getMessageMedia())) {
            $writer->write(array_map(function ($v) {
                return ["MessageMedia" => $v];
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Sender');
        if (null !== $value) {
            $this->setSender($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RecipientUserID');
        if (null !== $value) {
            $this->setRecipientUserID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SendToName');
        if (null !== $value) {
            $this->setSendToName($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Subject');
        if (null !== $value) {
            $this->setSubject($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MessageID');
        if (null !== $value) {
            $this->setMessageID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExternalMessageID');
        if (null !== $value) {
            $this->setExternalMessageID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ContentType');
        if (null !== $value) {
            $this->setContentType($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Text');
        if (null !== $value) {
            $this->setText($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Flagged');
        if (null !== $value) {
            $this->setFlagged($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Read');
        if (null !== $value) {
            $this->setRead($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CreationDate');
        if (null !== $value) {
            $this->setCreationDate(new \DateTime($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReceiveDate');
        if (null !== $value) {
            $this->setReceiveDate(new \DateTime($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExpirationDate');
        if (null !== $value) {
            $this->setExpirationDate(new \DateTime($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ResponseDetails');
        if (null !== $value) {
            $this->setResponseDetails(\Nogrod\eBaySDK\MerchantData\MyMessagesResponseDetailsType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ForwardDetails');
        if (null !== $value) {
            $this->setForwardDetails(\Nogrod\eBaySDK\MerchantData\MyMessagesForwardDetailsType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Folder');
        if (null !== $value) {
            $this->setFolder(\Nogrod\eBaySDK\MerchantData\MyMessagesFolderType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Content');
        if (null !== $value) {
            $this->setContent($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MessageType');
        if (null !== $value) {
            $this->setMessageType($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingStatus');
        if (null !== $value) {
            $this->setListingStatus($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QuestionType');
        if (null !== $value) {
            $this->setQuestionType($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Replied');
        if (null !== $value) {
            $this->setReplied($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}HighPriority');
        if (null !== $value) {
            $this->setHighPriority($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemEndTime');
        if (null !== $value) {
            $this->setItemEndTime(new \DateTime($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemTitle');
        if (null !== $value) {
            $this->setItemTitle($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MessageMedia', true);
        if (null !== $value && !empty($value)) {
            $this->setMessageMedia(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\MessageMediaType::fromKeyValue($v);
            }, $value));
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
