<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing VeROReportedItemDetailsType
 *
 * Container for a list of reported items. Can contain zero, one, or multiple
 *  VeROReportedItemType objects, each of which conveys the data for one item listing.
 * XSD Type: VeROReportedItemDetailsType
 */
class VeROReportedItemDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Contains the data and status of a reported item.
     *
     * @var \Nogrod\eBaySDK\Trading\VeROReportedItemType[] $reportedItem
     */
    private $reportedItem = [

    ];

    /**
     * Adds as reportedItem
     *
     * Contains the data and status of a reported item.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\VeROReportedItemType $reportedItem
     */
    public function addToReportedItem(\Nogrod\eBaySDK\Trading\VeROReportedItemType $reportedItem)
    {
        $this->reportedItem[] = $reportedItem;
        return $this;
    }

    /**
     * isset reportedItem
     *
     * Contains the data and status of a reported item.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReportedItem($index)
    {
        return isset($this->reportedItem[$index]);
    }

    /**
     * unset reportedItem
     *
     * Contains the data and status of a reported item.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReportedItem($index)
    {
        unset($this->reportedItem[$index]);
    }

    /**
     * Gets as reportedItem
     *
     * Contains the data and status of a reported item.
     *
     * @return \Nogrod\eBaySDK\Trading\VeROReportedItemType[]
     */
    public function getReportedItem()
    {
        return $this->reportedItem;
    }

    /**
     * Sets a new reportedItem
     *
     * Contains the data and status of a reported item.
     *
     * @param \Nogrod\eBaySDK\Trading\VeROReportedItemType[] $reportedItem
     * @return self
     */
    public function setReportedItem(array $reportedItem)
    {
        $this->reportedItem = $reportedItem;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getReportedItem();
        if (null !== $value && [] !== $this->getReportedItem()) {
            $writer->write(array_map(function ($v) {return ["ReportedItem" => $v];}, $value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\VeROReportedItemDetailsType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReportedItem');
        if (null !== $value) {
            $this->setReportedItem(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\VeROReportedItemType::fromKeyValue($v);}, $value));
        }
    }
}
