<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing VeROReportItemsRequestType
 *
 * <span class="tablenote">
 *  <strong>Note:</strong> This call has been deprecated and will be decommissioned on February 2nd, 2026. Users are recommended to migrate to the <a href="https://developer.ebay.com/api-docs/commerce/vero/resources/methods" target="_blank">VeRO API</a> to create and manage VeRO reports.
 *  </span>
 *  Reports items that allegedly infringe your copyright, trademark, or other
 *  intellectual property rights. You can report one or more items at a time with this
 *  call. You must be a member of the Verified Rights Owner (VeRO) Program to use this
 *  call.
 * XSD Type: VeROReportItemsRequestType
 */
class VeROReportItemsRequestType extends AbstractRequestType
{
    /**
     * User ID of the VeRO member reporting the items.
     *
     * @var string $rightsOwnerID
     */
    private $rightsOwnerID = null;

    /**
     * Container (packet) for items being reported. You can report the same item
     *  more than once in a packet if a different reason code is used each time.
     *
     * @var \Nogrod\eBaySDK\Trading\VeROReportItemType[] $reportItems
     */
    private $reportItems = null;

    /**
     * Gets as rightsOwnerID
     *
     * User ID of the VeRO member reporting the items.
     *
     * @return string
     */
    public function getRightsOwnerID()
    {
        return $this->rightsOwnerID;
    }

    /**
     * Sets a new rightsOwnerID
     *
     * User ID of the VeRO member reporting the items.
     *
     * @param string $rightsOwnerID
     * @return self
     */
    public function setRightsOwnerID($rightsOwnerID)
    {
        $this->rightsOwnerID = $rightsOwnerID;
        return $this;
    }

    /**
     * Adds as reportItem
     *
     * Container (packet) for items being reported. You can report the same item
     *  more than once in a packet if a different reason code is used each time.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\VeROReportItemType $reportItem
     */
    public function addToReportItems(\Nogrod\eBaySDK\Trading\VeROReportItemType $reportItem)
    {
        $this->reportItems[] = $reportItem;
        return $this;
    }

    /**
     * isset reportItems
     *
     * Container (packet) for items being reported. You can report the same item
     *  more than once in a packet if a different reason code is used each time.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReportItems($index)
    {
        return isset($this->reportItems[$index]);
    }

    /**
     * unset reportItems
     *
     * Container (packet) for items being reported. You can report the same item
     *  more than once in a packet if a different reason code is used each time.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReportItems($index)
    {
        unset($this->reportItems[$index]);
    }

    /**
     * Gets as reportItems
     *
     * Container (packet) for items being reported. You can report the same item
     *  more than once in a packet if a different reason code is used each time.
     *
     * @return \Nogrod\eBaySDK\Trading\VeROReportItemType[]
     */
    public function getReportItems()
    {
        return $this->reportItems;
    }

    /**
     * Sets a new reportItems
     *
     * Container (packet) for items being reported. You can report the same item
     *  more than once in a packet if a different reason code is used each time.
     *
     * @param \Nogrod\eBaySDK\Trading\VeROReportItemType[] $reportItems
     * @return self
     */
    public function setReportItems(array $reportItems)
    {
        $this->reportItems = $reportItems;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getRightsOwnerID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RightsOwnerID", $value);
        }
        $value = $this->getReportItems();
        if (null !== $value && [] !== $this->getReportItems()) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReportItems", array_map(function ($v) {return ["ReportItem" => $v];}, $value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\VeROReportItemsRequestType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        parent::setKeyValue($keyValue);
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}RightsOwnerID');
        if (null !== $value) {
            $this->setRightsOwnerID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReportItems');
        if (null !== $value) {
            $this->setReportItems(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\VeROReportItemType::fromKeyValue(Func::mapObject($v, '{urn:ebay:apis:eBLBaseComponents}ReportItem'));}, $value));
        }
    }
}
