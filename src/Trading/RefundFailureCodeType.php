<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing RefundFailureCodeType
 *
 * This enumerated type is deprecated.
 * XSD Type: RefundFailureCodeType
 */
class RefundFailureCodeType
{

    /**
     * Constant for 'PaypalBillingAgreementCanceled' value.
     *
     * This value is not used.
     */
    public const VAL_PAYPAL_BILLING_AGREEMENT_CANCELED = 'PaypalBillingAgreementCanceled';

    /**
     * Constant for 'PaypalRiskDeclinesTransaction' value.
     *
     * This value is not used.
     */
    public const VAL_PAYPAL_RISK_DECLINES_TRANSACTION = 'PaypalRiskDeclinesTransaction';

    /**
     * Constant for 'CustomCode' value.
     *
     * This value is not used.
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
