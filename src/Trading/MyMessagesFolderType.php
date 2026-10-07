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

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->folderID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'FolderID', null, (string) $value);
        }
        $value = $this->folderName;
        if (null !== $value) {
            $writer->writeElementNs(null, 'FolderName', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\MyMessagesFolderType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'FolderID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->folderID = (int) $value;
                    }
                    return true;
                case 'FolderName':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->folderName = $value;
                    }
                    return true;
            }
        }
        return false;
    }
}
