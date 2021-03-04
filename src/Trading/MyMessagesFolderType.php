<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MyMessagesFolderType
 *
 * Details relating to a My Messages folder.
 * XSD Type: MyMessagesFolderType
 */
class MyMessagesFolderType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * An ID that uniquely identifies a My Messages folder.
     *
     * @var int $folderID
     */
    private $folderID = null;

    /**
     * The name of a specified My Messages folder.
     *
     * @var string $folderName
     */
    private $folderName = null;

    /**
     * Gets as folderID
     *
     * An ID that uniquely identifies a My Messages folder.
     *
     * @return int
     */
    public function getFolderID()
    {
        return $this->folderID;
    }

    /**
     * Sets a new folderID
     *
     * An ID that uniquely identifies a My Messages folder.
     *
     * @param int $folderID
     * @return self
     */
    public function setFolderID($folderID)
    {
        $this->folderID = $folderID;
        return $this;
    }

    /**
     * Gets as folderName
     *
     * The name of a specified My Messages folder.
     *
     * @return string
     */
    public function getFolderName()
    {
        return $this->folderName;
    }

    /**
     * Sets a new folderName
     *
     * The name of a specified My Messages folder.
     *
     * @param string $folderName
     * @return self
     */
    public function setFolderName($folderName)
    {
        $this->folderName = $folderName;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getFolderID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FolderID", $value);
        }
        $value = $this->getFolderName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FolderName", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FolderID');
        if (null !== $value) {
            $this->setFolderID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FolderName');
        if (null !== $value) {
            $this->setFolderName($value);
        }
    }
}
