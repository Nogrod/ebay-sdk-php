<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing QuantityRestrictionPerBuyerInfoType
 *
 * This type defines the <b>QuantityRestrictionPerBuyer</b> container, which is
 *  used by the seller to restrict the quantity of items that may be purchased by one buyer
 *  during the duration of a fixed-price listing (single or multi-variation).
 * XSD Type: QuantityRestrictionPerBuyerInfoType
 */
class QuantityRestrictionPerBuyerInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This integer value indicates the maximum quantity of items that a single buyer may
     *  purchase during the duration of a fixed-price listing (single or multi-variation).
     *  The buyer is blocked from the purchase if that buyer is attempting to purchase a
     *  quantity of items that will exceed this value. Previous purchases made by the buyer
     *  are taken into account. For example, if <b>MaximumQuantity</b> is set to
     *  '5' for an item listing, and <em>Buyer1</em> purchases a quantity of
     *  three, <em>Buyer1</em> is only allowed to purchase an additional
     *  quantity of two in subsequent orders on the same item listing.
     *  <br/><br/>
     *  This field is required if the <b>QuantityRestrictionPerBuyer</b>
     *  container is used.
     *  <br>
     *
     * @var int $maximumQuantity
     */
    private $maximumQuantity = null;

    /**
     * Gets as maximumQuantity
     *
     * This integer value indicates the maximum quantity of items that a single buyer may
     *  purchase during the duration of a fixed-price listing (single or multi-variation).
     *  The buyer is blocked from the purchase if that buyer is attempting to purchase a
     *  quantity of items that will exceed this value. Previous purchases made by the buyer
     *  are taken into account. For example, if <b>MaximumQuantity</b> is set to
     *  '5' for an item listing, and <em>Buyer1</em> purchases a quantity of
     *  three, <em>Buyer1</em> is only allowed to purchase an additional
     *  quantity of two in subsequent orders on the same item listing.
     *  <br/><br/>
     *  This field is required if the <b>QuantityRestrictionPerBuyer</b>
     *  container is used.
     *  <br>
     *
     * @return int
     */
    public function getMaximumQuantity()
    {
        return $this->maximumQuantity;
    }

    /**
     * Sets a new maximumQuantity
     *
     * This integer value indicates the maximum quantity of items that a single buyer may
     *  purchase during the duration of a fixed-price listing (single or multi-variation).
     *  The buyer is blocked from the purchase if that buyer is attempting to purchase a
     *  quantity of items that will exceed this value. Previous purchases made by the buyer
     *  are taken into account. For example, if <b>MaximumQuantity</b> is set to
     *  '5' for an item listing, and <em>Buyer1</em> purchases a quantity of
     *  three, <em>Buyer1</em> is only allowed to purchase an additional
     *  quantity of two in subsequent orders on the same item listing.
     *  <br/><br/>
     *  This field is required if the <b>QuantityRestrictionPerBuyer</b>
     *  container is used.
     *  <br>
     *
     * @param int $maximumQuantity
     * @return self
     */
    public function setMaximumQuantity($maximumQuantity)
    {
        $this->maximumQuantity = $maximumQuantity;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getMaximumQuantity();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaximumQuantity", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaximumQuantity');
        if (null !== $value) {
            $this->setMaximumQuantity($value);
        }
    }
}
