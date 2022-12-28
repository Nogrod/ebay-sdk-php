<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DescriptionTemplateType
 *
 * Type that provides detailed information on a Listing Designer Theme or Layout.
 * XSD Type: DescriptionTemplateType
 */
class DescriptionTemplateType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getGroupID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}GroupID", $value);
        }
        $value = $this->getID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ID", $value);
        }
        $value = $this->getImageURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ImageURL", $value);
        }
        $value = $this->getName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Name", $value);
        }
        $value = $this->getTemplateXML();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TemplateXML", $value);
        }
        $value = $this->getType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Type", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}GroupID');
        if (null !== $value) {
            $this->setGroupID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ID');
        if (null !== $value) {
            $this->setID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ImageURL');
        if (null !== $value) {
            $this->setImageURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Name');
        if (null !== $value) {
            $this->setName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TemplateXML');
        if (null !== $value) {
            $this->setTemplateXML($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Type');
        if (null !== $value) {
            $this->setType($value);
        }
    }
}
