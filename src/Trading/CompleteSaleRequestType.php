<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CompleteSaleRequestType
 *
 * Enables a seller to perform various tasks with a single or multiple line item order. Tasks available with this call include marking the order as paid, marking the order as shipped, providing shipment tracking details to the buyer, and leaving feedback for the buyer.
 * XSD Type: CompleteSaleRequestType
 */
class CompleteSaleRequestType extends AbstractRequestType
{
    /**
     * Unique identifier for an eBay listing. An <b>ItemID</b> value can be paired up with a corresponding <b>TransactionID</b> value in a <b>CompleteSale</b> request to identify a single order line item. Alternatively, the <b>OrderLineItemID</b> value for the order line item can be used.
     *  <br><br>
     *  Unless an <b>OrderLineItemID</b> value is used to identify a single order line item, or the <b>OrderID</b> value is used to identify a single or multiple line item order, the <b>ItemID</b>/<b>TransactionID</b> pair must be specified. To perform an action on an entire multiple line item order, the <b>OrderID</b> field must be used. If an <b>OrderID</b> or <b>OrderLineItemID</b> value is specified, an <b>ItemID</b>/<b>TransactionID</b> pair will be ignored (if present in the same request).
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * Unique identifier for a sales transaction. A <b>TransactionID</b> identifier is created once there is a commitment to buy (bidder wins the auction, buyer clicks buy button, or buyer purchases item through <b>PlaceOffer</b> call). The
     *  <b>TransactionID</b> can be paired up with the corresponding <b>ItemID</b> value in a <b>CompleteSale</b> request to identify a single order line item. Alternatively, the <b>OrderLineItemID</b> value for the order line item can be used.
     *  <br><br>
     *  Unless an <b>OrderLineItemID</b> value is used to identify a single order line item, or the <b>OrderID</b> value is used to identify a single or multiple line item order, the <b>ItemID</b>/<b>TransactionID</b> pair must be specified. To perform an action on an entire multiple line item order, the <b>OrderID</b> field must be used. If an <b>OrderID</b> or <b>OrderLineItemID</b> value is specified, an <b>ItemID</b>/<b>TransactionID</b> pair will be ignored (if present in the same request).
     *  <br>
     *  <br>
     *  The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
     *
     * @var string $transactionID
     */
    private $transactionID = null;

    /**
     * This container is used by the seller to leave feedback for the buyer for the order line item identified in the call request. The seller must include and specify all fields of this type, including the buyer's eBay User ID, the Feedback rating (a seller can only leave a buyer a 'Positive' rating), and a comment, which helps justify the Feedback rating. The eBay User ID must match the buyer who bought the order line item, or an error will occur. An error will also occur if Feedback has already been left for the buyer (either through API or the Web flow).
     *  <br><br>
     *  To determine if Feedback has already been left for an order line item, you can call <b class="con">GetFeedback</b>, passing in the <b class="con">OrderLineItemID</b> value in the call request.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> Feedback entries are submitted at the order line item level, so either an <b>OrderLineItemID</b> value or an <b>ItemID</b>/<b>TransactionID</b> pair should be specified to identify the order line item (and not an <b>OrderLineItemID</b> value). To leave Feedback for all line items in a multiple line item order, the seller would need a separate <b>CompleteSale</b> request for each order line item.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\FeedbackInfoType $feedbackInfo
     */
    private $feedbackInfo = null;

    /**
     * The seller includes and sets this field to true if the order or order line item has been shipped. If the call is successful, the order line item(s) are marked as Shipped in My eBay.
     *  <br><br>
     *  If the seller includes and sets this field to false, the order or order line item are marked (or remain) as 'Not Shipped' in eBay's system.
     *  <br><br>
     *  If this field is not included, the shipped status of the order or order line item remain unchanged in My eBay.
     *  <br><br>
     *  If shipment tracking information is provided for an order or order line item through the <b>Shipment</b> container in the same request, the <b>Shipped</b> status is set to <code>true</code> automatically, and the <b>Shipped</b> field is not necessary.
     *
     * @var bool $shipped
     */
    private $shipped = null;

