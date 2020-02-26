<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing SellerDashboardAlertSeverityCodeType
 *
 * Alerts can be either informational or a warning that identifies a problem.
 * XSD Type: SellerDashboardAlertSeverityCodeType
 */
class SellerDashboardAlertSeverityCodeType
{

    /**
     * Constant for 'Informational' value.
     *
     * The alert message is informational in nature.
     *  <br><br>
     *  Some examples: you might get a PowerSeller status message if your PowerSeller
     *  level has been increased, a policy-compliance message if you have no recent
     *  policy violations, a buyer-satisfaction message if you are providing excellent
     *  customer service, or a seller-account message if there is a new notice
     * available
     *  about your payment status.
     */
    public const VAL_INFORMATIONAL = 'Informational';

    /**
     * Constant for 'Warning' value.
     *
     * The alert message is a warning that identifies a problem.
     *  <br><br>
     *  For example, you might get a PowerSeller status warning if you missed the
     *  PowerSeller sales requirements in the past month. Or you might get a
     *  policy-compliance warning if you recently listed an item with excessive
     *  shipping costs, or a seller-account warning if a collections message
     *  asks you to pay now to make sure no restrictions are placed on your account.
     */
    public const VAL_WARNING = 'Warning';

    /**
     * Constant for 'StrongWarning' value.
     *
     * The alert message is a strong warning that indicates a serious problem.
     *  <br><br>
     *  For example, you might get a PowerSeller status strong warning if you have lost
     *  your PowerSeller status because of policy violations, or you might get a
     *  policy-compliance strong warning if your account has been restricted.
     */
    public const VAL_STRONG_WARNING = 'StrongWarning';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for internal (or future) use.
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
