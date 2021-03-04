<?php

namespace Nogrod\eBaySDK\FileTransfer;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing FileAttachmentType
 *
 * The zipped report file that is encoded in Base64 Binary format and included in the
 *  request according to the SOAP MTOM standard.
 * XSD Type: FileAttachment
 */
class FileAttachmentType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This is the size of the file you are attaching (that contains the Merchant Data API
     *  or Trading API requests that you want to upload) or of the file you are receiving
     *  as a download.
     *  <br><br>
     *  The default maximum size for a
     *  data file attachment in the File Transfer uploadJob call is 15MB,
     *  If you have a large call limit and you want to send more calls than would fit in
     *  a 15MB file, you will have to divide your data into multiple uploads.
     *
     * @var int $size
     */
    private $size = null;

    /**
     * The data in the attached file. When this is returned in
     *  downloadFile and you are working with Large Merchant Services or
     *  GetCategorySpecifics, the attached file is a .zip file.
     *
     * @var string $data
     */
    private $data = null;

    /**
     * Gets as size
     *
     * This is the size of the file you are attaching (that contains the Merchant Data API
     *  or Trading API requests that you want to upload) or of the file you are receiving
     *  as a download.
     *  <br><br>
     *  The default maximum size for a
     *  data file attachment in the File Transfer uploadJob call is 15MB,
     *  If you have a large call limit and you want to send more calls than would fit in
     *  a 15MB file, you will have to divide your data into multiple uploads.
     *
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Sets a new size
     *
     * This is the size of the file you are attaching (that contains the Merchant Data API
     *  or Trading API requests that you want to upload) or of the file you are receiving
     *  as a download.
     *  <br><br>
     *  The default maximum size for a
     *  data file attachment in the File Transfer uploadJob call is 15MB,
     *  If you have a large call limit and you want to send more calls than would fit in
     *  a 15MB file, you will have to divide your data into multiple uploads.
     *
     * @param int $size
     * @return self
     */
    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }

    /**
     * Gets as data
     *
     * The data in the attached file. When this is returned in
     *  downloadFile and you are working with Large Merchant Services or
     *  GetCategorySpecifics, the attached file is a .zip file.
     *
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Sets a new data
     *
     * The data in the attached file. When this is returned in
     *  downloadFile and you are working with Large Merchant Services or
     *  GetCategorySpecifics, the attached file is a .zip file.
     *
     * @param string $data
     * @return self
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/services");
        $value = $this->getSize();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}Size", $value);
        }
        $value = $this->getData();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}Data", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}Size');
        if (null !== $value) {
            $this->setSize($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}Data');
        if (null !== $value) {
            $this->setData($value);
        }
    }
}
