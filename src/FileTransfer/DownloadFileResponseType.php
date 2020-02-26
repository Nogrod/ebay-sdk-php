<?php

namespace Nogrod\eBaySDK\FileTransfer;

/**
 * Class representing DownloadFileResponseType
 *
 * Indicates the success or failure of transferring the report information to the seller's application.
 * XSD Type: DownloadFileResponse
 */
class DownloadFileResponseType extends BaseServiceResponseType
{

    /**
     * A zipped report file that is encoded in Base64 Binary format and included
     *  in the response according to the SOAP MTOM standard.
     *
     * @var \Nogrod\eBaySDK\FileTransfer\FileAttachmentType $fileAttachment
     */
    private $fileAttachment = null;

    /**
     * Gets as fileAttachment
     *
     * A zipped report file that is encoded in Base64 Binary format and included
     *  in the response according to the SOAP MTOM standard.
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
     * A zipped report file that is encoded in Base64 Binary format and included
     *  in the response according to the SOAP MTOM standard.
     *
     * @param \Nogrod\eBaySDK\FileTransfer\FileAttachmentType $fileAttachment
     * @return self
     */
    public function setFileAttachment(\Nogrod\eBaySDK\FileTransfer\FileAttachmentType $fileAttachment)
    {
        $this->fileAttachment = $fileAttachment;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
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
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}fileAttachment');
        if (null !== $value) {
            $this->setFileAttachment(\Nogrod\eBaySDK\FileTransfer\FileAttachmentType::fromKeyValue($value));
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
