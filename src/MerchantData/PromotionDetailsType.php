<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing PromotionDetailsType
 *
 * This type is deprecated.
 * XSD Type: PromotionDetailsType
 */
class PromotionDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $promotionPrice
     */
    private $promotionPrice = null;

    /**
     * This field is deprecated.
     *
     * @var string $promotionPriceType
     */
    private $promotionPriceType = null;

    /**
     * This field is deprecated.
     *
     * @var int $bidCount
     */
    private $bidCount = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $convertedPromotionPrice
     */
    private $convertedPromotionPrice = null;

    /**
     * Gets as promotionPrice
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getPromotionPrice()
    {
        return $this->promotionPrice;
    }

    /**
     * Sets a new promotionPrice
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $promotionPrice
     * @return self
     */
    public function setPromotionPrice(\Nogrod\eBaySDK\MerchantData\AmountType $promotionPrice)
    {
        $this->promotionPrice = $promotionPrice;
        return $this;
    }

    /**
     * Gets as promotionPriceType
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getPromotionPriceType()
    {
        return $this->promotionPriceType;
    }

    /**
     * Sets a new promotionPriceType
     *
     * This field is deprecated.
     *
     * @param string $promotionPriceType
     * @return self
     */
    public function setPromotionPriceType($promotionPriceType)
    {
        $this->promotionPriceType = $promotionPriceType;
        return $this;
    }

    /**
     * Gets as bidCount
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getBidCount()
    {
        return $this->bidCount;
    }

    /**
     * Sets a new bidCount
     *
     * This field is deprecated.
     *
     * @param int $bidCount
     * @return self
     */
    public function setBidCount($bidCount)
    {
        $this->bidCount = $bidCount;
        return $this;
    }

    /**
     * Gets as convertedPromotionPrice
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getConvertedPromotionPrice()
    {
        return $this->convertedPromotionPrice;
    }

    /**
     * Sets a new convertedPromotionPrice
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $convertedPromotionPrice
     * @return self
     */
    public function setConvertedPromotionPrice(\Nogrod\eBaySDK\MerchantData\AmountType $convertedPromotionPrice)
    {
        $this->convertedPromotionPrice = $convertedPromotionPrice;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getPromotionPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PromotionPrice", $value);
        }
        $value = $this->getPromotionPriceType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PromotionPriceType", $value);
        }
        $value = $this->getBidCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BidCount", $value);
        }
        $value = $this->getConvertedPromotionPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ConvertedPromotionPrice", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PromotionPrice');
        if (null !== $value) {
            $this->setPromotionPrice(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PromotionPriceType');
        if (null !== $value) {
            $this->setPromotionPriceType($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BidCount');
        if (null !== $value) {
            $this->setBidCount($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ConvertedPromotionPrice');
        if (null !== $value) {
            $this->setConvertedPromotionPrice(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
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
