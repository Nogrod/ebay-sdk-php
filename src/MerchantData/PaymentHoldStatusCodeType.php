<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing PaymentHoldStatusCodeType
 *
 * Enumerated type that contains the list of possible values that can be returned
 *  in the PaymentHoldStatus container.
 * XSD Type: PaymentHoldStatusCodeType
 */
class PaymentHoldStatusCodeType
{
    /**
     * Constant for 'PaymentReview' value.
     *
     * This value indicates a possible issue with a buyer. If this value is returned,
     *  the TransactionArray.Transaction.SellerPaidStatus field is returned as NotPaid
     *  in GetMyeBaySelling, and the TransactionArray.Transaction.BuyerPaidStatus field
     *  is returned as PaidWithPayPal in GetMyeBayBuying.
     */
    public const VAL_PAYMENT_REVIEW = 'PaymentReview';

    /**
     * Constant for 'MerchantHold' value.
     *
     * This value indicates a possible issue with a seller. If this value is returned,
     *  the TransactionArray.Transaction.SellerPaidStatus field is returned as
     *  PaidWithPayPal in GetMyeBaySelling, and the
     *  TransactionArray.Transaction.BuyerPaidStatus field is returned as
     * PaidWithPayPal
     *  in GetMyeBayBuying.
     */
    public const VAL_MERCHANT_HOLD = 'MerchantHold';

    /**
     * Constant for 'Released' value.
     *
     * This value indicates that a payment hold on the item has been released.
     */
    public const VAL_RELEASED = 'Released';

    /**
     * Constant for 'None' value.
     *
     * This value indicates that there is no payment hold on the item.
     */
    public const VAL_NONE = 'None';

    /**
     * Constant for 'NewSellerHold' value.
     *
     * This value indicates that there is a "new seller hold" on the item. PayPal
     *  may hold payments to a new seller for up to 21 days.
     *  Sellers are
     *  considered "new" until they have met all three criteria below:
     *  <ul>
     *  <li>More than 90 days have passed since first successful sale</li>
     *  <li>More than 25 domestic sales</li>
     *  <li>More than $250.00 in total sales</li>
     *  </ul>
     */
    public const VAL_NEW_SELLER_HOLD = 'NewSellerHold';

    /**
     * Constant for 'PaymentHold' value.
     *
     * This value indicates that there is a payment hold on the item.
     */
    public const VAL_PAYMENT_HOLD = 'PaymentHold';

    /**
     * Constant for 'ReleasePending' value.
     *
     * This value indicates that the process for the release of funds for the
     *  order has been initiated.
     */
    public const VAL_RELEASE_PENDING = 'ReleasePending';

    /**
     * Constant for 'ReleaseConfirmed' value.
     *
     * This value indicates that the funds are available in the seller's PayPal
     *  account.
     */
    public const VAL_RELEASE_CONFIRMED = 'ReleaseConfirmed';

    /**
     * Constant for 'ReleaseFailed' value.
     *
     * This value is no longer used.
     */
    public const VAL_RELEASE_FAILED = 'ReleaseFailed';

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
