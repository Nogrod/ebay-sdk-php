<?php

namespace Nogrod\eBaySDK\FileTransfer;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing UploadFileRequestType
 *
 * Transfers a data file to one of eBay's servers. After your
 *  application makes this call, it needs to make the Bulk Data Exchange
 *  'StartUploadJob' call so the data can be processed.
 * XSD Type: UploadFileRequest
 */
class UploadFileRequestType extends BaseServiceRequestType
{
    /**
     * This is an external identifier used by a service that interacts with the
     *  File Transfer Service.
     *  <br><br>
     *  For instance, the Bulk Data Exchange Service uses a job ID as a primary
     *  identifier, so, if you're using the Bulk Data Exchange Service, enter the
     *  job ID as the taskReferenceId.
     *
     * @var string $taskReferenceId
     */
    private $taskReferenceId = null;

    /**
     * A unique ID assigned to a file by the Bulk Data Exchange service
     *  when createUploadJobRequest is called.
     *  <br>
     *  <br>
     *  Pass the fileReferenceId into a File Transfer service uploadFile call.
     *  The File Transfer Service uses this identifier to
     *  keep track of the files that are uploaded.
     *
     * @var string $fileReferenceId
     */
    private $fileReferenceId = null;

    /**
     * Specifies the format of the file being uploaded.
     *  <dl>
     *  <dt>
     *  gzip
     *  </dt>
     *  <dd>
     *  It specifies that the file to be uploaded is in gzip format
     *  </dd>
     *  <dt>
     *  zip
     *  </dt>
     *  <dd>
     *  It specifies that the file to be uploaded is in zip format.
     *  </dd>
     *  </dl>
     *
     * @var string $fileFormat
     */
    private $fileFormat = null;

    /**
     * The zipped report file that is encoded in Base64 Binary format and included
     *  in the request according to the SOAP MTOM standard.
     *
     * @var \Nogrod\eBaySDK\FileTransfer\FileAttachmentType $fileAttachment
     */
    private $fileAttachment = null;

    /**
     * Gets as taskReferenceId
     *
     * This is an external identifier used by a service that interacts with the
     *  File Transfer Service.
     *  <br><br>
     *  For instance, the Bulk Data Exchange Service uses a job ID as a primary
     *  identifier, so, if you're using the Bulk Data Exchange Service, enter the
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
     * This is an external identifier used by a service that interacts with the
     *  File Transfer Service.
     *  <br><br>
     *  For instance, the Bulk Data Exchange Service uses a job ID as a primary
     *  identifier, so, if you're using the Bulk Data Exchange Service, enter the
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
     * A unique ID assigned to a file by the Bulk Data Exchange service
     *  when createUploadJobRequest is called.
     *  <br>
     *  <br>
     *  Pass the fileReferenceId into a File Transfer service uploadFile call.
     *  The File Transfer Service uses this identifier to
     *  keep track of the files that are uploaded.
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
     * A unique ID assigned to a file by the Bulk Data Exchange service
     *  when createUploadJobRequest is called.
     *  <br>
     *  <br>
     *  Pass the fileReferenceId into a File Transfer service uploadFile call.
     *  The File Transfer Service uses this identifier to
     *  keep track of the files that are uploaded.
     *
     * @param string $fileReferenceId
     * @return self
     */
    public function setFileReferenceId($fileReferenceId)
    {
        $this->fileReferenceId = $fileReferenceId;
        return $this;
    }

    /**
     * Gets as fileFormat
     *
     * Specifies the format of the file being uploaded.
     *  <dl>
     *  <dt>
     *  gzip
     *  </dt>
     *  <dd>
     *  It specifies that the file to be uploaded is in gzip format
     *  </dd>
     *  <dt>
     *  zip
     *  </dt>
     *  <dd>
     *  It specifies that the file to be uploaded is in zip format.
     *  </dd>
     *  </dl>
     *
     * @return string
     */
    public function getFileFormat()
    {
        return $this->fileFormat;
    }

    /**
     * Sets a new fileFormat
     *
     * Specifies the format of the file being uploaded.
     *  <dl>
     *  <dt>
     *  gzip
     *  </dt>
     *  <dd>
     *  It specifies that the file to be uploaded is in gzip format
     *  </dd>
     *  <dt>
     *  zip
     *  </dt>
     *  <dd>
     *  It specifies that the file to be uploaded is in zip format.
     *  </dd>
     *  </dl>
     *
     * @param string $fileFormat
     * @return self
     */
    public function setFileFormat($fileFormat)
    {
        $this->fileFormat = $fileFormat;
        return $this;
    }

    /**
     * Gets as fileAttachment
     *
     * The zipped report file that is encoded in Base64 Binary format and included
     *  in the request according to the SOAP MTOM standard.
     *
     * @return \Nogrod\eBaySDK\FileTransfer\FileAttachmentType
     */
    public function getFileAttachment()
    {
        return $this->fileAttachment;
    }

    /**
     * Sets a new fileAttachment
     *
     * The zipped report file that is encoded in Base64 Binary format and included
     *  in the request according to the SOAP MTOM standard.
     *
     * @param \Nogrod\eBaySDK\FileTransfer\FileAttachmentType $fileAttachment
     * @return self
     */
    public function setFileAttachment(\Nogrod\eBaySDK\FileTransfer\FileAttachmentType $fileAttachment)
    {
        $this->fileAttachment = $fileAttachment;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
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
        $value = $this->getFileFormat();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}fileFormat", $value);
        }
        $value = $this->getFileAttachment();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}fileAttachment", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}fileFormat');
        if (null !== $value) {
            $this->setFileFormat($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}fileAttachment');
        if (null !== $value) {
            $this->setFileAttachment(\Nogrod\eBaySDK\FileTransfer\FileAttachmentType::fromKeyValue($value));
        }
    }
}
