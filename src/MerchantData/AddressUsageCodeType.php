<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing AddressUsageCodeType
 *
 * This enumeration type lists the values that will be returned to the seller in a <b>GetOrders</b> call (and other order management calls) to indicate that the shipping address is the buyer's default shipping address, an alternative/secondary shipping address, or an invalid shipping address.
 * XSD Type: AddressUsageCodeType
 */
class AddressUsageCodeType
{

    /**
     * Constant for 'DefaultShipping' value.
     *
     * This value indicates that the shipping address provided by the buyer at checkout
     * time is the buyer's default/primary shipping address.
     */
    public const VAL_DEFAULT_SHIPPING = 'DefaultShipping';

    /**
     * Constant for 'Shipping' value.
     *
     * This value indicates that the shipping address provided by the buyer at checkout
     * time is one of the buyer's secondary shipping addresses on file with eBay.
     */
    public const VAL_SHIPPING = 'Shipping';

    /**
     * Constant for 'Invalid' value.
     *
     * This value indicates that the address is not valid, and an alternative address
     * will have to be provided before the order is shipped.
     */
    public const VAL_INVALID = 'Invalid';

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
