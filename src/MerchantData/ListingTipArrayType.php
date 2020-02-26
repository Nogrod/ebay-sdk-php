<?php

namespace Nogrod\eBaySDK\MerchantData;

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
     * @var \Nogrod\eBaySDK\MerchantData\ListingTipType[] $listingTip
     */
    private $listingTip = [
        
    ];

    /**
     * Adds as listingTip
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\ListingTipType $listingTip
     */
    public function addToListingTip(\Nogrod\eBaySDK\MerchantData\ListingTipType $listingTip)
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
     * @return \Nogrod\eBaySDK\MerchantData\ListingTipType[]
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
     * @param \Nogrod\eBaySDK\MerchantData\ListingTipType[] $listingTip
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingTip', true);
        if (null !== $value && !empty($value)) {
            $this->setListingTip(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\ListingTipType::fromKeyValue($v);
            }, $value));
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
