<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MerchantDataVariationsType
 *
 * Variations are multiple similar (but not identical) items in a
 *  single fixed-price (or Store Inventory Format) listing.
 *  For example, a single listing could contain multiple items of the
 *  same brand and model that vary by color and size (like "Blue, Large" and "Black, Medium").
 *  Each variation can have its own quantity and price. For example, a listing could
 *  include 10 "Blue, Large" variations and 20 "Black, Medium" variations.
 * XSD Type: MerchantDataVariationsType
 */
class MerchantDataVariationsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Contains data that distinguishes one variation from
     *  another.
     *  For example, if the items vary by color and size,
     *  each Variation node specifies a combination of one of
     *  those colors and sizes. Always returned when variations
     *  are present.
     *
     * @var \Nogrod\eBaySDK\Trading\MerchantDataVariationType[] $variation
     */
    private $variation = [

    ];

    /**
     * Adds as variation
     *
     * Contains data that distinguishes one variation from
     *  another.
     *  For example, if the items vary by color and size,
     *  each Variation node specifies a combination of one of
     *  those colors and sizes. Always returned when variations
     *  are present.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\MerchantDataVariationType $variation
     */
    public function addToVariation(\Nogrod\eBaySDK\Trading\MerchantDataVariationType $variation)
    {
        $this->variation[] = $variation;
        return $this;
    }

    /**
     * isset variation
     *
     * Contains data that distinguishes one variation from
     *  another.
     *  For example, if the items vary by color and size,
     *  each Variation node specifies a combination of one of
     *  those colors and sizes. Always returned when variations
     *  are present.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVariation($index)
    {
        return isset($this->variation[$index]);
    }

    /**
     * unset variation
     *
     * Contains data that distinguishes one variation from
     *  another.
     *  For example, if the items vary by color and size,
     *  each Variation node specifies a combination of one of
     *  those colors and sizes. Always returned when variations
     *  are present.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVariation($index)
    {
        unset($this->variation[$index]);
    }

    /**
     * Gets as variation
     *
     * Contains data that distinguishes one variation from
     *  another.
     *  For example, if the items vary by color and size,
     *  each Variation node specifies a combination of one of
     *  those colors and sizes. Always returned when variations
     *  are present.
     *
     * @return \Nogrod\eBaySDK\Trading\MerchantDataVariationType[]
     */
    public function getVariation()
    {
        return $this->variation;
    }

    /**
     * Sets a new variation
     *
     * Contains data that distinguishes one variation from
     *  another.
     *  For example, if the items vary by color and size,
     *  each Variation node specifies a combination of one of
     *  those colors and sizes. Always returned when variations
     *  are present.
     *
     * @param \Nogrod\eBaySDK\Trading\MerchantDataVariationType[] $variation
     * @return self
     */
    public function setVariation(array $variation)
    {
        $this->variation = $variation;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getVariation();
        if (null !== $value && [] !== $this->getVariation()) {
            $writer->write(array_map(function ($v) {return ["Variation" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Variation');
        if (null !== $value) {
            $this->setVariation(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\MerchantDataVariationType::fromKeyValue($v);}, $value));
        }
    }
}
