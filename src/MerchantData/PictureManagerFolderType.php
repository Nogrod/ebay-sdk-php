<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PictureManagerFolderType
 *
 * This type is deprecated.
 * XSD Type: PictureManagerFolderType
 */
class PictureManagerFolderType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var int $folderID
     */
    private $folderID = null;

    /**
     * This field is deprecated.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\PictureManagerPictureType[] $picture
     */
    private $picture = [

    ];

    /**
     * Gets as folderID
     *
     * This field is deprecated.
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
     * This field is deprecated.
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
     * Gets as name
     *
     * This field is deprecated.
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
     * This field is deprecated.
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
     * Adds as picture
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\PictureManagerPictureType $picture
     */
    public function addToPicture(\Nogrod\eBaySDK\MerchantData\PictureManagerPictureType $picture)
    {
        $this->picture[] = $picture;
        return $this;
    }

    /**
     * isset picture
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPicture($index)
    {
        return isset($this->picture[$index]);
    }

    /**
     * unset picture
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPicture($index)
    {
        unset($this->picture[$index]);
    }

    /**
     * Gets as picture
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\PictureManagerPictureType[]
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Sets a new picture
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\PictureManagerPictureType[] $picture
     * @return self
     */
    public function setPicture(array $picture)
    {
        $this->picture = $picture;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getFolderID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FolderID", $value);
        }
        $value = $this->getName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Name", $value);
        }
        $value = $this->getPicture();
        if (null !== $value && !empty($this->getPicture())) {
            $writer->write(array_map(function ($v) {
                return ["Picture" => $v];
            }, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Name');
        if (null !== $value) {
            $this->setName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Picture', true);
        if (null !== $value && !empty($value)) {
            $this->setPicture(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\PictureManagerPictureType::fromKeyValue($v);
            }, $value));
        }
    }
}
