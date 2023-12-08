<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ListingAnalyzerRecommendationsType
 *
 * This type is deprecated.
 * XSD Type: ListingAnalyzerRecommendationsType
 */
class ListingAnalyzerRecommendationsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\ListingTipType[] $listingTipArray
     */
    private $listingTipArray = null;

    /**
     * Adds as listingTip
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ListingTipType $listingTip
     */
    public function addToListingTipArray(\Nogrod\eBaySDK\Trading\ListingTipType $listingTip)
    {
        $this->listingTipArray[] = $listingTip;
        return $this;
    }

    /**
     * isset listingTipArray
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetListingTipArray($index)
    {
        return isset($this->listingTipArray[$index]);
    }

    /**
     * unset listingTipArray
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetListingTipArray($index)
    {
        unset($this->listingTipArray[$index]);
    }

    /**
     * Gets as listingTipArray
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\ListingTipType[]
     */
    public function getListingTipArray()
    {
        return $this->listingTipArray;
    }

    /**
     * Sets a new listingTipArray
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\ListingTipType[] $listingTipArray
     * @return self
     */
    public function setListingTipArray(array $listingTipArray)
    {
        $this->listingTipArray = $listingTipArray;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getListingTipArray();
        if (null !== $value && !empty($this->getListingTipArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ListingTipArray", array_map(function ($v) {return ["ListingTip" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingTipArray', true);
        if (null !== $value && !empty($value)) {
            $this->setListingTipArray(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\ListingTipType::fromKeyValue($v);}, $value));
        }
    }
}
