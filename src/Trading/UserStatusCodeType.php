<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing UserStatusCodeType
 *
 * These codes indicate the current state or status of an eBay
 *  user account.
 * XSD Type: UserStatusCodeType
 */
class UserStatusCodeType
{
    /**
     * Constant for 'Unknown' value.
     *
     * This value indicates that the status of the user's eBay account is unknown. This
     * value should seldom, if ever, be returned and typically represents a problem.
     */
    public const VAL_UNKNOWN = 'Unknown';

    /**
     * Constant for 'Suspended' value.
     *
     * This value indicates that the eBay user's account is suspended. A user with a
     * suspended account cannot participate in buying or selling activity.
     */
    public const VAL_SUSPENDED = 'Suspended';

    /**
     * Constant for 'Confirmed' value.
     *
     * This value indicates that the eBay user's account is a confirmed, active
     * account.
     */
    public const VAL_CONFIRMED = 'Confirmed';

    /**
     * Constant for 'Unconfirmed' value.
     *
     * This value indicates that the eBay User has completed online registration, but
     * has either not responded to confirmation email or has not yet been sent the
     * confirmation email. Or, if this user began registration as a seller but did not
     * complete it, the user will have this status. A seller with this status can begin
     * to list an item but cannot complete the listing until the seller completes
     * seller registration.
     */
    public const VAL_UNCONFIRMED = 'Unconfirmed';

    /**
     * Constant for 'Ghost' value.
     *
     * This value indicates that the user originally registered on AuctionWeb
     * (pre-eBay), but that user never re-registered on eBay. Note that there are very
     * few (if any) eBay accounts in the 'Ghost' state.
     */
    public const VAL_GHOST = 'Ghost';

    /**
     * Constant for 'InMaintenance' value.
     *
     * This value indicates that the eBay user's account is in maintenance mode.
     */
    public const VAL_IN_MAINTENANCE = 'InMaintenance';

    /**
     * Constant for 'Deleted' value.
     *
     * This value indicates that the eBay user's account has been deleted.
     */
    public const VAL_DELETED = 'Deleted';

    /**
     * Constant for 'CreditCardVerify' value.
     *
     * This value indicates that the user has completed the registration and
     * confirmation process, but needs to complete verification of credit card
     * information. A user has this status if this user began registration as a seller
     * but did not complete it. A seller with this status can begin to list an item but
     * cannot complete the listing until the seller completes seller registration.
     */
    public const VAL_CREDIT_CARD_VERIFY = 'CreditCardVerify';

    /**
     * Constant for 'AccountOnHold' value.
     *
     * This value indicates that the eBay user's account is currently on hold. A common
     * reason for a user's account to go on hold is a non-payment of the monthly eBay
     * invoice. A user cannot sell or buy items if their account is on hold.
     */
    public const VAL_ACCOUNT_ON_HOLD = 'AccountOnHold';

    /**
     * Constant for 'Merged' value.
     *
     * This value indicates that the user record has been merged with another account
     * record for the same user
     */
    public const VAL_MERGED = 'Merged';

    /**
     * Constant for 'RegistrationCodeMailOut' value.
     *
     * This value indicates that the eBay User has completed online registration, and
     * eBay has just sent the user a registration code in a confirmation email. The
     * eBay user will have to respond to the confirmation email to get their account
     * confirmed.
     */
    public const VAL_REGISTRATION_CODE_MAIL_OUT = 'RegistrationCodeMailOut';

    /**
     * Constant for 'TermPending' value.
     *
     * This value indicates that the user has scheduled an account closure but eBay has
     * yet to process the closure request.
     */
    public const VAL_TERM_PENDING = 'TermPending';

    /**
     * Constant for 'UnconfirmedHalfOptIn' value.
     *
     * <span class="tablenote"><b>Note: </b> The Half.com site has been shut down, so
     * this value is no longer applicable.
     *  </span>
     *  User has completed the registration for Half.com and opted
     *  to automatically also be registered with eBay, but the
     *  registration confirmation is still pending
     */
    public const VAL_UNCONFIRMED_HALF_OPT_IN = 'UnconfirmedHalfOptIn';

    /**
     * Constant for 'CreditCardVerifyHalfOptIn' value.
     *
     * <span class="tablenote"><b>Note: </b> The Half.com site has been shut down, so
     * this value is no longer applicable.
     *  </span>
     *  User has completed the registration for Half.com and opted to automatically
     * also be registered with eBay, but the user needs to complete verification of
     * credit card information. A user has this status on eBay if this user began
     * registration as a seller but did not complete it. A seller with this status can
     * begin to list an item but cannot complete the listing until the seller completes
     * seller registration.
     */
    public const VAL_CREDIT_CARD_VERIFY_HALF_OPT_IN = 'CreditCardVerifyHalfOptIn';

    /**
     * Constant for 'UnconfirmedPassport' value.
     *
     * This value is no longer applicable.
     */
    public const VAL_UNCONFIRMED_PASSPORT = 'UnconfirmedPassport';

    /**
     * Constant for 'CreditCardVerifyPassport' value.
     *
     * This value is no longer applicable.
     */
    public const VAL_CREDIT_CARD_VERIFY_PASSPORT = 'CreditCardVerifyPassport';

    /**
     * Constant for 'UnconfirmedExpress' value.
     *
     * This value is no longer applicable.
     */
    public const VAL_UNCONFIRMED_EXPRESS = 'UnconfirmedExpress';

    /**
     * Constant for 'Guest' value.
     *
     * This value indicates that the user is a guest user. The user has not added a
     * password and has not confirmed an email address.
     *  The user has not signed up as a regular user, but has agreed to the User
     * Agreement and Privacy Policy.
     *  The user has been through the buying flow for a guest;
     *  the user has been through checkout using the streamlined Buy-It-Now flow.
     */
    public const VAL_GUEST = 'Guest';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for internal or future use
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
