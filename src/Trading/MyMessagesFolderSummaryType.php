<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MyMessagesFolderSummaryType
 *
 * Summary details for a specified My Messages folder.
 * XSD Type: MyMessagesFolderSummaryType
 */
class MyMessagesFolderSummaryType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * An ID that uniquely identifies a My Messages
     *  folder. Always returned for detail level
     *  ReturnSummary.
     *
     * @var int $folderID
     */
    private $folderID = null;

    /**
     * The name of a specified My Messages folder. For
     *  GetMyMessages, Inbox (FolderID = 0) and Sent (FolderID = 1)
     *  are not returned.
     *
     * @var string $folderName
     */
    private $folderName = null;

    /**
     * The number of new messages in a given folder.
     *  Always returned for detail level ReturnSummary.
     *
     * @var int $newMessageCount
     */
    private $newMessageCount = null;

    /**
     * The total number of messages in a given
     *  folder. Always returned for detail level
     *  ReturnSummary.
     *
     * @var int $totalMessageCount
     */
    private $totalMessageCount = null;

    /**
     * The total number of new high priority messages that a given user has.
     *
     * @var int $newHighPriorityCount
     */
    private $newHighPriorityCount = null;

    /**
     * The total number of high priority messages that a given user has.
     *
     * @var int $totalHighPriorityCount
     */
    private $totalHighPriorityCount = null;

    /**
     * Gets as folderID
     *
     * An ID that uniquely identifies a My Messages
     *  folder. Always returned for detail level
     *  ReturnSummary.
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
     * An ID that uniquely identifies a My Messages
     *  folder. Always returned for detail level
     *  ReturnSummary.
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
     * Gets as folderName
     *
     * The name of a specified My Messages folder. For
     *  GetMyMessages, Inbox (FolderID = 0) and Sent (FolderID = 1)
     *  are not returned.
     *
     * @return string
     */
    public function getFolderName()
    {
        return $this->folderName;
    }

    /**
     * Sets a new folderName
     *
     * The name of a specified My Messages folder. For
     *  GetMyMessages, Inbox (FolderID = 0) and Sent (FolderID = 1)
     *  are not returned.
     *
     * @param string $folderName
     * @return self
     */
    public function setFolderName($folderName)
    {
        $this->folderName = $folderName;
        return $this;
    }

    /**
     * Gets as newMessageCount
     *
     * The number of new messages in a given folder.
     *  Always returned for detail level ReturnSummary.
     *
     * @return int
     */
    public function getNewMessageCount()
    {
        return $this->newMessageCount;
    }

    /**
     * Sets a new newMessageCount
     *
     * The number of new messages in a given folder.
     *  Always returned for detail level ReturnSummary.
     *
     * @param int $newMessageCount
     * @return self
     */
    public function setNewMessageCount($newMessageCount)
    {
        $this->newMessageCount = $newMessageCount;
        return $this;
    }

    /**
     * Gets as totalMessageCount
     *
     * The total number of messages in a given
     *  folder. Always returned for detail level
     *  ReturnSummary.
     *
     * @return int
     */
    public function getTotalMessageCount()
    {
        return $this->totalMessageCount;
    }

    /**
     * Sets a new totalMessageCount
     *
     * The total number of messages in a given
     *  folder. Always returned for detail level
     *  ReturnSummary.
     *
     * @param int $totalMessageCount
     * @return self
     */
    public function setTotalMessageCount($totalMessageCount)
    {
        $this->totalMessageCount = $totalMessageCount;
        return $this;
    }

    /**
     * Gets as newHighPriorityCount
     *
     * The total number of new high priority messages that a given user has.
     *
     * @return int
     */
    public function getNewHighPriorityCount()
    {
        return $this->newHighPriorityCount;
    }

    /**
     * Sets a new newHighPriorityCount
     *
     * The total number of new high priority messages that a given user has.
     *
     * @param int $newHighPriorityCount
     * @return self
     */
    public function setNewHighPriorityCount($newHighPriorityCount)
    {
        $this->newHighPriorityCount = $newHighPriorityCount;
        return $this;
    }

    /**
     * Gets as totalHighPriorityCount
     *
     * The total number of high priority messages that a given user has.
     *
     * @return int
     */
    public function getTotalHighPriorityCount()
    {
        return $this->totalHighPriorityCount;
    }

    /**
     * Sets a new totalHighPriorityCount
     *
     * The total number of high priority messages that a given user has.
     *
     * @param int $totalHighPriorityCount
     * @return self
     */
    public function setTotalHighPriorityCount($totalHighPriorityCount)
    {
        $this->totalHighPriorityCount = $totalHighPriorityCount;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getFolderID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FolderID", $value);
        }
        $value = $this->getFolderName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FolderName", $value);
        }
        $value = $this->getNewMessageCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NewMessageCount", $value);
        }
        $value = $this->getTotalMessageCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalMessageCount", $value);
        }
        $value = $this->getNewHighPriorityCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NewHighPriorityCount", $value);
        }
        $value = $this->getTotalHighPriorityCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalHighPriorityCount", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\MyMessagesFolderSummaryType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}FolderID');
        if (null !== $value) {
            $this->setFolderID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}FolderName');
        if (null !== $value) {
            $this->setFolderName($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}NewMessageCount');
        if (null !== $value) {
            $this->setNewMessageCount($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalMessageCount');
        if (null !== $value) {
            $this->setTotalMessageCount($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}NewHighPriorityCount');
        if (null !== $value) {
            $this->setNewHighPriorityCount($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalHighPriorityCount');
        if (null !== $value) {
            $this->setTotalHighPriorityCount($value);
        }
    }
}
