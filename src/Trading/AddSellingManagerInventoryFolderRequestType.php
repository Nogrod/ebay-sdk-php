<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AddSellingManagerInventoryFolderRequestType
 *
 * Adds a new product folder to a user's Selling Manager account.
 * XSD Type: AddSellingManagerInventoryFolderRequestType
 */
class AddSellingManagerInventoryFolderRequestType extends AbstractRequestType
{

    /**
     * Name of the new Selling Manager inventory folder.
     *
     * @var string $folderName
     */
    private $folderName = null;

    /**
     * Unique identifier of the parent Selling Manager inventory folder. If no <b>ParentFolderID</b> is submitted, the folder
     *  is added at the root level.
     *
     * @var int $parentFolderID
     */
    private $parentFolderID = null;

    /**
     * Contains comments that will be associated with this folder.
     *
     * @var string $comment
     */
    private $comment = null;

    /**
     * Gets as folderName
     *
     * Name of the new Selling Manager inventory folder.
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
     * Name of the new Selling Manager inventory folder.
     *
     * @param string $folderName
     * @return self
     */
    public function setFolderName($folderName)
    {
        $this->folderName = $folderName;
        return $this;
    }

    /**
     * Gets as parentFolderID
     *
     * Unique identifier of the parent Selling Manager inventory folder. If no <b>ParentFolderID</b> is submitted, the folder
     *  is added at the root level.
     *
     * @return int
     */
    public function getParentFolderID()
    {
        return $this->parentFolderID;
    }

    /**
     * Sets a new parentFolderID
     *
     * Unique identifier of the parent Selling Manager inventory folder. If no <b>ParentFolderID</b> is submitted, the folder
     *  is added at the root level.
     *
     * @param int $parentFolderID
     * @return self
     */
    public function setParentFolderID($parentFolderID)
    {
        $this->parentFolderID = $parentFolderID;
        return $this;
    }

    /**
     * Gets as comment
     *
     * Contains comments that will be associated with this folder.
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Contains comments that will be associated with this folder.
     *
     * @param string $comment
     * @return self
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getFolderName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FolderName", $value);
        }
        $value = $this->getParentFolderID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ParentFolderID", $value);
        }
        $value = $this->getComment();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Comment", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FolderName');
        if (null !== $value) {
            $this->setFolderName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ParentFolderID');
        if (null !== $value) {
            $this->setParentFolderID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Comment');
        if (null !== $value) {
            $this->setComment($value);
        }
    }
}
