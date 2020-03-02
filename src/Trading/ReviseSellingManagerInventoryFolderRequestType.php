<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ReviseSellingManagerInventoryFolderRequestType
 *
 * This call is uses to rename and/or move a Selling Manager Inventory folder.
 *  This call is subject to change without notice; the deprecation process is
 *  inapplicable to this call. The user must have a Selling Manager Pro subscription to use this call.
 * XSD Type: ReviseSellingManagerInventoryFolderRequestType
 */
class ReviseSellingManagerInventoryFolderRequestType extends AbstractRequestType
{

    /**
     * This container is used to identify the Selling Manager Inventory folder that will be renamed and/or moved.
     *
     * @var \Nogrod\eBaySDK\Trading\SellingManagerFolderDetailsType $folder
     */
    private $folder = null;

    /**
     * Gets as folder
     *
     * This container is used to identify the Selling Manager Inventory folder that will be renamed and/or moved.
     *
     * @return \Nogrod\eBaySDK\Trading\SellingManagerFolderDetailsType
     */
    public function getFolder()
    {
        return $this->folder;
    }

    /**
     * Sets a new folder
     *
     * This container is used to identify the Selling Manager Inventory folder that will be renamed and/or moved.
     *
     * @param \Nogrod\eBaySDK\Trading\SellingManagerFolderDetailsType $folder
     * @return self
     */
    public function setFolder(\Nogrod\eBaySDK\Trading\SellingManagerFolderDetailsType $folder)
    {
        $this->folder = $folder;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getFolder();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Folder", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Folder');
        if (null !== $value) {
            $this->setFolder(\Nogrod\eBaySDK\Trading\SellingManagerFolderDetailsType::fromKeyValue($value));
        }
    }
}