    /**
     * The seller includes and sets this field to true if the order has been
     *  paid for by the buyer. If the call is successful, the order line item(s)
     *  are marked as 'Paid' in eBay's system.
     *  <br><br>
     *  If the seller includes and sets this field to <code>false</code>, the order line item(s) are marked (or remain) as 'Not Paid' in eBay's system.
     *  <br><br>
     *  If this field is not included, the paid status of the order line item(s) remain unchanged in eBay's system.
     *
     * @var bool $paid
     */
    private $paid = null;

    /**
     * <span class="tablenote"><b>Note: </b> DO NOT USE THIS FIELD. Previously, this field's only purpose was to classify the order to be updated as a Half.com order. However, since the Half.com site has been shut down, this field is no longer applicable.
     *  </span>
     *
     * @var string $listingType
     */
    private $listingType = null;

    /**
     * Container consisting of shipment tracking information, shipped time, and an optional text field to provide additional details to the buyer. Setting the tracking number and shipping carrier automatically marks the order line item as shipped and the <b>Shipped</b> field is not necessary.
     *  <br><br>
     *  If you supply <b>ShipmentTrackingNumber</b>, you must also supply <b>ShippingCarrierUsed</b>; otherwise you will get an error.
     *  <br><br>
     *  To modify the shipping tracking number and/or shipping carrier, supply the new number in the <b>ShipmentTrackingNumber</b> field or supply the value for <b>ShippingCarrierUsed</b>, or both. The old number and carrier are deleted and the new ones are added.
     *  <br><br>
     *  To simply delete the current tracking details altogether, supply empty <b>Shipment</b> tags.
     *  <br> <br>
     *  <span class="tablenote"><b>Note:</b> Top-Rated sellers must have a record of uploading shipment tracking information (through site or through API) for at least 95 percent of their order line items (purchased by U.S. buyers) to keep their status as Top-Rated sellers. For more information on the requirements to becoming a Top-Rated Seller, see the <a href="http://pages.ebay.com/help/sell/top-rated.html">Becoming a Top-Rated Seller and qualifying for Top-Rated Plus</a> customer support page. </span> <br>
     *
     * @var \Nogrod\eBaySDK\Trading\ShipmentType $shipment
     */
    private $shipment = null;

    /**
     * A unique identifier for an eBay order. This field can be used to make an 'order-level' update. If an order has multiple line items, and the <b>CompleteSale</b> call is being used to update the status of, or provide feedback for a single line item within the order, the <b>OrderLineItemID</b> field or <b>ItemID</b>/<b>TransactionID</b> pair must be used to identify this order line item instead of the <b>OrderID</b> field. If the order only has one line item, it the <b>OrderID</b> field can be used to make any updates with the <b>CompleteSale</b> call.
     *  <br><br>
     *  <b>OrderID</b> overrides an <b>OrderLineItemID</b> or <b>ItemID</b>/<b>TransactionID</b> pair if these fields are also specified in the same request.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> In June 2019, eBay introduced a new order ID format, but allowed developers/sellers to decide whether to immediately adopt the new format, or to continue working with the old format. Users who wanted to adopt the new format, could either use a Trading WSDL Version 1113 (or newer), or they could even use an older Trading WSDL but set the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header value to <code>1113</code> in API calls. <b>Beginning in June 2020, only the new order ID format will be returned in response payloads for paid orders, regardless of the WSDL version number or compatibility level.</b>
     *  <br><br>
     *  Note that the unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all calls that accept Order ID values as filters in the request payload, including the <b>CompleteSale</b> call, will support the identifiers for both unpaid and paid orders. The new order ID format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment.
     *  </span>
     *
     * @var string $orderID
     */
    private $orderID = null;

