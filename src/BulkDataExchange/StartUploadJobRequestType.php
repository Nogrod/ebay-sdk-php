<?php

namespace Nogrod\eBaySDK\BulkDataExchange;

/**
 * Class representing StartUploadJobRequestType
 *
 * Begins processing the data in the uploaded file. For example, if the data
 *  file contains data for the <b>AddFixedPriceItem</b> request, the Bulk Data Exchange API
 *  reads and sends this item data from the uploaded file to the eBay Trading API
 *  (and adds the fixed-price items to the eBay site).
 * XSD Type: StartUploadJobRequest
 */
class StartUploadJobRequestType extends BaseServiceRequestType
{

    /**
     * Unique ID assigned by the Bulk Data Exchange API for managing your
     *  upload job. Use the <b>jobId</b> value returned in
     *  the <b>createUploadJob</b> response. You can also
     *  use <b>getJobs</b> to retrieve job IDs for any
     *  upload jobs you have created.
     *  <br><br>
     *  Before you can start an upload job, you must upload the corresponding data
     *  file, using the File Transfer API. In the File Transfer API, <b>jobId</b> maps to <b>taskReferenceId</b> in the <b>uploadFile</b> call.
     *  <br><br>
     *  Once you start your upload job, use <b>getJobStatus</b> to monitor processing progress.
     *
     * @var string $jobId
     */
    private $jobId = null;

    /**
     * Gets as jobId
     *
     * Unique ID assigned by the Bulk Data Exchange API for managing your
     *  upload job. Use the <b>jobId</b> value returned in
     *  the <b>createUploadJob</b> response. You can also
     *  use <b>getJobs</b> to retrieve job IDs for any
     *  upload jobs you have created.
     *  <br><br>
     *  Before you can start an upload job, you must upload the corresponding data
     *  file, using the File Transfer API. In the File Transfer API, <b>jobId</b> maps to <b>taskReferenceId</b> in the <b>uploadFile</b> call.
     *  <br><br>
     *  Once you start your upload job, use <b>getJobStatus</b> to monitor processing progress.
     *
     * @return string
     */
    public function getJobId()
    {
        return $this->jobId;
    }

    /**
     * Sets a new jobId
     *
     * Unique ID assigned by the Bulk Data Exchange API for managing your
     *  upload job. Use the <b>jobId</b> value returned in
     *  the <b>createUploadJob</b> response. You can also
     *  use <b>getJobs</b> to retrieve job IDs for any
     *  upload jobs you have created.
     *  <br><br>
     *  Before you can start an upload job, you must upload the corresponding data
     *  file, using the File Transfer API. In the File Transfer API, <b>jobId</b> maps to <b>taskReferenceId</b> in the <b>uploadFile</b> call.
     *  <br><br>
     *  Once you start your upload job, use <b>getJobStatus</b> to monitor processing progress.
     *
     * @param string $jobId
     * @return self
     */
    public function setJobId($jobId)
    {
        $this->jobId = $jobId;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getJobId();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}jobId", $value);
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
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}jobId');
        if (null !== $value) {
            $this->setJobId($value);
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
