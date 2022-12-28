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
     * This container is deprecated.
     *
     * @var string[] $alertIDs
     */
    private $alertIDs = null;

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
     * Adds as alertID
     *
     * This container is deprecated.
     *
     * @return self
     * @param string $alertID
     */
    public function addToAlertIDs($alertID)
    {
        $this->alertIDs[] = $alertID;
        return $this;
    }

    /**
     * isset alertIDs
     *
     * This container is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAlertIDs($index)
    {
        return isset($this->alertIDs[$index]);
    }

    /**
     * unset alertIDs
     *
     * This container is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAlertIDs($index)
    {
        unset($this->alertIDs[$index]);
    }

    /**
     * Gets as alertIDs
     *
     * This container is deprecated.
     *
     * @return string[]
     */
    public function getAlertIDs()
    {
        return $this->alertIDs;
    }

    /**
     * Sets a new alertIDs
     *
     * This container is deprecated.
     *
     * @param string $alertIDs
     * @return self
     */
    public function setAlertIDs(array $alertIDs)
    {
        $this->alertIDs = $alertIDs;
        return $this;
    }

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
     * @return string[]
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
    public function setMessageIDs(array $messageIDs)
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
     * @return string[]
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
    public function setExternalMessageIDs(array $externalMessageIDs)
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getAlertIDs();
        if (null !== $value && !empty($this->getAlertIDs())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AlertIDs", array_map(function ($v) {
                return ["AlertID" => $v];
            }, $value));
        }
        $value = $this->getMessageIDs();
        if (null !== $value && !empty($this->getMessageIDs())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MessageIDs", array_map(function ($v) {
                return ["MessageID" => $v];
            }, $value));
        }
        $value = $this->getFolderID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FolderID", $value);
        }
        $value = $this->getStartTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StartTime", $value);
        }
        $value = $this->getEndTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EndTime", $value);
        }
        $value = $this->getExternalMessageIDs();
        if (null !== $value && !empty($this->getExternalMessageIDs())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExternalMessageIDs", array_map(function ($v) {
                return ["ExternalMessageID" => $v];
            }, $value));
        }
        $value = $this->getPagination();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Pagination", $value);
        }
        $value = $this->getIncludeHighPriorityMessageOnly();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IncludeHighPriorityMessageOnly", $value);
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
        parent::setKeyValue($keyValue);
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AlertIDs', true);
        if (null !== $value && !empty($value)) {
            $this->setAlertIDs($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MessageIDs', true);
        if (null !== $value && !empty($value)) {
            $this->setMessageIDs($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FolderID');
        if (null !== $value) {
            $this->setFolderID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StartTime');
        if (null !== $value) {
            $this->setStartTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EndTime');
        if (null !== $value) {
            $this->setEndTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExternalMessageIDs', true);
        if (null !== $value && !empty($value)) {
            $this->setExternalMessageIDs($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Pagination');
        if (null !== $value) {
            $this->setPagination(\Nogrod\eBaySDK\Trading\PaginationType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IncludeHighPriorityMessageOnly');
        if (null !== $value) {
            $this->setIncludeHighPriorityMessageOnly($value);
        }
    }
}
