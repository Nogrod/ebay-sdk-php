<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetSellerListRequestType
 *
 * This call is used to retrieve an array of listings for the seller. The seller must be associated with the user/application token being used to make the call.
 *  <br/><br/>
 *  This call requires that either the 'Start Time' or 'End Time' date range filters be used. The date range specified by either of these filters can not exceed 120 days or an error will occur.
 *  <br/><br/>
 *  This call also requires that pagination be used.
 * XSD Type: GetSellerListRequestType
 */
class GetSellerListRequestType extends AbstractRequestType
{

    /**
     * <span class="tablenote"><strong>Note:</strong>
     *  This field should no longer be used, and will be ignored if it is included in a <b>GetSellerList</b> request. There are plans to remove this field from the public WSDL. The only eBay user ID that can be used is the one associated with the authentication token.
     *  </span>
     *
     * @var string $userID
     */
    private $userID = null;

    /**
     * Specifies the list of Motors Dealer sellers for which a special set of
     *  metrics can be requested. Applies to eBay Motors Pro applications only.
     *
     * @var string[] $motorsDealerUsers
     */
    private $motorsDealerUsers = null;

    /**
     * Specifies the earliest (oldest) date to use in a date range filter based on
     *  item end time. Specify either an end-time range or a start-time range
     *  filter in every call request. Each of the time ranges must be a value less than
     *  120 days.
     *
     * @var \DateTime $endTimeFrom
     */
    private $endTimeFrom = null;

    /**
     * Specifies the latest (most recent) date to use in a date range filter based on item end time. Must be specified if <b>EndTimeFrom</b> is specified.
     *
     * @var \DateTime $endTimeTo
     */
    private $endTimeTo = null;

    /**
     * This field can be used to control the order in which returned listings are sorted (based on the listings' actual/scheduled end dates). Valid values are as follows:
     *  <ul>
     *  <li><code>1</code> (descending order)</li>
     *  <li>code>2</code> (ascending order)</li>
     *  </ul>
     *
     * @var int $sort
     */
    private $sort = null;

    /**
     * Specifies the earliest (oldest) date to use in a date range filter based on
     *  item start time. Each of the time ranges must be a value less than
     *  120 days. In all calls, at least one date-range filter must be specified
     *  (i.e., you must specify either the end time range or start time range
     *  in every request).
     *
     * @var \DateTime $startTimeFrom
     */
    private $startTimeFrom = null;

    /**
     * Specifies the latest (most recent) date to use in a date range filter based on item start time. Must be specified if <b>StartTimeFrom</b> is specified.
     *
     * @var \DateTime $startTimeTo
     */
    private $startTimeTo = null;

    /**
     * This container controls the maximum number of listings that can appear on one page of the result set, as well as the page number of the result to return.
     *  <br><br>
     *  The <b>GetSellerList</b> call requires that the <b>EntriesPerPage</b> value be set. The <b>PageNumber</b> field is not required but will default to <code>1</code> if not included.
     *
     * @var \Nogrod\eBaySDK\Trading\PaginationType $pagination
     */
    private $pagination = null;

    /**
     * This field allows the user to control the amount of data that is returned in the response. See the <a href="#GranularityLevel">Granularity Level</a> table on this page for a list of the fields that are returned for each granularity level. Either <b>GranularityLevel</b> or <b>DetailLevel</b> can be used in a <b>GetSellerList</b> call, but not both. If both are specified, <b>DetailLevel</b> is ignored. If neither are used, the response fields will be the ones shown for 'Coarse' granularity.
     *
     * @var string $granularityLevel
     */
    private $granularityLevel = null;

    /**
     * This container can be used to specify one or multiple SKUs, and only listings associated with these SKUs are retrieved. Note that all other request criteria are also considered when one or more SKU values are specified.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Listings with matching SKUs are returned regardless of their
     *  <b>Item.InventoryTrackingMethod</b> setting.
     *  </span>
     *
     * @var string[] $sKUArray
     */
    private $sKUArray = null;

