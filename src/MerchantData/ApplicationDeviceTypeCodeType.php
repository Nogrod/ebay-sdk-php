<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing ApplicationDeviceTypeCodeType
 *
 * This enumerated type list the possible devices that may be running a affiliate user's application. The affiliate must mark the type of device that is running their application when the <b>PlaceOffer</b> call is made.
 * XSD Type: ApplicationDeviceTypeCodeType
 */
class ApplicationDeviceTypeCodeType
{
    /**
     * Constant for 'Browser' value.
     *
     * This enumeration value indicates that the user's application is running in a
     * browser.
     */
    public const VAL_BROWSER = 'Browser';

    /**
     * Constant for 'Wireless' value.
     *
     * This enumeration value indicates that the user's application is a wireless
     * application.
     */
    public const VAL_WIRELESS = 'Wireless';

    /**
     * Constant for 'Desktop' value.
     *
     * This enumeration value indicates that the user's application is a desktop
     * application.
     */
    public const VAL_DESKTOP = 'Desktop';

    /**
     * Constant for 'SetTopTVBox' value.
     *
     * This enumeration value indicates that the user's application is running through
     * a television set-top box.
     */
    public const VAL_SET_TOP_TVBOX = 'SetTopTVBox';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for future use.
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
