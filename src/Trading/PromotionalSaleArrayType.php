<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing PromotionalSaleArrayType
 *
 * <span class="tablenote"><b>Note: </b> While the Trading API continues to support item promotions for an eBay store owner, the Trading API will no longer be enhanced with any new item promotion capabilities as they are developed by eBay. In addition, Promoted Listings are also not supported by the Trading API. For these two reasons, it is recommended that sellers/developers make plans to migrate to the
 *  <a href="https://developer.ebay.com/api-docs/sell/marketing/overview.html">Marketing API</a>, which provides all Promotions Manager and Promoted Listings capabilities, and this API will continue to be improved and enhanced as more marketing features become available to sellers.
 *  </span>
 *  This type is used by the <strong>PromotionalSaleDetails</strong> container returned in the <strong>GetPromotionalSaleDetails</strong> call. The <strong>PromotionalSaleDetails</strong> container consists of one or promotional sales that match the input criteria.
 *  <br/><br/>
 *  Promotional Sales are only available to eBay sellers who are eBay Store subscribers.
 * XSD Type: PromotionalSaleArrayType
 */
class PromotionalSaleArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Each <strong>PromotionalSale</strong> container consists of detailed information on a seller's promotional sale. Each promotional sale that matches the input criteria is returned.
     *  <br/><br/>
     *  Promotional Sales are only available to eBay sellers who are eBay Store subscribers.
     *
     * @var \Nogrod\eBaySDK\Trading\PromotionalSaleType[] $promotionalSale
     */
    private $promotionalSale = [
        
    ];

    /**
     * Adds as promotionalSale
     *
     * Each <strong>PromotionalSale</strong> container consists of detailed information on a seller's promotional sale. Each promotional sale that matches the input criteria is returned.
     *  <br/><br/>
     *  Promotional Sales are only available to eBay sellers who are eBay Store subscribers.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\PromotionalSaleType $promotionalSale
     */
    public function addToPromotionalSale(\Nogrod\eBaySDK\Trading\PromotionalSaleType $promotionalSale)
    {
        $this->promotionalSale[] = $promotionalSale;
        return $this;
    }

    /**
     * isset promotionalSale
     *
     * Each <strong>PromotionalSale</strong> container consists of detailed information on a seller's promotional sale. Each promotional sale that matches the input criteria is returned.
     *  <br/><br/>
     *  Promotional Sales are only available to eBay sellers who are eBay Store subscribers.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPromotionalSale($index)
    {
        return isset($this->promotionalSale[$index]);
    }

    /**
     * unset promotionalSale
     *
     * Each <strong>PromotionalSale</strong> container consists of detailed information on a seller's promotional sale. Each promotional sale that matches the input criteria is returned.
     *  <br/><br/>
     *  Promotional Sales are only available to eBay sellers who are eBay Store subscribers.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPromotionalSale($index)
    {
        unset($this->promotionalSale[$index]);
    }

    /**
     * Gets as promotionalSale
     *
     * Each <strong>PromotionalSale</strong> container consists of detailed information on a seller's promotional sale. Each promotional sale that matches the input criteria is returned.
     *  <br/><br/>
     *  Promotional Sales are only available to eBay sellers who are eBay Store subscribers.
     *
     * @return \Nogrod\eBaySDK\Trading\PromotionalSaleType[]
     */
    public function getPromotionalSale()
    {
        return $this->promotionalSale;
    }

    /**
     * Sets a new promotionalSale
     *
     * Each <strong>PromotionalSale</strong> container consists of detailed information on a seller's promotional sale. Each promotional sale that matches the input criteria is returned.
     *  <br/><br/>
     *  Promotional Sales are only available to eBay sellers who are eBay Store subscribers.
     *
     * @param \Nogrod\eBaySDK\Trading\PromotionalSaleType[] $promotionalSale
     * @return self
     */
    public function setPromotionalSale(array $promotionalSale)
    {
        $this->promotionalSale = $promotionalSale;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getPromotionalSale();
        if (null !== $value && !empty($this->getPromotionalSale())) {
            $writer->write(array_map(function ($v) {
                return ["PromotionalSale" => $v];
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PromotionalSale', true);
        if (null !== $value && !empty($value)) {
            $this->setPromotionalSale(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\PromotionalSaleType::fromKeyValue($v);
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
