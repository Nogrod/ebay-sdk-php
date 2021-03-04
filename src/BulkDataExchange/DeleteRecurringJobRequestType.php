<?php

namespace Nogrod\eBaySDK\BulkDataExchange;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DeleteRecurringJobRequestType
 *
 * Deletes the recurring job. If you only want to delete a single instance of the
 *  recurring job, use <b>abortRecurringJob</b>. If you only
 *  want to stop the recurring job, but plan to start it again later, use <b>suspendRecurringJob</b>.
 * XSD Type: DeleteRecurringJobRequest
 */
class DeleteRecurringJobRequestType extends BaseServiceRequestType
{
    /**
     * Unique ID assigned by the Bulk Data Exchange API for managing your
     *  recurring job. Use the <b>recurringJobId</b> value
     *  returned in the <b>createRecurringJob</b> response.
     *  You can also use <b>getRecurringJobs</b> to
     *  retrieve <b>recurringJobId</b> values for any recurring jobs you have created.
     *
     * @var string $recurringJobId
     */
    private $recurringJobId = null;

    /**
     * Gets as recurringJobId
     *
     * Unique ID assigned by the Bulk Data Exchange API for managing your
     *  recurring job. Use the <b>recurringJobId</b> value
     *  returned in the <b>createRecurringJob</b> response.
     *  You can also use <b>getRecurringJobs</b> to
     *  retrieve <b>recurringJobId</b> values for any recurring jobs you have created.
     *
     * @return string
     */
    public function getRecurringJobId()
    {
        return $this->recurringJobId;
    }

    /**
     * Sets a new recurringJobId
     *
     * Unique ID assigned by the Bulk Data Exchange API for managing your
     *  recurring job. Use the <b>recurringJobId</b> value
     *  returned in the <b>createRecurringJob</b> response.
     *  You can also use <b>getRecurringJobs</b> to
     *  retrieve <b>recurringJobId</b> values for any recurring jobs you have created.
     *
     * @param string $recurringJobId
     * @return self
     */
    public function setRecurringJobId($recurringJobId)
    {
        $this->recurringJobId = $recurringJobId;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getRecurringJobId();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}recurringJobId", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}recurringJobId');
        if (null !== $value) {
            $this->setRecurringJobId($value);
        }
    }
}
