<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetSellingManagerInventoryFolderRequestType
 *
 * Retrieves Selling Manager Inventory folders.
 *  This call is subject to change without notice; the deprecation process is
 *  inapplicable to this call. The user must have a Selling Manager Pro subscription to use this call.
 * XSD Type: GetSellingManagerInventoryFolderRequestType
 */
class GetSellingManagerInventoryFolderRequestType extends AbstractRequestType
{
    /**
     * A unique identifier for a Selling Manager Inventory folder. The <b>FolderID</b> is used if the seller wants to retrieve a specific folder.
     *
     * @var int $folderID
     */
    private $folderID = null;

    /**
     * This field is used to specify the number of levels of subfolders to be returned in the response. If 0, the parent folder is returned. If 1, the parent and child folders are returned. If 2, the parent and two levels of child folders are returned. Ignored if the <b>FullRecursion</b> field is included and set to <code>True</code>.
     *  <br/>
     *
     * @var int $maxDepth
     */
    private $maxDepth = null;

    /**
     * Displays the entire tree of a user's Selling Manager Inventory folders. If this is provided, the <b>FolderID</b> and <b>MaxDepth</b> fields are no longer applicable.
     *
     * @var bool $fullRecursion
     */
    private $fullRecursion = null;

    /**
     * Gets as folderID
     *
     * A unique identifier for a Selling Manager Inventory folder. The <b>FolderID</b> is used if the seller wants to retrieve a specific folder.
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
     * A unique identifier for a Selling Manager Inventory folder. The <b>FolderID</b> is used if the seller wants to retrieve a specific folder.
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
     * Gets as maxDepth
     *
     * This field is used to specify the number of levels of subfolders to be returned in the response. If 0, the parent folder is returned. If 1, the parent and child folders are returned. If 2, the parent and two levels of child folders are returned. Ignored if the <b>FullRecursion</b> field is included and set to <code>True</code>.
     *  <br/>
     *
     * @return int
     */
    public function getMaxDepth()
    {
        return $this->maxDepth;
    }

    /**
     * Sets a new maxDepth
     *
     * This field is used to specify the number of levels of subfolders to be returned in the response. If 0, the parent folder is returned. If 1, the parent and child folders are returned. If 2, the parent and two levels of child folders are returned. Ignored if the <b>FullRecursion</b> field is included and set to <code>True</code>.
     *  <br/>
     *
     * @param int $maxDepth
     * @return self
     */
    public function setMaxDepth($maxDepth)
    {
        $this->maxDepth = $maxDepth;
        return $this;
    }

    /**
     * Gets as fullRecursion
     *
     * Displays the entire tree of a user's Selling Manager Inventory folders. If this is provided, the <b>FolderID</b> and <b>MaxDepth</b> fields are no longer applicable.
     *
     * @return bool
     */
    public function getFullRecursion()
    {
        return $this->fullRecursion;
    }

    /**
     * Sets a new fullRecursion
     *
     * Displays the entire tree of a user's Selling Manager Inventory folders. If this is provided, the <b>FolderID</b> and <b>MaxDepth</b> fields are no longer applicable.
     *
     * @param bool $fullRecursion
     * @return self
     */
    public function setFullRecursion($fullRecursion)
    {
        $this->fullRecursion = $fullRecursion;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getFolderID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FolderID", $value);
        }
        $value = $this->getMaxDepth();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxDepth", $value);
        }
        $value = $this->getFullRecursion();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FullRecursion", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxDepth');
        if (null !== $value) {
            $this->setMaxDepth($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FullRecursion');
        if (null !== $value) {
            $this->setFullRecursion($value);
        }
    }
}
