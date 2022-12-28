<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetSellerEventsRequestType
 *
 * This call is used by a seller to retrieve changes to their own listings that have occurred within the last 48 hours, including price changes, available quantity, and other revisions to listing.
 *  <br/><br/>
 *  One of the available date range filters must be used with this call.
 * XSD Type: GetSellerEventsRequestType
 */
class GetSellerEventsRequestType extends AbstractRequestType
{
    /**
     * <span class="tablenote"><strong>Note:</strong>
     *  This field should no longer be used, and will be ignored if it is included in a <b>GetSellerEvents</b> request. There are plans to remove this field from the public WSDL. The only eBay user ID that can be used is the one associated with the authentication token.
     *  </span>
     *
     * @var string $userID
     */
    private $userID = null;

    /**
     * Describes the earliest (oldest) time to use in a time range filter based
     *  on item start time. Must be specified if <b>StartTimeTo</b> is specified.
     *  <br/><br/>
     *  Either
     *  the <b>StartTimeFrom</b>, <b>EndTimeFrom</b>, or <b>ModTimeFrom</b> filter must be specified.
     *  <br/><br/>
     *  If you do not specify the corresponding <b>To</b> filter,
     *  it is set to the time you make the call.
     *  <br/><br/>
     *  For better results, the time period you use should be less than 48 hours.
     *  If 3000 or more items are found, use a smaller time range.<br>
     *  <br>
     *  Include a 2-minute, overlapping buffer between requests.
     *  For example, if <b>StartTimeTo</b> was 6:58 in a prior request,
     *  the current request should use 6:56 in <b>StartTimeFrom</b>
     *  (e.g., use ranges like 5:56-6:58, 6:56-7:58, 7:56-8:58).
     *
     * @var \DateTime $startTimeFrom
     */
    private $startTimeFrom = null;

    /**
     * Describes the latest (most recent) date to use in a time range filter
     *  based on item start time. If you specify the corresponding <b>From</b> filter,
     *  but you do not include <b>StartTimeTo</b>, the <b>StartTimeTo</b> is set to
     *  the time you make the call.
     *
     * @var \DateTime $startTimeTo
     */
    private $startTimeTo = null;

    /**
     * Describes the earliest (oldest) date to use in a time range filter based
     *  on item end time. Must be specified if <b>EndTimeTo</b> is specified.
     *  <br/><br/>
     *  Either
     *  the <b>StartTimeFrom</b>, <b>EndTimeFrom</b>, or <b>ModTimeFrom</b> filter must be specified.
     *  If you do not specify the corresponding To filter,
     *  it is set to the time you make the call.<br>
     *  <br>
     *  For better results, the time range you use should be less than 48 hours.
     *  If 3000 or more items are found, use a smaller time range.<br>
     *  <br>
     *  Include a 2-minute, overlapping buffer between requests.
     *  For example, if <b>EndTimeTo</b> was 6:58 in a prior request,
     *  the current request should use 6:56 in <b>EndTimeFrom</b>
     *  (e.g., use ranges like 5:56-6:58, 6:56-7:58, 7:56-8:58).
     *
     * @var \DateTime $endTimeFrom
     */
    private $endTimeFrom = null;

    /**
     * Describes the latest (most recent) date to use in a time range filter
     *  based on item end time.
     *  <br/><br/>
     *  If you specify the corresponding <b>From</b> filter,
     *  but you do not include <b>EndTimeTo</b>, then <b>EndTimeTo</b> is set
     *  to the time you make the call.
     *
     * @var \DateTime $endTimeTo
     */
    private $endTimeTo = null;

    /**
     * Describes the earliest (oldest) date to use in a time range filter based
     *  on item modification time. Must be specified if <b>ModTimeTo</b> is specified. Either
     *  the <b>StartTimeFrom</b>, <b>EndTimeFrom</b>, or <b>ModTimeFrom</b> filter must be specified.
     *  If you do not specify the corresponding To filter,
     *  it is set to the time you make the call.<br>
     *  <br>
     *  Include a 2-minute, overlapping buffer between requests.
     *  For example, if <b>ModTimeTo</b> was 6:58 in a prior request,
     *  the current request should use 6:56 in <b>ModTimeFrom</b>
     *  (e.g., use ranges like 5:56-6:58, 6:56-7:58, 7:56-8:58).
     *  <br><br>
     *  For better results, the time range you use should be less than 48 hours.
     *  If 3000 or more items are found, use a smaller time range.
     *  <br><br>
     *  If an unexpected item is returned (including an old item
     *  or an unchanged active item), please ignore the item.
     *  Although a maintenance process may have triggered a change in the modification time, item characteristics are unchanged.
     *
     * @var \DateTime $modTimeFrom
     */
    private $modTimeFrom = null;