    /**
     * A unique identifier for an eBay order line item. <b>OrderLineItemID</b> values are returned (at the order line item level) in Trading API's order management calls. This identifier is created once there is a commitment to buy (bidder wins the auction, buyer clicks buy button, or buyer purchases item through <b>PlaceOffer</b> call). An <b>OrderLineItemID</b> value can be used in a <b>CompleteSale</b> request to identify a line item within an order. Alternatively, an <b>ItemID</b>/<b>TransactionID</b> pair can also be used to identify a line item.
     *  <br><br>
     *  Unless an <b>ItemID</b>/<b>TransactionID</b> pair is used to identify an order line
     *  item, or an <b>OrderID</b> value is used to identify an order, the <b>OrderLineItemID</b> must be specified. If <b>OrderLineItemID</b> is specified, the <b>ItemID</b>/<b>TransactionID</b> pair are
     *  ignored if present in the same request.
     *
     * @var string $orderLineItemID
     */
    private $orderLineItemID = null;

    /**
     * Gets as itemID
     *
     * Unique identifier for an eBay listing. An <b>ItemID</b> value can be paired up with a corresponding <b>TransactionID</b> value in a <b>CompleteSale</b> request to identify a single order line item. Alternatively, the <b>OrderLineItemID</b> value for the order line item can be used.
     *  <br><br>
     *  Unless an <b>OrderLineItemID</b> value is used to identify a single order line item, or the <b>OrderID</b> value is used to identify a single or multiple line item order, the <b>ItemID</b>/<b>TransactionID</b> pair must be specified. To perform an action on an entire multiple line item order, the <b>OrderID</b> field must be used. If an <b>OrderID</b> or <b>OrderLineItemID</b> value is specified, an <b>ItemID</b>/<b>TransactionID</b> pair will be ignored (if present in the same request).
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
     * Unique identifier for an eBay listing. An <b>ItemID</b> value can be paired up with a corresponding <b>TransactionID</b> value in a <b>CompleteSale</b> request to identify a single order line item. Alternatively, the <b>OrderLineItemID</b> value for the order line item can be used.
     *  <br><br>
     *  Unless an <b>OrderLineItemID</b> value is used to identify a single order line item, or the <b>OrderID</b> value is used to identify a single or multiple line item order, the <b>ItemID</b>/<b>TransactionID</b> pair must be specified. To perform an action on an entire multiple line item order, the <b>OrderID</b> field must be used. If an <b>OrderID</b> or <b>OrderLineItemID</b> value is specified, an <b>ItemID</b>/<b>TransactionID</b> pair will be ignored (if present in the same request).
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
     * Gets as transactionID
     *
     * Unique identifier for a sales transaction. A <b>TransactionID</b> identifier is created once there is a commitment to buy (bidder wins the auction, buyer clicks buy button, or buyer purchases item through <b>PlaceOffer</b> call). The
     *  <b>TransactionID</b> can be paired up with the corresponding <b>ItemID</b> value in a <b>CompleteSale</b> request to identify a single order line item. Alternatively, the <b>OrderLineItemID</b> value for the order line item can be used.
     *  <br><br>
     *  Unless an <b>OrderLineItemID</b> value is used to identify a single order line item, or the <b>OrderID</b> value is used to identify a single or multiple line item order, the <b>ItemID</b>/<b>TransactionID</b> pair must be specified. To perform an action on an entire multiple line item order, the <b>OrderID</b> field must be used. If an <b>OrderID</b> or <b>OrderLineItemID</b> value is specified, an <b>ItemID</b>/<b>TransactionID</b> pair will be ignored (if present in the same request).
     *  <br>
     *  <br>
     *  The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
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
     * Unique identifier for a sales transaction. A <b>TransactionID</b> identifier is created once there is a commitment to buy (bidder wins the auction, buyer clicks buy button, or buyer purchases item through <b>PlaceOffer</b> call). The
     *  <b>TransactionID</b> can be paired up with the corresponding <b>ItemID</b> value in a <b>CompleteSale</b> request to identify a single order line item. Alternatively, the <b>OrderLineItemID</b> value for the order line item can be used.
     *  <br><br>
     *  Unless an <b>OrderLineItemID</b> value is used to identify a single order line item, or the <b>OrderID</b> value is used to identify a single or multiple line item order, the <b>ItemID</b>/<b>TransactionID</b> pair must be specified. To perform an action on an entire multiple line item order, the <b>OrderID</b> field must be used. If an <b>OrderID</b> or <b>OrderLineItemID</b> value is specified, an <b>ItemID</b>/<b>TransactionID</b> pair will be ignored (if present in the same request).
     *  <br>
     *  <br>
     *  The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
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
     * Gets as feedbackInfo
     *
     * This container is used by the seller to leave feedback for the buyer for the order line item identified in the call request. The seller must include and specify all fields of this type, including the buyer's eBay User ID, the Feedback rating (a seller can only leave a buyer a 'Positive' rating), and a comment, which helps justify the Feedback rating. The eBay User ID must match the buyer who bought the order line item, or an error will occur. An error will also occur if Feedback has already been left for the buyer (either through API or the Web flow).
     *  <br><br>
     *  To determine if Feedback has already been left for an order line item, you can call <b class="con">GetFeedback</b>, passing in the <b class="con">OrderLineItemID</b> value in the call request.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> Feedback entries are submitted at the order line item level, so either an <b>OrderLineItemID</b> value or an <b>ItemID</b>/<b>TransactionID</b> pair should be specified to identify the order line item (and not an <b>OrderLineItemID</b> value). To leave Feedback for all line items in a multiple line item order, the seller would need a separate <b>CompleteSale</b> request for each order line item.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\FeedbackInfoType
     */
    public function getFeedbackInfo()
    {
        return $this->feedbackInfo;
    }

