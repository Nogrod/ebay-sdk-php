<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing AccountHistorySelectionCodeType
 *
 * This enumerated type contains the suppported values that may be used in the <b>AccountHistorySelection</b> field to control the account entries that are returned in a <b>GetAccount</b> response.
 * XSD Type: AccountHistorySelectionCodeType
 */
class AccountHistorySelectionCodeType
{
    /**
     * Constant for 'LastInvoice' value.
     *
     * This value should be used if the eBay user wants to see the account entries
     * posted to the last invoice that was sent to the user by eBay. If this value is
     * used, the <b>InvoiceDate</b>, <b>BeginDate</b>, and <b>EndDate</b> fields of the
     * <b>GetAccount</b> request are no longer applicable and will be ignored if they
     * are included in the call request.
     */
    public const VAL_LAST_INVOICE = 'LastInvoice';

    /**
     * Constant for 'SpecifiedInvoice' value.
     *
     * This value should be used if the eBay user wants to see the account entries for
     * a specific invoice that was sent to the user by eBay. If this value is used, the
     * specific invoice is identified by including the <b>InvoiceDate</b> field and
     * setting its value to the actual invoice date. If this value is used, the
     * <b>BeginDate</b>, and <b>EndDate</b> fields of the <b>GetAccount</b> request are
     * no longer applicable and will be ignored if they are included in the call
     * request.
     */
    public const VAL_SPECIFIED_INVOICE = 'SpecifiedInvoice';

    /**
     * Constant for 'BetweenSpecifiedDates' value.
     *
     * This value should be used if the eBay user wants to see account entries for a
     * customized date range that can overlap multiple formal eBay invoices. If this
     * value is used, then you also must specify <b>BeginDate</b> and <b>EndDate</b> to
     * set the date range for which to retrieve account entries. If this value is used,
     * then <b>InvoiceDate</b> is no longer applicable and will be ignored if it is
     * included in the call request.
     */
    public const VAL_BETWEEN_SPECIFIED_DATES = 'BetweenSpecifiedDates';

    /**
     * Constant for 'OrderId' value.
     *
     * This value should be used if the eBay user wants to see the account entries
     * related to a specific eBay order. If this value is used, the user must also
     * include the <b>OrderID</b> field and sets its value to the identifier of the
     * order for which they wish to retrieve account entries.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> In June 2019, eBay introduced a new order
     * ID format, but allowed developers/sellers to decide whether to immediately adopt
     * the new format, or to continue working with the old format. Users who wanted to
     * adopt the new format, could either use a Trading WSDL Version 1113 (or newer),
     * or they could even use an older Trading WSDL but set the
     * <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header value to <code>1113</code> in
     * API calls. <b>Beginning in June 2020, only the new order ID format will be
     * returned in response payloads for paid orders, regardless of the WSDL version
     * number or compatibility level.</b>
     *  <br><br>
     *  Note that the unique identifier of a 'non-immediate payment' order will change
     * as it goes from an unpaid order to a paid order. Due to this scenario, all calls
     * that accept Order ID values as filters in the request payload, including the
     * <b>GetAccount</b> call, will support the identifiers for both unpaid and paid
     * orders. The new order ID format is a non-parsable string, globally unique across
     * all eBay marketplaces, and consistent for both single line item and multiple
     * line item orders. Unlike in the past, instead of just being known and exposed to
     * the seller, these unique order identifiers will also be known and
     * used/referenced by the buyer and eBay customer support.
     *  <br><br>
     *  Sellers can check to see if an order has been paid by looking for a value of
     * 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of
     * <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the
     * <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b>
     * or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until
     * buyer has made payment.
     *  </span>
     */
    public const VAL_ORDER_ID = 'OrderId';

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
