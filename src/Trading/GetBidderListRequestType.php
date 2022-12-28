<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetBidderListRequestType
 *
 * Retrieves all items that the user is currently bidding on, and the ones they have won
 *  or purchased.
 * XSD Type: GetBidderListRequestType
 */
class GetBidderListRequestType extends AbstractRequestType
{
    /**
     * Indicates whether or not to limit the result set to active items. If <code>true</code>, only
     *  active items are returned and the <b>EndTimeFrom</b> and <b>EndTimeTo</b> filters are
     *  ignored. If <code>false</code> (or not sent), both active and ended items are returned.
     *
     * @var bool $activeItemsOnly
     */
    private $activeItemsOnly = null;

    /**
     * Used in conjunction with <b>EndTimeTo</b>. Limits returned items to only those for
     *  which the item's end date is on or after the date/time specified. Specify an
     *  end date within 30 days prior to today. Items that ended more than 30 days
     *  ago are omitted from the results. If specified, <b>EndTimeTo</b> must also be
     *  specified. Express date/time in the format <code>YYYY-MM-DD HH:MM:SS</code>, and in GMT.
     *  This field is ignored if <b>ActiveItemsOnly</b> is set to <code>true</code>.
     *
     * @var \DateTime $endTimeFrom
     */
    private $endTimeFrom = null;

    /**
     * Used in conjunction with <b>EndTimeFrom</b>. Limits returned items to only those for
     *  which the item's end date is on or before the date/time specified. If
     *  specified, <b>EndTimeFrom</b> must also be specified. Express date/time in the format
     *  <code>YYYY-MM-DD HH:MM:SS</code>, and in GMT. This field is ignored if <b>ActiveItemsOnly</b> is set to
     *  <code>true</code>. Note that for GTC items, whose end times automatically increment by 30
     *  days every 30 days, an <b>EndTimeTo</b> value within the first 30 days of a listing will
     *  refer to the listing's initial end time.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  Starting July 1, 2019, the Good 'Til Cancelled renewal schedule will be modified from every 30 days to once per calendar month. For example, if a GTC listing is created July 5, the next monthly renewal date will be August 5. If a GTC listing is created on the 31st of the month, but the following month only has 30 days, the renewal will happen on the 30th in the following month. Finally, if a GTC listing is created on January 29-31, the renewal will happen on February 28th (or 29th during a 'Leap Year'). See the
     *  <a href="https://pages.ebay.com/seller-center/seller-updates/2019-spring/marketplace-updates.html#good-til-cancelled" target="_blank">Good 'Til Cancelled listings update</a> in the <b>Spring 2019 Seller Updates</b> for more information about this change.
     *  </span>
     *
     * @var \DateTime $endTimeTo
     */
    private $endTimeTo = null;

    /**
     * The unique identifier of an eBay user.
     *  <br><br>
     *  This field is generally not required unless there are multiple User IDs tied to the requester credentials that are specified through the <b>RequesterCredentials</b> header. If there are multiple User IDs tied to the requester credentials, this field allows you to specify the User ID for which you wish to retrieves bids and purchases.
     *
     * @var string $userID
     */
    private $userID = null;

    /**
     * You can control some of the fields returned in the response by specifying one of two values in the <b>GranularityLevel</b> field: <code>Fine</code> or <code>Medium</code>. <code>Fine</code> returns more fields than the default, while setting this field to <code>Medium</code> returns an abbreviated set of results.
     *
     * @var string $granularityLevel
     */
    private $granularityLevel = null;

    /**
     * Gets as activeItemsOnly
     *
     * Indicates whether or not to limit the result set to active items. If <code>true</code>, only
     *  active items are returned and the <b>EndTimeFrom</b> and <b>EndTimeTo</b> filters are
     *  ignored. If <code>false</code> (or not sent), both active and ended items are returned.
     *
     * @return bool
     */
    public function getActiveItemsOnly()
    {
        return $this->activeItemsOnly;
    }

