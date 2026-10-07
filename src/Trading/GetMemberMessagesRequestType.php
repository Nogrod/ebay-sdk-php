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
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
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
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
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
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
     *
     * @param string $senderID
     * @return self
     */
    public function setSenderID($senderID)
    {
        $this->senderID = $senderID;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->itemID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ItemID', null, (string) $value);
        }
        $value = $this->mailMessageType;
        if (null !== $value) {
            $writer->writeElementNs(null, 'MailMessageType', null, (string) $value);
        }
        $value = $this->messageStatus;
        if (null !== $value) {
            $writer->writeElementNs(null, 'MessageStatus', null, (string) $value);
        }
        $value = $this->displayToPublic;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DisplayToPublic', null, ($value ? 'true' : 'false'));
        }
        $value = $this->startCreationTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'StartCreationTime', null, Func::formatDateTime($value));
        }
        $value = $this->endCreationTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'EndCreationTime', null, Func::formatDateTime($value));
        }
        $value = $this->pagination;
        if (null !== $value) {
            $writer->startElementNs(null, 'Pagination', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->memberMessageID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'MemberMessageID', null, (string) $value);
        }
        $value = $this->senderID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'SenderID', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\GetMemberMessagesRequestType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return parent::xmlReadAttribute($reader);
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'ItemID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->itemID = $value;
                    }
                    return true;
                case 'MailMessageType':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->mailMessageType = $value;
                    }
                    return true;
                case 'MessageStatus':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->messageStatus = $value;
                    }
                    return true;
                case 'DisplayToPublic':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->displayToPublic = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'StartCreationTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->startCreationTime = new \DateTime($value);
                    }
                    return true;
                case 'EndCreationTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->endCreationTime = new \DateTime($value);
                    }
                    return true;
                case 'Pagination':
                    $this->pagination = \Nogrod\eBaySDK\Trading\PaginationType::xmlRead($reader);
                    return true;
                case 'MemberMessageID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->memberMessageID = $value;
                    }
                    return true;
                case 'SenderID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->senderID = $value;
                    }
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }
}