    /**
     * Describes the latest (most recent) date and time to use in a time range filter based on the time an item's record was modified. If you specify the corresponding <b>From</b> filter, but you do not include <b>ModTimeTo</b> , then <b>ModTimeTo</b> is set to the time you make the call. Include a 2-minute buffer between the current time and the <b>ModTimeTo</b> filter.
     *
     * @var \DateTime $modTimeTo
     */
    private $modTimeTo = null;

    /**
     * If true, response includes only items that have been modified
     *  within the <b>ModTime</b> range. If false, response includes all items.
     *
     * @var bool $newItemFilter
     */
    private $newItemFilter = null;

    /**
     * The seller can include this field and set its value to <code>true</code> if that seller wants to see how many prospective bidders/buyers currently have an item added to their Watch Lists. The Watch count is returned in the <b>WatchCount</b> field for each item in the response.
     *
     * @var bool $includeWatchCount
     */
    private $includeWatchCount = null;

    /**
     * Specifies whether to force the response to include
     *  variation specifics for multiple-variation listings. <br>
     *  <br>
     *  If false (or not specified), eBay keeps the response as small as
     *  possible by not returning <b>Variation.VariationSpecifics</b>.
     *  It only returns <b>Variation.SKU</b> as an identifier
     *  (along with the variation price and other selling details).
     *  If the variation has no SKU, then <b>Variation.VariationSpecifics</b>
     *  is returned as the variation's unique identifier.<br>
     *  <br>
     *  If true, <b>Variation.VariationSpecifics</b> is returned.
     *  (<b>Variation.SKU</b> is also returned, if the variation has a SKU.)
     *  This may be useful for applications that don't track variations
     *  by SKU.<br>
     *  <br>
     *  Ignored when <b>HideVariations</b> is set to <b>true</b>.
     *  <br>
     *  <br>
     *  <b>Note:</b> If the seller includes a large number of
     *  variations in many listings, using this flag may degrade the
     *  call's performance. Therefore, when you use this flag, you may
     *  need to reduce the total number of items you're requesting at
     *  once. For example, you may need to use shorter time ranges in
     *  the <b>StartTimeFrom</b>, <b>EndTimeFrom</b>, or <b>ModTimeFrom</b> filters.
     *
     * @var bool $includeVariationSpecifics
     */
    private $includeVariationSpecifics = null;

    /**
     * Specifies whether to force the response to hide
     *  variation details for multiple-variation listings.<br>
     *  <br>
     *  If false (or not specified), eBay returns variation details (if
     *  any). In this case, the amount of detail can be controlled by
     *  using <b>IncludeVariationSpecifics</b>.<br>
     *  <br>
     *  If true, variation details are not returned (and
     *  <b>IncludeVariationSpecifics</b> has no effect). This may be useful for applications that use other calls, notifications, alerts, or reports to track price and quantity details.
     *
     * @var bool $hideVariations
     */
    private $hideVariations = null;

