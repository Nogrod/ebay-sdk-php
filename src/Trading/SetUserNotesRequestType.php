<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SetUserNotesRequestType
 *
 * Enables users to add, modify, or delete a pinned note for any item that is being tracked in the My eBay All Selling and All Buying areas.
 * XSD Type: SetUserNotesRequestType
 */
class SetUserNotesRequestType extends AbstractRequestType
{
    /**
     * Unique identifier of the listing to which the My eBay note will be
     *  attached. Notes can only be added to items that are
     *  currently being tracked in My eBay.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * The seller must include this field and set it to 'AddOrUpdate' to add a new user note or update an existing user note, or set it to 'Delete' to delete an existing user note.
     *
     * @var string $action
     */
    private $action = null;

    /**
     * This field is needed if the <b>Action</b> is <code>AddOrUpdate</code>. The text supplied in this field will
     *  completely replace any existing My eBay note for the
     *  specified item.
     *
     * @var string $noteText
     */
    private $noteText = null;

    /**
     * Unique identifier for the order line item to which the My
     *  eBay note will be attached. Notes can only be added to order line items
     *  that are currently being tracked in My eBay. Buyers can
     *  view user notes made on order line items in the
     *  <b>PrivateNotes</b> field of the <b>WonList</b> container in <b>GetMyeBayBuying</b>, and
     *  sellers can view user notes made on order line items in
     *  the <b>PrivateNotes</b> field of the <b>SoldList</b> and <b>DeletedFromSoldList</b>
     *  containers in <b>GetMyeBaySellinging</b>.
     *  <br>
     *  <br>
     *  The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
     *
     * @var string $transactionID
     */
    private $transactionID = null;

    /**
     * Container consisting of name-value pairs that identify (match) one
     *  variation within a fixed-price, multiple-variation listing. The specified
     *  name-value pair(s) must exist in the listing specified by either the
     *  <b>ItemID</b> or <b>SKU</b> values specified in the request. If a specific order line
     *  item is targeted in the request with an
     *  <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> value, any specified
     *  <b>VariationSpecifics</b> container is ignored by the call.
     *
     * @var \Nogrod\eBaySDK\Trading\NameValueListType[] $variationSpecifics
     */
    private $variationSpecifics = null;

    /**
     * SKU value of the item variation to which the My eBay note will be
     *  attached. Notes can only be added to items that are currently being
     *  tracked in My eBay. A SKU (stock keeping unit) value is defined by and
     *  used by the seller to identify a variation within a fixed-price, multiple-
     *  variation listing. The SKU value is assigned to a variation of an item
     *  through the <b>Variations.Variation.SKU</b> element.
     *  <br>
     *  <br>
     *  This field can only be used if the <b>Item.InventoryTrackingMethod</b> field
     *  (set with the <b>AddFixedPriceItem</b> or <b>RelistFixedPriceItem</b> calls) is set to
     *  SKU.
     *  <br>
     *  <br>
     *  If a specific order line item is targeted in the request
     *  with an <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> value, any
     *  specified <b>SKU</b> is ignored by the call.
     *
     * @var string $sKU
     */
    private $sKU = null;

    /**
     * A unique identifier for an eBay order line item. This field is created as
     *  soon as there is a commitment to buy from the seller. <b>OrderLineItemID</b> can be used in the input instead of
     *  an <b>ItemID</b>/<b>TransactionID</b> pair to identify an order line item.
     *  <br>
     *  <br>
     *  Notes can only be added to order line items that are currently being
     *  tracked in My eBay. Buyers can view user notes made on order line items in
     *  the <b>PrivateNotes</b> field of the <b>WonList</b> container in <b>GetMyeBayBuying</b>, and
     *  sellers can view user notes made on order line items in the <b>PrivateNotes</b>
     *  field of the <b>SoldList</b> and <b>DeletedFromSoldList</b> containers in
     *  <b>GetMyeBaySellinging</b>.
     *
     * @var string $orderLineItemID
     */
    private $orderLineItemID = null;

    /**
     * Gets as itemID
     *
     * Unique identifier of the listing to which the My eBay note will be
     *  attached. Notes can only be added to items that are
     *  currently being tracked in My eBay.
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
     * Unique identifier of the listing to which the My eBay note will be
     *  attached. Notes can only be added to items that are
     *  currently being tracked in My eBay.
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
     * Gets as action
     *
     * The seller must include this field and set it to 'AddOrUpdate' to add a new user note or update an existing user note, or set it to 'Delete' to delete an existing user note.
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
     * The seller must include this field and set it to 'AddOrUpdate' to add a new user note or update an existing user note, or set it to 'Delete' to delete an existing user note.
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
     * Gets as noteText
     *
     * This field is needed if the <b>Action</b> is <code>AddOrUpdate</code>. The text supplied in this field will
     *  completely replace any existing My eBay note for the
     *  specified item.
     *
     * @return string
     */
    public function getNoteText()
    {
        return $this->noteText;
    }

