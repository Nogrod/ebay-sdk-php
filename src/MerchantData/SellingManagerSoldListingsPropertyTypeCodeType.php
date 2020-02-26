<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing SellingManagerSoldListingsPropertyTypeCodeType
 *
 * Indicates the filters for Selling Manager sold listings.
 * XSD Type: SellingManagerSoldListingsPropertyTypeCodeType
 */
class SellingManagerSoldListingsPropertyTypeCodeType
{

    /**
     * Constant for 'NotPaidNotShipped' value.
     *
     * Item is not paid and not shipped.
     */
    public const VAL_NOT_PAID_NOT_SHIPPED = 'NotPaidNotShipped';

    /**
     * Constant for 'PaidNotShipped' value.
     *
     * Item is paid but not shipped.
     */
    public const VAL_PAID_NOT_SHIPPED = 'PaidNotShipped';

    /**
     * Constant for 'PrintShippingLabel' value.
     *
     * Item is paid but not shipped.
     */
    public const VAL_PRINT_SHIPPING_LABEL = 'PrintShippingLabel';

    /**
     * Constant for 'PaidShipped' value.
     *
     * Item is paid for and is shipped.
     */
    public const VAL_PAID_SHIPPED = 'PaidShipped';

    /**
     * Constant for 'PaidNoFeedback' value.
     *
     * An alert has been issued about a listing that is paid with no feedback left.
     */
    public const VAL_PAID_NO_FEEDBACK = 'PaidNoFeedback';

    /**
     * Constant for 'PaymentReminderSendError' value.
     *
     * Payment Reminder emails not sent due to system error.
     */
    public const VAL_PAYMENT_REMINDER_SEND_ERROR = 'PaymentReminderSendError';

    /**
     * Constant for 'PaymentReceivedNotificationSendError' value.
     *
     * Payment received notification not sent due to system error.
     */
    public const VAL_PAYMENT_RECEIVED_NOTIFICATION_SEND_ERROR = 'PaymentReceivedNotificationSendError';

    /**
     * Constant for 'RequestForShippingAddressSendError' value.
     *
     * Request shipping address emails not sent due to system error.
     */
    public const VAL_REQUEST_FOR_SHIPPING_ADDRESS_SEND_ERROR = 'RequestForShippingAddressSendError';

    /**
     * Constant for 'ShippingNotificationSendError' value.
     *
     * Request shipping address emails not sent due to system error.
     */
    public const VAL_SHIPPING_NOTIFICATION_SEND_ERROR = 'ShippingNotificationSendError';

    /**
     * Constant for 'PersonalizedEmailsSendError' value.
     *
     * Personalized emails not sent due to system error.
     */
    public const VAL_PERSONALIZED_EMAILS_SEND_ERROR = 'PersonalizedEmailsSendError';

    /**
     * Constant for 'WinningBuyerNotificationSendError' value.
     *
     * Winning Buyer Notification not sent due to system error.
     */
    public const VAL_WINNING_BUYER_NOTIFICATION_SEND_ERROR = 'WinningBuyerNotificationSendError';

    /**
     * Constant for 'FeeCreditRequest' value.
     *
     * Final value fee credit requests can be filed.
     */
    public const VAL_FEE_CREDIT_REQUEST = 'FeeCreditRequest';

    /**
     * Constant for 'PayPalPayment' value.
     *
     * If true, indicates that the PayPal Payment Received alert has been issued.
     */
    public const VAL_PAY_PAL_PAYMENT = 'PayPalPayment';

    /**
     * Constant for 'FeedbackMessageNotSent' value.
     *
     * Automated feedback message is not sent.
     */
    public const VAL_FEEDBACK_MESSAGE_NOT_SENT = 'FeedbackMessageNotSent';

    /**
     * Constant for 'FeedbackReminderSendError' value.
     *
     * Feedback Reminder emails not sent due to system error.
     */
    public const VAL_FEEDBACK_REMINDER_SEND_ERROR = 'FeedbackReminderSendError';

    /**
     * Constant for 'NotShipped' value.
     *
     * Item is not shipped.
     */
    public const VAL_NOT_SHIPPED = 'NotShipped';

    /**
     * Constant for 'UnpaidItemReminder' value.
     *
     * Listing eligible for unpaid item reminder
     */
    public const VAL_UNPAID_ITEM_REMINDER = 'UnpaidItemReminder';

