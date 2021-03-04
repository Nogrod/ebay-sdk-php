<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ReviseSellingManagerInventoryFolderResponseType
 *
 * Returns the status of a revise folder operation.
 * XSD Type: ReviseSellingManagerInventoryFolderResponseType
 */
class ReviseSellingManagerInventoryFolderResponseType extends AbstractResponseType
{
    /**
     * This container will show the results of the action made on the Selling Manager Inventory folder.
     *
     * @var \Nogrod\eBaySDK\Trading\SellingManagerFolderDetailsType $folder
     */
    private $folder = null;

    /**
     * Gets as folder
     *
     * This container will show the results of the action made on the Selling Manager Inventory folder.
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
     * This container will show the results of the action made on the Selling Manager Inventory folder.
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
