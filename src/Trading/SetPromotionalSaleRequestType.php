<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SetPromotionalSaleRequestType
 *
 * <span class="tablenote"><b>Note: </b> While the Trading API continues to support item promotions for an eBay store owner, the Trading API will no longer be enhanced with any new item promotion capabilities as they are developed by eBay. In addition, Promoted Listings are also not supported by the Trading API. For these two reasons, it is recommended that sellers/developers make plans to migrate to the
 *  <a href="https://developer.ebay.com/api-docs/sell/marketing/overview.html">Marketing API</a>, which provides all Promotions Manager and Promoted Listings capabilities, and this API will continue to be improved and enhanced as more marketing features become available to sellers.
 *  </span>
 *  Creates or modifies a promotional sale. Promotional sales enable sellers
 *  to apply discounts and/or free shipping across many listings. To use this call, the seller must be a registered eBay Store owner.
 * XSD Type: SetPromotionalSaleRequestType
 */
class SetPromotionalSaleRequestType extends AbstractRequestType
{

    /**
     * The seller must include this field and set it to 'Add' to create a new promotional sale, or set it to 'Update' to modify an existing promotional sale, or set it to 'Delete' to delete a promotional sale.
     *
     * @var string $action
     */
    private $action = null;

    /**
     * This container must be included in each <b>SetPromotionalSale</b> call. The fields of this container that will be used will depend on whether the seller is adding a new promotional sale, updating an existing promotional sale, or deleting an existing promotional sale.
     *
     * @var \Nogrod\eBaySDK\Trading\PromotionalSaleType $promotionalSaleDetails
     */
    private $promotionalSaleDetails = null;

    /**
     * Gets as action
     *
     * The seller must include this field and set it to 'Add' to create a new promotional sale, or set it to 'Update' to modify an existing promotional sale, or set it to 'Delete' to delete a promotional sale.
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Sets a new action
     *
     * The seller must include this field and set it to 'Add' to create a new promotional sale, or set it to 'Update' to modify an existing promotional sale, or set it to 'Delete' to delete a promotional sale.
     *
     * @param string $action
     * @return self
     */
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * Gets as promotionalSaleDetails
     *
     * This container must be included in each <b>SetPromotionalSale</b> call. The fields of this container that will be used will depend on whether the seller is adding a new promotional sale, updating an existing promotional sale, or deleting an existing promotional sale.
     *
     * @return \Nogrod\eBaySDK\Trading\PromotionalSaleType
     */
    public function getPromotionalSaleDetails()
    {
        return $this->promotionalSaleDetails;
    }

    /**
     * Sets a new promotionalSaleDetails
     *
     * This container must be included in each <b>SetPromotionalSale</b> call. The fields of this container that will be used will depend on whether the seller is adding a new promotional sale, updating an existing promotional sale, or deleting an existing promotional sale.
     *
     * @param \Nogrod\eBaySDK\Trading\PromotionalSaleType $promotionalSaleDetails
     * @return self
     */
    public function setPromotionalSaleDetails(\Nogrod\eBaySDK\Trading\PromotionalSaleType $promotionalSaleDetails)
    {
        $this->promotionalSaleDetails = $promotionalSaleDetails;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getAction();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Action", $value);
        }
        $value = $this->getPromotionalSaleDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PromotionalSaleDetails", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Action');
        if (null !== $value) {
            $this->setAction($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PromotionalSaleDetails');
        if (null !== $value) {
            $this->setPromotionalSaleDetails(\Nogrod\eBaySDK\Trading\PromotionalSaleType::fromKeyValue($value));
        }
    }
}
