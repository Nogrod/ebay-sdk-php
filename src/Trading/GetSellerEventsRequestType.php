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

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->startTimeFrom;
        if (null !== $value) {
            $writer->writeElementNs(null, 'StartTimeFrom', null, Func::formatDateTime($value));
        }
        $value = $this->startTimeTo;
        if (null !== $value) {
            $writer->writeElementNs(null, 'StartTimeTo', null, Func::formatDateTime($value));
        }
        $value = $this->endTimeFrom;
        if (null !== $value) {
            $writer->writeElementNs(null, 'EndTimeFrom', null, Func::formatDateTime($value));
        }
        $value = $this->endTimeTo;
        if (null !== $value) {
            $writer->writeElementNs(null, 'EndTimeTo', null, Func::formatDateTime($value));
        }
        $value = $this->modTimeFrom;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ModTimeFrom', null, Func::formatDateTime($value));
        }
        $value = $this->modTimeTo;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ModTimeTo', null, Func::formatDateTime($value));
        }
        $value = $this->newItemFilter;
        if (null !== $value) {
            $writer->writeElementNs(null, 'NewItemFilter', null, ($value ? 'true' : 'false'));
        }
        $value = $this->includeWatchCount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'IncludeWatchCount', null, ($value ? 'true' : 'false'));
        }
        $value = $this->includeVariationSpecifics;
        if (null !== $value) {
            $writer->writeElementNs(null, 'IncludeVariationSpecifics', null, ($value ? 'true' : 'false'));
        }
        $value = $this->hideVariations;
        if (null !== $value) {
            $writer->writeElementNs(null, 'HideVariations', null, ($value ? 'true' : 'false'));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\GetSellerEventsRequestType
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
                case 'StartTimeFrom':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->startTimeFrom = new \DateTime($value);
                    }
                    return true;
                case 'StartTimeTo':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->startTimeTo = new \DateTime($value);
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
                case 'ModTimeFrom':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->modTimeFrom = new \DateTime($value);
                    }
                    return true;
                case 'ModTimeTo':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->modTimeTo = new \DateTime($value);
                    }
                    return true;
                case 'NewItemFilter':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->newItemFilter = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'IncludeWatchCount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->includeWatchCount = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'IncludeVariationSpecifics':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->includeVariationSpecifics = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'HideVariations':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->hideVariations = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }
}