    /**
     * Constant for 'EscrowCancelled' value.
     *
     * Escrow status is Cancelled.
     */
    public const VAL_ESCROW_CANCELLED = 'EscrowCancelled';

    /**
     * Constant for 'EscrowCompleted' value.
     *
     * Escrow status is Completed.
     */
    public const VAL_ESCROW_COMPLETED = 'EscrowCompleted';

    /**
     * Constant for 'EscrowInitiated' value.
     *
     * Escrow status is Initiated.
     */
    public const VAL_ESCROW_INITIATED = 'EscrowInitiated';

    /**
     * Constant for 'EscrowManageRefund' value.
     *
     * Escrow status is in refund state.
     */
    public const VAL_ESCROW_MANAGE_REFUND = 'EscrowManageRefund';

    /**
     * Constant for 'EscrowReleasePayment' value.
     *
     * Item is shipped and Escrow status is in Release payment.
     */
    public const VAL_ESCROW_RELEASE_PAYMENT = 'EscrowReleasePayment';

    /**
     * Constant for 'EscrowShipToBuyer' value.
     *
     * Payment is confirmed and item can be shipped to buyer.
     */
    public const VAL_ESCROW_SHIP_TO_BUYER = 'EscrowShipToBuyer';

    /**
     * Constant for 'EscrowSoldAll' value.
     *
     * All Escrow states.
     */
    public const VAL_ESCROW_SOLD_ALL = 'EscrowSoldAll';

    /**
     * Constant for 'ShippedAndAwaitingFeedback' value.
     *
     * Item is shipped and feedback is not yet received.
     */
    public const VAL_SHIPPED_AND_AWAITING_FEEDBACK = 'ShippedAndAwaitingFeedback';

    /**
     * Constant for 'InternationalSale' value.
     *
     * New international sale.
     */
    public const VAL_INTERNATIONAL_SALE = 'InternationalSale';

    /**
     * Constant for 'eBayGivingWorksDonationOwed' value.
     *
     * Charity filter.
     */
    public const VAL_E_BAY_GIVING_WORKS_DONATION_OWED = 'eBayGivingWorksDonationOwed';

    /**
     * Constant for 'PaymentOverDue' value.
     *
     * Payment is overdue.
     */
    public const VAL_PAYMENT_OVER_DUE = 'PaymentOverDue';

    /**
     * Constant for 'PadiWithPaisaPayEscrow' value.
     *
     * Payment is done with PaisaPay Escrow.
     */
    public const VAL_PADI_WITH_PAISA_PAY_ESCROW = 'PadiWithPaisaPayEscrow';

    /**
     * Constant for 'CustomEmailTemplate1SendError' value.
     *
     * Failed to send custom email template 1.
     */
    public const VAL_CUSTOM_EMAIL_TEMPLATE_1_SEND_ERROR = 'CustomEmailTemplate1SendError';

    /**
     * Constant for 'CustomEmailTemplate2SendError' value.
     *
     * Failed to send custom email template 2.
     */
    public const VAL_CUSTOM_EMAIL_TEMPLATE_2_SEND_ERROR = 'CustomEmailTemplate2SendError';

    /**
     * Constant for 'CustomEmailTemplate3SendError' value.
     *
     * Failed to send custom email template 3.
     */
    public const VAL_CUSTOM_EMAIL_TEMPLATE_3_SEND_ERROR = 'CustomEmailTemplate3SendError';

    /**
     * Constant for 'CustomEmailTemplate4SendError' value.
     *
     * Failed to send custom email template 4.
     */
    public const VAL_CUSTOM_EMAIL_TEMPLATE_4_SEND_ERROR = 'CustomEmailTemplate4SendError';

    /**
     * Constant for 'CustomEmailTemplate5SendError' value.
     *
     * Failed to send custom email template 5.
     */
    public const VAL_CUSTOM_EMAIL_TEMPLATE_5_SEND_ERROR = 'CustomEmailTemplate5SendError';

    /**
     * Constant for 'CustomEmailTemplate6SendError' value.
     *
     * Failed to send custom email template 6.
     */
    public const VAL_CUSTOM_EMAIL_TEMPLATE_6_SEND_ERROR = 'CustomEmailTemplate6SendError';