    /**
     * Gets as userID
     *
     * <span class="tablenote"><strong>Note:</strong>
     *  This field should no longer be used, and will be ignored if it is included in a <b>GetSellerEvents</b> request. There are plans to remove this field from the public WSDL. The only eBay user ID that can be used is the one associated with the authentication token.
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
     * <span class="tablenote"><strong>Note:</strong>
     *  This field should no longer be used, and will be ignored if it is included in a <b>GetSellerEvents</b> request. There are plans to remove this field from the public WSDL. The only eBay user ID that can be used is the one associated with the authentication token.
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
     * Gets as startTimeFrom
     *
     * Describes the earliest (oldest) time to use in a time range filter based
     *  on item start time. Must be specified if <b>StartTimeTo</b> is specified.
     *  <br/><br/>
     *  Either
     *  the <b>StartTimeFrom</b>, <b>EndTimeFrom</b>, or <b>ModTimeFrom</b> filter must be specified.
     *  <br/><br/>
     *  If you do not specify the corresponding <b>To</b> filter,
     *  it is set to the time you make the call.
     *  <br/><br/>
     *  For better results, the time period you use should be less than 48 hours.
     *  If 3000 or more items are found, use a smaller time range.<br>
     *  <br>
     *  Include a 2-minute, overlapping buffer between requests.
     *  For example, if <b>StartTimeTo</b> was 6:58 in a prior request,
     *  the current request should use 6:56 in <b>StartTimeFrom</b>
     *  (e.g., use ranges like 5:56-6:58, 6:56-7:58, 7:56-8:58).
     *
     * @return \DateTime
     */
    public function getStartTimeFrom()
    {
        return $this->startTimeFrom;
    }

    /**
     * Sets a new startTimeFrom
     *
     * Describes the earliest (oldest) time to use in a time range filter based
     *  on item start time. Must be specified if <b>StartTimeTo</b> is specified.
     *  <br/><br/>
     *  Either
     *  the <b>StartTimeFrom</b>, <b>EndTimeFrom</b>, or <b>ModTimeFrom</b> filter must be specified.
     *  <br/><br/>
     *  If you do not specify the corresponding <b>To</b> filter,
     *  it is set to the time you make the call.
     *  <br/><br/>
     *  For better results, the time period you use should be less than 48 hours.
     *  If 3000 or more items are found, use a smaller time range.<br>
     *  <br>
     *  Include a 2-minute, overlapping buffer between requests.
     *  For example, if <b>StartTimeTo</b> was 6:58 in a prior request,
     *  the current request should use 6:56 in <b>StartTimeFrom</b>
     *  (e.g., use ranges like 5:56-6:58, 6:56-7:58, 7:56-8:58).
     *
     * @param \DateTime $startTimeFrom
     * @return self
     */
    public function setStartTimeFrom(\DateTime $startTimeFrom)
    {
        $this->startTimeFrom = $startTimeFrom;
        return $this;
    }

    /**
     * Gets as startTimeTo
     *
     * Describes the latest (most recent) date to use in a time range filter
     *  based on item start time. If you specify the corresponding <b>From</b> filter,
     *  but you do not include <b>StartTimeTo</b>, the <b>StartTimeTo</b> is set to
     *  the time you make the call.
     *
     * @return \DateTime
     */
    public function getStartTimeTo()
    {
        return $this->startTimeTo;
    }

    /**
     * Sets a new startTimeTo
     *
     * Describes the latest (most recent) date to use in a time range filter
     *  based on item start time. If you specify the corresponding <b>From</b> filter,
     *  but you do not include <b>StartTimeTo</b>, the <b>StartTimeTo</b> is set to
     *  the time you make the call.
     *
     * @param \DateTime $startTimeTo
     * @return self
     */
    public function setStartTimeTo(\DateTime $startTimeTo)
    {
        $this->startTimeTo = $startTimeTo;
        return $this;
    }

