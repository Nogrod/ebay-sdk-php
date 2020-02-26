<?php

namespace Nogrod\eBaySDK\MerchantData;

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
     * @var \Nogrod\eBaySDK\MerchantData\ProductSuggestionType[] $productSuggestion
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
     * @param \Nogrod\eBaySDK\MerchantData\ProductSuggestionType $productSuggestion
     */
    public function addToProductSuggestion(\Nogrod\eBaySDK\MerchantData\ProductSuggestionType $productSuggestion)
    {
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
     * @return \Nogrod\eBaySDK\MerchantData\ProductSuggestionType[]
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
     * @param \Nogrod\eBaySDK\MerchantData\ProductSuggestionType[] $productSuggestion
     * @return self
     */
    public function setProductSuggestion(array $productSuggestion)
    {
        $this->productSuggestion = $productSuggestion;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getProductSuggestion();
        if (null !== $value && !empty($this->getProductSuggestion())) {
            $writer->write(array_map(function ($v) {
                return ["ProductSuggestion" => $v];
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductSuggestion', true);
        if (null !== $value && !empty($value)) {
            $this->setProductSuggestion(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\ProductSuggestionType::fromKeyValue($v);
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
