<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing InquiryStatusCodeType
 *
 * Enumerated type that defines the possible states of a buyer's Item Not Received (INR) inquiry.
 * XSD Type: InquiryStatusCodeType
 */
class InquiryStatusCodeType
{

    /**
     * Constant for 'Invalid' value.
     *
     * This value indicates that the INR inquiry is invalid.
     */
    public const VAL_INVALID = 'Invalid';

    /**
     * Constant for 'NotApplicable' value.
     *
     * This value indicates that the INR inquiry is not applicable.
     */
    public const VAL_NOT_APPLICABLE = 'NotApplicable';

    /**
     * Constant for 'TrackInquiryPendingBuyerResponse' value.
     *
     * This value indicates that the INR inquiry is pending a response from the buyer.
     */
    public const VAL_TRACK_INQUIRY_PENDING_BUYER_RESPONSE = 'TrackInquiryPendingBuyerResponse';

    /**
     * Constant for 'TrackInquiryPendingSellerResponse' value.
     *
     * This value indicates that the INR inquiry is pending a response from the seller.
     */
    public const VAL_TRACK_INQUIRY_PENDING_SELLER_RESPONSE = 'TrackInquiryPendingSellerResponse';

    /**
     * Constant for 'TrackInquiryClosedWithRefund' value.
     *
     * This value indicates that the INR inquiry was closed with a refund issued to the
     * buyer.
     */
    public const VAL_TRACK_INQUIRY_CLOSED_WITH_REFUND = 'TrackInquiryClosedWithRefund';

    /**
     * Constant for 'TrackInquiryClosedNoRefund' value.
     *
     * This value indicates that the INR inquiry was closed with no refund issued to
     * the buyer.
     */
    public const VAL_TRACK_INQUIRY_CLOSED_NO_REFUND = 'TrackInquiryClosedNoRefund';

    /**
     * Constant for 'TrackInquiryEscalatedPendingBuyer' value.
     *
     * This value indicates that the INR inquiry was escalated to an eBay Money Back
     * Guarantee case, and it is pending a response from the buyer.
     */
    public const VAL_TRACK_INQUIRY_ESCALATED_PENDING_BUYER = 'TrackInquiryEscalatedPendingBuyer';

    /**
     * Constant for 'TrackInquiryEscalatedPendingSeller' value.
     *
     * This value indicates that the INR inquiry was escalated to an eBay Money Back
     * Guarantee case, and it is pending a response from the seller.
     */
    public const VAL_TRACK_INQUIRY_ESCALATED_PENDING_SELLER = 'TrackInquiryEscalatedPendingSeller';

    /**
     * Constant for 'TrackInquiryEscalatedPendingCS' value.
     *
     * This value indicates that the INR inquiry was escalated to an eBay Money Back
     * Guarantee case, and it is pending a response from eBay Customer Support.
     */
    public const VAL_TRACK_INQUIRY_ESCALATED_PENDING_CS = 'TrackInquiryEscalatedPendingCS';

    /**
     * Constant for 'TrackInquiryEscalatedClosedWithRefund' value.
     *
     * This value indicates that the INR inquiry was escalated to an eBay Money Back
     * Guarantee case, but it was closed with a refund issued to the buyer.
     */
    public const VAL_TRACK_INQUIRY_ESCALATED_CLOSED_WITH_REFUND = 'TrackInquiryEscalatedClosedWithRefund';

    /**
     * Constant for 'TrackInquiryEscalatedClosedNoRefund' value.
     *
     * This value indicates that the INR inquiry was escalated to an eBay Money Back
     * Guarantee case, but it was closed with no refund issued to the buyer.
     */
    public const VAL_TRACK_INQUIRY_ESCALATED_CLOSED_NO_REFUND = 'TrackInquiryEscalatedClosedNoRefund';

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
