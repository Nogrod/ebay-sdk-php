<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetMemberMessagesRequestType
 *
 * Retrieves a list of the messages buyers have posted about your
 *  active item listings.
 * XSD Type: GetMemberMessagesRequestType
 */
class GetMemberMessagesRequestType extends AbstractRequestType
{
    /**
     * The unique identifier of the eBay listing for which you wish to retrieve member messages.
     *  <br><br>
     *  For <em>Ask Seller Question</em> messages, the <b>ItemID</b> and/or a date range
     *  (specified with <b>StartCreationTime</b> and <b>EndCreationTime</b> fields),
     *  are required, or the call will fail.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * This required field indicates the type of member message to retrieve. Only the following two enumeration values are allowed. The call will fail if this field is not included in the request.
     *
     * @var string $mailMessageType
     */
    private $mailMessageType = null;

    /**
     * This field allows you to retrieve only unanswered member messages or answered member messages. If this field is omitted, both answered and unanswered member messages are retrieved.
     *
     * @var string $messageStatus
     */
    private $messageStatus = null;

    /**
     * If included in the request and set to <code>true</code>, only public messages (viewable in the Item listing) are returned. If omitted or set to <code>false</code> in the request, all messages (that match other filters in the request) are returned in the response.
     *
     * @var bool $displayToPublic
     */
    private $displayToPublic = null;

    /**
     * Used as beginning of date range filter. If specified, filters the returned messages to only those with a creation date greater than or equal to the specified date and time.
     *  <br><br>
     *  For Contact eBay Member (CEM) messages, <b>StartCreationTime</b> and <b>EndCreationTime</b> must be provided.
     *  <br><br>
     *  For Ask Seller a Question (ASQ) messages, either the <b>ItemID</b>, or a date range (specified with <b>StartCreationTime</b> and <b>EndCreationTime</b>), or both must be included.
     *
     * @var \DateTime $startCreationTime
     */
    private $startCreationTime = null;

    /**
     * Used as end of date range filter. If specified, filters
     *  the returned messages to only those with a creation date
     *  less than or equal to the specified date and time.
     *  <br><br>
     *  For Contact eBay Member (CEM) messages, <b>StartCreationTime</b> and <b>EndCreationTime</b>
     *  must be provided.
     *  <br><br>
     *  For Ask Seller a Question (ASQ) messages, either the <b>ItemID</b>, or a date range
     *  (specified with <b>StartCreationTime</b> and <b>EndCreationTime</b>),
     *  or both must be included.
     *
     * @var \DateTime $endCreationTime
     */
    private $endCreationTime = null;

    /**
     * Standard pagination argument used to reduce response.
     *
     * @var \Nogrod\eBaySDK\Trading\PaginationType $pagination
     */
    private $pagination = null;

    /**
     * An ID that uniquely identifies the message for a given user to be retrieved. Used for the <b>AskSellerQuestion</b> notification only.
     *
     * @var string $memberMessageID
     */
    private $memberMessageID = null;

    /**
     * An eBay ID that uniquely identifies a user. For <b>GetMemberMessages</b>, this is the sender of the message. If included in the request, returns only messages from the specified sender.
     *
     * @var string $senderID
     */
    private $senderID = null;

    /**
     * Gets as itemID
     *
     * The unique identifier of the eBay listing for which you wish to retrieve member messages.
     *  <br><br>
     *  For <em>Ask Seller Question</em> messages, the <b>ItemID</b> and/or a date range
     *  (specified with <b>StartCreationTime</b> and <b>EndCreationTime</b> fields),
     *  are required, or the call will fail.
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
     * The unique identifier of the eBay listing for which you wish to retrieve member messages.
     *  <br><br>
     *  For <em>Ask Seller Question</em> messages, the <b>ItemID</b> and/or a date range
     *  (specified with <b>StartCreationTime</b> and <b>EndCreationTime</b> fields),
     *  are required, or the call will fail.
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
     * Gets as mailMessageType
     *
     * This required field indicates the type of member message to retrieve. Only the following two enumeration values are allowed. The call will fail if this field is not included in the request.
     *
     * @return string
     */
    public function getMailMessageType()
    {
        return $this->mailMessageType;
    }

    /**
     * Sets a new mailMessageType
     *
     * This required field indicates the type of member message to retrieve. Only the following two enumeration values are allowed. The call will fail if this field is not included in the request.
     *
     * @param string $mailMessageType
     * @return self
     */
    public function setMailMessageType($mailMessageType)
    {
        $this->mailMessageType = $mailMessageType;
        return $this;
    }

    /**
     * Gets as messageStatus
     *
     * This field allows you to retrieve only unanswered member messages or answered member messages. If this field is omitted, both answered and unanswered member messages are retrieved.
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
     * This field allows you to retrieve only unanswered member messages or answered member messages. If this field is omitted, both answered and unanswered member messages are retrieved.
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
     * Gets as displayToPublic
     *
     * If included in the request and set to <code>true</code>, only public messages (viewable in the Item listing) are returned. If omitted or set to <code>false</code> in the request, all messages (that match other filters in the request) are returned in the response.
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
     * If included in the request and set to <code>true</code>, only public messages (viewable in the Item listing) are returned. If omitted or set to <code>false</code> in the request, all messages (that match other filters in the request) are returned in the response.
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
     * Gets as startCreationTime
     *
     * Used as beginning of date range filter. If specified, filters the returned messages to only those with a creation date greater than or equal to the specified date and time.
     *  <br><br>
     *  For Contact eBay Member (CEM) messages, <b>StartCreationTime</b> and <b>EndCreationTime</b> must be provided.
     *  <br><br>
     *  For Ask Seller a Question (ASQ) messages, either the <b>ItemID</b>, or a date range (specified with <b>StartCreationTime</b> and <b>EndCreationTime</b>), or both must be included.
     *
     * @return \DateTime
     */
    public function getStartCreationTime()
    {
        return $this->startCreationTime;
    }