    /**
     * This field may be included and set to <code>true</code> if the seller wishes to see the number of eBay users that are watching each listing.
     *
     * @var bool $includeWatchCount
     */
    private $includeWatchCount = null;

    /**
     * This boolean field can be included and set to <code>true</code> if the seller would like to retrieve any listings that were administratively ended by eBay due to a listing policy violation.
     *
     * @var bool $adminEndedItemsOnly
     */
    private $adminEndedItemsOnly = null;

    /**
     * If you specify a <b>CategoryID</b> value, the response will only contain listings in the category you specify.
     *
     * @var int $categoryID
     */
    private $categoryID = null;

    /**
     * If this field is included and set to <code>true</code>, the <b>Variations</b> node is returned for all multi-variation listings in the response.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> If the seller has many multiple-variation listings, that seller may not want to include variations in the <b>GetSellerList</b> response. Or, a seller can include variations data, but possibly limit the response by specifying shorter date ranges with the date range filters, or by reducing the number of listings returned per results (decreasing the <b>Pagination.EntriesPerPage</b> value).
     *  </span>
     *
     * @var bool $includeVariations
     */
    private $includeVariations = null;

    /**
     * Gets as userID
     *
     * <span class="tablenote"><strong>Note:</strong>
     *  This field should no longer be used, and will be ignored if it is included in a <b>GetSellerList</b> request. There are plans to remove this field from the public WSDL. The only eBay user ID that can be used is the one associated with the authentication token.
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
     *  This field should no longer be used, and will be ignored if it is included in a <b>GetSellerList</b> request. There are plans to remove this field from the public WSDL. The only eBay user ID that can be used is the one associated with the authentication token.
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
     * Adds as userID
     *
     * Specifies the list of Motors Dealer sellers for which a special set of
     *  metrics can be requested. Applies to eBay Motors Pro applications only.
     *
     * @return self
     * @param string $userID
     */
    public function addToMotorsDealerUsers($userID)
    {
        $this->motorsDealerUsers[] = $userID;
        return $this;
    }

    /**
     * isset motorsDealerUsers
     *
     * Specifies the list of Motors Dealer sellers for which a special set of
     *  metrics can be requested. Applies to eBay Motors Pro applications only.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMotorsDealerUsers($index)
    {
        return isset($this->motorsDealerUsers[$index]);
    }

    /**
     * unset motorsDealerUsers
     *
     * Specifies the list of Motors Dealer sellers for which a special set of
     *  metrics can be requested. Applies to eBay Motors Pro applications only.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMotorsDealerUsers($index)
    {
        unset($this->motorsDealerUsers[$index]);
    }

    /**
     * Gets as motorsDealerUsers
     *
     * Specifies the list of Motors Dealer sellers for which a special set of
     *  metrics can be requested. Applies to eBay Motors Pro applications only.
     *
     * @return string[]
     */
    public function getMotorsDealerUsers()
    {
        return $this->motorsDealerUsers;
    }

    /**
     * Sets a new motorsDealerUsers
     *
     * Specifies the list of Motors Dealer sellers for which a special set of
     *  metrics can be requested. Applies to eBay Motors Pro applications only.
     *
     * @param string $motorsDealerUsers
     * @return self
     */
    public function setMotorsDealerUsers(array $motorsDealerUsers)
    {
        $this->motorsDealerUsers = $motorsDealerUsers;
        return $this;
    }