    /**
     * Constant for 'CustomEmailTemplate7SendError' value.
     *
     * Failed to send custom email template 7.
     */
    public const VAL_CUSTOM_EMAIL_TEMPLATE_7_SEND_ERROR = 'CustomEmailTemplate7SendError';

    /**
     * Constant for 'CustomEmailTemplate8SendError' value.
     *
     * Failed to send custom email template 8.
     */
    public const VAL_CUSTOM_EMAIL_TEMPLATE_8_SEND_ERROR = 'CustomEmailTemplate8SendError';

    /**
     * Constant for 'CustomEmailTemplate9SendError' value.
     *
     * Failed to send custom email template 9.
     */
    public const VAL_CUSTOM_EMAIL_TEMPLATE_9_SEND_ERROR = 'CustomEmailTemplate9SendError';

    /**
     * Constant for 'CustomEmailTemplate10SendError' value.
     *
     * Failed to send custom email template 10.
     */
    public const VAL_CUSTOM_EMAIL_TEMPLATE_10_SEND_ERROR = 'CustomEmailTemplate10SendError';

    /**
     * Constant for 'CustomEmailTemplate11SendError' value.
     *
     * Failed to send custom email template 11.
     */
    public const VAL_CUSTOM_EMAIL_TEMPLATE_11_SEND_ERROR = 'CustomEmailTemplate11SendError';

    /**
     * Constant for 'CustomEmailTemplate12SendError' value.
     *
     * Failed to send custom email template 12.
     */
    public const VAL_CUSTOM_EMAIL_TEMPLATE_12_SEND_ERROR = 'CustomEmailTemplate12SendError';

    /**
     * Constant for 'CustomEmailTemplate13SendError' value.
     *
     * Failed to send custom email template 13.
     */
    public const VAL_CUSTOM_EMAIL_TEMPLATE_13_SEND_ERROR = 'CustomEmailTemplate13SendError';

    /**
     * Constant for 'CustomEmailTemplate14SendError' value.
     *
     * Failed to send custom email template 14.
     */
    public const VAL_CUSTOM_EMAIL_TEMPLATE_14_SEND_ERROR = 'CustomEmailTemplate14SendError';

    /**
     * Constant for 'CustomEmailTemplate15SendError' value.
     *
     * Failed to send custom email template 15.
     */
    public const VAL_CUSTOM_EMAIL_TEMPLATE_15_SEND_ERROR = 'CustomEmailTemplate15SendError';

    /**
     * Constant for 'CustomEmailTemplate16SendError' value.
     *
     * Failed to send custom email template 16.
     */
    public const VAL_CUSTOM_EMAIL_TEMPLATE_16_SEND_ERROR = 'CustomEmailTemplate16SendError';

    /**
     * Constant for 'CustomEmailTemplate17SendError' value.
     *
     * Failed to send custom email template 17.
     */
    public const VAL_CUSTOM_EMAIL_TEMPLATE_17_SEND_ERROR = 'CustomEmailTemplate17SendError';

    /**
     * Constant for 'CustomEmailTemplate18SendError' value.
     *
     * Failed to send custom email template 18.
     */
    public const VAL_CUSTOM_EMAIL_TEMPLATE_18_SEND_ERROR = 'CustomEmailTemplate18SendError';

    /**
     * Constant for 'CustomEmailTemplate19SendError' value.
     *
     * Failed to send custom email template 19.
     */
    public const VAL_CUSTOM_EMAIL_TEMPLATE_19_SEND_ERROR = 'CustomEmailTemplate19SendError';

    /**
     * Constant for 'CustomEmailTemplate20SendError' value.
     *
     * Failed to send custom email template 20.
     */
    public const VAL_CUSTOM_EMAIL_TEMPLATE_20_SEND_ERROR = 'CustomEmailTemplate20SendError';

    /**
     * Constant for 'ResponseRequiredForReturnCase' value.
     *
     * Reserved for future use. If a buyer requests to return an item, the seller's
     * response is required.
     */
    public const VAL_RESPONSE_REQUIRED_FOR_RETURN_CASE = 'ResponseRequiredForReturnCase';

    /**
     * Constant for 'CustomCode' value.
     *
     * (out) Reserved for internal or future use.
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