    /**
     * Sets a new noteText
     *
     * This field is needed if the <b>Action</b> is <code>AddOrUpdate</code>. The text supplied in this field will
     *  completely replace any existing My eBay note for the
     *  specified item.
     *
     * @param string $noteText
     * @return self
     */
    public function setNoteText($noteText)
    {
        $this->noteText = $noteText;
        return $this;
    }

    /**
     * Gets as transactionID
     *
     * Unique identifier for the order line item to which the My
     *  eBay note will be attached. Notes can only be added to order line items
     *  that are currently being tracked in My eBay. Buyers can
     *  view user notes made on order line items in the
     *  <b>PrivateNotes</b> field of the <b>WonList</b> container in <b>GetMyeBayBuying</b>, and
     *  sellers can view user notes made on order line items in
     *  the <b>PrivateNotes</b> field of the <b>SoldList</b> and <b>DeletedFromSoldList</b>
     *  containers in <b>GetMyeBaySellinging</b>.
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
     * Unique identifier for the order line item to which the My
     *  eBay note will be attached. Notes can only be added to order line items
     *  that are currently being tracked in My eBay. Buyers can
     *  view user notes made on order line items in the
     *  <b>PrivateNotes</b> field of the <b>WonList</b> container in <b>GetMyeBayBuying</b>, and
     *  sellers can view user notes made on order line items in
     *  the <b>PrivateNotes</b> field of the <b>SoldList</b> and <b>DeletedFromSoldList</b>
     *  containers in <b>GetMyeBaySellinging</b>.
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
     * Adds as nameValueList
     *
     * Container consisting of name-value pairs that identify (match) one
     *  variation within a fixed-price, multiple-variation listing. The specified
     *  name-value pair(s) must exist in the listing specified by either the
     *  <b>ItemID</b> or <b>SKU</b> values specified in the request. If a specific order line
     *  item is targeted in the request with an
     *  <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> value, any specified
     *  <b>VariationSpecifics</b> container is ignored by the call.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\NameValueListType $nameValueList
     */
    public function addToVariationSpecifics(\Nogrod\eBaySDK\Trading\NameValueListType $nameValueList)
    {
        $this->variationSpecifics[] = $nameValueList;
        return $this;
    }

    /**
     * isset variationSpecifics
     *
     * Container consisting of name-value pairs that identify (match) one
     *  variation within a fixed-price, multiple-variation listing. The specified
     *  name-value pair(s) must exist in the listing specified by either the
     *  <b>ItemID</b> or <b>SKU</b> values specified in the request. If a specific order line
     *  item is targeted in the request with an
     *  <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> value, any specified
     *  <b>VariationSpecifics</b> container is ignored by the call.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVariationSpecifics($index)
    {
        return isset($this->variationSpecifics[$index]);
    }

    /**
     * unset variationSpecifics
     *
     * Container consisting of name-value pairs that identify (match) one
     *  variation within a fixed-price, multiple-variation listing. The specified
     *  name-value pair(s) must exist in the listing specified by either the
     *  <b>ItemID</b> or <b>SKU</b> values specified in the request. If a specific order line
     *  item is targeted in the request with an
     *  <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> value, any specified
     *  <b>VariationSpecifics</b> container is ignored by the call.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVariationSpecifics($index)
    {
        unset($this->variationSpecifics[$index]);
    }

    /**
     * Gets as variationSpecifics
     *
     * Container consisting of name-value pairs that identify (match) one
     *  variation within a fixed-price, multiple-variation listing. The specified
     *  name-value pair(s) must exist in the listing specified by either the
     *  <b>ItemID</b> or <b>SKU</b> values specified in the request. If a specific order line
     *  item is targeted in the request with an
     *  <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> value, any specified
     *  <b>VariationSpecifics</b> container is ignored by the call.
     *
     * @return \Nogrod\eBaySDK\Trading\NameValueListType[]
     */
    public function getVariationSpecifics()
    {
        return $this->variationSpecifics;
    }

    /**
     * Sets a new variationSpecifics
     *
     * Container consisting of name-value pairs that identify (match) one
     *  variation within a fixed-price, multiple-variation listing. The specified
     *  name-value pair(s) must exist in the listing specified by either the
     *  <b>ItemID</b> or <b>SKU</b> values specified in the request. If a specific order line
     *  item is targeted in the request with an
     *  <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> value, any specified
     *  <b>VariationSpecifics</b> container is ignored by the call.
     *
     * @param \Nogrod\eBaySDK\Trading\NameValueListType[] $variationSpecifics
     * @return self
     */
    public function setVariationSpecifics(array $variationSpecifics)
    {
        $this->variationSpecifics = $variationSpecifics;
        return $this;
    }

