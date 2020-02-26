<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing ReturnStatusCodeType
 *
 * Enumerated type that defines the possible states of an eBay return request.
 * XSD Type: ReturnStatusCodeType
 */
class ReturnStatusCodeType
{

    /**
     * Constant for 'Invalid' value.
     *
     * This value indicates that the return request is invalid.
     */
    public const VAL_INVALID = 'Invalid';

    /**
     * Constant for 'NotApplicable' value.
     *
     * This value indicates that the return request is not applicable.
     */
    public const VAL_NOT_APPLICABLE = 'NotApplicable';

    /**
     * Constant for 'ReturnRequestPendingApproval' value.
     *
     * This value indicates that the return request has been initiated by the buyer and
     * is pending approval by the seller.
     */
    public const VAL_RETURN_REQUEST_PENDING_APPROVAL = 'ReturnRequestPendingApproval';

    /**
     * Constant for 'ReturnRequestRejected' value.
     *
     * This value indicates that the buyer's return request was rejected by the seller.
     */
    public const VAL_RETURN_REQUEST_REJECTED = 'ReturnRequestRejected';

    /**
     * Constant for 'ReturnOpen' value.
     *
     * This value indicates that a return request was successfully opened by the buyer.
     */
    public const VAL_RETURN_OPEN = 'ReturnOpen';

    /**
     * Constant for 'ReturnShipped' value.
     *
     * This value indicates that the buyer has return shipped the item(s) in the return
     * request back to the seller.
     */
    public const VAL_RETURN_SHIPPED = 'ReturnShipped';

    /**
     * Constant for 'ReturnDelivered' value.
     *
     * This value indicates that the seller has received the item(s) that the buyer
     * return shipped.
     */
    public const VAL_RETURN_DELIVERED = 'ReturnDelivered';

    /**
     * Constant for 'ReturnClosedWithRefund' value.
     *
     * This value indicates that a return request was closed with a refund issued to
     * the buyer.
     */
    public const VAL_RETURN_CLOSED_WITH_REFUND = 'ReturnClosedWithRefund';

    /**
     * Constant for 'ReturnClosedEscalated' value.
     *
     * This value indicates that a return request was closed after being escalated to
     * an eBay return case.
     */
    public const VAL_RETURN_CLOSED_ESCALATED = 'ReturnClosedEscalated';

    /**
     * Constant for 'ReturnClosedNoRefund' value.
     *
     * This value indicates that a return request was closed with no refund issued to
     * the buyer.
     */
    public const VAL_RETURN_CLOSED_NO_REFUND = 'ReturnClosedNoRefund';

    /**
     * Constant for 'ReturnEscalatedPendingBuyer' value.
     *
     * This value indicates that a return request was escalated to an eBay return case,
     * and the case is awaiting a response from the buyer.
     */
    public const VAL_RETURN_ESCALATED_PENDING_BUYER = 'ReturnEscalatedPendingBuyer';

    /**
     * Constant for 'ReturnEscalatedPendingSeller' value.
     *
     * This value indicates that a return request was escalated to an eBay return case,
     * and the case is awaiting a response from the seller.
     */
    public const VAL_RETURN_ESCALATED_PENDING_SELLER = 'ReturnEscalatedPendingSeller';

    /**
     * Constant for 'ReturnEscalatedPendingCS' value.
     *
     * This value indicates that a return request was escalated to an eBay return case,
     * and the case is awaiting a response from eBay Customer Support.
     */
    public const VAL_RETURN_ESCALATED_PENDING_CS = 'ReturnEscalatedPendingCS';

    /**
     * Constant for 'ReturnEscalatedClosedWithRefund' value.
     *
     * This value indicates that a return request was escalated to an eBay return case,
     * but the case was closed with a refund issued to the buyer.
     */
    public const VAL_RETURN_ESCALATED_CLOSED_WITH_REFUND = 'ReturnEscalatedClosedWithRefund';

    /**
     * Constant for 'ReturnEscalatedClosedNoRefund' value.
     *
     * This value indicates that a return request was escalated to an eBay return case,
     * but the case was closed with no refund issued to the buyer.
     */
    public const VAL_RETURN_ESCALATED_CLOSED_NO_REFUND = 'ReturnEscalatedClosedNoRefund';

    /**
     * Constant for 'ReturnEscalated' value.
     *
     * This value indicates that a return request was escalated to an eBay return case.
     */
    public const VAL_RETURN_ESCALATED = 'ReturnEscalated';

    /**
     * Constant for 'ReturnRequestPending' value.
     *
     * This value indicates that the return request is currently in the pending state.
     */
    public const VAL_RETURN_REQUEST_PENDING = 'ReturnRequestPending';

    /**
     * Constant for 'ReturnRequestClosedWithRefund' value.
     *
     * This value indicates that the return request was closed with a refund to the
     * buyer.
     */
    public const VAL_RETURN_REQUEST_CLOSED_WITH_REFUND = 'ReturnRequestClosedWithRefund';

    /**
     * Constant for 'ReturnRequestClosedNoRefund' value.
     *
     * This value indicates that the return request was closed with no refund to the
     * buyer.
     */
    public const VAL_RETURN_REQUEST_CLOSED_NO_REFUND = 'ReturnRequestClosedNoRefund';

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
