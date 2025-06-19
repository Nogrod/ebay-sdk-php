<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetBestOffersRequestType
 *
 * This is the base request type of the <b>GetBestOffers</b> call. Depending on the input parameters that are used, this call can be used by a seller to retrieve all active Best Offers, all Best Offers on a specific listing, a specific Best Offer for a specific listing, or Best Offers in a specific state.
 *  <br/><br/>
 *  <span class="tablenote"><b>Note: </b>
 *  The Best Offer feature is now available for auction listings on the following sites: US, Canada, UK, Germany, Australia, France, Italy, and Spain. However, sellers must choose between offering Best Offer or Buy It Now on an auction listing, as both features cannot be enabled on the same auction listing.
 *  </span>
 * XSD Type: GetBestOffersRequestType
 */
class GetBestOffersRequestType extends AbstractRequestType
{
    /**
     * The unique identifier of an eBay listing. If an <b>ItemID</b> is used by itself in the call request, all Best Offers in all states are retrieved for this listing. However, the seller can also combine <b>ItemID</b> and a <b>BestOfferStatus</b> value if that seller only wants to see Best Offers in a specific state. If a <b>BestOfferID</b> field is included in the call request, any <b>ItemID</b> value will be ignored since eBay will only search for and return the Best Offer identified in the <b>BestOfferID</b> field.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * The unique identifier of a Best Offer. An identifier for a Best Offer is automatically created by eBay once a prospective buyer makes a Best Offer on a Best Offer-enabled listing. If a <b>BestOfferID</b> value is supplied in the call request, any <b>ItemID</b> or <b>BestOfferStatus</b> values will be ignored. Only the Best Offer identified by the <b>BestOfferID</b> value will be returned.
     *
     * @var string $bestOfferID
     */
    private $bestOfferID = null;

    /**
     * This field can be used if the seller wants to retrieve Best Offers in a specific state. The typical use case for this field is when the seller wants to retrieve Best Offers in all states for a specific listing. In fact, the <b>All</b> value can only be used if an <b>ItemID</b> value is also supplied in the call request. If a <b>BestOfferID</b> field is included in the call request, any <b>BestOfferStatus</b> value will be ignored since eBay will only search for and return the Best Offer identified in the <b>BestOfferID</b> field.
     *  <br/>
     *
     * @var string $bestOfferStatus
     */
    private $bestOfferStatus = null;

    /**
     * This container can be used if the seller is expecting that the <b>GetBestOffers</b> call will retrieve a large number of results, so that seller wishes to view just a subset (one page of multiple pages) of those results at a time. See this container's child fields for more information on how pagination is used.
     *
     * @var \Nogrod\eBaySDK\Trading\PaginationType $pagination
     */
    private $pagination = null;

    /**
     * Gets as itemID
     *
     * The unique identifier of an eBay listing. If an <b>ItemID</b> is used by itself in the call request, all Best Offers in all states are retrieved for this listing. However, the seller can also combine <b>ItemID</b> and a <b>BestOfferStatus</b> value if that seller only wants to see Best Offers in a specific state. If a <b>BestOfferID</b> field is included in the call request, any <b>ItemID</b> value will be ignored since eBay will only search for and return the Best Offer identified in the <b>BestOfferID</b> field.
     *
     * @return string
     */
    public function getItemID()
    {
        return $this->itemID;
    }

    /**
     * Sets a new itemID
     *
     * The unique identifier of an eBay listing. If an <b>ItemID</b> is used by itself in the call request, all Best Offers in all states are retrieved for this listing. However, the seller can also combine <b>ItemID</b> and a <b>BestOfferStatus</b> value if that seller only wants to see Best Offers in a specific state. If a <b>BestOfferID</b> field is included in the call request, any <b>ItemID</b> value will be ignored since eBay will only search for and return the Best Offer identified in the <b>BestOfferID</b> field.
     *
     * @param string $itemID
     * @return self
     */
    public function setItemID($itemID)
    {
        $this->itemID = $itemID;
        return $this;
    }

