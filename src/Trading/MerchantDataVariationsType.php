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
class MerchantDataVariationsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
        if (!is_array($this->variation)) {
            throw new \LogicException('variation is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\MerchantDataVariationType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\MerchantDataVariationType> $variation
     * @return self
     */
    public function setVariation(iterable $variation)
    {
        $this->variation = $variation;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->variation;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'Variation', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\MerchantDataVariationsType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->variation = [];
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'Variation':
                    $this->variation[] = \Nogrod\eBaySDK\Trading\MerchantDataVariationType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['Variation'] = Func::jsonList($this->variation);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
