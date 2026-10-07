<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ReturnsWithinOptionsCodeType
 *
 * This enumerated type is used by the deprecated <b>ReturnsWithinOption</b> and contains the list of values that can be used by the seller in an Add/Revise/Relist call to set the number of days (after the purchase date) that a buyer has to return an item (if the return policy states that items can be returned) for a refund or an exchange.
 *  <br><br>
 *  <span class="tablenote"><b>Note:</b> To determine which return periods are supported for a specific leaf category on a specific eBay marketplace, use the <b>Metadata API</b> <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies" target="_blank">getReturnPolicies</a> method. Pass the target <b>marketplace_id</b> and the category ID in the filter query parameter, and then inspect the <b>returnPolicies.domestic.returnPeriods</b> and <b>returnPolicies.international.returnPeriods</b> fields in the response.</span>
 * XSD Type: ReturnsWithinOptionsCodeType
 */
class ReturnsWithinOptionsCodeType
{
    /**
     * Constant for 'Days_3' value.
     *
     * This value is deprecated. Listings created or revised with this value will be
     *  blocked.
     */
    public const VAL_DAYS__3 = 'Days_3';

    /**
     * Constant for 'Days_7' value.
     *
     * This value is deprecated. Listings created or revised with this value will be
     *  blocked.
     */
    public const VAL_DAYS__7 = 'Days_7';

    /**
     * Constant for 'Days_10' value.
     *
     * This value is deprecated. Listings created or revised with this value will be
     *  blocked.
     */
    public const VAL_DAYS__10 = 'Days_10';

    /**
     * Constant for 'Days_14' value.
     *
     * The seller specifies this value to enable a 14-day return policy. A buyer must
     *  return an item within 14 days after purchase in order to receive a refund or
     *  an exchange/replacement item.
     */
    public const VAL_DAYS__14 = 'Days_14';

    /**
     * Constant for 'Days_30' value.
     *
     * The seller specifies this value to enable a 30-day return policy. A buyer must
     *  return an item within 30 days after purchase in order to receive a refund or
     *  an exchange/replacement item.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> To qualify as a Top-Rated Plus listing, a
     * 30-day (or longer) return period must be set.
     *  </span>
     */
    public const VAL_DAYS__30 = 'Days_30';

    /**
     * Constant for 'Days_60' value.
     *
     * The seller specifies this value to enable a 60-day return policy. A buyer must
     *  return an item within 60 days after purchase in order to receive a refund or
     *  an exchange/replacement item.
     */
    public const VAL_DAYS__60 = 'Days_60';

    /**
     * Constant for 'Months_1' value.
     *
     * The seller specifies this value to enable a one-month return policy. A buyer
     * must return an item within one month after purchase in order to receive a refund
     * or an exchange.
     *  <br/>
     *  <span class="tablenote"><b>Note: </b> This value, historically only supported
     * on the DE and AT sites, is scheduled to be deprecated, and DE and AT sellers may
     * be blocked if they do use this value. Use <code>Days_30</code> instead.
     *  </span>
     */
    public const VAL_MONTHS__1 = 'Months_1';

    /**
     * Constant for 'CustomCode' value.
     *
     * This value is reserved for internal or future use.
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
