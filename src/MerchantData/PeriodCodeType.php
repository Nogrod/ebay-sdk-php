<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing PeriodCodeType
 *
 * Type defining the time periods used when evaluating the number of unpaid item strikes that a buyer has against their account. A seller can set up listing-level Buyer Requirements in an Add/Revise/Relist call that will block a buyer if that buyer has a specified number of unpaid item strikes against their account during a specified time period.
 * XSD Type: PeriodCodeType
 */
class PeriodCodeType
{

    /**
     * Constant for 'Days_1' value.
     *
     * This value is no longer applicable.
     */
    public const VAL_DAYS__1 = 'Days_1';

    /**
     * Constant for 'Days_30' value.
     *
     * This value indicates that the evaluation period is set back 30 days from the
     *  present date.
     */
    public const VAL_DAYS__30 = 'Days_30';

    /**
     * Constant for 'Days_180' value.
     *
     * This value indicates that the evaluation period is set back 180 days
     * (approximately 6 months) from the present date.
     */
    public const VAL_DAYS__180 = 'Days_180';

    /**
     * Constant for 'Days_360' value.
     *
     * This value indicates that the evaluation period is set back 360 days
     * (approximately 12 months) from the present date.
     */
    public const VAL_DAYS__360 = 'Days_360';

    /**
     * Constant for 'Days_540' value.
     *
     * This value is no longer applicable.
     */
    public const VAL_DAYS__540 = 'Days_540';

    /**
     * Constant for 'CustomCode' value.
     *
     * This value is reserved for future or internal use.
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
