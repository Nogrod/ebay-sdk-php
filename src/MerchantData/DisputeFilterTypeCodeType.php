<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing DisputeFilterTypeCodeType
 *
 * Enumeration type that specifies the dispute filters that can be used in the
 *  <b>DisputeFilterType</b> field of the <b>GetUserDisputes</b> call.
 *  <br/><br/>
 *  <span class="tablenote"><strong>Note:</strong>
 *  The <b>GetUserDisputes</b> call now only retrieves Unpaid Item cases. It is no longer used to retrieve Item not Received (INR) disputes created through PayPal, since this is no longer an option for eBay buyers. eBay buyers must create an INR case through eBay's Resolution Center, and this call does not support eBay Money Back Guarantee cases.
 *  <br><br>
 *  To respond to an eBay Money Back Guarantee case, the seller should use the <a href="https://developer.ebay.com/Devzone/post-order/index.html" target="_blank">Case Management calls</a> of the <b>Post-Order API</b> or manage/respond to cases manually through the eBay Resolution Center.
 *  </span>
 * XSD Type: DisputeFilterTypeCodeType
 */
class DisputeFilterTypeCodeType
{
    /**
     * Constant for 'AllInvolvedDisputes' value.
     *
     * If used, this filter returns all open and closed Unpaid Item cases that involve
     * the caller as a buyer
     *  or seller. This is the default value if the <b>DisputeFilterType</b> field is
     * not used in the <b>GetUserDisputes</b> request.
     */
    public const VAL_ALL_INVOLVED_DISPUTES = 'AllInvolvedDisputes';

    /**
     * Constant for 'DisputesAwaitingMyResponse' value.
     *
     * If used, this filter returns all open Unpaid Item cases that involve the caller
     * as a buyer
     *  or seller and are awaiting a response from the caller. This is the default
     * <b>DisputeFilterType</b> value. In other words, if no <b>DisputeFilterType</b>
     * field is used in the request, only those disputes where the caller's response is
     * due are returned.
     */
    public const VAL_DISPUTES_AWAITING_MY_RESPONSE = 'DisputesAwaitingMyResponse';

    /**
     * Constant for 'DisputesAwaitingOtherPartyResponse' value.
     *
     * If used, this filter returns all open Unpaid Item cases that involve the caller
     * as a buyer or seller and are awaiting a response from the other party.
     */
    public const VAL_DISPUTES_AWAITING_OTHER_PARTY_RESPONSE = 'DisputesAwaitingOtherPartyResponse';

    /**
     * Constant for 'AllInvolvedClosedDisputes' value.
     *
     * If used, this filter returns all closed Unpaid Item cases that involve the
     * caller as a buyer
     *  or seller.
     */
    public const VAL_ALL_INVOLVED_CLOSED_DISPUTES = 'AllInvolvedClosedDisputes';

    /**
     * Constant for 'EligibleForCredit' value.
     *
     * If used, this filter returns all Unpaid Item cases that involve the caller as a
     * buyer
     *  or seller and are eligible for a Final Value Fee credit, regardless of
     *  whether or not the credit will/has been granted.
     */
    public const VAL_ELIGIBLE_FOR_CREDIT = 'EligibleForCredit';

    /**
     * Constant for 'UnpaidItemDisputes' value.
     *
     * If used, this filter returns all open and closed Unpaid Item cases that
     *  involve the caller as a buyer or seller.
     */
    public const VAL_UNPAID_ITEM_DISPUTES = 'UnpaidItemDisputes';

    /**
     * Constant for 'ItemNotReceivedDisputes' value.
     *
     * This enumeration value is deprecated, and should not longer be used since PayPal
     * INR disputes no longer exist.
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
