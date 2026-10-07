<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetMyMessagesRequestType
 *
 * Retrieves information about the messages sent to a given user.
 * XSD Type: GetMyMessagesRequestType
 */
class GetMyMessagesRequestType extends AbstractRequestType
{
    /**
     * This container can be used to retrieve one or more specific messages identified with their unique <b>MessageID</b> values. Up to 10 <b>MessageID</b> values can be specified with one call.
     *
     * @var string[] $messageIDs
     */
    private $messageIDs = null;

    /**
     * A unique identifier for a My Messages folder. If a <b>FolderID</b> value is provided,
     *  only messages from the specified folder are returned in the response.
     *
     * @var int $folderID
     */
    private $folderID = null;

    /**
     * The beginning of the date-range filter.
     *  Filtering takes into account the entire timestamp of when messages were sent.
     *  Messages expire after one year.
     *
     * @var \DateTime $startTime
     */
    private $startTime = null;

    /**
     * The end of the date-range filter. See StartTime
     *  (which is the beginning of the date-range filter).
     *
     * @var \DateTime $endTime
     */
    private $endTime = null;

    /**
     * This field is currently available on the US site. A container for IDs that
     *  uniquely identify messages for a given user. If provided at the time of message
     *  creation, this ID can be used to retrieve messages and will take precedence
     *  over message ID.
     *
     * @var string[] $externalMessageIDs
     */
    private $externalMessageIDs = null;

    /**
     * Specifies how to create virtual pages in the returned list (such as total
     *  number of entries and total number of pages to return).
     *  Default value for <b>EntriesPerPage</b> with <b>GetMyMessages</b> is 25.
     *
     * @var \Nogrod\eBaySDK\Trading\PaginationType $pagination
     */
    private $pagination = null;

    /**
     * If this field is included in the request and set to <code>true</code>, only High Priority messages are returned in the response.
     *
     * @var bool $includeHighPriorityMessageOnly
     */
    private $includeHighPriorityMessageOnly = null;