    /**
     * Gets as endTimeFrom
     *
     * Specifies the earliest (oldest) date to use in a date range filter based on
     *  item end time. Specify either an end-time range or a start-time range
     *  filter in every call request. Each of the time ranges must be a value less than
     *  120 days.
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
     * Specifies the earliest (oldest) date to use in a date range filter based on
     *  item end time. Specify either an end-time range or a start-time range
     *  filter in every call request. Each of the time ranges must be a value less than
     *  120 days.
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
     * Specifies the latest (most recent) date to use in a date range filter based on item end time. Must be specified if <b>EndTimeFrom</b> is specified.
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
     * Specifies the latest (most recent) date to use in a date range filter based on item end time. Must be specified if <b>EndTimeFrom</b> is specified.
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
     * Gets as sort
     *
     * This field can be used to control the order in which returned listings are sorted (based on the listings' actual/scheduled end dates). Valid values are as follows:
     *  <ul>
     *  <li><code>1</code> (descending order)</li>
     *  <li>code>2</code> (ascending order)</li>
     *  </ul>
     *
     * @return int
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Sets a new sort
     *
     * This field can be used to control the order in which returned listings are sorted (based on the listings' actual/scheduled end dates). Valid values are as follows:
     *  <ul>
     *  <li><code>1</code> (descending order)</li>
     *  <li>code>2</code> (ascending order)</li>
     *  </ul>
     *
     * @param int $sort
     * @return self
     */
    public function setSort($sort)
    {
        $this->sort = $sort;
        return $this;
    }

    /**
     * Gets as startTimeFrom
     *
     * Specifies the earliest (oldest) date to use in a date range filter based on
     *  item start time. Each of the time ranges must be a value less than
     *  120 days. In all calls, at least one date-range filter must be specified
     *  (i.e., you must specify either the end time range or start time range
     *  in every request).
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
     * Specifies the earliest (oldest) date to use in a date range filter based on
     *  item start time. Each of the time ranges must be a value less than
     *  120 days. In all calls, at least one date-range filter must be specified
     *  (i.e., you must specify either the end time range or start time range
     *  in every request).
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
     * Specifies the latest (most recent) date to use in a date range filter based on item start time. Must be specified if <b>StartTimeFrom</b> is specified.
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
     * Specifies the latest (most recent) date to use in a date range filter based on item start time. Must be specified if <b>StartTimeFrom</b> is specified.
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
     * Gets as pagination
     *
     * This container controls the maximum number of listings that can appear on one page of the result set, as well as the page number of the result to return.
     *  <br><br>
     *  The <b>GetSellerList</b> call requires that the <b>EntriesPerPage</b> value be set. The <b>PageNumber</b> field is not required but will default to <code>1</code> if not included.
     *
     * @return \Nogrod\eBaySDK\Trading\PaginationType
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    /**
     * Sets a new pagination
     *
     * This container controls the maximum number of listings that can appear on one page of the result set, as well as the page number of the result to return.
     *  <br><br>
     *  The <b>GetSellerList</b> call requires that the <b>EntriesPerPage</b> value be set. The <b>PageNumber</b> field is not required but will default to <code>1</code> if not included.
     *
     * @param \Nogrod\eBaySDK\Trading\PaginationType $pagination
     * @return self
     */
    public function setPagination(\Nogrod\eBaySDK\Trading\PaginationType $pagination)
    {
        $this->pagination = $pagination;
        return $this;
    }

    /**
     * Gets as granularityLevel
     *
     * This field allows the user to control the amount of data that is returned in the response. See the <a href="#GranularityLevel">Granularity Level</a> table on this page for a list of the fields that are returned for each granularity level. Either <b>GranularityLevel</b> or <b>DetailLevel</b> can be used in a <b>GetSellerList</b> call, but not both. If both are specified, <b>DetailLevel</b> is ignored. If neither are used, the response fields will be the ones shown for 'Coarse' granularity.
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
     * This field allows the user to control the amount of data that is returned in the response. See the <a href="#GranularityLevel">Granularity Level</a> table on this page for a list of the fields that are returned for each granularity level. Either <b>GranularityLevel</b> or <b>DetailLevel</b> can be used in a <b>GetSellerList</b> call, but not both. If both are specified, <b>DetailLevel</b> is ignored. If neither are used, the response fields will be the ones shown for 'Coarse' granularity.
     *
     * @param string $granularityLevel
     * @return self
     */
    public function setGranularityLevel($granularityLevel)
    {
        $this->granularityLevel = $granularityLevel;
        return $this;
    }

