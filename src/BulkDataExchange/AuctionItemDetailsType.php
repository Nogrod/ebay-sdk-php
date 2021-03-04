<?php

namespace Nogrod\eBaySDK\BulkDataExchange;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AuctionItemDetailsType
 *
 * Type defining the <b>auctionItemDetails</b> container, which is used to specify whether or not the total bid count and/or the <b>ReserveMet</b> boolean (indicating whether or not Reserve Price was met by the highest bid) is returned in the <b>ActiveInventoryReport</b> response.
 * XSD Type: AuctionItemDetails
 */
class AuctionItemDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The boolean value in this field will control whether or not the <b>SKUDetails.BidCount</b> field is returned in a <b>ActiveInventoryReport</b> response.
     *
     * @var bool $includeBidCount
     */
    private $includeBidCount = null;

    /**
     * The boolean value in this field will control whether or not the <b>SKUDetails.ReserveMet</b> boolean field is returned in a <b>ActiveInventoryReport</b> response.
     *
     * @var bool $includeReservePriceMet
     */
    private $includeReservePriceMet = null;

    /**
     * Gets as includeBidCount
     *
     * The boolean value in this field will control whether or not the <b>SKUDetails.BidCount</b> field is returned in a <b>ActiveInventoryReport</b> response.
     *
     * @return bool
     */
    public function getIncludeBidCount()
    {
        return $this->includeBidCount;
    }

    /**
     * Sets a new includeBidCount
     *
     * The boolean value in this field will control whether or not the <b>SKUDetails.BidCount</b> field is returned in a <b>ActiveInventoryReport</b> response.
     *
     * @param bool $includeBidCount
     * @return self
     */
    public function setIncludeBidCount($includeBidCount)
    {
        $this->includeBidCount = $includeBidCount;
        return $this;
    }

    /**
     * Gets as includeReservePriceMet
     *
     * The boolean value in this field will control whether or not the <b>SKUDetails.ReserveMet</b> boolean field is returned in a <b>ActiveInventoryReport</b> response.
     *
     * @return bool
     */
    public function getIncludeReservePriceMet()
    {
        return $this->includeReservePriceMet;
    }

    /**
     * Sets a new includeReservePriceMet
     *
     * The boolean value in this field will control whether or not the <b>SKUDetails.ReserveMet</b> boolean field is returned in a <b>ActiveInventoryReport</b> response.
     *
     * @param bool $includeReservePriceMet
     * @return self
     */
    public function setIncludeReservePriceMet($includeReservePriceMet)
    {
        $this->includeReservePriceMet = $includeReservePriceMet;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/services");
        $value = $this->getIncludeBidCount();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}includeBidCount", $value);
        }
        $value = $this->getIncludeReservePriceMet();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}includeReservePriceMet", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}includeBidCount');
        if (null !== $value) {
            $this->setIncludeBidCount($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}includeReservePriceMet');
        if (null !== $value) {
            $this->setIncludeReservePriceMet($value);
        }
    }
}
