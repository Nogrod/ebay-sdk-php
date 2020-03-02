<?php

namespace Nogrod\eBaySDK\FileTransfer;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DownloadFileRequestType
 *
 * Downloads a file (typically a report) from eBay.
 *  </p>
 *  <h3>Using downloadFile with the Bulk Data Exchange API</h3>
 *  <p>If you are using Large Merchant Services, the most
 *  common uses of this call are to download responses to large-volume
 *  requests and to download reports.</p>
 *  <p>After you have uploaded a data file that includes requests
 *  (such as multiple AddFixedPriceItem requests),
 *  you need to use the BDX getStatus call to determine when a response
 *  file is ready to download. After the BDX upload processing is complete,
 *  you call downloadFile to retrieve the response.
 *  <br><br>
 *  To get a report, you begin by using the Bulk Data Exchange API's
 *  startDownloadJob call, and then use startDownloadJob to start the
 *  report processing.
 *  <br><br>
 *  The Bulk Data Exchange API assigns a jobId for your report and
 *  you need to use the BDX getStatus call to determine when the report is ready to download.
 *  After the BDX download processing is complete, your application can call
 *  downloadFile to download the report.</p>
 *  <h3>Using downloadFile for Custom Item Specifics</h3>
 *  <p>You can also use downloadFile to download recommendations
 *  for custom Item Specifics. This is a very large data set that
 *  can't be retrieved through a more traditional synchronous call. <br>
 *  <br>
 *  You do not use the Bulk Data Exchange API at all for this use case.
 *  (You also do not use uploadFile.)
 *  Instead, you call GetCategorySpecifics in the Trading API to obtain
 *  the necessary file and task reference IDs, and then pass them in
 *  the downloadFile call to retrieve the recommendations file.
 *  See
 *  <a href="http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/GetCategorySpecifics.html#downloadFile">GetCategorySpecifics</a>
 *  for details.</p>
 * XSD Type: DownloadFileRequest
 */
class DownloadFileRequestType extends BaseServiceRequestType
{

    /**
     * This is ID is determimed by a service (or API) that interacts with the
     *  File Transfer API.
     *  <br><br>
     *  For instance, the Bulk Data Exchange API uses a job ID as a primary
     *  identifier, so, if you're using the Bulk Data Exchange API, enter the
     *  job ID as the taskReferenceId.
     *
     * @var string $taskReferenceId
     */
    private $taskReferenceId = null;

    /**
     * A unique Id assigned to a file. For example, the Bulk Data Exchange API
     *  assigns this ID to a file when startDownloadJob is called and then it
     *  creates the file.
     *  <br>lt;br>
     *  Pass the fileReferenceId into a File Transfer service downloadFile call.
     *  The File Transfer API uses this identifier to
     *  keep track of the files that are downloaded.
     *
     * @var string $fileReferenceId
     */
    private $fileReferenceId = null;

    /**
     * Gets as taskReferenceId
     *
     * This is ID is determimed by a service (or API) that interacts with the
     *  File Transfer API.
     *  <br><br>
     *  For instance, the Bulk Data Exchange API uses a job ID as a primary
     *  identifier, so, if you're using the Bulk Data Exchange API, enter the
     *  job ID as the taskReferenceId.
     *
     * @return string
     */
    public function getTaskReferenceId()
    {
        return $this->taskReferenceId;
    }

    /**
     * Sets a new taskReferenceId
     *
     * This is ID is determimed by a service (or API) that interacts with the
     *  File Transfer API.
     *  <br><br>
     *  For instance, the Bulk Data Exchange API uses a job ID as a primary
     *  identifier, so, if you're using the Bulk Data Exchange API, enter the
     *  job ID as the taskReferenceId.
     *
     * @param string $taskReferenceId
     * @return self
     */
    public function setTaskReferenceId($taskReferenceId)
    {
        $this->taskReferenceId = $taskReferenceId;
        return $this;
    }

    /**
     * Gets as fileReferenceId
     *
     * A unique Id assigned to a file. For example, the Bulk Data Exchange API
     *  assigns this ID to a file when startDownloadJob is called and then it
     *  creates the file.
     *  <br>lt;br>
     *  Pass the fileReferenceId into a File Transfer service downloadFile call.
     *  The File Transfer API uses this identifier to
     *  keep track of the files that are downloaded.
     *
     * @return string
     */
    public function getFileReferenceId()
    {
        return $this->fileReferenceId;
    }

    /**
     * Sets a new fileReferenceId
     *
     * A unique Id assigned to a file. For example, the Bulk Data Exchange API
     *  assigns this ID to a file when startDownloadJob is called and then it
     *  creates the file.
     *  <br>lt;br>
     *  Pass the fileReferenceId into a File Transfer service downloadFile call.
     *  The File Transfer API uses this identifier to
     *  keep track of the files that are downloaded.
     *
     * @param string $fileReferenceId
     * @return self
     */
    public function setFileReferenceId($fileReferenceId)
    {
        $this->fileReferenceId = $fileReferenceId;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getTaskReferenceId();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}taskReferenceId", $value);
        }
        $value = $this->getFileReferenceId();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}fileReferenceId", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}taskReferenceId');
        if (null !== $value) {
            $this->setTaskReferenceId($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}fileReferenceId');
        if (null !== $value) {
            $this->setFileReferenceId($value);
        }
    }
}
