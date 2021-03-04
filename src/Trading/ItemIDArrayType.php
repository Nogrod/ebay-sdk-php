<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ItemIDArrayType
 *
 * Type defining the <b>PromotionalSaleItemIDArray</b> container, which
 *  consists of an array of listings to which a Promotional Sale applies.
 * XSD Type: ItemIDArrayType
 */
class ItemIDArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * A unique identifier for an item listing.
     *  <br/><br/>
     *  For <b>SetPromotionalSaleListings</b>, the seller passes in the
     *  <b>ItemID</b> value for each listing that he/she wishes to become
     *  part of the Promotional Sale identified by the
     *  <b>PromotionalSaleID</b> value.
     *  <br/><br/>
     *  For <b>GetPromotionalSaleDetails</b>, each listing returned in the
     *  response is a part of the Promotional Sale identified by the
     *  <b>PromotionalSaleID</b> value.
     *
     * @var string[] $itemID
     */
    private $itemID = [
        
    ];

    /**
     * Adds as itemID
     *
     * A unique identifier for an item listing.
     *  <br/><br/>
     *  For <b>SetPromotionalSaleListings</b>, the seller passes in the
     *  <b>ItemID</b> value for each listing that he/she wishes to become
     *  part of the Promotional Sale identified by the
     *  <b>PromotionalSaleID</b> value.
     *  <br/><br/>
     *  For <b>GetPromotionalSaleDetails</b>, each listing returned in the
     *  response is a part of the Promotional Sale identified by the
     *  <b>PromotionalSaleID</b> value.
     *
     * @return self
     * @param string $itemID
     */
    public function addToItemID($itemID)
    {
        $this->itemID[] = $itemID;
        return $this;
    }

    /**
     * isset itemID
     *
     * A unique identifier for an item listing.
     *  <br/><br/>
     *  For <b>SetPromotionalSaleListings</b>, the seller passes in the
     *  <b>ItemID</b> value for each listing that he/she wishes to become
     *  part of the Promotional Sale identified by the
     *  <b>PromotionalSaleID</b> value.
     *  <br/><br/>
     *  For <b>GetPromotionalSaleDetails</b>, each listing returned in the
     *  response is a part of the Promotional Sale identified by the
     *  <b>PromotionalSaleID</b> value.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemID($index)
    {
        return isset($this->itemID[$index]);
    }

    /**
     * unset itemID
     *
     * A unique identifier for an item listing.
     *  <br/><br/>
     *  For <b>SetPromotionalSaleListings</b>, the seller passes in the
     *  <b>ItemID</b> value for each listing that he/she wishes to become
     *  part of the Promotional Sale identified by the
     *  <b>PromotionalSaleID</b> value.
     *  <br/><br/>
     *  For <b>GetPromotionalSaleDetails</b>, each listing returned in the
     *  response is a part of the Promotional Sale identified by the
     *  <b>PromotionalSaleID</b> value.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemID($index)
    {
        unset($this->itemID[$index]);
    }

    /**
     * Gets as itemID
     *
     * A unique identifier for an item listing.
     *  <br/><br/>
     *  For <b>SetPromotionalSaleListings</b>, the seller passes in the
     *  <b>ItemID</b> value for each listing that he/she wishes to become
     *  part of the Promotional Sale identified by the
     *  <b>PromotionalSaleID</b> value.
     *  <br/><br/>
     *  For <b>GetPromotionalSaleDetails</b>, each listing returned in the
     *  response is a part of the Promotional Sale identified by the
     *  <b>PromotionalSaleID</b> value.
     *
     * @return string[]
     */
    public function getItemID()
    {
        return $this->itemID;
    }

    /**
     * Sets a new itemID
     *
     * A unique identifier for an item listing.
     *  <br/><br/>
     *  For <b>SetPromotionalSaleListings</b>, the seller passes in the
     *  <b>ItemID</b> value for each listing that he/she wishes to become
     *  part of the Promotional Sale identified by the
     *  <b>PromotionalSaleID</b> value.
     *  <br/><br/>
     *  For <b>GetPromotionalSaleDetails</b>, each listing returned in the
     *  response is a part of the Promotional Sale identified by the
     *  <b>PromotionalSaleID</b> value.
     *
     * @param string $itemID
     * @return self
     */
    public function setItemID(array $itemID)
    {
        $this->itemID = $itemID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getItemID();
        if (null !== $value && !empty($this->getItemID())) {
            $writer->write(array_map(function ($v) {
                return ["ItemID" => $v];
            }, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID', true);
        if (null !== $value && !empty($value)) {
            $this->setItemID($value);
        }
    }
}