    /**
     * Gets as sKU
     *
     * SKU value of the item variation to which the My eBay note will be
     *  attached. Notes can only be added to items that are currently being
     *  tracked in My eBay. A SKU (stock keeping unit) value is defined by and
     *  used by the seller to identify a variation within a fixed-price, multiple-
     *  variation listing. The SKU value is assigned to a variation of an item
     *  through the <b>Variations.Variation.SKU</b> element.
     *  <br>
     *  <br>
     *  This field can only be used if the <b>Item.InventoryTrackingMethod</b> field
     *  (set with the <b>AddFixedPriceItem</b> or <b>RelistFixedPriceItem</b> calls) is set to
     *  SKU.
     *  <br>
     *  <br>
     *  If a specific order line item is targeted in the request
     *  with an <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> value, any
     *  specified <b>SKU</b> is ignored by the call.
     *
     * @return string
     */
    public function getSKU()
    {
        return $this->sKU;
    }

    /**
     * Sets a new sKU
     *
     * SKU value of the item variation to which the My eBay note will be
     *  attached. Notes can only be added to items that are currently being
     *  tracked in My eBay. A SKU (stock keeping unit) value is defined by and
     *  used by the seller to identify a variation within a fixed-price, multiple-
     *  variation listing. The SKU value is assigned to a variation of an item
     *  through the <b>Variations.Variation.SKU</b> element.
     *  <br>
     *  <br>
     *  This field can only be used if the <b>Item.InventoryTrackingMethod</b> field
     *  (set with the <b>AddFixedPriceItem</b> or <b>RelistFixedPriceItem</b> calls) is set to
     *  SKU.
     *  <br>
     *  <br>
     *  If a specific order line item is targeted in the request
     *  with an <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> value, any
     *  specified <b>SKU</b> is ignored by the call.
     *
     * @param string $sKU
     * @return self
     */
    public function setSKU($sKU)
    {
        $this->sKU = $sKU;
        return $this;
    }

    /**
     * Gets as orderLineItemID
     *
     * A unique identifier for an eBay order line item. This field is created as
     *  soon as there is a commitment to buy from the seller. <b>OrderLineItemID</b> can be used in the input instead of
     *  an <b>ItemID</b>/<b>TransactionID</b> pair to identify an order line item.
     *  <br>
     *  <br>
     *  Notes can only be added to order line items that are currently being
     *  tracked in My eBay. Buyers can view user notes made on order line items in
     *  the <b>PrivateNotes</b> field of the <b>WonList</b> container in <b>GetMyeBayBuying</b>, and
     *  sellers can view user notes made on order line items in the <b>PrivateNotes</b>
     *  field of the <b>SoldList</b> and <b>DeletedFromSoldList</b> containers in
     *  <b>GetMyeBaySellinging</b>.
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
     * A unique identifier for an eBay order line item. This field is created as
     *  soon as there is a commitment to buy from the seller. <b>OrderLineItemID</b> can be used in the input instead of
     *  an <b>ItemID</b>/<b>TransactionID</b> pair to identify an order line item.
     *  <br>
     *  <br>
     *  Notes can only be added to order line items that are currently being
     *  tracked in My eBay. Buyers can view user notes made on order line items in
     *  the <b>PrivateNotes</b> field of the <b>WonList</b> container in <b>GetMyeBayBuying</b>, and
     *  sellers can view user notes made on order line items in the <b>PrivateNotes</b>
     *  field of the <b>SoldList</b> and <b>DeletedFromSoldList</b> containers in
     *  <b>GetMyeBaySellinging</b>.
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
        $value = $this->getAction();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Action", $value);
        }
        $value = $this->getNoteText();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NoteText", $value);
        }
        $value = $this->getTransactionID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TransactionID", $value);
        }
        $value = $this->getVariationSpecifics();
        if (null !== $value && !empty($this->getVariationSpecifics())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VariationSpecifics", array_map(function ($v) {return ["NameValueList" => $v];}, $value));
        }
        $value = $this->getSKU();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SKU", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Action');
        if (null !== $value) {
            $this->setAction($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NoteText');
        if (null !== $value) {
            $this->setNoteText($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TransactionID');
        if (null !== $value) {
            $this->setTransactionID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VariationSpecifics', true);
        if (null !== $value && !empty($value)) {
            $this->setVariationSpecifics(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\NameValueListType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SKU');
        if (null !== $value) {
            $this->setSKU($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderLineItemID');
        if (null !== $value) {
            $this->setOrderLineItemID($value);
        }
    }
}
