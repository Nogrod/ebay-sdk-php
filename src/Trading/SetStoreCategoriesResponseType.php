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
     * @return \Nogrod\eBaySDK\Trading\StoreCustomCategoryType[]
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
     * @param \Nogrod\eBaySDK\Trading\StoreCustomCategoryType[] $customCategory
     * @return self
     */
    public function setCustomCategory(array $customCategory)
    {
        $this->customCategory = $customCategory;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getTaskID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TaskID", $value);
        }
        $value = $this->getStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Status", $value);
        }
        $value = $this->getCustomCategory();
        if (null !== $value && [] !== $this->getCustomCategory()) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CustomCategory", array_map(function ($v) {return ["CustomCategory" => $v];}, $value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\SetStoreCategoriesResponseType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        parent::setKeyValue($keyValue);
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}TaskID');
        if (null !== $value) {
            $this->setTaskID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}Status');
        if (null !== $value) {
            $this->setStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CustomCategory');
        if (null !== $value) {
            $this->setCustomCategory(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\StoreCustomCategoryType::fromKeyValue(Func::mapObject($v, '{urn:ebay:apis:eBLBaseComponents}CustomCategory'));}, $value));
        }
    }
}