    /**
     * Sets a new startCreationTime
     *
     * Used as beginning of date range filter. If specified, filters the returned messages to only those with a creation date greater than or equal to the specified date and time.
     *  <br><br>
     *  For Contact eBay Member (CEM) messages, <b>StartCreationTime</b> and <b>EndCreationTime</b> must be provided.
     *  <br><br>
     *  For Ask Seller a Question (ASQ) messages, either the <b>ItemID</b>, or a date range (specified with <b>StartCreationTime</b> and <b>EndCreationTime</b>), or both must be included.
     *
     * @param \DateTime $startCreationTime
     * @return self
     */
    public function setStartCreationTime(\DateTime $startCreationTime)
    {
        $this->startCreationTime = $startCreationTime;
        return $this;
    }

    /**
     * Gets as endCreationTime
     *
     * Used as end of date range filter. If specified, filters
     *  the returned messages to only those with a creation date
     *  less than or equal to the specified date and time.
     *  <br><br>
     *  For Contact eBay Member (CEM) messages, <b>StartCreationTime</b> and <b>EndCreationTime</b>
     *  must be provided.
     *  <br><br>
     *  For Ask Seller a Question (ASQ) messages, either the <b>ItemID</b>, or a date range
     *  (specified with <b>StartCreationTime</b> and <b>EndCreationTime</b>),
     *  or both must be included.
     *
     * @return \DateTime
     */
    public function getEndCreationTime()
    {
        return $this->endCreationTime;
    }

    /**
     * Sets a new endCreationTime
     *
     * Used as end of date range filter. If specified, filters
     *  the returned messages to only those with a creation date
     *  less than or equal to the specified date and time.
     *  <br><br>
     *  For Contact eBay Member (CEM) messages, <b>StartCreationTime</b> and <b>EndCreationTime</b>
     *  must be provided.
     *  <br><br>
     *  For Ask Seller a Question (ASQ) messages, either the <b>ItemID</b>, or a date range
     *  (specified with <b>StartCreationTime</b> and <b>EndCreationTime</b>),
     *  or both must be included.
     *
     * @param \DateTime $endCreationTime
     * @return self
     */
    public function setEndCreationTime(\DateTime $endCreationTime)
    {
        $this->endCreationTime = $endCreationTime;
        return $this;
    }

    /**
     * Gets as pagination
     *
     * Standard pagination argument used to reduce response.
     *
     * @return \Nogrod\eBaySDK\Trading\PaginationType
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    /**
     * Sets a new pagination
     *
     * Standard pagination argument used to reduce response.
     *
     * @param \Nogrod\eBaySDK\Trading\PaginationType $pagination
     * @return self
     */
    public function setPagination(\Nogrod\eBaySDK\Trading\PaginationType $pagination)
    {
        $this->pagination = $pagination;
        return $this;
    }

    /**
     * Gets as memberMessageID
     *
     * An ID that uniquely identifies the message for a given user to be retrieved. Used for the <b>AskSellerQuestion</b> notification only.
     *
     * @return string
     */
    public function getMemberMessageID()
    {
        return $this->memberMessageID;
    }

    /**
     * Sets a new memberMessageID
     *
     * An ID that uniquely identifies the message for a given user to be retrieved. Used for the <b>AskSellerQuestion</b> notification only.
     *
     * @param string $memberMessageID
     * @return self
     */
    public function setMemberMessageID($memberMessageID)
    {
        $this->memberMessageID = $memberMessageID;
        return $this;
    }

    /**
     * Gets as senderID
     *
     * An eBay ID that uniquely identifies a user. For <b>GetMemberMessages</b>, this is the sender of the message. If included in the request, returns only messages from the specified sender.
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
     * An eBay ID that uniquely identifies a user. For <b>GetMemberMessages</b>, this is the sender of the message. If included in the request, returns only messages from the specified sender.
     *
     * @param string $senderID
     * @return self
     */
    public function setSenderID($senderID)
    {
        $this->senderID = $senderID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getMailMessageType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MailMessageType", $value);
        }
        $value = $this->getMessageStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MessageStatus", $value);
        }
        $value = $this->getDisplayToPublic();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisplayToPublic", $value);
        }
        $value = $this->getStartCreationTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StartCreationTime", $value);
        }
        $value = $this->getEndCreationTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EndCreationTime", $value);
        }
        $value = $this->getPagination();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Pagination", $value);
        }
        $value = $this->getMemberMessageID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MemberMessageID", $value);
        }
        $value = $this->getSenderID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SenderID", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\GetMemberMessagesRequestType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        parent::setKeyValue($keyValue);
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}MailMessageType');
        if (null !== $value) {
            $this->setMailMessageType($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}MessageStatus');
        if (null !== $value) {
            $this->setMessageStatus($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisplayToPublic');
        if (null !== $value) {
            $this->setDisplayToPublic(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}StartCreationTime');
        if (null !== $value) {
            $this->setStartCreationTime(new \DateTime($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}EndCreationTime');
        if (null !== $value) {
            $this->setEndCreationTime(new \DateTime($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}Pagination');
        if (null !== $value) {
            $this->setPagination(\Nogrod\eBaySDK\Trading\PaginationType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}MemberMessageID');
        if (null !== $value) {
            $this->setMemberMessageID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}SenderID');
        if (null !== $value) {
            $this->setSenderID($value);
        }
    }
}
