<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

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
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
     *
     * @var string $sender
     */
    private $sender = null;

    /**
     * Displayable user ID of the recipient.
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
     *
     * @var string $recipientUserID
     */
    private $recipientUserID = null;

    /**
     * Displayable name of the user or eBay
     *  application to which the message is sent. Only
     *  returned for M2M, and if a value exists.
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
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
     * @var \Nogrod\eBaySDK\Trading\MyMessagesResponseDetailsType $responseDetails
     */
    private $responseDetails = null;

    /**
     * Details relating to a My Messages folder.
     *
     * @var \Nogrod\eBaySDK\Trading\MyMessagesFolderType $folder
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
     *  details (e.g., total price and buyer/high bidder) and the transaction fees.
     *  This processing can take several minutes. If you retrieve a sold item and no
     *  details about the buyer/high bidder are returned or no transaction fees are
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
     * @var \Nogrod\eBaySDK\Trading\MessageMediaType[] $messageMedia
     */
    private $messageMedia = [

    ];

    /**
     * Gets as sender
     *
     * Display name of the eBay user that sent the message.
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
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
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
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
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
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
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
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
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
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
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
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
     * @return \Nogrod\eBaySDK\Trading\MyMessagesResponseDetailsType
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
     * @param \Nogrod\eBaySDK\Trading\MyMessagesResponseDetailsType $responseDetails
     * @return self
     */
    public function setResponseDetails(\Nogrod\eBaySDK\Trading\MyMessagesResponseDetailsType $responseDetails)
    {
        $this->responseDetails = $responseDetails;
        return $this;
    }

    /**
     * Gets as folder
     *
     * Details relating to a My Messages folder.
     *
     * @return \Nogrod\eBaySDK\Trading\MyMessagesFolderType
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
     * @param \Nogrod\eBaySDK\Trading\MyMessagesFolderType $folder
     * @return self
     */
    public function setFolder(\Nogrod\eBaySDK\Trading\MyMessagesFolderType $folder)
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
     *  details (e.g., total price and buyer/high bidder) and the transaction fees.
     *  This processing can take several minutes. If you retrieve a sold item and no
     *  details about the buyer/high bidder are returned or no transaction fees are
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
     *  details (e.g., total price and buyer/high bidder) and the transaction fees.
     *  This processing can take several minutes. If you retrieve a sold item and no
     *  details about the buyer/high bidder are returned or no transaction fees are
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
        $value = $this->sender;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Sender', null, (string) $value);
        }
        $value = $this->recipientUserID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'RecipientUserID', null, (string) $value);
        }
        $value = $this->sendToName;
        if (null !== $value) {
            $writer->writeElementNs(null, 'SendToName', null, (string) $value);
        }
        $value = $this->subject;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Subject', null, (string) $value);
        }
        $value = $this->messageID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'MessageID', null, (string) $value);
        }
        $value = $this->externalMessageID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ExternalMessageID', null, (string) $value);
        }
        $value = $this->text;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Text', null, (string) $value);
        }
        $value = $this->flagged;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Flagged', null, ($value ? 'true' : 'false'));
        }
        $value = $this->read;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Read', null, ($value ? 'true' : 'false'));
        }
        $value = $this->receiveDate;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ReceiveDate', null, Func::formatDateTime($value));
        }
        $value = $this->expirationDate;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ExpirationDate', null, Func::formatDateTime($value));
        }
        $value = $this->itemID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ItemID', null, (string) $value);
        }
        $value = $this->responseDetails;
        if (null !== $value) {
            $writer->startElementNs(null, 'ResponseDetails', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->folder;
        if (null !== $value) {
            $writer->startElementNs(null, 'Folder', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->content;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Content', null, (string) $value);
        }
        $value = $this->messageType;
        if (null !== $value) {
            $writer->writeElementNs(null, 'MessageType', null, (string) $value);
        }
        $value = $this->listingStatus;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ListingStatus', null, (string) $value);
        }
        $value = $this->questionType;
        if (null !== $value) {
            $writer->writeElementNs(null, 'QuestionType', null, (string) $value);
        }
        $value = $this->replied;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Replied', null, ($value ? 'true' : 'false'));
        }
        $value = $this->highPriority;
        if (null !== $value) {
            $writer->writeElementNs(null, 'HighPriority', null, ($value ? 'true' : 'false'));
        }
        $value = $this->itemEndTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ItemEndTime', null, Func::formatDateTime($value));
        }
        $value = $this->itemTitle;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ItemTitle', null, (string) $value);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\MyMessagesMessageType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
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
                case 'Sender':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->sender = $value;
                    }
                    return true;
                case 'RecipientUserID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->recipientUserID = $value;
                    }
                    return true;
                case 'SendToName':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->sendToName = $value;
                    }
                    return true;
                case 'Subject':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->subject = $value;
                    }
                    return true;
                case 'MessageID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->messageID = $value;
                    }
                    return true;
                case 'ExternalMessageID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->externalMessageID = $value;
                    }
                    return true;
                case 'Text':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->text = $value;
                    }
                    return true;
                case 'Flagged':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->flagged = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'Read':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->read = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'ReceiveDate':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->receiveDate = new \DateTime($value);
                    }
                    return true;
                case 'ExpirationDate':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->expirationDate = new \DateTime($value);
                    }
                    return true;
                case 'ItemID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->itemID = $value;
                    }
                    return true;
                case 'ResponseDetails':
                    $this->responseDetails = \Nogrod\eBaySDK\Trading\MyMessagesResponseDetailsType::xmlRead($reader);
                    return true;
                case 'Folder':
                    $this->folder = \Nogrod\eBaySDK\Trading\MyMessagesFolderType::xmlRead($reader);
                    return true;
                case 'Content':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->content = $value;
                    }
                    return true;
                case 'MessageType':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->messageType = $value;
                    }
                    return true;
                case 'ListingStatus':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->listingStatus = $value;
                    }
                    return true;
                case 'QuestionType':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->questionType = $value;
                    }
                    return true;
                case 'Replied':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->replied = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'HighPriority':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->highPriority = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'ItemEndTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->itemEndTime = new \DateTime($value);
                    }
                    return true;
                case 'ItemTitle':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->itemTitle = $value;
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
