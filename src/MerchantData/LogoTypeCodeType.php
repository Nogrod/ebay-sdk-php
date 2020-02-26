<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing LogoTypeCodeType
 *
 * This enumerated type is deprecated.
 * XSD Type: LogoTypeCodeType
 */
class LogoTypeCodeType
{

    /**
     * Constant for 'WinningBidderNotice' value.
     *
     * This field is deprecated.
     */
    public const VAL_WINNING_BIDDER_NOTICE = 'WinningBidderNotice';

    /**
     * Constant for 'Store' value.
     *
     * This field is deprecated.
     */
    public const VAL_STORE = 'Store';

    /**
     * Constant for 'Custom' value.
     *
     * This field is deprecated.
     */
    public const VAL_CUSTOM = 'Custom';

    /**
     * Constant for 'CustomCode' value.
     *
     * This field is deprecated.
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
