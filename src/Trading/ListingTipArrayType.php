<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ListingTipArrayType
 *
 * This type is deprecated.
 * XSD Type: ListingTipArrayType
 */
class ListingTipArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\ListingTipType[] $listingTip
     */
    private $listingTip = [
        
    ];

    /**
     * Adds as listingTip
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ListingTipType $listingTip
     */
    public function addToListingTip(\Nogrod\eBaySDK\Trading\ListingTipType $listingTip)
    {
        $this->listingTip[] = $listingTip;
        return $this;
    }

    /**
     * isset listingTip
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetListingTip($index)
    {
        return isset($this->listingTip[$index]);
    }

    /**
     * unset listingTip
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetListingTip($index)
    {
        unset($this->listingTip[$index]);
    }

    /**
     * Gets as listingTip
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\ListingTipType[]
     */
    public function getListingTip()
    {
        return $this->listingTip;
    }

    /**
     * Sets a new listingTip
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\ListingTipType[] $listingTip
     * @return self
     */
    public function setListingTip(array $listingTip)
    {
        $this->listingTip = $listingTip;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getListingTip();
        if (null !== $value && !empty($this->getListingTip())) {
            $writer->write(array_map(function ($v) {
                return ["ListingTip" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingTip', true);
        if (null !== $value && !empty($value)) {
            $this->setListingTip(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ListingTipType::fromKeyValue($v);
            }, $value));
        }
    }
}