    /**
     * Gets as bestOfferID
     *
     * The unique identifier of a Best Offer. An identifier for a Best Offer is automatically created by eBay once a prospective buyer makes a Best Offer on a Best Offer-enabled listing. If a <b>BestOfferID</b> value is supplied in the call request, any <b>ItemID</b> or <b>BestOfferStatus</b> values will be ignored. Only the Best Offer identified by the <b>BestOfferID</b> value will be returned.
     *
     * @return string
     */
    public function getBestOfferID()
    {
        return $this->bestOfferID;
    }

    /**
     * Sets a new bestOfferID
     *
     * The unique identifier of a Best Offer. An identifier for a Best Offer is automatically created by eBay once a prospective buyer makes a Best Offer on a Best Offer-enabled listing. If a <b>BestOfferID</b> value is supplied in the call request, any <b>ItemID</b> or <b>BestOfferStatus</b> values will be ignored. Only the Best Offer identified by the <b>BestOfferID</b> value will be returned.
     *
     * @param string $bestOfferID
     * @return self
     */
    public function setBestOfferID($bestOfferID)
    {
        $this->bestOfferID = $bestOfferID;
        return $this;
    }

    /**
     * Gets as bestOfferStatus
     *
     * This field can be used if the seller wants to retrieve Best Offers in a specific state. The typical use case for this field is when the seller wants to retrieve Best Offers in all states for a specific listing. In fact, the <b>All</b> value can only be used if an <b>ItemID</b> value is also supplied in the call request. If a <b>BestOfferID</b> field is included in the call request, any <b>BestOfferStatus</b> value will be ignored since eBay will only search for and return the Best Offer identified in the <b>BestOfferID</b> field.
     *  <br/>
     *
     * @return string
     */
    public function getBestOfferStatus()
    {
        return $this->bestOfferStatus;
    }

    /**
     * Sets a new bestOfferStatus
     *
     * This field can be used if the seller wants to retrieve Best Offers in a specific state. The typical use case for this field is when the seller wants to retrieve Best Offers in all states for a specific listing. In fact, the <b>All</b> value can only be used if an <b>ItemID</b> value is also supplied in the call request. If a <b>BestOfferID</b> field is included in the call request, any <b>BestOfferStatus</b> value will be ignored since eBay will only search for and return the Best Offer identified in the <b>BestOfferID</b> field.
     *  <br/>
     *
     * @param string $bestOfferStatus
     * @return self
     */
    public function setBestOfferStatus($bestOfferStatus)
    {
        $this->bestOfferStatus = $bestOfferStatus;
        return $this;
    }

    /**
     * Gets as pagination
     *
     * This container can be used if the seller is expecting that the <b>GetBestOffers</b> call will retrieve a large number of results, so that seller wishes to view just a subset (one page of multiple pages) of those results at a time. See this container's child fields for more information on how pagination is used.
     *
     * @return \Nogrod\eBaySDK\Trading\PaginationType
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    /**
     * Sets a new pagination
     *
     * This container can be used if the seller is expecting that the <b>GetBestOffers</b> call will retrieve a large number of results, so that seller wishes to view just a subset (one page of multiple pages) of those results at a time. See this container's child fields for more information on how pagination is used.
     *
     * @param \Nogrod\eBaySDK\Trading\PaginationType $pagination
     * @return self
     */
    public function setPagination(\Nogrod\eBaySDK\Trading\PaginationType $pagination)
    {
        $this->pagination = $pagination;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getBestOfferID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BestOfferID", $value);
        }
        $value = $this->getBestOfferStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BestOfferStatus", $value);
        }
        $value = $this->getPagination();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Pagination", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\GetBestOffersRequestType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        parent::setKeyValue($keyValue);
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}BestOfferID');
        if (null !== $value) {
            $this->setBestOfferID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}BestOfferStatus');
        if (null !== $value) {
            $this->setBestOfferStatus($value);
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}Pagination');
        if (null !== $value) {
            $this->setPagination(\Nogrod\eBaySDK\Trading\PaginationType::fromKeyValue($value));
        }
    }
}