    /**
     * Adds as sKU
     *
     * This container can be used to specify one or multiple SKUs, and only listings associated with these SKUs are retrieved. Note that all other request criteria are also considered when one or more SKU values are specified.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Listings with matching SKUs are returned regardless of their
     *  <b>Item.InventoryTrackingMethod</b> setting.
     *  </span>
     *
     * @return self
     * @param string $sKU
     */
    public function addToSKUArray($sKU)
    {
        $this->sKUArray[] = $sKU;
        return $this;
    }

    /**
     * isset sKUArray
     *
     * This container can be used to specify one or multiple SKUs, and only listings associated with these SKUs are retrieved. Note that all other request criteria are also considered when one or more SKU values are specified.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Listings with matching SKUs are returned regardless of their
     *  <b>Item.InventoryTrackingMethod</b> setting.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSKUArray($index)
    {
        return isset($this->sKUArray[$index]);
    }

    /**
     * unset sKUArray
     *
     * This container can be used to specify one or multiple SKUs, and only listings associated with these SKUs are retrieved. Note that all other request criteria are also considered when one or more SKU values are specified.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Listings with matching SKUs are returned regardless of their
     *  <b>Item.InventoryTrackingMethod</b> setting.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSKUArray($index)
    {
        unset($this->sKUArray[$index]);
    }

    /**
     * Gets as sKUArray
     *
     * This container can be used to specify one or multiple SKUs, and only listings associated with these SKUs are retrieved. Note that all other request criteria are also considered when one or more SKU values are specified.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Listings with matching SKUs are returned regardless of their
     *  <b>Item.InventoryTrackingMethod</b> setting.
     *  </span>
     *
     * @return string[]
     */
    public function getSKUArray()
    {
        return $this->sKUArray;
    }

    /**
     * Sets a new sKUArray
     *
     * This container can be used to specify one or multiple SKUs, and only listings associated with these SKUs are retrieved. Note that all other request criteria are also considered when one or more SKU values are specified.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Listings with matching SKUs are returned regardless of their
     *  <b>Item.InventoryTrackingMethod</b> setting.
     *  </span>
     *
     * @param string $sKUArray
     * @return self
     */
    public function setSKUArray(array $sKUArray)
    {
        $this->sKUArray = $sKUArray;
        return $this;
    }

    /**
     * Gets as includeWatchCount
     *
     * This field may be included and set to <code>true</code> if the seller wishes to see the number of eBay users that are watching each listing.
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
     * This field may be included and set to <code>true</code> if the seller wishes to see the number of eBay users that are watching each listing.
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
     * Gets as adminEndedItemsOnly
     *
     * This boolean field can be included and set to <code>true</code> if the seller would like to retrieve any listings that were administratively ended by eBay due to a listing policy violation.
     *
     * @return bool
     */
    public function getAdminEndedItemsOnly()
    {
        return $this->adminEndedItemsOnly;
    }

    /**
     * Sets a new adminEndedItemsOnly
     *
     * This boolean field can be included and set to <code>true</code> if the seller would like to retrieve any listings that were administratively ended by eBay due to a listing policy violation.
     *
     * @param bool $adminEndedItemsOnly
     * @return self
     */
    public function setAdminEndedItemsOnly($adminEndedItemsOnly)
    {
        $this->adminEndedItemsOnly = $adminEndedItemsOnly;
        return $this;
    }

    /**
     * Gets as categoryID
     *
     * If you specify a <b>CategoryID</b> value, the response will only contain listings in the category you specify.
     *
     * @return int
     */
    public function getCategoryID()
    {
        return $this->categoryID;
    }

    /**
     * Sets a new categoryID
     *
     * If you specify a <b>CategoryID</b> value, the response will only contain listings in the category you specify.
     *
     * @param int $categoryID
     * @return self
     */
    public function setCategoryID($categoryID)
    {
        $this->categoryID = $categoryID;
        return $this;
    }

