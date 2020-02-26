<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing CharitySellerStatusCodeType
 *
 * Enumerated type defining the possible states for a seller's charity seller account.
 * XSD Type: CharitySellerStatusCodeType
 */
class CharitySellerStatusCodeType
{

    /**
     * Constant for 'Suspended' value.
     *
     * The seller's charity seller account is suspended.
     */
    public const VAL_SUSPENDED = 'Suspended';

    /**
     * Constant for 'Registered' value.
     *
     * The seller is a registered charity seller.
     */
    public const VAL_REGISTERED = 'Registered';

    /**
     * Constant for 'Closed' value.
     *
     * The seller is no longer a registered charity seller. The account with the PayPal
     * Giving Fund is closed.
     */
    public const VAL_CLOSED = 'Closed';

    /**
     * Constant for 'CreditCardExpired' value.
     *
     * The credit card associated with a seller's charity seller account has expired.
     */
    public const VAL_CREDIT_CARD_EXPIRED = 'CreditCardExpired';

    /**
     * Constant for 'TokenExpired' value.
     *
     * The token associated with a seller's charity seller account has expired.
     */
    public const VAL_TOKEN_EXPIRED = 'TokenExpired';

    /**
     * Constant for 'CreditCardAboutToExpire' value.
     *
     * The credit card associated with a seller's charity seller account will expire in
     * 15 (or fewer) days.
     */
    public const VAL_CREDIT_CARD_ABOUT_TO_EXPIRE = 'CreditCardAboutToExpire';

    /**
     * Constant for 'RegisteredNoCreditCard' value.
     */
    public const VAL_REGISTERED_NO_CREDIT_CARD = 'RegisteredNoCreditCard';

    /**
     * Constant for 'NotRegisteredLostDirectSellerStatus' value.
     *
     * The seller is no longer a registered charity seller and has lost direct seller
     * status.
     */
    public const VAL_NOT_REGISTERED_LOST_DIRECT_SELLER_STATUS = 'NotRegisteredLostDirectSellerStatus';

    /**
     * Constant for 'DirectDebitRejected' value.
     */
    public const VAL_DIRECT_DEBIT_REJECTED = 'DirectDebitRejected';

    /**
     * Constant for 'RegisteredDirectSeller' value.
     *
     * The seller is a registered direct seller, but has no credit card associated with
     * the charity seller account.
     */
    public const VAL_REGISTERED_DIRECT_SELLER = 'RegisteredDirectSeller';

    /**
     * Constant for 'RegisteredNoPaymentMethod' value.
     *
     * The seller is a registered charity seller with no donation payment method on
     * file.
     */
    public const VAL_REGISTERED_NO_PAYMENT_METHOD = 'RegisteredNoPaymentMethod';

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
