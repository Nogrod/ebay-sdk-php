<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing DetailLevelCodeType
 *
 * Specifies standard subsets of data to return for each result
 *  within the set of results in the response payload. If no
 *  detail level is specified, a base set of data is returned.
 *  The base set of data varies per call.
 * XSD Type: DetailLevelCodeType
 */
class DetailLevelCodeType
{
    /**
     * Constant for 'ReturnAll' value.
     *
     * Returns all available data.
     *  With <b>GetSellerList</b> and other calls that retrieve large data sets,
     *  please avoid using <b>ReturnAll</b> when possible. For example, if you use
     *  <b>GetSellerList</b>, use a <b>GranularityLevel</b> or use the
     *  <b>GetSellerEvents</b> call instead. If you use <b>ReturnAll</b> with
     * <b>GetSellerList</b>,
     *  use a small <b>EntriesPerPage</b> value and a short
     *  <b>EndTimeFrom</b>/<b>EndTimeTo</b> range for better performance.
     */
    public const VAL_RETURN_ALL = 'ReturnAll';

    /**
     * Constant for 'ItemReturnDescription' value.
     *
     * Returns the description, plus the
     *  <b>ListingDesigner</b> node and some additional information if applicable
     */
    public const VAL_ITEM_RETURN_DESCRIPTION = 'ItemReturnDescription';

    /**
     * Constant for 'ItemReturnAttributes' value.
     *
     * For <b>GetItem</b>, returns Item Specifics and
     *  Pre-filled Item Information, if any.
     *  Also see the description of
     *  <b>Item.ProductListingDetails</b> for <b>GetItem</b>.
     */
    public const VAL_ITEM_RETURN_ATTRIBUTES = 'ItemReturnAttributes';

    /**
     * Constant for 'ItemReturnCategories' value.
     *
     * If this value is used, the primary category and, if applicable, the secondary
     * category is returned.
     */
    public const VAL_ITEM_RETURN_CATEGORIES = 'ItemReturnCategories';

    /**
     * Constant for 'ReturnSummary' value.
     *
     * Returns the summary data.
     *  For <b>GetMyMessages</b>, this detail level returns the same data
     *  whether or not you include <b>MessageIDs</b> or <b>AlertIDs</b> in the
     *  request. Returns up to 10 <b>FolderID</b> and <b>FolderName</b> values.
     *  Currently, this detail level is the only way to retrieve
     *  <b>FolderID</b> and <b>FolderName</b> values. See <b>GetMyMessages</b>
     *  for a code sample that demonstrates
     *  this.
     */
    public const VAL_RETURN_SUMMARY = 'ReturnSummary';

    /**
     * Constant for 'ReturnHeaders' value.
     *
     * Returns message headers.
     *  For <b>GetMyMessages</b>, if you include <b>MessageIDs</b> or <b>AlertIDs</b>
     * in
     *  the request, this detail level returns header information,
     *  without body text, for the specified message ID or alert ID
     *  values. If you include a <b>FolderID</b>, header information is
     *  returned only for the messages and alerts in the specified
     *  folder.<br/><br/>
     *  If you do not include <b>MessageIDs</b> or <b>AlertIDs</b>, this detail
     *  level returns header information for Alerts and Messages as follows:
     *  <ul>
     *  <li>If all the Alerts have been read, they are sorted in date order,
     *  with the most recent first.</li>
     *  <li>If one of the Alerts has not been read, the Read Alerts come first,
     *  sorted most recent first, followed by the Unread Alert(s).</li>
     *  <li>All messages in ascending order by date received with the
     *  oldest messages first.</li>
     *  </ul>
     *  <br/>
     *  <span class="tablenote"><b>Note:</b>
     *  Even when restricted by this detail level to return only header information,
     * <b>GetMyMessages</b> may return a high volume of data.
     *  </span>
     */
    public const VAL_RETURN_HEADERS = 'ReturnHeaders';

    /**
     * Constant for 'ReturnMessages' value.
     *
     * Returns full message information.
     *  For <b>GetMyMessages</b>, if you include <b>MessageIDs</b> or <b>AlertIDs</b>
     * in
     *  the request, this detail level returns message information
     *  for the specified message ID or alert ID values. If you
     *  include a <b>FolderID</b>, message information is returned only for
     *  the messages and alerts in the specified folder.
     */
    public const VAL_RETURN_MESSAGES = 'ReturnMessages';

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
