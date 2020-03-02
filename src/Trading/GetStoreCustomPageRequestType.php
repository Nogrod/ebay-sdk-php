<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetStoreCustomPageRequestType
 *
 * This call is used to retrieve a specific custom page or all custom pages created for a seller's eBay Store. The eBay seller must have an eBay Store subscription to use this call.
 * XSD Type: GetStoreCustomPageRequestType
 */
class GetStoreCustomPageRequestType extends AbstractRequestType
{

    /**
     * This field is used if the seller wants to retrieved detailed information on a specific custom page. If no <b>PageID</b> is specified, then all of the seller's custom pages are returned, but without the page content.
     *
     * @var int $pageID
     */
    private $pageID = null;

    /**
     * Gets as pageID
     *
     * This field is used if the seller wants to retrieved detailed information on a specific custom page. If no <b>PageID</b> is specified, then all of the seller's custom pages are returned, but without the page content.
     *
     * @return int
     */
    public function getPageID()
    {
        return $this->pageID;
    }

    /**
     * Sets a new pageID
     *
     * This field is used if the seller wants to retrieved detailed information on a specific custom page. If no <b>PageID</b> is specified, then all of the seller's custom pages are returned, but without the page content.
     *
     * @param int $pageID
     * @return self
     */
    public function setPageID($pageID)
    {
        $this->pageID = $pageID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getPageID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PageID", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PageID');
        if (null !== $value) {
            $this->setPageID($value);
        }
    }
}
