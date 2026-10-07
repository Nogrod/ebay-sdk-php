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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->folderID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'FolderID', null, (string) $value);
        }
        $value = $this->folderName;
        if (null !== $value) {
            $writer->writeElementNs(null, 'FolderName', null, (string) $value);
        }
        $value = $this->newMessageCount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'NewMessageCount', null, (string) $value);
        }
        $value = $this->totalMessageCount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'TotalMessageCount', null, (string) $value);
        }
        $value = $this->newHighPriorityCount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'NewHighPriorityCount', null, (string) $value);
        }
        $value = $this->totalHighPriorityCount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'TotalHighPriorityCount', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\MyMessagesFolderSummaryType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
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
                case 'FolderID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->folderID = (int) $value;
                    }
                    return true;
                case 'FolderName':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->folderName = $value;
                    }
                    return true;
                case 'NewMessageCount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->newMessageCount = (int) $value;
                    }
                    return true;
                case 'TotalMessageCount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->totalMessageCount = (int) $value;
                    }
                    return true;
                case 'NewHighPriorityCount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->newHighPriorityCount = (int) $value;
                    }
                    return true;
                case 'TotalHighPriorityCount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->totalHighPriorityCount = (int) $value;
                    }
                    return true;
            }
        }
        return false;
    }
}
