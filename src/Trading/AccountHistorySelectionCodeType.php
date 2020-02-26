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
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> In June 2019, eBay introduced a new order
     * ID format to both legacy (including Trading API) and REST-based APIs. At this
     * time, both old and new format order IDs will be accepted in legacy API request
     * payloads to identify orders. In legacy API response payloads, order IDs will
     * appear in the new format if the user is using a Trading WSDL version of '1113'
     * (or newer), or if the user sets the <code>X-EBAY-API-COMPATIBILITY-LEVEL</code>
     * HTTP header to a value of '1113' (or newer). If the Trading WSDL version or
     * compatibility level is less/older than '1113', old format order IDs will be
     * returned in legacy API response payloads. Beginning as soon as March 2020, only
     * new format order IDs will be returned regardless of version number.
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
