<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MoveSellingManagerInventoryFolderRequestType
 *
 * Moves a Selling Manager inventory folder.
 *  <br><br>
 *  This call is subject to change without notice; the deprecation process is
 *  inapplicable to this call. This call is only applicable and accessible by eBay sellers with a Selling Manager Pro subscription.
 * XSD Type: MoveSellingManagerInventoryFolderRequestType
 */
class MoveSellingManagerInventoryFolderRequestType extends AbstractRequestType
{
    /**
     * Unique ID of the Selling Manager Inventory folder that will be moved. A user can retrieve <b>FolderID</b> values by using <b>GetSellingManagerInventoryFolder</b>.
     *
     * @var int $folderID
     */
    private $folderID = null;

    /**
     * Unique ID of the Selling Manager Inventory folder that will be the new parent folder of the Selling Manager Inventory folder specified in the <b>FolderID</b> field. A user can retrieve <b>FolderID</b> values by using <b>GetSellingManagerInventoryFolder</b>. If this field is omitted, the Selling Manager Inventory folder specified in the <b>FolderID</b> field will be moved to the root level.
     *
     * @var int $newParentFolderID
     */
    private $newParentFolderID = null;

    /**
     * Gets as folderID
     *
     * Unique ID of the Selling Manager Inventory folder that will be moved. A user can retrieve <b>FolderID</b> values by using <b>GetSellingManagerInventoryFolder</b>.
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
     * Unique ID of the Selling Manager Inventory folder that will be moved. A user can retrieve <b>FolderID</b> values by using <b>GetSellingManagerInventoryFolder</b>.
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
     * Gets as newParentFolderID
     *
     * Unique ID of the Selling Manager Inventory folder that will be the new parent folder of the Selling Manager Inventory folder specified in the <b>FolderID</b> field. A user can retrieve <b>FolderID</b> values by using <b>GetSellingManagerInventoryFolder</b>. If this field is omitted, the Selling Manager Inventory folder specified in the <b>FolderID</b> field will be moved to the root level.
     *
     * @return int
     */
    public function getNewParentFolderID()
    {
        return $this->newParentFolderID;
    }

    /**
     * Sets a new newParentFolderID
     *
     * Unique ID of the Selling Manager Inventory folder that will be the new parent folder of the Selling Manager Inventory folder specified in the <b>FolderID</b> field. A user can retrieve <b>FolderID</b> values by using <b>GetSellingManagerInventoryFolder</b>. If this field is omitted, the Selling Manager Inventory folder specified in the <b>FolderID</b> field will be moved to the root level.
     *
     * @param int $newParentFolderID
     * @return self
     */
    public function setNewParentFolderID($newParentFolderID)
    {
        $this->newParentFolderID = $newParentFolderID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getFolderID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FolderID", $value);
        }
        $value = $this->getNewParentFolderID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NewParentFolderID", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FolderID');
        if (null !== $value) {
            $this->setFolderID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NewParentFolderID');
        if (null !== $value) {
            $this->setNewParentFolderID($value);
        }
    }
}
