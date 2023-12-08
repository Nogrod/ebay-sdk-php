<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing BiddingSummaryType
 *
 * Type used by the <b>BiddingSummary</b> container, which is returned in the <b>GetAllBidders</b> response if the <b>IncludeBiddingSummary</b> boolean field is included and set to <code>true</code> in the call request. The <b>BiddingSummary</b> container consists of bidding history information for a specific bidder (specified in the <b>User.UserID</b> field).
 * XSD Type: BiddingSummaryType
 */
class BiddingSummaryType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This integer value indicates the length of time (in number of days) that is being used to calculate all counts in the <b>BiddingSummary</b> container. This value is generally <code>30</code> (days), which means that all counts in the container have been calculated from the present time and going back 30 days in the past.
     *  <br/><br/>
     *  This field is always returned with the <b>BiddingSummary</b> container.
     *
     * @var int $summaryDays
     */
    private $summaryDays = null;

    /**
     * This integer value indicates the total number of bids (from any and all eBay sellers) that the user has placed during the last 30 days (or the number of days specified in the <b>SummaryDays</b> field).
     *  <br/><br/>
     *  This field is always returned with the <b>BiddingSummary</b> container.
     *
     * @var int $totalBids
     */
    private $totalBids = null;

    /**
     * This integer value is actually a percentage value that indicates what percentage of the user's total number of bids during the last 30 days (or the number of days specified in the <b>SummaryDays</b> field) has been placed on auction items that the seller has listed. The percentage value is rounded up to the highest whole percentage number.
     *  <br/><br/>
     *  This field is always returned with the <b>BiddingSummary</b> container.
     *
     * @var int $bidActivityWithSeller
     */
    private $bidActivityWithSeller = null;

    /**
     * This integer value indicates the total number of bids to unique sellers that the user has placed during the last 30 days (or the number of days specified in the <b>SummaryDays</b> field).
     *  <br/><br/>
     *  This field is always returned with the <b>BiddingSummary</b> container.
     *
     * @var int $bidsToUniqueSellers
     */
    private $bidsToUniqueSellers = null;

    /**
     * This integer value indicates the total number of bids made with unique listing categories that the user has placed during the last 30 days (or the number of days specified in the <b>SummaryDays</b> field).
     *  <br/><br/>
     *  This field is always returned with the <b>BiddingSummary</b> container.
     *
     * @var int $bidsToUniqueCategories
     */
    private $bidsToUniqueCategories = null;

    /**
     * This integer value indicates the total number of bids that the user has retracted (from any and all sellers) during the last 30 days (or the number of days specified in the <b>SummaryDays</b> field).
     *  <br/><br/>
     *  This field is always returned with the <b>BiddingSummary</b> container.
     *
     * @var int $bidRetractions
     */
    private $bidRetractions = null;

    /**
     * This container provides information on each auction item that the user has placed a bid on during the last 30 days (or the number of days specified in the <b>SummaryDays</b> field).
     *
     * @var \Nogrod\eBaySDK\MerchantData\ItemBidDetailsType[] $itemBidDetails
     */
    private $itemBidDetails = [

    ];

    /**
     * Gets as summaryDays
     *
     * This integer value indicates the length of time (in number of days) that is being used to calculate all counts in the <b>BiddingSummary</b> container. This value is generally <code>30</code> (days), which means that all counts in the container have been calculated from the present time and going back 30 days in the past.
     *  <br/><br/>
     *  This field is always returned with the <b>BiddingSummary</b> container.
     *
     * @return int
     */
    public function getSummaryDays()
    {
        return $this->summaryDays;
    }

    /**
     * Sets a new summaryDays
     *
     * This integer value indicates the length of time (in number of days) that is being used to calculate all counts in the <b>BiddingSummary</b> container. This value is generally <code>30</code> (days), which means that all counts in the container have been calculated from the present time and going back 30 days in the past.
     *  <br/><br/>
     *  This field is always returned with the <b>BiddingSummary</b> container.
     *
     * @param int $summaryDays
     * @return self
     */
    public function setSummaryDays($summaryDays)
    {
        $this->summaryDays = $summaryDays;
        return $this;
    }

    /**
     * Gets as totalBids
     *
     * This integer value indicates the total number of bids (from any and all eBay sellers) that the user has placed during the last 30 days (or the number of days specified in the <b>SummaryDays</b> field).
     *  <br/><br/>
     *  This field is always returned with the <b>BiddingSummary</b> container.
     *
     * @return int
     */
    public function getTotalBids()
    {
        return $this->totalBids;
    }

    /**
     * Sets a new totalBids
     *
     * This integer value indicates the total number of bids (from any and all eBay sellers) that the user has placed during the last 30 days (or the number of days specified in the <b>SummaryDays</b> field).
     *  <br/><br/>
     *  This field is always returned with the <b>BiddingSummary</b> container.
     *
     * @param int $totalBids
     * @return self
     */
    public function setTotalBids($totalBids)
    {
        $this->totalBids = $totalBids;
        return $this;
    }

    /**
     * Gets as bidActivityWithSeller
     *
     * This integer value is actually a percentage value that indicates what percentage of the user's total number of bids during the last 30 days (or the number of days specified in the <b>SummaryDays</b> field) has been placed on auction items that the seller has listed. The percentage value is rounded up to the highest whole percentage number.
     *  <br/><br/>
     *  This field is always returned with the <b>BiddingSummary</b> container.
     *
     * @return int
     */
    public function getBidActivityWithSeller()
    {
        return $this->bidActivityWithSeller;
    }

    /**
     * Sets a new bidActivityWithSeller
     *
     * This integer value is actually a percentage value that indicates what percentage of the user's total number of bids during the last 30 days (or the number of days specified in the <b>SummaryDays</b> field) has been placed on auction items that the seller has listed. The percentage value is rounded up to the highest whole percentage number.
     *  <br/><br/>
     *  This field is always returned with the <b>BiddingSummary</b> container.
     *
     * @param int $bidActivityWithSeller
     * @return self
     */
    public function setBidActivityWithSeller($bidActivityWithSeller)
    {
        $this->bidActivityWithSeller = $bidActivityWithSeller;
        return $this;
    }

    /**
     * Gets as bidsToUniqueSellers
     *
     * This integer value indicates the total number of bids to unique sellers that the user has placed during the last 30 days (or the number of days specified in the <b>SummaryDays</b> field).
     *  <br/><br/>
     *  This field is always returned with the <b>BiddingSummary</b> container.
     *
     * @return int
     */
    public function getBidsToUniqueSellers()
    {
        return $this->bidsToUniqueSellers;
    }

    /**
     * Sets a new bidsToUniqueSellers
     *
     * This integer value indicates the total number of bids to unique sellers that the user has placed during the last 30 days (or the number of days specified in the <b>SummaryDays</b> field).
     *  <br/><br/>
     *  This field is always returned with the <b>BiddingSummary</b> container.
     *
     * @param int $bidsToUniqueSellers
     * @return self
     */
    public function setBidsToUniqueSellers($bidsToUniqueSellers)
    {
        $this->bidsToUniqueSellers = $bidsToUniqueSellers;
        return $this;
    }

    /**
     * Gets as bidsToUniqueCategories
     *
     * This integer value indicates the total number of bids made with unique listing categories that the user has placed during the last 30 days (or the number of days specified in the <b>SummaryDays</b> field).
     *  <br/><br/>
     *  This field is always returned with the <b>BiddingSummary</b> container.
     *
     * @return int
     */
    public function getBidsToUniqueCategories()
    {
        return $this->bidsToUniqueCategories;
    }

    /**
     * Sets a new bidsToUniqueCategories
     *
     * This integer value indicates the total number of bids made with unique listing categories that the user has placed during the last 30 days (or the number of days specified in the <b>SummaryDays</b> field).
     *  <br/><br/>
     *  This field is always returned with the <b>BiddingSummary</b> container.
     *
     * @param int $bidsToUniqueCategories
     * @return self
     */
    public function setBidsToUniqueCategories($bidsToUniqueCategories)
    {
        $this->bidsToUniqueCategories = $bidsToUniqueCategories;
        return $this;
    }

    /**
     * Gets as bidRetractions
     *
     * This integer value indicates the total number of bids that the user has retracted (from any and all sellers) during the last 30 days (or the number of days specified in the <b>SummaryDays</b> field).
     *  <br/><br/>
     *  This field is always returned with the <b>BiddingSummary</b> container.
     *
     * @return int
     */
    public function getBidRetractions()
    {
        return $this->bidRetractions;
    }

    /**
     * Sets a new bidRetractions
     *
     * This integer value indicates the total number of bids that the user has retracted (from any and all sellers) during the last 30 days (or the number of days specified in the <b>SummaryDays</b> field).
     *  <br/><br/>
     *  This field is always returned with the <b>BiddingSummary</b> container.
     *
     * @param int $bidRetractions
     * @return self
     */
    public function setBidRetractions($bidRetractions)
    {
        $this->bidRetractions = $bidRetractions;
        return $this;
    }

    /**
     * Adds as itemBidDetails
     *
     * This container provides information on each auction item that the user has placed a bid on during the last 30 days (or the number of days specified in the <b>SummaryDays</b> field).
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\ItemBidDetailsType $itemBidDetails
     */
    public function addToItemBidDetails(\Nogrod\eBaySDK\MerchantData\ItemBidDetailsType $itemBidDetails)
    {
        $this->itemBidDetails[] = $itemBidDetails;
        return $this;
    }

    /**
     * isset itemBidDetails
     *
     * This container provides information on each auction item that the user has placed a bid on during the last 30 days (or the number of days specified in the <b>SummaryDays</b> field).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemBidDetails($index)
    {
        return isset($this->itemBidDetails[$index]);
    }

    /**
     * unset itemBidDetails
     *
     * This container provides information on each auction item that the user has placed a bid on during the last 30 days (or the number of days specified in the <b>SummaryDays</b> field).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemBidDetails($index)
    {
        unset($this->itemBidDetails[$index]);
    }

    /**
     * Gets as itemBidDetails
     *
     * This container provides information on each auction item that the user has placed a bid on during the last 30 days (or the number of days specified in the <b>SummaryDays</b> field).
     *
     * @return \Nogrod\eBaySDK\MerchantData\ItemBidDetailsType[]
     */
    public function getItemBidDetails()
    {
        return $this->itemBidDetails;
    }

    /**
     * Sets a new itemBidDetails
     *
     * This container provides information on each auction item that the user has placed a bid on during the last 30 days (or the number of days specified in the <b>SummaryDays</b> field).
     *
     * @param \Nogrod\eBaySDK\MerchantData\ItemBidDetailsType[] $itemBidDetails
     * @return self
     */
    public function setItemBidDetails(array $itemBidDetails)
    {
        $this->itemBidDetails = $itemBidDetails;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getSummaryDays();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SummaryDays", $value);
        }
        $value = $this->getTotalBids();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalBids", $value);
        }
        $value = $this->getBidActivityWithSeller();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BidActivityWithSeller", $value);
        }
        $value = $this->getBidsToUniqueSellers();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BidsToUniqueSellers", $value);
        }
        $value = $this->getBidsToUniqueCategories();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BidsToUniqueCategories", $value);
        }
        $value = $this->getBidRetractions();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BidRetractions", $value);
        }
        $value = $this->getItemBidDetails();
        if (null !== $value && !empty($this->getItemBidDetails())) {
            $writer->write(array_map(function ($v) {return ["ItemBidDetails" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SummaryDays');
        if (null !== $value) {
            $this->setSummaryDays($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalBids');
        if (null !== $value) {
            $this->setTotalBids($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BidActivityWithSeller');
        if (null !== $value) {
            $this->setBidActivityWithSeller($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BidsToUniqueSellers');
        if (null !== $value) {
            $this->setBidsToUniqueSellers($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BidsToUniqueCategories');
        if (null !== $value) {
            $this->setBidsToUniqueCategories($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BidRetractions');
        if (null !== $value) {
            $this->setBidRetractions($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemBidDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setItemBidDetails(array_map(function ($v) {return \Nogrod\eBaySDK\MerchantData\ItemBidDetailsType::fromKeyValue($v);}, $value));
        }
    }
}
