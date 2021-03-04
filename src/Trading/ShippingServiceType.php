<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ShippingServiceType
 *
 * This enumerated type defines the possible values that can be used in the <b>ShippingServiceType</b> field of the <b>ShippingServiceCostOverride</b> container.
 * XSD Type: ShippingServiceType
 */
class ShippingServiceType
{
    /**
     * Constant for 'Domestic' value.
     *
     * This value should be used if the seller is overriding shipping costs for all
     * domestic shipping services defined in the Business Policies shipping profile.
     */
    public const VAL_DOMESTIC = 'Domestic';

    /**
     * Constant for 'International' value.
     *
     * This value should be used if the seller is overriding shipping costs for all
     * international shipping services defined in the Business Policies shipping
     * profile.
     */
    public const VAL_INTERNATIONAL = 'International';

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
