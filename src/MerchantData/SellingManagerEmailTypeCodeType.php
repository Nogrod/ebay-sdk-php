<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing SellingManagerEmailTypeCodeType
 *
 * Specifies the Selling Manager email type enumeration values.
 * XSD Type: SellingManagerEmailTypeCodeType
 */
class SellingManagerEmailTypeCodeType
{
    /**
     * Constant for 'ManualEntry' value.
     *
     * Email logged manually. For example, the seller manually adds an entry to
     *  track email sent to a buyer offline.
     */
    public const VAL_MANUAL_ENTRY = 'ManualEntry';

    /**
     * Constant for 'WinningBuyerEmail' value.
     *
     * Winning Buyer Notification.
     */
    public const VAL_WINNING_BUYER_EMAIL = 'WinningBuyerEmail';

    /**
     * Constant for 'PaymentReminderEmail' value.
     *
     * Payment Reminder emails.
     */
    public const VAL_PAYMENT_REMINDER_EMAIL = 'PaymentReminderEmail';

    /**
     * Constant for 'PaymentReceivedEmail' value.
     *
     * Payment received notification.
     */
    public const VAL_PAYMENT_RECEIVED_EMAIL = 'PaymentReceivedEmail';

    /**
     * Constant for 'RequestForShippingAddressEmail' value.
     *
     * Request shipping address email.
     */
    public const VAL_REQUEST_FOR_SHIPPING_ADDRESS_EMAIL = 'RequestForShippingAddressEmail';

    /**
     * Constant for 'FeedbackReminderEmail' value.
     *
     * Feedback Reminder emails.
     */
    public const VAL_FEEDBACK_REMINDER_EMAIL = 'FeedbackReminderEmail';

    /**
     * Constant for 'ShipmentSentEmail' value.
     *
     * Shipment sent email.
     */
    public const VAL_SHIPMENT_SENT_EMAIL = 'ShipmentSentEmail';

    /**
     * Constant for 'PersonalizedEmail' value.
     *
     * Personalized emails.
     */
    public const VAL_PERSONALIZED_EMAIL = 'PersonalizedEmail';

    /**
     * Constant for 'InvoiceNotification' value.
     *
     * Invoice notification emails.
     */
    public const VAL_INVOICE_NOTIFICATION = 'InvoiceNotification';

    /**
     * Constant for 'CustomEmailTemplate1' value.
     *
     * Custom email template 1.
     */
    public const VAL_CUSTOM_EMAIL_TEMPLATE_1 = 'CustomEmailTemplate1';

    /**
     * Constant for 'CustomEmailTemplate2' value.
     *
     * Custom email template 2.
     */
    public const VAL_CUSTOM_EMAIL_TEMPLATE_2 = 'CustomEmailTemplate2';

    /**
     * Constant for 'CustomEmailTemplate3' value.
     *
     * Custom email template 3.
     */
    public const VAL_CUSTOM_EMAIL_TEMPLATE_3 = 'CustomEmailTemplate3';

    /**
     * Constant for 'CustomEmailTemplate4' value.
     *
     * Custom email template 4.
     */
    public const VAL_CUSTOM_EMAIL_TEMPLATE_4 = 'CustomEmailTemplate4';

    /**
     * Constant for 'CustomEmailTemplate5' value.
     *
     * Custom email template 5.
     */
    public const VAL_CUSTOM_EMAIL_TEMPLATE_5 = 'CustomEmailTemplate5';

    /**
     * Constant for 'CustomEmailTemplate6' value.
     *
     * Custom email template 6.
     */
    public const VAL_CUSTOM_EMAIL_TEMPLATE_6 = 'CustomEmailTemplate6';

    /**
     * Constant for 'CustomEmailTemplate7' value.
     *
     * Custom email template 7.
     */
    public const VAL_CUSTOM_EMAIL_TEMPLATE_7 = 'CustomEmailTemplate7';

    /**
     * Constant for 'CustomEmailTemplate8' value.
     *
     * Custom email template 8.
     */
    public const VAL_CUSTOM_EMAIL_TEMPLATE_8 = 'CustomEmailTemplate8';

    /**
     * Constant for 'CustomEmailTemplate9' value.
     *
     * Custom email template 9.
     */
    public const VAL_CUSTOM_EMAIL_TEMPLATE_9 = 'CustomEmailTemplate9';

    /**
     * Constant for 'CustomEmailTemplate10' value.
     *
     * Custom email template 10.
     */
    public const VAL_CUSTOM_EMAIL_TEMPLATE_10 = 'CustomEmailTemplate10';

    /**
     * Constant for 'CustomEmailTemplate11' value.
     *
     * Custom email template 11.
     */
    public const VAL_CUSTOM_EMAIL_TEMPLATE_11 = 'CustomEmailTemplate11';

    /**
     * Constant for 'CustomEmailTemplate12' value.
     *
     * Custom email template 12.
     */
    public const VAL_CUSTOM_EMAIL_TEMPLATE_12 = 'CustomEmailTemplate12';

    /**
     * Constant for 'CustomEmailTemplate13' value.
     *
     * Custom email template 13.
     */
    public const VAL_CUSTOM_EMAIL_TEMPLATE_13 = 'CustomEmailTemplate13';

    /**
     * Constant for 'CustomEmailTemplate14' value.
     *
     * Custom email template 14.
     */
    public const VAL_CUSTOM_EMAIL_TEMPLATE_14 = 'CustomEmailTemplate14';

    /**
     * Constant for 'CustomEmailTemplate15' value.
     *
     * Custom email template 15.
     */
    public const VAL_CUSTOM_EMAIL_TEMPLATE_15 = 'CustomEmailTemplate15';

    /**
     * Constant for 'CustomEmailTemplate16' value.
     *
     * Custom email template 16.
     */
    public const VAL_CUSTOM_EMAIL_TEMPLATE_16 = 'CustomEmailTemplate16';

    /**
     * Constant for 'CustomEmailTemplate17' value.
     *
     * Custom email template 17.
     */
    public const VAL_CUSTOM_EMAIL_TEMPLATE_17 = 'CustomEmailTemplate17';

    /**
     * Constant for 'CustomEmailTemplate18' value.
     *
     * Custom email template 18.
     */
    public const VAL_CUSTOM_EMAIL_TEMPLATE_18 = 'CustomEmailTemplate18';

    /**
     * Constant for 'CustomEmailTemplate19' value.
     *
     * Custom email template 19.
     */
    public const VAL_CUSTOM_EMAIL_TEMPLATE_19 = 'CustomEmailTemplate19';

    /**
     * Constant for 'CustomEmailTemplate20' value.
     *
     * Custom email template 20.
     */
    public const VAL_CUSTOM_EMAIL_TEMPLATE_20 = 'CustomEmailTemplate20';

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
