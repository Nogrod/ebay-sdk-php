<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing RelistUseCaseCodeType
 *
 * RelistUseCaseCodeType - Type declaration to be used by other
 *  schema. Identifies the use case or mode for Relisting item.
 * XSD Type: RelistUseCaseCodeType
 */
class RelistUseCaseCodeType
{

    /**
     * Constant for 'Relist' value.
     *
     * Use case is Relist of existing item.
     */
    public const VAL_RELIST = 'Relist';

    /**
     * Constant for 'SellSimilar' value.
     *
     * Relist use case is Sell Similar.
     */
    public const VAL_SELL_SIMILAR = 'SellSimilar';

    /**
     * Constant for 'CustomCode' value.
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
