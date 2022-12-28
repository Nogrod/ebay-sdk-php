<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ItemTransactionIDType
 *
 * This type is used by the <b>ItemTransactionID</b> container in the <b>GetOrderTransactions</b> call. This container is used to specify a specific order line item to retrieve.
 * XSD Type: ItemTransactionIDType
 */
class ItemTransactionIDType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Unique identifier for an eBay listing. A multiple-quantity listing can have multiple order line items, but only one <b>ItemID</b>. Unless an <b>OrderLineItemID</b> or <b>SKU</b> value is specified in the same node, this field is required for each <b>ItemTransactionID</b> node included in the request.
     *  <br>
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * Unique identifier for an eBay order line item. The
     *  <b>TransactionID</b> should match the <b>ItemID</b> specified in each <b>ItemTransactionID</b>
     *  node included in the request. Optionally, an <b>OrderLineItemID</b> or <b>SKU</b> value can
     *  substitute for the <b>ItemID</b>/<b>TransactionID</b> pair.
     *  <br>
     *  <br>
     *  The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
     *  <br>
     *
     * @var string $transactionID
     */
    private $transactionID = null;

    /**
     * A SKU (stock keeping unit) is a unique identifier defined and used by the
     *  seller to identify a product or variation of an item. Unless an <b>OrderLineItemID</b> value or <b>ItemID</b>/<b>TransactionID</b> pair is
     *  specified in the same node, this field is required for each
     *  <b>ItemTransactionID</b> node included in the request. To retrieve order line items
     *  associated with a SKU, the <b>InventoryTrackingMethod</b> field must be set to SKU.
     *  The <b>InventoryTrackingMethod</b> field is set through <b>AddFixedPriceItem</b> or
     *  <b>RelistFixedPriceItem</b>.
     *  <br>
     *
     * @var string $sKU
     */
    private $sKU = null;

    /**
     * <b>OrderLineItemID</b> is a unique identifier for an eBay order line item. If an <b>OrderLineItemID</b> is included in an
     *  <b>ItemTransactionID</b> node in the request, the <b>ItemID</b>, <b>TransactionID</b>, and <b>SKU</b>
     *  fields are not required and are ignored if they are included in the request.
     *  <br>
     *
     * @var string $orderLineItemID
     */
    private $orderLineItemID = null;

    /**
     * Gets as itemID
     *
     * Unique identifier for an eBay listing. A multiple-quantity listing can have multiple order line items, but only one <b>ItemID</b>. Unless an <b>OrderLineItemID</b> or <b>SKU</b> value is specified in the same node, this field is required for each <b>ItemTransactionID</b> node included in the request.
     *  <br>
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
     * Unique identifier for an eBay listing. A multiple-quantity listing can have multiple order line items, but only one <b>ItemID</b>. Unless an <b>OrderLineItemID</b> or <b>SKU</b> value is specified in the same node, this field is required for each <b>ItemTransactionID</b> node included in the request.
     *  <br>
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
     * Unique identifier for an eBay order line item. The
     *  <b>TransactionID</b> should match the <b>ItemID</b> specified in each <b>ItemTransactionID</b>
     *  node included in the request. Optionally, an <b>OrderLineItemID</b> or <b>SKU</b> value can
     *  substitute for the <b>ItemID</b>/<b>TransactionID</b> pair.
     *  <br>
     *  <br>
     *  The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
     *  <br>
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
     *  <b>TransactionID</b> should match the <b>ItemID</b> specified in each <b>ItemTransactionID</b>
     *  node included in the request. Optionally, an <b>OrderLineItemID</b> or <b>SKU</b> value can
     *  substitute for the <b>ItemID</b>/<b>TransactionID</b> pair.
     *  <br>
     *  <br>
     *  The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
     *  <br>
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
     * Gets as sKU
     *
     * A SKU (stock keeping unit) is a unique identifier defined and used by the
     *  seller to identify a product or variation of an item. Unless an <b>OrderLineItemID</b> value or <b>ItemID</b>/<b>TransactionID</b> pair is
     *  specified in the same node, this field is required for each
     *  <b>ItemTransactionID</b> node included in the request. To retrieve order line items
     *  associated with a SKU, the <b>InventoryTrackingMethod</b> field must be set to SKU.
     *  The <b>InventoryTrackingMethod</b> field is set through <b>AddFixedPriceItem</b> or
     *  <b>RelistFixedPriceItem</b>.
     *  <br>
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
     * A SKU (stock keeping unit) is a unique identifier defined and used by the
     *  seller to identify a product or variation of an item. Unless an <b>OrderLineItemID</b> value or <b>ItemID</b>/<b>TransactionID</b> pair is
     *  specified in the same node, this field is required for each
     *  <b>ItemTransactionID</b> node included in the request. To retrieve order line items
     *  associated with a SKU, the <b>InventoryTrackingMethod</b> field must be set to SKU.
     *  The <b>InventoryTrackingMethod</b> field is set through <b>AddFixedPriceItem</b> or
     *  <b>RelistFixedPriceItem</b>.
     *  <br>
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
     * <b>OrderLineItemID</b> is a unique identifier for an eBay order line item. If an <b>OrderLineItemID</b> is included in an
     *  <b>ItemTransactionID</b> node in the request, the <b>ItemID</b>, <b>TransactionID</b>, and <b>SKU</b>
     *  fields are not required and are ignored if they are included in the request.
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
     * <b>OrderLineItemID</b> is a unique identifier for an eBay order line item. If an <b>OrderLineItemID</b> is included in an
     *  <b>ItemTransactionID</b> node in the request, the <b>ItemID</b>, <b>TransactionID</b>, and <b>SKU</b>
     *  fields are not required and are ignored if they are included in the request.
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getTransactionID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TransactionID", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TransactionID');
        if (null !== $value) {
            $this->setTransactionID($value);
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