    /**
     * Sets a new feedbackInfo
     *
     * This container is used by the seller to leave feedback for the buyer for the order line item identified in the call request. The seller must include and specify all fields of this type, including the buyer's eBay User ID, the Feedback rating (a seller can only leave a buyer a 'Positive' rating), and a comment, which helps justify the Feedback rating. The eBay User ID must match the buyer who bought the order line item, or an error will occur. An error will also occur if Feedback has already been left for the buyer (either through API or the Web flow).
     *  <br><br>
     *  To determine if Feedback has already been left for an order line item, you can call <b class="con">GetFeedback</b>, passing in the <b class="con">OrderLineItemID</b> value in the call request.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> Feedback entries are submitted at the order line item level, so either an <b>OrderLineItemID</b> value or an <b>ItemID</b>/<b>TransactionID</b> pair should be specified to identify the order line item (and not an <b>OrderLineItemID</b> value). To leave Feedback for all line items in a multiple line item order, the seller would need a separate <b>CompleteSale</b> request for each order line item.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\FeedbackInfoType $feedbackInfo
     * @return self
     */
    public function setFeedbackInfo(\Nogrod\eBaySDK\Trading\FeedbackInfoType $feedbackInfo)
    {
        $this->feedbackInfo = $feedbackInfo;
        return $this;
    }

    /**
     * Gets as shipped
     *
     * The seller includes and sets this field to true if the order or order line item has been shipped. If the call is successful, the order line item(s) are marked as Shipped in My eBay.
     *  <br><br>
     *  If the seller includes and sets this field to false, the order or order line item are marked (or remain) as 'Not Shipped' in eBay's system.
     *  <br><br>
     *  If this field is not included, the shipped status of the order or order line item remain unchanged in My eBay.
     *  <br><br>
     *  If shipment tracking information is provided for an order or order line item through the <b>Shipment</b> container in the same request, the <b>Shipped</b> status is set to <code>true</code> automatically, and the <b>Shipped</b> field is not necessary.
     *
     * @return bool
     */
    public function getShipped()
    {
        return $this->shipped;
    }

