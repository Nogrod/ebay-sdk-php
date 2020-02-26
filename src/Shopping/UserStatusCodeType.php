<?php

namespace Nogrod\eBaySDK\Shopping;

/**
 * Class representing UserStatusCodeType
 *
 * Enumerated type that contains the different states of an eBay user account.
 * XSD Type: UserStatusCodeType
 */
class UserStatusCodeType
{

    /**
     * Constant for 'Unknown' value.
     *
     * This enumeration value indicates that the current state of the eBay user account
     * is unknown. This value should seldom, if ever, be returned and typically
     * represents a problem.
     */
    public const VAL_UNKNOWN = 'Unknown';

    /**
     * Constant for 'Suspended' value.
     *
     * This enumeration value indicates that the eBay user account is currently
     * suspended. This may be because the eBay user has violated eBay's user agreement.
     */
    public const VAL_SUSPENDED = 'Suspended';

    /**
     * Constant for 'Confirmed' value.
     *
     * This enumeration value indicates that the current state of the eBay user account
     * is confirmed and active. This is the most commonly returned value.
     */
    public const VAL_CONFIRMED = 'Confirmed';

    /**
     * Constant for 'Unconfirmed' value.
     *
     * This enumeration value indicates that the current state of the eBay user account
     * is unconfirmed. This value may be returned for a newly created acount, where the
     * registration process is still ongoing.
     */
    public const VAL_UNCONFIRMED = 'Unconfirmed';

    /**
     * Constant for 'Ghost' value.
     *
     * This enumeration value is rare, but may get returned for users who registered
     * quite a long time ago, but never re-registered as required.
     */
    public const VAL_GHOST = 'Ghost';

    /**
     * Constant for 'InMaintenance' value.
     *
     * This enumeration value indicates that eBay is currently making changes to the
     * eBay user account. This value is also rarely returned.
     */
    public const VAL_IN_MAINTENANCE = 'InMaintenance';

    /**
     * Constant for 'Deleted' value.
     *
     * This enumeration value indicates that eBay has deleted the user's account.
     */
    public const VAL_DELETED = 'Deleted';

    /**
     * Constant for 'CreditCardVerify' value.
     *
     * This enumeration value indicates that the new account has been created, but eBay
     * is in the process of verifying credit card information for the user.
     */
    public const VAL_CREDIT_CARD_VERIFY = 'CreditCardVerify';

    /**
     * Constant for 'AccountOnHold' value.
     *
     * This enumeration value indicates that the user's account is on hold, possibly
     * for non-payment of eBay seller fees.
     */
    public const VAL_ACCOUNT_ON_HOLD = 'AccountOnHold';

    /**
     * Constant for 'Merged' value.
     *
     * This enumeration value indicates that the user has more than one account, and
     * these accounts are in the process of getting merged.
     */
    public const VAL_MERGED = 'Merged';

    /**
     * Constant for 'RegistrationCodeMailOut' value.
     *
     * This enumeration value indicates that registration of the new account is pending
     * the new user responding to the confirmation email.
     */
    public const VAL_REGISTRATION_CODE_MAIL_OUT = 'RegistrationCodeMailOut';

    /**
     * Constant for 'TermPending' value.
     *
     * This enumeration value indicates that the user account has been scheduled for
     * account closure (typically when a user has requested to have their account
     * closed).
     */
    public const VAL_TERM_PENDING = 'TermPending';

    /**
     * Constant for 'UnconfirmedHalfOptIn' value.
     *
     * This value is no longer applicable as the Half.com site has been shut down.
     */
    public const VAL_UNCONFIRMED_HALF_OPT_IN = 'UnconfirmedHalfOptIn';

    /**
     * Constant for 'CreditCardVerifyHalfOptIn' value.
     *
     * This value is no longer applicable as the Half.com site has been shut down.
     */
    public const VAL_CREDIT_CARD_VERIFY_HALF_OPT_IN = 'CreditCardVerifyHalfOptIn';

    /**
     * Constant for 'UnconfirmedExpress' value.
     *
     * This value is no longer applicable as eBay Express listings no longer exist.
     */
    public const VAL_UNCONFIRMED_EXPRESS = 'UnconfirmedExpress';

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
