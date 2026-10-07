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
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> Historically, <b>TransactionID</b> values have been '0' for auction listings, and some developers may have built logic around this. However, non-zero <b>TransactionID</b> values for auction listings started being used for some eBay marketplaces beginning in July 2024, and all eBay marketplaces are expected to start using non-zero <b>TransactionID</b> values for auction listings in the near future. If necessary, developers should update code to handle non-zero transaction IDs for auction transactions.
     *  </span>
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
        if (!is_array($this->variationSpecifics)) {
            throw new \LogicException('variationSpecifics is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\NameValueListType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\NameValueListType> $variationSpecifics
     * @return self
     */
    public function setVariationSpecifics(iterable $variationSpecifics)
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

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->itemID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ItemID', null, (string) $value);
        }
        $value = $this->action;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Action', null, (string) $value);
        }
        $value = $this->noteText;
        if (null !== $value) {
            $writer->writeElementNs(null, 'NoteText', null, (string) $value);
        }
        $value = $this->transactionID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'TransactionID', null, (string) $value);
        }
        $value = $this->variationSpecifics;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'VariationSpecifics', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'NameValueList', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
                $writer->endElement();
            }
        }
        $value = $this->sKU;
        if (null !== $value) {
            $writer->writeElementNs(null, 'SKU', null, (string) $value);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\SetUserNotesRequestType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
        $this->variationSpecifics = [];
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
                case 'ItemID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->itemID = $value;
                    }
                    return true;
                case 'Action':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->action = $value;
                    }
                    return true;
                case 'NoteText':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->noteText = $value;
                    }
                    return true;
                case 'TransactionID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->transactionID = $value;
                    }
                    return true;
                case 'VariationSpecifics':
                    $this->variationSpecifics = Func::readList($reader, 'NameValueList', 'urn:ebay:apis:eBLBaseComponents', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\Trading\NameValueListType::xmlRead($reader));
                    return true;
                case 'SKU':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->sKU = $value;
                    }
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

    protected function jsonProperties(): array
    {
        $data = parent::jsonProperties();
        $data['ItemID'] = $this->itemID;
        $data['Action'] = $this->action;
        $data['NoteText'] = $this->noteText;
        $data['TransactionID'] = $this->transactionID;
        $data['VariationSpecifics'] = Func::jsonList($this->variationSpecifics);
        $data['SKU'] = $this->sKU;
        $data['OrderLineItemID'] = $this->orderLineItemID;
        return $data;
    }
}
