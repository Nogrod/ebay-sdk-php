<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing SellerAccountStatusCodeType
 *
 * Enumerated type that contains the different states of a seller's account.
 * XSD Type: SellerAccountStatusCodeType
 */
class SellerAccountStatusCodeType
{
    /**
     * Constant for 'Current' value.
     *
     * Your account is current.
     */
    public const VAL_CURRENT = 'Current';

    /**
     * Constant for 'PastDue' value.
     *
     * Your account is past due.
     */
    public const VAL_PAST_DUE = 'PastDue';

    /**
     * Constant for 'OnHold' value.
     *
     * Your account is on hold and risking suspension.
     */
    public const VAL_ON_HOLD = 'OnHold';

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
