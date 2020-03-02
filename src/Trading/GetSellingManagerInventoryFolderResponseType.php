<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetSellingManagerInventoryFolderResponseType
 *
 * Returns the folder structure of the specified Selling Manager Inventory folder.
 * XSD Type: GetSellingManagerInventoryFolderResponseType
 */
class GetSellingManagerInventoryFolderResponseType extends AbstractResponseType
{

    /**
     * This container consists of detailed information on the Selling Manager Inventory folder that matches the input criteria, as well as detailed information about any child folders if <b>FullRecursion</b> was set to <code>true</code> or if the <b>MaxDepth</b> field is set to an integer value greater than <code>0</code>.
     *
     * @var \Nogrod\eBaySDK\Trading\SellingManagerFolderDetailsType $folder
     */
    private $folder = null;

    /**
     * Gets as folder
     *
     * This container consists of detailed information on the Selling Manager Inventory folder that matches the input criteria, as well as detailed information about any child folders if <b>FullRecursion</b> was set to <code>true</code> or if the <b>MaxDepth</b> field is set to an integer value greater than <code>0</code>.
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
     * This container consists of detailed information on the Selling Manager Inventory folder that matches the input criteria, as well as detailed information about any child folders if <b>FullRecursion</b> was set to <code>true</code> or if the <b>MaxDepth</b> field is set to an integer value greater than <code>0</code>.
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
