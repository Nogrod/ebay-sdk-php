<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing DisputeFilterTypeCodeType
 *
 * Enumeration type that specifies the dispute filters that can be used in the
 *  <b>DisputeFilterType</b> field of the <b>GetUserDisputes</b> call.
 *  <br/><br/>
 *  <span class="tablenote"><strong>Note:</strong>
 *  'Item Not Received' or 'Significantly Not As Described' cases, initiated by buyers through the eBay Money Back Guarantee program, are not returned with <b>GetUserDisputes</b>, regardless of what filter value is used. The <a href="https://developer.ebay.com/Devzone/post-order/post-order_v2_casemanagement-caseId__get.html#overview">getCase</a> method of the <a href="https://developer.ebay.com/Devzone/post-order/concepts/UsageGuide.html">Post-Order API</a> is used to retrieve Money Back Guarantee cases programmatically.
 *  </span>
 * XSD Type: DisputeFilterTypeCodeType
 */
class DisputeFilterTypeCodeType
{
    /**
     * Constant for 'AllInvolvedDisputes' value.
     *
     * If used, this filter returns all open and closed disputes that involve the
     * caller as a buyer
     *  or seller.
     */
    public const VAL_ALL_INVOLVED_DISPUTES = 'AllInvolvedDisputes';

    /**
     * Constant for 'DisputesAwaitingMyResponse' value.
     *
     * If used, this filter returns all open disputes that involve the caller as a
     * buyer
     *  or seller and are awaiting a response from the caller. This is the default
     * <b>DisputeFilterType</b> value. In other words, if no <b>DisputeFilterType</b>
     * is specified in the request, only those disputes where the caller's response is
     * due are returned.
     */
    public const VAL_DISPUTES_AWAITING_MY_RESPONSE = 'DisputesAwaitingMyResponse';

    /**
     * Constant for 'DisputesAwaitingOtherPartyResponse' value.
     *
     * If used, this filter returns all open disputes that involve the caller as a
     * buyer or seller and
     *  are awaiting a response from the other party.
     */
    public const VAL_DISPUTES_AWAITING_OTHER_PARTY_RESPONSE = 'DisputesAwaitingOtherPartyResponse';

    /**
     * Constant for 'AllInvolvedClosedDisputes' value.
     *
     * If used, this filter returns all closed disputes that involve the caller as a
     * buyer
     *  or seller.
     */
    public const VAL_ALL_INVOLVED_CLOSED_DISPUTES = 'AllInvolvedClosedDisputes';

    /**
     * Constant for 'EligibleForCredit' value.
     *
     * If used, this filter returns all disputes that involve the caller as a buyer
     *  or seller and are eligible for a Final Value Fee credit, regardless of
     *  whether or not the credit has been granted.
     */
    public const VAL_ELIGIBLE_FOR_CREDIT = 'EligibleForCredit';

    /**
     * Constant for 'UnpaidItemDisputes' value.
     *
     * If used, this filter returns all open and closed <i>Unpaid Item</i> disputes
     * that
     *  involve the caller as a buyer or seller.
     */
    public const VAL_UNPAID_ITEM_DISPUTES = 'UnpaidItemDisputes';

    /**
     * Constant for 'ItemNotReceivedDisputes' value.
     *
     * If used, this filter returns all open and closed <i>Item Not Received</i>
     * disputes that involve the caller as a buyer or seller.
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  This filter is only used to retrieve any 'Item Not Received' or 'Significantly
     * Not As Described' disputes that a buyer initiated through their PayPal account.
     * As noted above, the <b>GetUserDisputes</b> call will not return any eBay Money
     * Back Guarantee cases.
     *  </span>
     */
    public const VAL_ITEM_NOT_RECEIVED_DISPUTES = 'ItemNotReceivedDisputes';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for future use.
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
