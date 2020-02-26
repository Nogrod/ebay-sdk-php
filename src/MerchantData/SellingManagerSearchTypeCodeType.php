<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing SellingManagerSearchTypeCodeType
 *
 * Specifies search term types for Selling Manager listings.
 * XSD Type: SellingManagerSearchTypeCodeType
 */
class SellingManagerSearchTypeCodeType
{

    /**
     * Constant for 'BuyerUserID' value.
     *
     * Search for listings based on Buyer ID.
     */
    public const VAL_BUYER_USER_ID = 'BuyerUserID';

    /**
     * Constant for 'BuyerEmail' value.
     *
     * Search for listings based on Buyers email.
     */
    public const VAL_BUYER_EMAIL = 'BuyerEmail';

    /**
     * Constant for 'BuyerFullName' value.
     *
     * Search for listings based on Buyers full name.
     */
    public const VAL_BUYER_FULL_NAME = 'BuyerFullName';

    /**
     * Constant for 'ItemID' value.
     *
     * Search for listings based on ItemID.
     */
    public const VAL_ITEM_ID = 'ItemID';

    /**
     * Constant for 'Title' value.
     *
     * Search for listings based on Item Title.
     */
    public const VAL_TITLE = 'Title';

    /**
     * Constant for 'ProductID' value.
     *
     * Search for listings based on Product ID.
     */
    public const VAL_PRODUCT_ID = 'ProductID';

    /**
     * Constant for 'ProductName' value.
     *
     * Search for listings based on Product Name.
     */
    public const VAL_PRODUCT_NAME = 'ProductName';

    /**
     * Constant for 'CustomLabel' value.
     *
     * Search for listings based on SKU.
     */
    public const VAL_CUSTOM_LABEL = 'CustomLabel';

    /**
     * Constant for 'SaleRecordID' value.
     *
     * Search for listings based on the sale record ID.
     *  <br/><br/>
     *  When an item is sold, Selling Manager generates a sale record.
     *  A sale record contains buyer information, shipping, and other information.
     *  A sale record is displayed in the Sold view in Selling Manager.
     *  <br/><br/>
     *  In the following calls,
     *  the value for the sale record ID is in the
     * <b>SellingManagerSalesRecordNumber</b> field:
     *  <b>GetItemTransactions</b>, <b>GetSellerTransactions</b>, <b>GetOrders</b>,
     * <b>GetOrderTransactions</b>.
     *  In the Selling Manager calls, the value for the sale record ID is in the
     *  <b>SaleRecordID</b> field. The sale record ID can be for a single or multiple
     * line item order.
     *  <br/><br/>
     *  For orders that occurred within the last 30 days, passing only the
     * <b>SaleRecordID </b> into the <b>GetSellingManagerSoldListings</b>
     *  request will return the sale record. However, for sales that occurred more than
     * 30 days ago, the <b>SaleDateRange</b> container
     *  must also be used, passing in a date range that includes the date on which the
     * specific sale occurred.
     */
    public const VAL_SALE_RECORD_ID = 'SaleRecordID';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for internal or future use.
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
