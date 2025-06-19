<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PlaceOfferResponseType
 *
 * The <b>PlaceOffer</b> response notifies you about the success and result
 *  of the call.
 * XSD Type: PlaceOfferResponseType
 */
class PlaceOfferResponseType extends AbstractResponseType
{
    /**
     * This container indicates the current bidding/purchase state of the order line item regarding the offer extended using <b>PlaceOffer</b>. The fields that are returned under this container will depend on the attempted action and the results of that action.
     *
     * @var \Nogrod\eBaySDK\Trading\SellingStatusType $sellingStatus
     */
    private $sellingStatus = null;

    /**
     * Unique identifier for an eBay order line item. The
     *  <b>TransactionID</b> field is only returned if the <b>Offer.Action</b> field was set
     *  to <b>Purchase</b> in the input and the purchase was successful. A Purchase
     *  action in <b>PlaceOffer</b> can be used for a fixed-price listing, or for an
     *  auction listing where the Buy It Now option is available.
     *  <br>
     *  <br>
     *  The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> Beginning in July 2024, non-zero transaction IDs will start being returned for auction listings. If necessary, update code to handle non-zero transaction IDs for auction transactions before this time.
     *  </span>
     *
     * @var string $transactionID
     */
    private $transactionID = null;

    /**
     * Container consisting of the status for a Best Offer. This container is
     *  only returned if applicable based on the listing and the value set for
     *  <b>Offer.Action</b> field in the request.
     *
     * @var \Nogrod\eBaySDK\Trading\BestOfferType $bestOffer
     */
    private $bestOffer = null;

    /**
     * <b>OrderLineItemID</b> is a unique identifier for an eBay order line item. The <b>OrderLineItemID</b> field is only
     *  returned if the <b>Offer.Action</b> field is set to <b>Purchase</b> in the input and
     *  the purchase is successful. A Purchase action in <b>PlaceOffer</b> can be used
     *  for a fixed-price listing, or for an auction listing where the Buy It
     *  Now option is available.
     *  <br>
     *
     * @var string $orderLineItemID
     */
    private $orderLineItemID = null;

    /**
     * Gets as sellingStatus
     *
     * This container indicates the current bidding/purchase state of the order line item regarding the offer extended using <b>PlaceOffer</b>. The fields that are returned under this container will depend on the attempted action and the results of that action.
     *
     * @return \Nogrod\eBaySDK\Trading\SellingStatusType
     */
    public function getSellingStatus()
    {
        return $this->sellingStatus;
    }

    /**
     * Sets a new sellingStatus
     *
     * This container indicates the current bidding/purchase state of the order line item regarding the offer extended using <b>PlaceOffer</b>. The fields that are returned under this container will depend on the attempted action and the results of that action.
     *
     * @param \Nogrod\eBaySDK\Trading\SellingStatusType $sellingStatus
     * @return self
     */
    public function setSellingStatus(\Nogrod\eBaySDK\Trading\SellingStatusType $sellingStatus)
    {
        $this->sellingStatus = $sellingStatus;
        return $this;
    }

    /**
     * Gets as transactionID
     *
     * Unique identifier for an eBay order line item. The
     *  <b>TransactionID</b> field is only returned if the <b>Offer.Action</b> field was set
     *  to <b>Purchase</b> in the input and the purchase was successful. A Purchase
     *  action in <b>PlaceOffer</b> can be used for a fixed-price listing, or for an
     *  auction listing where the Buy It Now option is available.
     *  <br>
     *  <br>
     *  The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> Beginning in July 2024, non-zero transaction IDs will start being returned for auction listings. If necessary, update code to handle non-zero transaction IDs for auction transactions before this time.
     *  </span>
     *
     * @return string
     */
    public function getTransactionID()
    {
        return $this->transactionID;
    }

    /**
     * Sets a new transactionID
     *
     * Unique identifier for an eBay order line item. The
     *  <b>TransactionID</b> field is only returned if the <b>Offer.Action</b> field was set
     *  to <b>Purchase</b> in the input and the purchase was successful. A Purchase
     *  action in <b>PlaceOffer</b> can be used for a fixed-price listing, or for an
     *  auction listing where the Buy It Now option is available.
     *  <br>
     *  <br>
     *  The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> Beginning in July 2024, non-zero transaction IDs will start being returned for auction listings. If necessary, update code to handle non-zero transaction IDs for auction transactions before this time.
     *  </span>
     *
     * @param string $transactionID
     * @return self
     */
    public function setTransactionID($transactionID)
    {
        $this->transactionID = $transactionID;
        return $this;
    }

    /**
     * Gets as bestOffer
     *
     * Container consisting of the status for a Best Offer. This container is
     *  only returned if applicable based on the listing and the value set for
     *  <b>Offer.Action</b> field in the request.
     *
     * @return \Nogrod\eBaySDK\Trading\BestOfferType
     */
    public function getBestOffer()
    {
        return $this->bestOffer;
    }

    /**
     * Sets a new bestOffer
     *
     * Container consisting of the status for a Best Offer. This container is
     *  only returned if applicable based on the listing and the value set for
     *  <b>Offer.Action</b> field in the request.
     *
     * @param \Nogrod\eBaySDK\Trading\BestOfferType $bestOffer
     * @return self
     */
    public function setBestOffer(\Nogrod\eBaySDK\Trading\BestOfferType $bestOffer)
    {
        $this->bestOffer = $bestOffer;
        return $this;
    }

    /**
     * Gets as orderLineItemID
     *
     * <b>OrderLineItemID</b> is a unique identifier for an eBay order line item. The <b>OrderLineItemID</b> field is only
     *  returned if the <b>Offer.Action</b> field is set to <b>Purchase</b> in the input and
     *  the purchase is successful. A Purchase action in <b>PlaceOffer</b> can be used
     *  for a fixed-price listing, or for an auction listing where the Buy It
     *  Now option is available.
     *  <br>
     *
     * @return string
     */
    public function getOrderLineItemID()
    {
        return $this->orderLineItemID;
    }

    /**
     * Sets a new orderLineItemID
     *
     * <b>OrderLineItemID</b> is a unique identifier for an eBay order line item. The <b>OrderLineItemID</b> field is only
     *  returned if the <b>Offer.Action</b> field is set to <b>Purchase</b> in the input and
     *  the purchase is successful. A Purchase action in <b>PlaceOffer</b> can be used
     *  for a fixed-price listing, or for an auction listing where the Buy It
     *  Now option is available.
     *  <br>
     *
     * @param string $orderLineItemID
     * @return self
     */
    public function setOrderLineItemID($orderLineItemID)
    {
        $this->orderLineItemID = $orderLineItemID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getSellingStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellingStatus", $value);
        }
        $value = $this->getTransactionID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TransactionID", $value);
        }
        $value = $this->getBestOffer();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BestOffer", $value);
        }
        $value = $this->getOrderLineItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderLineItemID", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\PlaceOfferResponseType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        parent::setKeyValue($keyValue);
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellingStatus');
        if (null !== $value) {
            $this->setSellingStatus(\Nogrod\eBaySDK\Trading\SellingStatusType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}TransactionID');
        if (null !== $value) {
            $this->setTransactionID($value);
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}BestOffer');
        if (null !== $value) {
            $this->setBestOffer(\Nogrod\eBaySDK\Trading\BestOfferType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderLineItemID');
        if (null !== $value) {
            $this->setOrderLineItemID($value);
        }
    }
}
