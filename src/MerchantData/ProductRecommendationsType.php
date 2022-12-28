<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ProductRecommendationsType
 *
 * This type is deprecated.
 * XSD Type: ProductRecommendationsType
 */
class ProductRecommendationsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ProductInfoType[] $product
     */
    private $product = [

    ];

    /**
     * Adds as product
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\ProductInfoType $product
     */
    public function addToProduct(\Nogrod\eBaySDK\MerchantData\ProductInfoType $product)
    {
        $this->product[] = $product;
        return $this;
    }

    /**
     * isset product
     *
     * This field is deprecated.
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
     * This field is deprecated.
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
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ProductInfoType[]
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Sets a new product
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ProductInfoType[] $product
     * @return self
     */
    public function setProduct(array $product)
    {
        $this->product = $product;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Product', true);
        if (null !== $value && !empty($value)) {
            $this->setProduct(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\ProductInfoType::fromKeyValue($v);
            }, $value));
        }
    }
}
