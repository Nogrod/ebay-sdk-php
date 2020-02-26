<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing DeleteSellingManagerInventoryFolderRequestType
 *
 * Removes an inventory folder when a user deletes it in My eBay. This call is subject to change without notice; the deprecation process is inapplicable to this call.
 * XSD Type: DeleteSellingManagerInventoryFolderRequestType
 */
class DeleteSellingManagerInventoryFolderRequestType extends AbstractRequestType
{

    /**
     * Unique ID of the Selling Manager Inventory folder to be deleted.
     *
     * @var int $folderID
     */
    private $folderID = null;

    /**
     * Gets as folderID
     *
     * Unique ID of the Selling Manager Inventory folder to be deleted.
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
     * Unique ID of the Selling Manager Inventory folder to be deleted.
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FolderID');
        if (null !== $value) {
            $this->setFolderID($value);
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
