<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing FeenettingStatusCodeType
 *
 * This enumerated type contains values that indicate the current status of the seller's account for the fee netting mechanism. With fee netting, some selling fees like final value fee and payment processing fee will be deducted from seller payouts insted of eBay invoicing the seller for the fees.
 *  <br>
 *  <br>
 *  <span class="tablenote"><b>Note: </b>
 *  For a limited number of managed payments sellers, final value fees and payment processing fees will start getting deducted from seller payouts as early as mid-June 2020, but for many other managed payments sellers, these fees won't start getting deducted from seller payouts until mid-July 2020.
 *  </span>
 * XSD Type: FeenettingStatusCodeType
 */
class FeenettingStatusCodeType
{

    /**
     * Constant for 'Enabled' value.
     *
     * This value indicates that the account is enabled for managed payments and for
     * the fee netting mechanism. If a user sees this value, the <b>GetAccount</b>
     * response will include the <b>AccountSummary.NettedTransactionSummary</b>
     * container and the <b>AccountEntry.Netted</b> boolean field for each account
     * entry.
     */
    public const VAL_ENABLED = 'Enabled';

    /**
     * Constant for 'Disabled' value.
     *
     * This value indicates that the account is not enabled for eBay managed payments
     * or for the fee netting mechanism. This value is always returned for any seller
     * not in eBay managed payments.
     */
    public const VAL_DISABLED = 'Disabled';

    /**
     * Constant for 'Exempted' value.
     *
     * This value indicates that the account is enabled for eBay managed payments, but
     * the fee netting mechanism is not yet enabled for account.
     */
    public const VAL_EXEMPTED = 'Exempted';

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
