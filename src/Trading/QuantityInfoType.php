<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing QuantityInfoType
 *
 * Type defining the <b>QuantityInfo</b> container, which consists of the <b>MinimumRemnantSet</b> field, which sets the minimum amount of event tickets that can remain in the fixed-price listing's inventory after a buyer purchases one or more tickets (but not all) from the listing.
 * XSD Type: QuantityInfoType
 */
class QuantityInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Enables a seller to avoid being left with quanity of <code>1</code> in an event listing. A typical use case is event tickets in reserved,
     *  adjacent seats, or items that typically only sell if more than
     *  one can be purchased at once.
     *  <br>
     *  <br>
     *  Specify the minimum number of items that
     *  should remain if a buyer doesn't purchase all the items.
     *  Based on the value of <b>MinimumRemnantSet</b> and the listing's
     *  available quantity (<b>Quantity</b>-<b>QuantitySold</b>), eBay calculates the quantity that a buyer can purchase in one transaction.
     *  For example, suppose you list 5 tickets, and you want at least
     *  2 tickets remaining for the final buyer to purchase.
     *  In this case, you would set <b>MinimumRemnantSet</b> value to <code>2</code>.
     *  This means a buyer can purchase 1, 2, 3, or 5 tickets, but not 4
     *  (because 4 would leave the seller with 1 ticket).<br>
     *  <br>
     *  To remove this restriction when you revise or relist,
     *  set <b>MinimumRemnantSet</b> to 1.<br>
     *  <br>
     *  Applicable to multiple-quantity, fixed-price listings.
     *  Currently supported for US and CA event ticket listings.
     *  <br>
     *
     * @var int $minimumRemnantSet
     */
    private $minimumRemnantSet = null;

    /**
     * Gets as minimumRemnantSet
     *
     * Enables a seller to avoid being left with quanity of <code>1</code> in an event listing. A typical use case is event tickets in reserved,
     *  adjacent seats, or items that typically only sell if more than
     *  one can be purchased at once.
     *  <br>
     *  <br>
     *  Specify the minimum number of items that
     *  should remain if a buyer doesn't purchase all the items.
     *  Based on the value of <b>MinimumRemnantSet</b> and the listing's
     *  available quantity (<b>Quantity</b>-<b>QuantitySold</b>), eBay calculates the quantity that a buyer can purchase in one transaction.
     *  For example, suppose you list 5 tickets, and you want at least
     *  2 tickets remaining for the final buyer to purchase.
     *  In this case, you would set <b>MinimumRemnantSet</b> value to <code>2</code>.
     *  This means a buyer can purchase 1, 2, 3, or 5 tickets, but not 4
     *  (because 4 would leave the seller with 1 ticket).<br>
     *  <br>
     *  To remove this restriction when you revise or relist,
     *  set <b>MinimumRemnantSet</b> to 1.<br>
     *  <br>
     *  Applicable to multiple-quantity, fixed-price listings.
     *  Currently supported for US and CA event ticket listings.
     *  <br>
     *
     * @return int
     */
    public function getMinimumRemnantSet()
    {
        return $this->minimumRemnantSet;
    }

    /**
     * Sets a new minimumRemnantSet
     *
     * Enables a seller to avoid being left with quanity of <code>1</code> in an event listing. A typical use case is event tickets in reserved,
     *  adjacent seats, or items that typically only sell if more than
     *  one can be purchased at once.
     *  <br>
     *  <br>
     *  Specify the minimum number of items that
     *  should remain if a buyer doesn't purchase all the items.
     *  Based on the value of <b>MinimumRemnantSet</b> and the listing's
     *  available quantity (<b>Quantity</b>-<b>QuantitySold</b>), eBay calculates the quantity that a buyer can purchase in one transaction.
     *  For example, suppose you list 5 tickets, and you want at least
     *  2 tickets remaining for the final buyer to purchase.
     *  In this case, you would set <b>MinimumRemnantSet</b> value to <code>2</code>.
     *  This means a buyer can purchase 1, 2, 3, or 5 tickets, but not 4
     *  (because 4 would leave the seller with 1 ticket).<br>
     *  <br>
     *  To remove this restriction when you revise or relist,
     *  set <b>MinimumRemnantSet</b> to 1.<br>
     *  <br>
     *  Applicable to multiple-quantity, fixed-price listings.
     *  Currently supported for US and CA event ticket listings.
     *  <br>
     *
     * @param int $minimumRemnantSet
     * @return self
     */
    public function setMinimumRemnantSet($minimumRemnantSet)
    {
        $this->minimumRemnantSet = $minimumRemnantSet;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getMinimumRemnantSet();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MinimumRemnantSet", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MinimumRemnantSet');
        if (null !== $value) {
            $this->setMinimumRemnantSet($value);
        }
    }
}
