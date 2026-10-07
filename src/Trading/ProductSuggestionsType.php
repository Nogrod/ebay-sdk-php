<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ProductSuggestionsType
 *
 * Provides a list of products recommended by eBay, which match the item information
 *  provided by the seller.
 * XSD Type: ProductSuggestionsType
 */
class ProductSuggestionsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Contains details for one or more individual product suggestions. The product
     *  details include the EPID, Title, Stock photo url and whether or not the product
     *  is an exact match for the submitted item. This product information can be used
     *  to list subsequent items.
     *
     * @var \Nogrod\eBaySDK\Trading\ProductSuggestionType[] $productSuggestion
     */
    private $productSuggestion = [

    ];

    /**
     * Adds as productSuggestion
     *
     * Contains details for one or more individual product suggestions. The product
     *  details include the EPID, Title, Stock photo url and whether or not the product
     *  is an exact match for the submitted item. This product information can be used
     *  to list subsequent items.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ProductSuggestionType $productSuggestion
     */
    public function addToProductSuggestion(\Nogrod\eBaySDK\Trading\ProductSuggestionType $productSuggestion)
    {
        if (!is_array($this->productSuggestion)) {
            throw new \LogicException('productSuggestion is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->productSuggestion[] = $productSuggestion;
        return $this;
    }

    /**
     * isset productSuggestion
     *
     * Contains details for one or more individual product suggestions. The product
     *  details include the EPID, Title, Stock photo url and whether or not the product
     *  is an exact match for the submitted item. This product information can be used
     *  to list subsequent items.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProductSuggestion($index)
    {
        return isset($this->productSuggestion[$index]);
    }

    /**
     * unset productSuggestion
     *
     * Contains details for one or more individual product suggestions. The product
     *  details include the EPID, Title, Stock photo url and whether or not the product
     *  is an exact match for the submitted item. This product information can be used
     *  to list subsequent items.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProductSuggestion($index)
    {
        unset($this->productSuggestion[$index]);
    }

    /**
     * Gets as productSuggestion
     *
     * Contains details for one or more individual product suggestions. The product
     *  details include the EPID, Title, Stock photo url and whether or not the product
     *  is an exact match for the submitted item. This product information can be used
     *  to list subsequent items.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\ProductSuggestionType>
     */
    public function getProductSuggestion()
    {
        return $this->productSuggestion;
    }

    /**
     * Sets a new productSuggestion
     *
     * Contains details for one or more individual product suggestions. The product
     *  details include the EPID, Title, Stock photo url and whether or not the product
     *  is an exact match for the submitted item. This product information can be used
     *  to list subsequent items.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\ProductSuggestionType> $productSuggestion
     * @return self
     */
    public function setProductSuggestion(iterable $productSuggestion)
    {
        $this->productSuggestion = $productSuggestion;
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
        $value = $this->productSuggestion;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'ProductSuggestion', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\ProductSuggestionsType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->productSuggestion = [];
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
                case 'ProductSuggestion':
                    $this->productSuggestion[] = \Nogrod\eBaySDK\Trading\ProductSuggestionType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