    /**
     * Sets a new shipped
     *
     * The seller includes and sets this field to true if the order or order line item has been shipped. If the call is successful, the order line item(s) are marked as Shipped in My eBay.
     *  <br><br>
     *  If the seller includes and sets this field to false, the order or order line item are marked (or remain) as 'Not Shipped' in eBay's system.
     *  <br><br>
     *  If this field is not included, the shipped status of the order or order line item remain unchanged in My eBay.
     *  <br><br>
     *  If shipment tracking information is provided for an order or order line item through the <b>Shipment</b> container in the same request, the <b>Shipped</b> status is set to <code>true</code> automatically, and the <b>Shipped</b> field is not necessary.
     *
     * @param bool $shipped
     * @return self
     */
    public function setShipped($shipped)
    {
        $this->shipped = $shipped;
        return $this;
    }

    /**
     * Gets as paid
     *
     * The seller includes and sets this field to true if the order has been
     *  paid for by the buyer. If the call is successful, the order line item(s)
     *  are marked as 'Paid' in eBay's system.
     *  <br><br>
     *  If the seller includes and sets this field to <code>false</code>, the order line item(s) are marked (or remain) as 'Not Paid' in eBay's system.
     *  <br><br>
     *  If this field is not included, the paid status of the order line item(s) remain unchanged in eBay's system.
     *
     * @return bool
     */
    public function getPaid()
    {
        return $this->paid;
    }

    /**
     * Sets a new paid
     *
     * The seller includes and sets this field to true if the order has been
     *  paid for by the buyer. If the call is successful, the order line item(s)
     *  are marked as 'Paid' in eBay's system.
     *  <br><br>
     *  If the seller includes and sets this field to <code>false</code>, the order line item(s) are marked (or remain) as 'Not Paid' in eBay's system.
     *  <br><br>
     *  If this field is not included, the paid status of the order line item(s) remain unchanged in eBay's system.
     *
     * @param bool $paid
     * @return self
     */
    public function setPaid($paid)
    {
        $this->paid = $paid;
        return $this;
    }

    /**
     * Gets as listingType
     *
     * <span class="tablenote"><b>Note: </b> DO NOT USE THIS FIELD. Previously, this field's only purpose was to classify the order to be updated as a Half.com order. However, since the Half.com site has been shut down, this field is no longer applicable.
     *  </span>
     *
     * @return string
     */
    public function getListingType()
    {
        return $this->listingType;
    }

    /**
     * Sets a new listingType
     *
     * <span class="tablenote"><b>Note: </b> DO NOT USE THIS FIELD. Previously, this field's only purpose was to classify the order to be updated as a Half.com order. However, since the Half.com site has been shut down, this field is no longer applicable.
     *  </span>
     *
     * @param string $listingType
     * @return self
     */
    public function setListingType($listingType)
    {
        $this->listingType = $listingType;
        return $this;
    }

