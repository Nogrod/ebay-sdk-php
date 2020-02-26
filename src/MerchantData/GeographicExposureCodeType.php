<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing GeographicExposureCodeType
 *
 * This enumerated type is used to indicate if an eBay site or category supports Motors National Listings and/or Motors Local Market listings.
 * XSD Type: GeographicExposureCodeType
 */
class GeographicExposureCodeType
{

    /**
     * Constant for 'National' value.
     *
     * If this enumeration value is returned, the eBay site or category only supports
     * Motors National Listings for the corresponding Motors dealer subscription
     * level/type.
     */
    public const VAL_NATIONAL = 'National';

    /**
     * Constant for 'LocalOnly' value.
     *
     * If this enumeration value is returned, the eBay site or category only supports
     * Motors Local Market Listings for the corresponding Motors dealer subscription
     * level/type.
     */
    public const VAL_LOCAL_ONLY = 'LocalOnly';

    /**
     * Constant for 'LocalOptional' value.
     *
     * If this enumeration value is returned, the eBay site or category supports Motors
     * National Listings and Motors Local Market listing for the corresponding Motors
     * dealer subscription level/type.
     */
    public const VAL_LOCAL_OPTIONAL = 'LocalOptional';

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
