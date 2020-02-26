<?php

namespace Nogrod\eBaySDK\Shopping;

/**
 * Class representing HalfProductsType
 *
 * <span class="tablenote"><b>Note: </b> <b>HalfProductsType</b> and the <b>Product</b> element are deprecated along with the <b>FindHalfProducts</b> call.
 *  </span>
 * XSD Type: HalfProductsType
 */
class HalfProductsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * <span class="tablenote"><b>Note: </b> <b>HalfProductsType</b> and the <b>Product</b> element are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Shopping\HalfCatalogProductType[] $product
     */
    private $product = [
        
    ];

    /**
     * Adds as product
     *
     * <span class="tablenote"><b>Note: </b> <b>HalfProductsType</b> and the <b>Product</b> element are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\HalfCatalogProductType $product
     */
    public function addToProduct(\Nogrod\eBaySDK\Shopping\HalfCatalogProductType $product)
    {
        $this->product[] = $product;
        return $this;
    }

    /**
     * isset product
     *
     * <span class="tablenote"><b>Note: </b> <b>HalfProductsType</b> and the <b>Product</b> element are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProduct($index)
    {
        return isset($this->product[$index]);
    }

    /**
     * unset product
     *
     * <span class="tablenote"><b>Note: </b> <b>HalfProductsType</b> and the <b>Product</b> element are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProduct($index)
    {
        unset($this->product[$index]);
    }

    /**
     * Gets as product
     *
     * <span class="tablenote"><b>Note: </b> <b>HalfProductsType</b> and the <b>Product</b> element are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Shopping\HalfCatalogProductType[]
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Sets a new product
     *
     * <span class="tablenote"><b>Note: </b> <b>HalfProductsType</b> and the <b>Product</b> element are deprecated along with the <b>FindHalfProducts</b> call.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Shopping\HalfCatalogProductType[] $product
     * @return self
     */
    public function setProduct(array $product)
    {
        $this->product = $product;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getProduct();
        if (null !== $value && !empty($this->getProduct())) {
            $writer->write(array_map(function ($v) {
                return ["Product" => $v];
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Product', true);
        if (null !== $value && !empty($value)) {
            $this->setProduct(array_map(function ($v) {
                return \Nogrod\eBaySDK\Shopping\HalfCatalogProductType::fromKeyValue($v);
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