    /**
     * Gets as shipment
     *
     * Container consisting of shipment tracking information, shipped time, and an optional text field to provide additional details to the buyer. Setting the tracking number and shipping carrier automatically marks the order line item as shipped and the <b>Shipped</b> field is not necessary.
     *  <br><br>
     *  If you supply <b>ShipmentTrackingNumber</b>, you must also supply <b>ShippingCarrierUsed</b>; otherwise you will get an error.
     *  <br><br>
     *  To modify the shipping tracking number and/or shipping carrier, supply the new number in the <b>ShipmentTrackingNumber</b> field or supply the value for <b>ShippingCarrierUsed</b>, or both. The old number and carrier are deleted and the new ones are added.
     *  <br><br>
     *  To simply delete the current tracking details altogether, supply empty <b>Shipment</b> tags.
     *  <br> <br>
     *  <span class="tablenote"><b>Note:</b> Top-Rated sellers must have a record of uploading shipment tracking information (through site or through API) for at least 95 percent of their order line items (purchased by U.S. buyers) to keep their status as Top-Rated sellers. For more information on the requirements to becoming a Top-Rated Seller, see the <a href="http://pages.ebay.com/help/sell/top-rated.html">Becoming a Top-Rated Seller and qualifying for Top-Rated Plus</a> customer support page. </span> <br>
     *
     * @return \Nogrod\eBaySDK\Trading\ShipmentType
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * Sets a new shipment
     *
     * Container consisting of shipment tracking information, shipped time, and an optional text field to provide additional details to the buyer. Setting the tracking number and shipping carrier automatically marks the order line item as shipped and the <b>Shipped</b> field is not necessary.
     *  <br><br>
     *  If you supply <b>ShipmentTrackingNumber</b>, you must also supply <b>ShippingCarrierUsed</b>; otherwise you will get an error.
     *  <br><br>
     *  To modify the shipping tracking number and/or shipping carrier, supply the new number in the <b>ShipmentTrackingNumber</b> field or supply the value for <b>ShippingCarrierUsed</b>, or both. The old number and carrier are deleted and the new ones are added.
     *  <br><br>
     *  To simply delete the current tracking details altogether, supply empty <b>Shipment</b> tags.
     *  <br> <br>
     *  <span class="tablenote"><b>Note:</b> Top-Rated sellers must have a record of uploading shipment tracking information (through site or through API) for at least 95 percent of their order line items (purchased by U.S. buyers) to keep their status as Top-Rated sellers. For more information on the requirements to becoming a Top-Rated Seller, see the <a href="http://pages.ebay.com/help/sell/top-rated.html">Becoming a Top-Rated Seller and qualifying for Top-Rated Plus</a> customer support page. </span> <br>
     *
     * @param \Nogrod\eBaySDK\Trading\ShipmentType $shipment
     * @return self
     */
    public function setShipment(\Nogrod\eBaySDK\Trading\ShipmentType $shipment)
    {
        $this->shipment = $shipment;
        return $this;
    }

    /**
     * Gets as orderID
     *
     * A unique identifier for an eBay order. This field can be used to make an 'order-level' update. If an order has multiple line items, and the <b>CompleteSale</b> call is being used to update the status of, or provide feedback for a single line item within the order, the <b>OrderLineItemID</b> field or <b>ItemID</b>/<b>TransactionID</b> pair must be used to identify this order line item instead of the <b>OrderID</b> field. If the order only has one line item, it the <b>OrderID</b> field can be used to make any updates with the <b>CompleteSale</b> call.
     *  <br><br>
     *  <b>OrderID</b> overrides an <b>OrderLineItemID</b> or <b>ItemID</b>/<b>TransactionID</b> pair if these fields are also specified in the same request.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> In June 2019, eBay introduced a new order ID format, but allowed developers/sellers to decide whether to immediately adopt the new format, or to continue working with the old format. Users who wanted to adopt the new format, could either use a Trading WSDL Version 1113 (or newer), or they could even use an older Trading WSDL but set the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header value to <code>1113</code> in API calls. <b>Beginning in June 2020, only the new order ID format will be returned in response payloads for paid orders, regardless of the WSDL version number or compatibility level.</b>
     *  <br><br>
     *  Note that the unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all calls that accept Order ID values as filters in the request payload, including the <b>CompleteSale</b> call, will support the identifiers for both unpaid and paid orders. The new order ID format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment.
     *  </span>
     *
     * @return string
     */
    public function getOrderID()
    {
        return $this->orderID;
    }

