<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RespondToBestOfferRequestType
 *
 * This call enables the seller to accept or decline a buyer's Best Offer on an item, or make a counter offer to the buyer's Best Offer. A seller can decline multiple Best Offers with one call, but the seller cannot accept or counter offer multiple Best Offers with one call. Best Offers are not applicable to auction listings.
 *  <br/><br/>
 *  <span class="tablenote"><b>Note: </b>
 *  Historically, the Best Offer feature has not been available for auction listings, but beginning with Version 1027, sellers in the US, UK, and DE sites are able to offer the Best Offer feature in auction listings. The seller can offer Buy It Now or Best Offer in an auction listing, but not both.
 *  </span>
 * XSD Type: RespondToBestOfferRequestType
 */
class RespondToBestOfferRequestType extends AbstractRequestType
{
    /**
     * The unique identifier of the listing to which the seller is responding to a Best Offer.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * The unique identifier of a buyer's Best Offer for the order line item. This ID is created once the buyer makes a Best Offer. It is possible that a seller will get multiple Best Offers for an order line item, and if that seller would like to decline multiple/all of the Best Offers with one <b>RespondToBestOffer</b> call, the seller would pass in each of these identifiers in a separate <b>BestOfferID</b> field. However, the seller can only accept or counter offer one Best Offer at a time.
     *
     * @var string[] $bestOfferID
     */
    private $bestOfferID = [

    ];

    /**
     * The enumeration value that the seller passes in to this field will control whether the seller accepts or make a counter offer to a single buyer's Best Offer, or declines one or more buyers' Best Offers. A seller can decline multiple Best Offers with one call, but the seller cannot accept or counter offer multiple Best Offers with one call.
     *
     * @var string $action
     */
    private $action = null;

    /**
     * This optional text field allows the seller to provide more details to the buyer about the action being taken against the buyer's Best Offer.
     *  <br>
     *
     * @var string $sellerResponse
     */
    private $sellerResponse = null;

    /**
     * The seller inserts counter offer price into this field. This field is conditionally required and only applicable when the <b>Action</b> value is set to <code>Counter</code>, The counter offer price cannot exceed the Buy It Now price for a single quantity item. However, the dollar value in this field may exceed the Buy It Now price if the buyer is requesting or the seller is offering multiple quantity of the item (in a multiple-quantity listing). The quantity of the item must be specified in the <b>CounterOfferQuantity</b> field if the seller is making a counter offer.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $counterOfferPrice
     */
    private $counterOfferPrice = null;

    /**
     * The seller inserts the quantity of items in the counter offer into this field. This field is conditionally required and only applicable when the <b>Action</b> value is set to <code>Counter</code>, The counter offer price must be specified in the <b>CounterOfferPrice</b> field if the seller is making a counter offer. This price should reflect the quantity of items in the counter offer. So, if the seller's counter offer 'unit' price is 15 dollars, and the item quantity is '2', the dollar value passed into the <b>CounterOfferPrice</b> field would be <code>30.0</code>.
     *
     * @var int $counterOfferQuantity
     */
    private $counterOfferQuantity = null;

    /**
     * Gets as itemID
     *
     * The unique identifier of the listing to which the seller is responding to a Best Offer.
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
     * The unique identifier of the listing to which the seller is responding to a Best Offer.
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
     * Adds as bestOfferID
     *
     * The unique identifier of a buyer's Best Offer for the order line item. This ID is created once the buyer makes a Best Offer. It is possible that a seller will get multiple Best Offers for an order line item, and if that seller would like to decline multiple/all of the Best Offers with one <b>RespondToBestOffer</b> call, the seller would pass in each of these identifiers in a separate <b>BestOfferID</b> field. However, the seller can only accept or counter offer one Best Offer at a time.
     *
     * @return self
     * @param string $bestOfferID
     */
    public function addToBestOfferID($bestOfferID)
    {
        $this->bestOfferID[] = $bestOfferID;
        return $this;
    }

    /**
     * isset bestOfferID
     *
     * The unique identifier of a buyer's Best Offer for the order line item. This ID is created once the buyer makes a Best Offer. It is possible that a seller will get multiple Best Offers for an order line item, and if that seller would like to decline multiple/all of the Best Offers with one <b>RespondToBestOffer</b> call, the seller would pass in each of these identifiers in a separate <b>BestOfferID</b> field. However, the seller can only accept or counter offer one Best Offer at a time.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBestOfferID($index)
    {
        return isset($this->bestOfferID[$index]);
    }

    /**
     * unset bestOfferID
     *
     * The unique identifier of a buyer's Best Offer for the order line item. This ID is created once the buyer makes a Best Offer. It is possible that a seller will get multiple Best Offers for an order line item, and if that seller would like to decline multiple/all of the Best Offers with one <b>RespondToBestOffer</b> call, the seller would pass in each of these identifiers in a separate <b>BestOfferID</b> field. However, the seller can only accept or counter offer one Best Offer at a time.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBestOfferID($index)
    {
        unset($this->bestOfferID[$index]);
    }

    /**
     * Gets as bestOfferID
     *
     * The unique identifier of a buyer's Best Offer for the order line item. This ID is created once the buyer makes a Best Offer. It is possible that a seller will get multiple Best Offers for an order line item, and if that seller would like to decline multiple/all of the Best Offers with one <b>RespondToBestOffer</b> call, the seller would pass in each of these identifiers in a separate <b>BestOfferID</b> field. However, the seller can only accept or counter offer one Best Offer at a time.
     *
     * @return string[]
     */
    public function getBestOfferID()
    {
        return $this->bestOfferID;
    }