    /**
     * Gets as endTimeFrom
     *
     * Describes the earliest (oldest) date to use in a time range filter based
     *  on item end time. Must be specified if <b>EndTimeTo</b> is specified.
     *  <br/><br/>
     *  Either
     *  the <b>StartTimeFrom</b>, <b>EndTimeFrom</b>, or <b>ModTimeFrom</b> filter must be specified.
     *  If you do not specify the corresponding To filter,
     *  it is set to the time you make the call.<br>
     *  <br>
     *  For better results, the time range you use should be less than 48 hours.
     *  If 3000 or more items are found, use a smaller time range.<br>
     *  <br>
     *  Include a 2-minute, overlapping buffer between requests.
     *  For example, if <b>EndTimeTo</b> was 6:58 in a prior request,
     *  the current request should use 6:56 in <b>EndTimeFrom</b>
     *  (e.g., use ranges like 5:56-6:58, 6:56-7:58, 7:56-8:58).
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
     * Describes the earliest (oldest) date to use in a time range filter based
     *  on item end time. Must be specified if <b>EndTimeTo</b> is specified.
     *  <br/><br/>
     *  Either
     *  the <b>StartTimeFrom</b>, <b>EndTimeFrom</b>, or <b>ModTimeFrom</b> filter must be specified.
     *  If you do not specify the corresponding To filter,
     *  it is set to the time you make the call.<br>
     *  <br>
     *  For better results, the time range you use should be less than 48 hours.
     *  If 3000 or more items are found, use a smaller time range.<br>
     *  <br>
     *  Include a 2-minute, overlapping buffer between requests.
     *  For example, if <b>EndTimeTo</b> was 6:58 in a prior request,
     *  the current request should use 6:56 in <b>EndTimeFrom</b>
     *  (e.g., use ranges like 5:56-6:58, 6:56-7:58, 7:56-8:58).
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
     * Describes the latest (most recent) date to use in a time range filter
     *  based on item end time.
     *  <br/><br/>
     *  If you specify the corresponding <b>From</b> filter,
     *  but you do not include <b>EndTimeTo</b>, then <b>EndTimeTo</b> is set
     *  to the time you make the call.
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
     * Describes the latest (most recent) date to use in a time range filter
     *  based on item end time.
     *  <br/><br/>
     *  If you specify the corresponding <b>From</b> filter,
     *  but you do not include <b>EndTimeTo</b>, then <b>EndTimeTo</b> is set
     *  to the time you make the call.
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
     * Gets as modTimeFrom
     *
     * Describes the earliest (oldest) date to use in a time range filter based
     *  on item modification time. Must be specified if <b>ModTimeTo</b> is specified. Either
     *  the <b>StartTimeFrom</b>, <b>EndTimeFrom</b>, or <b>ModTimeFrom</b> filter must be specified.
     *  If you do not specify the corresponding To filter,
     *  it is set to the time you make the call.<br>
     *  <br>
     *  Include a 2-minute, overlapping buffer between requests.
     *  For example, if <b>ModTimeTo</b> was 6:58 in a prior request,
     *  the current request should use 6:56 in <b>ModTimeFrom</b>
     *  (e.g., use ranges like 5:56-6:58, 6:56-7:58, 7:56-8:58).
     *  <br><br>
     *  For better results, the time range you use should be less than 48 hours.
     *  If 3000 or more items are found, use a smaller time range.
     *  <br><br>
     *  If an unexpected item is returned (including an old item
     *  or an unchanged active item), please ignore the item.
     *  Although a maintenance process may have triggered a change in the modification time, item characteristics are unchanged.
     *
     * @return \DateTime
     */
    public function getModTimeFrom()
    {
        return $this->modTimeFrom;
    }

    /**
     * Sets a new modTimeFrom
     *
     * Describes the earliest (oldest) date to use in a time range filter based
     *  on item modification time. Must be specified if <b>ModTimeTo</b> is specified. Either
     *  the <b>StartTimeFrom</b>, <b>EndTimeFrom</b>, or <b>ModTimeFrom</b> filter must be specified.
     *  If you do not specify the corresponding To filter,
     *  it is set to the time you make the call.<br>
     *  <br>
     *  Include a 2-minute, overlapping buffer between requests.
     *  For example, if <b>ModTimeTo</b> was 6:58 in a prior request,
     *  the current request should use 6:56 in <b>ModTimeFrom</b>
     *  (e.g., use ranges like 5:56-6:58, 6:56-7:58, 7:56-8:58).
     *  <br><br>
     *  For better results, the time range you use should be less than 48 hours.
     *  If 3000 or more items are found, use a smaller time range.
     *  <br><br>
     *  If an unexpected item is returned (including an old item
     *  or an unchanged active item), please ignore the item.
     *  Although a maintenance process may have triggered a change in the modification time, item characteristics are unchanged.
     *
     * @param \DateTime $modTimeFrom
     * @return self
     */
    public function setModTimeFrom(\DateTime $modTimeFrom)
    {
        $this->modTimeFrom = $modTimeFrom;
        return $this;
    }

    /**
     * Gets as modTimeTo
     *
     * Describes the latest (most recent) date and time to use in a time range filter based on the time an item's record was modified. If you specify the corresponding <b>From</b> filter, but you do not include <b>ModTimeTo</b> , then <b>ModTimeTo</b> is set to the time you make the call. Include a 2-minute buffer between the current time and the <b>ModTimeTo</b> filter.
     *
     * @return \DateTime
     */
    public function getModTimeTo()
    {
        return $this->modTimeTo;
    }

