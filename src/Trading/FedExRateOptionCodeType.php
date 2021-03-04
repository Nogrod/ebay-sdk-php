<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing FedExRateOptionCodeType
 *
 * This enumerated type consists of the different Federal Express shipping rates that sellers can offer to buyers. The shipping rates for the major US shipping carriers can be selected in the Shipping rate preferences in My eBay, or through the <b>SetUserPreferences</b> call.
 * XSD Type: FedExRateOptionCodeType
 */
class FedExRateOptionCodeType
{
    /**
     * Constant for 'FedExStandardList' value.
     *
     * This enumeration value indicates that the seller offers buyers the standard
     * Federal Express shipping rates.
     */
    public const VAL_FED_EX_STANDARD_LIST = 'FedExStandardList';

    /**
     * Constant for 'FedExCounter' value.
     *
     * This enumeration value indicates that the seller offers buyers Federal Express
     * counter rates.
     */
    public const VAL_FED_EX_COUNTER = 'FedExCounter';

    /**
     * Constant for 'FedExDiscounted' value.
     *
     * This enumeration value indicates that the seller offers buyers discounted
     * Federal Express shipping rates. Buyers will get these discounted shipping rates
     * as long as they use the eBay-generated shipping labels.
     */
    public const VAL_FED_EX_DISCOUNTED = 'FedExDiscounted';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for internal or future use
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
