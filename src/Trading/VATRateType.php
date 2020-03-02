<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing VATRateType
 *
 * Type defining the <b>VATRateType</b> container, which is used by
 *  <b>ReviseSellingManagerSaleRecord</b> to modify the VAT percentage for an
 *  order line item. This container is also retrieved by
 *  <b>GetSellingManagerSaleRecord</b> if Value-Added Tax has been applied to
 *  the order line item.
 * XSD Type: VATRateType
 */
class VATRateType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Unique identifier for an eBay listing. A listing can have multiple
     *  order line items (transactions), but only one <b>ItemID</b>. An <b>ItemID</b> can be
     *  paired up with a corresponding <b>TransactionID</b> and used as an input filter for
     *  <b>ReviseSellingManagerSaleRecord</b>. However, if <b>OrderID</b> is passed in as an input
     *  filter for <b>ReviseSellingManagerSaleRecord</b>, the <b>ItemID</b>/<b>TransactionID</b> pair is
     *  ignored.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * Unique identifier for an eBay sales transaction. This identifier is
     *  created once there is a commitment from a buyer to purchase an item.
     *  Along with its corresponding <b>ItemID</b>, a <b>TransactionID</b> is used
     *  and referenced during an order checkout flow and after checkout has been
     *  completed. The <b>ItemID</b>/<b>TransactionID</b> pair can be used as an input filter for
     *  <b>ReviseSellingManagerSaleRecord</b>. However, if <b>OrderID</b> is passed in as an input
     *  filter for <b>ReviseSellingManagerSaleRecord</b>, the <b>ItemID</b>/<b>TransactionID</b> pair is
     *  ignored.
     *
     * @var string $transactionID
     */
    private $transactionID = null;

    /**
     * The VAT (Value-Added Tax) rate for the order line item. When the <b>VATPercent</b> is specified, the
     *  item's VAT information appears on the item's listing page. In
     *  addition, the seller can choose to print an invoice that
     *  includes the item's net price, VAT percent, VAT amount, and
     *  total price. Since VAT rates vary
     *  depending on the item and on the user's country of residence, a
     *  seller is responsible for entering the correct VAT rate; it is
     *  not calculated by eBay. To specify a <b>VATPercent</b>, a seller must
     *  have a VAT-ID registered with eBay and must be listing the item on a
     *  VAT-enabled site. Max applicable length is 6 characters,
     *  including the decimal (e.g., 12.345). The scale is 3 decimal places.
     *  (If you pass in 12.3456, eBay may round up the value to 12.346.)
     *  Note: The View Item page may display the precision to 2 decimal places
     *  with no trailing zeros. However, the full value you send in is stored.
     *
     * @var float $vATPercent
     */
    private $vATPercent = null;

    /**
     * <b>OrderLineItemID</b> is a unique identifier for an eBay order line item If a VAT rate is specified in the
     *  <b>ReviseSellingManagerSaleRecord</b> request, <b>OrderLineItemID</b> can be used instead
     *  of <b>ItemID</b> and <b>TransactionID</b>.
     *
     * @var string $orderLineItemID
     */
    private $orderLineItemID = null;

    /**
     * Gets as itemID
     *
     * Unique identifier for an eBay listing. A listing can have multiple
     *  order line items (transactions), but only one <b>ItemID</b>. An <b>ItemID</b> can be
     *  paired up with a corresponding <b>TransactionID</b> and used as an input filter for
     *  <b>ReviseSellingManagerSaleRecord</b>. However, if <b>OrderID</b> is passed in as an input
     *  filter for <b>ReviseSellingManagerSaleRecord</b>, the <b>ItemID</b>/<b>TransactionID</b> pair is
     *  ignored.
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
     * Unique identifier for an eBay listing. A listing can have multiple
     *  order line items (transactions), but only one <b>ItemID</b>. An <b>ItemID</b> can be
     *  paired up with a corresponding <b>TransactionID</b> and used as an input filter for
     *  <b>ReviseSellingManagerSaleRecord</b>. However, if <b>OrderID</b> is passed in as an input
     *  filter for <b>ReviseSellingManagerSaleRecord</b>, the <b>ItemID</b>/<b>TransactionID</b> pair is
     *  ignored.
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
     * Unique identifier for an eBay sales transaction. This identifier is
     *  created once there is a commitment from a buyer to purchase an item.
     *  Along with its corresponding <b>ItemID</b>, a <b>TransactionID</b> is used
     *  and referenced during an order checkout flow and after checkout has been
     *  completed. The <b>ItemID</b>/<b>TransactionID</b> pair can be used as an input filter for
     *  <b>ReviseSellingManagerSaleRecord</b>. However, if <b>OrderID</b> is passed in as an input
     *  filter for <b>ReviseSellingManagerSaleRecord</b>, the <b>ItemID</b>/<b>TransactionID</b> pair is
     *  ignored.
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
     * Unique identifier for an eBay sales transaction. This identifier is
     *  created once there is a commitment from a buyer to purchase an item.
     *  Along with its corresponding <b>ItemID</b>, a <b>TransactionID</b> is used
     *  and referenced during an order checkout flow and after checkout has been
     *  completed. The <b>ItemID</b>/<b>TransactionID</b> pair can be used as an input filter for
     *  <b>ReviseSellingManagerSaleRecord</b>. However, if <b>OrderID</b> is passed in as an input
     *  filter for <b>ReviseSellingManagerSaleRecord</b>, the <b>ItemID</b>/<b>TransactionID</b> pair is
     *  ignored.
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
     * Gets as vATPercent
     *
     * The VAT (Value-Added Tax) rate for the order line item. When the <b>VATPercent</b> is specified, the
     *  item's VAT information appears on the item's listing page. In
     *  addition, the seller can choose to print an invoice that
     *  includes the item's net price, VAT percent, VAT amount, and
     *  total price. Since VAT rates vary
     *  depending on the item and on the user's country of residence, a
     *  seller is responsible for entering the correct VAT rate; it is
     *  not calculated by eBay. To specify a <b>VATPercent</b>, a seller must
     *  have a VAT-ID registered with eBay and must be listing the item on a
     *  VAT-enabled site. Max applicable length is 6 characters,
     *  including the decimal (e.g., 12.345). The scale is 3 decimal places.
     *  (If you pass in 12.3456, eBay may round up the value to 12.346.)
     *  Note: The View Item page may display the precision to 2 decimal places
     *  with no trailing zeros. However, the full value you send in is stored.
     *
     * @return float
     */
    public function getVATPercent()
    {
        return $this->vATPercent;
    }

    /**
     * Sets a new vATPercent
     *
     * The VAT (Value-Added Tax) rate for the order line item. When the <b>VATPercent</b> is specified, the
     *  item's VAT information appears on the item's listing page. In
     *  addition, the seller can choose to print an invoice that
     *  includes the item's net price, VAT percent, VAT amount, and
     *  total price. Since VAT rates vary
     *  depending on the item and on the user's country of residence, a
     *  seller is responsible for entering the correct VAT rate; it is
     *  not calculated by eBay. To specify a <b>VATPercent</b>, a seller must
     *  have a VAT-ID registered with eBay and must be listing the item on a
     *  VAT-enabled site. Max applicable length is 6 characters,
     *  including the decimal (e.g., 12.345). The scale is 3 decimal places.
     *  (If you pass in 12.3456, eBay may round up the value to 12.346.)
     *  Note: The View Item page may display the precision to 2 decimal places
     *  with no trailing zeros. However, the full value you send in is stored.
     *
     * @param float $vATPercent
     * @return self
     */
    public function setVATPercent($vATPercent)
    {
        $this->vATPercent = $vATPercent;
        return $this;
    }

    /**
     * Gets as orderLineItemID
     *
     * <b>OrderLineItemID</b> is a unique identifier for an eBay order line item If a VAT rate is specified in the
     *  <b>ReviseSellingManagerSaleRecord</b> request, <b>OrderLineItemID</b> can be used instead
     *  of <b>ItemID</b> and <b>TransactionID</b>.
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
     * <b>OrderLineItemID</b> is a unique identifier for an eBay order line item If a VAT rate is specified in the
     *  <b>ReviseSellingManagerSaleRecord</b> request, <b>OrderLineItemID</b> can be used instead
     *  of <b>ItemID</b> and <b>TransactionID</b>.
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
        $value = $this->getVATPercent();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VATPercent", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VATPercent');
        if (null !== $value) {
            $this->setVATPercent($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderLineItemID');
        if (null !== $value) {
            $this->setOrderLineItemID($value);
        }
    }
}
