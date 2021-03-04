<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing LiveAuctionDetailsType
 *
 * Describes the live auction-specific details of a lot item.
 * XSD Type: LiveAuctionDetailsType
 */
class LiveAuctionDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Number that identifies the seller's eBay Live Auctions catalog
     *  within which the lot item will be listed. Use GetLiveAuctionCatalogDetails
     *  to determine the seller's available catalog IDs.
     *
     * @var int $userCatalogID
     */
    private $userCatalogID = null;

    /**
     * Number that identifies the sale schedule for the lot. The schedule ID must be
     *  for a pending sale associated with the catalog identified in UserCatalogID.
     *  Call GetLiveAuctionCatalogDetails to determine the valid schedule IDs for the catalog.
     *
     * @var int $scheduleID
     */
    private $scheduleID = null;

    /**
     * Lot number defined by the seller. Each lot number must be unique within the schedule.
     *  A lot number can consist of 1-10 alphanumeric characters beginning with a
     *  number from 0-9. If all values are numbers, the highest allowed value is 2147483647.
     *
     * @var string $lotNumber
     */
    private $lotNumber = null;

    /**
     * Highest appraised value for the item.
     *  Must be greater than zero and greater than the value in LowEstimate.
     *  (Pass an integer value only, not a double.)
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $highEstimate
     */
    private $highEstimate = null;

    /**
     * Lowest appraised value for the item. Must be greater than zero and
     *  less than the value in HighEstimate.
     *  (Pass an integer value only, not a double.)
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $lowEstimate
     */
    private $lowEstimate = null;

    /**
     * Gets as userCatalogID
     *
     * Number that identifies the seller's eBay Live Auctions catalog
     *  within which the lot item will be listed. Use GetLiveAuctionCatalogDetails
     *  to determine the seller's available catalog IDs.
     *
     * @return int
     */
    public function getUserCatalogID()
    {
        return $this->userCatalogID;
    }

    /**
     * Sets a new userCatalogID
     *
     * Number that identifies the seller's eBay Live Auctions catalog
     *  within which the lot item will be listed. Use GetLiveAuctionCatalogDetails
     *  to determine the seller's available catalog IDs.
     *
     * @param int $userCatalogID
     * @return self
     */
    public function setUserCatalogID($userCatalogID)
    {
        $this->userCatalogID = $userCatalogID;
        return $this;
    }

    /**
     * Gets as scheduleID
     *
     * Number that identifies the sale schedule for the lot. The schedule ID must be
     *  for a pending sale associated with the catalog identified in UserCatalogID.
     *  Call GetLiveAuctionCatalogDetails to determine the valid schedule IDs for the catalog.
     *
     * @return int
     */
    public function getScheduleID()
    {
        return $this->scheduleID;
    }

    /**
     * Sets a new scheduleID
     *
     * Number that identifies the sale schedule for the lot. The schedule ID must be
     *  for a pending sale associated with the catalog identified in UserCatalogID.
     *  Call GetLiveAuctionCatalogDetails to determine the valid schedule IDs for the catalog.
     *
     * @param int $scheduleID
     * @return self
     */
    public function setScheduleID($scheduleID)
    {
        $this->scheduleID = $scheduleID;
        return $this;
    }

    /**
     * Gets as lotNumber
     *
     * Lot number defined by the seller. Each lot number must be unique within the schedule.
     *  A lot number can consist of 1-10 alphanumeric characters beginning with a
     *  number from 0-9. If all values are numbers, the highest allowed value is 2147483647.
     *
     * @return string
     */
    public function getLotNumber()
    {
        return $this->lotNumber;
    }

    /**
     * Sets a new lotNumber
     *
     * Lot number defined by the seller. Each lot number must be unique within the schedule.
     *  A lot number can consist of 1-10 alphanumeric characters beginning with a
     *  number from 0-9. If all values are numbers, the highest allowed value is 2147483647.
     *
     * @param string $lotNumber
     * @return self
     */
    public function setLotNumber($lotNumber)
    {
        $this->lotNumber = $lotNumber;
        return $this;
    }

    /**
     * Gets as highEstimate
     *
     * Highest appraised value for the item.
     *  Must be greater than zero and greater than the value in LowEstimate.
     *  (Pass an integer value only, not a double.)
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getHighEstimate()
    {
        return $this->highEstimate;
    }

    /**
     * Sets a new highEstimate
     *
     * Highest appraised value for the item.
     *  Must be greater than zero and greater than the value in LowEstimate.
     *  (Pass an integer value only, not a double.)
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $highEstimate
     * @return self
     */
    public function setHighEstimate(\Nogrod\eBaySDK\MerchantData\AmountType $highEstimate)
    {
        $this->highEstimate = $highEstimate;
        return $this;
    }

    /**
     * Gets as lowEstimate
     *
     * Lowest appraised value for the item. Must be greater than zero and
     *  less than the value in HighEstimate.
     *  (Pass an integer value only, not a double.)
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getLowEstimate()
    {
        return $this->lowEstimate;
    }

    /**
     * Sets a new lowEstimate
     *
     * Lowest appraised value for the item. Must be greater than zero and
     *  less than the value in HighEstimate.
     *  (Pass an integer value only, not a double.)
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $lowEstimate
     * @return self
     */
    public function setLowEstimate(\Nogrod\eBaySDK\MerchantData\AmountType $lowEstimate)
    {
        $this->lowEstimate = $lowEstimate;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getUserCatalogID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UserCatalogID", $value);
        }
        $value = $this->getScheduleID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ScheduleID", $value);
        }
        $value = $this->getLotNumber();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LotNumber", $value);
        }
        $value = $this->getHighEstimate();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HighEstimate", $value);
        }
        $value = $this->getLowEstimate();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LowEstimate", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserCatalogID');
        if (null !== $value) {
            $this->setUserCatalogID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ScheduleID');
        if (null !== $value) {
            $this->setScheduleID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LotNumber');
        if (null !== $value) {
            $this->setLotNumber($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}HighEstimate');
        if (null !== $value) {
            $this->setHighEstimate(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LowEstimate');
        if (null !== $value) {
            $this->setLowEstimate(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
    }
}
