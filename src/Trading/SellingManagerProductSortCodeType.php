<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing SellingManagerProductSortCodeType
 *
 * Sorting specifications for retrieved Selling Manager Inventory products.
 * XSD Type: SellingManagerProductSortCodeType
 */
class SellingManagerProductSortCodeType
{
    /**
     * Constant for 'ActiveQuantity' value.
     *
     * Sort products by by quantity currently listed.
     */
    public const VAL_ACTIVE_QUANTITY = 'ActiveQuantity';

    /**
     * Constant for 'AvailableToList' value.
     *
     * Sort unlisted products by availability to list.
     */
    public const VAL_AVAILABLE_TO_LIST = 'AvailableToList';

    /**
     * Constant for 'AveragePrice' value.
     *
     * Sort by average price of sold items.
     */
    public const VAL_AVERAGE_PRICE = 'AveragePrice';

    /**
     * Constant for 'AverageUnitCost' value.
     *
     * Sort by average unit cost of items.
     */
    public const VAL_AVERAGE_UNIT_COST = 'AverageUnitCost';

    /**
     * Constant for 'CustomLabel' value.
     *
     * Sort products by label.
     */
    public const VAL_CUSTOM_LABEL = 'CustomLabel';

    /**
     * Constant for 'ProductName' value.
     *
     * Sort by product name.
     */
    public const VAL_PRODUCT_NAME = 'ProductName';

    /**
     * Constant for 'LastSubmittedDate' value.
     *
     * Sort by submitted date.
     */
    public const VAL_LAST_SUBMITTED_DATE = 'LastSubmittedDate';

    /**
     * Constant for 'ScheduledQuantity' value.
     *
     * Sort by quantity scheduled to be listed.
     */
    public const VAL_SCHEDULED_QUANTITY = 'ScheduledQuantity';

    /**
     * Constant for 'SoldQuantity' value.
     *
     * Sort by quantity sold.
     */
    public const VAL_SOLD_QUANTITY = 'SoldQuantity';

    /**
     * Constant for 'SuccessPercent' value.
     *
     * Sort by the percentage of ended listings that had a sale.
     */
    public const VAL_SUCCESS_PERCENT = 'SuccessPercent';

    /**
     * Constant for 'UnsoldQuantity' value.
     *
     * Sort by number of unsold items.
     */
    public const VAL_UNSOLD_QUANTITY = 'UnsoldQuantity';

    /**
     * Constant for 'FolderName' value.
     *
     * Sort products by folder name.
     */
    public const VAL_FOLDER_NAME = 'FolderName';

    /**
     * Constant for 'CustomCode' value.
     */
    public const VAL_CUSTOM_CODE = 'CustomCode';

    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }
}
