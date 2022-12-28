<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing LineItemType
 *
 * This type provides information about one order line item in a package. The package can contain multiple units of a given order line item.
 * XSD Type: LineItemType
 */
class LineItemType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The number of units of the order line item in this package; this is required for customs. The seller must ensure that this matches the quantity of the order line item enclosed in the package.<br/><br/>This value must be a positive integer, and it can't be greater than the quantity of this item specified in the original transaction. This field is a required field in <b>CompleteSale</b> if the order type is a Global Shipping Program (GSP) order.
     *
     * @var int $quantity
     */
    private $quantity = null;

    /**
     * The Country of Manufacture for the order line item; this is required for customs. This should identify the country in which more than 50% of the value of the item was created.
     *  <br/><br/>
     *  This value must conform to the ISO 3166 two-letter country code standard.
     *  To see the list of currently supported codes, and the English names associated with each code
     *  (e.g., KY="Cayman Islands"), call <b>GeteBayDetails</b>
     *  with <b>DetailName</b> set to <b>CountryDetails</b>.
     *
     * @var string $countryOfOrigin
     */
    private $countryOfOrigin = null;

    /**
     * The item description of the order line item, based on its <strong>ItemID</strong>.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * Unique identifier for the eBay listing associated with the order line item. A multiple-quantity listing can have multiple order line items, but only one <b>ItemID</b> value. Unless an <b>OrderLineItemID</b> or <b>SKU</b> value is specified in the same node, this field is required for each <b>ItemTransactionID</b> node included in the request.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * Unique identifier for an eBay order line item (transaction). The <b>TransactionID</b> should match the <b>ItemID</b> specified in each <b>ItemTransactionID</b> node included in the request. Optionally, an <b>OrderLineItemID</b> value can substitute for the <b>ItemID</b>/<b>TransactionID</b> pair.
     *  <br>
     *  <br>
     *  The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
     *
     * @var string $transactionID
     */
    private $transactionID = null;

    /**
     * Gets as quantity
     *
     * The number of units of the order line item in this package; this is required for customs. The seller must ensure that this matches the quantity of the order line item enclosed in the package.<br/><br/>This value must be a positive integer, and it can't be greater than the quantity of this item specified in the original transaction. This field is a required field in <b>CompleteSale</b> if the order type is a Global Shipping Program (GSP) order.
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * The number of units of the order line item in this package; this is required for customs. The seller must ensure that this matches the quantity of the order line item enclosed in the package.<br/><br/>This value must be a positive integer, and it can't be greater than the quantity of this item specified in the original transaction. This field is a required field in <b>CompleteSale</b> if the order type is a Global Shipping Program (GSP) order.
     *
     * @param int $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as countryOfOrigin
     *
     * The Country of Manufacture for the order line item; this is required for customs. This should identify the country in which more than 50% of the value of the item was created.
     *  <br/><br/>
     *  This value must conform to the ISO 3166 two-letter country code standard.
     *  To see the list of currently supported codes, and the English names associated with each code
     *  (e.g., KY="Cayman Islands"), call <b>GeteBayDetails</b>
     *  with <b>DetailName</b> set to <b>CountryDetails</b>.
     *
     * @return string
     */
    public function getCountryOfOrigin()
    {
        return $this->countryOfOrigin;
    }

    /**
     * Sets a new countryOfOrigin
     *
     * The Country of Manufacture for the order line item; this is required for customs. This should identify the country in which more than 50% of the value of the item was created.
     *  <br/><br/>
     *  This value must conform to the ISO 3166 two-letter country code standard.
     *  To see the list of currently supported codes, and the English names associated with each code
     *  (e.g., KY="Cayman Islands"), call <b>GeteBayDetails</b>
     *  with <b>DetailName</b> set to <b>CountryDetails</b>.
     *
     * @param string $countryOfOrigin
     * @return self
     */
    public function setCountryOfOrigin($countryOfOrigin)
    {
        $this->countryOfOrigin = $countryOfOrigin;
        return $this;
    }

    /**
     * Gets as description
     *
     * The item description of the order line item, based on its <strong>ItemID</strong>.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * The item description of the order line item, based on its <strong>ItemID</strong>.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as itemID
     *
     * Unique identifier for the eBay listing associated with the order line item. A multiple-quantity listing can have multiple order line items, but only one <b>ItemID</b> value. Unless an <b>OrderLineItemID</b> or <b>SKU</b> value is specified in the same node, this field is required for each <b>ItemTransactionID</b> node included in the request.
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
     * Unique identifier for the eBay listing associated with the order line item. A multiple-quantity listing can have multiple order line items, but only one <b>ItemID</b> value. Unless an <b>OrderLineItemID</b> or <b>SKU</b> value is specified in the same node, this field is required for each <b>ItemTransactionID</b> node included in the request.
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
     * Unique identifier for an eBay order line item (transaction). The <b>TransactionID</b> should match the <b>ItemID</b> specified in each <b>ItemTransactionID</b> node included in the request. Optionally, an <b>OrderLineItemID</b> value can substitute for the <b>ItemID</b>/<b>TransactionID</b> pair.
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
     * Unique identifier for an eBay order line item (transaction). The <b>TransactionID</b> should match the <b>ItemID</b> specified in each <b>ItemTransactionID</b> node included in the request. Optionally, an <b>OrderLineItemID</b> value can substitute for the <b>ItemID</b>/<b>TransactionID</b> pair.
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getQuantity();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Quantity", $value);
        }
        $value = $this->getCountryOfOrigin();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CountryOfOrigin", $value);
        }
        $value = $this->getDescription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Description", $value);
        }
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getTransactionID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TransactionID", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Quantity');
        if (null !== $value) {
            $this->setQuantity($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CountryOfOrigin');
        if (null !== $value) {
            $this->setCountryOfOrigin($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Description');
        if (null !== $value) {
            $this->setDescription($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TransactionID');
        if (null !== $value) {
            $this->setTransactionID($value);
        }
    }
}