    /**
     * Sets a new modTimeTo
     *
     * Describes the latest (most recent) date and time to use in a time range filter based on the time an item's record was modified. If you specify the corresponding <b>From</b> filter, but you do not include <b>ModTimeTo</b> , then <b>ModTimeTo</b> is set to the time you make the call. Include a 2-minute buffer between the current time and the <b>ModTimeTo</b> filter.
     *
     * @param \DateTime $modTimeTo
     * @return self
     */
    public function setModTimeTo(\DateTime $modTimeTo)
    {
        $this->modTimeTo = $modTimeTo;
        return $this;
    }

    /**
     * Gets as newItemFilter
     *
     * If true, response includes only items that have been modified
     *  within the <b>ModTime</b> range. If false, response includes all items.
     *
     * @return bool
     */
    public function getNewItemFilter()
    {
        return $this->newItemFilter;
    }

    /**
     * Sets a new newItemFilter
     *
     * If true, response includes only items that have been modified
     *  within the <b>ModTime</b> range. If false, response includes all items.
     *
     * @param bool $newItemFilter
     * @return self
     */
    public function setNewItemFilter($newItemFilter)
    {
        $this->newItemFilter = $newItemFilter;
        return $this;
    }

    /**
     * Gets as includeWatchCount
     *
     * The seller can include this field and set its value to <code>true</code> if that seller wants to see how many prospective bidders/buyers currently have an item added to their Watch Lists. The Watch count is returned in the <b>WatchCount</b> field for each item in the response.
     *
     * @return bool
     */
    public function getIncludeWatchCount()
    {
        return $this->includeWatchCount;
    }

    /**
     * Sets a new includeWatchCount
     *
     * The seller can include this field and set its value to <code>true</code> if that seller wants to see how many prospective bidders/buyers currently have an item added to their Watch Lists. The Watch count is returned in the <b>WatchCount</b> field for each item in the response.
     *
     * @param bool $includeWatchCount
     * @return self
     */
    public function setIncludeWatchCount($includeWatchCount)
    {
        $this->includeWatchCount = $includeWatchCount;
        return $this;
    }

    /**
     * Gets as includeVariationSpecifics
     *
     * Specifies whether to force the response to include
     *  variation specifics for multiple-variation listings. <br>
     *  <br>
     *  If false (or not specified), eBay keeps the response as small as
     *  possible by not returning <b>Variation.VariationSpecifics</b>.
     *  It only returns <b>Variation.SKU</b> as an identifier
     *  (along with the variation price and other selling details).
     *  If the variation has no SKU, then <b>Variation.VariationSpecifics</b>
     *  is returned as the variation's unique identifier.<br>
     *  <br>
     *  If true, <b>Variation.VariationSpecifics</b> is returned.
     *  (<b>Variation.SKU</b> is also returned, if the variation has a SKU.)
     *  This may be useful for applications that don't track variations
     *  by SKU.<br>
     *  <br>
     *  Ignored when <b>HideVariations</b> is set to <b>true</b>.
     *  <br>
     *  <br>
     *  <b>Note:</b> If the seller includes a large number of
     *  variations in many listings, using this flag may degrade the
     *  call's performance. Therefore, when you use this flag, you may
     *  need to reduce the total number of items you're requesting at
     *  once. For example, you may need to use shorter time ranges in
     *  the <b>StartTimeFrom</b>, <b>EndTimeFrom</b>, or <b>ModTimeFrom</b> filters.
     *
     * @return bool
     */
    public function getIncludeVariationSpecifics()
    {
        return $this->includeVariationSpecifics;
    }

