<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing SellingManagerAutoRelistTypeCodeType
 *
 * Specifies the type of auto relist that will be performed.
 * XSD Type: SellingManagerAutoRelistTypeCodeType
 */
class SellingManagerAutoRelistTypeCodeType
{
    /**
     * Constant for 'RelistOnceIfNotSold' value.
     *
     * If the item is unsold, relist the item once.
     */
    public const VAL_RELIST_ONCE_IF_NOT_SOLD = 'RelistOnceIfNotSold';

    /**
     * Constant for 'RelistContinuouslyUntilSold' value.
     *
     * Relist the item continuously, until it is sold.
     */
    public const VAL_RELIST_CONTINUOUSLY_UNTIL_SOLD = 'RelistContinuouslyUntilSold';

    /**
     * Constant for 'RelistContinuously' value.
     *
     * Relist the item continuously.
     */
    public const VAL_RELIST_CONTINUOUSLY = 'RelistContinuously';

    /**
     * Constant for 'CustomCode' value.
     *
     * (out) Reserved for internal or future use.
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
