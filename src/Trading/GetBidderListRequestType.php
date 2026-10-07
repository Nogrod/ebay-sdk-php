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
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
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
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
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
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
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

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->activeItemsOnly;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ActiveItemsOnly', null, ($value ? 'true' : 'false'));
        }
        $value = $this->endTimeFrom;
        if (null !== $value) {
            $writer->writeElementNs(null, 'EndTimeFrom', null, Func::formatDateTime($value));
        }
        $value = $this->endTimeTo;
        if (null !== $value) {
            $writer->writeElementNs(null, 'EndTimeTo', null, Func::formatDateTime($value));
        }
        $value = $this->userID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'UserID', null, (string) $value);
        }
        $value = $this->granularityLevel;
        if (null !== $value) {
            $writer->writeElementNs(null, 'GranularityLevel', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\GetBidderListRequestType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return parent::xmlReadAttribute($reader);
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'ActiveItemsOnly':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->activeItemsOnly = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'EndTimeFrom':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->endTimeFrom = new \DateTime($value);
                    }
                    return true;
                case 'EndTimeTo':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->endTimeTo = new \DateTime($value);
                    }
                    return true;
                case 'UserID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->userID = $value;
                    }
                    return true;
                case 'GranularityLevel':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->granularityLevel = $value;
                    }
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }

    protected function jsonProperties(): array
    {
        $data = parent::jsonProperties();
        $data['ActiveItemsOnly'] = $this->activeItemsOnly;
        $data['EndTimeFrom'] = Func::jsonDate($this->endTimeFrom);
        $data['EndTimeTo'] = Func::jsonDate($this->endTimeTo);
        $data['UserID'] = $this->userID;
        $data['GranularityLevel'] = $this->granularityLevel;
        return $data;
    }
}
