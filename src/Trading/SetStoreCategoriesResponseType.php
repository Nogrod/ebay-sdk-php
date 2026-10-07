<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SetStoreCategoriesResponseType
 *
 * Base response of the <b>SetStoreCategories</b> call. Returns the status of the eBay Store category changes.
 * XSD Type: SetStoreCategoriesResponseType
 */
class SetStoreCategoriesResponseType extends AbstractResponseType
{
    /**
     * The task ID associated with the category structure change request. For a
     *  simple change, the <b>SetStoreCategories</b> call is processed synchronously.
     *  That is, simple changes are made immediately and then the response is
     *  returned. For synchronous processing, the task ID in the response is 0.
     *  If the category structure changes affect many listings, the changes will
     *  be processed asynchronously and the task ID will be a positive number.
     *  Use the non-zero task ID with <b>GetStoreCategoryUpdateStatus</b> to monitor
     *  the status of asynchronously processed changes.
     *
     * @var int $taskID
     */
    private $taskID = null;

    /**
     * When an eBay Store category structure change is processed synchronously, the status
     *  is returned as 'Complete' or 'Failed'. For asynchronously processed changes,
     *  the status is reported as 'InProgress' or 'Pending'. Use <b>GetStoreCategoryUpdateStatus</b> to
     *  monitor the status of asynchronously processed changes.
     *
     * @var string $status
     */
    private $status = null;

    /**
     * Contains hierarchy data for eBay Store categories that you have created/modified.
     *
     * @var \Nogrod\eBaySDK\Trading\StoreCustomCategoryType[] $customCategory
     */
    private $customCategory = null;

    /**
     * Gets as taskID
     *
     * The task ID associated with the category structure change request. For a
     *  simple change, the <b>SetStoreCategories</b> call is processed synchronously.
     *  That is, simple changes are made immediately and then the response is
     *  returned. For synchronous processing, the task ID in the response is 0.
     *  If the category structure changes affect many listings, the changes will
     *  be processed asynchronously and the task ID will be a positive number.
     *  Use the non-zero task ID with <b>GetStoreCategoryUpdateStatus</b> to monitor
     *  the status of asynchronously processed changes.
     *
     * @return int
     */
    public function getTaskID()
    {
        return $this->taskID;
    }

    /**
     * Sets a new taskID
     *
     * The task ID associated with the category structure change request. For a
     *  simple change, the <b>SetStoreCategories</b> call is processed synchronously.
     *  That is, simple changes are made immediately and then the response is
     *  returned. For synchronous processing, the task ID in the response is 0.
     *  If the category structure changes affect many listings, the changes will
     *  be processed asynchronously and the task ID will be a positive number.
     *  Use the non-zero task ID with <b>GetStoreCategoryUpdateStatus</b> to monitor
     *  the status of asynchronously processed changes.
     *
     * @param int $taskID
     * @return self
     */
    public function setTaskID($taskID)
    {
        $this->taskID = $taskID;
        return $this;
    }

    /**
     * Gets as status
     *
     * When an eBay Store category structure change is processed synchronously, the status
     *  is returned as 'Complete' or 'Failed'. For asynchronously processed changes,
     *  the status is reported as 'InProgress' or 'Pending'. Use <b>GetStoreCategoryUpdateStatus</b> to
     *  monitor the status of asynchronously processed changes.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * When an eBay Store category structure change is processed synchronously, the status
     *  is returned as 'Complete' or 'Failed'. For asynchronously processed changes,
     *  the status is reported as 'InProgress' or 'Pending'. Use <b>GetStoreCategoryUpdateStatus</b> to
     *  monitor the status of asynchronously processed changes.
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Adds as customCategory
     *
     * Contains hierarchy data for eBay Store categories that you have created/modified.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\StoreCustomCategoryType $customCategory
     */
    public function addToCustomCategory(\Nogrod\eBaySDK\Trading\StoreCustomCategoryType $customCategory)
    {
        if (!is_array($this->customCategory)) {
            throw new \LogicException('customCategory is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->customCategory[] = $customCategory;
        return $this;
    }

    /**
     * isset customCategory
     *
     * Contains hierarchy data for eBay Store categories that you have created/modified.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCustomCategory($index)
    {
        return isset($this->customCategory[$index]);
    }

    /**
     * unset customCategory
     *
     * Contains hierarchy data for eBay Store categories that you have created/modified.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCustomCategory($index)
    {
        unset($this->customCategory[$index]);
    }

    /**
     * Gets as customCategory
     *
     * Contains hierarchy data for eBay Store categories that you have created/modified.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\StoreCustomCategoryType>
     */
    public function getCustomCategory()
    {
        return $this->customCategory;
    }

    /**
     * Sets a new customCategory
     *
     * Contains hierarchy data for eBay Store categories that you have created/modified.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\StoreCustomCategoryType> $customCategory
     * @return self
     */
    public function setCustomCategory(iterable $customCategory)
    {
        $this->customCategory = $customCategory;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->taskID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'TaskID', null, (string) $value);
        }
        $value = $this->status;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Status', null, (string) $value);
        }
        $value = $this->customCategory;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'CustomCategory', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'CustomCategory', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\SetStoreCategoriesResponseType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
        $this->customCategory = [];
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
                case 'TaskID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->taskID = (int) $value;
                    }
                    return true;
                case 'Status':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->status = $value;
                    }
                    return true;
                case 'CustomCategory':
                    $this->customCategory = Func::readList($reader, 'CustomCategory', 'urn:ebay:apis:eBLBaseComponents', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\Trading\StoreCustomCategoryType::xmlRead($reader));
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }
}