    /**
     * Sets a new activeItemsOnly
     *
     * Indicates whether or not to limit the result set to active items. If <code>true</code>, only
     *  active items are returned and the <b>EndTimeFrom</b> and <b>EndTimeTo</b> filters are
     *  ignored. If <code>false</code> (or not sent), both active and ended items are returned.
     *
     * @param bool $activeItemsOnly
     * @return self
     */
    public function setActiveItemsOnly($activeItemsOnly)
    {
        $this->activeItemsOnly = $activeItemsOnly;
        return $this;
    }

    /**
     * Gets as endTimeFrom
     *
     * Used in conjunction with <b>EndTimeTo</b>. Limits returned items to only those for
     *  which the item's end date is on or after the date/time specified. Specify an
     *  end date within 30 days prior to today. Items that ended more than 30 days
     *  ago are omitted from the results. If specified, <b>EndTimeTo</b> must also be
     *  specified. Express date/time in the format <code>YYYY-MM-DD HH:MM:SS</code>, and in GMT.
     *  This field is ignored if <b>ActiveItemsOnly</b> is set to <code>true</code>.
     *
     * @return \DateTime
     */
    public function getEndTimeFrom()
    {
        return $this->endTimeFrom;
    }

    /**
     * Sets a new endTimeFrom
     *
     * Used in conjunction with <b>EndTimeTo</b>. Limits returned items to only those for
     *  which the item's end date is on or after the date/time specified. Specify an
     *  end date within 30 days prior to today. Items that ended more than 30 days
     *  ago are omitted from the results. If specified, <b>EndTimeTo</b> must also be
     *  specified. Express date/time in the format <code>YYYY-MM-DD HH:MM:SS</code>, and in GMT.
     *  This field is ignored if <b>ActiveItemsOnly</b> is set to <code>true</code>.
     *
     * @param \DateTime $endTimeFrom
     * @return self
     */
    public function setEndTimeFrom(\DateTime $endTimeFrom)
    {
        $this->endTimeFrom = $endTimeFrom;
        return $this;
    }

    /**
     * Gets as endTimeTo
     *
     * Used in conjunction with <b>EndTimeFrom</b>. Limits returned items to only those for
     *  which the item's end date is on or before the date/time specified. If
     *  specified, <b>EndTimeFrom</b> must also be specified. Express date/time in the format
     *  <code>YYYY-MM-DD HH:MM:SS</code>, and in GMT. This field is ignored if <b>ActiveItemsOnly</b> is set to
     *  <code>true</code>. Note that for GTC items, whose end times automatically increment by 30
     *  days every 30 days, an <b>EndTimeTo</b> value within the first 30 days of a listing will
     *  refer to the listing's initial end time.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  Starting July 1, 2019, the Good 'Til Cancelled renewal schedule will be modified from every 30 days to once per calendar month. For example, if a GTC listing is created July 5, the next monthly renewal date will be August 5. If a GTC listing is created on the 31st of the month, but the following month only has 30 days, the renewal will happen on the 30th in the following month. Finally, if a GTC listing is created on January 29-31, the renewal will happen on February 28th (or 29th during a 'Leap Year'). See the
     *  <a href="https://pages.ebay.com/seller-center/seller-updates/2019-spring/marketplace-updates.html#good-til-cancelled" target="_blank">Good 'Til Cancelled listings update</a> in the <b>Spring 2019 Seller Updates</b> for more information about this change.
     *  </span>
     *
     * @return \DateTime
     */
    public function getEndTimeTo()
    {
        return $this->endTimeTo;
    }

