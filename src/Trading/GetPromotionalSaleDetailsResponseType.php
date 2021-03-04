<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetPromotionalSaleDetailsResponseType
 *
 * <span class="tablenote"><b>Note: </b> While the Trading API continues to support item promotions for an eBay store owner, the Trading API will no longer be enhanced with any new item promotion capabilities as they are developed by eBay. In addition, Promoted Listings are also not supported by the Trading API. For these two reasons, it is recommended that sellers/developers make plans to migrate to the
 *  <a href="https://developer.ebay.com/api-docs/sell/marketing/overview.html">Marketing API</a>, which provides all Promotions Manager and Promoted Listings capabilities, and this API will continue to be improved and enhanced as more marketing features become available to sellers.
 *  </span>
 *  The base response type for the <b>GetPromotionalSaleDetails</b> call. This call retrieves information about promotional sales set up by an eBay store owner.
 * XSD Type: GetPromotionalSaleDetailsResponseType
 */
class GetPromotionalSaleDetailsResponseType extends AbstractResponseType
{
    /**
     * This container consists of an array of one or more promotional sales for an eBay store owner. A <b>PromotionalSaleDetails.PromotionalSale</b> container is returned for each promotional sale that matches the input criteria in the call request.
     *
     * @var \Nogrod\eBaySDK\Trading\PromotionalSaleType[] $promotionalSaleDetails
     */
    private $promotionalSaleDetails = null;

    /**
     * Adds as promotionalSale
     *
     * This container consists of an array of one or more promotional sales for an eBay store owner. A <b>PromotionalSaleDetails.PromotionalSale</b> container is returned for each promotional sale that matches the input criteria in the call request.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\PromotionalSaleType $promotionalSale
     */
    public function addToPromotionalSaleDetails(\Nogrod\eBaySDK\Trading\PromotionalSaleType $promotionalSale)
    {
        $this->promotionalSaleDetails[] = $promotionalSale;
        return $this;
    }

    /**
     * isset promotionalSaleDetails
     *
     * This container consists of an array of one or more promotional sales for an eBay store owner. A <b>PromotionalSaleDetails.PromotionalSale</b> container is returned for each promotional sale that matches the input criteria in the call request.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPromotionalSaleDetails($index)
    {
        return isset($this->promotionalSaleDetails[$index]);
    }

    /**
     * unset promotionalSaleDetails
     *
     * This container consists of an array of one or more promotional sales for an eBay store owner. A <b>PromotionalSaleDetails.PromotionalSale</b> container is returned for each promotional sale that matches the input criteria in the call request.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPromotionalSaleDetails($index)
    {
        unset($this->promotionalSaleDetails[$index]);
    }

    /**
     * Gets as promotionalSaleDetails
     *
     * This container consists of an array of one or more promotional sales for an eBay store owner. A <b>PromotionalSaleDetails.PromotionalSale</b> container is returned for each promotional sale that matches the input criteria in the call request.
     *
     * @return \Nogrod\eBaySDK\Trading\PromotionalSaleType[]
     */
    public function getPromotionalSaleDetails()
    {
        return $this->promotionalSaleDetails;
    }

    /**
     * Sets a new promotionalSaleDetails
     *
     * This container consists of an array of one or more promotional sales for an eBay store owner. A <b>PromotionalSaleDetails.PromotionalSale</b> container is returned for each promotional sale that matches the input criteria in the call request.
     *
     * @param \Nogrod\eBaySDK\Trading\PromotionalSaleType[] $promotionalSaleDetails
     * @return self
     */
    public function setPromotionalSaleDetails(array $promotionalSaleDetails)
    {
        $this->promotionalSaleDetails = $promotionalSaleDetails;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getPromotionalSaleDetails();
        if (null !== $value && !empty($this->getPromotionalSaleDetails())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PromotionalSaleDetails", array_map(function ($v) {
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
        parent::setKeyValue($keyValue);
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PromotionalSaleDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setPromotionalSaleDetails(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\PromotionalSaleType::fromKeyValue($v);
            }, $value));
        }
    }
}
