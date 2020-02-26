<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing XSLFileType
 *
 * This type is deprecated.
 * XSD Type: XSLFileType
 */
class XSLFileType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This field is deprecated.
     *
     * @var string $fileName
     */
    private $fileName = null;

    /**
     * This field is deprecated.
     *
     * @var string $fileVersion
     */
    private $fileVersion = null;

    /**
     * This field is deprecated.
     *
     * @var string $fileContent
     */
    private $fileContent = null;

    /**
     * Gets as fileName
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Sets a new fileName
     *
     * This field is deprecated.
     *
     * @param string $fileName
     * @return self
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * Gets as fileVersion
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getFileVersion()
    {
        return $this->fileVersion;
    }

    /**
     * Sets a new fileVersion
     *
     * This field is deprecated.
     *
     * @param string $fileVersion
     * @return self
     */
    public function setFileVersion($fileVersion)
    {
        $this->fileVersion = $fileVersion;
        return $this;
    }

    /**
     * Gets as fileContent
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getFileContent()
    {
        return $this->fileContent;
    }

    /**
     * Sets a new fileContent
     *
     * This field is deprecated.
     *
     * @param string $fileContent
     * @return self
     */
    public function setFileContent($fileContent)
    {
        $this->fileContent = $fileContent;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getFileName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FileName", $value);
        }
        $value = $this->getFileVersion();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FileVersion", $value);
        }
        $value = $this->getFileContent();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FileContent", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FileName');
        if (null !== $value) {
            $this->setFileName($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FileVersion');
        if (null !== $value) {
            $this->setFileVersion($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FileContent');
        if (null !== $value) {
            $this->setFileContent($value);
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