    /**
     * Sets a new includeVariationSpecifics
     *
     * Specifies whether to force the response to include
     *  variation specifics for multiple-variation listings. <br>
     *  <br>
     *  If false (or not specified), eBay keeps the response as small as
     *  possible by not returning <b>Variation.VariationSpecifics</b>.
     *  It only returns <b>Variation.SKU</b> as an identifier
     *  (along with the variation price and other selling details).
     *  If the variation has no SKU, then <b>Variation.VariationSpecifics</b>
     *  is returned as the variation's unique identifier.<br>
     *  <br>
     *  If true, <b>Variation.VariationSpecifics</b> is returned.
     *  (<b>Variation.SKU</b> is also returned, if the variation has a SKU.)
     *  This may be useful for applications that don't track variations
     *  by SKU.<br>
     *  <br>
     *  Ignored when <b>HideVariations</b> is set to <b>true</b>.
     *  <br>
     *  <br>
     *  <b>Note:</b> If the seller includes a large number of
     *  variations in many listings, using this flag may degrade the
     *  call's performance. Therefore, when you use this flag, you may
     *  need to reduce the total number of items you're requesting at
     *  once. For example, you may need to use shorter time ranges in
     *  the <b>StartTimeFrom</b>, <b>EndTimeFrom</b>, or <b>ModTimeFrom</b> filters.
     *
     * @param bool $includeVariationSpecifics
     * @return self
     */
    public function setIncludeVariationSpecifics($includeVariationSpecifics)
    {
        $this->includeVariationSpecifics = $includeVariationSpecifics;
        return $this;
    }

    /**
     * Gets as hideVariations
     *
     * Specifies whether to force the response to hide
     *  variation details for multiple-variation listings.<br>
     *  <br>
     *  If false (or not specified), eBay returns variation details (if
     *  any). In this case, the amount of detail can be controlled by
     *  using <b>IncludeVariationSpecifics</b>.<br>
     *  <br>
     *  If true, variation details are not returned (and
     *  <b>IncludeVariationSpecifics</b> has no effect). This may be useful for applications that use other calls, notifications, alerts, or reports to track price and quantity details.
     *
     * @return bool
     */
    public function getHideVariations()
    {
        return $this->hideVariations;
    }

    /**
     * Sets a new hideVariations
     *
     * Specifies whether to force the response to hide
     *  variation details for multiple-variation listings.<br>
     *  <br>
     *  If false (or not specified), eBay returns variation details (if
     *  any). In this case, the amount of detail can be controlled by
     *  using <b>IncludeVariationSpecifics</b>.<br>
     *  <br>
     *  If true, variation details are not returned (and
     *  <b>IncludeVariationSpecifics</b> has no effect). This may be useful for applications that use other calls, notifications, alerts, or reports to track price and quantity details.
     *
     * @param bool $hideVariations
     * @return self
     */
    public function setHideVariations($hideVariations)
    {
        $this->hideVariations = $hideVariations;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getUserID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UserID", $value);
        }
        $value = $this->getStartTimeFrom();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StartTimeFrom", $value);
        }
        $value = $this->getStartTimeTo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StartTimeTo", $value);
        }
        $value = $this->getEndTimeFrom();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EndTimeFrom", $value);
        }
        $value = $this->getEndTimeTo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EndTimeTo", $value);
        }
        $value = $this->getModTimeFrom();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ModTimeFrom", $value);
        }
        $value = $this->getModTimeTo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ModTimeTo", $value);
        }
        $value = $this->getNewItemFilter();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NewItemFilter", $value);
        }
        $value = $this->getIncludeWatchCount();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IncludeWatchCount", $value);
        }
        $value = $this->getIncludeVariationSpecifics();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IncludeVariationSpecifics", $value);
        }
        $value = $this->getHideVariations();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HideVariations", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserID');
        if (null !== $value) {
            $this->setUserID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StartTimeFrom');
        if (null !== $value) {
            $this->setStartTimeFrom(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StartTimeTo');
        if (null !== $value) {
            $this->setStartTimeTo(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EndTimeFrom');
        if (null !== $value) {
            $this->setEndTimeFrom(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EndTimeTo');
        if (null !== $value) {
            $this->setEndTimeTo(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ModTimeFrom');
        if (null !== $value) {
            $this->setModTimeFrom(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ModTimeTo');
        if (null !== $value) {
            $this->setModTimeTo(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NewItemFilter');
        if (null !== $value) {
            $this->setNewItemFilter($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IncludeWatchCount');
        if (null !== $value) {
            $this->setIncludeWatchCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IncludeVariationSpecifics');
        if (null !== $value) {
            $this->setIncludeVariationSpecifics($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}HideVariations');
        if (null !== $value) {
            $this->setHideVariations($value);
        }
    }
}