    /**
     * Gets as includeVariations
     *
     * If this field is included and set to <code>true</code>, the <b>Variations</b> node is returned for all multi-variation listings in the response.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> If the seller has many multiple-variation listings, that seller may not want to include variations in the <b>GetSellerList</b> response. Or, a seller can include variations data, but possibly limit the response by specifying shorter date ranges with the date range filters, or by reducing the number of listings returned per results (decreasing the <b>Pagination.EntriesPerPage</b> value).
     *  </span>
     *
     * @return bool
     */
    public function getIncludeVariations()
    {
        return $this->includeVariations;
    }

    /**
     * Sets a new includeVariations
     *
     * If this field is included and set to <code>true</code>, the <b>Variations</b> node is returned for all multi-variation listings in the response.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> If the seller has many multiple-variation listings, that seller may not want to include variations in the <b>GetSellerList</b> response. Or, a seller can include variations data, but possibly limit the response by specifying shorter date ranges with the date range filters, or by reducing the number of listings returned per results (decreasing the <b>Pagination.EntriesPerPage</b> value).
     *  </span>
     *
     * @param bool $includeVariations
     * @return self
     */
    public function setIncludeVariations($includeVariations)
    {
        $this->includeVariations = $includeVariations;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getUserID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UserID", $value);
        }
        $value = $this->getMotorsDealerUsers();
        if (null !== $value && !empty($this->getMotorsDealerUsers())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MotorsDealerUsers", array_map(function ($v) {
                return ["UserID" => $v];
            }, $value));
        }
        $value = $this->getEndTimeFrom();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EndTimeFrom", $value);
        }
        $value = $this->getEndTimeTo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EndTimeTo", $value);
        }
        $value = $this->getSort();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Sort", $value);
        }
        $value = $this->getStartTimeFrom();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StartTimeFrom", $value);
        }
        $value = $this->getStartTimeTo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StartTimeTo", $value);
        }
        $value = $this->getPagination();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Pagination", $value);
        }
        $value = $this->getGranularityLevel();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}GranularityLevel", $value);
        }
        $value = $this->getSKUArray();
        if (null !== $value && !empty($this->getSKUArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SKUArray", array_map(function ($v) {
                return ["SKU" => $v];
            }, $value));
        }
        $value = $this->getIncludeWatchCount();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IncludeWatchCount", $value);
        }
        $value = $this->getAdminEndedItemsOnly();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AdminEndedItemsOnly", $value);
        }
        $value = $this->getCategoryID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryID", $value);
        }
        $value = $this->getIncludeVariations();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IncludeVariations", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MotorsDealerUsers', true);
        if (null !== $value && !empty($value)) {
            $this->setMotorsDealerUsers($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EndTimeFrom');
        if (null !== $value) {
            $this->setEndTimeFrom(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EndTimeTo');
        if (null !== $value) {
            $this->setEndTimeTo(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Sort');
        if (null !== $value) {
            $this->setSort($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StartTimeFrom');
        if (null !== $value) {
            $this->setStartTimeFrom(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StartTimeTo');
        if (null !== $value) {
            $this->setStartTimeTo(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Pagination');
        if (null !== $value) {
            $this->setPagination(\Nogrod\eBaySDK\Trading\PaginationType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}GranularityLevel');
        if (null !== $value) {
            $this->setGranularityLevel($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SKUArray', true);
        if (null !== $value && !empty($value)) {
            $this->setSKUArray($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IncludeWatchCount');
        if (null !== $value) {
            $this->setIncludeWatchCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AdminEndedItemsOnly');
        if (null !== $value) {
            $this->setAdminEndedItemsOnly($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryID');
        if (null !== $value) {
            $this->setCategoryID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IncludeVariations');
        if (null !== $value) {
            $this->setIncludeVariations($value);
        }
    }
}
