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
     *  <span class="tablenote"><b>Note: </b> Historically, <b>TransactionID</b> values have been '0' for auction listings, and some developers may have built logic around this. However, non-zero <b>TransactionID</b> values for auction listings started being used for some eBay marketplaces beginning in July 2024, and all eBay marketplaces are expected to start using non-zero <b>TransactionID</b> values for auction listings in the near future. If necessary, developers should update code to handle non-zero transaction IDs for auction transactions.
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
     *  <span class="tablenote"><b>Note: </b> Historically, <b>TransactionID</b> values have been '0' for auction listings, and some developers may have built logic around this. However, non-zero <b>TransactionID</b> values for auction listings started being used for some eBay marketplaces beginning in July 2024, and all eBay marketplaces are expected to start using non-zero <b>TransactionID</b> values for auction listings in the near future. If necessary, developers should update code to handle non-zero transaction IDs for auction transactions.
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
     *  <span class="tablenote"><b>Note: </b> Historically, <b>TransactionID</b> values have been '0' for auction listings, and some developers may have built logic around this. However, non-zero <b>TransactionID</b> values for auction listings started being used for some eBay marketplaces beginning in July 2024, and all eBay marketplaces are expected to start using non-zero <b>TransactionID</b> values for auction listings in the near future. If necessary, developers should update code to handle non-zero transaction IDs for auction transactions.
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

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->sellingStatus;
        if (null !== $value) {
            $writer->startElementNs(null, 'SellingStatus', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->transactionID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'TransactionID', null, (string) $value);
        }
        $value = $this->bestOffer;
        if (null !== $value) {
            $writer->startElementNs(null, 'BestOffer', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->orderLineItemID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'OrderLineItemID', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\PlaceOfferResponseType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return parent::xmlReadAttribute($reader);
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'SellingStatus':
                    $this->sellingStatus = \Nogrod\eBaySDK\Trading\SellingStatusType::xmlRead($reader);
                    return true;
                case 'TransactionID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->transactionID = $value;
                    }
                    return true;
                case 'BestOffer':
                    $this->bestOffer = \Nogrod\eBaySDK\Trading\BestOfferType::xmlRead($reader);
                    return true;
                case 'OrderLineItemID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->orderLineItemID = $value;
                    }
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }
}
