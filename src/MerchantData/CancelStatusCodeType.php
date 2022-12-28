<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing CancelStatusCodeType
 *
 * Enumerated type that defines the possible states of an eBay order cancellation.
 * XSD Type: CancelStatusCodeType
 */
class CancelStatusCodeType
{
    /**
     * Constant for 'Invalid' value.
     *
     * This value indicates that the order cancellation request is invalid.
     */
    public const VAL_INVALID = 'Invalid';

    /**
     * Constant for 'NotApplicable' value.
     *
     * This value indicates that the order cancellation request is not applicable.
     */
    public const VAL_NOT_APPLICABLE = 'NotApplicable';

    /**
     * Constant for 'CancelRequested' value.
     *
     * This value indicates that the buyer has initiated the cancellation of the eBay
     * order. It will be up to the seller to decide to approve or reject the
     * cancellation request.
     */
    public const VAL_CANCEL_REQUESTED = 'CancelRequested';

    /**
     * Constant for 'CancelPending' value.
     *
     * This value indicates that the cancellation of the eBay order has been initiated
     * by the buyer and approved by the seller, but the cancellation request has yet to
     * be completed.
     */
    public const VAL_CANCEL_PENDING = 'CancelPending';

    /**
     * Constant for 'CancelRejected' value.
     *
     * This value indicates that the cancellation of the eBay order initiated by the
     * buyer has been rejected by the seller.
     */
    public const VAL_CANCEL_REJECTED = 'CancelRejected';

    /**
     * Constant for 'CancelClosedNoRefund' value.
     *
     * This value indicates that the order cancellation request has been closed, with
     * no refund issued to the buyer.
     */
    public const VAL_CANCEL_CLOSED_NO_REFUND = 'CancelClosedNoRefund';

    /**
     * Constant for 'CancelClosedWithRefund' value.
     *
     * This value indicates that the order cancellation request has been closed, with a
     * refund issued to the buyer.
     */
    public const VAL_CANCEL_CLOSED_WITH_REFUND = 'CancelClosedWithRefund';

    /**
     * Constant for 'CancelClosedUnknownRefund' value.
     *
     * This value indicates that the order cancellation request has been closed, and it
     * is unknown whether or not a refund was issued to the buyer.
     */
    public const VAL_CANCEL_CLOSED_UNKNOWN_REFUND = 'CancelClosedUnknownRefund';

    /**
     * Constant for 'CancelClosedForCommitment' value.
     *
     * This value indicates that since the buyer committed to buying the item but did
     * not pay for it, the cancellation succeeded and no refund is needed.
     */
    public const VAL_CANCEL_CLOSED_FOR_COMMITMENT = 'CancelClosedForCommitment';

    /**
     * Constant for 'CancelComplete' value.
     *
     * This value indicates that the cancellation of the eBay order has been completed.
     */
    public const VAL_CANCEL_COMPLETE = 'CancelComplete';

    /**
     * Constant for 'CancelFailed' value.
     *
     * This value indicates that the cancellation of the eBay order has failed.
     */
    public const VAL_CANCEL_FAILED = 'CancelFailed';

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