    /**
     * Sets a new bestOfferID
     *
     * The unique identifier of a buyer's Best Offer for the order line item. This ID is created once the buyer makes a Best Offer. It is possible that a seller will get multiple Best Offers for an order line item, and if that seller would like to decline multiple/all of the Best Offers with one <b>RespondToBestOffer</b> call, the seller would pass in each of these identifiers in a separate <b>BestOfferID</b> field. However, the seller can only accept or counter offer one Best Offer at a time.
     *
     * @param string $bestOfferID
     * @return self
     */
    public function setBestOfferID(array $bestOfferID)
    {
        $this->bestOfferID = $bestOfferID;
        return $this;
    }

    /**
     * Gets as action
     *
     * The enumeration value that the seller passes in to this field will control whether the seller accepts or make a counter offer to a single buyer's Best Offer, or declines one or more buyers' Best Offers. A seller can decline multiple Best Offers with one call, but the seller cannot accept or counter offer multiple Best Offers with one call.
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
     * The enumeration value that the seller passes in to this field will control whether the seller accepts or make a counter offer to a single buyer's Best Offer, or declines one or more buyers' Best Offers. A seller can decline multiple Best Offers with one call, but the seller cannot accept or counter offer multiple Best Offers with one call.
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
     * Gets as sellerResponse
     *
     * This optional text field allows the seller to provide more details to the buyer about the action being taken against the buyer's Best Offer.
     *  <br>
     *
     * @return string
     */
    public function getSellerResponse()
    {
        return $this->sellerResponse;
    }

    /**
     * Sets a new sellerResponse
     *
     * This optional text field allows the seller to provide more details to the buyer about the action being taken against the buyer's Best Offer.
     *  <br>
     *
     * @param string $sellerResponse
     * @return self
     */
    public function setSellerResponse($sellerResponse)
    {
        $this->sellerResponse = $sellerResponse;
        return $this;
    }

    /**
     * Gets as counterOfferPrice
     *
     * The seller inserts counter offer price into this field. This field is conditionally required and only applicable when the <b>Action</b> value is set to <code>Counter</code>, The counter offer price cannot exceed the Buy It Now price for a single quantity item. However, the dollar value in this field may exceed the Buy It Now price if the buyer is requesting or the seller is offering multiple quantity of the item (in a multiple-quantity listing). The quantity of the item must be specified in the <b>CounterOfferQuantity</b> field if the seller is making a counter offer.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getCounterOfferPrice()
    {
        return $this->counterOfferPrice;
    }

    /**
     * Sets a new counterOfferPrice
     *
     * The seller inserts counter offer price into this field. This field is conditionally required and only applicable when the <b>Action</b> value is set to <code>Counter</code>, The counter offer price cannot exceed the Buy It Now price for a single quantity item. However, the dollar value in this field may exceed the Buy It Now price if the buyer is requesting or the seller is offering multiple quantity of the item (in a multiple-quantity listing). The quantity of the item must be specified in the <b>CounterOfferQuantity</b> field if the seller is making a counter offer.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $counterOfferPrice
     * @return self
     */
    public function setCounterOfferPrice(\Nogrod\eBaySDK\Trading\AmountType $counterOfferPrice)
    {
        $this->counterOfferPrice = $counterOfferPrice;
        return $this;
    }

    /**
     * Gets as counterOfferQuantity
     *
     * The seller inserts the quantity of items in the counter offer into this field. This field is conditionally required and only applicable when the <b>Action</b> value is set to <code>Counter</code>, The counter offer price must be specified in the <b>CounterOfferPrice</b> field if the seller is making a counter offer. This price should reflect the quantity of items in the counter offer. So, if the seller's counter offer 'unit' price is 15 dollars, and the item quantity is '2', the dollar value passed into the <b>CounterOfferPrice</b> field would be <code>30.0</code>.
     *
     * @return int
     */
    public function getCounterOfferQuantity()
    {
        return $this->counterOfferQuantity;
    }

    /**
     * Sets a new counterOfferQuantity
     *
     * The seller inserts the quantity of items in the counter offer into this field. This field is conditionally required and only applicable when the <b>Action</b> value is set to <code>Counter</code>, The counter offer price must be specified in the <b>CounterOfferPrice</b> field if the seller is making a counter offer. This price should reflect the quantity of items in the counter offer. So, if the seller's counter offer 'unit' price is 15 dollars, and the item quantity is '2', the dollar value passed into the <b>CounterOfferPrice</b> field would be <code>30.0</code>.
     *
     * @param int $counterOfferQuantity
     * @return self
     */
    public function setCounterOfferQuantity($counterOfferQuantity)
    {
        $this->counterOfferQuantity = $counterOfferQuantity;
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
        if (null !== $value && !empty($this->getBestOfferID())) {
            $writer->write(array_map(function ($v) {return ["BestOfferID" => $v];}, $value));
        }
        $value = $this->getAction();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Action", $value);
        }
        $value = $this->getSellerResponse();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerResponse", $value);
        }
        $value = $this->getCounterOfferPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CounterOfferPrice", $value);
        }
        $value = $this->getCounterOfferQuantity();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CounterOfferQuantity", $value);
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
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}BestOfferID');
        if (null !== $value) {
            $this->setBestOfferID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}Action');
        if (null !== $value) {
            $this->setAction($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerResponse');
        if (null !== $value) {
            $this->setSellerResponse($value);
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}CounterOfferPrice');
        if (null !== $value) {
            $this->setCounterOfferPrice(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}CounterOfferQuantity');
        if (null !== $value) {
            $this->setCounterOfferQuantity($value);
        }
    }
}
