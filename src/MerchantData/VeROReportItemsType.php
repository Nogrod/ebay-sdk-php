<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing VeROReportItemsType
 *
 * Type defining the <b>ReportItems</b> container in the <b>VeROReportItems</b> request. The <b>ReportItems</b> container is an array of one or more eBay items which, according to the product's owner, are infringing upon the product owner's copyright, trademark, or intellectual property rights.
 * XSD Type: VeROReportItemsType
 */
class VeROReportItemsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * A <b>ReportItem</b> container is required for each eBay item that the product owner is reporting as violating the product owner's copyright, trademark, or intellectual property rights. The <b>ItemID</b> and <b>VeROReasonCodeID</b> fields are required, and the rest of the <b>ReportItem</b> fields can be supplied based on the situation.
     *
     * @var \Nogrod\eBaySDK\MerchantData\VeROReportItemType[] $reportItem
     */
    private $reportItem = [
        
    ];

    /**
     * Adds as reportItem
     *
     * A <b>ReportItem</b> container is required for each eBay item that the product owner is reporting as violating the product owner's copyright, trademark, or intellectual property rights. The <b>ItemID</b> and <b>VeROReasonCodeID</b> fields are required, and the rest of the <b>ReportItem</b> fields can be supplied based on the situation.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\VeROReportItemType $reportItem
     */
    public function addToReportItem(\Nogrod\eBaySDK\MerchantData\VeROReportItemType $reportItem)
    {
        $this->reportItem[] = $reportItem;
        return $this;
    }

    /**
     * isset reportItem
     *
     * A <b>ReportItem</b> container is required for each eBay item that the product owner is reporting as violating the product owner's copyright, trademark, or intellectual property rights. The <b>ItemID</b> and <b>VeROReasonCodeID</b> fields are required, and the rest of the <b>ReportItem</b> fields can be supplied based on the situation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReportItem($index)
    {
        return isset($this->reportItem[$index]);
    }

    /**
     * unset reportItem
     *
     * A <b>ReportItem</b> container is required for each eBay item that the product owner is reporting as violating the product owner's copyright, trademark, or intellectual property rights. The <b>ItemID</b> and <b>VeROReasonCodeID</b> fields are required, and the rest of the <b>ReportItem</b> fields can be supplied based on the situation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReportItem($index)
    {
        unset($this->reportItem[$index]);
    }

    /**
     * Gets as reportItem
     *
     * A <b>ReportItem</b> container is required for each eBay item that the product owner is reporting as violating the product owner's copyright, trademark, or intellectual property rights. The <b>ItemID</b> and <b>VeROReasonCodeID</b> fields are required, and the rest of the <b>ReportItem</b> fields can be supplied based on the situation.
     *
     * @return \Nogrod\eBaySDK\MerchantData\VeROReportItemType[]
     */
    public function getReportItem()
    {
        return $this->reportItem;
    }

    /**
     * Sets a new reportItem
     *
     * A <b>ReportItem</b> container is required for each eBay item that the product owner is reporting as violating the product owner's copyright, trademark, or intellectual property rights. The <b>ItemID</b> and <b>VeROReasonCodeID</b> fields are required, and the rest of the <b>ReportItem</b> fields can be supplied based on the situation.
     *
     * @param \Nogrod\eBaySDK\MerchantData\VeROReportItemType[] $reportItem
     * @return self
     */
    public function setReportItem(array $reportItem)
    {
        $this->reportItem = $reportItem;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getReportItem();
        if (null !== $value && !empty($this->getReportItem())) {
            $writer->write(array_map(function ($v) {
                return ["ReportItem" => $v];
            }, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReportItem', true);
        if (null !== $value && !empty($value)) {
            $this->setReportItem(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\VeROReportItemType::fromKeyValue($v);
            }, $value));
        }
    }
}
