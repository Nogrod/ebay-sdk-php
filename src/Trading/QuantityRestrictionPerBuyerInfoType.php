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

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->maximumQuantity;
        if (null !== $value) {
            $writer->writeElementNs(null, 'MaximumQuantity', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\QuantityRestrictionPerBuyerInfoType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'MaximumQuantity':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->maximumQuantity = (int) $value;
                    }
                    return true;
            }
        }
        return false;
    }
}
