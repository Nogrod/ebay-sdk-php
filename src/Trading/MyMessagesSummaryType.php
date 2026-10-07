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
class MyMessagesSummaryType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
        if (!is_array($this->folderSummary)) {
            throw new \LogicException('folderSummary is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\MyMessagesFolderSummaryType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\MyMessagesFolderSummaryType> $folderSummary
     * @return self
     */
    public function setFolderSummary(iterable $folderSummary)
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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->folderSummary;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'FolderSummary', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
        $value = $this->newMessageCount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'NewMessageCount', null, (string) $value);
        }
        $value = $this->flaggedMessageCount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'FlaggedMessageCount', null, (string) $value);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\MyMessagesSummaryType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->folderSummary = [];
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
                case 'FolderSummary':
                    $this->folderSummary[] = \Nogrod\eBaySDK\Trading\MyMessagesFolderSummaryType::xmlRead($reader);
                    return true;
                case 'NewMessageCount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->newMessageCount = (int) $value;
                    }
                    return true;
                case 'FlaggedMessageCount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->flaggedMessageCount = (int) $value;
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

    protected function jsonProperties(): array
    {
        $data = [];
        $data['FolderSummary'] = Func::jsonList($this->folderSummary);
        $data['NewMessageCount'] = $this->newMessageCount;
        $data['FlaggedMessageCount'] = $this->flaggedMessageCount;
        $data['TotalMessageCount'] = $this->totalMessageCount;
        $data['NewHighPriorityCount'] = $this->newHighPriorityCount;
        $data['TotalHighPriorityCount'] = $this->totalHighPriorityCount;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
