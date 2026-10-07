<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DescriptionTemplateType
 *
 * Type that provides detailed information on a Listing Designer Theme or Layout.
 * XSD Type: DescriptionTemplateType
 */
class DescriptionTemplateType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * This integer value is a unique identifier for the Listing Designer Theme group, such as Holiday/Seasonal, Special Events, or Patterns/Textures. This field is not applicable and will not be returned for a Listing Designer Layout.
     *
     * @var int $groupID
     */
    private $groupID = null;

    /**
     * This integer value is a unique identifier of the Listing Designer Theme or Layout.
     *
     * @var int $iD
     */
    private $iD = null;

    /**
     * This URL is the path to a small image providing a sample of the appearance of a Listing Designer Theme or Layout.
     *
     * @var string $imageURL
     */
    private $imageURL = null;

    /**
     * This string value is the name of the Listing Designer Theme or Layout.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * This string value is actually a CDATA representation of the Listing Designer template. Image-related elements in a template include <code>ThemeTop</code>, <code>ThemeUserCellTop</code>, <code>ThemeUserContent,</code>, <code>ThemeUserCellBottom</code>, and <code>ThemeBottom</code>. This field is not applicable and will not be returned for a Listing Designer Layout.
     *
     * @var string $templateXML
     */
    private $templateXML = null;

    /**
     * This enumeration value indicates that the information returned under the <b>DescriptionTemplate</b> container is related to a Listing Designer Theme or Layout.
     *
     * @var string $type
     */
    private $type = null;

    /**
     * Gets as groupID
     *
     * This integer value is a unique identifier for the Listing Designer Theme group, such as Holiday/Seasonal, Special Events, or Patterns/Textures. This field is not applicable and will not be returned for a Listing Designer Layout.
     *
     * @return int
     */
    public function getGroupID()
    {
        return $this->groupID;
    }

    /**
     * Sets a new groupID
     *
     * This integer value is a unique identifier for the Listing Designer Theme group, such as Holiday/Seasonal, Special Events, or Patterns/Textures. This field is not applicable and will not be returned for a Listing Designer Layout.
     *
     * @param int $groupID
     * @return self
     */
    public function setGroupID($groupID)
    {
        $this->groupID = $groupID;
        return $this;
    }

    /**
     * Gets as iD
     *
     * This integer value is a unique identifier of the Listing Designer Theme or Layout.
     *
     * @return int
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * This integer value is a unique identifier of the Listing Designer Theme or Layout.
     *
     * @param int $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as imageURL
     *
     * This URL is the path to a small image providing a sample of the appearance of a Listing Designer Theme or Layout.
     *
     * @return string
     */
    public function getImageURL()
    {
        return $this->imageURL;
    }

    /**
     * Sets a new imageURL
     *
     * This URL is the path to a small image providing a sample of the appearance of a Listing Designer Theme or Layout.
     *
     * @param string $imageURL
     * @return self
     */
    public function setImageURL($imageURL)
    {
        $this->imageURL = $imageURL;
        return $this;
    }

    /**
     * Gets as name
     *
     * This string value is the name of the Listing Designer Theme or Layout.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * This string value is the name of the Listing Designer Theme or Layout.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as templateXML
     *
     * This string value is actually a CDATA representation of the Listing Designer template. Image-related elements in a template include <code>ThemeTop</code>, <code>ThemeUserCellTop</code>, <code>ThemeUserContent,</code>, <code>ThemeUserCellBottom</code>, and <code>ThemeBottom</code>. This field is not applicable and will not be returned for a Listing Designer Layout.
     *
     * @return string
     */
    public function getTemplateXML()
    {
        return $this->templateXML;
    }

    /**
     * Sets a new templateXML
     *
     * This string value is actually a CDATA representation of the Listing Designer template. Image-related elements in a template include <code>ThemeTop</code>, <code>ThemeUserCellTop</code>, <code>ThemeUserContent,</code>, <code>ThemeUserCellBottom</code>, and <code>ThemeBottom</code>. This field is not applicable and will not be returned for a Listing Designer Layout.
     *
     * @param string $templateXML
     * @return self
     */
    public function setTemplateXML($templateXML)
    {
        $this->templateXML = $templateXML;
        return $this;
    }

    /**
     * Gets as type
     *
     * This enumeration value indicates that the information returned under the <b>DescriptionTemplate</b> container is related to a Listing Designer Theme or Layout.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * This enumeration value indicates that the information returned under the <b>DescriptionTemplate</b> container is related to a Listing Designer Theme or Layout.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
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
        $value = $this->groupID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'GroupID', null, (string) $value);
        }
        $value = $this->iD;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ID', null, (string) $value);
        }
        $value = $this->imageURL;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ImageURL', null, (string) $value);
        }
        $value = $this->name;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Name', null, (string) $value);
        }
        $value = $this->templateXML;
        if (null !== $value) {
            $writer->writeElementNs(null, 'TemplateXML', null, (string) $value);
        }
        $value = $this->type;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Type', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\DescriptionTemplateType
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
                case 'GroupID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->groupID = (int) $value;
                    }
                    return true;
                case 'ID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->iD = (int) $value;
                    }
                    return true;
                case 'ImageURL':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->imageURL = $value;
                    }
                    return true;
                case 'Name':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->name = $value;
                    }
                    return true;
                case 'TemplateXML':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->templateXML = $value;
                    }
                    return true;
                case 'Type':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->type = $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['GroupID'] = $this->groupID;
        $data['ID'] = $this->iD;
        $data['ImageURL'] = $this->imageURL;
        $data['Name'] = $this->name;
        $data['TemplateXML'] = $this->templateXML;
        $data['Type'] = $this->type;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
