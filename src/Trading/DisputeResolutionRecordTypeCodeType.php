<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing DisputeResolutionRecordTypeCodeType
 *
 * Enumerated type that lists the actions that eBay may take once a dispute is resolved.
 *  <br/><br/>
 *  <span class="tablenote"><strong>Note:</strong>
 *  'Item Not Received' or 'Significantly Not As Described' cases, initiated by buyers through the eBay Money Back Guarantee program, are not returned with <b>GetUserDisputes</b>. The <a href="https://developer.ebay.com/Devzone/post-order/post-order_v2_casemanagement-caseId__get.html#overview">getCase</a> method of the <a href="https://developer.ebay.com/Devzone/post-order/concepts/UsageGuide.html">Post-Order API</a> is used to retrieve Money Back Guarantee cases programmatically.
 *  </span>
 * XSD Type: DisputeResolutionRecordTypeCodeType
 */
class DisputeResolutionRecordTypeCodeType
{

    /**
     * Constant for 'StrikeBuyer' value.
     *
     * This enumeration value indicates that the buyer received an Unpaid Item Strike.
     */
    public const VAL_STRIKE_BUYER = 'StrikeBuyer';

    /**
     * Constant for 'SuspendBuyer' value.
     *
     * This enumeration value indicates that the buyer's account has been suspended,
     * and buyer will be unable to use the eBay site.
     */
    public const VAL_SUSPEND_BUYER = 'SuspendBuyer';

    /**
     * Constant for 'RestrictBuyer' value.
     *
     * This enumeration value indicates that the buyer's activity is restricted and
     * will be unable to bid on or purchase items.
     */
    public const VAL_RESTRICT_BUYER = 'RestrictBuyer';

    /**
     * Constant for 'FVFCredit' value.
     *
     * This enumeration value indicates that the seller received a Final Value Fee
     * credit.
     */
    public const VAL_FVFCREDIT = 'FVFCredit';

    /**
     * Constant for 'InsertionFeeCredit' value.
     *
     * This enumeration value indicates that the seller's listing fees were credited.
     */
    public const VAL_INSERTION_FEE_CREDIT = 'InsertionFeeCredit';

    /**
     * Constant for 'AppealBuyerStrike' value.
     *
     * This enumeration value indicates that the buyer has appealed the Unpaid Item
     * Strike against their account.
     */
    public const VAL_APPEAL_BUYER_STRIKE = 'AppealBuyerStrike';

    /**
     * Constant for 'UnsuspendBuyer' value.
     *
     * This enumeration value indicates that the buyer's account has been reinstated.
     */
    public const VAL_UNSUSPEND_BUYER = 'UnsuspendBuyer';

    /**
     * Constant for 'UnrestrictBuyer' value.
     *
     * This enumeration value indicates that all restrictions on the buyer's account
     * have ended.
     */
    public const VAL_UNRESTRICT_BUYER = 'UnrestrictBuyer';

    /**
     * Constant for 'ReverseFVFCredit' value.
     *
     * This enumeration value indicates that the seller's Final Value Fee credit was
     * reversed.
     */
    public const VAL_REVERSE_FVFCREDIT = 'ReverseFVFCredit';

    /**
     * Constant for 'ReverseInsertionFeeCredit' value.
     *
     * This enumeration value indicates that the seller's listing fees credit was
     * reversed.
     */
    public const VAL_REVERSE_INSERTION_FEE_CREDIT = 'ReverseInsertionFeeCredit';

    /**
     * Constant for 'GenerateCSTicketForSuspend' value.
     *
     * This enumeration value indicates that a customer service ticket to suspend The
     * buyer's account has been created.
     */
    public const VAL_GENERATE_CSTICKET_FOR_SUSPEND = 'GenerateCSTicketForSuspend';

    /**
     * Constant for 'FVFCreditNotGranted' value.
     *
     * This enumeration value indicates that the seller requested, but did not receive
     * a Final Value Fee credit.
     */
    public const VAL_FVFCREDIT_NOT_GRANTED = 'FVFCreditNotGranted';

    /**
     * Constant for 'ItemNotReceivedClaimFiled' value.
     *
     * This enumeration value indicates that the buyer did not receive the item, and
     * filed a claim against the seller.
     */
    public const VAL_ITEM_NOT_RECEIVED_CLAIM_FILED = 'ItemNotReceivedClaimFiled';

    /**
     * Constant for 'UnpaidItemRelisted' value.
     *
     * This enumeration value indicates that an Unpaid Item was automatically relisted
     * by the Unpaid Item Assistant mechanism.
     */
    public const VAL_UNPAID_ITEM_RELISTED = 'UnpaidItemRelisted';

    /**
     * Constant for 'UnpaidItemRevised' value.
     *
     * This enumeration value indicates that an Unpaid Item was automatically revised
     * by the Unpaid Item Assistant mechanism.
     */
    public const VAL_UNPAID_ITEM_REVISED = 'UnpaidItemRevised';

    /**
     * Constant for 'FVFOnShippingCredit' value.
     *
     * Reserved for future use.
     */
    public const VAL_FVFON_SHIPPING_CREDIT = 'FVFOnShippingCredit';

    /**
     * Constant for 'FVFOnShippingCreditNotGranted' value.
     *
     * Reserved for future use.
     */
    public const VAL_FVFON_SHIPPING_CREDIT_NOT_GRANTED = 'FVFOnShippingCreditNotGranted';

    /**
     * Constant for 'ReverseFVFOnShippingCredit' value.
     *
     * Reserved for future use.
     */
    public const VAL_REVERSE_FVFON_SHIPPING_CREDIT = 'ReverseFVFOnShippingCredit';

    /**
     * Constant for 'FeatureFeeCredit' value.
     *
     * This enumeration value indicates that the seller received a credit for feature
     * fees.
     */
    public const VAL_FEATURE_FEE_CREDIT = 'FeatureFeeCredit';

    /**
     * Constant for 'FeatureFeeNotCredit' value.
     *
     * This enumeration value indicates that the seller did not receive a credit for
     * feature fees.
     */
    public const VAL_FEATURE_FEE_NOT_CREDIT = 'FeatureFeeNotCredit';

    /**
     * Constant for 'ReverseFeatureFeeCredit' value.
     *
     * This enumeration value indicates that the seller's feature fees credit was
     * reversed.
     */
    public const VAL_REVERSE_FEATURE_FEE_CREDIT = 'ReverseFeatureFeeCredit';

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