    /**
     * Sets a new orderID
     *
     * A unique identifier for an eBay order. This field can be used to make an 'order-level' update. If an order has multiple line items, and the <b>CompleteSale</b> call is being used to update the status of, or provide feedback for a single line item within the order, the <b>OrderLineItemID</b> field or <b>ItemID</b>/<b>TransactionID</b> pair must be used to identify this order line item instead of the <b>OrderID</b> field. If the order only has one line item, it the <b>OrderID</b> field can be used to make any updates with the <b>CompleteSale</b> call.
     *  <br><br>
     *  <b>OrderID</b> overrides an <b>OrderLineItemID</b> or <b>ItemID</b>/<b>TransactionID</b> pair if these fields are also specified in the same request.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> In June 2019, eBay introduced a new order ID format, but allowed developers/sellers to decide whether to immediately adopt the new format, or to continue working with the old format. Users who wanted to adopt the new format, could either use a Trading WSDL Version 1113 (or newer), or they could even use an older Trading WSDL but set the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header value to <code>1113</code> in API calls. <b>Beginning in June 2020, only the new order ID format will be returned in response payloads for paid orders, regardless of the WSDL version number or compatibility level.</b>
     *  <br><br>
     *  Note that the unique identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all calls that accept Order ID values as filters in the request payload, including the <b>CompleteSale</b> call, will support the identifiers for both unpaid and paid orders. The new order ID format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment.
     *  </span>
     *
     * @param string $orderID
     * @return self
     */
    public function setOrderID($orderID)
    {
        $this->orderID = $orderID;
        return $this;
    }

    /**
     * Gets as orderLineItemID
     *
     * A unique identifier for an eBay order line item. <b>OrderLineItemID</b> values are returned (at the order line item level) in Trading API's order management calls. This identifier is created once there is a commitment to buy (bidder wins the auction, buyer clicks buy button, or buyer purchases item through <b>PlaceOffer</b> call). An <b>OrderLineItemID</b> value can be used in a <b>CompleteSale</b> request to identify a line item within an order. Alternatively, an <b>ItemID</b>/<b>TransactionID</b> pair can also be used to identify a line item.
     *  <br><br>
     *  Unless an <b>ItemID</b>/<b>TransactionID</b> pair is used to identify an order line
     *  item, or an <b>OrderID</b> value is used to identify an order, the <b>OrderLineItemID</b> must be specified. If <b>OrderLineItemID</b> is specified, the <b>ItemID</b>/<b>TransactionID</b> pair are
     *  ignored if present in the same request.
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
     * A unique identifier for an eBay order line item. <b>OrderLineItemID</b> values are returned (at the order line item level) in Trading API's order management calls. This identifier is created once there is a commitment to buy (bidder wins the auction, buyer clicks buy button, or buyer purchases item through <b>PlaceOffer</b> call). An <b>OrderLineItemID</b> value can be used in a <b>CompleteSale</b> request to identify a line item within an order. Alternatively, an <b>ItemID</b>/<b>TransactionID</b> pair can also be used to identify a line item.
     *  <br><br>
     *  Unless an <b>ItemID</b>/<b>TransactionID</b> pair is used to identify an order line
     *  item, or an <b>OrderID</b> value is used to identify an order, the <b>OrderLineItemID</b> must be specified. If <b>OrderLineItemID</b> is specified, the <b>ItemID</b>/<b>TransactionID</b> pair are
     *  ignored if present in the same request.
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
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getTransactionID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TransactionID", $value);
        }
        $value = $this->getFeedbackInfo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeedbackInfo", $value);
        }
        $value = $this->getShipped();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Shipped", $value);
        }
        $value = $this->getPaid();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Paid", $value);
        }
        $value = $this->getListingType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ListingType", $value);
        }
        $value = $this->getShipment();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Shipment", $value);
        }
        $value = $this->getOrderID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderID", $value);
        }
        $value = $this->getOrderLineItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderLineItemID", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TransactionID');
        if (null !== $value) {
            $this->setTransactionID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeedbackInfo');
        if (null !== $value) {
            $this->setFeedbackInfo(\Nogrod\eBaySDK\Trading\FeedbackInfoType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Shipped');
        if (null !== $value) {
            $this->setShipped($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Paid');
        if (null !== $value) {
            $this->setPaid($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingType');
        if (null !== $value) {
            $this->setListingType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Shipment');
        if (null !== $value) {
            $this->setShipment(\Nogrod\eBaySDK\Trading\ShipmentType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderID');
        if (null !== $value) {
            $this->setOrderID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderLineItemID');
        if (null !== $value) {
            $this->setOrderLineItemID($value);
        }
    }
}
