<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CharacteristicsSetProductHistogramType
 *
 * This type is deprecated.
 * XSD Type: CharacteristicsSetProductHistogramType
 */
class CharacteristicsSetProductHistogramType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\HistogramEntryType[] $histogramEntry
     */
    private $histogramEntry = [

    ];

    /**
     * Adds as histogramEntry
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\HistogramEntryType $histogramEntry
     */
    public function addToHistogramEntry(\Nogrod\eBaySDK\MerchantData\HistogramEntryType $histogramEntry)
    {
        $this->histogramEntry[] = $histogramEntry;
        return $this;
    }

    /**
     * isset histogramEntry
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHistogramEntry($index)
    {
        return isset($this->histogramEntry[$index]);
    }

    /**
     * unset histogramEntry
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHistogramEntry($index)
    {
        unset($this->histogramEntry[$index]);
    }

    /**
     * Gets as histogramEntry
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\HistogramEntryType[]
     */
    public function getHistogramEntry()
    {
        return $this->histogramEntry;
    }

    /**
     * Sets a new histogramEntry
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\HistogramEntryType[] $histogramEntry
     * @return self
     */
    public function setHistogramEntry(array $histogramEntry)
    {
        $this->histogramEntry = $histogramEntry;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getHistogramEntry();
        if (null !== $value && !empty($this->getHistogramEntry())) {
            $writer->write(array_map(function ($v) {
                return ["HistogramEntry" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}HistogramEntry', true);
        if (null !== $value && !empty($value)) {
            $this->setHistogramEntry(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\HistogramEntryType::fromKeyValue($v);
            }, $value));
        }
    }
}
