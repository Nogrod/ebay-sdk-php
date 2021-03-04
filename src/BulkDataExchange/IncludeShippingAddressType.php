<?php

namespace Nogrod\eBaySDK\BulkDataExchange;

/**
 * Class representing IncludeShippingAddressType
 *
 * Enumerated type defining the values that may be used in the <b>soldReportFilter.includeShippingAddress</b> field to control the output of buyers' shipping addresses in Merchant Data's <b>SoldReport</b> response.
 * XSD Type: IncludeShippingAddressType
 */
class IncludeShippingAddressType
{
    /**
     * Constant for 'Always' value.
     *
     * This value indicates that buyers' shipping address information should always be
     * emitted in Merchant Data's <b>SoldReport</b> response.
     */
    public const VAL_ALWAYS = 'Always';

    /**
     * Constant for 'CheckoutComplete' value.
     *
     * This value indicates that buyers' shipping address information should be emitted
     * in Merchant Data's <b>SoldReport</b> response only when payment has been
     * cleared.
     */
    public const VAL_CHECKOUT_COMPLETE = 'CheckoutComplete';

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
