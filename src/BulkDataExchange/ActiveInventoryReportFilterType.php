<?php

namespace Nogrod\eBaySDK\BulkDataExchange;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ActiveInventoryReportFilterType
 *
 * Type defining the <b>activeInventoryReportFilter</b> container, which allows the user to control which containers/fields are returned in an <b>ActiveInventoryReport</b> response.
 * XSD Type: ActiveInventoryReportFilter
 */
class ActiveInventoryReportFilterType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field allows the user to control whether fixed-price and/or auction listings are returned in an <b>ActiveInventoryReport</b> response. If the <b>downloadJobType</b> value is set to 'ActiveInventoryReport', this value defaults to 'AuctionAndFixedPrice' and both listing types are returned in the <b>ActiveInventoryReport</b> response. However, there may be times when the user only wants to retrieve fixed-price listings or only auction listings, in which case the user would include and set the <b>includeListingType</b> field to 'FixedPrice' or 'Auction' as appropriate.
     *
     * @var string $includeListingType
     */
    private $includeListingType = null;

    /**
     * This container is used to specify whether or not variation-level data is returned in the <b>ActiveInventoryReport</b> response.
     *  <br><br>
     *  This filter is only applicable for multi-variation, fixed-priced listings.
     *
     * @var \Nogrod\eBaySDK\BulkDataExchange\FixedPriceItemDetailsType $fixedPriceItemDetails
     */
    private $fixedPriceItemDetails = null;

    /**
     * This container is used to specify whether or not the total bid count and/or the <b>ReserveMet</b> boolean (indicating whether or not Reserve Price was met by the highest bid) is returned in the <b>ActiveInventoryReport</b> response.
     *  <br><br>
     *  This filter is only applicable for auction listings.
     *
     * @var \Nogrod\eBaySDK\BulkDataExchange\AuctionItemDetailsType $auctionItemDetails
     */
    private $auctionItemDetails = null;

    /**
     * Gets as includeListingType
     *
     * This field allows the user to control whether fixed-price and/or auction listings are returned in an <b>ActiveInventoryReport</b> response. If the <b>downloadJobType</b> value is set to 'ActiveInventoryReport', this value defaults to 'AuctionAndFixedPrice' and both listing types are returned in the <b>ActiveInventoryReport</b> response. However, there may be times when the user only wants to retrieve fixed-price listings or only auction listings, in which case the user would include and set the <b>includeListingType</b> field to 'FixedPrice' or 'Auction' as appropriate.
     *
     * @return string
     */
    public function getIncludeListingType()
    {
        return $this->includeListingType;
    }

    /**
     * Sets a new includeListingType
     *
     * This field allows the user to control whether fixed-price and/or auction listings are returned in an <b>ActiveInventoryReport</b> response. If the <b>downloadJobType</b> value is set to 'ActiveInventoryReport', this value defaults to 'AuctionAndFixedPrice' and both listing types are returned in the <b>ActiveInventoryReport</b> response. However, there may be times when the user only wants to retrieve fixed-price listings or only auction listings, in which case the user would include and set the <b>includeListingType</b> field to 'FixedPrice' or 'Auction' as appropriate.
     *
     * @param string $includeListingType
     * @return self
     */
    public function setIncludeListingType($includeListingType)
    {
        $this->includeListingType = $includeListingType;
        return $this;
    }

    /**
     * Gets as fixedPriceItemDetails
     *
     * This container is used to specify whether or not variation-level data is returned in the <b>ActiveInventoryReport</b> response.
     *  <br><br>
     *  This filter is only applicable for multi-variation, fixed-priced listings.
     *
     * @return \Nogrod\eBaySDK\BulkDataExchange\FixedPriceItemDetailsType
     */
    public function getFixedPriceItemDetails()
    {
        return $this->fixedPriceItemDetails;
    }

    /**
     * Sets a new fixedPriceItemDetails
     *
     * This container is used to specify whether or not variation-level data is returned in the <b>ActiveInventoryReport</b> response.
     *  <br><br>
     *  This filter is only applicable for multi-variation, fixed-priced listings.
     *
     * @param \Nogrod\eBaySDK\BulkDataExchange\FixedPriceItemDetailsType $fixedPriceItemDetails
     * @return self
     */
    public function setFixedPriceItemDetails(\Nogrod\eBaySDK\BulkDataExchange\FixedPriceItemDetailsType $fixedPriceItemDetails)
    {
        $this->fixedPriceItemDetails = $fixedPriceItemDetails;
        return $this;
    }

    /**
     * Gets as auctionItemDetails
     *
     * This container is used to specify whether or not the total bid count and/or the <b>ReserveMet</b> boolean (indicating whether or not Reserve Price was met by the highest bid) is returned in the <b>ActiveInventoryReport</b> response.
     *  <br><br>
     *  This filter is only applicable for auction listings.
     *
     * @return \Nogrod\eBaySDK\BulkDataExchange\AuctionItemDetailsType
     */
    public function getAuctionItemDetails()
    {
        return $this->auctionItemDetails;
    }

    /**
     * Sets a new auctionItemDetails
     *
     * This container is used to specify whether or not the total bid count and/or the <b>ReserveMet</b> boolean (indicating whether or not Reserve Price was met by the highest bid) is returned in the <b>ActiveInventoryReport</b> response.
     *  <br><br>
     *  This filter is only applicable for auction listings.
     *
     * @param \Nogrod\eBaySDK\BulkDataExchange\AuctionItemDetailsType $auctionItemDetails
     * @return self
     */
    public function setAuctionItemDetails(\Nogrod\eBaySDK\BulkDataExchange\AuctionItemDetailsType $auctionItemDetails)
    {
        $this->auctionItemDetails = $auctionItemDetails;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/services");
        $value = $this->getIncludeListingType();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}includeListingType", $value);
        }
        $value = $this->getFixedPriceItemDetails();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}fixedPriceItemDetails", $value);
        }
        $value = $this->getAuctionItemDetails();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}auctionItemDetails", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}includeListingType');
        if (null !== $value) {
            $this->setIncludeListingType($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}fixedPriceItemDetails');
        if (null !== $value) {
            $this->setFixedPriceItemDetails(\Nogrod\eBaySDK\BulkDataExchange\FixedPriceItemDetailsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}auctionItemDetails');
        if (null !== $value) {
            $this->setAuctionItemDetails(\Nogrod\eBaySDK\BulkDataExchange\AuctionItemDetailsType::fromKeyValue($value));
        }
    }
}
