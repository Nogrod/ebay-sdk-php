<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PromotionRuleArrayType
 *
 * This type is deprecated.
 * XSD Type: PromotionRuleArrayType
 */
class PromotionRuleArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\PromotionRuleType[] $promotionRule
     */
    private $promotionRule = [

    ];

    /**
     * Adds as promotionRule
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\PromotionRuleType $promotionRule
     */
    public function addToPromotionRule(\Nogrod\eBaySDK\MerchantData\PromotionRuleType $promotionRule)
    {
        $this->promotionRule[] = $promotionRule;
        return $this;
    }

    /**
     * isset promotionRule
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPromotionRule($index)
    {
        return isset($this->promotionRule[$index]);
    }

    /**
     * unset promotionRule
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPromotionRule($index)
    {
        unset($this->promotionRule[$index]);
    }

    /**
     * Gets as promotionRule
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\PromotionRuleType[]
     */
    public function getPromotionRule()
    {
        return $this->promotionRule;
    }

    /**
     * Sets a new promotionRule
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\PromotionRuleType[] $promotionRule
     * @return self
     */
    public function setPromotionRule(array $promotionRule)
    {
        $this->promotionRule = $promotionRule;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getPromotionRule();
        if (null !== $value && !empty($this->getPromotionRule())) {
            $writer->write(array_map(function ($v) {
                return ["PromotionRule" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PromotionRule', true);
        if (null !== $value && !empty($value)) {
            $this->setPromotionRule(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\PromotionRuleType::fromKeyValue($v);
            }, $value));
        }
    }
}
