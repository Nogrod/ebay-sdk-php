<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MyMessagesSummaryType
 *
 * Summary data for a given user's alerts and messages.
 *  This includes the numbers of new alerts and messages,
 *  unresolved alerts, flagged messages, and total alerts
 *  and messages.
 * XSD Type: MyMessagesSummaryType
 */
class MyMessagesSummaryType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Folder summary for each folder. Always
     *  returned for detail level ReturnSummary.
     *
     * @var \Nogrod\eBaySDK\Trading\MyMessagesFolderSummaryType[] $folderSummary
     */
    private $folderSummary = [

    ];

    /**
     * The number of new messages that a given user has. Always returned for detail level ReturnSummary.
     *
     * @var int $newMessageCount
     */
    private $newMessageCount = null;

    /**
     * The number of messages that have been flagged.
     *  Always returned for detail level ReturnSummary.
     *
     * @var int $flaggedMessageCount
     */
    private $flaggedMessageCount = null;

    /**
     * The total number of messages for a given user.
     *  Always returned for detail level ReturnSummary.
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
     * Adds as folderSummary
     *
     * Folder summary for each folder. Always
     *  returned for detail level ReturnSummary.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\MyMessagesFolderSummaryType $folderSummary
     */
    public function addToFolderSummary(\Nogrod\eBaySDK\Trading\MyMessagesFolderSummaryType $folderSummary)
    {
        $this->folderSummary[] = $folderSummary;
        return $this;
    }

    /**
     * isset folderSummary
     *
     * Folder summary for each folder. Always
     *  returned for detail level ReturnSummary.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFolderSummary($index)
    {
        return isset($this->folderSummary[$index]);
    }

    /**
     * unset folderSummary
     *
     * Folder summary for each folder. Always
     *  returned for detail level ReturnSummary.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFolderSummary($index)
    {
        unset($this->folderSummary[$index]);
    }

    /**
     * Gets as folderSummary
     *
     * Folder summary for each folder. Always
     *  returned for detail level ReturnSummary.
     *
     * @return \Nogrod\eBaySDK\Trading\MyMessagesFolderSummaryType[]
     */
    public function getFolderSummary()
    {
        return $this->folderSummary;
    }

    /**
     * Sets a new folderSummary
     *
     * Folder summary for each folder. Always
     *  returned for detail level ReturnSummary.
     *
     * @param \Nogrod\eBaySDK\Trading\MyMessagesFolderSummaryType[] $folderSummary
     * @return self
     */
    public function setFolderSummary(array $folderSummary)
    {
        $this->folderSummary = $folderSummary;
        return $this;
    }

    /**
     * Gets as newMessageCount
     *
     * The number of new messages that a given user has. Always returned for detail level ReturnSummary.
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
     * The number of new messages that a given user has. Always returned for detail level ReturnSummary.
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
     * Gets as flaggedMessageCount
     *
     * The number of messages that have been flagged.
     *  Always returned for detail level ReturnSummary.
     *
     * @return int
     */
    public function getFlaggedMessageCount()
    {
        return $this->flaggedMessageCount;
    }

    /**
     * Sets a new flaggedMessageCount
     *
     * The number of messages that have been flagged.
     *  Always returned for detail level ReturnSummary.
     *
     * @param int $flaggedMessageCount
     * @return self
     */
    public function setFlaggedMessageCount($flaggedMessageCount)
    {
        $this->flaggedMessageCount = $flaggedMessageCount;
        return $this;
    }

    /**
     * Gets as totalMessageCount
     *
     * The total number of messages for a given user.
     *  Always returned for detail level ReturnSummary.
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
     * The total number of messages for a given user.
     *  Always returned for detail level ReturnSummary.
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
        $value = $this->getFolderSummary();
        if (null !== $value && [] !== $this->getFolderSummary()) {
            $writer->write(array_map(function ($v) {return ["FolderSummary" => $v];}, $value));
        }
        $value = $this->getNewMessageCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NewMessageCount", $value);
        }
        $value = $this->getFlaggedMessageCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FlaggedMessageCount", $value);
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

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\MyMessagesSummaryType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FolderSummary');
        if (null !== $value) {
            $this->setFolderSummary(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\MyMessagesFolderSummaryType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}NewMessageCount');
        if (null !== $value) {
            $this->setNewMessageCount($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}FlaggedMessageCount');
        if (null !== $value) {
            $this->setFlaggedMessageCount($value);
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
