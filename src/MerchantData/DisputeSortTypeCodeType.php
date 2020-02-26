<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing DisputeSortTypeCodeType
 *
 * Enumerated type that defines the values that can be used in the <b>DisputeSortType</b> filter of the <b>GetUserDisputes</b> request to control the order of disputes that are returned.
 *  <br/><br/>
 *  <span class="tablenote"><strong>Note:</strong>
 *  'Item Not Received' or 'Significantly Not As Described' cases, initiated by buyers through the eBay Money Back Guarantee program, are not returned with <b>GetUserDisputes</b>. The <a href="https://developer.ebay.com/Devzone/post-order/post-order_v2_casemanagement-caseId__get.html#overview">getCase</a> method of the <a href="https://developer.ebay.com/Devzone/post-order/concepts/UsageGuide.html">Post-Order API</a> is used to retrieve Money Back Guarantee cases programmatically.
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
     * <b>GetUserDisputes</b> request, retrieved disputes are sorted according to
     * dispute creation time, in descending order.
     */
    public const VAL_NONE = 'None';

    /**
     * Constant for 'DisputeCreatedTimeAscending' value.
     *
     * If this value is used in the <b>DisputeSortType</b> field, retrieved disputes
     * are sorted according to dispute creation time, in ascending order.
     */
    public const VAL_DISPUTE_CREATED_TIME_ASCENDING = 'DisputeCreatedTimeAscending';

    /**
     * Constant for 'DisputeCreatedTimeDescending' value.
     *
     * If this value is used in the <b>DisputeSortType</b> field, retrieved disputes
     * are sorted according to dispute creation time, in descending order.
     */
    public const VAL_DISPUTE_CREATED_TIME_DESCENDING = 'DisputeCreatedTimeDescending';

    /**
     * Constant for 'DisputeStatusAscending' value.
     *
     * If this value is used in the <b>DisputeSortType</b> field, retrieved disputes
     * are sorted according to dispute status, in ascending order.
     */
    public const VAL_DISPUTE_STATUS_ASCENDING = 'DisputeStatusAscending';

    /**
     * Constant for 'DisputeStatusDescending' value.
     *
     * If this value is used in the <b>DisputeSortType</b> field, retrieved disputes
     * are sorted according to dispute status, in descending order.
     */
    public const VAL_DISPUTE_STATUS_DESCENDING = 'DisputeStatusDescending';

    /**
     * Constant for 'DisputeCreditEligibilityAscending' value.
     *
     * If this value is used in the <b>DisputeSortType</b> field, retrieved disputes
     * are sorted according to whether the disputes are eligible for a Final Value Fee
     * credit to the seller, in ascending order. In other words, disputes ineligible
     * for a FVF credit are listed before disputes that are eligible for a FVF credit.
     */
    public const VAL_DISPUTE_CREDIT_ELIGIBILITY_ASCENDING = 'DisputeCreditEligibilityAscending';

    /**
     * Constant for 'DisputeCreditEligibilityDescending' value.
     *
     * If this value is used in the <b>DisputeSortType</b> field, retrieved disputes
     * are sorted according to whether the disputes are eligible for a Final Value Fee
     * credit to the seller, in descending order. In other words, disputes eligible for
     * a FVF credit are listed before disputes that are not eligible for a FVF credit.
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
