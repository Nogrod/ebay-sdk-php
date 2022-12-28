<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PricingRecommendationsType
 *
 * This type is deprecated.
 * XSD Type: PricingRecommendationsType
 */
class PricingRecommendationsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ProductInfoType $productInfo
     */
    private $productInfo = null;

    /**
     * Gets as productInfo
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ProductInfoType
     */
    public function getProductInfo()
    {
        return $this->productInfo;
    }

    /**
     * Sets a new productInfo
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ProductInfoType $productInfo
     * @return self
     */
    public function setProductInfo(\Nogrod\eBaySDK\MerchantData\ProductInfoType $productInfo)
    {
        $this->productInfo = $productInfo;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getProductInfo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductInfo", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductInfo');
        if (null !== $value) {
            $this->setProductInfo(\Nogrod\eBaySDK\MerchantData\ProductInfoType::fromKeyValue($value));
        }
    }
}