    /**
     * Sets a new endTimeTo
     *
     * Used in conjunction with <b>EndTimeFrom</b>. Limits returned items to only those for
     *  which the item's end date is on or before the date/time specified. If
     *  specified, <b>EndTimeFrom</b> must also be specified. Express date/time in the format
     *  <code>YYYY-MM-DD HH:MM:SS</code>, and in GMT. This field is ignored if <b>ActiveItemsOnly</b> is set to
     *  <code>true</code>. Note that for GTC items, whose end times automatically increment by 30
     *  days every 30 days, an <b>EndTimeTo</b> value within the first 30 days of a listing will
     *  refer to the listing's initial end time.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  Starting July 1, 2019, the Good 'Til Cancelled renewal schedule will be modified from every 30 days to once per calendar month. For example, if a GTC listing is created July 5, the next monthly renewal date will be August 5. If a GTC listing is created on the 31st of the month, but the following month only has 30 days, the renewal will happen on the 30th in the following month. Finally, if a GTC listing is created on January 29-31, the renewal will happen on February 28th (or 29th during a 'Leap Year'). See the
     *  <a href="https://pages.ebay.com/seller-center/seller-updates/2019-spring/marketplace-updates.html#good-til-cancelled" target="_blank">Good 'Til Cancelled listings update</a> in the <b>Spring 2019 Seller Updates</b> for more information about this change.
     *  </span>
     *
     * @param \DateTime $endTimeTo
     * @return self
     */
    public function setEndTimeTo(\DateTime $endTimeTo)
    {
        $this->endTimeTo = $endTimeTo;
        return $this;
    }

    /**
     * Gets as userID
     *
     * The unique identifier of an eBay user.
     *  <br><br>
     *  This field is generally not required unless there are multiple User IDs tied to the requester credentials that are specified through the <b>RequesterCredentials</b> header. If there are multiple User IDs tied to the requester credentials, this field allows you to specify the User ID for which you wish to retrieves bids and purchases.
     *
     * @return string
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * Sets a new userID
     *
     * The unique identifier of an eBay user.
     *  <br><br>
     *  This field is generally not required unless there are multiple User IDs tied to the requester credentials that are specified through the <b>RequesterCredentials</b> header. If there are multiple User IDs tied to the requester credentials, this field allows you to specify the User ID for which you wish to retrieves bids and purchases.
     *
     * @param string $userID
     * @return self
     */
    public function setUserID($userID)
    {
        $this->userID = $userID;
        return $this;
    }

    /**
     * Gets as granularityLevel
     *
     * You can control some of the fields returned in the response by specifying one of two values in the <b>GranularityLevel</b> field: <code>Fine</code> or <code>Medium</code>. <code>Fine</code> returns more fields than the default, while setting this field to <code>Medium</code> returns an abbreviated set of results.
     *
     * @return string
     */
    public function getGranularityLevel()
    {
        return $this->granularityLevel;
    }

    /**
     * Sets a new granularityLevel
     *
     * You can control some of the fields returned in the response by specifying one of two values in the <b>GranularityLevel</b> field: <code>Fine</code> or <code>Medium</code>. <code>Fine</code> returns more fields than the default, while setting this field to <code>Medium</code> returns an abbreviated set of results.
     *
     * @param string $granularityLevel
     * @return self
     */
    public function setGranularityLevel($granularityLevel)
    {
        $this->granularityLevel = $granularityLevel;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getActiveItemsOnly();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ActiveItemsOnly", $value);
        }
        $value = $this->getEndTimeFrom();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EndTimeFrom", $value);
        }
        $value = $this->getEndTimeTo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EndTimeTo", $value);
        }
        $value = $this->getUserID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UserID", $value);
        }
        $value = $this->getGranularityLevel();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}GranularityLevel", $value);
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
        parent::setKeyValue($keyValue);
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ActiveItemsOnly');
        if (null !== $value) {
            $this->setActiveItemsOnly($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EndTimeFrom');
        if (null !== $value) {
            $this->setEndTimeFrom(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EndTimeTo');
        if (null !== $value) {
            $this->setEndTimeTo(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserID');
        if (null !== $value) {
            $this->setUserID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}GranularityLevel');
        if (null !== $value) {
            $this->setGranularityLevel($value);
        }
    }
}
