<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetStoreCategoryUpdateStatusRequestType
 *
 * This call is used to retrieve the status of an eBay Store Category hierarchy change that was made with a <b>SetStoreCategories</b> call.
 * XSD Type: GetStoreCategoryUpdateStatusRequestType
 */
class GetStoreCategoryUpdateStatusRequestType extends AbstractRequestType
{

    /**
     * The unique identifier of an eBay Store Category hierarchy change task. A <b>TaskID</b> value is returned in the response of a successful <b>SetStoreCategories</b> call.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> Depending on the breadth of changes being made to an eBay Store Category hierarchy, it is is possible that the <b>SetStoreCategories</b> call will complete the task simultaneously with the call response. A seller will know if an eBay Store Category hierarchy task was completed simultaneously if the <b>TaskID</b> value is returned as <code>0</code>, and the <b>Status</b> field is returned with a value of <code>Complete</code>. If the task was not completely simultaneously, the <b>TaskID</b> value will be a positive integer, and the <b>Status</b> field will show a value of <code>InProgress</code> or <code>Pending</code>.
     *  </span>
     *
     * @var int $taskID
     */
    private $taskID = null;

    /**
     * Gets as taskID
     *
     * The unique identifier of an eBay Store Category hierarchy change task. A <b>TaskID</b> value is returned in the response of a successful <b>SetStoreCategories</b> call.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> Depending on the breadth of changes being made to an eBay Store Category hierarchy, it is is possible that the <b>SetStoreCategories</b> call will complete the task simultaneously with the call response. A seller will know if an eBay Store Category hierarchy task was completed simultaneously if the <b>TaskID</b> value is returned as <code>0</code>, and the <b>Status</b> field is returned with a value of <code>Complete</code>. If the task was not completely simultaneously, the <b>TaskID</b> value will be a positive integer, and the <b>Status</b> field will show a value of <code>InProgress</code> or <code>Pending</code>.
     *  </span>
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
     * The unique identifier of an eBay Store Category hierarchy change task. A <b>TaskID</b> value is returned in the response of a successful <b>SetStoreCategories</b> call.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> Depending on the breadth of changes being made to an eBay Store Category hierarchy, it is is possible that the <b>SetStoreCategories</b> call will complete the task simultaneously with the call response. A seller will know if an eBay Store Category hierarchy task was completed simultaneously if the <b>TaskID</b> value is returned as <code>0</code>, and the <b>Status</b> field is returned with a value of <code>Complete</code>. If the task was not completely simultaneously, the <b>TaskID</b> value will be a positive integer, and the <b>Status</b> field will show a value of <code>InProgress</code> or <code>Pending</code>.
     *  </span>
     *
     * @param int $taskID
     * @return self
     */
    public function setTaskID($taskID)
    {
        $this->taskID = $taskID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getTaskID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TaskID", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TaskID');
        if (null !== $value) {
            $this->setTaskID($value);
        }
    }
}
