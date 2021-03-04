<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AddSellingManagerInventoryFolderResponseType
 *
 * The base response type of the <b>AddSellingManagerInventoryFolder</b> call. Along with the standard Trading API response fields, a <b>FolderID</b> field will be returned if the folder creation operation is successful.
 * XSD Type: AddSellingManagerInventoryFolderResponseType
 */
class AddSellingManagerInventoryFolderResponseType extends AbstractResponseType
{
    /**
     * The unique identifier of the newly created Selling Manager Inventory Folder. This field will generally be returned unless the call is not successful at creating the new folder.
     *
     * @var int $folderID
     */
    private $folderID = null;

    /**
     * Gets as folderID
     *
     * The unique identifier of the newly created Selling Manager Inventory Folder. This field will generally be returned unless the call is not successful at creating the new folder.
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
     * The unique identifier of the newly created Selling Manager Inventory Folder. This field will generally be returned unless the call is not successful at creating the new folder.
     *
     * @param int $folderID
     * @return self
     */
    public function setFolderID($folderID)
    {
        $this->folderID = $folderID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getFolderID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FolderID", $value);
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
    }
}
