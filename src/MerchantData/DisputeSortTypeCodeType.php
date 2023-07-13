<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing DisputeSortTypeCodeType
 *
 * Enumerated type that defines the values that can be used in the <b>DisputeSortType</b> filter of the <b>GetUserDisputes</b> request to control the order of disputes that are returned.
 *  <br/><br/>
 *  <span class="tablenote"><strong>Note:</strong>
 *  The <strong>GetUserDisputes</strong> call of the Trading API now only supports Unpaid Item cases, and no longer supports Item not Received (INR) or Significantly not as Described (SNAD) disputes created through PayPal, since this is no longer an option for eBay buyers. eBay buyers must create an INR or SNAD case through eBay's Resolution Center, and this call also does not support eBay Money Back Guarantee cases.
 *  <br><br>
 *  To respond to an eBay Money Back Guarantee case, the seller should use the <a href="https://developer.ebay.com/Devzone/post-order/index.html" target="_blank">Case Management calls</a> of the <b>Post-Order API</b> or manage/respond to cases manually through the eBay Resolution Center.
 *  </span>
 * XSD Type: DisputeSortTypeCodeType
 */
class DisputeSortTypeCodeType
{
    /**
     * Constant for 'None' value.
     *
     * This is the default value. If this value is used in the <b>DisputeSortType</b>
     * field, or if the <b>DisputeSortType</b> field is omitted from the
     * <b>GetUserDisputes</b> request, retrieved Unpaid Item cases are sorted according
     * to dispute creation time, in descending order.
     */
    public const VAL_NONE = 'None';

    /**
     * Constant for 'DisputeCreatedTimeAscending' value.
     *
     * If this value is used in the <b>DisputeSortType</b> field, retrieved Unpaid Item
     * cases are sorted according to creation time, in ascending order.
     */
    public const VAL_DISPUTE_CREATED_TIME_ASCENDING = 'DisputeCreatedTimeAscending';

    /**
     * Constant for 'DisputeCreatedTimeDescending' value.
     *
     * If this value is used in the <b>DisputeSortType</b> field, retrieved Unpaid Item
     * cases are sorted according to creation time, in descending order.
     */
    public const VAL_DISPUTE_CREATED_TIME_DESCENDING = 'DisputeCreatedTimeDescending';

    /**
     * Constant for 'DisputeStatusAscending' value.
     *
     * If this value is used in the <b>DisputeSortType</b> field, retrieved Unpaid Item
     * cases are sorted according to status, in ascending order.
     */
    public const VAL_DISPUTE_STATUS_ASCENDING = 'DisputeStatusAscending';

    /**
     * Constant for 'DisputeStatusDescending' value.
     *
     * If this value is used in the <b>DisputeSortType</b> field, retrieved Unpaid Item
     * cases are sorted according to status, in descending order.
     */
    public const VAL_DISPUTE_STATUS_DESCENDING = 'DisputeStatusDescending';

    /**
     * Constant for 'DisputeCreditEligibilityAscending' value.
     *
     * If this value is used in the <b>DisputeSortType</b> field, retrieved Unpaid Item
     * cases are sorted according to whether the cases are eligible for a Final Value
     * Fee credit to the seller, in ascending order. In other words, Unpaid Item cases
     * ineligible for a FVF credit are listed before Unpaid Item cases that are
     * eligible for a FVF credit.
     */
    public const VAL_DISPUTE_CREDIT_ELIGIBILITY_ASCENDING = 'DisputeCreditEligibilityAscending';

    /**
     * Constant for 'DisputeCreditEligibilityDescending' value.
     *
     * If this value is used in the <b>DisputeSortType</b> field, retrieved Unpaid Item
     * cases are sorted according to whether the Unpaid Item cases are eligible for a
     * Final Value Fee credit to the seller, in descending order. In other words,
     * Unpaid Item cases eligible for a FVF credit are listed before Unpaid Item cases
     * that are not eligible for a FVF credit.
     */
    public const VAL_DISPUTE_CREDIT_ELIGIBILITY_DESCENDING = 'DisputeCreditEligibilityDescending';

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