    /**
     * Adds as messageID
     *
     * This container can be used to retrieve one or more specific messages identified with their unique <b>MessageID</b> values. Up to 10 <b>MessageID</b> values can be specified with one call.
     *
     * @return self
     * @param string $messageID
     */
    public function addToMessageIDs($messageID)
    {
        if (!is_array($this->messageIDs)) {
            throw new \LogicException('messageIDs is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->messageIDs[] = $messageID;
        return $this;
    }

    /**
     * isset messageIDs
     *
     * This container can be used to retrieve one or more specific messages identified with their unique <b>MessageID</b> values. Up to 10 <b>MessageID</b> values can be specified with one call.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMessageIDs($index)
    {
        return isset($this->messageIDs[$index]);
    }

    /**
     * unset messageIDs
     *
     * This container can be used to retrieve one or more specific messages identified with their unique <b>MessageID</b> values. Up to 10 <b>MessageID</b> values can be specified with one call.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMessageIDs($index)
    {
        unset($this->messageIDs[$index]);
    }

    /**
     * Gets as messageIDs
     *
     * This container can be used to retrieve one or more specific messages identified with their unique <b>MessageID</b> values. Up to 10 <b>MessageID</b> values can be specified with one call.
     *
     * @return iterable<string>
     */
    public function getMessageIDs()
    {
        return $this->messageIDs;
    }

    /**
     * Sets a new messageIDs
     *
     * This container can be used to retrieve one or more specific messages identified with their unique <b>MessageID</b> values. Up to 10 <b>MessageID</b> values can be specified with one call.
     *
     * @param string $messageIDs
     * @return self
     */
    public function setMessageIDs(iterable $messageIDs)
    {
        $this->messageIDs = $messageIDs;
        return $this;
    }

    /**
     * Gets as folderID
     *
     * A unique identifier for a My Messages folder. If a <b>FolderID</b> value is provided,
     *  only messages from the specified folder are returned in the response.
     *
     * @return int
     */
    public function getFolderID()
    {
        return $this->folderID;
    }

    /**
     * Sets a new folderID
     *
     * A unique identifier for a My Messages folder. If a <b>FolderID</b> value is provided,
     *  only messages from the specified folder are returned in the response.
     *
     * @param int $folderID
     * @return self
     */
    public function setFolderID($folderID)
    {
        $this->folderID = $folderID;
        return $this;
    }

    /**
     * Gets as startTime
     *
     * The beginning of the date-range filter.
     *  Filtering takes into account the entire timestamp of when messages were sent.
     *  Messages expire after one year.
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Sets a new startTime
     *
     * The beginning of the date-range filter.
     *  Filtering takes into account the entire timestamp of when messages were sent.
     *  Messages expire after one year.
     *
     * @param \DateTime $startTime
     * @return self
     */
    public function setStartTime(\DateTime $startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * Gets as endTime
     *
     * The end of the date-range filter. See StartTime
     *  (which is the beginning of the date-range filter).
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Sets a new endTime
     *
     * The end of the date-range filter. See StartTime
     *  (which is the beginning of the date-range filter).
     *
     * @param \DateTime $endTime
     * @return self
     */
    public function setEndTime(\DateTime $endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * Adds as externalMessageID
     *
     * This field is currently available on the US site. A container for IDs that
     *  uniquely identify messages for a given user. If provided at the time of message
     *  creation, this ID can be used to retrieve messages and will take precedence
     *  over message ID.
     *
     * @return self
     * @param string $externalMessageID
     */
    public function addToExternalMessageIDs($externalMessageID)
    {
        if (!is_array($this->externalMessageIDs)) {
            throw new \LogicException('externalMessageIDs is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->externalMessageIDs[] = $externalMessageID;
        return $this;
    }

    /**
     * isset externalMessageIDs
     *
     * This field is currently available on the US site. A container for IDs that
     *  uniquely identify messages for a given user. If provided at the time of message
     *  creation, this ID can be used to retrieve messages and will take precedence
     *  over message ID.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExternalMessageIDs($index)
    {
        return isset($this->externalMessageIDs[$index]);
    }

    /**
     * unset externalMessageIDs
     *
     * This field is currently available on the US site. A container for IDs that
     *  uniquely identify messages for a given user. If provided at the time of message
     *  creation, this ID can be used to retrieve messages and will take precedence
     *  over message ID.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExternalMessageIDs($index)
    {
        unset($this->externalMessageIDs[$index]);
    }

    /**
     * Gets as externalMessageIDs
     *
     * This field is currently available on the US site. A container for IDs that
     *  uniquely identify messages for a given user. If provided at the time of message
     *  creation, this ID can be used to retrieve messages and will take precedence
     *  over message ID.
     *
     * @return iterable<string>
     */
    public function getExternalMessageIDs()
    {
        return $this->externalMessageIDs;
    }

    /**
     * Sets a new externalMessageIDs
     *
     * This field is currently available on the US site. A container for IDs that
     *  uniquely identify messages for a given user. If provided at the time of message
     *  creation, this ID can be used to retrieve messages and will take precedence
     *  over message ID.
     *
     * @param string $externalMessageIDs
     * @return self
     */
    public function setExternalMessageIDs(iterable $externalMessageIDs)
    {
        $this->externalMessageIDs = $externalMessageIDs;
        return $this;
    }

    /**
     * Gets as pagination
     *
     * Specifies how to create virtual pages in the returned list (such as total
     *  number of entries and total number of pages to return).
     *  Default value for <b>EntriesPerPage</b> with <b>GetMyMessages</b> is 25.
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
     * Specifies how to create virtual pages in the returned list (such as total
     *  number of entries and total number of pages to return).
     *  Default value for <b>EntriesPerPage</b> with <b>GetMyMessages</b> is 25.
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
     * Gets as includeHighPriorityMessageOnly
     *
     * If this field is included in the request and set to <code>true</code>, only High Priority messages are returned in the response.
     *
     * @return bool
     */
    public function getIncludeHighPriorityMessageOnly()
    {
        return $this->includeHighPriorityMessageOnly;
    }

    /**
     * Sets a new includeHighPriorityMessageOnly
     *
     * If this field is included in the request and set to <code>true</code>, only High Priority messages are returned in the response.
     *
     * @param bool $includeHighPriorityMessageOnly
     * @return self
     */
    public function setIncludeHighPriorityMessageOnly($includeHighPriorityMessageOnly)
    {
        $this->includeHighPriorityMessageOnly = $includeHighPriorityMessageOnly;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->messageIDs;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'MessageIDs', null);
                    $open = true;
                }
                $writer->writeElementNs(null, 'MessageID', null, (string) $v);
            }
            if ($open) {
                $writer->endElement();
            }
        }
        $value = $this->folderID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'FolderID', null, (string) $value);
        }
        $value = $this->startTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'StartTime', null, Func::formatDateTime($value));
        }
        $value = $this->endTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'EndTime', null, Func::formatDateTime($value));
        }
        $value = $this->externalMessageIDs;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'ExternalMessageIDs', null);
                    $open = true;
                }
                $writer->writeElementNs(null, 'ExternalMessageID', null, (string) $v);
            }
            if ($open) {
                $writer->endElement();
            }
        }
        $value = $this->pagination;
        if (null !== $value) {
            $writer->startElementNs(null, 'Pagination', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->includeHighPriorityMessageOnly;
        if (null !== $value) {
            $writer->writeElementNs(null, 'IncludeHighPriorityMessageOnly', null, ($value ? 'true' : 'false'));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\GetMyMessagesRequestType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
        $this->messageIDs = [];
        $this->externalMessageIDs = [];
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
                case 'MessageIDs':
                    $this->messageIDs = Func::readList($reader, 'MessageID', 'urn:ebay:apis:eBLBaseComponents', static function (\XMLReader $reader) {
                        $value = Func::readText($reader);
                        return '' !== $value ? $value : null;
                    });
                    return true;
                case 'FolderID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->folderID = (int) $value;
                    }
                    return true;
                case 'StartTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->startTime = new \DateTime($value);
                    }
                    return true;
                case 'EndTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->endTime = new \DateTime($value);
                    }
                    return true;
                case 'ExternalMessageIDs':
                    $this->externalMessageIDs = Func::readList($reader, 'ExternalMessageID', 'urn:ebay:apis:eBLBaseComponents', static function (\XMLReader $reader) {
                        $value = Func::readText($reader);
                        return '' !== $value ? $value : null;
                    });
                    return true;
                case 'Pagination':
                    $this->pagination = \Nogrod\eBaySDK\Trading\PaginationType::xmlRead($reader);
                    return true;
                case 'IncludeHighPriorityMessageOnly':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->includeHighPriorityMessageOnly = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }
}
