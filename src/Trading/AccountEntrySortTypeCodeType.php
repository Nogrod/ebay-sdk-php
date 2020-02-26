<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing AccountEntrySortTypeCodeType
 *
 * Enumerated type defining the possible values that can be used in the <b>AccountEntrySortType</b> field of the <b>GetAccount</b> request to sort account entries returned in the response.
 * XSD Type: AccountEntrySortTypeCodeType
 */
class AccountEntrySortTypeCodeType
{

    /**
     * Constant for 'None' value.
     *
     * This is the default value. With this value set, account entries in the
     * <b>GetAccount</b> response are sorted by transaction date (see
     * <b>AccountEntry.Date</b> field) in ascending order (oldest transaction to most
     * recent transaction). This value will produce the same results as the
     * <b>AccountEntryCreatedTimeAscending</b> value.
     */
    public const VAL_NONE = 'None';

    /**
     * Constant for 'AccountEntryCreatedTimeAscending' value.
     *
     * With this value set, account entries in the <b>GetAccount</b> response are
     * sorted by transaction date (see <b>AccountEntry.Date</b> field) in ascending
     * order (oldest transaction to most recent transaction). This value will produce
     * the same results as the <b>None</b> value.
     */
    public const VAL_ACCOUNT_ENTRY_CREATED_TIME_ASCENDING = 'AccountEntryCreatedTimeAscending';

    /**
     * Constant for 'AccountEntryCreatedTimeDescending' value.
     *
     * With this value set, account entries in the <b>GetAccount</b> response are
     * sorted by transaction date (see <b>AccountEntry.Date</b> field) in descending
     * order (most recent transaction to oldest transaction).
     */
    public const VAL_ACCOUNT_ENTRY_CREATED_TIME_DESCENDING = 'AccountEntryCreatedTimeDescending';

    /**
     * Constant for 'AccountEntryItemNumberAscending' value.
     *
     * With this value set, account entries in the <b>GetAccount</b> response are
     * sorted by Item ID value (see <b>AccountEntry.ItemID</b> field) in ascending
     * order (oldest eBay listing to most recent eBay listing).
     */
    public const VAL_ACCOUNT_ENTRY_ITEM_NUMBER_ASCENDING = 'AccountEntryItemNumberAscending';

    /**
     * Constant for 'AccountEntryItemNumberDescending' value.
     *
     * With this value set, account entries in the <b>GetAccount</b> response are
     * sorted by Item ID value (see <b>AccountEntry.ItemID</b> field) in descending
     * order (most recent eBay listing to oldest eBay listing).
     */
    public const VAL_ACCOUNT_ENTRY_ITEM_NUMBER_DESCENDING = 'AccountEntryItemNumberDescending';

    /**
     * Constant for 'AccountEntryFeeTypeAscending' value.
     *
     * With this value set, account entries in the <b>GetAccount</b> response are
     * sorted in alphabetical order according to each entry's
     * <b>AccountEntry.Description</b> value. When account entries are sorted according
     * to fee type, the secondary sort criterion is transaction date, and for account
     * entries with identical fee types, the oldest account entries will appear first
     * in the response.
     */
    public const VAL_ACCOUNT_ENTRY_FEE_TYPE_ASCENDING = 'AccountEntryFeeTypeAscending';

    /**
     * Constant for 'AccountEntryFeeTypeDescending' value.
     *
     * With this value set, account entries in the <b>GetAccount</b> response are
     * sorted in reverse alphabetical order according to each entry's
     * <b>AccountEntry.Description</b> value. When account entries are sorted according
     * to fee type, the secondary sort criterion is transaction date, and for account
     * entries with identical fee types, the oldest account entries will appear first
     * in the response.
     */
    public const VAL_ACCOUNT_ENTRY_FEE_TYPE_DESCENDING = 'AccountEntryFeeTypeDescending';

    /**
     * Constant for 'CustomCode' value.
     *
     * (out) Reserved for internal or future use.
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
