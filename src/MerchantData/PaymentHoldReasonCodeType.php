<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing PaymentHoldReasonCodeType
 *
 * Enumerated type that contains all possible reasons why the buyer's payment for
 *  the order is being held by eBay instead of being distributed to the seller's
 *  account. A seller's funds for an order can be held by eBay for as little as
 *  three days after the buyer receives the order, but the hold can be up to 21
 *  days based on the scenario, and in some cases, the seller's lack of action in
 *  helping to expedite the release of funds.
 * XSD Type: PaymentHoldReasonCodeType
 */
class PaymentHoldReasonCodeType
{
    /**
     * Constant for 'NewSeller' value.
     *
     * This value indicates that the buyer's payment for the order is being held
     *  by eBay because the seller is new to selling on eBay.
     */
    public const VAL_NEW_SELLER = 'NewSeller';

    /**
     * Constant for 'BelowStandardSeller' value.
     *
     * This value indicates that the buyer's payment for the order is being held
     *  by eBay because the seller has been classified as a Below Standard
     *  seller.
     */
    public const VAL_BELOW_STANDARD_SELLER = 'BelowStandardSeller';

    /**
     * Constant for 'EbpCaseOpen' value.
     *
     * This value indicates that the buyer's payment for the order is being held
     *  by eBay because an eBay Money Back Guarantee case has been filed against
     *  the order. If this value is returned, the seller can expedite the release
     *  of funds into their account by resolving the eBay Money Back Guarantee
     *  case, as indicated by a value of 'ResolveeBPCase' returned in a
     *  <b>PaymentHoldDetails.RequiredSellerActionArray.RequiredSellerAction</b>
     *  field.
     */
    public const VAL_EBP_CASE_OPEN = 'EbpCaseOpen';

    /**
     * Constant for 'ReinstatementAfterSuspension' value.
     *
     * This value indicates that the buyer's payment for the order is being held
     *  by eBay because the seller has recently been reinstated as an active eBay
     *  seller after their account went through a suspension/restricted period.
     */
    public const VAL_REINSTATEMENT_AFTER_SUSPENSION = 'ReinstatementAfterSuspension';

    /**
     * Constant for 'CasualSeller' value.
     *
     * This value indicates that the buyer's payment for the order is being held
     *  by eBay because the seller is classified as a casual (or infrequent) seller on
     * eBay.
     */
    public const VAL_CASUAL_SELLER = 'CasualSeller';

    /**
     * Constant for 'NewPaypalAccountAdded' value.
     *
     * This value should no longer get returned as a seller is no longer required to
     * link their PayPal account to their eBay account.
     */
    public const VAL_NEW_PAYPAL_ACCOUNT_ADDED = 'NewPaypalAccountAdded';

    /**
     * Constant for 'NotAvailable' value.
     *
     * This value indicates that the reason for the buyer's payment for the order
     *  being held by eBay is not known.
     */
    public const VAL_NOT_AVAILABLE = 'NotAvailable';

    /**
     * Constant for 'SellerIsOnBlackList' value.
     *
     * This value is reserved for internal or future use.
     */
    public const VAL_SELLER_IS_ON_BLACK_LIST = 'SellerIsOnBlackList';

    /**
     * Constant for 'Other' value.
     *
     * This value is returned if the reason for the buyer's payment for the order
     *  being held by eBay cannot be classified by any of the other enumeration
     *  values.
     */
    public const VAL_OTHER = 'Other';

    /**
     * Constant for 'None' value.
     *
     * This value is reserved for internal or future use.
     */
    public const VAL_NONE = 'None';

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
