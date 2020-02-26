<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing SellerPIStatusCodeType
 *
 * This enumerated type is deprecated.
 * XSD Type: SellerPIStatusCodeType
 */
class SellerPIStatusCodeType
{

    /**
     * Constant for 'AcceptedUA' value.
     *
     * This value is not used.
     */
    public const VAL_ACCEPTED_UA = 'AcceptedUA';

    /**
     * Constant for 'MustAcceptUA' value.
     *
     * This value is not used.
     */
    public const VAL_MUST_ACCEPT_UA = 'MustAcceptUA';

    /**
     * Constant for 'PIEnabled' value.
     *
     * This value is not used.
     */
    public const VAL_PIENABLED = 'PIEnabled';

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
