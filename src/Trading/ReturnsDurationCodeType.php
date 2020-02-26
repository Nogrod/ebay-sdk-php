<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ReturnsDurationCodeType
 *
 * This enum defines the different options that are available for specifying the available return durations. This is the amount of time the seller gives the buyer for initiating a return once they receive the item.
 * XSD Type: ReturnsDurationCodeType
 */
class ReturnsDurationCodeType
{

    /**
     * Constant for 'Days_14' value.
     *
     * <code>Days_14</code> indicates the buyer has 14 days to initiate a return.
     */
    public const VAL_DAYS__14 = 'Days_14';

    /**
     * Constant for 'Days_30' value.
     *
     * <code>Days_30</code> indicates the buyer has 30 days to initiate a return.
     */
    public const VAL_DAYS__30 = 'Days_30';

    /**
     * Constant for 'Days_60' value.
     *
     * <code>Days_60</code> indicates the buyer has 60 days to initiate a return.
     */
    public const VAL_DAYS__60 = 'Days_60';

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
