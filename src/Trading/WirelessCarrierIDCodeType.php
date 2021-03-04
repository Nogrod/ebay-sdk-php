<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing WirelessCarrierIDCodeType
 *
 * This enumerated type contains a list of wireless carriers that may be providing SMS messages for a Platform Notifications subscriber.
 * XSD Type: WirelessCarrierIDCodeType
 */
class WirelessCarrierIDCodeType
{
    /**
     * Constant for 'Cingular' value.
     *
     * This value is no longer applicable, as Cingular is no longer in existence.
     */
    public const VAL_CINGULAR = 'Cingular';

    /**
     * Constant for 'TMobile' value.
     *
     * This value indicates that T-Mobile is providing SMS messages for the Platform
     * Notifications subscriber.
     */
    public const VAL_TMOBILE = 'TMobile';

    /**
     * Constant for 'Sprint' value.
     *
     * This value indicates that Sprint is providing SMS messages for the Platform
     * Notifications subscriber.
     */
    public const VAL_SPRINT = 'Sprint';

    /**
     * Constant for 'Nextel' value.
     *
     * This value is no longer applicable, as Nextel was purchased by Sprint.
     */
    public const VAL_NEXTEL = 'Nextel';

    /**
     * Constant for 'Verizon' value.
     *
     * This value indicates that Verizon is providing SMS messages for the Platform
     * Notifications subscriber.
     */
    public const VAL_VERIZON = 'Verizon';

    /**
     * Constant for 'CincinnatiBell' value.
     *
     * This value indicates that Cincinnati Bell is providing SMS messages for the
     * Platform Notifications subscriber.
     */
    public const VAL_CINCINNATI_BELL = 'CincinnatiBell';

    /**
     * Constant for 'Dobson' value.
     *
     * This value is no longer applicable, as Dobson is no longer in existence.
     */
    public const VAL_DOBSON = 'Dobson';

    /**
     * Constant for 'Alltel' value.
     *
     * This value is no longer applicable, as Alltel is no longer in existence.
     */
    public const VAL_ALLTEL = 'Alltel';

    /**
     * Constant for 'Leap' value.
     *
     * This value is no longer applicable, as Leap is no longer in existence.
     */
    public const VAL_LEAP = 'Leap';

    /**
     * Constant for 'USCellular' value.
     *
     * This value indicates that US Cellular is providing SMS messages for the Platform
     * Notifications subscriber.
     */
    public const VAL_USCELLULAR = 'USCellular';

    /**
     * Constant for 'Movistar' value.
     *
     * This value indicates that Movistar is providing SMS messages for the Platform
     * Notifications subscriber.
     */
    public const VAL_MOVISTAR = 'Movistar';

    /**
     * Constant for 'Amena' value.
     *
     * This value is no longer applicable, as Amena is no longer in existence.
     */
    public const VAL_AMENA = 'Amena';

    /**
     * Constant for 'Vodafone' value.
     *
     * This value indicates that Vodafone is providing SMS messages for the Platform
     * Notifications subscriber.
     */
    public const VAL_VODAFONE = 'Vodafone';

    /**
     * Constant for 'ATT' value.
     *
     * This value indicates that AT&T is providing SMS messages for the Platform
     * Notifications subscriber.
     */
    public const VAL_ATT = 'ATT';

    /**
     * Constant for 'CustomCode' value.
     *
     * This value is reserved for future use.
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
