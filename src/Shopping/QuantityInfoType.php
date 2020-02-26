<?php

namespace Nogrod\eBaySDK\Shopping;

/**
 * Class representing QuantityInfoType
 *
 * Type used by the <b>QuantityInfo</b> container, which consists of the <b>MinimumRemnantSet</b> field, which is the minimum amount of event tickets that can remain in the multiple-quantity, fixed-price event-based listing's inventory after a buyer purchases one or more tickets (but not all) from the listing.
 * XSD Type: QuantityInfo
 */
class QuantityInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This field indicates the minimum ticket quantity that must remain after a buyer purchases one or more (but not all) tickets in an event-based listing. This feature helps the seller avoid the scenario of being left with only one ticket in a multiple-quantity, fixed-priced event-based listing. In some cases, a solo seat to an event can be harder to sell, especially as the event date approaches.
     *  <br> <br>
     *  Based on the value of <b>MinimumRemnantSet</b> and the listing's available quantity (<b>Quantity</b>-<b>QuantitySold</b>), eBay calculates the quantity of tickets that a buyer can purchase. For example, suppose a seller lists 5 tickets, and wants at least 2 tickets remaining for the final buyer to purchase. In this case, the seller would set <b>MinimumRemnantSet</b> to '2'. This means a buyer can purchase 1, 2, 3, or 5 tickets, but not 4 (because 4 would leave the seller with 1 ticket).
     *  <br> <br>
     *  This field is currently only applicable for event ticket listings in the US and CA marketplaces, but may apply to other categories in the future. It is only returned if set by the seller in the listing.
     *
     * @var int $minimumRemnantSet
     */
    private $minimumRemnantSet = null;

    /**
     * Gets as minimumRemnantSet
     *
     * This field indicates the minimum ticket quantity that must remain after a buyer purchases one or more (but not all) tickets in an event-based listing. This feature helps the seller avoid the scenario of being left with only one ticket in a multiple-quantity, fixed-priced event-based listing. In some cases, a solo seat to an event can be harder to sell, especially as the event date approaches.
     *  <br> <br>
     *  Based on the value of <b>MinimumRemnantSet</b> and the listing's available quantity (<b>Quantity</b>-<b>QuantitySold</b>), eBay calculates the quantity of tickets that a buyer can purchase. For example, suppose a seller lists 5 tickets, and wants at least 2 tickets remaining for the final buyer to purchase. In this case, the seller would set <b>MinimumRemnantSet</b> to '2'. This means a buyer can purchase 1, 2, 3, or 5 tickets, but not 4 (because 4 would leave the seller with 1 ticket).
     *  <br> <br>
     *  This field is currently only applicable for event ticket listings in the US and CA marketplaces, but may apply to other categories in the future. It is only returned if set by the seller in the listing.
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
     * This field indicates the minimum ticket quantity that must remain after a buyer purchases one or more (but not all) tickets in an event-based listing. This feature helps the seller avoid the scenario of being left with only one ticket in a multiple-quantity, fixed-priced event-based listing. In some cases, a solo seat to an event can be harder to sell, especially as the event date approaches.
     *  <br> <br>
     *  Based on the value of <b>MinimumRemnantSet</b> and the listing's available quantity (<b>Quantity</b>-<b>QuantitySold</b>), eBay calculates the quantity of tickets that a buyer can purchase. For example, suppose a seller lists 5 tickets, and wants at least 2 tickets remaining for the final buyer to purchase. In this case, the seller would set <b>MinimumRemnantSet</b> to '2'. This means a buyer can purchase 1, 2, 3, or 5 tickets, but not 4 (because 4 would leave the seller with 1 ticket).
     *  <br> <br>
     *  This field is currently only applicable for event ticket listings in the US and CA marketplaces, but may apply to other categories in the future. It is only returned if set by the seller in the listing.
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MinimumRemnantSet');
        if (null !== $value) {
            $this->setMinimumRemnantSet($value);
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
